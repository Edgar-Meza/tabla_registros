<?php

  if(isset($_POST['delete'])){
    $idel = $_POST['idelete'];
    $consdel = "DELETE FROM registros WHERE id=".$idel."";

    $eliminar = mysqli_query($conexion, $consdel);
  }

 ?>
