<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Unidades - Rompecabezas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
        .unidad-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }
        .unidad-btn:hover {
            background: #45a049;
            transform: scale(1.05);
        }
        /* Responsive para móviles */
        @media (max-width: 600px) {
            .menu {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 400px) {
            .menu {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ejercicios de Rompecabezas</h1>
        <div class="menu" id="menu-unidades">
            <!-- Botones se generarán aquí con JavaScript -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.getElementById('menu-unidades');

            // Crear 9 botones de unidades
            for (let i = 1; i <= 9; i++) {
                const boton = document.createElement('button');
                boton.className = 'unidad-btn';
                boton.textContent = `Unidad ${i}`;
                
                // Redirigir al hacer clic (cambia la ruta si es necesario)
                boton.onclick = () => {
                    window.location.href = `unidad${i}.html`; // Cambia esto si tus archivos tienen otro nombre
                    // Alternativa: alert(`Ir a la Unidad ${i}`); // Para pruebas sin crear páginas
                };

                menu.appendChild(boton);
            }
        });
    </script>
</body>

</html>