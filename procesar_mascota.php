<?php
    $nombre =$_POST["t"];
    $descripcion=$_POST["d"];
    $autor=$_POST["a"];

    $pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");
    $pdo->query("INSERT INTO noticias VALUES (NULL, '$titulo', '$descripcion',SYSDATE(), '$autor')");

    header("Location: sistema.php");
?>