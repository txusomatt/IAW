<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="stilo.css">
  </head>

  <body>
    <?php
    //CREANDO LA CONEXION
    $conex = new mysqli("localhost", "usuariotf", "usuariotf", "TF");

    //COMPRUEBA CONEXIÓN
    if ($conex->connect_errno) {
          printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
          exit();
      }

    //COGE RESULTADOS

    if ($result = $conex->query("SELECT * FROM REPARACIONES;")) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

  }
?>









    <table >
      <thead >
        <th>IdReparacion</th>
        <th>Matricula</th>
        <th>Fecha entrada</th>
        <th>Km</th>
        <th>Averia</th>
        <th>Fecha Salida</th>
        <th>Reparado</th>
        <th>Observaciones</th>
        <th>Editar</th>
        <th>Borrar</th>
        <th>Añadir Pieza</th>
        <th>Asignar<br> mecánico</th>

      </thead>


      <?php
          //RECORRIENDO OBJETOS PARA EL RESULTADO
          //THE LOOP CONTINUA MIENTRAS TENGAMOS ALGUN OBJETO
          while($obj = $result->fetch_object()) {
              //IMPRIME CADA FILA
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td>"."<a href='editar.php?id=$obj->IdReparacion' target='_blank'><img src='images/editar.jpg'> </td>";
              echo "<td>"."<a href='borrar.php?id=$obj->IdReparacion'><img src='images/borrar.jpg'> </td>";
              echo "<td>"."<a href='asignar_pieza.php?id=$obj->IdReparacion' target='_blank'><img src='images/añadir.png'> </td>";
              echo "<td>"."<a href='asignar_empleado.php?id=$obj->IdReparacion' target='_blank'><img src='images/mon.png'> </td>";

              echo "</tr>";
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
       //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
    </table>
    <div id="boton">
      <nav><a href="crear.php" target="_blank">
    <input id="btn1" type="submit" name="crear" value="Crear Reparación">
  </a>
  </nav>
    </div>

  </body>
</html>
