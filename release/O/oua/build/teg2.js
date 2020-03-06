if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_teg2());
}
function Keyboard_teg2()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this.KI="Keyboard_teg2";
  this.KN="oua";
  this.KMINVER="10.0";
  this.KV={F:' 1em "Arial"',K102:0};
  this.KV.KLS={
    "shift": ["Ə","1","2","3","4","5","6","7","8","9","0","°","+","","","","A","Z","E","R","T","Y","U","I","Ɣ","Ɛ","̌","£","µ","","","","Q","S","D","F","G","H","J","K","L","M","%","","","","","","<","W","X","C","V","B","N","?",";","/","§","","","","","",""],
    "default": ["ə","&","²","\"","'","(","-","–","_","@","€",")","=","","","","a","z","e","r","t","y","u","i","ɣ","ɛ","̣","$","*","","","","q","s","d","f","g","h","j","k","l","m","?","","","","","","<","w","x","c","v","b","n",",",".",":","!","","","","","",""],
    "alt": ["","","","#","{","[","|","","\\","•","@","]","}","","","","","ẓ","","ṛ","ṭ","","","","o","p","","¤","","","","","","ṣ","ḍ","","","ḥ","","","ḷ","ṃ","","","","","","","","","","č","","ḅ","ṇ","","","","","","","","","",""],
    "shift-alt": ["","","","","","","","","","","","","","","","","","Ẓ","","Ṛ","Ṭ","","","","O","P","","","","","","","","Ṣ","Ḍ","","","Ḥ","","","Ḷ","Ṃ","","","","","","","","","","Č","","Ḅ","Ṇ","","","","","","","","","",""]
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
  this.KMBM=modCodes.SHIFT | modCodes.ALT /* 0x0050 */;
  this.KVKL={
  "phone": {
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "U_0031",
                "text": "1"
              },
              {
                "id": "U_0032",
                "text": "2"
              },
              {
                "id": "U_0033",
                "text": "3"
              },
              {
                "id": "U_0034",
                "text": "4"
              },
              {
                "id": "U_0035",
                "text": "5"
              },
              {
                "id": "U_0036",
                "text": "6"
              },
              {
                "id": "U_0037",
                "text": "7"
              },
              {
                "id": "U_0038",
                "text": "8"
              },
              {
                "id": "U_0039",
                "text": "9"
              },
              {
                "id": "U_0030",
                "text": "0"
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
            "id": 2,
            "key": [
              {
                "id": "U_0061",
                "text": "a",
                "pad": "15"
              },
              {
                "id": "U_007a",
                "text": "z",
                "sk": [
                  {
                    "text": "ẓ",
                    "id": "U_1e93"
                  }
                ]
              },
              {
                "id": "K_E",
                "text": "e",
                "sk": [
                  {
                    "text": "ə",
                    "id": "U_0259"
                  }
                ]
              },
              {
                "id": "K_R",
                "text": "r",
                "sk": [
                  {
                    "text": "ṛ",
                    "id": "U_1e5b"
                  }
                ]
              },
              {
                "id": "K_T",
                "text": "t",
                "sk": [
                  {
                    "text": "Ṭ",
                    "id": "U_1e6d"
                  }
                ]
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
                    "text": "o",
                    "id": "U_006f"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "i"
              },
              {
                "id": "K_O",
                "text": "ɣ"
              },
              {
                "id": "K_P",
                "text": "ɛ"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_A",
                "text": "q"
              },
              {
                "id": "K_S",
                "text": "s",
                "sk": [
                  {
                    "text": "ṣ",
                    "id": "U_1e63"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "d",
                "sk": [
                  {
                    "text": "ḍ",
                    "id": "U_1e0d"
                  }
                ]
              },
              {
                "id": "K_F",
                "text": "f"
              },
              {
                "id": "K_G",
                "text": "g",
                "sk": [
                  {
                    "text": "ǧ",
                    "id": "U_01e7"
                  }
                ]
              },
              {
                "id": "K_H",
                "text": "h",
                "sk": [
                  {
                    "text": "ḥ",
                    "id": "U_1e25"
                  }
                ]
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
                "text": "l",
                "sk": [
                  {
                    "text": "ḷ",
                    "id": "U_1e37"
                  }
                ]
              },
              {
                "id": "K_COLON",
                "text": "m",
                "sk": [
                  {
                    "text": "ṃ",
                    "id": "U_1e43"
                  }
                ]
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1",
                "nextlayer": "shift"
              },
              {
                "id": "K_Z",
                "text": "w"
              },
              {
                "id": "K_X",
                "text": "x"
              },
              {
                "id": "K_C",
                "text": "c",
                "sk": [
                  {
                    "text": "č",
                    "id": "U_010d"
                  }
                ]
              },
              {
                "id": "K_V",
                "text": "v"
              },
              {
                "id": "K_B",
                "text": "b",
                "sk": [
                  {
                    "text": "ḅ",
                    "id": "U_1e05"
                  },
                  {
                    "text": "p",
                    "id": "U_0070"
                  }
                ]
              },
              {
                "id": "K_N",
                "text": "n",
                "sk": [
                  {
                    "text": "ṇ",
                    "id": "U_1e47"
                  }
                ]
              },
              {
                "id": "U_002d",
                "text": "-"
              }
            ]
          },
          {
            "id": 5,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "sp": "1",
                "nextlayer": "numbers"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "675"
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
                "id": "K_Q",
                "text": "A",
                "pad": "15"
              },
              {
                "id": "K_W",
                "text": "Z",
                "sk": [
                  {
                    "text": "Ẓ",
                    "id": "U_1e92"
                  }
                ]
              },
              {
                "id": "K_E",
                "text": "E",
                "sk": [
                  {
                    "text": "Ə",
                    "id": "U_018f"
                  }
                ]
              },
              {
                "id": "K_R",
                "text": "R",
                "sk": [
                  {
                    "text": "Ṛ",
                    "id": "U_1e5a"
                  }
                ]
              },
              {
                "id": "K_T",
                "text": "T",
                "sk": [
                  {
                    "text": "Ṭ",
                    "id": "U_1e6c"
                  }
                ]
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
                    "text": "O",
                    "id": "U_004f"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "I"
              },
              {
                "id": "K_O",
                "text": "Ɣ"
              },
              {
                "id": "K_P",
                "text": "Ɛ"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_A",
                "text": "Q"
              },
              {
                "id": "K_S",
                "text": "S",
                "sk": [
                  {
                    "text": "Ṣ",
                    "id": "U_1e62"
                  }
                ]
              },
              {
                "id": "K_D",
                "text": "D",
                "sk": [
                  {
                    "text": "Ḍ",
                    "id": "U_1e0c"
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
                    "text": "Ǧ",
                    "id": "U_01e6"
                  }
                ]
              },
              {
                "id": "K_H",
                "text": "H",
                "sk": [
                  {
                    "text": "Ḥ",
                    "id": "U_1e24"
                  }
                ]
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
                "text": "L",
                "sk": [
                  {
                    "text": "Ḷ",
                    "id": "U_1e36"
                  }
                ]
              },
              {
                "id": "K_COLON",
                "text": "M",
                "sk": [
                  {
                    "text": "Ṃ",
                    "id": "U_1e42"
                  }
                ]
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1",
                "nextlayer": "default"
              },
              {
                "id": "K_Z",
                "text": "W"
              },
              {
                "id": "K_X",
                "text": "X"
              },
              {
                "id": "K_C",
                "text": "C",
                "sk": [
                  {
                    "text": "Č",
                    "id": "U_010C"
                  }
                ]
              },
              {
                "id": "K_V",
                "text": "V"
              },
              {
                "id": "K_B",
                "text": "B",
                "sk": [
                  {
                    "text": "Ḅ",
                    "id": "U_1e04"
                  },
                  {
                    "text": "P",
                    "id": "U_0050"
                  }
                ]
              },
              {
                "id": "K_N",
                "text": "N",
                "sk": [
                  {
                    "text": "Ṇ",
                    "id": "U_1e46"
                  }
                ]
              },
              {
                "id": "U_002d",
                "text": "-"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "155",
                "sp": "1"
              }
            ]
          },
          {
            "id": 5,
            "key": [
              {
                "id": "T_NUMLOCK",
                "text": "*123*",
                "sp": "1",
                "nextlayer": "numbers"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "675"
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
        "id": "numbers",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "U_0031",
                "text": "1"
              },
              {
                "id": "U_0032",
                "text": "2"
              },
              {
                "id": "U_0033",
                "text": "3"
              },
              {
                "id": "U_0034",
                "text": "4"
              },
              {
                "id": "U_0035",
                "text": "5"
              },
              {
                "id": "U_0036",
                "text": "6"
              },
              {
                "id": "U_0037",
                "text": "7"
              },
              {
                "id": "U_0038",
                "text": "8"
              },
              {
                "id": "U_0039",
                "text": "9"
              },
              {
                "id": "U_0030",
                "text": "0"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "U_0040",
                "text": "@",
                "pad": "15"
              },
              {
                "id": "U_0023",
                "text": "#"
              },
              {
                "id": "U_20ac",
                "text": "€"
              },
              {
                "id": "U_005f",
                "text": "_"
              },
              {
                "id": "U_0026",
                "text": "&"
              },
              {
                "id": "U_002d",
                "text": "-"
              },
              {
                "id": "U_002b",
                "text": "+"
              },
              {
                "id": "U_0028",
                "text": "("
              },
              {
                "id": "U_0029",
                "text": ")"
              },
              {
                "id": "U_002f",
                "text": "/"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Currency*",
                "width": "160",
                "sp": "1",
                "nextlayer": "symbols"
              },
              {
                "id": "U_0022",
                "text": "\""
              },
              {
                "id": "U_0027",
                "text": "'"
              },
              {
                "id": "U_003a",
                "text": ":"
              },
              {
                "id": "U_003b",
                "text": ";"
              },
              {
                "id": "U_0021",
                "text": "!"
              },
              {
                "id": "K_M",
                "text": "?",
                "pad": "U_003"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "270",
                "sp": "1"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*abc*",
                "sp": "1",
                "nextlayer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "675"
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
        "id": "symbols",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "U_007e",
                "text": "~"
              },
              {
                "id": "U_0060",
                "text": "`"
              },
              {
                "id": "U_007c",
                "text": "|"
              },
              {
                "id": "U_2022",
                "text": "•"
              },
              {
                "id": "U_221a",
                "text": "√"
              },
              {
                "id": "U_03a0",
                "text": "Π"
              },
              {
                "id": "U_00f7",
                "text": "÷"
              },
              {
                "id": "U_00d7",
                "text": "×"
              },
              {
                "id": "U_00b6",
                "text": "¶"
              },
              {
                "id": "U_0194",
                "text": "Δ"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "U_00a3",
                "text": "£",
                "pad": "15"
              },
              {
                "id": "U_00a5",
                "text": "¥"
              },
              {
                "id": "U_20ac",
                "text": "€"
              },
              {
                "id": "U_0024",
                "text": "$"
              },
              {
                "id": "U_005e",
                "text": "^"
              },
              {
                "id": "U_00b0",
                "text": "°"
              },
              {
                "id": "U_003d",
                "text": "="
              },
              {
                "id": "U_007b",
                "text": "{"
              },
              {
                "id": "U_007d",
                "text": "}"
              },
              {
                "id": "U_005c",
                "text": "\\"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*123*",
                "width": "160",
                "sp": "2",
                "nextlayer": "shift"
              },
              {
                "id": "U_0025",
                "text": "%"
              },
              {
                "id": "U_00a9",
                "text": "©"
              },
              {
                "id": "U_00ae",
                "text": "®"
              },
              {
                "id": "U_2122",
                "text": "™"
              },
              {
                "id": "U_2713",
                "text": "✓"
              },
              {
                "id": "U_005b",
                "text": "["
              },
              {
                "id": "U_005d",
                "text": "]"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "155",
                "sp": "1"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "T_SHIFT",
                "text": "*abc*",
                "sp": "1",
                "nextlayer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
                "width": "675"
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
    ]
  }
}
;
  this.KVER="13.0.101.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_oE2 /* 0xE2 */)) {
      if(1){
        r=m=1;   // Line 52
        k.KDC(0,t);
        k.KO(-1,t,"<");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_oE2 /* 0xE2 */)) {
      if(1){
        r=m=1;   // Line 102
        k.KDC(0,t);
        k.KO(-1,t,"<");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 64
        k.KDC(0,t);
        k.KO(-1,t,"1");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 66
        k.KDC(0,t);
        k.KO(-1,t,"%");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 62
        k.KDC(0,t);
        k.KO(-1,t,"3");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 61
        k.KDC(0,t);
        k.KO(-1,t,"4");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 60
        k.KDC(0,t);
        k.KO(-1,t,"5");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 58
        k.KDC(0,t);
        k.KO(-1,t,"7");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)) {
      if(1){
        r=m=1;   // Line 101
        k.KDC(0,t);
        k.KO(-1,t,"?");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 56
        k.KDC(0,t);
        k.KO(-1,t,"9");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 55
        k.KDC(0,t);
        k.KO(-1,t,"0");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 57
        k.KDC(0,t);
        k.KO(-1,t,"8");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 53
        k.KDC(0,t);
        k.KO(-1,t,"+");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 105
        k.KDC(0,t);
        k.KO(-1,t,".");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 44
        k.KDC(0,t);
        k.KO(-1,t,"]");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 136
        k.KDC(0,t);
        k.KO(-1,t,")");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 104
        k.KDC(0,t);
        k.KO(-1,t,":");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 103
        k.KDC(0,t);
        k.KO(-1,t,"!");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 45
        k.KDC(0,t);
        k.KO(-1,t,"@");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)) {
      if(1){
        r=m=1;   // Line 137
        k.KDC(0,t);
        k.KO(-1,t,"€");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)) {
      if(1){
        r=m=1;   // Line 146
        k.KDC(0,t);
        k.KO(-1,t,"&");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 145
        k.KDC(0,t);
        k.KO(-1,t,"²");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 51
        k.KDC(0,t);
        k.KO(-1,t,"#");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)) {
      if(1){
        r=m=1;   // Line 144
        k.KDC(0,t);
        k.KO(-1,t,"\"");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 50
        k.KDC(0,t);
        k.KO(-1,t,"{");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)) {
      if(1){
        r=m=1;   // Line 143
        k.KDC(0,t);
        k.KO(-1,t,"'");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 49
        k.KDC(0,t);
        k.KO(-1,t,"[");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)) {
      if(1){
        r=m=1;   // Line 142
        k.KDC(0,t);
        k.KO(-1,t,"(");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 48
        k.KDC(0,t);
        k.KO(-1,t,"|");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 141
        k.KDC(0,t);
        k.KO(-1,t,"-");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)) {
      if(1){
        r=m=1;   // Line 140
        k.KDC(0,t);
        k.KO(-1,t,"–");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 47
        k.KDC(0,t);
        k.KO(-1,t,"\\");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)) {
      if(1){
        r=m=1;   // Line 139
        k.KDC(0,t);
        k.KO(-1,t,"_");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 46
        k.KDC(0,t);
        k.KO(-1,t,"•");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)) {
      if(1){
        r=m=1;   // Line 138
        k.KDC(0,t);
        k.KO(-1,t,"@");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 16
        k.KDC(0,t);
        k.KO(-1,t,"Ṃ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 77
        k.KDC(0,t);
        k.KO(-1,t,"M");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 20
        k.KDC(0,t);
        k.KO(-1,t,"ṃ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)) {
      if(1){
        r=m=1;   // Line 113
        k.KDC(0,t);
        k.KO(-1,t,"m");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COMMA /* 0xBC */)) {
      if(1){
        r=m=1;   // Line 69
        k.KDC(0,t);
        k.KO(-1,t,";");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 43
        k.KDC(0,t);
        k.KO(-1,t,"}");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_EQUAL /* 0xBB */)) {
      if(1){
        r=m=1;   // Line 135
        k.KDC(0,t);
        k.KO(-1,t,"=");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_PERIOD /* 0xBE */)) {
      if(1){
        r=m=1;   // Line 68
        k.KDC(0,t);
        k.KO(-1,t,"/");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_SLASH /* 0xBF */)) {
      if(1){
        r=m=1;   // Line 67
        k.KDC(0,t);
        k.KO(-1,t,"§");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_2 /* 0x32 */)) {
      if(1){
        r=m=1;   // Line 63
        k.KDC(0,t);
        k.KO(-1,t,"2");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 86
        k.KDC(0,t);
        k.KO(-1,t,"Q");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 15
        k.KDC(0,t);
        k.KO(-1,t,"Ḅ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 72
        k.KDC(0,t);
        k.KO(-1,t,"B");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 26
        k.KDC(0,t);
        k.KO(-1,t,"Č");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 74
        k.KDC(0,t);
        k.KO(-1,t,"C");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 28
        k.KDC(0,t);
        k.KO(-1,t,"Ḍ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 84
        k.KDC(0,t);
        k.KO(-1,t,"D");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 97
        k.KDC(0,t);
        k.KO(-1,t,"E");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 83
        k.KDC(0,t);
        k.KO(-1,t,"F");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 18
        k.KDC(0,t);
        k.KO(-1,t,"Ǧ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 82
        k.KDC(0,t);
        k.KO(-1,t,"G");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 27
        k.KDC(0,t);
        k.KO(-1,t,"Ḥ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 81
        k.KDC(0,t);
        k.KO(-1,t,"H");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 92
        k.KDC(0,t);
        k.KO(-1,t,"I");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 80
        k.KDC(0,t);
        k.KO(-1,t,"J");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 79
        k.KDC(0,t);
        k.KO(-1,t,"K");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 17
        k.KDC(0,t);
        k.KO(-1,t,"Ḷ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 78
        k.KDC(0,t);
        k.KO(-1,t,"L");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 70
        k.KDC(0,t);
        k.KO(-1,t,"?");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 14
        k.KDC(0,t);
        k.KO(-1,t,"Ṇ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 71
        k.KDC(0,t);
        k.KO(-1,t,"N");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 30
        k.KDC(0,t);
        k.KO(-1,t,"O");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 91
        k.KDC(0,t);
        k.KO(-1,t,"Ɣ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 40
        k.KDC(0,t);
        k.KO(-1,t,"P");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 90
        k.KDC(0,t);
        k.KO(-1,t,"Ɛ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 99
        k.KDC(0,t);
        k.KO(-1,t,"A");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 32
        k.KDC(0,t);
        k.KO(-1,t,"Ṛ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 96
        k.KDC(0,t);
        k.KO(-1,t,"R");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 29
        k.KDC(0,t);
        k.KO(-1,t,"Ṣ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 85
        k.KDC(0,t);
        k.KO(-1,t,"S");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 31
        k.KDC(0,t);
        k.KO(-1,t,"Ṭ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 95
        k.KDC(0,t);
        k.KO(-1,t,"T");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 93
        k.KDC(0,t);
        k.KO(-1,t,"U");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 73
        k.KDC(0,t);
        k.KO(-1,t,"V");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4050 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 33
        k.KDC(0,t);
        k.KO(-1,t,"Ẓ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 98
        k.KDC(0,t);
        k.KO(-1,t,"Z");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 75
        k.KDC(0,t);
        k.KO(-1,t,"X");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 94
        k.KDC(0,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 76
        k.KDC(0,t);
        k.KO(-1,t,"W");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 124
        k.KDC(0,t);
        k.KO(-1,t,"̣");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 100
        k.KDC(0,t);
        k.KO(-1,t,"*");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 19
        k.KDC(0,t);
        k.KO(-1,t,"¤");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 123
        k.KDC(0,t);
        k.KO(-1,t,"$");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_6 /* 0x36 */)) {
      if(1){
        r=m=1;   // Line 59
        k.KDC(0,t);
        k.KO(-1,t,"6");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_HYPHEN /* 0xBD */)) {
      if(1){
        r=m=1;   // Line 54
        k.KDC(0,t);
        k.KO(-1,t,"°");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 147
        k.KDC(0,t);
        k.KO(-1,t,"ə");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {
      if(1){
        r=m=1;   // Line 122
        k.KDC(0,t);
        k.KO(-1,t,"q");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 23
        k.KDC(0,t);
        k.KO(-1,t,"ḅ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {
      if(1){
        r=m=1;   // Line 108
        k.KDC(0,t);
        k.KO(-1,t,"b");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 25
        k.KDC(0,t);
        k.KO(-1,t,"č");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {
      if(1){
        r=m=1;   // Line 110
        k.KDC(0,t);
        k.KO(-1,t,"c");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 35
        k.KDC(0,t);
        k.KO(-1,t,"ḍ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {
      if(1){
        r=m=1;   // Line 120
        k.KDC(0,t);
        k.KO(-1,t,"d");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {
      if(1){
        r=m=1;   // Line 132
        k.KDC(0,t);
        k.KO(-1,t,"e");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)) {
      if(1){
        r=m=1;   // Line 119
        k.KDC(0,t);
        k.KO(-1,t,"f");
      }
    }
      if(m) {}
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 24
        k.KDC(0,t);
        k.KO(-1,t,"ǧ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {
      if(1){
        r=m=1;   // Line 118
        k.KDC(0,t);
        k.KO(-1,t,"g");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 34
        k.KDC(0,t);
        k.KO(-1,t,"ḥ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {
      if(1){
        r=m=1;   // Line 117
        k.KDC(0,t);
        k.KO(-1,t,"h");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {
      if(1){
        r=m=1;   // Line 127
        k.KDC(0,t);
        k.KO(-1,t,"i");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)) {
      if(1){
        r=m=1;   // Line 116
        k.KDC(0,t);
        k.KO(-1,t,"j");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)) {
      if(1){
        r=m=1;   // Line 115
        k.KDC(0,t);
        k.KO(-1,t,"k");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 21
        k.KDC(0,t);
        k.KO(-1,t,"ḷ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)) {
      if(1){
        r=m=1;   // Line 114
        k.KDC(0,t);
        k.KO(-1,t,"l");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)) {
      if(1){
        r=m=1;   // Line 106
        k.KDC(0,t);
        k.KO(-1,t,",");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 22
        k.KDC(0,t);
        k.KO(-1,t,"ṇ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {
      if(1){
        r=m=1;   // Line 107
        k.KDC(0,t);
        k.KO(-1,t,"n");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 42
        k.KDC(0,t);
        k.KO(-1,t,"o");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {
      if(1){
        r=m=1;   // Line 126
        k.KDC(0,t);
        k.KO(-1,t,"ɣ");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 41
        k.KDC(0,t);
        k.KO(-1,t,"p");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)) {
      if(1){
        r=m=1;   // Line 125
        k.KDC(0,t);
        k.KO(-1,t,"ɛ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)) {
      if(1){
        r=m=1;   // Line 134
        k.KDC(0,t);
        k.KO(-1,t,"a");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 38
        k.KDC(0,t);
        k.KO(-1,t,"ṛ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)) {
      if(1){
        r=m=1;   // Line 131
        k.KDC(0,t);
        k.KO(-1,t,"r");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 36
        k.KDC(0,t);
        k.KO(-1,t,"ṣ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {
      if(1){
        r=m=1;   // Line 121
        k.KDC(0,t);
        k.KO(-1,t,"s");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 37
        k.KDC(0,t);
        k.KO(-1,t,"ṭ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {
      if(1){
        r=m=1;   // Line 130
        k.KDC(0,t);
        k.KO(-1,t,"t");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {
      if(1){
        r=m=1;   // Line 128
        k.KDC(0,t);
        k.KO(-1,t,"u");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)) {
      if(1){
        r=m=1;   // Line 109
        k.KDC(0,t);
        k.KO(-1,t,"v");
      }
    }
    else if(k.KKM(e, modCodes.ALT | modCodes.VIRTUAL_KEY /* 0x4040 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 39
        k.KDC(0,t);
        k.KO(-1,t,"ẓ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {
      if(1){
        r=m=1;   // Line 133
        k.KDC(0,t);
        k.KO(-1,t,"z");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)) {
      if(1){
        r=m=1;   // Line 111
        k.KDC(0,t);
        k.KO(-1,t,"x");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {
      if(1){
        r=m=1;   // Line 129
        k.KDC(0,t);
        k.KO(-1,t,"y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {
      if(1){
        r=m=1;   // Line 112
        k.KDC(0,t);
        k.KO(-1,t,"w");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)) {
      if(1){
        r=m=1;   // Line 89
        k.KDC(0,t);
        k.KO(-1,t,"̌");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(1){
        r=m=1;   // Line 87
        k.KDC(0,t);
        k.KO(-1,t,"µ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_RBRKT /* 0xDD */)) {
      if(1){
        r=m=1;   // Line 88
        k.KDC(0,t);
        k.KO(-1,t,"£");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {
      if(1){
        r=m=1;   // Line 65
        k.KDC(0,t);
        k.KO(-1,t,"Ə");
      }
    }
    return r;
  };
}
