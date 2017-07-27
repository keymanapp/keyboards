#define STRICT

#include <windows.h>
#include <stdio.h>
#include "imxlib.h"
#include "keymanimx.h"

#define WS_EX_NOACTIVATE        0x08000000L
#define WM_REDRAW				(WM_USER+200)

#define ELLIPSIS		0x2026	// ellipsis (Unicode) character

//#define TESTING

#ifdef TESTING
#define returnErr(value)	{Log("Error at line ",__LINE__,GetLastError());return(value);}
char tdbg[256];
void dbgLog(void)
{
	FILE *fp;

	if((fp=fopen("c:\\KeymanIMX.log", "at")))
	{
		fprintf(fp, "%s\n",tdbg);
		fclose(fp);
	}
}

// Overload the debug reporter to simplify use
void Log(char *s)
{
	wsprintf(tdbg, "%s\n",s);
	dbgLog();
}
void Log(char *s, char *t)
{
	wsprintf(tdbg, "%s %s\n",s,t);
	dbgLog();
}
void Log(char *s, char *t, int n)
{
	wsprintf(tdbg, "%s %s (%x)\n",s,t,n);
	dbgLog();
}
void Log(char *s, int n)
{
	wsprintf(tdbg, "%s %d (%x)\n",s,n,n);
	dbgLog();
}
void Log(char *s, int m, int n)
{
	wsprintf(tdbg, "%s %d (%x)\n",s,m,n);
	dbgLog();
}
void Log(PWCHAR s, PWCHAR t)
{
	char s1[48], t1[48];
	WideCharToMultiByte(CP_ACP,0,s,-1,s1,48,NULL,NULL);
	WideCharToMultiByte(CP_ACP,0,t,-1,t1,48,NULL,NULL);
	wsprintf(tdbg, "%s %s\n",s1,t1);
	dbgLog();
}
void Log(char *p, PWCHAR s, int n)
{
	char s1[48];
	WideCharToMultiByte(CP_ACP,0,s,n,s1,48,NULL,NULL);
	wsprintf(tdbg, "%s %s\n",p,s1);
	dbgLog();
}

#else
#define returnErr(value)    {return (value);}
void Log(char *s){}
void Log(char *s, char *t){}
void Log(char *s, int n){}
void Log(char *s, int m, int n){}
void Log(PWCHAR s, PWCHAR t){}
void Log(char *p, PWCHAR s, int n){}
#endif

UINT Error=ERR_UNKNOWN;
HWND hwnd=0, hwndChild=0;
HINSTANCE hDllInst=0;
UINT wm_keymanim_close = 0, wm_keymanim_contextchanged;
HBITMAP hbmp[MAXBMP]={0};
BOOL EnableTracking=TRUE, Tracking=TRUE;
UINT DisplayMode=DM_LIMITED;
int CellStart[MAXACTIVERULES+1]={0};
BOOL UserResize=TRUE, Vertical=FALSE, NumericMode=FALSE;

POINTS IMPos={0,0}, IMSize={IM_WIDTH,IM_HEIGHT}, CellSize={CELL_X,CELL_Y};
int IMBorders=IMBORDERS, CWBorders=CWBORDERS, InputSize=INPUTWIDTH, IMWidth=0;

enum tagRect {RECT_UP=0,RECT_DOWN,RECT_TRACK,RECT_ORIENT,RECT_CONFIG,RECT_LOGO};

enum tagBmp {BMP_LOGO=0,BMP_VERT,BMP_HORIZ,BMP_CANT_TRACK,BMP_DONT_TRACK,BMP_TRACK,
	BMP_LEFT0,BMP_LEFT1,BMP_RIGHT0,BMP_RIGHT1,BMP_UP0,BMP_UP1,BMP_DOWN0,BMP_DOWN1,BMP_CONFIG};

PSTR rnBmp[MAXBMP] = {"LOGO","VERTICAL","HORIZONTAL","T_GRAY","T_RED","T_GREEN",
	"LEFT0","LEFT1","RIGHT0","RIGHT1","UP0","UP1","DOWN0","DOWN1","CONFIG"};

int ScrollPos=0, MaxScrollBoxes=0, nCells, MaxCells=9;
RULE *ActiveRule[MAXACTIVERULES] = {NULL};
KEYBOARD *Keyboards = NULL, *CurKbd = NULL;
WCHAR ContextBuf[16]={0};
PSTR IndexString = INDEXSTRING;
BOOL MouseSelection=TRUE,CountAll=FALSE,ExtendMatch=FALSE;
int nKeyboards;

LRESULT CALLBACK IMXWndProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam);
LRESULT CALLBACK IMXChildWndProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam);

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMReloadConfig(PSTR KeyboardName);
void WriteRegSetting(PSTR text, int value);
int ReadRegSetting(PSTR text, int dflt);
void UnloadRules(PSTR KeyboardName);
BOOL LoadRules(PSTR KeyboardName);
void DeleteKeyboard(PSTR KeyboardName);
void CreateKeyboard(PSTR KeyboardName);
int FillActiveRules(WCHAR KeyChar);
BOOL IsHexString(PWSTR pContext, UINT lBuf, WCHAR wChar);
BOOL OutputUnicode(PWSTR pContext, UINT lBuf);
BOOL CompleteRule(RULE *r,int Mode);
BOOL GetIMDimensions(int nCells,PWCHAR pin);
BOOL ReadConfiguration(BOOL All);
BOOL SaveIMXPosition(void);
void SendKey(int vk);
BOOL IsRegistered(UINT keyID);
DWORD GetCRC32(LPVOID pv,UINT cb);

/************************************************************************************************************
 * DLL entry functions          
 ************************************************************************************************************/

BOOL WINAPI DllMain(HINSTANCE hInst, DWORD fdwReason, LPVOID lpvReserved)
{
	switch(fdwReason)
	{
	case DLL_PROCESS_ATTACH:
		hDllInst = hInst;
		break;

    case DLL_PROCESS_DETACH:
		hDllInst = NULL;
        break;
	}
	return TRUE;
}

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMDestroy(PSTR KeyboardName)
{
	int n;

	for(n=0; n<MAXBMP; n++)
	{
		if(hbmp[n]) 
		{
			DeleteObject(hbmp[n]); hbmp[n] = 0;
		}
	}
	
	if(hwnd) 
	{
		DestroyWindow(hwnd); hwnd = 0;
	}

	UnregisterClass("KM_IMX", hDllInst);
	UnregisterClass("KM_IMXChild", hDllInst);

	// Unload the mapped memory and delete the keyboard from this app's memory space
	UnloadRules(KeyboardName);
	DeleteKeyboard(KeyboardName);

	CurKbd = NULL;

	return TRUE;
}

// Return the index of the current keyboard
int KeyboardIndex(PSTR KeyboardName)
{
	int n;

	if(!KeyboardName) return nKeyboards;

	for(n=0; n<nKeyboards; n++)
	{
		if(!_stricmp(KeyboardName, Keyboards[n].h.name)) break;
	}
	return n;
}

// Load the mapped memory with the configuration rules and create the IMX windows 
extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMInit(PSTR KeyboardName)
{
	WNDCLASS wc;
	char bmpPath[_MAX_PATH], *p;
	int n;

	if(hbmp[BMP_LOGO]) 
	{
		DeleteObject(hbmp[BMP_LOGO]); hbmp[BMP_LOGO] = 0;
	}

	GetModuleFileName(hDllInst,bmpPath,_MAX_PATH);
	if((p=strrchr(bmpPath,'\\')) != NULL)
	{
		strcpy_s(p+1, sizeof bmpPath - (p+1-bmpPath), KeyboardName); strcat_s(p+1, sizeof bmpPath - (p+1-bmpPath), ".bmp");
		hbmp[BMP_LOGO] = (HBITMAP)LoadImage(0,bmpPath,IMAGE_BITMAP,16,16,LR_LOADFROMFILE);
	}

	for(n=0; n<MAXBMP; n++)
	{
		if(!hbmp[n]) hbmp[n] = LoadBitmap(hDllInst, rnBmp[n]);
	}

	wm_keymanim_close = RegisterWindowMessage("WM_KEYMANIM_CLOSE");
	wm_keymanim_contextchanged = RegisterWindowMessage("WM_KEYMANIM_CONTEXTCHANGED");

	if(!GetClassInfo(hDllInst, "KM_IMX", &wc))
	{
		SetLastError(0);
		wc.style = CS_VREDRAW | CS_HREDRAW | CS_DBLCLKS;// | CS_SAVEBITS;
		wc.lpfnWndProc = (WNDPROC) IMXWndProc;
		wc.cbClsExtra = 0;
		wc.cbWndExtra = 0;
		wc.hInstance = hDllInst;
		wc.hIcon = NULL;
		wc.hCursor = NULL;	// this must be NULL for correct non-client behaviour
		wc.hbrBackground = (HBRUSH) GetStockObject(WHITE_BRUSH);
		wc.lpszMenuName = NULL;
		wc.lpszClassName = "KM_IMX";
		if(!RegisterClass(&wc)) returnErr(FALSE);
		
		wc.lpfnWndProc = (WNDPROC) IMXChildWndProc;
		wc.lpszClassName = "KM_IMXChild";
		if(!RegisterClass(&wc)) returnErr(FALSE);
	}

	// Load keyboard data before creating windows
	if(!KeymanIMReloadConfig(KeyboardName)) returnErr(FALSE);

	// Since this is called for each keyboard, must only create the window once
	//   The height and width are normally redefined, but are set to allow an error message to be
	//   displayed if the configuration file is missing or invalid
	if(hwnd == NULL) 
	{
		hwnd = CreateWindowEx(WS_EX_TOOLWINDOW | WS_EX_TOPMOST,"KM_IMX","Keyman IMX", 
			WS_THICKFRAME | WS_POPUP | WS_BORDER,0,0,400,56,NULL,NULL,hDllInst,NULL);
		if(hwnd == NULL) returnErr(FALSE);
	}

	return TRUE;
}

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMReloadConfig(PSTR KeyboardName)
{
	HANDLE hMutex=NULL;
	char mutex[256];

	CurKbd = NULL;
	
	Log("Entering KeymanIMReloadConfig");
	Log(KeyboardName);

	// LoadRules uses a callback to get the full path, otherwise PrepIM not needed
	if(!PrepIM(TRUE)) returnErr(FALSE);

	wsprintf(mutex,"keyman_imx_load_%s",KeyboardName);
	hMutex = CreateMutex(NULL,FALSE,mutex);
		
	if(WaitForSingleObject(hMutex,10000) != WAIT_OBJECT_0)
	{
	  Log("KeymanIMReloadConfig: failed to capture mutex");
	  return FALSE;
	}

	CreateKeyboard(KeyboardName);

	if(!LoadRules(KeyboardName)) MessageBeep(MB_ICONASTERISK);

	ReleaseMutex(hMutex);

	Log("KeymanIMReloadConfig: successful");
	return TRUE;
}

/************************************************************************************************************
 * IM Events                     
 ************************************************************************************************************/

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMActivate(PSTR KeyboardName)
{
	int nkbi;

	CurKbd = NULL;

	if(!PrepIM(TRUE)) returnErr(FALSE);

	if((nkbi=KeyboardIndex(KeyboardName)) == nKeyboards) returnErr(FALSE);

	CurKbd = &Keyboards[nkbi];

	ScrollPos = 0; *ContextBuf = 0;

	// Display IM window (with error message) keyboard is invalid
	if(CurKbd->h.nrules == 0 && hwnd) (*KMDisplayIM)(hwnd,TRUE);	

	return(TRUE);
}

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMDeactivate(PSTR KeyboardName)
{

	CurKbd = NULL;

	if(!PrepIM(TRUE)) return FALSE;

	SaveIMXPosition();
	(*KMHideIM)();

	return TRUE;
}

/************************************************************************************************************
 * Window management functions
 ************************************************************************************************************/

// Calculate the cell and window dimensions for the IM window
//   For the horizontal window, each cell wifth can change, 
//   but for the vertical window, only the window width varies 
BOOL GetIMDimensions(int nCells,PWCHAR pin)
{
	HDC hDC;
	int i, pwlen, CellWidth[MAXACTIVERULES];
	PWCHAR pw;
	SIZE Size={0};
	char Index[4];

	HFONT hfMain, hfInput, hfTag;

	// Create logical fonts
	hfMain = CreateFontIndirect(&CurKbd->h.lfMain);
	hfInput = CreateFontIndirect(&CurKbd->h.lfInput);
	hfTag = CreateFontIndirect(&CurKbd->h.lfTag);

	// Set default cell widths
	for(i=0; i<MAXACTIVERULES; i++ ) CellWidth[i] = CellSize.x;

	IMWidth = INPUTWIDTH; // default only

	// Can only replace defaults (or old values) if KEYBOARD and windows defined  
	if(CurKbd && hwnd && hwndChild && pin)
	{
		hDC = GetDC(hwnd);
		SelectObject(hDC,hfInput);
		GetTextExtentPoint32W(hDC,pin,(int)wcslen(pin),&Size);
		InputSize = Size.cx + 4;
		IMWidth = InputSize + 4;
		if(InputSize < INPUTWIDTH) InputSize = INPUTWIDTH;
		ReleaseDC(hwnd,hDC);

		hDC = GetDC(hwndChild);
		SelectObject(hDC, hfMain);
		for(i=0; i<nCells; i++)
		{
			if(!ActiveRule[i]) break;
			pw = CurKbd->pst+ActiveRule[i]->output; pwlen = ActiveRule[i]->olen;
			GetTextExtentPoint32W(hDC, pw, pwlen, &Size);
			CellWidth[i] = Size.cx + 2;	// add whitespace of 2 px
		}

		SelectObject(hDC, hfTag);
		for(i=0; i<nCells; i++)
		{
			if(!ActiveRule[i]) break;

			_itoa_s(i+1, Index, sizeof Index, 10);
			GetTextExtentPoint(hDC,Index,i<9?1:2,&Size);
			CellWidth[i] += Size.cx;

			pw = CurKbd->pst+ActiveRule[i]->tag; 
			pwlen = ActiveRule[i]->tlen ? ActiveRule[i]->tlen : ActiveRule[i]->ilen;
			if(pwlen >= MAXTAGLEN)
			{
				WCHAR tag[MAXTAGLEN];
				wcsncpy_s(tag, MAXTAGLEN, pw,MAXTAGLEN-1); tag[MAXTAGLEN-1] = ELLIPSIS;
				GetTextExtentPoint32W(hDC, tag, MAXTAGLEN, &Size);
			}
			else
			{
				GetTextExtentPoint32W(hDC, pw, pwlen, &Size);
			}
			Size.cx += 8;	// minimum whitespace of 4 px
			if(Size.cx > CellWidth[i]) CellWidth[i] = Size.cx;
		}
		ReleaseDC(hwndChild,hDC);

		for(i=0; i<nCells; i++)
		{
			if(CellWidth[i]+CWBorders > IMWidth) IMWidth = CellWidth[i]+CWBorders;
		}
	}

	for(i=0, CellStart[0]=0; i<MAXACTIVERULES; i++ ) CellStart[i+1] = CellStart[i] + CellWidth[i];

	// Delete fonts again
	DeleteObject(hfMain); DeleteObject(hfInput); DeleteObject(hfTag);

	return TRUE;
}

// Resize, reposition, and refresh the IMX window
void UpdateIMXWindow(void)
{
	int x, y, dx, dy, nCellsShown;
	RECT RectIM, RectApp;
	POINT Caret;
	HWND hFocus;

	GetWindowRect(hwnd,&RectIM);
	x = RectIM.left; y = RectIM.top;

	nCellsShown = (nCells > MaxCells ? MaxCells : nCells);
	GetIMDimensions(nCellsShown,ContextBuf);

	if(nCells > 0)
	{
		nCellsShown = (nCells > MaxCells ? MaxCells : nCells);
		GetIMDimensions(nCellsShown,ContextBuf);
		if(Vertical)
		{
			dx = IMWidth + IMBorders;
			dy = (nCellsShown+1)*CellSize.y + 3*(IMBorders + CWBorders)/2;
		}
		else
		{
			dx = InputSize + IMBorders + CWBorders + CellStart[nCellsShown];
			dy = CellSize.y + IMBorders + CWBorders;
		}
	}
	else
	{
		dx = InputSize + IMBorders + CWBorders; 
		dy = CellSize.y + IMBorders + CWBorders;
	}

	Tracking = FALSE;

	// Don't attempt to track for a vertical selection window 
	if(EnableTracking && !Vertical)	
	{
		GetCaretPos(&Caret);
		hFocus = GetFocus();
		GetWindowRect(hFocus,&RectApp);

		if(Caret.x != 0 || Caret.y != 0)
		{
			Tracking = EnableTracking;
			x = Caret.x+RectApp.left;
			y = Caret.y+RectApp.top+24;
			if(x + RectIM.right - RectIM.left > RectApp.right) x = RectApp.right - RectIM.right + RectIM.left;
			if(x < 0) x = 0;

			if(y + RectIM.bottom - RectIM.top > RectApp.bottom) y = RectApp.top + Caret.y - (RectIM.bottom-RectIM.top);
		}
	}
	else 
	{
		x = IMPos.x; y = IMPos.y;
	}

	UserResize = FALSE;		
	InvalidateRect(hwnd,NULL,TRUE);
	SetWindowPos(hwnd,0,x,y,dx,dy,SWP_NOZORDER+SWP_NOACTIVATE);
	UserResize = TRUE;
}

LRESULT CALLBACK IMXWndProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam)
{
	RECT rect, rectOuter;
	POINT pts;
	LRESULT lResult;
	PAINTSTRUCT ps;
	HBITMAP hOldBmp;
	HDC hDC, hSrcDC;
	HFONT hfInput, hfOld;
	LPMINMAXINFO pMMI;

	static RECT rp[6]={{0}};

	int i, x, y, x1, y1, x2, y2, dx, dy, n1, n2, PossibleCells;

	// Use default processing if no keyboard loaded
	if(!PrepIM(FALSE) || !CurKbd) 
	{
		switch(msg)
		{
		case WM_CREATE:
		case WM_DESTROY:
			break;
		default:
			return DefWindowProc(hwnd,msg,wParam,lParam);
		}
	}

	switch(msg)
	{
	case WM_LBUTTONDBLCLK:
	case WM_LBUTTONDOWN:
		pts.x = LOWORD(lParam); pts.y = HIWORD(lParam);
		GetWindowRect(hwnd,&rect); 
		x=rect.left; y = rect.top;

		// Process all button clicks on hotspots
		if(ScrollPos > 0 && PtInRect(&rp[RECT_UP],pts)) 
		{
			SendKey(VK_PRIOR);
		}
		else if(ScrollPos+MaxCells < nCells && PtInRect(&rp[RECT_DOWN],pts))
		{
			SendKey(VK_NEXT);
		}
		else if(!Vertical && PtInRect(&rp[RECT_TRACK],pts))	// on tracking hotspot
		{
			EnableTracking = !EnableTracking;
			WriteRegSetting("IMX track", EnableTracking ? 1 : 0);
		}
		else if(PtInRect(&rp[RECT_ORIENT],pts))			// on orientation hotspot
		{
			Vertical = !Vertical;
			if(Vertical) EnableTracking = Tracking = FALSE;
			WriteRegSetting("IMX z", Vertical ? 1 : 0);
			WriteRegSetting("IMX track", EnableTracking ? 1 : 0);
		}
		else if(PtInRect(&rp[RECT_CONFIG],pts))			// on configuration hotspot
		{
			SendKey(VK_F24);					// do not update IMX window
			break;
		}
		else break;

		// Update the IMX window if any changes made
		UpdateIMXWindow();
		break;

	case WM_USER_NCHITTEST:

		if(!Tracking) 	// Allow dragging except when tracking the insertion point
		{
			pts.x = LOWORD(lParam); pts.y = HIWORD(lParam);
			ScreenToClient(hwnd, &pts);
			GetClientRect(hwnd, &rect);
			rect.right = rect.left + InputSize;
			if(PtInRect(&rect, pts)) return HTCAPTION;
			// Alternate code: drag only with logo
//			if(PtInRect(&rp[RECT_LOGO], pts)) return HTCAPTION;
		}
		break;
	}

	// Handle standard IM functions -- such as window activation, etc.
	if(IMDefWindowProc(hwnd, msg, wParam, lParam, &lResult)) return lResult;

	if(msg == wm_keymanim_contextchanged) PostMessage(hwndChild,WM_REDRAW,0,0);

	switch(msg)
	{
	case WM_CREATE:

		// Read saved IM window settings 
		ReadConfiguration(TRUE);

		// Centre the window if an error message is being displayed
		if(Error != ERR_NONE)
		{
			IMPos.x = GetSystemMetrics(SM_CXSCREEN)/2 - 200; 
			IMPos.y = GetSystemMetrics(SM_CYSCREEN)/2 - 28;
		}

		UserResize = FALSE;
		SetWindowPos(hwnd,0,IMPos.x,IMPos.y,0,0,SWP_NOACTIVATE|SWP_NOSIZE|SWP_NOZORDER);
		UserResize = TRUE;

		GetWindowRect(hwnd,&rectOuter); GetClientRect(hwnd, &rect);
		IMBorders = ((rectOuter.right-rectOuter.left)-(rect.right-rect.left));

		// Note that the actual child window dimensions will be set when the window is first displayed,
		// except when no valid configuration is loaded
		hwndChild = CreateWindowEx(WS_EX_CLIENTEDGE, "KM_IMXChild", "", 
			WS_BORDER | WS_CHILD | WS_VISIBLE, InputSize, 0, 
			rect.right-rect.left-InputSize,rect.bottom, hwnd, 0, hDllInst, NULL);

		GetWindowRect(hwndChild,&rectOuter); GetClientRect(hwndChild, &rect);	//default is probably OK
		CWBorders = ((rectOuter.right-rectOuter.left)-(rect.right-rect.left));

		// Update the child window
		PostMessage(hwndChild,WM_REDRAW,0,0);

		return 0;

	// set resizing limits, according to orientation of IM window
	case WM_GETMINMAXINFO:

		pMMI=(LPMINMAXINFO)lParam;

		// Set the window width for error messages
		if(Error != ERR_NONE || (CurKbd->h.nrules == 0))
		{
			pMMI->ptMinTrackSize.x = pMMI->ptMaxTrackSize.x = InputSize + 12*CELL_X;
			pMMI->ptMinTrackSize.y = pMMI->ptMaxTrackSize.y = CELL_Y + IMBorders + CWBorders;
		}

		else if(Vertical)
		{
			pMMI->ptMinTrackSize.x = IMWidth+IMBorders;
			pMMI->ptMaxTrackSize.x = max(InputSize,IMWidth) + IMBorders;	//IMWidth+IMBorders;
			pMMI->ptMinTrackSize.y = CellSize.y + 3*(IMBorders + CWBorders)/2;
			pMMI->ptMaxTrackSize.y = pMMI->ptMinTrackSize.y + CellSize.y*MAXACTIVERULES;
		}
		else 
		{
			pMMI->ptMaxTrackSize.x = InputSize;
			for(i=1; i<=MAXACTIVERULES; i++)
			{
				if(CellStart[i]) 
					pMMI->ptMaxTrackSize.x = InputSize + CellStart[i];
				else
					pMMI->ptMaxTrackSize.x += CellSize.x;
			}
			pMMI->ptMaxTrackSize.x += IMBorders + CWBorders + 2;
			pMMI->ptMinTrackSize.x = InputSize + IMBorders + CWBorders;
			pMMI->ptMinTrackSize.y = pMMI->ptMaxTrackSize.y = CellSize.y + IMBorders + CWBorders;
		}
		
		return 0;

	case WM_SHOWWINDOW:
		if(wParam) PostMessage(hwndChild,WM_REDRAW,0,0);
		break;

	case WM_DESTROY:
		return 0;

	case WM_MOVE:
		if(!Tracking)
		{
			GetWindowRect(hwnd, &rect);
			IMPos.x = (short)rect.left; IMPos.y = (short)rect.top;
			SaveIMXPosition();
		}
		return 0;

	case WM_SIZE:
		if(UserResize) 
		{

			GetWindowRect(hwnd, &rect);
			IMSize.x = (short)(rect.right - rect.left); 
			IMSize.y = (short)(rect.bottom - rect.top);

			if(Vertical)
			{
				PossibleCells = (IMSize.y - CellSize.y)/CellSize.y;
			}
			else
			{
				PossibleCells = (IMSize.x - InputSize + CellSize.x)/CellSize.x;
			}
			
			// Since SetWindowPos also sends a WM_SIZE, must only reset if non-zero
			if(PossibleCells >= 2) 
			{ 
				MaxCells = ((CurKbd->h.dwOptions & SELECTIONBITS)==SM_FKEYS ? 12 : 9);
				MaxCells = min(MaxCells,PossibleCells); 
				WriteRegSetting("IMX cells", MaxCells);
				ScrollPos = 0;		// always reset scrolling when resizing

			}
		}

		if(Vertical && (CurKbd->h.nrules > 0))
			MoveWindow(hwndChild,0,CellSize.y+(IMBorders+CWBorders)/2,IMWidth,HIWORD(lParam)-CellSize.y,TRUE);
		else
			MoveWindow(hwndChild,InputSize,0,LOWORD(lParam)-InputSize,HIWORD(lParam),TRUE);

		// Refill cells if width changed
		if(UserResize) FillActiveRules(0);

		GetIMDimensions(MaxCells,ContextBuf);

		return 0;

	case WM_PAINT:
		hDC = BeginPaint(hwnd, &ps);
			
		hfInput = CreateFontIndirect(&CurKbd->h.lfInput);
		hfOld = (HFONT)SelectObject(hDC,hfInput);

		GetClientRect(hwnd, &rect);
		SetBkMode(hDC, TRANSPARENT);
		FillRect(hDC, &rect, GetSysColorBrush(COLOR_BTNFACE));

		if(Vertical)		// scroll up/down hotspots
		{
			x1 = rect.right-14; y1 = CellSize.y+(IMBorders+CWBorders)/2-17;
			x2 = x1; y2 = y1+8; 
			dx = 13; dy = 8;	 
			n1 = ScrollPos>0 ? BMP_UP1 : BMP_UP0;
			n2 = ScrollPos+MaxCells<nCells ? BMP_DOWN1 : BMP_DOWN0;
		}
		else				// scroll left/right hotspots 
		{
			x1 = InputSize-17; y1 = rect.bottom-16;
			x2 = x1+8; y2 = y1; 
			dx = 8; dy = 13;	
			n1 = ScrollPos>0 ? BMP_LEFT1 : BMP_LEFT0;
			n2 = ScrollPos+MaxCells<nCells ? BMP_RIGHT1 : BMP_RIGHT0;
		}

		hSrcDC = CreateCompatibleDC(0);
		hOldBmp = (HBITMAP)SelectObject(hSrcDC,hbmp[n1]);
		BitBlt(hDC,x1,y1,dx,dy,hSrcDC,0,0,SRCAND);
		SetRect(&rp[RECT_UP],x1,y1,x1+dx,y1+dy);	

		SelectObject(hSrcDC,hbmp[n2]);
		BitBlt(hDC,x2,y2,dx,dy,hSrcDC,0,0,SRCAND);		
		SetRect(&rp[RECT_DOWN],x2,y2,x2+dx,y2+dy);	

		// show input buffer 
        TextOutW(hDC, 2, 0, ContextBuf, (int)wcslen(ContextBuf));

		// display hotspot icons, and create corresponding regions
		n1 = EnableTracking ? Tracking ? BMP_TRACK : BMP_CANT_TRACK : BMP_DONT_TRACK;
		SelectObject(hSrcDC,hbmp[n1]);
		BitBlt(hDC, 0, 16, 12, 12, hSrcDC, 0, 0, SRCAND);
		SetRect(&rp[RECT_TRACK],0,16,12,28);		// tracking hotspot

		n2 = Vertical ? BMP_HORIZ : BMP_VERT;
		SelectObject(hSrcDC,hbmp[n2]);
		BitBlt(hDC, 14, 16, 12, 12, hSrcDC, 0, 0, SRCAND);
		SetRect(&rp[RECT_ORIENT],14,16,26,28);	// orientation hotspot

		SelectObject(hSrcDC,hbmp[BMP_CONFIG]);
		BitBlt(hDC, 28, 16, 12, 12, hSrcDC, 0, 0, SRCAND);
		SetRect(&rp[RECT_CONFIG],28,16,40,28);	// orientation hotspot

		// display logo
		SelectObject(hSrcDC, hbmp[BMP_LOGO]);
		y = CellSize.y + CWBorders - 16; 
		BitBlt(hDC, 0, y, 24, 16, hSrcDC, 0, 0, SRCAND);
		SetRect(&rp[RECT_LOGO],0,y,24,y+16);	// logo hotspot
		SelectObject(hSrcDC, hOldBmp);
		DeleteDC(hSrcDC);
		
		SelectObject(hDC,hfOld);
		DeleteObject(hfInput);

		EndPaint(hwnd, &ps);

		return 0;
	}

	return DefWindowProc(hwnd, msg, wParam, lParam);
}

LRESULT CALLBACK IMXChildWndProc(HWND hwndChild, UINT msg, WPARAM wParam, LPARAM lParam)
{
	RECT rect;
	PAINTSTRUCT ps;
	HFONT hfMain, hfTag, hfOld;
	HDC hDC;
	LRESULT lResult;
	PWCHAR pw;
	SIZE Size={0};
	WCHAR tag[MAXTAGLEN];
	int i, x1, y1, x2, y2, x3, y3, pwlen, KeyStroke;
	char Index[6]={0};

	static WORD CellLimit[MAXACTIVERULES+1]={0};

	if(!PrepIM(FALSE) || !CurKbd) return DefWindowProc(hwndChild,msg,wParam,lParam);

	switch(msg)
	{
	// Completing a RULE here does not work reliably, so simulate the keystroke instead
	case WM_LBUTTONDOWN:			
		for(i=0; i<nCells; i++)
		{
			if(!ActiveRule[i])break;
			if((Vertical && (HIWORD(lParam)<CellLimit[i])) ||
				(!Vertical && (LOWORD(lParam)<CellLimit[i])))
			{
				switch(CurKbd->h.dwOptions & SELECTIONBITS)
				{
				case SM_DEFAULT:
				case SM_ALLDIGITS:
					KeyStroke = i + '1'; break;
				case SM_KEYPAD:
					KeyStroke = i + VK_NUMPAD1; break;
				case SM_FKEYS:
					KeyStroke = i + VK_F1; break;
				}

				// Flag simulated keystroke as result of mouse and send keystroke
				MouseSelection = TRUE;
				SendKey(KeyStroke); 
				break;
			}
		}
		return 0;

	case WM_NCHITTEST:
		lResult = DefWindowProc(hwndChild, msg, wParam, lParam);
		if(lResult != HTCLIENT && lResult != HTVSCROLL && lResult != HTHSCROLL) return HTNOWHERE;

		return lResult;

	case WM_MOUSEACTIVATE:
		return MA_NOACTIVATE;
		
	case WM_SIZE:
	case WM_REDRAW:		// This is a user message, not a standard message
		InvalidateRect(hwndChild, NULL, TRUE);	
		return 0;

	case WM_PAINT:
		hDC = BeginPaint(hwndChild, &ps);
		hfTag = CreateFontIndirect(&CurKbd->h.lfTag);
		hfMain = CreateFontIndirect(&CurKbd->h.lfMain);
		GetClientRect(hwndChild, &rect);
		if(CurKbd->h.nrules>0)
		{		
			hfOld = (HFONT) SelectObject(hDC, hfTag);

			for(i=0; i<MaxCells; i++)
			{

				if(!ActiveRule[i]) break;
		
				SelectObject(hDC, hfTag);
				SetTextColor(hDC,RGB(0,0,255));

				_itoa_s(i+1, Index, sizeof Index, 10);
				GetTextExtentPoint(hDC,Index,i<9?1:2,&Size);

				if(Vertical)
				{
					x1 = 2;							// index
					y1 = i*CellSize.y - 1; 
					x2 = rect.right/2 + 2;			// tag
					y2 = (i+1)*CellSize.y - Size.cy;					
					x3 = rect.right/2 + 2;	// characters
					y3 = i*CellSize.y + Size.cy - 4;
				}
				else
				{
					x1 = CellStart[i] + 2; 
					y1 = -2;
					x2 = (CellStart[i]+CellStart[i+1])/2 + 2; 
					y2 = rect.bottom - Size.cy;					
					x3 = (CellStart[i]+CellStart[i+1])/2 + 2; 
					y3 = Size.cy - 5;
				}

				pw = CurKbd->pst+ActiveRule[i]->tag; 
				pwlen = ActiveRule[i]->tlen ? ActiveRule[i]->tlen : ActiveRule[i]->ilen;

				// Use an ellipsis if tag is too long
				if(pwlen >= MAXTAGLEN)
				{
					wcsncpy_s(tag, MAXTAGLEN, pw, MAXTAGLEN-1); 
					tag[MAXTAGLEN-1] = ELLIPSIS;
					pw = tag; pwlen = MAXTAGLEN;
				}

				SetTextAlign(hDC,TA_LEFT);
				TextOut(hDC, x1, y1, Index, (i<9?1:2));

				SetTextAlign(hDC,TA_CENTER);
				TextOutW(hDC, x2, y2, pw, pwlen);

				SelectObject(hDC, hfMain);				
				SetTextAlign(hDC,TA_CENTER); SetTextColor(hDC,0);

				pw = CurKbd->pst+ActiveRule[i]->output; 
				pwlen = ActiveRule[i]->olen;
				TextOutW(hDC, x3, y3, pw, pwlen);
			}
		
			// Draw cell boundaries last, to write over text borders
			SetTextColor(hDC,0);
			for(i=0; i<MaxCells; i++)
			{
				if(!ActiveRule[i]) break;

				if(Vertical)
				{
					x1 = 0; y1 = (i+1)*CellSize.y;
					x2 = rect.right; y2 = (i+1)*CellSize.y;
					CellLimit[i] = y1;
				}
				else 
				{
					x1 = CellStart[i+1]; y1 = 0;
					x2 = CellStart[i+1]; y2 = rect.bottom;
					CellLimit[i] = x1;
				}

				MoveToEx(hDC, x1, y1, NULL);
				LineTo(hDC, x2, y2);
			}

			SelectObject(hDC, hfOld);
		}

		else 
		{
			HFONT hfDflt;
			
			hfDflt = CreateFont(16,0,0,0,FW_BOLD,0,0,0,ANSI_CHARSET,
				OUT_DEFAULT_PRECIS,CLIP_DEFAULT_PRECIS,DEFAULT_QUALITY,
				DEFAULT_PITCH | FF_SWISS,"Arial");
			if(hfDflt)
			{
				if((hfOld=(HFONT)SelectObject(hDC, hfDflt)))
				{
					PSTR p1, p2;
					PSTR p1a="Reinstall %s keyboard package.";
					PSTR p2a="(Missing or invalid configuration file!)";
					PSTR p1b="The %s keyboard can only be used by";
					PSTR p2b="registered users of Tavultesoft Keyman.";
					COLORREF bgColor, white=RGB(255,255,255);
					char eMsg[256];
					HBRUSH hBrush, hOldBrush;
				
					if(Error == ERR_UNREGISTERED)
					{
						bgColor = RGB(0,0,208); p1 = p1b; p2 = p2b; 
					}
					else
					{
						bgColor = RGB(208,0,0); p1 = p1a; p2 = p2a; 
					}

					if((hBrush=CreateSolidBrush(bgColor)))
					{
						if((hOldBrush=(HBRUSH)SelectObject(hDC,hBrush)))
						{
							Rectangle(hDC, -1, -1, rect.right + 1, rect.bottom + 1);
							SetTextColor(hDC,white); SetBkColor(hDC,bgColor);
							wsprintf(eMsg,p1,CurKbd->h.name);
							TextOut(hDC,10,2,eMsg,(int)strlen(eMsg)); 
							TextOut(hDC,10,22,p2,(int)strlen(p2));
							SelectObject(hDC,hOldBrush);
						}
						DeleteObject(hBrush);
					}
					SelectObject(hDC,hfOld);
				}
				DeleteObject(hfDflt);
			}
		}
		DeleteObject(hfMain); DeleteObject(hfTag);
		EndPaint(hwndChild, &ps);
		return 0;
	}

	return DefWindowProc(hwndChild, msg, wParam, lParam);
}

/************************************************************************************************************
 * IM Configuration            
 ************************************************************************************************************/

extern "C" BOOL __declspec(dllexport) WINAPI KeymanIMConfigure(PSTR KeyboardName, HWND hwndParent)
{

	char *p, buf1[MAX_PATH];
	
	Log("KeymanIMConfigure - ENTER");
	Log(KeyboardName);

  buf1[0] = '"';
	if(!(*KMGetKeyboardPath)(KeyboardName, buf1+1, MAX_PATH))
	{
  	Log("KeymanIMConfigure - fail to get path");
	  return FALSE;
	}
	Log(buf1);

  
	if((p=strrchr(buf1,'\\')) != NULL)
	{
		rsize_t bufLimit=(sizeof buf1) - (p+1-buf1);
		strcpy_s(p+1, bufLimit, "imxconfig.exe\" "); strcat_s(p+1, bufLimit, KeyboardName);
  		Log(buf1);
  		STARTUPINFO si;
  		PROCESS_INFORMATION pi;
  		memset(&si, 0, sizeof(si));
  		si.cb = sizeof(si);
  		memset(&pi, 0, sizeof(pi));
  		CreateProcess(NULL, buf1, NULL, NULL, FALSE, NORMAL_PRIORITY_CLASS, NULL, NULL, &si, &pi);
		//WinExec(buf1,SW_SHOW);
		return TRUE;
	}
	else
	{
  	Log("KeymanIMConfigure - Fail to find \\");
		return FALSE;
	}
}

// Compare rule input string to context buffer
int cmpspecial(RULE *prule,PWCHAR pInput)
{
	PWCHAR pw1, pw1max, lastTone=NULL;
	int matchMode=MM_NOMATCH;

	register PWCHAR pw2=pInput;

	if(!prule) return MM_NOMATCH;
	
	pw1 = CurKbd->pst+prule->input;
	pw1max = pw1+prule->ilen;

	// The first character must match, no wild cards allowed
	if(*pw2 != *pw1) return MM_NOMATCH;

	// Test first for alternate inputs (flagged by final |, no numeric mode allowed)
	if(*(pw1+prule->ilen-1) == L'|' && wcschr(pw2,L'|') == NULL)
	{
		while(pw1 < pw1max)
		{
			pw2 = pInput; lastTone = NULL;
			while(*pw2)
			{
				if(strchr(CurKbd->h.ToneChar,*pw1)) lastTone = pw1;

				if(*pw2 == *pw1 || ((*pw2 == '?') && ((CurKbd->h.dwWild&WC_QUERY) != 0))) 
				{
					pw1++; pw2++; continue;
				}
				else if((*pw2 == '\'') && (lastTone == pw1) && ((CurKbd->h.dwWild&WC_QUOTE) != 0))
				{
					pw1++; pw2++; continue;
				}
				else if((*pw1!=L'|') && strchr(CurKbd->h.ToneChar,*pw1)) 
				{
					pw1++; continue;
				}
				else break;
			}
				
			if(*pw2 == 0)
			{
				if(matchMode == MM_NOMATCH) matchMode = MM_START;

				if(*pw1 == L'|') matchMode = MM_PERFECT;

				if(*CurKbd->h.ToneChar != 0)
				{
					// Test if only trailing character is a tone character
					if(strchr(CurKbd->h.ToneChar,*pw1) && (*(pw1+1) == L'|')
						&& (matchMode < MM_EXCEPTTONE)) matchMode = MM_EXCEPTTONE;	

					// Test if first syllable matches, and the input matches the start of the rest
					if(lastTone && (pw1 > lastTone) 
						&& (matchMode < MM_MORETHANONE)) matchMode = MM_MORETHANONE;	
				}
			}
			if(matchMode == MM_PERFECT) break;

			else {
				while(pw1 < pw1max)
				{
					if(*pw1++ == L'|') break;
				}
			}
		}
		return matchMode;
	}

	// Test for standard, single input rules (with exceptions for numeric mode rules)
	else while(*pw2)
	{
		if(strchr(CurKbd->h.ToneChar,*pw1)) lastTone = pw1;

		if(*pw2 == *pw1 || ((*pw2 == '?') && ((CurKbd->h.dwWild&WC_QUERY) != 0))) 
		{
			pw1++; pw2++; continue;
		}
		else if((*pw2 == '\'') && (lastTone == pw1) && ((CurKbd->h.dwWild&WC_QUOTE) != 0))
		{
			pw1++; pw2++; continue;
		}
		else if(!NumericMode && (pw1<pw1max) && strchr(CurKbd->h.ToneChar,*pw1)) 
		{
			pw1++; continue;
		}
		else 
		{
			return MM_NOMATCH;				// no match
		}
	}

	// Test for a complete match with the rule input (no trailing characters in rule input)
	if(pw1 == pw1max) return MM_PERFECT;

	if(!NumericMode && (*CurKbd->h.ToneChar != 0))
	{
		// Test if only trailing character is a tone character
		if(strchr(CurKbd->h.ToneChar,*pw1) && (pw1+1==pw1max)) return MM_EXCEPTTONE;	

		// Test if first syllable matches, and the input matches the start of the rest
		if(lastTone && (pw1 > lastTone)) return MM_MORETHANONE;
	}

	return MM_START;						// matches start of rule input string
}

// Select those rules that match the input string.  Stop searching when the 
// required number of rules has been filled, unless CountAll set (for End key)
int FillActiveRules(WCHAR KeyChar)
{
	int i, n, n0, n1, lBuf, Match;
	WCHAR buf2[18];
	PWSTR p,p1;
	PSTR q;
	RULE *prule;
	BOOL Matched=FALSE, SearchToEnd=CountAll;

	if(!CurKbd || (CurKbd->h.nrules == 0)) return (-1);

	// By default, just copy the entire string
	wcscpy_s(buf2, _countof(buf2), ContextBuf); p = wcschr(buf2, 0);

	// Test if dashes are being used to select a particular output character
	if(((CurKbd->h.dwWild & WC_DASH) != 0) && ((p1=wcsrchr(ContextBuf,L'-')) != NULL))
	{
		if(*(p1+1) == 0) // and filter the string if last character in context is a dash
		{
			for(p=buf2,p1=ContextBuf; *p1; p1++)
			{
				if(*p1 != L'-') *p++ = *p1;
			}
		}
	}

	// Append the current keystroke
	if(KeyChar != 0)
	{
		if((KeyChar != L'-') || ((CurKbd->h.dwWild & WC_DASH) == 0)) *p++ = KeyChar;
	}
	*p = 0;

	CountAll = FALSE;

	lBuf = (int)wcslen(buf2);

	for(i=0; i<MAXACTIVERULES; i++) ActiveRule[i] = NULL;

	if((*buf2 == 0) && (KeyChar == 0)) return (-1);	

	// Look up first character in index (assumes ANSI)
	q = strchr(IndexString,*(char *)&buf2[0]);
	if(q != NULL)
	{
		n = (int)(q - IndexString);
		n0 = *(CurKbd->index+n);
		n1 = *(CurKbd->index+n+1);
	}
	else
	{
		n = (int)strlen(IndexString);
		n0 = *(CurKbd->index+n); 
		n1 = CurKbd->h.nrules;
	}

	for(i=n0,n=0, prule=CurKbd->rules+n0; i<n1; i++, prule++)
	{
		// Display only those rules that match	
		Match = cmpspecial(prule,buf2);
		if(Match)
		{
			Matched = TRUE;
			if((Match > MM_START) || (DisplayMode == DM_FULL) || ExtendMatch )
			{
				if(n >= ScrollPos) 
				{						
					if(n-ScrollPos < MaxCells) ActiveRule[n-ScrollPos] = prule;
					else if((n-ScrollPos > MaxCells) && !SearchToEnd) break;
				}
				n++;
			}
		}
	}

	// Return the number of possible ActiveRules 
	return Matched ? n : (-1);
}

BOOL InsertChar(WCHAR ch)
{
	WCHAR buf[2]={0};

	buf[0] = ch; 
	(*KMSetOutput)(buf, 0);
	return TRUE;
}

BOOL CompleteRule(RULE *r,int Mode)
{
	int i,n,n1=0,n2=0,ncSelect;
	WCHAR tOut[MAXOUTLEN+2]={0};
	PWCHAR p;
	PCHAR pt=CurKbd->h.ToneChar;

	if(Mode & OM_TAG)
	{
		n = r->tlen ? r->tlen : r->ilen; 
		wcsncpy_s(tOut, _countof(tOut), CurKbd->pst+r->tag, min(n,MAXOUTLEN-1));
		wcscat_s(tOut, _countof(tOut), L" ");
	}
	else if(Mode & OM_BOTH)
	{
		wcsncpy_s(tOut, _countof(tOut), CurKbd->pst+r->output, min(r->olen,MAXOUTLEN-1));
		n = r->tlen ? r->tlen : r->ilen; 
		if(r->olen+n+4 < MAXOUTLEN)
		{
			wcscat_s(tOut, _countof(tOut), L" (");
			wcsncat_s(tOut, _countof(tOut), CurKbd->pst+r->tag, n);
			wcscat_s(tOut, _countof(tOut), L") ");
		}
	}
	else
	{
		if(((CurKbd->h.dwWild & WC_DASH) != 0) && ((p=wcsrchr(ContextBuf,L'-')) != NULL) 
			&& (r->olen > 1) && (*(p+1) == 0))
		{
			p = wcschr(ContextBuf,L'-') + 1;
			for(ncSelect=0;*p==L'-' && ncSelect<r->olen-1;p++,ncSelect++);
			*tOut = *(CurKbd->pst+r->output + ncSelect);
		}
		else
		{
			wcsncpy_s(tOut, _countof(tOut), CurKbd->pst+r->output, min(r->olen,MAXOUTLEN-1));
		}
	}

	(*KMSetOutput)(tOut, 0);

	for(i=0; i<MAXACTIVERULES; i++) ActiveRule[i] = NULL;

	SaveIMXPosition(); ExtendMatch = FALSE;
	*ContextBuf = 0; 
	(*KMHideIM)();	// hide the IM window on completion

	return TRUE;
}

BOOL RepaintWindow()
{
	InvalidateRect(hwndChild, NULL, TRUE);
	return TRUE;
}

/*

  The input string, consisting of the context buffer plus the current character, is 
  matched against all rules in order.  The user-selected display mode determines which
  rules for which outputs are displayed for selection:
  (a) all rules for which the input string matches the start of the rule input string, or
  (b) all single-syllable rules for which the input string matches the entire rule input, or 
  all except the final tone character, and all binome or polynome rules for which at least 
  one character of the second syllable has been entered.

  In the second (limited display) mode, entering an asterisk switches matching into the 
  full display mode, until the next character is typed.  A question mark in the input string
  will be interpreted as a single-character wildcard.  Either or both asterisk and question 
  mark must be enabled in the configuration header (WildCard=?*) to allow these options.

*/

extern "C" BOOL __declspec(dllexport) WINAPI FindGlyph(HWND hwndFocus, WORD KeyStroke, WCHAR KeyChar, DWORD shiftFlags)
{
	BOOL SkipSelectionTesting=FALSE, DropCharacter=TRUE, AutoSelect=FALSE, ExtendMode,
		Refresh=FALSE;
	WCHAR *pCB;
	HWND hIMX;
	POINT Caret={0};
	int lBuf,nSelect=0,sMode,tMode,outMode;
	char FirstChar;

	if(!PrepIM(TRUE) || !CurKbd) returnErr(FALSE);

	// Zero the context unless IMX already displayed (necessary switching applications)
	hIMX = FindWindow("KM_IMX",NULL);
	if(!IsWindowVisible(hIMX)) *ContextBuf = 0;

	// Check for a valid keyboard
	if(CurKbd->h.nrules == 0) 
	{
		if(IsWindowVisible(hIMX)) 
			(*KMHideIM)(); 
		else 
			(*KMDisplayIM)(hwnd,TRUE);

		return(FALSE);
	}

	ReadConfiguration(TRUE);

	lBuf = (int)wcslen(ContextBuf);
	sMode = (CurKbd->h.dwOptions & SELECTIONBITS);
	tMode = (CurKbd->h.dwOptions & TONEBITS)>>2;
	AutoSelect = (CurKbd->h.dwOptions & SELECTIFUNIQUE); 

	// Save current wild card matching 
	ExtendMode = ExtendMatch;

	// Test if a simulated keystroke, and save special mode flags
	outMode = MouseSelection; MouseSelection = FALSE;

	// Check first character (to allow 4-corner index selection for Han)
	FirstChar = (char)(lBuf>0 ? *ContextBuf : KeyChar);
	NumericMode = (strchr("0123456789#$!@%&*",FirstChar) != NULL);

	// Test first for configuration hotkey (or VK_F24 sent by click on hotspot)
	if((KeyStroke == VK_F24) ||	((KeyStroke == LOWORD(CurKbd->h.cfgKey)) && 
		((shiftFlags & HK_MODIFIERS) == (unsigned)(HIWORD(CurKbd->h.cfgKey) & HK_MODIFIERS))))
	{
		SaveIMXPosition();
		*ContextBuf = 0;
		(*KMHideIM)();
		KeymanIMConfigure(CurKbd->h.name,hwndFocus);
		return TRUE;
	}

	// If tone characters must be entered, check if the current character is
	// a matching tone character before testing for selection
	if((lBuf > 0) && *CurKbd->h.ToneChar && KeyChar && !outMode
		&& (tMode != TM_NEVER) && (strchr(CurKbd->h.ToneChar,(char)KeyStroke) > 0))
	{
		if(FillActiveRules(KeyChar) >= 0) SkipSelectionTesting = TRUE;
	}

	// If numeric mode, then check that the digit does not form part of a valid input string
	if((lBuf > 0) && NumericMode && (KeyChar != 0) && iswdigit(KeyStroke))
	{
		if(FillActiveRules(KeyChar) >= 0) SkipSelectionTesting = TRUE;
	}

	// Test next for rule completion
	if(lBuf > 0 && !SkipSelectionTesting)
	{
		// Test selection by space first, then according to configured selection mode
		if(KeyChar == VK_SPACE || KeyStroke == VK_RETURN) 
		{
			// Check first if input string is U+xxxxx (direct Unicode, incl. surrogate pairs)
			if(OutputUnicode(ContextBuf,lBuf)) return TRUE;

			// Otherwise space or return is same as selecting left most (or top) cell
			nSelect = 1;
		}
		else 
		{
			switch(sMode)
			{
			case SM_DEFAULT:
				nSelect = (UINT)(KeyStroke-'1'+1);
				break;
			case SM_ALLDIGITS:
				if(KeyStroke < VK_NUMPAD1)
					nSelect = (UINT)(KeyChar-'1'+1);
				else
					nSelect = (UINT)(KeyStroke-VK_NUMPAD1+1);
				break;
			case SM_KEYPAD://must test shiftstate
				nSelect = (UINT)(KeyStroke-VK_NUMPAD1+1);
				break;
			case SM_FKEYS:
				nSelect = (UINT)(KeyStroke-VK_F1+1);
				if(shiftFlags & HK_SHIFT) outMode = OM_TAG;
				if(shiftFlags & HK_CTRL) outMode = OM_BOTH;
				break;
			}
		}

		if(nSelect > 0)
		{
			nCells = FillActiveRules(0);	// otherwise, re-fill the matching rules
			if(nSelect <= nCells)			// selection from menu by Fn key
			{
				if(ActiveRule[nSelect-1])		// use selected character 
				{
					CompleteRule(ActiveRule[nSelect-1],outMode);
					return TRUE;
				}
			}
		}
	}

	// Process non-printing characters next - first, for empty buffer
	if(!isprint(KeyChar) && lBuf == 0)
	{
		switch(KeyStroke)
		{
		case VK_ESCAPE:
			(*KMQueueAction)(QIT_CHAR, KeyStroke);
			break;

		case VK_BACK:
			(*KMQueueAction)(QIT_BACK, 0);
			break;

		default:
			(*KMQueueAction)(QIT_VKEYDOWN, KeyStroke);
			(*KMQueueAction)(QIT_VKEYUP, KeyStroke);
		}

		SaveIMXPosition();
		*ContextBuf = 0;
		(*KMHideIM)();
		return TRUE;
	}

	// then process non-printing characters when buffer non-empty
	else if(!isprint(KeyChar) && lBuf > 0)
	{	
		// drop buffer and close IMX window 
		if(KeyStroke == VK_ESCAPE || ((KeyStroke == VK_BACK) && (lBuf == 1)))	
		{
			SaveIMXPosition();
			*ContextBuf = 0;
			(*KMHideIM)();
			return TRUE;
		}

		// translate number pad keys to characters
		switch(KeyStroke)
		{
		case VK_MULTIPLY:
			KeyChar = '*'; break;

		case VK_ADD:            
			KeyChar = '+'; break;

		case VK_SUBTRACT:
			KeyChar = '-'; break;

		case VK_DECIMAL:
			KeyChar = '.'; break;

		case VK_DIVIDE:
			KeyChar = '/'; break;
		}

		// adjust display according to cursor movement keys
		switch(KeyStroke)
		{
		case VK_BACK:				// drop the previously entered character
			Refresh = TRUE; ScrollPos = 0;
			pCB = wcschr(ContextBuf,0);
			if(pCB > ContextBuf) *(pCB-1) = 0;
			break;

		case VK_HOME:				//scroll to first match 
			if(ActiveRule[0])
			{
				ScrollPos = 0; Refresh = TRUE;
			}
			break;

		case VK_END:				//scroll to last match 
			if(ActiveRule[0])
			{
				Refresh = TRUE; ScrollPos = 0; CountAll = TRUE; 
				nCells = FillActiveRules(0);
				ScrollPos = max(0,nCells-MaxCells);
			}
			break;

		case VK_LEFT:				//scroll backward through the menu (Cursor Left/Up)
		case VK_UP:
			if(ActiveRule[0])
			{
				Refresh = TRUE;
				if(ScrollPos-1 >= 0) ScrollPos -= 1; else ScrollPos = 0;
			}
			break;

		case VK_RIGHT:				//scroll forward through menu (Cursor Right/Down)
		case VK_DOWN:
			if(ActiveRule[1])
			{
				Refresh = TRUE;
				if(ScrollPos+1 < nCells) ScrollPos += 1;
			}
			break;
	
		case VK_NEXT:			//scroll forward through menu (Page Down)
			if(ActiveRule[MaxCells-1])
			{
				Refresh = TRUE;
				if(ScrollPos+MaxCells < nCells) ScrollPos += MaxCells;
			}
			break;
	
		case VK_PRIOR:			//scroll backward through the menu (Page Up)
			if(ActiveRule[0])
			{
				Refresh = TRUE;
				if(ScrollPos-MaxCells >= 0) ScrollPos -= MaxCells; else ScrollPos = 0;
			}
			break;
		}

		if(Refresh)
		{
			nCells = FillActiveRules(0); DropCharacter = FALSE;
		}
	}

	// Check for wild card matching 
	if((CurKbd->h.dwWild & WC_STAR) && (KeyChar == '*') && (lBuf > 0))
	{
		ExtendMatch = TRUE;
		nCells = FillActiveRules(0);
		DropCharacter = FALSE;
	}
	// Match the entered character plus the context with allowed sequences
	else if(isprint(KeyChar) && (lBuf<(sizeof ContextBuf)/sizeof(WCHAR))) 
	{
		if(IsHexString(ContextBuf,lBuf, KeyChar))
		{
			pCB = wcschr(ContextBuf,0); *pCB++ = KeyChar; *pCB = 0;
			DropCharacter = FALSE; 
		}

		else if(NumericMode || !(tMode == TM_NEVER && *CurKbd->h.ToneChar	// always drop if no tone characters 
			&& (strchr(CurKbd->h.ToneChar,(char)KeyChar)>0)))
		{
			ScrollPos = 0; ExtendMatch = FALSE;
			switch((nCells=FillActiveRules(KeyChar)))
			{
			case (-1):
				if(lBuf == 0)				// empty context
				{
					InsertChar(KeyChar);	// so don't do anything with IM window
					return TRUE;
				}
				else
				{
					ExtendMatch = ExtendMode;
					nCells=FillActiveRules(0);
					DropCharacter = TRUE;
				}
				break;

			case 0:							// no exact match, but starts a match 
				pCB = wcschr(ContextBuf,0); *pCB++ = KeyChar; *pCB = 0;
				DropCharacter = FALSE; 
				break;

			case 1:				// check if this is a unique and complete match
				if(AutoSelect && ActiveRule[0])
				{
					BOOL TrulyUnique=TRUE;

					if(!ExtendMatch && (DisplayMode!=DM_FULL))
					{	
						RULE *TempRule[MAXACTIVERULES];
						ExtendMatch = TRUE;
						memcpy(TempRule,ActiveRule,MAXACTIVERULES*sizeof(RULE *));
						TrulyUnique = (FillActiveRules(KeyChar) == 1);
						memcpy(ActiveRule,TempRule,MAXACTIVERULES*sizeof(RULE *));
						ExtendMatch = FALSE;
					}

					if(TrulyUnique)
					{
						pCB = wcschr(ContextBuf,0); *pCB++ = KeyChar; *pCB = 0;
						if(cmpspecial(ActiveRule[0],ContextBuf) > 1) 
						{
							CompleteRule(ActiveRule[0],outMode);	// send the result to the app, and hide IM window
							return TRUE;
						}
						DropCharacter = FALSE; 
						break;
					}
				}		// else fall through and add to context 

			default:						// multiple matches possible, so just extend the context
				pCB = wcschr(ContextBuf,0); *pCB++ = KeyChar; *pCB = 0;
				DropCharacter = FALSE; 
			}
		}
	}

	// Drop the character and beep if the IMX window is already open and it cannot be matched
	if(DropCharacter)	
	{
		ExtendMatch = ExtendMode;	// restore wild card match
		(*KMQueueAction)(QIT_BELL, 0);
		return TRUE;	
	}

	// Show the IM window, then update its position and size
	(*KMDisplayIM)(hwnd, TRUE); 
	UpdateIMXWindow();

	return TRUE;
}

void UnloadRules(PSTR KeyboardName)
{
	int nkbi;
	KEYBOARD *kbi;

	if((nkbi=KeyboardIndex(KeyboardName)) == nKeyboards) return;

	if((kbi=&Keyboards[nkbi]) == NULL) return;

	// Unmap shared memory from the process's address space
	if(kbi->BaseAddress) UnmapViewOfFile(kbi->BaseAddress);	

	// Close the process's handle to the file-mapping object and backing file
	if(kbi->hMapObject) CloseHandle(kbi->hMapObject); 
	if(kbi->hFile) CloseHandle(kbi->hFile);

	// Zero pointers and handles
	kbi->h.nrules = 0; kbi->BaseAddress = NULL;
	kbi->hFile = 0; kbi->hMapObject = 0; 	
}

// Decrypt the string table
void DecryptStrings(KBHEADER *pk)
{
	BYTE *p0, *p1, *p;
	int n;

	p0 = (BYTE *)pk + pk->dwStrings;
	p1 = p0 + pk->cbStrings;
	
	for(p=p0,n=0; p<p1; p++,n++) *p -= n;
}

// Load the rules into memory
BOOL LoadRules(PSTR KeyboardName)
{
	HANDLE hFile=NULL, hMapObject=NULL;
	DWORD dwFileSize[2], nRead, totalsize, dwChecksum;
	KEYBOARD *kbi;
	PBYTE pbmm;
	KBHEADER *pkbh;
	char mapfile[256], drive[_MAX_DRIVE], dir[_MAX_DIR], buf1[MAX_PATH], key[140];
	int nkbi;

	if((nkbi=KeyboardIndex(KeyboardName)) == nKeyboards) return FALSE;

	kbi = &Keyboards[nkbi];

	// Mark keyboard as invalid until fully initialized
	kbi->h.nrules = 0;	

	// Test first if the saved memory-mapped file image exists
	wsprintf(mapfile, "keyman_imx_%s", KeyboardName);

	// Open mapping object (if already created by another application)
	hMapObject = OpenFileMapping(FILE_MAP_WRITE,FALSE,mapfile);
	if(hMapObject)
	{
		// Get a pointer to file-mapped shared memory
		if((pbmm=(PBYTE)MapViewOfFile(hMapObject,FILE_MAP_WRITE,0,0,0)) == NULL )
		{
			Error = ERR_SHARING; 
			CloseHandle(hMapObject); return FALSE;
		}
		pkbh = (KBHEADER *)pbmm;
	}

	// Otherwise, create the file-mapping object from the backing file (*.CFX)
	else 
	{
		if(!(*KMGetKeyboardPath)(KeyboardName, buf1, MAX_PATH)) return FALSE;
		_splitpath_s(buf1, drive, sizeof drive, dir, sizeof dir, NULL, 0, NULL, 0);
		_makepath_s(buf1, sizeof buf1, drive, dir, KeyboardName, ".cfx");

		hFile = CreateFile(buf1,GENERIC_READ,0,NULL,OPEN_EXISTING,FILE_ATTRIBUTE_NORMAL,0);

		// Return FALSE if the CFX is not found
		if(hFile == INVALID_HANDLE_VALUE) 
		{
			Error = ERR_CFGMISSING; return FALSE;
		}

		Error = ERR_CFGINVALID; 
		dwFileSize[0] = GetFileSize(hFile,&dwFileSize[1]);

		// Create the named file-mapping object from the backing file 
		if((hMapObject=CreateFileMapping(INVALID_HANDLE_VALUE,NULL,PAGE_READWRITE,dwFileSize[1],dwFileSize[0],mapfile)) == NULL ) 
		{
			CloseHandle(hFile); return FALSE;
		}

		// Get a pointer to file-mapped shared memory
		if((pbmm=(PBYTE)MapViewOfFile(hMapObject,FILE_MAP_WRITE,0,0,0)) != NULL )
		{
			pkbh = (KBHEADER *)pbmm;
		}
		else
		{
			CloseHandle(hMapObject); CloseHandle(hFile); return FALSE;
		}

		// Read the keyboard header	and check the file type flag and version 
		ReadFile(hFile,pkbh,sizeof(KBHEADER),&nRead,NULL);
		if(nRead < sizeof(KBHEADER) || memcmp(pkbh->Flag,"KCFX",4) != 0 
			|| pkbh->dwCfxVersion != CFXVERSION)
		{
			UnmapViewOfFile(pbmm);
			CloseHandle(hMapObject); CloseHandle(hFile); return FALSE;
		}
		
		// Check the file size
		totalsize = pkbh->dwStrings + pkbh->cbStrings;
		if(dwFileSize[0] < totalsize+4)
		{
			UnmapViewOfFile(pbmm);
			CloseHandle(hMapObject); CloseHandle(hFile); return FALSE;
		}

/*
    // If more than rule limit, test if Keyman is registered
		if((pkbh->nrules > MAXRULESFREE) && 
			!(IsRegistered(KEY_KEYMAN) || IsRegistered(KEY_KEYMANDEVELOPER))) 
		{
			Error = ERR_UNREGISTERED; UnmapViewOfFile(pbmm);
			CloseHandle(hMapObject); CloseHandle(hFile); return FALSE;
		}
*/

		// Can read and decrypt file here
		SetFilePointer(hFile,0,NULL,FILE_BEGIN);
		ReadFile(hFile,pbmm,dwFileSize[0],&nRead,NULL);

		CloseHandle(hFile); hFile = NULL;

		// Check if file read correctly (verify checksum)
		if(nRead >= dwFileSize[0])
		{
			dwChecksum = GetCRC32(pbmm,totalsize);
			if(memcmp(pbmm+totalsize,&dwChecksum,4) == 0) Error = ERR_NONE;
		}

		if(Error == ERR_CFGINVALID)
		{			
			UnmapViewOfFile(pbmm); CloseHandle(hMapObject); return FALSE;
		}		

		// Decrypt the string table
		DecryptStrings(pkbh);
	}

	// Copy the keyboard parameters (not the variables)
	*(KBHEADER *)kbi = *pkbh;

	// Correct the table base addresses
	kbi->BaseAddress = pbmm;
	kbi->index = (DWORD *)(pbmm + pkbh->dwIndex);
	kbi->rules = (RULE *)(pbmm + pkbh->dwRules);
	kbi->pst = (PWCHAR)(pbmm + pkbh->dwStrings);

	// Save the file and mapping object handles for destruction on exit
	kbi->hFile = hFile;
	kbi->hMapObject = hMapObject;

	CellSize.x = kbi->h.gridx; CellSize.y = kbi->h.gridy;

	// Read saved options from registry
	wsprintf(key,"IMX: %s",kbi->h.name);
	kbi->h.dwOptions = ReadRegSetting(key,kbi->h.dwOptions);

	Error = ERR_NONE;
	return TRUE;
}

void DeleteKeyboard(PSTR KeyboardName)
{
	int nkbi;
	KEYBOARD *kbi;

	if((nkbi=KeyboardIndex(KeyboardName)) == nKeyboards) return;

	kbi = &Keyboards[nkbi];
	memmove(kbi, kbi+1, sizeof(KEYBOARD)*(nKeyboards-nkbi-1));

	if(--nKeyboards == 0)
	{
		delete Keyboards;
		Keyboards = NULL;
	}
}

void CreateKeyboard(PSTR KeyboardName)
{
	int nkbi;

	if((nkbi=KeyboardIndex(KeyboardName)) == nKeyboards)
	{
		KEYBOARD *kb2 = new KEYBOARD[nKeyboards + 1];
		if(nKeyboards > 0)
		{
			memcpy(kb2, Keyboards, sizeof(KEYBOARD) * nKeyboards);
			delete Keyboards;
		}
		Keyboards = kb2;
		ZeroMemory(&Keyboards[nKeyboards],sizeof(KEYBOARD));
		strncpy_s(Keyboards[nKeyboards].h.name, sizeof Keyboards[nKeyboards].h.name, KeyboardName, 127);
		nKeyboards++;
	}
}

void WriteRegSetting(PSTR text, int value)
{
	HKEY hkey;
	if(RegCreateKeyEx(HKEY_CURRENT_USER, "Software\\Tavultesoft\\KeymanIMX\\7.0", 0, NULL, NULL, KEY_ALL_ACCESS | KEY_WOW64_32KEY, NULL, &hkey, NULL) == ERROR_SUCCESS)
	{
		RegSetValueEx(hkey, text, 0, REG_DWORD, (PBYTE) &value, 4);
		RegCloseKey(hkey);
	}
}

int ReadRegSetting(PSTR text, int dflt)
{
	HKEY hkey;
	if(RegOpenKeyEx(HKEY_CURRENT_USER, "Software\\Tavultesoft\\KeymanIMX\\7.0", 
		0, KEY_ALL_ACCESS | KEY_WOW64_32KEY, &hkey) == ERROR_SUCCESS)
	{
		unsigned long value, sz = 4, tp = REG_DWORD;
		if(RegQueryValueEx(hkey, text, 0, &tp, (PBYTE) &value, &sz) == ERROR_SUCCESS)
		{
			RegCloseKey(hkey);
			return value;
		}
		RegCloseKey(hkey);
	}
	return dflt;
}

// Read (or default) saved configuration parameters, and limit to safe values
BOOL ReadConfiguration(BOOL All)
{
	int xmax, ymax, dfltCells=9;
	char key[128];

	DisplayMode = ReadRegSetting("IMX match",DM_LIMITED);
	Vertical = ReadRegSetting("IMX z",FALSE) ? TRUE : FALSE;
	EnableTracking = ReadRegSetting("IMX track",TRUE) ? TRUE : FALSE;
	Tracking = EnableTracking && (!Vertical);

	if(CurKbd)
	{
		wsprintf(key,"IMX: %s",CurKbd->h.name);
		CurKbd->h.dwOptions = ReadRegSetting(key,0);
		if((CurKbd->h.dwOptions & SELECTIONBITS) == SM_FKEYS) dfltCells = 12;
	}

	if(All)
	{
		// Read position for non-tracking window (use by default when creating window)
		IMPos.x = ReadRegSetting("IMX x",0); 
		IMPos.y = ReadRegSetting("IMX y",0); 

		xmax = GetSystemMetrics(SM_CXSCREEN); 
		ymax = GetSystemMetrics(SM_CYSCREEN);

		if(Vertical)
		{
			if(IMPos.x > xmax - 8) IMPos.x = 0;
			if(IMPos.y > ymax - 80) IMPos.y = ymax - 80;
		}
		else
		{
			if(IMPos.x > xmax - 40) IMPos.x = 0;
			if(IMPos.y == 0 || IMPos.y > ymax - 8) IMPos.y = ymax - 80;
		}
	
		MaxCells = ReadRegSetting("IMX cells",dfltCells); 
		MaxCells = min(max(MaxCells,2),dfltCells);
	}

	return TRUE;
}

BOOL SaveIMXPosition(void)
{
	RECT rect;
	if(hwnd && !Tracking)
	{
		GetWindowRect(hwnd,&rect); 
		WriteRegSetting("IMX x",rect.left); WriteRegSetting("IMX y",rect.top);
	}
	return TRUE;
}

// Simulate a (virtual) key. Note that modified keys cannot be handled this way. 
void SendKey(int vk)
{
	keybd_event(vk,0,0,0); keybd_event(vk,0,KEYEVENTF_KEYUP,0);
}

// Check for existence of key - don't need to check validity, as Keyman will do that
/*BOOL IsRegistered(UINT regKeyID)
{
	HKEY hkey;
	DWORD sz, tp = REG_BINARY;
	BOOL Exists=FALSE;
	PSTR pKey;

	switch(regKeyID)
	{
	case KEY_KEYMAN:
		pKey = "SOFTWARE\\Tavultesoft\\Keyman\\6.0";
		break;
	case KEY_KEYMANDEVELOPER:
		pKey = "SOFTWARE\\Tavultesoft\\Keyman Developer\\6.0";
		break;
	default:
		return TRUE;
	}

	if(RegOpenKeyEx(HKEY_LOCAL_MACHINE,pKey,0,KEY_READ,&hkey) == ERROR_SUCCESS)
	{
		if((RegQueryValueEx(hkey, "registration key", 0, &tp, NULL, &sz) == ERROR_SUCCESS)
			&& (tp == REG_BINARY)) Exists = TRUE;
		if((RegQueryValueEx(hkey, "licence blob", 0, &tp, NULL, &sz) == ERROR_SUCCESS)
			&& (tp == REG_BINARY)) Exists = TRUE;
		if((RegQueryValueEx(hkey, "evaluation", 0, &tp, NULL, &sz) == ERROR_SUCCESS)
			&& (tp == REG_BINARY)) Exists = TRUE;
		RegCloseKey(hkey);
	}
	
	if(!Exists && regKeyID == KEY_KEYMAN)
	{
	  if(RegOpenKeyEx(HKEY_LOCAL_MACHINE,"SOFTWARE\\Tavultesoft\\Keyman Engine\\7.0",0,KEY_READ,&hkey) == ERROR_SUCCESS)
	  {
	    Exists = TRUE;
	    RegCloseKey(hkey);
	  }
	  if(RegOpenKeyEx(HKEY_LOCAL_MACHINE,"SOFTWARE\\Tavultesoft\\Keyman Engine\\8.0",0,KEY_READ,&hkey) == ERROR_SUCCESS)
	  {
	    Exists = TRUE;
	    RegCloseKey(hkey);
	  }
  }
  
	return Exists;
}*/

BOOL IsHexString(PWSTR pContext, UINT lBuf, WCHAR wChar)
{
	switch(lBuf)
	{
	case 0:
		return (wChar==L'U');
	case 1:
		return (*pContext == L'U' && wChar == L'+');
	default:
		if(*pContext != L'U' || *(pContext+1) != '+') return FALSE;
		return (wcschr(L"0123456789abcdefABCDEF",wChar) > 0);
	}
}

BOOL OutputUnicode(PWSTR pContext,UINT lBuf)
{
	WCHAR tOut[4]={0};
	DWORD dwChar;
	int i;

	if(lBuf < 4) return FALSE;

	if(*pContext != L'U' || *(pContext+1) != L'+') return FALSE;

	dwChar = wcstoul(pContext+2,NULL,16);

	if(dwChar < 0x10000)
	{
		tOut[0] = (WCHAR)dwChar;
	}
	else
	{
		tOut[0] = (WCHAR)Uni_UTF32ToSurrogate1(dwChar);
		tOut[1] = (WCHAR)Uni_UTF32ToSurrogate2(dwChar);
	}

	(*KMSetOutput)(tOut, 0);

	for(i=0; i<MAXACTIVERULES; i++) ActiveRule[i] = NULL;

	SaveIMXPosition(); ExtendMatch = FALSE;
	*ContextBuf = 0; 
	(*KMHideIM)();	// hide the IM window on completion
	return TRUE;
}