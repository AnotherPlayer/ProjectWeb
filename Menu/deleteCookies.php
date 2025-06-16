<?php


        $row = $result->fetch_assoc();
        setcookie("nombre", "", time() - 3600, "/");
        setcookie("tipo", "", time() - 3600, "/");
        header("Location: ./../Menu.php");

?>