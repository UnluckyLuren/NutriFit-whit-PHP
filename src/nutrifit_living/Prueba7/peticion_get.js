// Variables

const resultado = document.getElementById('resultado'),
    btnSendFormGratis = document.getElementById('calcSalud');


// Funciones




// eventos

function ajax_post(doc) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let datos = document.querySelectorAll(".evaluarFormGratis");

    var informacionDelUsuario = "nombre=" + datos[0].value + "&edad=" + datos[1].value + "&peso=" + datos[2].value + "&altura=" + datos[3].value + "&hombre=" + datos[4].checked + "&mujer=" + datos[5].checked;
    
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           var mensaje = xmlhttp.responseText;

        }
    }
xmlhttp.open("POST", doc, true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(informacionDelUsuario);
}


/* Evitar que el evento submit recargue la página */

const form = document.getElementById('FormGratis');

form.addEventListener('submit', function(event) {
	event.preventDefault();
})


btnSendFormGratis.addEventListener('click', () => {

    ajax_post('./cards_planes/code-form-gratis.php');

});


