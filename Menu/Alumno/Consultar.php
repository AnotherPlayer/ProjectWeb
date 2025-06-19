<?php

  include './../conexion.php';

  $query = "SELECT * FROM ".$_COOKIE['tipo']." WHERE boleta = ".$_COOKIE['boleta'];
  $result = $conexion->query($query);
  $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>

  <link rel="stylesheet" href="./styles/consultar.css">

</head>
<body>
  
    <div class="contenedor-perfil">
        <div class="encabezado-perfil">
            <div class="avatar">A</div>
            <h1 class="nombre-usuario">
              <?php
                echo $row['nombre'];
              ?>
            </h1>
            <div class="tipo-usuario">
              <?php
                echo $_COOKIE['tipo'];
              ?>
            </div>
        </div>
        
        <div class="cuerpo-perfil">
            <div class="seccion-info">
                <h2 class="seccion-titulo">Información Personal</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Nombre(s)</span>
                        <div class="valor">
                          <?php
                            echo $row['nombre'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Apellido Paterno</span>
                        <div class="valor">
                          <?php
                            echo $row['ap_Pat'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Apellido Materno</span>
                        <div class="valor">
                          <?php
                            echo $row['ap_Mat'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="seccion-info">
                <h2 class="seccion-titulo">Datos Académicos</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Boleta/Número de Control</span>
                        <div class="valor">
                          <?php
                            echo $row['boleta'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Grupo</span>
                        <div class="valor">
                          <?php
                            echo $row['grupo'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Tipo de Usuario</span>
                        <div class="valor">
                          <?php
                            echo $_COOKIE['tipo'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="seccion-info">
                <h2 class="seccion-titulo">Información de Contacto</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Correo Electrónico</span>
                        <div class="valor">
                          <?php
                            echo $row['correo'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>