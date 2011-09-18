<?php
  class CActiveRecord{}
  include("../offer/protected/models/Task.php");
  
  
  $filenames = array( ); 
  $maxId = 100;
  for ( $id = 1; $id <= $maxId; $id++ ) {
      $filenames[] = "http://animalzone.ru/articles2/{$id}/";
  }
  foreach ( $filenames as $filename ) {
      echo $filename;
      
      
     
      try {
          @ $data = file_get_contents( $filename );
          echo $data;
      } catch ( Exception $e ) { }
      
      
  } 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          // put your code here
        ?>
    </body>
</html>
