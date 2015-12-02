<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8859-1">
    <meta charset="">
    <title></title>
      <link rel="stylesheet" href="stilo.css">
  </head>
  <body>
<div id="contenedor">

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

      //select CodEmpleado, Nombre, Apellidos, Categoria from EMPLEADOS where Categoria like 'Oficial%';
?>
<form method="post">
  <fieldset>
    <legend>Asignar Mecánico</legend>
<table>

  <tr>
    <th>CodEmpleado</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Categoría</th>
    <th>Seleccionado</th>
    <th>Numero de Horas</th>
  </tr>


<?php

//SOLO SELECCIONAMOS A LOS OFICALES YA QUE ASIGNAMOS A INTERVENCIONES
  $result=$conex-> query("SELECT * FROM EMPLEADOS WHERE Categoria like 'Oficial%';");
  while ($object= $result->fetch_object()) {

  //var_dump($object);

  echo "<tr>";
  echo "<td>".$object->CodEmpleado."</td>";
  echo "<td>".$object->Nombre."</td>";
  echo "<td>".$object->Apellidos."</td>";
  echo "<td>".$object->Categoria."</td>";
  echo "<td>"."<input id='' type='checkbox' name='sel' value='$object->CodEmpleado'>"."</td>";
  echo "<td>"."<input id='' type='text' size='3' maxlength='4' name='horas[]' value=''>"."</td>";
  echo "</tr>";



  }

?>

</table>

<div id="boton">
<input id="btn1" type="submit" name="asigna" value="Asignar Empleado">
</div>

<?php

$sel=$_POST['sel'];
//HORAS ES UN VECTOR
$vhoras=$_POST['horas'];
$horas;

//AL SER UN VECTOR HAY QUE RECORRERLO
foreach ($vhoras as $key => $value) {
  if ($value <> 0) {
    $horas=$value;
  }

}



if(isset($_POST['sel'])) {

    $conex-> query("INSERT INTO Intervienen (CodEmpleado,IdReparacion,Horas) VALUES ('$sel','$id','$horas');");



    //NSERT INTO `TF`.`Intervienen` (`CodEmpleado`, `IdReparacion`, `Horas`) VALUES ('60000', '1', '1.20');

    //header('location:reparaciones.php');
  }
//var_dump($sel);
//var_dump($id);
//var_dump($horas);




?>








</fieldset>
</form>
</div>
  </body>




</html>
