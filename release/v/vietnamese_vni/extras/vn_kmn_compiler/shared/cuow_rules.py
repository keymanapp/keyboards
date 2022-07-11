from shared.KeymanRule import KeymanRule


BASE = 'uo'
RULES = {
    'uơ': ['q', 'h', 'th'],
    'ươ': ['ph', 'ch']
}


def generate(modifier=None):
    if modifier is None:
        raise ValueError("Must provide a modifier")
    rules = []

    for correction in RULES.keys():
        for initial_consonant in RULES[correction]:
            rules.append(KeymanRule(initial_consonant + BASE, modifier, initial_consonant + correction))
            rules.append(KeymanRule(initial_consonant + correction, modifier, initial_consonant + BASE + modifier))

    return rules


if __name__ == '__main__':
    all_rules = generate(modifier='%TEST%')
    for i in range(len(all_rules)):
        print(f'{i}. {all_rules[i].base} + {all_rules[i].modifier} = {all_rules[i].result}')
