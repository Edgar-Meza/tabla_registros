<?php
  if(isset($_POST['codigo'])){
    $codigo = $_POST['codigo'];
    session_start();
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
 ?>
