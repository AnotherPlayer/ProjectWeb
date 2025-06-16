document.addEventListener('DOMContentLoaded', function() {
    // Configurar eventos para los botones principales
    const botonesPrincipales = document.querySelectorAll('.boton-principal');
    
    botonesPrincipales.forEach(boton => {
        boton.addEventListener('click', function(e) {
            e.stopPropagation();
            const menuDesplegable = this.nextElementSibling;
            
            // Cerrar otros menús abiertos
            document.querySelectorAll('.menu-desplegable').forEach(menu => {
                if (menu !== menuDesplegable) {
                    menu.classList.remove('mostrar');
                }
            });
            
            // Alternar el menú actual
            menuDesplegable.classList.toggle('mostrar');
            
            // Actualizar icono
            const icono = this.querySelector('.menu-icon');
            icono.textContent = menuDesplegable.classList.contains('mostrar') ? '▲' : '▼';
        });
    });

    // Configurar eventos para los botones secundarios
    const botonesSecundarios = document.querySelectorAll('.boton-secundario');
    
    botonesSecundarios.forEach(boton => {
        boton.addEventListener('click', function() {
            // Aquí puedes agregar la funcionalidad específica para cada botón
            console.log('Seleccionado:', this.textContent);
            
            // Cerrar el menú después de seleccionar una opción
            this.closest('.menu-desplegable').classList.remove('mostrar');
            const botonPrincipal = this.closest('.contenedor-boton').querySelector('.boton-principal');
            botonPrincipal.querySelector('.menu-icon').textContent = '▼';
            
            // Mostrar contenido según la opción seleccionada
            mostrarContenido(this.textContent);
        });
    });

    // Cerrar menús al hacer clic fuera de ellos
    document.addEventListener('click', function() {
        botonesPrincipales.forEach(boton => {
            const menu = boton.nextElementSibling;
            menu.classList.remove('mostrar');
            boton.querySelector('.menu-icon').textContent = '▼';
        });
    });

    // Función para mostrar contenido según la opción seleccionada
    async function mostrarContenido(opcion) {
        const mainContent = document.querySelector('.main-content');
        
        // Mapeo de opciones a archivos HTML
        const archivosContenido = {
            'Menú principal': 'contenidos/menu-principal.html',
            'Consultar': 'contenidos/consultar-perfil.html',
            'Editar': 'contenidos/editar-perfil.html',
            'Crear': 'contenidos/crear-reporte.html',
            'Consultar': 'contenidos/consultar-reporte.html',
            'Crear': 'contenidos/crear-usuario.html',
            'Editar': 'contenidos/editar-usuario.html',
            'Consultar': 'contenidos/consultar-usuario.html',
            'Eliminar': 'contenidos/eliminar-usuario.html',
            'Cerrar sesión': 'contenidos/cerrar-sesion.html',
            'Contáctanos': 'contenidos/contactanos.html',
            'Búsqueda': 'contenidos/busqueda.html'
        };

        // Mostrar loader mientras carga
        mainContent.innerHTML = '<div class="loader">Cargando...</div>';
        mainContent.classList.add('cargando');
        
        try {
            // Obtener la ruta del archivo correspondiente
            const rutaArchivo = archivosContenido[opcion];
            
            if (!rutaArchivo) {
                throw new Error('No se encontró el contenido solicitado');
            }
            
            // Hacer la petición para obtener el contenido
            const respuesta = await fetch(rutaArchivo);
            
            if (!respuesta.ok) {
                throw new Error('Error al cargar el contenido');
            }
            
            // Insertar el contenido en el área principal
            const contenidoHTML = await respuesta.text();
            mainContent.innerHTML = contenidoHTML;
            mainContent.classList.remove('cargando');
            
            // Inicializar cualquier script del contenido cargado
            inicializarScriptsContenido();
            
        } catch (error) {
            console.error('Error:', error);
            mainContent.innerHTML = `
                <div class="error-contenido">
                    <h2>Error al cargar el contenido</h2>
                    <p>${error.message}</p>
                    <button onclick="location.reload()">Recargar</button>
                </div>
            `;
            mainContent.classList.remove('cargando');
        }
    }

    // Función para inicializar scripts en el contenido cargado
    function inicializarScriptsContenido() {
        // Configurar eventos para formularios
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                console.log('Formulario enviado:', this.id);
                // Aquí puedes agregar lógica para manejar el envío de formularios
            });
        });
        
        // Configurar eventos para botones de acción
        const botonesAccion = document.querySelectorAll('.boton-accion');
        botonesAccion.forEach(boton => {
            boton.addEventListener('click', function() {
                console.log('Acción ejecutada:', this.textContent);
                // Aquí puedes agregar lógica específica para cada botón
            });
        });
        
        // Configuración específica para cerrar sesión
        const btnCerrarSesion = document.getElementById('btn-cerrar-sesion');
        if (btnCerrarSesion) {
            btnCerrarSesion.addEventListener('click', function() {
                if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                    // Lógica para cerrar sesión
                    alert('Sesión cerrada correctamente');
                    // Redireccionar a la página de login
                    window.location.href = 'login.html';
                }
            });
        }
    }
    
    // Hacer la función accesible globalmente
    window.mostrarContenido = mostrarContenido;
});