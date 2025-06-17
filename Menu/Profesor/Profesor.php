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
    
  <link rel="stylesheet" href="profe.css">

</head>
<body>
    
    <header>
        <h1>

        <?php 
            // Mostrar el nombre del usuario almacenado en la cookie
            if(isset($_COOKIE['nombre']) && isset($_COOKIE['tipo'])) {
                echo "Bienvenido ".$_COOKIE['tipo'] ." ".$_COOKIE['nombre'];
            }
        ?>

        </h1>
    </header>
    
    <nav>
        <!-- Botón Principal -->
        <div class="menu-button">
            <button class="dropdown-button">Principal</button>
            <div class="dropdown-content">
                <button class="menu-option">Menú principal</button>
            </div>
        </div>
        
        <!-- Botón Perfil -->
        <div class="menu-button">
            <button class="dropdown-button">Perfil</button>
            <div class="dropdown-content">
                <button class="menu-option">Consultar</button>
                <button class="menu-option">Editar</button>
            </div>
        </div>
        
        <!-- Botón Grupo -->
        <div class="menu-button">
            <button class="dropdown-button">Grupo</button>
            <div class="dropdown-content">
                <button class="menu-option">Grupo</button>
                <button class="menu-option">Alumno</button>
            </div>
        </div>
        
        <!-- Botón Recursos -->
        <div class="menu-button">
            <button class="dropdown-button">Recursos</button>
            <div class="dropdown-content">
                <button class="menu-option">Libro</button>
                <button class="menu-option">Videos</button>
                <button class="menu-option">Audios</button>
                <button class="menu-option">Diapositivas</button>
            </div>
        </div>
        
        <!-- Botón Evaluación -->
        <div class="menu-button">
            <button class="dropdown-button">Evaluación</button>
            <div class="dropdown-content">
                <button class="menu-option">Preguntas</button>
                <button class="menu-option">Plantilla actividades</button>
            </div>
        </div>
        
        <!-- Botón Sesión -->
        <div class="menu-button">
            <button class="dropdown-button">Sesión</button>
            <form action="./../deleteCookies.php" method="post">

                <div class="dropdown-content">
                    <button class="menu-option">Cerrar sesión</button>
                </div>

            </form>
        </div>
        
        <!-- Botón Ayuda -->
        <div class="menu-button">
            <button class="dropdown-button">Ayuda</button>
            <div class="dropdown-content">
                <button class="menu-option">Manual de usuario</button>
                <button class="menu-option">Búsqueda</button>
            </div>
        </div>
    </nav>
</body>
</html>