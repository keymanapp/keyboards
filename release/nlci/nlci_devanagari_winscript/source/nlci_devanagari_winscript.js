
KeymanWeb.KR(new Keyboard_nlci_devanagari_winscript());

function Keyboard_nlci_devanagari_winscript()
{
  
  this.KI="Keyboard_nlci_devanagari_winscript";
  this.KN="NLCI Devanagari WinScript";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Annapurna SIL"',K102:0};
  this.KDU=1;
  this.KV.KLS={
    "default": ["`","1","2","3","4","5","6","7","8","9","0","","=","","","","त","ञ","ए","र","ट","य","उ","इ","ओ","प","द","]","","","","","अ","स","ड","़","ग","ह","ज","क","ल","","‘","","","","","","","श","x","च","व","ब","न","म",",",".","","","","","","",""],
    "shift": ["","!","","","","","","","","",")","","","","","","थ","ङ","ऎ","ऋ","ठ","ऐ","ऊ","ई","ऒ","फ","ध","}","","","","","आ","ँ","ढ","","घ","ः","झ","ख","ळ","","“","","","","","","","ष","X","छ","औ","भ","ण","ं","",">","","","","","","",""]
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
  this.KBVER="1.0";
  this.KMBM=0x0010;
  this.KVKD="T_KA_SSA";
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
                "id": "K_K",
                "text": "क",
                "sk": [
                  {
                    "text": "क्ष",
                    "id": "T_KA_SSA"
                  }
                ]
              },
              {
                "id": "K_Q",
                "text": "त"
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
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "अ",
                "pad": 70
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
                "id": "K_L",
                "text": "ल"
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
                "text": "श"
              },
              {
                "id": "K_X",
                "text": "⇎",
                "sp": "1"
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
                "text": "थ"
              },
              {
                "id": "K_K",
                "text": "ख"
              },
              {
                "id": "K_W",
                "text": "ङ"
              },
              {
                "id": "K_E",
                "text": "ऎ"
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
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "आ",
                "pad": 70
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
                "text": ""
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
                "id": "K_L",
                "text": "ळ"
              },
              {
                "id": "T_new_156",
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
                "text": "ष"
              },
              {
                "id": "K_X",
                "text": "⇔"
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
                "id": "K_PERIOD",
                "text": ">",
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
                "text": "1",
                "sk": [
                  {
                    "text": "१",
                    "id": "U_0967"
                  }
                ]
              },
              {
                "id": "K_2",
                "text": "2",
                "sk": [
                  {
                    "text": "२",
                    "id": "U_0968"
                  }
                ]
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
                "text": "",
                "pad": 70,
                "layer": "shift"
              },
              {
                "id": "K_2",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_3",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_5",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_7",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_EQUAL",
                "text": "=",
                "layer": "default"
              },
              {
                "id": "K_BKSLASH",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_BKSLASH",
                "text": "",
                "layer": "default"
              },
              {
                "id": "T_new_564",
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
                "text": "द",
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
                "text": "",
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
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "",
                "layer": "default"
              },
              {
                "id": "K_8",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_SLASH",
                "text": "",
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
      },
      {
        "id": "numeric_deva",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "T_new_835",
                "text": ""
              },
              {
                "id": "T_new_908",
                "text": ""
              },
              {
                "id": "T_new_871",
                "text": ""
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_1",
                "text": "1",
                "sk": [
                  {
                    "text": "१",
                    "id": "U_0967"
                  }
                ]
              },
              {
                "id": "K_2",
                "text": "2",
                "sk": [
                  {
                    "text": "२",
                    "id": "U_0968"
                  }
                ]
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
            "id": 3,
            "key": [
              {
                "id": "K_4",
                "text": "",
                "pad": 70,
                "layer": "shift"
              },
              {
                "id": "K_2",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_3",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_5",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_7",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_EQUAL",
                "text": "=",
                "layer": "default"
              },
              {
                "id": "K_BKSLASH",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_BKSLASH",
                "text": "",
                "layer": "default"
              },
              {
                "id": "T_new_564",
                "text": "",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "110",
                "sp": "1"
              },
              {
                "id": "K_LBRKT",
                "text": "द",
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
                "text": "",
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
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "",
                "layer": "default"
              },
              {
                "id": "K_8",
                "text": "",
                "layer": "shift"
              },
              {
                "id": "K_SLASH",
                "text": "",
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
            "id": 5,
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
  this.s_vowelKeys="AiIuUReEYoOVMH";
  this.s_vowels="आइईउऊऋएऎऐओऒऔंः";
  this.s_vowelMatras="ािीुूृॆेैॊोौंः";
  this.s_consKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshL";
  this.s_cons="कखगघङचछजझञटठडढणतथदधनपफबभमयरलवशषसहळ";
  this.s_consonants="कखगघङचछजझञटठडढणतथदधनपफबभमयरलवशषसहळऱऴ";
  this.s_allKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshLAiIuUReEYoOVMHaSf";
  this.s_WordFinalPunct=" \",.>!]})";
  this.s_numberKeys="1234567890";
  this.s_DevNumbers="१२३४५६७८९०";
  this.KVER="10.0.1201.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x08)&&k.KCM(1,t,"–",1)) {   // Line 132
      r=m=1;
      k.KO(1,t,"--");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(1,t,"—",1)) {   // Line 135
      r=m=1;
      k.KO(1,t,"---");
    }
    else if(k.KKM(e, 0x4000, 0x100)) {   // Line 163
      r=m=1;
      k.KO(0,t,"क्ष");
    }
    else if(k.KKM(e, 0x4000, 0x20)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t," ");
    }
    else if(k.KKM(e, 0x4010, 0x31)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,"!");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,"\"");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"“",1)) {   // Line 122
      r=m=1;
      k.KO(1,t,"”");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"”",1)) {   // Line 123
      r=m=1;
      k.KO(1,t,"\"");
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {   // Line 121
      r=m=1;
      k.KO(0,t,"“");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"‘",1)) {   // Line 126
      r=m=1;
      k.KO(1,t,"’");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"’",1)) {   // Line 127
      r=m=1;
      k.KO(1,t,"'");
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {   // Line 125
      r=m=1;
      k.KO(0,t,"‘");
    }
    else if(k.KKM(e, 0x4010, 0x30)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,")");
    }
    else if(k.KKM(e, 0x4000, 0xBC)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,",");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KCM(2,t," ।",2)) {   // Line 100
      r=m=1;
      k.KO(2,t,".");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,".");
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {   // Line 99
      r=m=1;
      k.KO(0,t," ।");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"०");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"०");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"१");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"१");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"२");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"२");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"३");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"३");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"४");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"४");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"५");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"५");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"६");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"६");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"७");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"७");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"८");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"८");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 145
      r=m=1;
      k.KO(1,t,"९");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KA(0,k.KC(1,1,t),this.s_DevNumbers)) {   // Line 146
      r=m=1;
      k.KO(-1,t,"९");
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {   // Line 110
      r=m=1;
      k.KO(0,t,"=");
      k.KDO(-1,t,2);
    }
    else if(k.KKM(e, 0x4010, 0xBE)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,">");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"A");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ा");
    }
    else if(k.KKM(e, 0x4010, 0x41)) {   // Line 149
      r=m=1;
      k.KO(0,t,"आ");
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"B");
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, 0x4010, 0x42)) {   // Line 150
      r=m=1;
      k.KO(0,t,"भ");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"C");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, 0x4010, 0x43)) {   // Line 150
      r=m=1;
      k.KO(0,t,"छ");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"D");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KCM(1,t,"ढ",1)) {   // Line 56
      r=m=1;
      k.KO(1,t,"ढ़");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, 0x4010, 0x44)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ढ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"E");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"े");
    }
    else if(k.KKM(e, 0x4010, 0x45)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ऎ");
    }
    else if(k.KKM(e, 0x4010, 0x46)) {   // Line 96
      r=m=1;
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"G");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, 0x4010, 0x47)) {   // Line 150
      r=m=1;
      k.KO(0,t,"घ");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"H");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ः");
    }
    else if(k.KKM(e, 0x4010, 0x48)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ः");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"I");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ी");
    }
    else if(k.KKM(e, 0x4010, 0x49)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ई");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"J");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {   // Line 150
      r=m=1;
      k.KO(0,t,"झ");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"K");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KCM(1,t,"ख",1)) {   // Line 87
      r=m=1;
      k.KO(1,t,"ख़");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, 0x4010, 0x4B)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ख");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"L");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ळ",1)) {   // Line 52
      r=m=1;
      k.KO(1,t,"ऴ");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ळ");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"M");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ं");
    }
    else if(k.KKM(e, 0x4010, 0x4D)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ं");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"N");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ण");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"O");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ो");
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ऒ");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"P");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, 0x4010, 0x50)) {   // Line 150
      r=m=1;
      k.KO(0,t,"फ");
    }
    else if(k.KKM(e, 0x4010, 0x51)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"Q");
    }
    else if(k.KKM(e, 0x4010, 0x51)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, 0x4010, 0x51)) {   // Line 150
      r=m=1;
      k.KO(0,t,"थ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"R");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ऋ",1)) {   // Line 69
      r=m=1;
      k.KO(1,t,"ॠ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ृ",1)) {   // Line 70
      r=m=1;
      k.KO(1,t,"ॄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ृ");
    }
    else if(k.KKM(e, 0x4010, 0x52)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ऋ");
    }
    else if(k.KKM(e, 0x4010, 0x53)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"S");
    }
    else if(k.KKM(e, 0x4010, 0x53)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"S");
    }
    else if(k.KKM(e, 0x4010, 0x53)) {   // Line 73
      r=m=1;
      k.KO(0,t,"ँ");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"T");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, 0x4010, 0x54)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ठ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"U");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ू");
    }
    else if(k.KKM(e, 0x4010, 0x55)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ऊ");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"V");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ौ");
    }
    else if(k.KKM(e, 0x4010, 0x56)) {   // Line 149
      r=m=1;
      k.KO(0,t,"औ");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"W");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, 0x4010, 0x57)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ङ");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"्",1)) {   // Line 104
      r=m=1;
      k.KO(-1,t,"‌");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 103
      r=m=1;
      k.KO(-1,t,"्‌");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KCM(1,t,"‌",1)) {   // Line 105
      r=m=1;
      k.KB(t);
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KCM(1,t,"‍",1)) {   // Line 116
      r=m=1;
      k.KB(t);
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KCM(1,t,"‌",1)) {   // Line 117
      r=m=1;
      k.KB(t);
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"Y");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ै");
    }
    else if(k.KKM(e, 0x4010, 0x59)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ऐ");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"Z");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, 0x4010, 0x5A)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ष");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"[");
    }
    else if(k.KKM(e, 0x4000, 0xDB)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"[");
    }
    else if(k.KKM(e, 0x4000, 0xDB)) {   // Line 150
      r=m=1;
      k.KO(0,t,"द");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,"]");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(3,t,"---",3)) {   // Line 133
      r=m=1;
      k.KO(3,t,"—");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(2,t,"--",2)) {   // Line 130
      r=m=1;
      k.KO(2,t,"–");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(1,t,"–",1)) {   // Line 131
      r=m=1;
      k.KO(1,t,"--");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KCM(1,t,"—",1)) {   // Line 134
      r=m=1;
      k.KO(1,t,"---");
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {   // Line 138
      r=m=1;
      k.KO(0,t,"`");
      k.KDO(-1,t,3);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ा",1)&&k.KDM(0,t,1)) {   // Line 37
      r=m=1;
      k.KO(1,t,"अ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"a");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"अ",1)) {   // Line 34
      r=m=1;
      k.KO(1,t,"आ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 35
      r=m=1;
      k.KDO(-1,t,0);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,0)) {   // Line 36
      r=m=1;
      k.KO(0,t,"ा");
      k.KDO(-1,t,1);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, 0x4000, 0x41)) {   // Line 33
      r=m=1;
      k.KO(0,t,"अ");
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"b");
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, 0x4000, 0x42)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ब");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"c");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, 0x4000, 0x43)) {   // Line 150
      r=m=1;
      k.KO(0,t,"च");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"d");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KCM(1,t,"ड",1)) {   // Line 55
      r=m=1;
      k.KO(1,t,"ड़ ");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, 0x4000, 0x44)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ड");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"e");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ए",1)) {   // Line 40
      r=m=1;
      k.KO(1,t,"ऎ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"े",1)) {   // Line 41
      r=m=1;
      k.KO(1,t,"ॆ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ॆ");
    }
    else if(k.KKM(e, 0x4000, 0x45)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ए");
    }
    else if(k.KKM(e, 0x4000, 0x46)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"f");
    }
    else if(k.KKM(e, 0x4000, 0x46)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"f");
    }
    else if(k.KKM(e, 0x4000, 0x46)) {   // Line 93
      r=m=1;
      k.KO(0,t,"़");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"g");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(1,t,"ग",1)) {   // Line 83
      r=m=1;
      k.KO(1,t,"ग़");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, 0x4000, 0x47)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ग");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"h");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, 0x4000, 0x48)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ह");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"i");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"इ",1)) {   // Line 44
      r=m=1;
      k.KO(1,t,"ई");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ि",1)) {   // Line 45
      r=m=1;
      k.KO(1,t,"ी");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ि");
    }
    else if(k.KKM(e, 0x4000, 0x49)) {   // Line 149
      r=m=1;
      k.KO(0,t,"इ");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"j");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(1,t,"ज",1)) {   // Line 90
      r=m=1;
      k.KO(1,t,"ज़");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ज");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"k");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"क",1)) {   // Line 86
      r=m=1;
      k.KO(1,t,"क़");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {   // Line 150
      r=m=1;
      k.KO(0,t,"क");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"l");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ल",1)) {   // Line 48
      r=m=1;
      k.KO(1,t,"ळ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ळ",1)) {   // Line 49
      r=m=1;
      k.KO(1,t,"ऴ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ल");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"m");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {   // Line 150
      r=m=1;
      k.KO(0,t,"म");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"n");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KCM(1,t,"न",1)) {   // Line 59
      r=m=1;
      k.KO(1,t,"ऩ");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {   // Line 150
      r=m=1;
      k.KO(0,t,"न");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"o");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ओ",1)) {   // Line 62
      r=m=1;
      k.KO(1,t,"ऒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ो",1)) {   // Line 63
      r=m=1;
      k.KO(1,t,"ॊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ॊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {   // Line 149
      r=m=1;
      k.KO(0,t,"ओ");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"p");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, 0x4000, 0x50)) {   // Line 150
      r=m=1;
      k.KO(0,t,"प");
    }
    else if(k.KKM(e, 0x4000, 0x51)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"q");
    }
    else if(k.KKM(e, 0x4000, 0x51)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, 0x4000, 0x51)) {   // Line 150
      r=m=1;
      k.KO(0,t,"त");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"=",1)&&k.KDM(0,t,2)) {   // Line 111
      r=m=1;
      k.KO(1,t,"ऱ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"r");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"र",1)) {   // Line 66
      r=m=1;
      k.KO(1,t,"ऱ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, 0x4000, 0x52)) {   // Line 150
      r=m=1;
      k.KO(0,t,"र");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"s");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KCM(1,t,"स",1)) {   // Line 80
      r=m=1;
      k.KO(1,t,"ष");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, 0x4000, 0x53)) {   // Line 150
      r=m=1;
      k.KO(0,t,"स");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"t");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, 0x4000, 0x54)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ट");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"u");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"उ",1)) {   // Line 76
      r=m=1;
      k.KO(1,t,"ऊ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ु",1)) {   // Line 77
      r=m=1;
      k.KO(1,t,"ू");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 151
      r=m=1;
      k.KO(-1,t,"ु");
    }
    else if(k.KKM(e, 0x4000, 0x55)) {   // Line 149
      r=m=1;
      k.KO(0,t,"उ");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"v");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, 0x4000, 0x56)) {   // Line 150
      r=m=1;
      k.KO(0,t,"व");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"w");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, 0x4000, 0x57)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ञ");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KCM(1,t,"‌",1)) {   // Line 115
      r=m=1;
      k.KB(t);
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KCM(1,t,"‍",1)) {   // Line 118
      r=m=1;
      k.KB(t);
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 154
      r=m=1;
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_vowels)) {   // Line 155
      r=m=1;
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_vowels)) {   // Line 158
      r=m=1;
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KCM(1,t,"अ",1)) {   // Line 159
      r=m=1;
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_vowelMatras)) {   // Line 160
      r=m=1;
      k.KO(-1,t,"्");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"y");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, 0x4000, 0x59)) {   // Line 150
      r=m=1;
      k.KO(0,t,"य");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KCM(1,t,"=",1)&&k.KDM(0,t,2)) {   // Line 112
      r=m=1;
      k.KO(1,t,"ऴ");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"z");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {   // Line 150
      r=m=1;
      k.KO(0,t,"श");
    }
    else if(k.KKM(e, 0x4010, 0xDB)&&k.KCM(1,t,"`",1)&&k.KDM(0,t,3)) {   // Line 139
      r=m=1;
      k.KO(1,t,"{");
    }
    else if(k.KKM(e, 0x4010, 0xDB)&&k.KA(0,k.KC(1,1,t),this.s_allKeys)) {   // Line 140
      r=m=1;
      k.KO(-1,t,"{");
    }
    else if(k.KKM(e, 0x4010, 0xDB)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ध");
    }
    else if(k.KKM(e, 0x4010, 0xDD)&&k.KCM(1,t,"‌",1)) {   // Line 107
      r=m=1;
      k.KO(1,t,"}");
    }
    return r;
  };
}
