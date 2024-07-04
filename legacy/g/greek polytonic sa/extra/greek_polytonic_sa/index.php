<?php
  $location = $_SERVER['PHP_SELF'];
  $location = explode('/',$location);
  $location = '1.0/'.$location[2].'.php';
  header('location: '.$location);
?>