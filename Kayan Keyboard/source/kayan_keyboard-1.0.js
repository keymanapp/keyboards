KeymanWeb.KR(new Keyboard_kayan_keyboard());
function Keyboard_kayan_keyboard()
{
  this.KI="Keyboard_kayan_keyboard";
  this.KN="Kayan Keyboard";
  this.KV=null;
  this.KH='';
  this.KM=0;
  this.KBVER="1.0";
  this.KVKD="T_Macron T_Q";
  this.KVKL={
  "phone": {
    "font": "Charis SIL",
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "T_Q",
                "text": "-"
              },
              {
                "id": "K_W",
                "text": "w"
              },
              {
                "id": "K_E",
                "text": "e"
              },
              {
                "id": "K_R",
                "text": "r"
              },
              {
                "id": "K_T",
                "text": "t"
              },
              {
                "id": "K_Y",
                "text": "y"
              },
              {
                "id": "K_U",
                "text": "u"
              },
              {
                "id": "K_I",
                "text": "i"
              },
              {
                "id": "K_O",
                "text": "o"
              },
              {
                "id": "K_P",
                "text": "p"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "a",
                "pad": ""
              },
              {
                "id": "K_S",
                "text": "s"
              },
              {
                "id": "K_D",
                "text": "d"
              },
              {
                "id": "K_F",
                "text": "̀"
              },
              {
                "id": "K_G",
                "text": "g"
              },
              {
                "id": "K_H",
                "text": "h"
              },
              {
                "id": "K_J",
                "text": "̂"
              },
              {
                "id": "K_K",
                "text": "k"
              },
              {
                "id": "K_L",
                "text": "l"
              },
              {
                "id": "T_Macron",
                "text": "̄",
                "pad": "",
                "width": ""
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "sp": "1",
                "nextlayer": "shift"
              },
              {
                "id": "K_Z",
                "text": "́"
              },
              {
                "id": "K_X",
                "text": "̂̌"
              },
              {
                "id": "K_C",
                "text": "c"
              },
              {
                "id": "K_V",
                "text": "̌"
              },
              {
                "id": "K_B",
                "text": "b"
              },
              {
                "id": "K_N",
                "text": "n"
              },
              {
                "id": "K_M",
                "text": "m"
              },
              {
                "id": "K_PERIOD",
                "text": ".",
                "sk": [
                  {
                    "text": ",",
                    "id": "K_COMMA"
                  },
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "?",
                    "id": "K_SLASH",
                    "layer": "shift"
                  },
                  {
                    "text": "'",
                    "id": "K_QUOTE"
                  },
                  {
                    "text": "\"",
                    "id": "K_QUOTE",
                    "layer": "shift"
                  },
                  {
                    "text": "\\",
                    "id": "K_BKSLASH"
                  },
                  {
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": ";",
                    "id": "K_COLON"
                  }
                ]
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "100",
                "sp": "1"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "width": "150",
                "sp": "1",
                "nextlayer": "numeric"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "610",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "150",
                "sp": "1"
              }
            ]
          }
        ]
      },
      {
        "id": "shift",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "T_Q",
                "text": "q"
              },
              {
                "id": "K_W",
                "text": "W"
              },
              {
                "id": "K_E",
                "text": "E"
              },
              {
                "id": "K_R",
                "text": "R"
              },
              {
                "id": "K_T",
                "text": "T"
              },
              {
                "id": "K_Y",
                "text": "Y"
              },
              {
                "id": "K_U",
                "text": "U"
              },
              {
                "id": "K_I",
                "text": "I"
              },
              {
                "id": "K_O",
                "text": "O"
              },
              {
                "id": "K_P",
                "text": "P"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "A",
                "pad": ""
              },
              {
                "id": "K_S",
                "text": "S"
              },
              {
                "id": "K_D",
                "text": "D"
              },
              {
                "id": "K_F",
                "text": "f"
              },
              {
                "id": "K_G",
                "text": "G"
              },
              {
                "id": "K_H",
                "text": "H"
              },
              {
                "id": "K_J",
                "text": "j"
              },
              {
                "id": "K_K",
                "text": "K"
              },
              {
                "id": "K_L",
                "text": "L"
              },
              {
                "id": "T_Macron",
                "text": "-"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "sp": "2",
                "nextlayer": "default"
              },
              {
                "id": "K_Z",
                "text": "z"
              },
              {
                "id": "K_X",
                "text": "x"
              },
              {
                "id": "K_C",
                "text": "C"
              },
              {
                "id": "K_V",
                "text": "v"
              },
              {
                "id": "K_B",
                "text": "B"
              },
              {
                "id": "K_N",
                "text": "N"
              },
              {
                "id": "K_M",
                "text": "M"
              },
              {
                "id": "K_PERIOD",
                "text": ".",
                "sk": [
                  {
                    "text": ",",
                    "id": "K_COMMA",
                    "layer": "default"
                  },
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "?",
                    "id": "K_SLASH",
                    "layer": "shift"
                  },
                  {
                    "text": "'",
                    "id": "K_QUOTE",
                    "layer": "default"
                  },
                  {
                    "text": "\"",
                    "id": "K_QUOTE",
                    "layer": "shift"
                  },
                  {
                    "text": "\\",
                    "id": "K_BKSLASH",
                    "layer": "default"
                  },
                  {
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": ";",
                    "id": "K_COLON",
                    "layer": "default"
                  }
                ]
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "sp": "1"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "width": "150",
                "sp": "1",
                "nextlayer": "numeric"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "610",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "150",
                "sp": "1"
              }
            ]
          }
        ]
      },
      {
        "id": "numeric",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_1",
                "text": "1"
              },
              {
                "id": "K_2",
                "text": "2"
              },
              {
                "id": "K_3",
                "text": "3"
              },
              {
                "id": "K_4",
                "text": "4"
              },
              {
                "id": "K_5",
                "text": "5"
              },
              {
                "id": "K_6",
                "text": "6"
              },
              {
                "id": "K_7",
                "text": "7"
              },
              {
                "id": "K_8",
                "text": "8"
              },
              {
                "id": "K_9",
                "text": "9"
              },
              {
                "id": "K_0",
                "text": "0"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_4",
                "text": "$",
                "pad": "50",
                "layer": "shift"
              },
              {
                "id": "K_2",
                "text": "@",
                "layer": "shift"
              },
              {
                "id": "K_3",
                "text": "#",
                "layer": "shift"
              },
              {
                "id": "K_5",
                "text": "%",
                "layer": "shift"
              },
              {
                "id": "K_6",
                "text": "&",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "_",
                "layer": "shift"
              },
              {
                "id": "K_EQUAL",
                "text": "=",
                "layer": "default"
              },
              {
                "id": "K_BKSLASH",
                "text": "|",
                "layer": "shift"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\",
                "layer": "default"
              },
              {
                "id": "T_new_88",
                "text": "",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_LBRKT",
                "text": "[",
                "pad": "110",
                "sk": [
                  {
                    "id": "U_00AB",
                    "text": "«"
                  },
                  {
                    "id": "K_COMMA",
                    "text": "<",
                    "layer": "shift"
                  },
                  {
                    "id": "K_LBRKT",
                    "text": "{",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_9",
                "text": "(",
                "layer": "shift"
              },
              {
                "id": "K_0",
                "text": ")",
                "layer": "shift"
              },
              {
                "id": "K_RBRKT",
                "text": "]",
                "sk": [
                  {
                    "id": "U_00BB",
                    "text": "»"
                  },
                  {
                    "id": "K_PERIOD",
                    "text": ">",
                    "layer": "shift"
                  },
                  {
                    "id": "K_RBRKT",
                    "text": "}",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_EQUAL",
                "text": "+",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "-"
              },
              {
                "id": "K_8",
                "text": "*",
                "layer": "shift"
              },
              {
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "100",
                "sp": "1"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_LOWER",
                "text": "*abc*",
                "width": "150",
                "sp": "1",
                "nextlayer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "610",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "150",
                "sp": "1"
              }
            ]
          }
        ]
      }
    ]
  }
}
;
  this.s11="desktop native";
  this.s12="desktop native";
  this.s13="desktop native";
  this.s14="desktop native";
  this.s15="desktop native";
  this.s16="desktop native";
  this.KVER="10.0.836.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e,16384,86)&&k.KIFS(31,this.s11,t)) {   // Line 11
      r=m=1;
      k.KO(0,t,"V");
    }
    else if(k.KKM(e,16384,88)&&k.KIFS(31,this.s12,t)) {   // Line 12
      r=m=1;
      k.KO(0,t,"X");
    }
    else if(k.KKM(e,16384,90)&&k.KIFS(31,this.s13,t)) {   // Line 13
      r=m=1;
      k.KO(0,t,"Z");
    }
    else if(k.KKM(e,16384,74)&&k.KIFS(31,this.s14,t)) {   // Line 14
      r=m=1;
      k.KO(0,t,"J");
    }
    else if(k.KKM(e,16384,70)&&k.KIFS(31,this.s15,t)) {   // Line 15
      r=m=1;
      k.KO(0,t,"F");
    }
    else if(k.KKM(e,16384,81)&&k.KIFS(31,this.s16,t)) {   // Line 16
      r=m=1;
      k.KO(0,t,"Q");
    }
    else if(k.KKM(e,16400,226)) {   // Line 27
      r=m=1;
      k.KO(0,t,"|");
    }
    else if(k.KKM(e,16384,226)) {   // Line 66
      r=m=1;
      k.KO(0,t,"\\");
    }
    else if(k.KKM(e,16384,256)) {   // Line 113
      r=m=1;
      k.KO(0,t,"̄");
    }
    else if(k.KKM(e,16400,256)) {   // Line 114
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e,16384,257)) {   // Line 115
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e,16400,257)) {   // Line 116
      r=m=1;
      k.KO(0,t,"q");
    }
    else if(k.KKM(e,16400,49)) {   // Line 63
      r=m=1;
      k.KO(0,t,"!");
    }
    else if(k.KKM(e,16400,222)) {   // Line 28
      r=m=1;
      k.KO(0,t,"\"");
    }
    else if(k.KKM(e,16400,51)) {   // Line 61
      r=m=1;
      k.KO(0,t,"#");
    }
    else if(k.KKM(e,16400,52)) {   // Line 60
      r=m=1;
      k.KO(0,t,"$");
    }
    else if(k.KKM(e,16400,53)) {   // Line 59
      r=m=1;
      k.KO(0,t,"%");
    }
    else if(k.KKM(e,16400,55)) {   // Line 57
      r=m=1;
      k.KO(0,t,"&");
    }
    else if(k.KKM(e,16384,222)) {   // Line 72
      r=m=1;
      k.KO(0,t,"'");
    }
    else if(k.KKM(e,16400,57)) {   // Line 55
      r=m=1;
      k.KO(0,t,"(");
    }
    else if(k.KKM(e,16400,48)) {   // Line 54
      r=m=1;
      k.KO(0,t,")");
    }
    else if(k.KKM(e,16400,56)) {   // Line 56
      r=m=1;
      k.KO(0,t,"*");
    }
    else if(k.KKM(e,16400,187)) {   // Line 52
      r=m=1;
      k.KO(0,t,"+");
    }
    else if(k.KKM(e,16384,188)) {   // Line 69
      r=m=1;
      k.KO(0,t,",");
    }
    else if(k.KKM(e,16384,189)) {   // Line 78
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e,16384,190)) {   // Line 70
      r=m=1;
      k.KO(0,t,".");
    }
    else if(k.KKM(e,16384,191)) {   // Line 71
      r=m=1;
      k.KO(0,t,"/");
    }
    else if(k.KKM(e,16384,48)) {   // Line 79
      r=m=1;
      k.KO(0,t,"0");
    }
    else if(k.KKM(e,16384,49)) {   // Line 88
      r=m=1;
      k.KO(0,t,"1");
    }
    else if(k.KKM(e,16384,50)) {   // Line 87
      r=m=1;
      k.KO(0,t,"2");
    }
    else if(k.KKM(e,16384,51)) {   // Line 86
      r=m=1;
      k.KO(0,t,"3");
    }
    else if(k.KKM(e,16384,52)) {   // Line 85
      r=m=1;
      k.KO(0,t,"4");
    }
    else if(k.KKM(e,16384,53)) {   // Line 84
      r=m=1;
      k.KO(0,t,"5");
    }
    else if(k.KKM(e,16384,54)) {   // Line 83
      r=m=1;
      k.KO(0,t,"6");
    }
    else if(k.KKM(e,16384,55)) {   // Line 82
      r=m=1;
      k.KO(0,t,"7");
    }
    else if(k.KKM(e,16384,56)) {   // Line 81
      r=m=1;
      k.KO(0,t,"8");
    }
    else if(k.KKM(e,16384,57)) {   // Line 80
      r=m=1;
      k.KO(0,t,"9");
    }
    else if(k.KKM(e,16400,186)) {   // Line 29
      r=m=1;
      k.KO(0,t,":");
    }
    else if(k.KKM(e,16384,186)) {   // Line 73
      r=m=1;
      k.KO(0,t,";");
    }
    else if(k.KKM(e,16400,188)) {   // Line 19
      r=m=1;
      k.KO(0,t,"<");
    }
    else if(k.KKM(e,16384,187)) {   // Line 77
      r=m=1;
      k.KO(0,t,"=");
    }
    else if(k.KKM(e,16400,190)) {   // Line 18
      r=m=1;
      k.KO(0,t,">");
    }
    else if(k.KKM(e,16400,191)) {   // Line 17
      r=m=1;
      k.KO(0,t,"?");
    }
    else if(k.KKM(e,16400,50)) {   // Line 62
      r=m=1;
      k.KO(0,t,"@");
    }
    else if(k.KKM(e,16400,65)) {   // Line 38
      r=m=1;
      k.KO(0,t,"A");
    }
    else if(k.KKM(e,16400,66)) {   // Line 22
      r=m=1;
      k.KO(0,t,"B");
    }
    else if(k.KKM(e,16400,67)) {   // Line 24
      r=m=1;
      k.KO(0,t,"C");
    }
    else if(k.KKM(e,16400,68)) {   // Line 36
      r=m=1;
      k.KO(0,t,"D");
    }
    else if(k.KKM(e,16400,69)) {   // Line 49
      r=m=1;
      k.KO(0,t,"E");
    }
    else if(k.KKM(e,16400,70)) {   // Line 35
      r=m=1;
      k.KO(0,t,"f");
    }
    else if(k.KKM(e,16400,71)) {   // Line 34
      r=m=1;
      k.KO(0,t,"G");
    }
    else if(k.KKM(e,16400,72)) {   // Line 33
      r=m=1;
      k.KO(0,t,"H");
    }
    else if(k.KKM(e,16400,73)) {   // Line 44
      r=m=1;
      k.KO(0,t,"I");
    }
    else if(k.KKM(e,16400,74)) {   // Line 32
      r=m=1;
      k.KO(0,t,"j");
    }
    else if(k.KKM(e,16400,75)) {   // Line 31
      r=m=1;
      k.KO(0,t,"K");
    }
    else if(k.KKM(e,16400,76)) {   // Line 30
      r=m=1;
      k.KO(0,t,"L");
    }
    else if(k.KKM(e,16400,77)) {   // Line 20
      r=m=1;
      k.KO(0,t,"M");
    }
    else if(k.KKM(e,16400,78)) {   // Line 21
      r=m=1;
      k.KO(0,t,"N");
    }
    else if(k.KKM(e,16400,79)) {   // Line 43
      r=m=1;
      k.KO(0,t,"O");
    }
    else if(k.KKM(e,16400,80)) {   // Line 42
      r=m=1;
      k.KO(0,t,"P");
    }
    else if(k.KKM(e,16400,81)) {   // Line 51
      r=m=1;
      k.KO(0,t,"q");
    }
    else if(k.KKM(e,16400,82)) {   // Line 48
      r=m=1;
      k.KO(0,t,"R");
    }
    else if(k.KKM(e,16400,83)) {   // Line 37
      r=m=1;
      k.KO(0,t,"S");
    }
    else if(k.KKM(e,16400,84)) {   // Line 47
      r=m=1;
      k.KO(0,t,"T");
    }
    else if(k.KKM(e,16400,85)) {   // Line 45
      r=m=1;
      k.KO(0,t,"U");
    }
    else if(k.KKM(e,16400,86)) {   // Line 23
      r=m=1;
      k.KO(0,t,"v");
    }
    else if(k.KKM(e,16400,87)) {   // Line 50
      r=m=1;
      k.KO(0,t,"W");
    }
    else if(k.KKM(e,16400,88)) {   // Line 25
      r=m=1;
      k.KO(0,t,"x");
    }
    else if(k.KKM(e,16400,89)) {   // Line 46
      r=m=1;
      k.KO(0,t,"Y");
    }
    else if(k.KKM(e,16400,90)) {   // Line 26
      r=m=1;
      k.KO(0,t,"z");
    }
    else if(k.KKM(e,16384,219)) {   // Line 76
      r=m=1;
      k.KO(0,t,"[");
    }
    else if(k.KKM(e,16384,220)) {   // Line 74
      r=m=1;
      k.KO(0,t,"\\");
    }
    else if(k.KKM(e,16384,221)) {   // Line 75
      r=m=1;
      k.KO(0,t,"]");
    }
    else if(k.KKM(e,16400,54)) {   // Line 58
      r=m=1;
      k.KO(0,t,"̂");
    }
    else if(k.KKM(e,16400,189)) {   // Line 53
      r=m=1;
      k.KO(0,t,"̄");
    }
    else if(k.KKM(e,16384,192)) {   // Line 67
      r=m=1;
      k.KO(0,t,"̀");
    }
    else if(k.KKM(e,16384,65)) {   // Line 104
      r=m=1;
      k.KO(0,t,"a");
    }
    else if(k.KKM(e,16384,66)) {   // Line 90
      r=m=1;
      k.KO(0,t,"b");
    }
    else if(k.KKM(e,16384,67)) {   // Line 92
      r=m=1;
      k.KO(0,t,"c");
    }
    else if(k.KKM(e,16384,68)) {   // Line 102
      r=m=1;
      k.KO(0,t,"d");
    }
    else if(k.KKM(e,16384,69)) {   // Line 112
      r=m=1;
      k.KO(0,t,"e");
    }
    else if(k.KKM(e,16384,70)) {   // Line 101
      r=m=1;
      k.KO(0,t,"̀");
    }
    else if(k.KKM(e,16384,71)) {   // Line 100
      r=m=1;
      k.KO(0,t,"g");
    }
    else if(k.KKM(e,16384,72)) {   // Line 99
      r=m=1;
      k.KO(0,t,"h");
    }
    else if(k.KKM(e,16384,73)) {   // Line 107
      r=m=1;
      k.KO(0,t,"i");
    }
    else if(k.KKM(e,16384,74)) {   // Line 98
      r=m=1;
      k.KO(0,t,"̂");
    }
    else if(k.KKM(e,16384,75)) {   // Line 97
      r=m=1;
      k.KO(0,t,"k");
    }
    else if(k.KKM(e,16384,76)) {   // Line 96
      r=m=1;
      k.KO(0,t,"l");
    }
    else if(k.KKM(e,16384,77)) {   // Line 89
      r=m=1;
      k.KO(0,t,"m");
    }
    else if(k.KKM(e,16384,78)) {   // Line 68
      r=m=1;
      k.KO(0,t,"n");
    }
    else if(k.KKM(e,16384,79)) {   // Line 106
      r=m=1;
      k.KO(0,t,"o");
    }
    else if(k.KKM(e,16384,80)) {   // Line 105
      r=m=1;
      k.KO(0,t,"p");
    }
    else if(k.KKM(e,16384,81)) {   // Line 94
      r=m=1;
      k.KO(0,t,"̀̌");
    }
    else if(k.KKM(e,16384,82)) {   // Line 111
      r=m=1;
      k.KO(0,t,"r");
    }
    else if(k.KKM(e,16384,83)) {   // Line 103
      r=m=1;
      k.KO(0,t,"s");
    }
    else if(k.KKM(e,16384,84)) {   // Line 110
      r=m=1;
      k.KO(0,t,"t");
    }
    else if(k.KKM(e,16384,85)) {   // Line 108
      r=m=1;
      k.KO(0,t,"u");
    }
    else if(k.KKM(e,16384,86)) {   // Line 91
      r=m=1;
      k.KO(0,t,"̌");
    }
    else if(k.KKM(e,16384,87)) {   // Line 65
      r=m=1;
      k.KO(0,t,"w");
    }
    else if(k.KKM(e,16384,88)) {   // Line 93
      r=m=1;
      k.KO(0,t,"̂̌");
    }
    else if(k.KKM(e,16384,89)) {   // Line 109
      r=m=1;
      k.KO(0,t,"y");
    }
    else if(k.KKM(e,16384,90)) {   // Line 95
      r=m=1;
      k.KO(0,t,"́");
    }
    else if(k.KKM(e,16400,219)) {   // Line 41
      r=m=1;
      k.KO(0,t,"{");
    }
    else if(k.KKM(e,16400,220)) {   // Line 39
      r=m=1;
      k.KO(0,t,"|");
    }
    else if(k.KKM(e,16400,221)) {   // Line 40
      r=m=1;
      k.KO(0,t,"}");
    }
    else if(k.KKM(e,16400,192)) {   // Line 64
      r=m=1;
      k.KO(0,t,"~");
    }
    return r;
  };
}
