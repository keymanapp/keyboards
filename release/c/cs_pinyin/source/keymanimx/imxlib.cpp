
#define STRICT
#include <windows.h>
#include "imxlib.h"

HMODULE hModuleKeyman32 = 0;
KMSetOutputProc KMSetOutput = NULL;
KMGetContextProc KMGetContext = NULL;
KMQueueActionProc KMQueueAction = NULL;
KMDisplayIMProc KMDisplayIM = NULL;
KMHideIMProc KMHideIM = NULL;
KMGetActiveKeyboardProc KMGetActiveKeyboard = NULL;
KMGetKeyboardPathProc KMGetKeyboardPath = NULL;

BOOL FMoveWindow=FALSE, FSizeWindow=FALSE;

extern BOOL Vertical;

// I don't know why this is defined here???????????????
BOOL WINAPI IntKMGetKeyboardPath(PSTR kbdname, PSTR buf, DWORD len)
{
	*kbdname = 0;
	return FALSE;
}

BOOL PrepIM(BOOL Reset)
{
	if(Reset) FMoveWindow = FSizeWindow = FALSE; // clear when initializing

	if(hModuleKeyman32 != 0) return TRUE;		// already prepared
#ifdef _WIN64
	hModuleKeyman32 = GetModuleHandle("keyman64.dll");
#else
	hModuleKeyman32 = GetModuleHandle("keyman32.dll");
#endif
	if(hModuleKeyman32 == 0)
	{
		KMGetKeyboardPath = IntKMGetKeyboardPath;	// I don't understand this?????????
		return TRUE;
	}
	
	KMSetOutput = (KMSetOutputProc) GetProcAddress(hModuleKeyman32, "KMSetOutput");
	if(!KMSetOutput) return FALSE;

	KMGetContext = (KMGetContextProc) GetProcAddress(hModuleKeyman32, "KMGetContext");
	if(!KMGetContext) return FALSE;

	KMQueueAction = (KMQueueActionProc) GetProcAddress(hModuleKeyman32, "KMQueueAction");
	if(!KMQueueAction) return FALSE;

	KMDisplayIM = (KMDisplayIMProc) GetProcAddress(hModuleKeyman32, "KMDisplayIM");
	if(!KMDisplayIM) return FALSE;

	KMHideIM = (KMHideIMProc) GetProcAddress(hModuleKeyman32, "KMHideIM");
	if(!KMHideIM) return FALSE;

	KMGetActiveKeyboard = (KMGetActiveKeyboardProc) GetProcAddress(hModuleKeyman32, "KMGetActiveKeyboard");
	if(!KMGetActiveKeyboard) return FALSE;

	KMGetKeyboardPath = (KMGetKeyboardPathProc) GetProcAddress(hModuleKeyman32, "KMGetKeyboardPath");
	if(!KMGetKeyboardPath) return FALSE;

	return TRUE;
}

// IMDefWindowProc returns TRUE if the window procedure should just return lResult, 
// and not process further.

// The cursor control has been altered to only show sizing arrows for sizable edges, and 
// return the normal pointer in all other cases, to correct behaviour when used with Word
HCURSOR GetHitTestCursor(HWND hwnd, LRESULT ht, LPRECT sizerect)
{
	LPSTR cr = NULL;

	memset(sizerect, 0, sizeof(RECT));

	if(Vertical) switch(ht)
	{
		case HTBOTTOMLEFT:  
		case HTBOTTOMRIGHT: 
		case HTBOTTOM:		
			cr = IDC_SIZENS; 
			sizerect->bottom = 1; 
			break;
		default: 
			cr = IDC_ARROW; 
			break;
	}
	else switch(ht)
	{
		case HTTOPRIGHT:	
		case HTBOTTOMRIGHT: 
		case HTRIGHT:
			cr = IDC_SIZEWE;   
			sizerect->right = 1; 
			break;
		default:			
			cr = IDC_ARROW; 
			break;
	}

	return LoadCursor(NULL, cr);
}

void Log(char *p, int n);

BOOL IMDefWindowProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam, LRESULT *lResult)
{
	static POINT FLastPoint;
	static RECT sizerect;
	static HCURSOR FHitTestCursor;

	RECT rect;
	POINTS pt;
	POINT pt2;
	LRESULT ht;

	switch(msg)
	{
	case WM_CREATE:
		PostMessage(hwnd, WM_NCACTIVATE, TRUE, 0);
		return FALSE;

	case WM_NCACTIVATE:
		*lResult = DefWindowProc(hwnd, msg, TRUE, lParam);
		return TRUE;

	case WM_USER_NCHITTEST:
		*lResult = DefWindowProc(hwnd, WM_NCHITTEST, wParam, lParam);
		return TRUE;

	case WM_NCHITTEST:
		*lResult = HTCLIENT;

		if(FMoveWindow || FSizeWindow) return TRUE;
		
		ht = DefWindowProc(hwnd, msg, wParam, lParam);
		SetCursor(FHitTestCursor = GetHitTestCursor(hwnd, ht, &sizerect));
		return TRUE;	//this is equivalent to returning HTCLIENT, which seems odd

	case WM_MOUSEACTIVATE:
		*lResult = MA_NOACTIVATE;
		return TRUE;

	case WM_LBUTTONDOWN:
		pt = MAKEPOINTS(lParam); pt2.x = pt.x; pt2.y = pt.y;
		ClientToScreen(hwnd, &pt2);

		FMoveWindow = FSizeWindow = FALSE;

		switch((ht=SendMessage(hwnd,WM_USER_NCHITTEST,0,MAKELONG(pt2.x,pt2.y))))
		{
		case HTCAPTION:
			*lResult = 0; 
			FMoveWindow = TRUE;
			SetCapture(hwnd);
			FLastPoint = pt2;
			SetCursor(FHitTestCursor);
			return TRUE;

		case HTTOP:			
		case HTTOPLEFT:		
		case HTTOPRIGHT:	
		case HTBOTTOM:		
		case HTBOTTOMLEFT:  
		case HTBOTTOMRIGHT: 
		case HTLEFT:		
		case HTRIGHT:	
			*lResult = 0;
			FSizeWindow = TRUE;
			SetCapture(hwnd);
			FLastPoint = pt2;
			SetCursor(FHitTestCursor);
			return TRUE;
				
		default:
			*lResult = 1;
			return (ht != HTCLIENT);
		}

	case WM_MOUSEMOVE:

		GetWindowRect(hwnd, &rect);
		pt = MAKEPOINTS(lParam); pt2.x = pt.x; pt2.y = pt.y;
		ClientToScreen(hwnd, &pt2);

		if(FMoveWindow)
		{
			MoveWindow(hwnd,rect.left+pt2.x-FLastPoint.x,rect.top+pt2.y-FLastPoint.y,
				rect.right-rect.left,rect.bottom-rect.top,TRUE);
			FLastPoint = pt2;
			SetCursor(FHitTestCursor);
			return TRUE;
		}
		else if(FSizeWindow)
		{ 
			POINT pt3 = pt2; pt3.x -= FLastPoint.x; pt3.y -= FLastPoint.y;
			RECT r2;
			r2.left = rect.left + pt3.x*sizerect.left;
			r2.top = rect.top + pt3.y*sizerect.top;
			r2.right = rect.right + pt3.x*sizerect.right;
			r2.bottom = rect.bottom + pt3.y*sizerect.bottom;
			if(r2.right - r2.left < 16) 
			{
				r2.right = rect.right; r2.left = rect.left;
			}
			else FLastPoint.x = pt2.x;
			if(r2.bottom - r2.top < 10) 
			{
				r2.bottom = rect.bottom; r2.top = rect.top;
			}
			else FLastPoint.y = pt2.y;

			MoveWindow(hwnd,r2.left,r2.top,r2.right-r2.left,r2.bottom-r2.top,TRUE);

			SetCursor(FHitTestCursor);
			return TRUE;
		}
		return SendMessage(hwnd, WM_USER_NCHITTEST, 0, MAKELONG(pt2.x, pt2.y)) != HTCLIENT;
	
	case WM_LBUTTONUP:
//		if(FMoveWindow || FSizeWindow)
//		{
			FMoveWindow = FSizeWindow = FALSE;
			ReleaseCapture();
			return TRUE;
//		}

//		pt = MAKEPOINTS(lParam); pt2.x = pt.x; pt2.y = pt.y;
//		ClientToScreen(hwnd, &pt2);
				
//		return SendMessage(hwnd, WM_USER_NCHITTEST, 0, MAKELONG(pt2.x, pt2.y)) != HTCLIENT;
	}

	return FALSE;
}
