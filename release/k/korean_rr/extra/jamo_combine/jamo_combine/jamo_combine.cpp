
#define STRICT
#include <windows.h>
#include "imlib.h"

#define SBase 0xAC00
#define LBase 0x1100
#define VBase 0x1161
#define TBase 0x11A7
#define SCount 11172
#define LCount 19
#define VCount 21
#define TCount 28
#define NCount (VCount * TCount)


extern "C" BOOL _declspec(dllexport) WINAPI jamo_combine(HWND hwndFocus, WORD KeyStroke, WCHAR KeyChar, DWORD ShiftFlags)
{
	WCHAR buf[32], syl[2]; 
	int LIndex, VIndex, TIndex, n = 0, FDelete = 3;
	if(!PrepIM()) return FALSE;

	if(!KMGetContext(buf, 3)) return TRUE;

  //if(wcslen(buf) < 3) return TRUE;
	
	if(buf[2] >= TBase && buf[2] < TBase+TCount)
	{
		TIndex = buf[2] - TBase;
	}
	else
	{
		TIndex = 0;
		if(buf[2] != 0) n = 1;  // Previous character is not 
    FDelete = 2;
	}
#ifdef _DEBUG
	WCHAR z[256];
	wsprintfW(z, L">> n=%d buf[0]=%x buf[1]=%x buf[2]=%x LIndex=%d VIndex=%d TIndex=%d)", n, buf[0], buf[1], buf[2], buf[n]-LBase, buf[n+1]-VBase, TIndex);
#endif
	if(buf[n] >= LBase && buf[n] < LBase+LCount &&
	   buf[n+1] >= VBase && buf[n+1] < VBase+VCount)
	{
		LIndex = buf[n] - LBase;
		VIndex = buf[n+1] - VBase;

		syl[0] = (LIndex * VCount + VIndex) * TCount + TIndex + SBase;
		syl[1] = 0;
		KMSetOutput(syl, FDelete);
#ifdef _DEBUG
		KMSetOutput(L" (SUCCESS: <<", 0);
		KMSetOutput(buf, 0);
		KMSetOutput(z, 0);
#endif
		return TRUE;
	}
#ifdef _DEBUG
	KMSetOutput(L" (FAIL: <<", 0);
	KMSetOutput(buf, 0);
	KMSetOutput(z, 0);
#endif
	return TRUE;
}


