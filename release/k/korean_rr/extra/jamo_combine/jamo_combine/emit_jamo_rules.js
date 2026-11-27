
const SBase = 0xAC00;
const LBase = 0x1100;
const VBase = 0x1161;
const TBase = 0x11A7;
const SCount = 11172;
const LCount = 19;
const VCount = 21;
const TCount = 28;
const NCount = (VCount * TCount);

/**
 *
 * @param {number} v
 * @returns
 */
function uni(v) {
	return `U+` + v.toString(16).padStart(4, '0');
}

function hex(v) {
	return v.toString(16).padStart(4, '0');
}

let lines = [];

emit_store('JV', VBase, VCount, 1);
emit_store('JT', TBase, TCount, 1);

for(let LIndex = 0; LIndex < LCount; LIndex++) {
	//emit_store(`JLV${hex(LIndex + LBase)}`, VBase, VCount, 1);
	emit_store(`JLVS${hex(LIndex + LBase)}`, SBase + (LIndex * VCount) * TCount, VCount, TCount);
	for(let VIndex = 0; VIndex < VCount; VIndex++) {
		emit_store(`JLVTS${hex(LIndex + LBase)}_${hex(VIndex + VBase)}`, SBase + (LIndex * VCount + VIndex) * TCount, TCount, 1);
	}
}

function emit_store(name, base, count, inc) {
	let line = `store(${name}) `;
	let pad = ''.padStart(line.length);

	for(let i = 0; i < count; i++) {
		/*if(i != 0 && (i % 8 == 0)) {
			lines.push(line);
			line = pad;
		}*/
		line += ' ' + uni(base + i * inc);
	}
	if(line != pad) {
		lines.push(line);
	}
	// lines.push('');
}

// line = 'store(JT) ';
// for(let TIndex = 0; TIndex < TCount; TIndex++) {
// 	line += ' ' + uni(TIndex+TBase);
// 	if(TIndex % 8 == 0) {
// 		lines.push(line);
// 		line = '          ';
// 	}
// }
// lines.push(line);
lines.push('');

lines.push('group(jamo_combine)');

for(let LIndex = 0; LIndex < LCount; LIndex++) {
	lines.push(`  ${uni(LIndex + LBase)} any(JV)         > context(2) use(JV${hex(LIndex+LBase)})`);
	lines.push(`  ${uni(LIndex + LBase)} any(JV) any(JT) > context(2) context(3) use(JV${hex(LIndex+LBase)})`);
}


for(let LIndex = 0; LIndex < LCount; LIndex++) {
	lines.push('');
	lines.push(`group(JV${hex(LIndex + LBase)})`);
	lines.push(`  any(JV) > index(JLVS${hex(LIndex + LBase)}, 1)`);
	for(let VIndex = 0; VIndex < VCount; VIndex++) {
		lines.push(`  ${uni(VIndex + VBase)} any(JT) > index(JLVTS${hex(LIndex + LBase)}_${hex(VIndex + VBase)}, 2)`);
		// any(JLVT${hex(LIndex + LBase)}_${hex(VIndex + VBase)}) index(JLVS${hex(LIndex + LBase)}, 1)`);
		// Open syllable
		const sOpen = (LIndex * VCount + VIndex) * TCount; //TIndex=0
		// lines.push(`  ${uni(VIndex + VBase)} > ${uni(sOpen + SBase)}   c ${(String.fromCodePoint(sOpen+SBase))}`);
		for(let TIndex = 0; TIndex < TCount; TIndex++) {
			// Closed syllable
			const s = (LIndex * VCount + VIndex) * TCount + TIndex;
			//lines.push(`  ${uni(VIndex + VBase)} ${uni(TIndex + TBase)} > ${uni(s + SBase)}   c ${(String.fromCodePoint(s+SBase))}`);
		}
	}
}

/*
lines = [];



for(let LIndex = 0; LIndex < LCount; LIndex++) {
	for(let VIndex = 0; VIndex < VCount; VIndex++) {
		// Open syllable
		const sOpen = (LIndex * VCount + VIndex) * TCount; //TIndex=0
		lines.push(`${uni(LIndex + LBase)} ${uni(VIndex + VBase)} > ${uni(sOpen + SBase)}   c ${(String.fromCodePoint(sOpen+SBase))}`);
		for(let TIndex = 0; TIndex < TCount; TIndex++) {
			// Closed syllable
			const s = (LIndex * VCount + VIndex) * TCount + TIndex;
			lines.push(`${uni(LIndex + LBase)} ${uni(VIndex + VBase)} ${uni(TIndex + TBase)} > ${uni(s + SBase)}   c ${(String.fromCodePoint(s+SBase))}`);
		}
	}
}

*/

console.log(lines.join('\n'));

/*
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
*/