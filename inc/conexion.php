<?php
  $servername = "80.211.145.146";
  $user = "triana";
  $password = "12345678";
  $database = "spectre";

  $conexion = new mysqli($servername,$user,$password,$database);

  if($conexion -> connect_error){
    die("Error de conexion: " . $conexion -> connect_error);
  }
?>
