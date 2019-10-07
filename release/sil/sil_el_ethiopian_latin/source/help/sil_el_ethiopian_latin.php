<?php 
  $pagename = "SIL EL - Ethiopian Latin Keyboard Map";
  $pagetitle = "SIL EL - Ethiopian Latin Keyboard Map";
  $pagestyle = <<<END
    @page {  }
    table { border-collapse:collapse; border-spacing:0; empty-cells:show }
    td, th { vertical-align:top; font-size:12pt;}
    h1, h2, h3, h4, h5, h6 { clear:both;}
    ol, ul { margin:0; padding:0;}
    li { list-style: none; margin:0; padding:0;}
    /* "li span.odfLiEnd" - IE 7 issue*/
    li span. { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; }
    span.footnodeNumber { padding-right:1em; }
    span.annotation_style_by_filter { font-size:95%; font-family:Arial; background-color:#fff000;  margin:0; border:0; padding:0;  }
    span.heading_numbering { margin-right: 0.8rem; }* { margin:0;}
    .Code { font-size:10pt; margin-bottom:0.199cm; margin-top:0cm; font-family:Courier New; writing-mode:lr-tb; }
    .Footer { font-size:11pt; margin-bottom:0.199cm; margin-top:0cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; }
    .Heading_20_3 { font-size:101%; margin-bottom:0.212cm; margin-top:0.247cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; font-weight:bold; }
    .Heading_20_5 { font-size:85%; margin-bottom:0.106cm; margin-top:0.212cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; font-weight:bold; }
    .Input-Character { font-size:12pt; margin-bottom:0cm; margin-top:0cm; font-family:Gentium Plus; writing-mode:lr-tb; text-align:center ! important; font-weight:bold; }
    .P1 { font-size:7pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P10 { font-size:7pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P11 { font-size:12pt; font-weight:bold; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P12 { font-size:12pt; font-weight:bold; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P13 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P14 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P15 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P16 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P17 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P2 { font-size:7pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P3 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P4 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P5 { font-size:18pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .P6 { font-size:101%; font-weight:bold; margin-bottom:0.212cm; margin-top:0.247cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; }
    .P7 { font-size:101%; font-weight:bold; margin-bottom:0.212cm; margin-top:0.247cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; }
    .P8 { font-size:7pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Gentium Plus; writing-mode:lr-tb; }
    .Standard { font-size:11pt; font-family:Gentium Plus Compact; writing-mode:lr-tb; margin-top:0cm; margin-bottom:0.199cm; }
    .Subtitle { font-size:11pt; margin-bottom:0.212cm; margin-top:0.106cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; text-align:center ! important; }
    .Title { font-size:18pt; margin-bottom:0.212cm; margin-top:0.423cm; font-family:Gentium Plus Compact; writing-mode:lr-tb; text-align:center ! important; font-weight:bold; }
    .Unicode-Character { font-size:18pt; margin-bottom:0cm; margin-top:0cm; font-family:Gentium Plus; writing-mode:lr-tb; text-align:center ! important; }
    .Unicode-Value { font-size:7pt; margin-bottom:0cm; margin-top:0cm; font-family:Gentium Plus; writing-mode:lr-tb; text-align:center ! important; }
    .Table1 { width:17cm; margin-left:0cm; margin-right:auto;writing-mode:lr-tb; }
    .Table10 { width:16.443cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table11 { width:15.094cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table12 { width:15.094cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table13 { width:15.094cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table2 { width:15.626cm; margin-left:1.281cm; margin-right:auto;writing-mode:lr-tb; }
    .Table21 { width:14.497cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table3 { width:14.497cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table6 { width:15.094cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table7 { width:16.439cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table9 { width:16.443cm; margin-left:0px; margin-right:auto;writing-mode:lr-tb; }
    .Table1_A1 { vertical-align:top; padding-left:0.191cm; padding-right:0.191cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table10_A1 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_A2 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_A25 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_A26 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_A27 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_A3 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_A4 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_A40 { vertical-align:middle; background-color:#dddddd; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_B97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_B99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_C97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_C99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_D97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_D99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_E97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_E99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_F97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_F99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_G97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_G99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_H97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_H99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_I97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_I99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_J97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_J99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_K97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_K99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L1 { vertical-align:top; background-color:#dddddd; padding:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table10_L10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L100 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L101 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L102 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L103 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L11 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L12 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L13 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L14 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L15 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L16 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L17 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L18 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L19 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L2 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L20 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L21 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L22 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L23 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L24 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L25 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L26 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L27 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L28 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L29 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L3 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L30 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L31 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L32 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L33 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L34 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L35 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L36 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L37 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L40 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L41 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L42 { vertical-align:top; padding:0.097cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L43 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L44 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L45 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L47 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L48 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L50 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L51 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L52 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L53 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L54 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L55 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L56 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L57 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L58 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L59 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L60 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L61 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L62 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L63 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L64 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L65 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L66 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L67 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L68 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L69 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L7 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L70 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L71 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L72 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L73 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L74 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L75 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L76 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L77 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L78 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L79 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L8 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L80 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L81 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L82 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L83 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L84 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L85 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L86 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L87 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L88 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L89 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L90 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L91 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L92 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L93 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L94 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L95 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L96 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table10_L97 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L98 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table10_L99 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_A1 { vertical-align:top; background-color:transparent; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table11_A2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_A5 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_B5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_B6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_C5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_C6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_D5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_D6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_E5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_E6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_F5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_F6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_G5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_G6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_H5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_H6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_I5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_I6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_J2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table11_J5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table11_J6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_A1 { vertical-align:top; background-color:transparent; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table12_A2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_A5 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_B5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_B6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_C5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_C6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_D5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_D6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_E5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_E6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_F5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_F6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_G5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_G6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_H5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_H6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_I5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_I6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_J2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table12_J5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table12_J6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_A1 { vertical-align:top; background-color:transparent; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table13_A2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_A5 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_B5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_B6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_C5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_C6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_D5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_D6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_E5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_E6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_F5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_F6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_G5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_G6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_H5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_H6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_I5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_I6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_J2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table13_J5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table13_J6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table2_A1 { vertical-align:top; padding-left:0.191cm; padding-right:0.191cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table21_A1 { vertical-align:top; background-color:#dddddd; padding:0.101cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table21_A2 { vertical-align:top; background-color:transparent; padding:0.101cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_A3 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_A4 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_A5 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_B10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_B5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_B6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_B9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_C10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_C5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_C6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_C9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_D10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_D5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_D6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_D9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_E10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_E5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_E6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_E9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_F10 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_F3 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_F4 { vertical-align:top; background-color:#dddddd; padding:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table21_F5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table21_F6 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table21_F9 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_A1 { vertical-align:top; background-color:transparent; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table3_A2 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_A4 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_B4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_B5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_C4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_C5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_D4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_D5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_E4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_E5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_F2 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table3_F4 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table3_F5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_A1 { vertical-align:top; background-color:transparent; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table6_A2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_A5 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_B5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_B6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_C5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_C6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_D5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_D6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_E5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_E6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_F5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_F6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_G5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_G6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_H5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_H6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_I5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_I6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_J2 { vertical-align:top; background-color:#dddddd; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table6_J5 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table6_J6 { vertical-align:top; padding-left:0.101cm; padding-right:0.101cm; padding-top:0cm; padding-bottom:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table7_A1 { vertical-align:top; background-color:#dddddd; padding:0.101cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table7_A2 { vertical-align:top; background-color:transparent; padding:0.101cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_A1 { vertical-align:top; background-color:#dddddd; padding:0.101cm; border-width:0.0176cm; border-style:solid; border-color:#000000; writing-mode:lr-tb; }
    .Table9_A2 { vertical-align:top; background-color:transparent; padding:0.101cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_A3 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_A4 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_A5 { vertical-align:middle; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_B4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_B5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_C4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_C5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_D4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_D5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_E4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_E5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_F4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_F5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_G4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_G5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_H4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_H5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_I4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_I5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_J4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_J5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_K4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_K5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_L3 { vertical-align:top; background-color:#dddddd; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table9_L4 { vertical-align:middle; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-width:0.0176cm; border-top-style:solid; border-top-color:#000000; border-bottom-style:none; writing-mode:lr-tb; }
    .Table9_L5 { vertical-align:top; padding:0cm; border-left-width:0.0176cm; border-left-style:solid; border-left-color:#000000; border-right-width:0.0176cm; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:0.0176cm; border-bottom-style:solid; border-bottom-color:#000000; writing-mode:lr-tb; }
    .Table1_A { width:17cm; }
    .Table10_A { width:1.6cm; }
    .Table10_B { width:1.349cm; }
    .Table11_A { width:1.6cm; }
    .Table11_B { width:1.499cm; }
    .Table12_A { width:1.6cm; }
    .Table12_B { width:1.499cm; }
    .Table13_A { width:1.6cm; }
    .Table13_B { width:1.499cm; }
    .Table2_A { width:15.626cm; }
    .Table21_A { width:2cm; }
    .Table21_B { width:2.499cm; }
    .Table3_A { width:2cm; }
    .Table3_B { width:2.499cm; }
    .Table6_A { width:1.6cm; }
    .Table6_B { width:1.499cm; }
    .Table7_A { width:16.439cm; }
    .Table9_A { width:1.6cm; }
    .Table9_B { width:1.349cm; }
    .Internet_20_link { color:#0000ff; text-decoration:underline; }
    .Keyboard { font-family:Gentium Plus Compact; font-size:11pt; font-weight:bold; }
    /* ODF styles with no properties representable as CSS */
    .Table1.1 .Table10.1 .Table11.1 .Table12.1 .Table13.1 .Table2.1 .Table21.1 .Table21.10 .Table3.1 .Table6.1 .Table7.1 .Table9.1 .Table9.3 .T1 .T10 .T11 .T2 .T3 .T4 .T5 .T6 .T7 .T9 .WW8Num1z0 .WW8Num1z1 .WW8Num1z2 .WW8Num1z3 .WW8Num1z4 .WW8Num1z5 .WW8Num1z6 .WW8Num1z7 .WW8Num1z8  { }
END;
  require_once('header.php');

  
?>

  <table border="0" cellspacing="0" cellpadding="0" width="100%" class=
  "Table1">
    <colgroup>
      <col width="743">
    </colgroup>
    <tr class="Table11">
      <td style="text-align:left;width:17cm;" class="Table1_A1">
        <p class="Title">SIL EL - Ethiopian Latin Keyboard</p>
        <p class="Subtitle">© <span class="T6">2017-2019</span> SIL Ethiopia -
        version 1.<span class="T7">4.0</span> - 201<span class=
        "T7">9</span>-0<span class="T7">5</span>-<span class="T7">04</span></p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <p class="Standard">The “SIL EL - Ethiopian Latin” keyboard is intended to
  support keying many Ethiopian latin-based scripts.</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table6">
    <colgroup>
      <col width="70">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
    </colgroup>
    <tr class="Table61">
      <td colspan="10" style="text-align:left;width:1.6cm;" class="Table6_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Special_Vowels_-_Small_Letters"></a>Special Vowels - Small
        Letters</h3>
      </td>
    </tr>
    <tr class="Table61">
      <td style="text-align:left;width:1.6cm;" class="Table6_A2">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">; e</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">: e</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">; i</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">; o</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">; u</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table61">
      <td style="text-align:left;width:1.6cm;" class="Table6_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">e &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">i &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">o &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">u &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table61">
      <td style="text-align:left;width:1.6cm;" class="Table6_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">] a</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">] e</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">= e</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">i =</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">] i</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">] o</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">= o</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_A2">
        <p class="Input-Character">u =</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_J2">
        <p class="Input-Character">] u</p>
      </td>
    </tr>
    <tr class="Table61">
      <td style="text-align:left;width:1.6cm;" class="Table6_A5">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_B5">
        <p class="Unicode-Character">ʌ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_C5">
        <p class="Unicode-Character">ɛ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_D5">
        <p class="Unicode-Character">ə</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_E5">
        <p class="Unicode-Character">ɨ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_F5">
        <p class="Unicode-Character">ɩ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_G5">
        <p class="Unicode-Character">ɔ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_H5">
        <p class="Unicode-Character">ø</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_I5">
        <p class="Unicode-Character">ʉ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_J5">
        <p class="Unicode-Character">ʋ</p>
      </td>
    </tr>
    <tr class="Table61">
      <td style="text-align:left;width:1.6cm;" class="Table6_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_B6">
        <p class="Unicode-Value">028C</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_C6">
        <p class="Unicode-Value">025B</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_D6">
        <p class="Unicode-Value">0259</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_E6">
        <p class="Unicode-Value">0268</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_F6">
        <p class="Unicode-Value">0269</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_G6">
        <p class="Unicode-Value">0254</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_H6">
        <p class="Unicode-Value">00F8</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_I6">
        <p class="Unicode-Value">0289</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table6_J6">
        <p class="Unicode-Value">028<span class="T5">B</span></p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table11">
    <colgroup>
      <col width="70">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
    </colgroup>
    <tr class="Table111">
      <td colspan="10" style="text-align:left;width:1.6cm;" class="Table11_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Special_Vowels_-_Capital_Letters"></a>Special Vowels - Capital
        Letters</h3>
      </td>
    </tr>
    <tr class="Table111">
      <td style="text-align:left;width:1.6cm;" class="Table11_A2">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">; E</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">: E</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">; I</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">; O</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">; U</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table111">
      <td style="text-align:left;width:1.6cm;" class="Table11_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">E &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">I &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">O &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">U &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table111">
      <td style="text-align:left;width:1.6cm;" class="Table11_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">] A</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">] E</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">= E</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">I =</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">] I</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">] O</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">= O</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_A2">
        <p class="Input-Character">U =</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_J2">
        <p class="Input-Character">] U</p>
      </td>
    </tr>
    <tr class="Table111">
      <td style="text-align:left;width:1.6cm;" class="Table11_A5">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_B5">
        <p class="Unicode-Character">Ʌ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_C5">
        <p class="Unicode-Character">Ɛ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_D5">
        <p class="Unicode-Character">Ə</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_E5">
        <p class="Unicode-Character">Ɨ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_F5">
        <p class="Unicode-Character">Ɩ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_G5">
        <p class="Unicode-Character">Ɔ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_H5">
        <p class="Unicode-Character">Ø</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_I5">
        <p class="Unicode-Character">Ʉ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_J5">
        <p class="Unicode-Character">Ʋ</p>
      </td>
    </tr>
    <tr class="Table111">
      <td style="text-align:left;width:1.6cm;" class="Table11_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_B6">
        <p class="Unicode-Value">0245</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_C6">
        <p class="Unicode-Value">0190</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_D6">
        <p class="Unicode-Value">018F</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_E6">
        <p class="Unicode-Value">0197</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_F6">
        <p class="Unicode-Value">0196</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_G6">
        <p class="Unicode-Value">0186</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_H6">
        <p class="Unicode-Value">00D8</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_I6">
        <p class="Unicode-Value">0244</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table11_J6">
        <p class="Unicode-Value">01B2</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table12">
    <colgroup>
      <col width="70">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
    </colgroup>
    <tr class="Table121">
      <td colspan="10" style="text-align:left;width:1.6cm;" class="Table12_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Special_Consonants_-_Small_Letters"></a>Special Consonants - Small
        Letters</h3>
      </td>
    </tr>
    <tr class="Table121">
      <td style="text-align:left;width:1.6cm;" class="Table12_A2">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; b</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; c</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; d</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; g</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="P12">] g</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; h</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">; n</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">: n</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_J2">
        <p class="Input-Character">; s</p>
      </td>
    </tr>
    <tr class="Table121">
      <td style="text-align:left;width:1.6cm;" class="Table12_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">b &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">c &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">d &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">g &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="P11">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">n &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">= n</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_J2">
        <p class="Input-Character">s &lt;</p>
      </td>
    </tr>
    <tr class="Table121">
      <td style="text-align:left;width:1.6cm;" class="Table12_A2">
        <p class="P11">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="P11">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="P11">] n</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table121">
      <td style="text-align:left;width:1.6cm;" class="Table12_A5">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_B5">
        <p class="Unicode-Character">ɓ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_C5">
        <p class="Unicode-Character">ç</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_D5">
        <p class="Unicode-Character">ɗ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_E5">
        <p class="Unicode-Character">ɠ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_F5">
        <p class="P14">ɣ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_G5">
        <p class="P4">ħ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_H5">
        <p class="Unicode-Character">ŋ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_I5">
        <p class="Unicode-Character">ɲ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_J5">
        <p class="Unicode-Character">ʃ</p>
      </td>
    </tr>
    <tr class="Table121">
      <td style="text-align:left;width:1.6cm;" class="Table12_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_B6">
        <p class="Unicode-Value">0253</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_C6">
        <p class="Unicode-Value">00E7</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_D6">
        <p class="Unicode-Value">0257</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_E6">
        <p class="Unicode-Value">0260</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_F6">
        <p class="P8">0263</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_G6">
        <p class="Unicode-Value">0127</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_H6">
        <p class="Unicode-Value">014B</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_I6">
        <p class="Unicode-Value">0272</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table12_J6">
        <p class="Unicode-Value">0283</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table13">
    <colgroup>
      <col width="70">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
      <col width="66">
    </colgroup>
    <tr class="Table131">
      <td colspan="10" style="text-align:left;width:1.6cm;" class="Table13_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Special_Consonants_-_Capital_Letters"></a>Special Consonants -
        Capital Letters</h3>
      </td>
    </tr>
    <tr class="Table131">
      <td style="text-align:left;width:1.6cm;" class="Table13_A2">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; B</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; C</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; D</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; G</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="P12">] G</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; H</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">; N</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">: N</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_J2">
        <p class="Input-Character">; S</p>
      </td>
    </tr>
    <tr class="Table131">
      <td style="text-align:left;width:1.6cm;" class="Table13_A2">
        <p class="Input-Character">or:</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">B &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">C &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">D &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">G &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">N &lt;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">= N</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_J2">
        <p class="Input-Character">S &lt;</p>
      </td>
    </tr>
    <tr class="Table131">
      <td style="text-align:left;width:1.6cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="P11">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="P11">] N</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_A2">
        <p class="Input-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_J2">
        <p class="Input-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table131">
      <td style="text-align:left;width:1.6cm;" class="Table13_A5">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_B5">
        <p class="Unicode-Character">Ɓ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_C5">
        <p class="Unicode-Character">Ç</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_D5">
        <p class="Unicode-Character">Ɗ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_E5">
        <p class="Unicode-Character">Ɠ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_F5">
        <p class="P13">Ɣ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_G5">
        <p class="P4">Ħ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_H5">
        <p class="Unicode-Character">Ŋ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_I5">
        <p class="Unicode-Character">Ɲ</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_J5">
        <p class="Unicode-Character">ʆ</p>
      </td>
    </tr>
    <tr class="Table131">
      <td style="text-align:left;width:1.6cm;" class="Table13_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_B6">
        <p class="Unicode-Value">0181</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_C6">
        <p class="Unicode-Value">00C7</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_D6">
        <p class="Unicode-Value">018A</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_E6">
        <p class="Unicode-Value">0193</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_F6">
        <p class="P8">0194</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_G6">
        <p class="Unicode-Value">012<span class="T3">6</span></p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_H6">
        <p class="Unicode-Value">014A</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_I6">
        <p class="Unicode-Value">019D</p>
      </td>
      <td style="text-align:left;width:1.499cm;" class="Table13_J6">
        <p class="Unicode-Value">0286</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table3">
    <colgroup>
      <col width="87">
      <col width="109">
      <col width="109">
      <col width="109">
      <col width="109">
      <col width="109">
    </colgroup>
    <tr class="Table31">
      <td colspan="6" style="text-align:left;width:2cm;" class="Table3_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Special_“Non-Punctuation_Word_Forming”_Characters"></a>Special
        “Non-Punctuation Word Forming” Characters</h3>
      </td>
    </tr>
    <tr class="Table31">
      <td style="text-align:left;width:2cm;" class="Table3_A2">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Input-Character">; <span class="T4">X</span></p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Input-Character">; x</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Input-Character">] &nbsp;] &nbsp;(rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Input-Character">; '</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_F2">
        <p class="Input-Character">] :</p>
      </td>
    </tr>
    <tr class="Table31">
      <td style="text-align:left;width:2cm;" class="Table3_A2">
        <p class="Unicode-Value">description:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="P1">glottal</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Unicode-Value">pharyngeal</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Unicode-Value">ejective or glottal stop</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_A2">
        <p class="Unicode-Value">saltillo - straight glottal</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_F2">
        <p class="Unicode-Value">postposed subject marker</p>
      </td>
    </tr>
    <tr class="Table31">
      <td style="text-align:left;width:2cm;" class="Table3_A4">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_B4">
        <p class="P3">ʔ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_C4">
        <p class="Unicode-Character">ʕ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_D4">
        <p class="Unicode-Character">ʼ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_E4">
        <p class="Unicode-Character">ꞌ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_F4">
        <p class="Unicode-Character">꞉</p>
      </td>
    </tr>
    <tr class="Table31">
      <td style="text-align:left;width:2cm;" class="Table3_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_B5">
        <p class="Unicode-Value">029<span class="T4">4</span></p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_C5">
        <p class="Unicode-Value">0295</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_D5">
        <p class="Unicode-Value">02BC</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_E5">
        <p class="Unicode-Value">A78C</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table3_F5">
        <p class="Unicode-Value">A789</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table9">
    <colgroup>
      <col width="70">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
    </colgroup>
    <tr class="Table91">
      <td colspan="12" style="text-align:left;width:1.6cm;" class="Table9_A1">
        <h3 class="Heading_20_3"><a id="a__Diacritics"></a>Diacritics</h3>
      </td>
    </tr>
    <tr class="Table91">
      <td colspan="12" style="text-align:left;width:1.6cm;" class="Table9_A2">
        <p class="Standard">First type the keystrokes from the leftmost column,
        followed by the keystroke at the top of the column.</p>
      </td>
    </tr>
    <tr class="Table93">
      <td style="text-align:left;width:1.6cm;" class="Table9_A3">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">3</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">4</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">5</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">6</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">7</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">8</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_A3">
        <p class="Input-Character">0</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_L3">
        <p class="Input-Character"># or [</p>
      </td>
    </tr>
    <tr class="Table91">
      <td style="text-align:left;width:1.6cm;" class="Table9_A4">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_B4">
        <p class="Unicode-Character">◌́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_C4">
        <p class="Unicode-Character">◌̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_D4">
        <p class="Unicode-Character">◌̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_E4">
        <p class="Unicode-Character">◌̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_F4">
        <p class="Unicode-Character">◌̃</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_G4">
        <p class="Unicode-Character">◌̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_H4">
        <p class="Unicode-Character">◌̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_I4">
        <p class="Unicode-Character">◌̏</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_J4">
        <p class="Unicode-Character">◌̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_K4">
        <p class="Unicode-Character">◌̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_L4">
        <p class="Unicode-Character">◌̈</p>
      </td>
    </tr>
    <tr class="Table91">
      <td style="text-align:left;width:1.6cm;" class="Table9_A5">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_B5">
        <p class="Unicode-Value">composed, else +0301</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_C5">
        <p class="Unicode-Value">composed, else +0300</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_D5">
        <p class="Unicode-Value">composed, else +0302</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_E5">
        <p class="Unicode-Value">composed, else + 030C</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_F5">
        <p class="Unicode-Value">composed, else +0303</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_G5">
        <p class="Unicode-Value">composed, else +0315</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_H5">
        <p class="Unicode-Value">composed, else +030B</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_I5">
        <p class="Unicode-Value">composed, else +030F</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_J5">
        <p class="Unicode-Value">composed, else +0304</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_K5">
        <p class="Unicode-Value">composed,</p>
        <p class="Unicode-Value">else +0331</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table9_L5">
        <p class="Unicode-Value">composed, else +0308</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table7">
    <colgroup>
      <col width="718">
    </colgroup>
    <tr class="Table71">
      <td style="text-align:left;width:16.439cm;" class="Table7_A1">
        <h3 class="Heading_20_3"><a id=
        "a__Diacritic_Reference_Table"></a>Diacritic Reference Table</h3>
      </td>
    </tr>
    <tr class="Table71">
      <td style="text-align:left;width:16.439cm;" class="Table7_A2">
        <p class="Standard">First type the keystrokes from the leftmost column,
        followed by the keystroke at the top of the column.</p>
        <p class="Standard">For example, pressing “<span class=
        "Keyboard">u</span>” and then “<span class="Keyboard">1</span>”
        produces “<span class="Keyboard">ú</span>” or pressing “<span class=
        "Keyboard">E</span>” and then “<span class="Keyboard">4</span>”
        produces “<span class="Keyboard">Ě</span>”</p>
      </td>
    </tr>
  </table>
  <table border="0" cellspacing="0" cellpadding="0" class="Table10">
    <colgroup>
      <col width="70">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
      <col width="59">
    </colgroup>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A1">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">3</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">4</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">5</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">6</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">7</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">8</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_A1">
        <p class="Input-Character">0</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L1">
        <p class="Input-Character"># or [</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">a</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B2">
        <p class="Unicode-Character">á</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C2">
        <p class="Unicode-Character">à</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D2">
        <p class="Unicode-Character">â</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E2">
        <p class="Unicode-Character">ǎ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F2">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G2">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H2">
        <p class="Unicode-Character">a̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I2">
        <p class="Unicode-Character">ȁ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J2">
        <p class="Unicode-Character">ā</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K2">
        <p class="Unicode-Character">a̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L2">
        <p class="Unicode-Character">ä</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B3">
        <p class="Unicode-Value">00E1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C3">
        <p class="Unicode-Value">00E0</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D3">
        <p class="Unicode-Value">00E2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E3">
        <p class="Unicode-Value">01CE</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H3">
        <p class="Unicode-Value">0061 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I3">
        <p class="Unicode-Value">0201</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J3">
        <p class="Unicode-Value">0101</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K3">
        <p class="Unicode-Value">0061 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L3">
        <p class="Unicode-Value">00E4</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">A</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B4">
        <p class="Unicode-Character">Á</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C4">
        <p class="Unicode-Character">À</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D4">
        <p class="Unicode-Character">Â</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E4">
        <p class="Unicode-Character">Ǎ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F4">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G4">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H4">
        <p class="Unicode-Character">A̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I4">
        <p class="Unicode-Character">Ȁ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J4">
        <p class="Unicode-Character">Ā</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K4">
        <p class="Unicode-Character">A̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L4">
        <p class="Unicode-Character">Ä</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B5">
        <p class="Unicode-Value">00C1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C5">
        <p class="Unicode-Value">00C0</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D5">
        <p class="Unicode-Value">00C2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E5">
        <p class="Unicode-Value">01CD</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F5">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G5">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H5">
        <p class="Unicode-Value">0041 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I5">
        <p class="Unicode-Value">0200</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J5">
        <p class="Unicode-Value">0100</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K5">
        <p class="Unicode-Value">0041 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L5">
        <p class="Unicode-Value">00C4</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] a</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B6">
        <p class="Unicode-Character">ʌ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C6">
        <p class="Unicode-Character">ʌ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D6">
        <p class="Unicode-Character">ʌ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E6">
        <p class="Unicode-Character">ʌ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F6">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G6">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H6">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I6">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J6">
        <p class="Unicode-Character">ʌ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K6">
        <p class="Unicode-Character">ʌ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L6">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B7">
        <p class="Unicode-Value">028C (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C7">
        <p class="Unicode-Value">028C (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D7">
        <p class="Unicode-Value">028C (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E7">
        <p class="Unicode-Value">028C (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F7">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G7">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H7">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I7">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J7">
        <p class="Unicode-Value">028C (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K7">
        <p class="Unicode-Value">028C (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L7">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] A</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B8">
        <p class="Unicode-Character">Ʌ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C8">
        <p class="Unicode-Character">Ʌ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D8">
        <p class="Unicode-Character">Ʌ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E8">
        <p class="Unicode-Character">Ʌ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F8">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G8">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H8">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I8">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J8">
        <p class="Unicode-Character">Ʌ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K8">
        <p class="Unicode-Character">Ʌ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L8">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B9">
        <p class="Unicode-Value">0245 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C9">
        <p class="Unicode-Value">0245 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D9">
        <p class="Unicode-Value">0245 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E9">
        <p class="Unicode-Value">0245 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F9">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G9">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H9">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I9">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J9">
        <p class="Unicode-Value">0245 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K9">
        <p class="Unicode-Value">0245 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L9">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">b</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B10">
        <p class="Unicode-Character">b́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L10">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B11">
        <p class="Unicode-Value">0062 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L11">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">B</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B12">
        <p class="Unicode-Character">B́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L12">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B13">
        <p class="Unicode-Value">0042 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L13">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">c</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G14">
        <p class="Unicode-Character">c̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L14">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G15">
        <p class="Unicode-Value">0063 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L15">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">C</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B16">
        <p class="Standard">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G16">
        <p class="Unicode-Character">C̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L16">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G17">
        <p class="Unicode-Value">0043 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L17">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">e</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B18">
        <p class="Unicode-Character">é</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C18">
        <p class="Unicode-Character">è</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D18">
        <p class="Unicode-Character">ê</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E18">
        <p class="Unicode-Character">ě</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F18">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G18">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H18">
        <p class="Unicode-Character">e̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I18">
        <p class="Unicode-Character">ȅ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J18">
        <p class="Unicode-Character">ē</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K18">
        <p class="Unicode-Character">e̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L18">
        <p class="Unicode-Character">ë</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B19">
        <p class="Unicode-Value">00E9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C19">
        <p class="Unicode-Value">00E8</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D19">
        <p class="Unicode-Value">00EA</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E19">
        <p class="Unicode-Value">011B</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F19">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G19">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H19">
        <p class="Unicode-Value">0065 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I19">
        <p class="Unicode-Value">0205</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J19">
        <p class="Unicode-Value">0113</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K19">
        <p class="Unicode-Value">0065 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L19">
        <p class="Unicode-Value">00EB</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B20">
        <p class="Unicode-Character">É</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C20">
        <p class="Unicode-Character">È</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D20">
        <p class="Unicode-Character">Ê</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E20">
        <p class="Unicode-Character">Ě</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F20">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G20">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H20">
        <p class="Unicode-Character">E̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I20">
        <p class="Unicode-Character">Ȅ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J20">
        <p class="Unicode-Character">Ē</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K20">
        <p class="Unicode-Character">E̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L20">
        <p class="Unicode-Character">Ë</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B21">
        <p class="Unicode-Value">00C9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C21">
        <p class="Unicode-Value">00C8</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D21">
        <p class="Unicode-Value">00CA</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E21">
        <p class="Unicode-Value">011A</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F21">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G21">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H21">
        <p class="Unicode-Value">0045 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I21">
        <p class="Unicode-Value">0204</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J21">
        <p class="Unicode-Value">0112</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K21">
        <p class="Unicode-Value">0045 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L21">
        <p class="Unicode-Value">00CB</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">; e</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B22">
        <p class="Unicode-Character">ɛ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C22">
        <p class="Unicode-Character">ɛ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D22">
        <p class="Unicode-Character">ɛ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E22">
        <p class="Unicode-Character">ɛ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F22">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G22">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H22">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I22">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J22">
        <p class="Unicode-Character">ɛ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K22">
        <p class="Unicode-Character">ɛ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L22">
        <p class="P15">ɛ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">e &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B23">
        <p class="Unicode-Value">025B (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C23">
        <p class="Unicode-Value">025B (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D23">
        <p class="Unicode-Value">025B (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E23">
        <p class="Unicode-Value">025B (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F23">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G23">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H23">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I23">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J23">
        <p class="Unicode-Value">025B (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K23">
        <p class="Unicode-Value">025B (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L23">
        <p class="Unicode-Value">025B (+03<span class="T9">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">] e</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B24">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L24">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A25">
        <p class="Input-Character">; e <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K25">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L25">
        <p class="P16">ɛ̱̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A26">
        <p class="Input-Character">e &lt; <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K26">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L26">
        <p class="P10">025B</p>
        <p class="P10">(<span class="T10">+0331</span> +03<span class=
        "T9">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A27">
        <p class="Input-Character">] e <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B27">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L27">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">; E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B28">
        <p class="Unicode-Character">Ɛ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C28">
        <p class="Unicode-Character">Ɛ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D28">
        <p class="Unicode-Character">Ɛ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E28">
        <p class="Unicode-Character">Ɛ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F28">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G28">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H28">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I28">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J28">
        <p class="Unicode-Character">Ɛ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K28">
        <p class="Unicode-Character">Ɛ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L28">
        <p class="P15">Ɛ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">E &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B29">
        <p class="Unicode-Value">0190 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C29">
        <p class="Unicode-Value">0190 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D29">
        <p class="Unicode-Value">0190 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E29">
        <p class="Unicode-Value">0190 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F29">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G29">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H29">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I29">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J29">
        <p class="Unicode-Value">0190 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K29">
        <p class="Unicode-Value">0190 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L29">
        <p class="Unicode-Value">0190 (+03<span class="T9">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">] E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B30">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L30">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A25">
        <p class="Input-Character">; E <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K31">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L31">
        <p class="P16">Ɛ̱̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A26">
        <p class="Input-Character">E &lt; <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K32">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L32">
        <p class="P10">0190</p>
        <p class="P10">(+<span class="T10">0331 +</span>03<span class=
        "T9">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A27">
        <p class="Input-Character">] E <span class="T10">0</span></p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B33">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L33">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">: e</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J34">
        <p class="Unicode-Character">ə̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L34">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">= e</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J35">
        <p class="Unicode-Value">0259 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L35">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">: E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J36">
        <p class="Unicode-Character">Ə̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L36">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">= E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J37">
        <p class="Unicode-Value">018F (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L37">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">g</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B41">
        <p class="Unicode-Character">ǵ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L41">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B41">
        <p class="Unicode-Value">0067 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A40">
        <p class="Input-Character">G</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B40">
        <p class="P5">Ǵ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L40">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B41">
        <p class="Unicode-Value">0047 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L41">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A40">
        <p class="Input-Character">i</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B42">
        <p class="Unicode-Character">í</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C42">
        <p class="Unicode-Character">ì</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D42">
        <p class="Unicode-Character">î</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E42">
        <p class="Unicode-Character">ǐ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F42">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G42">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H42">
        <p class="Unicode-Character">i̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I42">
        <p class="Unicode-Character">ȉ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J42">
        <p class="Unicode-Character">ī</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K42">
        <p class="Unicode-Character">i̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L42">
        <p class="Unicode-Character">ï</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B43">
        <p class="Unicode-Value">00ED</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C43">
        <p class="Unicode-Value">00EC</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D43">
        <p class="Unicode-Value">00EE</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E43">
        <p class="Unicode-Value">01D0</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F43">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G43">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H43">
        <p class="Unicode-Value">0069 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I43">
        <p class="Unicode-Value">0209</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J43">
        <p class="Unicode-Value">012B</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K43">
        <p class="Unicode-Value">0069 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L43">
        <p class="Unicode-Value">00EF</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">I</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B44">
        <p class="Unicode-Character">Í</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C44">
        <p class="Unicode-Character">Ì</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D44">
        <p class="Unicode-Character">Î</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E44">
        <p class="Unicode-Character">Ǐ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F44">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G44">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H44">
        <p class="Unicode-Character">I̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I44">
        <p class="Unicode-Character">Ȉ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J44">
        <p class="Unicode-Character">Ī</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K44">
        <p class="Unicode-Character">I̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L44">
        <p class="Unicode-Character">Ï</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B45">
        <p class="Unicode-Value">00CD</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C45">
        <p class="Unicode-Value">00CC</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D45">
        <p class="Unicode-Value">00CE</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E45">
        <p class="Unicode-Value">01CF</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F45">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G45">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H45">
        <p class="Unicode-Value">0049 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I45">
        <p class="Unicode-Value">0208</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J45">
        <p class="Unicode-Value">012A</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K45">
        <p class="Unicode-Value">0049 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L45">
        <p class="Unicode-Value">00CF</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; i</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B47">
        <p class="Unicode-Character">ɨ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C47">
        <p class="Unicode-Character">ɨ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D47">
        <p class="Unicode-Character">ɨ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E47">
        <p class="Unicode-Character">ɨ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F47">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G47">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H47">
        <p class="Unicode-Character">ɨ̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I47">
        <p class="Unicode-Character">ɨ̏</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J47">
        <p class="Unicode-Character">ɨ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K47">
        <p class="Unicode-Character">ɨ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L47">
        <p class="Unicode-Character">ɨ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">i &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B47">
        <p class="Unicode-Value">0268 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C47">
        <p class="Unicode-Value">0268 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D47">
        <p class="Unicode-Value">0268 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E47">
        <p class="Unicode-Value">0268 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F47">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G47">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H47">
        <p class="Unicode-Value">0268 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I47">
        <p class="Unicode-Value">0268 (+030F)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J47">
        <p class="Unicode-Value">0268 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K47">
        <p class="Unicode-Value">0268 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L47">
        <p class="Unicode-Value">0268 (+0308)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">i =</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E48">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L48">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; I</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B50">
        <p class="Unicode-Character">Ɨ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C50">
        <p class="Unicode-Character">Ɨ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D50">
        <p class="Unicode-Character">Ɨ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E50">
        <p class="Unicode-Character">Ɨ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F50">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G50">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H50">
        <p class="Unicode-Character">Ɨ̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I50">
        <p class="Unicode-Character">Ɨ̏</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J50">
        <p class="Unicode-Character">Ɨ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K50">
        <p class="Unicode-Character">Ɨ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L50">
        <p class="Unicode-Character">Ɨ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">I &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B50">
        <p class="Unicode-Value">0197 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C50">
        <p class="Unicode-Value">0197 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D50">
        <p class="Unicode-Value">0197 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E50">
        <p class="Unicode-Value">0197 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F50">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G50">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H50">
        <p class="Unicode-Value">0197 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I50">
        <p class="Unicode-Value">0197 (+030F)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J50">
        <p class="Unicode-Value">0197 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K50">
        <p class="Unicode-Value">0197 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L50">
        <p class="Unicode-Value">0197 (+0308)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">I =</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E51">
        <p class="P2">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L51">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] i</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B52">
        <p class="Unicode-Character">ɩ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C52">
        <p class="Unicode-Character">ɩ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D52">
        <p class="Unicode-Character">ɩ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E52">
        <p class="Unicode-Character">ɩ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F52">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G52">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H52">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I52">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J52">
        <p class="Unicode-Character">ɩ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K52">
        <p class="Unicode-Character">ɩ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L52">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B53">
        <p class="Unicode-Value">0269 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C53">
        <p class="Unicode-Value">0269 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D53">
        <p class="Unicode-Value">0269 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E53">
        <p class="Unicode-Value">0269 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F53">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G53">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H53">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I53">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J53">
        <p class="Unicode-Value">0269 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K53">
        <p class="Unicode-Value">0269 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L53">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] I</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B54">
        <p class="Unicode-Character">Ɩ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C54">
        <p class="Unicode-Character">Ɩ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D54">
        <p class="Unicode-Character">ɩ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E54">
        <p class="Unicode-Character">ɩ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F54">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G54">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H54">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I54">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J54">
        <p class="Unicode-Character">Ɩ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K54">
        <p class="Unicode-Character">Ɩ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L54">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B55">
        <p class="Unicode-Value">0196 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C55">
        <p class="Unicode-Value">0196 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D55">
        <p class="Unicode-Value">0196 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E55">
        <p class="Unicode-Value">0196 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F55">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G55">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H55">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I55">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J55">
        <p class="Unicode-Value">0196 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K55">
        <p class="Unicode-Value">0196 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L55">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">k</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G56">
        <p class="Unicode-Character">k̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L56">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G57">
        <p class="Unicode-Value">006B (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L57">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">K</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G58">
        <p class="Unicode-Character">K̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L58">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G59">
        <p class="Unicode-Value">004B (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L59">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">m</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B60">
        <p class="Unicode-Character">ḿ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C60">
        <p class="Unicode-Character">m̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J60">
        <p class="Unicode-Character">m̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L60">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B61">
        <p class="Unicode-Value">1E3F</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C61">
        <p class="Unicode-Value">006D (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J61">
        <p class="Unicode-Value">006D (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L61">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">M</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B62">
        <p class="Unicode-Character">Ḿ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C62">
        <p class="Unicode-Character">M̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J62">
        <p class="Unicode-Character">M̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L62">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B63">
        <p class="Unicode-Value">1E3E</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C63">
        <p class="Unicode-Value">004D &nbsp;+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J63">
        <p class="Unicode-Value">004D (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L63">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">n</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B64">
        <p class="Unicode-Character">ń</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C64">
        <p class="Unicode-Character">ǹ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F64">
        <p class="Unicode-Character">ñ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J64">
        <p class="Unicode-Character">n̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L64">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B65">
        <p class="Unicode-Value">0144</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C65">
        <p class="Unicode-Value">006E &nbsp;+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F65">
        <p class="Unicode-Value">00F1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J65">
        <p class="Unicode-Value">006E (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L65">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">N</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B66">
        <p class="Unicode-Character">Ń</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C66">
        <p class="Unicode-Character">Ǹ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F66">
        <p class="Unicode-Character">Ñ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J66">
        <p class="Unicode-Character">N̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L66">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B67">
        <p class="Unicode-Value">0143</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C67">
        <p class="Unicode-Value">004E (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F67">
        <p class="Unicode-Value">00D1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J67">
        <p class="Unicode-Value">004E (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L67">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; n</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B68">
        <p class="Unicode-Character">ŋ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J68">
        <p class="Unicode-Character">ŋ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L68">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">n &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B69">
        <p class="Unicode-Value">014B (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J69">
        <p class="Unicode-Value">014B (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L69">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; N</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B70">
        <p class="Unicode-Character">Ŋ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J70">
        <p class="Unicode-Character">Ŋ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L70">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">N &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B71">
        <p class="Unicode-Value">014A (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J71">
        <p class="Unicode-Value">014A (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L71">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">o</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B72">
        <p class="Unicode-Character">ó</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C72">
        <p class="Unicode-Character">ò</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D72">
        <p class="Unicode-Character">ô</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E72">
        <p class="Unicode-Character">ǒ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F72">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G72">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H72">
        <p class="Unicode-Character">ő</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I72">
        <p class="Unicode-Character">ȍ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J72">
        <p class="Unicode-Character">ō</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K72">
        <p class="Unicode-Character">o̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L72">
        <p class="Unicode-Character">ö</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B73">
        <p class="Unicode-Value">00F3</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C73">
        <p class="Unicode-Value">00F2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D73">
        <p class="Unicode-Value">00F4</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E73">
        <p class="Unicode-Value">01D2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F73">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G73">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H73">
        <p class="Unicode-Value">0151</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I73">
        <p class="Unicode-Value">020D</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J73">
        <p class="Unicode-Value">014D</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K73">
        <p class="Unicode-Value">006F (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L73">
        <p class="Unicode-Value">00F6</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">O</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B74">
        <p class="Unicode-Character">Ó</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C74">
        <p class="Unicode-Character">Ò</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D74">
        <p class="Unicode-Character">Ô</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E74">
        <p class="Unicode-Character">Ǒ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F74">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G74">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H74">
        <p class="Unicode-Character">Ő</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I74">
        <p class="Unicode-Character">Ȍ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J74">
        <p class="Unicode-Character">Ō</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K74">
        <p class="Unicode-Character">O̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L74">
        <p class="Unicode-Character">Ö</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B75">
        <p class="Unicode-Value">00D3</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C75">
        <p class="Unicode-Value">00D2</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D75">
        <p class="Unicode-Value">00D4</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E75">
        <p class="Unicode-Value">01D1</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F75">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G75">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H75">
        <p class="Unicode-Value">0150</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I75">
        <p class="Unicode-Value">020C</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J75">
        <p class="Unicode-Value">014C</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K75">
        <p class="Unicode-Value">004F (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L75">
        <p class="Unicode-Value">00D6</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">; o</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B76">
        <p class="Unicode-Character">ɔ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C76">
        <p class="Unicode-Character">ɔ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D76">
        <p class="Unicode-Character">ɔ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E76">
        <p class="Unicode-Character">ɔ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F76">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G76">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H76">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I76">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J76">
        <p class="Unicode-Character">ɔ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K76">
        <p class="Unicode-Character">ɔ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L76">
        <p class="P17">ɔ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">o &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B77">
        <p class="Unicode-Value">0254 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C77">
        <p class="Unicode-Value">0254 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D77">
        <p class="Unicode-Value">0254 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E77">
        <p class="Unicode-Value">0254 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F77">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G77">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H77">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I77">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J77">
        <p class="Unicode-Value">0254 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K77">
        <p class="Unicode-Value">0254 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L77">
        <p class="Unicode-Value">0254 (+03<span class="T11">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">] o</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L78">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">; O</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B79">
        <p class="Unicode-Character">Ɔ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C79">
        <p class="Unicode-Character">Ɔ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D79">
        <p class="Unicode-Character">Ɔ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E79">
        <p class="Unicode-Character">Ɔ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F79">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G79">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H79">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I79">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J79">
        <p class="Unicode-Character">Ɔ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K79">
        <p class="Unicode-Character">Ɔ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L79">
        <p class="P17">Ɔ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">O &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B80">
        <p class="Unicode-Value">0186 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C80">
        <p class="Unicode-Value">0186 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D80">
        <p class="Unicode-Value">0186 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E80">
        <p class="Unicode-Value">0186 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F80">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G80">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H80">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I80">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J80">
        <p class="Unicode-Value">0186 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K80">
        <p class="Unicode-Value">0186 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L80">
        <p class="Unicode-Value">0186 (+03<span class="T11">08</span>)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">] O</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L81">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">s</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G82">
        <p class="Unicode-Character">s̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L82">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G83">
        <p class="Unicode-Value">0073 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L83">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">S</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G84">
        <p class="Unicode-Character">S̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L84">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G85">
        <p class="Unicode-Value">0053 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L85">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">t</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B86">
        <p class="Unicode-Character">t́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G86">
        <p class="Unicode-Character">t̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L86">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B87">
        <p class="Unicode-Value">0074 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G87">
        <p class="Unicode-Value">0074 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L87">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">T</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B88">
        <p class="Unicode-Character">T́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G88">
        <p class="Unicode-Character">T̕</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L88">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B89">
        <p class="Unicode-Value">0054 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G89">
        <p class="Unicode-Value">0054 (+0315)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L89">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">u</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B90">
        <p class="Unicode-Character">ú</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C90">
        <p class="Unicode-Character">ù</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D90">
        <p class="Unicode-Character">û</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E90">
        <p class="Unicode-Character">ǔ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F90">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G90">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H90">
        <p class="Unicode-Character">ű</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I90">
        <p class="Unicode-Character">ȕ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J90">
        <p class="Unicode-Character">ū</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K90">
        <p class="Unicode-Character">u̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L90">
        <p class="Unicode-Character">ü</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B91">
        <p class="Unicode-Value">00FA</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C91">
        <p class="Unicode-Value">00F9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D91">
        <p class="Unicode-Value">00FB</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E91">
        <p class="Unicode-Value">01D4</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F91">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G91">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H91">
        <p class="Unicode-Value">0171</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I91">
        <p class="Unicode-Value">0215</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J91">
        <p class="Unicode-Value">016B</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K91">
        <p class="Unicode-Value">0075 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L91">
        <p class="Unicode-Value">00FC</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">U</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B92">
        <p class="Unicode-Character">Ú</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C92">
        <p class="Unicode-Character">Ù</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D92">
        <p class="Unicode-Character">Û</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E92">
        <p class="Unicode-Character">Ǔ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F92">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G92">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H92">
        <p class="Unicode-Character">Ű</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I92">
        <p class="Unicode-Character">Ȕ</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J92">
        <p class="Unicode-Character">Ū</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K92">
        <p class="Unicode-Character">U̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L92">
        <p class="Unicode-Character">Ü</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B93">
        <p class="Unicode-Value">00DA</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C93">
        <p class="Unicode-Value">00D9</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D93">
        <p class="Unicode-Value">00DB</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E93">
        <p class="Unicode-Value">01D3</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F93">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G93">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H93">
        <p class="Unicode-Value">0170</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I93">
        <p class="Unicode-Value">0214</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J93">
        <p class="Unicode-Value">016A</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K93">
        <p class="Unicode-Value">0055 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L93">
        <p class="Unicode-Value">00DC</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; u</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B94">
        <p class="Unicode-Character">ʉ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C94">
        <p class="Unicode-Character">ʉ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D94">
        <p class="Unicode-Character">ʉ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E94">
        <p class="Unicode-Character">ʉ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F94">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G94">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H94">
        <p class="Unicode-Character">ʉ̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I94">
        <p class="Unicode-Character">ʉ̏</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J94">
        <p class="Unicode-Character">ʉ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K94">
        <p class="Unicode-Character">ʉ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L94">
        <p class="Unicode-Character">ʉ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">u &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B95">
        <p class="Unicode-Value">0289 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C95">
        <p class="Unicode-Value">0289 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D95">
        <p class="Unicode-Value">0289 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E95">
        <p class="Unicode-Value">0289 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F95">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G95">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H95">
        <p class="Unicode-Value">0289 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I95">
        <p class="Unicode-Value">0289 (+030F)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J95">
        <p class="Unicode-Value">0289 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K95">
        <p class="Unicode-Value">0289 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L95">
        <p class="Unicode-Value">0289 (+0308)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">u =</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L96">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">; U</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B97">
        <p class="Unicode-Character">Ʉ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C97">
        <p class="Unicode-Character">Ʉ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D97">
        <p class="Unicode-Character">Ʉ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E97">
        <p class="Unicode-Character">Ʉ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F97">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G97">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H97">
        <p class="Unicode-Character">Ʉ̋</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I97">
        <p class="Unicode-Character">Ʉ̏</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J97">
        <p class="Unicode-Character">Ʉ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K97">
        <p class="Unicode-Character">Ʉ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L97">
        <p class="Unicode-Character">Ʉ̈</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A2">
        <p class="Input-Character">U &lt;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B98">
        <p class="Unicode-Value">0244 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C98">
        <p class="Unicode-Value">0244 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D98">
        <p class="Unicode-Value">0244 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E98">
        <p class="Unicode-Value">0244 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F98">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G98">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H98">
        <p class="Unicode-Value">0244 (+030B)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I98">
        <p class="Unicode-Value">0244 (+030F)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J98">
        <p class="Unicode-Value">0244 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K98">
        <p class="Unicode-Value">0244 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L98">
        <p class="Unicode-Value">0244 (+0308)</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Input-Character">U =</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L99">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] u</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B100">
        <p class="Unicode-Character">ʋ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C100">
        <p class="Unicode-Character">ʋ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D100">
        <p class="Unicode-Character">ʋ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E100">
        <p class="Unicode-Character">ʋ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F100">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G100">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H100">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I100">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J100">
        <p class="Unicode-Character">ʋ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K100">
        <p class="Unicode-Character">ʋ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L100">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B101">
        <p class="Unicode-Value">028B (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C101">
        <p class="Unicode-Value">028B (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D101">
        <p class="Unicode-Value">028B (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E101">
        <p class="Unicode-Value">028B (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F101">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G101">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H101">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I101">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J101">
        <p class="Unicode-Value">028B (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K101">
        <p class="Unicode-Value">028B (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L101">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A4">
        <p class="Input-Character">] U</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B102">
        <p class="Unicode-Character">Ʋ́</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C102">
        <p class="Unicode-Character">Ʋ̀</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D102">
        <p class="Unicode-Character">Ʋ̂</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E102">
        <p class="Unicode-Character">Ʋ̌</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F102">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G102">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H102">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I102">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J102">
        <p class="Unicode-Character">Ʋ̄</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K102">
        <p class="Unicode-Character">Ʋ̱</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L102">
        <p class="Unicode-Character">&nbsp;</p>
      </td>
    </tr>
    <tr class="Table101">
      <td style="text-align:left;width:1.6cm;" class="Table10_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_B103">
        <p class="Unicode-Value">01B2 (+0301)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_C103">
        <p class="Unicode-Value">01B2 (+0300)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_D103">
        <p class="Unicode-Value">01B2 (+0302)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_E103">
        <p class="Unicode-Value">01B2 (+030C)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_F103">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_G103">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_H103">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_I103">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_J103">
        <p class="Unicode-Value">01B2 (+0304)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_K103">
        <p class="Unicode-Value">01B2 (+0331)</p>
      </td>
      <td style="text-align:left;width:1.349cm;" class="Table10_L103">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table21">
    <colgroup>
      <col width="87">
      <col width="109">
      <col width="109">
      <col width="109">
      <col width="109">
      <col width="109">
    </colgroup>
    <tr class="Table211">
      <td colspan="6" style="text-align:left;width:2cm;" class="Table21_A1">
        <h3 class="Heading_20_3"><a id="a__Punctuation"></a>Punctuation</h3>
      </td>
    </tr>
    <tr class="Table211">
      <td colspan="6" style="text-align:left;width:2cm;" class="Table21_A2">
        <p class="Standard">The keystrokes are at the top of the column.</p>
        <p class="Standard">“Rota” keying example:</p>
        <p class="Standard"><span>&nbsp;Pressing “&nbsp;<span class=
        "Keyboard">'</span>&nbsp;” one time produces “&nbsp;<span class=
        "Keyboard">ʻ</span>&nbsp;”</span></p>
        <p class="Standard"><span>&nbsp;Pressing “&nbsp;<span class=
        "Keyboard">'</span>&nbsp;” a second time produces “&nbsp;<span class=
        "Keyboard">ʼ</span>&nbsp;”</span></p>
        <p class="Standard"><span>&nbsp;Pressing “&nbsp;<span class=
        "Keyboard">'</span>&nbsp;” a third time produces “&nbsp;<span class=
        "Keyboard">'</span>&nbsp;”</span></p>
        <p class="Standard"><span>&nbsp;Pressing “&nbsp;<span class=
        "Keyboard">'</span>&nbsp;” a fourth time cycles to produce
        “&nbsp;<span class="Keyboard">ʼ</span>&nbsp;” again</span></p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A3">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">" &nbsp;(rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">" " &nbsp;(rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">" " " (rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">&lt; &nbsp;"</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F3">
        <p class="Input-Character">&gt; &nbsp;"</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A4">
        <p class="Unicode-Value">description:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A4">
        <p class="Unicode-Value">opening double quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A4">
        <p class="Unicode-Value">closing double quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A4">
        <p class="Unicode-Value">straight double quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A4">
        <p class="Unicode-Value">opening double angle quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F4">
        <p class="Unicode-Value">closing double angle quote</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A5">
        <p class="Standard">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_B5">
        <p class="Unicode-Character">“</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_C5">
        <p class="Unicode-Character">”</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_D5">
        <p class="Unicode-Character">"</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_E5">
        <p class="Unicode-Character">«</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F5">
        <p class="Unicode-Character">»</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_B6">
        <p class="Unicode-Value">201C</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_C6">
        <p class="Unicode-Value">201D</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_D6">
        <p class="Unicode-Value">0022</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_E6">
        <p class="Unicode-Value">00AB</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F6">
        <p class="Unicode-Value">00BB</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A3">
        <p class="Input-Character">keys:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">' &nbsp;(rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">' ' &nbsp;(rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">' ' ' (rota)</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Input-Character">&lt; &nbsp;'</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F3">
        <p class="Input-Character">&gt; &nbsp;'</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A3">
        <p class="Unicode-Value">description:</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Unicode-Value">opening single quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Unicode-Value">closing single quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Unicode-Value">straight single quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_A3">
        <p class="Unicode-Value">opening angle quote</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F3">
        <p class="Unicode-Value">closing angle quote</p>
      </td>
    </tr>
    <tr class="Table211">
      <td style="text-align:left;width:2cm;" class="Table21_A5">
        <p class="Standard">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_B9">
        <p class="Unicode-Character">ʻ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_C9">
        <p class="Unicode-Character">ʼ</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_D9">
        <p class="Unicode-Character">'</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_E9">
        <p class="Unicode-Character">‹</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F9">
        <p class="Unicode-Character">›</p>
      </td>
    </tr>
    <tr class="Table2110">
      <td style="text-align:left;width:2cm;" class="Table21_A3">
        <p class="Unicode-Value">&nbsp;</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_B10">
        <p class="Unicode-Value">2018</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_C10">
        <p class="Unicode-Value">2019</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_D10">
        <p class="Unicode-Value">0027</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_E10">
        <p class="Unicode-Value">2039</p>
      </td>
      <td style="text-align:left;width:2.499cm;" class="Table21_F10">
        <p class="Unicode-Value">203A</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <h3 class="P7"><a id="a__License"></a>License</h3>
  <p class="Standard">This keyboard is copyright © <span class=
  "T6">2017-2019</span> SIL Ethiopia. It is distributed under the MIT free
  software license:</p>
  <table border="0" cellspacing="0" cellpadding="0" class="Table2">
    <colgroup>
      <col width="683">
    </colgroup>
    <tr class="Table21">
      <td style="text-align:left;width:15.626cm;" class="Table2_A1">
        <h5 class="Heading_20_5"><a id="a__The_MIT_License__MIT_"></a>The MIT
        License (MIT)</h5>
        <p class="Standard">Permission is hereby granted, free of charge, to
        any person obtaining a copy of this software and associated
        documentation files (the "Software"), to deal in the Software without
        restriction, including without limitation the rights to use, copy,
        modify, merge, publish, distribute, sublicense, and/or sell copies of
        the Software, and to permit persons to whom the Software is furnished
        to do so, subject to the following conditions: The above copyright
        notice and this permission notice shall be included in all copies or
        substantial portions of the Software. THE SOFTWARE IS PROVIDED "AS IS",
        WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
        LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
        PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
        HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
        AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
        CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
        SOFTWARE.</p>
      </td>
    </tr>
  </table>
  <p class="Standard">&nbsp;</p>
  <h3 class="Heading_20_3"><a id="a__Note_on_this_Document"></a>Note on this
  Document</h3>
  <p class="Standard">This document was originally created as an .odt file
  using <a href="http://www.libreoffice.org/" class=
  "Internet_20_link">LibreOffice</a> and then converted to PDF. The HTML
  variant of this document was created using LibreOffice’s Export feature, and
  then was cleaned up using <a href="http://www.html-tidy.org/" class=
  "Internet_20_link">tidy</a> with this command:</p>
  <p class="Code"><span>&nbsp;tidy -w 80 -i -utf8 -ashtml -o output-file.html
  input-file.html</span></p>
  <h3 class="Heading_20_3"><a id="a__Technical_Support"></a>Technical
  Support</h3>
  <p class="Standard">For limited technical support, please contact:</p>
  <p class="Standard"><span class="T1">&nbsp; &nbsp; &nbsp; &nbsp;
  Website:</span> <a href="http://www.silethiopia.org/" class=
  "Internet_20_link"><span class="T1">www.silethiopia.org</span></a></p>
  <p class="Standard"><span class="T1">&nbsp; &nbsp; &nbsp; &nbsp;
  Email:</span> <a href="mailto:computer_ethiopia@sil.org" class=
  "Internet_20_link"><span class="T1">computer_</span></a><a href=
  "mailto:computer_ethiopia@sil.org" class="Internet_20_link"><span class=
  "T2">ethiopia</span></a><a href="mailto:computer_ethiopia@sil.org" class=
  "Internet_20_link"><span class="T1">@sil.org</span></a></p>
