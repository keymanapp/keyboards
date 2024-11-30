
KeymanWeb.KR(new Keyboard_mjh_sibe());

function Keyboard_mjh_sibe()
{
  
  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_mjh_sibe";
  this.KN="MJH Sibe";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Draft Mongolian Baiti"',K102:0};
  this.KV.KLS={
    "shift": ["to see keyboard mapping email greyson@postone.net","᠋","᠌","᠍","᠏","％","‍","‘","’","（","）","᠊","＋","","","","᠇","ᢁ","ᢁ","ᡰ","ᢁ","ᢁ","ᡡ","ᡟ","ᢁ","ᢁ","“","”","᠁","","","","ᢁ","ᡧ","ᢁ","ᢁ","ᡬ","ᡭ","ᢁ","ᠺ","ᢁ","᠄","——","","","","","","","ᡲ","ᢁ","ᡱ","ᢁ","ᢁ","ᡢ","ᢁ","『","』","？","","","","","","᠎"],
    "default": ["～","1","2","3","4","5","6","7","8","9","0","ᢁ","＝","","","","ᠴ","ᠸ","ᡝ","ᠷ","ᡨ","ᠶ","ᡠ","ᡞ","ᠣ","ᡦ","［","］","、","","","","ᠠ","ᠰ","ᡩ","ᡫ","ᡤ","ᡥ","ᡪ","ᡣ","ᠯ","；","－","","","","","","","ᡯ","ᢁ","ᡮ","ᢁ","ᠪ","ᠨ","ᠮ","，","。","！","","","","","",""]
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
  this.KBVER="1.0";
  this.KMBM=0x0010;
  this.KVKL={
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
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "text": "ᢁ",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "ᠸ"
              },
              {
                "id": "K_E",
                "text": "ᡝ"
              },
              {
                "id": "K_R",
                "text": "ᡰ"
              },
              {
                "id": "K_T",
                "text": "ᡨ"
              },
              {
                "id": "K_Y",
                "text": "ᠶ"
              },
              {
                "id": "K_U",
                "text": "ᡡ"
              },
              {
                "id": "K_I",
                "text": "ᡞ"
              },
              {
                "id": "K_O",
                "text": "ᠣ"
              },
              {
                "id": "K_P",
                "text": "ᡦ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
              },
              {
                "id": "T_new_191",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "᠇"
              },
              {
                "id": "K_A",
                "text": "ᠠ"
              },
              {
                "id": "K_S",
                "text": "ᠰ"
              },
              {
                "id": "K_D",
                "text": "ᡩ"
              },
              {
                "id": "K_F",
                "text": "ᡫ"
              },
              {
                "id": "K_G",
                "text": "ᡤ"
              },
              {
                "id": "K_H",
                "text": "ᡥ"
              },
              {
                "id": "K_J",
                "text": "ᡪ"
              },
              {
                "id": "K_K",
                "text": "ᡣ"
              },
              {
                "id": "K_L",
                "text": "ᠯ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡯ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᡱ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᠪ"
              },
              {
                "id": "K_N",
                "text": "ᠨ"
              },
              {
                "id": "K_M",
                "text": "ᠮ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "id": "T_new_217",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "width": "930"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "145",
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
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "ᢁ"
              },
              {
                "id": "K_2",
                "text": "ᢁ"
              },
              {
                "id": "K_3",
                "text": "ᢁ"
              },
              {
                "id": "K_4",
                "text": "ᢁ"
              },
              {
                "id": "K_5",
                "text": "ᢁ"
              },
              {
                "id": "K_6",
                "text": "ᢁ"
              },
              {
                "id": "K_7",
                "text": "ᢁ"
              },
              {
                "id": "K_8",
                "text": "ᢁ"
              },
              {
                "id": "K_9",
                "text": "ᢁ"
              },
              {
                "id": "K_0",
                "text": "ᢁ"
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "text": "ᢁ",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "ᢁ"
              },
              {
                "id": "K_E",
                "text": "ᢁ"
              },
              {
                "id": "K_R",
                "text": "ᠷ"
              },
              {
                "id": "K_T",
                "text": "ᢁ"
              },
              {
                "id": "K_Y",
                "text": "ᢁ"
              },
              {
                "id": "K_U",
                "text": "ᡠ"
              },
              {
                "id": "K_I",
                "text": "ᡟ"
              },
              {
                "id": "K_O",
                "text": "ᢁ"
              },
              {
                "id": "K_P",
                "text": "ᢁ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
              },
              {
                "id": "T_new_191",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_A",
                "text": "ᢁ"
              },
              {
                "id": "K_S",
                "text": "ᡧ"
              },
              {
                "id": "K_D",
                "text": "ᢁ"
              },
              {
                "id": "K_F",
                "text": "ᢁ"
              },
              {
                "id": "K_G",
                "text": "ᡬ"
              },
              {
                "id": "K_H",
                "text": "ᡭ"
              },
              {
                "id": "K_J",
                "text": "ᡲ"
              },
              {
                "id": "K_K",
                "text": "ᠺ"
              },
              {
                "id": "K_L",
                "text": "ᢁ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡮ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᠴ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᢁ"
              },
              {
                "id": "K_N",
                "text": "ᡢ"
              },
              {
                "id": "K_M",
                "text": "ᢁ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "id": "T_new_217",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "width": "930"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "145",
                "sp": "1"
              }
            ]
          }
        ]
      }
    ],
    "font": "Draft Mongolian Baiti"
  },
  "desktop": {
    "displayUnderlying": true,
    "layer": [
      {
        "id": "default",
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
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "text": "ᢁ",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "ᠸ"
              },
              {
                "id": "K_E",
                "text": "ᡝ"
              },
              {
                "id": "K_R",
                "text": "ᡰ"
              },
              {
                "id": "K_T",
                "text": "ᡨ"
              },
              {
                "id": "K_Y",
                "text": "ᠶ"
              },
              {
                "id": "K_U",
                "text": "ᡡ"
              },
              {
                "id": "K_I",
                "text": "ᡞ"
              },
              {
                "id": "K_O",
                "text": "ᠣ"
              },
              {
                "id": "K_P",
                "text": "ᡦ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
              },
              {
                "id": "T_new_191",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "᠇"
              },
              {
                "id": "K_A",
                "text": "ᠠ"
              },
              {
                "id": "K_S",
                "text": "ᠰ"
              },
              {
                "id": "K_D",
                "text": "ᡩ"
              },
              {
                "id": "K_F",
                "text": "ᡫ"
              },
              {
                "id": "K_G",
                "text": "ᡤ"
              },
              {
                "id": "K_H",
                "text": "ᡥ"
              },
              {
                "id": "K_J",
                "text": "ᡪ"
              },
              {
                "id": "K_K",
                "text": "ᡣ"
              },
              {
                "id": "K_L",
                "text": "ᠯ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡯ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᡱ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᠪ"
              },
              {
                "id": "K_N",
                "text": "ᠨ"
              },
              {
                "id": "K_M",
                "text": "ᠮ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "id": "T_new_217",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "width": "930"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "145",
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
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "ᢁ"
              },
              {
                "id": "K_2",
                "text": "ᢁ"
              },
              {
                "id": "K_3",
                "text": "ᢁ"
              },
              {
                "id": "K_4",
                "text": "ᢁ"
              },
              {
                "id": "K_5",
                "text": "ᢁ"
              },
              {
                "id": "K_6",
                "text": "ᢁ"
              },
              {
                "id": "K_7",
                "text": "ᢁ"
              },
              {
                "id": "K_8",
                "text": "ᢁ"
              },
              {
                "id": "K_9",
                "text": "ᢁ"
              },
              {
                "id": "K_0",
                "text": "ᢁ"
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "pad": "75",
                "text": "ᢁ"
              },
              {
                "id": "K_W",
                "text": "ᢁ"
              },
              {
                "id": "K_E",
                "text": "ᢁ"
              },
              {
                "id": "K_R",
                "text": "ᠷ"
              },
              {
                "id": "K_T",
                "text": "ᢁ"
              },
              {
                "id": "K_Y",
                "text": "ᢁ"
              },
              {
                "id": "K_U",
                "text": "ᡠ"
              },
              {
                "id": "K_I",
                "text": "ᡟ"
              },
              {
                "id": "K_O",
                "text": "ᢁ"
              },
              {
                "id": "K_P",
                "text": "ᢁ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
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
                "id": "K_BKQUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_A",
                "text": "ᢁ"
              },
              {
                "id": "K_S",
                "text": "ᡧ"
              },
              {
                "id": "K_D",
                "text": "ᢁ"
              },
              {
                "id": "K_F",
                "text": "ᢁ"
              },
              {
                "id": "K_G",
                "text": "ᡬ"
              },
              {
                "id": "K_H",
                "text": "ᡭ"
              },
              {
                "id": "K_J",
                "text": "ᡲ"
              },
              {
                "id": "K_K",
                "text": "ᠺ"
              },
              {
                "id": "K_L",
                "text": "ᢁ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "width": "160",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡮ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᠴ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᢁ"
              },
              {
                "id": "K_N",
                "text": "ᡢ"
              },
              {
                "id": "K_M",
                "text": "ᢁ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "width": "140",
                "id": "K_LOPT",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "930",
                "id": "K_SPACE"
              },
              {
                "width": "145",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      }
    ],
    "font": "Draft Mongolian Baiti"
  },
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
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "text": "ᢁ",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "ᠸ"
              },
              {
                "id": "K_E",
                "text": "ᡝ"
              },
              {
                "id": "K_R",
                "text": "ᡰ"
              },
              {
                "id": "K_T",
                "text": "ᡨ"
              },
              {
                "id": "K_Y",
                "text": "ᠶ"
              },
              {
                "id": "K_U",
                "text": "ᡡ"
              },
              {
                "id": "K_I",
                "text": "ᡞ"
              },
              {
                "id": "K_O",
                "text": "ᠣ"
              },
              {
                "id": "K_P",
                "text": "ᡦ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
              },
              {
                "id": "T_new_191",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "᠇"
              },
              {
                "id": "K_A",
                "text": "ᠠ"
              },
              {
                "id": "K_S",
                "text": "ᠰ"
              },
              {
                "id": "K_D",
                "text": "ᡩ"
              },
              {
                "id": "K_F",
                "text": "ᡫ"
              },
              {
                "id": "K_G",
                "text": "ᡤ"
              },
              {
                "id": "K_H",
                "text": "ᡥ"
              },
              {
                "id": "K_J",
                "text": "ᡪ"
              },
              {
                "id": "K_K",
                "text": "ᡣ"
              },
              {
                "id": "K_L",
                "text": "ᠯ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡯ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᡱ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᠪ"
              },
              {
                "id": "K_N",
                "text": "ᠨ"
              },
              {
                "id": "K_M",
                "text": "ᠮ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "id": "T_new_217",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "width": "930"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "145",
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
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "ᢁ"
              },
              {
                "id": "K_2",
                "text": "ᢁ"
              },
              {
                "id": "K_3",
                "text": "ᢁ"
              },
              {
                "id": "K_4",
                "text": "ᢁ"
              },
              {
                "id": "K_5",
                "text": "ᢁ"
              },
              {
                "id": "K_6",
                "text": "ᢁ"
              },
              {
                "id": "K_7",
                "text": "ᢁ"
              },
              {
                "id": "K_8",
                "text": "ᢁ"
              },
              {
                "id": "K_9",
                "text": "ᢁ"
              },
              {
                "id": "K_0",
                "text": "ᢁ"
              },
              {
                "id": "K_HYPHEN",
                "text": "ᢁ"
              },
              {
                "id": "K_EQUAL",
                "text": "ᢁ"
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
            "id": "2",
            "key": [
              {
                "id": "K_Q",
                "pad": "75",
                "text": "ᢁ"
              },
              {
                "id": "K_W",
                "text": "ᢁ"
              },
              {
                "id": "K_E",
                "text": "ᢁ"
              },
              {
                "id": "K_R",
                "text": "ᠷ"
              },
              {
                "id": "K_T",
                "text": "ᢁ"
              },
              {
                "id": "K_Y",
                "text": "ᢁ"
              },
              {
                "id": "K_U",
                "text": "ᡠ"
              },
              {
                "id": "K_I",
                "text": "ᡟ"
              },
              {
                "id": "K_O",
                "text": "ᢁ"
              },
              {
                "id": "K_P",
                "text": "ᢁ"
              },
              {
                "id": "K_LBRKT",
                "text": "ᢁ"
              },
              {
                "id": "K_RBRKT",
                "text": "ᢁ"
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
                "id": "K_BKQUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_A",
                "text": "ᢁ"
              },
              {
                "id": "K_S",
                "text": "ᡧ"
              },
              {
                "id": "K_D",
                "text": "ᢁ"
              },
              {
                "id": "K_F",
                "text": "ᢁ"
              },
              {
                "id": "K_G",
                "text": "ᡬ"
              },
              {
                "id": "K_H",
                "text": "ᡭ"
              },
              {
                "id": "K_J",
                "text": "ᡲ"
              },
              {
                "id": "K_K",
                "text": "ᠺ"
              },
              {
                "id": "K_L",
                "text": "ᢁ"
              },
              {
                "id": "K_COLON",
                "text": "ᢁ"
              },
              {
                "id": "K_QUOTE",
                "text": "ᢁ"
              },
              {
                "id": "K_BKSLASH",
                "text": "ᢁ"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "width": "160",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ᡮ"
              },
              {
                "id": "K_X",
                "text": "ᢁ"
              },
              {
                "id": "K_C",
                "text": "ᠴ"
              },
              {
                "id": "K_V",
                "text": "ᢁ"
              },
              {
                "id": "K_B",
                "text": "ᢁ"
              },
              {
                "id": "K_N",
                "text": "ᡢ"
              },
              {
                "id": "K_M",
                "text": "ᢁ"
              },
              {
                "id": "K_COMMA",
                "text": "ᢁ"
              },
              {
                "id": "K_PERIOD",
                "text": "ᢁ"
              },
              {
                "id": "K_SLASH",
                "text": "ᢁ"
              },
              {
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "width": "140",
                "id": "K_LOPT",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "930",
                "id": "K_SPACE"
              },
              {
                "width": "145",
                "id": "K_ENTER",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      }
    ],
    "font": "Draft Mongolian Baiti"
  }
};
  this.KVER="17.0.332.0";
  this.KVS=[];
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x20)) {
      if(1){
        r=m=1;   // Line 60
        k.KO(0,t," ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x20)) {
      if(1){
        r=m=1;   // Line 108
        k.KO(0,t,"᠎");
      }
    }
    else if(k.KKM(e, 0x4010, 0x31)) {
      if(1){
        r=m=1;   // Line 62
        k.KO(0,t,"᠋");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {
      if(1){
        r=m=1;   // Line 105
        k.KO(0,t,"——");
      }
    }
    else if(k.KKM(e, 0x4010, 0x33)) {
      if(1){
        r=m=1;   // Line 64
        k.KO(0,t,"᠍");
      }
    }
    else if(k.KKM(e, 0x4010, 0x34)) {
      if(1){
        r=m=1;   // Line 65
        k.KO(0,t,"᠏");
      }
    }
    else if(k.KKM(e, 0x4010, 0x35)) {
      if(1){
        r=m=1;   // Line 66
        k.KO(0,t,"％");
      }
    }
    else if(k.KKM(e, 0x4010, 0x37)) {
      if(1){
        r=m=1;   // Line 68
        k.KO(0,t,"‘");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {
      if(1){
        r=m=1;   // Line 57
        k.KO(0,t,"－");
      }
    }
    else if(k.KKM(e, 0x4010, 0x39)) {
      if(1){
        r=m=1;   // Line 70
        k.KO(0,t,"（");
      }
    }
    else if(k.KKM(e, 0x4010, 0x30)) {
      if(1){
        r=m=1;   // Line 61
        k.KO(0,t,"）");
      }
    }
    else if(k.KKM(e, 0x4010, 0x38)) {
      if(1){
        r=m=1;   // Line 69
        k.KO(0,t,"’");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBB)) {
      if(1){
        r=m=1;   // Line 101
        k.KO(0,t,"＋");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBC)) {
      if(1){
        r=m=1;   // Line 52
        k.KO(0,t,"，");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBD)) {
      if(1){
        r=m=1;   // Line 54
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {
      if(1){
        r=m=1;   // Line 56
        k.KO(0,t,"。");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBF)) {
      if(1){
        r=m=1;   // Line 59
        k.KO(0,t,"！");
      }
    }
    else if(k.KKM(e, 0x4000, 0x30)) {
      if(1){
        r=m=1;   // Line 13
        k.KO(0,t,"0");
      }
    }
    else if(k.KKM(e, 0x4000, 0x31)) {
      if(1){
        r=m=1;   // Line 14
        k.KO(0,t,"1");
      }
    }
    else if(k.KKM(e, 0x4000, 0x32)) {
      if(1){
        r=m=1;   // Line 15
        k.KO(0,t,"2");
      }
    }
    else if(k.KKM(e, 0x4000, 0x33)) {
      if(1){
        r=m=1;   // Line 16
        k.KO(0,t,"3");
      }
    }
    else if(k.KKM(e, 0x4000, 0x34)) {
      if(1){
        r=m=1;   // Line 17
        k.KO(0,t,"4");
      }
    }
    else if(k.KKM(e, 0x4000, 0x35)) {
      if(1){
        r=m=1;   // Line 18
        k.KO(0,t,"5");
      }
    }
    else if(k.KKM(e, 0x4000, 0x36)) {
      if(1){
        r=m=1;   // Line 19
        k.KO(0,t,"6");
      }
    }
    else if(k.KKM(e, 0x4000, 0x37)) {
      if(1){
        r=m=1;   // Line 20
        k.KO(0,t,"7");
      }
    }
    else if(k.KKM(e, 0x4000, 0x38)) {
      if(1){
        r=m=1;   // Line 21
        k.KO(0,t,"8");
      }
    }
    else if(k.KKM(e, 0x4000, 0x39)) {
      if(1){
        r=m=1;   // Line 22
        k.KO(0,t,"9");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBA)) {
      if(1){
        r=m=1;   // Line 99
        k.KO(0,t,"᠄");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {
      if(1){
        r=m=1;   // Line 51
        k.KO(0,t,"；");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBC)) {
      if(1){
        r=m=1;   // Line 100
        k.KO(0,t,"『");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {
      if(1){
        r=m=1;   // Line 53
        k.KO(0,t,"＝");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBE)) {
      if(1){
        r=m=1;   // Line 104
        k.KO(0,t,"』");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBF)) {
      if(1){
        r=m=1;   // Line 107
        k.KO(0,t,"？");
      }
    }
    else if(k.KKM(e, 0x4010, 0x32)) {
      if(1){
        r=m=1;   // Line 63
        k.KO(0,t,"᠌");
      }
    }
    else if(k.KKM(e, 0x4010, 0x41)) {
      if(1){
        r=m=1;   // Line 71
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x42)) {
      if(1){
        r=m=1;   // Line 72
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x43)) {
      if(1){
        r=m=1;   // Line 73
        k.KO(0,t,"ᡱ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x44)) {
      if(1){
        r=m=1;   // Line 74
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x45)) {
      if(1){
        r=m=1;   // Line 75
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x46)) {
      if(1){
        r=m=1;   // Line 76
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x47)) {
      if(1){
        r=m=1;   // Line 77
        k.KO(0,t,"ᡬ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x48)) {
      if(1){
        r=m=1;   // Line 78
        k.KO(0,t,"ᡭ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x49)) {
      if(1){
        r=m=1;   // Line 79
        k.KO(0,t,"ᡟ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {
      if(1){
        r=m=1;   // Line 80
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4B)) {
      if(1){
        r=m=1;   // Line 81
        k.KO(0,t,"ᠺ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {
      if(1){
        r=m=1;   // Line 82
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4D)) {
      if(1){
        r=m=1;   // Line 83
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {
      if(1){
        r=m=1;   // Line 84
        k.KO(0,t,"ᡢ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {
      if(1){
        r=m=1;   // Line 85
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x50)) {
      if(1){
        r=m=1;   // Line 86
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x51)) {
      if(1){
        r=m=1;   // Line 87
        k.KO(0,t,"᠇");
      }
    }
    else if(k.KKM(e, 0x4010, 0x52)) {
      if(1){
        r=m=1;   // Line 88
        k.KO(0,t,"ᡰ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x53)) {
      if(1){
        r=m=1;   // Line 89
        k.KO(0,t,"ᡧ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x54)) {
      if(1){
        r=m=1;   // Line 90
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x55)) {
      if(1){
        r=m=1;   // Line 91
        k.KO(0,t,"ᡡ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x56)) {
      if(1){
        r=m=1;   // Line 92
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x57)) {
      if(1){
        r=m=1;   // Line 93
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x58)) {
      if(1){
        r=m=1;   // Line 94
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x59)) {
      if(1){
        r=m=1;   // Line 95
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x5A)) {
      if(1){
        r=m=1;   // Line 96
        k.KO(0,t,"ᡲ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDB)) {
      if(1){
        r=m=1;   // Line 55
        k.KO(0,t,"［");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDC)) {
      if(1){
        r=m=1;   // Line 50
        k.KO(0,t,"、");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDD)) {
      if(1){
        r=m=1;   // Line 58
        k.KO(0,t,"］");
      }
    }
    else if(k.KKM(e, 0x4010, 0x36)) {
      if(1){
        r=m=1;   // Line 67
        k.KO(0,t,"‍");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBD)) {
      if(1){
        r=m=1;   // Line 102
        k.KO(0,t,"᠊");
      }
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {
      if(1){
        r=m=1;   // Line 49
        k.KO(0,t,"～");
      }
    }
    else if(k.KKM(e, 0x4000, 0x41)) {
      if(1){
        r=m=1;   // Line 23
        k.KO(0,t,"ᠠ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x42)) {
      if(1){
        r=m=1;   // Line 24
        k.KO(0,t,"ᠪ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x43)) {
      if(1){
        r=m=1;   // Line 25
        k.KO(0,t,"ᡮ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x44)) {
      if(1){
        r=m=1;   // Line 26
        k.KO(0,t,"ᡩ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x45)) {
      if(1){
        r=m=1;   // Line 27
        k.KO(0,t,"ᡝ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x46)) {
      if(1){
        r=m=1;   // Line 28
        k.KO(0,t,"ᡫ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x47)) {
      if(1){
        r=m=1;   // Line 29
        k.KO(0,t,"ᡤ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x48)) {
      if(1){
        r=m=1;   // Line 30
        k.KO(0,t,"ᡥ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x49)) {
      if(1){
        r=m=1;   // Line 31
        k.KO(0,t,"ᡞ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {
      if(1){
        r=m=1;   // Line 32
        k.KO(0,t,"ᡪ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {
      if(1){
        r=m=1;   // Line 33
        k.KO(0,t,"ᡣ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {
      if(1){
        r=m=1;   // Line 34
        k.KO(0,t,"ᠯ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {
      if(1){
        r=m=1;   // Line 35
        k.KO(0,t,"ᠮ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {
      if(1){
        r=m=1;   // Line 36
        k.KO(0,t,"ᠨ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {
      if(1){
        r=m=1;   // Line 37
        k.KO(0,t,"ᠣ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x50)) {
      if(1){
        r=m=1;   // Line 38
        k.KO(0,t,"ᡦ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x51)) {
      if(1){
        r=m=1;   // Line 39
        k.KO(0,t,"ᠴ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x52)) {
      if(1){
        r=m=1;   // Line 40
        k.KO(0,t,"ᠷ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x53)) {
      if(1){
        r=m=1;   // Line 41
        k.KO(0,t,"ᠰ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x54)) {
      if(1){
        r=m=1;   // Line 42
        k.KO(0,t,"ᡨ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x55)) {
      if(1){
        r=m=1;   // Line 43
        k.KO(0,t,"ᡠ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x56)) {
      if(1){
        r=m=1;   // Line 44
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x57)) {
      if(1){
        r=m=1;   // Line 45
        k.KO(0,t,"ᠸ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x58)) {
      if(1){
        r=m=1;   // Line 46
        k.KO(0,t,"ᢁ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x59)) {
      if(1){
        r=m=1;   // Line 47
        k.KO(0,t,"ᠶ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {
      if(1){
        r=m=1;   // Line 48
        k.KO(0,t,"ᡯ");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDB)) {
      if(1){
        r=m=1;   // Line 103
        k.KO(0,t,"“");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDC)) {
      if(1){
        r=m=1;   // Line 98
        k.KO(0,t,"᠁");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDD)) {
      if(1){
        r=m=1;   // Line 106
        k.KO(0,t,"”");
      }
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {
      if(1){
        r=m=1;   // Line 97
        k.KO(0,t,"to see keyboard mapping email greyson@postone.net");
      }
    }
    return r;
  };
}
