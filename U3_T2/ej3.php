<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $v1=array("roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta");

    for ($i=0;$i<sizeof($v1);$i++) {
      $letra=substr($v1[$i],0,1);

      if ($letra == "m") {
        $v2[]=$v1[$i];
      }
    }
var_dump($v2);

  ?>

  </body>
</html>
