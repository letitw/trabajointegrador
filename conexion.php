<?php
try{
    $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

    $conex = new PDO('mysql:host=localhost:8889;dbname=wish', 'root', 'root', $opt);
    //echo '<pre>';
    //var_dump($conex);exit;

 }catch(PDOException $e){
    echo 'No me pude conectar a la base de datos<br>';
    echo $e->getMessage();

  }
