<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="stilo.css">
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
  <script src="jquery-ui-1.11.4/jquery-1.11.3.min.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
</head>
  <body>


      <?php

      $vclaves=array('');
      $v2="";
      $vvalores=array('');
      $v4="";
      $vtotal=array('');
      $vmod= $_POST["mod"];

      if(isset($_POST['DNI'])) {

        foreach ($_POST as $key => $value) {
          $v2=$key;
          $v4=$value;

          array_push($vclaves, $v2);
          array_push($vvalores,$v4);
          $vtotal= array_combine($vclaves,$vvalores);
        }
}
        ?>

      <div id="contenedor">

      <form method="post" action="matricula.php">

        <table>
        <tr>
          <td>

        <div id="datos">


          <fieldset>
            <legend>Datos de Contacto</legend>
              <div class="dcto">
                  <label for="dni">DNI:</label>
                  <input type="text" name="DNI" value="">
              </div>

              <div class="dcto">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="NOM" value="">
              </div>

              <div class="dcto">
                  <label for="apellidos">Apellidos:</label>
                  <input type="text" name="APEL" value="">
              </div>

              <div class="dcto">
                  <label for="direc">Dirección:</label>
                  <input type="text" name="DIR" value="">
              </div>

              <div class="dcto">
                  <label for="telef">Teléfono:</label>
                  <input type="text" name="TEL" value="">
              </div>

              <div class="dcto">
                  <label for="email">Email:</label>
                  <input type="text" name="MAIL" value="">
              </div>
        </fieldset>

        </div>

      </td>

    <td>


        <div id="curso">
          <fieldset>
            <legend>Curso</legend>
            <span class="sel"></span>
            <select name="CURSO" >

              <option value="1ASIR" selected>1º ASIR</option>
              <option value="2ASIR">2º ASIR</option>

          </select>
          </fieldset>
        </div>
      </td>


    <td>


        <div id="modulos">
          <fieldset>
            <legend>Módulos/Beca</legend>
            <div class="divmod" class="1asir">
              <input id="imso" type="checkbox" name="mod[]" value="IMSO">
                <label for="imso"><span></span>Implantación de Sistemas Operativos</label>
                </div>

             <div class="divmod" class="1asir">
               <input id="lmsg" type="checkbox" name="mod[]" value="LMSG">
                 <label for="lmsg"><span></span>Lenguajes de marcas</label>
             </div>

              <div class="divmod" class="1asir">
                <input id="pyar" type="checkbox" name="mod[]" value="PYAR">
                  <label for="pyar"><span></span>Planificación y Administración de Redes</label>
                  </div>

              <div class="divmod" class="1asir">
                <input id="gbd" type="checkbox" name="mod[]" value="GBD">
                  <label for="gbd"><span></span>Gestión de Bases de Datos</label>
                  </div>

              <div class="divmod" class="1asir">
                <input id="fdh" type="checkbox" name="mod[]" value="FDH">
                  <label for="fdh"><span></span>Fundamentos del hardware</label>
                  </div>

              <div class="divmod" class="1asir">
                <input id="fol" type="checkbox" name="mod[]" value="FOL">
                <label for="fol"><span></span>Formación y Orientación Laboral</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="iaw" type="checkbox" name="mod[]" value="IAW">
                <label for="iaw"><span></span>Implantación de Aplicaciones Web</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="sri" type="checkbox" name="mod[]" value="SRI">
                <label for="sri"><span></span>Servicios de Red e Internet</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="sad" type="checkbox" name="mod[]" value="SAD">
                <label for="sad"><span></span>Seguridad y Alta Disponibilidad</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="adb" type="checkbox" name="mod[]" value="ADB">
                <label for="adb"><span></span>Administración de Base de Datos</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="aso" type="checkbox" name="mod[]" value="ASO">
                <label for="aso"><span></span>Administración de Sistemas Operativos</label>
              </div>

              <div class="divmod" class="2asir">
                <input id="eie" type="checkbox" name="mod[]" value="EIE">
                <label for="eie"><span></span>Empresa e Iniciativa Emprendedora</label>
              </div>

              <div class="divmod" class="2asir">
              <input id="beca" type="radio" name="BECA" value="si">
                <label for="beca"><span></span>Marque la casilla solo si ha solicitado beca</label>
              </div>

          </fieldset>
        </div>


      </td>


        <div id="boton">
        <input id="btn1" type="submit" name="envia" value="Enviar">
      </div>





    </tr>
    <tr>
    <td>


        <div id="resumen">
          <fieldset>
            <legend>Resumen</legend>
            <div id="r1"></div>
            <?php

            if (isset($vtotal['DNI']) && count($vmod)==0) {

                unset($vtotal);
                echo "<div>ERROR!! Ningun módulo seleccionado</p>";
              }


            if (isset($vtotal['NOM'])) {
              echo "<div>El Alumno ".$vtotal['NOM']." ".$vtotal['APEL'] .
              " con:"."<br><br>"." DNI: ". $vtotal['DNI']."<br><br>"."Domicilio: ".$vtotal['DIR']."<br><br>".
              "Número de Tlf: ".$vtotal['TEL']."<br><br>"."Dirección de email: ".$vtotal['MAIL']."<br><br>".
              "Desea matricularse en los siguientes módulos:".  "</div>";

            }

            for ($i=0;$i < count($vmod); $i++) {
              switch ($vmod[$i]) {

                case 'IMSO':
                  echo "<div class='divmod'><p> --Implantación de Sistemas Operativos--</p></div>";
                  break;

                case 'LMSG':
                  echo "<div class='divmod'><p> --Lenguajes de Marcas--</p></div>";
                  break;

                case 'PYAR':
                  echo "<div class='divmod'><p>--Planificación y Administración de redes--</p></div>";
                  break;

                case 'GBD':
                  echo "<div class='divmod'><p>--Gestión de Base de Datos--</p></div>";
                  break;

                case 'FDH':
                  echo "<div class='divmod'><p>--Fundamentos del Hardware--</p></div>";
                  break;

                case 'FOL':
                  echo "<div class='divmod'><p>--Formación y orientación Laboral--</p></div>";
                  break;

                case 'IAW':
                  echo "<div class='divmod'><p>--Implantación de Aplicaciones Web--</p></div>";
                  break;

                case 'SRI':
                  echo "<div class='divmod'><p>--Servicios de Red e Internet--</p></div>";
                  break;

                case 'SAD':
                  echo "<div class='divmod'><p>--Seguridad y Alta Disponibilidad--</p></div>";
                  break;

                case 'ADB':
                  echo "<div class='divmod'><p>--Administración de Base de Datos--</p></div>";
                  break;

                case 'ASO':
                  echo "<div class='divmod'><p>--Administración de Sistemas Operativos--</p></div>";
                  break;

                case 'EIE':
                  echo "<div class='divmod'><p>--Empresa e Iniciativa Emprendedora--</p></div>";
                  break;
                }
              }

              if (isset($vtotal['BECA'])) {
                echo "<div> Se ha solicitado beca.</div>";
            }
            ?>

          </fieldset>
        </div>
      </td>
    </tr>
</table>
</div>
</form>
  </div>

  </body>
</html>
