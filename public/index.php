<?php
    session_start();
    if($_SESSION['verificacion'] == 'sin_validar'){
        echo"<script>
          window.onload = function(){
            document.getElementById('error').style.display = 'block';
          }
        </script>";
        session_destroy();
      }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" />
    <title>Administrador</title>
  </head>
  <body class="main">
    <div class="code">
      <form action="auth.php" method="post">
        <div class="text-ce texto-1 cursor-p font-gv" id="fh5co-logo">
          <span style="vertical-align: super;">G</span>
          <span style="vertical-align: sub;">M</span>
        </div>
        <div class="error" id="error">
          <span>Codigo Erroneo!!!</span>
        </div>
        <h1 class="tit-codi">Ingresa el código de acceso</h1>
        <input class="codi" type="text" name="codigo">
      </form>
    </div>
  </body>
</html>
