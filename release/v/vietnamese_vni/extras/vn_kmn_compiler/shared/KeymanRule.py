class KeymanRule:
    def __init__(self, base, modifier, result, kmn_clogic=None, kmn_ologic=None):
        self.base = base
        self.modifier = modifier
        self.result = result
        self.kmn_clogic = kmn_clogic  # Context logic
        self.kmn_ologic = kmn_ologic  # Output logic

    def to_string(self):
        return 'TelexRule: {\n\tbase: ' + self.base + '\n\tmodifier: ' + self.modifier + '\n\tresult: ' + self.result + '\n\tkmn_clogic: ' + str(self.kmn_clogic) + '\n\tkmn_ologic: ' + str(self.kmn_ologic)
