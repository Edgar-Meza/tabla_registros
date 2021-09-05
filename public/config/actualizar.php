<?php

  if(isset($_POST['actualizar'])){
    $idr = $_POST['idup'];
    $col1 = $_POST['col1d'];
    $col2 = $_POST['col2d'];
    $col3 = $_POST['col3d'];
    $col4 = $_POST['col4d'];

    $consulta = "UPDATE registros SET col1v='".$col1."', col2n=".$col2.", col3v='".$col3."', col4v='".$col4."' WHERE id=".$idr."";

    $agregar = mysqli_query($conexion, $consulta);
  }

 ?>
