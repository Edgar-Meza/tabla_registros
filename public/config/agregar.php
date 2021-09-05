<?php
  if(isset($_POST['guardar'])){
    $col1 = $_POST['col1d'];
    $col2 = $_POST['col2d'];
    $col3 = $_POST['col3d'];
    $col4 = $_POST['col4d'];

    $agregar = mysqli_query($conexion, "INSERT INTO registros VALUES(null, '".$col1."',".$col2.",'".$col3."','".$col4."')");
  }
 ?>
