﻿<?php
  $pagename = 'Embera Northern Keyboard Help';
  $pagetitle = 'Embera Northern Keyboard Help';
  require_once('header.php');
?>
  <style type='text/css'>
    table { border-collapse: collapse }
    td { border: solid 1px #c0c0c0; font: 1.2em "Charis SIL"; width: 1.5em; text-align: center; cursor: default }
    th { border: solid 1px #c0c0c0; font: bold 1.2em "Charis SIL"; width: 1.5em; background: #c0c0c0 }
    h1 { font: bold 12pt "Charis SIL" }
    #info { position: absolute; background-color: #F6FAB8; border: solid 1px gray; padding: 2px; font: 8pt "Charis SIL" }
    
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
<body onload='javascript:loaded()'>       

<p>Este teclado es para utilizar con el fuente Charis SIL.</p>
<p>Se puede utilizar con Microsoft Windows, Mac OSX, Linux, iPhone, Ipad, Android phone, y tabletas Android.</p>

<h3>Accesos directos del teclado Embera (Northern)</h3>

<h3>Teclado Inglés</h3>
<p>Las vocales con diacríticos se producen al teclear el acceso directo mostrado a la izquierda ( ' [ ; ) seguida por la vocal</p>
                            
<table><tbody>
  <tr><td>&nbsp;</td><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th><th>i</th><th>j</th><th>k</th><th>l</th><th>m</th><th>n</th><th>o</th><th>p</th><th>r</th><th>s</th><th>t</th><th>u</th><th>w</th><th>x</th><th>y</th><th>z</th><th>]</th></tr>
  <tr><th>'</th><td>á</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>é</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>í</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ó</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ú</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ʌ́</td></tr>
  <tr><th>[</th><td>ã</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ẽ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ĩ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>õ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ũ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ʌ̃</td></tr>
  <tr><th>;</th><td>ã́</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ẽ́ </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ĩ́ </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ṍ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ṹ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ʌ̃́</td></tr>
</tbody></table>
<br>
<table><tbody>
  <tr><td>&nbsp;</td><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><th>G</th><th>H</th><th>I</th><th>J</th><th>K</th><th>L</th><th>M</th><th>N</th><th>O</th><th>P</th><th>R</th><th>S</th><th>T</th><th>U</th><th>W</th><th>X</th><th>Y</th><th>Z</th><th>}</th></tr>
  <tr><th>'</th><td>Á</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>É</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Í</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ó</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ú</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ʌ́ </td></tr>
  <tr><th>[</th><td>Ã</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ẽ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ĩ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Õ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ũ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ʌ̃ </td></tr>
  <tr><th>;</th><td>Ã́</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ẽ́</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ĩ́</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ṍ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ṹ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Ʌ̃́</td></tr>
</tbody></table>
<p>Las otras letras especiales se producen al teclear el acceso directo ( ] } x X f F / ) mostrado encima de la letra especial.</p>
<br />
<table>
<tr><td>&nbsp;</td><th>]</th><th>}</th><th>x</th><th>X</th><th>f</th><th>F</th><th>/</th></tr>
<tr><th>&nbsp;</th><td>ʌ</td><td>Ʌ</td><td>d̶</td><td>D̸</td><td>b̶</td><td>B̸</td><td>¿</td></tr>
</table>
                            
<br />
<table>
<tr><td>&nbsp;</td><th>]</th><th>}</th><th>x</th><th>X</th><th>f</th><th>F</th><th>/</th><th>1</th></tr>
<tr><th>Alt</th><td>]</td><td>}</td><td>x</td><td>X</td><td>f</td><td>F</td><td>/</td><td>¡</td></tr>
</table>
                            
<br />
<p><span style='font-weight: bold'>Prefix keys:</span> Las siguientes símbolas se producen al teclear la telca dos veces.</p>

<table>
<tr><td class='noinfo'>'</td><td class='noinfo'>]</td><td class='noinfo'>;</td></tr>
</table>

<br />

<br />
<p>&copy; 1999-2019 Ethnos360.</p>

<div style='display: none' id='info'></div>
       
