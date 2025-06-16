<?php

  if( count($_COOKIE) > 0 ){

    // Si hay cookies, redirigir a la página de inicio
    header("Location: ./".$_COOKIE['tipo']."/".$_COOKIE['tipo'].".php");
    
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <link rel="stylesheet" href="./styles/styleMenu.css">

</head>

<body>

  <header>
    <div class="logo">logo</div>
    <div class="titulo">Sitio web matematicas primaria</div>
  </header>

  <nav>
    <div class="menu-item">
      <button class="menu-button">Principal</button>
      <div class="submenu">
        <a href="#">Inicio</a>
        <a href="#">Resumen</a>
        <a href="#">Noticias</a>
      </div>
    </div>

    <div class="menu-item">
      <button class="menu-button" onclick="window.location.href='./about/equipo.html'">Acerca de</button>
    </div>

    <div class="menu-item">
      <button class="menu-button">Preguntas frecuentes</button>
      <div class="submenu">
        <a href="#">Cuenta</a>
        <a href="#">Soporte</a>
      </div>
    </div>

    <div class="menu-item">
      <button class="menu-button">Contacto</button>
      <div class="submenu">
        <a href="#">Correo</a>
        <a href="#">Teléfono</a>
      </div>
    </div>

    <div class="menu-item">
      <button class="menu-button">Ayuda</button>
      <div class="submenu">
        <a href="#">Manual de usuario</a>
        <a href="#">Busqueda</a>
      </div>
    </div>
  </nav>

  <main>
    <section class="izquierda">
      <p><strong>menú desplegable</strong> en forma de acordeón con efectos de botones <strong>inactivo</strong>, <strong>sobre de</strong> y <strong>activo</strong></p>
      <p><strong>efectos del menú:</strong></p>
      <ul>
        <li><span class="dot sobre"></span> sobre de</li>
        <li><span class="dot activo"></span> activo</li>
        <li><span class="dot inactivo"></span> inactivo</li>
      </ul>
    </section>

    <section class="contenido">
      <p>esta área se desplegará al dar click en <span class="principal">principal</span> una breve sería bienvenida y explicar de qué trata el sistema</p>
      <p><strong>área de donde se mostrará la información de la página web</strong></p>
    </section>

    <aside class="login">

      <h3>inicio de sesión</h3>

      <form action="./initCookies.php" method="post">

        <input type="text" placeholder="Boleta" name="boleta">
        <input type="password" placeholder="Contraseña" name="password">
        <select name="tipo">
          <option>Alumno</option>
          <option>Profesor</option>
          <option>Administrador</option>
        </select>

      <button>Aceptar</button>

      </form>

      <div class="links">
        <a href="#">Registrarse</a><br>
        <a href="#">¿Olvidó su contraseña?</a>
      </div>
      
    </aside>

  </main>

  <footer>
    <p>Copyright © 2024 TecWeb | ® Todos los derechos reservados</p>
    <p><a href="mailto:hd.gt2005@gmail.com">hd.gt2005@gmail.com</a></p>
  </footer>
</body>
</html>
