// Shared header for KeymanIMX, used also by imxconfig

#define CFXVERSION	1001			// CFX file version

#define MAXINDEX	72				// max number of characters that can be indexed

#define MAXRULESFREE	6000		// max number of rules allowed for unregistered Keyman 

#define MAXOUTLEN	64				// required when passing strings to Keyman
#define MAXTAGLEN	15				// will be truncated with ellipsis if longer
				
#define HK_LCTRL	1				// hot key shift state bit masks
#define HK_RCTRL	2
#define HK_LALT		4
#define HK_RALT		8
#define HK_SHIFT	16
#define HK_CTRL		(HK_LCTRL+HK_RCTRL)
#define HK_ALT		(HK_LALT+HK_RALT)
#define HK_MODIFIERS	(HK_SHIFT+HK_CTRL+HK_ALT)

#define OM_DEFAULT	0				// default output mode
#define OM_TAG		2				// output tag strings
#define OM_BOTH		4				// output both character and tag (parenthesized)

#define DM_LIMITED	0				// limited display mode
#define DM_FULL		1				// full display mode

#define WC_QUERY	1				// wild card options
#define WC_STAR		2		
#define WC_QUOTE	4
#define WC_DASH		8

#define EnableDlgItem(hwnd,item)	EnableWindow(GetDlgItem((hwnd),(item)),TRUE)
#define DisableDlgItem(hwnd,item)	EnableWindow(GetDlgItem((hwnd),(item)),FALSE)
#define ShowDlgItem(hwnd,item)		ShowWindow(GetDlgItem((hwnd),(item)),SW_SHOW)
#define HideDlgItem(hwnd,item)		ShowWindow(GetDlgItem((hwnd),(item)),SW_HIDE)

// First character of a string that can be indexed (count must be < MAXINDEX)
#define INDEXSTRING "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*"

struct RULE
{
	DWORD input,tag,output;
	BYTE ilen,tlen,olen,frequency;
};

struct TEMPRULE
{
	WCHAR input[32],output[16],tag[32];
};

// Structure to hold all constant parameters and default keyboard options
// dwIndex, dwRules, dwStrings are byte offsets into the memory mapped file
struct KBHEADER
{
	char Flag[4];		// must be KCFX
	DWORD dwCfxVersion;	// CFX file version
	char name[128], ToneChar[16];
	int InputSize, gridx, gridy, nrules;
	LOGFONT lfMain, lfInput, lfTag;
	DWORD cfgKey, dwWild, dwFKeys, dwOptions;
	DWORD dwIndex, dwRules, dwStrings, cbStrings;
};

// Structure to hold keyboard parameters, pointers, and local variables
struct KEYBOARD
{
	KBHEADER h;
	HANDLE hFile, hMapObject;	
	LPVOID BaseAddress;	// pointer to start of shared mapped memory
	DWORD *index;		// pointer to start of index (must be corrected for each instance)
	RULE *rules;		// pointer to start of rule table (ditto)
	WCHAR *pst;			// pointer to start of string table (ditto)
};

// Option bits
#define SELECTIONBITS	3
#define TONEBITS		12
#define SELECTIFUNIQUE	16
#define SHOWDUPLICATES	32

enum tagConfig     {CFG_NONE=0,CFG_ANSI,CFG_UNICODE,CFG_UTF8};

enum tagFontStyle {FS_NONE=0,FS_BOLD,FS_ITALIC,FS_ITALICBOLD,FC_SYMBOL};

enum tagSelectionMode {SM_DEFAULT=0,SM_KEYPAD,SM_ALLDIGITS,SM_FKEYS};

enum tagToneMode {TM_NEVER=0,TM_ALWAYS,TM_OPTIONAL};

enum tagFKeyMode {FK_NONE=0,FK_NORMAL,FK_SHIFT,FK_CTRL,FK_CTRLSHIFT};

enum tagMatchMode {MM_NOMATCH=0,MM_START,MM_EXCEPTTONE,MM_MORETHANONE,MM_PERFECT};

enum tagErrors {ERR_NONE,ERR_UNKNOWN,ERR_UNREGISTERED,ERR_SHARING,ERR_CFGMISSING,ERR_CFGINVALID};

enum tagRegKeys {KEY_KEYMAN=1,KEY_KEYMANDEVELOPER};

#define MAXACTIVERULES	12

// Default IM Window dimensions
#define IMBORDERS		8
#define CWBORDERS		6
#define INPUTWIDTH		42	// this is increased dynamically as needed
#define CELL_X			32
#define CELL_Y			42
#define IM_WIDTH		(INPUTWIDTH+MAXACTIVERULES*CELL_X+IMBORDERS+CWBORDERS)
#define IM_HEIGHT		(CELL_Y+IMBORDERS+CWBORDERS)
#define MAXBMP			15

// Surrogate pair output
#define Uni_UTF32ToSurrogate1(ch)	(((ch) - 0x10000) / 0x400 + 0xD800)
#define Uni_UTF32ToSurrogate2(ch)	(((ch) - 0x10000) % 0x400 + 0xDC00)
