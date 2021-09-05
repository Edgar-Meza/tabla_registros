<?php
  session_start();
  if(isset($_POST['codigo'])){
    $codigo = $_POST['codigo'];
    if($codigo == 'codigo_acceso'){
      $_SESSION['token'] = 'Validado';
      header('Location:cp.php');
    }
    else{
      $_SESSION['verificacion'] = 'sin_validar';
      echo"<script>
        history.back();
      </script>";
    }
  }
  if(isset($_POST['cerrar'])){
    session_destroy();
    header('Location:index.php');
  }
 ?>
