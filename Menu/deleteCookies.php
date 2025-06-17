<?php

        setcookie("nombre", "", time() - 3600, "/");
        setcookie("tipo", "", time() - 3600, "/");
        header("Location: ./Menu.php");

?>