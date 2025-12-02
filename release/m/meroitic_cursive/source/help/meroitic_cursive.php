<?php 
  $pagename = 'Meroitic Cursive Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      samp {
          font-family: Noto Sans Meroitic Cursive; 
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
  This keyboard is for the Meroitic language using the Meroitic Cursive script.
</p>

<h2>Desktop Keyboard Layout</h2>

<div id='osk' data-states='default shift rightalt'>
</div>

<p>Meroitic Cursive digits are somewhat complicated. The keystrokes required for accessing them are in the table below. Since there are no 80 or 90 digits, the subsequent rules for 800/900 | 8,000/9,000 | 80,000/90,000 } 800,000/900,000 require one less zero than might be expected.  Feedback on this implementation would be welcome.</p>

<h3>Tens</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109C9;</samp></td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CA;</samp></td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CB;</samp></td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CC;</samp></td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CD;</samp></td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CE;</samp></td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109CF;</samp></td>
      </tr>
</tbody>
</table>

<h3>Hundreds</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D2;</samp></td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D3;</samp></td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D4;</samp></td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D5;</samp></td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D6;</samp></td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D7;</samp></td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109D8;</samp></td>
      </tr>
      <tr>
        <td><kbd>8</kbd><kbd>0</kbd> </td>
        <td><samp>&#x109D9;</samp></td>
      </tr>
      <tr>
        <td><kbd>9</kbd><kbd>0</kbd> </td>
        <td><samp>&#x109DA;</samp></td>
      </tr>
</tbody>
</table>

<h3>Thousands</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109DB;</samp></td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109DC;</samp></td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109DD;</samp></td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109DE;</samp></td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109DF;</samp></td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E0;</samp></td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E1;</samp></td>
      </tr>
      <tr>
        <td><kbd>8</kbd><kbd>0</kbd><kbd>0</kbd> </td>
        <td><samp>&#x109E2;</samp></td>
      </tr>
      <tr>
        <td><kbd>9</kbd><kbd>0</kbd><kbd>0</kbd> </td>
        <td><samp>&#x109E3;</samp></td>
      </tr>
</tbody>
</table>

<h3>Ten Thousands</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E4;</samp></td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E5;</samp></td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E6;</samp></td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E7;</samp></td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E8;</samp></td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109E9;</samp></td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109EA;</samp></td>
      </tr>
      <tr>
          <td><kbd>8</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109EB;</samp></td>
      </tr>
      <tr>
          <td><kbd>9</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109EC;</samp></td>
      </tr>
</tbody>
</table>

<h3>Hundred Thousands</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109ED;</samp></td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109EE;</samp></td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109EF;</samp></td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F0;</samp></td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F1;</samp></td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F2;</samp></td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F3;</samp></td>
      </tr>
      <tr>
          <td><kbd>8</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F4;</samp></td>
      </tr>
      <tr>
          <td><kbd>9</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd><kbd>0</kbd> </td>
          <td><samp>&#x109F5;</samp></td>
      </tr>
</tbody>
</table>

<h3>Fractions</h3>
 
<table class="inputSequences">
  <thead>
      <tr>
          <th>Keys</th>
          <th>Character</th>
          <th>Value</th>
        
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><kbd>1</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109F6;</samp></td>
          <td>1/12</td>
      </tr>
      <tr>
          <td><kbd>2</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109F7;</samp></td>
          <td>2/12</td>
      </tr>
      <tr>
          <td><kbd>3</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109F8;</samp></td>
          <td>3/12</td>
      </tr>
      <tr>
          <td><kbd>4</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109F9;</samp></td>
          <td>4/12</td>
      </tr>
      <tr>
          <td><kbd>5</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FA;</samp></td>
          <td>5/12</td>
      </tr>
      <tr>
          <td><kbd>6</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FB;</samp></td>
          <td>6/12</td>
      </tr>
      <tr>
          <td><kbd>7</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FC;</samp></td>
          <td>7/12</td>
      </tr>
      <tr>
          <td><kbd>8</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FD;</samp></td>
          <td>8/12</td>
      </tr>
      <tr>
          <td><kbd>9</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FE;</samp></td>
          <td>9/12</td>
      </tr>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109FF;</samp></td>
          <td>10/12</td>
      </tr>
      <tr>
          <td><kbd>1</kbd><kbd>0</kbd><kbd>1</kbd><kbd>RALT /</kbd><kbd>2</kbd> </td>
          <td><samp>&#x109BC;</samp></td>
          <td>11/12</td>
      </tr>
      <tr>
          <td><kbd>1</kbd><kbd>RALT /</kbd><kbd>5</kbd> </td>
          <td><samp>&#x109BD;</samp></td>
          <td>1/2</td>
    </tr>
</tbody>
</table>
<h2>Mobile Keyboard layout</h2>

<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them. The deadkey approach may also still work.</p>

    <p>The Tens, Hundreds, Thousands, Ten thousands, and Hundred thousands are on the digit long press keys on the numeric layout. The fractions have their own long press key next to the space bar on the numeric layout.</p>

<div id='osk-phone' data-states='default numeric'>
</div>
