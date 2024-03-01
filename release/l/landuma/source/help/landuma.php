<?php
  $pagename = 'Landuma Keyboard Help';
  $pagetitle = $pagename;
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
</head>
<body onload='javascript:loaded()'>       

<p>Landuma Keyman Keyboard</p>
<p>This keyboard is for use with Unicode fonts such as the Charis SIL font.</p>
<p>It can be used with Microsoft Windows, Mac OSX, Linux, iPhone, iPad, Android phone, and Android tablets.</p>

<h1>Keyboard shortcuts Landuma</h1>

<h1>English keyboard</h1>
<p>Special characters are produced by typing the deadkey shown on the left (;) followed by the character.</p>
                            
<table><tbody>
  <tr><td>&nbsp;</td><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th> <th>h</th><th>i</th><th>j</th><th>k</th><th>l</th><th>m</th><th>n</th><th>o</th><th>p</th><th>q</th><th>r</th><th>s</th><th>t</th><th>u</th><th>v</th><th>w</th><th>x</th><th>y</th><th>z</th><th>,</th><th>.</th></tr>
  <tr><th>;</th>     <td>ɑ</td><td>b</td><td>ç</td><td>ë</td><td>é</td><td>f</td><td>ɡb</td><td>h</td><td>î</td><td>j</td><td>k</td><td>l</td><td>ɲ</td><td>ŋ</td><td>ô</td><td>p</td><td>ə</td><td>è</td><td>à</td><td>t</td><td>u</td><td>ɛ</td><td>ê</td><td>ɔ</td><td>y</td><td>ʌ</td><td>«</td><td>»</td></tr>
</tbody></table>
<br>
<table><tbody>
  <tr><td>&nbsp;</td><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><th>G</th> <th>H</th><th>I</th><th>J</th><th>K</th><th>L</th><th>M</th><th>N</th><th>O</th><th>P</th><th>Q</th><th>R</th><th>S</th><th>T</th><th>U</th><th>V</th><th>W</th><th>X</th><th>Y</th><th>Z</th><th>,</th><th>.</th></tr>
  <tr><th>;</th>     <td>Ɑ</td><td>B</td><td>Ç</td><td>Ë</td><td>É</td><td>F</td><td>ɢB</td><td>H</td><td>Î</td><td>J</td><td>K</td><td>L</td><td>Ɲ</td><td>Ŋ</td><td>Ô</td><td>P</td><td>Ə</td><td>È</td><td>À</td><td>T</td><td>U</td><td>Ɛ</td><td>Ê</td><td>Ɔ</td><td>Y</td><td>Ʌ</td><td>«</td><td>»</td></tr>
</tbody></table>
<br />
Deadkeys: The ; symbol is produced by typing the symbol twice.
<br />


       
