BindelWolof Change History
==========================

2.2.0 (2026-10-05)
------------------
* Câ' : jîm à trois points suscrits, codé U+0685 (au lieu de U+0684, qui s'affichait comme un dyeh à deux points souscrits sur Android et dans les claviers à l'écran)
* Police SenBishri 1.002 : le câ' (U+0685) est dessiné avec le point souscrit du jîm, dans ses quatre formes
* Police SenBishri 1.002 : réparation des règles de liaison (formes initiales, médianes et finales), qui ne s'appliquaient qu'à quelques lettres ; les formes du U+0772 sont désormais reliées
* Claviers à l'écran et disposition tactile affichés avec la police SenBishri
* Mobile et web : les voyelles o, ë et ei produisent U+08FD, U+08F5 et U+08F6, que les polices des téléphones affichent correctement (U+0654, U+065A et U+06ED y apparaissaient comme hamza, petit v et petit mîm) ; Windows conserve U+0654, U+065A et U+06ED, requis par Word

2.1.5 (2026-10-04)
------------------
* Mobile et web : un caractère invisible CGJ (U+034F) est inséré entre un signe de nasalisation (U+06E2, U+06E8, U+0610) et une voyelle suscrite (fatha, damma, sukun, chadda, fathatan, double damma), pour qu'Android ne place plus la voyelle sous le signe de nasalisation
* Étiquettes du clavier visuel alignées sur les caractères réellement produits
* La police SenBishri est de nouveau incluse dans le paquet
* Fichiers source (.kmn, .kps, .kvks, .keyman-touch-layout) reconstitués à partir du clavier compilé, avec toutes les corrections

2.1.4 (2026-10-04)
------------------
* Clavier rattaché en priorité à l'arabe (Algérie, ar-DZ), puis au wolof (wo-Arab) : Word écrit de droite à gauche dès la première frappe (la première lettre ne s'isole plus)

2.1.3 (2026-10-04)
------------------
* Voyelles o, ë, ei et double damma : U+0654, U+065A, U+06ED et U+064C, à la place de U+08FD, U+08F5, U+08F6 et U+08FB, que Word ne reconnaît pas comme arabes

2.1.2 (2026-10-02)
------------------
* Nasalisation de njâ', ndâ', ngâ' et nqâ' : U+06E8 (U+06E2 réservé au mbâ')
* Câ' : U+0684
* Touche Tab : vraie tabulation
* Suppression du caractère invisible U+061C devant la virgule, ﷺ et ۞
* Suppression de règles inactives

2.1.1 (2026-03-16)
------------------
* Version de départ de cette série de corrections

1.0 (2025-11-15)
----------------
* Created by Mafaatihul Bishri_ Serigne Mbacké Madina Gueye
