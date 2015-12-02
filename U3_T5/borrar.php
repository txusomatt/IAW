<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
    //COGEMOS ID
      $id=$_GET['id'];

    //CREANDO LA CONEXION
    $conex = new mysqli("localhost", "usuariotf", "usuariotf", "TF");

    //COMPRUEBA CONEXIÓN
    if ($conex->connect_errno) {
          printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
          exit();
      }
?>

  <?php

  //ARRAY CON LAS TABLAS DE LA BD
  $tabla=array("FACTURAS","Intervienen","Realizan","Incluyen","REPARACIONES");

  //POR CADA ELEMENTO DEL ARRAY EJECUTA DELETE EN VALOR DEL ARRAY
  foreach ($tabla as $key => $value) {

     $conex->query ("DELETE FROM $value WHERE IdReparacion = $id;");


    }

unset($id);
header('location:reparaciones.php');




  ?>








    <h2> ESTO ES PA BORRAR </h2>

    <p>1 idrep en FACTURAS</p>
    <p>2 idrep en intervienen</p>
    <p>3 idrep en Realizan</p>
    <p>4 idrep en Incluyen</p>
    <p>5 idrep en REPARACIONES</p>




  </body>
</html>
