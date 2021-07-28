if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_lao_pali());
}
function Keyboard_lao_pali()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_lao_pali";
  this.KN="Lao Pali";
  this.KMINVER="10.0";
  this.KV={F:' 1em "LaoPaliOSK"',K102:0};
  this.KV.KLS={
    "default": ["\"","ຢ","ຟ","ໂ","ຖ","ກຸ","ກູ","ຄ","ຕ","ຈ","ຂ","ຊ","ກໍ","","","","ກົ","ໄ","຿","ພ","ະ","ກິ","ກີ","ຮ","ນ","ຍ","ບ","ລ","/","","","","ກັ","ຫ","ກ","ດ","ເ","ກ້","ກ່","າ","ສ","ວ","ງ","","","","","","","ຜ","ປ","ແ","ອ","ກຶ","ກື","ທ","ມ","ໃ","ຝ","","","","","",""],
    "rightalt": ["₭","1","2","3","4","5","6","7","8","9","0","$","€","","","","+","*","/","=","<",">","{","}","[","]","","","","","","","","","","","","","","","","","","","","","","","","","","◌໎","","","","຃","຅","","͜ ","","","","","",""],
    "shift": ["'","໑","໒","໓","໔","ກ໌","ກຼ","໕","໖","໗","໘","໙","-","","","","ຆ","໐","ຬ","ຉ","ຌ","ຎ","ຏ","ຣ","ໜ","ຽ","ຐ","ຫຼ","¦","","","","ຑ",";",".",",",":","ກ໊","ກ໋","!","?","ຨ","ຩ","","","","","","","ຒ","(","ຯ","ຘ","ຠ","ຓ","ໆ","ໝ","ກ຺",")","","","","","",""]
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
  this.KMBM=modCodes.RALT | modCodes.SHIFT /* 0x0018 */;
  this.KVKL={
  "phone": {
    "font": "LaoPaliOSK",
    "fontsize": "0.8em",
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "\u0EA2"
              },
              {
                "id": "K_2",
                "text": "\u0E9F"
              },
              {
                "id": "K_3",
                "text": "\u0EC2"
              },
              {
                "id": "K_4",
                "text": "\u0E96"
              },
              {
                "id": "K_5",
                "text": "\u0E81\u0EB8"
              },
              {
                "id": "K_6",
                "text": "\u0E81\u0EB9"
              },
              {
                "id": "K_7",
                "text": "\u0E84"
              },
              {
                "id": "K_8",
                "text": "\u0E95"
              },
              {
                "id": "K_9",
                "text": "\u0E88"
              },
              {
                "id": "K_0",
                "text": "\u0E82"
              },
              {
                "id": "K_HYPHEN",
                "text": "\u0E8A"
              },
              {
                "id": "K_EQUAL",
                "text": "\u0E81\u0ECD"
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
                "text": "\u0E81\u0EBB"
              },
              {
                "id": "K_W",
                "text": "\u0EC4"
              },
              {
                "id": "K_E",
                "text": "\u0EBF"
              },
              {
                "id": "K_R",
                "text": "\u0E9E"
              },
              {
                "id": "K_T",
                "text": "\u0EB0"
              },
              {
                "id": "K_Y",
                "text": "\u0E81\u0EB4"
              },
              {
                "id": "K_U",
                "text": "\u0E81\u0EB5"
              },
              {
                "id": "K_I",
                "text": "\u0EAE"
              },
              {
                "id": "K_O",
                "text": "\u0E99"
              },
              {
                "id": "K_P",
                "text": "\u0E8D"
              },
              {
                "id": "K_LBRKT",
                "text": "\u0E9A"
              },
              {
                "id": "K_RBRKT",
                "text": "\u0EA5"
              },
              {
                "width": "10",
                "id": "T_new_138",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "\""
              },
              {
                "id": "K_A",
                "text": "\u0E81\u0EB1"
              },
              {
                "id": "K_S",
                "text": "\u0EAB"
              },
              {
                "id": "K_D",
                "text": "\u0E81"
              },
              {
                "id": "K_F",
                "text": "\u0E94"
              },
              {
                "id": "K_G",
                "text": "\u0EC0"
              },
              {
                "id": "K_H",
                "text": "\u0E81\u0EC9"
              },
              {
                "id": "K_J",
                "text": "\u0E81\u0EC8"
              },
              {
                "id": "K_K",
                "text": "\u0EB2"
              },
              {
                "id": "K_L",
                "text": "\u0EAA"
              },
              {
                "id": "K_COLON",
                "text": "\u0EA7"
              },
              {
                "id": "K_QUOTE",
                "text": "\u0E87"
              },
              {
                "id": "K_BKSLASH",
                "text": "/"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "shift",
                "width": "160",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "id": "K_Z",
                "text": "\u0E9C"
              },
              {
                "id": "K_X",
                "text": "\u0E9B"
              },
              {
                "id": "K_C",
                "text": "\u0EC1"
              },
              {
                "id": "K_V",
                "text": "\u0EAD"
              },
              {
                "id": "K_B",
                "text": "\u0E81\u0EB6"
              },
              {
                "id": "K_N",
                "text": "\u0E81\u0EB7"
              },
              {
                "id": "K_M",
                "text": "\u0E97"
              },
              {
                "id": "K_COMMA",
                "text": "\u0EA1"
              },
              {
                "id": "K_PERIOD",
                "text": "\u0EC3"
              },
              {
                "id": "K_SLASH",
                "text": "\u0E9D"
              },
              {
                "width": "10",
                "id": "T_new_164",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "rightalt",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "*AltShift*"
              },
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
      },
      {
        "id": "rightalt",
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
                "text": "$"
              },
              {
                "id": "K_EQUAL",
                "text": "\u20AC"
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
                "text": "+"
              },
              {
                "id": "K_W",
                "text": "*"
              },
              {
                "id": "K_E",
                "text": "/"
              },
              {
                "id": "K_R",
                "text": "="
              },
              {
                "id": "K_T",
                "text": "<"
              },
              {
                "id": "K_Y",
                "text": ">"
              },
              {
                "id": "K_U",
                "text": "{"
              },
              {
                "id": "K_I",
                "text": "}"
              },
              {
                "id": "K_O",
                "text": "["
              },
              {
                "id": "K_P",
                "text": "]"
              },
              {
                "id": "K_LBRKT"
              },
              {
                "id": "K_RBRKT"
              },
              {
                "width": "10",
                "id": "T_new_362",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "\u20AD"
              },
              {
                "id": "K_A"
              },
              {
                "id": "K_S"
              },
              {
                "id": "K_D"
              },
              {
                "id": "K_F"
              },
              {
                "id": "K_G"
              },
              {
                "id": "K_H"
              },
              {
                "id": "K_J"
              },
              {
                "id": "K_K"
              },
              {
                "id": "K_L"
              },
              {
                "id": "K_COLON"
              },
              {
                "id": "K_QUOTE"
              },
              {
                "id": "K_BKSLASH"
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
                "id": "K_Z"
              },
              {
                "id": "K_X"
              },
              {
                "id": "K_C",
                "text": "\u25CC\u0ECE"
              },
              {
                "id": "K_V"
              },
              {
                "id": "K_B"
              },
              {
                "id": "K_N"
              },
              {
                "id": "K_M",
                "text": "\u0E83"
              },
              {
                "id": "K_COMMA",
                "text": "\u0E85"
              },
              {
                "id": "K_PERIOD"
              },
              {
                "id": "K_SLASH",
                "text": "\u035C"
              },
              {
                "width": "10",
                "id": "T_new_388",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "default",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "Main"
              },
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
      },
      {
        "id": "shift",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "nextlayer": "default",
                "id": "K_1",
                "text": "\u0ED1"
              },
              {
                "id": "K_2",
                "text": "\u0ED2"
              },
              {
                "id": "K_3",
                "text": "\u0ED3"
              },
              {
                "id": "K_4",
                "text": "\u0ED4"
              },
              {
                "id": "K_5",
                "text": "\u0E81\u0ECC"
              },
              {
                "id": "K_6",
                "text": "\u0E81\u0EBC"
              },
              {
                "id": "K_7",
                "text": "\u0ED5"
              },
              {
                "id": "K_8",
                "text": "\u0ED6"
              },
              {
                "id": "K_9",
                "text": "\u0ED7"
              },
              {
                "id": "K_0",
                "text": "\u0ED8"
              },
              {
                "id": "K_HYPHEN",
                "text": "\u0ED9"
              },
              {
                "id": "K_EQUAL",
                "text": "-"
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
                "text": "\u0E86"
              },
              {
                "id": "K_W",
                "text": "\u0ED0"
              },
              {
                "id": "K_E",
                "text": "\u0EAC"
              },
              {
                "id": "K_R",
                "text": "\u0E89"
              },
              {
                "id": "K_T",
                "text": "\u0E8C"
              },
              {
                "id": "K_Y",
                "text": "\u0E8E"
              },
              {
                "id": "K_U",
                "text": "\u0E8F"
              },
              {
                "id": "K_I",
                "text": "\u0EA3"
              },
              {
                "id": "K_O",
                "text": "\u0EDC"
              },
              {
                "id": "K_P",
                "text": "\u0EBD"
              },
              {
                "id": "K_LBRKT",
                "text": "\u0E90"
              },
              {
                "id": "K_RBRKT",
                "text": "\u0EAB\u0EBC"
              },
              {
                "width": "10",
                "id": "T_new_586",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "'"
              },
              {
                "id": "K_A",
                "text": "\u0E91"
              },
              {
                "id": "K_S",
                "text": ";"
              },
              {
                "id": "K_D",
                "text": "."
              },
              {
                "id": "K_F",
                "text": ","
              },
              {
                "id": "K_G",
                "text": ":"
              },
              {
                "id": "K_H",
                "text": "\u0E81\u0ECA"
              },
              {
                "id": "K_J",
                "text": "\u0E81\u0ECB"
              },
              {
                "id": "K_K",
                "text": "!"
              },
              {
                "id": "K_L",
                "text": "?"
              },
              {
                "id": "K_COLON",
                "text": "\u0EA8"
              },
              {
                "id": "K_QUOTE",
                "text": "\u0EA9"
              },
              {
                "id": "K_BKSLASH",
                "text": "\u00A6"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
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
                "text": "\u0E92"
              },
              {
                "id": "K_X",
                "text": "("
              },
              {
                "id": "K_C",
                "text": "\u0EAF"
              },
              {
                "id": "K_V",
                "text": "\u0E98"
              },
              {
                "id": "K_B",
                "text": "\u0EA0"
              },
              {
                "id": "K_N",
                "text": "\u0E93"
              },
              {
                "id": "K_M",
                "text": "\u0EC6"
              },
              {
                "id": "K_COMMA",
                "text": "\u0EDD"
              },
              {
                "id": "K_PERIOD",
                "text": "\u0E81\u0EBA"
              },
              {
                "id": "K_SLASH",
                "text": ")"
              },
              {
                "width": "10",
                "id": "T_new_612",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "rightalt",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "More"
              },
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
    ]
  },
  "tablet": {
    "font": "LaoPaliOSK",
    "fontsize": "1em",
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "\u0EA2"
              },
              {
                "id": "K_2",
                "text": "\u0E9F"
              },
              {
                "id": "K_3",
                "text": "\u0EC2"
              },
              {
                "id": "K_4",
                "text": "\u0E96"
              },
              {
                "id": "K_5",
                "text": "\u0E81\u0EB8"
              },
              {
                "id": "K_6",
                "text": "\u0E81\u0EB9"
              },
              {
                "id": "K_7",
                "text": "\u0E84"
              },
              {
                "id": "K_8",
                "text": "\u0E95"
              },
              {
                "id": "K_9",
                "text": "\u0E88"
              },
              {
                "id": "K_0",
                "text": "\u0E82"
              },
              {
                "id": "K_HYPHEN",
                "text": "\u0E8A"
              },
              {
                "id": "K_EQUAL",
                "text": "\u0E81\u0ECD"
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
                "text": "\u0E81\u0EBB"
              },
              {
                "id": "K_W",
                "text": "\u0EC4"
              },
              {
                "id": "K_E",
                "text": "\u0EBF"
              },
              {
                "id": "K_R",
                "text": "\u0E9E"
              },
              {
                "id": "K_T",
                "text": "\u0EB0"
              },
              {
                "id": "K_Y",
                "text": "\u0E81\u0EB4"
              },
              {
                "id": "K_U",
                "text": "\u0E81\u0EB5"
              },
              {
                "id": "K_I",
                "text": "\u0EAE"
              },
              {
                "id": "K_O",
                "text": "\u0E99"
              },
              {
                "id": "K_P",
                "text": "\u0E8D"
              },
              {
                "id": "K_LBRKT",
                "text": "\u0E9A"
              },
              {
                "id": "K_RBRKT",
                "text": "\u0EA5"
              },
              {
                "width": "10",
                "id": "T_new_138",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "\""
              },
              {
                "id": "K_A",
                "text": "\u0E81\u0EB1"
              },
              {
                "id": "K_S",
                "text": "\u0EAB"
              },
              {
                "id": "K_D",
                "text": "\u0E81"
              },
              {
                "id": "K_F",
                "text": "\u0E94"
              },
              {
                "id": "K_G",
                "text": "\u0EC0"
              },
              {
                "id": "K_H",
                "text": "\u0E81\u0EC9"
              },
              {
                "id": "K_J",
                "text": "\u0E81\u0EC8"
              },
              {
                "id": "K_K",
                "text": "\u0EB2"
              },
              {
                "id": "K_L",
                "text": "\u0EAA"
              },
              {
                "id": "K_COLON",
                "text": "\u0EA7"
              },
              {
                "id": "K_QUOTE",
                "text": "\u0E87"
              },
              {
                "id": "K_BKSLASH",
                "text": "/"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "shift",
                "width": "160",
                "id": "K_SHIFT",
                "sp": "1",
                "text": "*Shift*"
              },
              {
                "id": "K_Z",
                "text": "\u0E9C"
              },
              {
                "id": "K_X",
                "text": "\u0E9B"
              },
              {
                "id": "K_C",
                "text": "\u0EC1"
              },
              {
                "id": "K_V",
                "text": "\u0EAD"
              },
              {
                "id": "K_B",
                "text": "\u0E81\u0EB6"
              },
              {
                "id": "K_N",
                "text": "\u0E81\u0EB7"
              },
              {
                "id": "K_M",
                "text": "\u0E97"
              },
              {
                "id": "K_COMMA",
                "text": "\u0EA1"
              },
              {
                "id": "K_PERIOD",
                "text": "\u0EC3"
              },
              {
                "id": "K_SLASH",
                "text": "\u0E9D"
              },
              {
                "width": "10",
                "id": "T_new_164",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "rightalt",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "*AltShift*"
              },
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
      },
      {
        "id": "rightalt",
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
                "text": "$"
              },
              {
                "id": "K_EQUAL",
                "text": "\u20AC"
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
                "text": "+"
              },
              {
                "id": "K_W",
                "text": "*"
              },
              {
                "id": "K_E",
                "text": "/"
              },
              {
                "id": "K_R",
                "text": "="
              },
              {
                "id": "K_T",
                "text": "<"
              },
              {
                "id": "K_Y",
                "text": ">"
              },
              {
                "id": "K_U",
                "text": "{"
              },
              {
                "id": "K_I",
                "text": "}"
              },
              {
                "id": "K_O",
                "text": "["
              },
              {
                "id": "K_P",
                "text": "]"
              },
              {
                "id": "K_LBRKT"
              },
              {
                "id": "K_RBRKT"
              },
              {
                "width": "10",
                "id": "T_new_362",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "\u20AD"
              },
              {
                "id": "K_A"
              },
              {
                "id": "K_S"
              },
              {
                "id": "K_D"
              },
              {
                "id": "K_F"
              },
              {
                "id": "K_G"
              },
              {
                "id": "K_H"
              },
              {
                "id": "K_J"
              },
              {
                "id": "K_K"
              },
              {
                "id": "K_L"
              },
              {
                "id": "K_COLON"
              },
              {
                "id": "K_QUOTE"
              },
              {
                "id": "K_BKSLASH"
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
                "id": "K_Z"
              },
              {
                "id": "K_X"
              },
              {
                "id": "K_C",
                "text": "\u25CC\u0ECE"
              },
              {
                "id": "K_V"
              },
              {
                "id": "K_B"
              },
              {
                "id": "K_N"
              },
              {
                "id": "K_M",
                "text": "\u0E83"
              },
              {
                "id": "K_COMMA",
                "text": "\u0E85"
              },
              {
                "id": "K_PERIOD"
              },
              {
                "id": "K_SLASH",
                "text": "\u035C"
              },
              {
                "width": "10",
                "id": "T_new_388",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "default",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "Main"
              },
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
      },
      {
        "id": "shift",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "id": "K_1",
                "text": "\u0ED1"
              },
              {
                "id": "K_2",
                "text": "\u0ED2"
              },
              {
                "id": "K_3",
                "text": "\u0ED3"
              },
              {
                "id": "K_4",
                "text": "\u0ED4"
              },
              {
                "id": "K_5",
                "text": "\u0E81\u0ECC"
              },
              {
                "id": "K_6",
                "text": "\u0E81\u0EBC"
              },
              {
                "id": "K_7",
                "text": "\u0ED5"
              },
              {
                "id": "K_8",
                "text": "\u0ED6"
              },
              {
                "id": "K_9",
                "text": "\u0ED7"
              },
              {
                "id": "K_0",
                "text": "\u0ED8"
              },
              {
                "id": "K_HYPHEN",
                "text": "\u0ED9"
              },
              {
                "id": "K_EQUAL",
                "text": "-"
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
                "text": "\u0E86"
              },
              {
                "id": "K_W",
                "text": "\u0ED0"
              },
              {
                "id": "K_E",
                "text": "\u0EAC"
              },
              {
                "id": "K_R",
                "text": "\u0E89"
              },
              {
                "id": "K_T",
                "text": "\u0E8C"
              },
              {
                "id": "K_Y",
                "text": "\u0E8E"
              },
              {
                "id": "K_U",
                "text": "\u0E8F"
              },
              {
                "id": "K_I",
                "text": "\u0EA3"
              },
              {
                "id": "K_O",
                "text": "\u0EDC"
              },
              {
                "id": "K_P",
                "text": "\u0EBD"
              },
              {
                "id": "K_LBRKT",
                "text": "\u0E90"
              },
              {
                "id": "K_RBRKT",
                "text": "\u0EAB\u0EBC"
              },
              {
                "width": "10",
                "id": "T_new_586",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "'"
              },
              {
                "id": "K_A",
                "text": "\u0E91"
              },
              {
                "id": "K_S",
                "text": ";"
              },
              {
                "id": "K_D",
                "text": "."
              },
              {
                "id": "K_F",
                "text": ","
              },
              {
                "id": "K_G",
                "text": ":"
              },
              {
                "id": "K_H",
                "text": "\u0E81\u0ECA"
              },
              {
                "id": "K_J",
                "text": "\u0E81\u0ECB"
              },
              {
                "id": "K_K",
                "text": "!"
              },
              {
                "id": "K_L",
                "text": "?"
              },
              {
                "id": "K_COLON",
                "text": "\u0EA8"
              },
              {
                "id": "K_QUOTE",
                "text": "\u0EA9"
              },
              {
                "id": "K_BKSLASH",
                "text": "\u00A6"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
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
                "text": "\u0E92"
              },
              {
                "id": "K_X",
                "text": "("
              },
              {
                "id": "K_C",
                "text": "\u0EAF"
              },
              {
                "id": "K_V",
                "text": "\u0E98"
              },
              {
                "id": "K_B",
                "text": "\u0EA0"
              },
              {
                "id": "K_N",
                "text": "\u0E93"
              },
              {
                "id": "K_M",
                "text": "\u0EC6"
              },
              {
                "id": "K_COMMA",
                "text": "\u0EDD"
              },
              {
                "id": "K_PERIOD",
                "text": "\u0E81\u0EBA"
              },
              {
                "id": "K_SLASH",
                "text": ")"
              },
              {
                "width": "10",
                "id": "T_new_612",
                "sp": "10"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "rightalt",
                "width": "130",
                "id": "K_LCONTROL",
                "sp": "1",
                "text": "More"
              },
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
    ]
  }
}
;
  this.s_Consonant_14="ກຂຄງຈສຊຍດຕຖທນບປຜຝພຟມຢຣລວຫອຮໝໜຼ";
  this.s_ConsonantKey_15="d07'9l-pf84mo[xz/r2,1I];svi<O^";
  this.s_Vowel_16="ເແໂໄໃະຽາໍຳັົິີຶືຸູ";
  this.s_VowelKey_17="gc3w.tPk=eaqyubn56";
  this.s_VScript_18="ໍຳັົິີຶືຸູ";
  this.s_VScriptKey_19="=eaqyubn56";
  this.s_VPrefix_20="ເແໂໄໃ";
  this.s_VPrefixKey_21="gc3w.";
  this.s_VSuffix_22="ະຽາ";
  this.s_VSuffixKey_23="tPk";
  this.s_Tone_24="່້໊໋໌";
  this.s_ToneKey_25="jhHJ%";
  this.s_Sign_26="ໆຯ";
  this.s_SignKey_27="MC";
  this.s_Numeral_28="1234567890/*-+.";
  this.s_LaoNumeral_29="໑໒໓໔໕໖໗໘໙໐";
  this.s_NumeralKey_30="!@#$&*()_W";
  this.s_AltNumeralKey_31=['','','','','','','','','',''];
  this.s_NumberPadKey_32=['','','','','','','','','','','','','','',''];
  this.s_AltUnused_33=['','','','','','','','','','','','','','','','','','','',''];
  this.s_Punctuation_34="\";.,:!?()'-";
  this.s_PunctuationKey_35="`SDFGKLX?~+";
  this.KVER="14.0.277.0";
  this.gs=function(t,e) {
    return this.g_Start_0(t,e);
  };
  this.g_Start_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP1 /* 0x61 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"1");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP2 /* 0x62 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"2");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP3 /* 0x63 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"3");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP4 /* 0x64 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"4");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP5 /* 0x65 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"5");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP6 /* 0x66 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"6");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP7 /* 0x67 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"7");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP8 /* 0x68 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"8");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP9 /* 0x69 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"9");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NP0 /* 0x60 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"0");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NPSLASH /* 0x6F */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"/");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NPSTAR /* 0x6A */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"*");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NPMINUS /* 0x6D */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"-");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NPPLUS /* 0x6B */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"+");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_NPDOT /* 0x6E */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,".");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 62
        k.KDC(0,t);
        k.KO(-1,t,"₭");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"1");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"2");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"3");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"4");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"5");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"6");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"7");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"8");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"9");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"0");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 64
        k.KDC(0,t);
        k.KO(-1,t,"$");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 65
        k.KDC(0,t);
        k.KO(-1,t,"€");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 67
        k.KDC(0,t);
        k.KO(-1,t,"+");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 68
        k.KDC(0,t);
        k.KO(-1,t,"*");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 69
        k.KDC(0,t);
        k.KO(-1,t,"/");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 70
        k.KDC(0,t);
        k.KO(-1,t,"=");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 71
        k.KDC(0,t);
        k.KO(-1,t,"<");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 72
        k.KDC(0,t);
        k.KO(-1,t,">");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 73
        k.KDC(0,t);
        k.KO(-1,t,"{");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 74
        k.KDC(0,t);
        k.KO(-1,t,"}");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 75
        k.KDC(0,t);
        k.KO(-1,t,"[");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 76
        k.KDC(0,t);
        k.KO(-1,t,"]");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 79
        k.KDC(0,t);
        k.KO(-1,t,"໎");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 80
        k.KDC(0,t);
        k.KO(-1,t,"຃");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 81
        k.KDC(0,t);
        k.KO(-1,t,"຅");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 82
        k.KDC(0,t);
        k.KO(-1,t,"͜");
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    else if(k.KKM(e, modCodes.RALT | modCodes.VIRTUAL_KEY /* 0x4008 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KB(t);
      }
    }
    if(!m&&k.KIK(e)) {
      r=1;
      k.KDC(-1,t);
      r=this.g_Main_1(t,e);
    }
    return r;
  };
  this.g_Main_1=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໑");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 133
        k.KDC(0,t);
        k.KO(-1,t,"ຩ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໓");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໔");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_5 /* 0x35 */)) {
      if(k.KFCM(1,t,['ຳ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"໌");
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 97
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VSuffix_22}])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KIO(-1,this.s_VSuffix_22,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"໌");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໕");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ງ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໗");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໘");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໖");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"-");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ມ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຊ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ໃ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຝ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຂ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຢ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຟ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ໂ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຖ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ຸ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ູ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຄ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຕ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຈ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 132
        k.KDC(0,t);
        k.KO(-1,t,"ຨ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ວ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ໝ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ໍ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 138
        k.KDC(0,t);
        k.KO(-1,t,"຺");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,")");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໒");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 131
        k.KDC(0,t);
        k.KO(-1,t,"ຑ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 136
        k.KDC(0,t);
        k.KO(-1,t,"ຠ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 116
        k.KDC(0,t);
        k.KO(-1,t,"ຯ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,".");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 125
        k.KDC(0,t);
        k.KO(-1,t,"ຬ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,",");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,":");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)) {
      if(k.KFCM(1,t,['ຳ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"໊");
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 97
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VSuffix_22}])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KIO(-1,this.s_VSuffix_22,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"໊");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຣ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)) {
      if(k.KFCM(1,t,['ຳ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"໋");
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 97
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VSuffix_22}])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KIO(-1,this.s_VSuffix_22,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"໋");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"!");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"?");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 116
        k.KDC(0,t);
        k.KO(-1,t,"ໆ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 137
        k.KDC(0,t);
        k.KO(-1,t,"ຓ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ໜ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 106
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ຽ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 124
        k.KDC(0,t);
        k.KO(-1,t,"ຆ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 126
        k.KDC(0,t);
        k.KO(-1,t,"ຉ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,";");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 127
        k.KDC(0,t);
        k.KO(-1,t,"ຌ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 129
        k.KDC(0,t);
        k.KO(-1,t,"ຏ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 135
        k.KDC(0,t);
        k.KO(-1,t,"ຘ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໐");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"(");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 128
        k.KDC(0,t);
        k.KO(-1,t,"ຎ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 134
        k.KDC(0,t);
        k.KO(-1,t,"ຒ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ບ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 140
        k.KDC(0,t);
        k.KO(-1,t,"/");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ລ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຼ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"໙");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"\"");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ັ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ຶ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ແ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ກ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 96
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ຳ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ດ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ເ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {
      if(k.KFCM(1,t,['ຳ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"້");
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 97
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VSuffix_22}])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KIO(-1,this.s_VSuffix_22,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"້");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຮ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)) {
      if(k.KFCM(1,t,['ຳ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"່");
        k.KO(-1,t,"ຳ");
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 97
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VSuffix_22}])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KIO(-1,this.s_VSuffix_22,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"່");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 106
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,['ະ'])){
        r=m=1;   // Line 109
        k.KDC(1,t);
        k.KO(-1,t,"ະ");
        k.KB(t);
      }
      else if(k.KFCM(1,t,['າ'])){
        r=m=1;   // Line 110
        k.KDC(1,t);
        k.KO(-1,t,"າ");
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"າ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ສ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ທ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ື");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ນ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຍ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ົ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ພ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຫ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 106
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,['ະ'])){
        r=m=1;   // Line 108
        k.KDC(1,t);
        k.KO(-1,t,"ະ");
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ະ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ີ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ອ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_VPrefix_20}])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KIO(-1,this.s_VPrefix_20,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ໄ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ປ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {
      if(k.KFCM(1,t,[{t:'a',a:this.s_Tone_24}])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KIO(-1,this.s_Tone_24,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Vowel_16}])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KIO(-1,this.s_Vowel_16,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_VScript_18}])){
        r=m=1;   // Line 103
        k.KDC(1,t);
        k.KIO(-1,this.s_VScript_18,1,t);
        k.KB(t);
      }
      else if(k.KFCM(1,t,[{t:'a',a:this.s_Sign_26}])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KIO(-1,this.s_Sign_26,1,t);
        k.KB(t);
      }
      else if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"ິ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"ຜ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 130
        k.KDC(0,t);
        k.KO(-1,t,"ຐ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 141
        k.KDC(0,t);
        k.KO(-1,t,"​");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 121
        k.KDC(0,t);
        k.KO(-1,t,"ຫຼ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"'");
      }
    }
    return r;
  };
}
