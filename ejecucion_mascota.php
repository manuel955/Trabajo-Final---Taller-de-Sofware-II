<?php
#Paso 1  : Leer los valores nuevos

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

#Paso 2 : Actualizar la BD

$pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8","root","");
$pdo->query("DELETE FROM mascotas WHERE nombre,descripcion, id = $id" );

#Paso 3 : Redirigir

header("Location: sistema.php");
?>