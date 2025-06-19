<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPat'];
    $apMat = $_POST['apMat'];
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $boleta = strval(mt_rand(1000000000, 9999999999));

    $query = "INSERT INTO $tipo (nombre, ap_Pat, ap_Mat, boleta, email, contraseña) VALUES ('$nombre', '$apPat', '$apMat', $boleta, '$email', '$password')";
    $result = $conexion->query($query);
    $row = $result->fetch_assoc();

    header("Location: ./newMenu/main.php");

?>

