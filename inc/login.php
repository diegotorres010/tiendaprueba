<?php
  require "../inc/conexion.php";
  /*$username = $_POST['usuario'];
  $clave =  $_POST['clave'];
  lucidchart*/


  $consultarUsuario = "SELECT timestamp FROM turnos WHERE idTurno = '1'";
  $resultado = mysqli_query($conexion,$consultarUsuario);
  if($row = mysqli_fetch_array($resultado)){
    echo $row['timestamp'];
  /*  if(password_verify($clave,$row['clave'])){
      echo $row['clave'];
    }else{
      echo "Contraseña incorrecta";
    }

  }else{
    echo "Usuario no existe";*/
  }
?>
