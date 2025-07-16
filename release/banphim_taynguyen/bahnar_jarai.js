if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_bahnar_jarai());
}
function Keyboard_bahnar_jarai()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_bahnar_jarai";
  this.KN="Bahnar_Jarai";
  this.KMINVER="10.0";
  this.KV={F:' 1em "Arial"',K102:0};
  this.KV.KLS={
    "default": ["`","1","2","3","4","5","6","7","8","9","0","-","=","","","","q","w","e","r","t","y","u","i","o","p","[","]","\\","","","","a","s","d","f","g","h","j","k","l",";","'","","","","","","","z","x","c","v","b","n","m",",",".","/","","","","","",""],
    "shift": ["~","!","@","#","$","%","^","&","*","(",")","_","+","","","","Q","W","E","R","T","Y","U","I","O","P","{","}","|","","","","A","S","D","F","G","H","J","K","L",":","\"","","","","","","","Z","X","C","V","B","N","M","<",">","?","","","","","",""]
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
  this.KBVER="1.0";
  this.KMBM=modCodes.SHIFT /* 0x0010 */;
  this.KVKL={
  "phone": {
    "font": "Tahoma",
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
                "hint": "e é è ẻ ẽ ẹ ĕ ê ế ề ể ễ ệ ê̆"
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
                "text": "y",
                "hint": "y ý ỳ ỷ ỹ ỵ"
              },
              {
                "id": "K_U",
                "text": "u",
                "hint": "u ú ù ủ ũ ụ ŭ ư ứ ừ ử ữ ự ư̆"
              },
              {
                "id": "K_I",
                "text": "i",
                "hint": "i í ì ỉ ĩ ị ĭ "
              },
              {
                "id": "K_O",
                "text": "o",
                "hint": "o ó ò ỏ ỏ õ ọ ŏ ô ố ồ ổ ỗ ộ ô̆ ơ ớ ờ ở ỡ ợ ơ̆"
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
                "text": "a",
                "pad": "50",
                "hint": "a á à ả ã ạ ă ắ ằ ẳ ẵ ặ â ấ ầ ẩ ẫ ậ"
              },
              {
                "id": "K_S",
                "text": "s"
              },
              {
                "id": "K_D",
                "text": "d",
                "hint": "đ"
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
                "id": "T_new_88",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
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
                "text": "c",
                "hint": "č"
              },
              {
                "id": "K_V",
                "text": "v"
              },
              {
                "id": "K_B",
                "text": "b",
                "hint": "ƀ"
              },
              {
                "id": "K_N",
                "text": "n",
                "hint": "ñ"
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
            "id": "4",
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
                "width": "610"
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
                "text": "A",
                "pad": "50"
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
                "id": "K_PERIOD",
                "text": ".",
                "layer": "default",
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
            "id": "4",
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
                "width": "610"
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
                "id": "K_4",
                "layer": "shift",
                "text": "$",
                "pad": "50"
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
                "text": "=",
                "layer": "default"
              },
              {
                "id": "K_BKSLASH",
                "layer": "shift",
                "text": "|"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\",
                "layer": "default"
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
                "layer": "shift",
                "text": "+"
              },
              {
                "id": "K_HYPHEN",
                "text": "-"
              },
              {
                "id": "K_8",
                "layer": "shift",
                "text": "*"
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
            "id": "4",
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
                "width": "610"
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
};
  this.KVER="18.0.238.0";
  this.KVS=[];
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 23
        k.KDC(1,t);
        k.KO(-1,t,"á");
      }
      else if(k.KFCM(1,t,['á'])){
        r=m=1;   // Line 29
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 35
        k.KDC(1,t);
        k.KO(-1,t,"Á");
      }
      else if(k.KFCM(1,t,['Á'])){
        r=m=1;   // Line 41
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 47
        k.KDC(1,t);
        k.KO(-1,t,"ắ");
      }
      else if(k.KFCM(1,t,['ắ'])){
        r=m=1;   // Line 53
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 59
        k.KDC(1,t);
        k.KO(-1,t,"Ắ");
      }
      else if(k.KFCM(1,t,['Ắ'])){
        r=m=1;   // Line 65
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 74
        k.KDC(1,t);
        k.KO(-1,t,"ấ");
      }
      else if(k.KFCM(1,t,['ấ'])){
        r=m=1;   // Line 80
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 86
        k.KDC(1,t);
        k.KO(-1,t,"Ấ");
      }
      else if(k.KFCM(1,t,['Ấ'])){
        r=m=1;   // Line 92
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 98
        k.KDC(1,t);
        k.KO(-1,t,"é");
      }
      else if(k.KFCM(1,t,['é'])){
        r=m=1;   // Line 104
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 110
        k.KDC(1,t);
        k.KO(-1,t,"É");
      }
      else if(k.KFCM(1,t,['É'])){
        r=m=1;   // Line 116
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 122
        k.KDC(1,t);
        k.KO(-1,t,"ế");
      }
      else if(k.KFCM(1,t,['ế'])){
        r=m=1;   // Line 128
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 134
        k.KDC(1,t);
        k.KO(-1,t,"Ế");
      }
      else if(k.KFCM(1,t,['Ế'])){
        r=m=1;   // Line 140
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 146
        k.KDC(1,t);
        k.KO(-1,t,"í");
      }
      else if(k.KFCM(1,t,['í'])){
        r=m=1;   // Line 152
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 158
        k.KDC(1,t);
        k.KO(-1,t,"Í");
      }
      else if(k.KFCM(1,t,['Í'])){
        r=m=1;   // Line 164
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 170
        k.KDC(1,t);
        k.KO(-1,t,"ó");
      }
      else if(k.KFCM(1,t,['ó'])){
        r=m=1;   // Line 176
        k.KDC(1,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 182
        k.KDC(1,t);
        k.KO(-1,t,"Ó");
      }
      else if(k.KFCM(1,t,['Ó'])){
        r=m=1;   // Line 188
        k.KDC(1,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 197
        k.KDC(1,t);
        k.KO(-1,t,"ố");
      }
      else if(k.KFCM(1,t,['ố'])){
        r=m=1;   // Line 203
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 209
        k.KDC(1,t);
        k.KO(-1,t,"Ố");
      }
      else if(k.KFCM(1,t,['Ố'])){
        r=m=1;   // Line 215
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 222
        k.KDC(1,t);
        k.KO(-1,t,"ớ");
      }
      else if(k.KFCM(1,t,['ớ'])){
        r=m=1;   // Line 228
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 234
        k.KDC(1,t);
        k.KO(-1,t,"Ớ");
      }
      else if(k.KFCM(1,t,['Ớ'])){
        r=m=1;   // Line 240
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 246
        k.KDC(1,t);
        k.KO(-1,t,"ú");
      }
      else if(k.KFCM(1,t,['ú'])){
        r=m=1;   // Line 252
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 258
        k.KDC(1,t);
        k.KO(-1,t,"Ú");
      }
      else if(k.KFCM(1,t,['Ú'])){
        r=m=1;   // Line 264
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 270
        k.KDC(1,t);
        k.KO(-1,t,"ứ");
      }
      else if(k.KFCM(1,t,['ứ'])){
        r=m=1;   // Line 276
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 282
        k.KDC(1,t);
        k.KO(-1,t,"Ứ");
      }
      else if(k.KFCM(1,t,['Ứ'])){
        r=m=1;   // Line 288
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 294
        k.KDC(1,t);
        k.KO(-1,t,"ý");
      }
      else if(k.KFCM(1,t,['ý'])){
        r=m=1;   // Line 300
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 306
        k.KDC(1,t);
        k.KO(-1,t,"Ý");
      }
      else if(k.KFCM(1,t,['Ý'])){
        r=m=1;   // Line 312
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
      else if(k.KFCM(1,t,['á'])){
        r=m=1;   // Line 477
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Á'])){
        r=m=1;   // Line 478
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ắ'])){
        r=m=1;   // Line 490
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ắ'])){
        r=m=1;   // Line 491
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ấ'])){
        r=m=1;   // Line 501
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Ấ'])){
        r=m=1;   // Line 502
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['é'])){
        r=m=1;   // Line 512
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['É'])){
        r=m=1;   // Line 513
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ế'])){
        r=m=1;   // Line 523
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ế'])){
        r=m=1;   // Line 524
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['í'])){
        r=m=1;   // Line 534
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['Í'])){
        r=m=1;   // Line 535
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['ú'])){
        r=m=1;   // Line 545
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ú'])){
        r=m=1;   // Line 546
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ứ'])){
        r=m=1;   // Line 556
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ứ'])){
        r=m=1;   // Line 557
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ý'])){
        r=m=1;   // Line 567
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Ý'])){
        r=m=1;   // Line 568
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 24
        k.KDC(1,t);
        k.KO(-1,t,"à");
      }
      else if(k.KFCM(1,t,['à'])){
        r=m=1;   // Line 30
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 36
        k.KDC(1,t);
        k.KO(-1,t,"À");
      }
      else if(k.KFCM(1,t,['À'])){
        r=m=1;   // Line 42
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 48
        k.KDC(1,t);
        k.KO(-1,t,"ằ");
      }
      else if(k.KFCM(1,t,['ằ'])){
        r=m=1;   // Line 54
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 60
        k.KDC(1,t);
        k.KO(-1,t,"Ằ");
      }
      else if(k.KFCM(1,t,['Ằ'])){
        r=m=1;   // Line 66
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 75
        k.KDC(1,t);
        k.KO(-1,t,"ầ");
      }
      else if(k.KFCM(1,t,['ầ'])){
        r=m=1;   // Line 81
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 87
        k.KDC(1,t);
        k.KO(-1,t,"Ầ");
      }
      else if(k.KFCM(1,t,['Ầ'])){
        r=m=1;   // Line 93
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 99
        k.KDC(1,t);
        k.KO(-1,t,"è");
      }
      else if(k.KFCM(1,t,['è'])){
        r=m=1;   // Line 105
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 111
        k.KDC(1,t);
        k.KO(-1,t,"È");
      }
      else if(k.KFCM(1,t,['È'])){
        r=m=1;   // Line 117
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 123
        k.KDC(1,t);
        k.KO(-1,t,"ề");
      }
      else if(k.KFCM(1,t,['ề'])){
        r=m=1;   // Line 129
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 135
        k.KDC(1,t);
        k.KO(-1,t,"Ề");
      }
      else if(k.KFCM(1,t,['Ề'])){
        r=m=1;   // Line 141
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 147
        k.KDC(1,t);
        k.KO(-1,t,"ì");
      }
      else if(k.KFCM(1,t,['ì'])){
        r=m=1;   // Line 153
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 159
        k.KDC(1,t);
        k.KO(-1,t,"Ì");
      }
      else if(k.KFCM(1,t,['Ì'])){
        r=m=1;   // Line 165
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 171
        k.KDC(1,t);
        k.KO(-1,t,"ò");
      }
      else if(k.KFCM(1,t,['ò'])){
        r=m=1;   // Line 177
        k.KDC(1,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 183
        k.KDC(1,t);
        k.KO(-1,t,"Ò");
      }
      else if(k.KFCM(1,t,['Ò'])){
        r=m=1;   // Line 189
        k.KDC(1,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 198
        k.KDC(1,t);
        k.KO(-1,t,"ồ");
      }
      else if(k.KFCM(1,t,['ồ'])){
        r=m=1;   // Line 204
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 210
        k.KDC(1,t);
        k.KO(-1,t,"Ồ");
      }
      else if(k.KFCM(1,t,['Ồ'])){
        r=m=1;   // Line 216
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 223
        k.KDC(1,t);
        k.KO(-1,t,"ờ");
      }
      else if(k.KFCM(1,t,['ờ'])){
        r=m=1;   // Line 229
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 235
        k.KDC(1,t);
        k.KO(-1,t,"Ờ");
      }
      else if(k.KFCM(1,t,['Ờ'])){
        r=m=1;   // Line 241
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 247
        k.KDC(1,t);
        k.KO(-1,t,"ù");
      }
      else if(k.KFCM(1,t,['ù'])){
        r=m=1;   // Line 253
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 259
        k.KDC(1,t);
        k.KO(-1,t,"Ù");
      }
      else if(k.KFCM(1,t,['Ù'])){
        r=m=1;   // Line 265
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 271
        k.KDC(1,t);
        k.KO(-1,t,"ừ");
      }
      else if(k.KFCM(1,t,['ừ'])){
        r=m=1;   // Line 277
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 283
        k.KDC(1,t);
        k.KO(-1,t,"Ừ");
      }
      else if(k.KFCM(1,t,['Ừ'])){
        r=m=1;   // Line 289
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 295
        k.KDC(1,t);
        k.KO(-1,t,"ỳ");
      }
      else if(k.KFCM(1,t,['ỳ'])){
        r=m=1;   // Line 301
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 307
        k.KDC(1,t);
        k.KO(-1,t,"Ỳ");
      }
      else if(k.KFCM(1,t,['Ỳ'])){
        r=m=1;   // Line 313
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
      else if(k.KFCM(1,t,['à'])){
        r=m=1;   // Line 479
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['À'])){
        r=m=1;   // Line 480
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ằ'])){
        r=m=1;   // Line 492
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ằ'])){
        r=m=1;   // Line 493
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ầ'])){
        r=m=1;   // Line 503
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Ầ'])){
        r=m=1;   // Line 504
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['è'])){
        r=m=1;   // Line 514
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['È'])){
        r=m=1;   // Line 515
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ề'])){
        r=m=1;   // Line 525
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ề'])){
        r=m=1;   // Line 526
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['ì'])){
        r=m=1;   // Line 536
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['Ì'])){
        r=m=1;   // Line 537
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['ù'])){
        r=m=1;   // Line 547
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ù'])){
        r=m=1;   // Line 548
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ừ'])){
        r=m=1;   // Line 558
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ừ'])){
        r=m=1;   // Line 559
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ỳ'])){
        r=m=1;   // Line 569
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Ỳ'])){
        r=m=1;   // Line 570
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 25
        k.KDC(1,t);
        k.KO(-1,t,"ả");
      }
      else if(k.KFCM(1,t,['ả'])){
        r=m=1;   // Line 31
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 37
        k.KDC(1,t);
        k.KO(-1,t,"Ả");
      }
      else if(k.KFCM(1,t,['Ả'])){
        r=m=1;   // Line 43
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 49
        k.KDC(1,t);
        k.KO(-1,t,"ẳ");
      }
      else if(k.KFCM(1,t,['ẳ'])){
        r=m=1;   // Line 55
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 61
        k.KDC(1,t);
        k.KO(-1,t,"Ẳ");
      }
      else if(k.KFCM(1,t,['Ẳ'])){
        r=m=1;   // Line 67
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 76
        k.KDC(1,t);
        k.KO(-1,t,"ẩ");
      }
      else if(k.KFCM(1,t,['ẩ'])){
        r=m=1;   // Line 82
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 88
        k.KDC(1,t);
        k.KO(-1,t,"Ẩ");
      }
      else if(k.KFCM(1,t,['Ẩ'])){
        r=m=1;   // Line 94
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 100
        k.KDC(1,t);
        k.KO(-1,t,"ẻ");
      }
      else if(k.KFCM(1,t,['ẻ'])){
        r=m=1;   // Line 106
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 112
        k.KDC(1,t);
        k.KO(-1,t,"Ẻ");
      }
      else if(k.KFCM(1,t,['Ẻ'])){
        r=m=1;   // Line 118
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 124
        k.KDC(1,t);
        k.KO(-1,t,"ể");
      }
      else if(k.KFCM(1,t,['ể'])){
        r=m=1;   // Line 130
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 136
        k.KDC(1,t);
        k.KO(-1,t,"Ể");
      }
      else if(k.KFCM(1,t,['Ể'])){
        r=m=1;   // Line 142
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 148
        k.KDC(1,t);
        k.KO(-1,t,"ỉ");
      }
      else if(k.KFCM(1,t,['ỉ'])){
        r=m=1;   // Line 154
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 160
        k.KDC(1,t);
        k.KO(-1,t,"Ỉ");
      }
      else if(k.KFCM(1,t,['Ỉ'])){
        r=m=1;   // Line 166
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 172
        k.KDC(1,t);
        k.KO(-1,t,"ỏ");
      }
      else if(k.KFCM(1,t,['ỏ'])){
        r=m=1;   // Line 178
        k.KDC(1,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 184
        k.KDC(1,t);
        k.KO(-1,t,"Ỏ");
      }
      else if(k.KFCM(1,t,['Ỏ'])){
        r=m=1;   // Line 190
        k.KDC(1,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 199
        k.KDC(1,t);
        k.KO(-1,t,"ổ");
      }
      else if(k.KFCM(1,t,['ổ'])){
        r=m=1;   // Line 205
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 211
        k.KDC(1,t);
        k.KO(-1,t,"Ổ");
      }
      else if(k.KFCM(1,t,['Ổ'])){
        r=m=1;   // Line 217
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 224
        k.KDC(1,t);
        k.KO(-1,t,"ở");
      }
      else if(k.KFCM(1,t,['ở'])){
        r=m=1;   // Line 230
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 236
        k.KDC(1,t);
        k.KO(-1,t,"Ở");
      }
      else if(k.KFCM(1,t,['Ở'])){
        r=m=1;   // Line 242
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 248
        k.KDC(1,t);
        k.KO(-1,t,"ủ");
      }
      else if(k.KFCM(1,t,['ủ'])){
        r=m=1;   // Line 254
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 260
        k.KDC(1,t);
        k.KO(-1,t,"Ủ");
      }
      else if(k.KFCM(1,t,['Ủ'])){
        r=m=1;   // Line 266
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 272
        k.KDC(1,t);
        k.KO(-1,t,"ử");
      }
      else if(k.KFCM(1,t,['ử'])){
        r=m=1;   // Line 278
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 284
        k.KDC(1,t);
        k.KO(-1,t,"Ử");
      }
      else if(k.KFCM(1,t,['Ử'])){
        r=m=1;   // Line 290
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 296
        k.KDC(1,t);
        k.KO(-1,t,"ỷ");
      }
      else if(k.KFCM(1,t,['ỷ'])){
        r=m=1;   // Line 302
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 308
        k.KDC(1,t);
        k.KO(-1,t,"Ỷ");
      }
      else if(k.KFCM(1,t,['Ỷ'])){
        r=m=1;   // Line 314
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
      else if(k.KFCM(1,t,['ả'])){
        r=m=1;   // Line 481
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Ả'])){
        r=m=1;   // Line 482
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ẳ'])){
        r=m=1;   // Line 494
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ẳ'])){
        r=m=1;   // Line 495
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ẩ'])){
        r=m=1;   // Line 505
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Ẩ'])){
        r=m=1;   // Line 506
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['ẻ'])){
        r=m=1;   // Line 516
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['Ẻ'])){
        r=m=1;   // Line 517
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ể'])){
        r=m=1;   // Line 527
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ể'])){
        r=m=1;   // Line 528
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['ỉ'])){
        r=m=1;   // Line 538
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['Ỉ'])){
        r=m=1;   // Line 539
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['ủ'])){
        r=m=1;   // Line 549
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ủ'])){
        r=m=1;   // Line 550
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ử'])){
        r=m=1;   // Line 560
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ử'])){
        r=m=1;   // Line 561
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ỷ'])){
        r=m=1;   // Line 571
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Ỷ'])){
        r=m=1;   // Line 572
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 26
        k.KDC(1,t);
        k.KO(-1,t,"ã");
      }
      else if(k.KFCM(1,t,['ã'])){
        r=m=1;   // Line 32
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 38
        k.KDC(1,t);
        k.KO(-1,t,"Ã");
      }
      else if(k.KFCM(1,t,['Ã'])){
        r=m=1;   // Line 44
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 50
        k.KDC(1,t);
        k.KO(-1,t,"ẵ");
      }
      else if(k.KFCM(1,t,['ẵ'])){
        r=m=1;   // Line 56
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 62
        k.KDC(1,t);
        k.KO(-1,t,"Ẵ");
      }
      else if(k.KFCM(1,t,['Ẵ'])){
        r=m=1;   // Line 68
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 77
        k.KDC(1,t);
        k.KO(-1,t,"ẫ");
      }
      else if(k.KFCM(1,t,['ẫ'])){
        r=m=1;   // Line 83
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 89
        k.KDC(1,t);
        k.KO(-1,t,"Ẫ");
      }
      else if(k.KFCM(1,t,['Ẫ'])){
        r=m=1;   // Line 95
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 101
        k.KDC(1,t);
        k.KO(-1,t,"ẽ");
      }
      else if(k.KFCM(1,t,['ẽ'])){
        r=m=1;   // Line 107
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 113
        k.KDC(1,t);
        k.KO(-1,t,"Ẽ");
      }
      else if(k.KFCM(1,t,['Ẽ'])){
        r=m=1;   // Line 119
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 125
        k.KDC(1,t);
        k.KO(-1,t,"ễ");
      }
      else if(k.KFCM(1,t,['ễ'])){
        r=m=1;   // Line 131
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 137
        k.KDC(1,t);
        k.KO(-1,t,"Ễ");
      }
      else if(k.KFCM(1,t,['Ễ'])){
        r=m=1;   // Line 143
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 149
        k.KDC(1,t);
        k.KO(-1,t,"ĩ");
      }
      else if(k.KFCM(1,t,['ĩ'])){
        r=m=1;   // Line 155
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 161
        k.KDC(1,t);
        k.KO(-1,t,"Ĩ");
      }
      else if(k.KFCM(1,t,['Ĩ'])){
        r=m=1;   // Line 167
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 173
        k.KDC(1,t);
        k.KO(-1,t,"õ");
      }
      else if(k.KFCM(1,t,['õ'])){
        r=m=1;   // Line 179
        k.KDC(1,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 185
        k.KDC(1,t);
        k.KO(-1,t,"Õ");
      }
      else if(k.KFCM(1,t,['Õ'])){
        r=m=1;   // Line 191
        k.KDC(1,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 200
        k.KDC(1,t);
        k.KO(-1,t,"ỗ");
      }
      else if(k.KFCM(1,t,['ỗ'])){
        r=m=1;   // Line 206
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 212
        k.KDC(1,t);
        k.KO(-1,t,"Ỗ");
      }
      else if(k.KFCM(1,t,['Ỗ'])){
        r=m=1;   // Line 218
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 225
        k.KDC(1,t);
        k.KO(-1,t,"ỡ");
      }
      else if(k.KFCM(1,t,['ỡ'])){
        r=m=1;   // Line 231
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 237
        k.KDC(1,t);
        k.KO(-1,t,"Ỡ");
      }
      else if(k.KFCM(1,t,['Ỡ'])){
        r=m=1;   // Line 243
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 249
        k.KDC(1,t);
        k.KO(-1,t,"ũ");
      }
      else if(k.KFCM(1,t,['ũ'])){
        r=m=1;   // Line 255
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 261
        k.KDC(1,t);
        k.KO(-1,t,"Ũ");
      }
      else if(k.KFCM(1,t,['Ũ'])){
        r=m=1;   // Line 267
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 273
        k.KDC(1,t);
        k.KO(-1,t,"ữ");
      }
      else if(k.KFCM(1,t,['ữ'])){
        r=m=1;   // Line 279
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 285
        k.KDC(1,t);
        k.KO(-1,t,"Ữ");
      }
      else if(k.KFCM(1,t,['Ữ'])){
        r=m=1;   // Line 291
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 297
        k.KDC(1,t);
        k.KO(-1,t,"ỹ");
      }
      else if(k.KFCM(1,t,['ỹ'])){
        r=m=1;   // Line 303
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 309
        k.KDC(1,t);
        k.KO(-1,t,"Ỹ");
      }
      else if(k.KFCM(1,t,['Ỹ'])){
        r=m=1;   // Line 315
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
      else if(k.KFCM(1,t,['ã'])){
        r=m=1;   // Line 483
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Ã'])){
        r=m=1;   // Line 484
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ẵ'])){
        r=m=1;   // Line 496
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ẵ'])){
        r=m=1;   // Line 497
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ẫ'])){
        r=m=1;   // Line 507
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Ẫ'])){
        r=m=1;   // Line 508
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['ẽ'])){
        r=m=1;   // Line 518
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['Ẽ'])){
        r=m=1;   // Line 519
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ễ'])){
        r=m=1;   // Line 529
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ễ'])){
        r=m=1;   // Line 530
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['ĩ'])){
        r=m=1;   // Line 540
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['Ĩ'])){
        r=m=1;   // Line 541
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['ũ'])){
        r=m=1;   // Line 551
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ũ'])){
        r=m=1;   // Line 552
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ữ'])){
        r=m=1;   // Line 562
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ữ'])){
        r=m=1;   // Line 563
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ỹ'])){
        r=m=1;   // Line 573
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Ỹ'])){
        r=m=1;   // Line 574
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 27
        k.KDC(1,t);
        k.KO(-1,t,"ạ");
      }
      else if(k.KFCM(1,t,['ạ'])){
        r=m=1;   // Line 33
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 39
        k.KDC(1,t);
        k.KO(-1,t,"Ạ");
      }
      else if(k.KFCM(1,t,['Ạ'])){
        r=m=1;   // Line 45
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 51
        k.KDC(1,t);
        k.KO(-1,t,"ặ");
      }
      else if(k.KFCM(1,t,['ặ'])){
        r=m=1;   // Line 57
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 63
        k.KDC(1,t);
        k.KO(-1,t,"Ặ");
      }
      else if(k.KFCM(1,t,['Ặ'])){
        r=m=1;   // Line 69
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 78
        k.KDC(1,t);
        k.KO(-1,t,"ậ");
      }
      else if(k.KFCM(1,t,['ậ'])){
        r=m=1;   // Line 84
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 90
        k.KDC(1,t);
        k.KO(-1,t,"Ậ");
      }
      else if(k.KFCM(1,t,['Ậ'])){
        r=m=1;   // Line 96
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 102
        k.KDC(1,t);
        k.KO(-1,t,"ẹ");
      }
      else if(k.KFCM(1,t,['ẹ'])){
        r=m=1;   // Line 108
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 114
        k.KDC(1,t);
        k.KO(-1,t,"Ẹ");
      }
      else if(k.KFCM(1,t,['Ẹ'])){
        r=m=1;   // Line 120
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 126
        k.KDC(1,t);
        k.KO(-1,t,"ệ");
      }
      else if(k.KFCM(1,t,['ệ'])){
        r=m=1;   // Line 132
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 138
        k.KDC(1,t);
        k.KO(-1,t,"Ệ");
      }
      else if(k.KFCM(1,t,['Ệ'])){
        r=m=1;   // Line 144
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 150
        k.KDC(1,t);
        k.KO(-1,t,"ị");
      }
      else if(k.KFCM(1,t,['ị'])){
        r=m=1;   // Line 156
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 162
        k.KDC(1,t);
        k.KO(-1,t,"Ị");
      }
      else if(k.KFCM(1,t,['Ị'])){
        r=m=1;   // Line 168
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 174
        k.KDC(1,t);
        k.KO(-1,t,"ọ");
      }
      else if(k.KFCM(1,t,['ọ'])){
        r=m=1;   // Line 180
        k.KDC(1,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 186
        k.KDC(1,t);
        k.KO(-1,t,"Ọ");
      }
      else if(k.KFCM(1,t,['Ọ'])){
        r=m=1;   // Line 192
        k.KDC(1,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 201
        k.KDC(1,t);
        k.KO(-1,t,"ộ");
      }
      else if(k.KFCM(1,t,['ộ'])){
        r=m=1;   // Line 207
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 213
        k.KDC(1,t);
        k.KO(-1,t,"Ộ");
      }
      else if(k.KFCM(1,t,['Ộ'])){
        r=m=1;   // Line 219
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 226
        k.KDC(1,t);
        k.KO(-1,t,"ợ");
      }
      else if(k.KFCM(1,t,['ợ'])){
        r=m=1;   // Line 232
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 238
        k.KDC(1,t);
        k.KO(-1,t,"Ợ");
      }
      else if(k.KFCM(1,t,['Ợ'])){
        r=m=1;   // Line 244
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 250
        k.KDC(1,t);
        k.KO(-1,t,"ụ");
      }
      else if(k.KFCM(1,t,['ụ'])){
        r=m=1;   // Line 256
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 262
        k.KDC(1,t);
        k.KO(-1,t,"Ụ");
      }
      else if(k.KFCM(1,t,['Ụ'])){
        r=m=1;   // Line 268
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 274
        k.KDC(1,t);
        k.KO(-1,t,"ự");
      }
      else if(k.KFCM(1,t,['ự'])){
        r=m=1;   // Line 280
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 286
        k.KDC(1,t);
        k.KO(-1,t,"Ự");
      }
      else if(k.KFCM(1,t,['Ự'])){
        r=m=1;   // Line 292
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 298
        k.KDC(1,t);
        k.KO(-1,t,"ỵ");
      }
      else if(k.KFCM(1,t,['ỵ'])){
        r=m=1;   // Line 304
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 310
        k.KDC(1,t);
        k.KO(-1,t,"Ỵ");
      }
      else if(k.KFCM(1,t,['Ỵ'])){
        r=m=1;   // Line 316
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
      else if(k.KFCM(1,t,['ạ'])){
        r=m=1;   // Line 485
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Ạ'])){
        r=m=1;   // Line 486
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ặ'])){
        r=m=1;   // Line 498
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['Ặ'])){
        r=m=1;   // Line 499
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ậ'])){
        r=m=1;   // Line 509
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['Ậ'])){
        r=m=1;   // Line 510
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['ẹ'])){
        r=m=1;   // Line 520
        k.KDC(1,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(1,t,['Ẹ'])){
        r=m=1;   // Line 521
        k.KDC(1,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(1,t,['ệ'])){
        r=m=1;   // Line 531
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['Ệ'])){
        r=m=1;   // Line 532
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['ị'])){
        r=m=1;   // Line 542
        k.KDC(1,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(1,t,['Ị'])){
        r=m=1;   // Line 543
        k.KDC(1,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(1,t,['ụ'])){
        r=m=1;   // Line 553
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ụ'])){
        r=m=1;   // Line 554
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(1,t,['ự'])){
        r=m=1;   // Line 564
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ự'])){
        r=m=1;   // Line 565
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ỵ'])){
        r=m=1;   // Line 575
        k.KDC(1,t);
        k.KO(-1,t,"y");
      }
      else if(k.KFCM(1,t,['Ỵ'])){
        r=m=1;   // Line 576
        k.KDC(1,t);
        k.KO(-1,t,"Y");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 71
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 72
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 194
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 195
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)) {
      if(k.KFCM(1,t,['z'])){
        r=m=1;   // Line 330
        k.KDC(1,t);
        k.KO(-1,t,"'");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 422
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 423
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 474
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 475
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 324
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 325
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 327
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 328
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 487
        k.KDC(1,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 488
        k.KDC(1,t);
        k.KO(-1,t,"A");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)) {
      if(k.KFCM(1,t,['d'])){
        r=m=1;   // Line 318
        k.KDC(1,t);
        k.KO(-1,t,"đ");
      }
      else if(k.KFCM(1,t,['D'])){
        r=m=1;   // Line 319
        k.KDC(1,t);
        k.KO(-1,t,"Đ");
      }
      else if(k.KFCM(1,t,['đ'])){
        r=m=1;   // Line 321
        k.KDC(1,t);
        k.KO(-1,t,"d");
      }
      else if(k.KFCM(1,t,['Đ'])){
        r=m=1;   // Line 322
        k.KDC(1,t);
        k.KO(-1,t,"D");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {
      if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 397
        k.KDC(1,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 458
        k.KDC(1,t);
        k.KO(-1,t,"AA");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {
      if(k.KFCM(1,t,['B'])){
        r=m=1;   // Line 384
        k.KDC(1,t);
        k.KO(-1,t,"Ƀ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {
      if(k.KFCM(1,t,['C'])){
        r=m=1;   // Line 390
        k.KDC(1,t);
        k.KO(-1,t,"Č");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {
      if(k.KFCM(1,t,['D'])){
        r=m=1;   // Line 393
        k.KDC(1,t);
        k.KO(-1,t,"Đ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {
      if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 400
        k.KDC(1,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 461
        k.KDC(1,t);
        k.KO(-1,t,"EE");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {
      if(k.KFCM(1,t,['N'])){
        r=m=1;   // Line 387
        k.KDC(1,t);
        k.KO(-1,t,"Ñ");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {
      if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 403
        k.KDC(1,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 464
        k.KDC(1,t);
        k.KO(-1,t,"OO");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {
      if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 408
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 409
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 413
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 414
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 418
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 419
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 467
        k.KDC(1,t);
        k.KO(-1,t,"AA");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 470
        k.KDC(1,t);
        k.KO(-1,t,"oo");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 473
        k.KDC(1,t);
        k.KO(-1,t,"U");
      }
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)) {
      if(k.KFCM(2,t,['E','̆'])){
        r=m=1;   // Line 431
        k.KDC(2,t);
        k.KO(-1,t,"EX");
      }
      else if(k.KFCM(2,t,['Ê','̆'])){
        r=m=1;   // Line 434
        k.KDC(2,t);
        k.KO(-1,t,"ÊX");
      }
      else if(k.KFCM(2,t,['I','̆'])){
        r=m=1;   // Line 437
        k.KDC(2,t);
        k.KO(-1,t,"IX");
      }
      else if(k.KFCM(2,t,['O','̆'])){
        r=m=1;   // Line 440
        k.KDC(2,t);
        k.KO(-1,t,"OX");
      }
      else if(k.KFCM(2,t,['Ô','̆'])){
        r=m=1;   // Line 443
        k.KDC(2,t);
        k.KO(-1,t,"ÔX");
      }
      else if(k.KFCM(2,t,['Ơ','̆'])){
        r=m=1;   // Line 446
        k.KDC(2,t);
        k.KO(-1,t,"ƠX");
      }
      else if(k.KFCM(2,t,['U','̆'])){
        r=m=1;   // Line 449
        k.KDC(2,t);
        k.KO(-1,t,"UX");
      }
      else if(k.KFCM(2,t,['Ư','̆'])){
        r=m=1;   // Line 452
        k.KDC(2,t);
        k.KO(-1,t,"ƯX");
      }
      else if(k.KFCM(2,t,['Y','̆'])){
        r=m=1;   // Line 455
        k.KDC(2,t);
        k.KO(-1,t,"YX");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 334
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 335
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 339
        k.KDC(1,t);
        k.KO(-1,t,"Ĕ");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 340
        k.KDC(1,t);
        k.KO(-1,t,"ĕ");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 344
        k.KDC(1,t);
        k.KO(-1,t,"Ê̆");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 345
        k.KDC(1,t);
        k.KO(-1,t,"ê̆");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 349
        k.KDC(1,t);
        k.KO(-1,t,"Ĭ");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 350
        k.KDC(1,t);
        k.KO(-1,t,"ĭ");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 354
        k.KDC(1,t);
        k.KO(-1,t,"Ŏ");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 355
        k.KDC(1,t);
        k.KO(-1,t,"ŏ");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 359
        k.KDC(1,t);
        k.KO(-1,t,"Ô̆");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 360
        k.KDC(1,t);
        k.KO(-1,t,"ô̆");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 364
        k.KDC(1,t);
        k.KO(-1,t,"Ơ̆");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 365
        k.KDC(1,t);
        k.KO(-1,t,"ơ̆");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 369
        k.KDC(1,t);
        k.KO(-1,t,"Ŭ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 370
        k.KDC(1,t);
        k.KO(-1,t,"ŭ");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 374
        k.KDC(1,t);
        k.KO(-1,t,"Ư̆");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 375
        k.KDC(1,t);
        k.KO(-1,t,"ư̆");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 379
        k.KDC(1,t);
        k.KO(-1,t,"Y̆");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 380
        k.KDC(1,t);
        k.KO(-1,t,"y̆");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 428
        k.KDC(1,t);
        k.KO(-1,t,"AX");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)) {
      if(k.KFCM(3,t,['A','̆','̱'])){
        r=m=1;   // Line 588
        k.KDC(3,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(3,t,['e','̆','̱'])){
        r=m=1;   // Line 602
        k.KDC(3,t);
        k.KO(-1,t,"ĕ");
      }
      else if(k.KFCM(3,t,['E','̆','̱'])){
        r=m=1;   // Line 603
        k.KDC(3,t);
        k.KO(-1,t,"Ĕ");
      }
      else if(k.KFCM(3,t,['ê','̆','̱'])){
        r=m=1;   // Line 612
        k.KDC(3,t);
        k.KO(-1,t,"ê̆");
      }
      else if(k.KFCM(3,t,['Ê','̆','̱'])){
        r=m=1;   // Line 613
        k.KDC(3,t);
        k.KO(-1,t,"Ê̆");
      }
      else if(k.KFCM(3,t,['I','̆','̱'])){
        r=m=1;   // Line 622
        k.KDC(3,t);
        k.KO(-1,t,"Ĭ");
      }
      else if(k.KFCM(3,t,['i','̆','̱'])){
        r=m=1;   // Line 623
        k.KDC(3,t);
        k.KO(-1,t,"ĭ");
      }
      else if(k.KFCM(3,t,['O','̆','̱'])){
        r=m=1;   // Line 632
        k.KDC(3,t);
        k.KO(-1,t,"Ŏ");
      }
      else if(k.KFCM(3,t,['o','̆','̱'])){
        r=m=1;   // Line 633
        k.KDC(3,t);
        k.KO(-1,t,"ŏ");
      }
      else if(k.KFCM(3,t,['ô','̆','̱'])){
        r=m=1;   // Line 642
        k.KDC(3,t);
        k.KO(-1,t,"ô̆");
      }
      else if(k.KFCM(3,t,['Ô','̆','̱'])){
        r=m=1;   // Line 643
        k.KDC(3,t);
        k.KO(-1,t,"Ô̆");
      }
      else if(k.KFCM(3,t,['ơ','̆','̱'])){
        r=m=1;   // Line 652
        k.KDC(3,t);
        k.KO(-1,t,"ơ̆");
      }
      else if(k.KFCM(3,t,['̱','Ơ','̆'])){
        r=m=1;   // Line 653
        k.KDC(3,t);
        k.KO(-1,t,"Ơ̆");
      }
      else if(k.KFCM(3,t,['u','̆','̱'])){
        r=m=1;   // Line 662
        k.KDC(3,t);
        k.KO(-1,t,"ŭ");
      }
      else if(k.KFCM(3,t,['U','̆','̱'])){
        r=m=1;   // Line 663
        k.KDC(3,t);
        k.KO(-1,t,"Ŭ");
      }
      else if(k.KFCM(3,t,['ư','̆','̱'])){
        r=m=1;   // Line 672
        k.KDC(3,t);
        k.KO(-1,t,"ư̆");
      }
      else if(k.KFCM(3,t,['Ư','̆','̱'])){
        r=m=1;   // Line 673
        k.KDC(3,t);
        k.KO(-1,t,"Ư̆");
      }
      else if(k.KFCM(2,t,['a','̱'])){
        r=m=1;   // Line 582
        k.KDC(2,t);
        k.KO(-1,t,"a");
      }
      else if(k.KFCM(2,t,['A','̱'])){
        r=m=1;   // Line 583
        k.KDC(2,t);
        k.KO(-1,t,"A");
      }
      else if(k.KFCM(2,t,['ă','̱'])){
        r=m=1;   // Line 587
        k.KDC(2,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(2,t,['â','̱'])){
        r=m=1;   // Line 592
        k.KDC(2,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(2,t,['Â','̱'])){
        r=m=1;   // Line 593
        k.KDC(2,t);
        k.KO(-1,t,"Â");
      }
      else if(k.KFCM(2,t,['e','̱'])){
        r=m=1;   // Line 597
        k.KDC(2,t);
        k.KO(-1,t,"e");
      }
      else if(k.KFCM(2,t,['E','̱'])){
        r=m=1;   // Line 598
        k.KDC(2,t);
        k.KO(-1,t,"E");
      }
      else if(k.KFCM(2,t,['e','̆'])){
        r=m=1;   // Line 600
        k.KDC(2,t);
        k.KO(-1,t,"ĕ̱");
      }
      else if(k.KFCM(2,t,['E','̆'])){
        r=m=1;   // Line 601
        k.KDC(2,t);
        k.KO(-1,t,"Ĕ̱");
      }
      else if(k.KFCM(2,t,['ê','̱'])){
        r=m=1;   // Line 607
        k.KDC(2,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(2,t,['Ê','̱'])){
        r=m=1;   // Line 608
        k.KDC(2,t);
        k.KO(-1,t,"Ê");
      }
      else if(k.KFCM(2,t,['ê','̆'])){
        r=m=1;   // Line 610
        k.KDC(2,t);
        k.KO(-1,t,"ê̱̆");
      }
      else if(k.KFCM(2,t,['Ê','̆'])){
        r=m=1;   // Line 611
        k.KDC(2,t);
        k.KO(-1,t,"Ê̱̆");
      }
      else if(k.KFCM(2,t,['i','̱'])){
        r=m=1;   // Line 617
        k.KDC(2,t);
        k.KO(-1,t,"i");
      }
      else if(k.KFCM(2,t,['I','̱'])){
        r=m=1;   // Line 618
        k.KDC(2,t);
        k.KO(-1,t,"I");
      }
      else if(k.KFCM(2,t,['i','̆'])){
        r=m=1;   // Line 620
        k.KDC(2,t);
        k.KO(-1,t,"ĭ̱");
      }
      else if(k.KFCM(2,t,['I','̆'])){
        r=m=1;   // Line 621
        k.KDC(2,t);
        k.KO(-1,t,"Ĭ̱");
      }
      else if(k.KFCM(2,t,['o','̱'])){
        r=m=1;   // Line 627
        k.KDC(2,t);
        k.KO(-1,t,"o");
      }
      else if(k.KFCM(2,t,['O','̱'])){
        r=m=1;   // Line 628
        k.KDC(2,t);
        k.KO(-1,t,"O");
      }
      else if(k.KFCM(2,t,['o','̆'])){
        r=m=1;   // Line 630
        k.KDC(2,t);
        k.KO(-1,t,"ŏ̱");
      }
      else if(k.KFCM(2,t,['O','̆'])){
        r=m=1;   // Line 631
        k.KDC(2,t);
        k.KO(-1,t,"Ŏ̱");
      }
      else if(k.KFCM(2,t,['ô','̱'])){
        r=m=1;   // Line 637
        k.KDC(2,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(2,t,['Ô','̱'])){
        r=m=1;   // Line 638
        k.KDC(2,t);
        k.KO(-1,t,"Ô");
      }
      else if(k.KFCM(2,t,['ô','̆'])){
        r=m=1;   // Line 640
        k.KDC(2,t);
        k.KO(-1,t,"ô̱̆");
      }
      else if(k.KFCM(2,t,['Ô','̆'])){
        r=m=1;   // Line 641
        k.KDC(2,t);
        k.KO(-1,t,"Ô̱̆");
      }
      else if(k.KFCM(2,t,['ơ','̱'])){
        r=m=1;   // Line 647
        k.KDC(2,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(2,t,['̱','Ơ'])){
        r=m=1;   // Line 648
        k.KDC(2,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(2,t,['ơ','̆'])){
        r=m=1;   // Line 650
        k.KDC(2,t);
        k.KO(-1,t,"ơ̱̆");
      }
      else if(k.KFCM(2,t,['Ơ','̆'])){
        r=m=1;   // Line 651
        k.KDC(2,t);
        k.KO(-1,t,"̱Ơ̆");
      }
      else if(k.KFCM(2,t,['u','̱'])){
        r=m=1;   // Line 657
        k.KDC(2,t);
        k.KO(-1,t,"u");
      }
      else if(k.KFCM(2,t,['U','̱'])){
        r=m=1;   // Line 658
        k.KDC(2,t);
        k.KO(-1,t,"U");
      }
      else if(k.KFCM(2,t,['u','̆'])){
        r=m=1;   // Line 660
        k.KDC(2,t);
        k.KO(-1,t,"ŭ̱");
      }
      else if(k.KFCM(2,t,['U','̆'])){
        r=m=1;   // Line 661
        k.KDC(2,t);
        k.KO(-1,t,"Ŭ̱");
      }
      else if(k.KFCM(2,t,['ư','̱'])){
        r=m=1;   // Line 667
        k.KDC(2,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(2,t,['Ư','̱'])){
        r=m=1;   // Line 668
        k.KDC(2,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(2,t,['ư','̆'])){
        r=m=1;   // Line 670
        k.KDC(2,t);
        k.KO(-1,t,"ư̱̆");
      }
      else if(k.KFCM(2,t,['Ư','̆'])){
        r=m=1;   // Line 671
        k.KDC(2,t);
        k.KO(-1,t,"Ư̱̆");
      }
      else if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 580
        k.KDC(1,t);
        k.KO(-1,t,"a̱");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 581
        k.KDC(1,t);
        k.KO(-1,t,"A̱");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 585
        k.KDC(1,t);
        k.KO(-1,t,"ă̱");
      }
      else if(k.KFCM(1,t,['Ă'])){
        r=m=1;   // Line 586
        k.KDC(1,t);
        k.KO(-1,t,"Ă̱");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 590
        k.KDC(1,t);
        k.KO(-1,t,"â̱");
      }
      else if(k.KFCM(1,t,['Â'])){
        r=m=1;   // Line 591
        k.KDC(1,t);
        k.KO(-1,t,"Â̱");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 595
        k.KDC(1,t);
        k.KO(-1,t,"e̱");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 596
        k.KDC(1,t);
        k.KO(-1,t,"E̱");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 605
        k.KDC(1,t);
        k.KO(-1,t,"ê̱");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 606
        k.KDC(1,t);
        k.KO(-1,t,"Ê̱");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 615
        k.KDC(1,t);
        k.KO(-1,t,"i̱");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 616
        k.KDC(1,t);
        k.KO(-1,t,"I̱");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 625
        k.KDC(1,t);
        k.KO(-1,t,"o̱");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 626
        k.KDC(1,t);
        k.KO(-1,t,"O̱");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 635
        k.KDC(1,t);
        k.KO(-1,t,"ô̱");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 636
        k.KDC(1,t);
        k.KO(-1,t,"Ô̱");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 645
        k.KDC(1,t);
        k.KO(-1,t,"ơ̱");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 646
        k.KDC(1,t);
        k.KO(-1,t,"̱Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 655
        k.KDC(1,t);
        k.KO(-1,t,"u̱");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 656
        k.KDC(1,t);
        k.KO(-1,t,"U̱");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 665
        k.KDC(1,t);
        k.KO(-1,t,"ư̱");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 666
        k.KDC(1,t);
        k.KO(-1,t,"Ư̱");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 396
        k.KDC(1,t);
        k.KO(-1,t,"â");
      }
      else if(k.KFCM(1,t,['â'])){
        r=m=1;   // Line 457
        k.KDC(1,t);
        k.KO(-1,t,"aa");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {
      if(k.KFCM(1,t,['b'])){
        r=m=1;   // Line 383
        k.KDC(1,t);
        k.KO(-1,t,"ƀ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {
      if(k.KFCM(1,t,['c'])){
        r=m=1;   // Line 389
        k.KDC(1,t);
        k.KO(-1,t,"č");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {
      if(k.KFCM(1,t,['d'])){
        r=m=1;   // Line 392
        k.KDC(1,t);
        k.KO(-1,t,"đ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {
      if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 399
        k.KDC(1,t);
        k.KO(-1,t,"ê");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 460
        k.KDC(1,t);
        k.KO(-1,t,"ee");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {
      if(k.KFCM(1,t,['n'])){
        r=m=1;   // Line 386
        k.KDC(1,t);
        k.KO(-1,t,"ñ");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {
      if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 402
        k.KDC(1,t);
        k.KO(-1,t,"ô");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 463
        k.KDC(1,t);
        k.KO(-1,t,"oo");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {
      if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 407
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 410
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 412
        k.KDC(1,t);
        k.KO(-1,t,"ơ");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 415
        k.KDC(1,t);
        k.KO(-1,t,"Ơ");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 417
        k.KDC(1,t);
        k.KO(-1,t,"ư");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 420
        k.KDC(1,t);
        k.KO(-1,t,"Ư");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 466
        k.KDC(1,t);
        k.KO(-1,t,"aa");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 469
        k.KDC(1,t);
        k.KO(-1,t,"oo");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 472
        k.KDC(1,t);
        k.KO(-1,t,"u");
      }
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)) {
      if(k.KFCM(2,t,['e','̆'])){
        r=m=1;   // Line 430
        k.KDC(2,t);
        k.KO(-1,t,"ex");
      }
      else if(k.KFCM(2,t,['ê','̆'])){
        r=m=1;   // Line 433
        k.KDC(2,t);
        k.KO(-1,t,"êx");
      }
      else if(k.KFCM(2,t,['i','̆'])){
        r=m=1;   // Line 436
        k.KDC(2,t);
        k.KO(-1,t,"ix");
      }
      else if(k.KFCM(2,t,['o','̆'])){
        r=m=1;   // Line 439
        k.KDC(2,t);
        k.KO(-1,t,"ox");
      }
      else if(k.KFCM(2,t,['ô','̆'])){
        r=m=1;   // Line 442
        k.KDC(2,t);
        k.KO(-1,t,"ôx");
      }
      else if(k.KFCM(2,t,['ơ','̆'])){
        r=m=1;   // Line 445
        k.KDC(2,t);
        k.KO(-1,t,"ơx");
      }
      else if(k.KFCM(2,t,['u','̆'])){
        r=m=1;   // Line 448
        k.KDC(2,t);
        k.KO(-1,t,"ux");
      }
      else if(k.KFCM(2,t,['ư','̆'])){
        r=m=1;   // Line 451
        k.KDC(2,t);
        k.KO(-1,t,"ưx");
      }
      else if(k.KFCM(2,t,['y','̆'])){
        r=m=1;   // Line 454
        k.KDC(2,t);
        k.KO(-1,t,"yx");
      }
      else if(k.KFCM(1,t,['a'])){
        r=m=1;   // Line 333
        k.KDC(1,t);
        k.KO(-1,t,"ă");
      }
      else if(k.KFCM(1,t,['A'])){
        r=m=1;   // Line 336
        k.KDC(1,t);
        k.KO(-1,t,"Ă");
      }
      else if(k.KFCM(1,t,['e'])){
        r=m=1;   // Line 338
        k.KDC(1,t);
        k.KO(-1,t,"ĕ");
      }
      else if(k.KFCM(1,t,['E'])){
        r=m=1;   // Line 341
        k.KDC(1,t);
        k.KO(-1,t,"Ĕ");
      }
      else if(k.KFCM(1,t,['ê'])){
        r=m=1;   // Line 343
        k.KDC(1,t);
        k.KO(-1,t,"ê̆");
      }
      else if(k.KFCM(1,t,['Ê'])){
        r=m=1;   // Line 346
        k.KDC(1,t);
        k.KO(-1,t,"Ê̆");
      }
      else if(k.KFCM(1,t,['i'])){
        r=m=1;   // Line 348
        k.KDC(1,t);
        k.KO(-1,t,"ĭ");
      }
      else if(k.KFCM(1,t,['I'])){
        r=m=1;   // Line 351
        k.KDC(1,t);
        k.KO(-1,t,"Ĭ");
      }
      else if(k.KFCM(1,t,['o'])){
        r=m=1;   // Line 353
        k.KDC(1,t);
        k.KO(-1,t,"ŏ");
      }
      else if(k.KFCM(1,t,['O'])){
        r=m=1;   // Line 356
        k.KDC(1,t);
        k.KO(-1,t,"Ŏ");
      }
      else if(k.KFCM(1,t,['ô'])){
        r=m=1;   // Line 358
        k.KDC(1,t);
        k.KO(-1,t,"ô̆");
      }
      else if(k.KFCM(1,t,['Ô'])){
        r=m=1;   // Line 361
        k.KDC(1,t);
        k.KO(-1,t,"Ô̆");
      }
      else if(k.KFCM(1,t,['ơ'])){
        r=m=1;   // Line 363
        k.KDC(1,t);
        k.KO(-1,t,"ơ̆");
      }
      else if(k.KFCM(1,t,['Ơ'])){
        r=m=1;   // Line 366
        k.KDC(1,t);
        k.KO(-1,t,"Ơ̆");
      }
      else if(k.KFCM(1,t,['u'])){
        r=m=1;   // Line 368
        k.KDC(1,t);
        k.KO(-1,t,"ŭ");
      }
      else if(k.KFCM(1,t,['U'])){
        r=m=1;   // Line 371
        k.KDC(1,t);
        k.KO(-1,t,"Ŭ");
      }
      else if(k.KFCM(1,t,['ư'])){
        r=m=1;   // Line 373
        k.KDC(1,t);
        k.KO(-1,t,"ư̆");
      }
      else if(k.KFCM(1,t,['Ư'])){
        r=m=1;   // Line 376
        k.KDC(1,t);
        k.KO(-1,t,"Ư̆");
      }
      else if(k.KFCM(1,t,['y'])){
        r=m=1;   // Line 378
        k.KDC(1,t);
        k.KO(-1,t,"y̆");
      }
      else if(k.KFCM(1,t,['Y'])){
        r=m=1;   // Line 381
        k.KDC(1,t);
        k.KO(-1,t,"Y̆");
      }
      else if(k.KFCM(1,t,['ă'])){
        r=m=1;   // Line 427
        k.KDC(1,t);
        k.KO(-1,t,"ax");
      }
    }
    return r;
  };
}
