#include <windows.h>
#include <stdio.h>
#include <io.h>

#include "resource.h"
#include "../keymanimx/keymanimx.h"

#define MAXWAIT 60

PSTR CAPTION="Keyman IMX Configuration";

BOOL Vertical, EnableTracking;
UINT DisplayMode;
KEYBOARD Kbd={0};

char drive[_MAX_DRIVE],dir[_MAX_DIR];

void WriteRegSetting(PSTR text, int value)
{
	HKEY hkey;
	if(RegCreateKeyEx(HKEY_CURRENT_USER, "Software\\Keyman\\KeymanIMX\\10.0", 0, NULL, NULL, KEY_ALL_ACCESS, NULL, &hkey, NULL) == ERROR_SUCCESS)
	{
		RegSetValueEx(hkey, text, 0, REG_DWORD, (PBYTE) &value, 4);
		RegCloseKey(hkey);
	}
}

int ReadRegSetting(PSTR text, int dflt)
{
	HKEY hkey;
	DWORD value, sz=4, tp=REG_DWORD;

	if(RegOpenKeyEx(HKEY_CURRENT_USER, "Software\\Keyman\\KeymanIMX\\10.0", 
		0, KEY_ALL_ACCESS | KEY_WOW64_32KEY, &hkey) == ERROR_SUCCESS)
	{
		if(RegQueryValueEx(hkey, text, 0, &tp, (PBYTE) &value, &sz) == ERROR_SUCCESS)
			dflt = value;
		RegCloseKey(hkey);
	}
	return dflt;
}

BOOL ReadConfiguration(void)
{
	char key[128]="IMX: ";

	Vertical = ReadRegSetting("IMX z",FALSE) ? TRUE : FALSE;
	EnableTracking = ReadRegSetting("IMX track",TRUE) ? TRUE : FALSE;
	DisplayMode = ReadRegSetting("IMX match",DM_LIMITED);

	if(*Kbd.h.name) 
	{
		strcat_s(key, sizeof key, Kbd.h.name);
		Kbd.h.dwOptions = ReadRegSetting(key,Kbd.h.dwOptions);
	}

	return TRUE;
}

BOOL SaveConfiguration(void)
{
	char key[128]="IMX: ";

	WriteRegSetting("IMX track", EnableTracking);
	WriteRegSetting("IMX z", Vertical);
	WriteRegSetting("IMX match", DisplayMode);

	if(*Kbd.h.name)
	{
		strcat_s(key, sizeof key, Kbd.h.name);
		WriteRegSetting(key,Kbd.h.dwOptions);
	}
	return TRUE;
}

INT_PTR CALLBACK IMXConfigProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam)
{
	PSTR p=(PSTR)lParam;
	int n, dMode, sMode, tMode, sBits=0, tBits=0, uBits=0, Unique, Duplicates;
	int ctrlID[] = {IDC_KBDNAME,IDC_SELECTION,IDC_SELECT1,IDC_SELECT2,IDC_SELECT3,
		IDC_SELECT4,IDC_TONES,IDC_TONE1,IDC_TONE2,IDC_TONE3,IDC_SELECTUNIQUE};
		
	switch(msg)
	{
	case WM_INITDIALOG:
		dMode = DisplayMode == DM_LIMITED ? IDC_MATCH1 : IDC_MATCH2;
		CheckDlgButton(hwnd,IDC_VERTICAL,Vertical?BST_CHECKED:BST_UNCHECKED);
		CheckDlgButton(hwnd,IDC_HORIZONTAL,Vertical?BST_UNCHECKED:BST_CHECKED);
		CheckDlgButton(hwnd,IDC_TRACK,EnableTracking?BST_CHECKED:BST_UNCHECKED);
		CheckRadioButton(hwnd,IDC_MATCH1,IDC_MATCH2,dMode); 

		// Set dialog buttons according to currently saved options
		if(*Kbd.h.name) 
		{
			char tkeys[32]="Tone keys";

			for(n=0; n<sizeof(ctrlID)/sizeof(int); n++)
				EnableDlgItem(hwnd,ctrlID[n]);

			if(*Kbd.h.ToneChar) wsprintf(strchr(tkeys,0),": %s",Kbd.h.ToneChar);

			SetDlgItemText(hwnd,IDC_KBDNAME,Kbd.h.name);
			SetDlgItemText(hwnd,IDC_TONES,tkeys);

			switch((sBits=Kbd.h.dwOptions & SELECTIONBITS))
			{
			case SM_DEFAULT:
				sMode = IDC_SELECT1; break;
			case SM_KEYPAD:
				sMode = IDC_SELECT2; break;
			case SM_ALLDIGITS:
				sMode = IDC_SELECT3; break;
			case SM_FKEYS:
				sMode = IDC_SELECT4; break;
			}

			switch((tBits=(Kbd.h.dwOptions & TONEBITS)>>2))
			{
			case TM_NEVER:
				tMode =IDC_TONE1; break;
			case TM_ALWAYS:
				tMode =IDC_TONE2; break;
			case TM_OPTIONAL:
				tMode =IDC_TONE3; break;
			}

			Unique = (Kbd.h.dwOptions & SELECTIFUNIQUE) ? BST_CHECKED : BST_UNCHECKED;
			Duplicates = (Kbd.h.dwOptions & SHOWDUPLICATES) ? BST_CHECKED : BST_UNCHECKED;

			CheckRadioButton(hwnd,IDC_SELECT1,IDC_SELECT4,sMode); 
			CheckRadioButton(hwnd,IDC_TONE1,IDC_TONE3,tMode); 
			CheckDlgButton(hwnd,IDC_SELECTUNIQUE,Unique); 
			CheckDlgButton(hwnd,IDC_SHOWDUPLICATES,Duplicates); 

			// Set other constraints
			if(Kbd.h.dwFKeys == 0) DisableDlgItem(hwnd,IDC_SELECT4);
		}
		else 
		{
			for(n=0; n<sizeof(ctrlID)/sizeof(int); n++)
				DisableDlgItem(hwnd,ctrlID[n]);
		}

		ShowWindow(hwnd,SW_SHOWNORMAL);
		return TRUE;

	case WM_COMMAND:
		switch(LOWORD(wParam))
		{
		case IDC_VERTICAL:
		case IDC_HORIZONTAL:
			Vertical = IsDlgButtonChecked(hwnd,IDC_VERTICAL);
			if(Vertical)
			{
				CheckDlgButton(hwnd,IDC_TRACK,BST_UNCHECKED);
				EnableWindow(GetDlgItem(hwnd,IDC_TRACK),FALSE);
			}
			else
			{
				EnableWindow(GetDlgItem(hwnd,IDC_TRACK),TRUE);
				if(MessageBox(hwnd,"Enable cursor tracking?",CAPTION,MB_YESNO+MB_ICONQUESTION) == IDYES)
				{
					CheckDlgButton(hwnd,IDC_TRACK,BST_CHECKED);
				}
			}
		break;

		case IDCANCEL:
			EndDialog(hwnd,FALSE);
			break;

		case IDOK:
			Vertical = IsDlgButtonChecked(hwnd,IDC_VERTICAL);
			EnableTracking = IsDlgButtonChecked(hwnd,IDC_TRACK);
			if(IsDlgButtonChecked(hwnd,IDC_MATCH1)) DisplayMode = DM_LIMITED;
			else if(IsDlgButtonChecked(hwnd,IDC_MATCH2)) DisplayMode = DM_FULL;
			
			// Read dialog settings and save as options
			if(*Kbd.h.name)
			{
				if(IsDlgButtonChecked(hwnd,IDC_SELECT1)) sBits = SM_DEFAULT;
				else if(IsDlgButtonChecked(hwnd,IDC_SELECT2)) sBits = SM_KEYPAD;
				else if(IsDlgButtonChecked(hwnd,IDC_SELECT3)) sBits = SM_ALLDIGITS;
				else if(IsDlgButtonChecked(hwnd,IDC_SELECT4)) sBits = SM_FKEYS;

				if(IsDlgButtonChecked(hwnd,IDC_TONE1)) tBits = TM_NEVER;
				else if(IsDlgButtonChecked(hwnd,IDC_TONE2)) tBits = TM_ALWAYS;
				else if(IsDlgButtonChecked(hwnd,IDC_TONE3)) tBits = TM_OPTIONAL;

				if(IsDlgButtonChecked(hwnd,IDC_SELECTUNIQUE)) uBits = SELECTIFUNIQUE;
				if(IsDlgButtonChecked(hwnd,IDC_SHOWDUPLICATES)) uBits = SHOWDUPLICATES;

				Kbd.h.dwOptions = sBits + (tBits<<2) + uBits;
			}

			EndDialog(hwnd,TRUE);
			break;
		}
		break;
	}
	return FALSE;
}

int WINAPI WinMain(HINSTANCE hInst, HINSTANCE hPrevInst, LPSTR lpCmdLine, int cmdShow)
{
	LPSTR p,p1;
	HANDLE hMutex=0, hMapObject=NULL;
	KBHEADER *pkbh;
	DWORD DfltOptions=0;

	char buf[MAX_PATH]={0}, mapfile[256];

	hMutex = CreateMutex(NULL,FALSE,"KeymanIMXConfigurationMutex");
	if(hMutex == NULL || GetLastError() == ERROR_ALREADY_EXISTS) return 0;

	// Either Tike or Keyman must be executing
	if(!FindWindow("TfrmTike",NULL) && !FindWindow("Keyman50",NULL) && !FindWindow("TfrmKeyman7Main",NULL)) return FALSE;

	// Get path of this exe
	if(!GetModuleFileName(NULL,buf,MAX_PATH)) return FALSE;
	_splitpath_s(buf, drive, sizeof drive, dir, sizeof dir, NULL, 0, NULL, 0);

	// Check for Win9x command line first
	if((p=strstr(lpCmdLine,"imxconfig.exe")))
	{
		for(p+=strlen("imxconfig.exe"); *p; p++) if(!isspace(*p)) break;
	}
	else
	{
		p = lpCmdLine;
	}

	if(p && *p) 
	{
		if(*p == 34 || *p == 39)
		{
			p1 = strchr(p+1,*p);
			p++; 
		}
		else
		{
			p1 = strchr(p,0);
		}
		if(p1 == NULL) p1 = strchr(p,0);

		strncpy_s(Kbd.h.name, sizeof Kbd.h.name, p,min(127,p1-p));
		Kbd.rules = NULL;

	}
	
	// Test if the memory-mapped file image exists
	wsprintf(mapfile, "keyman_imx_%s", Kbd.h.name);

	// Open mapping object (if already created by another application)
	hMapObject = OpenFileMapping(FILE_MAP_READ,FALSE,mapfile);

	if(hMapObject)
	{
		// Get a pointer to shared memory
		if((pkbh=(KBHEADER *)MapViewOfFile(hMapObject,FILE_MAP_READ,0,0,sizeof(KBHEADER))) != NULL )
		{
			strcpy_s(Kbd.h.ToneChar, sizeof Kbd.h.ToneChar, pkbh->ToneChar); 
			Kbd.h.dwOptions = pkbh->dwOptions;
			Kbd.h.dwFKeys = pkbh->dwFKeys;
			UnmapViewOfFile(pkbh); CloseHandle(hMapObject); 
		}
	}

	ReadConfiguration();
	if(DialogBox(hInst,"CONFIGURE",NULL,IMXConfigProc)) SaveConfiguration();

	return 0;
}
