
KeymanWeb.KR(new Keyboard_sundanese());

function Keyboard_sundanese()
{
  
  this.KI="Keyboard_sundanese";
  this.KN="Sunda Baku";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Kairaga regular"',K102:0};
  this.KV.KLS={
    "default": ["`","᮱","᮲","᮳","᮴","᮵","᮶","᮷","᮸","᮹","᮰","-","=","","","","ᮋ","ᮝ","ᮨ","ᮛ","ᮒ","ᮚ","ᮥ","ᮤ","ᮧ","ᮕ","ᮦ","ᮩ","᮫","","","","","ᮞ","ᮓ","ᮖ","ᮌ","ᮠ","ᮏ","ᮊ","ᮜ","᮪","'","","","","","","","ᮐ","ᮟ","ᮎ","ᮗ","ᮘ","ᮔ","ᮙ",",",",","/","","","","","",""],
    "shift": ["~","!","@","#","$","%","^","&","*","(",")","_","+","","","","ᮁ","","ᮈ","ᮢ","","ᮡ","ᮅ","ᮄ","ᮇ","","ᮆ","ᮉ","|","","","","ᮃ","","","","ᮍ","ᮂ","ᮑ","","ᮣ",":","\"","","","","","","","","","","","","ᮀ","","<",">","?","","","","","",""]
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
  this.KH="https://kairaga.com/font-sunda/keyboard/help";
  this.KM=0;
  this.KBVER="1.0.2";
  this.KMBM=0x0010;
  this.KVKL={
  "tablet": {
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_1",
                "text": "\u1BB1"
              },
              {
                "id": "K_2",
                "text": "\u1BB2"
              },
              {
                "id": "K_3",
                "text": "\u1BB3"
              },
              {
                "id": "K_4",
                "text": "\u1BB4"
              },
              {
                "id": "K_5",
                "text": "\u1BB5"
              },
              {
                "id": "K_6",
                "text": "\u1BB6"
              },
              {
                "id": "K_7",
                "text": "\u1BB7"
              },
              {
                "id": "K_8",
                "text": "\u1BB8"
              },
              {
                "id": "K_9",
                "text": "\u1BB9"
              },
              {
                "id": "K_0",
                "text": "\u1BB0"
              },
              {
                "id": "K_HYPHEN",
                "text": "-"
              },
              {
                "id": "K_EQUAL",
                "text": "="
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
                "id": "K_Q",
                "text": "\u1B8B",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "\u1B9D"
              },
              {
                "id": "K_E",
                "text": "\u1BA8"
              },
              {
                "id": "K_R",
                "text": "\u1B9B"
              },
              {
                "id": "K_T",
                "text": "\u1B92"
              },
              {
                "id": "K_Y",
                "text": "\u1B9A"
              },
              {
                "id": "K_U",
                "text": "\u1BA5"
              },
              {
                "id": "K_I",
                "text": "\u1BA4"
              },
              {
                "id": "K_O",
                "text": "\u1BA7"
              },
              {
                "id": "K_P",
                "text": "\u1B95"
              },
              {
                "id": "K_LBRKT",
                "text": "\u1BA6"
              },
              {
                "id": "K_RBRKT",
                "text": "\u1BA9"
              },
              {
                "id": "T_new_26",
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
                "id": "K_BKQUOTE",
                "text": "`"
              },
              {
                "id": "K_A",
                "text": ""
              },
              {
                "id": "K_S",
                "text": "\u1B9E"
              },
              {
                "id": "K_D",
                "text": "\u1B93"
              },
              {
                "id": "K_F",
                "text": "\u1B96"
              },
              {
                "id": "K_G",
                "text": "\u1B8C"
              },
              {
                "id": "K_H",
                "text": "\u1BA0"
              },
              {
                "id": "K_J",
                "text": "\u1B8F"
              },
              {
                "id": "K_K",
                "text": "\u1B8A"
              },
              {
                "id": "K_L",
                "text": "\u1B9C"
              },
              {
                "id": "K_COLON",
                "text": "\u1BAA"
              },
              {
                "id": "K_QUOTE",
                "text": "'"
              },
              {
                "id": "K_BKSLASH",
                "text": "\u1BAB"
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
                "sp": "1"
              },
              {
                "id": "K_oE2",
                "text": ""
              },
              {
                "id": "K_Z",
                "text": "\u1B90"
              },
              {
                "id": "K_X",
                "text": "\u1B9F"
              },
              {
                "id": "K_C",
                "text": "\u1B8E"
              },
              {
                "id": "K_V",
                "text": "\u1B97"
              },
              {
                "id": "K_B",
                "text": "\u1B98"
              },
              {
                "id": "K_N",
                "text": "\u1B94"
              },
              {
                "id": "K_M",
                "text": "\u1B99"
              },
              {
                "id": "K_COMMA",
                "text": ","
              },
              {
                "id": "K_PERIOD",
                "text": ","
              },
              {
                "id": "K_SLASH",
                "text": "/"
              },
              {
                "id": "T_new_52",
                "text": "",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": 5,
            "key": [
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "140",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": "",
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
                "text": "!"
              },
              {
                "id": "K_2",
                "text": "@"
              },
              {
                "id": "K_3",
                "text": "#"
              },
              {
                "id": "K_4",
                "text": "$"
              },
              {
                "id": "K_5",
                "text": "%"
              },
              {
                "id": "K_6",
                "text": "^"
              },
              {
                "id": "K_7",
                "text": "&"
              },
              {
                "id": "K_8",
                "text": "*"
              },
              {
                "id": "K_9",
                "text": "("
              },
              {
                "id": "K_0",
                "text": ")"
              },
              {
                "id": "K_HYPHEN",
                "text": "_"
              },
              {
                "id": "K_EQUAL",
                "text": "+"
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
                "text": "\u1B81"
              },
              {
                "id": "K_W"
              },
              {
                "id": "K_E",
                "text": "\u1B88"
              },
              {
                "id": "K_R",
                "text": "\u1BA2"
              },
              {
                "id": "K_T"
              },
              {
                "id": "K_Y",
                "text": "\u1BA1"
              },
              {
                "id": "K_U",
                "text": "\u1B85"
              },
              {
                "id": "K_I",
                "text": "\u1B84"
              },
              {
                "id": "K_O",
                "text": "\u1B87"
              },
              {
                "id": "K_P"
              },
              {
                "id": "K_LBRKT",
                "text": "\u1B86"
              },
              {
                "id": "K_RBRKT",
                "text": "\u1B89"
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
                "text": "~"
              },
              {
                "id": "K_A",
                "text": "\u1B83"
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
                "id": "K_G",
                "text": "\u1B8D"
              },
              {
                "id": "K_H",
                "text": "\u1B82"
              },
              {
                "id": "K_J",
                "text": "\u1B91"
              },
              {
                "id": "K_K"
              },
              {
                "id": "K_L",
                "text": "\u1BA3"
              },
              {
                "id": "K_COLON",
                "text": ":"
              },
              {
                "id": "K_QUOTE",
                "text": "\""
              },
              {
                "id": "K_BKSLASH",
                "text": "|"
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
                "id": "K_C"
              },
              {
                "id": "K_V"
              },
              {
                "id": "K_B"
              },
              {
                "id": "K_N",
                "text": "\u1B80"
              },
              {
                "id": "K_M"
              },
              {
                "id": "K_COMMA",
                "text": "<"
              },
              {
                "id": "K_PERIOD",
                "text": ">"
              },
              {
                "id": "K_SLASH",
                "text": "?"
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
    "font": "Kairaga regular",
    "fontsize": ""
  }
}
;
  this.KVER="12.0.66.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4010, 0x31)) {
      if(1){
        r=m=1;   // Line 37
        k.KO(0,t,"!");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {
      if(1){
        r=m=1;   // Line 16
        k.KO(0,t,"\"");
      }
    }
    else if(k.KKM(e, 0x4010, 0x33)) {
      if(1){
        r=m=1;   // Line 35
        k.KO(0,t,"#");
      }
    }
    else if(k.KKM(e, 0x4010, 0x34)) {
      if(1){
        r=m=1;   // Line 34
        k.KO(0,t,"$");
      }
    }
    else if(k.KKM(e, 0x4010, 0x35)) {
      if(1){
        r=m=1;   // Line 33
        k.KO(0,t,"%");
      }
    }
    else if(k.KKM(e, 0x4010, 0x37)) {
      if(1){
        r=m=1;   // Line 31
        k.KO(0,t,"&");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {
      if(1){
        r=m=1;   // Line 23
        k.KO(0,t,"'");
      }
    }
    else if(k.KKM(e, 0x4010, 0x39)) {
      if(1){
        r=m=1;   // Line 29
        k.KO(0,t,"(");
      }
    }
    else if(k.KKM(e, 0x4010, 0x30)) {
      if(1){
        r=m=1;   // Line 28
        k.KO(0,t,")");
      }
    }
    else if(k.KKM(e, 0x4010, 0x38)) {
      if(1){
        r=m=1;   // Line 30
        k.KO(0,t,"*");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBB)) {
      if(1){
        r=m=1;   // Line 26
        k.KO(0,t,"+");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBC)) {
      if(1){
        r=m=1;   // Line 22
        k.KO(0,t,",");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBD)) {
      if(1){
        r=m=1;   // Line 25
        k.KO(0,t,"-");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {
      if(1){
        r=m=1;   // Line 21
        k.KO(0,t,".");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBF)) {
      if(1){
        r=m=1;   // Line 20
        k.KO(0,t,"/");
      }
    }
    else if(k.KKM(e, 0x4000, 0x30)) {
      if(1){
        r=m=1;   // Line 83
        k.KO(0,t,"᮰");
      }
    }
    else if(k.KKM(e, 0x4000, 0x31)) {
      if(1){
        r=m=1;   // Line 92
        k.KO(0,t,"᮱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x32)) {
      if(1){
        r=m=1;   // Line 91
        k.KO(0,t,"᮲");
      }
    }
    else if(k.KKM(e, 0x4000, 0x33)) {
      if(1){
        r=m=1;   // Line 90
        k.KO(0,t,"᮳");
      }
    }
    else if(k.KKM(e, 0x4000, 0x34)) {
      if(1){
        r=m=1;   // Line 89
        k.KO(0,t,"᮴");
      }
    }
    else if(k.KKM(e, 0x4000, 0x35)) {
      if(1){
        r=m=1;   // Line 88
        k.KO(0,t,"᮵");
      }
    }
    else if(k.KKM(e, 0x4000, 0x36)) {
      if(1){
        r=m=1;   // Line 87
        k.KO(0,t,"᮶");
      }
    }
    else if(k.KKM(e, 0x4000, 0x37)) {
      if(1){
        r=m=1;   // Line 86
        k.KO(0,t,"᮷");
      }
    }
    else if(k.KKM(e, 0x4000, 0x38)) {
      if(1){
        r=m=1;   // Line 85
        k.KO(0,t,"᮸");
      }
    }
    else if(k.KKM(e, 0x4000, 0x39)) {
      if(1){
        r=m=1;   // Line 84
        k.KO(0,t,"᮹");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBA)) {
      if(1){
        r=m=1;   // Line 50
        k.KO(0,t,":");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {
      if(1){
        r=m=1;   // Line 63
        k.KO(0,t,"᮪");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBC)) {
      if(1){
        r=m=1;   // Line 19
        k.KO(0,t,"<");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {
      if(1){
        r=m=1;   // Line 24
        k.KO(0,t,"=");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBE)) {
      if(1){
        r=m=1;   // Line 18
        k.KO(0,t,">");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBF)) {
      if(1){
        r=m=1;   // Line 17
        k.KO(0,t,"?");
      }
    }
    else if(k.KKM(e, 0x4010, 0x32)) {
      if(1){
        r=m=1;   // Line 36
        k.KO(0,t,"@");
      }
    }
    else if(k.KKM(e, 0x4010, 0x41)) {
      if(1){
        r=m=1;   // Line 40
        k.KO(0,t,"ᮃ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x45)) {
      if(1){
        r=m=1;   // Line 54
        k.KO(0,t,"ᮈ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x47)) {
      if(1){
        r=m=1;   // Line 48
        k.KO(0,t,"ᮍ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x48)) {
      if(1){
        r=m=1;   // Line 41
        k.KO(0,t,"ᮂ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x49)) {
      if(1){
        r=m=1;   // Line 46
        k.KO(0,t,"ᮄ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {
      if(1){
        r=m=1;   // Line 42
        k.KO(0,t,"ᮑ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {
      if(1){
        r=m=1;   // Line 51
        k.KO(0,t,"ᮣ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {
      if(1){
        r=m=1;   // Line 49
        k.KO(0,t,"ᮀ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {
      if(1){
        r=m=1;   // Line 45
        k.KO(0,t,"ᮇ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x51)) {
      if(1){
        r=m=1;   // Line 55
        k.KO(0,t,"ᮁ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x52)) {
      if(1){
        r=m=1;   // Line 53
        k.KO(0,t,"ᮢ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x55)) {
      if(1){
        r=m=1;   // Line 47
        k.KO(0,t,"ᮅ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x59)) {
      if(1){
        r=m=1;   // Line 52
        k.KO(0,t,"ᮡ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDB)) {
      if(1){
        r=m=1;   // Line 72
        k.KO(0,t,"ᮦ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDC)) {
      if(1){
        r=m=1;   // Line 14
        k.KO(0,t,"᮫");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDD)) {
      if(1){
        r=m=1;   // Line 39
        k.KO(0,t,"ᮩ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x36)) {
      if(1){
        r=m=1;   // Line 32
        k.KO(0,t,"^");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBD)) {
      if(1){
        r=m=1;   // Line 27
        k.KO(0,t,"_");
      }
    }
    else if(k.KKM(e, 0x4000, 0x42)) {
      if(1){
        r=m=1;   // Line 58
        k.KO(0,t,"ᮘ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x43)) {
      if(1){
        r=m=1;   // Line 60
        k.KO(0,t,"ᮎ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x44)) {
      if(1){
        r=m=1;   // Line 70
        k.KO(0,t,"ᮓ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x45)) {
      if(1){
        r=m=1;   // Line 80
        k.KO(0,t,"ᮨ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x46)) {
      if(1){
        r=m=1;   // Line 69
        k.KO(0,t,"ᮖ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x47)) {
      if(1){
        r=m=1;   // Line 68
        k.KO(0,t,"ᮌ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x48)) {
      if(1){
        r=m=1;   // Line 67
        k.KO(0,t,"ᮠ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x49)) {
      if(1){
        r=m=1;   // Line 75
        k.KO(0,t,"ᮤ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {
      if(1){
        r=m=1;   // Line 66
        k.KO(0,t,"ᮏ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {
      if(1){
        r=m=1;   // Line 65
        k.KO(0,t,"ᮊ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {
      if(1){
        r=m=1;   // Line 64
        k.KO(0,t,"ᮜ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {
      if(1){
        r=m=1;   // Line 56
        k.KO(0,t,"ᮙ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {
      if(1){
        r=m=1;   // Line 57
        k.KO(0,t,"ᮔ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {
      if(1){
        r=m=1;   // Line 74
        k.KO(0,t,"ᮧ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x50)) {
      if(1){
        r=m=1;   // Line 73
        k.KO(0,t,"ᮕ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x51)) {
      if(1){
        r=m=1;   // Line 82
        k.KO(0,t,"ᮋ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x52)) {
      if(1){
        r=m=1;   // Line 79
        k.KO(0,t,"ᮛ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x53)) {
      if(1){
        r=m=1;   // Line 71
        k.KO(0,t,"ᮞ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x54)) {
      if(1){
        r=m=1;   // Line 78
        k.KO(0,t,"ᮒ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x55)) {
      if(1){
        r=m=1;   // Line 76
        k.KO(0,t,"ᮥ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x56)) {
      if(1){
        r=m=1;   // Line 59
        k.KO(0,t,"ᮗ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x57)) {
      if(1){
        r=m=1;   // Line 81
        k.KO(0,t,"ᮝ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x58)) {
      if(1){
        r=m=1;   // Line 61
        k.KO(0,t,"ᮟ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x59)) {
      if(1){
        r=m=1;   // Line 77
        k.KO(0,t,"ᮚ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {
      if(1){
        r=m=1;   // Line 62
        k.KO(0,t,"ᮐ");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDB)) {
      if(1){
        r=m=1;   // Line 44
        k.KO(0,t,"ᮆ");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDC)) {
      if(1){
        r=m=1;   // Line 15
        k.KO(0,t,"|");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDD)) {
      if(1){
        r=m=1;   // Line 43
        k.KO(0,t,"ᮉ");
      }
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {
      if(1){
        r=m=1;   // Line 38
        k.KO(0,t,"~");
      }
    }
    return r;
  };
}
