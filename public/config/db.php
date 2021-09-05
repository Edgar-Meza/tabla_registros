<?php

  $server = $_ENV['DB_SERVER'];
  $user = $_ENV['DB_USER'];
  $pass = $_ENV['DB_PASSWORD'];
  $db = $_ENV['DB_NAME'];

  $conexion = new mysqli($server,$user, $pass, $db);

 ?>
