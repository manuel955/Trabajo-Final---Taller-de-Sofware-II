<?php
    session_start();
    if(!empty($_SESSION['active'])){
        header('Location:sistema.php');
    }else{
    $alert= '';
    if(!empty($_POST)){
       if(empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert= 'Ingrese su Usuario y su Clave';
       }
       else{
           require_once "validar.php";
           $user = $_POST['usuario'];
           $pass = $_POST['clave'];

           $resultado = $pdo->query("SELECT * FROM usuario WHERE usuario ='$user' AND clave ='$pass' ");
           $filas = $resultado->fetchAll();
           
           
            if (count($filas) == 0) {
                    $alert = 'El usuario o la clave es inconrrecta';
                    session_destroy();
            }
            else {
                
                $_SESSION['active'] = true;
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['clave'] = $data['clave'];
                header('Location:sistema.php');
            }
       }

    }}
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
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Document</title>
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
    <section id="container">
        <form action=" " method="post">
            <h2>Iniciar Sesión</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW6V2Oaa6WpB6pvPMkcDyfp_YkyZfHeyO72Eyywmg4Mqkv6Fmk1g">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Clave">
            <div class="alert"><?php echo(isset($alert)? $alert:'' )?></div>
            <input type="submit" value="Ingresar">
        </form>
    </section>
</body>
</html>