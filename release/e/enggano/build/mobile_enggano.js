
KeymanWeb.KR(new Keyboard_mobile_enggano());

function Keyboard_mobile_enggano()
{
  
  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_mobile_enggano";
  this.KN="Enggano for mobile phone and tablet";
  this.KMINVER="9.0";
  this.KV=null;
  this.KDU=0;
  this.KH='';
  this.KM=0;
  this.KBVER="1.0";
  this.KMBM=0x0000;
  this.KVKD="T_0065_0303 T_0065_0307 T_0065_0307_0303 T_0075_0303 T_0075_0307 T_0075_0307_0303 T_0069_0303 T_006F_0303 T_0061_0303 T_0045_0303 T_0045_0307 T_0045_0307_0303 T_0055_0303 T_0055_0307 T_0055_0307_0303 T_0049_0303 T_004F_0303 T_0041_0303";
  this.KVKL={
  "phone": {
    "font": "Tahoma",
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "K_Q",
                "text": "q"
              },
              {
                "id": "K_W",
                "text": "w"
              },
              {
                "id": "K_E",
                "text": "e",
                "sk": [
                  {
                    "id": "U_0065",
                    "text": "e"
                  },
                  {
                    "id": "T_0065_0303",
                    "text": "e\u0303"
                  },
                  {
                    "id": "T_0065_0307",
                    "text": "e\u0307"
                  },
                  {
                    "id": "T_0065_0307_0303",
                    "text": "e\u0307\u0303"
                  }
                ]
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
                "text": "u",
                "sk": [
                  {
                    "id": "U_0075",
                    "text": "u"
                  },
                  {
                    "id": "T_0075_0303",
                    "text": "u\u0303"
                  },
                  {
                    "id": "T_0075_0307",
                    "text": "u\u0307"
                  },
                  {
                    "id": "T_0075_0307_0303",
                    "text": "u\u0307\u0303"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "i",
                "sk": [
                  {
                    "id": "U_0069",
                    "text": "i"
                  },
                  {
                    "id": "T_0069_0303",
                    "text": "i\u0303"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "o",
                "sk": [
                  {
                    "id": "U_006F",
                    "text": "o"
                  },
                  {
                    "id": "T_006F_0303",
                    "text": "o\u0303"
                  }
                ]
              },
              {
                "id": "K_P",
                "text": "p"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "50",
                "text": "a",
                "sk": [
                  {
                    "id": "U_0061",
                    "text": "a"
                  },
                  {
                    "id": "T_0061_0303",
                    "text": "a\u0303"
                  }
                ]
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
                "text": "f"
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
                "text": "j"
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
                "id": "U_0027",
                "text": "'"
              },
              {
                "width": "10",
                "id": "T_new_88",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "shift",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
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
                "text": "c"
              },
              {
                "id": "K_V",
                "text": "v"
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
                    "id": "K_COMMA",
                    "text": ","
                  },
                  {
                    "layer": "shift",
                    "id": "K_1",
                    "text": "!"
                  },
                  {
                    "layer": "shift",
                    "id": "K_SLASH",
                    "text": "?"
                  },
                  {
                    "id": "K_QUOTE",
                    "text": "'"
                  },
                  {
                    "layer": "shift",
                    "id": "K_QUOTE",
                    "text": "\""
                  },
                  {
                    "id": "K_BKSLASH",
                    "text": "\\"
                  },
                  {
                    "layer": "shift",
                    "id": "K_COLON",
                    "text": ":"
                  },
                  {
                    "id": "K_COLON",
                    "text": ";"
                  }
                ]
              },
              {
                "width": "100",
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "150",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "width": "120",
                "id": "K_LOPT",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "610",
                "id": "K_SPACE"
              },
              {
                "width": "150",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "shift",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "K_Q",
                "text": "Q"
              },
              {
                "id": "K_W",
                "text": "W"
              },
              {
                "id": "K_E",
                "text": "E",
                "sk": [
                  {
                    "id": "U_0045",
                    "text": "E"
                  },
                  {
                    "id": "T_0045_0303",
                    "text": "E\u0303"
                  },
                  {
                    "id": "T_0045_0307",
                    "text": "E\u0307"
                  },
                  {
                    "id": "T_0045_0307_0303",
                    "text": "E\u0307\u0303"
                  }
                ]
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
                "text": "U",
                "sk": [
                  {
                    "id": "U_0055",
                    "text": "U"
                  },
                  {
                    "id": "T_0055_0303",
                    "text": "U\u0303"
                  },
                  {
                    "id": "T_0055_0307",
                    "text": "U\u0307"
                  },
                  {
                    "id": "T_0055_0307_0303",
                    "text": "U\u0307\u0303"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "I",
                "sk": [
                  {
                    "id": "U_0049",
                    "text": "I"
                  },
                  {
                    "id": "T_0049_0303",
                    "text": "I\u0303"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "O",
                "sk": [
                  {
                    "id": "U_004F",
                    "text": "O"
                  },
                  {
                    "id": "T_004F_0303",
                    "text": "O\u0303"
                  }
                ]
              },
              {
                "id": "K_P",
                "text": "P"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "50",
                "text": "A",
                "sk": [
                  {
                    "id": "U_0041",
                    "text": "A"
                  },
                  {
                    "id": "T_0041_0303",
                    "text": "A\u0303"
                  }
                ]
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
                "text": "F"
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
                "text": "J"
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
                "id": "U_0027",
                "text": "'"
              },
              {
                "width": "10",
                "id": "T_new_262",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "default",
                "id": "K_SHIFT",
                "sp": "2",
                "text": "*Shift*"
              },
              {
                "id": "K_Z",
                "text": "Z"
              },
              {
                "id": "K_X",
                "text": "X"
              },
              {
                "id": "K_C",
                "text": "C"
              },
              {
                "id": "K_V",
                "text": "V"
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
                "layer": "default",
                "id": "K_PERIOD",
                "text": ".",
                "sk": [
                  {
                    "layer": "default",
                    "id": "K_COMMA",
                    "text": ","
                  },
                  {
                    "layer": "shift",
                    "id": "K_1",
                    "text": "!"
                  },
                  {
                    "layer": "shift",
                    "id": "K_SLASH",
                    "text": "?"
                  },
                  {
                    "layer": "default",
                    "id": "K_QUOTE",
                    "text": "'"
                  },
                  {
                    "layer": "shift",
                    "id": "K_QUOTE",
                    "text": "\""
                  },
                  {
                    "layer": "default",
                    "id": "K_BKSLASH",
                    "text": "\\"
                  },
                  {
                    "layer": "shift",
                    "id": "K_COLON",
                    "text": ":"
                  },
                  {
                    "layer": "default",
                    "id": "K_COLON",
                    "text": ";"
                  }
                ]
              },
              {
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "150",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "width": "120",
                "id": "K_LOPT",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "610",
                "id": "K_SPACE"
              },
              {
                "width": "150",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "numeric",
        "row": [
          {
            "id": "1",
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
            "id": "2",
            "key": [
              {
                "layer": "shift",
                "id": "K_4",
                "pad": "50",
                "text": "$"
              },
              {
                "layer": "shift",
                "id": "K_2",
                "text": "@"
              },
              {
                "layer": "shift",
                "id": "K_3",
                "text": "#"
              },
              {
                "layer": "shift",
                "id": "K_5",
                "text": "%"
              },
              {
                "layer": "shift",
                "id": "K_6",
                "text": "&"
              },
              {
                "layer": "shift",
                "id": "K_HYPHEN",
                "text": "_"
              },
              {
                "layer": "default",
                "id": "K_EQUAL",
                "text": "="
              },
              {
                "layer": "shift",
                "id": "K_BKSLASH",
                "text": "|"
              },
              {
                "layer": "default",
                "id": "K_BKSLASH",
                "text": "\\"
              },
              {
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_LBRKT",
                "pad": "110",
                "text": "[",
                "sk": [
                  {
                    "id": "U_00AB",
                    "text": "\u00AB"
                  },
                  {
                    "layer": "shift",
                    "id": "K_COMMA",
                    "text": "<"
                  },
                  {
                    "layer": "shift",
                    "id": "K_LBRKT",
                    "text": "{"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_9",
                "text": "("
              },
              {
                "layer": "shift",
                "id": "K_0",
                "text": ")"
              },
              {
                "id": "K_RBRKT",
                "text": "]",
                "sk": [
                  {
                    "id": "U_00BB",
                    "text": "\u00BB"
                  },
                  {
                    "layer": "shift",
                    "id": "K_PERIOD",
                    "text": ">"
                  },
                  {
                    "layer": "shift",
                    "id": "K_RBRKT",
                    "text": "}"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_EQUAL",
                "text": "+"
              },
              {
                "id": "K_HYPHEN",
                "text": "-"
              },
              {
                "layer": "shift",
                "id": "K_8",
                "text": "*"
              },
              {
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "width": "100",
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
                "width": "150",
                "id": "K_LOWER",
                "sp": "1",
                "text": "*abc*"
              },
              {
                "width": "120",
                "id": "K_LOPT",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "610",
                "id": "K_SPACE"
              },
              {
                "width": "150",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      }
    ]
  }
}
;
  this.KVER="14.0.284.0";
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x100)) {
      if(1){
        r=m=1;   // Line 8
        k.KO(0,t,"ẽ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x101)) {
      if(1){
        r=m=1;   // Line 9
        k.KO(0,t,"ė");
      }
    }
    else if(k.KKM(e, 0x4000, 0x102)) {
      if(1){
        r=m=1;   // Line 10
        k.KO(0,t,"ė̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x103)) {
      if(1){
        r=m=1;   // Line 11
        k.KO(0,t,"ũ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x104)) {
      if(1){
        r=m=1;   // Line 12
        k.KO(0,t,"u̇");
      }
    }
    else if(k.KKM(e, 0x4000, 0x105)) {
      if(1){
        r=m=1;   // Line 13
        k.KO(0,t,"u̇̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x106)) {
      if(1){
        r=m=1;   // Line 14
        k.KO(0,t,"ĩ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x107)) {
      if(1){
        r=m=1;   // Line 15
        k.KO(0,t,"õ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x108)) {
      if(1){
        r=m=1;   // Line 16
        k.KO(0,t,"ã");
      }
    }
    else if(k.KKM(e, 0x4000, 0x109)) {
      if(1){
        r=m=1;   // Line 17
        k.KO(0,t,"Ẽ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10A)) {
      if(1){
        r=m=1;   // Line 18
        k.KO(0,t,"Ė");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10B)) {
      if(1){
        r=m=1;   // Line 19
        k.KO(0,t,"E0̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10C)) {
      if(1){
        r=m=1;   // Line 20
        k.KO(0,t,"Ũ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10D)) {
      if(1){
        r=m=1;   // Line 21
        k.KO(0,t,"U̇");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10E)) {
      if(1){
        r=m=1;   // Line 22
        k.KO(0,t,"U̇̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10F)) {
      if(1){
        r=m=1;   // Line 23
        k.KO(0,t,"Ĩ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x110)) {
      if(1){
        r=m=1;   // Line 24
        k.KO(0,t,"Õ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x111)) {
      if(1){
        r=m=1;   // Line 25
        k.KO(0,t,"Ã");
      }
    }
    return r;
  };
}
