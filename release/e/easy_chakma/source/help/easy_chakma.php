<?php
  $pagename = "Easy Chakma Keyboard Help";
  $pagetitle = "Easy Chakma Keyboard Help";
  $pagestyle = <<<END
   /* Font Definitions */
@font-face
	{font-family:Helvetica;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:Courier;
	panose-1:2 7 4 9 2 2 5 2 4 4;}
@font-face
	{font-family:"Tms Rmn";
	panose-1:2 2 6 3 4 5 5 2 3 4;}
@font-face
	{font-family:Helv;
	panose-1:2 11 6 4 2 2 2 3 2 4;}
@font-face
	{font-family:"New York";
	panose-1:2 4 5 3 6 5 6 2 3 4;}
@font-face
	{font-family:System;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
@font-face
	{font-family:Batang;
	panose-1:2 3 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:PMingLiU;
	panose-1:2 1 6 1 0 1 1 1 1 1;}
@font-face
	{font-family:"MS Gothic";
	panose-1:2 11 6 9 7 2 5 8 2 4;}
@font-face
	{font-family:Dotum;
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:SimHei;
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:MingLiU;
	panose-1:2 1 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:Mincho;
	panose-1:2 2 6 9 4 3 5 8 3 5;}
@font-face
	{font-family:Gulim;
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:Century;
	panose-1:2 4 6 4 5 5 5 2 3 4;}
@font-face
	{font-family:"Angsana New";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Cordia New";
	panose-1:2 11 3 4 2 2 2 2 2 4;}
@font-face
	{font-family:Mangal;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Latha;
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Sylfaen;
	panose-1:1 10 5 2 5 3 6 3 3 3;}
@font-face
	{font-family:Vrinda;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Raavi;
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:Shruti;
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:Sendnya;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Gautami;
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:Tunga;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Estrangelo Edessa";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"Yu Gothic";
	panose-1:2 11 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:DengXian;
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Calibri Light";
	panose-1:2 15 3 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Palatino Linotype";
	panose-1:2 4 5 2 5 5 5 3 3 4;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:"Segoe UI Emoji";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;}
@font-face
	{font-family:DaunPenh;
	panose-1:1 1 1 1 1 1 1 1 1 1;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Malgun Gothic";
	panose-1:2 11 5 3 2 0 0 2 0 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"Arial Black";
	panose-1:2 11 10 4 2 1 2 2 2 4;}
@font-face
	{font-family:Nikosh;}
@font-face
	{font-family:RibengUni;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:BivutiNabaKhamatuChakmA;}
@font-face
	{font-family:Naba;}
@font-face
	{font-family:SutonnyMJ;}
@font-face
	{font-family:"Nirmala UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:TeamViewer13;
	panose-1:5 11 1 2 1 1 1 1 1 1;}
@font-face
	{font-family:Marlett;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Bahnschrift Light";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiLight";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:Bahnschrift;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiBold";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift Light SemiCondensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiLight SemiConde";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiCondensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiBold SemiConden";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift Light Condensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiLight Condensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift Condensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Bahnschrift SemiBold Condensed";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:Candara;
	panose-1:2 14 5 2 3 3 3 2 2 4;}
@font-face
	{font-family:"Comic Sans MS";
	panose-1:3 15 7 2 3 3 2 2 2 4;}
@font-face
	{font-family:Consolas;
	panose-1:2 11 6 9 2 2 4 3 2 4;}
@font-face
	{font-family:Constantia;
	panose-1:2 3 6 2 5 3 6 3 3 3;}
@font-face
	{font-family:Corbel;
	panose-1:2 11 5 3 2 2 4 2 2 4;}
@font-face
	{font-family:Ebrima;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Franklin Gothic Medium";
	panose-1:2 11 6 3 2 1 2 2 2 4;}
@font-face
	{font-family:Gabriola;
	panose-1:4 4 6 5 5 16 2 2 13 2;}
@font-face
	{font-family:Gadugi;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:Impact;
	panose-1:2 11 8 6 3 9 2 5 2 4;}
@font-face
	{font-family:"Ink Free";
	panose-1:3 8 4 2 0 5 0 0 0 0;}
@font-face
	{font-family:"Javanese Text";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Leelawadee UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Leelawadee UI Semilight";
	panose-1:2 11 4 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Lucida Console";
	panose-1:2 11 6 9 4 5 4 2 2 4;}
@font-face
	{font-family:"Lucida Sans Unicode";
	panose-1:2 11 6 2 3 5 4 2 2 4;}
@font-face
	{font-family:"\@Malgun Gothic";}
@font-face
	{font-family:"Malgun Gothic Semilight";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\@Malgun Gothic Semilight";}
@font-face
	{font-family:"Microsoft Himalaya";
	panose-1:1 1 1 0 1 1 1 1 1 1;}
@font-face
	{font-family:"Microsoft JhengHei";
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Microsoft JhengHei";}
@font-face
	{font-family:"Microsoft JhengHei UI";
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Microsoft JhengHei UI";}
@font-face
	{font-family:"Microsoft JhengHei Light";
	panose-1:2 11 3 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Microsoft JhengHei Light";}
@font-face
	{font-family:"Microsoft JhengHei UI Light";
	panose-1:2 11 3 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Microsoft JhengHei UI Light";}
@font-face
	{font-family:"Microsoft New Tai Lue";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Microsoft PhagsPa";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Microsoft Sans Serif";
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:"Microsoft Tai Le";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Microsoft YaHei";
	panose-1:2 11 5 3 2 2 4 2 2 4;}
@font-face
	{font-family:"\@Microsoft YaHei";}
@font-face
	{font-family:"Microsoft YaHei UI";
	panose-1:2 11 5 3 2 2 4 2 2 4;}
@font-face
	{font-family:"\@Microsoft YaHei UI";}
@font-face
	{font-family:"Microsoft YaHei Light";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\@Microsoft YaHei Light";}
@font-face
	{font-family:"Microsoft YaHei UI Light";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\@Microsoft YaHei UI Light";}
@font-face
	{font-family:"Microsoft Yi Baiti";
	panose-1:3 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:MingLiU-ExtB;
	panose-1:2 2 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@MingLiU-ExtB";}
@font-face
	{font-family:PMingLiU-ExtB;
	panose-1:2 2 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@PMingLiU-ExtB";}
@font-face
	{font-family:MingLiU_HKSCS-ExtB;
	panose-1:2 2 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@MingLiU_HKSCS-ExtB";}
@font-face
	{font-family:"Mongolian Baiti";
	panose-1:3 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@MS Gothic";
	panose-1:2 11 6 9 7 2 5 8 2 4;}
@font-face
	{font-family:"MS UI Gothic";
	panose-1:2 11 6 0 7 2 5 8 2 4;}
@font-face
	{font-family:"\@MS UI Gothic";}
@font-face
	{font-family:"MS PGothic";
	panose-1:2 11 6 0 7 2 5 8 2 4;}
@font-face
	{font-family:"\@MS PGothic";}
@font-face
	{font-family:"MV Boli";
	panose-1:2 0 5 0 3 2 0 9 0 0;}
@font-face
	{font-family:"Myanmar Text";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Nirmala UI Semilight";
	panose-1:2 11 4 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe MDL2 Assets";
	panose-1:5 10 1 2 1 1 1 1 1 1;}
@font-face
	{font-family:"Segoe Print";
	panose-1:2 0 6 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Segoe Script";
	panose-1:3 11 5 4 2 0 0 0 0 3;}
@font-face
	{font-family:"Segoe UI Black";
	panose-1:2 11 10 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe UI Historic";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe UI Light";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe UI Semibold";
	panose-1:2 11 7 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe UI Semilight";
	panose-1:2 11 4 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Segoe UI Symbol";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\@SimSun";
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:NSimSun;
	panose-1:2 1 6 9 3 1 1 1 1 1;}
@font-face
	{font-family:"\@NSimSun";}
@font-face
	{font-family:SimSun-ExtB;
	panose-1:2 1 6 9 6 1 1 1 1 1;}
@font-face
	{font-family:"\@SimSun-ExtB";}
@font-face
	{font-family:"Sitka Small";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Sitka Text";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Sitka Subheading";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Sitka Heading";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Sitka Display";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Sitka Banner";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Trebuchet MS";
	panose-1:2 11 6 3 2 2 2 2 2 4;}
@font-face
	{font-family:Webdings;
	panose-1:5 3 1 2 1 5 9 6 7 3;}
@font-face
	{font-family:"\@Yu Gothic";
	panose-1:2 11 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Yu Gothic UI";
	panose-1:2 11 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic UI";}
@font-face
	{font-family:"Yu Gothic UI Semibold";
	panose-1:2 11 7 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic UI Semibold";}
@font-face
	{font-family:"Yu Gothic Light";
	panose-1:2 11 3 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic Light";}
@font-face
	{font-family:"Yu Gothic UI Light";
	panose-1:2 11 3 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic UI Light";}
@font-face
	{font-family:"Yu Gothic Medium";
	panose-1:2 11 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic Medium";}
@font-face
	{font-family:"Yu Gothic UI Semilight";
	panose-1:2 11 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Gothic UI Semilight";}
@font-face
	{font-family:"HoloLens MDL2 Assets";
	panose-1:5 10 1 2 1 1 1 1 1 1;}
@font-face
	{font-family:"Khmer UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:MoolBoran;
	panose-1:2 11 1 0 1 1 1 1 1 1;}
@font-face
	{font-family:Nyala;
	panose-1:2 0 5 4 7 3 0 2 0 3;}
@font-face
	{font-family:"Noto Serif Khmer Thin";
	panose-1:2 2 2 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond Thin";
	panose-1:2 2 2 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond SemBd";
	panose-1:2 2 7 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond Med";
	panose-1:2 2 6 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond Light";
	panose-1:2 2 4 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond ExtLt";
	panose-1:2 2 3 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond ExtBd";
	panose-1:2 2 9 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond";
	panose-1:2 2 5 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemCond Blk";
	panose-1:2 2 10 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer SemBd";
	panose-1:2 2 7 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer";
	panose-1:2 2 5 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Med";
	panose-1:2 2 6 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Light";
	panose-1:2 2 4 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtLt";
	panose-1:2 2 3 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond Thin";
	panose-1:2 2 2 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond SemBd";
	panose-1:2 2 7 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond Med";
	panose-1:2 2 6 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond Light";
	panose-1:2 2 4 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond ExtLt";
	panose-1:2 2 3 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond ExtBd";
	panose-1:2 2 9 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond";
	panose-1:2 2 5 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtCond Blk";
	panose-1:2 2 10 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer ExtBd";
	panose-1:2 2 9 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond Thin";
	panose-1:2 2 2 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond SemBd";
	panose-1:2 2 7 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond Med";
	panose-1:2 2 6 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond Light";
	panose-1:2 2 4 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond ExtLt";
	panose-1:2 2 3 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond ExtBd";
	panose-1:2 2 9 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond";
	panose-1:2 2 5 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Cond Blk";
	panose-1:2 2 10 6 6 5 5 2 2 4;}
@font-face
	{font-family:"Noto Serif Khmer Blk";
	panose-1:2 2 10 2 6 5 5 2 2 4;}
@font-face
	{font-family:"Agency FB";
	panose-1:2 11 5 3 2 2 2 2 2 4;}
@font-face
	{font-family:Algerian;
	panose-1:4 2 7 5 4 10 2 6 7 2;}
@font-face
	{font-family:"Book Antiqua";
	panose-1:2 4 6 2 5 3 5 3 3 4;}
@font-face
	{font-family:"Arial Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;}
@font-face
	{font-family:"Arial Rounded MT Bold";
	panose-1:2 15 7 4 3 5 4 3 2 4;}
@font-face
	{font-family:"Baskerville Old Face";
	panose-1:2 2 6 2 8 5 5 2 3 3;}
@font-face
	{font-family:"Bauhaus 93";
	panose-1:4 3 9 5 2 11 2 2 12 2;}
@font-face
	{font-family:"Bell MT";
	panose-1:2 2 5 3 6 3 5 2 3 3;}
@font-face
	{font-family:"Bernard MT Condensed";
	panose-1:2 5 8 6 6 9 5 2 4 4;}
@font-face
	{font-family:"Bodoni MT";
	panose-1:2 7 6 3 8 6 6 2 2 3;}
@font-face
	{font-family:"Bodoni MT Black";
	panose-1:2 7 10 3 8 6 6 2 2 3;}
@font-face
	{font-family:"Bodoni MT Condensed";
	panose-1:2 7 6 6 8 6 6 2 2 3;}
@font-face
	{font-family:"Bodoni MT Poster Compressed";
	panose-1:2 7 7 6 8 6 1 5 2 4;}
@font-face
	{font-family:"Bookman Old Style";
	panose-1:2 5 6 4 5 5 5 2 2 4;}
@font-face
	{font-family:"Bradley Hand ITC";
	panose-1:3 7 4 2 5 3 2 3 2 3;}
@font-face
	{font-family:"Britannic Bold";
	panose-1:2 11 9 3 6 7 3 2 2 4;}
@font-face
	{font-family:"Berlin Sans FB";
	panose-1:2 14 6 2 2 5 2 2 3 6;}
@font-face
	{font-family:"Berlin Sans FB Demi";
	panose-1:2 14 8 2 2 5 2 2 3 6;}
@font-face
	{font-family:Broadway;
	panose-1:4 4 9 5 8 11 2 2 5 2;}
@font-face
	{font-family:"Brush Script MT";
	panose-1:3 6 8 2 4 4 6 7 3 4;}
@font-face
	{font-family:"Bookshelf Symbol 7";
	panose-1:5 1 1 1 1 1 1 1 1 1;}
@font-face
	{font-family:"Californian FB";
	panose-1:2 7 4 3 6 8 11 3 2 4;}
@font-face
	{font-family:"Calisto MT";
	panose-1:2 4 6 3 5 5 5 3 3 4;}
@font-face
	{font-family:Castellar;
	panose-1:2 10 4 2 6 4 6 1 3 1;}
@font-face
	{font-family:"Century Schoolbook";
	panose-1:2 4 6 4 5 5 5 2 3 4;}
@font-face
	{font-family:Centaur;
	panose-1:2 3 5 4 5 2 5 2 3 4;}
@font-face
	{font-family:Chiller;
	panose-1:4 2 4 4 3 16 7 2 6 2;}
@font-face
	{font-family:"Colonna MT";
	panose-1:4 2 8 5 6 2 2 3 2 3;}
@font-face
	{font-family:"Cooper Black";
	panose-1:2 8 9 4 4 3 11 2 4 4;}
@font-face
	{font-family:"Copperplate Gothic Bold";
	panose-1:2 14 7 5 2 2 6 2 4 4;}
@font-face
	{font-family:"Copperplate Gothic Light";
	panose-1:2 14 5 7 2 2 6 2 4 4;}
@font-face
	{font-family:"Curlz MT";
	panose-1:4 4 4 4 5 7 2 2 2 2;}
@font-face
	{font-family:Dubai;
	panose-1:2 11 5 3 3 4 3 3 2 4;}
@font-face
	{font-family:"Dubai Light";
	panose-1:2 11 3 3 3 4 3 3 2 4;}
@font-face
	{font-family:"Dubai Medium";
	panose-1:2 11 6 3 3 4 3 3 2 4;}
@font-face
	{font-family:Elephant;
	panose-1:2 2 9 4 9 5 5 2 3 3;}
@font-face
	{font-family:"Engravers MT";
	panose-1:2 9 7 7 8 5 5 2 3 4;}
@font-face
	{font-family:"Eras Bold ITC";
	panose-1:2 11 9 7 3 5 4 2 2 4;}
@font-face
	{font-family:"Eras Demi ITC";
	panose-1:2 11 8 5 3 5 4 2 8 4;}
@font-face
	{font-family:"Eras Light ITC";
	panose-1:2 11 4 2 3 5 4 2 8 4;}
@font-face
	{font-family:"Eras Medium ITC";
	panose-1:2 11 6 2 3 5 4 2 8 4;}
@font-face
	{font-family:"Felix Titling";
	panose-1:4 6 5 5 6 2 2 2 10 4;}
@font-face
	{font-family:Forte;
	panose-1:3 6 9 2 4 5 2 7 2 3;}
@font-face
	{font-family:"Franklin Gothic Book";
	panose-1:2 11 5 3 2 1 2 2 2 4;}
@font-face
	{font-family:"Franklin Gothic Demi";
	panose-1:2 11 7 3 2 1 2 2 2 4;}
@font-face
	{font-family:"Franklin Gothic Demi Cond";
	panose-1:2 11 7 6 3 4 2 2 2 4;}
@font-face
	{font-family:"Franklin Gothic Heavy";
	panose-1:2 11 9 3 2 1 2 2 2 4;}
@font-face
	{font-family:"Franklin Gothic Medium Cond";
	panose-1:2 11 6 6 3 4 2 2 2 4;}
@font-face
	{font-family:"Freestyle Script";
	panose-1:3 8 4 2 3 2 5 11 4 4;}
@font-face
	{font-family:"French Script MT";
	panose-1:3 2 4 2 4 6 7 4 6 5;}
@font-face
	{font-family:"Footlight MT Light";
	panose-1:2 4 6 2 6 3 10 2 3 4;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;}
@font-face
	{font-family:Gigi;
	panose-1:4 4 5 4 6 16 7 2 13 2;}
@font-face
	{font-family:"Gill Sans MT";
	panose-1:2 11 5 2 2 1 4 2 2 3;}
@font-face
	{font-family:"Gill Sans MT Condensed";
	panose-1:2 11 5 6 2 1 4 2 2 3;}
@font-face
	{font-family:"Gill Sans Ultra Bold Condensed";
	panose-1:2 11 10 6 2 1 4 2 2 3;}
@font-face
	{font-family:"Gill Sans Ultra Bold";
	panose-1:2 11 10 2 2 1 4 2 2 3;}
@font-face
	{font-family:"Gloucester MT Extra Condensed";
	panose-1:2 3 8 8 2 6 1 1 1 1;}
@font-face
	{font-family:"Gill Sans MT Ext Condensed Bold";
	panose-1:2 11 9 2 2 1 4 2 2 3;}
@font-face
	{font-family:"Century Gothic";
	panose-1:2 11 5 2 2 2 2 2 2 4;}
@font-face
	{font-family:"Goudy Old Style";
	panose-1:2 2 5 2 5 3 5 2 3 3;}
@font-face
	{font-family:"Goudy Stout";
	panose-1:2 2 9 4 7 3 11 2 4 1;}
@font-face
	{font-family:"Harlow Solid Italic";
	panose-1:4 3 6 4 2 15 2 2 13 2;}
@font-face
	{font-family:Harrington;
	panose-1:4 4 5 5 5 10 2 2 7 2;}
@font-face
	{font-family:Haettenschweiler;
	panose-1:2 11 7 6 4 9 2 6 2 4;}
@font-face
	{font-family:"High Tower Text";
	panose-1:2 4 5 2 5 5 6 3 3 3;}
@font-face
	{font-family:"Imprint MT Shadow";
	panose-1:4 2 6 5 6 3 3 3 2 2;}
@font-face
	{font-family:"Informal Roman";
	panose-1:3 6 4 2 3 4 6 11 2 4;}
@font-face
	{font-family:"Blackadder ITC";
	panose-1:4 2 5 5 5 16 7 2 13 2;}
@font-face
	{font-family:"Edwardian Script ITC";
	panose-1:3 3 3 2 4 7 7 13 8 4;}
@font-face
	{font-family:"Kristen ITC";
	panose-1:3 5 5 2 4 2 2 3 2 2;}
@font-face
	{font-family:Jokerman;
	panose-1:4 9 6 5 6 13 6 2 7 2;}
@font-face
	{font-family:"Juice ITC";
	panose-1:4 4 4 3 4 10 2 2 2 2;}
@font-face
	{font-family:"Kunstler Script";
	panose-1:3 3 4 2 2 6 7 13 13 6;}
@font-face
	{font-family:"Wide Latin";
	panose-1:2 10 10 7 5 5 5 2 4 4;}
@font-face
	{font-family:"Lucida Bright";
	panose-1:2 4 6 2 5 5 5 2 3 4;}
@font-face
	{font-family:"Lucida Calligraphy";
	panose-1:3 1 1 1 1 1 1 1 1 1;}
@font-face
	{font-family:"Lucida Fax";
	panose-1:2 6 6 2 5 5 5 2 2 4;}
@font-face
	{font-family:"Lucida Handwriting";
	panose-1:3 1 1 1 1 1 1 1 1 1;}
@font-face
	{font-family:"Lucida Sans";
	panose-1:2 11 6 2 3 5 4 2 2 4;}
@font-face
	{font-family:"Lucida Sans Typewriter";
	panose-1:2 11 5 9 3 5 4 3 2 4;}
@font-face
	{font-family:Magneto;
	panose-1:4 3 8 5 5 8 2 2 13 2;}
@font-face
	{font-family:"Maiandra GD";
	panose-1:2 14 5 2 3 3 8 2 2 4;}
@font-face
	{font-family:"Matura MT Script Capitals";
	panose-1:3 2 8 2 6 6 2 7 2 2;}
@font-face
	{font-family:Mistral;
	panose-1:3 9 7 2 3 4 7 2 4 3;}
@font-face
	{font-family:"Modern No\. 20";
	panose-1:2 7 7 4 7 5 5 2 3 3;}
@font-face
	{font-family:"Monotype Corsiva";
	panose-1:3 1 1 1 1 2 1 1 1 1;}
@font-face
	{font-family:"Niagara Engraved";
	panose-1:4 2 5 2 7 7 3 3 2 2;}
@font-face
	{font-family:"Niagara Solid";
	panose-1:4 2 5 2 7 7 2 2 2 2;}
@font-face
	{font-family:"OCR A Extended";
	panose-1:2 1 5 9 2 1 2 1 3 3;}
@font-face
	{font-family:"Old English Text MT";
	panose-1:3 4 9 2 4 5 8 3 8 6;}
@font-face
	{font-family:Onyx;
	panose-1:4 5 6 2 8 7 2 2 2 3;}
@font-face
	{font-family:"MS Outlook";
	panose-1:5 1 1 0 1 0 0 0 0 0;}
@font-face
	{font-family:"Palace Script MT";
	panose-1:3 3 3 2 2 6 7 12 11 5;}
@font-face
	{font-family:Papyrus;
	panose-1:3 7 5 2 6 5 2 3 2 5;}
@font-face
	{font-family:Parchment;
	panose-1:3 4 6 2 4 7 8 4 8 4;}
@font-face
	{font-family:Perpetua;
	panose-1:2 2 5 2 6 4 1 2 3 3;}
@font-face
	{font-family:"Perpetua Titling MT";
	panose-1:2 2 5 2 6 5 5 2 8 4;}
@font-face
	{font-family:Playbill;
	panose-1:4 5 6 3 10 6 2 2 2 2;}
@font-face
	{font-family:"Poor Richard";
	panose-1:2 8 5 2 5 5 5 2 7 2;}
@font-face
	{font-family:Pristina;
	panose-1:3 6 4 2 4 4 6 8 2 4;}
@font-face
	{font-family:"Rage Italic";
	panose-1:3 7 5 2 4 5 7 7 3 4;}
@font-face
	{font-family:Ravie;
	panose-1:4 4 8 5 5 8 9 2 6 2;}
@font-face
	{font-family:"MS Reference Sans Serif";
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"MS Reference Specialty";
	panose-1:5 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Rockwell Condensed";
	panose-1:2 6 6 3 5 4 5 2 1 4;}
@font-face
	{font-family:Rockwell;
	panose-1:2 6 6 3 2 2 5 2 4 3;}
@font-face
	{font-family:"Rockwell Extra Bold";
	panose-1:2 6 9 3 4 5 5 2 4 3;}
@font-face
	{font-family:"Script MT Bold";
	panose-1:3 4 6 2 4 6 7 8 9 4;}
@font-face
	{font-family:"Showcard Gothic";
	panose-1:4 2 9 4 2 1 2 2 6 4;}
@font-face
	{font-family:"Snap ITC";
	panose-1:4 4 10 7 6 10 2 2 2 2;}
@font-face
	{font-family:Stencil;
	panose-1:4 4 9 5 13 8 2 2 4 4;}
@font-face
	{font-family:"Tw Cen MT";
	panose-1:2 11 6 2 2 1 4 2 6 3;}
@font-face
	{font-family:"Tw Cen MT Condensed";
	panose-1:2 11 6 6 2 1 4 2 2 3;}
@font-face
	{font-family:"Tw Cen MT Condensed Extra Bold";
	panose-1:2 11 8 3 2 2 2 2 2 4;}
@font-face
	{font-family:"Tempus Sans ITC";
	panose-1:4 2 4 4 3 13 7 2 2 2;}
@font-face
	{font-family:"Viner Hand ITC";
	panose-1:3 7 5 2 3 5 2 2 2 3;}
@font-face
	{font-family:Vivaldi;
	panose-1:3 2 6 2 5 5 6 9 8 4;}
@font-face
	{font-family:"Vladimir Script";
	panose-1:3 5 4 2 4 4 7 7 3 5;}
@font-face
	{font-family:"Wingdings 2";
	panose-1:5 2 1 2 1 5 7 7 7 7;}
@font-face
	{font-family:"Wingdings 3";
	panose-1:5 4 1 2 1 8 7 7 7 7;}
@font-face
	{font-family:"MT Extra";
	panose-1:5 5 1 2 1 2 5 2 2 2;}
@font-face
	{font-family:"Charis SIL";
	panose-1:2 0 5 0 6 0 0 2 0 4;}
@font-face
	{font-family:"Ezra SIL";
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Ezra SIL SR";
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Galatia SIL";
	panose-1:2 0 6 0 2 0 0 2 0 4;}
@font-face
	{font-family:Andika;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer Mondulkiri";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer Busra";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Open Sans";
	panose-1:2 11 6 6 3 5 4 2 2 4;}
@font-face
	{font-family:Caladea;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"Linux Biolinum G";
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:"DejaVu Math TeX Gyre";
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:OpenSymbol;
	panose-1:5 1 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Liberation Mono";
	panose-1:2 7 4 9 2 2 5 2 4 4;}
@font-face
	{font-family:"Source Sans Pro Black";
	panose-1:2 11 8 3 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Code Pro Black";
	panose-1:2 11 8 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Gentium Basic";
	panose-1:2 0 5 3 6 0 0 2 0 4;}
@font-face
	{font-family:"Liberation Sans Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;}
@font-face
	{font-family:"PT Serif";
	panose-1:2 10 6 3 4 5 5 2 2 4;}
@font-face
	{font-family:"EmojiOne Color";
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:Carlito;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"DejaVu Sans";
	panose-1:2 11 6 3 3 8 4 2 2 4;}
@font-face
	{font-family:"DejaVu Sans Light";
	panose-1:2 11 2 3 3 8 4 2 2 4;}
@font-face
	{font-family:"DejaVu Sans Condensed";
	panose-1:2 11 6 6 3 8 4 2 2 4;}
@font-face
	{font-family:"DejaVu Sans Mono";
	panose-1:2 11 6 9 3 8 4 2 2 4;}
@font-face
	{font-family:"DejaVu Serif";
	panose-1:2 6 6 3 5 6 5 2 2 4;}
@font-face
	{font-family:"DejaVu Serif Condensed";
	panose-1:2 6 6 6 5 6 5 2 2 4;}
@font-face
	{font-family:"Gentium Book Basic";
	panose-1:2 0 5 3 6 0 0 2 0 4;}
@font-face
	{font-family:"Liberation Sans";
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:"Liberation Serif";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Linux Libertine Display G";
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:"Linux Libertine G";
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:"Source Code Pro";
	panose-1:2 11 5 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Code Pro ExtraLight";
	panose-1:2 11 3 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Code Pro Light";
	panose-1:2 11 4 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Code Pro Medium";
	panose-1:2 11 5 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Code Pro Semibold";
	panose-1:2 11 6 9 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Sans Pro";
	panose-1:2 11 5 3 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Sans Pro ExtraLight";
	panose-1:2 11 3 3 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Sans Pro Light";
	panose-1:2 11 4 3 3 4 3 2 2 4;}
@font-face
	{font-family:"Source Sans Pro Semibold";
	panose-1:2 11 6 3 3 4 3 2 2 4;}
@font-face
	{font-family:"Khmer OS System";
	panose-1:2 0 5 0 0 0 0 2 0 4;}
@font-face
	{font-family:"Khmer Kep";
	panose-1:2 0 5 6 0 0 0 2 0 4;}
@font-face
	{font-family:"Limon S1";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Doulos SIL";
	panose-1:2 0 5 0 7 0 0 2 0 4;}
@font-face
	{font-family:"SBL Hebrew";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Apparatus SIL";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"ASAP SILManuscript";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:SILDoulosIPA;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:PitchContours;
	panose-1:4 2 114 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Amer Phon SILDoulosL";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"ASAP SILCharis";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"ASAP SILDoulos";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"ASAP SILSophia";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Code2000;
	panose-1:2 0 6 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Code2000";}
@font-face
	{font-family:KeymanwebOsk;
	panose-1:2 11 8 6 3 7 2 4 2 4;}
@font-face
	{font-family:Code2001;
	panose-1:2 0 6 0 0 0 0 0 0 0;}
@font-face
	{font-family:Code2002;
	panose-1:2 11 6 9 4 5 4 2 2 4;}
@font-face
	{font-family:"\@RibengUni";}
@font-face
	{font-family:Musique;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"TITUS Cyberbit Basic";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:Quivira;
	panose-1:2 2 6 3 5 4 5 2 3 3;}
@font-face
	{font-family:"Khmer OS Muol Light";
	panose-1:2 0 5 0 0 0 0 2 0 4;}
@font-face
	{font-family:"Khmer OS Muol";
	panose-1:2 0 5 0 0 0 0 2 0 4;}
@font-face
	{font-family:"Khmer OS Moul";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Metalchrieng";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Moulpali";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:Aldhabi;
	panose-1:1 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Andalus;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Arabic Typesetting";
	panose-1:3 2 4 2 4 4 6 3 2 3;}
@font-face
	{font-family:"Microsoft Uighur";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Sakkal Majalla";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Simplified Arabic";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Simplified Arabic Fixed";
	panose-1:2 7 3 9 2 2 5 2 4 4;}
@font-face
	{font-family:"Traditional Arabic";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Urdu Typesetting";
	panose-1:3 2 4 2 4 4 6 3 2 3;}
@font-face
	{font-family:"Khmer Oureang";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Roboto;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Scheherazade;
	panose-1:1 0 6 0 2 0 0 2 0 3;}
@font-face
	{font-family:Abadi;}
@font-face
	{font-family:"Abadi Extra Light";}
@font-face
	{font-family:Aharoni;}
@font-face
	{font-family:AngsanaUPC;}
@font-face
	{font-family:Aparajita;}
@font-face
	{font-family:"Arial Nova";}
@font-face
	{font-family:"Arial Nova Cond";}
@font-face
	{font-family:"Arial Nova Cond Light";}
@font-face
	{font-family:"Arial Nova Light";}
@font-face
	{font-family:BatangChe;}
@font-face
	{font-family:Bembo;}
@font-face
	{font-family:"Browallia New";}
@font-face
	{font-family:BrowalliaUPC;}
@font-face
	{font-family:CordiaUPC;}
@font-face
	{font-family:Dante;}
@font-face
	{font-family:David;}
@font-face
	{font-family:"DengXian Light";}
@font-face
	{font-family:DilleniaUPC;}
@font-face
	{font-family:DokChampa;}
@font-face
	{font-family:DotumChe;}
@font-face
	{font-family:EucrosiaUPC;}
@font-face
	{font-family:Euphemia;}
@font-face
	{font-family:FangSong;}
@font-face
	{font-family:FrankRuehl;}
@font-face
	{font-family:FreesiaUPC;}
@font-face
	{font-family:"Georgia Pro";}
@font-face
	{font-family:"Georgia Pro Black";}
@font-face
	{font-family:"Georgia Pro Cond";}
@font-face
	{font-family:"Georgia Pro Cond Black";}
@font-face
	{font-family:"Georgia Pro Cond Light";}
@font-face
	{font-family:"Georgia Pro Cond Semibold";}
@font-face
	{font-family:"Georgia Pro Light";}
@font-face
	{font-family:"Georgia Pro Semibold";}
@font-face
	{font-family:"Gill Sans Nova";}
@font-face
	{font-family:"Gill Sans Nova Cond";}
@font-face
	{font-family:"Gill Sans Nova Cond Lt";}
@font-face
	{font-family:"Gill Sans Nova Cond Ultra Bold";}
@font-face
	{font-family:"Gill Sans Nova Cond XBd";}
@font-face
	{font-family:"Gill Sans Nova Light";}
@font-face
	{font-family:"Gill Sans Nova Ultra Bold";}
@font-face
	{font-family:Gisha;}
@font-face
	{font-family:Grotesque;}
@font-face
	{font-family:"Grotesque Light";}
@font-face
	{font-family:GulimChe;}
@font-face
	{font-family:Gungsuh;}
@font-face
	{font-family:GungsuhChe;}
@font-face
	{font-family:"Hadassah Friedlaender";}
@font-face
	{font-family:HGGothicE;}
@font-face
	{font-family:HGMaruGothicMPRO;}
@font-face
	{font-family:HGMinchoE;}
@font-face
	{font-family:HGPGothicE;}
@font-face
	{font-family:HGPMinchoE;}
@font-face
	{font-family:HGPSoeiKakugothicUB;}
@font-face
	{font-family:HGSGothicE;}
@font-face
	{font-family:HGSMinchoE;}
@font-face
	{font-family:HGSoeiKakugothicUB;}
@font-face
	{font-family:HGSSoeiKakugothicUB;}
@font-face
	{font-family:IrisUPC;}
@font-face
	{font-family:"Iskoola Pota";}
@font-face
	{font-family:JasmineUPC;}
@font-face
	{font-family:KaiTi;}
@font-face
	{font-family:Kalinga;}
@font-face
	{font-family:Kartika;}
@font-face
	{font-family:KodchiangUPC;}
@font-face
	{font-family:Kokila;}
@font-face
	{font-family:"Lao UI";}
@font-face
	{font-family:Leelawadee;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"Levenim MT";}
@font-face
	{font-family:LilyUPC;}
@font-face
	{font-family:Meiryo;}
@font-face
	{font-family:"Meiryo UI";}
@font-face
	{font-family:"Microsoft GothicNeo";}
@font-face
	{font-family:MingLiU_HKSCS;}
@font-face
	{font-family:Miriam;}
@font-face
	{font-family:"Miriam Fixed";}
@font-face
	{font-family:"MS PMincho";}
@font-face
	{font-family:Narkisim;}
@font-face
	{font-family:"Neue Haas Grotesk Text Pro";}
@font-face
	{font-family:"News Gothic MT";}
@font-face
	{font-family:OCRB;}
@font-face
	{font-family:"Plantagenet Cherokee";}
@font-face
	{font-family:"Rockwell Light";}
@font-face
	{font-family:"Rockwell Nova";}
@font-face
	{font-family:"Rockwell Nova Cond";}
@font-face
	{font-family:"Rockwell Nova Cond Light";}
@font-face
	{font-family:"Rockwell Nova Extra Bold";}
@font-face
	{font-family:"Rockwell Nova Light";}
@font-face
	{font-family:Rod;}
@font-face
	{font-family:"Sanskrit Text";}
@font-face
	{font-family:Selawik;}
@font-face
	{font-family:"Selawik Light";}
@font-face
	{font-family:"Selawik Semibold";}
@font-face
	{font-family:"Shonar Bangla";}
@font-face
	{font-family:STCaiyun;}
@font-face
	{font-family:STFangsong;}
@font-face
	{font-family:STHupo;}
@font-face
	{font-family:STKaiti;}
@font-face
	{font-family:STXihei;}
@font-face
	{font-family:STXingkai;}
@font-face
	{font-family:STXinwei;}
@font-face
	{font-family:STZhongsong;}
@font-face
	{font-family:"TH SarabunPSK";}
@font-face
	{font-family:"UD Digi Kyokasho N-B";}
@font-face
	{font-family:"UD Digi Kyokasho N-R";}
@font-face
	{font-family:"UD Digi Kyokasho NK-B";}
@font-face
	{font-family:"UD Digi Kyokasho NK-R";}
@font-face
	{font-family:"UD Digi Kyokasho NP-B";}
@font-face
	{font-family:"UD Digi Kyokasho NP-R";}
@font-face
	{font-family:Univers;}
@font-face
	{font-family:"Univers Condensed";}
@font-face
	{font-family:"Univers Condensed Light";}
@font-face
	{font-family:"Univers Light";}
@font-face
	{font-family:Utsaah;}
@font-face
	{font-family:Vani;}
@font-face
	{font-family:"Verdana Pro";}
@font-face
	{font-family:"Verdana Pro Black";}
@font-face
	{font-family:"Verdana Pro Cond";}
@font-face
	{font-family:"Verdana Pro Cond Black";}
@font-face
	{font-family:"Verdana Pro Cond Light";}
@font-face
	{font-family:"Verdana Pro Cond SemiBold";}
@font-face
	{font-family:"Verdana Pro Light";}
@font-face
	{font-family:"Verdana Pro SemiBold";}
@font-face
	{font-family:Vijaya;}
@font-face
	{font-family:"Yu Mincho";}
@font-face
	{font-family:"Yu Mincho Demibold";}
@font-face
	{font-family:"Yu Mincho Light";}
@font-face
	{font-family:"\@MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
@font-face
	{font-family:"\@MS PMincho";}
@font-face
	{font-family:"\@MingLiU";
	panose-1:2 1 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:"\@PMingLiU";
	panose-1:2 1 6 1 0 1 1 1 1 1;}
@font-face
	{font-family:"\@MingLiU_HKSCS";}
@font-face
	{font-family:"\@BivutiNabaKhamatuChakmA";}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
h1
	{mso-style-link:"Heading 1 Char";
	margin-right:0in;
	margin-left:0in;
	font-size:24.0pt;
	font-family:"Times New Roman",serif;
	font-weight:bold;}
h2
	{mso-style-link:"Heading 2 Char";
	margin-top:10.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:13.0pt;
	font-family:"Cambria",serif;
	color:#4F81BD;
	font-weight:bold;}
h3
	{mso-style-link:"Heading 3 Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:7.0pt;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	font-weight:bold;}
h4
	{mso-style-link:"Heading 4 Char";
	margin-top:10.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:"Cambria",serif;
	color:#4F81BD;
	font-weight:bold;
	font-style:italic;}
h5
	{mso-style-link:"Heading 5 Char";
	margin-top:10.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:"Cambria",serif;
	color:#243F60;
	font-weight:normal;}
h6
	{mso-style-link:"Heading 6 Char";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	font-weight:bold;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-link:"Heading 7 Char";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-link:"Heading 8 Char";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	font-style:italic;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-link:"Heading 9 Char";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	font-size:11.0pt;
	font-family:"Cambria",serif;}
p.MsoFootnoteText, li.MsoFootnoteText, div.MsoFootnoteText
	{mso-style-link:"Footnote Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Arial",sans-serif;
	layout-grid-mode:line;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
span.MsoFootnoteReference
	{vertical-align:super;}
span.MsoLineNumber
	{font-family:"Times New Roman",serif;}
span.MsoPageNumber
	{font-family:"Times New Roman",serif;}
p.MsoEndnoteText, li.MsoEndnoteText, div.MsoEndnoteText
	{mso-style-link:"Endnote Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-link:"Title Char";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	text-align:center;
	font-size:16.0pt;
	font-family:"Cambria",serif;
	font-weight:bold;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-link:"Body Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-link:"Subtitle Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoDocumentMap, li.MsoDocumentMap, div.MsoDocumentMap
	{mso-style-link:"Document Map Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;}
p
	{margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
code
	{font-family:"Courier New";}
pre
	{mso-style-link:"HTML Preformatted Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Courier New";}
tt
	{font-family:"Courier New";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:66.0pt;
	margin-bottom:.0001pt;
	text-indent:-.25in;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
span.Heading1Char
	{mso-style-name:"Heading 1 Char";
	mso-style-link:"Heading 1";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:"Heading 2 Char";
	mso-style-link:"Heading 2";
	font-family:"Cambria",serif;
	color:#4F81BD;
	font-weight:bold;}
span.Heading5Char
	{mso-style-name:"Heading 5 Char";
	mso-style-link:"Heading 5";
	font-family:"Cambria",serif;
	color:#243F60;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;
	font-family:"Times New Roman",serif;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;
	font-family:"Times New Roman",serif;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma",sans-serif;}
span.DocumentMapChar
	{mso-style-name:"Document Map Char";
	mso-style-link:"Document Map";
	font-family:"Tahoma",sans-serif;}
span.js-issue-title
	{mso-style-name:js-issue-title;}
span.gh-header-number
	{mso-style-name:gh-header-number;}
span.z-TopofFormChar
	{mso-style-name:"z-Top of Form Char";
	mso-style-link:"z-Top of Form";
	font-family:"Arial",sans-serif;
	display:none;}
span.z-BottomofFormChar
	{mso-style-name:"z-Bottom of Form Char";
	mso-style-link:"z-Bottom of Form";
	font-family:"Arial",sans-serif;
	display:none;}
span.delim
	{mso-style-name:delim;}
p.yiv2143403512msonormal, li.yiv2143403512msonormal, div.yiv2143403512msonormal
	{mso-style-name:yiv2143403512msonormal;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.yiv2143403512msohyperlink
	{mso-style-name:yiv2143403512msohyperlink;}
p.text-left, li.text-left, div.text-left
	{mso-style-name:text-left;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.by
	{mso-style-name:by;}
span.name
	{mso-style-name:name;}
span.Heading3Char
	{mso-style-name:"Heading 3 Char";
	mso-style-link:"Heading 3";
	font-family:"Calibri",sans-serif;
	font-weight:bold;}
span.BodyTextChar
	{mso-style-name:"Body Text Char";
	mso-style-link:"Body Text";
	font-family:"Times New Roman",serif;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	margin:0in;
	margin-bottom:.0001pt;
	line-height:24.65pt;
	font-size:11.0pt;
	font-family:"Arial Black",sans-serif;}
span.UnresolvedMention1
	{mso-style-name:"Unresolved Mention1";
	color:gray;
	background:#E6E6E6;}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	margin:0in;
	margin-bottom:.0001pt;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	color:black;}
span.SubtitleChar
	{mso-style-name:"Subtitle Char";
	mso-style-link:Subtitle;
	font-family:"Arial",sans-serif;}
span.FootnoteTextChar
	{mso-style-name:"Footnote Text Char";
	mso-style-link:"Footnote Text";
	font-family:"Arial",sans-serif;
	layout-grid-mode:both;}
span.rphighlightallclass
	{mso-style-name:rphighlightallclass;}
span.rpt1
	{mso-style-name:_rp_t1;}
span.pel
	{mso-style-name:_pe_l;}
span.bidi
	{mso-style-name:bidi;}
span.rpd1
	{mso-style-name:_rp_d1;}
span.allowtextselection
	{mso-style-name:allowtextselection;}
span.ms-font-color-neutralsecondary
	{mso-style-name:ms-font-color-neutralsecondary;}
span.dbq
	{mso-style-name:_db_q;}
p.xmsonormal, li.xmsonormal, div.xmsonormal
	{mso-style-name:x_msonormal;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.ayd1
	{mso-style-name:_ay_d1;}
span.ayx
	{mso-style-name:_ay_x;}
span.fc4
	{mso-style-name:_fc_4;}
span.HTMLPreformattedChar
	{mso-style-name:"HTML Preformatted Char";
	mso-style-link:"HTML Preformatted";
	font-family:"Courier New";}
span.xapple-converted-space
	{mso-style-name:x_apple-converted-space;}
p.Title1, li.Title1, div.Title1
	{mso-style-name:Title1;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.status
	{mso-style-name:status;}
span.icon
	{mso-style-name:icon;}
p.x-hidden-focus, li.x-hidden-focus, div.x-hidden-focus
	{mso-style-name:x-hidden-focus;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.separator
	{mso-style-name:separator;}
span.votinglabel
	{mso-style-name:votinglabel;}
span.profile-mini-points
	{mso-style-name:profile-mini-points;}
span.points-label
	{mso-style-name:points-label;}
span.type
	{mso-style-name:type;}
span.Date1
	{mso-style-name:Date1;}
span.item
	{mso-style-name:item;}
span.datetime
	{mso-style-name:datetime;}
span.liketext
	{mso-style-name:liketext;}
span.Heading4Char
	{mso-style-name:"Heading 4 Char";
	mso-style-link:"Heading 4";
	font-family:"Cambria",serif;
	color:#4F81BD;
	font-weight:bold;
	font-style:italic;}
p.xxmsonormal, li.xxmsonormal, div.xxmsonormal
	{mso-style-name:x_xmsonormal;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.document-subtitle
	{mso-style-name:document-subtitle;}
span.rating-count
	{mso-style-name:rating-count;}
span.ads-supported-label-msg
	{mso-style-name:ads-supported-label-msg;}
span.apps
	{mso-style-name:apps;}
span.noun
	{mso-style-name:noun;}
span.css-truncate
	{mso-style-name:css-truncate;}
span.css-truncate-target
	{mso-style-name:css-truncate-target;}
span.progress
	{mso-style-name:progress;}
span.timeline-comment-label
	{mso-style-name:timeline-comment-label;}
span.issuelabel
	{mso-style-name:issuelabel;}
span.4phb
	{mso-style-name:_4phb;}
span.2jsf
	{mso-style-name:_2jsf;}
span.rpv1
	{mso-style-name:_rp_v1;}
span.rpf1
	{mso-style-name:_rp_f1;}
span.currenthithighlight
	{mso-style-name:currenthithighlight;}
p.xmsoplaintext, li.xmsoplaintext, div.xmsoplaintext
	{mso-style-name:x_msoplaintext;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.threading
	{mso-style-name:threading;}
span.cnum
	{mso-style-name:cnum;}
span.lastmod
	{mso-style-name:lastmod;}
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.searchword0
	{mso-style-name:searchword0;}
span.searchword1
	{mso-style-name:searchword1;}
span.js-hovercard-left
	{mso-style-name:js-hovercard-left;}
span.d-inline-block
	{mso-style-name:d-inline-block;}
span.commit-ref
	{mso-style-name:commit-ref;}
span.text-green
	{mso-style-name:text-green;}
span.text-red
	{mso-style-name:text-red;}
span.counter
	{mso-style-name:counter;}
span.state
	{mso-style-name:state;}
span.issue-num
	{mso-style-name:issue-num;}
span.renamed-was
	{mso-style-name:renamed-was;}
span.renamed-is
	{mso-style-name:renamed-is;}
span.comment-type-icon
	{mso-style-name:comment-type-icon;}
span.text-gray
	{mso-style-name:text-gray;}
span.blob-code-inner
	{mso-style-name:blob-code-inner;}
span.discussion-item-entity
	{mso-style-name:discussion-item-entity;}
span.Heading6Char
	{mso-style-name:"Heading 6 Char";
	mso-style-link:"Heading 6";
	font-family:"Calibri",sans-serif;
	font-weight:bold;}
span.Heading7Char
	{mso-style-name:"Heading 7 Char";
	mso-style-link:"Heading 7";
	font-family:"Calibri",sans-serif;}
span.Heading8Char
	{mso-style-name:"Heading 8 Char";
	mso-style-link:"Heading 8";
	font-family:"Calibri",sans-serif;
	font-style:italic;}
span.Heading9Char
	{mso-style-name:"Heading 9 Char";
	mso-style-link:"Heading 9";
	font-family:"Cambria",serif;}
span.TitleChar
	{mso-style-name:"Title Char";
	mso-style-link:Title;
	font-family:"Cambria",serif;
	font-weight:bold;}
span.mw-headline
	{mso-style-name:mw-headline;}
span.ipa
	{mso-style-name:ipa;}
span.nowrap
	{mso-style-name:nowrap;}
span.reference-text
	{mso-style-name:reference-text;}
span.collapsebutton
	{mso-style-name:collapsebutton;}
span.smallcaps
	{mso-style-name:smallcaps;}
span.nocaps
	{mso-style-name:nocaps;}
span.citation
	{mso-style-name:citation;}
span.reference-accessdate
	{mso-style-name:reference-accessdate;}
p.right, li.right, div.right
	{mso-style-name:right;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.unicode
	{mso-style-name:unicode;}
p.info, li.info, div.info
	{mso-style-name:info;
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.print-icon
	{mso-style-name:print-icon;}
span.email-icon
	{mso-style-name:email-icon;}
span.tocnumber
	{mso-style-name:tocnumber;}
span.toctext
	{mso-style-name:toctext;}
span.mbox-text-span
	{mso-style-name:mbox-text-span;}
span.EndnoteTextChar
	{mso-style-name:"Endnote Text Char";
	mso-style-link:"Endnote Text";
	font-family:"Times New Roman",serif;}
span.msoIns
	{mso-style-name:"";
	text-decoration:underline;
	color:teal;}
span.msoDel
	{mso-style-name:"";
	text-decoration:line-through;
	color:red;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
 /* Page Definitions */
 @page WordSection1
	{size:595.45pt 841.7pt;
	margin:.6in .6in .6in 1.0in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
END;
  require_once('header.php');
?>

<p class=MsoNoSpacing><b><span style='font-size:12.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:15.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b><span
style='font-size:15.0pt;color:#00B0F0'>Typing Guideline</span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b><span
style='font-size:15.0pt;color:#00B0F0'>by</span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b><span
style='font-size:15.0pt;color:#00B0F0'>Bivuti Chakma</span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b><span
style='font-size:15.0pt;color:#00B0F0'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:15.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:15.0pt'>RibengUni wih </span></b><b><span
style='font-size:15.0pt'>Easy Chakma Keyboard</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:15.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing style='text-align:justify'>&nbsp;</p>

<p class=MsoNoSpacing style='text-align:justify'><span style='font-size:14.0pt'>RibengUni
</span><span style='font-size:14.0pt;font-family:Nikosh'>&#2458;&#2494;&#2453;&#2478;&#2494;
&#2475;&#2472;&#2509;&#2463;&#2463;&#2495; &#2476;&#2509;&#2479;&#2476;&#2489;&#2494;&#2480;
&#2453;&#2480;&#2503; </span><span style='font-size:14.0pt'>Easy Chakma
Keyboard</span><span style='font-size:14.0pt;font-family:Nikosh'> &#2447;&#2480;
&#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2503; &#2453;&#2495;&#2477;&#2494;&#2476;&#2503;
&#2458;&#2494;&#2453;&#2478;&#2494; &#2482;&#2503;&#2454;&#2494; &#2463;&#2494;&#2439;&#2474;
&#2453;&#2480;&#2468;&#2503; &#2489;&#2476;&#2503; &#2468;&#2494; &#2447;&#2454;&#2494;&#2472;&#2503;
&#2476;&#2495;&#2488;&#2509;&#2468;&#2494;&#2480;&#2495;&#2468; &#2476;&#2480;&#2509;&#2467;&#2472;&#2494;
&#2453;&#2480;&#2494; &#2489;&#2482;&#2507;&#2404; &#2463;&#2494;&#2439;&#2474;
&#2453;&#2480;&#2494;&#2480; &#2460;&#2472;&#2509;&#2479; &#2447;&#2454;&#2494;&#2472;&#2503;
&#2486;&#2497;&#2471;&#2497; &#2458;&#2497;&#2458;&#2509;&#2479;&#2494;&#2457;&#2509;&#2479;&#2494;-&#2453;&#2494;
(</span><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;</span><span
style='font-size:14.0pt;font-family:Nikosh'>) &#2453;&#2503; &#2476;&#2509;&#2479;&#2476;&#2489;&#2494;&#2480;
&#2453;&#2480;&#2503; &#2488;&#2453;&#2482; &#2463;&#2494;&#2439;&#2474; &#2472;&#2495;&#2527;&#2478;&#2494;&#2476;&#2482;&#2496;
&#2488;&#2478;&#2509;&#2474;&#2472;&#2509;&#2472; &#2453;&#2480;&#2494; &#2489;&#2527;&#2503;&#2459;&#2503;&#2404;
&#2441;&#2482;&#2509;&#2482;&#2503;&#2454; &#2469;&#2494;&#2453;&#2503; &#2479;&#2503;,
</span><span style='font-size:14.0pt'>Easy Chakma Keyboard </span><span
style='font-size:14.0pt;font-family:Nikosh'>&#2447;&#2480; &#2453;&#2496;&#2476;&#2507;&#2480;&#2509;&#2465;
&#2482;&#2503;-&#2438;&#2441;&#2463; &#2447;&#2476;&#2434; &#2447;&#2480; &#2463;&#2494;&#2458;
&#2482;&#2503;-&#2438;&#2441;&#2463;&#2488;&#2489; &#2453;&#2496; &#2488;&#2503;&#2463;&#2495;&#2434;
&#2470;&#2503;&#2454;&#2494;&#2472;&#2507; &#2489;&#2527;&#2503;&#2459;&#2503;&#2404;
&#2453;&#2496;&#2476;&#2507;&#2480;&#2509;&#2465;&#2463;&#2495; &#2472;&#2495;&#2480;&#2509;&#2478;&#2494;&#2467;&#2503;&#2480;
&#2488;&#2478;&#2527; &#2479;&#2494;&#2480;&#2494; &#2438;&#2478;&#2494;&#2453;&#2503;
&#2488;&#2494;&#2489;&#2494;&#2479;&#2509;&#2479; &#2453;&#2480;&#2503;&#2459;&#2503;&#2472;
&#2468;&#2494;&#2480;&#2494; &#2489;&#2482;&#2503;&#2472;- </span><span
style='font-size:14.0pt'>Dr. Andrew Glass, Marc Durdin and Makara Sok.</span><span
style='font-size:14.0pt;font-family:Nikosh'> &#2468;&#2494;&#2433;&#2470;&#2503;&#2480;
&#2474;&#2509;&#2480;&#2468;&#2495; &#2438;&#2478;&#2494;&#2480; &#2437;&#2472;&#2509;&#2468;&#2480;&#2503;&#2480;
&#2437;&#2472;&#2509;&#2468;&#2488;&#2509;&#2469;&#2482; &#2489;&#2468;&#2503; &#2453;&#2499;&#2468;&#2460;&#2509;&#2462;&#2468;&#2494;
&#2460;&#2509;&#2462;&#2494;&#2474;&#2472; &#2453;&#2480;&#2459;&#2495;&#2404; &#2447;
&#2474;&#2480;&#2494;&#2478;&#2480;&#2509;&#2486; &#2447;&#2476;&#2434; &#2488;&#2494;&#2489;&#2494;&#2479;&#2509;&#2479;
&#2468;&#2494;&#2433;&#2470;&#2503;&#2480; &#2453;&#2494;&#2459;&#2503; &#2438;&#2478;&#2494;&#2453;&#2503;
&#2458;&#2495;&#2480;&#2443;&#2467;&#2496; &#2453;&#2480;&#2503;&#2459;&#2503;&#2404;</span></p>

<p class=MsoNoSpacing style='text-align:justify'><span style='font-size:14.0pt;
font-family:Nikosh'>&nbsp;</span></p>

<p class=MsoNoSpacing style='text-align:justify'><span style='font-size:14.0pt;
font-family:Nikosh'>&nbsp;</span></p>

<p class=MsoNoSpacing style='text-align:justify'><span style='font-size:14.0pt'>RibengUni
Unicode Chakma Font Keyboard Layout typing guidelines. Here will show Key
settings (Key press) of the Keyboard.  </span></p>

<p class=MsoNoSpacing><span style='font-size:12.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b><span
style='font-size:27.0pt'><img width=567 height=339 id="Picture 8"
src="images/image001.jpg"></span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>The Touch Layout also
added here:</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>Layout (Nomal)</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:8.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:8.0pt'><img width=641
height=167 id="Picture 3"
src="images/image002.png"></span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>Layout (Shift)</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:8.0pt'><img width=641
height=165 id="Picture 4"
src="images/image003.png"></span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>Layout (Symbol)</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:8.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:8.0pt'><img width=641
height=170 id="Picture 2"
src="images/image004.png"></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b>&nbsp;</b></p>

<p class=MsoNoSpacing><b><span style='font-size:14.0pt'>Note: The </span></b><b><span
style='font-size:14.0pt;font-family:RibengUni;color:red'>&#69952;</span></b><b><span
style='font-size:14.0pt'> key sets on <span style='color:red'>A</span>
longpress and </span></b><b><span style='font-size:14.0pt;font-family:RibengUni;
color:#00B0F0'>&#69954;</span></b><b><span style='font-size:14.0pt;color:#00B0F0'>
</span></b><b><span style='font-size:14.0pt'>key sets on a longpress of the
rightmost key on the fourth row (U+11145).</span></b></p>

<p class=MsoNoSpacing><b>&nbsp;</b></p>

<p class=MsoNoSpacing><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:13.0pt'>Broad layout of the Key
Settings</span></b></p>

<p class=MsoNoSpacing><b>&nbsp;</b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Chakma
   Letter</b></p>
   </td>
   <td width="27%" valign=top style='width:27.02%;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>To
   Press </b></p>
   </td>
   <td width="20%" valign=top style='width:20.72%;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Chakma
   Letter</b></p>
   </td>
   <td width="32%" valign=top style='width:32.44%;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>To
   Press </b></p>
   </td>
  </tr>
 </thead>
 <tr>
  <td width="46%" colspan=2 valign=top style='width:46.84%;border:solid windowtext 1.0pt;
  border-top:none;background:#FFC000;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Various
  signs</b></p>
  </td>
  <td width="53%" colspan=2 valign=top style='width:53.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Consonants</b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69888;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+7</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69924;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>p</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69889;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+q</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69925;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>n</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69890;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+\</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69926;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>i</span></p>
  </td>
 </tr>
 <tr>
  <td width="46%" colspan=2 valign=top style='width:46.84%;border:solid windowtext 1.0pt;
  border-top:none;background:#D6E3BC;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Independent
  vowels</b></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69956;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>/(Slash)</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69891;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift
  +f</span></p>
  </td>
  <td width="53%" colspan=2 valign=top style='width:53.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#FFD966;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Dependent
  vowel signs</b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69892;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>z</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69927;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>f</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69893;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+p</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69928;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>d</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69894;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+m</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69929;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+d</span></p>
  </td>
 </tr>
 <tr>
  <td width="46%" colspan=2 valign=top style='width:46.84%;border:solid windowtext 1.0pt;
  border-top:none;background:#B2A1C7;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Consonants</b></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69930;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>s</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69895;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>j</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69931;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+s</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69896;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+j</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69932;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>c</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69897;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>o</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69933;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>a</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69898;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+o</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69934;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>x</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69899;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>q</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69935;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+x</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69900;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>y</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69936;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+c</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69901;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+y</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69937;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+a</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69902;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>u</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69938;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+n</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69903;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+u</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'> </span><img width=21 height=22 id="Picture 13"
  src="images/image005.png"></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+z</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69904;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+i</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><img
  width=19 height=20 id="Picture 9"
  src="images/image006.png"></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+Semi-colon</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69905;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>t</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'>&nbsp;</p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69906;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+t</span></p>
  </td>
  <td width="53%" colspan=2 valign=top style='width:53.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9E2F3;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b>Various
  signs</b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69907;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>e</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69939; (Virama) </span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>g</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69908;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>Shift+e</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&#69940;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>;
  (Semi-colon)</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&nbsp;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>&nbsp;</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-family:RibengUni'>&nbsp;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-family:"Arial Black",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="46%" colspan=2 valign=top style='width:46.84%;border:solid windowtext 1.0pt;
  border-top:none;background:#FFC000;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
  style='font-size:12.0pt'>Consonants</span></b></p>
  </td>
  <td width="53%" colspan=2 valign=top style='width:53.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#B4C6E7;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
  style='font-size:12.0pt'>Digits</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69909;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+b</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69942;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>0</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69910;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>k</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69943;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>1</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69911;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+k</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69944;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>2</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69912;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>l</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69945;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>3</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69913;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+l</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69946;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>4</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69914;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>b</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69947;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>5</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69915;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>r</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69948;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>6</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69916;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+r</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69949;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>7</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69917;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>h</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69950;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>8</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69918;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+h</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69951;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>9</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69919;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>m</span></p>
  </td>
  <td width="53%" colspan=2 valign=top style='width:53.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
  style='font-size:12.0pt'>Punctuation</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69920;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+ w </span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69952;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+6</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69921;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>w</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69953;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift +g</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69922;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>v</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69954;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'> \ (Back slash)</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69923;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>Shift+v</span></p>
  </td>
  <td width="20%" valign=top style='width:20.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  style='font-size:12.0pt;font-family:RibengUni'>&#69955;</span></p>
  </td>
  <td width="32%" valign=top style='width:32.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
  font-family:"Arial Black",sans-serif'>?</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><b>&nbsp;</b></p>

<p class=MsoNoSpacing><b><span style='font-size:13.0pt'>Note: </span></b><span
style='font-size:13.0pt'>All <b>complex Script</b> are included from next page
example with Cucengya Kaa (</span><span style='font-size:13.0pt;font-family:
RibengUni'>&#69895;</span><span style='font-size:13.0pt'>) </span></p>

<p class=MsoNoSpacing><span style='font-size:13.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing><b><span style='font-size:13.0pt'>Special thanked to</span></b></p>

<p class=MsoNoSpacing style='text-align:justify'><span class=MsoHyperlink><span
style='font-size:14.0pt;color:windowtext'><a
href="https://www.facebook.com/peter.constable.3"><span style='color:windowtext'>Peter</span></a></span></span><span
style='font-size:13.0pt'>, </span><span class=MsoHyperlink><span
style='font-size:14.0pt;color:windowtext'><a
href="https://www.facebook.com/andrew.glass.754"><span style='color:windowtext'>Andrew</span></a></span></span><span
style='font-size:13.0pt'> (Microsoft Corporation), Paul D. Hunt (Adobe
Corporation), Jan Zurawski (Poland), [</span><span class=MsoHyperlink><span
style='font-size:14.0pt;color:windowtext'><a
href="https://www.facebook.com/marc.durdin"><span style='color:windowtext'>Marc
Durdin</span></a></span></span><span style='font-size:13.0pt'> the founder of
Keyman, who helped creating this keyboard &amp; </span><span
class=MsoHyperlink><span style='font-size:14.0pt;color:windowtext'><a
href="https://www.facebook.com/sokmkr"><span style='color:windowtext'>Makara
SOK</span></a></span></span><span style='font-size:13.0pt'> the project support
specialist at Keyman, who help updating this keyboard and fixing bugs (</span><span
class=MsoHyperlink><span style='font-size:14.0pt;color:windowtext'><a
href="http://www.keyman.com/"><span style='color:windowtext'>http://www.keyman.com/</span></a></span></span><span
style='font-size:13.0pt'>]</span></p>

<p class=MsoNoSpacing style='text-align:justify'><span style='font-size:13.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing style='text-align:justify'><b><span style='font-size:
13.0pt'>NB</span></b><span style='font-size:13.0pt'>: If any question about “RibengUni”
Chakma Font please contact with Bivuti Chakma (Suz Moriz) </span></p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing><span
style='font-size:14.0pt'>Typing Guide Lines Example with Cucengya Kaa [</span><span
style='font-size:14.0pt;font-family:RibengUni'>&#69895;</span><span
style='font-size:14.0pt'>]</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
   background:#FBD4B4;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
   style='font-size:13.0pt;font-family:RibengUni'>Chakma Letters</span></p>
   </td>
   <td width="47%" valign=top style='width:47.52%;border:solid windowtext 1.0pt;
   border-left:none;background:#FBD4B4;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
   style='font-size:13.0pt;font-family:RibengUni'>To Press (Key)</span></p>
   </td>
  </tr>
 </thead>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69957; = &#69895;+&#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+ : &#69895;&#69957;  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891; = &#69895;+&#69939;+&#69891;+&#69939;+&#69891;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F &#69895;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;
  = &#69895;+&#69939;+&#69891;+&#69939;+&#69891;+&#69939;+&#69891; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69958; = &#69895;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Z &#69895;&#69958;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69893; = &#69895;+&#69939;+&#69893;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+P &#69895;&#69939;&#69893;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894; =&#69895;+&#69939;+&#69894; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M &#69895;&#69939;&#69894; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69895; = &#69895;+&#69939;+&#69895;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+j &#69895;&#69939;&#69895;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69896; = &#69895;+&#69939;+&#69896;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+J &#69895;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69897; = &#69895;+&#69939;+&#69897;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+o &#69895;&#69939;&#69897;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69898; = &#69895;+&#69939;+&#69898;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+O &#69895;&#69939;&#69898;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69899; = &#69895;+&#69939;+&#69899;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+q &#69895;&#69939;&#69899;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69900; = &#69895;+&#69939;+&#69900;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+y &#69895;&#69939;&#69900;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69901; = &#69895;+&#69939;+&#69901;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+Y &#69895;&#69939;&#69901; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69902; = &#69895;+&#69939;+&#69902;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+u &#69895;&#69939;&#69902;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69903; = &#69895;+&#69939;+&#69903;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+U &#69895;&#69939;&#69903;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69904; = &#69895;+&#69939;+&#69904;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+I &#69895;&#69939;&#69904;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69905; = &#69895;+&#69939;+&#69905;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+t &#69895;&#69939;&#69905;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69906; = &#69895;+&#69939;+&#69906;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+T &#69895;&#69939;&#69906;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69907; = &#69895;+&#69939;+&#69907;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+e &#69895;&#69939;&#69907;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69908; = &#69895;+&#69939;+&#69908;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+E &#69895;&#69939;&#69908;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69909; = &#69895;+&#69939;+&#69909;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+B &#69895;&#69939;&#69909;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69910; = &#69895;+&#69939;+&#69910;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+k &#69895;&#69939;&#69910;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69911; = &#69895;+&#69939;+&#69911;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+K &#69895;&#69939;&#69911;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69912; = &#69895;+&#69939;+&#69912;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+l &#69895;&#69939;&#69912; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69913; = &#69895;+&#69939;+&#69913;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+L &#69895;&#69939;&#69913;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69914; = &#69895;+&#69939;+&#69914;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+b &#69895;&#69939;&#69914;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69915; = &#69895;+&#69939;+&#69915;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+r &#69895;&#69939;&#69915;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69916; = &#69895;+&#69939;+&#69916;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+R &#69895;&#69939;&#69916;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69917; = &#69895;+&#69939;+&#69917;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+h  &#69895;&#69939;&#69917;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69918; = &#69895;+&#69939;+&#69918;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+H &#69895;&#69939;&#69918;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69919; = &#69895;+&#69939;+&#69919;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+m &#69895;&#69939;&#69919;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69921; = &#69895;+&#69939;+&#69921;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+w &#69895;&#69939;&#69921;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922; = &#69895;+&#69939;+&#69922;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v &#69895;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923; = &#69895;+&#69939;+&#69923;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V &#69895;&#69939;&#69923; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69924; = &#69895;+&#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A &#69895;&#69939;&#69924; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69925; = &#69895;+&#69939;+&#69925;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+n &#69895;&#69939;&#69925;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926; = &#69895;+&#69939;+&#69926;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i &#69895;&#69939;&#69926;</span></p>
  </td>
 </tr>
 <tr style='height:3.85pt'>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:3.85pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920; = &#69895;+&#69939;+&#69920;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.85pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W &#69895;&#69939;&#69920;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69889;&#69888; = &#69895;+&#69889;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q+&amp; &#69895;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69890;&#69888; = &#69895;+&#69890;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+|+&amp; &#69895;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69890; = &#69895;+&#69928;+&#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+| &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69933; = &#69895;+&#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a &#69895;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69889; = &#69895;+&#69928;+&#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69937;&#69957; = &#69895;+ &#69937; +  &#69957;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+ A+ : &#69895;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69939;&#69893; = &#69895;+&#69939;+&#69922;+&#69939;+&#69893;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+g+P &#69895;&#69939;&#69922;&#69939;&#69893;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69928; = &#69895;+&#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d &#69895;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69888; = &#69895;+&#69928;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+&amp; &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930; = &#69895;+&#69939;+&#69926;+&#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+s &#69895;&#69939;&#69926;&#69930;  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937; = &#69895;+&#69939;+&#69926;+&#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+A &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928; = &#69895;+&#69927;+&#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d &#69895;&#69927;&#69928; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69930;&#69888; = &#69895;+&#69930;+&#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+&amp; &#69895;&#69930;&#69888;  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931; = &#69895;+&#69939;+&#69922;+&#69931;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+S &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930; = &#69895;+&#69939;+&#69922;+&#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+s &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937; = &#69895;+&#69939;+&#69922;+&#69937;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+A &#69895;&#69939;&#69922;&#69937;  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69939;&#69922; = &#69895;+&#69939;+&#69926;+&#69939;+&#69922;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+g+v &#69895;&#69939;&#69926;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69890; = &#69895;+&#69929;+&#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69889; = &#69895;+&#69929;+&#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69888; = &#69895;+&#69929;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+&amp; &#69895;&#69929;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69929; = &#69895;&#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D &#69895;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69936; = &#69895;+&#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C &#69895;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69890;&#69890; = &#69895;+&#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+| &#69895;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69889;&#69889; = &#69895;+&#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q &#69895;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69888;&#69888; = &#69895;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+&amp; &#69895;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890; = &#69895;+&#69927;+&#69929;+&#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+| &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889; = &#69895;+&#69927;+&#69929;+&#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+Q &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69888; = &#69895;+&#69927;+&#69929;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+&amp; &#69895;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929; = &#69895;+&#69927;+&#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D &#69895;&#69927;&#69929; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890; = &#69895;+&#69927;+&#69928;+&#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+| &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69889; = &#69895;+&#69927;+&#69928;+&#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+Q &#69895;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888; = &#69895;+&#69927;+&#69928;+&#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+&amp; &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69956;&#69957; = &#69956;+ &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>/+ : (colon) &#69956;&#69957;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69888; = &#69895; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+&amp; &#69895;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69888; = &#69895; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+&amp; &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69888; = &#69895; + &#69929;  + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+&amp; &#69895;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69930;&#69888; = &#69895; + &#69930; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+&amp; &#69895;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69931;&#69888; = &#69895; + &#69931; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+&amp; &#69895;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69888; = &#69895; + &#69933; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+&amp; &#69895;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69934;&#69888; = &#69895; + &#69934; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+x+&amp; &#69895;&#69934;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69935;&#69888; = &#69895; + &#69935; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+X+&amp; &#69895;&#69935;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69888; = &#69895; + &#69936; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+&amp; &#69895;&#69936;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69937;&#69888; = &#69895; + &#69937; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+&amp; &#69895;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69938;&#69888; = &#69895; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+&amp; &#69895;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69889; = &#69895; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+Q &#69895;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69889; = &#69895; + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69889; = &#69895; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69930;&#69889; = &#69895; + &#69930; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+Q &#69895;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69931;&#69889; = &#69895; + &#69931; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+Q &#69895;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69889; = &#69895; + &#8204;&#69933;
  + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+Q &#69895;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69934;&#69889; = &#69895; + &#69934; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+x+Q &#69895;&#69934;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69935;&#69889; = &#69895; +  &#69935; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+X+Q &#69895;&#69935;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69889; = &#69895; + &#69936; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+Q &#69895;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69937;&#69889; = &#69895; + &#69937; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+Q &#69895;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69938;&#69889; = &#69895; + &#69938; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+Q &#69895;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69890;= &#69895; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+| &#69895;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69890; = &#69895; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+| &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69890; = &#69895; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69930;&#69890; = &#69895; + &#69930; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+| &#69895;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69931;&#69890; = &#69895; + &#69931; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+| &#69895;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69890; = &#69895; + &#8204;&#69933;
  + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+| &#69895;&#69933;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69934;&#69890; = &#69895; + &#69934; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+x+| &#69895;&#69934;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69935;&#69890; = &#69895; +  &#69935; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+X+| &#69895;&#69935;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69890; = &#69895; + &#69936; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+| &#69895;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69937;&#69890; = &#69895; + &#69937; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+| &#69895;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69938;&#69890; = &#69895; + &#69938; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+| &#69895;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928; = &#69895; + &#69928; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d &#69895;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929; = &#69895; + &#69929; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D &#69895;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69930; = &#69895; + &#69927; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+s &#69895;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69931; = &#69895; + &#69927; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+S &#69895;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69937; = &#69895; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A &#69895;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69938; = &#69895; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N &#69895;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888; =  &#69895; + &#69927;
  + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+&amp; &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69888; = &#69895; + &#69927;
  + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+&amp; &#69895;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69889; = &#69895; + &#69927;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+Q &#69895;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889; = &#69895; + &#69927;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+Q &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890; = &#69895; + &#69927;
  + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+| &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890; = &#69895; + &#69927;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+| &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69888; = &#69895; + &#69888;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+&amp;+Z &#69895;&#69939;&#69892;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69889; = &#69895; + &#69889;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q +Z &#69895;&#69939;&#69892;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69890; = &#69895; + &#69890;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+|+Z &#69895;&#69939;&#69892;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927; = &#69895; + &#69927;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f +Z &#69895;&#69939;&#69892;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69928;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d +Z &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929; = &#69895; + &#69929;
  + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D +Z &#69895;&#69939;&#69892;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69930; = &#69895; + &#69930;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s +Z &#69895;&#69939;&#69892;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69931; = &#69895; + &#69931;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S +Z &#69895;&#69939;&#69892;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69933; = &#69895; + &#69933;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a +Z &#69895;&#69939;&#69892;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69937; = &#69895; + &#69927;
  + &#69937; + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A +Z &#69895;&#69939;&#69892;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69938; = &#69895; + &#69927;
  + &#69938; + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N +Z &#69895;&#69939;&#69892;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69936; = &#69895;+ &#69936;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C +Z &#69895;&#69939;&#69892;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69937; = &#69895;+ &#69937;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A +Z &#69895;&#69939;&#69892;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69938; = &#69895; + &#69938;
  + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N +Z &#69895;&#69939;&#69892;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940; = &#69895; + &#69940;
  + &#69958; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+Z &#69895;&#69939;&#69892;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69888; = &#69895; + &#69888;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+&amp;+: &#69895;&#69939;&#69891;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69889; = &#69895; + &#69889;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q+:  &#69895;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69890; = &#69895; + &#69890;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+| + : &#69895;&#69939;&#69891;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69927;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f +: &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928; = &#69895; + &#69928;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+: &#69895;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929; = &#69895; + &#69929;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+: &#69895;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69930; = &#69895;+ &#69930;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+: &#69895;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69931; = &#69895; + &#69931;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+ : &#69895;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69933; = &#69895;+ &#69933;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a + : &#69895;&#69939;&#69891;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69937; = &#69895; + &#69927;
  + &#69937; + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+: &#69895;&#69939;&#69891;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938; = &#69895;+ &#69927;
  + &#69938; + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+: &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69936; = &#69895;+ &#69936;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+ : &#69895;&#69939;&#69891;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69937; = &#69895;+ &#69937;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+: &#69895;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69938; = &#69895; + &#69938;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+: &#69895;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940; = &#69895; + &#69940;
  + &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+: &#69895;&#69939;&#69891;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+&amp; &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+Q &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69890; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+| &#69895;&#69939;&#69894;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+S &#69895;&#69939;&#69894;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+a &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936; = &#69895; + &#69939;
  + &#69894; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937; = &#69895;+ &#69939;
  + &#69894; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940; = &#69895; + &#69939;
  + &#69894; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+; &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+&amp; &#69895;&#69939;&#69920;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+Q &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+| &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+d &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+D &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+s &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69931;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+S &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933; = &#69895; + &#69939;
  + &#69922; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+a &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934; = &#69895; + &#69939;
  + &#69922; + &#69934; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+x &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69935; = &#69895; + &#69939;
  + &#69922; + &#69935;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+X &#69895;&#69939;&#69922;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+C &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+A &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+N &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940; =  &#69895; + &#69939;
  + &#69922; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+; &#69895;&#69939;&#69922;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69888; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+&amp; &#69895;&#69939;&#69922;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69889; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+Q &#69895;&#69939;&#69922;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69890; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+| &#69895;&#69939;&#69922;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+d &#69895;&#69939;&#69922;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+D &#69895;&#69939;&#69922;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+s &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69931; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+S &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69936;    </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+C &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69888; = &#69895; + &#69939;
  + &#69922; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+&amp; &#69895;&#69939;&#69922;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69889; = &#69895; + &#69939;
  + &#69922; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+Q &#69895;&#69939;&#69922;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69890; = &#69895; + &#69939;
  + &#69922; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+| &#69895;&#69939;&#69922;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+d &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+D &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+s &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69931;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+S &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933; = &#69895; + &#69939;
  + &#69922; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+a &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934; = &#69895; + &#69939;
  + &#69922; + &#69934;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+x &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69935; = &#69895; + &#69939;
  + &#69922; + &#69935;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+X &#69895;&#69939;&#69922;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+C &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+A &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+N &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940; =  &#69895; + &#69939;
  + &#69922; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+; &#69895;&#69939;&#69922;&#69940; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69888; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+&amp; &#69895;&#69939;&#69922;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69889; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+Q &#69895;&#69939;&#69922;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69890; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+| &#69895;&#69939;&#69922;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+d &#69895;&#69939;&#69922;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+D &#69895;&#69939;&#69922;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69930;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+s &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69931;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+S &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+C &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940; = &#69895; + &#69939;
  + &#69922; + &#69940; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+; &#69895;&#69939;&#69922;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69888; = &#69895; + &#69939;
  + &#69926; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+&amp; &#69895;&#69939;&#69926;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69889; = &#69895; + &#69939;
  + &#69926; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+Q &#69895;&#69939;&#69926;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69890; = &#69895; + &#69939;
  + &#69926; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+| &#69895;&#69939;&#69926;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927; = &#69895; + &#69939;
  + &#69926; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f &#69895;&#69939;&#69926;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69928; = &#69895; + &#69939;
  + &#69926; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+d &#69895;&#69939;&#69926;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69929; = &#69895; + &#69939;
  + &#69926; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+D &#69895;&#69939;&#69926;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+s &#69895;&#69939;&#69926;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69931;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+S &#69895;&#69939;&#69926;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69933; = &#69895; + &#69939;
  + &#69926; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+a &#69895;&#69939;&#69926;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934; = &#69895; + &#69939;
  + &#69926; + &#69934;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+x &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69936; = &#69895; + &#69939;
  + &#69926; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+C &#69895;&#69939;&#69926;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+A &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940; =  &#69895; + &#69939;
  + &#69926; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+; &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69888; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+&amp; &#69895;&#69939;&#69926;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69889; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+Q &#69895;&#69939;&#69926;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69890; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+| &#69895;&#69939;&#69926;&#69927;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69928; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+d &#69895;&#69939;&#69926;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69929; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+D &#69895;&#69939;&#69926;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69936; = &#69895; + &#69939;
  + &#69926; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+C &#69895;&#69939;&#69926;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940; = &#69895; + &#69939;
  + &#69926; + &#69940; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+; &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940; = &#69895; + &#69939;
  + &#69923; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+; &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+f+A &#69895;&#69939;&#69926;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+&amp; &#69895;&#69939;&#69920;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+Q &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+| &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+d &#69895;&#69939;&#69920;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+D &#69895;&#69939;&#69920;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930; = &#69895; + &#69939;
  + &#69920; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+s &#69895;&#69939;&#69920;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931; = &#69895; + &#69939;
  + &#69920; + &#69931;&#8204;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+S &#69895;&#69939;&#69920;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933; = &#69895; + &#69939;
  + &#69920; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+a &#69895;&#69939;&#69920;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+A &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+N &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936; = &#69895; + &#69939;
  + &#69920; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+C &#69895;&#69939;&#69920;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+A &#69895;&#69939;&#69920;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N &#69895;&#69939;&#69920;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940; = &#69895; + &#69939;
  + &#69920; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+; &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+&amp; &#69895;&#69939;&#69920;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69888; = &#69895; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+&amp; &#69895;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69889; = &#69895; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q &#69895;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69890; = &#69895; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+| &#69895;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927; = &#69895; + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f &#69895;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928; = &#69895; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d &#69895;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929; = &#69895; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D &#69895;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69930; = &#69895; + &#69930; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s &#69895;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69931; = &#69895; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S &#69895;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69932; = &#69895;&#8204; +  &#8204;&#69932;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+c &#69895;&#69932;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69934; = &#69895; + &#69934; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+x &#69895;&#69934; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69935; = &#69895; + &#69935; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+X &#69895;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69937; = &#69895; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A &#69895;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69938; = &#69895; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N &#69895;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939; = &#69895; + &#69939; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g &#69895;&#69939;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940; = &#69895; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+; &#69895;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69890;&#69888; = &#69895; + &#69890; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+|+&amp; &#69895;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69889;&#69888; = &#69895; + &#69889; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q+&amp; &#69895;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69890; = &#69895; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+| &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69889; = &#69895; + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930; =  &#69895; + &#69939;
  + &#69922; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+s &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69928;&#69888; = &#69895; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+&amp; &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69924; = &#69895; + &#69939; + &#69924;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+p &#69895;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+s &#69895;&#69939;&#69926;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+A &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928; = &#69895; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d &#69895;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69931; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+S &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69930; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+s &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69939;&#69924; = &#69895; + &#69939;
  + &#69922; + &#69939; + &#69924;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+g+p &#69895;&#69939;&#69922;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69939;&#69922; = &#69895; + &#69939;+
  &#69926; + &#69939; + &#69922;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+g+v &#69895;&#69939;&#69926;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69890; = &#69895; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69889; = &#69895; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69929;&#69888; = &#69895; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+&amp; &#69895;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929; = &#69895; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D &#69895;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927; = &#69895; + &#69927;
  +  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j +f+Z &#69895;&#69939;&#69892;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940; = &#69895; + &#69940;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j +; +Z &#69895;&#69939;&#69892;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940; = &#69895; + &#69939;
  + &#69894; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+; &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69937; = &#69895; + &#69927;
  + &#69937;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+ f +A+: &#69895;&#69939;&#69891;&#69927;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938; = &#69895; + &#69927;
  + &#69938; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+: &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69927;
  + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+: &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940; = &#69895; + &#69939;
  + &#69920; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+; &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890; = &#69895; + &#69927;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+| &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889; = &#69895; + &#69927;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+Q &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890; = &#69895; + &#69927;
  + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+| &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888; = &#69895; + &#69927;
  + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+&amp; &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69927;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+d &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+D &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933; = &#69895; + &#69939;
  + &#69922; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+a &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69888; = &#69895; + &#69933; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+&amp; &#69895;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69888; = &#69895; + &#69936; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+&amp; &#69895;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934; = &#69895; + &#69939;
  + &#69922; + &#69934; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+x &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934; = &#69895; + &#69939;
  + &#69926; + &#69934;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+x &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69890; = &#69895; + &#69936; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+| &#69895;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69890; = &#69895; + &#69933; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+| &#69895;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69933;&#69889; = &#69895; + &#69933; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+Q &#69895;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69936;&#69889; = &#69895; + &#69936; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+Q &#69895;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69924;&#69940; = &#69895; + &#69939;
  + &#69924; + &#69940;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+p+; &#69895;&#69939;&#69924;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69928;
  + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d +Z &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929; = &#69895; + &#69929;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D +Z &#69895;&#69939;&#69892;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69930; = &#69895; + &#69930;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s +Z &#69895;&#69939;&#69892;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69931; = &#69895; + &#69931;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S +Z &#69895;&#69939;&#69892;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69933; = &#69895; + &#69933;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a +Z &#69895;&#69939;&#69892;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69937; = &#69895; + &#69927;
  + &#69937;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A +Z &#69895;&#69939;&#69892;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69938; = &#69895; + &#69927;
  + &#69938;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N +Z &#69895;&#69939;&#69892;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69936; = &#69895; + &#69936;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C +Z &#69895;&#69939;&#69892;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69937; = &#69895; + &#69937;
  + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A +Z &#69895;&#69939;&#69892;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69938; = &#69895; + &#69938;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N +Z &#69895;&#69939;&#69892;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69889; = &#69895; + &#69889;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+Q +: &#69895;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69890;  = &#69895; + &#69890;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+|+: &#69895;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69927;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f +: &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928; = &#69895; + &#69928;
  + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d +: &#69895;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929; = &#69895; + &#69929;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D + : &#69895;&#69939;&#69891;&#69929; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69930; = &#69895; + &#69930;
  + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s +: &#69895;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69931; = &#69895; + &#69931;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S +: &#69895;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69933; = &#69895; + &#69933;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a +: &#69895;&#69939;&#69891;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69936; = &#69895; + &#69936;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C +: &#69895;&#69939;&#69891;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69937; = &#69895; + &#69937;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A +: &#69895;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69938; = &#69895; + &#69938;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N +: &#69895;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+S &#69895;&#69939;&#69926;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+&amp; &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+Q &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+| &#69895;&#69939;&#69894;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+S &#69895;&#69939;&#69894;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+a &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936; = &#69895; + &#69939;
  + &#69894; + &#69936; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+A &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69888; = &#69895; + &#69888;
  + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+&amp;+: &#69895;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940; = &#69895; + &#69940;+
  &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+; +:&#69895;&#69939;&#69891;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69937; = &#69895; + &#69939;
  + &#69923; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+A &#69895;&#69939;&#69923;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931; = &#69895; + &#69939;
  + &#69923; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+S &#69895;&#69939;&#69923;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69930; = &#69895; + &#69939;
  + &#69923; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+s &#69895;&#69939;&#69923;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+&amp; &#69895;&#69939;&#69920;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+Q &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+| &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+d &#69895;&#69939;&#69920;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+D &#69895;&#69939;&#69920;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933; = &#69895; + &#69939;
  + &#69920; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+a &#69895;&#69939;&#69920;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+A &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+N &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936; = &#69895; + &#69939;
  + &#69920; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+C &#69895;&#69939;&#69920;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+A &#69895;&#69939;&#69920;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N &#69895;&#69939;&#69920;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+&amp; &#69895;&#69939;&#69920;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+d+&amp; &#69895;&#69939;&#69920;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+D+&amp; &#69895;&#69939;&#69920;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69930; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+s+&amp; &#69895;&#69939;&#69920;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69931; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+S+&amp; &#69895;&#69939;&#69920;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69933; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+a+&amp; &#69895;&#69939;&#69920;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;&#69888; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+A+&amp; &#69895;&#69939;&#69920;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;&#69888; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+N+&amp; &#69895;&#69939;&#69920;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69936; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+C+&amp; &#69895;&#69939;&#69920;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69937; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+A+&amp; &#69895;&#69939;&#69920;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N+&amp; &#69895;&#69939;&#69920;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+Q &#69895;&#69939;&#69920;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69929; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+D+Q &#69895;&#69939;&#69920;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69930; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+s+Q &#69895;&#69939;&#69920;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69931; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+S+Q &#69895;&#69939;&#69920;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69933; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+a+Q &#69895;&#69939;&#69920;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;&#69889; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69937; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+A+Q &#69895;&#69939;&#69920;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;&#69889; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69938; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+N+Q &#69895;&#69939;&#69920;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69936; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+C+Q &#69895;&#69939;&#69920;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69937; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+A+Q &#69895;&#69939;&#69920;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69938; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N+Q &#69895;&#69939;&#69920;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+| &#69895;&#69939;&#69920;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+d+| &#69895;&#69939;&#69920;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+D+| &#69895;&#69939;&#69920;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69930; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+s+| &#69895;&#69939;&#69920;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69931; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+S+| &#69895;&#69939;&#69920;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69933; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+a+| &#69895;&#69939;&#69920;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69937; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+A+| &#69895;&#69939;&#69920;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69938; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N+| &#69895;&#69939;&#69920;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69936; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+C+| &#69895;&#69939;&#69920;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69938; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+N+| &#69895;&#69939;&#69920;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+d &#69895;&#69939;&#69920;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+D &#69895;&#69939;&#69920;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69930; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69930; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+s &#69895;&#69939;&#69920;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69931; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+S &#69895;&#69939;&#69920;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69889; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+d+Q &#69895;&#69939;&#69920;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+N &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69889; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+D+Q &#69895;&#69939;&#69920;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+A &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940; = &#69895; + &#69939;
  + &#69920; + &#69940; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+; &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69890; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+D+| &#69895;&#69939;&#69920;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69888; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69929; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+D+&amp; &#69895;&#69939;&#69920;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69890; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+d+| &#69895;&#69939;&#69920;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930; = &#69895; + &#69939;
  + &#69920; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+s &#69895;&#69939;&#69920;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69888; = &#69895;
  + &#69939; + &#69920; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+f+d+&amp; &#69895;&#69939;&#69920;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931; = &#69895; + &#69939;
  + &#69920; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+S &#69895;&#69939;&#69920;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69933;&#69889; = &#69895; + &#69933;
  + &#69889; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+Q +Z &#69895;&#69939;&#69892;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69889; = &#69895;
  + &#69927; + &#69938; + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+Q +Z &#69895;&#69939;&#69892;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69889; = &#69895;
  + &#69927; + &#69937; + &#69889; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+Q +Z &#69895;&#69939;&#69892;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69936;&#69889; = &#69895; + &#69936;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+Q +Z &#69895;&#69939;&#69892;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69937;&#69889; = &#69895; + &#69937;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+Q +Z &#69895;&#69939;&#69892;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69938;&#69889; = &#69895; + &#69938;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+Q +Z &#69895;&#69939;&#69892;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69890; = &#69895; + &#69927;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+| +Z&#69895;&#69939;&#69892;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928;&#69890; = &#69895; + &#69928;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+| +Z&#69895;&#69939;&#69892;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929;&#69890; = &#69895; + &#69929;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| +Z&#69895;&#69939;&#69892;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69930;&#69890; = &#69895; + &#69930;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+| +Z&#69895;&#69939;&#69892;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69931;&#69890; = &#69895; + &#69931;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+| +Z&#69895;&#69939;&#69892;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69890; = &#69895;
  + &#69927; + &#69937; + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+| +Z&#69895;&#69939;&#69892;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69890; = &#69895;
  + &#69927; + &#69938; + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+| +Z&#69895;&#69939;&#69892;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69936;&#69890; = &#69895; + &#8204;&#69936;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+| +Z&#69895;&#69939;&#69892;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69937;&#69890; = &#69895; + &#69937;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+| +Z&#69895;&#69939;&#69892;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69938;&#69890; = &#69895; + &#69938;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+| +Z&#69895;&#69939;&#69892;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69928; = &#69895; + &#69927;
  + &#69928; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d +Z &#69895;&#69939;&#69892;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69929; = &#69895; + &#69927;
  + &#69929;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D +Z &#69895;&#69939;&#69892;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69930; = &#69895; + &#69927;
  + &#69930;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+s +Z &#69895;&#69939;&#69892;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69931; = &#69895; + &#69927;
  + &#69931;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+S + Z &#69895;&#69939;&#69892;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69890; = &#69895;
  + &#69927; + &#69929; + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+| +Z&#69895;&#69939;&#69892;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69889; = &#69895;
  + &#69927; + &#69929; + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+Q +Z &#69895;&#69939;&#69892;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69888; = &#69895;
  + &#69927; + &#69929; + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+&amp; +Z&#69895;&#69939;&#69892;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69928;&#69890; = &#69895;
  + &#69927; + &#69928; + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+| +Z&#69895;&#69939;&#69892;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929;&#69890;</span><span
  style='font-size:13.0pt;font-family:RibengUni'> = &#69895; + &#69929; + &#69890;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| +Z &#69895;&#69939;&#69892;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69928;&#69888; = &#69895;
  + &#69927; + &#69928; + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+&amp; +Z&#69895;&#69939;&#69892;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928;&#69889; = &#69895; + &#69928;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q +Z &#69895;&#69939;&#69892;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929;&#69889; = &#69895; + &#69929;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q +Z &#69895;&#69939;&#69892;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69930;&#69889; = &#69895; + &#69930;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+Q +Z &#69895;&#69939;&#69892;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69931;&#69889; = &#69895; + &#69931;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+Q +Z &#69895;&#69939;&#69892;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69938;&#69888; = &#69895; + &#69938;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+&amp; +Z &#69895;&#69939;&#69892;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69889; = &#69895; + &#69927;
  + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+Q +Z &#69895;&#69939;&#69892;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69928;+
  &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d +Z &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69888; = &#69895; + &#69927;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+&amp; +Z &#69895;&#69939;&#69892;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69928;&#69888; = &#69895; + &#69928;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+&amp; +Z&#69895;&#69939;&#69892;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69929;&#69888; = &#69895; + &#69929;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+&amp; +Z&#69895;&#69939;&#69892;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69930;&#69888; = &#69895; + &#69930;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+&amp; +Z &#69895;&#69939;&#69892;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69931;&#69888; = &#69895; + &#69931;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+&amp; +Z&#69895;&#69939;&#69892;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69933;&#69888; = &#69895; + &#69933;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+&amp; +Z &#69895;&#69939;&#69892;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69888; = &#69895;
  + &#69927; + &#69937; + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+&amp; +Z &#69895;&#69939;&#69892;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69888; = &#69895;
  + &#69927; + &#69938; + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+&amp; +Z &#69895;&#69939;&#69892;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69936;&#69888; = &#69895; + &#8204;&#69936;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+&amp; +Z &#69895;&#69939;&#69892;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69937;&#69888; = &#69895; + &#69937;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+&amp; +Z &#69895;&#69939;&#69892;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69933;&#69889; = &#69895; + &#69933;
  + &#69889; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+Q +: &#69895;&#69939;&#69891;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69889;  = &#69895;
  + &#69927; + &#69937; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+Q +: &#69895;&#69939;&#69891;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69889;  = &#69895;
  + &#69927; + &#69938; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+Q +: &#69895;&#69939;&#69891;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69936;&#69889;  = &#69895; +
  &#69936; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+Q +: &#69895;&#69939;&#69891;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69937;&#69889;  = &#69895; +
  &#69937; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+Q +: &#69895;&#69939;&#69891;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69938;&#69889;  = &#69895; +
  &#69938; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+Q +: &#69895;&#69939;&#69891;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69890;  = &#69895; +
  &#69927; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+| +: &#69895;&#69939;&#69891;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928;&#69890;  = &#69895; +
  &#69928; + &#69890;+ &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+|+: &#69895;&#69939;&#69891;&#69928;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928;&#69889; = &#69895; + &#69928;
  + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q +: &#69895;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929;&#69889; = &#69895; + &#69929;
  + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q +: &#69895;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929;&#69890;  = &#69895; +
  &#69929; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+| +: &#69895;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69930;&#69890;  = &#69895; +
  &#69930; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+| +: &#69895;&#69939;&#69891;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69931;&#69890;  = &#69895; +
  &#69931; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+| +: &#69895;&#69939;&#69891;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69933;&#69890;  = &#69895; +
  &#69933; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+| +: &#69895;&#69939;&#69891;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69890;  = &#69895;
  + &#69927; + &#69937; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+| +: &#69895;&#69939;&#69891;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69890;  = &#69895;
  + &#69927; + &#69938; + &#69890; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+| +: &#69895;&#69939;&#69891;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69936;&#69890;  = &#69895; +
  &#69936; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+| +: &#69895;&#69939;&#69891;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69937;&#69890;  = &#69895; +
  &#69937; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+| +: &#69895;&#69939;&#69891;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69938;&#69890;  = &#69895; +
  &#69938; + &#69890; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+| +: &#69895;&#69939;&#69891;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69928;  = &#69895; +
  &#69927; + &#69928;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d +: &#69895;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69929;  = &#69895; +
  &#69927; + &#69929; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D +: &#69895;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69930;  = &#69895; +
  &#69927; + &#69930;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+s +: &#69895;&#69939;&#69891;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69931;  = &#69895; +
  &#69927; + &#69931;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+S +: &#69895;&#69939;&#69891;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69890;  = &#69895;
  + &#69927; + &#69929; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+| +: &#69895;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69889;  = &#69895;
  + &#69927; + &#69929; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+Q +: &#69895;&#69939;&#69891;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69888;  = &#69895;
  + &#69927; + &#69929; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+D+&amp; +: &#69895;&#69939;&#69891;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69890;  = &#69895;
  + &#69927; + &#69928; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+| +: &#69895;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69889;  = &#69895;
  + &#69927; + &#69928; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+Q +: &#69895;&#69939;&#69891;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69888;  = &#69895;
  + &#69927; + &#69928; + &#69888;+ &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+d+&amp; +: &#69895;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928;&#69889;  = &#69895; +
  &#69928; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+Q +: &#69895;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929;&#69889;  = &#69895; +
  &#69929; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+Q +: &#69895;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69930;&#69889;  = &#69895; +
  &#69930; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+Q +: &#69895;&#69939;&#69891;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69931;&#69889;  = &#69895; +
  &#69931; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+Q +: &#69895;&#69939;&#69891;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69938;&#69888;  = &#69895; +
  &#69938; + &#69888; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+&amp; +: &#69895;&#69939;&#69891;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69889;  = &#69895; +
  &#69927; + &#69889; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+Q +: &#69895;&#69939;&#69891;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938;  = &#69895; +
  &#69927; + &#69938;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N +: &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69888;  = &#69895; +
  &#69927; + &#69888; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+&amp; +: &#69895;&#69939;&#69891;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69928;&#69888;  = &#69895; +
  &#69928; + &#69888;+ &#69957; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+d+&amp; +: &#69895;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69929;&#69888;  = &#69895; +
  &#69929; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+D+&amp; +: &#69895;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69930;&#69888;  = &#69895; +
  &#69930; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+s+&amp; +: &#69895;&#69939;&#69891;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69931;&#69888;  = &#69895; +
  &#69931; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+S+&amp; +: &#69895;&#69939;&#69891;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69933;&#69888;  = &#69895; +
  &#69933; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+a+&amp; +: &#69895;&#69939;&#69891;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69888;  = &#69895;
  + &#69927; + &#69937; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+A+&amp; +: &#69895;&#69939;&#69891;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69888;  = &#69895;
  + &#69927; + &#69938; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+f+N+&amp; +: &#69895;&#69939;&#69891;&#69927;&#69938;&#69888;
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69936;&#69888;  = &#69895; +
  &#69936; + &#69888;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+C+&amp; +: &#69895;&#69939;&#69891;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69937;&#69888;  = &#69895; +
  &#69937; + &#69888;+ &#69957;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+A+&amp; +: &#69895;&#69939;&#69891;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69933; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+a+Q &#69895;&#69939;&#69894;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69889; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69937; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A+Q &#69895;&#69939;&#69894;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69889; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69938; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N+Q &#69895;&#69939;&#69894;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69936; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C+Q &#69895;&#69939;&#69894;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69937; + &#69889;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A+Q &#69895;&#69939;&#69894;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69938; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N+Q &#69895;&#69939;&#69894;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+| &#69895;&#69939;&#69894;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D+| &#69895;&#69939;&#69894;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d+| &#69895;&#69939;&#69894;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69930; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s+| &#69895;&#69939;&#69894;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69931; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+S+| &#69895;&#69939;&#69894;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69890; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69937; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A+| &#69895;&#69939;&#69894;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69890; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69938; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N+| &#69895;&#69939;&#69894;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69936; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C+| &#69895;&#69939;&#69894;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69937; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A+| &#69895;&#69939;&#69894;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69938; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N+| &#69895;&#69939;&#69894;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+d &#69895;&#69939;&#69894;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+D &#69895;&#69939;&#69894;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+s &#69895;&#69939;&#69894;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+S &#69895;&#69939;&#69894;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A &#69895;&#69939;&#69894;&#69927;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940; = &#69895; + &#69939;
  + &#69894; + &#69940; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+; &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69890; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+D+| &#69895;&#69939;&#69894;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69889; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+D+Q &#69895;&#69939;&#69894;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69888; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+D+&amp; &#69895;&#69939;&#69894;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69890; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+d+| &#69895;&#69939;&#69894;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69889; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+d+Q &#69895;&#69939;&#69894;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+S &#69895;&#69939;&#69894;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69888; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+d+&amp; &#69895;&#69939;&#69894;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d+Q &#69895;&#69939;&#69894;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D+Q &#69895;&#69939;&#69894;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69930; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s+Q &#69895;&#69939;&#69894;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69931; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+S+Q &#69895;&#69939;&#69894;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936; = &#69895; + &#69939;
  + &#69894; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+N+&amp; &#69895;&#69939;&#69894;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+Q &#69895;&#69939;&#69894;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+Q &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+a &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+&amp; &#69895;&#69939;&#69894;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+d+&amp; &#69895;&#69939;&#69894;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D+&amp; &#69895;&#69939;&#69894;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69930; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+s+&amp; &#69895;&#69939;&#69894;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69931; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+D+&amp; &#69895;&#69939;&#69894;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69933; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+a+&amp; &#69895;&#69939;&#69894;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69888; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+A+&amp; &#69895;&#69939;&#69894;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69888; = &#69895;
  + &#69939; + &#69894; + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+f+N+&amp; &#69895;&#69939;&#69894;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69936; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+C+&amp; &#69895;&#69939;&#69894;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69937; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+A+&amp; &#69895;&#69939;&#69894;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+&amp; &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69938;&#69888; = &#69895; + &#69938; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+N+&amp; &#69895;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69938; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+N &#69895;&#69939;&#69922;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+N &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+s &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69927; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+f+S &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934; = &#69895; + &#69939;
  + &#69926; + &#69934; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+x &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69934; = &#69895; + &#69939;
  + &#69923; + &#69934; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+x &#69895;&#69939;&#69923;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69888; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69889; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69890; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69937; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+A &#69895;&#69939;&#69891;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69938; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+N &#69895;&#69939;&#69891;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69930; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+s &#69895;&#69939;&#69891;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69931; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+S &#69895;&#69939;&#69891;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+D+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+D+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+D+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69890; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+|+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69889; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+Q+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69890; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+d+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+d+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+d+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69890; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+D+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+D+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+D+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+d+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+d+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+f+d+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69937;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+A &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69938;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+N &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69930;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+s &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69931;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69931; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+S &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+D+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+D+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+D+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69890; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+|+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69889; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+Q+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+d+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+d+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+d+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+D+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+D+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+d+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+f+d+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69940;&#69937; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+;+A &#69895;&#69939;&#69926;&#69940;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69940;&#69938; = &#69895; + &#69939;+
  &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+;+N &#69895;&#69939;&#69923;&#69940;&#69938; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+s &#69895;&#69939;&#69926;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+A &#69895;&#69939;&#69926;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69940;&#69938;= &#69895; + &#69939;
  + &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69888; = &#69895; + &#69940; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+&amp; &#69895;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+Q &#69895;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69890; = &#69895; + &#69940; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+| &#69895;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927; = &#69895; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f &#69895;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69928; = &#69895; + &#69940; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+d &#69895;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69929; = &#69895; + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+D &#69895;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69933; = &#69895; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+a &#69895;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69934; = &#69895; + &#69940; + &#69934;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+x &#69895;&#69940;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69935; = &#69895; + &#69940; + &#69935;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+X &#69895;&#69940;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69936; = &#69895; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+C &#69895;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69924;&#69940; = &#69895; +&#69940;+&#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+A &#69895;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69924;&#69939;&#69924;&#69940; = &#69895;+&#69940;+&#69938; 
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'> j+;+N &#69895;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927;&#69928; = &#69895; + &#69940;
  + &#69927; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+d &#69895;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927;&#69929; = &#69895; + &#69940;
  + &#69927; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+D &#69895;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+d &#69895;&#69939;&#69922;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+D &#69895;&#69939;&#69922;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69933; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+a &#69895;&#69939;&#69922;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69937; = &#69895;
  + &#69939; + &#69922; + &#69940; + &#69927; + &#69937;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f+A &#69895;&#69939;&#69922;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69938; = &#69895;
  + &#69939; + &#69922; + &#69940; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f+N &#69895;&#69939;&#69922;&#69940;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+C &#69895;&#69939;&#69922;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+A &#69895;&#69939;&#69922;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+N &#69895;&#69939;&#69922;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+d &#69895;&#69939;&#69922;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+D &#69895;&#69939;&#69922;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+C &#69895;&#69939;&#69922;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69937; = &#69895;
  + &#69939; + &#69926; + &#69940;+ &#69927; + &#69937;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937;
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69927; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f &#69895;&#69939;&#69926;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69930; = &#69895;
  + &#69939; + &#69926; + &#69940; + &#69927; + &#69930; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f+s &#69895;&#69939;&#69926;&#69940;&#69927;&#69930;
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69931; = &#69895;
  + &#69939; + &#69926; + &#69940; + &#69927; + &#69931; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f+S &#69895;&#69939;&#69926;&#69940;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69928; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+d &#69895;&#69939;&#69926;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69929;&#69929; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+D &#69895;&#69939;&#69926;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69933;&#69933; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+a &#69895;&#69939;&#69926;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69927;&#69937;&#69937;
  = &#69895; + &#69939; + &#69926; + &#69940; + &#69927; + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69936;&#69936; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+C &#69895;&#69939;&#69926;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69930; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+s &#69895;&#69939;&#69926;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+A &#69895;&#69939;&#69926;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69937; = &#69895;
  + &#69939; + &#69926; + &#69940; + &#69927; + &#69937; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+P &#69895;&#69939;&#69926;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69933; = &#69895; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+a &#69895;&#69940;&#69933; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69929; = &#69895; + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+D &#69895;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69936; = &#69895; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+A &#69895;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69890; = &#69895; + &#69940; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+| &#69895;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+Q &#69895;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69888;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+ &amp; &#69895;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927;&#69929; = &#69895; + &#69940;
  + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+D &#69895;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927;&#69928; = &#69895; + &#69940;
  + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+d &#69895;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69927; = &#69895; + &#69940; + &#69927;
  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f &#69895;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69930; = &#69895; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+s &#69895;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69940;&#69931; = &#69895; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+S &#69895;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f &#69895;&#69939;&#69920;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+d &#69895;&#69939;&#69920;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+D &#69895;&#69939;&#69920;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69930; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+s &#69895;&#69939;&#69920;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69929; = &#69895;
  + &#69939; + &#69920; + &#69940; + &#69927; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f+D &#69895;&#69939;&#69920;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+&amp; &#69895;&#69939;&#69920;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+Q &#69895;&#69939;&#69920;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69888; = &#69895;
  + &#69939; + &#69920; + &#69940; + &#69927; + &#69888; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f+&amp; &#69895;&#69939;&#69920;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+N &#69895;&#69939;&#69920;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+A &#69895;&#69939;&#69920;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69931; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+S &#69895;&#69939;&#69920;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69933; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+a &#69895;&#69939;&#69920;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69928; = &#69895;
  + &#69939; + &#69920; + &#69940; + &#69927; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f+d &#69895;&#69939;&#69920;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69890; = &#69895;
  + &#69939; + &#69920; + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f+| &#69895;&#69939;&#69920;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69889; = &#69895;
  + &#69939; + &#69920; + &#69940; + &#69927; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+W+;+f+Q &#69895;&#69939;&#69920;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69889; = &#69895; + &#69940;
  + &#69889; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+Q +Z &#69895;&#69939;&#69892;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69933; = &#69895; + &#69940;
  + &#69933;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+a +Z &#69895;&#69939;&#69892;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69890; = &#69895; + &#69940;
  + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+|+Z &#69895;&#69939;&#69892;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927; = &#69895; + &#69940;
  + &#69927; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f +Z &#69895;&#69939;&#69892;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69928; = &#69895; + &#69940;
  + &#69928; + &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+d +Z &#69895;&#69939;&#69892;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69929; = &#69895; + &#69940;
  + &#69929;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+D +Z &#69895;&#69939;&#69892;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69930; = &#69895; + &#69940;
  + &#69930;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+s +Z &#69895;&#69939;&#69892;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69937; = &#69895; + &#69940;
  + &#69937;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+A +Z &#69895;&#69939;&#69892;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69938; = &#69895; + &#69940;
  + &#69938;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+N +Z &#69895;&#69939;&#69892;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69929; = &#69895;
  + &#69940; + &#69927; + &#69929; + &#69958;  </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+D +Z &#69895;&#69939;&#69892;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69888; = &#69895;
  + &#69940; + &#69927; + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+&amp; +Z&#69895;&#69939;&#69892;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69931; = &#69895; + &#69940;
  + &#69931;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+S +Z &#69895;&#69939;&#69892;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69928; = &#69895;
  + &#69940; + &#69927; + &#69928;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+d +Z &#69895;&#69939;&#69892;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69890; = &#69895;
  + &#69940; + &#69927; + &#69890;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+| +Z&#69895;&#69939;&#69892;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69889; = &#69895;
  + &#69940; + &#69927; + &#69889;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+Q +Z &#69895;&#69939;&#69892;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69892;&#69940;&#69888; = &#69895; + &#69940;
  + &#69888;+ &#69958;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+&amp;+Z &#69895;&#69939;&#69892;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69889;  = &#69895; +
  &#69940; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+Q +: &#69895;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69890;  = &#69895; +
  &#69940; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+|+: &#69895;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69927; = &#69895; + &#69940;
  + &#69927; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f +: &#69895;&#69939;&#69891;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69928;  = &#69895; +
  &#69940; + &#69928;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+d +: &#69895;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69929; = &#69895; + &#69940;
  + &#69929;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+D +: &#69895;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69930; = &#69895; + &#69940;
  + &#69930;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+s +: &#69895;&#69939;&#69891;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69937; = &#69895; + &#69940;
  + &#69937;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+A +: &#69895;&#69939;&#69891;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69938; = &#69895; + &#69940;
  + &#69938;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+N +: &#69895;&#69939;&#69891;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69929;  = &#69895;
  + &#69940; + &#69927; + &#69929; + &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+D +: &#69895;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69931; = &#69895; + &#69940;
  + &#69931;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+S +: &#69895;&#69939;&#69891;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69933; = &#69895; + &#69940;
  + &#69933;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+a +: &#69895;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69928; = &#69895;
  + &#69940; + &#69927; + &#69928;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+d +: &#69895;&#69939;&#69891;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69890; = &#69895;
  + &#69940; + &#69927; + &#69890;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+| +: &#69895;&#69939;&#69891;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69889; = &#69895;
  + &#69940; + &#69927; + &#69889;+ &#69957;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+;+f+Q +: &#69895;&#69939;&#69891;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+Q &#69895;&#69939;&#69894;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+a &#69895;&#69939;&#69894;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+| &#69895;&#69939;&#69894;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f &#69895;&#69939;&#69894;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+d &#69895;&#69939;&#69894;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+D &#69895;&#69939;&#69894;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+s &#69895;&#69939;&#69894;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+A &#69895;&#69939;&#69894;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+N &#69895;&#69939;&#69894;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69929; = &#69895;
  + &#69939; + &#69894; + &#69940; + &#69927; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f+D &#69895;&#69939;&#69894;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69888;&#69888; = &#69895;
  + &#69939; + &#69894; + &#69940; + &#69927; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f+&amp; &#69895;&#69939;&#69894;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+S &#69895;&#69939;&#69894;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+a &#69895;&#69939;&#69894;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69928; = &#69895;
  + &#69939; + &#69894; + &#69940; + &#69927; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f+d &#69895;&#69939;&#69894;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69890; = &#69895;
  + &#69939; + &#69894; + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f+| &#69895;&#69939;&#69894;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69889; = &#69895;
  + &#69939; + &#69894; + &#69940; + &#69927; + &#69889; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+f+Q &#69895;&#69939;&#69894;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+M+;+&amp; &#69895;&#69939;&#69894;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69938; = &#69895;
  + &#69939; + &#69922; + &#69940; + &#69927; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f+N &#69895;&#69939;&#69922;&#69940;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69938;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+N &#69895;&#69939;&#69922;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69937;  = &#69895; +
  &#69939; + &#69922; + &#69940; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+A &#69895;&#69939;&#69922;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69937; = &#69895;
  + &#69939; + &#69922; + &#69940; + &#69927; + &#69937;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f+A &#69895;&#69939;&#69922;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940;+ &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+a &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+C &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; +&#69940; + &#69890;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69927;
  + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69927;
  + &#69928;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+;+f+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69929;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69933;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+a &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69928; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69936;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+C &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69890; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  +&#69940; + &#69889;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  +&#69940; + &#69888;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940;+&#69927; + &#69929; </span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+F+g+F+g+F+;+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69940;&#69930; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69930;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+;+s &#69895;&#69939;&#69923;&#69940;&#69930;  </span></p>
  </td>
 </tr>
 <tr>
  <td width="52%" valign=top style='width:52.48%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>&#69895;&#69939;&#69923;&#69940;&#69931; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69931;</span></p>
  </td>
  <td width="47%" valign=top style='width:47.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='line-height:normal'><span style='font-size:13.0pt;
  font-family:RibengUni'>j+g+V+;+S &#69895;&#69939;&#69923;&#69940;&#69931; </span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='text-align:justify'><span style='font-size:12.0pt;
line-height:115%;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:12.0pt;
line-height:115%;font-family:RibengUni'>&#69893;&#69930;&#69888; &#69893;&#69931;&#69888;
&#69895;&#69922;&#69940;&#69953; &#69893;&#69930;&#69888; &#69925;&#69937;&#69897;
&#69915;&#69937; &#69910;&#69939;&#69893;&#69927;&#69915;&#69940; &#69910;&#69939;&#69893;&#69927;&#69915;&#69940;&#69953;
&#69919;&#69927;&#69922;&#69940; &#69891;&#69932;&#69958; &#69917;&#69932;&#69895;&#69940;
&#69917;&#69928;&#69910;&#69940;&#69939;&#69920;&#69914;&#69928; &#69897;&#69927;&#69912;
&#69900;&#69899;&#69940;&#69919;&#69939;&#69926; &#69902;&#69912;&#69939;&#69926;&#69927;
&#69891;&#69928;&#69913;&#69930; &#69925;&#69927;&#69922;&#69939;&#69894;&#69932;
&#69915;&#69927;&#69922;&#69939;&#69893;&#69927;&#69895;&#69940;&#69953; &#69902;&#69930;
&#69902;&#69931; &#69917;&#69932;&#69895;&#69940; &#69900;&#69899;&#69940;&#69919;&#69939;&#69926;
&#69902;&#69912;&#69927;&#69922;&#69940; &#69919;&#69914;&#69932;&#69933;&#69893;&#69930;&#69914;&#69927;&#69922;&#69932;&#69953;
&#69914;&#69928;&#69902;&#69934; &#69895;&#69927;&#69913; &#69891;&#69922;&#69940;
&#69895;&#69928; &#69895;&#69939;&#69893;&#69927;&#69919;&#69940;&#69953; &#69902;&#69910;&#69940;&#69911;&#69930;&#69914;&#69940;
&#69913;&#69922;&#69900;&#69940; &#69914;&#69932;&#69933; &#69910;&#69939;&#69920;&#69932;
&#69902;&#69928;&#69889;&#69895;&#69914;&#69929;&#69918;&#69927;&#69922;&#69940;
&#69891;&#69932;&#69933; &#69915;&#69928;&#69910;&#69940;&#69928;&#69919;&#69928;
&#69895;&#69928;&#69900;&#69940;&#69931; &#69925;&#69928;&#69898;&#69928; &#69915;&#69910;&#69940;&#69927;
&#69914;&#69939;&#69894;&#69953; . . . . . &#69917;&#69928;&#69918;&#69931;&#69910;&#69928;
&#69900;&#69899;&#69940;&#69919;&#69939;&#69926; (&#69925;&#69930;&#69900;&#69940;
&#69919;&#69927;&#69922;&#69928;&#69900;&#69940;) </span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:12.0pt;
line-height:115%;font-family:RibengUni'>&#69915;&#69930;&#69922;&#69940;: &#69942;&#69948;.&#69942;&#69947;.&#69944;&#69942;&#69943;&#69950;&#69953;
</span></p>

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:115%;
font-family:RibengUni'>&#69894;&#69939;&#69894;&#69939;&#69894;                 &#69893; 
               &#69894;</span></b></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
line-height:150%;font-family:RibengUni'>&#69918;&#69932;&#69912;&#69927;&#69895;&#69927;&#69913;:
&#69891;&#69939;&#69894;&#69932; &#69910;&#69928;&#69914;&#69939;&#69926;&#69940;&#69927;&#69937;
&#69891;&#69900;&#69940;&#69912;&#69939;&#69920;&#69927; &#69926;&#69927;&#69922;&#69927;&#69895;&#69940;</span></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
line-height:150%;font-family:RibengUni'>&#69894;&#69939;&#69894;&#69939;&#69894; 
&#69891;&#69902;&#69920;&#69940;         &#69891;&#69928; &#69891;&#69957; &#69891;&#69929;</span></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
line-height:150%;font-family:RibengUni'>&#69893;  &#69891;&#69902;&#69920;&#69940;         &#69891;&#69930;
&#69891;&#69957; &#69891;&#69931;</span></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
line-height:150%;font-family:RibengUni'>&#69894;  &#69891;&#69902;&#69920;&#69940;
        &#69891;&#69932; &#69891;&#69957;  &#69891;&#69932;&#69932;&#69953;</span></p>

<p class=MsoNoSpacing style='text-align:justify'><b><span style='font-size:
12.0pt;font-family:RibengUni'>&nbsp;</span></b></p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing>&nbsp;</p>

<p class=MsoNoSpacing><span style='position:relative;z-index:-1894560256'><span
style='position:absolute;left:1590px;top:-100px;width:135px;height:0px'><img
width="300" height="100" src="images/image009.png"></span></span></p>



<p class=MsoNoSpacing><i><u><span style='font-size:14.0pt;color:#00B050'>About <span
class=MsoHyperlink><b><span style='color:#00B050'><a href="http://hilledu.com/"><span
style='color:#00B050'>Bivuti Chakma</span></a></span></b></span></span></u></i><b><i><span
style='font-size:14.0pt;color:#00B050'> </span></i></b><i><span
style='font-size:14.0pt;color:#00B050'>(Suz Moriz)</span></i><i><span
style='font-size:14.0pt;font-family:SutonnyMJ;color:#00B050'>.....</span></i> </p>

<p class=MsoNoSpacing><i><span style='font-size:14.0pt;font-family:SutonnyMJ'>&nbsp;</span></i></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'>He was born in
30 April 1978 at <span class=MsoHyperlink><span style='color:windowtext'><a
href="http://bandukbhangaup.rangamati.gov.bd/node/1384183/%E0%A6%B8%E0%A6%95%E0%A6%B2-%E0%A6%A1%E0%A6%BF%E0%A6%9C%E0%A6%BF%E0%A6%9F%E0%A6%BE%E0%A6%B2-%E0%A6%B8%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%87-%E0%A6%AE%E0%A7%87%E0%A6%87%E0%A6%B2-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B9%E0%A6%BE%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B8%E0%A6%82%E0%A6%97%E0%A7%87%E0%A5%A4"><span
style='color:windowtext'>5 No Bandukbhang UP</span></a></span></span>,
Rangamati Sadar Thana under Rangamati District of Bangladesh. His village name
is Lekshongchara (Noadam). He was studied at Noadam Govt Primary School,
Bandukbhanga High School, <span class=MsoHyperlink><span style='color:windowtext'><a
href="http://www.moanoghar.org/"><span style='color:windowtext'>Moanoghar
Residential High School</span></a></span></span> &amp; <span
class=MsoHyperlink><span style='color:windowtext'><a
href="http://www.rangamaticollege.gov.bd/"><span style='color:windowtext'>Rangamati
Govt College</span></a></span></span>. <span style='color:#00B0F0'>He passed
SSC from science group with first division in 1996 from <span
class=MsoHyperlink><span style='color:#00B0F0'><a
href="http://www.moanoghar.org/"><span style='color:#00B0F0'>Moanoghar</span></a></span></span>
Residential High School and HSC from science group with first division in 1999
from <span class=MsoHyperlink><span style='color:#00B0F0'><a
href="http://www.rangamaticollege.gov.bd/"><span style='color:#00B0F0'>Rangamati
Govt College</span></a></span></span>.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'>He works with <span
class=MsoHyperlink><span style='color:windowtext'><a
href="http://uni.hilledu.com/"><span style='color:windowtext'>Chakma Script</span></a></span></span>
from 1998 at present. He is skillful of Windows, Office Program, FontForge,
FontLab, Fontographer, TypeTool, Internet, Networking, Adobe Photoshop, Adobe
InDesign, Adobe Illustrator, HTML, CSS,  Dreamweaver, Joomla etc. He is excellent
typist of Chakma, Bangla &amp; English Languages. </p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
style='color:#7030A0'>He is the writer of “<span class=MsoHyperlink><span
style='color:#7030A0'><a
href="http://hilledu.com/unicode/Mini_Chakma_Grammar.pdf"><span
style='color:#7030A0'>Chakma Mini Grammar</span></a></span></span>”. </span><span
style='color:#7030A0'>He</span><span style='color:#7030A0'> also</span><span
style='color:#7030A0'> writes </span><span style='color:#7030A0'>various <span
class=MsoHyperlink><span style='color:#7030A0'><a
href="http://hilledu.com/download-chakma-books/"><span style='color:#7030A0'>Chakma
Book</span></a></span></span></span><span style='color:#7030A0'> and web design
in his leisure time. He is the creator of most used Chakma Unicode Font of “</span><span
class=MsoHyperlink><span style='color:#7030A0'><a
href="http://uni.hilledu.com/download-ribenguni"><span style='color:#7030A0'>RibengUni</span></a></span></span><span
style='color:#7030A0'>”</span><span style='color:#7030A0'> helping by Paul D.
Hunt (<span class=MsoHyperlink><span style='color:#7030A0'><a
href="http://www.adobe.com/"><span style='color:#7030A0'>Adobe Corporation</span></a></span></span>)
&amp; Andrew Glass (<span class=MsoHyperlink><span style='color:#7030A0'><a
href="https://www.microsoft.com/en-us/"><span style='color:#7030A0'>Microsoft</span></a></span></span>)</span><span
style='color:#7030A0'>. </span>He also made “<span class=MsoHyperlink><span
style='color:windowtext'><a
href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=699"><span
style='color:windowtext'>Easy Chakma</span></a></span></span>” Keyboard helping
by Andrew Glass, program manager at<b> </b><span class=MsoHyperlink><span
style='color:windowtext'><a href="http://microsoft.com/"><span
style='color:windowtext'>Microsoft Corporation</span></a></span></span> and<b> </b><span
class=MsoHyperlink><span style='color:windowtext'><a href="http://keyman.com/"><span
style='color:windowtext'>Marc Durdin</span></a></span></span>, the founder of
Keyman, who helped creating this keyboard, and <span class=MsoHyperlink><span
style='color:windowtext'><a href="https://www.facebook.com/sokmkr"><span
style='color:windowtext'>Makara Sok</span></a></span></span>, the project
support specialist at Keyman, who help updating this keyboard and fixing bugs.</p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b><i><span
style='color:#00B050'>He is now working with <span class=MsoHyperlink><span
style='color:#00B050'><a href="https://www.google.com/"><span style='color:
#00B050'>Google</span></a>,</span></span> <span class=MsoHyperlink><span
style='color:#00B050'><a href="https://www.microsoft.com/"><span
style='color:#00B050'>Microsoft</span></a></span></span>, <span
class=MsoHyperlink><span style='color:#00B050'><a href="http://facebook.com/"><span
style='color:#00B050'>Facebook</span></a></span></span> &amp; <span
class=MsoHyperlink><span style='color:#00B050'><a href="http://www.keyman.com/"><span
style='color:#00B050'>Keyman team</span></a></span></span> for implementation
the Chakma language over the globe. Also working on CLDR Project of Unicode
Consortium as a indivisual contributor from Bangladesh</span></i></b><b><i>. </i></b></p>

<p><b>For the PDF version of the this documentation, click <a href="Guideline.pdf">here</a> to download.</b></p>
