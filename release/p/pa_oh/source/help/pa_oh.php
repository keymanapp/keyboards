<?php 
  $pagename = 'Pa-Oh Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
 th, td { width: 50%; height: auto; padding: 0.2em; background-color: #a0a0ff; height: 1.5em; text-align: left;}
th.keys { width: 50%;}
td.keys { width: 50%; font-family: "Courier New", "Courier", fixed; }
table { width: 20em; text-align: center; padding: 2px; background-color: #c0c0ff; vertical-align: bottom; border-collapse: separate; }
div.table { text-align: center; display: inline; }
p.layout {text-align: center; }
.center {text-align: center; margin-left: 20%; padding: 0px; margin-right: 20%;}
table.keyboard { width: auto; padding: 1px; margin: 0px; border-width: 0px; }
table.keyboard tr { padding: 0px; margin: 0px; }
table.keyboard td { background-color: #707070; width: 2em; height: 2em; padding: 0em; 
	border-style: solid; border-width: 0.1em; 
	border-top-color: #808080; border-left-color: #808080; 
	border-bottom-color: #606060; border-right-color: #606060; 
	}
table.keyboard td.special { background-color: #505050; text-align: center; font-weight: bold; }
span.en {  }
span.my { font-family: Padauk, Myanmar3, Parabaik, 'MyMyanmar Unicode';}
td span.my { float: right; color: #f0f0ff;  }
END;
  
  require_once('header.php');
?>


<p>
  This keyboard provides a smart keyboard layout for typing Pa-Oh and Myanmar for use with fonts
conforming to the Unicode standard.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift'>
</div>

<h3>Stacked characters <span class="my">ပါဌ်ဆင့်</span></h3>

<p>Stacked characters
are typed by typing the normal forms followed by the ` key - which is
normally in the top left of your keyboard. eg: </p>

<div class="center">
<div class="table">
<table>

  <tbody>

    <tr>

      <th>Visible Myanmar</th>

      <th class="keys">Typed sequence</th>

    </tr>

    <tr>

      <td>က</td>

      <td class="keys">u</td>

    </tr>

    <tr>

      <td>ကက</td>

      <td class="keys">uu</td>

    </tr>

    <tr>

      <td>က္က</td>

      <td class="keys">uu`</td>

    </tr>

  </tbody>
</table>

</div>
</div>

<h3>Shapping of <span class="my"> ျ ြ ွ ှ</span></h3>

<p>You always type the same key for
each medial, it does not matter whether the consonant is wide or small
or what goes above and below. Composite medials are typed as a sequence
of the individual medials.</p>
<p>Note: the medial is always typed after the consonant, this is a change from before, when Yayit was typed before the consonant.</p>
<div class="center">
<div class="table">
<table>

  <tbody>

    <tr>

      <th>Visible Myanmar</th>

      <th class="keys">Typed sequence</th>

    </tr>

    <tr>

      <td>က</td>

      <td class="keys">u</td>

    </tr>

    <tr>

      <td>ကြ</td>

      <td class="keys">uj</td>

    </tr>

    <tr>

      <td>ကြိ</td>

      <td class="keys">ujd</td>

    </tr>

    <tr>

      <td>ကြို</td>

      <td class="keys">ujdk</td>

    </tr>

    <tr>

      <td>​ေ</td>

      <td class="keys">a</td>

    </tr>

    <tr>

      <td>နေ</td>

      <td class="keys">ae</td>

    </tr>

    <tr>

      <td>နွေ</td>

      <td class="keys">aeG</td>

    </tr>

    <tr>

      <td>နွေး</td>

      <td class="keys">aeG;</td>

    </tr>

    <tr>

      <td>​ေ</td>

      <td class="keys">a</td>

    </tr>

    <tr>

      <td>​ခေ</td>

      <td class="keys">ac</td>

    </tr>

    <tr>

      <td>​ချေ</td>

      <td class="keys">acs</td>

    </tr>

    <tr>

      <td>​ချွေ</td>

      <td class="keys">acsG</td>

    </tr>

    <tr>

      <td>​ချွေး</td>

      <td class="keys">acsG;</td>

    </tr>

  </tbody>
</table>
</div>
</div>

<h3>Kinzi <span class="my">ကင်းစီး ( င်္)</span></h3>

<p>Kinzi is just typed in the normal way.</p>

<div class="center">
<div class="table">
<table>

  <tbody>

    <tr>

      <th>Visible Myanmar</th>

      <th class="keys">Typed sequence</th>

    </tr>

    <tr>

      <td>သ</td>

      <td class="keys">o</td>

    </tr>

    <tr>

      <td>သခ</td>

      <td class="keys">oc</td>

    </tr>

    <tr>

      <td>သင်္ခ</td>

      <td class="keys">ocF</td>

    </tr>

    <tr>

      <td>သင်္ချ</td>

      <td class="keys">ocFs</td>

    </tr>

    <tr>

      <td>သင်္ချိ</td>

      <td class="keys">ocFsd</td>

    </tr>

    <tr>

      <td>သင်္ချို</td>

      <td class="keys">ocFsdk</td>

    </tr>

    <tr>

      <td>သင်္ချိုင</td>

      <td class="keys">ocFsdki</td>

    </tr>

    <tr>

      <td>သင်္ချိုင်</td>

      <td class="keys">ocFsdkif</td>

    </tr>

    <tr>

      <td>သင်္ချိုင်း</td>

      <td class="keys">ocFsdkif;</td>

    </tr>

  </tbody>
</table>
</div>

</div>

</body>
</html>