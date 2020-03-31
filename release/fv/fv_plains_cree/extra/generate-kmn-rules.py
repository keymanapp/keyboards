#!/usr/bin/env python3
# -*- coding: UTF-8 -*-

"""
Generates KMN rules for all syllabics sequences with the
[T_LONG_DOTn] and [T_W_DOTn] keys.

This script requires Python 3.6+.
"""

import csv
from distutils.util import strtobool
from pprint import pprint
from typing import Dict, List, NamedTuple, NewType, Optional
from unicodedata import normalize

Syllabic = NewType("Syllabic", str)


class Index(NamedTuple):
    consonant: Optional[str]
    vowel: str
    has_w: bool
    is_long: bool

    @property
    def lacking_w_diacritic(self):
        return not self.has_w

    @property
    def lacking_long_diacritic(self):
        return not self.is_long


def to_bool(val: str) -> bool:
    return bool(strtobool(val or "False"))


def without_diacritic(s: str) -> str:
    return normalize("NFD", s)[0]


table: Dict[Index, Syllabic] = {}


# Build the table from syllabics.tsv.
with open("./syllabics.tsv", "r", encoding="UTF-8") as f:
    reader = csv.DictReader(f, delimiter="\t")
    for entry in reader:
        if entry["kind"] not in ("syllable", "vowel"):
            continue

        consonant = entry["consonant"] or None
        has_w = to_bool(entry["has.w"])

        # Fix vowels not getting w:
        if consonant == "w":
            consonant = None
            has_w = True

        vowel = without_diacritic(entry["vowel"])
        is_long = to_bool(entry["has.long.vowel"])

        table[Index(consonant, vowel, has_w, is_long)] = Syllabic(entry["cans"])

# Generate parallel stores so that we can use the index() function:
without_w_store: List[Syllabic] = []
with_w_store: List[Syllabic] = []
without_long_store: List[Syllabic] = []
with_long_store: List[Syllabic] = []

# Generate 'w' stores
for index, syllabic in table.items():
    if index.has_w:
        continue
    consonant, vowel, _has_w, is_long = index
    try:
        with_w_syllabic = table[Index(consonant, vowel, True, is_long)]
    except KeyError:
        # Does not have a w-dot equivilent.
        continue

    without_w_store.append(syllabic)
    with_w_store.append(with_w_syllabic)

# Generate long dot stores
for index, syllabic in table.items():
    if index.is_long:
        continue
    consonant, vowel, has_w, _is_long = index
    try:
        with_long_syllabic = table[Index(consonant, vowel, has_w, True)]
    except KeyError:
        # Does not have a w-dot equivilent.
        continue

    without_long_store.append(syllabic)
    with_long_store.append(with_long_syllabic)

assert len(without_w_store) == len(without_w_store)
assert len(without_long_store) == len(without_long_store)
print(f"store(withoutW) '{''.join(without_w_store)}'")
print(f"store(withW) '{''.join(with_w_store)}'")
print(f"store(withoutLong) '{''.join(without_long_store)}'")
print(f"store(withLong) '{''.join(with_long_store)}'")

print()

for key in ("[T_W_DOT1]", "[T_W_DOT2]"):
    print(f"  any(withoutW) + {key} > index(withW, 1)")

for key in ("[T_LONG_DOT1]", "[T_LONG_DOT2]"):
    print(f"  any(withoutLong) + {key} > index(withLong, 1)")
