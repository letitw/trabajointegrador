<?php
  require('conexion.php');

  if ($_POST){
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = $conex->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :mail, :clave)");
    $query->bindValue(':nombre', $nombre);
    $query->bindValue(':mail', $email);
    $query->bindValue(':clave', $password);
    $query->execute();
    echo "se cargó el usuario"; exit;

  }





 ?>
