<?php
# Paso 1: Estableciendo la conexión con MySQL
$pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");
$resultado = $pdo->query("SELECT * FROM mascotas ");
$fila = $resultado->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <?php
    # Paso 2: Iterar los registros
    ?>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    <?php foreach ($pdo->query("SELECT * FROM mascotas ORDER BY id DESC") as $fila) { ?>

        <tr>
            <td><?php echo $fila["nombre"]?></td>
            <td><?php echo $fila["descripcion"]?></td>
            <td><a href="ejecucion_mascota.php?id=<?php echo $fila["id"]?>">eliminar</a></td>
        </tr>

    <?php } ?>
        </table>
</body>
</html>