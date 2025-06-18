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
    <div class="titulo">Matemáticas divertidas</div>
  </header>

  <nav>
    <div class="menu-item">
      <button class="menu-button">Principal</button>
    </div>

    <div class="menu-item">
      <button class="menu-button" onclick="window.location.href='./about/equipo.html'">Acerca de</button>
    </div>

    <div class="menu-item">
      <button class="menu-button" onclick="window.location.href='./preguFrec.html'">Preguntas frecuentes</button>
    </div>

    <div class="menu-item">
      <button class="menu-button" onclick="window.location.href='./Contacto.html'">Contacto</button>
    </div>

    <div class="menu-item">
      <button class="menu-button" onclick="window.location.href='./Ayuda.html'">Ayuda</button>
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
        <a href="./Registro.php">Registrarse</a><br>
        <a href="./olvidoPassword.php">¿Olvidó su contraseña?</a>
      </div>
      
    </aside>

  </main>

  <footer>
    <p>Copyright © 2024 TecWeb | ® Todos los derechos reservados</p>
    <p><a href="mailto:hd.gt2005@gmail.com">hd.gt2005@gmail.com</a></p>
  </footer>
</body>
</html>
