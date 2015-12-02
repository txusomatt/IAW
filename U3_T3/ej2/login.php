<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="stilo.css">
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
  <script src="jquery-ui-1.11.4/jquery-1.11.3.min.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <style>
  .no-close .ui-icon-closethick {
  display: none;
}

  </style>
</head>
<body>

  <script>
 $(function() {
   $( "#registro" ).dialog();
   $( "#fallo" ).dialog();



   //$(function (btreint) {
     //location.reload();
   //});
 });






 </script>

  <?php
  $user = "";
  $pass = "";

  if(isset($_POST['user'])) {

      $user = $_POST['user'];
      $pass = $_POST['pass'];

      if ( $_POST['user']=="pepe" or $_POST['pass'] == "1234" ) {
          //echo "<p>Hay algún campo vacío</p>";
          header('location: matricula.php');

      }
      else {

        echo "<script>"."$"."(function(){"."$"."('#registro').remove();});"."</script>";
          echo "<div id='fallo'><h2>!!SE HA PRODUCIDO UN FALLO DE AUTENTICACIÓN¡¡</h2>
            <form id='reint' method='post' action='login.php'>
            <input onclick='btreint()' type='submit' value='Reintentar'> </div>";


      }
  }

  ?>
<div id="registro" title="login">
  <form id='formu' method="post" action="login.php">

      <label>Nombre de usuario:</label><input type="text" name="user"><br>
      <label>Contraseña:</label><input type="password" name="pass"><br>

      <div class="submit">
          <input type="submit" value="Entrar">
      </div>
  </form>
  </div>
</body>
</html>
