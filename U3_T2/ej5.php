<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo "<ol type='1'>";

    $v1=[];

    for ($i=0;$i<10;$i++) {
        array_push($v1,77*$i);

}
    for ($u=0;$u<10;$u++) {
      echo "<li>".$v1[$u]."</li>";
}
      echo "</ol>";
      ?>

  </body>
</html>
