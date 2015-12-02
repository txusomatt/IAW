<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $v1=array("22222222X"=>"Pepe","33333333X"=>"Manuel","44444444X"=>"José","55555555X"=>"Rosa");
    $v2=array("22222222X"=>"Pérez","33333333X"=>"Jiménez","44444444X"=>"Martínez","55555555X"=>"Rodríguez");

    echo "<table><tr><td>NOMBRE</td><td>APELLIDOS</td><td>DNI</td></tr>";

    foreach ($v1 as $key => $value) {
      echo "<tr><td>$value</td><td>$v2[$key]</td><td>$key</td></tr>";
    }

    echo "</table>";

    ?>

  </body>
</html>
