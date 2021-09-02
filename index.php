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
    <style media="screen">
      .main{
        background-image: url(fondo.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .code{
        background: rgba( 255, 255, 255, 0.20 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 4.5px );
        -webkit-backdrop-filter: blur( 4.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        width: 25vw;
        height: 40vh;
        margin: auto;
        margin-top: 25vh;
      }
      .text-ce{
        text-align: center;
        text-shadow: 2px 2px 3px #000;
        font-size: 30px!important;
      }
      .tit-codi{
        text-align: center;
        color: #FFF;
        text-shadow: 2px 2px 3px #000;
      }
      .codi{
        border-radius: 15px 0px;
        margin-left: 20%;
        margin-right: 20%;
        width: 60%;
        height: 25px;
        box-shadow: 3px 3px 3px;
        font-size: 20px;
        border: 0;
      }
      .error{
        color: red;
        font-size: 20px;
        position: absolute;
        width: 100%;
        text-align: center;
        display: none;
      }
      @media(max-width: 895px){
        .code{
          width: 40vw;
          height: 50vh;
        }
      }
      @media(max-width: 675px){
        .code{
          width: 60vw;
          height: 280px;
        }
      }
    </style>
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
