<?php
# Paso 1: Estableciendo la conexión con MySQL
$pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/adopta.css">
    <title>Home Club Mascota</title>
</head>
<body>
    <header>
        <div class="contenedor-header">
        <h1><a class="icon-guidedog" href="home.php">Club Mascota</a></h1>
            <div class="menu">
                <ul>
                    <li><a href="Que_Somos.php">¿Que es Club Mascota?</a></li>
                    <li><a href="Adopta.php">Adopta</a></li>
                    <li><a href="Ayuda.php">Ayuda</a></li>
                    <li><a href="Contribuye.php">Contribuye</a></li>
                    <li><a class="icon-user" href="login.php"></a></li>   
                </ul>
            </div>
        </div>
    </header>
    
    <section id="inprimir">
    <h1>Portal de noticias</h1>
    <?php
    # Paso 2: Iterar los registros
    ?>
    <?php foreach ($pdo->query("SELECT * FROM mascotas ORDER BY id DESC") as $fila) { ?>

        <tr>
            <td><?php echo "Nombre: ". $fila["nombre"]?></td><br>
            <td><?php echo "Descripcion: ". $fila["descripcion"]?></td><br>
            <td><?php echo "Mascota: ". $fila["rol"]?></td>
        </tr>
        <br><br>

    <?php } ?>
    </section>
</body>
</html>