<?php
  $r = glob("*");
  //var_dump($r);
  //$tk = json_decode(file_get_contents("tavultesoft-keyboards.json")); //http://www.tavultesoft.com/api/1.0/languages");
  
  foreach($r as $dir) {
    if(is_dir($dir)) {
      echo $dir."\n";
      $sd = glob("$dir\\*");
      foreach($sd as $subdir) {
        echo $subdir."\n";
        $ki = glob("$subdir\\*.keyboard_info");
        if(sizeof($ki) > 0) {
          $v = json_decode(file_get_contents($ki[0]));
          //var_dump($v);
          if(!empty($v->documentationFileName)) {
            $v->documentationFilename = $v->documentationFileName;
            unset($v->documentationFileName);
          }
          //var_dump($v);
          //exit; 
          file_put_contents($ki[0], json_encode($v, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
          //exit;
        }
      }
    }
  }
?>