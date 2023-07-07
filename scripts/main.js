$(window).on('load', function() {
	$("#preloader").delay(1000).addClass('loaded');
});

function mostrarContenido(num) {
    var contenidos = document.getElementsByClassName("contenido");
    for (var i = 0; i < contenidos.length; i++) {
        contenidos[i].classList.remove("fade-in");
        contenidos[i].classList.add("fade-out");
        contenidos[i].style.display = "none";
    }
    var contenidoActual = document.getElementById("contenido" + num);
    contenidoActual.style.display = "block";
    contenidoActual.classList.add("fade-in");
    contenidoActual.classList.remove("fade-out");
    document.getElementById("titulo").textContent = "Contenido del botón " + num;
}

