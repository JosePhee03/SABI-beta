
// Nombre de la Pagina
var paginaName; 
paginaName = window.location.pathname;

if(paginaName == '/SABI/pages/funciones.php'){
    document.getElementById("menu-funciones").classList.add("menu-activo");
    document.getElementById("menu-preguntas").classList.remove("menu-activo");
    document.getElementById("menu-productos").classList.remove("menu-activo");
}

else if(paginaName == "/SABI/pages/preguntas.php"){
    document.getElementById("menu-preguntas").classList.add("menu-activo");
    document.getElementById("menu-productos").classList.remove("menu-activo");
    document.getElementById("menu-funciones").classList.remove("menu-activo");
}

else if(paginaName == "/SABI/pages/productos.php"){
    document.getElementById("menu-productos").classList.add("menu-activo");
    document.getElementById("menu-funciones").classList.remove("menu-activo");
    document.getElementById("menu-preguntas").classList.remove("menu-activo");
}
