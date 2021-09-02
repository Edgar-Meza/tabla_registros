<?php

  if(isset($_POST['actualizar'])){
    $idr = $_POST['idup'];
    $nombre = $_POST['nombred'];
    $numero = $_POST['numerod'];
    $relacion = $_POST['relaciond'];
    $estado = $_POST['estadod'];

    $consulta = "UPDATE invitados SET nombre='".$nombre."', num_acompanantes=".$numero.", friendship='".$relacion."', estado='".$estado."' WHERE id_invitado=".$idr."";

    $agregar = mysqli_query($conexion, $consulta);
  }

 ?>
