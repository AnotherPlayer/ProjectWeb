<?php

    include 'conexion.php';

    $boleta = $_POST['boleta'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];

    $query = "SELECT * FROM $tipo WHERE boleta = $boleta AND contraseña = '$password'";
    $result = $conexion->query($query);
    echo "<h1>Iniciando sesión...</h1>";

    if (mysqli_num_rows($result) > 0) {

        $row = $result->fetch_assoc();
        setcookie("nombre", $row['nombre'], time() + (60*2), "/");
        setcookie("tipo", $tipo, time() + (60*2), "/");
        header("Location: ./$tipo/$tipo.php");

    }
    
    else {
        header("Location: ./Menu.php");
    }

    mysqli_close($conexion);

?>