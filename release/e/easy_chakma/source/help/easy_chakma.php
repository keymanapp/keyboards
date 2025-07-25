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
	{font-family:DaunPenh;
	panose-1:1 1 1 1 1 1 1 1 1 1;}
@font-face
	{font-family:"Yu Mincho";
	panose-1:2 2 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Yu Gothic Light";
	panose-1:2 11 3 0 0 0 0 0 0 0;}
@font-face
	{font-family:"MS PMincho";
	panose-1:2 2 6 0 4 2 5 8 3 4;}
@font-face
	{font-family:TeamViewer15;
	panose-1:5 11 1 2 1 1 1 1 1 1;}
@font-face
	{font-family:Marlett;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Arial Black";
	panose-1:2 11 10 4 2 1 2 2 2 4;}
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
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Candara;
	panose-1:2 14 5 2 3 3 3 2 2 4;}
@font-face
	{font-family:"Candara Light";
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
	{font-family:"Corbel Light";
	panose-1:2 11 3 3 2 2 4 2 2 4;}
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
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;}
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
	{font-family:"Malgun Gothic";
	panose-1:2 11 5 3 2 0 0 2 0 4;}
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
	{font-family:"Nirmala UI";
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
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
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
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
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
	{font-family:"Ezra SIL";
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Ezra SIL SR";
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Galatia SIL";
	panose-1:2 0 6 0 2 0 0 2 0 4;}
@font-face
	{font-family:"Busra";
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
	{font-family:RibengUni;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@RibengUni";}
@font-face
	{font-family:Musique;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"TITUS Cyberbit Basic";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
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
	{font-family:"Khmer Oureang";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Angkor 5";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS";
	panose-1:2 0 5 0 0 0 0 2 0 4;}
@font-face
	{font-family:"Khmer OS Bassac";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Battambang";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Bokor";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Content";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Dangrek";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Fasthand";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Freehand";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Kangrey";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Koulen";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Moul Light";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS New";
	panose-1:2 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Khmer OS Siemreap";
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
	{font-family:"Noto Sans";
	panose-1:2 11 5 2 4 5 4 2 2 4;}
@font-face
	{font-family:"Bowlby One SC";
	panose-1:2 0 5 5 6 0 0 2 0 4;}
@font-face
	{font-family:"Cabin Sketch";
	panose-1:2 11 5 3 5 2 2 2 0 4;}
@font-face
	{font-family:Cookie;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Doppio One";
	panose-1:2 1 6 3 3 0 0 2 8 4;}
@font-face
	{font-family:Courgette;
	panose-1:2 0 6 3 7 4 0 6 0 4;}
@font-face
	{font-family:Orbitron;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Euphorigenic;
	panose-1:2 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Great Vibes";
	panose-1:2 0 5 7 8 0 0 2 0 2;}
@font-face
	{font-family:"Teko SemiBold";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Kalam Light";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Kalam;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Lemon;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Limelight;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Megrim;
	panose-1:2 0 6 3 0 0 0 0 0 0;}
@font-face
	{font-family:"Montserrat Subrayada";
	panose-1:2 0 5 5 0 0 0 2 0 4;}
@font-face
	{font-family:"Permanent Marker";
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Russo One";
	panose-1:2 0 5 3 5 0 0 2 0 4;}
@font-face
	{font-family:"Sigmar One";
	panose-1:0 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:Yellowtail;
	panose-1:2 0 5 3 0 0 0 0 0 0;}
@font-face
	{font-family:"Bungee Inline";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cinzel Black";
	panose-1:0 0 10 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Marcellus SC";
	panose-1:2 14 6 2 5 2 3 2 3 7;}
@font-face
	{font-family:"Quicksand Light";
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Quicksand Medium";
	panose-1:0 0 6 0 0 0 0 0 0 0;}
@font-face
	{font-family:Quicksand;
	panose-1:0 0 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Ubuntu Mono";
	panose-1:2 11 5 9 3 6 2 3 2 4;}
@font-face
	{font-family:"Fugaz One";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Shrikhand;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Playball;
	panose-1:2 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Vijaya;
	panose-1:2 2 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:"BIZ UDGothic";
	panose-1:2 11 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@BIZ UDGothic";}
@font-face
	{font-family:"BIZ UDPGothic";
	panose-1:2 11 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@BIZ UDPGothic";}
@font-face
	{font-family:"BIZ UDMincho Medium";
	panose-1:2 2 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@BIZ UDMincho Medium";}
@font-face
	{font-family:"BIZ UDPMincho Medium";
	panose-1:2 2 5 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@BIZ UDPMincho Medium";}
@font-face
	{font-family:Meiryo;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Meiryo";}
@font-face
	{font-family:"Meiryo UI";
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Meiryo UI";}
@font-face
	{font-family:"\@MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
@font-face
	{font-family:"\@MS PMincho";}
@font-face
	{font-family:"UD Digi Kyokasho N-B";
	panose-1:2 2 7 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho N-B";}
@font-face
	{font-family:"UD Digi Kyokasho NP-B";
	panose-1:2 2 7 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho NP-B";}
@font-face
	{font-family:"UD Digi Kyokasho NK-B";
	panose-1:2 2 7 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho NK-B";}
@font-face
	{font-family:"UD Digi Kyokasho N-R";
	panose-1:2 2 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho N-R";}
@font-face
	{font-family:"UD Digi Kyokasho NP-R";
	panose-1:2 2 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho NP-R";}
@font-face
	{font-family:"UD Digi Kyokasho NK-R";
	panose-1:2 2 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@UD Digi Kyokasho NK-R";}
@font-face
	{font-family:"\@Yu Mincho";}
@font-face
	{font-family:"Yu Mincho Demibold";
	panose-1:2 2 6 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Mincho Demibold";}
@font-face
	{font-family:"Yu Mincho Light";
	panose-1:2 2 3 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Yu Mincho Light";}
@font-face
	{font-family:"\@Batang";
	panose-1:2 3 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:BatangChe;
	panose-1:2 3 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:"\@BatangChe";}
@font-face
	{font-family:Gungsuh;
	panose-1:2 3 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:"\@Gungsuh";}
@font-face
	{font-family:GungsuhChe;
	panose-1:2 3 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:"\@GungsuhChe";}
@font-face
	{font-family:"\@Gulim";
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:GulimChe;
	panose-1:2 11 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:"\@GulimChe";}
@font-face
	{font-family:"\@Dotum";
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:DotumChe;
	panose-1:2 11 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:"\@DotumChe";}
@font-face
	{font-family:AngsanaUPC;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"Browallia New";
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:BrowalliaUPC;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:CordiaUPC;
	panose-1:2 11 3 4 2 2 2 2 2 4;}
@font-face
	{font-family:DilleniaUPC;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:EucrosiaUPC;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:FreesiaUPC;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:IrisUPC;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:JasmineUPC;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:KodchiangUPC;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:Leelawadee;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:LilyUPC;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:KeymanwebOsk;
	panose-1:2 11 8 6 3 7 2 4 2 4;}
@font-face
	{font-family:"Kmhmu OT";
	panose-1:2 11 5 4 2 2 7 2 2 4;}
@font-face
	{font-family:"Kmhmu MX";
	panose-1:2 11 5 4 2 2 7 2 2 4;}
@font-face
	{font-family:Quivira;
	panose-1:2 2 6 3 5 4 5 2 3 3;}
@font-face
	{font-family:"Mro Unicode";
	panose-1:2 11 5 3 3 4 3 2 2 4;}
@font-face
	{font-family:"DDC Uchen";
	panose-1:1 1 1 0 1 1 1 1 1 1;}
@font-face
	{font-family:Andagii;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:Penuturesu;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"MPH 2B Damase";
	panose-1:2 0 5 3 0 0 0 2 0 4;}
@font-face
	{font-family:"\@MPH 2B Damase";}
@font-face
	{font-family:"Noto Sans Osmanya";
	panose-1:2 11 5 2 4 5 4 2 2 4;}
@font-face
	{font-family:Abadi;}
@font-face
	{font-family:"Abadi Extra Light";}
@font-face
	{font-family:Aharoni;}
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
	{font-family:"Avenir Next LT Pro";}
@font-face
	{font-family:"Avenir Next LT Pro Light";}
@font-face
	{font-family:Bembo;}
@font-face
	{font-family:Biome;}
@font-face
	{font-family:"Biome Light";}
@font-face
	{font-family:Cavolini;}
@font-face
	{font-family:Dante;}
@font-face
	{font-family:David;}
@font-face
	{font-family:Daytona;}
@font-face
	{font-family:"Daytona Pro Condensed";}
@font-face
	{font-family:"Daytona Pro Condensed Light";}
@font-face
	{font-family:"Daytona Pro Light";}
@font-face
	{font-family:"DengXian Light";}
@font-face
	{font-family:DokChampa;}
@font-face
	{font-family:Euphemia;}
@font-face
	{font-family:FangSong;}
@font-face
	{font-family:FrankRuehl;}
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
	{font-family:"Iskoola Pota";}
@font-face
	{font-family:KaiTi;}
@font-face
	{font-family:Kalinga;}
@font-face
	{font-family:Kartika;}
@font-face
	{font-family:Kokila;}
@font-face
	{font-family:"Lao UI";}
@font-face
	{font-family:"Levenim MT";}
@font-face
	{font-family:"Microsoft GothicNeo";}
@font-face
	{font-family:"Microsoft GothicNeo Light";}
@font-face
	{font-family:MingLiU_HKSCS;}
@font-face
	{font-family:Miriam;}
@font-face
	{font-family:"Miriam Fixed";}
@font-face
	{font-family:"Modern Love";}
@font-face
	{font-family:"Modern Love Caps";}
@font-face
	{font-family:"Modern Love Grunge";}
@font-face
	{font-family:Narkisim;}
@font-face
	{font-family:"Neue Haas Grotesk Text Pro";}
@font-face
	{font-family:"News Gothic MT";}
@font-face
	{font-family:Nyala;
	panose-1:2 0 5 4 7 3 0 2 0 3;}
@font-face
	{font-family:OCRB;}
@font-face
	{font-family:"Plantagenet Cherokee";}
@font-face
	{font-family:Posterama;}
@font-face
	{font-family:"Quire Sans";}
@font-face
	{font-family:"Quire Sans Pro Light";}
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
	{font-family:"Sabon Next LT";}
@font-face
	{font-family:"Sagona Book";}
@font-face
	{font-family:"Sagona ExtraLight";}
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
	{font-family:"Speak Pro";}
@font-face
	{font-family:"Speak Pro Light";}
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
	{font-family:"The Hand";}
@font-face
	{font-family:"The Hand Black";}
@font-face
	{font-family:"The Hand Extrablack";}
@font-face
	{font-family:"The Hand Light";}
@font-face
	{font-family:"The Serif Hand";}
@font-face
	{font-family:"The Serif Hand Black";}
@font-face
	{font-family:"The Serif Hand Extrablack";}
@font-face
	{font-family:"The Serif Hand Light";}
@font-face
	{font-family:"Tisa Offc Serif Pro";}
@font-face
	{font-family:"Tisa Offc Serif Pro Thin";}
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
	{font-family:"Walbaum Display";}
@font-face
	{font-family:"Walbaum Display Heavy";}
@font-face
	{font-family:"Walbaum Display Light";}
@font-face
	{font-family:"Walbaum Display SemiBold";}
@font-face
	{font-family:"Walbaum Heading";}
@font-face
	{font-family:"Walbaum Text";}
@font-face
	{font-family:SutonnyMJ;}
@font-face
	{font-family:BivutiNabaKhamatuChakmA;}
@font-face
	{font-family:Naba;}
@font-face
	{font-family:"Galaxie Unicode Greek";}
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
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
h1
	{margin-top:.5pt;
	margin-right:-.9pt;
	margin-bottom:0in;
	margin-left:7.0pt;
	margin-bottom:.0001pt;
	font-size:17.0pt;
	font-family:"Times New Roman",serif;
	font-weight:bold;}
h2
	{margin-top:.05pt;
	margin-right:.8pt;
	margin-bottom:0in;
	margin-left:7.0pt;
	margin-bottom:.0001pt;
	font-size:12.5pt;
	font-family:"Times New Roman",serif;
	font-weight:bold;}
h3
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:7.0pt;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	font-weight:bold;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-link:"Body Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p
	{margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
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
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;
	font-family:"Times New Roman",serif;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;
	font-family:"Times New Roman",serif;}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	margin:0in;
	margin-bottom:.0001pt;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	color:black;}
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
 /* Page Definitions */
 @page WordSection1
	{size:8.5in 11.0in;
	margin:52.0pt 30.0pt 48.0pt 65.0pt;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:8.5in 11.0in;
	margin:52.0pt 30.0pt 48.0pt 42.0pt;}
div.WordSection2
	{page:WordSection2;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
END;
  require_once('header.php');
?>

<p class=MsoNormal style='text-align:justify'><b><span style='font-size:20.0pt;
font-family:"Bodoni MT Black",serif;color:#00B050'>RibengUni</span></b><b><span
style='font-size:20.0pt;font-family:"Bodoni MT Black",serif'> Unicode Chakma
Font Keyboard Layout guidelines. Here we will show Key settings (Key press) of
the Keyboard.  </span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-size:22.0pt;
font-family:"Bradley Hand ITC"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:22.0pt;font-family:"Lucida Handwriting"'>The Keyboard layout
is given below </span></b></p>

<p class=MsoNormal style='line-height:150%'><img width=720 height=429
id="Picture 1" src="images/image001.jpg"></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:16.0pt;
line-height:150%;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:27.0pt;font-family:SutonnyMJ'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:27.0pt;font-family:SutonnyMJ'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><img width=720
height=459 id="Picture 3" src="images/image002.jpg"></p>

<p class=MsoNormal align=center style='text-align:center'><img width=720
height=231 id="Picture 5" src="images/image003.jpg"></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:27.0pt;font-family:SutonnyMJ'>&nbsp;</span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;font-family:RibengUni'>Note:
</span></b><span style='font-size:14.0pt;font-family:RibengUni'>The<span
style='color:red'> &#69952; </span>key sets in<span style='color:red'> A </span>longpress,
<span style='color:red'>&#69959;</span> key sets in <span style='color:red'>H </span>longpress
and <span style='color:red'>&#69954; </span>key sets in <span style='color:
red'>Backslash</span> longpress. </span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:8.0pt;font-family:SutonnyMJ'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:25.0pt;font-family:"Rockwell",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:25.0pt;font-family:"Rockwell",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:25.0pt;font-family:"Rockwell",serif'>Broad layout of the Key
Setting</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
font-family:SutonnyMJ'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=666
 style='width:499.5pt;margin-left:5.4pt;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b><span
   style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:#C00000'>Chakma
   Letter</span></b></p>
   </td>
   <td width=180 valign=top style='width:135.0pt;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b><span
   style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:black'>To
   Press </span></b></p>
   </td>
   <td width=138 valign=top style='width:103.5pt;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b><span
   style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:#C00000'>Chakma
   Letter</span></b></p>
   </td>
   <td width=216 valign=top style='width:2.25in;border:solid windowtext 1.0pt;
   border-left:none;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b><span
   style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:black'>To
   Press </span></b></p>
   </td>
  </tr>
 </thead>
 <tr>
  <td width=312 colspan=2 valign=top style='width:3.25in;border:solid windowtext 1.0pt;
  border-top:none;background:#FFC000;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:black'>Various
  sings</span></b></p>
  </td>
  <td width=354 colspan=2 valign=top style='width:265.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#595959;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:yellow'>Consonants</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69888;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+7</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69924;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>p</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69889;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+q</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69925;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>n</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69890;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+\</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69926;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>i</span></p>
  </td>
 </tr>
 <tr>
  <td width=312 colspan=2 valign=top style='width:3.25in;border:solid windowtext 1.0pt;
  border-top:none;background:#D6E3BC;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:#17365D'>Independent
  vowels</span></b></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni;color:#00B0F0'>&#69956;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif;
  color:#00B0F0'>/(Slash)</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69891;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift
  +f</span></p>
  </td>
  <td width=354 colspan=2 valign=top style='width:265.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#FFD966;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:black'>Dependent
  vowel signs</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69892;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>z</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69927;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>f</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69893;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+p</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69928;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>d</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69894;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+m</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69929;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+d</span></p>
  </td>
 </tr>
 <tr>
  <td width=312 colspan=2 valign=top style='width:3.25in;border:solid windowtext 1.0pt;
  border-top:none;background:#B2A1C7;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:yellow'>Consonants</span></b></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69930;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>s</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69895;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>j</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69931;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+s</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69896;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+j</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69932;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>c</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69897;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>o</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69933;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>a</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69898;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+o</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69934;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>x</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69899;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>q</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69935;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+x</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69900;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>y</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69936;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+c</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69901;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+y</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69937;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+a</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69902;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>u</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69938;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+n</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69903;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+u</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69958;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif;
  color:#00B0F0'>Shift+z</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69904;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+i</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69957;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif;
  color:#00B0F0'>Shift+Semi-colon</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69905;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>t</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:17.0pt;font-family:RibengUni'>        </span><span
  style='font-size:17.0pt;font-family:RibengUni'>  </span><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69959;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif;
  color:#00B0F0'>Shift+4</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69906;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shit+t</span></p>
  </td>
  <td width=354 colspan=2 valign=top style='width:265.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9E2F3;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:red'>Various
  signs</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69907;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>e</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69939; </span><span
  style='font-family:RibengUni'>(Virama) </span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>g</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69908;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+e</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69940;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>;
  (Semi-colon)</span></p>
  </td>
 </tr>
 <tr>
  <td width=312 colspan=2 valign=top style='width:3.25in;border:solid windowtext 1.0pt;
  border-top:none;background:red;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:black'>Consonants</span></b></p>
  </td>
  <td width=354 colspan=2 valign=top style='width:265.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#B4C6E7;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:#943634'>Digits</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69909;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+b</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69942;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>0</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69910;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>k</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69943;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>1</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69911;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+k</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69944;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>2</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69912;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>l</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69945;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>3</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69913;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+l</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69946;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>4</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69914;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>b</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69947;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>5</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69915;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>r</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69948;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>6</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69916;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+r</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69949;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>7</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69917;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>H</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69950;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>8</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69918;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+h</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69951;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>9</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69919;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>m</span></p>
  </td>
  <td width=354 colspan=2 valign=top style='width:265.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#404040;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:13.0pt;font-family:"Calibri",sans-serif;color:yellow'>Punctuation</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69920;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+
  w </span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69952;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+6</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69921;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>w</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69953;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift
  +g</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69922;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>v</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69954;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'> \
  (Back slash)</span></p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69923;</span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>Shift+v</span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:17.0pt;font-family:RibengUni'>&#69955;</span></p>
  </td>
  <td width=216 valign=top style='width:2.25in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Black",sans-serif'>?</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span style='font-size:20.0pt;font-family:"Calibri",sans-serif;
color:#C00000'>Note:</span></b><b><span style='font-size:20.0pt;font-family:
"Calibri",sans-serif'> </span></b></p>

<p class=MsoNormal><span style='font-size:16.0pt;font-family:"Calibri",sans-serif;
color:#00B050'>All </span><b><span style='font-size:16.0pt;font-family:"Calibri",sans-serif;
color:#C00000'>complex Script</span></b><span style='font-size:16.0pt;
font-family:"Calibri",sans-serif;color:#00B050'> are included from next page
example with cucengya Kaa (</span><span style='font-size:16.0pt;font-family:
RibengUni;color:#00B050'>&#69895;</span><span style='font-size:16.0pt;
font-family:"Calibri",sans-serif;color:#00B050'>)</span><span style='font-size:
16.0pt;font-family:"Calibri",sans-serif'> </span></p>

<p class=MsoNormal><b><span style='font-size:18.0pt;font-family:"Bookman Old Style",serif'>Special
thanked to:</span></b></p>

<p class=MsoNormal><span style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>

<p class=MsoNormal><a href="https://www.facebook.com/peter.constable.3"><span
style='font-size:16.0pt;font-family:"Bookman Old Style",serif'>Peter</span></a><span
style='font-size:16.0pt;font-family:"Bookman Old Style",serif;color:#984806'>, </span><a
href="https://www.facebook.com/andrew.glass.754"><span style='font-size:16.0pt;
font-family:"Bookman Old Style",serif'>Andrew</span></a><span style='font-size:
16.0pt;font-family:"Bookman Old Style",serif;color:#984806'> </span><span
style='font-size:16.0pt;font-family:"Bookman Old Style",serif;color:#00B0F0'>(Microsoft
Corporation), </span><span style='font-size:16.0pt;font-family:"Bookman Old Style",serif;
color:#984806'>Paul D. Hunt (</span><b><span style='font-size:16.0pt;
font-family:"Bookman Old Style",serif;color:#00B050'>Adobe Corporation</span></b><span
style='font-size:16.0pt;font-family:"Bookman Old Style",serif;color:#984806'>),</span><span
style='font-size:16.0pt;font-family:"Bookman Old Style",serif'> </span><span
style='font-size:14.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
color:#548DD4'>Jan Zurawski</span><span style='font-size:14.0pt;color:#548DD4'>
(Poland), [</span><a href="https://www.facebook.com/marc.durdin"><b><span
style='font-size:14.0pt'>Marc Durdin</span></b></a><b><span style='font-size:
14.0pt;color:#1F497D'> the founder of Keyman, who helped creating this keyboard
&amp; </span></b><a href="https://www.facebook.com/sokmkr"><b><span
style='font-size:14.0pt'>Makara SOK</span></b></a><b><span style='font-size:
14.0pt;color:#1F497D'> the project support specialist at Keyman, who help
updating this keyboard and fixing bugs (</span></b><a
href="http://www.keyman.com/"><b><span style='font-size:14.0pt'>http://www.keyman.com/</span></b></a><b><span
style='font-size:14.0pt;color:#1F497D'>]</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:20.0pt;
font-family:"Arial Narrow",sans-serif;color:#C00000'>NB:</span><span
style='font-size:20.0pt;font-family:"Arial Narrow",sans-serif'> If any question
about <span style='color:#00B0F0'>“RibengUni”</span> Chakma Font please contact
with us:-  E-mail:</span><span style='font-size:13.0pt;font-family:"Arial Narrow",sans-serif'>
</span><span style='font-size:13.0pt;font-family:"Arial Narrow",sans-serif;
color:#0070C0'>bsereye@hotmail.com</span><span style='font-size:13.0pt;
font-family:"Arial Narrow",sans-serif'>  </span></p>

<p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Narrow",sans-serif;
color:#C00000'>&nbsp;</span></p>

<p class=MsoNormal><span style='font-size:13.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoBodyText><span style='font-size:10.0pt'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:21.0pt;font-family:RibengUni;color:#00B0F0'>Typing Guide Lines
Example with Cucengya Kaa [&#69895;]</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=708
 style='width:530.75pt;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
   background:#FBD4B4;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><span
   style='font-size:14.0pt;font-family:RibengUni;color:#0070C0'>Chakma Letters</span></p>
   </td>
   <td width=348 valign=top style='width:261.0pt;border:solid windowtext 1.0pt;
   border-left:none;background:#FBD4B4;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><span
   style='font-size:14.0pt;font-family:RibengUni;color:#0070C0'>To Press (Key)</span></p>
   </td>
  </tr>
 </thead>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69957; = &#69895;+ &#69957;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+ : &#69895;&#69957; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;
  = &#69895;+&#69939;+&#69891;+&#69939;+&#69891; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F
  &#69895;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;
  = &#69895;+&#69939;+&#69891;+&#69939;+&#69891;+&#69939;+&#69891; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69958; = &#69895;+ &#69958;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z &#69895;&#69958;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69893;
  = &#69895;+&#69939;+&#69893;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+P
  &#69895;&#69939;&#69893;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;
  =&#69895;+&#69939;+&#69894; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M
  &#69895;&#69939;&#69894; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69895;
  = &#69895;+&#69939;+&#69895;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+j
  &#69895;&#69939;&#69895;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69896;
  = &#69895;+&#69939;+&#69896;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+J
  &#69895;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69897;
  = &#69895;+&#69939;+&#69897;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+o
  &#69895;&#69939;&#69897;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69898;
  = &#69895;+&#69939;+&#69898;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+O
  &#69895;&#69939;&#69898;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69899;
  = &#69895;+&#69939;+&#69899;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+q
  &#69895;&#69939;&#69899;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69900;
  = &#69895;+&#69939;+&#69900;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+y
  &#69895;&#69939;&#69900;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69901;
  = &#69895;+&#69939;+&#69901;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+Y
  &#69895;&#69939;&#69901; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69902;
  = &#69895;+&#69939;+&#69902;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+u
  &#69895;&#69939;&#69902;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69903;
  = &#69895;+&#69939;+&#69903;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+U
  &#69895;&#69939;&#69903;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69904;
  = &#69895;+&#69939;+&#69904;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+I
  &#69895;&#69939;&#69904;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69905;
  = &#69895;+&#69939;+&#69905;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+t
  &#69895;&#69939;&#69905;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69906;
  = &#69895;+&#69939;+&#69906;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+T
  &#69895;&#69939;&#69906;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69907;
  = &#69895;+&#69939;+&#69907;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+e
  &#69895;&#69939;&#69907;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69908;
  = &#69895;+&#69939;+&#69908;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+E
  &#69895;&#69939;&#69908;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69909;
  = &#69895;+&#69939;+&#69909;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+B
  &#69895;&#69939;&#69909;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69910;
  = &#69895;+&#69939;+&#69910;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+k
  &#69895;&#69939;&#69910;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69911;
  = &#69895;+&#69939;+&#69911;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+K
  &#69895;&#69939;&#69911;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69912;
  = &#69895;+&#69939;+&#69912;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+l
  &#69895;&#69939;&#69912; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69913;
  = &#69895;+&#69939;+&#69913;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+L
  &#69895;&#69939;&#69913;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69914;
  = &#69895;+&#69939;+&#69914;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+b
  &#69895;&#69939;&#69914;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69915;
  = &#69895;+&#69939;+&#69915;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+r
  &#69895;&#69939;&#69915;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69916;
  = &#69895;+&#69939;+&#69916;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+R
  &#69895;&#69939;&#69916;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69917;
  = &#69895;+&#69939;+&#69917;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+h 
  &#69895;&#69939;&#69917;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69918;
  = &#69895;+&#69939;+&#69918;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+H
  &#69895;&#69939;&#69918;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69919;
  = &#69895;+&#69939;+&#69919;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+m
  &#69895;&#69939;&#69919;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69939;&#69921; = &#69895;+&#69939;+&#69921;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j+g+w &#69895;&#69939;&#69921;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;
  = &#69895;+&#69939;+&#69922;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v
  &#69895;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69923;
  = &#69895;+&#69939;+&#69923;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+V
  &#69895;&#69939;&#69923; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;
  = &#69895;+&#69937; / &#69895;+&#69939;+&#69924;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A &#69895;&#69939;&#69924;
  or, j+g+p &#69895;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69925;
  = &#69895;+&#69939;+&#69925;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+n
  &#69895;&#69939;&#69925;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;
  = &#69895;+&#69939;+&#69926;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i
  &#69895;&#69939;&#69926;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;
  = &#69895;+&#69939;+&#69920;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W
  &#69895;&#69939;&#69920;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69939;&#69923;
  = &#69895;+&#69939;+&#69926;+&#69939;+&#69923;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+g+V
  &#69895;&#69939;&#69926;&#69939;&#69923;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69889;&#69888;
  = &#69895;+&#69889;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+Q+&amp;
  &#69895;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69890;&#69888;
  = &#69895;+&#69890;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+|+&amp;
  &#69895;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69890;
  = &#69895;+&#69928;+&#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+|
  &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69933;
  = &#69895;+&#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a &#69895;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69889;
  = &#69895;+&#69928;+&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+Q
  &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69939;&#69893;
  = &#69895;+&#69939;+&#69922;+&#69939;+&#69893; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+g+P
  &#69895;&#69939;&#69922;&#69939;&#69893;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69928;
  = &#69895;+&#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d &#69895;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69888;
  = &#69895;+&#69928;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+&amp;
  &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930;
  = &#69895;+&#69939;+&#69926;+&#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+s
  &#69895;&#69939;&#69926;&#69930;  </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937;
  = &#69895;+&#69939;+&#69926;+&#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+A
  &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;
  = &#69895;+&#69927;+&#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d
  &#69895;&#69927;&#69928; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69930;&#69888;
  = &#69895;+&#69930;+&#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+s+&amp;
  &#69895;&#69930;&#69888;  </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931;
  = &#69895;+&#69939;+&#69922;+&#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+S
  &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930;
  = &#69895;+&#69939;+&#69922;+&#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+s
  &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937;
  = &#69895;+&#69939;+&#69922;+&#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+A
  &#69895;&#69939;&#69922;&#69937;  </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69939;&#69922;
  = &#69895;+&#69939;+&#69926;+&#69939;+&#69922; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+g+v
  &#69895;&#69939;&#69926;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69890;
  = &#69895;+&#69929;+&#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+|
  &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69889;
  = &#69895;+&#69929;+&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+Q
  &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69888;
  = &#69895;+&#69929;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+&amp;
  &#69895;&#69929;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69929;
  = &#69895;&#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D &#69895;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69936;
  = &#69895;+&#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C &#69895;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69890;&#69890;
  = &#69895;+&#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+| &#69895;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69889;&#69889;
  = &#69895;+&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+Q &#69895;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69888;&#69888;
  = &#69895;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+&amp;
  &#69895;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;&#69939;&#69922;&#69939;&#69922;
  = &#69895;+&#69939;+&#69924;+&#69939;+&#69922;+&#69939;+&#69922; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p+g+v+g+v
  &#69895;&#69939;&#69924;&#69939;&#69922;&#69939;&#69922; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;&#69939;&#69922;&#69939;&#69922;&#69939;&#69922;
  = &#69895;+&#69939;+&#69924;+&#69939;+&#69922;+&#69939;+&#69922;+&#69939;+&#69922;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p+g+v+g+v+g+v
  &#69895;&#69939;&#69924;&#69939;&#69922;&#69939;&#69922;&#69939;&#69922; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890;
  = &#69895;+&#69927;+&#69929;+&#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+|
  &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889;
  = &#69895;+&#69927;+&#69929;+&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+Q
  &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69888;
  = &#69895;+&#69927;+&#69929;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+&amp;
  &#69895;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;
  = &#69895;+&#69927;+&#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D
  &#69895;&#69927;&#69929; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890;
  = &#69895;+&#69927;+&#69928;+&#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+|
  &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69889;
  = &#69895;+&#69927;+&#69928;+&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+Q
  &#69895;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888;
  = &#69895;+&#69927;+&#69928;+&#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+&amp;
  &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69956;&#69957; = &#69956;+ &#69957; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>/+: &#69956;&#69957;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69888;
  = &#69895; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+&amp;
  &#69895;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69888;
  = &#69895; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+&amp;
  &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69888;
  = &#69895; + &#69929;  + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+&amp;
  &#69895;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69930;&#69888;
  = &#69895; + &#69930; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+s+&amp;
  &#69895;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69931;&#69888;
  = &#69895; + &#69931; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+S+&amp;
  &#69895;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69888;
  = &#69895; + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a+&amp;
  &#69895;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69934;&#69888;
  = &#69895; + &#69934; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+x+&amp;
  &#69895;&#69934;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69935;&#69888;
  = &#69895; + &#69935; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+X+&amp;
  &#69895;&#69935;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69888;
  = &#69895; + &#69936; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+&amp;
  &#69895;&#69936;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69937;&#69888;
  = &#69895; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A+&amp;
  &#69895;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69938;&#69888;
  = &#69895; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+N+&amp;
  &#69895;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69889;
  = &#69895; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+Q
  &#69895;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69889;
  = &#69895; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+Q
  &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69889;
  = &#69895; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+Q
  &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69930;&#69889;
  = &#69895; + &#69930; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+s+Q
  &#69895;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69931;&#69889;
  = &#69895; + &#69931; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+S+Q
  &#69895;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69889;
  = &#69895; + &#8204;&#69933; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a+Q
  &#69895;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69934;&#69889;
  = &#69895; + &#69934; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+x+Q
  &#69895;&#69934;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69935;&#69889;
  = &#69895; +  &#69935; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+X+Q
  &#69895;&#69935;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69889;
  = &#69895; + &#69936; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+Q
  &#69895;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69937;&#69889;
  = &#69895; + &#69937; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A+Q
  &#69895;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69938;&#69889;
  = &#69895; + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+N+Q
  &#69895;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69890;=
  &#69895; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+|
  &#69895;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69890;
  = &#69895; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+|
  &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69890;
  = &#69895; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+|
  &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69930;&#69890;
  = &#69895; + &#69930; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+s+|
  &#69895;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69931;&#69890;
  = &#69895; + &#69931; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+S+|
  &#69895;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69890;
  = &#69895; + &#8204;&#69933; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a+|
  &#69895;&#69933;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69934;&#69890;
  = &#69895; + &#69934; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+x+|
  &#69895;&#69934;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69935;&#69890;
  = &#69895; +  &#69935; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+X+|
  &#69895;&#69935;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69890;
  = &#69895; + &#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+|
  &#69895;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69937;&#69890;
  = &#69895; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A+|
  &#69895;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69938;&#69890;
  = &#69895; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+N+|
  &#69895;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;
  = &#69895; + &#69928; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d
  &#69895;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;
  = &#69895; + &#69929; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D
  &#69895;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69930;
  = &#69895; + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+s
  &#69895;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69931;
  = &#69895; + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+S
  &#69895;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#69895;&#69932;&#69927; = &#8204;&#69895;+&#69932;+ &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>j+ c+ f &#69895;&#69932;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69937;
  = &#69895; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+A
  &#69895;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69938;
  = &#69895; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+N
  &#69895;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888;
  =  &#69895; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+&amp;
  &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69888;
  = &#69895; + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+&amp;
  &#69895;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69889;
  = &#69895; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+Q
  &#69895;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889;
  = &#69895; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+Q
  &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890;
  = &#69895; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+|
  &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890;
  = &#69895; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+|
  &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69888; = &#69895; + &#69958; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+&amp; &#69895;&#69939;&#69892;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69889; = &#69895; + &#69958; + &#69889;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+Q &#69895;&#69939;&#69892;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69890; = &#69895; + &#69958; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+| &#69895;&#69939;&#69892;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927; = &#69895; + &#69958; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f &#69895;&#69939;&#69892;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69958; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69929; = &#69895; + &#69958; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+D &#69895;&#69939;&#69892;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69930; = &#69895; + &#69958; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+$+s &#69895;&#69939;&#69892;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69931; = &#69895; + &#69958; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+S &#69895;&#69939;&#69892;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#69895;&#69932;&#69958; = &#69895;+ &#8204;&#69932; + &#69958;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>j +c+Z  &#69895;&#69932;&#69958; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69933; = &#69895; + &#69958; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+a &#69895;&#69939;&#69892;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69937; = &#69895; + &#69958;
  + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+A &#69895;&#69939;&#69892;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69938; = &#69895; + &#69958;
  + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+N &#69895;&#69939;&#69892;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69936; = &#69895; + &#69958; + &#69936;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+C &#69895;&#69939;&#69892;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69937; = &#69895; + &#69958; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+A &#69895;&#69939;&#69892;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69938; = &#69895; + &#69958; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+N &#69895;&#69939;&#69892;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940; = &#69895; + &#69958; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+; &#69895;&#69939;&#69892;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69888; = &#69895; + &#69957; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+&amp; &#69895;&#69939;&#69891;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69889; = &#69895; + &#69957; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+Q &#69895;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69890; = &#69895; + &#69957; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+| &#69895;&#69939;&#69891;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69957; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928; = &#69895; + &#69957; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d &#69895;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929; = &#69895; + &#69957; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D &#69895;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69930; = &#69895; + &#69957; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+s &#69895;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69931; = &#69895; + &#69957; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+S &#69895;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69933; = &#69895; + &#69957; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+a &#69895;&#69939;&#69891;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69937; = &#69895; + &#69957;
  + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+A &#69895;&#69939;&#69891;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938; = &#69895; + &#69957;
  + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69936; = &#69895; + &#69957; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+C &#69895;&#69939;&#69891;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69937; = &#69895; + &#69957; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+A &#69895;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69938; = &#69895; + &#69957; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+N &#69895;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940; = &#69895; + &#69957; + &#69940;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+; &#69895;&#69939;&#69891;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+&amp;
  &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+Q
  &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+|
  &#69895;&#69939;&#69894;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;
  = &#69895; + &#69939; + &#69894; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f
  &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;
  = &#69895; + &#69939; + &#69894; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d
  &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;
  = &#69895; + &#69939; + &#69894; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D
  &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;
  = &#69895; + &#69939; + &#69894; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s
  &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;
  = &#69895; + &#69939; + &#69894; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+S
  &#69895;&#69939;&#69894;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;
  = &#69895; + &#69939; + &#69894; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+a
  &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A
  &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N
  &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;
  = &#69895; + &#69939; + &#69894; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C
  &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;
  = &#69895;+ &#69939; + &#69894; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A
  &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N
  &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;
  = &#69895; + &#69939; + &#69894; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+;
  &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+&amp;
  &#69895;&#69939;&#69920;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+Q
  &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+|
  &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;
  = &#69895; + &#69939; + &#69920; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f
  &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928;
  = &#69895; + &#69939; + &#69922; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+d
  &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929;
  = &#69895; + &#69939; + &#69922; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+D
  &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+s
  &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69931;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+S
  &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933;
  = &#69895; + &#69939; + &#69922; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+a
  &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934;
  = &#69895; + &#69939; + &#69922; + &#69934; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+x
  &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69935;
  = &#69895; + &#69939; + &#69922; + &#69935;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+X
  &#69895;&#69939;&#69922;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936;
  = &#69895; + &#69939; + &#69922; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+C
  &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937;
  = &#69895; + &#69939; + &#69922; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+A
  &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938;
  = &#69895; + &#69939; + &#69922; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+N
  &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;
  =  &#69895; + &#69939; + &#69922; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+;
  &#69895;&#69939;&#69922;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69888;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+&amp;
  &#69895;&#69939;&#69922;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69889;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+Q
  &#69895;&#69939;&#69922;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69890;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+|
  &#69895;&#69939;&#69922;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69928;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+d
  &#69895;&#69939;&#69922;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69929;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+D
  &#69895;&#69939;&#69922;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+s
  &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+S
  &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936;
  = &#69895; + &#69939; + &#69922; + &#69936;    </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+C
  &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69888;
  = &#69895; + &#69939; + &#69922; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+&amp;
  &#69895;&#69939;&#69922;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69889;
  = &#69895; + &#69939; + &#69922; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+Q
  &#69895;&#69939;&#69922;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69890;
  = &#69895; + &#69939; + &#69922; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+|
  &#69895;&#69939;&#69922;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;
  = &#69895; + &#69939; + &#69922; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f
  &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928;
  = &#69895; + &#69939; + &#69922; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+d
  &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929;
  = &#69895; + &#69939; + &#69922; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+D
  &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+s
  &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69931;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+S
  &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933;
  = &#69895; + &#69939; + &#69922; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+a
  &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934;
  = &#69895; + &#69939; + &#69922; + &#69934;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+x
  &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69935;
  = &#69895; + &#69939; + &#69922; + &#69935;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+X
  &#69895;&#69939;&#69922;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936;
  = &#69895; + &#69939; + &#69922; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+C
  &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937;
  = &#69895; + &#69939; + &#69922; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+A
  &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938;
  = &#69895; + &#69939; + &#69922; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+N
  &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;
  =  &#69895; + &#69939; + &#69922; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+;
  &#69895;&#69939;&#69922;&#69940; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69888;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+&amp;
  &#69895;&#69939;&#69922;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69889;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+Q
  &#69895;&#69939;&#69922;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69890;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+|
  &#69895;&#69939;&#69922;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69928;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+d
  &#69895;&#69939;&#69922;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69929;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+D
  &#69895;&#69939;&#69922;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69930;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+s
  &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69931;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+S
  &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69936;
  = &#69895; + &#69939; + &#69922; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+C
  &#69895;&#69939;&#69922;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69940;
  = &#69895; + &#69939; + &#69922; + &#69940; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+;
  &#69895;&#69939;&#69922;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69888;
  = &#69895; + &#69939; + &#69926; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+&amp;
  &#69895;&#69939;&#69926;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69889;
  = &#69895; + &#69939; + &#69926; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+Q
  &#69895;&#69939;&#69926;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69890;
  = &#69895; + &#69939; + &#69926; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+|
  &#69895;&#69939;&#69926;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;
  = &#69895; + &#69939; + &#69926; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f
  &#69895;&#69939;&#69926;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69928;
  = &#69895; + &#69939; + &#69926; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+d
  &#69895;&#69939;&#69926;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69929;
  = &#69895; + &#69939; + &#69926; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+D
  &#69895;&#69939;&#69926;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930;
  = &#69895; + &#69939; + &#69926; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+s
  &#69895;&#69939;&#69926;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931;
  = &#69895; + &#69939; + &#69926; + &#69931;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+S
  &#69895;&#69939;&#69926;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69933;
  = &#69895; + &#69939; + &#69926; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+a
  &#69895;&#69939;&#69926;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934;
  = &#69895; + &#69939; + &#69926; + &#69934;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+x
  &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69936;
  = &#69895; + &#69939; + &#69926; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+C
  &#69895;&#69939;&#69926;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937;
  = &#69895; + &#69939; + &#69926; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+A
  &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;
  =  &#69895; + &#69939; + &#69926; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+;
  &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69888;
  = &#69895; + &#69939; + &#69926; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f+&amp;
  &#69895;&#69939;&#69926;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69889;
  = &#69895; + &#69939; + &#69926; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f+Q
  &#69895;&#69939;&#69926;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69890;
  = &#69895; + &#69939; + &#69926; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f+|
  &#69895;&#69939;&#69926;&#69927;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69928;
  = &#69895; + &#69939; + &#69926; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f+d
  &#69895;&#69939;&#69926;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69927;&#69929;
  = &#69895; + &#69939; + &#69926; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+f+D
  &#69895;&#69939;&#69926;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69936;
  = &#69895; + &#69939; + &#69926; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+C
  &#69895;&#69939;&#69926;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69940;
  = &#69895; + &#69939; + &#69926; + &#69940; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+;
  &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69939;&#69926;&#69940; = &#69895; + &#69939; + &#69923;
  + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j+g+i+; &#69895;&#69939;&#69926;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69939;&#69926;&#69927;&#69937; = &#69895; + &#69939; +
  &#69926; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j+g+i+f+A &#69895;&#69939;&#69926;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+&amp;
  &#69895;&#69939;&#69920;&#69888; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+Q
  &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+|
  &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;
  = &#69895; + &#69939; + &#69920; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f
  &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;
  = &#69895; + &#69939; + &#69920; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+d
  &#69895;&#69939;&#69920;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;
  = &#69895; + &#69939; + &#69920; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+D
  &#69895;&#69939;&#69920;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;
  = &#69895; + &#69939; + &#69920; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+s
  &#69895;&#69939;&#69920;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;
  = &#69895; + &#69939; + &#69920; + &#69931;&#8204;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+S
  &#69895;&#69939;&#69920;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#69895;&#69939;&#69920;&#69932; = &#69895; + &#8204;&#69939; + &#69920;
  + &#8204;&#69932;   </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>j+ g+W +c  &#69895;&#69939;&#69920;&#69932;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;
  = &#69895; + &#69939; + &#69920; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+a
  &#69895;&#69939;&#69920;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+A
  &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+N
  &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;
  = &#69895; + &#69939; + &#69920; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+C
  &#69895;&#69939;&#69920;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;
  = &#69895; + &#69939; + &#69920; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+A
  &#69895;&#69939;&#69920;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;
  = &#69895; + &#69939; + &#69920; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N
  &#69895;&#69939;&#69920;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;
  = &#69895; + &#69939; + &#69920; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+;
  &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;
  + &#69919; + &#69939; + &#69919; + &#69939; + &#69895; = &#69895;&#69919;&#69939;&#69919;&#69939;&#69895;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j,m+g+m+g+j
  &#69895;&#69919;&#69939;&#69919;&#69939;&#69895; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;
  + &#69919; + &#69939; + &#69919; + &#69939; + &#69896; = &#69895;&#69919;&#69939;&#69919;&#69939;&#69896;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j,m+g+m+g+J
  &#69895;&#69919;&#69939;&#69919;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;
  + &#69919; + &#69939; + &#69919; + &#69939; + &#69897; = &#69895;&#69919;&#69939;&#69919;&#69939;&#69897;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j,m+g+m+g+o
  &#69895;&#69919;&#69939;&#69919;&#69939;&#69897;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;
  + &#69919; + &#69939; + &#69919; + &#69939; + &#69898; = &#69895;&#69919;&#69939;&#69919;&#69939;&#69898;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j,m+g+m+g+O
  &#69895;&#69919;&#69939;&#69919;&#69939;&#69898;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#8204;&#69932;+&#69895; + &#69919; + &#69939; + &#69919; + &#69939;
  + &#69895; = &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69895;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>c+j+m+g+m+j &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69895;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#8204;&#69932;+&#69895; + &#69919; + &#69939; + &#69919; + &#69939;
  + &#69896; = &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69896;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>c+j+m+g+m+J &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#8204;&#69932;+&#69895; + &#69919; + &#69939; + &#69919; + &#69939;
  + &#69897; = &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69897;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>c+j+m+g+m+o &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69897;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#8204;&#69932;+&#69895; +&#69919; + &#69939; + &#69919; + &#69939;
  + &#69898; = &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69898;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>c+j+m+g+m+O &#69895;&#69932;&#69919;&#69939;&#69919;&#69939;&#69898;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69888;
  = &#69895; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+&amp;
  &#69895;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69889;
  = &#69895; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+Q &#69895;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69890;
  = &#69895; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g| &#69895;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;
  = &#69895; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f &#69895;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;
  = &#69895; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d &#69895;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;
  = &#69895; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D &#69895;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69930;
  = &#69895; + &#69930; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+s &#69895;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69931;
  = &#69895; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+S &#69895;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>&#69895;&#69932; = &#8204;&#69895;&#8204; + &#69932;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:red'>j + c  &#69895;&#69932;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69934;
  = &#69895; + &#69934; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+x &#69895;&#69934;
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69935;
  = &#69895; + &#69935; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+X &#69895;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69937;
  = &#69895; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A &#69895;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69938;
  = &#69895; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+N &#69895;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;
  = &#69895; + &#69939; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g &#69895;&#69939;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69940;
  = &#69895; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+; &#69895;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69890;&#69888;
  = &#69895; + &#69890; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+|+&amp;
  &#69895;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69889;&#69888;
  = &#69895; + &#69889; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+Q+&amp;
  &#69895;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69890;
  = &#69895; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+|
  &#69895;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69889;
  = &#69895; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+Q
  &#69895;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930;
  =  &#69895; + &#69939; + &#69922; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+s
  &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69928;&#69888;
  = &#69895; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+d+&amp;
  &#69895;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;
  = &#69895; + &#69939; + &#69924;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p
  &#69895;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;&#69939;&#69924;
  = &#69895; + &#69939; + &#69924; + &#69939; + &#69924;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p+g+p
  &#69895;&#69939;&#69924;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69930;
  = &#69895; + &#69939; + &#69926; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+s
  &#69895;&#69939;&#69926;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69937;
  = &#69895; + &#69939; + &#69926; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+A
  &#69895;&#69939;&#69926;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;
  = &#69895; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d
  &#69895;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+S
  &#69895;&#69939;&#69922;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69930; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+s
  &#69895;&#69939;&#69922;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69939;&#69924;
  = &#69895; + &#69939; + &#69922; + &#69939; + &#69924;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+g+p
  &#69895;&#69939;&#69922;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69939;&#69922;
  = &#69895; + &#69939;+ &#69926; + &#69939; + &#69922;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+g+v
  &#69895;&#69939;&#69926;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69890;
  = &#69895; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+|
  &#69895;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69889;
  = &#69895; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+Q
  &#69895;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69929;&#69888;
  = &#69895; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+D+&amp;
  &#69895;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;
  = &#69895; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D
  &#69895;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927; = &#69895; + &#69958; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f &#69895;&#69939;&#69892;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;
  = &#69895; + &#69939; + &#69894; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f
  &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940; = &#69895; + &#69958; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+; &#69895;&#69939;&#69892;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;
  = &#69895; + &#69939; + &#69894; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+;
  &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69937; = &#69895; + &#69957;
  + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+A &#69895;&#69939;&#69891;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938; = &#69895; + &#69957;
  + &#69927; + &#69938; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69957; + &#69927;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;
  = &#69895; + &#69939; + &#69920; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+;
  &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69890;
  = &#69895; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+|
  &#69895;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69929;&#69889;
  = &#69895; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+D+Q
  &#69895;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69890;
  = &#69895; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+|
  &#69895;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69927;&#69928;&#69888;
  = &#69895; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+f+d+&amp;
  &#69895;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;
  = &#69895; + &#69939; + &#69922; + &#69927;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f
  &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69928;
  = &#69895; + &#69939; + &#69922; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+d
  &#69895;&#69939;&#69922;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69929;
  = &#69895; + &#69939; + &#69922; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+D
  &#69895;&#69939;&#69922;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69933;
  = &#69895; + &#69939; + &#69922; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+a
  &#69895;&#69939;&#69922;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69888;
  = &#69895; + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+A+&amp;
  &#69895;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69888;
  = &#69895; + &#69936; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+&amp;
  &#69895;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69934;
  = &#69895; + &#69939; + &#69922; + &#69934; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+x
  &#69895;&#69939;&#69922;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934;
  = &#69895; + &#69939; + &#69926; + &#69934;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+x
  &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69892;&#69888;
  = &#69895; + &#69939; + &#69892; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+z+&amp;
  &#69895;&#69939;&#69892;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69892;&#69889;
  = &#69895; + &#69939; + &#69892; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+z+Q
  &#69895;&#69939;&#69892;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69892;&#69890;
  = &#69895; + &#69939; + &#69892; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+z+|
  &#69895;&#69939;&#69892;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69890;
  = &#69895; + &#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+|
  &#69895;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69890;
  = &#69895; + &#69933; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a+|
  &#69895;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69933;&#69889;
  = &#69895; + &#69933; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+a+Q
  &#69895;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69936;&#69889;
  = &#69895; + &#69936; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+C+Q
  &#69895;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;&#69940;
  = &#69895; + &#69939; + &#69924; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p+;
  &#69895;&#69939;&#69924;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69924;&#69939;&#69924;&#69940;
  = &#69895; + &#69939; + &#69924; + &#69939; + &#69924; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+p+g+p+;
  &#69895;&#69939;&#69924;&#69939;&#69924;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69958; + &#69928;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69929; = &#69895; + &#69958; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+D &#69895;&#69939;&#69892;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69930; = &#69895; + &#69958; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+s &#69895;&#69939;&#69892;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69931; = &#69895; + &#69958; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+S &#69895;&#69939;&#69892;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69933; = &#69895; + &#69958; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+a &#69895;&#69939;&#69892;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69937; = &#69895; + &#69958;
  + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+A &#69895;&#69939;&#69892;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69938; = &#69895; + &#69958;
  + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+N &#69895;&#69939;&#69892;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69936; = &#69895; + &#69958; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+C &#69895;&#69939;&#69892;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69937; = &#69895; + &#69958; + &#69937;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+A &#69895;&#69939;&#69892;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69938; = &#69895; + &#69958; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+N &#69895;&#69939;&#69892;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69889; = &#69895; + &#69957; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+Q &#69895;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69890;  = &#69895; + &#69957; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+| &#69895;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927; = &#69895; + &#69957; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f &#69895;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928; = &#69895; + &#69957; + &#69928;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d &#69895;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929; = &#69895; + &#69957; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D &#69895;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69930; = &#69895; + &#69957; + &#69930;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+s &#69895;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69931; = &#69895; + &#69957; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+S &#69895;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69933; = &#69895; + &#69957; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+a &#69895;&#69939;&#69891;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69936; = &#69895; + &#69957; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+C &#69895;&#69939;&#69891;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69937; = &#69895; + &#69957; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+A &#69895;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69938; = &#69895; + &#69957; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+N &#69895;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931;
  = &#69895; + &#69939; + &#69926; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+S
  &#69895;&#69939;&#69926;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;
  = &#69895; + &#69939; + &#69920; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f
  &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+&amp;
  &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+Q
  &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+|
  &#69895;&#69939;&#69894;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;
  = &#69895; + &#69939; + &#69894; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f
  &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;
  = &#69895; + &#69939; + &#69894; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d
  &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;
  = &#69895; + &#69939; + &#69894; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D
  &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;
  = &#69895; + &#69939; + &#69894; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s
  &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;
  = &#69895; + &#69939; + &#69894; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+S
  &#69895;&#69939;&#69894;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;
  = &#69895; + &#69939; + &#69894; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+a
  &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A
  &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N
  &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;
  = &#69895; + &#69939; + &#69894; + &#69936; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C
  &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A
  &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N
  &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69937;
  = &#69895; + &#69939; + &#69922; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+A
  &#69895;&#69939;&#69922;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69888; = &#69895; + &#69957; + &#69888;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+&amp; &#69895;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940; = &#69895; + &#69957; + &#69940;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+; &#69895;&#69939;&#69891;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69923;&#69937;
  = &#69895; + &#69939; + &#69923; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+V+A
  &#69895;&#69939;&#69923;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69931;
  = &#69895; + &#69939; + &#69923; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+V+S
  &#69895;&#69939;&#69923;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69923;&#69930;
  = &#69895; + &#69939; + &#69923; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+V+s
  &#69895;&#69939;&#69923;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+&amp;
  &#69895;&#69939;&#69920;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+Q
  &#69895;&#69939;&#69920;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+|
  &#69895;&#69939;&#69920;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;
  = &#69895; + &#69939; + &#69920; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f
  &#69895;&#69939;&#69920;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;
  = &#69895; + &#69939; + &#69920; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+d
  &#69895;&#69939;&#69920;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;
  = &#69895; + &#69939; + &#69920; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+D
  &#69895;&#69939;&#69920;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;
  = &#69895; + &#69939; + &#69920; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+a
  &#69895;&#69939;&#69920;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+A
  &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+N
  &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;
  = &#69895; + &#69939; + &#69920; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+C
  &#69895;&#69939;&#69920;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;
  = &#69895; + &#69939; + &#69920; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+A
  &#69895;&#69939;&#69920;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;
  = &#69895; + &#69939; + &#69920; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N
  &#69895;&#69939;&#69920;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+d+&amp;
  &#69895;&#69939;&#69920;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+D+&amp;
  &#69895;&#69939;&#69920;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69930; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+s+&amp;
  &#69895;&#69939;&#69920;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69931; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+S+&amp;
  &#69895;&#69939;&#69920;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+a+&amp;
  &#69895;&#69939;&#69920;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+A+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+N+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69936; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+C+&amp;
  &#69895;&#69939;&#69920;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+A+&amp;
  &#69895;&#69939;&#69920;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N+&amp;
  &#69895;&#69939;&#69920;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+Q
  &#69895;&#69939;&#69920;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69929; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+D+Q
  &#69895;&#69939;&#69920;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69930; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+s+Q
  &#69895;&#69939;&#69920;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69931; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+S+Q
  &#69895;&#69939;&#69920;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69933; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+a+Q
  &#69895;&#69939;&#69920;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69937; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+A+Q
  &#69895;&#69939;&#69920;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+N+Q
  &#69895;&#69939;&#69920;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69936; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+C+Q
  &#69895;&#69939;&#69920;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69937; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+A+Q
  &#69895;&#69939;&#69920;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N+Q
  &#69895;&#69939;&#69920;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+|
  &#69895;&#69939;&#69920;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69928;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+d+|
  &#69895;&#69939;&#69920;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69929;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+D+|
  &#69895;&#69939;&#69920;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69930; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+s+|
  &#69895;&#69939;&#69920;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69931; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+S+|
  &#69895;&#69939;&#69920;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69933;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69933; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+a+|
  &#69895;&#69939;&#69920;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69937;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+A+|
  &#69895;&#69939;&#69920;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N+|
  &#69895;&#69939;&#69920;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69936;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+C+|
  &#69895;&#69939;&#69920;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69938;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+N+|
  &#69895;&#69939;&#69920;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+d
  &#69895;&#69939;&#69920;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+D
  &#69895;&#69939;&#69920;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69930;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69930; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+s
  &#69895;&#69939;&#69920;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69931;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+S
  &#69895;&#69939;&#69920;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+d+Q
  &#69895;&#69939;&#69920;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69938;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+N
  &#69895;&#69939;&#69920;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69889;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+D+Q
  &#69895;&#69939;&#69920;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69937;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+A
  &#69895;&#69939;&#69920;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69940;
  = &#69895; + &#69939; + &#69920; + &#69940; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+;
  &#69895;&#69939;&#69920;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+D+|
  &#69895;&#69939;&#69920;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69929; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+D+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+d+|
  &#69895;&#69939;&#69920;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69930;
  = &#69895; + &#69939; + &#69920; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+s
  &#69895;&#69939;&#69920;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69920; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+f+d+&amp;
  &#69895;&#69939;&#69920;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69920;&#69931;
  = &#69895; + &#69939; + &#69920; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+W+S
  &#69895;&#69939;&#69920;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69933;&#69889; = &#69895; + &#69958;
  + &#69933; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+a+Q &#69895;&#69939;&#69892;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69889; = &#69895; + &#69958;
  + &#69927; + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+N+Q &#69895;&#69939;&#69892;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69889; = &#69895; + &#69958;
  + &#69927; + &#69937; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+A+Q &#69895;&#69939;&#69892;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69936;&#69889; = &#69895; + &#69958;
  + &#69936; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+C+Q &#69895;&#69939;&#69892;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69937;&#69889; = &#69895; + &#69958;
  + &#69937; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+A+Q &#69895;&#69939;&#69892;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69938;&#69889; = &#69895; + &#69958;
  + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+N+Q &#69895;&#69939;&#69892;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69890; = &#69895; + &#69958;
  + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+| &#69895;&#69939;&#69892;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928;&#69890; = &#69895; + &#69958;
  + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d+| &#69895;&#69939;&#69892;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69929;&#69890; = &#69895; + &#69958;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+D+| &#69895;&#69939;&#69892;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69930;&#69890; = &#69895; + &#69958;
  + &#69930; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+s+| &#69895;&#69939;&#69892;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69931;&#69890; = &#69895; + &#69958;
  + &#69931; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+S+| &#69895;&#69939;&#69892;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69890; = &#69895; + &#69958;
  + &#69927; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+A+| &#69895;&#69939;&#69892;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69890; = &#69895; + &#69958;
  + &#69927; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+N+| &#69895;&#69939;&#69892;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69936;&#69890; = &#69895; + &#69958;
  + &#8204;&#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+C+| &#69895;&#69939;&#69892;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69937;&#69890; = &#69895; + &#69958;
  + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+A+| &#69895;&#69939;&#69892;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69938;&#69890; = &#69895; + &#69958;
  + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+N+| &#69895;&#69939;&#69892;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69928; = &#69895; + &#69958;
  + &#69927; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+d &#69895;&#69939;&#69892;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69929; = &#69895; + &#69958;
  + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+D &#69895;&#69939;&#69892;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69930; = &#69895; + &#69958;
  + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+s &#69895;&#69939;&#69892;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69931; = &#69895; + &#69958;
  + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+S &#69895;&#69939;&#69892;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69890; = &#69895; + &#69958;
  + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+D+| &#69895;&#69939;&#69892;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69889; = &#69895; + &#69958;
  + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+D+Q &#69895;&#69939;&#69892;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69929;&#69888; = &#69895; + &#69958;
  + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+D+&amp; &#69895;&#69939;&#69892;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69928;&#69890; = &#69895; + &#69958;
  + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+d+| &#69895;&#69939;&#69892;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69928;&#69888; = &#69895; + &#69958;
  + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+d+&amp; &#69895;&#69939;&#69892;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928;&#69889; = &#69895; + &#69958;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d+Q &#69895;&#69939;&#69892;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69929;&#69889; = &#69895; + &#69958;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+D+Q&#69895;&#69939;&#69892;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69930;&#69889; = &#69895; + &#69958;
  + &#69930; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+s+Q &#69895;&#69939;&#69892;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69931;&#69889; = &#69895; + &#69958;
  + &#69931; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+S+Q &#69895;&#69939;&#69892;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69938;&#69888; = &#69895; + &#69958;
  + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+N+&amp;&#69895;&#69939;&#69892;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69889; = &#69895; + &#69958;
  + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+Q &#69895;&#69939;&#69892;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928; = &#69895; + &#69958; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d &#69895;&#69939;&#69892;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69888; = &#69895; + &#69958;
  + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+&amp;&#69895;&#69939;&#69892;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69928;&#69888; = &#69895; + &#69958;
  + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+d+&amp; &#69895;&#69939;&#69892;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69929;&#69888; = &#69895; + &#69958;
  + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+D+&amp; &#69895;&#69939;&#69892;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69930;&#69888; = &#69895; + &#69958;
  + &#69930; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+s+&amp; &#69895;&#69939;&#69892;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69931;&#69888; = &#69895; + &#69958;
  + &#69931; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+S+&amp; &#69895;&#69939;&#69892;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69933;&#69888; = &#69895; + &#69958;
  + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+a+&amp; &#69895;&#69939;&#69892;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69937;&#69888; = &#69895; + &#69958;
  + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+A+&amp; &#69895;&#69939;&#69892;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69927;&#69938;&#69888; = &#69895; + &#69958;
  + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+f+N+&amp; &#69895;&#69939;&#69892;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69936;&#69888; = &#69895; + &#69958;
  + &#8204;&#69936; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+C+&amp; &#69895;&#69939;&#69892;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69937;&#69888; = &#69895; + &#69958;
  + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+A+&amp; &#69895;&#69939;&#69892;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69933;&#69889; = &#69895; + &#69957;
  + &#69933; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+a+Q &#69895;&#69939;&#69891;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69889;  = &#69895; +
  &#69957; + &#69927; + &#69937; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+A+Q &#69895;&#69939;&#69891;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69889;  = &#69895; +
  &#69957; + &#69927; + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N+Q &#69895;&#69939;&#69891;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69936;&#69889;  = &#69895; + &#69957;
  + &#69936; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+C+Q &#69895;&#69939;&#69891;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69937;&#69889;  = &#69895; + &#69957;
  + &#69937; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+A+Q &#69895;&#69939;&#69891;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69938;&#69889;  = &#69895; + &#69957;
  + &#69938; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+N+Q &#69895;&#69939;&#69891;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69890;  = &#69895; + &#69957;
  + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+| &#69895;&#69939;&#69891;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928;&#69890;  = &#69895; + &#69957;
  + &#69928; + &#69890; / &#69895;&#69939;&#69891;&#69928;&#69889; &#69895;&#69939;&#69891;&#69928;&#69889;&#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d+| &#69895;&#69939;&#69891;&#69928;&#69890; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928;&#69889; = &#69895; + &#69957;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d+Q &#69895;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929;&#69889; = &#69895; + &#69957;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D+Q &#69895;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929;&#69890;  = &#69895; + &#69957;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D+| &#69895;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69930;&#69890;  = &#69895; + &#69957;
  + &#69930; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+s+| &#69895;&#69939;&#69891;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69931;&#69890;  = &#69895; + &#69957;
  + &#69931; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+S+| &#69895;&#69939;&#69891;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69933;&#69890;  = &#69895; + &#69957;
  + &#69933; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+a+| &#69895;&#69939;&#69891;&#69933;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69890;  = &#69895; +
  &#69957; + &#69927; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+A+| &#69895;&#69939;&#69891;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69890;  = &#69895; +
  &#69957; + &#69927; + &#69938; + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N+| &#69895;&#69939;&#69891;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69936;&#69890;  = &#69895; + &#69957;
  + &#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+C+| &#69895;&#69939;&#69891;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69937;&#69890;  = &#69895; + &#69957;
  + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+A+| &#69895;&#69939;&#69891;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69938;&#69890;  = &#69895; + &#69957;
  + &#69938; + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+N+| &#69895;&#69939;&#69891;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69928;  = &#69895; + &#69957;
  + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+d &#69895;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69929;  = &#69895; + &#69957;
  + &#69927; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+D &#69895;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69930;  = &#69895; + &#69957;
  + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+s &#69895;&#69939;&#69891;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69931;  = &#69895; + &#69957;
  + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+S &#69895;&#69939;&#69891;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69890;  = &#69895; +
  &#69957; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+D+| &#69895;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69889;  = &#69895; +
  &#69957; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+D+Q &#69895;&#69939;&#69891;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69929;&#69888;  = &#69895; +
  &#69957; + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+D+&amp; &#69895;&#69939;&#69891;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69890;  = &#69895; +
  &#69957; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+d+| &#69895;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69889;  = &#69895; +
  &#69957; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+d+Q &#69895;&#69939;&#69891;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69928;&#69888;  = &#69895; +
  &#69957; + &#69927; + &#69928; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+d+&amp; &#69895;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928;&#69889;  = &#69895; + &#69957;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d+Q &#69895;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929;&#69889;  = &#69895; + &#69957;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D+Q &#69895;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69930;&#69889;  = &#69895; + &#69957;
  + &#69930; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+s+Q &#69895;&#69939;&#69891;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69931;&#69889;  = &#69895; + &#69957;
  + &#69931; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+S+Q &#69895;&#69939;&#69891;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69938;&#69888;  = &#69895; + &#69957;
  + &#69938; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+N+&amp; &#69895;&#69939;&#69891;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69889;  = &#69895; + &#69957;
  + &#69927; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+Q &#69895;&#69939;&#69891;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938;  = &#69895; + &#69957;
  + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N &#69895;&#69939;&#69891;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69888;  = &#69895; + &#69957;
  + &#69927; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+&amp; &#69895;&#69939;&#69891;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69928;&#69888;  = &#69895; + &#69957;
  + &#69928; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+d+&amp; &#69895;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69929;&#69888;  = &#69895; + &#69957;
  + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+D+&amp; &#69895;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69930;&#69888;  = &#69895; + &#69957;
  + &#69930; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+s+&amp; &#69895;&#69939;&#69891;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69931;&#69888;  = &#69895; + &#69957;
  + &#69931; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+S+&amp; &#69895;&#69939;&#69891;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69933;&#69888;  = &#69895; + &#69957;
  + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+a+&amp; &#69895;&#69939;&#69891;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69937;&#69888;  = &#69895; +
  &#69957; + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+A+&amp; &#69895;&#69939;&#69891;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69927;&#69938;&#69888;  = &#69895; +
  &#69957; + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+f+N+&amp; &#69895;&#69939;&#69891;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69936;&#69888;  = &#69895; + &#69957;
  + &#69936; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+C+&amp; &#69895;&#69939;&#69891;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69937;&#69888;  = &#69895; + &#69957;
   + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+A+&amp; &#69895;&#69939;&#69891;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69933; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+a+Q
  &#69895;&#69939;&#69894;&#69933;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A+Q
  &#69895;&#69939;&#69894;&#69927;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N+Q
  &#69895;&#69939;&#69894;&#69927;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69936; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C+Q
  &#69895;&#69939;&#69894;&#69936;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69937; + &#69889;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A+Q
  &#69895;&#69939;&#69894;&#69937;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69938; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N+Q
  &#69895;&#69939;&#69894;&#69938;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+|
  &#69895;&#69939;&#69894;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D+|
  &#69895;&#69939;&#69894;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d+|
  &#69895;&#69939;&#69894;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69930; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s+|
  &#69895;&#69939;&#69894;&#69930;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69931; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+S+|
  &#69895;&#69939;&#69894;&#69931;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A+|
  &#69895;&#69939;&#69894;&#69927;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N+|
  &#69895;&#69939;&#69894;&#69927;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69936; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C+|
  &#69895;&#69939;&#69894;&#69936;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69937; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A+|
  &#69895;&#69939;&#69894;&#69937;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69938; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N+|
  &#69895;&#69939;&#69894;&#69938;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+d
  &#69895;&#69939;&#69894;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+D
  &#69895;&#69939;&#69894;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69930;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+s
  &#69895;&#69939;&#69894;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69931;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+S
  &#69895;&#69939;&#69894;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A
  &#69895;&#69939;&#69894;&#69927;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N
  &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69940;
  = &#69895; + &#69939; + &#69894; + &#69940; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+;
  &#69895;&#69939;&#69894;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+D+|
  &#69895;&#69939;&#69894;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+D+Q
  &#69895;&#69939;&#69894;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+D+&amp;
  &#69895;&#69939;&#69894;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+d+|
  &#69895;&#69939;&#69894;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+d+Q
  &#69895;&#69939;&#69894;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;
  = &#69895; + &#69939; + &#69894; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s
  &#69895;&#69939;&#69894;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+S
  &#69895;&#69939;&#69894;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+d+&amp;
  &#69895;&#69939;&#69894;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d+Q
  &#69895;&#69939;&#69894;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D+Q
  &#69895;&#69939;&#69894;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69930; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s+Q
  &#69895;&#69939;&#69894;&#69930;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69931; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+S+Q
  &#69895;&#69939;&#69894;&#69931;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N
  &#69895;&#69939;&#69894;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;
  = &#69895; + &#69939; + &#69894; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D
  &#69895;&#69939;&#69894;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A
  &#69895;&#69939;&#69894;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;
  = &#69895; + &#69939; + &#69894; + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A
  &#69895;&#69939;&#69894;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;
  = &#69895; + &#69939; + &#69894; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C
  &#69895;&#69939;&#69894;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69938;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+N+&amp;
  &#69895;&#69939;&#69894;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+Q
  &#69895;&#69939;&#69894;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69889;
  = &#69895; + &#69939; + &#69894; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+Q
  &#69895;&#69939;&#69894;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;
  = &#69895; + &#69939; + &#69894; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f
  &#69895;&#69939;&#69894;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;
  = &#69895; + &#69939; + &#69894; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d
  &#69895;&#69939;&#69894;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;
  = &#69895; + &#69939; + &#69894; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+a
  &#69895;&#69939;&#69894;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N
  &#69895;&#69939;&#69894;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+&amp;
  &#69895;&#69939;&#69894;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69928;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+d+&amp;
  &#69895;&#69939;&#69894;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69929;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D+&amp;
  &#69895;&#69939;&#69894;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69930;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69930; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+s+&amp;
  &#69895;&#69939;&#69894;&#69930;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69931;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69931; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+D+&amp;
  &#69895;&#69939;&#69894;&#69931;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69933;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69933; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+a+&amp;
  &#69895;&#69939;&#69894;&#69933;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69937;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+A+&amp;
  &#69895;&#69939;&#69894;&#69927;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69927;&#69938;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69927; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+f+N+&amp;
  &#69895;&#69939;&#69894;&#69927;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69936;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69936; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+C+&amp;
  &#69895;&#69939;&#69894;&#69936;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69937;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69937; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+A+&amp;
  &#69895;&#69939;&#69894;&#69937;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69894;&#69888;
  = &#69895; + &#69939; + &#69894; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+M+&amp;
  &#69895;&#69939;&#69894;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69895;&#69939;&#69895; = &#69895; + &#69939;
  + &#69895; + &#69939; + &#69895;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+g+j+g+j &#69895;&#69939;&#69895;&#69939;&#69895;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69896;&#69939;&#69896;&#69939;&#69896; = &#69896;+&#69939;+&#69896;+&#69939;+&#69896;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>J+g+J+g+J &#69896;&#69939;&#69896;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69900;&#69939;&#69900;&#69939;&#69900; = &#69900;+&#69939;+&#69900;+&#69939;+&#69900;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>y+g+y+g+y &#69900;&#69939;&#69900;&#69939;&#69900;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69910;&#69939;&#69910;&#69939;&#69910; = &#69910;+&#69939;+&#69910;+&#69939;+&#69910;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>k+g+k+g+k &#69910;&#69939;&#69910;&#69939;&#69910;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69915;&#69939;&#69915;&#69939;&#69915; = &#69915;+&#69939;+&#69915;+&#69939;+&#69915;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>r+g+r+g+r &#69915;&#69939;&#69915;&#69939;&#69915;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69924;&#69939;&#69924;&#69939;&#69924; = &#69924;+&#69939;+&#69924;+&#69939;+&#69924;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>p+g+p+g+p &#69924;&#69939;&#69924;&#69939;&#69924;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69919;&#69939;&#69919;&#69939;&#69895; = &#69895;,&#69919;
  + &#69939; + &#69919; + &#69939; + &#69895;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j,m+g+m+g+j  &#69895;&#69919;&#69939;&#69919;&#69939;&#69895;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69919;&#69939;&#69919;&#69939;&#69896; = &#69895;,&#69919;
  + &#69939; + &#69919; + &#69939; + &#69896;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j,m+g+m+g+J &#69895;&#69939;&#69919;&#69939;&#69919;&#69939;&#69896;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69919;&#69939;&#69919;&#69939;&#69897; = &#69895;,&#69919;
  + &#69939; + &#69919; + &#69939; + &#69897;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j,m+g+m+g+o &#69895;&#69919;&#69939;&#69919;&#69939;&#69897;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>&#69895;&#69919;&#69939;&#69919;&#69939;&#69898; = &#69895;,&#69919;
  + &#69939; + &#69919; + &#69939; + &#69898;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:black'>j,m+g+m+g+O &#69895;&#69919;&#69939;&#69919;&#69939;&#69898;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69938;&#69888;
  = &#69895; + &#69938; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+N+&amp;
  &#69895;&#69938;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69938;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69938; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+N
  &#69895;&#69939;&#69922;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69938;
  = &#69895; + &#69939; + &#69922; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+N
  &#69895;&#69939;&#69922;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;
  = &#69895; + &#69939; + &#69922; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f
  &#69895;&#69939;&#69922;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69930;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+s
  &#69895;&#69939;&#69922;&#69927;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69922;&#69927;&#69931;
  = &#69895; + &#69939; + &#69922; + &#69927; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+v+f+S
  &#69895;&#69939;&#69922;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69926;&#69934;
  = &#69895; + &#69939; + &#69926; + &#69934; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+i+x
  &#69895;&#69939;&#69926;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69923;&#69934;
  = &#69895; + &#69939; + &#69923; + &#69934; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+V+x
  &#69895;&#69939;&#69923;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+d
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+D
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69937;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+A
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69938;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+N
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69930;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+s
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69931;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+S
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+D+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+D+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+D+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69890; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+|+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69889; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+Q+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+d+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+d+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+d+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+d
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+D
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+D+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+D+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69929;
  + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+D+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+d+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+d+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69927; + &#69928;
  + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+f+d+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+d
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+D
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69937;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+A
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69938;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+N
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69930;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+s
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69931;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+S
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+D+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+D+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+D+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69890; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+|+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69890;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69889; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+Q+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69889;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+d+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+d+Q
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69928; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+d+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+d
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+D
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+D+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+D
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69929; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+D+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69929;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+d+|
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+d
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69927; + &#69928; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>j+g+F+g+F+g+F+f+d+&amp;
  &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69927;&#69928;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><b><u><span style='font-size:14.0pt;font-family:RibengUni'><span
   style='text-decoration:none'>&nbsp;</span></span></u></b></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#C00000'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69923;&#69940;&#69937; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+V+;+A &#69895;&#69939;&#69926;&#69940;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69923;&#69940;&#69938; = &#69895; + &#69939;+
  &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+V+;+N &#69895;&#69939;&#69923;&#69940;&#69938; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+s &#69895;&#69939;&#69926;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+A &#69895;&#69939;&#69926;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69923;&#69940;&#69938;= &#69895; + &#69939;
  + &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+V+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69888; = &#69895; + &#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+&amp; &#69895;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+Q &#69895;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69890; = &#69895; + &#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+| &#69895;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927; = &#69895; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f &#69895;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69928; = &#69895; + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+d &#69895;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69929; = &#69895; + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+D &#69895;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69932; = &#8204;&#69895; + &#69940; &#8204;+
   &#69932;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+ ; +c  &#69895;&#69940;&#69932;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69933; = &#69895; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+a &#69895;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69934; = &#69895; + &#69940; + &#69934;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+x &#69895;&#69940;&#69934;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69935; = &#69895; + &#69940; + &#69935;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+X &#69895;&#69940;&#69935;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69936; = &#69895; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+C &#69895;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69924;&#69940; = &#69895; + &#69939; + &#69924;
  + &#69940; / &#69895; +&#69940;+&#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+p+;  &#69895;&#69939;&#69924;&#69940; or j+;+A &#69895;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69924;&#69939;&#69924;&#69940; = &#69895; + &#69939;
  + &#69924; + &#69939; + &#69924; + &#69940;/&#69895;+&#69940;+&#69938;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+p+g+p+; &#69895;&#69939;&#69924;&#69939;&#69924;&#69940; or
  j+;+N &#69895;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927;&#69928; = &#69895; + &#69940; + &#69927;
  + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f+d &#69895;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927;&#69929; = &#69895; + &#69940; + &#69927;
  + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f+D &#69895;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+d &#69895;&#69939;&#69922;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+D &#69895;&#69939;&#69922;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69932;&#69940; = &#69895; + &#69939;
  + &#69922; + &#8204;&#69932; + &#69940; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+c+; &#69895;&#69939;&#69922;&#69932;&#69940;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69933; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+a &#69895;&#69939;&#69922;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927; + &#69937;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f+A &#69895;&#69939;&#69922;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f+N &#69895;&#69939;&#69922;&#69940;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+C &#69895;&#69939;&#69922;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+A &#69895;&#69939;&#69922;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+N &#69895;&#69939;&#69922;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69928; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+d &#69895;&#69939;&#69922;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69929; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+D &#69895;&#69939;&#69922;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69936; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+C &#69895;&#69939;&#69922;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940;+ &#69927; + &#69937;  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69927; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f &#69895;&#69939;&#69926;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69927; + &#69930; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f+s &#69895;&#69939;&#69926;&#69940;&#69927;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69927; + &#69931; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f+S &#69895;&#69939;&#69926;&#69940;&#69927;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69928; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+d &#69895;&#69939;&#69926;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69929;&#69929; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+D &#69895;&#69939;&#69926;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69933;&#69933; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+a &#69895;&#69939;&#69926;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69927;&#69927;&#69937;&#69937; = &#69895;
  + &#69939; + &#69926; + &#69940; + &#69927; + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69936;&#69936; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+C &#69895;&#69939;&#69926;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69930; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+s &#69895;&#69939;&#69926;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+A &#69895;&#69939;&#69926;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69927;&#69937; = &#69895; + &#69939;
  + &#69926; + &#69940; + &#69927; + &#69937; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+f+A &#69895;&#69939;&#69926;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69930; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+P &#69895;&#69939;&#69926;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69931; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+S &#69895;&#69939;&#69926;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69926;&#69940;&#69938; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+i+;+N &#69895;&#69939;&#69926;&#69940;&#69938; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69933; = &#69895; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+a &#69895;&#69940;&#69933; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69929; = &#69895; + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+D &#69895;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69936; = &#69895; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+A &#69895;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69890; = &#69895; + &#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+| &#69895;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+Q &#69895;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69889; = &#69895; + &#69940; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+ &amp; &#69895;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927;&#69929; = &#69895; + &#69940; + &#69927;
  + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f+D &#69895;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927;&#69928; = &#69895; + &#69940; + &#69927;
  + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f+d &#69895;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69927; = &#69895; + &#69940; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+f &#69895;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69930; = &#69895; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+s &#69895;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69940;&#69931; = &#69895; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+;+S &#69895;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f &#69895;&#69939;&#69920;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+d &#69895;&#69939;&#69920;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+D &#69895;&#69939;&#69920;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69930; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+s &#69895;&#69939;&#69920;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69929; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f+D &#69895;&#69939;&#69920;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+&amp; &#69895;&#69939;&#69920;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+Q &#69895;&#69939;&#69920;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69888; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927; + &#69888; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f+&amp; &#69895;&#69939;&#69920;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69938; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+N &#69895;&#69939;&#69920;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69937; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+A &#69895;&#69939;&#69920;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69931; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+S &#69895;&#69939;&#69920;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69933; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+a &#69895;&#69939;&#69920;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69928; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f+d &#69895;&#69939;&#69920;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69890; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f+| &#69895;&#69939;&#69920;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69920;&#69940;&#69927;&#69889; = &#69895; + &#69939;
  + &#69920; + &#69940; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+W+;+f+Q &#69895;&#69939;&#69920;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69889; = &#69895; + &#69958;
  + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+Q &#69895;&#69939;&#69892;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69933; = &#69895; + &#69958;
  + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+a &#69895;&#69939;&#69892;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69890; = &#69895; + &#69958;
  + &#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+| &#69895;&#69939;&#69892;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927; = &#69895; + &#69958;
  + &#69940; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f &#69895;&#69939;&#69892;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69928; = &#69895; + &#69958;
  + &#69940; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+d &#69895;&#69939;&#69892;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69929; = &#69895; + &#69958;
  + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+D &#69895;&#69939;&#69892;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69930; = &#69895; + &#69958;
  + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+s &#69895;&#69939;&#69892;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69937; = &#69895; + &#69958;
  + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+A &#69895;&#69939;&#69892;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69938; = &#69895; + &#69958;
  + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+N &#69895;&#69939;&#69892;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69929; = &#69895; + &#69958;
   + &#69940; + &#69927; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f+D &#69895;&#69939;&#69892;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69888; = &#69895; + &#69958;
  + &#69940; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f+&amp; &#69895;&#69939;&#69892;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69931; = &#69895; + &#69958;
  + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+S &#69895;&#69939;&#69892;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69928; = &#69895; + &#69958;
  + &#69940; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f+d &#69895;&#69939;&#69892;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69890; = &#69895; + &#69958;
  + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f+| &#69895;&#69939;&#69892;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69927;&#69889; = &#69895; + &#69958;
  + &#69940; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+f+Q &#69895;&#69939;&#69892;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69892;&#69940;&#69888; = &#69895; + &#69958;
  + &#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+Z+;+&amp; &#69895;&#69939;&#69892;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69889;  = &#69895; + &#69957;
  + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+Q &#69895;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69890;  = &#69895; + &#69957;
  + &#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+| &#69895;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69927; = &#69895; + &#69957;
  + &#69940; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+f &#69895;&#69939;&#69891;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69928;  = &#69895; + &#69957;
  + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+d &#69895;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69929; = &#69895; + &#69957;
  + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+D &#69895;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69930; = &#69895; + &#69957;
  + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+s &#69895;&#69939;&#69891;&#69940;&#69930; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69937; = &#69895; + &#69957;
  + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+A &#69895;&#69939;&#69891;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69938; = &#69895; + &#69957;
  + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+N &#69895;&#69939;&#69891;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69929;  = &#69895; +
  &#69957; + &#69940; + &#69927; + &#69929; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+f+D &#69895;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69931; = &#69895; + &#69957;
  + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+S &#69895;&#69939;&#69891;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69933; = &#69895; + &#69957;
  + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+a &#69895;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69928; = &#69895; + &#69957;
  + &#69940; + &#69927; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+f+d &#69895;&#69939;&#69891;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69890; = &#69895; + &#69957;
  + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+f+| &#69895;&#69939;&#69891;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>&#69895;&#69939;&#69891;&#69940;&#69927;&#69889; = &#69895; + &#69957;
  + &#69940; + &#69927; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#7030A0'>j+:+;+f+Q &#69895;&#69939;&#69891;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+Q &#69895;&#69939;&#69894;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+a &#69895;&#69939;&#69894;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+| &#69895;&#69939;&#69894;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69927; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+ &#69895;&#69939;&#69894;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+d &#69895;&#69939;&#69894;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+D &#69895;&#69939;&#69894;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69930; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+s &#69895;&#69939;&#69894;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69937; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+A &#69895;&#69939;&#69894;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69938; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+N &#69895;&#69939;&#69894;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69929; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+f+D &#69895;&#69939;&#69894;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69927;&#69888;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+f+&amp; &#69895;&#69939;&#69894;&#69940;&#69927;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69931; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+S &#69895;&#69939;&#69894;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69933; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+a &#69895;&#69939;&#69894;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69928; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+f+d &#69895;&#69939;&#69894;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69890; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+f+| &#69895;&#69939;&#69894;&#69940;&#69927;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69927;&#69889; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69927; + &#69889; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+f+Q &#69895;&#69939;&#69894;&#69940;&#69927;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69894;&#69940;&#69888; = &#69895; + &#69939;
  + &#69894; + &#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+M+;+&amp; &#69895;&#69939;&#69894;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f+N &#69895;&#69939;&#69922;&#69940;&#69927;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69938; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69938;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+N &#69895;&#69939;&#69922;&#69940;&#69938;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69937;  = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+A &#69895;&#69939;&#69922;&#69940;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927;&#69937; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927; + &#69937;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f+A &#69895;&#69939;&#69922;&#69940;&#69927;&#69937;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69927; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69927;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+f &#69895;&#69939;&#69922;&#69940;&#69927;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69930; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+s &#69895;&#69939;&#69922;&#69940;&#69930;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69922;&#69940;&#69931; = &#69895; + &#69939;
  + &#69922; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+v+;+S &#69895;&#69939;&#69922;&#69940;&#69931;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940;+ &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+a &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+C &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890; = &#69895;
  + &#69939; + &#69891; + &#69939; + &#69891; +&#69940; + &#69890;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69927;
  + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69940; + &#69927;
  + &#69928;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+;+f+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69929;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69933;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+a &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69933;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69928; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+d &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69928;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69936;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+C &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69936;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940; + &#69890; </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+| &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  +&#69940; + &#69889;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+Q &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  +&#69940; + &#69888;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+&amp; &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;
  = &#69895; + &#69939; + &#69891; + &#69939; + &#69891; + &#69939; + &#69891;
  + &#69940;+&#69927; + &#69929; + </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+F+g+F+g+F+;+f+D &#69895;&#69939;&#69891;&#69939;&#69891;&#69939;&#69891;&#69940;&#69927;&#69929;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69923;&#69940;&#69930; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69930;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+V+;+P &#69895;&#69939;&#69923;&#69940;&#69930;  </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>&#69895;&#69939;&#69923;&#69940;&#69931; = &#69895; + &#69939;
  + &#69923; + &#69940; + &#69931;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>j+g+V+;+S &#69895;&#69939;&#69923;&#69940;&#69931; </span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><b><u><span style='font-size:14.0pt;font-family:RibengUni;
  color:#002060'>Special </span></u></b><b><u><span style='font-size:14.0pt;
  font-family:RibengUni;color:#00B050'>tone mark </span></u></b><b><u><span
  style='font-size:14.0pt;font-family:RibengUni;color:#002060'>for Chakma if
  need in future purposed</span></u></b></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>(don’t worry about this looking to like that)</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69895;&#69889;&#69889;&#69889; = &#69895;+&#69889;,&#69889;,&#69889;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>j+Q,Q,Q &#69895;&#69889;&#69889;&#69889;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69895;&#69890;&#69890;&#69890; = &#69895;+&#69890;,&#69890;,&#69890;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>j+|,|,| &#69895;&#69890;&#69890;&#69890;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69895;&#69888;&#69888;&#69888; = &#69895;+&#69888;,&#69888;,&#69888;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>j+&amp;,&amp;,&amp; &#69895;&#69888;&#69888;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69895;&#69888;&#69888;&#69888;&#69888; = &#69895;+&#69888;,&#69888;,&#69888;,&#69888;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>j+&amp;,&amp;,&amp;,&amp; &#69895;&#69888;&#69888;&#69888;&#69888;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><u><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>Chakma </span></u><b><u><span style='font-size:14.0pt;
  font-family:RibengUni;color:#00B050'>alternative Characters</span></u></b><u><span
  style='font-size:14.0pt;font-family:RibengUni;color:#00B050'> </span></u><u><span
  style='font-size:14.0pt;font-family:RibengUni;color:#00B0F0'>sometime use it
  in different book</span></u></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><u><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B0F0'>(Don’t worry maybe not used it now-a-days)</span></u></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69956; =&gt; &#69926;&#69939;&#69894;&#69939;&#69923; = &#69926;+&#69939;+&#69894;+&#69939;+&#69923;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>i+g+M+g+V &#69926;&#69939;&#69894;&#69939;&#69923;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69905; =&gt; &#69905;&#69939;&#69894;&#69939;&#69905; = &#69905;+&#69939;+&#69894;+&#69939;+&#69905;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>t+g+M+g+t &#69905;&#69939;&#69894;&#69939;&#69905;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69892; =&gt; &#69892;&#69939;&#69894;&#69939;&#69892; = &#69892;+&#69939;+&#69894;+&#69939;+&#69892;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>z+g+M+g+z &#69892;&#69939;&#69894;&#69939;&#69892;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69892; =&gt; &#69892;&#69939;&#69892;&#69939;&#69892; = &#69892;+&#69939;+&#69892;+&#69939;+&#69892;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>z+g+z+g+z &#69892;&#69939;&#69892;&#69939;&#69892;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69892; =&gt; &#69892;&#69939;&#69892;&#69939;&#69892;&#69939;&#69892;
  = &#69892;+&#69939;+&#69892;+&#69939;+&#69892;+&#69939;+&#69892;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>z+g+z+g+z+g+z &#69892;&#69939;&#69892;&#69939;&#69892;&#69939;&#69892;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69901; =&gt; &#69901;&#69939;&#69894;&#69939;&#69901; = &#69901;+&#69939;+&#69894;+&#69939;+&#69901;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>Y+g+M+g+Y &#69901;&#69939;&#69894;&#69939;&#69901;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69903; =&gt; &#69903;&#69939;&#69894;&#69939;&#69903; = &#69903;+&#69939;+&#69894;+&#69939;+&#69903;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>U+g+M+g+U &#69903;&#69939;&#69894;&#69939;&#69903;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69922; =&gt; &#69922;&#69939;&#69894;&#69939;&#69922; = &#69922;+&#69939;+&#69894;+&#69939;+&#69922;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>v+g+M+g+v &#69922;&#69939;&#69894;&#69939;&#69922;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69921; =&gt; &#69921;&#69939;&#69894;&#69939;&#69921; = &#69921;+&#69939;+&#69894;+&#69939;+&#69921;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>w+g+M+g+w &#69921;&#69939;&#69894;&#69939;&#69921;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69921; =&gt; &#69921;&#69939;&#69921;&#69939;&#69921; = &#69921;+&#69939;+&#69921;+&#69939;+&#69921;</span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>w+g+w+g+w &#69921;&#69939;&#69921;&#69939;&#69921;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69894; =&gt; &#69894;&#69939;&#69894;&#69939;&#69894; = &#69894;+&#69939;+&#69894;+&#69939;+&#69894;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>M+g+M+g+M &#69894;&#69939;&#69894;&#69939;&#69894;</span></p>
  </td>
 </tr>
 <tr>
  <td width=360 valign=top style='width:269.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>&#69909; =&gt; &#69909;&#69939;&#69894;&#69939;&#69909; = &#69909;+&#69939;+&#69894;+&#69939;+&#69909;
  </span></p>
  </td>
  <td width=348 valign=top style='width:261.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni;
  color:#00B050'>B+g+M+g+B &#69909;&#69939;&#69894;&#69939;&#69909;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
font-family:RibengUni'>&#69893;&#69930;&#69888; &#69893;&#69931;&#69888; &#69895;&#69922;&#69940;&#69953;
&#69893;&#69930;&#69888; &#69925;&#69937;&#69897; &#69915;&#69937; &#69910;&#69939;&#69893;&#69927;&#69915;&#69940;
&#69910;&#69939;&#69893;&#69927;&#69915;&#69940;&#69953; &#69919;&#69927;&#69922;&#69940;
&#69891;&#69939;&#69892;&#69932; &#69917;&#69932;&#69895;&#69940; &#69917;&#69928;&#69912;&#69939;&#69920;&#69914;&#69928;
&#69897;&#69927;&#69912; &#69900;&#69899;&#69940;&#69919;&#69939;&#69926; &#69902;&#69912;&#69939;&#69926;&#69927;
&#69891;&#69928;&#69913;&#69930; &#69925;&#69927;&#69922;&#69939;&#69894;&#69932;
&#69915;&#69927;&#69922;&#69939;&#69893;&#69927;&#69895;&#69940;&#69953; &#69902;&#69930;
&#69902;&#69931; &#69917;&#69932;&#69895;&#69940; &#69900;&#69899;&#69940;&#69919;&#69939;&#69926;
&#69902;&#69912;&#69927;&#69922;&#69940; &#69919;&#69914;&#69932;&#69933;&#69893;&#69930;&#69914;&#69927;&#69922;&#69932;&#69953;
&#69914;&#69928;&#69902;&#69934; &#69895;&#69927;&#69913; &#69891;&#69922;&#69940;
&#69895;&#69928; &#69895;&#69939;&#69893;&#69927;&#69919;&#69940;&#69953; &#69902;&#69910;&#69940;&#69911;&#69930;&#69914;&#69940;
&#69913;&#69922;&#69900;&#69940; &#69914;&#69932;&#69933; &#69910;&#69939;&#69920;&#69932;
&#69902;&#69928;&#69889;&#69895;&#69914;&#69929;&#69918;&#69927;&#69922;&#69940;
&#69891;&#69932;&#69933; &#69915;&#69928;&#69910;&#69940;&#69911;&#69928;&#69919;&#69940;
&#69895;&#69928;&#69900;&#69940;&#69901;&#69931; &#69925;&#69928;&#69898;&#69928;
&#69915;&#69910;&#69940;&#69910;&#69927; &#69914;&#69939;&#69894;&#69953; . . .
. . <span style='color:#00B050'>&#69917;&#69928;&#69918;&#69931;&#69910;&#69928;
&#69900;&#69899;&#69940;&#69919;&#69939;&#69926; </span><span style='color:
#E36C0A'>(&#69925;&#69930;&#69900;&#69940; &#69919;&#69927;&#69922;&#69928;&#69900;&#69940;)
</span>&#69910;&#69922;&#69928;&#69895;&#69940;: &#69945;&#69943;.&#69942;&#69943;.&#69944;&#69942;&#69943;&#69950;&#69953;
</span></p>

<p class=MsoNormal><b><span style='font-size:20.0pt;font-family:RibengUni;
color:#00B050'>&#69894;&#69939;&#69894;&#69939;&#69894;  </span></b><b><span
style='font-size:20.0pt;font-family:RibengUni'>              <span
style='color:#0070C0'>&#69893;  </span>                          <span
style='color:#7030A0'>&#69894;</span></span></b></p>

<p class=MsoNormal><span style='font-size:20.0pt;font-family:RibengUni'>&#69918;&#69932;&#69912;&#69927;&#69895;&#69927;&#69913;:
&#69891;&#69939;&#69894;&#69932; &#69910;&#69928;&#69914;&#69939;&#69926;&#69927;&#69927;&#69937;&#69937;
&#69891;&#69900;&#69940;&#69912;&#69939;&#69920;&#69927; &#69926;&#69927;&#69922;&#69927;&#69895;&#69940;</span></p>

<p class=MsoNormal><span style='font-size:20.0pt;font-family:RibengUni;
color:#00B050'>&#69894;&#69939;&#69894;&#69939;&#69894; </span><span
style='font-size:20.0pt;font-family:RibengUni'> &#69891;&#69902;&#69920;&#69940;
&#69891;&#69928; &#69891;&#69957; &#69891;&#69929;</span></p>

<p class=MsoNormal><span style='font-size:20.0pt;font-family:RibengUni;
color:#0070C0'>&#69893;</span><span style='font-size:20.0pt;font-family:RibengUni'> 
&#69891;&#69902;&#69920;&#69940; &#69891;&#69930; &#69891;&#69957; &#69891;&#69931;</span></p>

<p class=MsoNormal style='line-height:150%'><span style='font-size:20.0pt;
line-height:150%;font-family:RibengUni;color:#7030A0'>&#69894; </span><span
style='font-size:20.0pt;line-height:150%;font-family:RibengUni'> &#69891;&#69902;&#69920;&#69940; 
&#69891;&#69932; &#69891;&#69957;  &#69891;&#69932;&#69932;&#69953;</span></p>

<p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal><span style='position:relative;z-index:-1895815680'><span
style='position:absolute;left:8px;top:-4024px;width:506px;height:1px'><img
width=405 height=1 src="images/image004.png"></span></span><span
style='position:relative;z-index:-1895814656'><span style='position:absolute;
left:8px;top:-4024px;width:506px;height:1px'><img width=405 height=1
src="images/image005.png" alt="About Bivuti Chakma (Suz Moriz)"></span></span><span
style='position:relative;z-index:-1895813632'><span style='position:absolute;
left:627px;top:-4024px;width:224px;height:1px'><img width=179 height=1
src="images/image006.png"></span></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal><span style='font-size:14.0pt;font-family:RibengUni'>&nbsp;</span></p>

<p class=MsoNormal><a href="http://hilledu.com/"><span style='font-size:21.0pt'>Bivuti
Chakma</span></a><span style='font-size:21.0pt;color:blue'> (Suz Moriz)</span><span
style='font-size:21.0pt;font-family:SutonnyMJ;color:red'>.....</span></p>

<p class=MsoNoSpacing><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'>I would love to introduce myself to a new friend over the globe!  <br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128204;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> I am Chakma font developer and&nbsp;Chakma keyboard layout
Creator. My name is Bivuti Chakma from Bangladesh. Nick name is Suz Moriz. I
was born in 30 April&nbsp;</span><a href="tel:1978"><span style='font-size:
13.5pt;font-family:"Nirmala UI",sans-serif'>1978</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'>&nbsp;at
5 No Bandukbhang UP, Rangamati Sadar Thana under Rangamati District of
Bangladesh. My village name is Lekshongchara (Noadam).<br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128221;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> I was studied at Noadam Govt Primary School, Bandukbhanga High
School, Moanoghar Residential High School &amp; Rangamati Govt College. I
passed SSC from science group with first division in&nbsp;</span><a
href="tel:1996"><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>1996</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'>&nbsp;from
Moanoghar Residential High School and HSC from science group with first
division in&nbsp;</span><a href="tel:1999"><span style='font-size:13.5pt;
font-family:"Nirmala UI",sans-serif'>1999</span></a><span style='font-size:
13.5pt;font-family:"Nirmala UI",sans-serif;color:black'>&nbsp;from Rangamati
Govt College.<br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128204;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> I have been working with Chakma Script from&nbsp;</span><a
href="tel:1998"><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>1998</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'>&nbsp;at
present. I am skillful of Office Program, FontForge, FontLab, Fontographer,
TypeTool, I am excellent typist of Chakma, Bangla &amp; English Languages. I am
the writer of “Chakma Mini Grammar”. I also write various Chakma Book and web
design in my leisure time. I am the creator of most used Chakma Unicode Font of
“RibengUni” helping by Paul D. Hunt (Adobe Corporation) &amp; Andrew Glass
(Microsoft). I also made “Easy Chakma” Keyboard helping<br>
by Dr. Andrew Glass, program manager at Microsoft Corporation and Marc Durdin,
the founder of Keyman, who helped creating this keyboard, and Makara Sok, the
project support specialist at Keyman, who help updating this keyboard and
fixing bugs.<br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128204;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> I am now working with Translation Commons, Unicode Consortium,
Google, Microsoft, Adobe, Facebook &amp; Keyman team for implementation the
Chakma language over the globe. Moreover, I am working with Liang Hai.<br>
Also working on CLDR Project of Unicode Consortium as a individual contributor
from Bangladesh.</span></p>

<p class=MsoNoSpacing><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'>&nbsp;</span></p>

<p class=MsoNoSpacing><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'><br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128221;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> My interview focuses on the article about the Chakma language to
digitize. When you feel free just look at a glance. The interview to ABC news
in Australia to Gary. Here's the article link:<br>
</span><a
href="https://mobile.abc.net.au/news/2019-10-13/smartphone-keyboards-for-traditional-language-at-cutting-edge/11513462?pfmredir=sm&amp;fbclid=IwAR04BVnzE7_NQBs0xhnyF2wmcWqGHN-7J643m_yVbFZUllQOXNSZZ-rZIto"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://mobile.abc.net.au/news/2019-10-13/smartphone-keyboards-for-traditional-language-at-cutting-edge/11513462?pfmredir=sm&amp;fbclid=IwAR04BVnzE7_NQBs0xhnyF2wmcWqGHN-7J643m_yVbFZUllQOXNSZZ-rZIto</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
<br>
Hope it would be helpful to understand the Chakma language.<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#9000;&#65039;</span><span style='font-size:13.5pt;font-family:
"Nirmala UI",sans-serif;color:black'> Here's my keyboard:<br>
</span><a href="https://keyman.com/keyboards/easy_chakma"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://keyman.com/keyboards/easy_chakma</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128329;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'>&#65039; Here's Chakma font:<br>
</span><a href="https://languagetools-153419.appspot.com/ccp/downloads"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://languagetools-153419.appspot.com/ccp/downloads</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'>/<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128226;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> For your kind information also if you interested in Chakma language
please around when you feel free:<br>
</span><a href="https://en.m.wikipedia.org/wiki/Chakma"><span style='font-size:
13.5pt;font-family:"Nirmala UI",sans-serif'>https://en.m.wikipedia.org/wiki/Chakma</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128204;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> I am trying to my best to digitize, revitalize, revive, promote,
and preserve the Chakma language over the globe and implement it quickly in
modern technology.<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#128204;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> Here is my YouTube channel (Chakma language resources) to spread
out our language on internet and connect with social media:<br>
<br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#9989;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'>&nbsp;</span><a
href="https://www.youtube.com/channel/UCpadb5MfKlxeF0eR5diEDXA"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://www.youtube.com/channel/UCpadb5MfKlxeF0eR5diEDXA</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#9989;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> Facebook:&nbsp;</span><a href="https://www.facebook.com/EenJuro"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://www.facebook.com/EenJuro</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
</span><span style='font-size:13.5pt;font-family:"Segoe UI Emoji",sans-serif;
color:black'>&#9989;</span><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'> LinkedIn:&nbsp;</span><a
href="https://www.linkedin.com/in/bivuti-chakma-4178a4194"><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif'>https://www.linkedin.com/in/bivuti-chakma-4178a4194</span></a><span
style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;color:black'><br>
<br>
I would be happy if you might have any questions about me and my work?<br>
<br>
Stay safe in COVID-19 outbreak over the World.<br>
<br>
Thanking you<br>
Bivuti Chakma</span></p>

<p class=MsoNoSpacing><span style='font-size:13.5pt;font-family:"Nirmala UI",sans-serif;
color:black'>&nbsp;</span></p>

<p class=MsoNoSpacing><span style='font-size:14.0pt'>&nbsp;</span></p>

