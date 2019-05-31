if(typeof keyman === 'undefined') {
  console.log('Keyboard requires KeymanWeb 10.0 or later');
  if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");
} else {
KeymanWeb.KR(new Keyboard_nlci_kannada_winscript());
}
function Keyboard_nlci_kannada_winscript()
{
  var modCodes = keyman.osk.modifierCodes;
  var keyCodes = keyman.osk.keyCodes;

  this.KI="Keyboard_nlci_kannada_winscript";
  this.KN="Kannada WinScript [NLCI] ";
  this.KMINVER="10.0";
  this.KV={F:' 1em "Annapurna SIL"',K102:0};
  this.KDU=1;
  this.KV.KLS={
    "default": ["`","1","2","3","4","5","6","7","8","9","0","-","=","","","","ತ","ಞ","ಎ","ರ","ಟ","ಯ","ಉ","ಇ","ಒ","ಪ","ದ","]","\\","","","","ಅ","ಸ","ಡ","","ಗ","ಹ","ಜ","ಕ","ಲ",";","‘","","","","","","","ಶ","x","ಚ","ವ","ಬ","ನ","ಮ",",",".","/","","","","","",""],
    "shift": ["~","!","@","#","$","%","^","&","*","(",")","_","+","","","","ಥ","ಙ","ಏ","ಋ","ಠ","ಐ","ಊ","ಈ","ಓ","ಫ","ಧ","}","|","","","","ಆ","","ಢ","","ಘ","ಃ","ಝ","ಖ","ಳ",":","“","","","","","","","ಷ","X","ಛ","ಔ","ಭ","ಣ","ಂ","<",">","?","","","","","",""]
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
  this.KBVER="2.0";
  this.KMBM=modCodes.SHIFT /* 0x0010 */;
  this.s_vowelKeys="AiIuUReEYoOVMH";
  this.s_vowels="ಆಇಈಉಊಋಎಏಐಒಓಔಂಃ";
  this.s_vowelMatras="ಾಿೀುೂೃೆೇೈೊೋೌಂಃ";
  this.s_consKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshL";
  this.s_cons="ಕಖಗಘಙಚಛಜಝಞಟಠಡಢಣತಥದಧನಪಫಬಭಮಯರಲವಶಷಸಹಳ";
  this.s_consonants="ಕಖಗಘಙಚಛಜಝಞಟಠಡಢಣತಥದಧನಪಫಬಭಮಯರಲವಶಷಸಹಳಱೞ";
  this.s_allKeys="kKgGWcCjJwtTdDNqQ[{npPbBmyrlvzZshLAiIuUReEYoOVMHazZ";
  this.s_WordFinalPunct=" \",;:.>!]}-\\;/~@#$%^&*(_+|:<?)";
  this.s_numberKeys="1234567890";
  this.s_KannadaNumbers="೧೨೩೪೫೬೭೮೯೦";
  this.KVER="10.0.1201.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSP /* 0x08 */)&&k.KFCM(1,t,['–'])) {   // Line 114
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"--");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSP /* 0x08 */)&&k.KFCM(1,t,['—'])) {   // Line 117
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"---");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SPACE /* 0x20 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t," ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"!");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\"");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['“'])) {   // Line 104
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"”");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['”'])) {   // Line 105
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\"");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_QUOTE /* 0xDE */)) {   // Line 103
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"“");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"#");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"$");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"%");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"&");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['‘'])) {   // Line 108
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"’");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)&&k.KFCM(1,t,['’'])) {   // Line 109
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"'");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_QUOTE /* 0xDE */)) {   // Line 107
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"‘");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"(");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,")");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"*");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_EQUAL /* 0xBB */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"+");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COMMA /* 0xBC */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,",");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_HYPHEN /* 0xBD */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"-");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_PERIOD /* 0xBE */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,".");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_SLASH /* 0xBF */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"/");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೦");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_0 /* 0x30 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೦");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೧");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_1 /* 0x31 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೧");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೨");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೨");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೩");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_3 /* 0x33 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೩");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೪");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_4 /* 0x34 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೪");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೫");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_5 /* 0x35 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೫");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೬");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೬");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೭");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_7 /* 0x37 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೭");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೮");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_8 /* 0x38 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೮");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 128
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"೯");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_9 /* 0x39 */)&&k.KFCM(1,t,[{t:'a',a:this.s_KannadaNumbers}])) {   // Line 129
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_KannadaNumbers,1,t);
      k.KO(-1,t,"೯");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,":");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,":");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,";");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_COLON /* 0xBA */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,";");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_COMMA /* 0xBC */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"<");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_EQUAL /* 0xBB */)) {   // Line 92
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"=");
      k.KDO(-1,t,3);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_PERIOD /* 0xBE */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,">");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_SLASH /* 0xBF */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"?");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_2 /* 0x32 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"@");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ಾ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_A /* 0x41 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಆ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_B /* 0x42 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಭ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_C /* 0x43 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಛ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_D /* 0x44 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಢ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೇ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_E /* 0x45 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಏ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 70
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"F");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_F /* 0x46 */)) {   // Line 69
      r=m=1;
      k.KDC(0,t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_G /* 0x47 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಘ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ಃ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_H /* 0x48 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಃ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೀ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_I /* 0x49 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಈ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_J /* 0x4A */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಝ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_K /* 0x4B */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಖ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ಳ'])) {   // Line 52
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೞ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_L /* 0x4C */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಳ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ಂ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_M /* 0x4D */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಂ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_N /* 0x4E */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಣ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೋ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_O /* 0x4F */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಓ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_P /* 0x50 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಫ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Q /* 0x51 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಥ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['ಋ'])) {   // Line 62
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೠ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['ೃ'])) {   // Line 63
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೄ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೃ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_R /* 0x52 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಋ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 82
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"S");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_S /* 0x53 */)) {   // Line 66
      r=m=1;
      k.KDC(0,t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_T /* 0x54 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಠ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೂ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_U /* 0x55 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಊ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೌ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_V /* 0x56 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಔ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_W /* 0x57 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಙ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(2,t,[{t:'a',a:this.s_consonants},'್'])) {   // Line 86
      r=m=1;
      k.KDC(2,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"್‌");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 85
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"್‌");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 87
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‍'])) {   // Line 98
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‍");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 99
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೈ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Y /* 0x59 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಐ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_Z /* 0x5A */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಷ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"[");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"[");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_LBRKT /* 0xDB */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ದ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKSLASH /* 0xDC */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"\\");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_RBRKT /* 0xDD */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"]");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_6 /* 0x36 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"^");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_HYPHEN /* 0xBD */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"_");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(3,t,['-','-','-'])) {   // Line 115
      r=m=1;
      k.KDC(3,t);
      k.KO(-1,t,"—");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(2,t,['-','-'])) {   // Line 112
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"–");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['–'])) {   // Line 113
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"--");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['—'])) {   // Line 116
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"---");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_BKQUOTE /* 0xC0 */)) {   // Line 121
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"`");
      k.KDO(-1,t,2);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['ಾ',{t:'d',d:1}])) {   // Line 37
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"ಅ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,['ಅ'])) {   // Line 34
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಆ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 35
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KDO(-1,t,0);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'d',d:0}])) {   // Line 36
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಾ");
      k.KDO(-1,t,1);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)&&k.KFCM(1,t,['ಾ'])) {   // Line 148
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಾಾ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_A /* 0x41 */)) {   // Line 33
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಅ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_B /* 0x42 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಬ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_C /* 0x43 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಚ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_D /* 0x44 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಡ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['ಎ'])) {   // Line 40
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಏ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,['ೆ'])) {   // Line 41
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೇ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೆ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_E /* 0x45 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಎ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 72
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"f");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_F /* 0x46 */)) {   // Line 71
      r=m=1;
      k.KDC(0,t);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_G /* 0x47 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಗ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_H /* 0x48 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಹ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,['ಇ'])) {   // Line 44
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಈ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,['ಿ'])) {   // Line 45
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೀ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ಿ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)&&k.KFCM(1,t,['ಿ'])) {   // Line 146
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಿೀ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_I /* 0x49 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಇ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_J /* 0x4A */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಜ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_K /* 0x4B */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಕ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ಲ'])) {   // Line 48
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಳ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,['ಳ'])) {   // Line 49
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೞ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_L /* 0x4C */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಲ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_M /* 0x4D */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಮ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_N /* 0x4E */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ನ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,['ಒ'])) {   // Line 55
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಓ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,['ೊ'])) {   // Line 56
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೋ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ೊ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_O /* 0x4F */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಒ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_P /* 0x50 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಪ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Q /* 0x51 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ತ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['=',{t:'d',d:3}])) {   // Line 93
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"ಱ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,['ರ'])) {   // Line 59
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಱ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_R /* 0x52 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ರ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(1,t,['ಸ'])) {   // Line 79
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಶ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_S /* 0x53 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಸ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_T /* 0x54 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಟ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,['ಉ'])) {   // Line 75
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಊ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,['ು'])) {   // Line 76
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ೂ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 134
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"ು");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)&&k.KFCM(1,t,['ು'])) {   // Line 147
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ುೂ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_U /* 0x55 */)) {   // Line 132
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಉ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_V /* 0x56 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ವ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_W /* 0x57 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಞ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‌'])) {   // Line 97
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‌");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['‍'])) {   // Line 100
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"‍");
      k.KB(t);
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_consonants}])) {   // Line 137
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_consonants,1,t);
      k.KO(-1,t,"್");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowels}])) {   // Line 138
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowels,1,t);
      k.KO(-1,t,"್");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowels}])) {   // Line 141
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowels,1,t);
      k.KO(-1,t,"್");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,['ಅ'])) {   // Line 142
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"ಅ್");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_X /* 0x58 */)&&k.KFCM(1,t,[{t:'a',a:this.s_vowelMatras}])) {   // Line 143
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_vowelMatras,1,t);
      k.KO(-1,t,"್");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Y /* 0x59 */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಯ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['=',{t:'d',d:3}])) {   // Line 94
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"ೞ");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, modCodes.VIRTUAL_KEY /* 0x4000 */, keyCodes.K_Z /* 0x5A */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಶ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(2,t,['`',{t:'d',d:2}])) {   // Line 122
      r=m=1;
      k.KDC(2,t);
      k.KO(-1,t,"{");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)&&k.KFCM(1,t,[{t:'a',a:this.s_allKeys}])) {   // Line 123
      r=m=1;
      k.KDC(1,t);
      k.KIO(-1,this.s_allKeys,1,t);
      k.KO(-1,t,"{");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_LBRKT /* 0xDB */)) {   // Line 133
      r=m=1;
      k.KDC(0,t);
      k.KO(-1,t,"ಧ");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKSLASH /* 0xDC */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"|");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_RBRKT /* 0xDD */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"}");
    }
    else if(k.KKM(e, modCodes.SHIFT | modCodes.VIRTUAL_KEY /* 0x4010 */, keyCodes.K_BKQUOTE /* 0xC0 */)&&k.KFCM(1,t,['‌'])) {   // Line 89
      r=m=1;
      k.KDC(1,t);
      k.KO(-1,t,"~");
    }
    return r;
  };
}
