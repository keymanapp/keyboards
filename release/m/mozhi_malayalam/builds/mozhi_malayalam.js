
KeymanWeb.KR(new Keyboard_mozhi_malayalam());

function Keyboard_mozhi_malayalam()
{
  
  this.KI="Keyboard_mozhi_malayalam";
  this.KN="Malayalam Mozhi";
  this.KMINVER="9.0";
  this.KV=null;
  this.KH='';
  this.KM=0;
  this.KBVER="2.0.6";
  this.KMBM=0x0010;
  this.KS=1;
  this.s_consonants="കഖഗഘങചഛജഝഞടഠഡഢണതഥദധനപഫബഭമയരലവശഷസഹളഴറ";
  this.s_vowels="അആഇഈഉഊഋൠഌൡഎഏഐഒഓഔ";
  this.s_vowelsigns="ാിീുൂൃൄൢൣെേൈൊോൗ";
  this.s_cDirectSmallKeys="kqQgjdpfbyvwzsh";
  this.s_cDirectSmallValues="കഖഖഗജദപഫബയവവശസഹ";
  this.s_cDirectCapsKeys="DSTF";
  this.s_cDirectCapsValues="ഡശടഫ";
  this.s_vDirectSmallValues="അഎഇഒഉ";
  this.s_vDirectSmallKeys="aeiou";
  this.s_vDirectCapsValues="ആഏഈഓഋഊ";
  this.s_vDirectCapsKeys="AEIORU";
  this.s_chills="ൺൻർൽൾൿ";
  this.s_chillSource="NnrlLc";
  this.s_chillBases="ണനരലളക";
  this.s_chills_anu="ൺൻർൽൾൿം";
  this.s_chill_anu_Bases="ണനരലളകമ";
  this.s_WordFinalChars=" ?.!)]}\"”’";
  this.s_Keystrokes="NnrlLcaeiouAEIORU ?.!)]}\"”’kqQgjdpfbyvwzshDSTF";
  this.s_digits="0123456789";
  this.s_malDigits="൦൧൨൩൪൫൬൭൮൯";
  this.s_thinConsonants="കഗചജടഡതദപബസശ";
  this.s_thickConsonants="ഖഘഛഝഠഢഥധഫഭഷഴ";
  this.s_nonSa="കഖഗഘങചഛജഝഞടഠഡഢണതഥദധനപഫബഭമയരലവശഷഹളഴറ";
  this.s_escapable="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\\>~@.=";
  this.KVER="10.0.1201.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x08)&&k.KCM(5,t,"ന്‍റ്",5)) {   // Line 440
      r=m=1;
      k.KO(5,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ന്ന്",4)) {   // Line 434
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ൻ്റ്",4)) {   // Line 436
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ന്റ്",4)) {   // Line 438
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ന്‍റ",4)) {   // Line 441
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ഞ്ച്",4)) {   // Line 442
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ന്മ്",4)) {   // Line 444
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ങ്ക്",4)) {   // Line 446
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ണ്ട്",4)) {   // Line 448
      r=m=1;
      k.KO(4,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ണ്ഡ്",4)) {   // Line 450
      r=m=1;
      k.KO(4,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ണ്ഠ്",4)) {   // Line 452
      r=m=1;
      k.KO(4,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"മ്പ്",4)) {   // Line 454
      r=m=1;
      k.KO(4,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"മ്മ്",4)) {   // Line 456
      r=m=1;
      k.KO(4,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ഞ്ഞ്",4)) {   // Line 458
      r=m=1;
      k.KO(4,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"ത്ത്",4)) {   // Line 460
      r=m=1;
      k.KO(4,t,"ത്");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 465
      r=m=1;
      k.KO(4,t,"");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ന്ന",3)) {   // Line 435
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ൻ്റ",3)) {   // Line 437
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ന്റ",3)) {   // Line 439
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ഞ്ച",3)) {   // Line 443
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ന്മ",3)) {   // Line 445
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ങ്ക",3)) {   // Line 447
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ണ്ട",3)) {   // Line 449
      r=m=1;
      k.KO(3,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ണ്ഡ",3)) {   // Line 451
      r=m=1;
      k.KO(3,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ണ്ഠ",3)) {   // Line 453
      r=m=1;
      k.KO(3,t,"ൺ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"മ്പ",3)) {   // Line 455
      r=m=1;
      k.KO(3,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"മ്മ",3)) {   // Line 457
      r=m=1;
      k.KO(3,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ഞ്ഞ",3)) {   // Line 459
      r=m=1;
      k.KO(3,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"ത്ത",3)) {   // Line 461
      r=m=1;
      k.KO(3,t,"ത്");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(3,t,"റ്റ",3)) {   // Line 466
      r=m=1;
      k.KO(3,t,"");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(1,t,"ൢ",1)) {   // Line 463
      r=m=1;
      k.KO(1,t,"്");
    }
    else if(k.KKM(e, 0x4000, 0x08)&&k.KCM(1,t,"ൣ",1)) {   // Line 464
      r=m=1;
      k.KO(1,t,"്");
    }
    else if(k.KKM(e, 0x4000, 0x20)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t," ");
    }
    else if(k.KKM(e, 0x4010, 0x31)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"!");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"\"");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"“",1)) {   // Line 487
      r=m=1;
      k.KO(1,t,"”");
    }
    else if(k.KKM(e, 0x4010, 0xDE)&&k.KCM(1,t,"”",1)) {   // Line 488
      r=m=1;
      k.KO(1,t,"\"");
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {   // Line 486
      r=m=1;
      k.KO(0,t,"“");
    }
    else if(k.KKM(e, 0x4010, 0x33)&&k.KCM(1,t,"ർ",1)) {   // Line 322
      r=m=1;
      k.KO(1,t,"ൎ");
    }
    else if(k.KKM(e, 0x4010, 0x34)) {   // Line 132
      r=m=1;
      k.KO(0,t,"₹");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"‌",1)) {   // Line 158
      r=m=1;
      k.KO(1,t,"'");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"‘",1)) {   // Line 482
      r=m=1;
      k.KO(1,t,"’");
    }
    else if(k.KKM(e, 0x4000, 0xDE)&&k.KCM(1,t,"’",1)) {   // Line 483
      r=m=1;
      k.KO(1,t,"'");
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {   // Line 481
      r=m=1;
      k.KO(0,t,"‘");
    }
    else if(k.KKM(e, 0x4010, 0x39)&&k.KCM(1,t,":",1)) {   // Line 475
      r=m=1;
      k.KO(1,t,"☹");
    }
    else if(k.KKM(e, 0x4010, 0x30)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,")");
    }
    else if(k.KKM(e, 0x4010, 0x30)&&k.KCM(1,t,":",1)) {   // Line 474
      r=m=1;
      k.KO(1,t,"😊");
    }
    else if(k.KKM(e, 0x4010, 0x38)&&k.KCM(1,t,"\\",1)) {   // Line 472
      r=m=1;
      k.KO(1,t,"×");
    }
    else if(k.KKM(e, 0x4010, 0xBB)&&k.KCM(1,t,"‍",1)&&k.KDM(0,t,0)) {   // Line 66
      r=m=1;
      k.KO(1,t,"+");
    }
    else if(k.KKM(e, 0x4010, 0xBB)) {   // Line 65
      r=m=1;
      k.KO(0,t,"‍");
      k.KDO(-1,t,0);
    }
    else if(k.KKM(e, 0x4000, 0xBD)&&k.KCM(1,t,"\\",1)) {   // Line 471
      r=m=1;
      k.KO(1,t,"−");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,".");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,".");
    }
    else if(k.KKM(e, 0x4000, 0xBE)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,".");
    }
    else if(k.KKM(e, 0x4000, 0xBF)&&k.KCM(1,t,"\\",1)) {   // Line 473
      r=m=1;
      k.KO(1,t,"÷");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൦");
    }
    else if(k.KKM(e, 0x4000, 0x30)&&k.KCM(1,t,"\\",1)) {   // Line 344
      r=m=1;
      k.KO(1,t,"൦");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0x31)&&k.KCM(1,t,"\\",1)) {   // Line 345
      r=m=1;
      k.KO(1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൨");
    }
    else if(k.KKM(e, 0x4000, 0x32)&&k.KCM(1,t,"\\",1)) {   // Line 346
      r=m=1;
      k.KO(1,t,"൨");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൩");
    }
    else if(k.KKM(e, 0x4000, 0x33)&&k.KCM(1,t,"\\",1)) {   // Line 347
      r=m=1;
      k.KO(1,t,"൩");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൪");
    }
    else if(k.KKM(e, 0x4000, 0x34)&&k.KCM(1,t,"\\",1)) {   // Line 348
      r=m=1;
      k.KO(1,t,"൪");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൫");
    }
    else if(k.KKM(e, 0x4000, 0x35)&&k.KCM(1,t,"\\",1)) {   // Line 349
      r=m=1;
      k.KO(1,t,"൫");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൬");
    }
    else if(k.KKM(e, 0x4000, 0x36)&&k.KCM(1,t,"\\",1)) {   // Line 350
      r=m=1;
      k.KO(1,t,"൬");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൭");
    }
    else if(k.KKM(e, 0x4000, 0x37)&&k.KCM(1,t,"\\",1)) {   // Line 351
      r=m=1;
      k.KO(1,t,"൭");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൮");
    }
    else if(k.KKM(e, 0x4000, 0x38)&&k.KCM(1,t,"\\",1)) {   // Line 352
      r=m=1;
      k.KO(1,t,"൮");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KA(0,k.KC(1,1,t),this.s_malDigits)) {   // Line 52
      r=m=1;
      k.KIO(1,this.s_malDigits,1,t);
      k.KO(-1,t,"൯");
    }
    else if(k.KKM(e, 0x4000, 0x39)&&k.KCM(1,t,"\\",1)) {   // Line 353
      r=m=1;
      k.KO(1,t,"൯");
    }
    else if(k.KKM(e, 0x4000, 0xBB)&&k.KDM(0,t,6)) {   // Line 272
      r=m=1;
      k.KO(0,t,"=");
    }
    else if(k.KKM(e, 0x4000, 0xBB)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"=");
    }
    else if(k.KKM(e, 0x4000, 0xBB)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"=");
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {   // Line 271
      r=m=1;
      k.KDO(0,t,6);
    }
    else if(k.KKM(e, 0x4010, 0xBE)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,">");
    }
    else if(k.KKM(e, 0x4010, 0xBE)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,">");
    }
    else if(k.KKM(e, 0x4010, 0xBF)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"?");
    }
    else if(k.KKM(e, 0x4010, 0x32)&&k.KCM(1,t,"ൻ",1)) {   // Line 127
      r=m=1;
      k.KDO(-1,t,4);
    }
    else if(k.KKM(e, 0x4010, 0x32)&&k.KCM(1,t,"ൾ",1)) {   // Line 129
      r=m=1;
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4010, 0x32)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"@");
    }
    else if(k.KKM(e, 0x4010, 0x32)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"@");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 232
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 292
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 96
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"ഋ",1)) {   // Line 170
      r=m=1;
      k.KO(1,t,"റാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KCM(1,t,"്",1)) {   // Line 195
      r=m=1;
      k.KO(1,t,"ാ");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"A");
    }
    else if(k.KKM(e, 0x4010, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"A");
    }
    else if(k.KKM(e, 0x4010, 0x41)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ആ");
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"B");
    }
    else if(k.KKM(e, 0x4010, 0x42)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"B");
    }
    else if(k.KKM(e, 0x4010, 0x42)) {   // Line 355
      r=m=1;
      k.KO(0,t,"ബ്ബ്");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"C");
    }
    else if(k.KKM(e, 0x4010, 0x43)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"C");
    }
    else if(k.KKM(e, 0x4010, 0x43)) {   // Line 356
      r=m=1;
      k.KO(0,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"D");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"D");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KCM(1,t,"ൺ",1)) {   // Line 306
      r=m=1;
      k.KO(1,t,"ണ്ഡ്");
    }
    else if(k.KKM(e, 0x4010, 0x44)&&k.KCM(1,t,":",1)) {   // Line 476
      r=m=1;
      k.KO(1,t,"😄");
    }
    else if(k.KKM(e, 0x4010, 0x44)) {   // Line 220
      r=m=1;
      k.KO(0,t,"ഡ്");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 245
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 298
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രേ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 103
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 104
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"ഋ",1)) {   // Line 176
      r=m=1;
      k.KO(1,t,"റേ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"്",1)) {   // Line 209
      r=m=1;
      k.KO(1,t,"േ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"E");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"E");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"ീ",1)) {   // Line 408
      r=m=1;
      k.KO(1,t,"ീീ");
    }
    else if(k.KKM(e, 0x4010, 0x45)&&k.KCM(1,t,"േ",1)) {   // Line 414
      r=m=1;
      k.KO(1,t,"ീീ");
    }
    else if(k.KKM(e, 0x4010, 0x45)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ഏ");
    }
    else if(k.KKM(e, 0x4010, 0x46)&&k.KCM(1,t,"്",1)) {   // Line 77
      r=m=1;
      k.KO(1,t,"़്");
    }
    else if(k.KKM(e, 0x4010, 0x46)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"F");
    }
    else if(k.KKM(e, 0x4010, 0x46)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"F");
    }
    else if(k.KKM(e, 0x4010, 0x46)) {   // Line 220
      r=m=1;
      k.KO(0,t,"ഫ്");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"G");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"G");
    }
    else if(k.KKM(e, 0x4010, 0x47)&&k.KCM(1,t,"ൺ",1)) {   // Line 377
      r=m=1;
      k.KO(1,t,"ങ്ങ്");
    }
    else if(k.KKM(e, 0x4010, 0x47)) {   // Line 357
      r=m=1;
      k.KO(0,t,"ഗ്ഗ്");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KCM(2,t,"ട്",2)) {   // Line 376
      r=m=1;
      k.KO(2,t,"ത്ത്");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"H");
    }
    else if(k.KKM(e, 0x4010, 0x48)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"H");
    }
    else if(k.KKM(e, 0x4010, 0x48)) {   // Line 358
      r=m=1;
      k.KO(0,t,"ഃ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 236
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 294
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 98
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"ഋ",1)) {   // Line 172
      r=m=1;
      k.KO(1,t,"റീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KCM(1,t,"്",1)) {   // Line 201
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"I");
    }
    else if(k.KKM(e, 0x4010, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"I");
    }
    else if(k.KKM(e, 0x4010, 0x49)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ഈ");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"J");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"J");
    }
    else if(k.KKM(e, 0x4010, 0x4A)&&k.KCM(1,t,"ൺ",1)) {   // Line 378
      r=m=1;
      k.KO(1,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {   // Line 359
      r=m=1;
      k.KO(0,t,"ജ്ജ്");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"K");
    }
    else if(k.KKM(e, 0x4010, 0x4B)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"K");
    }
    else if(k.KKM(e, 0x4010, 0x4B)) {   // Line 360
      r=m=1;
      k.KO(0,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൾ");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 262
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 302
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ള്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"L");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"L");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൻ",1)) {   // Line 318
      r=m=1;
      k.KO(1,t,"ന്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൽ",1)) {   // Line 325
      r=m=1;
      k.KO(1,t,"ല്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൾ",1)) {   // Line 330
      r=m=1;
      k.KO(1,t,"ള്ള്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)&&k.KCM(1,t,"ൿ",1)) {   // Line 337
      r=m=1;
      k.KO(1,t,"ക്ല്");
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ൾ");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"M");
    }
    else if(k.KKM(e, 0x4010, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"M");
    }
    else if(k.KKM(e, 0x4010, 0x4D)) {   // Line 361
      r=m=1;
      k.KO(0,t,"മ്മ്");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൺ");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"N");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"N");
    }
    else if(k.KKM(e, 0x4010, 0x4E)&&k.KCM(1,t,"ൺ",1)) {   // Line 304
      r=m=1;
      k.KO(1,t,"ണ്ണ്");
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ൺ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 248
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 300
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 106
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ഋ",1)) {   // Line 178
      r=m=1;
      k.KO(1,t,"റോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"്",1)) {   // Line 212
      r=m=1;
      k.KO(1,t,"ോ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"O");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"O");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ഓ",1)) {   // Line 400
      r=m=1;
      k.KO(1,t,"ഓാ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ാ",1)) {   // Line 401
      r=m=1;
      k.KO(1,t,"ാാ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ൂ",1)) {   // Line 412
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)&&k.KCM(1,t,"ോ",1)) {   // Line 415
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ഓ");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"P");
    }
    else if(k.KKM(e, 0x4010, 0x50)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"P");
    }
    else if(k.KKM(e, 0x4010, 0x50)) {   // Line 362
      r=m=1;
      k.KO(0,t,"പ്പ്");
    }
    else if(k.KKM(e, 0x4010, 0x51)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"Q");
    }
    else if(k.KKM(e, 0x4010, 0x51)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"Q");
    }
    else if(k.KKM(e, 0x4010, 0x51)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ഖ്");
    }
    else if(k.KKM(e, 0x4010, 0x51)) {   // Line 363
      r=m=1;
      k.KO(0,t,"ക്യു");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 242
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 243
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 101
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 108
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ഋ",1)) {   // Line 168
      r=m=1;
      k.KO(1,t,"ൠ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"്",1)) {   // Line 206
      r=m=1;
      k.KO(1,t,"ൃ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ൃ",1)) {   // Line 207
      r=m=1;
      k.KO(1,t,"ൄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"R");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"R");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_vowels)) {   // Line 288
      r=m=1;
      k.KO(-1,t,"ർ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_vowelsigns)) {   // Line 289
      r=m=1;
      k.KO(-1,t,"ർ");
    }
    else if(k.KKM(e, 0x4010, 0x52)&&k.KCM(1,t,"ൄ",1)) {   // Line 413
      r=m=1;
      k.KO(1,t,"ൄൄ");
    }
    else if(k.KKM(e, 0x4010, 0x52)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ഋ");
    }
    else if(k.KKM(e, 0x4010, 0x53)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"S");
    }
    else if(k.KKM(e, 0x4010, 0x53)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"S");
    }
    else if(k.KKM(e, 0x4010, 0x53)) {   // Line 220
      r=m=1;
      k.KO(0,t,"ശ്");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 380
      r=m=1;
      k.KO(4,t,"ട്ട്");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"T");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"T");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(1,t,"ൺ",1)) {   // Line 305
      r=m=1;
      k.KO(1,t,"ണ്ട്");
    }
    else if(k.KKM(e, 0x4010, 0x54)&&k.KCM(1,t,"ൻ",1)) {   // Line 381
      r=m=1;
      k.KO(1,t,"ണ്ട്");
    }
    else if(k.KKM(e, 0x4010, 0x54)) {   // Line 220
      r=m=1;
      k.KO(0,t,"ട്");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 241
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 296
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 100
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 149
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 154
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"ഋ",1)) {   // Line 174
      r=m=1;
      k.KO(1,t,"റൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KCM(1,t,"്",1)) {   // Line 204
      r=m=1;
      k.KO(1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"U");
    }
    else if(k.KKM(e, 0x4010, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"U");
    }
    else if(k.KKM(e, 0x4010, 0x55)) {   // Line 153
      r=m=1;
      k.KO(0,t,"ഊ");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"V");
    }
    else if(k.KKM(e, 0x4010, 0x56)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"V");
    }
    else if(k.KKM(e, 0x4010, 0x56)) {   // Line 364
      r=m=1;
      k.KO(0,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"W");
    }
    else if(k.KKM(e, 0x4010, 0x57)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"W");
    }
    else if(k.KKM(e, 0x4010, 0x57)) {   // Line 365
      r=m=1;
      k.KO(0,t,"വ്വ്");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"X");
    }
    else if(k.KKM(e, 0x4010, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"X");
    }
    else if(k.KKM(e, 0x4010, 0x58)) {   // Line 366
      r=m=1;
      k.KO(0,t,"ക്സ്");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"Y");
    }
    else if(k.KKM(e, 0x4010, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"Y");
    }
    else if(k.KKM(e, 0x4010, 0x59)) {   // Line 367
      r=m=1;
      k.KO(0,t,"യ്യ്");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"Z");
    }
    else if(k.KKM(e, 0x4010, 0x5A)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"Z");
    }
    else if(k.KKM(e, 0x4010, 0x5A)) {   // Line 368
      r=m=1;
      k.KO(0,t,"ഴ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(5,t,"്ള്ള്",5)) {   // Line 140
      r=m=1;
      k.KO(5,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"1000",4)) {   // Line 56
      r=m=1;
      k.KO(4,t,"൲");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"1/16",4)) {   // Line 60
      r=m=1;
      k.KO(4,t,"൶");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"3/16",4)) {   // Line 62
      r=m=1;
      k.KO(4,t,"൸");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 120
      r=m=1;
      k.KO(4,t,"ഺ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(4,t,"ള്ള്",4)) {   // Line 138
      r=m=1;
      k.KO(4,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KA(0,k.KC(4,1,t),this.s_consonants)&&k.KCM(3,t,"്ല്",3)) {   // Line 145
      r=m=1;
      k.KIO(4,this.s_consonants,1,t);
      k.KO(-1,t,"ൢ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"100",3)) {   // Line 55
      r=m=1;
      k.KO(3,t,"൱");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/4",3)) {   // Line 57
      r=m=1;
      k.KO(3,t,"൳");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/2",3)) {   // Line 58
      r=m=1;
      k.KO(3,t,"൴");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"3/4",3)) {   // Line 59
      r=m=1;
      k.KO(3,t,"൵");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"1/8",3)) {   // Line 61
      r=m=1;
      k.KO(3,t,"൷");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"റ്റ",3)) {   // Line 121
      r=m=1;
      k.KO(3,t,"ഺ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"്ള്",3)) {   // Line 137
      r=m=1;
      k.KO(3,t,"ൢ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(3,t,"---",3)) {   // Line 469
      r=m=1;
      k.KO(3,t,"—");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"10",2)) {   // Line 54
      r=m=1;
      k.KO(2,t,"൰");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"..",2)) {   // Line 115
      r=m=1;
      k.KO(2,t,"॥");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"ക്",2)) {   // Line 119
      r=m=1;
      k.KO(2,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"നു",2)) {   // Line 130
      r=m=1;
      k.KO(2,t,"൹");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"പറ",2)) {   // Line 135
      r=m=1;
      k.KO(2,t,"൏");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(2,t,"--",2)) {   // Line 470
      r=m=1;
      k.KO(2,t,"–");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"1",1)) {   // Line 53
      r=m=1;
      k.KO(1,t,"൧");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,".",1)) {   // Line 114
      r=m=1;
      k.KO(1,t,"।");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"അ",1)) {   // Line 116
      r=m=1;
      k.KO(1,t,"ഽ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഈ",1)) {   // Line 117
      r=m=1;
      k.KO(1,t,"ൟ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ീ",1)) {   // Line 118
      r=m=1;
      k.KO(1,t,"ൟ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൻ",1)) {   // Line 122
      r=m=1;
      k.KO(1,t,"ഩ്");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ന",1)) {   // Line 123
      r=m=1;
      k.KO(1,t,"ഩ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ം",1)) {   // Line 124
      r=m=1;
      k.KO(1,t,"ൔ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൔ",1)) {   // Line 125
      r=m=1;
      k.KO(1,t,"ഀ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഀ",1)) {   // Line 126
      r=m=1;
      k.KO(1,t,"ഁ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ർ",1)) {   // Line 131
      r=m=1;
      k.KO(1,t,"ൎ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"₹",1)) {   // Line 133
      r=m=1;
      k.KO(1,t,"₨");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"₨",1)) {   // Line 134
      r=m=1;
      k.KO(1,t,"$");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൾ",1)) {   // Line 136
      r=m=1;
      k.KO(1,t,"ഌ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ഌ",1)) {   // Line 139
      r=m=1;
      k.KO(1,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൢ",1)) {   // Line 141
      r=m=1;
      k.KO(1,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"ൗ",1)) {   // Line 142
      r=m=1;
      k.KO(1,t,"ൌ");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"്",1)) {   // Line 143
      r=m=1;
      k.KO(1,t,"഼");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KCM(1,t,"഼",1)) {   // Line 144
      r=m=1;
      k.KO(1,t,"഻");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"\\");
    }
    else if(k.KKM(e, 0x4000, 0xDC)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"\\");
    }
    else if(k.KKM(e, 0x4000, 0xDD)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"]");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(4,t,"ൻ്റ്",4)) {   // Line 426
      r=m=1;
      k.KO(4,t,"ന്റ്");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(4,t,"ന്റ്",4)) {   // Line 427
      r=m=1;
      k.KO(4,t,"ന്‍റ്");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(4,t,"ൻ്റ",3)&&k.KA(3,k.KC(1,1,t),this.s_vowelsigns)) {   // Line 430
      r=m=1;
      k.KO(4,t,"ന്റ");
      k.KIO(-1,this.s_vowelsigns,4,t);
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(4,t,"ന്റ",3)&&k.KA(3,k.KC(1,1,t),this.s_vowelsigns)) {   // Line 431
      r=m=1;
      k.KO(4,t,"ന്‍റ");
      k.KIO(-1,this.s_vowelsigns,4,t);
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KA(0,k.KC(3,1,t),this.s_chillBases)&&k.KCM(2,t,"്‍",2)) {   // Line 90
      r=m=1;
      k.KIO(3,this.s_chills,1,t);
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(3,t,"ൻ്റ",3)) {   // Line 428
      r=m=1;
      k.KO(3,t,"ന്റ");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KCM(3,t,"ന്റ",3)) {   // Line 429
      r=m=1;
      k.KO(3,t,"ന്‍റ");
    }
    else if(k.KKM(e, 0x4010, 0x36)&&k.KA(0,k.KC(1,1,t),this.s_chills)) {   // Line 89
      r=m=1;
      k.KIO(1,this.s_chillBases,1,t);
      k.KO(-1,t,"്‍");
    }
    else if(k.KKM(e, 0x4010, 0xBD)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 93
      r=m=1;
      k.KIO(1,this.s_chills_anu,1,t);
      k.KDO(-1,t,3);
    }
    else if(k.KKM(e, 0x4010, 0xBD)&&k.KCM(1,t,"്",1)) {   // Line 419
      r=m=1;
      k.KO(1,t,"്‌");
    }
    else if(k.KKM(e, 0x4010, 0xBD)&&k.KCM(1,t,"‌",1)) {   // Line 421
      r=m=1;
    }
    else if(k.KKM(e, 0x4010, 0xBD)&&k.KCM(1,t,"‍",1)) {   // Line 422
      r=m=1;
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 231
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 291
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ര");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 95
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"‌",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"അ",1)) {   // Line 161
      r=m=1;
      k.KO(1,t,"ആ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ഋ",1)) {   // Line 169
      r=m=1;
      k.KO(1,t,"റ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"എ",1)) {   // Line 181
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"െ",1)) {   // Line 188
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"്",1)) {   // Line 196
      r=m=1;
      k.KDO(1,t,5);
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,5)) {   // Line 197
      r=m=1;
      k.KO(0,t,"ാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 233
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"a");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"a");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ആ",1)) {   // Line 395
      r=m=1;
      k.KO(1,t,"ആാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)&&k.KCM(1,t,"ാ",1)) {   // Line 406
      r=m=1;
      k.KO(1,t,"ാാ");
    }
    else if(k.KKM(e, 0x4000, 0x41)) {   // Line 151
      r=m=1;
      k.KO(0,t,"അ");
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"b");
    }
    else if(k.KKM(e, 0x4000, 0x42)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"b");
    }
    else if(k.KKM(e, 0x4000, 0x42)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ബ്");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"c");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"c");
    }
    else if(k.KKM(e, 0x4000, 0x43)&&k.KCM(1,t,"ൿ",1)) {   // Line 340
      r=m=1;
      k.KO(1,t,"ക്ക്");
      k.KDO(-1,t,7);
    }
    else if(k.KKM(e, 0x4000, 0x43)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ൿ");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"d");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"d");
    }
    else if(k.KKM(e, 0x4000, 0x44)&&k.KCM(1,t,"ൻ",1)) {   // Line 315
      r=m=1;
      k.KO(1,t,"ന്ദ്");
    }
    else if(k.KKM(e, 0x4000, 0x44)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ദ്");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"െ",1)) {   // Line 237
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 244
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 297
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രെ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 102
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,4)) {   // Line 128
      r=m=1;
      k.KO(0,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"‌",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ഇ",1)) {   // Line 164
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ഋ",1)) {   // Line 175
      r=m=1;
      k.KO(1,t,"റെ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"എ",1)) {   // Line 182
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ി",1)) {   // Line 186
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"െ",1)) {   // Line 189
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"്",1)) {   // Line 208
      r=m=1;
      k.KO(1,t,"െ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"െ",1)) {   // Line 210
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"e");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"e");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ഈ",1)) {   // Line 397
      r=m=1;
      k.KO(1,t,"ഈൗ");
    }
    else if(k.KKM(e, 0x4000, 0x45)&&k.KCM(1,t,"ീ",1)) {   // Line 407
      r=m=1;
      k.KO(1,t,"ീീ");
    }
    else if(k.KKM(e, 0x4000, 0x45)) {   // Line 151
      r=m=1;
      k.KO(0,t,"എ");
    }
    else if(k.KKM(e, 0x4000, 0x46)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"f");
    }
    else if(k.KKM(e, 0x4000, 0x46)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"f");
    }
    else if(k.KKM(e, 0x4000, 0x46)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ഫ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(4,t,"ന്ന്",4)) {   // Line 384
      r=m=1;
      k.KO(4,t,"ങ്ങ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KCM(1,t,"ൻ",1)) {   // Line 254
      r=m=1;
      k.KO(1,t,"ങ്");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"g");
    }
    else if(k.KKM(e, 0x4000, 0x47)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"g");
    }
    else if(k.KKM(e, 0x4000, 0x47)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ഗ്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ക്ക്",4)&&k.KDM(0,t,7)) {   // Line 341
      r=m=1;
      k.KO(4,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(5,t,"ന്‍റ്",5)) {   // Line 389
      r=m=1;
      k.KO(5,t,"ന്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ക്ക്",4)&&k.KDM(0,t,8)) {   // Line 391
      r=m=1;
      k.KO(4,t,"ച്ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ട്ട്",4)) {   // Line 375
      r=m=1;
      k.KO(4,t,"ത്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 385
      r=m=1;
      k.KO(4,t,"ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ൻ്റ്",4)) {   // Line 387
      r=m=1;
      k.KO(4,t,"ന്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(4,t,"ന്റ്",4)) {   // Line 388
      r=m=1;
      k.KO(4,t,"ന്ത്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KA(0,k.KC(2,1,t),this.s_thinConsonants)&&k.KCM(1,t,"്",1)) {   // Line 229
      r=m=1;
      k.KIO(2,this.s_thickConsonants,1,t);
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(2,t,"ൻൿ",2)) {   // Line 390
      r=m=1;
      k.KO(2,t,"ഞ്ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KCM(1,t,"ൿ",1)) {   // Line 255
      r=m=1;
      k.KO(1,t,"ച്");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"h");
    }
    else if(k.KKM(e, 0x4000, 0x48)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"h");
    }
    else if(k.KKM(e, 0x4000, 0x48)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ഹ്");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 234
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ി",1)) {   // Line 235
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 293
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 97
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"‌",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"അ",1)) {   // Line 162
      r=m=1;
      k.KO(1,t,"ഐ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ഇ",1)) {   // Line 165
      r=m=1;
      k.KO(1,t,"ഈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ഋ",1)) {   // Line 171
      r=m=1;
      k.KO(1,t,"റി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"എ",1)) {   // Line 183
      r=m=1;
      k.KO(1,t,"ഐ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ി",1)) {   // Line 187
      r=m=1;
      k.KO(1,t,"ൈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,5)) {   // Line 198
      r=m=1;
      k.KO(0,t,"ൈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"്",1)) {   // Line 200
      r=m=1;
      k.KO(1,t,"ി");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ി",1)) {   // Line 202
      r=m=1;
      k.KO(1,t,"ീ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 246
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ൈ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"i");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"i");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ഈ",1)) {   // Line 396
      r=m=1;
      k.KO(1,t,"ഈൗ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ൗ",1)) {   // Line 399
      r=m=1;
      k.KO(1,t,"ൗൗ");
    }
    else if(k.KKM(e, 0x4000, 0x49)&&k.KCM(1,t,"ീ",1)) {   // Line 409
      r=m=1;
      k.KO(1,t,"ീീ");
    }
    else if(k.KKM(e, 0x4000, 0x49)) {   // Line 151
      r=m=1;
      k.KO(0,t,"ഇ");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(4,t,"ന്ന്",4)) {   // Line 383
      r=m=1;
      k.KO(4,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൻ",1)) {   // Line 283
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(2,1,t),this.s_vowels)&&k.KCM(1,t,"ൻ",1)) {   // Line 284
      r=m=1;
      k.KIO(2,this.s_vowels,1,t);
      k.KO(-1,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(2,1,t),this.s_vowelsigns)&&k.KCM(1,t,"ൻ",1)) {   // Line 285
      r=m=1;
      k.KIO(2,this.s_vowelsigns,1,t);
      k.KO(-1,t,"ഞ്ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"j");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"j");
    }
    else if(k.KKM(e, 0x4000, 0x4A)&&k.KCM(1,t,"ൻ",1)) {   // Line 313
      r=m=1;
      k.KO(1,t,"ഞ്");
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ജ്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"k");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"k");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"ൻ",1)) {   // Line 312
      r=m=1;
      k.KO(1,t,"ങ്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)&&k.KCM(1,t,"ൿ",1)) {   // Line 339
      r=m=1;
      k.KO(1,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ക്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൽ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 261
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൢ",1)) {   // Line 280
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൣ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 301
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ഌ",1)) {   // Line 180
      r=m=1;
      k.KO(1,t,"ൡ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ം",1)) {   // Line 258
      r=m=1;
      k.KO(1,t,"മ്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"l");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"l");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൽ",1)) {   // Line 324
      r=m=1;
      k.KO(1,t,"ല്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൾ",1)) {   // Line 331
      r=m=1;
      k.KO(1,t,"ഌ");
    }
    else if(k.KKM(e, 0x4000, 0x4C)&&k.KCM(1,t,"ൿ",1)) {   // Line 336
      r=m=1;
      k.KO(1,t,"ക്ല്");
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ൽ");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KA(1,k.KC(1,1,t),this.s_vowels)) {   // Line 82
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KIO(-1,this.s_vowels,2,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 79
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_vowels)) {   // Line 80
      r=m=1;
      k.KIO(1,this.s_vowels,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_vowelsigns)) {   // Line 81
      r=m=1;
      k.KIO(1,this.s_vowelsigns,1,t);
      k.KO(-1,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ം",1)) {   // Line 257
      r=m=1;
      k.KO(1,t,"മ്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"m");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"m");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൺ",1)) {   // Line 308
      r=m=1;
      k.KO(1,t,"ണ്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൻ",1)) {   // Line 317
      r=m=1;
      k.KO(1,t,"ന്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"ൽ",1)) {   // Line 326
      r=m=1;
      k.KO(1,t,"ല്മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)&&k.KCM(1,t,"_",1)) {   // Line 423
      r=m=1;
      k.KO(1,t,"മ്");
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {   // Line 73
      r=m=1;
      k.KO(0,t,"ം");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 263
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്ന്");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"n");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"n");
    }
    else if(k.KKM(e, 0x4000, 0x4E)&&k.KCM(1,t,"ൻ",1)) {   // Line 314
      r=m=1;
      k.KO(1,t,"ന്ന്");
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ൻ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൊ",1)) {   // Line 239
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 247
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 299
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 105
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"‌",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഊ",1)) {   // Line 167
      r=m=1;
      k.KO(1,t,"ഊൗ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഋ",1)) {   // Line 177
      r=m=1;
      k.KO(1,t,"റൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഒ",1)) {   // Line 184
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ൊ",1)) {   // Line 190
      r=m=1;
      k.KO(1,t,"ോ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"്",1)) {   // Line 211
      r=m=1;
      k.KO(1,t,"ൊ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"്",1)) {   // Line 213
      r=m=1;
      k.KO(1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"o");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"o");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ഊ",1)) {   // Line 398
      r=m=1;
      k.KO(1,t,"ഊൗ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ൗ",1)) {   // Line 402
      r=m=1;
      k.KO(1,t,"ൗൗ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)&&k.KCM(1,t,"ൂ",1)) {   // Line 411
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {   // Line 151
      r=m=1;
      k.KO(0,t,"ഒ");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(4,t,"ല്പ്",4)) {   // Line 392
      r=m=1;
      k.KO(4,t,"ൽപ്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"ം",1)) {   // Line 260
      r=m=1;
      k.KO(1,t,"മ്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"p");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"p");
    }
    else if(k.KKM(e, 0x4000, 0x50)&&k.KCM(1,t,"ൽ",1)) {   // Line 327
      r=m=1;
      k.KO(1,t,"ല്പ്");
    }
    else if(k.KKM(e, 0x4000, 0x50)) {   // Line 219
      r=m=1;
      k.KO(0,t,"പ്");
    }
    else if(k.KKM(e, 0x4000, 0x51)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"q");
    }
    else if(k.KKM(e, 0x4000, 0x51)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"q");
    }
    else if(k.KKM(e, 0x4000, 0x51)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ഖ്");
    }
    else if(k.KKM(e, 0x4000, 0x51)) {   // Line 369
      r=m=1;
      k.KO(0,t,"ക്ക്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(4,t,"ന്ര്",4)) {   // Line 110
      r=m=1;
      k.KO(4,t,"ൻറ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(4,t,"ന്ര്",4)) {   // Line 311
      r=m=1;
      k.KO(4,t,"ന്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_chills)&&k.KCM(1,t,"‌",1)) {   // Line 86
      r=m=1;
      k.KIO(2,this.s_chills,1,t);
      k.KO(-1,t,"ർ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 250
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(2,1,t),this.s_vowelsigns)&&k.KCM(1,t,"ം",1)) {   // Line 266
      r=m=1;
      k.KIO(2,this.s_vowelsigns,1,t);
      k.KO(-1,t,"മ്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(2,t,"സം",2)) {   // Line 267
      r=m=1;
      k.KO(2,t,"സംർ");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ർ",1)) {   // Line 109
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 111
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"r");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"r");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ൻ",1)) {   // Line 310
      r=m=1;
      k.KO(1,t,"ന്ര്");
    }
    else if(k.KKM(e, 0x4000, 0x52)&&k.KCM(1,t,"ർ",1)) {   // Line 321
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4000, 0x52)) {   // Line 85
      r=m=1;
      k.KO(0,t,"ർ");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"s");
    }
    else if(k.KKM(e, 0x4000, 0x53)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"s");
    }
    else if(k.KKM(e, 0x4000, 0x53)) {   // Line 219
      r=m=1;
      k.KO(0,t,"സ്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(4,t,"റ്റ്",4)) {   // Line 386
      r=m=1;
      k.KO(4,t,"ട്ട്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(2,t,"ട്",2)) {   // Line 379
      r=m=1;
      k.KO(2,t,"ട്ട്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"t");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"t");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(1,t,"ൻ",1)) {   // Line 316
      r=m=1;
      k.KO(1,t,"ൻ്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x54)&&k.KCM(1,t,"ൺ",1)) {   // Line 382
      r=m=1;
      k.KO(1,t,"ണ്ട്");
    }
    else if(k.KKM(e, 0x4000, 0x54)) {   // Line 370
      r=m=1;
      k.KO(0,t,"റ്റ്");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"്",1)) {   // Line 238
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ു",1)) {   // Line 240
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(2,1,t),this.s_consonants)&&k.KCM(1,t,"ൃ",1)) {   // Line 295
      r=m=1;
      k.KIO(2,this.s_consonants,1,t);
      k.KO(-1,t,"്രു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 99
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 148
      r=m=1;
      k.KO(1,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"‌",1)) {   // Line 152
      r=m=1;
      k.KO(1,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"അ",1)) {   // Line 163
      r=m=1;
      k.KO(1,t,"ഔ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഉ",1)) {   // Line 166
      r=m=1;
      k.KO(1,t,"ഊ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഋ",1)) {   // Line 173
      r=m=1;
      k.KO(1,t,"റു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഒ",1)) {   // Line 185
      r=m=1;
      k.KO(1,t,"ഔ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൊ",1)) {   // Line 191
      r=m=1;
      k.KO(1,t,"ൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,5)) {   // Line 199
      r=m=1;
      k.KO(0,t,"ൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"്",1)) {   // Line 203
      r=m=1;
      k.KO(1,t,"ു");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ു",1)) {   // Line 205
      r=m=1;
      k.KO(1,t,"ൂ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_consonants)) {   // Line 249
      r=m=1;
      k.KIO(1,this.s_consonants,1,t);
      k.KO(-1,t,"ൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"u");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"u");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഊ",1)) {   // Line 403
      r=m=1;
      k.KO(1,t,"ഊൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൗ",1)) {   // Line 404
      r=m=1;
      k.KO(1,t,"ൗൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ഔ",1)) {   // Line 405
      r=m=1;
      k.KO(1,t,"ഔൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൂ",1)) {   // Line 410
      r=m=1;
      k.KO(1,t,"ൂൂ");
    }
    else if(k.KKM(e, 0x4000, 0x55)&&k.KCM(1,t,"ൗ",1)) {   // Line 416
      r=m=1;
      k.KO(1,t,"ൗൗ");
    }
    else if(k.KKM(e, 0x4000, 0x55)) {   // Line 151
      r=m=1;
      k.KO(0,t,"ഉ");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"v");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"v");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൺ",1)) {   // Line 307
      r=m=1;
      k.KO(1,t,"ണ്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൻ",1)) {   // Line 319
      r=m=1;
      k.KO(1,t,"ന്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൽ",1)) {   // Line 328
      r=m=1;
      k.KO(1,t,"ല്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)&&k.KCM(1,t,"ൿ",1)) {   // Line 338
      r=m=1;
      k.KO(1,t,"ക്വ്");
    }
    else if(k.KKM(e, 0x4000, 0x56)) {   // Line 219
      r=m=1;
      k.KO(0,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"w");
    }
    else if(k.KKM(e, 0x4000, 0x57)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"w");
    }
    else if(k.KKM(e, 0x4000, 0x57)) {   // Line 219
      r=m=1;
      k.KO(0,t,"വ്");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"x");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"x");
    }
    else if(k.KKM(e, 0x4000, 0x58)&&k.KCM(1,t,":",1)) {   // Line 477
      r=m=1;
      k.KO(1,t,"😘");
    }
    else if(k.KKM(e, 0x4000, 0x58)) {   // Line 371
      r=m=1;
      k.KO(0,t,"ക്ഷ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_nonSa)&&k.KCM(1,t,"ം",1)) {   // Line 264
      r=m=1;
      k.KIO(2,this.s_nonSa,1,t);
      k.KO(-1,t,"മ്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(2,1,t),this.s_vowelsigns)&&k.KCM(1,t,"ം",1)) {   // Line 265
      r=m=1;
      k.KIO(2,this.s_vowelsigns,1,t);
      k.KO(-1,t,"മ്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KCM(2,t,"സം",2)) {   // Line 268
      r=m=1;
      k.KO(2,t,"സംയ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 107
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"്യ്");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"y");
    }
    else if(k.KKM(e, 0x4000, 0x59)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"y");
    }
    else if(k.KKM(e, 0x4000, 0x59)) {   // Line 219
      r=m=1;
      k.KO(0,t,"യ്");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"z");
    }
    else if(k.KKM(e, 0x4000, 0x5A)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"z");
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {   // Line 219
      r=m=1;
      k.KO(0,t,"ശ്");
    }
    else if(k.KKM(e, 0x4010, 0xDC)&&k.KCM(1,t,"‌",1)&&k.KDM(0,t,1)) {   // Line 68
      r=m=1;
      k.KO(1,t,"​");
      k.KDO(-1,t,2);
    }
    else if(k.KKM(e, 0x4010, 0xDC)&&k.KCM(1,t,"​",1)&&k.KDM(0,t,2)) {   // Line 69
      r=m=1;
      k.KO(1,t,"|");
    }
    else if(k.KKM(e, 0x4010, 0xDC)) {   // Line 67
      r=m=1;
      k.KO(0,t,"‌");
      k.KDO(-1,t,1);
    }
    else if(k.KKM(e, 0x4010, 0xDD)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"}");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KCM(1,t,"ം",1)) {   // Line 74
      r=m=1;
      k.KO(1,t,"മ്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KA(0,k.KC(1,1,t),this.s_chills_anu)) {   // Line 94
      r=m=1;
      k.KIO(1,this.s_chill_anu_Bases,1,t);
      k.KO(-1,t,"്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KCM(1,t,"ഋ",1)) {   // Line 179
      r=m=1;
      k.KO(1,t,"റ്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KCM(1,t,"്",1)) {   // Line 216
      r=m=1;
      k.KO(1,t,"്");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KDM(0,t,6)) {   // Line 277
      r=m=1;
      k.KO(0,t,"~");
    }
    else if(k.KKM(e, 0x4010, 0xC0)&&k.KA(0,k.KC(1,1,t),this.s_escapable)) {   // Line 278
      r=m=1;
      k.KIO(1,this.s_escapable,1,t);
      k.KO(-1,t,"~");
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {   // Line 372
      r=m=1;
      k.KO(0,t,"്");
    }
    else if(k.KKM(e, 0x4000, 0x00)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"’");
    }
    else if(k.KKM(e, 0x4000, 0x00)&&k.KCM(1,t,"‌",1)) {   // Line 157
      r=m=1;
      k.KO(1,t,"”");
    }
    return r;
  };
}
