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
    function mostrarContenido(opcion) {
        const mainContent = document.querySelector('.main-content');
        let contenido = '';
        
        // Contenido específico para cada opción
        switch(opcion) {
            case 'Menú principal':
                contenido = `
                    <h2>Menú Principal</h2>
                    <p>Acceso rápido a las funciones principales del sistema</p>
                `;
                break;
            case 'Consultar':
                contenido = `
                    <h2>Consultar Perfil</h2>
                    <p>Información detallada de tu perfil de usuario</p>
                `;
                break;
            case 'Editar':
                contenido = `
                    <h2>Editar Perfil</h2>
                    <p>Formulario para modificar tu información personal</p>
                `;
                break;
            case 'Grupo':
                contenido = `
                    <h2>Información de Grupo</h2>
                    <p>Detalles sobre tu grupo de estudio</p>
                `;
                break;
            case 'Alumno':
                contenido = `
                    <h2>Información de Alumnos</h2>
                    <p>Listado de alumnos en tu grupo</p>
                `;
                break;
            case 'Cerrar sesión':
                contenido = `
                    <h2>Cerrar Sesión</h2>
                    <p>¿Estás seguro que deseas salir del sistema?</p>
                    <button class="boton-accion">Confirmar</button>
                `;
                break;
            default:
                contenido = `
                    <h2>${opcion}</h2>
                    <p>Contenido relacionado con ${opcion.toLowerCase()}</p>
                `;
        }
        
        mainContent.innerHTML = contenido;
        
        // Configurar evento para botones de acción
        const botonAccion = mainContent.querySelector('.boton-accion');
        if (botonAccion) {
            botonAccion.addEventListener('click', function() {
                alert('Acción confirmada: ' + opcion);
            });
        }
    }
});