<?php /*
  Name:        ThompsonU
  Copyright:   2012
  Description: This keyboard is designed to enable simple input of the characters needed to type Thompson River Salish (Nklapmx, Ntlakapamux, Ntlakapmuk).
  Authors:     Tony Mattina
*/
  $pagename = 'ThompsonU Keyboard Help';
  $pagetitle = 'ThompsonU Keyboard Help';
  require_once('header.php');
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>How To Type nɬeʔkèpmxcín (Thompson River Salish)</title>
  <style type='text/css'>
    table { border-collapse: collapse }
    td { border: solid 1px #c0c0c0; font: 1.2em Charis SIL; width: 1.5em; text-align: center; cursor: default }
    th { border: solid 1px #c0c0c0; font: bold 1.2em Charis SIL; width: 1.5em; background: #c0c0c0 }
    h1 { font: bold 12pt Charis SIL }
    #info { position: absolute; background-color: #F6FAB8; border: solid 1px gray; padding: 2px; font: 8pt Arial }
    
  </style>
  <script type='text/javascript'><!--
    var divinfo = null;
                           
    function getpageoffset(elem)
    {
      var res = {x: 0, y: 0};
      while(elem != null)
      {
        res.x += elem.offsetLeft;
        res.y += elem.offsetTop;
        elem = elem.offsetParent;
      }
      return res;
    }
    
    function trim(s)
    {
      var i = 0, j = s.length-1, t = '';
      while(i < s.length && s.charCodeAt(i) <= 32) i++;
      while(j >= 0 && s.charCodeAt(j) <= 32) j--;
      while(i <= j) t += s.charAt(i++);
      return t;
    }
    
    function tdmouseover(e)
    {
      var se = this;
      with(getpageoffset(se))
      {
        divinfo.style.left = x + 4 + 'px';
        divinfo.style.top = y + se.offsetHeight + 4 + 'px';
      }
      var s = '', t = trim(se.innerHTML);
      //alert(t);
      
      if(t == '&nbsp;') return false;
      
      for(var i = 0; i < t.length; i++)
      {                   
        var v = t.charCodeAt(i);
        ch = v.toString(16).toUpperCase();
        while(ch.length < 4) ch='0'+ch;
        if(s != '') s += ' ';
        s += 'U+'+ch;
      }
      divinfo.innerHTML = s + ' ' + t; //se.innerHTML;
      divinfo.style.display = 'block';
    }
    function tdmouseout(e)
    {
      divinfo.style.display = 'none';
    }
    
    function loaded()
    {
      var tds = document.getElementsByTagName('td');
      for(var i = 0; i < tds.length; i++)
      {
        if(tds[i].className.indexOf('noinfo') >= 0) continue;
        tds[i].onmouseover = tdmouseover;
        tds[i].onmouseout = tdmouseout;
      }
      divinfo = document.getElementById('info');
    } 
  //--></script>
</head>
<body onload='javascript:loaded()'>       

<h1>How To Type nɬeʔkèpmxcín (Thompson River Salish)</h1>

This package installs the ThompsonU keyboard on your computer.
It also installs the Charis SIL font, a font that has all the characters needed for nɬeʔkèpmxcín. A Windows font that has almost all the needed characters is Lucida Sans Unicode. Select one of these fonts when entering data in your word processor.<p>
This page explains how to:<br>
 <a href="#single">Type a reassigned key</a><br>
 <a href="#restore">Restore a reassigned key</a><br>
 <a href="#stressV">Type stressed vowels</a><br>
 <a href="#glott">Type glottalized or laryngealized consonants</a><br>
 <a href="#bull">Type • (bullet)<br>
 <a href="#rounded">Type rounded consonants</a><br>
 <a href="#rdglott">Type rounded and glottalized consonants</a><p>
 
 <a name="single">When the ThompsonU keyboard is selected, the keys shown in the grey row are reassigned to nɬeʔkèpmxcín letter symbols as shown in the white row:</a>
<table><tbody>
  <tr><th>4</th></th><th>6</th><th>7</th><th>8</th><th>f</th><th>|</th>&nbsp;</th></tr>
  <tr><td>ƛ</td></td><td>ʕ</td><td>Ɂ</td><td>ɣ</td><td>ə</td><td>ɫ</td></tr>
   </tbody></table>
<br>

The following keys are also reassigned to punctuation or other non-letter symbols as follows:

<table><tbody>
  <tr><th>Q</th><th>W</th><th>:</th><th>=</th>&nbsp;</th></tr>
  <tr><td>√</td><td>ʷ</td></td><td>ˑ</td><td></td></tr>
   </tbody></table>

Note: the shorth double hyphen shows correctly in the Charis SIL font, but may not in other Unicode fonts.
<br /><br />
<a name="restore">To restore any of the reassigned keys without exiting the ThompsonU keyboard, type a zero (0) followed by the wanted key:</a>

<table><tbody>
  <tr><td>&nbsp;</td><th>04</th></th><th>06</th><th>07</th><th>08</th><th>0f</th><th>0|</th><th>0W</th><th>0:</th><th>0=</th>&nbsp;</th></tr>
  <tr><th>0</th><td>4</td></td><td>6</td><td>7</td><td>8</td><td>f</td><td>|</td><td>W</td><td>:</td><td>=</td></tr>
   </tbody></table>
<br>

<a name="stressV">To obtain an accented vowel, type the vowel as shown in the gray row followed by / or \ to get the acute or grave vowel shown in the white row:         </a>
<table><tbody>
  <tr><th>a</th></th><th>e</th><th>f</th><th>i</th><th>o</th><th>u</th>&nbsp;</th></tr>
  <tr><td>á</td></td><td>é</td><td>ə́</td><td>í</td><td>ó</td><td>ú</td><th>/</th></tr>
  <tr><td>à</td><td>è</td><td>ə̀</td><td>ì</td><td>ò</td><td>ù</td><th>\</th></tr>
 </tbody></table>
 <br>


<a name="glott">Glottalized or laryngealized consonant are obtained typing the consonant key followed by the apostrophe:</a>

<br />
<table>
<tr><th>p</th><th>t</th><th>c</th><th>4</th><th>k</th><th>q</th><th>m</th><th>n</th><th>l</th><th>r</th><th>y</th><th>8</th><th>w</th><th>4</th><th>6</th></tr>
<tr><td>p̓</td><td>t̕</td><td>c̕</td><td>ƛ</td><td>k̕</td><td>q̓</td><td>m̓</td><td>n̓</td><td>l̕</td><td>r̕</td><td>y̓</td><td>ɣ̓</td><td>w̓</td><td>ƛ̓</td><td>ʕ̓</td><th>'</th></tr>
</table>
                            
<br />

<a name="subdot">Sub-dotted consonants and vowels are obtained by typing a period followed by the consonant or vowel symbol as shown:</a>
<table><tbody>
  <tr><td>&nbsp;</td><th>c</th><th>s</th><th>x</th><th>h</th><th>l</th><th>i</th><th>a</th><th>u</th><th>f</th></th></tr>
  <tr><th>.</th><td>c̣</td><td>ṣ</td><td>x̣</td><td>ḥ</td><td>ḷ</td><td>ị</td><td>ạ</td><td>ụ</td><td>ə̣</td></td></tr>
   </tbody></table>
<br>

Sub-dotted vowels with acute stress are obtained by typing a period followed by the vowel symbol and /:
<table><tbody>
  <tr><td>&nbsp;</td><th>i</th><th>a</th><th>u</th><th>f</th><td></td></tr>
  <tr><th>.</th><td>ị́</td><td>ạ́</td><td>ụ́</td><td>ə̣́</td><th>/</th></tr>
   </tbody></table>
<br>

Sub-dotted vowels with grave stress are obtained by typing a period followed by the vowel symbol and \:
<table><tbody>
  <tr><td>&nbsp;</td><th>i</th><th>a</th><th>u</th><th>f</th><td></td></tr>
  <tr><th>.</th><td>ị̀</td><td>ạ̀</td><td>ụ̀</td><td>ə̣̀</td><th>\</th></tr>
   </tbody></table>
<br>

<a name="bull">A bullet (•) is obtained by typing H (capital H) followed by : (colon):</a>
<table><tbody>
  <tr><th>H:</th></tr>
  <tr><td>•</td></tr>
   </tbody></table>
<br>



<a name="rounded">Rounded consonants are obtained typing the consonant key followed by W (capital W):</a>
<table>
<tr><th>k</th><th>q</th><th>x</th><th>.x</th><th>6</th><td></td></tr>
<tr><td>kʷ</td><td>qʷ</td><td>xʷ</td><td>x̌ʷ</td><td>ʕʷ</td><th>W</th></tr>
</table>

<br />

<a name="rdglott">Glottalized and rounded consonants are obtained typing the consonant followed by the apostrophe and the capital W:</a>
<table>
<tr><th>k'W</th><th>q'W</th><th>6'W</th></tr>
<tr><td>k̕ʷ</td><td>q̓ʷ</td><td>ʕ̓ʷ</td></tr>
</table>

<br />

Note: When the cursor is over any of the symbols (or symbol sequences) in the white rows, their Unicode values are displayed.<p> 

<!--<p>&copy; 1994-2007 Tavultesoft Pty Ltd.  All rights reserved.</p>-->
For related information visit <a href="http://www.meltr.org/">www.meltr.org</a></p>
<div style='display: none' id='info'></div>
       
</body>
</html>
