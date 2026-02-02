<?php 
  $pagename = 'Zanabazar Square Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      samp {
          font-family: Noto Sans Zanabazar Square; 
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
  This keyboard is for the Classical Mongolian language which sometimes uses the Zanabazar Square script. The layout is loosely based on the Soyombo layout.
</p>

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
          <td><samp>&#x11A3A;</samp></td>
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
        <td><kbd>&#x002b;</kbd><kbd>k</kbd> </td>
        <td><samp>&#x11A3B;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>r</kbd> </td>
        <td><samp>&#x11A3C;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x002b;</kbd><kbd>l</kbd> </td>
        <td><samp>&#x11A3D;</samp></td>
      </tr>
      <tr>
      <td><kbd>&#x002b;</kbd><kbd>v</kbd> </td>
      <td><samp>&#x11A3E;</samp></td>
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
          <td><samp>&#x11A3F;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0040;</kbd><kbd>2</kbd> </td>
        <td><samp>&#x11A40;</samp></td>
    </tr>
    <tr>
        <td><kbd>&#x0040;</kbd><kbd>3</kbd> </td>
        <td><samp>&#x11A45;</samp></td>
    </tr>
    <tr>
      <td><kbd>&#x0040;</kbd><kbd>&#x0034;</kbd> </td>
      <td><samp>&#x11A46;</samp></td>
    </tr>
</tbody>
</table>

<h3>Using &#x0023; for Other marks and signs</h3>
 
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
          <td><samp>&#x11A33;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>2</kbd> </td>
        <td><samp>&#x11A34;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>3</kbd> </td>
        <td><samp>&#x11A35;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>4</kbd> </td>
        <td><samp>&#x11A36;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>5</kbd> </td>
        <td><samp>&#x11A37;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>6</kbd> </td>
        <td><samp>&#x11A38;</samp></td>
      </tr>
      <tr>
        <td><kbd>&#x0023;</kbd><kbd>7</kbd> </td>
        <td><samp>&#x11A39;</samp></td>
      </tr>
</tbody>
</table>

<h2>Desktop Keyboard Layout</h2>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default numeric'>
</div>