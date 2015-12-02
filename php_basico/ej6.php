<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php



    $dia =  date("d");



    if ($dia <= 10 ) {
      echo "El site esta fuera de servicio";
    }

    else {
      echo "El site esta en servicio";
    }


    ?>
  </body>
</html>
