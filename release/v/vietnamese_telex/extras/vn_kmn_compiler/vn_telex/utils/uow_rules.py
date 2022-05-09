from vn_telex.utils.TelexRule import TelexRule

MODIFIER = 'w'
BASE = 'uo'
PHRASE = 'ưo'
CORRECTION = 'ươ'
FINAL = ['m', 'n', 'ng', 'c', 't', 'p']


def generate():
    rules = []

    for final in FINAL:
        if len(final) == 1:
            rules.append(TelexRule(PHRASE, final, CORRECTION + final))

    for final in FINAL:
        rules.append(TelexRule(BASE + final, MODIFIER, CORRECTION + final))
        rules.append(TelexRule(CORRECTION + final, MODIFIER, BASE + final + MODIFIER))

    return rules


if __name__ == '__main__':
    all_rules = generate()
    for i in range(len(all_rules)):
        print(f'{i}. {all_rules[i].base} + {all_rules[i].modifier} = {all_rules[i].result}')
