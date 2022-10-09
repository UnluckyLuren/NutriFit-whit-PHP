const navToggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".nav-menu");

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu_visible");

    if(navMenu.classList.contains("nav-manu_visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
        
    }
    else{
        navToggle.setAttribute("aria-label", "Abrir menú");
    }
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle('down', window.scrollY > 0);

// var logo = document.querySelector(".brand img");
//       if (window.scrollY>0) {
//           logo.setAttribute('src', 'imagenes/blanco.jpeg');
//       }else{
//           logo.setAttribute('src', 'image/blue.png');
//       }
});


window.addEventListener("scroll", function(){
	var header = document.querySelector("header");
	header.classList.toggle("abajo",window.scrollY>0);
})


/* Evitar que el evento submit recargue la página */

// formulario = document.getElementById('dietaForm')

// formulario.addEventListener('submit', function(event) {
// 	event.preventDefault();
// });





