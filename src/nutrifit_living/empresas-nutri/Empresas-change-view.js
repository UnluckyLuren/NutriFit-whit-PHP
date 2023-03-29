// Objetos

const sideMenuProg = document.getElementById('sideMenuProg'),
        mainChange = document.getElementById('mainChange'),
        sideProg = document.querySelectorAll('.sideProg');
// Variables



// Funciones 


const metPostJX = (docPedido, ID=0) => {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               var mensaje = xmlhttp.responseText;

               mainChange.innerHTML="";
               mainChange.innerHTML= mensaje;
            }
        }
    xmlhttp.open("GET", `./${docPedido}.php`+'?ID='+ID, true);
    xmlhttp.send();
}


// Eventos

    const sideMenuInicio = document.getElementById('sideMenuInicio'),
        sideMenuPedidos = document.getElementById('sideMenuPedidos'),
        contCotizacion = document.getElementById('contCotizacion');

    sideMenuInicio.addEventListener('click', () => {
        mainChange.style.backgroundImage = 'url("../imagenes/fondo-nutriologo-inicio.jpg")';
        contCotizacion.style.opacity = '0';
        contCotizacion.style.pointerEvents = 'none';
    });

    sideMenuPedidos.addEventListener('click', () => {
        mainChange.style.background = 'none';
        contCotizacion.style.opacity = '1';
        contCotizacion.style.pointerEvents = 'All';
    });


// Funciones 


function bajarMS (id) {
    metJXConv("bajar-mensajes",id);
}


function subirMS (id) {
    metJXSubirMs("subir-ms",id);
    setTimeout ( function () { metJXConv("bajar-mensajes",id); }, 100);
}

