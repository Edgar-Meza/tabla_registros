<?php
  include('../variables.php');

  echo$_ENV['DB_SERVER'];
  $server = "servername";
  $user = "username";
  $pass = "passdb";
  $db = "databasename";

  $conexion = new mysqli($server,$user, $pass, $db);

 ?>
