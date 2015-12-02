<html>
  <head>
    <meta charset="UTF-8">
    <meta charset="">
    <title></title>
      <link rel="stylesheet" href="stilo2.css">

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
?>

<form method="post">
  <fieldset>
  <legend> Edición de averias </legend>
<?php

  $result=$conex->query("SELECT * FROM REPARACIONES WHERE IdReparacion = $id ;");
  while ($object= $result->fetch_object()) {

    foreach ($object as $key => $value) {

      switch ($key) {

        /*case 'Matricula':

        echo "<div>";
        echo "<label for='$key'>".$key.":"."</label>";
        echo "<input type='text' maxlenght='250' name='$key' value='' >";
        echo "</div>";


          break;*/

        case 'Observaciones':

        echo "<div>";
        echo "<label for='$key'>".$key.":"."</label>";
        echo "<textarea maxlenght='250' rows='10' cols='25' name='$key' >$value</textarea>";
        echo "</div>";

          break;

        case 'Reparado':

          echo "<div>";
          echo "<label for='$key'>".$key.":"."</label>";
          echo "<input type='text' size='2' maxlenght='250' name='$key' value='$value' > * Valor 1 o 0";
          echo "</div>";

            break;

        case 'Averia':

          echo "<div>";
          echo "<label for='$key'>".$key.":"."</label>";
          echo "<input type='text' size='40' maxlenght='250' name='$key' value='$value' >";
          echo "</div>";

                break;

        default:

        echo "<div>";
        echo "<label for='$key'>".$key.":"."</label>";
        echo "<input type='text' maxlenght='250' name='$key' value='$value' >";
        echo "</div>";

          break;


      //CIERRA EL SWITCH
    }
    //CIERRA EL FOREACH
  }

   //CIERRA EL FORM
//echo "</form>";

}
//$result->close();
//unset($conex);
//unset($object);
//unset($id);



echo "<div class='boton' id='modav'>";
echo "<input class='btn' id='btn1' type='submit' name='modificar' value='Modificar Avería'>";
echo "</div>";









?>

<?php

  //var_dump($_GET);
  //$matri="";

if (isset($_POST['Matricula'])) {




  //var_dump($_POST);
  $matri=$_POST['Matricula'];
  $fechin=$_POST['FechaEntrada'];
  $km=$_POST['Km'];
  $desc=$_POST['Averia'];
  $fechout=$_POST['FechaSalida'];
  $rep=$_POST['Reparado'];
  $obs=$_POST['Observaciones'];



}

//var_dump($fechout);





$conex-> query("UPDATE REPARACIONES SET Matricula='$matri',FechaEntrada='$fechin',Km='$km',Averia='$desc',
FechaSalida='$fechout',Reparado='$rep',Observaciones='$obs' WHERE IdReparacion = '$id';");

//header('location:reparaciones.php');

$result->close();
unset($conex);
//unset($object);
unset($id);
//unset($_GET);
//unset($_POST);



?>

</form>

<form method="post">
<div class="boton" id="volv">

    <a href="reparaciones.php" target="_blank">
      <input class="btn" id="btn2" type="submit" name="volver" value="Volver">
      <?php

          if (isset($_POST['volver'])) {

            var_dump($_GET);

            header('location:reparaciones.php');
          }
 //var_dump($_POST);
       ?>


</div>
</fieldset>















  </form>
</div>
  </body>
  </html>
