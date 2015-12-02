<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" type="text/css" href="stilo.css" />
  </head>
  <body>

    <div id="contperf">

    <?php

      $v1=array([ "DNI"=>"11111111A",
                  "NOMBRE"=>"Atanagildo",
                  "APELLIDOS"=>"Macias Pajas",
                  "DIRECCIÓN"=>"calle bellavista 9ºB",
                  "TELÉFONO"=>"954112345",
                  "EMAIL"=>"mp@janderclein.org"],

                  [ "DNI"=>"22222222B",
                    "NOMBRE"=>"Chindasvinto",
                    "APELLIDOS"=>"Colina Profunda",
                    "DIRECCIÓN"=>"calle Montaña S/N",
                    "TELÉFONO"=>"954226789",
                    "EMAIL"=>"ld@janderclein.org"],

                  [ "DNI"=>"33333333C",
                    "NOMBRE"=>"Alarico",
                    "APELLIDOS"=>"Ladrón de Guevara",
                    "DIRECCIÓN"=>"Plaza del trinque 4",
                    "TELÉFONO"=>"954331012",
                    "EMAIL"=>"alar@janderclein.org"],

                  [ "DNI"=>"44444444D",
                    "NOMBRE"=>"Sisebuto",
                    "APELLIDOS"=>"Del Palmar",
                    "DIRECCIÓN"=>"Calle Lenin 'antes Hitler' 1942",
                    "TELÉFONO"=>"954443456",
                    "EMAIL"=>"sise@janderclein.org"],

                  [ "DNI"=>"55555555E",
                    "NOMBRE"=>"Witiza",
                    "APELLIDOS"=>"Borldorolo Vieso",
                    "DIRECCIÓN"=>"Calle Melancolia nº 7",
                    "TELÉFONO"=>"954557891",
                    "EMAIL"=>"wtz@janderclein.org"],

                  [ "DNI"=>"66666666F",
                    "NOMBRE"=>"Leovigildo",
                    "APELLIDOS"=>"Alup lup",
                    "DIRECCIÓN"=>"Paseo del tamtam 42",
                    "TELÉFONO"=>"954660123",
                    "EMAIL"=>"leov@janderclein.org"],

                  [ "DNI"=>"77777777G",
                    "NOMBRE"=>"Teudiselo",
                    "APELLIDOS"=>"Envoz Baja",
                    "DIRECCIÓN"=>"Calle juventudes musicales S/N",
                    "TELÉFONO"=>"954774567",
                    "EMAIL"=>"dise@janderclein.org"],

                  [ "DNI"=>"88888888H",
                    "NOMBRE"=>"Suintilla",
                    "APELLIDOS"=>"Quete Pilla",
                    "DIRECCIÓN"=>"Avd. Corredor 22",
                    "TELÉFONO"=>"954888910",
                    "EMAIL"=>"sui@janderclein.org"],

                  [ "DNI"=>"99999999I",
                    "NOMBRE"=>"Turismundo",
                    "APELLIDOS"=>"Trolley de Mano",
                    "DIRECCIÓN"=>"Plaza Viajero 31",
                    "TELÉFONO"=>"954991234",
                    "EMAIL"=>"turis@janderclein.org"],

                  [ "DNI"=>"10101010J",
                    "NOMBRE"=>"Ataúlfo",
                    "APELLIDOS"=>"Seguro Huelfo",
                    "DIRECCIÓN"=>"Camino del bonardo 77",
                    "TELÉFONO"=>"954105678",
                    "EMAIL"=>"ati@janderclein.org"]

);
//var_dump($v1);
  echo "<div id='imag'>"."<img src='images/" . $_GET[id].".jpg'>"."</div>";
  echo "<div id='conttext'>";

$nom;

foreach ($v1[$_GET['id']] as $key => $value) {

    switch ($key) {

        case 'DNI':
          echo "<div class='datoscto' id='DNI'>"."<img src='images/dni.jpg'>"."<p>".$value."</p></div>";
        break;

        case 'NOMBRE':
          $nom = $value;
        break;

        case 'APELLIDOS':
          $nom = $nom." ".$value;
          echo "<div id='namp'>"."<p>".$nom."</p>"." </div>";
        break;

        case 'EMAIL':
          echo "<div class='datoscto' id='text".$key."'>"."<div class='key'>".$key."</div> ".
          "<a href='mailto:$value' target='_top'>".$value."</a></div>";
        break;

        default:
          echo "<div class='datoscto' >"."<div class='key'>".$key."</div> ".$value."</div>";
        break;
    }
}

echo "</div>";

    ?>
</div>
  </body>
</html>
