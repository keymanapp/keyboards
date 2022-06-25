from shared.KeymanRule import KeymanRule


BASE = 'uo'
PHRASE = 'ưo'
CORRECTION = 'ươ'
FINAL = ['m', 'n', 'ng', 'c', 't', 'p']


def generate(modifier=None):
    if modifier is None:
        raise ValueError("Must provide a modifier")
    rules = []

    for final in FINAL:
        if len(final) == 1:
            rules.append(KeymanRule(PHRASE, final, CORRECTION + final))

    for final in FINAL:
        rules.append(KeymanRule(BASE + final, modifier, CORRECTION + final))
        rules.append(KeymanRule(CORRECTION + final, modifier, BASE + final + modifier))

    return rules


if __name__ == '__main__':
    all_rules = generate(modifier='%TEST%')
    for i in range(len(all_rules)):
        print(f'{i}. {all_rules[i].base} + {all_rules[i].modifier} = {all_rules[i].result}')
