// Objetos DOM

const initAsimov = document.getElementById("initAsimov");
const recognition = new webkitSpeechRecognition(),
    respAsimov = document.getElementById('respAsimov');


//  Configuración de recognition

recognition.continuous = true;
recognition.lang = 'es-ES';
recognition.interimResult = false;


// Variables

let AsimovContorStop = "init";

// Funciones

const removeAccents = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
} 


function leerTexto(text) {
    const speech = new SpeechSynthesisUtterance(text);
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 0.8;
    speech.lang = 'es-ES'

    window.speechSynthesis.speak(speech);
}


// Eventos

initAsimov.addEventListener('click', () => {

    if ( AsimovContorStop === "init" ) {

        recognition.start();
        AsimovContorStop = "stop";
        
        respAsimov.innerHTML =  'Preguntas frecuentes <hr> <ul class="ulAsimovResp" > <li>Donde conseguir una dieta?</li> <li> Cómo puedo consultar mi progreso? </li> <li> Como puedo contactar a un nutriólogo? </li> <li> Cómo utilizar nutrifit living express? </li>';

    } else if ( AsimovContorStop === "stop" ) {

        window.speechSynthesis.cancel();
        recognition.abort();
        AsimovContorStop = "init";
        leerTexto("Espero haberte ayudado");
        respAsimov.textContent = "Espero haberte ayudado";

        setTimeout(() => {
            respAsimov.textContent = "";
        }, 2000);

    }

});


recognition.onresult = (event) => {
    let texto = event.results[event.results.length - 1][0].transcript,
        resp = "";

    texto = removeAccents(texto);
    texto = texto.toLowerCase();

    console.log(texto);
    
    if (texto === "donde conseguir una dieta") {

        resp = "Accediendo a la sección de servicios en el formulario personalizado al cual tendras acceso si eres un usuario experience o vip.";

    } else if (texto === "como puedo consultar mi progreso") {

        resp = "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imagen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de progresos";
        
    } else if (texto === "como puedo contactar a un nutriologo") {

        resp = "Está es una función unica para un usuario VIP y se encuentra en el apartado de progreso en la sección de mensajes.";
        
    } else if (texto === "como utilizar nutrifit living express") {

        resp = "Este apartado se encuentra en la página de progreso, en la cuál encontraras un formulario para agendar el envio de las comidas de tú dieta.";
        
    } else {
        resp = "No pude entender tú pregunta, prueba a decirlo de nuevo";
    }

    respAsimov.innerHTML = "";
    respAsimov.textContent = resp;
    leerTexto(resp);
}


