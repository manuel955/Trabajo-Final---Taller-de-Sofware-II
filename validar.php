<?php
    $host = 'localhost';
    $user = 'root'; 
    $password = '';
    $db = 'club_mascota';

    $pdo = new PDO("mysql:host=localhost;dbname=club_mascota;charset=utf8", "root", "");

    if(!$pdo>0){
        echo "Error en la conexcion";
    }
?>