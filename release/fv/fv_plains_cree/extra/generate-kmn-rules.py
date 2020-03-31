#!/usr/bin/env python3
# -*- coding: UTF-8 -*-

"""
Generates KMN rules for all syllabics sequences with the
[T_LONG_DOT] and [T_W_DOT] keys.

This script requires Python 3.6+.
"""

import csv
from distutils.util import strtobool
from pprint import pprint
from typing import Dict, NamedTuple, Optional
from unicodedata import normalize


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


class Syllabic(NamedTuple):
    char: str

    @property
    def codepoint(self):
        return f"{ord(self.char):04X}"

    @property
    def uplus(self):
        return f"U+{self.codepoint}"

    def __str__(self) -> str:
        return self.char


def to_bool(val: str) -> bool:
    return bool(strtobool(val or "False"))


def without_diacritic(s: str) -> str:
    return normalize("NFD", s)[0]


table: Dict[Index, Syllabic] = {}


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

for index, syllabic in table.items():
    consonant, vowel, has_w, is_long = index
    if index.lacking_long_diacritic:
        try:
            with_long_dot = table[Index(consonant, vowel, has_w, True)]
        except KeyError:
            pass
        else:
            print(f"  {syllabic.uplus} + [T_LONG_DOT] > {with_long_dot.uplus}", end="")
            print(f"  c {syllabic} -> {with_long_dot}")
    if index.lacking_w_diacritic:
        try:
            with_w_dot = table[Index(consonant, vowel, True, is_long)]
        except KeyError:
            pass
        else:
            print(f"  {syllabic.uplus} + [T_W_DOT] > {with_w_dot.uplus}", end="")
            print(f"     c {syllabic.char} -> {with_w_dot.char}")
