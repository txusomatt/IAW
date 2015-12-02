<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stilo3.css">
  </head>
  <body>

  <div id="contenedor">
    <?php

    //CREANDO LA CONEXION
    $conex = new mysqli("localhost", "usuariotf", "usuariotf", "TF");

    //COMPRUEBA CONEXIÓN
    if ($conex->connect_errno) {
          printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
          exit();
      }
?>

<form method="post">
<div id="pieza">
  <fieldset>
    <legend>Añadir Pieza</legend>
    <span class="sel"></span>
    <label> Selecione la pieza:<label>
    <select name="piezas" >

<?php

$result=$conex-> query("SELECT * FROM RECAMBIOS;");
while ($object= $result->fetch_object()) {

//var_dump($object);

echo "<option value='$object->IdRecambio'>"."Id Pieza: ".$object->IdRecambio." || Descripción: "."$object->Descripcion"."</option>";



};




?>

  </select>

  <div class="">
      <label for="numero">Número de piezas:</label>
      <input type="text" size="4" name="num" value="">
  </div>

  </fieldset>




</div>


        <div id="boton">
        <input id="btn1" type="submit" name="asigna" value="Asignar Pieza">
      </div>

      <?php

      $piezas=$_POST['piezas'];
      $id=$_GET['id'];
      $num=$_POST['num'];

      if(isset($_POST['piezas'])) {

          $conex-> query("INSERT INTO Incluyen (IdRecambio,IdReparacion,Unidades) VALUES ('$piezas','$id','$num');");

          //INSERT INTO Incluyen (IdRecambio,IdReparacion,Unidades) VALUES ('JU_222_333',1,1);

          //header('location:reparaciones.php');
        }





      ?>

</form>



</div>
  </body>
</html>
