#
# Generate all possible Vietnamese rhyme with their Telex sequence.
# Note: Using Quy tắc đặt dấu thanh mới: https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ
#

TONE_ID = ['flat', 'rise', 'fall', 'inquire', 'break', 'heavy']
TONE_MODIFIER = {
    TONE_ID[0]: '',
    TONE_ID[1]: 's',
    TONE_ID[2]: 'f',
    TONE_ID[3]: 'r',
    TONE_ID[4]: 'x',
    TONE_ID[5]: 'j',
}
VOWEL_MODIFIER = {
    'a': ['a', 'ă'],
    'e': ['e'],
    'o': ['o'],
    'w': ['a', 'â', 'o', 'u'],
}
SPECIAL_VOWELS = {
    TONE_ID[0]: {
        'a': [{'a': 'â'}, {'ă': 'â'}],
        'e': [{'e': 'ê'}],
        'o': [{'o': 'ô'}],
        'w': [{'a': 'ă'}, {'â': 'ă'}, {'o': 'ơ'}, {'u': 'ư'}],
    },
    TONE_ID[1]: {
        'a': [{'á': 'ấ'}, {'ắ': 'ấ'}],
        'e': [{'é': 'ế'}],
        'o': [{'ó': 'ố'}],
        'w': [{'á': 'ắ'}, {'ấ': 'ắ'}, {'ó': 'ớ'}, {'ú': 'ứ'}],
    },
    TONE_ID[2]: {
        'a': [{'à': 'ầ'}, {'ằ': 'ầ'}],
        'e': [{'è': 'ề'}],
        'o': [{'ò': 'ồ'}],
        'w': [{'à': 'ằ'}, {'ầ': 'ằ'}, {'ò': 'ờ'}, {'ù': 'ừ'}],
    },
    TONE_ID[3]: {
        'a': [{'ả': 'ẩ'}, {'ẳ': 'ẩ'}],
        'e': [{'ẻ': 'ể'}],
        'o': [{'ỏ': 'ổ'}],
        'w': [{'ả': 'ẳ'}, {'ẩ': 'ẳ'}, {'ỏ': 'ở'}, {'ủ': 'ử'}],
    },
    TONE_ID[4]: {
        'a': [{'ã': 'ẫ'}, {'ẵ': 'ẫ'}],
        'e': [{'ẽ': 'ễ'}],
        'o': [{'õ': 'ỗ'}],
        'w': [{'ã': 'ẵ'}, {'ẫ': 'ẵ'}, {'õ': 'ỡ'}, {'ũ': 'ữ'}],
    },
    TONE_ID[5]: {
        'a': [{'ạ': 'ậ'}, {'ặ': 'ậ'}],
        'e': [{'ẹ': 'ệ'}],
        'o': [{'ọ': 'ộ'}],
        'w': [{'ạ': 'ặ'}, {'ậ': 'ặ'}, {'ọ': 'ợ'}, {'ụ': 'ự'}],
    },
}
TONE_RANGE = {
    'Full': ['', 'a', 'i', 'o', 'u', 'y', 'm', 'n', 'ng', 'nh'],
    'Partial': ['ch', 'c', 't', 'p'],
}
NUCLEI = {
    'a': {
        TONE_ID[0]: 'a',
        TONE_ID[1]: 'á',
        TONE_ID[2]: 'à',
        TONE_ID[3]: 'ả',
        TONE_ID[4]: 'ã',
        TONE_ID[5]: 'ạ',
    },
    'ă': {
        TONE_ID[0]: 'ă',
        TONE_ID[1]: 'ắ',
        TONE_ID[2]: 'ằ',
        TONE_ID[3]: 'ẳ',
        TONE_ID[4]: 'ẵ',
        TONE_ID[5]: 'ặ',
    },
    'â': {
        TONE_ID[0]: 'â',
        TONE_ID[1]: 'ấ',
        TONE_ID[2]: 'ầ',
        TONE_ID[3]: 'ẩ',
        TONE_ID[4]: 'ẫ',
        TONE_ID[5]: 'ậ',
    },
    'e': {
        TONE_ID[0]: 'e',
        TONE_ID[1]: 'é',
        TONE_ID[2]: 'è',
        TONE_ID[3]: 'ẻ',
        TONE_ID[4]: 'ẽ',
        TONE_ID[5]: 'ẹ',
    },
    'ê': {
        TONE_ID[0]: 'ê',
        TONE_ID[1]: 'ế',
        TONE_ID[2]: 'ề',
        TONE_ID[3]: 'ể',
        TONE_ID[4]: 'ễ',
        TONE_ID[5]: 'ệ',
    },
    'i': {
        TONE_ID[0]: 'i',
        TONE_ID[1]: 'í',
        TONE_ID[2]: 'ì',
        TONE_ID[3]: 'ỉ',
        TONE_ID[4]: 'ĩ',
        TONE_ID[5]: 'ị',
    },
    'o': {
        TONE_ID[0]: 'o',
        TONE_ID[1]: 'ó',
        TONE_ID[2]: 'ò',
        TONE_ID[3]: 'ỏ',
        TONE_ID[4]: 'õ',
        TONE_ID[5]: 'ọ',
    },
    'ô': {
        TONE_ID[0]: 'ô',
        TONE_ID[1]: 'ố',
        TONE_ID[2]: 'ồ',
        TONE_ID[3]: 'ổ',
        TONE_ID[4]: 'ỗ',
        TONE_ID[5]: 'ộ',
    },
    'ơ': {
        TONE_ID[0]: 'ơ',
        TONE_ID[1]: 'ớ',
        TONE_ID[2]: 'ờ',
        TONE_ID[3]: 'ở',
        TONE_ID[4]: 'ỡ',
        TONE_ID[5]: 'ợ',
    },
    'u': {
        TONE_ID[0]: 'u',
        TONE_ID[1]: 'ú',
        TONE_ID[2]: 'ù',
        TONE_ID[3]: 'ủ',
        TONE_ID[4]: 'ũ',
        TONE_ID[5]: 'ụ',
    },
    'ư': {
        TONE_ID[0]: 'ư',
        TONE_ID[1]: 'ứ',
        TONE_ID[2]: 'ừ',
        TONE_ID[3]: 'ử',
        TONE_ID[4]: 'ữ',
        TONE_ID[5]: 'ự',
    },
    'y': {
        TONE_ID[0]: 'y',
        TONE_ID[1]: 'ý',
        TONE_ID[2]: 'ỳ',
        TONE_ID[3]: 'ỷ',
        TONE_ID[4]: 'ỹ',
        TONE_ID[5]: 'ỵ',
    },
    'iê': {
        TONE_ID[0]: 'iê',
        TONE_ID[1]: 'iế',
        TONE_ID[2]: 'iề',
        TONE_ID[3]: 'iể',
        TONE_ID[4]: 'iễ',
        TONE_ID[5]: 'iệ',
    },
    'oa': {
        TONE_ID[0]: 'oa',
        TONE_ID[1]: 'oá',
        TONE_ID[2]: 'oà',
        TONE_ID[3]: 'oả',
        TONE_ID[4]: 'oã',
        TONE_ID[5]: 'oạ',
    },
    'oă': {
        TONE_ID[0]: 'oă',
        TONE_ID[1]: 'oắ',
        TONE_ID[2]: 'oằ',
        TONE_ID[3]: 'oẳ',
        TONE_ID[4]: 'oẵ',
        TONE_ID[5]: 'oặ',
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
    'uâ': {
        TONE_ID[0]: 'uâ',
        TONE_ID[1]: 'uấ',
        TONE_ID[2]: 'uầ',
        TONE_ID[3]: 'uẩ',
        TONE_ID[4]: 'uẫ',
        TONE_ID[5]: 'uậ',
    },
    'uê': {
        TONE_ID[0]: 'uê',
        TONE_ID[1]: 'uế',
        TONE_ID[2]: 'uề',
        TONE_ID[3]: 'uể',
        TONE_ID[4]: 'uễ',
        TONE_ID[5]: 'uệ',
    },
    'uô': {
        TONE_ID[0]: 'uô',
        TONE_ID[1]: 'uố',
        TONE_ID[2]: 'uồ',
        TONE_ID[3]: 'uổ',
        TONE_ID[4]: 'uỗ',
        TONE_ID[5]: 'uộ',
    },
    'uơ': {
        TONE_ID[0]: 'uơ',
        TONE_ID[1]: 'uớ',
        TONE_ID[2]: 'uờ',
        TONE_ID[3]: 'uở',
        TONE_ID[4]: 'uỡ',
        TONE_ID[5]: 'uợ',
    },
    'uy': {
        TONE_ID[0]: 'uy',
        TONE_ID[1]: 'uý',
        TONE_ID[2]: 'uỳ',
        TONE_ID[3]: 'uỷ',
        TONE_ID[4]: 'uỹ',
        TONE_ID[5]: 'uỵ',
    },
    'ươ': {
        TONE_ID[0]: 'ươ',
        TONE_ID[1]: 'ướ',
        TONE_ID[2]: 'ườ',
        TONE_ID[3]: 'ưở',
        TONE_ID[4]: 'ưỡ',
        TONE_ID[5]: 'ượ',
    },
    'uyê': {
        TONE_ID[0]: 'uyê',
        TONE_ID[1]: 'uyế',
        TONE_ID[2]: 'uyề',
        TONE_ID[3]: 'uyể',
        TONE_ID[4]: 'uyễ',
        TONE_ID[5]: 'uyệ',
    },
    'yê': {
        TONE_ID[0]: 'yê',
        TONE_ID[1]: 'yế',
        TONE_ID[2]: 'yề',
        TONE_ID[3]: 'yể',
        TONE_ID[4]: 'yễ',
        TONE_ID[5]: 'yệ',
    },
}
FINAL_MATCH = {
    '': ['a', 'ă', 'â', 'e', 'ê', 'i', 'o', 'ô', 'ơ', 'u', 'ư', 'y', 'iê', 'oa', 'oă', 'oe', 'oo', 'uâ', 'uê', 'uô', 'uy', 'ươ', 'uyê', 'yê'],
    'a': ['i', 'u', 'ư', 'uy'],
    'i': ['a', 'o', 'ô', 'ơ', 'u', 'ư', 'oa', 'uô', 'ươ'],
    'o': ['a', 'e', 'oa', 'oe'],
    'u': ['a', 'â', 'ê', 'i', 'ư', 'iê', 'uy', 'ươ', 'yê'],
    'y': ['a', 'â', 'oa', 'uâ'],
    'm': ['a', 'ă', 'â', 'e', 'ê', 'i', 'o', 'ô', 'ơ', 'u', 'ư', 'iê', 'oa', 'oă', 'oe', 'uô', 'ươ', 'yê'],
    'n': ['a', 'ă', 'â', 'e', 'ê', 'i', 'o', 'ô', 'ơ', 'u', 'ư', 'iê', 'oa', 'oă', 'oe', 'uâ', 'uô', 'uy', 'ươ', 'uyê', 'yê'],
    'ng': ['a', 'ă', 'â', 'e', 'o', 'ô', 'u', 'ư', 'iê', 'oa', 'oă', 'oo', 'uâ', 'uô', 'ươ', 'yê'],
    'nh': ['a', 'ê', 'i', 'oa', 'uê', 'uy'],
    'ch': ['a', 'ê', 'i', 'oa', 'uê', 'uy'],
    'c': ['a', 'ă', 'â', 'e', 'o', 'ô', 'u', 'ư', 'iê', 'oa', 'oo', 'uô', 'ươ'],
    't': ['a', 'ă', 'â', 'e', 'ê', 'i', 'o', 'ô', 'ơ', 'u', 'ư', 'iê', 'oa', 'oă', 'oe', 'uâ', 'uô', 'uy', 'ươ', 'uyê', 'yê'],
    'p': ['a', 'ă', 'â', 'e', 'ê', 'i', 'o', 'ô', 'ơ', 'u', 'iê', 'oa', 'uô', 'uy', 'ươ'],
}


class TelexRhyme:
    def __init__(self, base, modifier, result):
        self.base = base
        self.modifier = modifier
        self.result = result


def generate():
    rhymes = []
    for tone_id in TONE_ID:
        for final in FINAL_MATCH.keys():
            for nuclei in FINAL_MATCH[final]:
                modifier = TONE_MODIFIER[tone_id]
                if modifier != '' and (final in TONE_RANGE["Full"] or (final in TONE_RANGE['Partial'] and tone_id == TONE_ID[1] or tone_id == TONE_ID[5])):
                    base = NUCLEI[nuclei][TONE_ID[0]] + final
                    result = NUCLEI[nuclei][tone_id] + final
                    rhymes.append(TelexRhyme(base, modifier, result))
                    rhymes.append(TelexRhyme(result, modifier, base + modifier))
                    for tone_change in TONE_ID:
                        if tone_change != tone_id and tone_change != TONE_ID[0]:
                            rhymes.append(TelexRhyme(result, TONE_MODIFIER[tone_change], NUCLEI[nuclei][tone_change] + final))
                else:
                    continue

        for vowel_modifier in VOWEL_MODIFIER.keys():
            for j in range(len(VOWEL_MODIFIER[vowel_modifier])):
                base_vowel = VOWEL_MODIFIER[vowel_modifier][j]
                for final in FINAL_MATCH.keys():
                    for nuclei in FINAL_MATCH[final]:
                        if nuclei == base_vowel:
                            for k in range(len(SPECIAL_VOWELS[tone_id][vowel_modifier])):
                                if j == k:
                                    hashtable = SPECIAL_VOWELS[tone_id][vowel_modifier][k]
                                    base_vowel_accented = list(SPECIAL_VOWELS[tone_id][vowel_modifier][k].keys())[0]
                                    if list(hashtable.keys())[0] == base_vowel_accented:
                                        if SPECIAL_VOWELS[TONE_ID[0]][vowel_modifier][k][base_vowel] in FINAL_MATCH[final]:
                                            rhymes.append(TelexRhyme(list(hashtable.keys())[0] + final, vowel_modifier, hashtable[base_vowel_accented] + final))
    return rhymes


if __name__ == '__main__':
    all_rhymes = generate()
    for i in range(len(all_rhymes)):
        print(f'{i}. {all_rhymes[i].base} + {all_rhymes[i].modifier} = {all_rhymes[i].result}')
