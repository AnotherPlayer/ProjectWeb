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
            
            // Ejemplo: Cerrar el menú después de seleccionar una opción
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
        mainContent.innerHTML = `
            <h2>${opcion}</h2>
            <p>Contenido relacionado con ${opcion.toLowerCase()}</p>
        `;
    }
});