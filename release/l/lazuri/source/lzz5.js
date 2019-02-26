
KeymanWeb.KR(new Keyboard_lzz5());

function Keyboard_lzz5()
{
  
  this.KI="Keyboard_lzz5";
  this.KN="Lazca Klavye";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Arial"',K102:0};
  this.KV.KLS={
    "default": ["\"","1","2","3","4","5","6","7","8","9","0","*","-","","","","q","ʒ","e","r","t","y","u","ı","o","p","ğ","ü",",","","","","a","s","d","f","g","h","j","k","l","ş","i","","","","","","","z","x","c","v","b","n","m","ö","ç",".","","","","","",""],
    "shift": [" ̆ ","!","'","^","+","%","&","/","(",")","=","?","_","","","","Q","Ʒ","E","R","T","Y","U","ı","O","P","Ğ","Ü",";","","","","A","S","D","F","G","H","J","K","L","Ş","İ","","","","","","","Z","X","C","V","B","N","M","Ö","Ç",":","","","","","",""],
    "ctrl-alt": ["<",">","£","#","$","½","","{","[","]","}","\\","|","","","","@","","€","","₺","","","İ","","","¨","~","`","","","","æ","ß","","","","","","","","´","","","","","","","","","","","","","","","","","","","","","","",""],
    "shift-ctrl-alt": ["","","","","","","","","","","","","","","","","","","","","","","","İ","","","","","","","","","Æ","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""]
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
  this.KDU=1;
  this.KH='';
  this.KM=0;
  this.KBVER="2.30";
  this.KMBM=0x0010;
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
                "text": "q",
                "nextlayer": "shift"
              },
              {
                "id": "K_W",
                "text": "ʒ"
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
                "text": "ı"
              },
              {
                "id": "K_O",
                "text": "o"
              },
              {
                "id": "K_P",
                "text": "p"
              },
              {
                "id": "U_011F",
                "text": "ğ"
              },
              {
                "id": "U_00FC",
                "text": "ü"
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
                "id": "U_015F",
                "text": "ş"
              },
              {
                "id": "U_0069",
                "text": "i"
              },
              {
                "id": "U_0306",
                "text": "̆"
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
                "id": "U_00F6",
                "text": "ö"
              },
              {
                "id": "U_00E7",
                "text": "ç"
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
                "width": "840",
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
                "text": "Ʒ"
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
              },
              {
                "id": "U_011E",
                "text": "Ğ"
              },
              {
                "id": "U_00DC",
                "text": "Ü"
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
                "id": "U_015E",
                "text": "Ş"
              },
              {
                "id": "U_0130",
                "text": "İ"
              },
              {
                "id": "U_0306",
                "text": "̆"
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
                "id": "U_00D6",
                "text": "Ö"
              },
              {
                "id": "K_PERIOD",
                "text": "Ç",
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
                "id": "U_003A",
                "text": ":"
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
                "width": "840",
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
                "pad": "",
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
                "id": "U_005E",
                "text": "^"
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
                "width": "610",
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
    ],
    "displayUnderlying": true
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
                "id": "K_Q",
                "text": "q"
              },
              {
                "id": "K_W",
                "text": "ʒ"
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
                "text": "ı"
              },
              {
                "id": "K_O",
                "text": "o"
              },
              {
                "id": "K_P",
                "text": "p"
              },
              {
                "id": "U_011F",
                "text": "ğ"
              },
              {
                "id": "U_00FC",
                "text": "ü"
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
                "id": "U_015F",
                "text": "ş"
              },
              {
                "id": "U_0069",
                "text": "i"
              },
              {
                "id": "U_0306",
                "text": "̆"
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
                "id": "U_00F6",
                "text": "ö"
              },
              {
                "id": "U_00E7",
                "text": "ç"
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
                "width": "820",
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
                "id": "K_Q",
                "text": "Q"
              },
              {
                "id": "K_W",
                "text": "Ʒ"
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
              },
              {
                "id": "U_011E",
                "text": "Ğ"
              },
              {
                "id": "U_00DC",
                "text": "Ü"
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
                "id": "U_015E",
                "text": "Ş"
              },
              {
                "id": "U_0130",
                "text": "İ"
              },
              {
                "id": "U_0306",
                "text": "̆"
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
                "id": "U_00D6",
                "text": "Ö"
              },
              {
                "id": "U_00C7",
                "text": "Ç"
              },
              {
                "id": "K_PERIOD",
                "text": ":",
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
                "width": "820",
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
                "pad": "",
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
                "text": "+",
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
                "id": "K_6",
                "text": "^",
                "layer": "shift"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "100",
                "sp": "1"
              },
              {
                "id": "K_LBRKT",
                "text": "[",
                "pad": "5",
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
    ],
    "displayUnderlying": false
  }
}
;
  this.KVER="11.0.1314.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4010, 0x31)) {   // Line 39
      r=m=1;
      k.KO(0,t,"!");
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {   // Line 23
      r=m=1;
      k.KO(0,t,"İ");
    }
    else if(k.KKM(e, 0x4010, 0x33)) {   // Line 37
      r=m=1;
      k.KO(0,t,"^");
    }
    else if(k.KKM(e, 0x4010, 0x34)) {   // Line 36
      r=m=1;
      k.KO(0,t,"+");
    }
    else if(k.KKM(e, 0x4010, 0x35)) {   // Line 35
      r=m=1;
      k.KO(0,t,"%");
    }
    else if(k.KKM(e, 0x4010, 0x37)) {   // Line 33
      r=m=1;
      k.KO(0,t,"/");
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {   // Line 51
      r=m=1;
      k.KO(0,t,"i");
    }
    else if(k.KKM(e, 0x4010, 0x39)) {   // Line 31
      r=m=1;
      k.KO(0,t,")");
    }
    else if(k.KKM(e, 0x4010, 0x30)) {   // Line 30
      r=m=1;
      k.KO(0,t,"=");
    }
    else if(k.KKM(e, 0x4010, 0x38)) {   // Line 32
      r=m=1;
      k.KO(0,t,"(");
    }
    else if(k.KKM(e, 0x4010, 0xBB)) {   // Line 28
      r=m=1;
      k.KO(0,t,"_");
    }
    else if(k.KKM(e, 0x4000, 0xBC)) {   // Line 47
      r=m=1;
      k.KO(0,t,"ö");
    }
    else if(k.KKM(e, 0x4000, 0xBD)) {   // Line 44
      r=m=1;
      k.KO(0,t,"*");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KCM(1,t,"ç",1)) {   // Line 61
      r=m=1;
      k.KO(1,t,"ç̆");
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {   // Line 48
      r=m=1;
      k.KO(0,t,"ç");
    }
    else if(k.KKM(e, 0x4000, 0xBF)) {   // Line 46
      r=m=1;
      k.KO(0,t,".");
    }
    else if(k.KKM(e, 0x4010, 0xBA)) {   // Line 24
      r=m=1;
      k.KO(0,t,"Ş");
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {   // Line 52
      r=m=1;
      k.KO(0,t,"ş");
    }
    else if(k.KKM(e, 0x4010, 0xBC)) {   // Line 21
      r=m=1;
      k.KO(0,t,"Ö");
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {   // Line 43
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e, 0x4010, 0xBE)&&k.KCM(1,t,"Ç",1)) {   // Line 62
      r=m=1;
      k.KO(1,t,"Ç̆");
    }
    else if(k.KKM(e, 0x4010, 0xBE)) {   // Line 20
      r=m=1;
      k.KO(0,t,"Ç");
    }
    else if(k.KKM(e, 0x4010, 0xBF)) {   // Line 19
      r=m=1;
      k.KO(0,t,":");
    }
    else if(k.KKM(e, 0x4010, 0x32)) {   // Line 38
      r=m=1;
      k.KO(0,t,"'");
    }
    else if(k.KKM(e, 0x4010, 0x49)) {   // Line 22
      r=m=1;
      k.KO(0,t,"I");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KCM(1,t,"K",1)) {   // Line 64
      r=m=1;
      k.KO(1,t,"K̆");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KCM(1,t,"P",1)) {   // Line 66
      r=m=1;
      k.KO(1,t,"P̆");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(1,t,"T",1)) {   // Line 60
      r=m=1;
      k.KO(1,t,"T̆");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KCM(1,t,"Ʒ",1)) {   // Line 68
      r=m=1;
      k.KO(1,t,"Ʒ̆");
    }
    else if(k.KKM(e, 0x4010, 0x57)) {   // Line 55
      r=m=1;
      k.KO(0,t,"Ʒ");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KCM(1,t,"Z",1)) {   // Line 70
      r=m=1;
      k.KO(1,t,"Z̆");
    }
    else if(k.KKM(e, 0x4000, 0xDB)) {   // Line 50
      r=m=1;
      k.KO(0,t,"ğ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)) {   // Line 42
      r=m=1;
      k.KO(0,t,",");
    }
    else if(k.KKM(e, 0x4000, 0xDD)) {   // Line 49
      r=m=1;
      k.KO(0,t,"ü");
    }
    else if(k.KKM(e, 0x4010, 0x36)) {   // Line 34
      r=m=1;
      k.KO(0,t,"&");
    }
    else if(k.KKM(e, 0x4010, 0xBD)) {   // Line 29
      r=m=1;
      k.KO(0,t,"?");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(1,t,"ʒ",1)) {   // Line 73
      r=m=1;
      k.KO(1,t,"w");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(1,t,"Ʒ",1)) {   // Line 74
      r=m=1;
      k.KO(1,t,"W");
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {   // Line 41
      r=m=1;
      k.KO(0,t,"\"");
    }
    else if(k.KKM(e, 0x4000, 0x49)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ı");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"k",1)) {   // Line 63
      r=m=1;
      k.KO(1,t,"k̆");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"p",1)) {   // Line 65
      r=m=1;
      k.KO(1,t,"p̆");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(1,t,"t",1)) {   // Line 59
      r=m=1;
      k.KO(1,t,"t̆");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KCM(1,t,"ʒ",1)) {   // Line 67
      r=m=1;
      k.KO(1,t,"ʒ̆");
    }
    else if(k.KKM(e, 0x4000, 0x57)) {   // Line 56
      r=m=1;
      k.KO(0,t,"ʒ");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KCM(1,t,"z",1)) {   // Line 69
      r=m=1;
      k.KO(1,t,"z̆");
    }
    else if(k.KKM(e, 0x4010, 0xDB)) {   // Line 27
      r=m=1;
      k.KO(0,t,"Ğ");
    }
    else if(k.KKM(e, 0x4010, 0xDC)) {   // Line 25
      r=m=1;
      k.KO(0,t,";");
    }
    else if(k.KKM(e, 0x4010, 0xDD)) {   // Line 26
      r=m=1;
      k.KO(0,t,"Ü");
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {   // Line 40
      r=m=1;
      k.KO(0,t,"̆");
    }
    return r;
  };
}
