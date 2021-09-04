<?php

  if(isset($_POST['delete'])){
    $idel = $_POST['idelete'];
    $consdel = "DELETE FROM invitados WHERE id_invitado=".$idel."";

    $eliminar = mysqli_query($conexion, $consdel);
  }

 ?>
