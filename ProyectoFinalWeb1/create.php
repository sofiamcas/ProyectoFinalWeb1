<?php
  include 'conexion.php';

  $nombre = $_POST["nombre"];
  $usuario = $_POST["usuario"];
  $pass = $_POST["pass"];
  $cellnum = isset($_POST["cellnum"]) ? intval($_POST["cellnum"]) : 0;
  $email = $_POST["email"];
  $sql = "insert into usuarios (nombre, usuario, pass, cellnum, email) values ('$nombre', '$usuario', '$pass','$cellnum','$email')";
  $conexion->query($sql);
  $conexion->close();
  header("location: registro.php");
?>