<?php
  include 'conexion.php';
  $id = $_GET['id'];
  $sql = "delete from usuarios where id=$id";
  $conexion->query($sql);
  $conexion->close();
  header("location: home.php");
  