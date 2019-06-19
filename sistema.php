<?php
# Paso 1: Estableciendo la conexión con MySQL
$pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");

session_start();
    if(empty($_SESSION['active'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="contenedor-header">
        <h1><a class="icon-guidedog" href="sistema.php">Club Mascota</a></h1>
            <div class="menu">
                <ul>
                    <li><a class="icon-off" href="salir_sistema.php"></a></li> 
                </ul>
            </div>
        </div>
    </header>
    <h1 id="bienvenida">Bienvenido al sistema</h1>
    <section id="opciones">
        <form action="registrar_mascota.php">
            <input type="submit" value="Registrar Mascota" id="boton">
        </form>
        <form action="eliminar_mascota.php">
            <input type="submit" value="Eliminar Mascotas" id="boton">
        </form>
    </section>
</body>
</html>