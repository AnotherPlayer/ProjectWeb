<?php
    
  if( !(count($_COOKIE) > 0) ){

    // Si hay cookies, redirigir a la página de inicio
    header("Location: ./../Menu.php");
    
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Alumno</title>
    
    <link rel="stylesheet" href="./alumno.css">

</head>
<body>
    <header>
        <h1>Bienvenido Alumno David</h1>
    </header>
    
    <nav>
        <!-- Botón Principal -->
        <div class="menu-button">
            <button class="dropdown-button">Principal</button>
            <div class="dropdown-content">
                <a href="#">Menú principal</a>
            </div>
        </div>
        
        <!-- Botón Perfil -->
        <div class="menu-button">
            <button class="dropdown-button">Perfil</button>
            <div class="dropdown-content">
                <a href="#">Consultar</a>
                <a href="#">Editar</a>
            </div>
        </div>
        
        <!-- Botón Bloques -->
        <div class="menu-button">
            <button class="dropdown-button">Bloques</button>
            <div class="dropdown-content">
                <!-- Bloque 1 -->
                <div class="nested-menu">
                    <a href="#">Bloque 1</a>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <a href="#">Libro resolver</a>
                            <div class="nested-menu-content">
                                <a href="#">Drag and drop</a>
                                <a href="#">Rompecabezas</a>
                                <a href="#">Asociar columnas</a>
                            </div>
                        </div>
                        <a href="#">Libro descargable</a>
                        <a href="#">Videos locales</a>
                        <a href="#">Prácticas</a>
                    </div>
                </div>
                
                <!-- Bloque 2 -->
                <div class="nested-menu">
                    <a href="#">Bloque 2</a>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <a href="#">Libro resolver</a>
                            <div class="nested-menu-content">
                                <a href="#">Drag and drop</a>
                                <a href="#">Rompecabezas</a>
                                <a href="#">Asociar columnas</a>
                            </div>
                        </div>
                        <a href="#">Libro descargable</a>
                        <a href="#">Videos locales</a>
                        <a href="#">Prácticas</a>
                    </div>
                </div>
                
                <!-- Bloque 3 -->
                <div class="nested-menu">
                    <a href="#">Bloque 3</a>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <a href="#">Libro resolver</a>
                            <div class="nested-menu-content">
                                <a href="#">Drag and drop</a>
                                <a href="#">Rompecabezas</a>
                                <a href="#">Asociar columnas</a>
                            </div>
                        </div>
                        <a href="#">Libro descargable</a>
                        <a href="#">Videos locales</a>
                        <a href="#">Prácticas</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Botón Recursos -->
        <div class="menu-button">
            <button class="dropdown-button">Recursos</button>
            <div class="dropdown-content">
                <a href="#">Libro</a>
                <a href="#">Exámenes</a>
                <a href="#">Calificaciones</a>
            </div>
        </div>
        
        <!-- Botón Sesión -->
        <div class="menu-button">
            <button class="dropdown-button">Sesión</button>
            <div class="dropdown-content">
                <a href="#">Cerrar sesión</a>
            </div>
        </div>
        
        <!-- Botón Ayuda -->
        <div class="menu-button">
            <button class="dropdown-button">Ayuda</button>
            <div class="dropdown-content">
                <a href="#">Manual de usuario</a>
                <a href="#">Búsqueda</a>
            </div>
        </div>
    </nav>
</body>
</html>