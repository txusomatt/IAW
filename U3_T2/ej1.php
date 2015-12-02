<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

<?php

  $ciu="Ciudad ";
  $v1=array("San Cristobal ","Cucuta ","Maracaibo ","Caracas ");

  echo "Numero de Elementos ".count($v1)."<br>";

    for ($i=0;$i<sizeof($v1);$i++) {
      echo $ciu.$i."<br>";
      echo "<h2>".$v1[$i]."</h2>";
    }
  ?>

  </head>
  <body>

  </body>
</html>
