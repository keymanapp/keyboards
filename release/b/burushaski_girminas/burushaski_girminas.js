if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_burushaski_girminas());
}
function Keyboard_burushaski_girminas()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_burushaski_girminas";
  this.KN="Burushãski Girminas";
  this.KMINVER="10.0";
  this.KV=null;
  this.KDU=0;
  this.KH='';
  this.KM=0;
  this.KBVER="2.0.23";
  this.KMBM=modCodes.SHIFT /* 0x0010 */;
  this.KVKL={
  "phone": {
    "displayUnderlying": true,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "105",
                "id": "K_Q",
                "text": "q"
              },
              {
                "width": "105",
                "id": "K_W",
                "text": "w"
              },
              {
                "width": "105",
                "id": "K_E",
                "text": "e",
                "sk": [
                  {
                    "id": "U_00E9",
                    "text": "\u00E9"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_R",
                "text": "r",
                "sk": [
                  {
                    "id": "U_0157",
                    "text": "\u0157"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_T",
                "text": "t",
                "sk": [
                  {
                    "id": "U_021B",
                    "text": "\u021B"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_Y",
                "text": "y",
                "sk": [
                  {
                    "id": "U_00FD",
                    "text": "\u00FD"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_U",
                "text": "u",
                "sk": [
                  {
                    "id": "U_0169",
                    "text": "\u0169"
                  },
                  {
                    "id": "U_00FA",
                    "text": "\u00FA"
                  },
                  {
                    "id": "U_00FC",
                    "text": "\u00FC"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_I",
                "text": "i"
              },
              {
                "width": "105",
                "id": "K_O",
                "text": "o",
                "sk": [
                  {
                    "id": "U_00F3",
                    "text": "\u00F3"
                  },
                  {
                    "id": "U_00F5",
                    "text": "\u00F5"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_P",
                "text": "p"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "width": "105",
                "id": "K_A",
                "text": "a",
                "sk": [
                  {
                    "id": "U_1EBD",
                    "text": "\u00E1"
                  },
                  {
                    "id": "U_00E3",
                    "text": "\u00E3"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_S",
                "text": "s",
                "sk": [
                  {
                    "id": "U_015B",
                    "text": "\u015B"
                  },
                  {
                    "id": "U_0219",
                    "text": "\u0219"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_D",
                "text": "d",
                "sk": [
                  {
                    "id": "U_1E0D",
                    "text": "\u1E0D"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_F",
                "text": "f"
              },
              {
                "width": "105",
                "id": "K_G",
                "text": "g",
                "sk": [
                  {
                    "id": "U_0121",
                    "text": "\u0121"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_H",
                "text": "h"
              },
              {
                "width": "105",
                "id": "K_J",
                "text": "j",
                "sk": [
                  {
                    "id": "U_01EF",
                    "text": "\u01EF"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_K",
                "text": "k",
                "sk": [
                  {
                    "id": "U_01E9",
                    "text": "\u01E9"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_L",
                "text": "l",
                "sk": [
                  {
                    "id": "U_013C",
                    "text": "\u013C"
                  }
                ]
              },
              {
                "width": "105",
                "id": "U_003F",
                "text": "?"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "105",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "width": "105",
                "id": "K_Z",
                "text": "z",
                "sk": [
                  {
                    "id": "U_1E92",
                    "text": "\u1E93"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_X",
                "text": "x"
              },
              {
                "width": "105",
                "id": "K_C",
                "text": "c"
              },
              {
                "width": "105",
                "id": "K_V",
                "text": "v"
              },
              {
                "width": "105",
                "id": "K_B",
                "text": "b"
              },
              {
                "width": "105",
                "id": "K_N",
                "text": "n",
                "sk": [
                  {
                    "id": "U_1E45",
                    "text": "\u1E45"
                  },
                  {
                    "id": "U_1E47",
                    "text": "\u1E47"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_M",
                "text": "m"
              },
              {
                "width": "105",
                "id": "U_002C",
                "text": ","
              },
              {
                "width": "105",
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
                "nextlayer": "shift",
                "width": "105",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "width": "105",
                "id": "K_LOPT",
                "text": "\uD83C\uDF10"
              },
              {
                "width": "105",
                "id": "U_002C",
                "text": "!,~",
                "sk": [
                  {
                    "id": "U_007E",
                    "text": "~"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  }
                ]
              },
              {
                "width": "465",
                "id": "K_SPACE"
              },
              {
                "width": "105",
                "id": "U_1F600",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F603",
                    "text": "\uD83D\uDE03"
                  },
                  {
                    "id": "U_1F608",
                    "text": "\uD83D\uDE08"
                  },
                  {
                    "id": "U_1F495",
                    "text": "\uD83D\uDC95"
                  },
                  {
                    "id": "U_1F821",
                    "text": "\uD83D\uDE21"
                  },
                  {
                    "id": "U_1F44D",
                    "text": "\uD83D\uDC4D"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_PERIOD",
                "text": "."
              },
              {
                "width": "105",
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
                    "id": "U_00C9",
                    "text": "\u00C9"
                  },
                  {
                    "id": "U_1EBC",
                    "text": "\u1EBC"
                  }
                ]
              },
              {
                "id": "K_R",
                "text": "R",
                "sk": [
                  {
                    "id": "U_0158",
                    "text": "\u0158"
                  },
                  {
                    "id": "U_0156",
                    "text": "\u0156"
                  }
                ]
              },
              {
                "id": "K_T",
                "text": "T",
                "sk": [
                  {
                    "id": "U_021A",
                    "text": "\u021A"
                  }
                ]
              },
              {
                "id": "K_Y",
                "text": "Y",
                "sk": [
                  {
                    "id": "U_00DD",
                    "text": "\u00DD"
                  }
                ]
              },
              {
                "id": "K_U",
                "text": "U",
                "sk": [
                  {
                    "id": "U_0168",
                    "text": "\u0168"
                  },
                  {
                    "id": "U_00DA",
                    "text": "\u00DA"
                  },
                  {
                    "id": "U_00DC",
                    "text": "\u00DC"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "I",
                "sk": [
                  {
                    "id": "U_0128",
                    "text": "\u0128"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "O",
                "sk": [
                  {
                    "id": "U_00D3",
                    "text": "\u00D3"
                  },
                  {
                    "id": "U_00D5",
                    "text": "\u00D5"
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
                "pad": "70",
                "text": "A",
                "sk": [
                  {
                    "id": "U_00C1",
                    "text": "\u00C1"
                  },
                  {
                    "id": "U_00C3",
                    "text": "\u00C3"
                  }
                ]
              },
              {
                "id": "K_S",
                "text": "S",
                "sk": [
                  {
                    "id": "U_0160",
                    "text": "\u0160"
                  },
                  {
                    "id": "U_015E",
                    "text": "\u015E"
                  },
                  {
                    "id": "U_015A",
                    "text": "\u015A"
                  },
                  {
                    "id": "U_0218",
                    "text": "\u0218"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "D",
                "sk": [
                  {
                    "id": "U_1E0C",
                    "text": "\u1E0C"
                  }
                ]
              },
              {
                "id": "K_F",
                "text": "F"
              },
              {
                "id": "K_G",
                "text": "G",
                "sk": [
                  {
                    "id": "U_01E6",
                    "text": "\u01E6"
                  },
                  {
                    "id": "U_0120",
                    "text": "\u0120"
                  }
                ]
              },
              {
                "id": "K_H",
                "text": "H"
              },
              {
                "id": "K_J",
                "text": "J",
                "sk": [
                  {
                    "id": "U_01EE",
                    "text": "\u01EE"
                  }
                ]
              },
              {
                "id": "K_K",
                "text": "K",
                "sk": [
                  {
                    "id": "U_01E8",
                    "text": "\u01E8"
                  }
                ]
              },
              {
                "id": "K_L",
                "text": "L",
                "sk": [
                  {
                    "id": "U_013B",
                    "text": "\u013B"
                  }
                ]
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
                "text": "Z",
                "sk": [
                  {
                    "id": "U_1E92",
                    "text": "\u1E92"
                  }
                ]
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
                "text": "N",
                "sk": [
                  {
                    "id": "U_1E46",
                    "text": "\u1E46"
                  },
                  {
                    "id": "U_1E44",
                    "text": "\u1E44"
                  }
                ]
              },
              {
                "id": "K_M",
                "text": "M"
              },
              {
                "id": "K_Q",
                "text": "?"
              },
              {
                "width": "141",
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
                "width": "500",
                "id": "K_SPACE"
              },
              {
                "id": "U_002E",
                "text": ".",
                "sk": [
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  }
                ]
              },
              {
                "id": "U_002C",
                "text": ","
              },
              {
                "width": "153",
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
                "layer": "shift",
                "width": "115",
                "id": "K_HYPHEN",
                "pad": "30",
                "text": "_"
              },
              {
                "width": "115",
                "id": "K_LBRKT",
                "text": "[",
                "sk": [
                  {
                    "id": "U_00AB",
                    "text": "\u00AB"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_007B",
                    "text": "{"
                  }
                ]
              },
              {
                "width": "115",
                "id": "K_RBRKT",
                "text": "]",
                "sk": [
                  {
                    "id": "U_00BB",
                    "text": "\u00BB"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  },
                  {
                    "id": "U_007D",
                    "text": "}"
                  }
                ]
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_9",
                "text": "("
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_0",
                "text": ")"
              },
              {
                "nextlayer": "symbol",
                "width": "110",
                "id": "K_SYMBOLS",
                "sp": "1",
                "text": "\u00A7"
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_4",
                "text": "$"
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_8",
                "text": "*"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "layer": "shift",
                "id": "K_2",
                "text": "@"
              },
              {
                "layer": "shift",
                "id": "K_BKSLASH",
                "text": "|"
              },
              {
                "layer": "default",
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "layer": "default",
                "id": "K_BKSLASH",
                "text": "\\"
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
                "layer": "default",
                "id": "K_EQUAL",
                "text": "="
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
                "id": "K_3",
                "text": "#"
              }
            ]
          },
          {
            "id": "3",
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
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
                "width": "140",
                "id": "K_LOWER",
                "pad": "30",
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
                "width": "500",
                "id": "K_SPACE"
              },
              {
                "width": "90",
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              },
              {
                "width": "160",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "symbol",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "U_0060",
                "text": "`"
              },
              {
                "id": "U_007E",
                "text": "~"
              },
              {
                "id": "U_005E",
                "text": "^"
              },
              {
                "id": "U_00A8",
                "text": "\u00A8"
              },
              {
                "id": "U_00B4",
                "text": "\u00B4"
              },
              {
                "id": "U_00B8",
                "text": "\u00B8"
              },
              {
                "id": "U_00AF",
                "text": "\u00AF"
              },
              {
                "id": "U_00BF",
                "text": "\u00BF"
              },
              {
                "id": "U_00A1",
                "text": "\u00A1"
              },
              {
                "id": "U_00AC",
                "text": "\u00AC"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "U_00AA",
                "pad": "70",
                "text": "\u00AA"
              },
              {
                "id": "U_00BA",
                "text": "\u00BA"
              },
              {
                "id": "U_00B6",
                "text": "\u00B6"
              },
              {
                "id": "U_00A7",
                "text": "\u00A7"
              },
              {
                "id": "U_00B1",
                "text": "\u00B1"
              },
              {
                "id": "U_00D7",
                "text": "\u00D7"
              },
              {
                "id": "U_00F7",
                "text": "\u00F7"
              },
              {
                "id": "U_00A6",
                "text": "\u00A6"
              },
              {
                "id": "U_00B0",
                "text": "\u00B0"
              },
              {
                "width": "10",
                "id": "T_new_191",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "110",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "id": "U_00B5",
                "text": "\u00B5"
              },
              {
                "id": "U_00A9",
                "text": "\u00A9"
              },
              {
                "id": "U_00AE",
                "text": "\u00AE"
              },
              {
                "id": "U_00A3",
                "text": "\u00A3"
              },
              {
                "id": "U_20AC",
                "text": "\u20AC"
              },
              {
                "id": "U_00A5",
                "text": "\u00A5"
              },
              {
                "id": "U_2022",
                "text": "\u2022"
              },
              {
                "id": "U_00B7",
                "text": "\u00B7"
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
  },
  "tablet": {
    "displayUnderlying": true,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "105",
                "id": "K_Q",
                "text": "q"
              },
              {
                "width": "105",
                "id": "K_W",
                "text": "w"
              },
              {
                "width": "105",
                "id": "K_E",
                "text": "e",
                "sk": [
                  {
                    "id": "U_00E9",
                    "text": "\u00E9"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_R",
                "text": "r",
                "sk": [
                  {
                    "id": "U_0157",
                    "text": "\u0157"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_T",
                "text": "t",
                "sk": [
                  {
                    "id": "U_021B",
                    "text": "\u021B"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_Y",
                "text": "y",
                "sk": [
                  {
                    "id": "U_00FD",
                    "text": "\u00FD"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_U",
                "text": "u",
                "sk": [
                  {
                    "id": "U_0169",
                    "text": "\u0169"
                  },
                  {
                    "id": "U_00FA",
                    "text": "\u00FA"
                  },
                  {
                    "id": "U_00FC",
                    "text": "\u00FC"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_I",
                "text": "i"
              },
              {
                "width": "105",
                "id": "K_O",
                "text": "o",
                "sk": [
                  {
                    "id": "U_00F3",
                    "text": "\u00F3"
                  },
                  {
                    "id": "U_00F5",
                    "text": "\u00F5"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_P",
                "text": "p"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "width": "105",
                "id": "K_A",
                "text": "a",
                "sk": [
                  {
                    "id": "U_1EBD",
                    "text": "\u00E1"
                  },
                  {
                    "id": "U_00E3",
                    "text": "\u00E3"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_S",
                "text": "s",
                "sk": [
                  {
                    "id": "U_015B",
                    "text": "\u015B"
                  },
                  {
                    "id": "U_0219",
                    "text": "\u0219"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_D",
                "text": "d",
                "sk": [
                  {
                    "id": "U_1E0D",
                    "text": "\u1E0D"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_F",
                "text": "f"
              },
              {
                "width": "105",
                "id": "K_G",
                "text": "g",
                "sk": [
                  {
                    "id": "U_0121",
                    "text": "\u0121"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_H",
                "text": "h"
              },
              {
                "width": "105",
                "id": "K_J",
                "text": "j",
                "sk": [
                  {
                    "id": "U_01EF",
                    "text": "\u01EF"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_K",
                "text": "k",
                "sk": [
                  {
                    "id": "U_01E9",
                    "text": "\u01E9"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_L",
                "text": "l",
                "sk": [
                  {
                    "id": "U_013C",
                    "text": "\u013C"
                  }
                ]
              },
              {
                "width": "105",
                "id": "U_003F",
                "text": "?"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "105",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "width": "105",
                "id": "K_Z",
                "text": "z",
                "sk": [
                  {
                    "id": "U_1E92",
                    "text": "\u1E93"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_X",
                "text": "x"
              },
              {
                "width": "105",
                "id": "K_C",
                "text": "c"
              },
              {
                "width": "105",
                "id": "K_V",
                "text": "v"
              },
              {
                "width": "105",
                "id": "K_B",
                "text": "b"
              },
              {
                "width": "105",
                "id": "K_N",
                "text": "n",
                "sk": [
                  {
                    "id": "U_1E45",
                    "text": "\u1E45"
                  },
                  {
                    "id": "U_1E47",
                    "text": "\u1E47"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_M",
                "text": "m"
              },
              {
                "width": "105",
                "id": "U_002C",
                "text": ","
              },
              {
                "width": "105",
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
                "nextlayer": "shift",
                "width": "105",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "width": "105",
                "id": "K_LOPT",
                "text": "\uD83C\uDF10"
              },
              {
                "width": "105",
                "id": "U_002C",
                "text": "!,~",
                "sk": [
                  {
                    "id": "U_007E",
                    "text": "~"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  }
                ]
              },
              {
                "width": "465",
                "id": "K_SPACE"
              },
              {
                "width": "105",
                "id": "U_1F600",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F603",
                    "text": "\uD83D\uDE03"
                  },
                  {
                    "id": "U_1F608",
                    "text": "\uD83D\uDE08"
                  },
                  {
                    "id": "U_1F495",
                    "text": "\uD83D\uDC95"
                  },
                  {
                    "id": "U_1F821",
                    "text": "\uD83D\uDE21"
                  },
                  {
                    "id": "U_1F44D",
                    "text": "\uD83D\uDC4D"
                  }
                ]
              },
              {
                "width": "105",
                "id": "K_PERIOD",
                "text": "."
              },
              {
                "width": "105",
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
                    "id": "U_00C9",
                    "text": "\u00C9"
                  },
                  {
                    "id": "U_1EBC",
                    "text": "\u1EBC"
                  }
                ]
              },
              {
                "id": "K_R",
                "text": "R",
                "sk": [
                  {
                    "id": "U_0158",
                    "text": "\u0158"
                  },
                  {
                    "id": "U_0156",
                    "text": "\u0156"
                  }
                ]
              },
              {
                "id": "K_T",
                "text": "T",
                "sk": [
                  {
                    "id": "U_021A",
                    "text": "\u021A"
                  }
                ]
              },
              {
                "id": "K_Y",
                "text": "Y",
                "sk": [
                  {
                    "id": "U_00DD",
                    "text": "\u00DD"
                  }
                ]
              },
              {
                "id": "K_U",
                "text": "U",
                "sk": [
                  {
                    "id": "U_0168",
                    "text": "\u0168"
                  },
                  {
                    "id": "U_00DA",
                    "text": "\u00DA"
                  },
                  {
                    "id": "U_00DC",
                    "text": "\u00DC"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "I",
                "sk": [
                  {
                    "id": "U_0128",
                    "text": "\u0128"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "O",
                "sk": [
                  {
                    "id": "U_00D3",
                    "text": "\u00D3"
                  },
                  {
                    "id": "U_00D5",
                    "text": "\u00D5"
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
                "pad": "70",
                "text": "A",
                "sk": [
                  {
                    "id": "U_00C1",
                    "text": "\u00C1"
                  },
                  {
                    "id": "U_00C3",
                    "text": "\u00C3"
                  }
                ]
              },
              {
                "id": "K_S",
                "text": "S",
                "sk": [
                  {
                    "id": "U_0160",
                    "text": "\u0160"
                  },
                  {
                    "id": "U_015E",
                    "text": "\u015E"
                  },
                  {
                    "id": "U_015A",
                    "text": "\u015A"
                  },
                  {
                    "id": "U_0218",
                    "text": "\u0218"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "D",
                "sk": [
                  {
                    "id": "U_1E0C",
                    "text": "\u1E0C"
                  }
                ]
              },
              {
                "id": "K_F",
                "text": "F"
              },
              {
                "id": "K_G",
                "text": "G",
                "sk": [
                  {
                    "id": "U_01E6",
                    "text": "\u01E6"
                  },
                  {
                    "id": "U_0120",
                    "text": "\u0120"
                  }
                ]
              },
              {
                "id": "K_H",
                "text": "H"
              },
              {
                "id": "K_J",
                "text": "J",
                "sk": [
                  {
                    "id": "U_01EE",
                    "text": "\u01EE"
                  }
                ]
              },
              {
                "id": "K_K",
                "text": "K",
                "sk": [
                  {
                    "id": "U_01E8",
                    "text": "\u01E8"
                  }
                ]
              },
              {
                "id": "K_L",
                "text": "L",
                "sk": [
                  {
                    "id": "U_013B",
                    "text": "\u013B"
                  }
                ]
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
                "text": "Z",
                "sk": [
                  {
                    "id": "U_1E92",
                    "text": "\u1E92"
                  }
                ]
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
                "text": "N",
                "sk": [
                  {
                    "id": "U_1E46",
                    "text": "\u1E46"
                  },
                  {
                    "id": "U_1E44",
                    "text": "\u1E44"
                  }
                ]
              },
              {
                "id": "K_M",
                "text": "M"
              },
              {
                "id": "K_Q",
                "text": "?"
              },
              {
                "width": "141",
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
                "width": "500",
                "id": "K_SPACE"
              },
              {
                "id": "U_002E",
                "text": ".",
                "sk": [
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  }
                ]
              },
              {
                "id": "U_002C",
                "text": ","
              },
              {
                "width": "153",
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
                "layer": "shift",
                "width": "115",
                "id": "K_HYPHEN",
                "pad": "30",
                "text": "_"
              },
              {
                "width": "115",
                "id": "K_LBRKT",
                "text": "[",
                "sk": [
                  {
                    "id": "U_00AB",
                    "text": "\u00AB"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_007B",
                    "text": "{"
                  }
                ]
              },
              {
                "width": "115",
                "id": "K_RBRKT",
                "text": "]",
                "sk": [
                  {
                    "id": "U_00BB",
                    "text": "\u00BB"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  },
                  {
                    "id": "U_007D",
                    "text": "}"
                  }
                ]
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_9",
                "text": "("
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_0",
                "text": ")"
              },
              {
                "nextlayer": "symbol",
                "width": "110",
                "id": "K_SYMBOLS",
                "sp": "1",
                "text": "\u00A7"
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_4",
                "text": "$"
              },
              {
                "layer": "shift",
                "width": "115",
                "id": "K_8",
                "text": "*"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "layer": "shift",
                "id": "K_2",
                "text": "@"
              },
              {
                "layer": "shift",
                "id": "K_BKSLASH",
                "text": "|"
              },
              {
                "layer": "default",
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "layer": "default",
                "id": "K_BKSLASH",
                "text": "\\"
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
                "layer": "default",
                "id": "K_EQUAL",
                "text": "="
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
                "id": "K_3",
                "text": "#"
              }
            ]
          },
          {
            "id": "3",
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
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
                "width": "140",
                "id": "K_LOWER",
                "pad": "30",
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
                "width": "500",
                "id": "K_SPACE"
              },
              {
                "width": "90",
                "id": "K_BKSP",
                "sp": "1",
                "text": "*BkSp*"
              },
              {
                "width": "160",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "symbol",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "U_0060",
                "text": "`"
              },
              {
                "id": "U_007E",
                "text": "~"
              },
              {
                "id": "U_005E",
                "text": "^"
              },
              {
                "id": "U_00A8",
                "text": "\u00A8"
              },
              {
                "id": "U_00B4",
                "text": "\u00B4"
              },
              {
                "id": "U_00B8",
                "text": "\u00B8"
              },
              {
                "id": "U_00AF",
                "text": "\u00AF"
              },
              {
                "id": "U_00BF",
                "text": "\u00BF"
              },
              {
                "id": "U_00A1",
                "text": "\u00A1"
              },
              {
                "id": "U_00AC",
                "text": "\u00AC"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "U_00AA",
                "pad": "70",
                "text": "\u00AA"
              },
              {
                "id": "U_00BA",
                "text": "\u00BA"
              },
              {
                "id": "U_00B6",
                "text": "\u00B6"
              },
              {
                "id": "U_00A7",
                "text": "\u00A7"
              },
              {
                "id": "U_00B1",
                "text": "\u00B1"
              },
              {
                "id": "U_00D7",
                "text": "\u00D7"
              },
              {
                "id": "U_00F7",
                "text": "\u00F7"
              },
              {
                "id": "U_00A6",
                "text": "\u00A6"
              },
              {
                "id": "U_00B0",
                "text": "\u00B0"
              },
              {
                "width": "10",
                "id": "T_new_191",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "110",
                "id": "K_NUMLOCK",
                "sp": "1",
                "text": "*123*"
              },
              {
                "id": "U_00B5",
                "text": "\u00B5"
              },
              {
                "id": "U_00A9",
                "text": "\u00A9"
              },
              {
                "id": "U_00AE",
                "text": "\u00AE"
              },
              {
                "id": "U_00A3",
                "text": "\u00A3"
              },
              {
                "id": "U_20AC",
                "text": "\u20AC"
              },
              {
                "id": "U_00A5",
                "text": "\u00A5"
              },
              {
                "id": "U_2022",
                "text": "\u2022"
              },
              {
                "id": "U_00B7",
                "text": "\u00B7"
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
  this.s_plainvowels_14="aeiouAEIOU";
  this.s_acutevowels_15="áéíóúÁÉÍÓÚ";
  this.s_tildediacritic_16="ãẽĩõũÃẼĨÕŨ";
  this.KVER="14.0.285.0";
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"Á");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"Ã");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 30
        k.KDC(1,t);
        k.KO(-1,t,"C̣");
      }
      else if(k.KFCM(1,t,['C'])){
        r=m=1;   // Line 33
        k.KDC(1,t);
        k.KO(-1,t,"Ć");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 39
        k.KDC(1,t);
        k.KO(-1,t,"Ḍ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {
      if(k.KFCM(1,t,[','])){
        r=m=1;   // Line 23
        k.KDC(1,t);
        k.KO(-1,t,"É");
      }
      else if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"É");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"Ẽ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 36
        k.KDC(1,t);
        k.KO(-1,t,"Ġ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"Í");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"Ĩ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 49
        k.KDC(1,t);
        k.KO(-1,t,"Ṅ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"Ó");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"Õ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {
      if(k.KFCM(1,t,['S'])){
        r=m=1;   // Line 42
        k.KDC(1,t);
        k.KO(-1,t,"Ś");
      }
      else if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 52
        k.KDC(1,t);
        k.KO(-1,t,"Ṣ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 57
        k.KDC(1,t);
        k.KO(-1,t,"Ț");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"Ú");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"Ũ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 60
        k.KDC(1,t);
        k.KO(-1,t,"Ý");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 63
        k.KDC(1,t);
        k.KO(-1,t,"Ẓ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"á");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"ã");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 29
        k.KDC(1,t);
        k.KO(-1,t,"c̣");
      }
      else if(k.KFCM(1,t,['c'])){
        r=m=1;   // Line 32
        k.KDC(1,t);
        k.KO(-1,t,"ć");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 38
        k.KDC(1,t);
        k.KO(-1,t,"ḍ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {
      if(k.KFCM(1,t,[','])){
        r=m=1;   // Line 22
        k.KDC(1,t);
        k.KO(-1,t,"é");
      }
      else if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"é");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"ẽ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 35
        k.KDC(1,t);
        k.KO(-1,t,"ġ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {
      if(k.KFCM(1,t,['s'])){
        r=m=1;   // Line 41
        k.KDC(1,t);
        k.KO(-1,t,"ś");
      }
      else if(k.KFCM(1,t,['ś'])){
        r=m=1;   // Line 44
        k.KDC(1,t);
        k.KO(-1,t,"sh");
      }
      else if(k.KFCM(1,t,['Ś'])){
        r=m=1;   // Line 45
        k.KDC(1,t);
        k.KO(-1,t,"Sh");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"í");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"ĩ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 48
        k.KDC(1,t);
        k.KO(-1,t,"ṅ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"ó");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"õ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 51
        k.KDC(1,t);
        k.KO(-1,t,"ṣ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 56
        k.KDC(1,t);
        k.KO(-1,t,"ț");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {
      if(k.KFCM(1,t,['\''])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"ú");
      }
      else if(k.KFCM(1,t,['~'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"ũ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 59
        k.KDC(1,t);
        k.KO(-1,t,"ý");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {
      if(k.KFCM(1,t,['.'])){
        r=m=1;   // Line 62
        k.KDC(1,t);
        k.KO(-1,t,"ẓ");
      }
    }
    return r;
  };
}
