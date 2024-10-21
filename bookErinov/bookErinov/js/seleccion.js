function guardarImagen(button) {
    var container = button.parentNode;
    var imagen = container.querySelector('.img-libros');
    var imagenUrl = imagen.getAttribute('src');

    localStorage.setItem('imagenSeleccionada', imagenUrl);
    window.location.href = 'form_libros.php';

}
    
var imagenSeleccionada = localStorage.getItem('imagenSeleccionada');
if (imagenSeleccionada) {
var imagen = document.getElementById('imagenSeleccionada');
imagen.src = imagenSeleccionada;
}

