# Convert a word in Latin Quoc Ngu to Ky Am Tu

import sys
import re


ONSETS = {
    'None': '',
    'b': 'ɫ',
    'd': 'ɸ',
    'h': 'ʂ',
    'l': 'ɴ',
    'm': 'ɭ',
    'n': 'ɳ',
    'p': 'ɬ',
    'r': 'ɵ',
    's': 'ɹ',
    't': 'ɱ',
    'v': 'ɰ',
    'x': 'ɷ',
    'đ': 'ɶ',
    'tr': 'ɺ',
    'th': 'ɲ',
    'ch': 'ɻ',
    'ph': 'ɯ',
    'nh': 'ɼ',
    'kh': 'ʀ',
    'gi': 'ɽ',
    'qu': 'ɾɮ',
    'ngh': 'ɿ',
    'ng': 'ɿ',
    'gh': 'ʁ',
    'g': 'ʁ',
    'k': 'ɾ',
    'c': 'ɾ',
}
RHYMES = {
    'a': 'ʕ',
    'ă': 'ʖ',
    'â': 'ʒ',
    'e': 'ʔ',
    'ê': 'ʐ',
    'i': 'ʍ',
    'o': 'ʗ',
    'ô': 'ʓ',
    'ơ': 'ʑ',
    'u': 'ʏ',
    'ư': 'ʎ',
    'y': 'ʍ',
    'iê': 'ʘ',
    'oa': 'ɮʕ',
    'oă': 'ɮʖ',
    'oe': 'ɮʔ',
    'uâ': 'ɮʒ',
    'uê': 'ɮʐ',
    'uô': 'ʚ',
    'uơ': 'ɮʑ',
    'ươ': 'ʙ',
    'uy': 'ɮʍ',
    'uyê': 'ɮʘ',
    'yê': 'ʘ',
    'ia': 'ʘ',
    'ua': 'ʚ',
    'ưa': 'ʙ',
    'uya': 'ɮʘ',
    'ai': 'ʕʊ',
    'oi': 'ʗʊ',
    'ôi': 'ʓʊ',
    'ơi': 'ʑʊ',
    'ui': 'ʏʊ',
    'ưi': 'ʎʊ',
    'oai': 'ɮʕʊ',
    'uôi': 'ʚʊ',
    'ươi': 'ʙʊ',
    'ao': 'ʕʅ',
    'eo': 'ʔʅ',
    'oao': 'ɮʕʅ',
    'oeo': 'ɮʔʅ',
    'au': 'ʖʅ',
    'âu': 'ʒʅ',
    'êu': 'ʐʅ',
    'uêu': 'ɮʐʅ',
    'iu': 'ʍʅ',
    'ưu': 'ʎʅ',
    'iêu': 'ʘʅ',
    'uyu': 'ɮʍʅ',
    'ươu': 'ʙʅ',
    'yêu': 'ʘʅ',
    'ay': 'ʖʊ',
    'ây': 'ʒʊ',
    'oay': 'ɮʖʊ',
    'uây': 'ɮʒʊ',
    'am': 'ʕʄ',
    'ăm': 'ʖʄ',
    'âm': 'ʒʄ',
    'em': 'ʔʄ',
    'êm': 'ʐʄ',
    'im': 'ʍʄ',
    'om': 'ʗʄ',
    'ôm': 'ʓʄ',
    'ơm': 'ʑʄ',
    'um': 'ʏʄ',
    'ưm': 'ʎʄ',
    'iêm': 'ʘʄ',
    'oam': 'ɮʕʄ',
    'oăm': 'ɮʖʄ',
    'oem': 'ɮʔʄ',
    'uôm': 'ʚʄ',
    'ươm': 'ʙʄ',
    'yêm': 'ʘʄ',
    'an': 'ʕʇ',
    'ăn': 'ʖʇ',
    'ân': 'ʒʇ',
    'en': 'ʔʇ',
    'ên': 'ʐʇ',
    'in': 'ʍʇ',
    'on': 'ʗʇ',
    'ôn': 'ʓʇ',
    'ơn': 'ʑʇ',
    'un': 'ʏʇ',
    'ưn': 'ʎʇ',
    'iên': 'ʘʇ',
    'oan': 'ɮʕʇ',
    'oăn': 'ɮʖʇ',
    'oen': 'ɮʔʇ',
    'uân': 'ɮʒʇ',
    'uôn': 'ʚʇ',
    'uyn': 'ɮʍʇ',
    'ươn': 'ʙʇ',
    'uyên': 'ɮʘʇ',
    'yên': 'ʘʇ',
    'ang': 'ʕʌ',
    'ăng': 'ʖʌ',
    'âng': 'ʒʌ',
    'eng': 'ʔʌ',
    'ong': 'ʗʌ',
    'ông': 'ʓʌ',
    'ung': 'ʏʌ',
    'ưng': 'ʎʌ',
    'iêng': 'ʘʌ',
    'oang': 'ɮʕʌ',
    'oăng': 'ɮʖʌ',
    'uăng': 'ɮʖʌ',
    'uâng': 'ɮʒʌ',
    'uông': 'ʚʌ',
    'ương': 'ʙʌ',
    'yêng': 'ʘʌ',
    'anh': 'ʕʉ',
    'ênh': 'ʐʉ',
    'inh': 'ʍʉ',
    'iênh': 'ʘʉ',
    'oanh': 'ɮʕʉ',
    'uênh': 'ɮʐʉ',
    'uynh': 'ɮʍʉ',
    'ach': 'ʕʈ',
    'êch': 'ʐʈ',
    'ich': 'ʍʈ',
    'oach': 'ɮʕʈ',
    'uêch': 'ɮʐʈ',
    'uych': 'ɮʍʈ',
    'ac': 'ʕʋ',
    'ăc': 'ʖʋ',
    'âc': 'ʒʋ',
    'ec': 'ʔʋ',
    'oc': 'ʗʋ',
    'ôc': 'ʓʋ',
    'uc': 'ʏʋ',
    'ưc': 'ʎʋ',
    'iêc': 'ʘʋ',
    'oac': 'ɮʕʋ',
    'oăc': 'ɮʖʋ',
    'uôc': 'ɮʓʋ',
    'ươc': 'ʙʋ',
    'at': 'ʕʆ',
    'ăt': 'ʖʆ',
    'ât': 'ʒʆ',
    'et': 'ʔʆ',
    'êt': 'ʐʆ',
    'it': 'ʍʆ',
    'ot': 'ʗʆ',
    'ôt': 'ʓʆ',
    'ơt': 'ʑʆ',
    'ơc': 'ʑʋ',
    'ut': 'ʏʆ',
    'ưt': 'ʎʆ',
    'iêt': 'ʘʆ',
    'oat': 'ɮʕʆ',
    'oăt': 'ɮʖʆ',
    'oet': 'ɮʔʆ',
    'uât': 'ɮʒʆ',
    'uôt': 'ʚʆ',
    'uyt': 'ɮʍʆ',
    'ươt': 'ʙʆ',
    'uyêt': 'ɮʘʆ',
    'yêt': 'ʘʆ',
    'ap': 'ʕʃ',
    'ăp': 'ʖʃ',
    'âp': 'ʒʃ',
    'ep': 'ʔʃ',
    'êp': 'ʐʃ',
    'ip': 'ʍʃ',
    'op': 'ʗʃ',
    'ôp': 'ʓʃ',
    'ơp': 'ʑʃ',
    'up': 'ʏʃ',
    'iêp': 'ʍʐʃ',
    'oap': 'ɮʕʃ',
    'uôp': 'ʚʃ',
    'uyp': 'ɮʍʃ',
    'ươp': 'ʙʃ',
}
TONES = {
    'flat': list('aeiouăâêôơưy'),
    'rise': list('áéíóúắấếốớứý'),
    'fall': list('àèìòùằầềồờừỳ'),
    'inquire': list('ảẻỉỏủẳẩểổởửỷ'),
    'break': list('ãẽĩõũẵẫễỗỡữỹ'),
    'heavy': list('ạẹịọụặậệộợựỵ'),
}


def decompose(s):
    onset_pattern = '^(b|d|h|l|m|n|p|r|s|t|v|x|đ|tr|th|ch|ph|nh|kh|gi|qu|ngh|ng|gh|g|k|c)(?=[aeiouăâêôơưyáéíóúắấếốớứýàèìòùằầềồờừỳảẻỉỏủẳẩểổởửỷãẽĩõũẵẫễỗỡữỹạẹịọụặậệộợựỵ])'
    result_array = re.split(onset_pattern, s)
    if len(result_array) != 1:
        result_array = result_array[1:]
    try:
        rhyme_pos = 1
        if len(result_array) == 1:
            rhyme_pos = 0
            onset = 'None'
        else:
            onset = result_array[0]

        toneless_rhyme = ''
        for i in range(len(result_array[rhyme_pos])):
            if result_array[rhyme_pos][i] in TONES['flat']:
                toneless_rhyme += TONES['flat'][TONES['flat'].index(result_array[rhyme_pos][i])]
            elif result_array[rhyme_pos][i] in TONES['rise']:
                toneless_rhyme += TONES['flat'][TONES['rise'].index(result_array[rhyme_pos][i])]
            elif result_array[rhyme_pos][i] in TONES['fall']:
                toneless_rhyme += TONES['flat'][TONES['fall'].index(result_array[rhyme_pos][i])]
            elif result_array[rhyme_pos][i] in TONES['inquire']:
                toneless_rhyme += TONES['flat'][TONES['inquire'].index(result_array[rhyme_pos][i])]
            elif result_array[rhyme_pos][i] in TONES['break']:
                toneless_rhyme += TONES['flat'][TONES['break'].index(result_array[rhyme_pos][i])]
            elif result_array[rhyme_pos][i] in TONES['heavy']:
                toneless_rhyme += TONES['flat'][TONES['heavy'].index(result_array[rhyme_pos][i])]
            else:
                toneless_rhyme += result_array[rhyme_pos][i]

        if onset == 'g' and toneless_rhyme[0] == 'i':
            return {
                'onset': 'gi',
                'rhyme': toneless_rhyme
            }
        if onset == 'gi' and toneless_rhyme[0] == 'ê':
            return {
                'onset': 'gi',
                'rhyme': 'i' + toneless_rhyme
            }
        if onset == 'qu' and toneless_rhyme[0] == 'y' and len(toneless_rhyme) > 1:
            return {
                'onset': 'k',
                'rhyme': 'u' + toneless_rhyme
            }
        if onset == 'qu' and toneless_rhyme[0] == 'ô' and len(toneless_rhyme) > 1:
            return {
                'onset': onset,
                'rhyme': 'ơ' + toneless_rhyme[1:]
            }
        return {
            'onset': onset,
            'rhyme': toneless_rhyme
        }
    except IndexError:
        return None


def get_tone(s):
    for char in s:
        if char in TONES['rise']:
            return 'ɦ'
        if char in TONES['fall']:
            return 'ɧ'
        if char in TONES['inquire']:
            return 'ɨ'
        if char in TONES['break']:
            return 'ɩ'
        if char in TONES['heavy']:
            return 'ɪ'
    return 'ɥ'


class Syllable:
    def __init__(self, s):
        self.source = s
        decomposition = decompose(s)
        if decomposition is None:
            self.tone = None
            self.onset = None
            self.rhyme = None
        else:
            self.tone = get_tone(s)
            self.onset = decomposition['onset']
            self.rhyme = decomposition['rhyme']
            if self.tone == 'ɥ':
                self.tone_name = '<tone:flat>'
            if self.tone == 'ɦ':
                self.tone_name = '<tone:rise>'
            if self.tone == 'ɧ':
                self.tone_name = '<tone:fall>'
            if self.tone == 'ɨ':
                self.tone_name = '<tone:inquire>'
            if self.tone == 'ɩ':
                self.tone_name = '<tone:break>'
            if self.tone == 'ɪ':
                self.tone_name = '<tone:heavy>'

    def is_kat(self):
        return self.tone is not None

    def get_kat(self, verbose=False):
        if self.is_kat():
            try:
                if verbose:
                    return self.source + ' = ' + self.onset + ' + ' + self.rhyme + ' + ' + self.tone_name + ' = ' \
                           + self.tone + ONSETS[self.onset] + RHYMES[self.rhyme]
                else:
                    return self.tone + ONSETS[self.onset] + RHYMES[self.rhyme]
            except KeyError:
                return  self.source
        else:
            return self.source


def print_help():
    print(
        'Syntax: py main.py <path/to/input/file> <encoding> <path/to/output/file>\n'
        '        py main.py <word>'
    )


if __name__ == '__main__':
    if len(sys.argv) == 1:
        print_help()
    elif len(sys.argv) == 2:
        print(Syllable(sys.argv[1].lower()).get_kat(verbose=True))
    else:
        encoding = 'utf-8'
        if len(sys.argv) == 4:
            encoding = sys.argv[2]

        lines = []
        file = open(sys.argv[1], 'r', encoding=encoding)
        for line in file:
            kat = Syllable(line.strip().lower()).get_kat()
            print(f'\r{line.strip()} --> {kat}')
            lines.append(kat + '\n')
        file.close()

        if len(sys.argv) <= 2:
            file = open(sys.argv[1], 'w', encoding=encoding)
        elif len(sys.argv) == 3:
            file = open(sys.argv[2], 'w', encoding=encoding)
        else:
            file = open(sys.argv[3], 'w', encoding=encoding)
        for line in lines:
            file.write(line)
        file.close()
