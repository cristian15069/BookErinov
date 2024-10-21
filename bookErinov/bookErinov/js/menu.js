const icono=document.querySelector('.icono-menu');
const menu=document.querySelector('.menu-navegacion');
const menu2= document.querySelector('.menu-resp');
const cerrar= document.getElementById('cerrar');
const buscar = document.querySelector('.boton_resp');
const busqueda =document.querySelector('.buscar_input')

//Funcion al icono del menu al dar click
icono.addEventListener('click', function() {
    menu.style.left = '0'; //hace que aparezca el menu
    menu.style.display = "flex"; //aparecen todos los elementos del menu
    icono.style.display= "none" ; //desaparece 
    cerrar.style.display= "flex"; //aparece 
});

var contadorClicks = 0;
const bbuscar= document.getElementById('btn-input');
function handleClick() {
    contadorClicks++;
    if (contadorClicks === 1) {
        // Acciones para el primer clic
        menu2.style.height = '10rem';
        busqueda.style.marginTop = '6rem';
        bbuscar.style.marginTop = '9rem'
    } else if (contadorClicks === 2) {
    // Acciones para el segundo clic
        menu2.style.height = '6rem';
        busqueda.style.marginTop = '-100%';
        bbuscar.style.marginTop = '-3rem'
        contadorClicks = 0; // Reiniciar el contador de clics
}
}

// Agregar controlador de eventos para clics en cualquier lugar de la pantalla
buscar.addEventListener("click", handleClick);


window.addEventListener('click', e=>{
    if(window.innerWidth < 950 && e.target != menu && e.target != icono || e.target == cerrar ){
            icono.style.display= "flex";
            menu.style.left = '-100%';
            cerrar.style.display = "none";
        }
});

window.addEventListener('resize', function() {
    if (window.innerWidth > 950) {
        menu.style.display = "inline-block";
        menu.style.left = '0';
        icono.style.display =" none";
        cerrar.style.display= "none";
        
    } else {
        menu.style.display = "none";
        menu.style.left = '-100%';
        cerrar.style.display = "none";
        icono.style.display= "flex";
    }
});
    
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.menu-navegacion');
    var navbar2 = document.querySelector('.menu-resp');
    var scrolled = window.scrollY > 400;
    
    if (scrolled) {
    navbar.classList.add('scrolled');
    navbar2.classList.add('scrolled');
    } else {
    navbar.classList.remove('scrolled');
    navbar2.classList.remove('scrolled');
    }
});


var currentPage = window.location.pathname; // Obtiene la URL actual
var excludedPages = ['/xampp/htdocs/Practicas/bookErinov/iniciar_sesion.php', '/xampp/htdocs/Practicas/bookErinov/form_libros.php', '/xampp/htdocs/Practicas/bookErinov/registrarcuenta.php','/xampp/htdocs/Practicas/bookErinov/contacto.php']; // Páginas a excluir

if ( excludedPages.includes(currentPage)) {
    menu2.style.position = "static"; // Oculta el menú en las páginas excluidas
    buscar.style.display = 'none';
} 

