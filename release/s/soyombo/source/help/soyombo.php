<?php 
  $pagename = 'Soyombo Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      samp {
          font-family: Noto Sans Soyombo; 
          font-size:20pt; 
          
      }
      kbd {
          color:black; 
          font: 0.8em sans-serif; 
          border:solid 1px grey; 
          background:#ccc; 
          margin:2px 1px; 
          padding:2px 3px; 
          -webkit-border-radius: 3px; 
          -moz-border-radius: 3px; 
          border-radius: 3px;
      }


      /* Table */
      .inputSequences {
          border-collapse: collapse;
          font-size: 14px;
          min-width: 592px;
      }

      .inputSequences th, 
      .inputSequences td {
          padding: 7px 17px;
      }
      /* .inputSequences caption {
          margin: 7px;
      } */

      /* Table Header */
      .inputSequences thead th {
          border-bottom: 2px solid #6ea1cc;
          text-transform: uppercase;
      }

      /* Table Body */
      .inputSequences tbody td {
          border-bottom: 1px solid #e1edff;
          color: #353535;
          text-align: center;
      }
      .inputSequences tbody tr:nth-child(odd) td {
          background-color: #f4fbff;
      }
      /* 
      .inputSequences tbody td:nth-child(4),
      .inputSequences tbody td:first-child,
      .inputSequences tbody td:last-child {
          text-align: right;
      }
      */
      .inputSequences tbody tr:hover td {
          background-color: #ffffa2;
          border-color: #ffff0f;
      }

      /* Table Footer */
      /* 
          .inputSequences tfoot th {
          border-top: 2px solid #6ea1cc;
          text-align: right;
      } 
      */
END;
  require_once('header.php');
?>

<p>
  This keyboard is for the Classical Mongolian, Sanskrit and Tibetan languages which sometimes use the Soyombo script. 
</p>

<h2>Desktop Keyboard layout</h2>

<p>The keyboard layout is listed below. However, the keyboard also makes use of deadkeys to access some of the characters. Those deadkeys are &#x005e;, &#x002b;, &#x0040;, and &#x0023;. </p>

<h3>Using &#x005e; for Cluster-Initial letters</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>&#x005e;</kbd><kbd>r</kbd> </td>
          <td><samp>&#x11A86;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x005e;</kbd><kbd>l</kbd> </td>
        <td><samp>&#x11A87;</samp></td>
    </tr>
    <tr>
        <td><kbd>&#x005e;</kbd><kbd>S</kbd> </td>
        <td><samp>&#x11A88;</samp></td>
    </tr>
    <tr>
        <td><kbd>&#x005e;</kbd><kbd>s</kbd> </td>
        <td><samp>&#x11A89;</samp></td>
    </tr>
    <tr>
      <td><kbd>&#x005e;</kbd><kbd>&#x005e;</kbd> </td>
      <td>&#x005E;</td>
    </tr>
</tbody>
</table>

<h3>Using &#x002b; for Final consonant signs</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>&#x002b;</kbd><kbd>g</kbd> </td>
          <td><samp>&#x11A8A;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>k</kbd> </td>
        <td><samp>&#x11A8B;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>q</kbd> </td>
        <td><samp>&#x11A8C;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>d</kbd> </td>
        <td><samp>&#x11A8D;</samp></td>
      </tr>
      <tr>
      <td><kbd>&#x002b;</kbd><kbd>n</kbd> </td>
      <td><samp>&#x11A8E;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>b</kbd> </td>
        <td><samp>&#x11A8F;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>m</kbd> </td>
        <td><samp>&#x11A90;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>r</kbd> </td>
        <td><samp>&#x11A91;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>l</kbd> </td>
        <td><samp>&#x11A92;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>S</kbd> </td>
        <td><samp>&#x11A93;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>s</kbd> </td>
        <td><samp>&#x11A94;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>-</kbd> </td>
        <td><samp>&#x11A95;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>&#x002b;</kbd> </td>
        <td>&#x002b;</td>
      </tr>
</tbody>
</table>

<h3>Using &#x0040; for Head marks</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>&#x0040;</kbd><kbd>1</kbd> </td>
          <td><samp>&#x11A9E;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0040;</kbd><kbd>2</kbd> </td>
        <td><samp>&#x11A9F;</samp></td>
    </tr>
    <tr>
        <td><kbd>&#x0040;</kbd><kbd>3</kbd> </td>
        <td><samp>&#x11AA0;</samp></td>
    </tr>
    <tr>
      <td><kbd>&#x0040;</kbd><kbd>&#x0040;</kbd> </td>
      <td>&#x0040;</td>
    </tr>
</tbody>
</table>

<h3>Using &#x0023; for Terminal marks</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>&#x0023;</kbd><kbd>1</kbd> </td>
          <td><samp>&#x11AA1;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>2</kbd> </td>
        <td><samp>&#x11AA2;</samp></td>
    </tr>
    <tr>
      <td><kbd>&#x0023;</kbd><kbd>&#x0023;</kbd> </td>
      <td>&#x0023;</td>
    </tr>
</tbody>
</table>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default numeric'>
</div>