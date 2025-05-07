
KeymanWeb.KR(new Keyboard_test());

function Keyboard_test()
{
  
  this.KI="Keyboard_test";
  this.KN="zari1";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Arial"',K102:0};
  this.KDU=1;
  this.KV.KLS={
    "default": ["","1","2","3","4","5","6","7","8","9","0","","","","","","","⊚","-","","⩚","","~","'","°","","^Λ̅","⩚'⨂","L̅°~","","","","^","O","Λ","Ꞁ","L","V","","","","","","","","","","","","⧀","⧁","Ɵ","⦶","⨂","⨅","⨆","","","","","","","","",""]
  };
  this.KV.BK=(function(x){
    var
      empty=Array.apply(null, Array(65)).map(String.prototype.valueOf,""),
      result=[], v, i,
      modifiers=['default','shift','ctrl','shift-ctrl','alt','shift-alt','ctrl-alt','shift-ctrl-alt'];
    for(i=modifiers.length-1;i>=0;i--) {
      v = x[modifiers[i]];
      if(v || result.length > 0) {
        result=(v ? v : empty).slice().concat(result);
      }
    }
    return result;
  })(this.KV.KLS);
  this.KH='';
  this.KM=0;
  this.KBVER="1";
  this.KMBM=0x0000;
  this.KVKD="T_new_1240 T_new_1331 T_new_1363 T_new_1528";
  this.KVKL={
  "tablet": {
    "font": "Tahoma",
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_Q",
                "text": "q"
              },
              {
                "id": "K_W",
                "text": "⊚"
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
                "text": "'"
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
                "text": "^",
                "pad": 70
              },
              {
                "id": "K_S",
                "text": "O"
              },
              {
                "id": "K_D",
                "text": "Λ"
              },
              {
                "id": "K_F",
                "text": "Ꞁ"
              },
              {
                "id": "K_G",
                "text": "L"
              },
              {
                "id": "K_H",
                "text": "V"
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
                "id": "T_new_20",
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
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "1",
                "nextlayer": "shift"
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
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
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
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "pad": 70,
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
                "sp": "10",
                "width": "10"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "width": "110",
                "sp": "2",
                "nextlayer": "default",
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
                "id": "K_PERIOD",
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
                ],
                "text": "."
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0",
                "text": ""
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
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
                "layer": "shift",
                "pad": 70,
                "text": "$"
              },
              {
                "id": "K_2",
                "layer": "shift",
                "text": "@"
              },
              {
                "id": "K_3",
                "layer": "shift",
                "text": "#"
              },
              {
                "id": "K_5",
                "layer": "shift",
                "text": "%"
              },
              {
                "id": "K_7",
                "layer": "shift",
                "text": "&"
              },
              {
                "id": "K_HYPHEN",
                "layer": "shift",
                "text": "_"
              },
              {
                "id": "K_EQUAL",
                "layer": "default",
                "text": "="
              },
              {
                "id": "K_BKSLASH",
                "layer": "shift",
                "text": "|"
              },
              {
                "id": "K_BKSLASH",
                "layer": "default",
                "text": "\\"
              },
              {
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
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "1"
              },
              {
                "id": "K_LBRKT",
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
                ],
                "text": "["
              },
              {
                "id": "K_9",
                "layer": "shift",
                "text": "("
              },
              {
                "id": "K_0",
                "layer": "shift",
                "text": ")"
              },
              {
                "id": "K_RBRKT",
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
                ],
                "text": "]"
              },
              {
                "id": "K_EQUAL",
                "layer": "shift",
                "text": "+"
              },
              {
                "id": "K_HYPHEN",
                "layer": "default",
                "text": "-"
              },
              {
                "id": "K_8",
                "layer": "shift",
                "text": "*"
              },
              {
                "id": "K_SLASH",
                "layer": "default",
                "text": "/"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0",
                "text": ""
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
                "sp": "1"
              }
            ]
          }
        ]
      }
    ]
  },
  "phone": {
    "font": "Tahoma",
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_W",
                "text": "⊚"
              },
              {
                "id": "K_E",
                "text": "-"
              },
              {
                "id": "K_I",
                "text": "'"
              },
              {
                "id": "K_O",
                "text": "°"
              },
              {
                "id": "K_P",
                "text": "~"
              },
              {
                "id": "T_new_1240",
                "text": "?"
              },
              {
                "id": "T_new_1331",
                "text": ";"
              },
              {
                "id": "T_new_1363",
                "text": ":"
              },
              {
                "id": "T_new_1528",
                "text": ","
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "^",
                "pad": 70
              },
              {
                "id": "K_S",
                "text": "O"
              },
              {
                "id": "K_D",
                "text": "Λ"
              },
              {
                "id": "K_F",
                "text": "Ꞁ"
              },
              {
                "id": "K_G",
                "text": "L"
              },
              {
                "id": "K_H",
                "text": "V"
              },
              {
                "id": "K_J",
                "text": "^Λ̅"
              },
              {
                "id": "K_K",
                "text": "⩚'⨂"
              },
              {
                "id": "K_L",
                "text": "L̅°~"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "1",
                "nextlayer": "shift"
              },
              {
                "id": "K_Z",
                "text": "⧀"
              },
              {
                "id": "K_X",
                "text": "⧁"
              },
              {
                "id": "K_C",
                "text": "Ɵ"
              },
              {
                "id": "K_V",
                "text": "⦶"
              },
              {
                "id": "K_B",
                "text": "⨂"
              },
              {
                "id": "K_N",
                "text": "⨅"
              },
              {
                "id": "K_M",
                "text": "⨆"
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
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
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
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "A",
                "pad": 70
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
                "id": "T_new_1481",
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
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "2",
                "nextlayer": "default"
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
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
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
                "pad": 70,
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
                "id": "K_7",
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
                "id": "T_new_1447",
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
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "1"
              },
              {
                "id": "K_LBRKT",
                "text": "[",
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
                "text": "-",
                "layer": "default"
              },
              {
                "id": "K_8",
                "text": "*",
                "layer": "shift"
              },
              {
                "id": "K_SLASH",
                "text": "/",
                "layer": "default"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "90",
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
                "width": "140",
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
                "width": "630",
                "sp": "0"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "140",
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
  this.KVER="10.0.1208.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x100)) {   // Line 57
      r=m=1;
      k.KO(0,t,"?");
    }
    else if(k.KKM(e, 0x4000, 0x101)) {   // Line 58
      r=m=1;
      k.KO(0,t,";");
    }
    else if(k.KKM(e, 0x4000, 0x102)) {   // Line 59
      r=m=1;
      k.KO(0,t,":");
    }
    else if(k.KKM(e, 0x4000, 0x103)) {   // Line 61
      r=m=1;
      k.KO(0,t,",");
    }
    else if(k.KKM(e, 0x4000, 0x30)) {   // Line 28
      r=m=1;
      k.KO(0,t,"0");
    }
    else if(k.KKM(e, 0x4000, 0x31)) {   // Line 16
      r=m=1;
      k.KO(0,t,"1");
    }
    else if(k.KKM(e, 0x4000, 0x31)) {   // Line 37
      r=m=1;
      k.KO(0,t,"1");
    }
    else if(k.KKM(e, 0x4000, 0x32)) {   // Line 36
      r=m=1;
      k.KO(0,t,"2");
    }
    else if(k.KKM(e, 0x4000, 0x33)) {   // Line 35
      r=m=1;
      k.KO(0,t,"3");
    }
    else if(k.KKM(e, 0x4000, 0x34)) {   // Line 34
      r=m=1;
      k.KO(0,t,"4");
    }
    else if(k.KKM(e, 0x4000, 0x35)) {   // Line 33
      r=m=1;
      k.KO(0,t,"5");
    }
    else if(k.KKM(e, 0x4000, 0x36)) {   // Line 32
      r=m=1;
      k.KO(0,t,"6");
    }
    else if(k.KKM(e, 0x4000, 0x37)) {   // Line 31
      r=m=1;
      k.KO(0,t,"7");
    }
    else if(k.KKM(e, 0x4000, 0x38)) {   // Line 30
      r=m=1;
      k.KO(0,t,"8");
    }
    else if(k.KKM(e, 0x4000, 0x39)) {   // Line 29
      r=m=1;
      k.KO(0,t,"9");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KCM(1,t,"L",1)) {   // Line 42
      r=m=1;
      k.KO(1,t,"L̅");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KCM(1,t,"Ꞁ",1)) {   // Line 45
      r=m=1;
      k.KO(1,t,"Ꞁ̅");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KCM(1,t,"Λ",1)) {   // Line 48
      r=m=1;
      k.KO(1,t,"Λ̅");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KCM(1,t,"V",1)) {   // Line 51
      r=m=1;
      k.KO(1,t,"V̅");
    }
    else if(k.KKM(e, 0x4000, 0xDB)) {   // Line 13
      r=m=1;
      k.KO(0,t,"[");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"L",1)) {   // Line 44
      r=m=1;
      k.KO(1,t,"L̲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"Ꞁ",1)) {   // Line 47
      r=m=1;
      k.KO(1,t,"Ꞁ̲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"Λ",1)) {   // Line 50
      r=m=1;
      k.KO(1,t,"Λ̲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"V",1)) {   // Line 53
      r=m=1;
      k.KO(1,t,"V̲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)) {   // Line 15
      r=m=1;
      k.KO(0,t,"\\");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"L",1)) {   // Line 43
      r=m=1;
      k.KO(1,t,"L̶");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"Ꞁ",1)) {   // Line 46
      r=m=1;
      k.KO(1,t,"Ꞁ̶");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"Λ",1)) {   // Line 49
      r=m=1;
      k.KO(1,t,"Λ̶");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"V",1)) {   // Line 52
      r=m=1;
      k.KO(1,t,"V̶");
    }
    else if(k.KKM(e, 0x4000, 0xDD)) {   // Line 14
      r=m=1;
      k.KO(0,t,"]");
    }
    else if(k.KKM(e, 0x4000, 0x41)) {   // Line 41
      r=m=1;
      k.KO(0,t,"^");
    }
    else if(k.KKM(e, 0x4000, 0x42)) {   // Line 18
      r=m=1;
      k.KO(0,t,"⨂");
    }
    else if(k.KKM(e, 0x4000, 0x43)) {   // Line 24
      r=m=1;
      k.KO(0,t,"Ɵ");
    }
    else if(k.KKM(e, 0x4000, 0x44)) {   // Line 11
      r=m=1;
      k.KO(0,t,"Λ");
    }
    else if(k.KKM(e, 0x4000, 0x45)) {   // Line 27
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e, 0x4000, 0x46)) {   // Line 10
      r=m=1;
      k.KO(0,t,"Ꞁ");
    }
    else if(k.KKM(e, 0x4000, 0x47)) {   // Line 9
      r=m=1;
      k.KO(0,t,"L");
    }
    else if(k.KKM(e, 0x4000, 0x48)) {   // Line 12
      r=m=1;
      k.KO(0,t,"V");
    }
    else if(k.KKM(e, 0x4000, 0x49)) {   // Line 40
      r=m=1;
      k.KO(0,t,"'");
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {   // Line 54
      r=m=1;
      k.KO(0,t,"[");
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {   // Line 55
      r=m=1;
      k.KO(0,t,"]");
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {   // Line 56
      r=m=1;
      k.KO(0,t,"\\");
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {   // Line 21
      r=m=1;
      k.KO(0,t,"⨆");
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {   // Line 22
      r=m=1;
      k.KO(0,t,"⨅");
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {   // Line 39
      r=m=1;
      k.KO(0,t,"°");
    }
    else if(k.KKM(e, 0x4000, 0x50)) {   // Line 60
      r=m=1;
      k.KO(0,t,"~");
    }
    else if(k.KKM(e, 0x4000, 0x53)) {   // Line 20
      r=m=1;
      k.KO(0,t,"O");
    }
    else if(k.KKM(e, 0x4000, 0x54)) {   // Line 17
      r=m=1;
      k.KO(0,t,"⩚");
    }
    else if(k.KKM(e, 0x4000, 0x55)) {   // Line 38
      r=m=1;
      k.KO(0,t,"~");
    }
    else if(k.KKM(e, 0x4000, 0x56)) {   // Line 23
      r=m=1;
      k.KO(0,t,"⦶");
    }
    else if(k.KKM(e, 0x4000, 0x57)) {   // Line 19
      r=m=1;
      k.KO(0,t,"⊚");
    }
    else if(k.KKM(e, 0x4000, 0x58)) {   // Line 25
      r=m=1;
      k.KO(0,t,"⧁");
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {   // Line 26
      r=m=1;
      k.KO(0,t,"⧀");
    }
    return r;
  };
}
