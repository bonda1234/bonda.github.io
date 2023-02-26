<?php

include('conexion.php');

if (isset($_POST['Registrarse'])) {
  $usuario = $_POST['nombreUsuario'];
  $email = $_POST['correo'];
  $contraseña = $_POST['password'];
  $confirmacion = $_POST['passwordConfir'];
  $consulta = "INSERT INTO usuarios (nombreUsuario, correo, 'password', passwordConfir) VALUES ('$usuario','$email','$contraseña','$confirmacion')";
  $result = mysqli_query($conexion, $consulta);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'dato cargado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>