#
# Generate Vietnamese rhymes that specifically uses Quy tắc đặt dấu thanh mới:
# https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ; with their Telex sequence included.
#
from vn_telex.utils.TelexRule import TelexRule


KMN_CONTEXT_LOGIC = "if(option_toneplace = 'new')"

TONE_ID = ['flat', 'rise', 'fall', 'inquire', 'break', 'heavy']
TONE_MODIFIER = {
    TONE_ID[0]: '',
    TONE_ID[1]: 's',
    TONE_ID[2]: 'f',
    TONE_ID[3]: 'r',
    TONE_ID[4]: 'x',
    TONE_ID[5]: 'j',
}
TONE_RANGE = {
    'Full': ['', 'a', 'i', 'o', 'u', 'y', 'm', 'n', 'ng', 'nh'],
    'Partial': ['ch', 'c', 't', 'p'],
}
NUCLEI = {
    'oa': {
        TONE_ID[0]: 'oa',
        TONE_ID[1]: 'oá',
        TONE_ID[2]: 'oà',
        TONE_ID[3]: 'oả',
        TONE_ID[4]: 'oã',
        TONE_ID[5]: 'oạ',
    },
    'oe': {
        TONE_ID[0]: 'oe',
        TONE_ID[1]: 'oé',
        TONE_ID[2]: 'oè',
        TONE_ID[3]: 'oẻ',
        TONE_ID[4]: 'oẽ',
        TONE_ID[5]: 'oẹ',
    },
    'oo': {
        TONE_ID[0]: 'oo',
        TONE_ID[1]: 'oó',
        TONE_ID[2]: 'oò',
        TONE_ID[3]: 'oõ',
        TONE_ID[4]: 'oỏ',
        TONE_ID[5]: 'oọ',
    },
    'uy': {
        TONE_ID[0]: 'uy',
        TONE_ID[1]: 'uý',
        TONE_ID[2]: 'uỳ',
        TONE_ID[3]: 'uỷ',
        TONE_ID[4]: 'uỹ',
        TONE_ID[5]: 'uỵ',
    },
}
FINAL_MATCH = {
    '': ['oa', 'oe', 'oo', 'uy'],
    'a': ['uy'],
    'i': ['oa'],
    'o': ['oa', 'oe'],
    'u': ['uy'],
    'y': ['oa'],
    'm': ['oa', 'oe', 'uy'],
    'n': ['oa', 'oe', 'uy'],
    'ng': ['oa', 'oo'],
    'nh': ['oa', 'uy'],
    'ch': ['oa', 'uy'],
    'c': ['oa', 'oo'],
    't': ['oa', 'oe', 'uy'],
    'p': ['oa', 'uy'],
}


def generate():
    rhymes = []
    for tone_id in TONE_ID:
        for final in FINAL_MATCH.keys():
            for nuclei in FINAL_MATCH[final]:
                modifier = TONE_MODIFIER[tone_id]
                if modifier != '' and (final in TONE_RANGE["Full"] or (final in TONE_RANGE['Partial'] and tone_id == TONE_ID[1] or tone_id == TONE_ID[5])):
                    base = NUCLEI[nuclei][TONE_ID[0]] + final
                    result = NUCLEI[nuclei][tone_id] + final
                    rhymes.append(TelexRule(base, modifier, result, kmn_clogic=KMN_CONTEXT_LOGIC))
                    rhymes.append(TelexRule(result, modifier, base + modifier, kmn_clogic=KMN_CONTEXT_LOGIC))
                    for tone_change in TONE_ID:
                        if tone_change != tone_id and tone_change != TONE_ID[0]:
                            rhymes.append(TelexRule(result, TONE_MODIFIER[tone_change], NUCLEI[nuclei][tone_change] + final, kmn_clogic=KMN_CONTEXT_LOGIC))
                else:
                    continue
    return rhymes


if __name__ == '__main__':
    all_rhymes = generate()
    for i in range(len(all_rhymes)):
        print(f'{i}. {all_rhymes[i].base} + {all_rhymes[i].modifier} = {all_rhymes[i].result}')
