<?php

  include './../conexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
</head>
<body>

    <h2>
    
      <?php
      echo "Información de ".$_COOKIE['tipo']." ".$_COOKIE['nombre'].":";

      $query = "SELECT * FROM ".$_COOKIE['tipo']." WHERE boleta = ".$_COOKIE['boleta'];
      $result = $conexion->query($query);
      $row = $result->fetch_assoc();

      echo "<br>Nombre: ".$row['nombre'];
      echo "<br>Apellido paterno: ".$row['ap_Pat'];
      echo "<br>Apellido materno: ".$row['ap_Mat'];
      echo "<br>Boleta: ".$row['boleta'];
      echo "<br>Grupo: ".$row['grupo'];
      echo "<br>Tipo: ".$row['tipo'];
      echo "<br>Correo: ".$row['correo'];

      ?>
    
    </h2>    

    
</body>
</html>