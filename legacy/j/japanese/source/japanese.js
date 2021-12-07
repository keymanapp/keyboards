/*
  Name:             japanese.js
  Copyright:        Copyright (C) 2010 Tavultesoft Pty Ltd.
  Documentation:
  Description:      Japanese IME: Using Jim Breen's EDICT database
  Create Date:      19 Feb 2010

  Modified Date:    12 Mar 2010
  Authors:          jmdurdin
  Related Files:    japanese.php
  Dependencies:     tscrm MSSQL database table kmw_japanese.KMW_Japanese

  Bugs:
  Todo:             IME should link to help, track cursor
  Notes:
  History:          19 Feb 2010 - jmdurdin - Initial Version
                    5 Mar 2010  - mcdurdin - Fixed bug with Shift deleting context
                    12 Mar 2010 - jmdurdin - Output CJK period, comma instead of  normal period, comma
                    12 Mar 2010 - jmdurdin - ENTER now accepts kana, SPACE selects default Kanji, following MS IME behaviour
                    12 Mar 2010 - jmdurdin - Revised Kanji selection to avoid duplication in selection list
                    12 Mar 2010 - jmdurdin - Backspace now deletes last visible kana, not just last input character
                    12 Mar 2010 - jmdurdin - Default vowel for all consonants changed to -a
*/

function Keyboard_japanese()
{
  this.KI="Keyboard_japanese";    // Internal name
  this.KN="Japanese";             // Descriptive name
  this.KRC="as";
  this.KR="Asia";
  this.KC="Japan";
  this.KCC="jp";
  this.KL="Japanese";             // Language name
  this.KLC = "jpn";               // ISO language code
  this.KV=null;                   // Visual Keyboard description - null for CJK
  this.KM=0;                      // Do not use mnemonic layout
  this.KH='<div id="Help_'+this.KI+'"></div>'; // Placeholder for the IME UI
  this.KBVER='1.0.1';
  /*this.KV={F:' 1em "Tahoma"',K102:0,BK:new Array("`","1","2","3","4","5","6","7","8","9","0","-","=","","","","く","わ","え","る","と","ゆ","う","い","お","ぷ","[","]","\\","","","","あ","す","ど","ふ","ぐ","ほ","じ","く","る",";","'","","","","","","","る","きす","く","ゔ","ぶ","ん","む",",",".","/","","","","","","")};*/
  this.elemID = 'Help_'+this.KI;
  this.elem = null;
  this.suggestions = [];
  this.tips = [];
  this.boxes = [];
  this.txtlen = '';
  this.offset = 0;
  this.exact = 0;
  this.i1 = 0;
  this.iStart = 0;
  this.queue = new Array();
  this.seq = 0;
  this.context ='';
  this.kana = '';
  this.showkata = 0;

  /* Control key callback: disable on lost focus, switch between katakana and hiragana */
  this.KNS = function(code,t,down)
  {
    /* Hide IME on losing focus */
    if(code == 0 && !down) this.hide();

    /* Switch active string between katakana and hiragana (on shift key up)*/
    if(code == 16 && !down && this.kana.length > 0)
    {
      this.showkata = (1-this.showkata);
      if(this.showkata)
        KeymanWeb.KO(this.kana.length, t, this.katakana(this.context));
      else
        KeymanWeb.KO(this.kana.length, t, this.hiragana(this.context));
    }
  }

  /*
    this.gs: Entry point of keyboard for each keystroke
      t: focused element
      e: KeymanWeb state information, including keystroke, shift state, etc.
  */

  this.gs=function(t,e)
  {
    var ei=KeymanWeb.KKI(e);    /* Get more current key state information */

    /* Always let user handle Ctrl or Alt key combinations */
    if((ei.modifiers & 96) != 0) return 0;

    /* If IME list is empty, anything except a letter key, period or comma must simply be echoed */
    if(this.context == '')
    {
      if(ei.code == 190) {KeymanWeb.KO(0,t,String.fromCharCode(0x3002)); return 1; } /* CJK period */
      if(ei.code == 188) {KeymanWeb.KO(0,t,String.fromCharCode(0x3001)); return 1; } /* CJK comma */
      if(!this.letterKey(ei)) return 0;
    }

    /* If IME list is active, must ignore anything that isn't a letter, conversion or positioning key */
    else
    {
      if(!(this.letterKey(ei) || this.selectKey(ei) || this.pageKey(ei)
        || this.escapeKey(ei) || this.punctKey(ei) || this.backspaceKey(ei) )) return 1;

      /* Increment queued keystroke sequence number (may not be used in this version?)*/
      this.seq++;
    }
    /* Process the keystroke */
    return this.processKey(t,e,ei);
  };

  /* This callback is run by KeymanWebIME to insert the candidate into the last active element (for a mouse click) or elem, for a keystroke.  It replaces the previous candidate */
  this.insertCallback = function(chr,elem)
  {
    /* KT will refocus the active element in the case of a mouse click */
    if(!elem) KeymanWeb.KT('');

    /* Test for an illegal selection key, do nothing if so */
    if(chr == null) return 1;

    /* Delete the context and write out the selected string (may need more testing? 5/2/10)*/
    KeymanWeb.KO(this.txtlen, elem?elem:KeymanWeb.GetLastActiveElement(), chr);

    /* Finally, clear the candidate window and hide it, together with the IME title bar */
    this.hide();
    KeymanWeb.HideHelp();
    return 1;
  };

  /* Update the IME display according to whether the key is a letter, a conversion key, or a repositioning key */
  this.processKey = function(t,e,ei)
  {
    var sqAsLetter=false;

    /* Process Cancel for active IME */
    if(this.escapeKey(ei))
    {
      this.hide();
      return 1;
    }

    /* Process period, comma */
    if(ei.code == 190) {KeymanWeb.KO(0,t,String.fromCharCode(0x3002)); this.hide(); return 1; } /* CJK period */
    if(ei.code == 188) {KeymanWeb.KO(0,t,String.fromCharCode(0x3001)); this.hide(); return 1; } /* CJK comma */

    /* Process punctuation keys - close IME and insert punctuation (allows double quote, not single quote, handled below) */
    if(this.punctKey(ei)) { this.hide(); return 0; }

    /* Process cursor movement keys */
    if(this.pageKey(ei)) { this.updateCandidates(ei.code); return 1; }

    /* Determine whether a single quote is a letter modifier or punctuation */
    if(ei.code == 222)
    {
      /* Test previous character to know what to do */
      var cLen=this.context.length,canModify='stwxn';
      if(cLen > 0)
      {
        if(canModify.indexOf(this.context.substr(cLen-1,1)) != -1)
        {
          ei.code = 39; sqAsLetter = true;
        }
      }
      /* Treat as punctuation unless modifying previous letter */
      if(!sqAsLetter) { this.hide(); return 0; }
    }

    /* Process a letter key*/
    if(this.letterKey(ei) || sqAsLetter)
    {
      var x=new Array(),hiragana;

      /* Append the current letter (or single quote) to the context */
      this.context = this.context + String.fromCharCode(ei.code).toLowerCase();

      /* Get the hiragana for the romaji entered */
      hiragana = this.hiragana(this.context);

      /* Append the (filtered) context to the queue */
      x[0] = this.seq; x[1] = 0; x[2] = hiragana; /* second element is queue entry type */
      this.queue.push(x);

      /* Output the kana then request an updated suggestions list. The order is
         important, as if no match is found, a backspace is output by getCandidates() */
      if(this.showkata)
        KeymanWeb.KO(this.kana.length, t, this.katakana(this.context));
      else
        KeymanWeb.KO(this.kana.length, t, hiragana);

      this.kana = hiragana;

      /* Request a new candidates list (if context not empty) */
      this.getCandidates(hiragana);

      /* And display the KMW title bar, ensuring minimum width */
      KeymanWeb.ShowHelp();
      this.getElem().parentNode.previousSibling.style.minWidth='14em';

      return 1;
    }

    /* Process backspace */
    if(this.backspaceKey(ei))
    {
     var x=[],hiragana='',kLen=this.kana.length,cLen=this.context.length;

      /* New behaviour (DLD) - drop last kana and romaji for that kana in the context */
      this.kana = this.kana.substr(0,kLen-1);
      if(kLen > 1)
      {
        do
        {
          cLen--;
          this.context = this.context.substr(0,cLen);
        } while (cLen > 0 && this.hiragana(this.context) != this.kana);
        if(cLen == 0) this.kana = '';  /* shouldn't be needed, but... */
      }
      else this.context = '';
      KeymanWeb.KO(kLen, t, this.kana);

      /* If the output is not empty update the candidate list, otherwise hide the IME */
      if(this.kana.length > 0) this.getCandidates(this.kana); else this.hide();

      return 1;
    }

    /* A numeric key (1 - 9) or other candidate selection key has been pressed */
    /* All selection keys except digits 1 - 9 select the first element */
    if(this.selectKey(ei))
    {
      var num=0,q=ei.code;
      /* Recode number pad keys */
      if(q > 96 && q < 106) q = q - 48;
      if(q > 48 && q < 58)
      {
        if(ei.modifiers == 0) num = q-0x31;
      }

      /* Output the selected string and replace the context */
      this.requestCallback(num+this.offset,t);
      return 1;
    }

    /* Just echo input otherwise */
    return 0;
  };

  this.show = function(newSuggestions,alternates,newTips,moretips)
  {
    this.exact = newSuggestions.length;
    this.offset = 0;
    if(newSuggestions.length == 0)
    {
      this.suggestions = alternates;
      this.tips = moretips;
    }
    else
    {
      this.suggestions = newSuggestions.concat(alternates);
      this.tips = newTips.concat(moretips);
    }

    KeymanWeb.ShowPinnedHelp();
    this.renderSuggestions();
  };

  this.hide = function()
  {
    var myList=this.getElem();
    this.context = '';
    this.showkata = 0;
    this.kana = '';
    this.suggestions = [];
    myList.innerHTML='';
    KeymanWeb.HideHelp();
    this.boxElement = [];
    this.leftBoxElement = null;
  };

  this.boxElement = [];
  this.leftBoxElement = null;

  this.renderSuggestions = function()
  {
    var myList=this.getElem(),boxHeight,rx;
    this.iStart=this.offset;
    this.i1=this.exact-this.offset;
    myList.innerHTML='';

    /* Make sure the IME title bar is visible, and wide enough */
    KeymanWeb.ShowHelp();
    myList.parentNode.previousSibling.style.minWidth='14em';

    if(this.suggestions.length < 1) return;

    /* Add  left arrow, unless at start of list */
    if(this.iStart > 0)this.renderBox(-1);

    /* add (up to 9) suggestion boxes */
    for(var i=0; i < (this.suggestions.length-this.iStart) && i < 9; i++) this.renderBox(i);

    /* Add  right arrow unless at end of list */
    if(this.iStart+9 < this.suggestions.length) this.renderBox(9);

    /* Correct the box height for the arrows, which use a different font (allow for padding) */
    rx = this.boxElement[0];
    if(rx)
    {
      boxHeight = rx.offsetHeight-4;
      if(this.leftBoxElement) this.leftBoxElement.style.height = boxHeight+'px';
      if(this.boxElement[9]) this.boxElement[9].style.height = boxHeight+'px';
    }
  };

  this.renderBox = function(i)
  {
    var e = document.createElement('div');
    var en = document.createElement('span');
    var es = document.createElement('span');
    var et = document.createElement('div');
    var w = 1;

    if(i >= 0 && i <= 8)
    {
      var tip=this.tips[i+this.iStart];
      if(this.suggestions[i+this.iStart]) w = this.suggestions[i+this.iStart].length;
      en.innerHTML = (i+1); es.innerHTML = this.suggestions[i+this.iStart];

      /* Limit length of gloss */
      if(tip && tip.length>60)
      {
        var n=tip.lastIndexOf(' ');
        if(n < 40) n=57;
        tip = tip.substr(0,n-1)+' ...';
      }
      et.innerHTML = tip;
    }
    else
    {
      en.innerHTML = ''; es.style.color = 'Green';
      if(i == -1) { es.innerHTML = '\u25C4'; es.style.marginLeft = '-2pt'; }
      else { es.innerHTML = '\u25BA'; es.style.marginLeft = '-1pt'; }
      et.innerHTML = '';
    }
    if(i == -1) this.leftBoxElement = e; else this.boxElement[i] = e;

    with(e.style)
    {
      styleFloat = cssFloat ='left';
      if(i < this.i1) background = 'white'; else background = 'lightgray';
      cursor = 'default';
      width = (w+1)+'em';
      height = '1.2em';
      fontSize = '12pt';
      border='solid 1px #ad4a28';
      paddingTop = '2px';
      color = 'black';
      if(i < 0 || i > 8)
      {
        background = 'white'; fontFamily = 'Tahoma,"Arial Black",Helvetica';
        fontSize = '10pt'; height = '1.4em';
      }
    }

    with(en.style)
    {
      fontSize = '8pt';
      paddingRight = '4px';
      paddingLeft = '2px';
    }

    with(es.style)
    {
      fontFamily = 'Tahoma';
      marginTop = '1px';
    }

    with(et.style)
    {
      visibility = 'hidden';
      fontFamily = 'Tahoma,Helvetica';
      fontSize = '8pt'; color = 'DarkGreen'; fontWeight = 'normal';
      background = '#ffffe0';
      margin = '0'; padding = '4px'; marginTop = '1px';
      position = 'absolute';
      textAlign = 'left';
      border = 'solid 1px #e0e0c0'; borderTop = 'none';
      whiteSpace = 'nowrap';
    }

    this.boxes[i+1] = e;
    e.appendChild(en);
    e.appendChild(es);
    e.appendChild(et);

    e.onmouseover = function()
    {
      this.style.background = 'DarkOrange';
      if(this.childNodes[2].innerHTML !='') this.childNodes[2].style.visibility = "visible";
      return false;
    }

    e.onmouseout = function(ev)
    {
      for(var j=0; j<Keyboard_japanese_obj.boxes.length; j++)
      {
        if(Keyboard_japanese_obj.boxes[j] == this)
        {
          this.childNodes[2].style.visibility = "hidden";
          /* unselected exact matches and scroll boxes have white backgrounds */
          if(j <= Keyboard_japanese_obj.i1 || this.childNodes[0].innerHTML == '' )
            this.style.background = 'white';
          else
            this.style.background = 'lightgray';
          break;
        }
      }
      return false;
    }
    e.onclick = function(ev) { Keyboard_japanese_obj.clickCallback(this); if(!ev) ev=window.event; if(ev) ev.cancelBubble=true; KeymanWeb.FocusLastActiveElement(); }
    e.onmousedown = function(ev) { KeymanWeb.KSF(); if(!ev) ev=window.event; if(ev) ev.cancelBubble=true; }

    this.elem.appendChild(e);
  }

  this.getElem = function()
  {
    this.elem = document.getElementById(this.elemID);
    return this.elem;
  };

  this.clickCallback = function(elem)
  {
    for(var i=0; i < 11; i++)
      if(this.boxes[i] == elem)
      {
        if(i == 0)
        {
          this.offset = this.offset - 9;
          if(this.offset < 0) this.offset = 0;
          this.renderSuggestions();
        }
        else if(i == 10)
        {
          this.offset = this.offset+9;
          if(this.offset >= this.suggestions.length) this.offset = this.suggestions.length-1;
          this.renderSuggestions();
        }
        else
        {
          this.insertCallback(this.suggestions[i+this.iStart-1],null,'');
        }
        break;
      }
  };


  /* Routine to update and display the candidate list, called asynchronously by the callback script */

  this.showCandidates = function(seq,context,c1,c2,t1,t2)
  {
    /* Cache the function needed to display the returned candidate list,
       to allow faster response in subsequent calls */
    Keyboard_japanese_obj.cache[context] = function()
    {
      Keyboard_japanese_obj.showCandidates(seq,context,c1,c2,t1,t2);
    };

    /* This routine will only be called if objects have been queued, and this is the only routine in which objects are unqueued */
    var x = this.queue.shift();

      this.txtlen = context.length;
      this.show(c1,c2,t1,t2);
  }

  /* Asynchronous version of GetCandidates */
  this.getCandidates = function(s)
  {
    this.txtlen = s.length;
    var t, t0, c1=[], c2=[], t1=[], t2=[], m=0, n=0, n1, n2;
    var e = document.createElement('script');
    if(this.cache[s])
    {
      if(window.event) e.text = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';
      else e.innerHTML = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';
      this.events[this.uniqID] = function()
      {
        Keyboard_japanese_obj.cache[s]();
        document.getElementsByTagName('head')[0].removeChild(e);
      }
      this.uniqID++;
    }
    else
    {
      e.src = (('https:' == document.location.protocol) ? 'https:' : 'http:')+'//r.keymanweb.com/kbd/japanese.php?kana='+s+'&id='+this.seq;
      //e.src = (('https:' == document.location.protocol) ? 'https:' : 'http:')+'//kmwtest.tavultesoft.local/cjk/japanese.php?kana='+s+'&id='+this.seq;
      e.onload = function()
      {
        document.getElementsByTagName('head')[0].removeChild(this);
      }
    }
    e.type = 'text/javascript';
    e.className = 'cjkscript';
    document.getElementsByTagName('head')[0].appendChild(e);
  }

  /* Filter the romaji to generate the kana according to mauvecloud's conventions (may change : see wikipedia) **NOT USED ANY MORE **
  this.filterRomaji = function(s)
  {
    var t;

    t = s.replace(/n([bcdfghjklmnpqrstvwxyz])/,"n'$1");
    t = t.replace(/n$/,"n'");             //insert apostrophe after final n
    t = t.replace(/c([^h])/,"k$1");       //change c to k except before h
    t = t.replace(/c$/,"k");              //change c to k initially
    t = t.replace(/x([aeiou])/,"x$1");    //mark small vowels
    t = t.replace(/x$/,"kis");            //otherwise -kis-
    t = t.replace(/x([^aeiou])/,"kis$1"); //otherwise -kis-
    t = t.replace(/w$/,"wa");             //guess final vowel...
    t = t.replace(/j$/,"ji");
    t = t.replace(/sh$/,"shi");
    t = t.replace(/([dht])$/,"$1o");
    t = t.replace(/([bfgklmprsvyz])$/,"$1u");
    t = t.replace("ou","oo");             //replace ou by oo
    return t;
  }
  *** end of filtering code */

  /* Reposition offset in suggestions list, allowing for delayed return of suggestions */
  this.updateCandidates = function(x)
  {
    var e = document.createElement('script');
    if(window.event) e.text = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';
    else e.innerHTML = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';
    this.events[this.uniqID] = function()
    {
      var offset=Keyboard_japanese_obj.offset,slen=Keyboard_japanese_obj.suggestions.length;
      switch(x)
      {
        case 33: offset = offset-9; break;
        case 34: offset = offset+9; break;
        case 35: offset = slen-9; break;
        case 36: offset = 0; break;
      }
      if(offset < 0) offset = 0;
      if(offset >= slen) offset = slen-1;
      Keyboard_japanese_obj.offset = offset;
      Keyboard_japanese_obj.renderSuggestions();
      document.getElementsByTagName('head')[0].removeChild(e);
    }
    this.uniqID++;
    e.type = 'text/javascript';
    e.className = 'cjkscript';
    document.getElementsByTagName('head')[0].appendChild(e);
  }

  /* Script event synchonization and execution */
  this.uniqID = 0; this.events = [];
  this.executeEvent = function(id)
  {
    this.events[id](); this.events[id] = null;
  }

  /* Insert a script to insert a function that will select the requested character
     from the suggestions list only after that list has been fully updated */
  this.requestCallback = function(num,elem)
  {
    var e = document.createElement('script');

    if(window.event) e.text = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';
    else e.innerHTML = 'Keyboard_japanese_obj.executeEvent('+this.uniqID+');';

    this.events[this.uniqID] = function()
    {
      Keyboard_japanese_obj.insertCallback(Keyboard_japanese_obj.suggestions[num],elem);
      document.getElementsByTagName('head')[0].removeChild(e);
    }
    this.uniqID++;
    e.type = 'text/javascript';
    document.getElementsByTagName('head')[0].appendChild(e);
  }

  /* Test for letter keys (A-Z), and single quote if to be treated as a letter modifier */
  this.letterKey = function(ei)
  {
    if(ei.code>64 && ei.code<91) return true;
    if((ei.code == 222) && (ei.modifiers == 0) && this.context.length > 0) return true;
    return false;
  }

  /* Test for single quote (needed for Romaji entry of Hiragana and Katakana) */
  this.sQuote = function(ei)
  {
    if((ei.code == 222) && (ei.modifiers == 0)) return true;
    return false;
  }

  /* Test for backspace key */
  this.backspaceKey = function(ei)
  {
    return (ei.code == 0x08);
  }

  /* Test for delete key */
  this.deleteKey = function(ei)
  {
    return (ei.code == 0x2e);
  }

  /* Test for selection keys */
  this.selectKey=function(ei)
  {
    /* number keys: must test shift before using to select */
    if(ei.code>48 && ei.code<58) return true;

    /* number pad keys: ignore shift */
    if(ei.code>96 && ei.code<106) return true;

    /* space */
    if(ei.code==32) return true;

    return false;
  }

  /* Test for suggestion list repositioning keys */
  this.pageKey = function(ei)
  {
    return((ei.code >= 33) && (ei.code <= 36));
  }

  /* Test for escape or enter (close IME, reset stored strings) */
  this.escapeKey = function(ei)
  {
    return((ei.code == 27) || (ei.code == 13));
  }

  /* Test for punctuation key (output and terminate current kana) */
  this.punctKey = function(ei)
  {
    for(var i=0; i<this.pKey.length; i++)
    {
      if(ei.code == this.pKey[i]) return true;
    }
    /* Handle as a special case (recognize double quote, not single quote)*/
    if((ei.code == 222) && (ei.modifiers == 16)) return true;

    return false;
  }

  this.USCharCodes = [
    {k192: 96,
      k49: 49,
      k50: 50,
      k51: 51,
      k52: 52,
      k53: 53,
      k54: 54,
      k55: 55,
      k56: 56,
      k57: 57,
      k48: 48,
      k189: 45,
      k187: 61,
      k81: 113,
      k87: 119,
      k69: 101,
      k82: 114,
      k84: 116,
      k89: 121,
      k85: 117,
      k73: 105,
      k79: 111,
      k80: 112,
      k219: 91,
      k221: 93,
      k220: 92,
      k65: 97,
      k83: 115,
      k68: 100,
      k70: 102,
      k71: 103,
      k72: 104,
      k74: 106,
      k75: 107,
      k76: 108,
      k186: 59,
      k222: 39,
      k90: 122,
      k88: 120,
      k67: 99,
      k86: 118,
      k66: 98,
      k78: 110,
      k77: 109,
      k188: 44,
      k190: 46,
      k191: 47,
      },
     {k192: 126,
      k49: 33,
      k50: 64,
      k51: 35,
      k52: 36,
      k53: 37,
      k54: 94,
      k55: 38,
      k56: 42,
      k57: 40,
      k48: 41,
      k189: 95,
      k187: 43,
      k81: 81,
      k87: 87,
      k69: 69,
      k82: 82,
      k84: 84,
      k89: 89,
      k85: 85,
      k73: 73,
      k79: 79,
      k80: 80,
      k219: 123,
      k221: 125,
      k220: 124,
      k65: 65,
      k83: 83,
      k68: 68,
      k70: 70,
      k71: 71,
      k72: 72,
      k74: 74,
      k75: 75,
      k76: 76,
      k186: 58,
      k222: 34,
      k90: 90,
      k88: 88,
      k67: 67,
      k86: 86,
      k66: 66,
      k78: 78,
      k77: 77,
      k188: 60,
      k190: 62,
      k191: 63,
    }];

  this.pKey = [186,187,188,189,190,191,192,219,220,221];

  this.cache=[];
  this.cache['あ'] = function()  //a
  {
Keyboard_japanese_obj.showCandidates(0,'あ',['吾れ','彼','唖','亜'],['相手','秋','明らか','足','後','新た','安全','安保','愛','赤字','上がったり','雨','安全保障','安定','碧','味','圧力','址','天','天'],['I','that (indicating something distant from both speaker and listener (in space, time or psychologically), or something understood without naming it directly)','muteness','sub-'],['companion','autumn','obvious','foot','behind','new','safety','US-Japan Security Treaty','love','deficit','doomed','rain','security guarantee (e.g. military security, network security, etc.)','stability','blue','flavor','stress','trace','sky','sky']);
  };

  this.cache['ぶ'] = function()  //bu
  {
Keyboard_japanese_obj.showCandidates(0,'ぶ',['侮','部','分','武','歩','無'],['舞台','部長','部分','部門','文化','分野','武器','武装','部隊','夫人','武力','文学','文書','部会','物価','物質','部品','分析','物資','分離'],['(something) despised','department (in an organization)','one-tenth','the art of war','unit of land measurement','un-'],['stage (theatre, theater)','head (chief, director) of a section or department','portion','class','culture','field','weapon','arms','force','wife','armed might','literature','document','section meeting','prices of commodities','material','parts','analysis','goods','separation']);
  };
  this.cache['く'] = function()  //ku,cu,qu
  {
Keyboard_japanese_obj.showCandidates(0,'く',['九','区','句','苦','躯','矩','垢','口'],['空港','９月','国','車','口','国境','組み合い','競べる','黒字','空気','管','頸','首','黒','訓連','空間','空爆','薬','区内','暮らし'],['nine','ward','section (i.e. of text)','pain','counter for Buddhist images (statues &amp; paintings)','quadrature','klesha (polluting thoughts such as greed, hatred and delusion, which result in suffering)','mouth'],['airport','September','country','car','mouth','national or state border','association','to compare','balance (figure) in the black','air','pipe','neck','neck','black','practice','space','aerial bombing','medicine','in the ward or borough','living']);
  };
  this.cache['ど'] = function()  //do
  {
Keyboard_japanese_obj.showCandidates(0,'ど',['度','土'],['同市','同時','同日','同社','努力','同県','同国','同省','同党','導入','動物','同盟','同様','道路','独自','独立','同月','動向','同士','同氏'],['degree (angle, temperature, scale, etc.)','Saturday'],['same city','simultaneous(ly)','the same day','the same firm','great effort','the same prefecture','the same country','the said ministry','the same political party','introduction','animal','alliance','identical','road','original','independence (e.g. Independence Day)','the same month','trend','fellow','the said person']);
  };
  this.cache['え'] = function()  //e
  {
Keyboard_japanese_obj.showCandidates(0,'え',['画','江','餌','荏','縁','会','重','柄','方'],['映画','影響','援助','営業','英語','衛星','映像','撰ぶ','演説','円高','延長','江戸','演出','演奏','長年','笑顔','演劇','駅','枝','円'],['picture','inlet','feed','egoma (type of perilla)','fate','gathering (esp. Buddhist, festive, etc.)','-fold','handle','surrounding area'],['movie','influence','assistance','business','English (language)','satellite','reflection','to choose','speech','high-valued yen','extension','old name of Tokyo','production (e.g. play)','musical performance','long time','smiling face','play (theatrical)','station','branch','Yen']);
  };
  this.cache['ふ'] = function()  //fu
  {
Keyboard_japanese_obj.showCandidates(0,'ふ',['二','布','負','譜','傅','歩','不','賦','府','訃','腑','婦','麩','生'],['二','不況','二','二人','不安','夫婦','福祉','副社長','夫人','不足','再び','２つ','負担','普通','不動産','不満','不明','紛争','普及','付近'],['two','cloth','negative','(sheet) music','instructor','pawn (in chess or shogi)','un-','poem','(metropolitan) prefecture (of Osaka and Kyoto)','news of someone\'s death','internal organ','married woman','wheat-gluten bread','area of thick growth (of trees, grass, etc.)'],['two','recession','two','two persons','anxiety','married couple','welfare','executive vice-president','wife','insufficiency','again','two','burden','general','real estate','dissatisfaction','unknown','dispute','diffusion','neighbourhood']);
  };
  this.cache['ぐ'] = function()  //gu
  {
Keyboard_japanese_obj.showCandidates(0,'ぐ',['愚','具'],['グアテマラ共和国','具体的','軍事','軍','具体','軍縮','軍人','軍部','軍隊','工合','軍備','軍機','軍用','具体化','群','軍需','軍兵','軍兵','軍兵','偶然'],['foolishness','tool'],['Republic of Guatemala','concrete','military affairs','army','concrete','disarmament','military personnel','military authorities','army','condition','armaments','military secret','for military use','embodiment','group (of animals)','munitions','armed forces','armed forces','armed forces','(by) chance']);
  };
  this.cache['ほ'] = function()  //ho
  {
Keyboard_japanese_obj.showCandidates(0,'ほ',['穂','歩','帆','舗','畝'],['法案','方向','報告','方針','放送','報道','方法','訪問','保護','北海道','本社','本社','本部','崩潰','報告書','方式','法人','法律','他','保険'],['ear (of plant)','step','sail','shop','mu (Chinese measure of land area, formerly ~600 m.sq., currently ~667 m.sq.)'],['bill (law)','direction','report','objective','broadcast','information','method','call','care','Hokkaido (northernmost of the four main islands of Japan)','head office','head office','headquarters','collapse','(written) report','form','corporate body','law','other (esp. places and things)','insurance']);
  };
  this.cache['い'] = function()  //i
  {
  Keyboard_japanese_obj.showCandidates(0,'い',['五','五十','井','胃','医','寝','偉','亥','藺','藺','異','位','意','汝','猪','伊','居'],['委員','委員会','委員長','言う','意見','意向','維持','五十','１月','一時','市庭','一番','一部','五','一時','一般','一方','違犯','意味','以来'],['five','fifty','well','stomach','medicine','sleep','greatness','twelfth sign of the Chinese zodiac (The Boar, 9pm-11pm, north-northwest, October)','soft rush (Juncus effusus var. decipiens)','soft rush (Juncus effusus var. decipiens)','difference (of opinion)','place','feelings','you','hog (esp. a wild boar, but also including the domesticated pig)','Italy','(usu. used in compound words) being (somewhere)'],['committee member','committee','committee chairman','to say','opinion','intention','maintenance','fifty','January','one hour','(town) market','best','one part','five','one hour','general','one (esp. of two)','violation (of law)','meaning','since']);
  };
  this.cache['じ'] = function()  //ji
  {
Keyboard_japanese_obj.showCandidates(0,'じ',['児','痔','字','璽','次','時','辞','事','箇','路','自','寺','地','柱'],['自衛隊','地方','時間','時期','事業','事件','事故','時事','事実','事情','自身','事態','時代','自宅','実施','自動車','時半','自分','自民','自民党'],['child','hemorrhoids','character (i.e. kanji)','emperor\'s seal','next','hour','address (e.g. opening or closing remarks)','individual concrete phenomenon (as opposed to a general principle)','counter for the hito-futa-mi counting system (forming hitotsu, futatsu, mitsu, and misoji, yasoji, etc.)','route','self-','counter for temples','ground','bridge (of a koto, etc.)'],['self-defence force','area','time','time','project','event','accident','events of the day','fact','circumstances','by oneself','situation','period','one\'s home','enforcement','automobile','about an hour','myself','Liberal Democratic Party','Liberal Democratic Party']);
  };
  this.cache['る'] = function()  //ru,lu
  {
Keyboard_japanese_obj.showCandidates(0,'る',['流'],['累積','留主','累計','類似','留守番','塁','累進','類型','類する','流布','塁審','琉璃','類推','流民','流浪','類例','流刑','累増','流転','類書'],['exile'],['accumulation','absence','total','resemblance','care-taking','base (baseball)','successive promotion','similar shape','to be similar to','circulation','base umpire (baseball)','lapis lazuli','analogy','refugees','vagrancy','similar instance','exile','successive or progressive increases','vicissitudes','similar books']);
  };
  this.cache['む'] = function()  //mu
  {
Keyboard_japanese_obj.showCandidates(0,'む',['六','无'],['六','昔','娘','六十','胸','無料','向かって左','息','村','無職','無所属','無罪','無理','虫','無線','向き','無効','無死','矛盾','無償'],['six','nothing'],['six','olden days','(my) daughter','sixty','breast','free','on the left as one faces (it)','son','village','without an occupation','independent','innocence','unreasonable','insect','wireless','direction','invalid','baseball with no outs','contradiction','no compensation']);
  };
  this.cache['な'] = function()  //na
  {
Keyboard_japanese_obj.showCandidates(0,'な',['七','名','菜','儺','汝'],['内閣','内容','夏','七','地震','内部','地震','仲間','流れ','何','名前','何','南北','難民','内外','内戦','七十','七十','何か','何も'],['seven','name','greens','(ceremony of) driving out evil spirits','I'],['cabinet','subject','summer','seven','earthquake','interior','earthquake','company','stream','what','name','what','south and north','refugees','inside and outside','civil war','seventy','seventy','something','nothing (with neg. verbs)']);
  };
  this.cache['お'] = function()  //o
  {
    Keyboard_japanese_obj.showCandidates(0,'お',['尾','緒','御','小'],['欧州','大蔵省','大手','大手','大幅','行なう','牡','夫','男','女子','音楽','沖縄','虞','音','おと年','想い','想う','思わず','親','音'],['tail','cord','honourable','small'],['Europe','(former) Ministry of Finance (succeeded by zaimushou in 2000)','front castle gate','front castle gate','full width','to perform','male (animal)','husband','man','woman','music','Okinawa (one of the Japanese Ryukyu islands)','fear','sound','year before last','thought','to think','unintentionally','parent','sound']);
  };
  this.cache['ぷ'] = function()  //pu
  {
Keyboard_japanese_obj.showCandidates(0,'ぷ',[],['Ψ','ψ','プロ版','プチ切れ','プチ切れ','プール熱','プール制','プー太郎','プー太郎','プー太郎','プラスα','プリン頭','プリン体','プロ意識','プロ選手','プロ野球','プーアル茶','プール開き','プラグ互換','プラザ合意'],[],['psi','psi','professional version','getting irked','getting irked','pharyngoconjunctival fever','pool system','vagabond','vagabond','vagabond','a little more than usual','black hair that has been dyed blond after the roots begin to grow in at the top giving an appearance much like custard pudding (lit. pudding head)','purine (body)','professionalism; professional awareness','professional player (sports)','professional baseball','Puer tea','opening of a pool (e.g. for the summer season)','plug-compatible','Plaza agreement (1985 agreement of G5 nations)']);
  };
  this.cache['す'] = function()  //su
  {
Keyboard_japanese_obj.showCandidates(0,'す',['栖','醋','候','州','素','為','鬆','子','簀'],['推進','姿','少し','筋','水準','推薦','数字','少くとも','天皇','天皇','相撲','相撲','末','既に','李','酸桃','已に','推定','数値','水道'],['nest','vinegar','to be (auxiliary used in place of "aru" after "de" or "ni" when forming a copula)','sandbank','plain','to do (literary form of suru)','pore','honorific (or familiar) suffix used after a name','mat (made of pieces of split bamboo or reeds tied together)'],['propulsion','figure','small quantity','muscle','level','recommendation','numeral','at least','Emperor of Japan','Emperor of Japan','sumo wrestling','sumo wrestling','end','already','Japanese plum','Japanese plum','already','presumption','numerical value','water service']);
  };
  this.cache['と'] = function()  //to
  {
Keyboard_japanese_obj.showCandidates(0,'と',['十','戸','斗','途','人','徒','都'],['問合せ','統一','東京','当局','投資','当時','投手','当初','投票','十','特に','特別','都市','土地','都内','取引','党','問う','東海','統合'],['10','door (esp. Japanese-style)','to (measure of volume, approx. 18 litres)','way','person','party','metropolitan'],['enquiry','unity','Tokyo (current capital of Japan)','authorities','investment','at that time','(baseball) pitcher','at first','voting','10','particularly','special','town','plot of land','metropolitan area','transactions','party (political)','to ask','region south of Tokyo on Pacific Ocean side of Japan','integration']);
  };
  this.cache['う'] = function()  //u
  {
Keyboard_japanese_obj.showCandidates(0,'う',['鵜','卯','宇','羽','有','得'],['動き','疑い','運動','詩','宇宙','馬','海','運営','運転','魚','受け入れ','内外','売上げ','運輸','運輸省','運用','上野','右翼','裏','売上高'],['cormorant','fourth sign of Chinese zodiac (The Hare, 5am-7am, east, February)','counter for buildings, etc.','fifth degree (of the Japanese &amp; Chinese pentatonic scale)','bhava (becoming, existence)','to get'],['movement','doubt','motion','song','universe','horse','sea','management','operation','fish','receiving','inside and outside','amount sold','transportation','Ministry of Transport','making use of','section of Tokyo','right-wing','bottom (or another side that is hidden from view)','sales']);
  };
  this.cache['わ'] = function()  //wa
  {
Keyboard_japanese_obj.showCandidates(0,'わ',['羽','輪','我','把','和','話'],['私','私','和平','湾岸','若手','若者','海','海','話題','我我','和解','枠組み','和解','私立','割り合い','湾','枠','笑い','我が国','分け'],['counter for birds and rabbits','ring','I','counter for bundles','sum','counter for stories, episodes of TV series, etc.'],['I','I','peace','gulf coast','young person','young man','sea','sea','topic','we','reconciliation','frame','reconciliation','private (establishment)','rate','bay','frame','laugh','our country','sharing']);
  };
  this.cache['ゆ'] = function()  //yu
  {
Keyboard_japanese_obj.showCandidates(0,'ゆ',['湯'],['謂う','融資','優勝','輸出','輸入','夕べ','有効','友人','夕べ','有力','行く方','輸送','豊か','夢','唯一','唯一','有','有権者','友好','優先'],['hot water'],['to say','financing','overall victory','export','importation','evening','validity','friend','evening','influential','(one\'s) whereabouts','transport','abundant','dream','only','only','existence','voter','friendship','preference']);
  };
  this.cache['ず'] = function()  //zu
  {
Keyboard_japanese_obj.showCandidates(0,'ず',['図','頭','徒'],['図書館','頭痛','図式','随時','随所','頭脳','頭打ち','図鑑','隨筆','図柄','頭上','図面','随員','図形','随一','図版','随意','瑞宝章','随行','図画'],['figure (e.g. Fig 1)','head','imprisonment (for one to three years)'],['library','headache','diagram','at any time','everywhere','head','reaching a peak','illustrated reference book','essays','design','overhead','drawing','member of an entourage or retinue or party','figure','best','plate','voluntary','Orders of the Sacred Treasure','attendant','drawing']);
  };
  this.cache['ち'] = function()  //chi
  {
Keyboard_japanese_obj.showCandidates(0,'ち',['千','血','地','乳','家','知','痴','値','箇','笞','徴','道','鉤','袮','茅萱'],['地域','地球','地区','知事','父','地方','中央','中国','中心','長官','調査','調整','長男','違い','地検','地裁','父親','中間','中東','町'],['1,000','blood','earth','milk','house','wisdom','foolishness','level','counter for the hito-futa-mi counting system (forming hitotsu, futatsu, mitsu, and misoji, yasoji, etc.)','light caning (10-50 times)','fourth degree (of the Japanese &amp; Chinese pentatonic scale)','way','fishing hook','ancestral shrine','cogon grass (Imperata cylindrica)'],['area','the earth','district','prefectural governor','father','area','centre','China','center','secretary (government)','investigation','regulation','eldest son','difference','District Public Prosecutor\'s Office','district court','father','middle','Middle East','town']);
  };
  this.cache['つ'] = function()  //tsu
  {
Keyboard_japanese_obj.showCandidates(0,'つ',['唾','箇'],['通信','具','通貨','通産省','通常','使う','使わす','頬','追加','通算','晦','兵','通商','次々','造る','土','地','常に','強さ','追及'],['saliva','counter for the hito-futa-mi counting system (forming hitotsu, futatsu, mitsu, and misoji, yasoji, etc.)'],['correspondence','wife','currency','(former) Ministry of International Trade and Industry (now Ministry of Economy, Trade and Industry)','common','to use (a thing, method, etc.)','to send','face (often derog. or vulg.)','addition','total','last day of month','soldier','commerce','in succession','to make','earth','earth','always','strength','investigation (e.g. into someone\'s guilt)']);
  };
  this.cache['き'] = function()  //ki
  {
Keyboard_japanese_obj.showCandidates(0,'き',['気','木','匹','季','黄','鬼','記','期','生','葱','几','己','癸','揆','機','既','奇','器','柝','危','箕','基','紀','柵','綺','貴','忌','騎'],['期間','機関','危機','企業','機構','記事','記者','規準','規制','北','期待','北朝鮮','機能','規模','基本','決まって','気持ち','客','九','教育'],['spirit','tree','counter for small animals','season','yellow','ogre','chronicle','period','pure','Welsh onion (species of scallion, Allium fistulosum)','armrest','6th in rank','10th in rank','way','chance','previously','strange','device','wooden clappers (signalling the beginning or end of a performance)','danger','Chinese "winnowing basket" constellation (one of the 28 mansions)','group','(geological) period','fortress (surrounded by a wall, moat, etc.)','thin twilled silk fabric','honorific, familiar suffix','mourning','counter for horsemen'],['period','engine','crisis','enterprise','mechanism','article','reporter','standard','regulation','north','expectation','North Korea','function','scale','foundation','always','feeling','guest','nine','training']);
  };
  this.cache['こ'] = function()  //ko
  {
Keyboard_japanese_obj.showCandidates(0,'こ',['児','粉','弧','箇','故','戸','濃','湖','小','壷','胡'],['効果','攻撃','高校','交渉','工場','構造','行動','工場','候補','交流','声','国際','国内','告別','国民','国連','九','九','個人','国家'],['child','flour','arc','counter for articles','the late (deceased)','counter for houses','dark','lake (in place names)','small','hu (ancient Chinese vessel shaped like a vase, usually used to store alcohol)','barbarian tribes surrounding ancient China'],['effect','attack','senior high school','negotiations','factory','structure','action','factory','candidate','intercourse','voice','international','internal','farewell','nation','UN','nine','nine','individual','state']);
  };
  this.cache['ご'] = function()  //go
  {
Keyboard_japanese_obj.showCandidates(0,'ご',['五','碁','語','伍','御','后'],['業','合意','５月','午后','五十','午前','五輪','合計','合同','合併','合','合格','強盗','合弁','合理化','護憲','言語','合憲','誤解','五分'],['five','Go (board game of capturing territory)','language','five (used in legal documents)','honourable','after'],['karma (i.e. actions committed in a former life)','agreement','May','afternoon','fifty','morning','the Olympics','sum total','combination','combination','0.18039 litres (liters)','success','robber','joint management','rationalization','protecting the constitution','language','constitutionality','misunderstanding','half']);
  };
  this.cache['し'] = function()  //shi
  {
Keyboard_japanese_obj.showCandidates(0,'し',['死','四','詩','誌','梓','尸','仕','刺','市','師','肆','枝','史','氏','糸','其','子','觜','司','姉','卮','視','至','詞','秭','羊蹄'],['試合','支援','４月','資金','仕事','支持','四十','姿勢','施設','自然','七','７月','質問','指導','市内','市民','社会','社会党','写真','社長'],['death','four','poem','magazine','Japanese cherry birch (Betula grossa)','corpse','official','calling card','city','teacher','four (used in legal documents)','counter for long, thin things (i.e. swords)','history (e.g. of some country)','Mr','thread','that','child (esp. a boy)','Chinese "Turtle Beak" constellation (one of the 28 mansions)','office (government department beneath a bureau under the ritsuryo system)','honorific suffix used after the name of a woman of equal or higher status','zhi (large bowl-shaped ancient Chinese cup with two handles)','visual','to ...','words','10**24','Japanese dock (plant) (Rumex japonicus)'],['match','support','April','funds','work','support','forty','attitude','institution','nature','seven','July','question','leadership','(within a) city','citizen','society','Socialist Party','photograph','company president']);
  };
  this.cache['て'] = function()  //te
  {
Keyboard_japanese_obj.showCandidates(0,'て',['手'],['程度','提案','停止','定数','停戦','撤退','手続','寺','展開','転換','天皇','低下','定期','提供','抵抗','堤出','低迷','手紙','徹底','鉄道'],['hand'],['degree','proposal','suspension','constant','armistice','evacuation','procedure','temple (Buddhist)','development','convert','Emperor of Japan','fall','fixed term','offer','electrical resistance','to present','hanging low (over)','letter','thoroughness','railroad']);
  };
  this.cache['に'] = function()  //ni
  {
Keyboard_japanese_obj.showCandidates(0,'に',['二','荷','丹','似','弐','尼','土'],['二月','日米','日本人','二人','日本人','人気','人間','人人','西','西側','日程','日本語','二百','日本語','認識','日常','日夜','入札','任期','二死'],['two','load','red earth (i.e. containing cinnabar or minium)','takes after (his mother)','two (used in legal documents)','bhikkhuni (fully ordained Buddhist nun)','soil (esp. reddish soil)'],['February','Japan-America','Japanese person','two persons','Japanese person','popularity','human being','each person','west','west side','schedule','Japanese (language)','two hundred','Japanese (language)','recognition','ordinary','day and night','bid','term of office','two out (e.g. in baseball)']);
  };
  this.cache['や'] = function()  //ya
  {
Keyboard_japanese_obj.showCandidates(0,'や',['八','埜','箭','厭や','冶','屋','輻'],['野球','役割り','野党','役員','山','野菜','役','八十','約束','休み','山形','倭','夜間','役所','野生','屋根','役者','家賃','宿','役人'],['eight','plain','arrow','disagreeable','melting','(something) shop','spoke'],['baseball','part','opposition party','officer','mountain','vegetable','use','eighty','arrangement','rest','mountain-shaped','ancient Japan','at night','government office','wild','roof','actor','rent','inn','government official']);
  };
  this.cache['よ'] = function()  //yo
  {
Keyboard_japanese_obj.showCandidates(0,'よ',['四','夜','代','余','節'],['形','容疑者','要求','予算','四十','予定','与党','四','四十','容疑','様子','要請','予選','予想','呼ぶ','与野党','夜','世論','要因','預金'],['four','evening','world','over','space between two nodes (on bamboo, etc.)'],['form','suspect (person)','demand','estimate','forty','plans','government party','four','forty','suspect','state','claim','nomination','expectation','to call out (to)','(political) parties in and out of power','evening','public opinion','main cause','deposit']);
  };
  this.cache['み'] = function()  //mi
  {
Keyboard_japanese_obj.showCandidates(0,'み',['三','海','身','子','巳','未','見','味','深'],['見方','右','水','自ら','卅','三人','道','見通','見直し','南','民間','民主','民族','夫婦','民社党','民主党','見込','晦日','三十日','三つ'],['three','sea','body','fruit','sixth sign of Chinese zodiac (The Serpent, 9am-11am, south-southeast, April)','not yet','looking','(sense of) taste','august'],['viewpoint','right','water (cold, fresh)','for one\'s self','thirty','three people','road','perspective','review','south','private','democracy','people','married couple','Democratic Socialist Party','Democratic party','forecast','last day of month','last day of month','three']);
  };
  this.cache['さ'] = function()  //sa
  {
Keyboard_japanese_obj.showCandidates(0,'さ',['差','箭','然','沙','左'],['最近','最後','最高','最終','最初','最大','裁判','作業','削減','昨年','作品','三','参院','参加','３月','産業','卅','三人','採用','策戦'],['difference','arrow','so','one hundred-millionth','left (esp. in vertical Japanese writing)'],['latest','last','highest','last','beginning','greatest','trial','work','cut','last year','work (e.g. book, film, composition, etc.)','three','House of Councillors','participation','March','industry','thirty','three people','use','tactics']);
  };
  this.cache['ざ'] = function()  //za
  {
Keyboard_japanese_obj.showCandidates(0,'ざ',['座'],['財政','雑誌','暫定','財界','財源','材料','残念','財産','在住','財団','在日','座長','在庫','財団法人','財務','残留','在宅','残高','座席','残業'],['seat'],['financial affairs','journal','tentative','financial world','source of funds','ingredients','deplorable','property','resident','foundation','in Japan','chairman','inventory','incorporated foundation','financial affairs','residual','being in','(bank) balance','seat','overtime (work)']);
  };
  this.cache['り'] = function()  //ri
  {
Keyboard_japanese_obj.showCandidates(0,'り',['利','理','里','吏','人','離'],['理事','理由','両国','両国','領土','利益','理解','利益','利用','料金','両党','料理','旅行','臨時','理念','流通','両親','倫理','立候補','立法'],['advantage','reason','ri (old Japanese unit of distance, approx. 3.927km or 2.44 miles)','an official','counter for people','li (one of the trigrams of the I Ching: fire, south)'],['director','reason','both countries','both countries','dominion','profit','understanding','profit','use','fee','both political parties','cooking','travel','temporary','idea','circulation of money or goods','parents','ethics','announcing candidacy','legislation']);
  };
  this.cache['ね'] = function()  //ne
  {
Keyboard_japanese_obj.showCandidates(0,'ね',['音','根','直','寝','子','袮'],['年間','狙い','年金','年生','年令','値上げ','年度','年内','燃料','値段','年末','願い','熱','熱心','値下げ','熱帯','根本','念','念頭','年々'],['sound','root (of a plant)','price','sleep','first sign of Chinese zodiac (The Rat, 11pm-1am, north, November)','ancestral shrine'],['year (period of)','aim','annuity','pupil in ... year','age','price hike','year','by the end of the year','fuel','price','end-of-year','desire','fever','zeal','cut in price','tropics','root','sense','mind','years']);
  };
  this.cache['ぎ'] = function()  //gi
  {
Keyboard_japanese_obj.showCandidates(0,'ぎ',['義','技','儀','疑','誼','着','魏','妓','気','議','偽','擬','希'],['議員','議会','技術','議長','業界','業者','行政','白銀','銀行','議席','疑問','業務','議論','疑惑','義務','逆転','業績','銀座','犠牲者','犠牲'],['morality','technique','ceremony','doubt','friendship','clothes','Kingdom of Wei','geisha','-like nature','discussion','(logic) false','pseudo-','Greece'],['member of the Diet, congress or parliament','Diet','art','chairman','industry','trader','administration','silver','bank','parliamentary seat','question','business','argument','doubt','duty','(sudden) change','achievement','Ginza (shopping district in Tokyo)','victim','victim']);
  };
  this.cache['ひ'] = function()  //hi
  {
Keyboard_japanese_obj.showCandidates(0,'ひ',['火','陽','灯し火','緋','妃','比','飛','否','費','非','冰','檜','曾','羆','被','杼','悲','脾','剕','女の子奴'],['東','光','被告','左','必用','一','人々','批判','東','百','東','被害','東北','秘書','非常','独り','費用','評価','表現','表情'],['fire','day','light','scarlet','princess','ratio','rook (shogi)','no','cost','fault','ice','hinoki cypress (Chamaecyparis obtusa)','great (i.e. great-grandson, great-grandmother)','brown bear (Ursus arctos)','indicates the target of an activity','shuttle (of a loom)','karuna (compassion)','spleen','cutting off the leg at the knee (form of punishment in ancient China)','female slave'],['east','light','defendant','left','necessary','one','each person','criticism','east','100','east','damage','north-east','(private) secretary','emergency','one person','cost','valuation','expression','facial expression']);
  };

  this.cache['か'] = function()  //ka
  {
Keyboard_japanese_obj.showCandidates(0,'か',['加','可','課','鹿','科','蚊','架','佳','戈','化','日','顆','過','下','果','家','箇','個','火','夏','荷','菓'],['会員','海外','改革','会議','解決','会見','会社','改正','会談','会長','開発','恢復','顔','価格','客','拡大','閣僚','過去','家族','課題'],['addition','passable','lesson','deer (esp. the sika deer, Cervus nippon)','department','mosquito','unit of equipment','beautiful','ge (ancient Chinese dagger-axe)','action of making something','day of month','counter for grains and small spheres','surplus- (attaches to start of Sino-Japanese words)','under (being in said condition or environment)','phala (attained state, result)','-ist (used after a noun indicating someone\'s occupation, pursuits, disposition, etc.)','counter for the ichi-ni-san counting system (usu. directly preceding the item being counted)','counter for the ichi-ni-san counting system (usu. directly preceding the item being counted)','Tuesday','Xia (dynasty of China; perhaps mythological)','counter for loads (that can be carried on one\'s shoulders)','fruit'],['member','foreign','reform','meeting','settlement','interview','company','revision','conversation','president (of a society)','development','recovery (from illness)','face (person)','price','guest','magnification','cabinet ministers','the past','family','subject']);
  };
  this.cache['せ'] = function()  //se
  {
Keyboard_japanese_obj.showCandidates(0,'せ',['湍','畝','脊'],['政界','生活','政権','政策','生産','政治','政治家','成長','制度','政党','政府','勢力','世界','責任','積極的','千','選挙','宣言','戦後','選手'],['shallows','se (Japanese unit of area equal to 30 tsubo, ~99.174 m.sq.)','back'],['political world','living','(political) administration','political measures','production','politics','politician','growth','system','(member of) political party','government','influence','the world','duty','assertive','1,000','election','declaration','postwar period','player (in game)']);
  };
  this.cache['は'] = function()  //ha
  {
Keyboard_japanese_obj.showCandidates(0,'は',['葉','歯','刃','派','破','刺羽'],['背景','派遣','八','八月','初','発言','華','咄','母','春','判決','反対','判断','販売','博','夫人','取っ手','柱','発行','発展'],['leaf','tooth','edge (of a knife or sword)','clique','(in gagaku or noh) middle section of a song','large fan-shaped object held by an attendant and used to conceal the face of a noble, etc.'],['background','dispatch','eight','August','first','utterance','flower','talk','mother','spring','judicial decision','opposition','judgement','sales','doctor','wife','handle','pillar','issue (publications)','development']);
  };
  this.cache['た'] = function()  //ta
  {
Keyboard_japanese_obj.showCandidates(0,'た',['他','誰','多','田','咫'],['対応','大会','対策','対象','体制','台湾','立場','民','体験','大国','大使','大切','態度','大平洋','大変','逮捕','対立','対話','確','多数'],['other (esp. people and abstract matters)','who','multi-','rice field','distance between outstretched thumb and middle finger (approx. 18 cm)'],['interaction','convention','counter-plan','target','order','Taiwan','standpoint','nation','personal experience','large country','ambassador','important','attitude','Pacific Ocean','very','arrest','confrontation','interactive','certain','great number']);
  };
  this.cache['け'] = function()  //ke
  {
Keyboard_japanese_obj.showCandidates(0,'け',['毛','仮','家','卦','異','気','罫'],['経営','計画','景気','経済','警察','契約','結果','決議','決定','辞','研究','研究所','研究所','献金','建設','憲法','経験','傾向','警視庁','結局'],['hair','lacking substance and existing in name only','house (e.g. of Tokugawa)','divination sign','difference (from one another)','sign','line'],['management','plan','condition','economics','police','contract','result','resolution','decision','language','study','research establishment (institute, laboratory, etc.)','research establishment (institute, laboratory, etc.)','donation','construction','constitution','experience','tendency','Metropolitan Police Department (esp. Tokyo)','after all']);
  };
  this.cache['そ'] = function()  //so
  {
Keyboard_japanese_obj.showCandidates(0,'そ',['素','祖','俎','疎'],['総会','葬儀','総合','捜査','総裁','総選挙','組織','措置','総額','早期','相互','相談','装置','総長','双方','総務','総理','訴訟','存在','相当'],['plain, white silk','ancestor','altar of sacrifice','sparse'],['general meeting','funeral service','synthesis','search (esp. in criminal investigations)','president','general election (of the lower house)','organization','measure','sum total','early stage','mutual','consultation','equipment','(college) president','two way','general business (affairs)','prime minister','litigation','existence','befitting']);
  };
  this.cache['ま'] = function()  //ma
  {
Keyboard_japanese_obj.showCandidates(0,'ま',['魔','間','真'],['毎日','前日','町','毎年','毎年','優る','幕','摩擦','松','窗','窓口','麻薬','満塁','毎月','毎週','毎月','前向き','負け','孫','實に'],['demon','space','just'],['every day','previous day','town','every year','every year','to excel','curtain','friction','pine tree','window','ticket window','narcotic drugs','bases loaded (baseball)','every month','every week','every month','facing forward','defeat','grandchild','indeed']);
  };
  this.cache['だ'] = function()  //da
  {
Keyboard_japanese_obj.showCandidates(0,'だ',['兌'],['台','大学','大統領','代表','段階','男子','男性','団体','男女','大規模','大臣','大人','代理','妥協','打撃','出す','打線','大学院','代議','代行'],['dui (one of the trigrams of the I Ching: swamp, west)'],['stand','post-secondary education institution, incl. university, college, etc.','president','representative','gradation','youth','man','organization','man and woman','large-scale','cabinet minister','adult','representation','compromise','blow','to take out','baseball lineup','graduate school','representing others in a conference','acting as agent']);
  };
  this.cache['げ'] = function()  //ge
  {
Keyboard_japanese_obj.showCandidates(0,'げ',['気','下','偈','夏'],['原因','現在','現実','現場','原則','現地','現場','芸術','劇場','現行','現状','原子力','減税','現代','劇','下車','現金','原告','減少','現象'],['seeming','lowness (of degree, value, etc.)','gatha (poetic verse of a scripture)','summer (on the lunisolar calendar: 16th day of the 4th month to the 15th day of the 7th month)'],['cause','now','reality','actual spot','principle','actual place','actual spot','(fine) art','theatre','present','present condition','atomic energy','tax reduction','nowadays','drama','alighting (from train, bus, etc.)','cash','plaintiff','decrease','phenomenon']);
  };
  this.cache['も'] = function()  //ki
  {
Keyboard_japanese_obj.showCandidates(0,'も',['藻','喪','面','裳'],['目的','目標','喪主','最も','百','問題','森','文書','文字','物語','模様','門','文字','文部省','申し込み','盛り込む','問題点','基','木造','木材'],['duckweed','mourning','face','ancient skirt'],['purpose','mark','chief mourner','most','100','problem','forest','document','letter (of alphabet)','tale','pattern','gate','letter (of alphabet)','Ministry of Education, Culture, Sports, Science and Technology','application','to incorporate','the point at issue','origin','wooden','lumber']);
  };



// romaji sequences will be taken from this table and put into what effectively
// acts as a hash-map, and the longest substring that has a kana equivalent
// will be used.
  this.romajitable = [
    [",", "、", "、"],
    ["-", "ー", "ー"],
    [".", "。", "。"],
    ["\\,", ",", ","],
    ["\\.", ".", "."],
    ["\\[", "[", "["],
    ["\\\\", "\\", "\\"],
    ["\\]", "]", "]"],
    ["a", "あ", "ア"],
    ["aa", "ああ", "アー"],
    ["b", "ば", "バ"],
    ["ba", "ば", "バ"],
    ["bb", "っぶ", "ッブ"],
    ["bba", "っば", "ッバ"],
    ["bbaa", "っばあ", "ッバー"],
    ["bbe", "っべ", "ッベ"],
    ["bbee", "っべえ", "ッベー"],
    ["bbi", "っび", "ッビ"],
    ["bbii", "っびい", "ッビー"],
    ["bbo", "っぼ", "ッボ"],
    ["bboo", "っぼお", "ッボー"],
    ["bbou", "っぼう", "ッボー"],
    ["bbu", "っぶ", "ッブ"],
    ["bbuu", "っぶう", "ッブー"],
    ["bbya", "っびゃ", "ッビャ"],
    ["bbyaa", "っびゃあ", "ッビャー"],
    ["bbye", "っびぇ", "ッビェ"],
    ["bbyee", "っびぇえ", "ッビェー"],
    ["bbyi", "っびぃ", "ッビィ"],
    ["bbyii", "っびぃい", "ッビィー"],
    ["bbyo", "っびょ", "ッビョ"],
    ["bbyoo", "っびょお", "ッビョー"],
    ["bbyou", "っびょう", "ッビョー"],
    ["bbyu", "っびゅ", "ッビュ"],
    ["bbyuu", "っびゅう", "ッビュー"],
    ["be", "べ", "ベ"],
    ["bee", "べえ", "ベー"],
    ["bi", "び", "ビ"],
    ["bii", "びい", "ビー"],
    ["bo", "ぼ", "ボ"],
    ["boo", "ぼお", "ボー"],
    ["bou", "ぼう", "ボー"],
    ["bu", "ぶ", "ブ"],
    ["buu", "ぶう", "ブー"],
    ["by", "びゃ", "ビャ"],
    ["bya", "びゃ", "ビャ"],
    ["byaa", "びゃあ", "ビャー"],
    ["bye", "びぇ", "ビェ"],
    ["byee", "びぇえ", "ビェー"],
    ["byi", "びぃ", "ビィ"],
    ["byii", "びぃい", "ビィー"],
    ["byo", "びょ", "ビョ"],
    ["byoo", "びょお", "ビョー"],
    ["byou", "びょう", "ビョー"],
    ["byu", "びゅ", "ビュ"],
    ["byuu", "びゅう", "ビュー"],
    ["c", "か", "カ"],
    ["cc", "っか", "ッカ"],
    ["cch", "っちゃ", "ッチャ"],
    ["ccha", "っちゃ", "ッチャ"],
    ["cchaa", "っちゃあ", "ッチャー"],
    ["cche", "っちぇ", "ッチェ"],
    ["cchee", "っちぇえ", "ッチェエ"],
    ["cchi", "っち", "ッチ"],
    ["cchii", "っちい", "ッチー"],
    ["ccho", "っちょ", "ッチョ"],
    ["cchoo", "っちょお", "ッチョー"],
    ["cchou", "っちょう", "ッチョー"],
    ["cchu", "っちゅ", "ッチュ"],
    ["cchuu", "っちゅう", "ッチュー"],
    ["ch", "ちゃ", "チャ"],
    ["cha", "ちゃ", "チャ"],
    ["chaa", "ちゃあ", "チャー"],
    ["che", "ちぇ", "チェ"],
    ["chee", "ちぇえ", "チェエ"],
    ["chi", "ち", "チ"],
    ["chii", "ちい", "チー"],
    ["cho", "ちょ", "チョ"],
    ["choo", "ちょお", "チョー"],
    ["chou", "ちょう", "チョー"],
    ["chu", "ちゅ", "チュ"],
    ["chuu", "ちゅう", "チュー"],
    ["ck", "っか", "ッカ"],
    ["cka", "っか", "ッカ"],
    ["ckaa", "っかあ", "ッカー"],
    ["cke", "っけ", "ッケ"],
    ["ckee", "っけえ", "ッケー"],
    ["cki", "っき", "ッキ"],
    ["ckii", "っきい", "ッキー"],
    ["cko", "っこ", "ッコ"],
    ["ckoo", "っこお", "ッコー"],
    ["ckou", "っこう", "ッコー"],
    ["cku", "っく", "ック"],
    ["ckuu", "っくう", "ックー"],
    ["ckw", "っくぁ", "ックァ"],
    ["ckwa", "っくぁ", "ックァ"],
    ["ckwaa", "っくぁあ", "ックァー"],
    ["ckwe", "っくぇ", "ックェ"],
    ["ckwee", "っくぇえ", "ックェー"],
    ["ckwi", "っくぃ", "ックィ"],
    ["ckwii", "っくぃい", "ックィー"],
    ["ckwo", "っくぉ", "ックォ"],
    ["ckwoo", "っくぉお", "ックォー"],
    ["ckwou", "っくぉう", "ックォー"],
    ["ckwu", "っくぅ", "ックゥ"],
    ["ckwuu", "っくぅう", "ックゥー"],
    ["cky", "っきゃ", "ッキャ"],
    ["ckya", "っきゃ", "ッキャ"],
    ["ckyaa", "っきゃあ", "ッキャー"],
    ["ckye", "っきぇ", "ッキェ"],
    ["ckyee", "っきぇえ", "ッキェー"],
    ["ckyi", "っきぃ", "ッキィ"],
    ["ckyii", "っきぃい", "ッキィー"],
    ["ckyo", "っきょ", "ッキョ"],
    ["ckyoo", "っきょお", "ッキョー"],
    ["ckyou", "っきょう", "ッキョー"],
    ["ckyu", "っきゅ", "ッキュ"],
    ["ckyuu", "っきゅう", "ッキュー"],
    ["d", "だ", "ダ"],
    ["da", "だ", "ダ"],
    ["daa", "だあ", "ダー"],
    ["dd", "っだ", "ッダ"],
    ["dda", "っだ", "ッダ"],
    ["ddaa", "っだあ", "ッダー"],
    ["dde", "っで", "ッデ"],
    ["ddee", "っでえ", "ッデー"],
    ["ddj", "っぢゃ", "ッヂャ"],
    ["ddja", "っぢゃ", "ッヂャ"],
    ["ddjaa", "っぢゃあ", "ッヂャー"],
    ["ddje", "っぢぇ", "ッヂェ"],
    ["ddjee", "っぢぇえ", "ッヂェー"],
    ["ddji", "っぢ", "ッヂ"],
    ["ddjii", "っぢい", "ッヂー"],
    ["ddjo", "っぢょ", "ッヂョ"],
    ["ddjoo", "っぢょお", "ッヂョー"],
    ["ddjou", "っぢょう", "ッヂョー"],
    ["ddju", "っぢゅ", "ッヂュ"],
    ["ddjuu", "っぢゅう", "ッヂュー"],
    ["ddo", "っど", "ッド"],
    ["ddoo", "っどお", "ッドー"],
    ["ddou", "っどう", "ッドー"],
    ["ddy", "っぢゃ", "ッヂャ"],
    ["ddya", "っぢゃ", "ッヂャ"],
    ["ddyaa", "っぢゃあ", "ッヂャー"],
    ["ddye", "っぢぇ", "ッヂェ"],
    ["ddyee", "っぢぇえ", "ッヂェー"],
    ["ddyi", "っぢ", "ッヂ"],
    ["ddyii", "っぢい", "ッヂー"],
    ["ddyo", "っぢょ", "ッヂョ"],
    ["ddyoo", "っぢょお", "ッヂョー"],
    ["ddyou", "っぢょう", "ッヂョー"],
    ["ddyu", "っぢゅ", "ッヂュ"],
    ["ddyuu", "っぢゅう", "ッヂュー"],
    ["ddz", "っぢゃ", "っぢゃ"],
    ["ddza", "っぢゃ", "っぢゃ"],
    ["ddzaa", "っぢゃあ", "っぢゃー"],
    ["ddze", "っぢぇ", "ッヂェ"],
    ["ddzee", "っぢぇえ", "ッヂェー"],
    ["ddzi", "っぢ", "ッヂ"],
    ["ddzii", "っぢい", "ッヂー"],
    ["ddzo", "っぢょ", "ッヂョ"],
    ["ddzoo", "っぢょお", "ッヂョー"],
    ["ddzou", "っぢょう", "ッヂョー"],
    ["ddzu", "っづ", "ッヅ"],
    ["ddzuu", "っづう", "ッヅー"],
    ["de", "で", "デ"],
    ["dee", "でえ", "デー"],
    ["di", "でぃ", "ディ"],
    ["dii", "でぃい", "ディー"],
    ["dja", "ぢゃ", "ヂャ"],
    ["djaa", "ぢゃあ", "ヂャア"],
    ["dje", "ぢぇ", "ヂェ"],
    ["djee", "ぢぇえ", "ヂェー"],
    ["dji", "ぢ", "ヂ"],
    ["djii", "ぢい", "ヂー"],
    ["djo", "ぢょ", "ヂョ"],
    ["djoo", "ぢょお", "ヂョー"],
    ["djou", "ぢょう", "ヂョー"],
    ["dju", "ぢゅ", "ヂュ"],
    ["djuu", "ぢゅう", "ヂュー"],
    ["do", "ど", "ド"],
    ["doo", "どお", "ドー"],
    ["dou", "どう", "ドー"],
    ["du", "どぅ", "ドゥ"],
    ["duu", "どぅう", "ドゥー"],
    ["dya", "ぢゃ", "ヂャ"],
    ["dyaa", "ぢゃあ", "ヂャア"],
    ["dye", "ぢぇ", "ヂェ"],
    ["dyee", "ぢぇえ", "ヂェー"],
    ["dyi", "ぢ", "ヂ"],
    ["dyii", "ぢい", "ヂー"],
    ["dyo", "ぢょ", "ヂョ"],
    ["dyoo", "ぢょお", "ヂョー"],
    ["dyou", "ぢょう", "ヂョー"],
    ["dyu", "ぢゅ", "ヂュ"],
    ["dyuu", "ぢゅう", "ヂュー"],
    ["dza", "ぢゃ", "ヂャ"],
    ["dzaa", "ぢゃあ", "ヂャア"],
    ["dze", "ぢぇ", "ヂェ"],
    ["dzee", "ぢぇえ", "ヂェー"],
    ["dzi", "ぢ", "ヂ"],
    ["dzii", "ぢい", "ヂー"],
    ["dzo", "ぢょ", "ヂョ"],
    ["dzoo", "ぢょお", "ヂョー"],
    ["dzou", "ぢょう", "ヂョー"],
    ["dzu", "づ", "ヅ"],
    ["dzuu", "づう", "ヅー"],
    ["e", "え", "エ"],
    ["ee", "ええ", "エー"],
    ["f", "ふぁ", "ファ"],
    ["fa", "ふぁ", "ファ"],
    ["faa", "ふぁあ", "ファー"],
    ["fe", "ふぇ", "フェ"],
    ["fee", "ふぇえ", "フェー"],
    ["ff", "っふぁ", "ッファ"],
    ["ffa", "っふぁ", "ッファ"],
    ["ffaa", "っふぁあ", "ッファー"],
    ["ffe", "っふぇ", "ッフェ"],
    ["ffee", "っふぇえ", "ッフェー"],
    ["ffi", "っふぃ", "ッフィ"],
    ["ffii", "っふぃい", "ッフィー"],
    ["ffo", "っふぉ", "ッフォ"],
    ["ffoo", "っふぉお", "ッフォー"],
    ["ffou", "っふぉう", "ッフォー"],
    ["ffu", "っふ", "ッフ"],
    ["ffuu", "っふう", "ッフー"],
    ["ffa", "っふゃ", "ッフャ"],
    ["ffya", "っふゃ", "ッフャ"],
    ["ffyaa", "っふゃあ", "ッフャー"],
    ["ffye", "っふぇ", "ッフェ"],
    ["ffyee", "っふぇえ", "ッフェー"],
    ["ffyi", "っふぃ", "ッフィ"],
    ["ffyii", "っふぃい", "ッフィー"],
    ["ffyo", "っふょ", "ッフョ"],
    ["ffyoo", "っふょお", "ッフョー"],
    ["ffyou", "っふょう", "ッフョー"],
    ["ffyu", "っふゅ", "ッフュ"],
    ["ffyuu", "っふゅう", "ッフュー"],
    ["fi", "ふぃ", "フィ"],
    ["fii", "ふぃい", "フィー"],
    ["fo", "ふぉ", "フォ"],
    ["foo", "ふぉお", "フォー"],
    ["fou", "ふぉう", "フォー"],
    ["fu", "ふ", "フ"],
    ["fuu", "ふう", "フー"],
    ["fya", "ふゃ", "フャ"],
    ["fyaa", "ふゃあ", "フャー"],
    ["fye", "ふぇ", "フェ"],
    ["fyee", "ふぇえ", "フェー"],
    ["fyi", "ふぃ", "フィ"],
    ["fyii", "ふぃい", "フィー"],
    ["fyo", "ふょ", "フョ"],
    ["fyoo", "ふょお", "フョー"],
    ["fyou", "ふょう", "フョー"],
    ["fyu", "ふゅ", "フュ"],
    ["fyuu", "ふゅう", "フュー"],
    ["g", "が", "ガ"],
    ["ga", "が", "ガ"],
    ["gaa", "があ", "ガー"],
    ["ge", "げ", "ゲ"],
    ["gee", "げえ", "ゲー"],
    ["gg", "っが", "ッガ"],
    ["gga", "っが", "ッガ"],
    ["ggaa", "っがあ", "ッガー"],
    ["gge", "っげ", "ッゲ"],
    ["ggee", "っげえ", "ッゲー"],
    ["ggi", "っぎ", "ッギ"],
    ["ggii", "っぎい", "ッギー"],
    ["ggo", "っご", "ッゴ"],
    ["ggoo", "っごお", "ッゴー"],
    ["ggou", "っごう", "ッゴー"],
    ["ggu", "っぐ", "ッグ"],
    ["gguu", "っぐう", "ッグー"],
    ["ggw", "っぐぁ", "ッグァ"],
    ["ggwa", "っぐぁ", "ッグァ"],
    ["ggwaa", "っぐぁあ", "ッグァー"],
    ["ggwe", "っぐぇ", "ッグェ"],
    ["ggwee", "っぐぇえ", "ッグェー"],
    ["ggwi", "っぐぃ", "ッグィ"],
    ["ggwii", "っぐぃい", "ッグィー"],
    ["ggwo", "っぐぉ", "ッグォ"],
    ["ggwoo", "っぐぉお", "ッグォー"],
    ["ggwou", "っぐぉう", "ッグォー"],
    ["ggwu", "っぐぅ", "ッグゥ"],
    ["ggwuu", "っぐぅう", "ッグゥー"],
    ["ggy", "っぎゃ", "ッギャ"],
    ["ggya", "っぎゃ", "ッギャ"],
    ["ggyaa", "っぎゃあ", "ッギャー"],
    ["ggye", "っぎぇ", "ッギェ"],
    ["ggyee", "っぎぇえ", "ッギェー"],
    ["ggyi", "っぎぃ", "ッギィ"],
    ["ggyii", "っぎぃい", "ッギィー"],
    ["ggyo", "っぎょ", "ッギョ"],
    ["ggyoo", "っぎょお", "ッギョー"],
    ["ggyou", "っぎょう", "ッギョー"],
    ["ggyu", "っぎゅ", "ッギュ"],
    ["ggyuu", "っぎゅう", "ッギュー"],
    ["gi", "ぎ", "ギ"],
    ["gii", "ぎい", "ギー"],
    ["go", "ご", "ゴ"],
    ["goo", "ごお", "ゴー"],
    ["gou", "ごう", "ゴー"],
    ["gu", "ぐ", "グ"],
    ["guu", "ぐう", "グー"],
    ["gw", "ぐぁ", "グァ"],
    ["gwa", "ぐぁ", "グァ"],
    ["gwaa", "ぐぁあ", "グァー"],
    ["gwe", "ぐぇ", "グェ"],
    ["gwee", "ぐぇえ", "グェー"],
    ["gwi", "ぐぃ", "グィ"],
    ["gwii", "ぐぃい", "グィー"],
    ["gwo", "ぐぉ", "グォ"],
    ["gwoo", "ぐぉお", "グォー"],
    ["gwou", "ぐぉう", "グォー"],
    ["gwu", "ぐぅ", "グゥ"],
    ["gwuu", "ぐぅう", "グゥー"],
    ["gy", "ぎゃ", "ギャ"],
    ["gya", "ぎゃ", "ギャ"],
    ["gyaa", "ぎゃあ", "ギャー"],
    ["gye", "ぎぇ", "ギェ"],
    ["gyee", "ぎぇえ", "ギェー"],
    ["gyi", "ぎぃ", "ギィ"],
    ["gyii", "ぎぃい", "ギィー"],
    ["gyo", "ぎょ", "ギョ"],
    ["gyoo", "ぎょお", "ギョー"],
    ["gyou", "ぎょう", "ギョー"],
    ["gyu", "ぎゅ", "ギュ"],
    ["gyuu", "ぎゅう", "ギュー"],
    ["h", "は", "ハ"],
    ["ha", "は", "ハ"],
    ["haa", "はあ", "ハー"],
    ["he", "へ", "ヘ"],
    ["hee", "へえ", "ヘー"],
    ["hh", "っは", "ッハ"],
    ["hha", "っは", "ッハ"],
    ["hhaa", "っはあ", "ッハー"],
    ["hhe", "っへ", "ッヘ"],
    ["hhee", "っへえ", "ッヘー"],
    ["hhi", "っひ", "ッヒ"],
    ["hhii", "っひい", "ッヒー"],
    ["hho", "っほ", "ッホ"],
    ["hhoo", "っほお", "ッホー"],
    ["hhou", "っほう", "ッホー"],
    ["hhu", "っふ", "ッフ"],
    ["hhuu", "っふう", "ッフー"],
    ["hhy", "っひゃ", "ッヒャ"],
    ["hhya", "っひゃ", "ッヒャ"],
    ["hhyaa", "っひゃあ", "ッヒャー"],
    ["hhye", "っひぇ", "ッヒェ"],
    ["hhyee", "っひぇえ", "ッヒェー"],
    ["hhyi", "っひぃ", "ッヒィ"],
    ["hhyii", "っひぃい", "ッヒィー"],
    ["hhyo", "っひょ", "ッヒョ"],
    ["hhyoo", "っひょお", "ッヒョー"],
    ["hhyou", "っひょう", "ッヒョー"],
    ["hhyu", "っひゅ", "ッヒュ"],
    ["hhyuu", "っひゅう", "ッヒュー"],
    ["hi", "ひ", "ヒ"],
    ["hii", "ひい", "ヒー"],
    ["ho", "ほ", "ホ"],
    ["hoo", "ほお", "ホー"],
    ["hou", "ほう", "ホー"],
    ["hu", "ふ", "フ"],
    ["huu", "ふう", "フー"],
    ["hy", "ひゃ", "ヒャ"],
    ["hya", "ひゃ", "ヒャ"],
    ["hyaa", "ひゃあ", "ヒャー"],
    ["hye", "ひぇ", "ヒェ"],
    ["hyee", "ひぇえ", "ヒェー"],
    ["hyi", "ひぃ", "ヒィ"],
    ["hyii", "ひぃい", "ヒィー"],
    ["hyo", "ひょ", "ヒョ"],
    ["hyoo", "ひょお", "ヒョー"],
    ["hyou", "ひょう", "ヒョー"],
    ["hyu", "ひゅ", "ヒュ"],
    ["hyuu", "ひゅう", "ヒュー"],
    ["i", "い", "イ"],
    ["ii", "いい", "イイ"],
    ["j", "じゃ", "ジャ"],
    ["ja", "じゃ", "ジャ"],
    ["jaa", "じゃあ", "ジャー"],
    ["je", "じぇ", "ジェ"],
    ["jee", "じぇえ", "ジェー"],
    ["ji", "じ", "ジ"],
    ["jii", "じい", "ジー"],
    ["jj", "っじゃ", "ッジャ"],
    ["jja", "っじゃ", "ッジャ"],
    ["jjaa", "っじゃあ", "ッジャー"],
    ["jje", "っじぇ", "ッジェ"],
    ["jjee", "っじぇえ", "ッジェー"],
    ["jji", "っじ", "ッジ"],
    ["jjii", "っじい", "ッジー"],
    ["jjo", "っじょ", "ッジョ"],
    ["jjoo", "っじょお", "ッジョー"],
    ["jjou", "っじょう", "ッジョー"],
    ["jju", "っじゅ", "ッジュ"],
    ["jjuu", "っじゅう", "ッジュー"],
    ["jjy", "っじゃ", "ッジャ"],
    ["jjya", "っじゃ", "ッジャ"],
    ["jjyaa", "っじゃあ", "ッジャー"],
    ["jjye", "っじぇ", "ッジェ"],
    ["jjyee", "っじぇえ", "ッジェー"],
    ["jjyi", "っじぃ", "ッジィ"],
    ["jjyii", "っじぃい", "ッジィー"],
    ["jjyo", "っじょ", "ッジョ"],
    ["jjyoo", "っじょお", "ッジョー"],
    ["jjyou", "っじょう", "ッジョー"],
    ["jjyu", "っじゅ", "ッジュ"],
    ["jjyuu", "っじゅう", "ッジュー"],
    ["jo", "じょ", "ジョ"],
    ["joo", "じょお", "ジョー"],
    ["jou", "じょう", "ジョー"],
    ["ju", "じゅ", "ジュ"],
    ["juu", "じゅう", "ジュー"],
    ["jy", "じゃ", "ジャ"],
    ["jya", "じゃ", "ジャ"],
    ["jyaa", "じゃあ", "ジャー"],
    ["jye", "じぇ", "ジェ"],
    ["jyee", "じぇえ", "ジェー"],
    ["jyi", "じぃ", "ジィ"],
    ["jyii", "じぃい", "ジィー"],
    ["jyo", "じょ", "ジョ"],
    ["jyoo", "じょお", "ジョー"],
    ["jyou", "じょう", "ジョー"],
    ["jyu", "じゅ", "ジュ"],
    ["jyuu", "じゅう", "ジュー"],
    ["k", "か", "カ"],
    ["ka", "か", "カ"],
    ["kaa", "かあ", "カー"],
    ["ke", "け", "ケ"],
    ["kee", "けえ", "ケー"],
    ["ki", "き", "キ"],
    ["kii", "きい", "キー"],
    ["kk", "っか", "ッカ"],
    ["kka", "っか", "ッカ"],
    ["kkaa", "っかあ", "ッカー"],
    ["kke", "っけ", "ッケ"],
    ["kkee", "っけえ", "ッケー"],
    ["kki", "っき", "ッキ"],
    ["kkii", "っきい", "ッキー"],
    ["kko", "っこ", "ッコ"],
    ["kkoo", "っこお", "ッコー"],
    ["kkou", "っこう", "ッコー"],
    ["kku", "っく", "ック"],
    ["kkuu", "っくう", "ックー"],
    ["kkw", "っくぁ", "ックァ"],
    ["kkwa", "っくぁ", "ックァ"],
    ["kkwaa", "っくぁあ", "ックァー"],
    ["kkwe", "っくぇ", "ックェ"],
    ["kkwee", "っくぇえ", "ックェー"],
    ["kkwi", "っくぃ", "ックィ"],
    ["kkwii", "っくぃい", "ックィー"],
    ["kkwo", "っくぉ", "ックォ"],
    ["kkwoo", "っくぉお", "ックォー"],
    ["kkwou", "っくぉう", "ックォー"],
    ["kkwu", "っくぅ", "ックゥ"],
    ["kkwuu", "っくぅう", "ックゥー"],
    ["kky", "っきゃ", "ッキャ"],
    ["kkya", "っきゃ", "ッキャ"],
    ["kkyaa", "っきゃあ", "ッキャー"],
    ["kkye", "っきぇ", "ッキェ"],
    ["kkyee", "っきぇえ", "ッキェー"],
    ["kkyi", "っきぃ", "ッキィ"],
    ["kkyii", "っきぃい", "ッキィー"],
    ["kkyo", "っきょ", "ッキョ"],
    ["kkyoo", "っきょお", "ッキョー"],
    ["kkyou", "っきょう", "ッキョー"],
    ["kkyu", "っきゅ", "ッキュ"],
    ["kkyuu", "っきゅう", "ッキュー"],
    ["ko", "こ", "コ"],
    ["koo", "こお", "コー"],
    ["kou", "こう", "コー"],
    ["kqu", "っくぅ", "ックゥ"],
    ["kqua", "っくぁ", "ックァ"],
    ["kquaa", "っくぁあ", "ックァー"],
    ["kque", "っくぇ", "ックェ"],
    ["kquee", "っくぇえ", "ックェー"],
    ["kqui", "っくぃ", "ックィ"],
    ["kquii", "っくぃい", "ックィー"],
    ["kquo", "っくぉ", "ックォ"],
    ["kquoo", "っくぉお", "ックォー"],
    ["kquou", "っくぉう", "ックォー"],
    ["kquu", "っくぅう", "ックゥー"],
    ["ku", "く", "ク"],
    ["kuu", "くう", "クー"],
    ["kw", "くぁ", "クァ"],
    ["kwa", "くぁ", "クァ"],
    ["kwaa", "くぁあ", "クァー"],
    ["kwe", "くぇ", "クェ"],
    ["kwee", "くぇえ", "クェー"],
    ["kwi", "くぃ", "クィ"],
    ["kwii", "くぃい", "クィー"],
    ["kwo", "くぉ", "クォ"],
    ["kwoo", "くぉお", "クォー"],
    ["kwou", "くぉう", "クォー"],
    ["kwu", "くぅ", "クゥ"],
    ["kwuu", "くぅう", "クゥー"],
    ["ky", "きゃ", "キャ"],
    ["kya", "きゃ", "キャ"],
    ["kyaa", "きゃあ", "キャー"],
    ["kye", "きぇ", "キェ"],
    ["kyee", "きぇえ", "キェー"],
    ["kyi", "きぃ", "キィ"],
    ["kyii", "きぃい", "キィー"],
    ["kyo", "きょ", "キョ"],
    ["kyoo", "きょお", "キョー"],
    ["kyou", "きょう", "キョー"],
    ["kyu", "きゅ", "キュ"],
    ["kyuu", "きゅう", "キュー"],
    ["l", "ら", "ラ"],
    ["la", "ら", "ラ"],
    ["laa", "らあ", "ラー"],
    ["le", "れ", "レ"],
    ["lee", "れえ", "レー"],
    ["li", "り", "リ"],
    ["lii", "りい", "リー"],
    ["ll", "っら", "ッラ"],
    ["lla", "っら", "ッラ"],
    ["llaa", "っらあ", "ッラー"],
    ["lle", "っれ", "ッレ"],
    ["llee", "っれえ", "ッレー"],
    ["lli", "っり", "ッリ"],
    ["llii", "っりい", "ッリー"],
    ["llo", "っろ", "ッロ"],
    ["lloo", "っろお", "ッロー"],
    ["llou", "っろう", "ッロー"],
    ["llu", "っる", "ッル"],
    ["lluu", "っるう", "ッルー"],
    ["lly", "っりゃ", "ッラヤ"],
    ["llya", "っりゃ", "ッラヤ"],
    ["llyaa", "っりゃあ", "ッラヤー"],
    ["llye", "っりぇ", "ッリェ"],
    ["llyee", "っりぇえ", "ッリェー"],
    ["llyi", "っりぃ", "ッリィ"],
    ["llyii", "っりぃい", "ッリィー"],
    ["llyo", "っりょ", "ッリョ"],
    ["llyoo", "っりょお", "ッリョー"],
    ["llyou", "っりょう", "ッリョー"],
    ["llyu", "っりゅ", "ッリュ"],
    ["llyuu", "っりゅう", "ッリュー"],
    ["lo", "ろ", "ロ"],
    ["loo", "ろお", "ロー"],
    ["lou", "ろう", "ロー"],
    ["lu", "る", "ル"],
    ["luu", "るう", "ルー"],
    ["ly", "りゃ", "ラヤ"],
    ["lya", "りゃ", "ラヤ"],
    ["lyaa", "りゃあ", "ラヤー"],
    ["lye", "りぇ", "リェ"],
    ["lyee", "りぇえ", "リェー"],
    ["lyi", "りぃ", "リィ"],
    ["lyii", "りぃい", "リィー"],
    ["lyo", "りょ", "リョ"],
    ["lyoo", "りょお", "リョー"],
    ["lyou", "りょう", "リョー"],
    ["lyu", "りゅ", "リュ"],
    ["lyuu", "りゅう", "リュー"],
    ["m", "ま", "マ"],
    ["ma", "ま", "マ"],
    ["maa", "まあ", "マー"],
    ["mb", "んば", "ンバ"],
    ["mba", "んば", "ンバ"],
    ["mbe", "んべ", "ンベ"],
    ["mbee", "んべえ", "ンベー"],
    ["mbi", "んび", "ンビ"],
    ["mbii", "んびい", "ンビー"],
    ["mbo", "んぼ", "ンボ"],
    ["mboo", "んぼお", "ンボー"],
    ["mbou", "んぼう", "ンボー"],
    ["mbu", "んぶ", "ンブ"],
    ["mbuu", "んぶう", "ンブー"],
    ["mby", "んびゃ", "ンビャ"],
    ["mbya", "んびゃ", "ンビャ"],
    ["mbyaa", "んびゃあ", "ンビャー"],
    ["mbye", "んびぇ", "ンビェ"],
    ["mbyee", "んびぇえ", "ンビェー"],
    ["mbyi", "んびぃ", "ンビィ"],
    ["mbyii", "んびぃい", "ンビィー"],
    ["mbyo", "んびょ", "ンビョ"],
    ["mbyoo", "んびょお", "ンビョー"],
    ["mbyou", "んびょう", "ンビョー"],
    ["mbyu", "んびゅ", "ンビュ"],
    ["mbyuu", "んびゅう", "ンビュー"],
    ["me", "め", "メ"],
    ["mee", "めえ", "メー"],
    ["mi", "み", "ミ"],
    ["mii", "みい", "ミー"],
    ["mm", "んま", "ンマ"],
    ["mma", "んま", "ンマ"],
    ["mmaa", "んまあ", "ンマー"],
    ["mme", "んめ", "ンメ"],
    ["mmee", "んめえ", "ンメー"],
    ["mmi", "んみ", "ンミ"],
    ["mmii", "んみい", "ンミー"],
    ["mmo", "んも", "ンモ"],
    ["mmoo", "んもお", "ンモー"],
    ["mmou", "んもう", "ンモー"],
    ["mmu", "んむ", "ンム"],
    ["mmuu", "んむう", "ンムー"],
    ["mmy", "んみゃ", "ンミャ"],
    ["mmya", "んみゃ", "ンミャ"],
    ["mmyaa", "んみゃあ", "ンミャー"],
    ["mmye", "んみぇ", "ンミェ"],
    ["mmyee", "んみぇえ", "ンミェー"],
    ["mmyi", "んみぃ", "ンミィ"],
    ["mmyii", "んみぃい", "ンミィー"],
    ["mmyo", "んみょ", "ンミョ"],
    ["mmyoo", "んみょお", "ンミョー"],
    ["mmyou", "んみょう", "ンミョー"],
    ["mmyu", "んみゅ", "ンミュ"],
    ["mmyuu", "んみゅう", "ンミュー"],
    ["mo", "も", "モ"],
    ["moo", "もお", "モー"],
    ["mou", "もう", "モー"],
    ["mu", "む", "ム"],
    ["muu", "むう", "ムー"],
    ["my", "みゃ", "ミャ"],
    ["mya", "みゃ", "ミャ"],
    ["myaa", "みゃあ", "ミャー"],
    ["mye", "みぇ", "ミェ"],
    ["myee", "みぇえ", "ミェー"],
    ["myi", "みぃ", "ミィ"],
    ["myii", "みぃい", "ミィー"],
    ["myo", "みょ", "ミョ"],
    ["myoo", "みょお", "ミョー"],
    ["myou", "みょう", "ミョー"],
    ["myu", "みゅ", "ミュ"],
    ["myuu", "みゅう", "ミュー"],
    ["n", "ん", "ン"],
    ["n'", "ん", "ン"],
    ["na", "な", "ナ"],
    ["naa", "なあ", "ナー"],
    ["ne", "ね", "ネ"],
    ["nee", "ねえ", "ネー"],
    ["ni", "に", "ニ"],
    ["nii", "にい", "ニー"],
    ["no", "の", "ノ"],
    ["noo", "のお", "ノー"],
    ["nou", "のう", "ノー"],
    ["nu", "ぬ", "ヌ"],
    ["nuu", "ぬう", "ヌー"],
    ["ny", "にゃ", "ニャ"],
    ["nya", "にゃ", "ニャ"],
    ["nyaa", "にゃあ", "ニャー"],
    ["nye", "にぇ", "ニェ"],
    ["nyee", "にぇえ", "ニェー"],
    ["nyi", "にぃ", "ニィ"],
    ["nyii", "にぃい", "ニィー"],
    ["nyo", "にょ", "ニョ"],
    ["nyoo", "にょお", "ニョー"],
    ["nyou", "にょう", "ニョー"],
    ["nyu", "にゅ", "ニュ"],
    ["nyuu", "にゅう", "ニュー"],
    ["o", "お", "オ"],
    ["oo", "おお", "オー"],
    ["ou", "おう", "オー"],
    ["p", "ぱ", "パ"],
    ["pa", "ぱ", "パ"],
    ["paa", "ぱあ", "パー"],
    ["pe", "ぺ", "ペ"],
    ["pee", "ぺえ", "ペー"],
    ["pi", "ぴ", "ピ"],
    ["pii", "ぴい", "ピー"],
    ["po", "ぽ", "ポ"],
    ["poo", "ぽお", "ポー"],
    ["pou", "ぽう", "ポー"],
    ["pp", "っぱ", "ッパ"],
    ["ppa", "っぱ", "ッパ"],
    ["ppaa", "っぱあ", "ッパー"],
    ["ppe", "っぺ", "ッペ"],
    ["ppee", "っぺえ", "ッペー"],
    ["ppi", "っぴ", "ッピ"],
    ["ppii", "っぴい", "ッピー"],
    ["ppo", "っぽ", "ッポ"],
    ["ppoo", "っぽお", "ッポー"],
    ["ppou", "っぽう", "ッポー"],
    ["ppu", "っぷ", "ップ"],
    ["ppuu", "っぷう", "ップー"],
    ["ppy", "っぴゃ", "ッピャ"],
    ["ppya", "っぴゃ", "ッピャ"],
    ["ppyaa", "っぴゃあ", "ッピャー"],
    ["ppye", "っぴぇ", "ッピェ"],
    ["ppyee", "っぴぇえ", "ッピェー"],
    ["ppyi", "っぴぃ", "ッピィ"],
    ["ppyii", "っぴぃい", "ッピィー"],
    ["ppyo", "っぴょ", "ッピョ"],
    ["ppyoo", "っぴょお", "ッピョー"],
    ["ppyou", "っぴょう", "ッピョー"],
    ["ppyu", "っぴゅ", "ッピュ"],
    ["ppyuu", "っぴゅう", "ッピュー"],
    ["pu", "ぷ", "プ"],
    ["puu", "ぷう", "プー"],
    ["py", "ぴゃ", "ピャ"],
    ["pya", "ぴゃ", "ピャ"],
    ["pyaa", "ぴゃあ", "ピャー"],
    ["pye", "ぴぇ", "ピェ"],
    ["pyee", "ぴぇえ", "ピェー"],
    ["pyi", "ぴぃ", "ピィ"],
    ["pyii", "ぴぃい", "ピィー"],
    ["pyo", "ぴょ", "ピョ"],
    ["pyoo", "ぴょお", "ピョー"],
    ["pyou", "ぴょう", "ピョー"],
    ["pyu", "ぴゅ", "ピュ"],
    ["pyuu", "ぴゅう", "ピュー"],
    ["q", "く", "ク"],
    ["qqu", "っくぅ", "ックゥ"],
    ["qqua", "っくぁ", "ックァ"],
    ["qquaa", "っくぁあ", "ックァー"],
    ["qque", "っくぇ", "ックェ"],
    ["qquee", "っくぇえ", "ックェー"],
    ["qqui", "っくぃ", "ックィ"],
    ["qquii", "っくぃい", "ックィー"],
    ["qquo", "っくぉ", "ックォ"],
    ["qquoo", "っくぉお", "ックォー"],
    ["qquou", "っくぉう", "ックォー"],
    ["qquu", "っくぅう", "ックゥー"],
    ["qu", "くぅ", "クゥ"],
    ["qua", "くぁ", "クァ"],
    ["quaa", "くぁあ", "クァー"],
    ["que", "くぇ", "クェ"],
    ["quee", "くぇえ", "クェー"],
    ["qui", "くぃ", "クィ"],
    ["quii", "くぃい", "クィー"],
    ["quo", "くぉ", "クォ"],
    ["quoo", "くぉお", "クォー"],
    ["quou", "くぉう", "クォー"],
    ["quu", "くぅう", "クゥー"],
    ["r", "ら", "ラ"],
    ["ra", "ら", "ラ"],
    ["raa", "らあ", "ラー"],
    ["re", "れ", "レ"],
    ["ree", "れえ", "レー"],
    ["ri", "り", "リ"],
    ["rii", "りい", "リー"],
    ["rl", "っら", "ッラ"],
    ["rla", "っら", "ッラ"],
    ["rlaa", "っらあ", "ッラー"],
    ["rle", "っれ", "ッレ"],
    ["rlee", "っれえ", "ッレー"],
    ["rli", "っり", "ッリ"],
    ["rlii", "っりい", "ッリー"],
    ["rlo", "っろ", "ッロ"],
    ["rloo", "っろお", "ッロー"],
    ["rlou", "っろう", "ッロー"],
    ["rlu", "っる", "ッル"],
    ["rluu", "っるう", "ッルー"],
    ["rly", "っりゃ", "ッリャ"],
    ["rlya", "っりゃ", "ッリャ"],
    ["rlyaa", "っりゃあ", "ッリャー"],
    ["rlye", "っりぇ", "ッリェ"],
    ["rlyee", "っりぇえ", "ッリェー"],
    ["rlyi", "っりぃ", "ッリィ"],
    ["rlyii", "っりぃい", "ッリィー"],
    ["rlyo", "っりょ", "ッリョ"],
    ["rlyoo", "っりょお", "ッリョー"],
    ["rlyou", "っりょう", "ッリョー"],
    ["rlyu", "っりゅ", "ッリュ"],
    ["rlyuu", "っりゅう", "ッリュー"],
    ["ro", "ろ", "ロ"],
    ["roo", "ろお", "ロー"],
    ["rou", "ろう", "ロー"],
    ["rr", "っら", "ッラ"],
    ["rra", "っら", "ッラ"],
    ["rraa", "っらあ", "ッラー"],
    ["rre", "っれ", "ッレ"],
    ["rree", "っれえ", "ッレー"],
    ["rri", "っり", "ッリ"],
    ["rrii", "っりい", "ッリー"],
    ["rro", "っろ", "ッロ"],
    ["rroo", "っろお", "ッロー"],
    ["rrou", "っろう", "ッロー"],
    ["rru", "っる", "ッル"],
    ["rruu", "っるう", "ッルー"],
    ["rry", "っりゃ", "ッリャ"],
    ["rrya", "っりゃ", "ッリャ"],
    ["rryaa", "っりゃあ", "ッリャー"],
    ["rrye", "っりぇ", "ッリェ"],
    ["rryee", "っりぇえ", "ッリェー"],
    ["rryi", "っりぃ", "ッリィ"],
    ["rryii", "っりぃい", "ッリィー"],
    ["rryo", "っりょ", "ッリョ"],
    ["rryoo", "っりょお", "ッリョー"],
    ["rryou", "っりょう", "ッリョー"],
    ["rryu", "っりゅ", "ッリュ"],
    ["rryuu", "っりゅう", "ッリュー"],
    ["ru", "る", "ル"],
    ["ruu", "るう", "ルー"],
    ["ry", "りゃ", "リャ"],
    ["rya", "りゃ", "リャ"],
    ["ryaa", "りゃあ", "リャー"],
    ["rye", "りぇ", "リェ"],
    ["ryee", "りぇえ", "リェー"],
    ["ryi", "りぃ", "リィ"],
    ["ryii", "りぃい", "リィー"],
    ["ryo", "りょ", "リョ"],
    ["ryoo", "りょお", "リョー"],
    ["ryou", "りょう", "リョー"],
    ["ryu", "りゅ", "リュ"],
    ["ryuu", "りゅう", "リュー"],
    ["s", "さ", "サ"],
    ["s'a", "すぁ", "スァ"],
    ["s'aa", "すぁあ", "スァー"],
    ["s'e", "すぇ", "スェ"],
    ["s'ee", "すぇえ", "スェー"],
    ["s'i", "すぃ", "スィ"],
    ["s'ii", "すぃい", "スィー"],
    ["s'o", "すぉ", "スォ"],
    ["s'oo", "すぉお", "スォー"],
    ["s'ou", "すぉう", "スォー"],
    ["s'u", "すぅ", "スゥ"],
    ["s'uu", "すぅう", "スゥー"],
    ["sa", "さ", "サ"],
    ["saa", "さあ", "サー"],
    ["se", "せ", "セ"],
    ["see", "せえ", "セー"],
    ["sh", "しゃ", "シャ"],
    ["sha", "しゃ", "シャ"],
    ["shaa", "しゃあ", "シャー"],
    ["she", "しぇ", "シェ"],
    ["shee", "しぇえ", "シェー"],
    ["shi", "し", "シ"],
    ["shii", "しい", "シー"],
    ["sho", "しょ", "ショ"],
    ["shoo", "しょお", "ショー"],
    ["shou", "しょう", "ショー"],
    ["shu", "しゅ", "シュ"],
    ["shuu", "しゅう", "シュー"],
    ["si", "し", "シ"],
    ["sii", "しい", "シー"],
    ["so", "そ", "ソ"],
    ["soo", "そお", "ソー"],
    ["sou", "そう", "ソー"],
    ["ss", "っさ", "ッサ"],
    ["ss'a", "っすぁ", "ッスァ"],
    ["ss'aa", "っすぁあ", "ッスァー"],
    ["ss'e", "っすぇ", "ッスェ"],
    ["ss'ee", "っすぇえ", "ッスェー"],
    ["ss'i", "っすぃ", "ッスぃ"],
    ["ss'ii", "っすぃい", "ッスぃー"],
    ["ss'o", "っすぉ", "ッスォ"],
    ["ss'oo", "っすぉお", "ッスォー"],
    ["ss'ou", "っすぉう", "ッスォー"],
    ["ss'u", "っすぅ", "ッスゥ"],
    ["ss'uu", "っすぅう", "ッスゥー"],
    ["ssa", "っさ", "ッサ"],
    ["ssaa", "っさあ", "ッサー"],
    ["sse", "っせ", "ッセ"],
    ["ssee", "っせえ", "ッセー"],
    ["ssha", "っしゃ", "ッシャ"],
    ["sshaa", "っしゃあ", "ッシャー"],
    ["sshe", "っしぇ", "ッシェ"],
    ["sshee", "っしぇえ", "ッシェー"],
    ["sshi", "っし", "ッシ"],
    ["sshii", "っしい", "ッシー"],
    ["ssho", "っしょ", "ッショ"],
    ["sshoo", "っしょお", "ッショー"],
    ["sshou", "っしょう", "ッショー"],
    ["sshu", "っしゅ", "ッシュ"],
    ["sshuu", "っしゅう", "ッシュー"],
    ["ssi", "っし", "ッシ"],
    ["ssii", "っしい", "ッシー"],
    ["sso", "っそ", "ッソ"],
    ["ssoo", "っそお", "ッソー"],
    ["ssou", "っそう", "ッソー"],
    ["ssu", "っす", "ッス"],
    ["ssuu", "っすう", "ッスー"],
    ["ssy", "っしゃ", "ッシャ"],
    ["ssya", "っしゃ", "ッシャ"],
    ["ssyaa", "っしゃあ", "ッシャー"],
    ["ssye", "っしぇ", "ッシェ"],
    ["ssyee", "っしぇえ", "ッシェー"],
    ["ssyi", "っしぃ", "ッシィ"],
    ["ssyii", "っしぃい", "ッシィー"],
    ["ssyo", "っしょ", "ッショ"],
    ["ssyoo", "っしょお", "ッショー"],
    ["ssyou", "っしょう", "ッショー"],
    ["ssyu", "っしゅ", "ッシュ"],
    ["ssyuu", "っしゅう", "ッシュー"],
    ["su", "す", "ス"],
    ["suu", "すう", "スー"],
    ["sy", "しゃ", "シャ"],
    ["sya", "しゃ", "シャ"],
    ["syaa", "しゃあ", "シャー"],
    ["sye", "しぇ", "シェ"],
    ["syee", "しぇえ", "シェー"],
    ["syi", "しぃ", "シィ"],
    ["syii", "しぃい", "シィー"],
    ["syo", "しょ", "ショ"],
    ["syoo", "しょお", "ショー"],
    ["syou", "しょう", "ショー"],
    ["syu", "しゅ", "シュ"],
    ["syuu", "しゅう", "シュー"],
    ["t", "た", "タ"],
    ["t'a", "とぁ", "トァ"],
    ["t'aa", "とぁあ", "トァー"],
    ["t'e", "とぇ", "トェ"],
    ["t'ee", "とぇえ", "トェー"],
    ["t'i", "てぃ", "ティ"],
    ["t'ii", "てぃい", "ティー"],
    ["t'o", "とぉ", "トォ"],
    ["t'oo", "とぉお", "トォー"],
    ["t'ou", "とぉう", "トォー"],
    ["t'u", "とぅ", "トゥ"],
    ["ta", "た", "タ"],
    ["taa", "たあ", "ター"],
    ["tch", "っちゃ", "ッチャ"],
    ["tcha", "っちゃ", "ッチャ"],
    ["tchaa", "っちゃあ", "ッチャー"],
    ["tche", "っちぇ", "ッチェ"],
    ["tchee", "っちぇえ", "ッチェエ"],
    ["tchi", "っち", "ッチ"],
    ["tchii", "っちい", "ッチー"],
    ["tcho", "っちょ", "ッチョ"],
    ["tchoo", "っちょお", "ッチョー"],
    ["tchou", "っちょう", "ッチョー"],
    ["tchu", "っちゅ", "ッチュ"],
    ["tchuu", "っちゅう", "ッチュー"],
    ["te", "て", "テ"],
    ["tee", "てえ", "テー"],
    ["ti", "ち", "チ"],
    ["tii", "ちい", "チー"],
    ["to", "と", "ト"],
    ["too", "とお", "トー"],
    ["tou", "とう", "トー"],
    ["ts", "つぁ", "ツァ"],
    ["tsa", "つぁ", "ツァ"],
    ["tsaa", "つぁあ", "ツァー"],
    ["tse", "つぇ", "ツェ"],
    ["tsee", "つぇえ", "ツェー"],
    ["tsi", "つぃ", "ツィ"],
    ["tsii", "つぃい", "ツィー"],
    ["tso", "つぉ", "ツォ"],
    ["tsoo", "つぉお", "ツォー"],
    ["tsou", "つぉう", "ツォー"],
    ["tsu", "つ", "ツ"],
    ["tsuu", "つう", "ツー"],
    ["tt", "った", "ッタ"],
    ["tt'a", "っとぁ", "ットァ"],
    ["tt'aa", "っとぁあ", "ットァー"],
    ["tt'e", "っとぇ", "ットェ"],
    ["tt'ee", "っとぇえ", "ットェー"],
    ["tt'i", "ってぃ", "ッティ"],
    ["tt'ii", "ってぃい", "ッティー"],
    ["tt'o", "っとぉ", "ットォ"],
    ["tt'oo", "っとぉお", "ットォー"],
    ["tt'ou", "っとぉう", "ットォー"],
    ["tt'u", "っとぅ", "ットゥ"],
    ["tta", "った", "ッタ"],
    ["ttaa", "ったあ", "ッター"],
    ["tte", "って", "ッテ"],
    ["ttee", "ってえ", "ッテー"],
    ["tti", "っち", "ッチ"],
    ["ttii", "っちい", "ッチー"],
    ["tto", "っと", "ット"],
    ["ttoo", "っとお", "ットー"],
    ["ttou", "っとう", "ットー"],
    ["tts", "っつぁ", "ッツァ"],
    ["ttsa", "っつぁ", "ッツァ"],
    ["ttsaa", "っつぁあ", "ッツァー"],
    ["ttse", "っつぇ", "ッツェ"],
    ["ttsee", "っつぇえ", "ッツェー"],
    ["ttsi", "っつぃ", "ッツィ"],
    ["ttsii", "っつぃい", "ッツィー"],
    ["ttso", "っつぉ", "ッツォ"],
    ["ttsoo", "っつぉお", "ッツォー"],
    ["ttsou", "っつぉう", "ッツォー"],
    ["ttsu", "っつ", "ッツ"],
    ["ttsuu", "っつう", "ッツー"],
    ["ttu", "っつ", "ッツ"],
    ["ttuu", "っつう", "ッツー"],
    ["tty", "っちゃ", "ッチャ"],
    ["ttya", "っちゃ", "ッチャ"],
    ["ttyaa", "っちゃあ", "ッチャー"],
    ["ttye", "っちぇ", "ッチェ"],
    ["ttyee", "っちぇえ", "ッチェー"],
    ["ttyi", "っちぃ", "ッチィ"],
    ["ttyii", "っちぃい", "ッチィー"],
    ["ttyo", "っちょ", "ッチョ"],
    ["ttyoo", "っちょお", "ッチョー"],
    ["ttyou", "っちょう", "ッチョー"],
    ["ttyu", "っちゅ", "ッチュ"],
    ["ttyuu", "っちゅう", "ッチュー"],
    ["tu", "つ", "ツ"],
    ["tuu", "つう", "ツー"],
    ["ty", "ちゃ", "チャ"],
    ["tya", "ちゃ", "チャ"],
    ["tyaa", "ちゃあ", "チャー"],
    ["tye", "ちぇ", "チェ"],
    ["tyee", "ちぇえ", "チェー"],
    ["tyi", "ちぃ", "チィ"],
    ["tyii", "ちぃい", "チィー"],
    ["tyo", "ちょ", "チョ"],
    ["tyoo", "ちょお", "チョー"],
    ["tyou", "ちょう", "チョー"],
    ["tyu", "ちゅ", "チュ"],
    ["tyuu", "ちゅう", "チュー"],
    ["u", "う", "ウ"],
    ["uu", "うう", "ウー"],
    ["v", "ゔぁ", "ヴァ"],
    ["va", "ゔぁ", "ヴァ"],
    ["vaa", "ゔぁあ", "ヴァー"],
    ["ve", "ゔぇ", "ヴェ"],
    ["vee", "ゔぇえ", "ヴェー"],
    ["vi", "ゔぃ", "ヴィ"],
    ["vii", "ゔぃい", "ヴィー"],
    ["vo", "ゔぉ", "ヴォ"],
    ["voo", "ゔぉお", "ヴォー"],
    ["vou", "ゔぉう", "ヴォー"],
    ["vu", "ゔ", "ヴ"],
    ["vuu", "ゔう", "ヴー"],
    ["vv", "っゔぁ", "ッヴァ"],
    ["vva", "っゔぁ", "ッヴァ"],
    ["vvaa", "っゔぁあ", "ッヴァー"],
    ["vve", "っゔぇ", "ッヴェ"],
    ["vvee", "っゔぇえ", "ッヴェー"],
    ["vvi", "っゔぃ", "ッヴィ"],
    ["vvii", "っゔぃい", "ッヴィー"],
    ["vvo", "っゔぉ", "ッヴォ"],
    ["vvoo", "っゔぉお", "ッヴォー"],
    ["vvou", "っゔぉう", "ッヴォー"],
    ["vvu", "っゔ", "ッヴ"],
    ["vvuu", "っゔう", "ッヴー"],
    ["w", "わ", "ワ"],
    ["w'a", "うぁ", "ウァ"],
    ["w'aa", "うぁあ", "ウァー"],
    ["w'e", "うぇ", "ウェ"],
    ["w'ee", "うぇえ", "ウェー"],
    ["w'i", "うぃ", "ウィ"],
    ["w'ii", "うぃい", "ウィー"],
    ["w'o", "うぉ", "ウォ"],
    ["w'oo", "うぉお", "ウォー"],
    ["w'ou", "うぉう", "ウォー"],
    ["w'u", "うぅ", "ウゥ"],
    ["w'uu", "うぅう", "ウゥー"],
    ["wa", "わ", "ワ"],
    ["waa", "わあ", "ワー"],
    ["we", "ゑ", "ヱ"],
    ["wee", "ゑえ", "ヱー"],
    ["wi", "ゐ", "ヰ"],
    ["wii", "ゐい", "ヰー"],
    ["wo", "を", "ヲ"],
    ["woo", "をお", "ヲー"],
    ["wou", "をう", "ヲー"],
    ["wu", "うぅ", "ウゥ"],
    ["wuu", "うぅう", "ウゥー"],
    ["ww", "っわ", "ッワ"],
    ["ww'a", "っうぁ", "ッウァ"],
    ["ww'aa", "っうぁあ", "ッウァー"],
    ["ww'e", "っうぇ", "ッウェ"],
    ["ww'ee", "っうぇえ", "ッウェー"],
    ["ww'i", "っうぃ", "ッウィ"],
    ["ww'ii", "っうぃい", "ッウィー"],
    ["ww'o", "っうぉ", "ッウォ"],
    ["ww'oo", "っうぉお", "ッウォー"],
    ["ww'ou", "っうぉう", "ッウォー"],
    ["ww'u", "っうぅ", "ッウゥ"],
    ["ww'uu", "っうぅう", "ッウゥー"],
    ["wwa", "っわ", "ッワ"],
    ["wwaa", "っわあ", "ッワー"],
    ["wwe", "っゑ", "ッヱ"],
    ["wwee", "っゑえ", "ッヱー"],
    ["wwi", "っゐ", "ッヰ"],
    ["wwii", "っゐい", "ッヰー"],
    ["wwo", "っを", "ッヲ"],
    ["wwoo", "っをお", "ッヲー"],
    ["wwou", "っをう", "ッヲー"],
    ["wwu", "っうぅ", "ッウゥ"],
    ["wwuu", "っうぅう", "ッウゥー"],
    ["x", "きす", "キス"],
    ["x'a", "きさ", "キサ"],
    ["x'aa", "きさあ", "キサー"],
    ["x'e", "きせ", "キセ"],
    ["x'ee", "きせえ", "キセー"],
    ["x'i", "きし", "キシ"],
    ["x'ii", "きしい", "キシー"],
    ["x'o", "きそ", "キソ"],
    ["x'oo", "きそお", "キソー"],
    ["x'ou", "きそう", "キソー"],
    ["x'u", "きす", "キス"],
    ["x'uu", "きすう", "キスー"],
    ["xa", "ぁ", "ァ"],
    ["xe", "ぇ", "ェ"],
    ["xi", "ぃ", "ィ"],
    ["xka", "ヵ", "ヵ"],
    ["xke", "ヶ", "ヶ"],
    ["xo", "ぉ", "ォ"],
    ["xtsu", "っ", "ッ"],
    ["xtu", "っ", "ッ"],
    ["xu", "ぅ", "ゥ"],
    ["xx", "っきす", "ッキス"],
    ["xx'a", "っきさ", "ッキサ"],
    ["xx'aa", "っきさあ", "ッキサー"],
    ["xx'e", "っきせ", "ッキセ"],
    ["xx'ee", "っきせえ", "ッキセー"],
    ["xx'i", "っきし", "ッキシ"],
    ["xx'ii", "っきしい", "ッキシー"],
    ["xx'o", "っきそ", "ッキソ"],
    ["xx'oo", "っきそお", "ッキソー"],
    ["xx'ou", "っきそう", "ッキソー"],
    ["xx'u", "っきす", "ッキス"],
    ["xx'uu", "っきすう", "ッキスー"],
    ["xya", "ゃ", "ャ"],
    ["xyo", "ょ", "ョ"],
    ["xyu", "ゅ", "ュ"],
    ["y", "や", "ヤ"],
    ["ya", "や", "ヤ"],
    ["yaa", "やあ", "ヤー"],
    ["ye", "いぇ", "イェ"],
    ["yee", "いぇえ", "イェー"],
    ["yi", "いぃ", "イィ"],
    ["yii", "いぃい", "イィー"],
    ["yo", "よ", "ヨ"],
    ["yoo", "よお", "ヨー"],
    ["you", "よう", "ヨー"],
    ["yu", "ゆ", "ユ"],
    ["yuu", "ゆう", "ユー"],
    ["yy", "っや", "ッヤ"],
    ["yya", "っや", "ッヤ"],
    ["yyaa", "っやあ", "ッヤー"],
    ["yye", "っいぇ", "ッイェ"],
    ["yyee", "っいぇえ", "ッイェー"],
    ["yyi", "っいぃ", "ッイィ"],
    ["yyii", "っいぃい", "ッイィー"],
    ["yyo", "っよ", "ッヨ"],
    ["yyoo", "っよお", "ッヨー"],
    ["yyou", "っよう", "ッヨー"],
    ["yyu", "っゆ", "ッユ"],
    ["yyuu", "っゆう", "ッユー"],
    ["z", "ざ", "ザ"],
    ["za", "ざ", "ザ"],
    ["zaa", "ざあ", "ザー"],
    ["ze", "ぜ", "ゼ"],
    ["zee", "ぜえ", "ゼー"],
    ["zi", "じ", "ジ"],
    ["zii", "じい", "ジー"],
    ["zo", "ぞ", "ゾ"],
    ["zoo", "ぞお", "ゾー"],
    ["zou", "ぞう", "ゾー"],
    ["zu", "ず", "ズ"],
    ["zuu", "ずう", "ズー"],
    ["zz", "っざ", "ッザ"],
    ["zza", "っざ", "ッザ"],
    ["zzaa", "っざあ", "ッザー"],
    ["zze", "っぜ", "ッゼ"],
    ["zzee", "っぜえ", "ッゼー"],
    ["zzi", "っじ", "ッジ"],
    ["zzii", "っじい", "ッジー"],
    ["zzo", "っぞ", "ッゾ"],
    ["zzoo", "っぞお", "ッゾー"],
    ["zzou", "っぞう", "ッゾー"],
    ["zzu", "っず", "ッズ"],
    ["zzuu", "っずう", "ッズー"],
    ["[", "「", "「"],
    ["]", "」", "」"],
    /* placeholder to end the array, so that I don't have to readjust the commas
     every time I add more entries and re-sort the list above　*/
    ["ー", "ー", "ー"]
  ];

  this.hash = new Object();
  this.rmaxlen = 0;
  for (var i=0; i < this.romajitable.length; i++) {
    var s=this.romajitable[i][0];
    this.hash[s] = new Object();
    this.hash[s].hiragana = this.romajitable[i][1];
    this.hash[s].katakana = this.romajitable[i][2];
    if (this.rmaxlen < s.length) this.rmaxlen = s.length;
  }

  this.hiragana = function(romajiIn)
  {
    var r1,hiragana="",romaji = romajiIn.toLowerCase();
    pos = 0;
    while (pos < romaji.length) {
      len = this.rmaxlen;
      if (romaji.length - pos < len) {
        len = romaji.length - pos;
      }
      found = false;
      while (len > 0 && !found) {
        r1 = this.hash[romaji.substring(pos, pos + len)];
        if (r1 != null) {
          hiragana += r1.hiragana;
          pos += len;
          found = true;
        }
        len--;
      }
      if (!found) {
        hiragana += romaji.charAt(pos);
        pos++;
      }
    }
    return hiragana.replace("'","");
  }

  this.katakana = function(romajiIn)
  {
    var r1,katakana="",romaji = romajiIn.toLowerCase();
    pos = 0;
    while (pos < romaji.length) {
      len = this.rmaxlen;
      if (romaji.length - pos < len) {
        len = romaji.length - pos;
      }
      found = false;
      while (len > 0 && !found) {
        r1 = this.hash[romaji.substring(pos, pos + len)];
        if (r1 != null) {
          katakana += r1.katakana;
          pos += len;
          found = true;
        }
        len--;
      }
      if (!found) {
        katakana += romaji.charAt(pos);
        pos++;
      }
    }
    return katakana.replace("'","");
  }

  /* end of Keyboard_japanese_obj code */
}

if(typeof Keyboard_japanese_obj == 'undefined')
{
  Keyboard_japanese_obj = new Keyboard_japanese();
  KeymanWeb.KR(Keyboard_japanese_obj);
}
