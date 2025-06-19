<?php

    include 'conexion.php';

    $name = $_POST['mail'];

    mail($name, "Recuperación de contraseña", "Haz click en el siguiente enlace para restablecer tu contraseña: http://localhost/Proyecto%20Final%20PHP/newMenu/olvidoPassword.php");

    header("Location: ./newMenu/main.php");
    

?>