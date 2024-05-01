#include <windows.h>
#include <commctrl.h>
#include <stdio.h>
#include <io.h>

#include "resource.h"
#include "../keymanimx/keymanimx.h"

#define MAXWAIT 60

DWORD GetCRC32(LPVOID pv,UINT cb);

PSTR CAPTION="Keyman IMX Configuration Compiler";

KBHEADER Keyboard={0};
HWND hDlg;

DWORD Index[MAXINDEX];
PSTR IndexString=INDEXSTRING;
char CFGPath[MAX_PATH]={0}, CFXPath[MAX_PATH]={0};

int GetLogPixelsY()
{
	HDC hDC = GetDC(GetDesktopWindow());
	SetMapMode(hDC, MM_TEXT);
	int lfpixelsy = GetDeviceCaps(hDC, LOGPIXELSY);
	ReleaseDC(GetDesktopWindow(), hDC);
	return lfpixelsy;
}

void SetFont(LPLOGFONT plf, LPSTR name, int size, int style)
{
	plf->lfHeight         = -MulDiv(size, GetLogPixelsY(), 72);
	plf->lfWidth          = 0;
	plf->lfEscapement     = 0; 
	plf->lfOrientation    = 0;
	plf->lfWeight         = (style & FS_BOLD) ? FW_BOLD : FW_NORMAL;
	plf->lfItalic         = (style & FS_ITALIC) ? TRUE: FALSE;
	plf->lfUnderline      = FALSE;
	plf->lfStrikeOut      = FALSE;
//	plf->lfCharSet        = DEFAULT_CHARSET;	//SHIFTJIS_CHARSET;
	plf->lfCharSet        = (style & FC_SYMBOL) ? SYMBOL_CHARSET : 0;
	plf->lfOutPrecision   = OUT_DEFAULT_PRECIS;
	plf->lfClipPrecision  = CLIP_DEFAULT_PRECIS;
	plf->lfQuality        = DEFAULT_QUALITY;
	plf->lfPitchAndFamily = DEFAULT_PITCH | FF_DONTCARE;
	strcpy_s(plf->lfFaceName, sizeof plf->lfFaceName, name);
}

void AdjustFont(LPLOGFONT plf, PSTR q, PSTR sz, PSTR st)
{		
	int n;
	
	if(!q) return;

	strncpy_s(plf->lfFaceName, sizeof plf->lfFaceName, q, LF_FACESIZE-1); 
	plf->lfFaceName[LF_FACESIZE-1] = 0; 
	if(sz) 
	{
		if((n=atoi(sz)) <= 0) n = 10;
		plf->lfHeight = -MulDiv(n, GetLogPixelsY(), 72);
	}
	if(st)
	{
		if((n=atoi(st)) < 0) n = 0;
		plf->lfWeight = (n & FS_BOLD ? FW_BOLD : FW_NORMAL);
		plf->lfItalic = (n & FS_ITALIC ? TRUE : FALSE);
		plf->lfCharSet = (n & FC_SYMBOL ? SYMBOL_CHARSET : 0);
	}
}

BOOL unpackstr(PWCHAR p,PWCHAR pw,int pwlen)
{
	WCHAR qt=0, *pq;
	int tlen=0;

	while(*p)
	{
		switch(*p)
		{
		case ' ':
			p++; 
			break;
		case 34:
		case 39:
			qt = *p++;
			pq = wcschr(p,qt);
			if((!pq) || (tlen+pq-p >= pwlen)) return FALSE;
			wcsncpy_s(pw+tlen,pwlen-tlen,p,pq-p);
			tlen += (int)(pq-p);
			p = pq+1;
			break;
		case 'U':
		case 'u':
			p++;
			if(*p != '+') return FALSE;
		case 'X':
		case 'x':
			p++;
			*(pw+tlen) = (WORD)wcstoul(p, &p, 16);
			tlen++;
			break;
		case 'd':
		case 'D':
			p++;
			*(pw+tlen) = (WORD)wcstoul(p, &p, 10);
			tlen++;
			break;
		default:
			return FALSE;
		}
		if(tlen >= pwlen-1) break;
	}
	*(pw+tlen) = 0;
	return TRUE;
}

void UpdateMeter(int x)
{
	SendDlgItemMessage(hDlg,IDC_RELOADPROGRESS,PBM_SETPOS,x,0);
}

void SetMeterRange(int xmin,int xmax)
{
	SendDlgItemMessage(hDlg,IDC_RELOADPROGRESS,PBM_SETRANGE32,xmin,xmax);
}

void SetMeterCaption(PSTR pLabel, PSTR pText)
{
	char buf[256];
	wsprintf(buf,"%s %s",pLabel,pText);
	SetDlgItemText(hDlg,IDC_KBDNAME,buf);
}

int ParseCFG(KBHEADER *kbi, char *cfgfile, int *psize, FILE *ftemp)
{
	FILE *fp, *ft0;
	BOOL FGroups=FALSE, FRules=FALSE, FConfig=FALSE;
	WCHAR wc1, wstr[512];		
	PWSTR pinput, poutput, ptag;
	int k, k1, n, nread=0, nrules=0, Config=CFG_NONE;
	char q0, *p, *q, *sz, *st, str[512];
	PBYTE pBOM=(PBYTE)&str[0];
	TEMPRULE tmprule;
	
	// TODO: Consider doing all this in memory and avoiding temp files
	tmpfile_s(&ft0);

	// Set defaults
	strncpy_s(kbi->Flag,sizeof kbi->Flag, "KCFX",4);
	kbi->dwCfxVersion = CFXVERSION;
	kbi->nrules = 0;
	kbi->gridx = CELL_X;
	kbi->gridy = CELL_Y;
	kbi->dwFKeys = 1;								// allow use of function keys
	kbi->dwOptions = SM_FKEYS | (TM_OPTIONAL<<2);	// use function keys by default, optional tones
	*kbi->ToneChar = 0;
	kbi->cfgKey = MAKELONG(0xC0,0x11);	//default configuration hotkey is LCtrl Shift Backquote

	// Set default font properties
	SetFont(&kbi->lfMain, "Arial Unicode MS", 10, FS_NONE);
	SetFont(&kbi->lfInput, "MS Sans Serif", 8, FS_BOLD);
	SetFont(&kbi->lfTag, "MS Sans Serif", 8, FS_NONE);

	*psize = nrules = 0;

	// Open the CFG file, abort on error 
	if(fopen_s(&fp, cfgfile, "rb") != 0) return FALSE; 

	// must determine whether or not the config file is Unicode
	fread(pBOM,4,1,fp);

	if(*pBOM == '[') 
	{
		Config = CFG_ANSI; fseek(fp,0,SEEK_SET);
	}
	else if((*pBOM == 0xEF) && (*(pBOM+1) == 0xBB) && (*(pBOM+2) == 0xBF)) 
	{
		Config = CFG_UTF8; fseek(fp,3,SEEK_SET);
	}
	else if((*pBOM == 0xFF) && (*(pBOM+1) == 0xFE)) 
	{
		Config = CFG_UNICODE; fseek(fp,2,SEEK_SET);
	}

	else return FALSE;

	if(ftemp) 
	{
		SetMeterRange(0,3*_filelength(_fileno(fp)));
		SetMeterCaption("Parsing rules for ",kbi->name);
	}

	do 
	{
		if(Config == CFG_ANSI)
		{
			if(!fgets(str, 512, fp)) break;
			MultiByteToWideChar(CP_ACP, 0, str, -1, wstr, 512);
		}
		else if(Config == CFG_UTF8)
		{
			if(!fgets(str, 512, fp)) break;
			MultiByteToWideChar(CP_UTF8, 0, str, -1, wstr, 512);
		}
		else
		{
			if(!fgetws(wstr, 512, fp)) break;
		}
	
		if(wcschr(wstr, L'\r')) *wcschr(wstr, L'\r') = 0;
		if(wcschr(wstr, L'\n')) *wcschr(wstr, L'\n') = 0;

		if(wstr[0] == L'#' || wstr[0] == 0) continue;
				
		if(wstr[0] == L'[')
		{
			FConfig = FALSE; FRules = FALSE;
			if(!_wcsicmp(wstr, L"[config]"))      FConfig = TRUE;
			else if(!_wcsicmp(wstr, L"[rules]"))  FRules = TRUE;
		}
		else if(FConfig)
		{
			WideCharToMultiByte( CP_ACP, 0, wstr, -1, str, 512, NULL, NULL );

			char *sp;
			p = strtok_s(str, "= ", &sp); if(!p) continue;
			q = strtok_s(NULL, ",\r\n", &sp); if(!q) continue;
			sz = strtok_s(NULL, ",\r\n", &sp); 
			st = strtok_s(NULL, ",\r\n", &sp); 

			if(!_stricmp(p, "Name"))	// this must match, if a keyboard is selected.
				strcpy_s(kbi->name, sizeof kbi->name, q);
			else if(!_stricmp(p, "MainFont")) 
				AdjustFont( &kbi->lfMain, q, sz, st); 
			else if(!_stricmp(p, "InputFont")) 
				AdjustFont( &kbi->lfInput, q, sz, st); 
			else if(!_stricmp(p, "TagFont")) 
				AdjustFont( &kbi->lfTag, q, sz, st); 
			else if(!_stricmp(p, "Options")) 
				kbi->dwOptions = atoi(q); 
			else if(!_stricmp(p, "FKeys"))  
				kbi->dwFKeys = atoi(q); 
			else if(!_stricmp(p, "Wild") || !_stricmp(p,"WildCard")) 
			{
				if(strchr(q,'?')) kbi->dwWild |= WC_QUERY;
				if(strchr(q,'*')) kbi->dwWild |= WC_STAR;
				if(strchr(q,'\'')) kbi->dwWild |= WC_QUOTE;
				if(strchr(q,'-')) kbi->dwWild |= WC_DASH;
			}
			else if(!_stricmp(p, "Input"))
			{
				k = atoi(q); kbi->InputSize = min(max(k,16),100);
			}
			else if(!_stricmp(p, "Grid") || !_stricmp(p,"Cell"))
			{
				kbi->gridx = atoi(q);
				if(sz) kbi->gridy = atoi(sz); 
				else kbi->gridy = kbi->gridx;
			}
			else if(!_stricmp(p, "ToneChar") || !_stricmp(p, "ToneChars"))
				strcpy_s(kbi->ToneChar,sizeof kbi->ToneChar, q);
			else if(!_stricmp(p,"CfgHotKey"))
				kbi->cfgKey = MAKELONG(atoi(q),atoi(sz));
		}
		else if(FRules)
		{
			// exit if just reading configuration parameters
			if(ftemp == NULL) break;

			// parsing will not allow commas in strings at present
			wchar_t *wp;
			pinput = wcstok_s(wstr, L",\t", &wp); if(!pinput) continue;
			poutput = wcstok_s(NULL, L",\t\n", &wp); if(!poutput) continue;
			ptag = wcstok_s(NULL, L",\t\n", &wp); 

			// copy the rules to a temporary file and determine the memory needed
			ZeroMemory(&tmprule,sizeof tmprule);
			if(!unpackstr(pinput,tmprule.input,sizeof(tmprule.input)/sizeof(WCHAR))) continue;
			if(!unpackstr(poutput,tmprule.output,sizeof(tmprule.output)/sizeof(WCHAR))) continue;
			*psize += (int)(2*(wcslen(tmprule.input) + wcslen(tmprule.output)));
			if(ptag) 
			{
				unpackstr(ptag,tmprule.tag,sizeof(tmprule.tag)/sizeof(WCHAR));
				*psize += 2*(int)wcslen(tmprule.tag);
			}
			fwrite(&tmprule,sizeof tmprule,1,ft0);

			nrules++;
			
		}	
		if(nrules % 10 == 0) UpdateMeter(ftell(fp));
	} while(TRUE);
	
	fclose(fp);

	kbi->nrules = nrules;

	// Now merge the rules and index them
	if(ftemp)
	{
		k1=(int)strlen(IndexString);
		SetMeterRange(-k1,2*k1); UpdateMeter(0);
		SetMeterCaption("Sorting rules for ",kbi->name);

		// add all indexed rules
		for(k=n=0; k<k1; k++)
		{
			wc1 = (WCHAR)IndexString[k];
			fseek(ft0,0,SEEK_SET);
			Index[k] = n;
			while(fread(&tmprule,sizeof tmprule,1,ft0))
			{
				if(wc1 != tmprule.input[0]) continue;
				fwrite(&tmprule,sizeof tmprule,1,ftemp);
				n++;
			}
			UpdateMeter(k);
		}
		Index[k1] = n;

		// add any remaining unindexed rules
		fseek(ft0,0,SEEK_SET);
		while(fread(&tmprule,sizeof tmprule,1,ft0))
		{
			q0 = (char)tmprule.input[0];
			if(strchr(IndexString,q0) != NULL) continue;
			fwrite(&tmprule,sizeof tmprule,1,ftemp);
			n++;
		}
	}
	fclose(ft0);

	return TRUE;
}

UINT_PTR CALLBACK OFNHookProc(HWND hdlg,UINT uiMsg,WPARAM wParam,LPARAM lParam) {
	HWND hWnd;
	RECT rect;
	int x,y;

	if(uiMsg == WM_INITDIALOG)
	{
		hWnd = GetParent(hdlg);
		GetWindowRect(hWnd,&rect);
		x = GetSystemMetrics(SM_CXSCREEN)/2 - (rect.right-rect.left)/2;
		y = GetSystemMetrics(SM_CYSCREEN)/2 - (rect.bottom-rect.top)/2;
		SetWindowPos(hWnd,0,x,y,0,0,SWP_NOZORDER | SWP_NOSIZE);
	}
	return 0;
}

PSTR GetFileName(HWND hWnd,PSTR pBuf,UINT cbBuf)
{
	OPENFILENAME ofnTemp;
	PSTR szTypes = "IMX Configuration Files (*.cfg)\0*.cfg\0All Files (*.*)\0*.*\0";

	ofnTemp.lStructSize = sizeof ofnTemp;
	ofnTemp.hwndOwner = hWnd;
	ofnTemp.hInstance = 0;
	ofnTemp.lpstrFilter = szTypes;
	ofnTemp.lpstrCustomFilter = NULL;
	ofnTemp.nMaxCustFilter = 0;
	ofnTemp.nFilterIndex = 1;
	ofnTemp.lpstrFile = pBuf;	// Store the result in this variable
	ofnTemp.nMaxFile = cbBuf;
	ofnTemp.lpstrFileTitle = NULL;
	ofnTemp.nMaxFileTitle = 0;
	ofnTemp.lpstrInitialDir = NULL;
	ofnTemp.lpstrTitle = "Select Configuration File";	// Title for dialog
	ofnTemp.Flags = OFN_FILEMUSTEXIST | OFN_ENABLEHOOK | OFN_HIDEREADONLY | OFN_NONETWORKBUTTON | OFN_EXPLORER;
	ofnTemp.nFileOffset = 0;
	ofnTemp.nFileExtension = 0;
	ofnTemp.lpstrDefExt = "cfg";
	ofnTemp.lCustData = 0;
	ofnTemp.lpfnHook = OFNHookProc;
	ofnTemp.lpTemplateName = NULL;

	return GetOpenFileName(&ofnTemp) ? pBuf : NULL;
}

// Encrypt the string table
void EncryptStrings(KBHEADER *pk)
{
	BYTE *p0, *p1, *p;
	int n;

	p0 = (PBYTE)pk + pk->dwStrings;
	p1 = p0 + pk->cbStrings;
	

	for(p=p0,n=0; p<p1; p++,n++)
		*p += n;
}

BOOL SetFileToCurrentTime(HANDLE hFile)
{
    FILETIME ft;
    SYSTEMTIME st;
    BOOL f;

    GetSystemTime(&st);              
    SystemTimeToFileTime(&st, &ft);  
    f = SetFileTime(hFile,NULL,NULL,&ft);

    return f;
}

BOOL RebuildAll(HWND hwnd,KBHEADER *kbi)
{
	HMODULE hModuleKeyman32 = 0;
	HANDLE hFile=NULL, hMapObject=NULL;
	FILE *ftemp;
	PWCHAR pw, pw0;
	TEMPRULE tmprule;
	RULE *rp, *rp0;
	PBYTE pbmm;
	DWORD dwChecksum, *ip0;
	char buf[MAX_PATH],buf2[MAX_PATH]={0},drive[_MAX_DRIVE],dir[_MAX_DIR];
	int i, nrules, stsize, totalsize;

	tmpfile_s(&ftemp);

	if(!*CFGPath)
	{
		if(!GetModuleFileName(NULL, buf, sizeof buf)) return FALSE;
		_splitpath_s(buf,drive,sizeof drive, dir, sizeof dir, NULL, 0, NULL, 0);
		_makepath_s(CFGPath, sizeof CFGPath, drive, dir, "*", ".cfg");
	}

	if(!GetFileName(hwnd,CFGPath,MAX_PATH)) return FALSE;	

	// Get the keyboard name from the file (defaulting to the filename prefix)
	_splitpath_s(CFGPath, drive, sizeof drive, dir, sizeof dir, kbi->name, sizeof kbi->name, NULL, 0);

	// Read the Name configuration field, if any
	if(!ParseCFG(kbi,CFGPath,&stsize,NULL))
	{
		MessageBox(hwnd,"Invalid configuration file!",CAPTION,MB_ICONSTOP); 
		return FALSE;
	}

	wsprintf(buf,"Reloading %s",kbi->name);
	SetDlgItemText(hwnd,IDC_KBDNAME,buf);
	EnableDlgItem(hwnd,IDC_KBDNAME);
	EnableDlgItem(hwnd,IDC_RELOADPROGRESS);
	DisableDlgItem(hwnd,IDOK);
	DisableDlgItem(hwnd,IDCANCEL);

	wsprintf(buf,"Reloading %s failed!",kbi->name);

	_makepath_s(CFXPath, sizeof CFXPath, drive, dir, kbi->name, ".cfx");

	// Build the temporary file  
	if(ParseCFG(kbi,CFGPath,&stsize,ftemp) && (kbi->nrules > 0))
	{
		nrules = kbi->nrules;

    fseek(ftemp,0,SEEK_SET);

    kbi->dwIndex = sizeof(KBHEADER);
    kbi->dwRules = kbi->dwIndex + (sizeof Index);
    kbi->dwStrings = kbi->dwRules + (nrules+1)*sizeof(RULE);
    kbi->cbStrings = stsize;

    totalsize = kbi->dwStrings + kbi->cbStrings;
  
    hFile = CreateFile(CFXPath,GENERIC_READ+GENERIC_WRITE,FILE_SHARE_READ+FILE_SHARE_WRITE,NULL,
      OPEN_ALWAYS,FILE_ATTRIBUTE_NORMAL,0);

    if(hFile != INVALID_HANDLE_VALUE)
    {
      // Create an un-named temporary file-mapping object (allow for checksum)
      hMapObject = CreateFileMapping(hFile,NULL,PAGE_READWRITE,0,totalsize+4,NULL);
      if(hMapObject != NULL) 
      {		
        SetMeterRange(-2*nrules,nrules); UpdateMeter(0);
        SetMeterCaption("Compiling",kbi->name);


        // Get a pointer to file-mapped shared memory
        pbmm = (PBYTE)MapViewOfFile(hMapObject,FILE_MAP_WRITE,0,0,0);
        if( pbmm != NULL ) 
        {
          // Copy the loaded keyboard parameters to the memory mapped file
          *(KBHEADER *)pbmm = *kbi; 

          ip0 = (DWORD *)(pbmm + sizeof(KBHEADER));

          // Copy the index
          memcpy(ip0,&Index[0],sizeof Index);

          // Copy the rules
          rp = rp0 = (RULE *)(pbmm + sizeof(KBHEADER) + (sizeof Index));
          pw = pw0 = (PWCHAR)(rp + nrules + 1);

          for(i=0; i<nrules; i++, rp++) 
          {
            if(i%10 == 0)UpdateMeter(i);
            fread(&tmprule,sizeof tmprule,1,ftemp);
            rp->ilen = (BYTE)wcslen(tmprule.input);
            rp->olen = (BYTE)wcslen(tmprule.output);
            rp->tlen = (BYTE)wcslen(tmprule.tag);
            rp->input = (DWORD)(pw-pw0);
            wcscpy_s(pw0+rp->input, (sizeof (RULE)/sizeof (wchar_t))-rp->input, tmprule.input); pw += rp->ilen;
            rp->output = (DWORD)(pw-pw0);
            wcscpy_s(pw0+rp->output, (sizeof (RULE)/sizeof (wchar_t))-rp->output, tmprule.output); pw += rp->olen;
            rp->tag = (DWORD)(pw-pw0);
            wcscpy_s(pw0+rp->tag, (sizeof (RULE)/sizeof (wchar_t))-rp->tag, tmprule.tag); pw += rp->tlen;
            if(!*tmprule.tag) rp->tag = rp->input;
          }

          // And encrypt the string table
          EncryptStrings((KBHEADER *)pbmm);

          // Calculate the checksum
          dwChecksum = GetCRC32(pbmm,totalsize);
          memcpy(pbmm+totalsize,&dwChecksum,4);

          // Unmap the memory object
          UnmapViewOfFile(pbmm);
        
          wsprintf(buf,"%s recompiled, %d rules processed",kbi->name,kbi->nrules);
        }
        CloseHandle(hMapObject);
      }
      SetFileToCurrentTime(hFile);
      CloseHandle(hFile);
		}
	}

	_rmtmp(); 

	SetDlgItemText(hwnd,IDC_KBDNAME,buf);

	DisableDlgItem(hwnd,IDC_RELOADPROGRESS);
	EnableDlgItem(hwnd,IDOK);
	EnableDlgItem(hwnd,IDCANCEL);

	return (nrules > 0);
}

INT_PTR CALLBACK IMXRebuildProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam)
{		
	switch(msg)
	{
	case WM_INITDIALOG:
		hDlg = hwnd;
		DisableDlgItem(hwnd,IDC_RELOADPROGRESS);
		DisableDlgItem(hwnd,IDC_KBDNAME);

		return TRUE;

	case WM_COMMAND:
		switch(LOWORD(wParam))
		{
		case IDOK:
			RebuildAll(hwnd,&Keyboard);
			break;
		case IDCANCEL:
			EndDialog(hwnd,0);
			break;
		}
		break;
	}
	return FALSE;
}

int WINAPI WinMain(HINSTANCE hInst, HINSTANCE hPrevInst, LPSTR lpCmdLine, int cmdShow)
{
	INITCOMMONCONTROLSEX Controls;
	HANDLE hMutex=0;

	char buf[MAX_PATH]={0};

	hMutex = CreateMutex(NULL,FALSE,"KeymanIMXRebuildMutex");
	if(hMutex == NULL || GetLastError() == ERROR_ALREADY_EXISTS) return 0;

	Controls.dwSize = sizeof(INITCOMMONCONTROLSEX);
	Controls.dwICC = ICC_PROGRESS_CLASS;
	InitCommonControlsEx(&Controls);

	DialogBox(hInst,"CONFIGURE",NULL,IMXRebuildProc);

	return 0;
}


