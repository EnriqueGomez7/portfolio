function mostrarContenido(id) {

    document.querySelectorAll('.contenido').forEach(function(contenido) {
        contenido.style.display = 'none';
    });

    document.getElementById(id).style.display = 'block';
    
}