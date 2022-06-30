from shared.KeymanRule import KeymanRule


INIT_CONSONANT = ['h', 'th']
MODIFIER = list('mnctp')
RULE = {
    'uơ': 'ươ',
    'uớ': 'ướ',
    'uờ': 'ườ',
    'uở': 'ưở',
    'uỡ': 'ưỡ',
    'uợ': 'ượ',
}


def generate():
    rules = []

    for init_consonant in INIT_CONSONANT:
        for modifier in MODIFIER:
            for base in RULE.keys():
                correction = RULE[base]
                rules.append(KeymanRule(init_consonant + base, modifier, init_consonant + correction + modifier))

    return rules


if __name__ == '__main__':
    all_rules = generate()
    for i in range(len(all_rules)):
        print(f'{i}. {all_rules[i].base} + {all_rules[i].modifier} = {all_rules[i].result}')
