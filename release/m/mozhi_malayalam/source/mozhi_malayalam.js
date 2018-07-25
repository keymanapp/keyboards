
KeymanWeb.KR(new Keyboard_mozhi_malayalam());

function Keyboard_mozhi_malayalam()
{
  
  this.KI="Keyboard_mozhi_malayalam";
  this.KN="Malayalam Mozhi";
  this.KMINVER="9.0";
  this.KV=null;
  this.KH='';
  this.KM=0;
  this.KBVER="2.0.1";
  this.KMBM=0x0010;
  this.s_consonants="കഖഗഘങചഛജഝഞടഠഡഢണതഥദധനപഫബഭമയരലവശഷസഹളഴറ";
  this.s_vowels="അആഇഈഉഊഋൠഌൡഎഏഐഒഓഔ";
  this.s_vowelsigns="ാിീുൂൃൄൢൣെേൈൊോൗ";
  this.s_digits="0123456789";
  this.s_malDigits="൦൧൨൩൪൫൬൭൮൯";
  this.s_chills="ൺൻർൽൾൿം";
  this.s_chillSource="NnrlLcm";
  this.s_chillBases="ണനരലളകമ";
  this.s_vDirectSmallValues="അഎഇഒഉ";
  this.s_vDirectSmallKeys="aeiou";
  this.s_vDirectCapsValues="ആഏഐഓഋഊ";
  this.s_vDirectCapsKeys="AEIORU";
  this.s_thinConsonants="കഗചജടഡതദപബസശ";
  this.s_thickConsonants="ഖഘഛഝഠഢഥധഫഭഷഴ";
  this.s_cDirectSmallValues="ബദഫഗഹജകമപസവവയശ";
  this.s_cDirectSmallKeys="bdfghjkmpsvwyz";
  this.s_cDirectCapsValues="ഡശട";
  this.s_cDirectCapsKeys="DST";
  this.s_nonSa="കഖഗഘങചഛജഝഞടഠഡഢണതഥദധനപഫബഭമയരലവശഷഹളഴറ";
  this.s_escapable="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\\>_~";
  this.KVER="10.0.1201.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4010, 0x33)&&k.KCM(1,t,"ർ",1)) {   // Line 271
      r=m=1;
      k.KO(1,t,"ൎ");
    }
    else if(k.KKM(e, 0x4010, 0x34)) {   // Line 83
      r=m=1;
      k.KO(0,t,"₹");
    }
    else if(k.KKM(e, 0x4010, 0x38)&&k.KCM(1,t,"\\",1)) {   // Line 360
      r=m=1;
      k.KO(1,t,"×");
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KCM(1,t,"\\",1)) {   // Line 359
      r=m=1;
      k.KO(1,t,"−");
    }
    else if(k.KKM(e, 0x4000, 0xBF)&&k.KCM(1,t,"/",1)) {   // Line 348
      r=m=1;
      k.KO(1,t,"ऽ");
    }
    else if(k.KKM(e, 0x4000, 0xBF)&&k.KCM(1,t,"\\",1)) {   // Line 361
      r=m=1;
      k.KO(1,t,"÷");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൦");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KCM(1,t,"\\",1)) {   // Line 292
      r=m=1;
      k.KO(1,t,"൦");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KCM(1,t,"\\",1)) {   // Line 293
      r=m=1;
      k.KO(1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൨");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KCM(1,t,"\\",1)) {   // Line 294
      r=m=1;
      k.KO(1,t,"൨");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൩");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KCM(1,t,"\\",1)) {   // Line 295
      r=m=1;
      k.KO(1,t,"൩");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൪");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KCM(1,t,"\\",1)) {   // Line 296
      r=m=1;
      k.KO(1,t,"൪");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൫");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KCM(1,t,"\\",1)) {   // Line 297
      r=m=1;
      k.KO(1,t,"൫");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൬");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KCM(1,t,"\\",1)) {   // Line 298
      r=m=1;
      k.KO(1,t,"൬");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൭");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KCM(1,t,"\\",1)) {   // Line 299
      r=m=1;
      k.KO(1,t,"൭");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൮");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KCM(1,t,"\\",1)) {   // Line 300
      r=m=1;
      k.KO(1,t,"൮");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 26
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൯");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KCM(1,t,"\\",1)) {   // Line 301
      r=m=1;
      k.KO(1,t,"൯");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 179
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 242
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 51
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"ഋ",1)) {   // Line 128
      r=m=1;
      k.KO(1,t,"റാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 304
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ബ്ബ്");
    }
    else if(k.KKM(e, 0x4010, 0x42)) {   // Line 303
      r=m=1;
      k.KO(0,t,"ബ്ബ്");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 306
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4010, 0x43)) {   // Line 305
      r=m=1;
      k.KO(0,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 201
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഡ്");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KCM(1,t,"ൺ",1)) {   // Line 256
      r=m=1;
      k.KO(1,t,"ണ്ഡ്");
    }
    else if(k.KKM(e, 0x4010, 0x44)) {   // Line 200
      r=m=1;
      k.KO(0,t,"ഡ്");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 192
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 248
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രേ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 58
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 59
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"ഋ",1)) {   // Line 134
      r=m=1;
      k.KO(1,t,"റേ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"േ",1)) {   // Line 146
      r=m=1;
      k.KO(1,t,"േേ");
    }
    else if(k.KKM(e, 0x4010, 0x45)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 308
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഗ്ഗ്");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KCM(1,t,"ൺ",1)) {   // Line 342
      r=m=1;
      k.KO(1,t,"ങ്ങ്");
    }
    else if(k.KKM(e, 0x4010, 0x47)) {   // Line 307
      r=m=1;
      k.KO(0,t,"ഗ്ഗ്");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 310
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഃ");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KCM(2,t,"ട്",2)) {   // Line 341
      r=m=1;
      k.KO(2,t,"ത്ത്");
    }
    else if(k.KKM(e, 0x4010, 0x48)) {   // Line 309
      r=m=1;
      k.KO(0,t,"ഃ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 183
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 244
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 53
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ഐ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ഐ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"ഋ",1)) {   // Line 130
      r=m=1;
      k.KO(1,t,"റീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ഐ");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 312
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ജ്ജ്");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KCM(1,t,"ൺ",1)) {   // Line 343
      r=m=1;
      k.KO(1,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {   // Line 311
      r=m=1;
      k.KO(0,t,"ജ്ജ്");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 314
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4010, 0x4B)) {   // Line 313
      r=m=1;
      k.KO(0,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൾ");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 213
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 252
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ള്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൻ",1)) {   // Line 267
      r=m=1;
      k.KO(1,t,"ന്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൽ",1)) {   // Line 274
      r=m=1;
      k.KO(1,t,"ല്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൾ",1)) {   // Line 279
      r=m=1;
      k.KO(1,t,"ള്ള്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൿ",1)) {   // Line 286
      r=m=1;
      k.KO(1,t,"ക്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ൾ");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 316
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"മ്മ്");
    }
    else if(k.KKM(e, 0x4010, 0x4D)) {   // Line 315
      r=m=1;
      k.KO(0,t,"മ്മ്");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൺ");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KCM(1,t,"ൺ",1)) {   // Line 254
      r=m=1;
      k.KO(1,t,"ണ്ണ്");
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ൺ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 195
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 250
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 61
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ഋ",1)) {   // Line 136
      r=m=1;
      k.KO(1,t,"റോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ോ",1)) {   // Line 147
      r=m=1;
      k.KO(1,t,"ോോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 318
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"പ്പ്");
    }
    else if(k.KKM(e, 0x4010, 0x50)) {   // Line 317
      r=m=1;
      k.KO(0,t,"പ്പ്");
    }
    else if(k.KKM(e, 0x4010, 0x51)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 320
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്യ്");
    }
    else if(k.KKM(e, 0x4010, 0x51)) {   // Line 319
      r=m=1;
      k.KO(0,t,"ക്യ്");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 189
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 190
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 56
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 63
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ഋ",1)) {   // Line 126
      r=m=1;
      k.KO(1,t,"ൠ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ൄ",1)) {   // Line 145
      r=m=1;
      k.KO(1,t,"ൄൄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x53)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 201
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ശ്");
    }
    else if(k.KKM(e, 0x4010, 0x53)) {   // Line 200
      r=m=1;
      k.KO(0,t,"ശ്");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 201
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ട്");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(1,t,"ൺ",1)) {   // Line 255
      r=m=1;
      k.KO(1,t,"ണ്ട്");
    }
    else if(k.KKM(e, 0x4010, 0x54)) {   // Line 200
      r=m=1;
      k.KO(0,t,"ട്");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 188
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 246
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 55
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 113
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"ഋ",1)) {   // Line 132
      r=m=1;
      k.KO(1,t,"റൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)) {   // Line 117
      r=m=1;
      k.KO(0,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 322
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x56)) {   // Line 321
      r=m=1;
      k.KO(0,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 324
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x57)) {   // Line 323
      r=m=1;
      k.KO(0,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 326
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്ഷ്");
    }
    else if(k.KKM(e, 0x4010, 0x58)) {   // Line 325
      r=m=1;
      k.KO(0,t,"ക്ഷ്");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 328
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"യ്യ്");
    }
    else if(k.KKM(e, 0x4010, 0x59)) {   // Line 327
      r=m=1;
      k.KO(0,t,"യ്യ്");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 330
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ശ്ശ്");
    }
    else if(k.KKM(e, 0x4010, 0x5A)) {   // Line 329
      r=m=1;
      k.KO(0,t,"ശ്ശ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"1000",4)) {   // Line 30
      r=m=1;
      k.KO(4,t,"൲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 72
      r=m=1;
      k.KO(4,t,"ഺ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"ള്ള്",4)) {   // Line 89
      r=m=1;
      k.KO(4,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"ള്ള്",4)) {   // Line 91
      r=m=1;
      k.KO(4,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KA(0,k.KC(4,1,t),this.s_consonants)&&k.KCM(3,t,"്ല്",3)) {   // Line 96
      r=m=1;
      k.KIO(4,this.s_consonants,1,t);
      k.KO(-1,t,"ൢ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"1000",4)) {   // Line 354
      r=m=1;
      k.KO(4,t,"൲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"100",3)) {   // Line 29
      r=m=1;
      k.KO(3,t,"൱");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/4",3)) {   // Line 31
      r=m=1;
      k.KO(3,t,"൳");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/2",3)) {   // Line 32
      r=m=1;
      k.KO(3,t,"൴");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"3/4",3)) {   // Line 33
      r=m=1;
      k.KO(3,t,"൵");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"റ്റ",3)) {   // Line 73
      r=m=1;
      k.KO(3,t,"ഺ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"‌ള്",3)) {   // Line 88
      r=m=1;
      k.KO(3,t,"ൢ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/4",3)) {   // Line 349
      r=m=1;
      k.KO(3,t,"൳");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/2",3)) {   // Line 350
      r=m=1;
      k.KO(3,t,"൴");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"3/4",3)) {   // Line 351
      r=m=1;
      k.KO(3,t,"൵");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"100",3)) {   // Line 353
      r=m=1;
      k.KO(3,t,"൱");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"---",3)) {   // Line 356
      r=m=1;
      k.KO(3,t,"—");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"10",2)) {   // Line 28
      r=m=1;
      k.KO(2,t,"൰");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"ക്",2)) {   // Line 71
      r=m=1;
      k.KO(2,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"നു",2)) {   // Line 79
      r=m=1;
      k.KO(2,t,"൹");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t," ം",2)) {   // Line 80
      r=m=1;
      k.KO(2,t,"ഀ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"പറ",2)) {   // Line 86
      r=m=1;
      k.KO(2,t,"൏");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"\\",1)) {   // Line 98
      r=m=1;
      k.KIO(2,this.s_chillBases,1,t);
      k.KO(-1,t,"്‍");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"ഩ്",2)) {   // Line 99
      r=m=1;
      k.KO(2,t,"ന്‍");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"മ്",2)) {   // Line 151
      r=m=1;
      k.KO(2,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KA(0,k.KC(2,1,t),this.s_escapable)&&k.KCM(1,t,"\\",1)) {   // Line 231
      r=m=1;
      k.KIO(2,this.s_escapable,1,t);
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"10",2)) {   // Line 352
      r=m=1;
      k.KO(2,t,"൰");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"--",2)) {   // Line 358
      r=m=1;
      k.KO(2,t,"–");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"1",1)) {   // Line 27
      r=m=1;
      k.KO(1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"അ",1)) {   // Line 69
      r=m=1;
      k.KO(1,t,"ഽ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഈ",1)) {   // Line 70
      r=m=1;
      k.KO(1,t,"ൟ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൻ",1)) {   // Line 74
      r=m=1;
      k.KO(1,t,"ഩ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ന",1)) {   // Line 75
      r=m=1;
      k.KO(1,t,"ഩ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഀ",1)) {   // Line 81
      r=m=1;
      k.KO(1,t,"ഁ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ർ",1)) {   // Line 82
      r=m=1;
      k.KO(1,t,"ൎ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"₹",1)) {   // Line 84
      r=m=1;
      k.KO(1,t,"₨");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"₨",1)) {   // Line 85
      r=m=1;
      k.KO(1,t,"$");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൾ",1)) {   // Line 87
      r=m=1;
      k.KO(1,t,"ഌ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഌ",1)) {   // Line 90
      r=m=1;
      k.KO(1,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൢ",1)) {   // Line 92
      r=m=1;
      k.KO(1,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൗ",1)) {   // Line 93
      r=m=1;
      k.KO(1,t,"ൌ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"്",1)) {   // Line 94
      r=m=1;
      k.KO(1,t,"഼");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"഼",1)) {   // Line 95
      r=m=1;
      k.KO(1,t,"഻");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ആ",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"ാ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഇ",1)) {   // Line 153
      r=m=1;
      k.KO(1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഈ",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഉ",1)) {   // Line 155
      r=m=1;
      k.KO(1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഊ",1)) {   // Line 156
      r=m=1;
      k.KO(1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഋ",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൠ",1)) {   // Line 158
      r=m=1;
      k.KO(1,t,"ൄ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"എ",1)) {   // Line 159
      r=m=1;
      k.KO(1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഏ",1)) {   // Line 160
      r=m=1;
      k.KO(1,t,"േ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഐ",1)) {   // Line 161
      r=m=1;
      k.KO(1,t,"ൈ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഒ",1)) {   // Line 162
      r=m=1;
      k.KO(1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഓ",1)) {   // Line 163
      r=m=1;
      k.KO(1,t,"ോ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഔ",1)) {   // Line 164
      r=m=1;
      k.KO(1,t,"ൗ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൗ",1)) {   // Line 165
      r=m=1;
      k.KO(1,t,"ൌ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഌ",1)) {   // Line 166
      r=m=1;
      k.KO(1,t,"ൢ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൡ",1)) {   // Line 167
      r=m=1;
      k.KO(1,t,"ൣ");
    }
    else if(k.KKM(e, 0x4010, 0xBD)&&k.KCM(1,t,"‌",1)) {   // Line 345
      r=m=1;
      k.KO(1,t,"‌");
    }
    else if(k.KKM(e, 0x4010, 0xBD)) {   // Line 346
      r=m=1;
      k.KO(0,t,"‌");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 178
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 241
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ര");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 50
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 112
      r=m=1;
      k.KO(1,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"അ",1)) {   // Line 120
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ഋ",1)) {   // Line 127
      r=m=1;
      k.KO(1,t,"റ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ാ",1)) {   // Line 141
      r=m=1;
      k.KO(1,t,"ാാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 180
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)) {   // Line 115
      r=m=1;
      k.KO(0,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ബ്");
    }
    else if(k.KKM(e, 0x4000, 0x42)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ബ്");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KCM(1,t,"ൿ",1)) {   // Line 289
      r=m=1;
      k.KO(1,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x43)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ദ്");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KCM(1,t,"ൻ",1)) {   // Line 264
      r=m=1;
      k.KO(1,t,"ന്ദ്");
    }
    else if(k.KKM(e, 0x4000, 0x44)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ദ്");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"െ",1)) {   // Line 184
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 191
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 247
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രെ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 57
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 112
      r=m=1;
      k.KO(1,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ഋ",1)) {   // Line 133
      r=m=1;
      k.KO(1,t,"റെ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"എ",1)) {   // Line 139
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x45)) {   // Line 115
      r=m=1;
      k.KO(0,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x46)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഫ്");
    }
    else if(k.KKM(e, 0x4000, 0x46)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ഫ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(4,t,"ന്ന്",4)) {   // Line 234
      r=m=1;
      k.KO(4,t,"ങ്ങ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഗ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(1,t,"ൻ",1)) {   // Line 205
      r=m=1;
      k.KO(1,t,"ങ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ഗ്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ക്ക്",4)&&k.KDM(0,t,0)) {   // Line 224
      r=m=1;
      k.KO(4,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 235
      r=m=1;
      k.KO(4,t,"ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ന്റ്",4)) {   // Line 237
      r=m=1;
      k.KO(4,t,"ന്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ട്ട്",4)) {   // Line 340
      r=m=1;
      k.KO(4,t,"ത്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KA(0,k.KC(2,1,t),this.s_thinConsonants)&&k.KCM(1,t,"്",1)) {   // Line 177
      r=m=1;
      k.KIO(2,this.s_thickConsonants,1,t);
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ഹ്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(2,t,"ൻൿ",2)) {   // Line 221
      r=m=1;
      k.KO(2,t,"ഞ്ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(1,t,"ൿ",1)) {   // Line 206
      r=m=1;
      k.KO(1,t,"ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ഹ്");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 181
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ി",1)) {   // Line 182
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 243
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 112
      r=m=1;
      k.KO(1,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"അ",1)) {   // Line 121
      r=m=1;
      k.KO(1,t,"ഐ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ഇ",1)) {   // Line 123
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ഋ",1)) {   // Line 129
      r=m=1;
      k.KO(1,t,"റി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ീ",1)) {   // Line 142
      r=m=1;
      k.KO(1,t,"ീീ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 193
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ൈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)) {   // Line 115
      r=m=1;
      k.KO(0,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(4,t,"ന്ന്",4)) {   // Line 233
      r=m=1;
      k.KO(4,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ജ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(1,t,"ൻ",1)) {   // Line 262
      r=m=1;
      k.KO(1,t,"ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ജ്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"ൻ",1)) {   // Line 261
      r=m=1;
      k.KO(1,t,"ങ്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"ൿ",1)) {   // Line 288
      r=m=1;
      k.KO(1,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൽ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 212
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൢ",1)) {   // Line 238
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 251
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ഌ",1)) {   // Line 138
      r=m=1;
      k.KO(1,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ം",1)) {   // Line 209
      r=m=1;
      k.KO(1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൽ",1)) {   // Line 273
      r=m=1;
      k.KO(1,t,"ല്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൾ",1)) {   // Line 280
      r=m=1;
      k.KO(1,t,"ഌ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൿ",1)) {   // Line 285
      r=m=1;
      k.KO(1,t,"ക്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ൽ");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KA(1,k.KC(1,1,t),this.s_vowels)) {   // Line 38
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KIO(-1,this.s_vowels,2,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 36
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_vowels)) {   // Line 37
      r=m=1;
      k.KIO(1,this.s_vowels,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ം",1)) {   // Line 208
      r=m=1;
      k.KO(1,t,"മ്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൺ",1)) {   // Line 258
      r=m=1;
      k.KO(1,t,"ണ്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൻ",1)) {   // Line 266
      r=m=1;
      k.KO(1,t,"ന്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൽ",1)) {   // Line 275
      r=m=1;
      k.KO(1,t,"ല്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {   // Line 198
      r=m=1;
      k.KO(0,t,"മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 214
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ന്");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KCM(1,t,"ൻ",1)) {   // Line 263
      r=m=1;
      k.KO(1,t,"ന്ന്");
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൊ",1)) {   // Line 186
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 194
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 249
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 60
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 112
      r=m=1;
      k.KO(1,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഊ",1)) {   // Line 125
      r=m=1;
      k.KO(1,t,"ഊഊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഋ",1)) {   // Line 135
      r=m=1;
      k.KO(1,t,"റൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഒ",1)) {   // Line 140
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ൂ",1)) {   // Line 144
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {   // Line 115
      r=m=1;
      k.KO(0,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(4,t,"ല്പ്",4)) {   // Line 226
      r=m=1;
      k.KO(4,t,"ൽപ്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"ം",1)) {   // Line 211
      r=m=1;
      k.KO(1,t,"മ്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"ൽ",1)) {   // Line 276
      r=m=1;
      k.KO(1,t,"ല്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)) {   // Line 198
      r=m=1;
      k.KO(0,t,"പ്");
    }
    else if(k.KKM(e, 0x4000, 0x51)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 332
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x51)) {   // Line 331
      r=m=1;
      k.KO(0,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(4,t,"ന്ര്",4)) {   // Line 65
      r=m=1;
      k.KO(4,t,"ൻറ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 46
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ർ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 210
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(2,t,"സം",2)) {   // Line 217
      r=m=1;
      k.KO(2,t,"സംർ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ർ",1)) {   // Line 64
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 66
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"്",1)) {   // Line 103
      r=m=1;
      k.KO(1,t,"്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ൻ",1)) {   // Line 260
      r=m=1;
      k.KO(1,t,"ന്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ർ",1)) {   // Line 270
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)) {   // Line 45
      r=m=1;
      k.KO(0,t,"ർ");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"സ്");
    }
    else if(k.KKM(e, 0x4000, 0x53)) {   // Line 198
      r=m=1;
      k.KO(0,t,"സ്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 236
      r=m=1;
      k.KO(4,t,"ട്ട്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 334
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"റ്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(1,t,"ൻ",1)) {   // Line 265
      r=m=1;
      k.KO(1,t,"ന്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x54)) {   // Line 333
      r=m=1;
      k.KO(0,t,"റ്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 185
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ു",1)) {   // Line 187
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 245
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 54
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 112
      r=m=1;
      k.KO(1,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"അ",1)) {   // Line 122
      r=m=1;
      k.KO(1,t,"ഔ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഉ",1)) {   // Line 124
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഋ",1)) {   // Line 131
      r=m=1;
      k.KO(1,t,"റു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൂ",1)) {   // Line 143
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൗ",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"ൗൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 196
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)) {   // Line 115
      r=m=1;
      k.KO(0,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൺ",1)) {   // Line 257
      r=m=1;
      k.KO(1,t,"ണ്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൻ",1)) {   // Line 268
      r=m=1;
      k.KO(1,t,"ന്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൽ",1)) {   // Line 277
      r=m=1;
      k.KO(1,t,"ല്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൿ",1)) {   // Line 287
      r=m=1;
      k.KO(1,t,"ക്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)) {   // Line 198
      r=m=1;
      k.KO(0,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x57)) {   // Line 198
      r=m=1;
      k.KO(0,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 336
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ക്ഷ്");
    }
    else if(k.KKM(e, 0x4000, 0x58)) {   // Line 335
      r=m=1;
      k.KO(0,t,"ക്ഷ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 215
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_vowelsigns)&&k.KCM(1,t,"ം",1)) {   // Line 216
      r=m=1;
      k.KIO(2,this.s_vowelsigns,1,t);
      k.KO(-1,t,"മ്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KCM(2,t,"സം",2)) {   // Line 218
      r=m=1;
      k.KO(2,t,"സംയ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 62
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)) {   // Line 198
      r=m=1;
      k.KO(0,t,"യ്");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 199
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ശ്");
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ശ്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 338
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 49
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KCM(1,t,"ഋ",1)) {   // Line 137
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {   // Line 337
      r=m=1;
      k.KO(0,t,"്");
    }
    return r;
  };
}
