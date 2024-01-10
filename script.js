document.addEventListener("DOMContentLoaded", function () {
    mostrarContenido('container_3_seccion1');
});

function toggleMenu() {
    var nav = document.querySelector('nav ul');
    nav.classList.toggle('active');
}

function mostrarContenido(id) {

    document.querySelectorAll('.contenido').forEach(function(contenido) {
        contenido.style.display = 'none';
    });

    document.getElementById(id).style.display = 'block';
    
}

function toggleMenu() {
    var nav = document.querySelector('nav ul');
    nav.classList.toggle('active');
}