<?php

$host = 'localhost';
$db   = 'webProject';
$user = 'another'; //Puede variar según tu configuración
$pass = 'Nero_3310'; //Puede variar según tu configuración

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
     echo "Connected successfully";
}

?>