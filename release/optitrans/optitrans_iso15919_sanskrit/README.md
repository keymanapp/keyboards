# Sanskrit ISO-15919 Phonetic (OPTITRANS) 
## Description

Sanskrit ISO-15919 Phonetic (OPTITRANS) keyboard is an ISO 15919 romanization input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems.

Following [dra-iso-15919-itrans](https://github.com/indic-transliteration/m17n-db-indic/blob/master/dra-iso-15919-itrans.mim), e and o are not automatically lengthened: e gives e, E or ee gives ē, ai stays ai, au stays au.

You can use all the standard ITRANS key sequences plus key
sequences such as the below.

nk->ṅk, nkh->ṅkh, ng->ṅg, ngh->ṅgh
nch->ñch, nCh->ñch, nc->ñc, nC->ñch, nchh->ñch,
nj->ñj, njh->ñjh, nT->ṇṭ, nTh->ṇṭh, nD->ṇḍ, nDh->ṇḍh
c->c, C->ch, z->z, S->ṣ, jn->jñ, R->r̥

Examples: Type `saMskRta` for saṃskṛta.

## Notes

- Capital ISO 15919 letters (Ṭ, Ḍ, Ṇ, Ś, Ṣ and the like) cannot be produced yet; only lowercase output is mapped.
- Vedic accents: `''` gives ́ (udātta), `_` gives ̀ (anudātta).

## Details

- The closely related m17n keyboard [here](https://github.com/indic-transliteration/m17n-db-indic/blob/master/dra-iso-15919-itrans.mim)
- The motivation behind some basic additions made to the basic ITRANS scheme is described [here](https://sanskrit-coders.github.io/input/optitrans/), along with a tabulated comparison with several other transliteration schemes.

## Contribution
Fixes and improvements are welcome.  
Helpful commands - `kmc build .` .
