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
    <title>Profesor</title>
    <link rel="stylesheet" href="profe.css">
</head>
<body>
    <header>
        <h1>Sistema Educativo</h1>
        <div class="user-info">
            <span>Bienvenido, Profesor</span>
            <div class="user-avatar">D</div>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <!-- Botón Principal -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Principal</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Menú principal</button>
                </div>
            </div>
            
            <!-- Botón Perfil -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Perfil</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Consultar</button>
                    <button class="boton-secundario">Editar</button>
                </div>
            </div>
            
            <!-- Botón Grupo -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Grupo</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Grupo</button>
                    <button class="boton-secundario">Alumno</button>
                </div>
            </div>
            
            <!-- Botón Recursos -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Recursos</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Libros</button>
                    <button class="boton-secundario">Videos</button>
                    <button class="boton-secundario">Audios</button>
                    <button class="boton-secundario">Diapositivas</button>
                </div>
            </div>
            
            <!-- Botón Evaluación -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Evaluación</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Preguntas</button>
                    <button class="boton-secundario">Plantilla actividades</button>
                </div>
            </div>
            
            <!-- Botón Sesión -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Sesión</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Cerrar sesión</button>
                </div>
            </div>
            
            <!-- Botón Ayuda -->
            <div class="contenedor-boton">
                <button class="boton-principal">
                    <span>Ayuda</span>
                    <span class="menu-icon">▼</span>
                </button>
                <div class="menu-desplegable">
                    <button class="boton-secundario">Contáctanos</button>
                    <button class="boton-secundario">Búsqueda</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-content">
        <!-- Contenido principal -->
        <div class="bienvenida">
            <h2>Bienvenido al Sistema Educativo</h2>
            <p>Seleccione una opción del menú superior para comenzar</p>
        </div>
    </main>

    <script src="profe.js" defer></script>
</body>
</html>