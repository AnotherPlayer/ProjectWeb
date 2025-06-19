<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Crear, editar, consultar y editar usuario -->

    <h1>Administrar Usuarios</h1>
    
    <h2>Crear usuario</h2>
    <form action="crearUsuario.php" method="post">
        <label for="boleta">Boleta:</label>
        <input type="text" id="boleta" name="boleta" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="tipo">Tipo de usuario:</label>
        <select id="tipo" name="tipo">
            <option value="alumno">Alumno</option>
            <option value="profesor">Profesor</option>
            <option value="administrador">Administrador</option>
        </select>

        <button type="submit">Crear Usuario</button>
    </form>

    <h2>Editar usuario</h2>
    <form action="editarUsuario.php" method="post">
        <label for="boletaEditar">Boleta del usuario a editar:</label>
        <input type="text" id="boletaEditar" name="boletaEditar" required>
        <label for="nuevoNombre">Nuevo Nombre:</label>
        <input type="text" id="nuevoNombre" name="nuevoNombre">
        <label for="nuevoPassword">Nueva Contraseña:</label>
        <input type="password" id="nuevoPassword" name="nuevoPassword">
    </form>

    <h2>Consultar usuario</h2>
    <form action="consultarUsuario.php" method="post">
        <label for="boletaConsultar">Boleta del usuario a consultar:</label>
        <input type="text" id="boletaConsultar" name="boletaConsultar" required>
        <button type="submit">Consultar Usuario</button>
    </form>

    <h2>Eliminar usuario</h2>
    <form action="eliminarUsuario.php" method="post">
        <label for="boletaEliminar">Boleta del usuario a eliminar:</label>
        <input type="text" id="boletaEliminar" name="boletaEliminar" required>
        <button type="submit">Eliminar Usuario</button>
    </form>

    
</body>
</html>