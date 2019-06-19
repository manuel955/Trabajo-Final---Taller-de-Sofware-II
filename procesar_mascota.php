<?php
    $nombre =$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $mascota=$_POST["mascota"];
    $imgagen= $_FILES['imagen']['name'];
    $_archivo= $_FILES['imagen']['tmp_name'];

    $pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");
    $pdo->query("INSERT INTO mascotas VALUES (NULL, '$mascota', '$nombre', '$descripcion', '$imagen')");

    header("Location: sistema.php");
?>