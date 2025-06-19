<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        

    </style>

</head>
<body>
    
    <h1>Reportes</h1>
    <form action="reportes.php" method="post">
        <label for="tipo">Tipo de reporte:</label>
        <select id="tipo" name="tipo">
            <option value="alumno">Alumno</option>
            <option value="profesor">Profesor</option>
            <option value="administrador">Administrador</option>
        </select>

        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio" required>

        <!-- Texto del reporte -->
        <label for="descripcion">Descripción del reporte:</label>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" placeholder="Escribe aquí una descripción o detalles del reporte..."></textarea>
        

        <button type="submit">Generar Reporte</button>
    </form>

</body>
</html>