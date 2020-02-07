if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_urdu_phonetic());
}
function Keyboard_urdu_phonetic()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this.KI="Keyboard_urdu_phonetic";
  this.KN="Burushãski Girminãs Urdu";
  this.KMINVER="10.0";
  this.KV={F:' 1em "Urdu Typesetting"',K102:0};
  this.KV.KLS={
    "leftalt-shift": ["","","","","","ݻ","ݺ","ݶ","ݵ","ݹ","ݸ","ݴ","ݳ","","","","","","","","","ݷ","","","","","","","","","","","","ݽ","ڏ","","","","ڞ","","","","","","","","","","","ژ","څ","ݼ","","","ݣ","","","","","","","","","",""],
    "leftalt": ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","ڃ","","","","","","","","","","","","",""],
    "shift": ["!",",","؍","؍","ء","ي","ؐ","ٔ","ٌ",")","(","(",")","","","","ْ","ﷺ","ؑ","ڑ","ٹ","؁","ٗ","ٰ","ۃ","ۃ","ُ","‘","","","","","ٓ","ص","ڈ","ٖ","غ","ح","ض","خ","ؒ",":","ـ","","","","","","","ذ","ژ","ث","ظ","ؓ","ں","إ","ِ","َ","؟","","","","","",""],
    "default": ["ٍ","۱","۲","۳","۴","۵","۶","۷","۸","۹","۰","أ","ؤ","","","","ق","و","ع","ر","ت","ے","ئ","ی","ہ","پ","]","[","؎","","","","ا","س","د","ف","گ","ھ","ج","ک","ل","؛","۔","","","","","","","ز","ش","چ","ط","ب","ن","م","،","۔","ْ","","","","","",""]
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
  this.KDU=0;
  this.KH='';
  this.KM=0;
  this.KBVER="1.2";
  this.KMBM=modCodes.SHIFT | modCodes.CTRL | modCodes.ALT /* 0x0070 */;
  this.KRTL=1;
  this.KVKL={
  "tablet": {
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_Q",
                "text": "\u0642"
              },
              {
                "id": "K_W",
                "text": "\u0648",
                "sk": [
                  {
                    "text": "\u0778",
                    "id": "U_0778"
                  },
                  {
                    "text": "\u0779",
                    "id": "U_0779"
                  }
                ]
              },
              {
                "id": "K_E",
                "text": "\u0639"
              },
              {
                "id": "K_R",
                "text": "\u0631"
              },
              {
                "id": "K_T",
                "text": "\u062A"
              },
              {
                "id": "K_Y",
                "text": "\u06D2",
                "sk": [
                  {
                    "text": "\u077A",
                    "id": "U_077A"
                  },
                  {
                    "text": "\u077B",
                    "id": "U_077B"
                  }
                ]
              },
              {
                "id": "K_U",
                "text": "\u0621"
              },
              {
                "id": "K_I",
                "text": "\u06CC",
                "sk": [
                  {
                    "text": "\u0775",
                    "id": "U_0775"
                  },
                  {
                    "text": "\u0776",
                    "id": "U_0776"
                  },
                  {
                    "text": "\u0777",
                    "id": "U_0777"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "\u06C1"
              },
              {
                "id": "K_P",
                "text": "\u067E"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "\u0627",
                "pad": "50",
                "sk": [
                  {
                    "text": "\u0773",
                    "id": "U_0773"
                  },
                  {
                    "text": "\u0774",
                    "id": "U_0774"
                  }
                ]
              },
              {
                "id": "K_S",
                "text": "\u0633",
                "sk": [
                  {
                    "text": "\u077D",
                    "id": "U_077D"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "\u062F",
                "sk": [
                  {
                    "text": "\u068F",
                    "id": "U_068F"
                  }
                ]
              },
              {
                "id": "K_F",
                "text": "\u0641"
              },
              {
                "id": "K_G",
                "text": "\u06AF"
              },
              {
                "id": "K_H",
                "text": "\u06BE"
              },
              {
                "id": "K_J",
                "text": "\u062C",
                "sk": [
                  {
                    "text": "\u069E",
                    "id": "U_069E"
                  }
                ]
              },
              {
                "id": "K_K",
                "text": "\u0643"
              },
              {
                "id": "K_L",
                "text": "\u0644"
              },
              {
                "id": "T_new_77",
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
                "sp": "1",
                "nextlayer": "shift"
              },
              {
                "id": "K_Z",
                "text": "\u0632",
                "sk": [
                  {
                    "text": "\u0698",
                    "id": "U_0698"
                  }
                ]
              },
              {
                "id": "K_X",
                "text": "\u0634",
                "sk": [
                  {
                    "text": "\u0685",
                    "id": "U_0685"
                  }
                ]
              },
              {
                "id": "K_C",
                "text": "\u0686",
                "sk": [
                  {
                    "text": "\u077C",
                    "id": "U_077C"
                  }
                ]
              },
              {
                "id": "K_V",
                "text": "\u0637"
              },
              {
                "id": "K_B",
                "text": "\u0628"
              },
              {
                "id": "K_N",
                "text": "\u0646",
                "sk": [
                  {
                    "text": "\u0763",
                    "id": "U_0763"
                  }
                ]
              },
              {
                "id": "K_M",
                "text": "\u0645"
              },
              {
                "id": "K_PERIOD",
                "text": "\u06D4",
                "sk": [
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061F",
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
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061B",
                    "id": "K_COLON"
                  },
                  {
                    "text": "\u060C",
                    "id": "K_COMMA"
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
                "id": "K_Q",
                "text": "\u0652"
              },
              {
                "id": "K_W",
                "text": "\uFDFA"
              },
              {
                "id": "K_E",
                "text": "\u0611"
              },
              {
                "id": "K_R",
                "text": "\u0691"
              },
              {
                "id": "K_T",
                "text": "\u0679"
              },
              {
                "id": "K_BKQUOTE",
                "text": "\u064B",
                "layer": "shift"
              },
              {
                "id": "K_U",
                "text": "\u060C"
              },
              {
                "id": "K_I",
                "text": "\u0670"
              },
              {
                "id": "K_O",
                "text": "\u06C3"
              },
              {
                "id": "K_P",
                "text": "\u064F"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "\u0653",
                "pad": "50"
              },
              {
                "id": "K_S",
                "text": "\u0635"
              },
              {
                "id": "K_D",
                "text": "\u0688"
              },
              {
                "id": "K_F",
                "text": "\u0656"
              },
              {
                "id": "K_G",
                "text": "\u063A"
              },
              {
                "id": "K_H",
                "text": "\u062D"
              },
              {
                "id": "K_J",
                "text": "\u0636"
              },
              {
                "id": "K_K",
                "text": "\u062E"
              },
              {
                "id": "K_L",
                "text": "\u0612"
              },
              {
                "id": "T_new_707",
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
                "sp": "2",
                "nextlayer": "default"
              },
              {
                "id": "K_Z",
                "text": "\u0630"
              },
              {
                "id": "K_X",
                "text": "\u0698"
              },
              {
                "id": "K_C",
                "text": "\u062B"
              },
              {
                "id": "K_V",
                "text": "\u0638"
              },
              {
                "id": "K_B",
                "text": "\u0613"
              },
              {
                "id": "K_N",
                "text": "\u06BA"
              },
              {
                "id": "K_BKQUOTE",
                "text": "\u064D",
                "layer": "default"
              },
              {
                "id": "K_PERIOD",
                "text": "\u064E",
                "sk": [
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061F",
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
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061B",
                    "id": "K_COLON",
                    "layer": "default"
                  },
                  {
                    "text": "\u060C",
                    "id": "K_COMMA",
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
                "id": "K_1",
                "text": "\u0661",
                "pad": "50",
                "layer": "alt"
              },
              {
                "id": "K_2",
                "text": "\u0662",
                "layer": "alt"
              },
              {
                "id": "K_3",
                "text": "\u0663",
                "layer": "alt"
              },
              {
                "id": "K_4",
                "text": "\u0664",
                "layer": "alt"
              },
              {
                "id": "K_5",
                "text": "\u0665",
                "layer": "alt"
              },
              {
                "id": "K_6",
                "text": "\u0666",
                "layer": "alt"
              },
              {
                "id": "K_7",
                "text": "\u0667",
                "layer": "alt"
              },
              {
                "id": "K_8",
                "text": "\u0668",
                "layer": "alt"
              },
              {
                "id": "K_9",
                "text": "\u0669",
                "layer": "alt"
              },
              {
                "id": "T_new_111",
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
                "text": "]",
                "pad": "110",
                "sk": [
                  {
                    "text": "\u00AB",
                    "id": "U_00AB"
                  },
                  {
                    "text": "<",
                    "id": "U_003C"
                  },
                  {
                    "text": "{",
                    "id": "K_LBRKT",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_9",
                "text": ")",
                "layer": "shift"
              },
              {
                "id": "K_0",
                "text": "(",
                "layer": "shift"
              },
              {
                "id": "K_RBRKT",
                "text": "[",
                "sk": [
                  {
                    "text": "\u00BB",
                    "id": "U_00BB"
                  },
                  {
                    "text": ">",
                    "id": "U_003E"
                  },
                  {
                    "text": "}",
                    "id": "K_RBRKT",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_SLASH",
                "text": "\u066A",
                "layer": "ctrl"
              },
              {
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\",
                "layer": "default"
              },
              {
                "id": "K_0",
                "text": "\u0660",
                "layer": "alt"
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
                "sp": "2",
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
    "fontsize": "14pk",
    "displayUnderlying": false,
    "font": "Jameel Noori Nastaleeq"
  },
  "phone": {
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_Q",
                "text": "\u0642"
              },
              {
                "id": "K_W",
                "text": "\u0648",
                "sk": [
                  {
                    "text": "\u0778",
                    "id": "U_0778"
                  },
                  {
                    "text": "\u0779",
                    "id": "U_0779"
                  }
                ]
              },
              {
                "id": "K_E",
                "text": "\u0639"
              },
              {
                "id": "K_R",
                "text": "\u0631"
              },
              {
                "id": "K_T",
                "text": "\u062A"
              },
              {
                "id": "K_Y",
                "text": "\u06D2",
                "sk": [
                  {
                    "text": "\u077A",
                    "id": "U_077A"
                  },
                  {
                    "text": "\u077B",
                    "id": "U_077B"
                  }
                ]
              },
              {
                "id": "K_U",
                "text": "\u0621"
              },
              {
                "id": "K_I",
                "text": "\u06CC",
                "sk": [
                  {
                    "text": "\u0775",
                    "id": "U_0775"
                  },
                  {
                    "text": "\u0776",
                    "id": "U_0776"
                  },
                  {
                    "text": "\u0777",
                    "id": "U_0777"
                  }
                ]
              },
              {
                "id": "K_O",
                "text": "\u06C1"
              },
              {
                "id": "K_P",
                "text": "\u067E"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "\u0627",
                "pad": "50",
                "sk": [
                  {
                    "text": "\u0773",
                    "id": "U_0773"
                  },
                  {
                    "text": "\u0774",
                    "id": "U_0774"
                  }
                ]
              },
              {
                "id": "K_S",
                "text": "\u0633",
                "sk": [
                  {
                    "text": "\u077D",
                    "id": "U_077D"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "\u062F",
                "sk": [
                  {
                    "text": "\u068F",
                    "id": "U_068F"
                  }
                ]
              },
              {
                "id": "K_F",
                "text": "\u0641"
              },
              {
                "id": "K_G",
                "text": "\u06AF"
              },
              {
                "id": "K_H",
                "text": "\u06BE"
              },
              {
                "id": "K_J",
                "text": "\u062C",
                "sk": [
                  {
                    "text": "\u069E",
                    "id": "U_069E"
                  }
                ]
              },
              {
                "id": "K_K",
                "text": "\u0643"
              },
              {
                "id": "K_L",
                "text": "\u0644"
              },
              {
                "id": "T_new_77",
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
                "sp": "1",
                "nextlayer": "shift"
              },
              {
                "id": "K_Z",
                "text": "\u0632",
                "sk": [
                  {
                    "text": "\u0698",
                    "id": "U_0698"
                  }
                ]
              },
              {
                "id": "K_X",
                "text": "\u0634",
                "sk": [
                  {
                    "text": "\u0685",
                    "id": "U_0685"
                  }
                ]
              },
              {
                "id": "K_C",
                "text": "\u0686",
                "sk": [
                  {
                    "text": "\u077C",
                    "id": "U_077C"
                  }
                ]
              },
              {
                "id": "K_V",
                "text": "\u0637"
              },
              {
                "id": "K_B",
                "text": "\u0628"
              },
              {
                "id": "K_N",
                "text": "\u0646",
                "sk": [
                  {
                    "text": "\u0763",
                    "id": "U_0763"
                  }
                ]
              },
              {
                "id": "K_M",
                "text": "\u0645"
              },
              {
                "id": "K_PERIOD",
                "text": "\u06D4",
                "sk": [
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061F",
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
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061B",
                    "id": "K_COLON"
                  },
                  {
                    "text": "\u060C",
                    "id": "K_COMMA"
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
                "id": "K_Q",
                "text": "\u0652"
              },
              {
                "id": "K_W",
                "text": "\uFDFA"
              },
              {
                "id": "K_E",
                "text": "\u0611"
              },
              {
                "id": "K_R",
                "text": "\u0691"
              },
              {
                "id": "K_T",
                "text": "\u0679"
              },
              {
                "id": "K_BKQUOTE",
                "text": "\u064B",
                "layer": "shift"
              },
              {
                "id": "K_U",
                "text": "\u060C"
              },
              {
                "id": "K_I",
                "text": "\u0670"
              },
              {
                "id": "K_O",
                "text": "\u06C3"
              },
              {
                "id": "K_P",
                "text": "\u064F"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "\u0653",
                "pad": "50"
              },
              {
                "id": "K_S",
                "text": "\u0635"
              },
              {
                "id": "K_D",
                "text": "\u0688"
              },
              {
                "id": "K_F",
                "text": "\u0656"
              },
              {
                "id": "K_G",
                "text": "\u063A"
              },
              {
                "id": "K_H",
                "text": "\u062D"
              },
              {
                "id": "K_J",
                "text": "\u0636"
              },
              {
                "id": "K_K",
                "text": "\u062E"
              },
              {
                "id": "K_L",
                "text": "\u0612"
              },
              {
                "id": "T_new_707",
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
                "sp": "2",
                "nextlayer": "default"
              },
              {
                "id": "K_Z",
                "text": "\u0630"
              },
              {
                "id": "K_X",
                "text": "\u0698"
              },
              {
                "id": "K_C",
                "text": "\u062B"
              },
              {
                "id": "K_V",
                "text": "\u0638"
              },
              {
                "id": "K_B",
                "text": "\u0613"
              },
              {
                "id": "K_N",
                "text": "\u06BA"
              },
              {
                "id": "K_BKQUOTE",
                "text": "\u064D",
                "layer": "default"
              },
              {
                "id": "K_PERIOD",
                "text": "\u064E",
                "sk": [
                  {
                    "text": "!",
                    "id": "K_1",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061F",
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
                    "text": ":",
                    "id": "K_COLON",
                    "layer": "shift"
                  },
                  {
                    "text": "\u061B",
                    "id": "K_COLON",
                    "layer": "default"
                  },
                  {
                    "text": "\u060C",
                    "id": "K_COMMA",
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
                "id": "K_1",
                "text": "\u0661",
                "pad": "50",
                "layer": "alt"
              },
              {
                "id": "K_2",
                "text": "\u0662",
                "layer": "alt"
              },
              {
                "id": "K_3",
                "text": "\u0663",
                "layer": "alt"
              },
              {
                "id": "K_4",
                "text": "\u0664",
                "layer": "alt"
              },
              {
                "id": "K_5",
                "text": "\u0665",
                "layer": "alt"
              },
              {
                "id": "K_6",
                "text": "\u0666",
                "layer": "alt"
              },
              {
                "id": "K_7",
                "text": "\u0667",
                "layer": "alt"
              },
              {
                "id": "K_8",
                "text": "\u0668",
                "layer": "alt"
              },
              {
                "id": "K_9",
                "text": "\u0669",
                "layer": "alt"
              },
              {
                "id": "T_new_111",
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
                "text": "]",
                "pad": "110",
                "sk": [
                  {
                    "text": "\u00AB",
                    "id": "U_00AB"
                  },
                  {
                    "text": "<",
                    "id": "U_003C"
                  },
                  {
                    "text": "{",
                    "id": "K_LBRKT",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_9",
                "text": ")",
                "layer": "shift"
              },
              {
                "id": "K_0",
                "text": "(",
                "layer": "shift"
              },
              {
                "id": "K_RBRKT",
                "text": "[",
                "sk": [
                  {
                    "text": "\u00BB",
                    "id": "U_00BB"
                  },
                  {
                    "text": ">",
                    "id": "U_003E"
                  },
                  {
                    "text": "}",
                    "id": "K_RBRKT",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_SLASH",
                "text": "\u066A",
                "layer": "ctrl"
              },
              {
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\",
                "layer": "default"
              },
              {
                "id": "K_0",
                "text": "\u0660",
                "layer": "alt"
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
                "sp": "2",
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
    "fontsize": "14pk",
    "displayUnderlying": false,
    "font": "Jameel Noori Nastaleeq"
  }
}
;
  this.KVER="12.0.64.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 22
        k.KDC(0,t);
        k.KO(-1,t,"ݳ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 80
        k.KDC(0,t);
        k.KO(-1,t,",");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 46
        k.KDC(0,t);
        k.KO(-1,t,"ـ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 20
        k.KDC(0,t);
        k.KO(-1,t,"ݸ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 78
        k.KDC(0,t);
        k.KO(-1,t,"؍");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 19
        k.KDC(0,t);
        k.KO(-1,t,"ݹ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 77
        k.KDC(0,t);
        k.KO(-1,t,"ء");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 35
        k.KDC(0,t);
        k.KO(-1,t,"ݻ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 76
        k.KDC(0,t);
        k.KO(-1,t,"ي");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 32
        k.KDC(0,t);
        k.KO(-1,t,"ݶ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 74
        k.KDC(0,t);
        k.KO(-1,t,"ٔ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 100
        k.KDC(0,t);
        k.KO(-1,t,"۔");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 72
        k.KDC(0,t);
        k.KO(-1,t,")");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 71
        k.KDC(0,t);
        k.KO(-1,t,"(");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 33
        k.KDC(0,t);
        k.KO(-1,t,"ݵ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 73
        k.KDC(0,t);
        k.KO(-1,t,"ٌ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 69
        k.KDC(0,t);
        k.KO(-1,t,")");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 103
        k.KDC(0,t);
        k.KO(-1,t,"،");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 94
        k.KDC(0,t);
        k.KO(-1,t,"أ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 102
        k.KDC(0,t);
        k.KO(-1,t,"۔");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 101
        k.KDC(0,t);
        k.KO(-1,t,"ْ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 93
        k.KDC(0,t);
        k.KO(-1,t,"۰");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 84
        k.KDC(0,t);
        k.KO(-1,t,"۱");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KO(-1,t,"۲");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 86
        k.KDC(0,t);
        k.KO(-1,t,"۳");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 87
        k.KDC(0,t);
        k.KO(-1,t,"۴");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 88
        k.KDC(0,t);
        k.KO(-1,t,"۵");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 89
        k.KDC(0,t);
        k.KO(-1,t,"۶");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 90
        k.KDC(0,t);
        k.KO(-1,t,"۷");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 91
        k.KDC(0,t);
        k.KO(-1,t,"۸");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 92
        k.KDC(0,t);
        k.KO(-1,t,"۹");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 47
        k.KDC(0,t);
        k.KO(-1,t,":");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 99
        k.KDC(0,t);
        k.KO(-1,t,"؛");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 38
        k.KDC(0,t);
        k.KO(-1,t,"ِ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 95
        k.KDC(0,t);
        k.KO(-1,t,"ؤ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 37
        k.KDC(0,t);
        k.KO(-1,t,"َ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 36
        k.KDC(0,t);
        k.KO(-1,t,"؟");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 21
        k.KDC(0,t);
        k.KO(-1,t,"ݳ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 79
        k.KDC(0,t);
        k.KO(-1,t,"؍");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 56
        k.KDC(0,t);
        k.KO(-1,t,"ٓ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 41
        k.KDC(0,t);
        k.KO(-1,t,"ؓ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 31
        k.KDC(0,t);
        k.KO(-1,t,"ݼ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 43
        k.KDC(0,t);
        k.KO(-1,t,"ث");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 29
        k.KDC(0,t);
        k.KO(-1,t,"ڏ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 54
        k.KDC(0,t);
        k.KO(-1,t,"ڈ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 66
        k.KDC(0,t);
        k.KO(-1,t,"ؑ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 53
        k.KDC(0,t);
        k.KO(-1,t,"ٖ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 52
        k.KDC(0,t);
        k.KO(-1,t,"غ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 51
        k.KDC(0,t);
        k.KO(-1,t,"ح");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 61
        k.KDC(0,t);
        k.KO(-1,t,"ٰ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 26
        k.KDC(0,t);
        k.KO(-1,t,"ڞ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 50
        k.KDC(0,t);
        k.KO(-1,t,"ض");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 49
        k.KDC(0,t);
        k.KO(-1,t,"خ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 48
        k.KDC(0,t);
        k.KO(-1,t,"ؒ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 39
        k.KDC(0,t);
        k.KO(-1,t,"إ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 25
        k.KDC(0,t);
        k.KO(-1,t,"ݣ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 40
        k.KDC(0,t);
        k.KO(-1,t,"ں");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"ۃ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 59
        k.KDC(0,t);
        k.KO(-1,t,"ۃ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 68
        k.KDC(0,t);
        k.KO(-1,t,"ْ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 65
        k.KDC(0,t);
        k.KO(-1,t,"ڑ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 27
        k.KDC(0,t);
        k.KO(-1,t,"ݽ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 55
        k.KDC(0,t);
        k.KO(-1,t,"ص");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 64
        k.KDC(0,t);
        k.KO(-1,t,"ٹ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 62
        k.KDC(0,t);
        k.KO(-1,t,"ٗ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 42
        k.KDC(0,t);
        k.KO(-1,t,"ظ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 67
        k.KDC(0,t);
        k.KO(-1,t,"ﷺ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 30
        k.KDC(0,t);
        k.KO(-1,t,"څ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 44
        k.KDC(0,t);
        k.KO(-1,t,"ژ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 24
        k.KDC(0,t);
        k.KO(-1,t,"ݷ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"؁");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 28
        k.KDC(0,t);
        k.KO(-1,t,"ژ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 45
        k.KDC(0,t);
        k.KO(-1,t,"ذ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 98
        k.KDC(0,t);
        k.KO(-1,t,"]");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 96
        k.KDC(0,t);
        k.KO(-1,t,"؎");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 97
        k.KDC(0,t);
        k.KO(-1,t,"[");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.CTRL | modCodes.VIRTUAL_KEY /* 0x4030 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 34
        k.KDC(0,t);
        k.KO(-1,t,"ݺ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 75
        k.KDC(0,t);
        k.KO(-1,t,"ؐ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 70
        k.KDC(0,t);
        k.KO(-1,t,"(");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 83
        k.KDC(0,t);
        k.KO(-1,t,"ٍ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 120
        k.KDC(0,t);
        k.KO(-1,t,"ا");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"ب");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"چ");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 129
        k.KDC(0,t);
        k.KO(-1,t,"ڃ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 127
        k.KDC(0,t);
        k.KO(-1,t,"د");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 110
        k.KDC(0,t);
        k.KO(-1,t,"ع");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 126
        k.KDC(0,t);
        k.KO(-1,t,"ف");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 125
        k.KDC(0,t);
        k.KO(-1,t,"گ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 124
        k.KDC(0,t);
        k.KO(-1,t,"ھ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 106
        k.KDC(0,t);
        k.KO(-1,t,"ی");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 123
        k.KDC(0,t);
        k.KO(-1,t,"ج");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 122
        k.KDC(0,t);
        k.KO(-1,t,"ک");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 121
        k.KDC(0,t);
        k.KO(-1,t,"ل");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"م");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ن");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 105
        k.KDC(0,t);
        k.KO(-1,t,"ہ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 104
        k.KDC(0,t);
        k.KO(-1,t,"پ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 112
        k.KDC(0,t);
        k.KO(-1,t,"ق");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 109
        k.KDC(0,t);
        k.KO(-1,t,"ر");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 128
        k.KDC(0,t);
        k.KO(-1,t,"س");
      }
    }
      if(m) {}
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 108
        k.KDC(0,t);
        k.KO(-1,t,"ت");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 82
        k.KDC(0,t);
        k.KO(-1,t,"ئ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 116
        k.KDC(0,t);
        k.KO(-1,t,"ط");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 111
        k.KDC(0,t);
        k.KO(-1,t,"و");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"ش");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 107
        k.KDC(0,t);
        k.KO(-1,t,"ے");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 119
        k.KDC(0,t);
        k.KO(-1,t,"ز");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 58
        k.KDC(0,t);
        k.KO(-1,t,"ُ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 57
        k.KDC(0,t);
        k.KO(-1,t,"‘");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 81
        k.KDC(0,t);
        k.KO(-1,t,"!");
      }
    }
    return r;
  };
}
