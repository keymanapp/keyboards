if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_nlci_devanagari_winscript());
}
function Keyboard_nlci_devanagari_winscript()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this.KI="Keyboard_nlci_devanagari_winscript";
  this.KN="NLCI Devanagari WinScript";
  this.KMINVER="10.0";
  this.KV={F:' 1em "Annapurna SIL"',K102:0};
  this.KDU=1;
  this.KV.KLS={
    "default": ["`","1","2","3","4","5","6","7","8","9","0","-","=","","","","त","ञ","ए","र","ट","य","उ","इ","ओ","प","द","]","\\","","","","अ","स","ड","़","ग","ह","ज","क","ल",";","‘","","","","","","","श","x","च","व","ब","न","म",",","।","/","","","","","",""],
    "shift": ["~","!","@","#","$","%","^","&","*","(",")","_","+","","","","थ","ङ","ऐ","ऋ","ठ","ऐ","ऊ","ई","ऒ","फ","ध","}","|","","","","आ","ँ","ढ","ऽ","घ","ः","झ","ख","ळ",":","“","","","","","","","ष","X","छ","औ","भ","ण","ं","<",">","?","","","","","",""]
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
  this.KBVER="2.1";
  this.KMBM=modCodes.SHIFT /* 0x0010 */;
  this.KVKD="T_KA_SSA";
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
                "text": "त",
                "pad": "75"
              },
              {
                "id": "K_W",
                "text": "ञ"
              },
              {
                "id": "K_E",
                "text": "ए"
              },
              {
                "id": "K_R",
                "text": "र"
              },
              {
                "id": "K_T",
                "text": "ट"
              },
              {
                "id": "K_Y",
                "text": "य"
              },
              {
                "id": "K_U",
                "text": "उ"
              },
              {
                "id": "K_I",
                "text": "इ"
              },
              {
                "id": "K_O",
                "text": "ओ"
              },
              {
                "id": "K_P",
                "text": "प"
              },
              {
                "id": "K_LBRKT",
                "text": "द"
              },
              {
                "id": "K_RBRKT",
                "text": "]"
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
                "text": "अ"
              },
              {
                "id": "K_S",
                "text": "स"
              },
              {
                "id": "K_D",
                "text": "ड"
              },
              {
                "id": "K_F",
                "text": "़"
              },
              {
                "id": "K_G",
                "text": "ग"
              },
              {
                "id": "K_H",
                "text": "ह"
              },
              {
                "id": "K_J",
                "text": "ज"
              },
              {
                "id": "K_K",
                "text": "क"
              },
              {
                "id": "K_L",
                "text": "ल"
              },
              {
                "id": "K_COLON",
                "text": ";"
              },
              {
                "id": "K_QUOTE",
                "text": "‘"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\"
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
                "text": "श"
              },
              {
                "id": "K_X",
                "text": "x"
              },
              {
                "id": "K_C",
                "text": "च"
              },
              {
                "id": "K_V",
                "text": "व"
              },
              {
                "id": "K_B",
                "text": "ब"
              },
              {
                "id": "K_N",
                "text": "न"
              },
              {
                "id": "K_M",
                "text": "म"
              },
              {
                "id": "K_COMMA",
                "text": ","
              },
              {
                "id": "K_PERIOD",
                "text": "।"
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
                "text": "थ"
              },
              {
                "id": "K_W",
                "text": "ङ"
              },
              {
                "id": "K_E",
                "text": "ऐ"
              },
              {
                "id": "K_R",
                "text": "ऋ"
              },
              {
                "id": "K_T",
                "text": "ठ"
              },
              {
                "id": "K_Y",
                "text": "ऐ"
              },
              {
                "id": "K_U",
                "text": "ऊ"
              },
              {
                "id": "K_I",
                "text": "ई"
              },
              {
                "id": "K_O",
                "text": "ऒ"
              },
              {
                "id": "K_P",
                "text": "फ"
              },
              {
                "id": "K_LBRKT",
                "text": "ध"
              },
              {
                "id": "K_RBRKT",
                "text": "}"
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
                "text": "आ"
              },
              {
                "id": "K_S",
                "text": "ँ"
              },
              {
                "id": "K_D",
                "text": "ढ"
              },
              {
                "id": "K_F",
                "text": "ऽ"
              },
              {
                "id": "K_G",
                "text": "घ"
              },
              {
                "id": "K_H",
                "text": "ः"
              },
              {
                "id": "K_J",
                "text": "झ"
              },
              {
                "id": "K_K",
                "text": "ख"
              },
              {
                "id": "K_L",
                "text": "ळ"
              },
              {
                "id": "K_COLON",
                "text": ":"
              },
              {
                "id": "K_QUOTE",
                "text": "“"
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
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "160",
                "sp": "1",
                "nextlayer": "default"
              },
              {
                "id": "K_oE2"
              },
              {
                "id": "K_Z",
                "text": "ष"
              },
              {
                "id": "K_X",
                "text": "X"
              },
              {
                "id": "K_C",
                "text": "छ"
              },
              {
                "id": "K_V",
                "text": "औ"
              },
              {
                "id": "K_B",
                "text": "भ"
              },
              {
                "id": "K_N",
                "text": "ण"
              },
              {
                "id": "K_M",
                "text": "ं"
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
    ]
  }
}
;
  this.s_vowelKeys="AiIuUReEYoOVMH";
  this.s_vowels="आइईउऊऋएऎऐओऒऔंः";
  this.s_vowelMatras="ािीुूृेॆैोॊौंः";
  this.s_consKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshL";
  this.s_cons="कखगघङचछजझञटठडढणतथदधनपफबभमयरलवशषसहळ";
  this.s_consonants="कखगघङचछजझञटठडढणतथदधनपफबभमयरलवशषसहळऱऴड़ढ़ऩक़ख़ज़ग़";
  this.s_allKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshLAiIuUReEYoOVMHaSf";
  this.s_WordFinalPunct=" \",.>!]}-\\;/~@#$%^&*(_+|:<?)";
  this.s_numberKeys="1234567890";
  this.s_DevNumbers="१२३४५६७८९०";
  this.KVER="10.0.1201.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSP /* 0x08 */)&&k.KFCM(1,t,['–'])) {   // Line 144
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"--");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSP /* 0x08 */)&&k.KFCM(1,t,['—'])) {   // Line 147
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"---");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, 0x100)) {   // Line 175
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"क्ष");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SPACE /* 0x20 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t," ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"!");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\"");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['“'])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"”");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['”'])) {   // Line 135
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\"");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"“");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"#");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"$");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"%");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"&");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['‘'])) {   // Line 138
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"’");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['’'])) {   // Line 139
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"'");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)) {   // Line 137
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"‘");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"(");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,")");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"*");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_EQUAL /* 0xBB */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"+");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COMMA /* 0xBC */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,",");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_HYPHEN /* 0xBD */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"-");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)&&k.KFCM(1,t,['।'])) {   // Line 106
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,".");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,".");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)) {   // Line 105
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"।");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SLASH /* 0xBF */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"/");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"०");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"०");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"१");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"१");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"२");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"२");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"३");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"३");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"४");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"४");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"५");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"५");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"६");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"६");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"७");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"७");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"८");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"८");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 157
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"९");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(1,t,[{t:'a',a:this.s_DevNumbers}])) {   // Line 158
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_DevNumbers,1,t);
      k.KO(-1,t,"९");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,":");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,";");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COMMA /* 0xBC */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"<");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_EQUAL /* 0xBB */)) {   // Line 122
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"=");
      k.KDO(-1,t,3);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_PERIOD /* 0xBE */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,">");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_SLASH /* 0xBF */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"?");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"@");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ा");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ा");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"आ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"भ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"छ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,['ढ'])) {   // Line 61
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ढ़");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ढ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ॆ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ॆ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऎ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 102
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"F");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)) {   // Line 101
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऽ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"घ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ः");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ः");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ः");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ी");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ी");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ई");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"झ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,['ख'])) {   // Line 92
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ख़");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ख");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ळ'])) {   // Line 57
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऴ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ळ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ं");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ं");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ं");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ण");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ॊ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ॊ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऒ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"फ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"थ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ृ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['ऋ'])) {   // Line 74
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ॠ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['ृ'])) {   // Line 75
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ॄ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ृ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऋ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"S");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"S");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {   // Line 78
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ँ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ठ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ू");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ू");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऊ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ौ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ौ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"औ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ङ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'्'])) {   // Line 115
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"्‌");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 116
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़्‌");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 114
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"्‌");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 117
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‍'])) {   // Line 128
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‍");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ै");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ै");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ऐ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ष");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"[");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"[");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"द");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\\");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_RBRKT /* 0xDD */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"]");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"^");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_HYPHEN /* 0xBD */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"_");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(3,t,['-','-','-'])) {   // Line 145
      r=m=1;
      k.KDC(3,t);
      k.KO(-1,t,"—");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(2,t,['-','-'])) {   // Line 142
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"–");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['–'])) {   // Line 143
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"--");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['—'])) {   // Line 146
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"---");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {   // Line 150
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"`");
      k.KDO(-1,t,2);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['ा',{t:'d',d:1}])) {   // Line 40
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"अ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,['अ'])) {   // Line 37
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"आ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 38
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KDO(-1,t,0);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'d',d:0}])) {   // Line 39
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ा");
      k.KDO(-1,t,1);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {   // Line 36
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"अ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ब");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"च");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,['ड'])) {   // Line 60
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ड़");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ड");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़े");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['ए'])) {   // Line 43
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऐ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['ऐ'])) {   // Line 44
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऎ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['ऎ'])) {   // Line 45
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ए");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['े'])) {   // Line 46
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ॆ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"े");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ए");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"f");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"f");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)) {   // Line 98
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"़");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(1,t,['ग'])) {   // Line 88
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ग़");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ग");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ह");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ि");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,['इ'])) {   // Line 49
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ई");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,['ि'])) {   // Line 50
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ी");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ि");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"इ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(1,t,['ज'])) {   // Line 95
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ज़");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ज");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,['क'])) {   // Line 91
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"क़");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"क");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ल'])) {   // Line 53
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ळ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ळ'])) {   // Line 54
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऴ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ल");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"म");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(1,t,['न'])) {   // Line 64
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऩ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"न");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ो");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,['ओ'])) {   // Line 67
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऒ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,['ो'])) {   // Line 68
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ॊ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ो");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ओ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"प");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"त");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['=',{t:'d',d:3}])) {   // Line 123
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"ऱ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['र'])) {   // Line 71
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऱ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"र");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(1,t,['स'])) {   // Line 85
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ष");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"स");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ट");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'़'])) {   // Line 109
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"़ु");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,['उ'])) {   // Line 81
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ऊ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,['ु'])) {   // Line 82
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ू");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 163
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ु");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {   // Line 161
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"उ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"व");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ञ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 127
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‍'])) {   // Line 130
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‍");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 166
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowels}])) {   // Line 167
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowels,1,t);
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowels}])) {   // Line 170
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowels,1,t);
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['अ'])) {   // Line 171
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"अ्");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowelMatras}])) {   // Line 172
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowelMatras,1,t);
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"य");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['=',{t:'d',d:3}])) {   // Line 124
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"ऴ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"श");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 151
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"{");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 152
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"{");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)) {   // Line 162
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ध");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKSLASH /* 0xDC */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"|");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_RBRKT /* 0xDD */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"}");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['‌'])) {   // Line 119
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"~");
    }
    return r;
  };
}
