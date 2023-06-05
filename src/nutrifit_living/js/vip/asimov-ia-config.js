// // Objetos DOM

// const initAsimov = document.getElementById("initAsimov");
// const recognition = new webkitSpeechRecognition(),
//     respAsimov = document.getElementById('respAsimov');


// //  Configuración de recognition

// recognition.continuous = true;
// recognition.lang = 'es-ES';
// recognition.interimResult = false;


// // Variables

// let AsimovContorStop = "init";

// // Funciones

// const removeAccents = (str) => {
//     return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
// } 


// function leerTexto(text) {
//     const speech = new SpeechSynthesisUtterance(text);
//     speech.volume = 1;
//     speech.rate = 1;
//     speech.pitch = 0.8;
//     speech.lang = 'es-ES'

//     window.speechSynthesis.speak(speech);
// }


// // Eventos

// initAsimov.addEventListener('click', () => {

//     if ( AsimovContorStop === "init" ) {

//         recognition.start();
//         AsimovContorStop = "stop";
        
//         respAsimov.innerHTML =  'Preguntas frecuentes <hr> <ul class="ulAsimovResp" > <li>Donde conseguir una dieta?</li> <li> Cómo puedo consultar mi progreso? </li> <li> Como puedo contactar a un nutriólogo? </li> <li> Cómo utilizar nutrifit living express? </li>';

//     } else if ( AsimovContorStop === "stop" ) {

//         window.speechSynthesis.cancel();
//         recognition.abort();
//         AsimovContorStop = "init";
//         leerTexto("Espero haberte ayudado");
//         respAsimov.textContent = "Espero haberte ayudado";

//         setTimeout(() => {
//             respAsimov.textContent = "";
//         }, 2000);

//     }

// });


// recognition.onresult = (event) => {
//     let texto = event.results[event.results.length - 1][0].transcript,
//         resp = "";

//     texto = removeAccents(texto);
//     texto = texto.toLowerCase();

//     console.log(texto);
    
//     if (texto === "donde conseguir una dieta") {

//         resp = "Accediendo a la sección de servicios en el formulario personalizado al cual tendras acceso si eres un usuario experience o vip.";

//     } else if (texto === "como puedo consultar mi progreso") {

//         resp = "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imagen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de progresos";
        
//     } else if (texto === "como puedo contactar a un nutriologo") {

//         resp = "Está es una función unica para un usuario VIP y se encuentra en el apartado de progreso en la sección de mensajes.";
        
//     } else if (texto === "como utilizar nutrifit living express") {

//         resp = "Este apartado se encuentra en la página de progreso, en la cuál encontraras un formulario para agendar el envio de las comidas de tú dieta.";
        
//     } else {
//         resp = "No pude entender tú pregunta, prueba a decirlo de nuevo";
//     }

//     respAsimov.innerHTML = "";
//     respAsimov.textContent = resp;
//     leerTexto(resp);
// }


function removeAccents(text) {
    return text.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
  }
  
  var chatContainer = document.getElementById("IA-chat");
  var recognition = new webkitSpeechRecognition();
    recognition.lang = 'es-ES';
    recognition.continuous = false;
    recognition.interimResults = false;
  
  recognition.onresult = function(event) {
    var userMessage = event.results[0][0].transcript;
    var userMessageWithoutAccents = removeAccents(userMessage); // Eliminar acentos
    var userMessageElement = createMessageElement(userMessageWithoutAccents, "IA-user-message");
    chatContainer.appendChild(userMessageElement);
  
    var response = getResponse(userMessageWithoutAccents.toLowerCase());
    var responseElement = createMessageElement(response, "IA-bot-message");
    chatContainer.appendChild(responseElement);
  
    speakResponse(response);
    scrollToBottom();
  };
  
  function selectOption(option) {
    var response = getResponse(option);
    var responseElement = createMessageElement(response, "IA-bot-message");
    chatContainer.appendChild(responseElement);
  
    speakResponse(response);
    scrollToBottom();
  }
  
  function startListening() {
    recognition.start();
  }
  
  function createMessageElement(message, className) {
    var messageElement = document.createElement("div");
    messageElement.innerHTML = message;
    messageElement.classList.add("IA-message", className);
    
    return messageElement;
  }
  
  function getResponse(message) {
    if (message === "cual es tu funcion" || message === "cual es su funcion") 
    {
      return "Guiar al usuario en el sitio web y resolver algunas de sus dudas que el tenga.";
    } 
    else if (message === "donde conseguir una dieta") 
    {
      return "Accediendo a la sección de servicios en el formulario personalizado al cual tendras acceso si eres un usuario experience o vip.";
    } 
    else if (message === "como puedo consultar mi progreso") 
    {
      return "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imagen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de progresos.";
    } 
    else if (message === "como puedo contactar a un nutriologo") 
    {
      return "Está es una función unica para un usuario VIP y se encuentra en el apartado de progreso en la sección de mensajes.";
    } 
    else if (message === "como utilizar nutrifit living express") 
    {
      return "Este apartado se encuentra en la página de progreso, en la cuál encontraras un formulario para agendar el envio de las comidas de tú dieta.";
    } 
    else if (message === "como puedo tener envios gratis en nutrifit express") 
    {
      return "Subiendo tú cuenta a nivel VIP, estos recibiran sus envios gratis sin costo adicional.";
    }
    else if (message === "que beneficios tiene cada cuenta de nutrifit living") 
    {
      return "Cada cuenta tiene su propio nivel que la distigue con diferentes aspectos: Nutrifit Free: Tiene acceso al formulario de dietas gratis, a la sección de productos y a los lugares recomendados donde pueden ir a degustar algun platillo.  Nutrifit Experience: Tiene acceso a todo lo anterior incluyendo ahora el plan personalizado para que un nutriologo le cree una dieta acordé a sus necesidades, tiene acceso a nutrifit express y tambien a la seccion de progreso menos completa a comparacion de un usuario vip.         Nutrifit VIP: Este usuario es el más privilegiado ya que cuenta con todas las secciones desbloqueadas y completas, añadiendo acceso al recetario y ofreciendo envios gratis con nutrifit express.";
    }
    else if (message === "como cambiar la imagen de mi perfil") 
    {
      return "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imágen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de 'añadir imagen'.";
    }
    else {
      return "Lo siento, no puedo responder a eso en este momento";
    }
  }
  
  // ---------------------------------------------------- //
  // Imprimir texto de pregunta CLIC en el chat
  function createMessageElement(message, className) {
        window.speechSynthesis.cancel();
        var messageElement = document.createElement("div");
        messageElement.innerHTML = message;
        messageElement.className = className + " IA-message";
        return messageElement;
      }
  
      function getResponse(option) {

        window.speechSynthesis.cancel();

        var responses = {
          "cual es tu funcion": "Guiar al usuario en el sitio web y resolver algunas de sus dudas que él tenga.",
  
          "donde conseguir una dieta": "Accediendo a la sección de servicios en el formulario personalizado al cual tendras acceso si eres un usuario experience o vip.",
  
          "como puedo consultar mi progreso": "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imagen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de progresos.",
  
          "como puedo contactar a un nutriologo": "Está es una función unica para un usuario VIP y se encuentra en el apartado de progreso en la sección de mensajes.",
  
          "como utilizar nutrifit living express": "Este apartado se encuentra en la página de progreso, en la cuál encontraras un formulario para agendar el envio de las comidas de tú dieta.",
  
          "como puedo tener envios gratis en nutrifit express": "Subiendo tú cuenta a nivel VIP, estos recibiran sus envios gratis sin costo adicional.",

          "que beneficios tiene cada cuenta de nutrifit living": "Cada cuenta tiene su propio nivel que la distigue con diferentes aspectos: Nutrifit Free: Tiene acceso al formulario de dietas gratis, a la sección de productos y a los lugares recomendados donde pueden ir a degustar algun platillo.  Nutrifit Experience: Tiene acceso a todo lo anterior incluyendo ahora el plan personalizado para que un nutriologo le cree una dieta acordé a sus necesidades, tiene acceso a nutrifit express y tambien a la seccion de progreso menos completa a comparacion de un usuario vip.         Nutrifit VIP: Este usuario es el más privilegiado ya que cuenta con todas las secciones desbloqueadas y completas, añadiendo acceso al recetario y ofreciendo envios gratis con nutrifit express.",

          "como cambiar la imagen de mi perfil": "Dentro de la página inicial en la esquina superior izquierda se encuentra un ícono con tu imágen que al dar click te mostrará información sobre ti y te dara el acceso al apartado de 'añadir imagen'.",
  
        };
        return responses[option] || "Lo siento, no puedo responder a eso en este momento";
      }
  
      function selectOption(option) {
        var response = getResponse(option);
        var userMessageElement = createMessageElement(option, "IA-user-message");
        var responseElement = createMessageElement(response, "IA-bot-message");
        var chatContainer = document.getElementById("IA-chat");
  
        chatContainer.appendChild(userMessageElement);
        chatContainer.appendChild(responseElement);
  
        speakResponse(response);
        scrollToBottom();
      }
  // --------------------------------------------- //
  
  
  function speakResponse(response) {
    recognition.abort();
    const speech = new SpeechSynthesisUtterance(response);
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 0.8;
    speech.lang = 'es-ES'

    window.speechSynthesis.speak(speech);
  }
  
  function scrollToBottom() {
    chatContainer.scrollTop = chatContainer.scrollHeight;
  }
  
  var toggleButton = document.getElementById('IA-toggleButton');
  var container = document.querySelector('.IA-container');
  
  toggleButton.addEventListener('click', function() {
    container.classList.toggle('IA-hidden');
    if (container.classList.contains('IA-hidden')) {
      toggleButton.textContent = 'Mostrar';
    } else {
      toggleButton.textContent = 'Ocultar'; 
    }
  });