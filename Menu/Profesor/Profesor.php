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
    
    <link rel="stylesheet" href="./profe.css">

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
        
        <!-- Botón Grupo -->
        <div class="menu-button">
            <button class="dropdown-button">Grupo</button>
            <div class="dropdown-content">
                <a href="#">Grupo</a>
                <a href="#">Alumno</a>
            </div>
        </div>
        
        <!-- Botón Recursos -->
        <div class="menu-button">
            <button class="dropdown-button">Recursos</button>
            <div class="dropdown-content">
                <a href="#">Libro</a>
                <a href="#">Videos</a>
                <a href="#">Audios</a>
                <a href="#">Diapositivas</a>
            </div>
        </div>
        
        <!-- Botón Evaluación -->
        <div class="menu-button">
            <button class="dropdown-button">Evaluación</button>
            <div class="dropdown-content">
                <a href="#">Preguntas</a>
                <a href="#">Plantilla actividades</a>
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