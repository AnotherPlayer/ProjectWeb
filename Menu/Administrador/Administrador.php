<?php
    
  if( !(count($_COOKIE) > 0) ){

    // Si hay cookies, redirigir a la página de inicio
    header("Location: ./../newMenu/main.php");//Cerrar sesión si no hay cookies
    
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <link rel="stylesheet" href="./styles/admin.css">

</head>
<body>

    <script src="./jsFiles/admin.js" defer></script>
    
    <header>
        <h1>

        <div class="left-head">Bienvenido</div>

        <div class="right-head">
            <?php 
            // Mostrar el nombre del usuario almacenado en la cookie
            if(isset($_COOKIE['nombre']) && isset($_COOKIE['tipo']))
                echo $_COOKIE['tipo'] ." ".$_COOKIE['nombre'];
            
            ?>
        </div>

        </h1>
    </header>
    
    <nav>
        <!-- Botón Principal -->
        <div class="menu-button">
            <button class="dropdown-button">Principal</button>
            <div class="dropdown-content">
                <button class="menu-option" onclick="showContent('mainMenu')">Menú principal</button>
            </div>
        </div>
        
        <!-- Botón Perfil -->
        <div class="menu-button">
            <button class="dropdown-button">Perfil</button>
            <div class="dropdown-content">
                <button class="menu-option" onclick="showContent('Consultar')">Consultar</button>
                <button class="menu-option" onclick="showContent('Editar')">Editar</button>
            </div>
        </div>
        
        <!-- 
        Botón Reportes 
            La página para dicha función se hara dentro/fuera de esta página
        -->
        <div class="menu-button">
            <button class="dropdown-button">Reportes</button>
            <div class="dropdown-content">
                <button class="menu-option" onclick="showContent('DOfile')">Crear</button>
                <button class="menu-option" onclick="showContent('DOedit')">Editar</button>
                <button class="menu-option" onclick="showContent('DOcheck')">Consultar</button>
            </div>
        </div>
        
        <!-- 
        Botón Usuarios
            La página para dicha función se hara dentro/fuera de esta página
        -->
        <div class="menu-button">
            <button class="dropdown-button">Usuarios</button>
            <div class="dropdown-content">
                <button class="menu-option">Crear</button>
                <button class="menu-option">Editar</button>
                <button class="menu-option">Consultar</button>
                <button class="menu-option">Eliminar</button>
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
                <button class="menu-option">Contáctanos</button>
                <button class="menu-option">Búsqueda</button>
            </div>
        </div>
    </nav>

    <!-- Contenido principal que varia de acuerdo con el botón seleccionado -->
    <main class="main-content" id="main"> 

    </main>

</body>

</html>