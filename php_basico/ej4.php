<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$vn1= round(10.5, 0, PHP_ROUND_HALF_DOWN);
$vn2=round(6.5, 0, PHP_ROUND_HALF_DOWN);

echo round ($vn1 + $vn2).", ";
echo round ($vn1 - $vn2).", ";
echo round ($vn1 * $vn2).", ";
echo round ($vn1 / $vn2).".";


    ?>
  </body>
</html>
