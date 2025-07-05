<?php 
  $pagename = 'Meroitic Hieroglyphs Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      samp {
          font-family: Noto Sans Meroitic; 
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
  This keyboard is for the Meroitic language using the Meroitic Hieroglyphs script.
</p>

<h2>Desktop and Tablet Keyboard Layout</h2>

<div id='osk' data-states='default shift'>
</div>
