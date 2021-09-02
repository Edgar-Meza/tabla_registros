<?php
  if(isset($_POST['guardar'])){
    $nombre = $_POST['nombred'];
    $numero = $_POST['numerod'];
    $relacion = $_POST['relaciond'];
    $estado = $_POST['estadod'];

    $agregar = mysqli_query($conexion, "INSERT INTO invitados VALUES(null, '".$nombre."',".$numero.",'".$relacion."','".$estado."')");
  }
 ?>
