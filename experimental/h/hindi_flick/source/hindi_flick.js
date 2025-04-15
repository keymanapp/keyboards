
KeymanWeb.KR(new Keyboard_hindi());

function Keyboard_hindi()
{
  
  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_hindi";
  this.KN="IndiSwipe Hindi";
  this.KMINVER="9.0";
  this.KV=null;
  this.KDU=0;
  this.KH='';
  this.KM=0;
  this.KBVER="0.1";
  this.KMBM=0x0000;
  this.KVKD="T_KSHA";
  this.KVKL={
  "phone": {
    "font": "Hind",
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "150",
                "id": "U_0905",
                "pad": "325",
                "text": "\u0905",
                "flick": {
                  "n": {
                    "id": "U_0909",
                    "text": "\u0909"
                  },
                  "s": {
                    "id": "U_0913",
                    "text": "\u0913"
                  },
                  "e": {
                    "id": "U_090F",
                    "text": "\u090F"
                  },
                  "w": {
                    "id": "U_0907",
                    "text": "\u0907"
                  }
                },
                "multitap": [
                  {
                    "id": "U_0907"
                  },
                  {
                    "id": "U_0909"
                  },
                  {
                    "id": "U_090F"
                  },
                  {
                    "id": "U_0913"
                  }
                ]
              },
              {
                "width": "150",
                "id": "U_0915",
                "text": "\u0915"
              },
              {
                "width": "150",
                "id": "U_091A",
                "text": "\u091A"
              },
              {
                "width": "150",
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "width": "150",
                "id": "U_0906",
                "pad": "325",
                "text": "\u0906"
              },
              {
                "width": "150",
                "id": "U_091F",
                "text": "\u091F"
              },
              {
                "width": "150",
                "id": "U_0924",
                "text": "\u0924"
              },
              {
                "width": "150",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "width": "150",
                "id": "K_LOPT",
                "pad": "325",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "150",
                "id": "U_092A",
                "text": "\u092A"
              },
              {
                "width": "150",
                "id": "U_092F",
                "text": "\u092F"
              },
              {
                "width": "150",
                "id": "K_SPACE"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "width": "150",
                "id": "U_0936",
                "pad": "325",
                "text": "\u0936"
              },
              {
                "width": "150",
                "id": "T_KSHA",
                "text": "\u0915\u094D\u0937"
              },
              {
                "nextlayer": "numeric",
                "width": "150",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
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
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "50",
                "text": "A"
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
                "width": "10",
                "id": "T_new_246",
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
                "id": "K_7",
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
                "id": "T_new_213",
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
  },
  "tablet": {
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
                "id": "T_A",
                "text": "\u0905"
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
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "70",
                "text": "a"
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
                "width": "10",
                "id": "T_new_94",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "shift",
                "width": "110",
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
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "id": "K_SPACE"
              },
              {
                "width": "140",
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
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "70",
                "text": "A"
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
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "default",
                "width": "110",
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
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "id": "K_SPACE"
              },
              {
                "width": "140",
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
                "pad": "70",
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
                "id": "K_7",
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
                "width": "110",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "id": "K_LBRKT",
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
                "layer": "default",
                "id": "K_HYPHEN",
                "text": "-"
              },
              {
                "layer": "shift",
                "id": "K_8",
                "text": "*"
              },
              {
                "layer": "default",
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "id": "K_SPACE"
              },
              {
                "width": "140",
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
  this.KVER="16.0.139.0";
  this.KVS=[];
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x100)) {
      if(1){
        r=m=1;   // Line 10
        k.KO(0,t,"क्ष");
      }
    }
    return r;
  };
}
