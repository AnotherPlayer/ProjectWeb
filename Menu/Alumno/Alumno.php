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
    <title>Alumno</title>

    <link rel="stylesheet" href="./alumno.css">

</head>
<body>

<script src="./alumno.js" defer></script>
    
    <header>
        <h1>
            Sistema Escolar
            <?php
                echo $_COOKIE['tipo'];
            ?>

        </h1>

        <div class="user-info">

            <?php
                echo "<span>Bienvenido ".$_COOKIE['nombre']."</span>";
            ?>

            <div class="user-avatar">D</div>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <!-- Botón 1 con menú desplegable y submenú -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Opciones Académicas</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable" id="menu1">
                    <button class="boton-secundario" onclick="toggleSubMenu('submenu1', this)">
                        <span>Perfil</span>
                        <span>▶</span>
                    </button>
                    <div class="submenu-anidado" id="submenu1">
                        <button class="boton-terciario">Datos Personales</button>
                        <button class="boton-terciario">Historial Médico</button>
                        <button class="boton-terciario">Contacto de Emergencia</button>
                    </div>
                    <button class="boton-secundario" onclick="toggleSubMenu('submenu2', this)">
                        <span>Trayectoria</span>
                        <span>▶</span>
                    </button>
                    <div class="submenu-anidado" id="submenu2">
                        <button class="boton-terciario">Historial Académico</button>
                        <button class="boton-terciario">Logros</button>
                        <button class="boton-terciario">Proyectos</button>
                    </div>
                </div>
            </div>
            
            <!-- Botón 2 con menú desplegable -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Servicios Escolares</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable" id="menu2">
                    <button class="boton-secundario">Inscripción a Cursos</button>
                    <button class="boton-secundario">Constancias</button>
                    <button class="boton-secundario">Pagos en Línea</button>
                    <button class="boton-secundario">Biblioteca Virtual</button>
                </div>
            </div>
        </div>

    </nav>

    <main class="main-content">
        <!-- Contenido principal puede ir aquí -->
    </main>

</body>

</html>