<html>
  <head>
    <meta charset="UTF-8">
    <meta charset="">
    <title></title>
  </head>
  <body>
    <h2>ESTO ES PA CREAR REPARACIONES<h2>

      <p> MATRICULA 1313 DEF </P>

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

    <div id="datos">


      <fieldset>
        <legend>Datos de la Avería</legend>
          <div class="daav">
              <label for="matri">Matrícula:</label>
              <input type="text" name="MATRI" value="">
          </div>

          <div class="daav">
              <label for="fechin">Fecha de Entrada:</label>
              <input type="text" name="FECHIN" value="">
          </div>

          <div class="daav">
              <label for="km">Kilómetros:</label>
              <input type="text" name="KM" value="">
          </div>

          <div class="daav">
              <label for="desc">Avería:</label>
              <input type="text" name="DESCR" value="">
          </div>
          <br>
          <label for="obs">Observaciones:</label>
          <div class="daav">

              <textarea name="OBS" rows="10" cols="25" value=""></textarea>
          </div>


    </fieldset>

    </div>
  


      <?php

        if(isset($_POST['MATRI'])) {

          //var_dump($_POST);
          $matri=$_POST['MATRI'];
          $fechin=$_POST['FECHIN'];
          $km=$_POST['KM'];
          $desc=$_POST['DESCR'];
          $obs=$_POST['OBS'];




          var_dump($matri);
          var_dump($fechin);
          var_dump($km);
          var_dump($desc);
          var_dump($obs);
        $conex-> query("INSERT INTO REPARACIONES (Matricula,FechaEntrada,Km,Averia,FechaSalida,Reparado,Observaciones)
        VALUES ('$matri','$fechin','$km','$desc','','','$obs');");

        header('location:reparaciones.php');


        }


    //INSERT INTO `TF`.`REPARACIONES` (`Matricula`, `FechaEntrada`, `Km`, `Averia`, `FechaSalida`, `Reparado`, `Observaciones`)
      //VALUES ('1313 DEF', '2015-01-20', '70000.00', 'Se jodio la trocola', '', '', 'De momento vamo a verlo');




      ?>
      <div id="boton">
      <input id="btn1" type="submit" name="crear" value="Crear Avería">
      </div>



  </body>
  </html>
