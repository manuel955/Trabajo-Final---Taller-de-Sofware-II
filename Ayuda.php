<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/ayuda.css">
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
    <form action="mensaje-enviado.php">
        <h2>Contacto Para Apoyar a Nuestro Albergue</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="nombre" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Telefono" required>
        <textarea name="mensaje" placeholder="Escriba Aqui Como Desea Ayudar" required></textarea>
        <input type="submit" value="Enviar" id="boton">
    </form>
    <img src="" alt="">
</body>
</html>