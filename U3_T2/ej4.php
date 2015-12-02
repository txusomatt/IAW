<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $v1=array(11,2,43,4,15,36,7,8,9,20);
    $max=0;

      for ($i=0;$i<count($v1);$i++) {
          if ($v1[$i]>$max ) {
           $max=$v1[$i];
        }
    }
        echo "el maximo es ".$max;
        ?>

  </body>
</html>
