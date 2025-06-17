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
    
    <link rel="stylesheet" href="./admin.css">

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
        
        <!-- Botón Reportes -->
        <div class="menu-button">
            <button class="dropdown-button">Reportes</button>
            <div class="dropdown-content">
                <a href="#">Crear</a>
                <a href="#">Editar</a>
                <a href="#">Consultar</a>
            </div>
        </div>
        
        <!-- Botón Usuarios -->
        <div class="menu-button">
            <button class="dropdown-button">Usuarios</button>
            <div class="dropdown-content">
                <a href="#">Crear</a>
                <a href="#">Editar</a>
                <a href="#">Consultar</a>
                <a href="#">Eliminar</a>
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
                <a href="#">Contáctanos</a>
                <a href="#">Búsqueda</a>
            </div>
        </div>
    </nav>
</body>
</html>