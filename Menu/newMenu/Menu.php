<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <link rel="stylesheet" href="./styles/styleNewMenu.css">

</head>
<body>

    <script src="./jsMenu.js" defer></script>
    
    <header>
        
        <h1>
            Matemáticas divertidas
        </h1>

        <nav>
            <!-- Botón Principal -->
            <div class="menu-button">
                <button class="dropdown-button" onclick="showContent('main')">Principal</button>
            </div>
            
            <!-- Botón Acerca de -->
            <div class="menu-button">
                <button class="dropdown-button" onclick="showContent('about')">Acerca de</button>
            </div>
            
            <!-- Botón Preguntas -->
            <div class="menu-button">
                <button class="dropdown-button" onclick="showContent('preguntas')">Preguntas frecuentes</button>
            </div>
            
            <!-- Botón Contactos -->
            <div class="menu-button">
                <button class="dropdown-button" onclick="showContent('contactos')">Contactos</button>
            </div>
            
            <!-- Botón Ayuda -->
            <div class="menu-button">
                <button class="dropdown-button" onclick="showContent('help')">Ayuda</button>
            </div>
        </nav>

    </header>

    <!-- Contenido principal que varia de acuerdo con el botón seleccionado -->
    <main class="main-content" id="main"> 

    </main>

</body>

</html>