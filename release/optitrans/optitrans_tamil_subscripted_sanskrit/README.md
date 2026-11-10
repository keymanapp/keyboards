# Tamil Subscripted Sanskrit Phonetic (OPTITRANS) 
## Description

Tamil Subscripted Sanskrit Phonetic (OPTITRANS) keyboard is Tamil-subscripted Sanskrit input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems (see tamil_subscripted.toml).

Aspirated and voiced consonants (kha, gha and the like) carry subscript numerals that move to the end of the akshara when vowels are added: e.g. type `ge` for கெ₃.

You can use all the standard ITRANS key sequences plus key
sequences such as the below.

nk->ங்க், nkh->ங்க்₂, ng->ங்க்₃, ngh->ங்க்₄
nch->ஞ்ச், nCh->ஞ்ச்₂, nc->ஞ்ச், nC->ஞ்ச்₂, nchh->ஞ்ச்₂,
nj->ஞ்ஜ், njh->ஞ்ஜ்₂, nT->ண்ட், nTh->ண்ட்₂, nD->ண்ட்₃, nDh->ண்ட்₄
c->ச், C->ச்₂, z->ஃஜ், S->ஷ், jn->ஜ்ஞ், R->ரு₂

Examples: Type `saMskRta` for ஸம்₂ஸ்க்ரு₂த.

## Notes

- Dental aspirates stay distinct: `th` gives த்₂ (tha), `dh` gives த்₄ (dha).
- Vedic accents: `''` gives ᳓ (udātta), `_` gives ॒ (anudātta).

## Details

- The closely related transliteration scheme [here](https://github.com/indic-transliteration/indic_transliteration_py/blob/master/indic_transliteration/sanscript/schemes/data/brahmic/tamil_subscripted.toml)
- The motivation behind some basic additions made to the basic ITRANS scheme is described [here](https://sanskrit-coders.github.io/input/optitrans/), along with a tabulated comparison with several other transliteration schemes.

## Contribution
Fixes and improvements are welcome.  
Helpful commands - `kmc build .` .
