
KeymanWeb.KR(new Keyboard_sil_nigeria_underline());

function Keyboard_sil_nigeria_underline()
{
  
  this.KI="Keyboard_sil_nigeria_underline";
  this.KN="Nigeria Underline (SIL)";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Arial"',K102:0};
  this.KDU=0;
  this.KV.KLS={
    "default": ["`","1","2","3","4","5","6","7","8","9","0","-","=","","","","q","w","e","r","t","y","u","i","o","p","[","]","\\","","","","a","s","d","f","g","h","j","k","l",";","'","","","","","","\\","z","x","c","v","b","n","m",",",".","/","","","","","",""],
    "shift": ["~","!","@","#","$","%","^","&","*","(",")","_","+","","","","Q","W","E","R","T","Y","U","I","O","P","{","}","|","","","","A","S","D","F","G","H","J","K","L",":","\"","","","","","","|","Z","X","C","V","B","N","M","<",">","?","","","","","",""],
    "ctrl": ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""]
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
  this.KBVER="1.5";
  this.KMBM=0x0010;
  this.s_Let2BMod="bcdhkmnyzBCDGKLMNXY$?*";
  this.s_ModLet="ɓçɗɦƙɲŋƴʒƁÇƊɣƘ£ƝŊƎƳ₦ʔ°";
  this.s_vowel="aeiouAEIOU";
  this.s_vAcute="áéíóúÁÉÍÓÚ";
  this.s_vMid="āēīōūĀĒĪŌŪ";
  this.s_vGrave="àèìòùÀÈÌÒÙ";
  this.s_vCircum="âêîôûÂÊÎÔÛ";
  this.s_vCaron="ǎěǐǒǔǍĚǏǑǓ";
  this.s_vNasal="ãẽĩõũÃẼĨÕŨ";
  this.s_nasal="mnMN";
  this.s_nAcute="ḿńḾŃ";
  this.s_LetN="nN";
  this.s_nGrave="ǹǸ";
  this.s_nCaron="ňŇ";
  this.s_nNasal="ñÑ";
  this.KVER="10.0.1106.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4010, 0x31)&&k.KDM(0,t,6)) {   // Line 63
      r=m=1;
      k.KO(0,t,"!");
    }
    else if(k.KKM(e, 0x4010, 0x31)&&k.KDM(0,t,0)) {   // Line 77
      r=m=1;
      k.KDO(0,t,13);
    }
    else if(k.KKM(e, 0x4010, 0x31)&&k.KDM(0,t,7)) {   // Line 88
      r=m=1;
      k.KDO(0,t,20);
    }
    else if(k.KKM(e, 0x4010, 0x31)&&k.KDM(0,t,14)) {   // Line 97
      r=m=1;
      k.KDO(0,t,26);
    }
    else if(k.KKM(e, 0x4010, 0x31)) {   // Line 53
      r=m=1;
      k.KDO(0,t,6);
    }
    else if(k.KKM(e, 0x4010, 0x34)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"₦");
    }
    else if(k.KKM(e, 0x4010, 0x37)&&k.KDM(0,t,5)) {   // Line 62
      r=m=1;
      k.KO(0,t,"&");
    }
    else if(k.KKM(e, 0x4010, 0x37)&&k.KDM(0,t,0)) {   // Line 75
      r=m=1;
      k.KDO(0,t,12);
    }
    else if(k.KKM(e, 0x4010, 0x37)&&k.KDM(0,t,7)) {   // Line 87
      r=m=1;
      k.KDO(0,t,19);
    }
    else if(k.KKM(e, 0x4010, 0x37)&&k.KDM(0,t,14)) {   // Line 96
      r=m=1;
      k.KDO(0,t,25);
    }
    else if(k.KKM(e, 0x4010, 0x37)) {   // Line 52
      r=m=1;
      k.KDO(0,t,5);
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"ꞌ",1)) {   // Line 57
      r=m=1;
      k.KO(1,t,"'");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KDM(0,t,0)) {   // Line 67
      r=m=1;
      k.KDO(0,t,8);
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KDM(0,t,7)) {   // Line 83
      r=m=1;
      k.KDO(0,t,15);
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KDM(0,t,14)) {   // Line 92
      r=m=1;
      k.KDO(0,t,21);
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KDM(0,t,1)) {   // Line 104
      r=m=1;
      k.KO(0,t,"ꞌ");
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {   // Line 48
      r=m=1;
      k.KDO(0,t,1);
    }
    else if(k.KKM(e, 0x4010, 0x38)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"°");
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KDM(0,t,2)) {   // Line 59
      r=m=1;
      k.KO(0,t,"-");
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KDM(0,t,0)) {   // Line 69
      r=m=1;
      k.KDO(0,t,9);
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KDM(0,t,7)) {   // Line 84
      r=m=1;
      k.KDO(0,t,16);
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KDM(0,t,14)) {   // Line 93
      r=m=1;
      k.KDO(0,t,22);
    }
    else if(k.KKM(e, 0x4000, 0xBD)) {   // Line 49
      r=m=1;
      k.KDO(0,t,2);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,0)) {   // Line 58
      r=m=1;
      k.KO(0,t,";");
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,1)) {   // Line 68
      r=m=1;
      k.KDO(0,t,8);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,2)) {   // Line 70
      r=m=1;
      k.KDO(0,t,9);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,3)) {   // Line 72
      r=m=1;
      k.KDO(0,t,10);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,4)) {   // Line 74
      r=m=1;
      k.KDO(0,t,11);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,5)) {   // Line 76
      r=m=1;
      k.KDO(0,t,12);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,6)) {   // Line 78
      r=m=1;
      k.KDO(0,t,13);
    }
    else if(k.KKM(e, 0x4000, 0xBA)&&k.KDM(0,t,7)) {   // Line 80
      r=m=1;
      k.KDO(0,t,14);
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {   // Line 47
      r=m=1;
      k.KDO(0,t,0);
    }
    else if(k.KKM(e, 0x4010, 0xBF)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ʔ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"A̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"Á");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"Ā");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"À");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"Â");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"Ǎ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"A̋");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"Ã");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"Á̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"Ā̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"À̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"Â̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"Ǎ̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"A̱̋");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"Ã́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"Ã̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"Ã̀");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"Ã̂");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"Ã̌");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"Ã̋");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"Ã̱");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"Ã̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"Ã̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"Ã̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"Ã̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"Ã̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"Ã̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ɓ");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ç");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ɗ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"E̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"É");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"Ē");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"È");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"Ê");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"Ě");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"E̋");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"Ẽ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"É̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"Ē̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"È̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"Ê̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"Ě̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"E̱̋");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"Ẽ́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"Ẽ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"Ẽ̀");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"Ẽ̂");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"Ẽ̌");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"Ẽ̋");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"Ẽ̱");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"Ẽ̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"Ẽ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"Ẽ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"Ẽ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"Ẽ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"Ẽ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ɣ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"I̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"Í");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"Ī");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"Ì");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"Î");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"Ǐ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"I̋");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"Ĩ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"Í̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"Ī̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"Ì̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"Î̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"Ǐ̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"I̱̋");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"Ĩ́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"Ĩ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"Ĩ̀");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"Ĩ̂");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"Ĩ̌");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"Ĩ̋");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"Ĩ̱");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"Ĩ̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"Ĩ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"Ĩ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"Ĩ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"Ĩ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"Ĩ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ƙ");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"£");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ɲ");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,1)) {   // Line 109
      r=m=1;
      k.KO(0,t,"Ḿ");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,2)) {   // Line 111
      r=m=1;
      k.KO(0,t,"M̄");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,3)) {   // Line 115
      r=m=1;
      k.KO(0,t,"M̀");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,4)) {   // Line 117
      r=m=1;
      k.KO(0,t,"M̂");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,5)) {   // Line 121
      r=m=1;
      k.KO(0,t,"M̌");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,6)) {   // Line 123
      r=m=1;
      k.KO(0,t,"M̋");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,6)) {   // Line 127
      r=m=1;
      k.KO(0,t,"M̋");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,7)) {   // Line 131
      r=m=1;
      k.KO(0,t,"M̃");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ŋ");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,1)) {   // Line 109
      r=m=1;
      k.KO(0,t,"Ń");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,2)) {   // Line 111
      r=m=1;
      k.KO(0,t,"N̄");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,3)) {   // Line 113
      r=m=1;
      k.KO(0,t,"Ǹ");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,4)) {   // Line 117
      r=m=1;
      k.KO(0,t,"N̂");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,5)) {   // Line 119
      r=m=1;
      k.KO(0,t,"Ň");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,6)) {   // Line 123
      r=m=1;
      k.KO(0,t,"N̋");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,6)) {   // Line 125
      r=m=1;
      k.KO(0,t,"N̋");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,7)) {   // Line 129
      r=m=1;
      k.KO(0,t,"Ñ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"O̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"Ó");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"Ō");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"Ò");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"Ô");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"Ǒ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"Ő");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"Õ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"Ó̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"Ō̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"Ò̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"Ô̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"Ǒ̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"Ő̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"Ṍ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"Ȭ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"Õ̀");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"Õ̂");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"Õ̌");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"Õ̋");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"Õ̱");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"Ṍ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"Ȭ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"Õ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"Õ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"Õ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"Õ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"U̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"Ú");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"Ū");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"Ù");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"Û");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"Ǔ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"Ű");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"Ũ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"Ú̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"Ū̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"Ù̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"Û̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"Ǔ̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"Ű̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"Ṹ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"Ũ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"Ũ̀");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"Ũ̂");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"Ũ̌");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"Ũ̋");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"Ũ̱");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"Ṹ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"Ũ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"Ũ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"Ũ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"Ũ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"Ũ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ǝ");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"Ƴ");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KDM(0,t,4)) {   // Line 61
      r=m=1;
      k.KO(0,t,"^");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KDM(0,t,0)) {   // Line 73
      r=m=1;
      k.KDO(0,t,11);
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KDM(0,t,7)) {   // Line 86
      r=m=1;
      k.KDO(0,t,18);
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KDM(0,t,14)) {   // Line 95
      r=m=1;
      k.KDO(0,t,24);
    }
    else if(k.KKM(e, 0x4010, 0x36)) {   // Line 51
      r=m=1;
      k.KDO(0,t,4);
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KDM(0,t,3)) {   // Line 60
      r=m=1;
      k.KO(0,t,"`");
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KDM(0,t,0)) {   // Line 71
      r=m=1;
      k.KDO(0,t,10);
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KDM(0,t,7)) {   // Line 85
      r=m=1;
      k.KDO(0,t,17);
    }
    else if(k.KKM(e, 0x4000, 0xC0)&&k.KDM(0,t,14)) {   // Line 94
      r=m=1;
      k.KDO(0,t,23);
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {   // Line 50
      r=m=1;
      k.KDO(0,t,3);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"a̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"á");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"ā");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"à");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"â");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"ǎ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"a̋");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"ã");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"á̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"ā̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"à̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"â̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"ǎ̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"a̱̋");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"ã́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"ã̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"ã̀");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"ã̂");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"ã̌");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"ã̋");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ã̱");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ã̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"ã̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"ã̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"ã̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"ã̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"ã̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ɓ");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ç");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ɗ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"e̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"é");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"ē");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"è");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"ê");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"ě");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"e̋");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"ẽ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"é̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"ē̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"è̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"ê̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"ě̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"e̱̋");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"ẽ́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"ẽ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"ẽ̀");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"ẽ̂");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"ẽ̌");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"ẽ̋");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ẽ̱");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ẽ̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"ẽ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"ẽ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"ẽ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"ẽ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"ẽ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ɦ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"i̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"í");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"ī");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"ì");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"î");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"ǐ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"i̋");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"ĩ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"í̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"ī̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"ì̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"î̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"ǐ̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"i̱̋");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"ĩ́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"ĩ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"ĩ̀");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"ĩ̂");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"ĩ̌");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"ĩ̋");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ĩ̱");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ĩ̱́");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"ĩ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"ĩ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"ĩ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"ĩ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"ĩ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ƙ");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ɲ");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,1)) {   // Line 109
      r=m=1;
      k.KO(0,t,"ḿ");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,2)) {   // Line 111
      r=m=1;
      k.KO(0,t,"m̄");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,3)) {   // Line 114
      r=m=1;
      k.KO(0,t,"m̀");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,4)) {   // Line 117
      r=m=1;
      k.KO(0,t,"m̂");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,5)) {   // Line 120
      r=m=1;
      k.KO(0,t,"m̌");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,6)) {   // Line 123
      r=m=1;
      k.KO(0,t,"m̋");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,6)) {   // Line 124
      r=m=1;
      k.KO(0,t,"m̋");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,7)) {   // Line 130
      r=m=1;
      k.KO(0,t,"m̃");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ŋ");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,1)) {   // Line 109
      r=m=1;
      k.KO(0,t,"ń");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,2)) {   // Line 111
      r=m=1;
      k.KO(0,t,"n̄");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,3)) {   // Line 113
      r=m=1;
      k.KO(0,t,"ǹ");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,4)) {   // Line 117
      r=m=1;
      k.KO(0,t,"n̂");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,5)) {   // Line 119
      r=m=1;
      k.KO(0,t,"ň");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,6)) {   // Line 123
      r=m=1;
      k.KO(0,t,"n̋");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,6)) {   // Line 126
      r=m=1;
      k.KO(0,t,"n̋");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,7)) {   // Line 129
      r=m=1;
      k.KO(0,t,"ñ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"o̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"ó");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"ō");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"ò");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"ô");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"ǒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"ő");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"õ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"ó̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"ō̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"ò̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"ô̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"ǒ̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"ő̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"ṍ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"ȭ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"õ̀");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"õ̂");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"õ̌");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"õ̋");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"õ̱");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ṍ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"ȭ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"õ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"õ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"õ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"õ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,0)) {   // Line 103
      r=m=1;
      k.KO(0,t,"u̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,1)) {   // Line 108
      r=m=1;
      k.KO(0,t,"ú");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,2)) {   // Line 110
      r=m=1;
      k.KO(0,t,"ū");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,3)) {   // Line 112
      r=m=1;
      k.KO(0,t,"ù");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,4)) {   // Line 116
      r=m=1;
      k.KO(0,t,"û");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,5)) {   // Line 118
      r=m=1;
      k.KO(0,t,"ǔ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,6)) {   // Line 122
      r=m=1;
      k.KO(0,t,"ű");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,7)) {   // Line 128
      r=m=1;
      k.KO(0,t,"ũ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,8)) {   // Line 134
      r=m=1;
      k.KO(0,t,"ú̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,9)) {   // Line 135
      r=m=1;
      k.KO(0,t,"ū̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,10)) {   // Line 136
      r=m=1;
      k.KO(0,t,"ù̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,11)) {   // Line 137
      r=m=1;
      k.KO(0,t,"û̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,12)) {   // Line 138
      r=m=1;
      k.KO(0,t,"ǔ̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,13)) {   // Line 139
      r=m=1;
      k.KO(0,t,"ű̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,15)) {   // Line 142
      r=m=1;
      k.KO(0,t,"ṹ");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,16)) {   // Line 143
      r=m=1;
      k.KO(0,t,"ũ̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,17)) {   // Line 144
      r=m=1;
      k.KO(0,t,"ũ̀");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,18)) {   // Line 145
      r=m=1;
      k.KO(0,t,"ũ̂");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,19)) {   // Line 146
      r=m=1;
      k.KO(0,t,"ũ̌");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,20)) {   // Line 147
      r=m=1;
      k.KO(0,t,"ũ̋");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,14)) {   // Line 150
      r=m=1;
      k.KO(0,t,"ũ̱");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,21)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ṹ̱");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,22)) {   // Line 154
      r=m=1;
      k.KO(0,t,"ũ̱̄");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,23)) {   // Line 155
      r=m=1;
      k.KO(0,t,"ũ̱̀");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,24)) {   // Line 156
      r=m=1;
      k.KO(0,t,"ũ̱̂");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,25)) {   // Line 157
      r=m=1;
      k.KO(0,t,"ũ̱̌");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,26)) {   // Line 158
      r=m=1;
      k.KO(0,t,"ũ̱̋");
      r=this.g_NFC(t,e);
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ƴ");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KDM(0,t,0)) {   // Line 102
      r=m=1;
      k.KO(0,t,"ʒ");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KDM(0,t,7)) {   // Line 64
      r=m=1;
      k.KO(0,t,"~");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KDM(0,t,0)) {   // Line 79
      r=m=1;
      k.KDO(0,t,14);
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {   // Line 54
      r=m=1;
      k.KDO(0,t,7);
    }
    return r;
  };
  this.g_NFC=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(k.KCM(4,t,"ṍ̱",4)) {   // Line 174
      m=1;
      k.KO(4,t,"ṍ̱");
    }
    else if(k.KCM(4,t,"Ṍ̱",4)) {   // Line 175
      m=1;
      k.KO(4,t,"Ṍ̱");
    }
    else if(k.KCM(4,t,"ṹ̱",4)) {   // Line 176
      m=1;
      k.KO(4,t,"ṹ̱");
    }
    else if(k.KCM(4,t,"Ṹ̱",4)) {   // Line 177
      m=1;
      k.KO(4,t,"Ṹ̱");
    }
    else if(k.KCM(4,t,"ȭ̱",4)) {   // Line 179
      m=1;
      k.KO(4,t,"ȭ̱");
    }
    else if(k.KCM(4,t,"Ȭ̱",4)) {   // Line 180
      m=1;
      k.KO(4,t,"Ȭ̱");
    }
    else if(k.KA(0,k.KC(4,1,t),this.s_vowel)&&k.KCM(3,t,"̱̃̀",3)) {   // Line 182
      m=1;
      k.KIO(4,this.s_vNasal,1,t);
      k.KO(-1,t,"̱̀");
    }
    else if(k.KA(0,k.KC(4,1,t),this.s_vowel)&&k.KCM(3,t,"̱̃́",3)) {   // Line 183
      m=1;
      k.KIO(4,this.s_vNasal,1,t);
      k.KO(-1,t,"̱́");
    }
    else if(k.KA(0,k.KC(4,1,t),this.s_vowel)&&k.KCM(3,t,"̱̃̂",3)) {   // Line 184
      m=1;
      k.KIO(4,this.s_vNasal,1,t);
      k.KO(-1,t,"̱̂");
    }
    else if(k.KA(0,k.KC(4,1,t),this.s_vowel)&&k.KCM(3,t,"̱̃̌",3)) {   // Line 185
      m=1;
      k.KIO(4,this.s_vNasal,1,t);
      k.KO(-1,t,"̱̌");
    }
    else if(k.KA(0,k.KC(4,1,t),this.s_vowel)&&k.KCM(3,t,"̱̃̋",3)) {   // Line 186
      m=1;
      k.KIO(4,this.s_vNasal,1,t);
      k.KO(-1,t,"̱̋");
    }
    else if(k.KCM(2,t,"ṍ",2)) {   // Line 166
      m=1;
      k.KO(2,t,"ṍ");
    }
    else if(k.KCM(2,t,"Ṍ",2)) {   // Line 167
      m=1;
      k.KO(2,t,"Ṍ");
    }
    else if(k.KCM(2,t,"ṹ",2)) {   // Line 168
      m=1;
      k.KO(2,t,"ṹ");
    }
    else if(k.KCM(2,t,"Ṹ",2)) {   // Line 169
      m=1;
      k.KO(2,t,"Ṹ");
    }
    else if(k.KCM(2,t,"ȭ",2)) {   // Line 171
      m=1;
      k.KO(2,t,"ȭ");
    }
    else if(k.KCM(2,t,"Ȭ",2)) {   // Line 172
      m=1;
      k.KO(2,t,"Ȭ");
    }
    return r;
  };
}
