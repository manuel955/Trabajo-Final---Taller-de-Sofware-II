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
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <title>Document</title>
</head>
<body>
<header>
		<div class="header">
			<h1>Sistema de albergue</h1>
			<div class="optionsBar">
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="salir_sistema.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
	</header>
	<section id="container">
		<h1>Bienvenido al sistema</h1>
	</section>
	<h1>Portal de noticias</h1>
    <a href="registrar.php">Nueva Noticia</a>
    <?php
    # Paso 2: Iterar los registros
    ?>
    <?php foreach ($pdo->query("SELECT * FROM mascotas ORDER BY id DESC") as $fila) { ?>

        <h2><?php echo $fila["nombre"] ?></h2>
        <p><?php echo $fila["descripcion"] ?></p>
        <p><?php echo $fila["fecha"] ?> / <?php echo $fila["autor"] ?></p>

    <?php } ?>

</body>
</html>