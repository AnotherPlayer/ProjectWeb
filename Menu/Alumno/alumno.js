// Mostrar/ocultar menús al hacer clic en los botones principales
document.querySelectorAll('.boton-principal').forEach(boton => {
    boton.addEventListener('click', function() {

        const menu = this.nextElementSibling;
        
        // Cerrar todos los otros menús
        document.querySelectorAll('.menu-desplegable').forEach(m => {
            if (m !== menu) {
                m.classList.remove('mostrar');
            }
        });
        
        // Alternar el menú actual
        menu.classList.toggle('mostrar');
    });
});

// Función para mostrar/ocultar submenús anidados
function toggleSubMenu(idSubmenu, boton) {
    // Cerrar otros submenús del mismo menú
    const menuPadre = boton.parentElement;
    menuPadre.querySelectorAll('.submenu-anidado').forEach(submenu => {
        if (submenu.id !== idSubmenu) {
            submenu.classList.remove('mostrar-submenu');
        }
    });
    
    // Alternar el submenú clickeado
    const submenu = document.getElementById(idSubmenu);
    submenu.classList.toggle('mostrar-submenu');
    
    // Cambiar el icono de flecha
    const icono = boton.querySelector('span:last-child');
    icono.textContent = submenu.classList.contains('mostrar-submenu') ? '▼' : '▶';
}

// Cerrar menús al hacer clic fuera de ellos
document.addEventListener('click', function(event) {
    if (!event.target.closest('.contenedor-boton')) {
        document.querySelectorAll('.menu-desplegable').forEach(menu => {
            menu.classList.remove('mostrar');
        });
        
        document.querySelectorAll('.submenu-anidado').forEach(submenu => {
            submenu.classList.remove('mostrar-submenu');
        });
        
        // Restaurar iconos de flecha
        document.querySelectorAll('.boton-secundario span:last-child').forEach(icono => {
            icono.textContent = '▶';
        });
    }
});
// Asignar funcionalidad a los botones
document.querySelectorAll('.boton-terciario').forEach(boton => {
    boton.addEventListener('click', function() {
        alert('Has seleccionado: ' + this.textContent);
        // Aquí puedes agregar la acción específica para cada botón
    });
});