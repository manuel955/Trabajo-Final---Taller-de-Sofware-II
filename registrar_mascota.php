<?php
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
    <link rel="stylesheet" type="text/css" href="css/registrar_mascota.css">
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
    <div class="form-registrar">
        <h1>Registrar Usuario</h1>
        <hr>
        <form action="procesar_mascota.php" method="post" enctype="multipart/form-data">
            <select name="mascota" id="mascota" required>
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Loro">Loro</option>
            </select>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" placeholder="Escriba aqui la descripción" required></textarea>
            <input type="file" name="imagen" id="imagen">
            <input type="submit" value="registrar mascota" class="registrar-mascota">
        </form>
    </div>
</body>
</html>