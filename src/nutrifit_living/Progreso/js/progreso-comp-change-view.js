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
    xmlhttp.open("GET", `../php-views/${docPedido}.php`+'?ID='+ID, true);
    xmlhttp.send();
}

const metPostJXBitGeneral = (docPedido, ID=0) => {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           var mensaje = xmlhttp.responseText;

           const formSec1 = document.querySelectorAll('.formSec1');
           const formSec1Cheks = document.querySelectorAll('.formSec1Checks');
           const formSec2Checks = document.querySelectorAll('.formSec2Checks');
           const formSec3 = document.querySelectorAll('.formSec3');
           const formSec4 = document.querySelectorAll('.formSec4');

           let edad = formSec1[0].value;
           let peso = formSec1[1].value;
           let altura = formSec1[2].value;
            let sexo = "";
            let estado = 'Activo'; 
            let dias = "";

            for (let i = 0; i < formSec2Checks.length; i++) {  
                if ( formSec2Checks[i].checked ) {
                    dias += `${formSec2Checks[i].value}`+',';
                }
            }

           if ( formSec1Cheks[0].checked ) {
                sexo = formSec1Cheks[0].value;
           } else {
                sexo = formSec1Cheks[1].value;
           }
           
           mainChange.innerHTML="";
           mainChange.innerHTML= mensaje;
        }
    }
xmlhttp.open("GET", `../php-views/${docPedido}.php`+'?ID='+ID, true);
xmlhttp.send();
}


// Conservando vistas

const metJXConv = (docPedido, ID=0) => {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           var mensaje = xmlhttp.responseText;
           let commentsContainer = document.getElementById('comments-container');

           commentsContainer.innerHTML= mensaje;
        }
    }
xmlhttp.open("GET", `../php-views/${docPedido}.php`+'?ID='+ID, true);
xmlhttp.send();
}



// Para subir los ms

const metJXSubirMs = (docPedido, ID) => {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let texto = document.getElementById('textMensajeSelect').value;

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           var mensaje = xmlhttp.responseText;
           let commentsContainer = document.getElementById('comments-container');

           commentsContainer.innerHTML+= mensaje;
        }
    }
xmlhttp.open("GET", `../php-views/${docPedido}.php`+'?ID='+ID+'&Text='+texto, true);
xmlhttp.send();
}



const metGetJXPsicoanalisis = (anorexia, bulimia, depresion) => {
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

           setTimeout(() => {
                
                const modal = document.querySelector('.modalPsico');
                const closeModal = document.querySelector('.modal__close');

                closeModal.addEventListener('click', (e)=>{
                    e.preventDefault();
                    modal.classList.remove('modal--show');

                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                });
                    
            }, 100);

        }
    }
xmlhttp.open("GET", `../php-views/subirPsicoanalisis.php`+'?anorexia='+anorexia+'&bulimia='+bulimia+'&depresion='+depresion, true);
xmlhttp.send();
}


// Eventos


sideMenuProg.addEventListener('click', e => {

    let slcView = e.target.textContent;


    if (slcView === "Dieta Actual" ) {

        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Gráficas';
        sideProg[2].textContent='Mensajes';
        sideProg[3].textContent='Nutri Express';
        sideProg[4].textContent='Bitácora';


    } else if (slcView === "Mensajes" ) {

        metPostJX('mensajes-view-usuario');

        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Dieta Actual';
        sideProg[2].textContent='Gráficas';
        sideProg[3].textContent='Nutri Express';
        sideProg[4].textContent='Bitácora';


    } else if (slcView === "Nutri Express" ) {
        metPostJX('nutri-express');

        setTimeout ( function () {   
            mostrarCalendario (0);
        }, 100);   

        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Dieta Actual';
        sideProg[2].textContent='Mensajes';
        sideProg[3].textContent='Gráficas';
        sideProg[4].textContent='Bitácora';
        
  
    } else if (slcView === "Bitácora" ) {

        metPostJX('bitacora-pro-comp');
        psicoAnalisis();
        formPrincipalBitacora();

        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Dieta Actual';
        sideProg[2].textContent='Mensajes';
        sideProg[3].textContent='Nutri Express';
        sideProg[4].textContent='Gráficas';


    } else if (slcView === "Gráficas" ) {
        location.reload();
    }

})

// Funciones 

// Bajar los ms y mostrarlos


function bajarMS (id) {
    metJXConv("bajar-mensajes",id);
}


function subirMS (id) {
    metJXSubirMs("subir-ms",id);
    setTimeout ( function () { metJXConv("bajar-mensajes",id); }, 100);
}

// Funciones para la bitacora

function formPrincipalBitacora() {

    setTimeout(() => {
        
    var buttons = document.querySelectorAll(".new-form-wrapper .new-button");
  
    buttons.forEach(function(button) {
      button.addEventListener("click", function() {
        var currentButton = this;
        var currentSection = currentButton.closest(".new-section");
        var currentSectionIndex = Array.prototype.indexOf.call(currentSection.parentNode.children, currentSection);
        var headerSection = document.querySelectorAll('.new-steps li')[currentSectionIndex];
  
        currentSection.classList.remove("new-is-active");
        currentSection.nextElementSibling.classList.add("new-is-active");
        headerSection.classList.remove("new-is-active");
        headerSection.nextElementSibling.classList.add("new-is-active");
  
        var formWrapper = document.querySelector(".new-form-wrapper");
        formWrapper.addEventListener("submit", function(e) {
          e.preventDefault();
        });
  
        if (currentSectionIndex === 3) {
          document.querySelector(".new-form-wrapper .new-section").classList.add("new-is-active");
          document.querySelector(".new-teps li").classList.add("new-is-active");
        }
        });
        });

        const bitacoraGeneral = document.getElementById('btnCerrarBitacora');
        const bitacoraContainer = document.getElementById('bitacoraNewForm'); 
        const containerAnalitic = document.getElementById('containerAnalitic');

        bitacoraGeneral.addEventListener('click', () => {

            containerAnalitic.classList.remove('opCeroForms');
            bitacoraContainer.style.display="none";
            metPostJXBitGeneral('subirFormBitGeneral');

        });

    }, 100);
}

// Segundo Formulario Bitacora

const psicoAnalisis = function () {

    setTimeout(() => {

        const forms = document.querySelectorAll('.formAnalitic'),
        btnsChange = document.querySelectorAll('.btnChangeForm'),
        enviarFormPsico = document.getElementById('enviarFormPsico');

        btnsChange[0].addEventListener('click', () => {
            forms[0].classList.add('opCeroForms');
            forms[1].classList.remove('opCeroForms');
        });

        btnsChange[1].addEventListener('click', () => {
            forms[1].classList.add('opCeroForms');
            forms[2].classList.remove('opCeroForms');
        });

        enviarFormPsico.addEventListener('click', () => {

            const anorexiAfirm = document.querySelectorAll('.anorexiAfirm'),
                bulimiAfirm = document.querySelectorAll('.bulimiAfirm'),
                bulimiAfirmCheck = document.querySelectorAll('.bulimiAfirmCheck'),
                depresion1a6 = document.querySelectorAll('.depresion1a6'),
                depresionTotal = document.querySelectorAll('.depresionTotal');
            let resultAnorexia = 0;
            let resultBulimia = 0;
            let resultDepresion1a6 = 0;

            function resultBulimiaChecks() {

                for (let i = 0; i < bulimiAfirm.length; i++) {
                    if (bulimiAfirm[i].checked) {
                        resultBulimia++;
                    } 
                }

                let BulimiaChecks = 0;

                for (let i = 0; i < bulimiAfirmCheck.length; i++) {
                    if (bulimiAfirmCheck[i].checked) {
                        BulimiaChecks++;
                    }
                }
                return BulimiaChecks;
            }

            function resultDepresionTotal() {

                let depresionTodasPregutas = 0;

                for (let i = 0; i < depresion1a6.length; i++) {
                    if (depresion1a6[i].checked) {
                        resultDepresion1a6++;
                    }
                }

                for (let i = 0; i < depresionTotal.length; i++) {
                    if (depresionTotal[i].checked) {
                        depresionTodasPregutas++;
                    }
                }

                return depresionTodasPregutas;
            }

            for (let i = 0; i < anorexiAfirm.length; i++) {
                if (anorexiAfirm[i].checked) {
                    resultAnorexia++;
                }
            }

                 
            let BulimiaChecks = resultBulimiaChecks(),
            depresionTodaslasPreguntasResult = resultDepresionTotal();

            // Evaluación de resultados para saber sí tienden a algun padecimiento psicológico o no:

            function resultsTendenciasPsicologicas() {
           

                let anorexiaValue = 'no',
                    BulimiaValue = 'no',
                    depresionValue = 'no';

                if (resultAnorexia >= 5) {
                    anorexiaValue = 'si';
                }

                if (resultBulimia >= 2 && BulimiaChecks === 4) {
                    BulimiaValue = 'si';
                }

                if (resultDepresion1a6 === 6 && depresionTodaslasPreguntasResult >= 5) {
                    depresionValue = 'si';
                }

                metGetJXPsicoanalisis(anorexiaValue, BulimiaValue, depresionValue);

            }

            resultsTendenciasPsicologicas();

            // console.log('anorexia: '+resultAnorexia);
            // console.log('Bulimia preguntas sin check: '+resultBulimia);
            // console.log('Bulimia preguntas con check: '+BulimiaChecks);
            // console.log('Depresión preguntas 1 a 6: '+resultDepresion1a6);
            // console.log('Depresión resto de preguntas afirmativas: '+depresionTodaslasPreguntasResult);

        });
                
    }, 100);

}



// Función para mostrar el pdf al ususario


function verPDFUserSlc (rutaPDF, content) {

    if (content !== 'Dieta Actual') {
        return false;
    }

    mainChange.innerHTML = ` <h2 class="h2InfoUserSlc">Tú Dieta Actual</h2>
    <br>
    <div class="top-bar-User-Slc">
        <button class="btnSlcUser" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Anterior Pág
        </button>
        <button class="btnSlcUser" id="next-page">
        Siguiente Pág <i class="fas fa-arrow-circle-right"></i>
        </button>
        <span class="page-info-PDF-User-Slc">
        Página <span id="page-num"></span> de <span id="page-count"></span>
        </span>
    </div>
    <canvas id="pdf-render" class="canvaPDFSlc"></canvas>`;

    // Mostrar PDF

    const url = `${rutaPDF}`;

    let pdfDoc = null,
    pageNum = 1,
    pageIsRendering = false,
    pageNumIsPending = null;

    const scale = 1.5,
    canvas = document.querySelector('#pdf-render'),
    ctx = canvas.getContext('2d');

    // Render the page
    const renderPage = num => {
    pageIsRendering = true;

    // Get page
    pdfDoc.getPage(num).then(page => {
        // Set scale
        const viewport = page.getViewport({ scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderCtx = {
        canvasContext: ctx,
        viewport
        };

        page.render(renderCtx).promise.then(() => {
        pageIsRendering = false;

        if (pageNumIsPending !== null) {
            renderPage(pageNumIsPending);
            pageNumIsPending = null;
        }
        });

        // Output current page
        document.querySelector('#page-num').textContent = num;
    });
    };

    // Check for pages rendering
    const queueRenderPage = num => {
    if (pageIsRendering) {
        pageNumIsPending = num;
    } else {
        renderPage(num);
    }
    };

    // Show Prev Page
    const showPrevPage = () => {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
    };

    // Show Next Page
    const showNextPage = () => {
    if (pageNum >= pdfDoc.numPages) {
        return;
    }
    pageNum++;
    queueRenderPage(pageNum);
    };

    // Get Document
    pdfjsLib
    .getDocument(url)
    .promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;

        document.querySelector('#page-count').textContent = pdfDoc.numPages;

        renderPage(pageNum);
    })
    .catch(err => {
        // Display error
        const div = document.createElement('div');
        div.className = 'error';
        div.appendChild(document.createTextNode(err.message));
        document.querySelector('body').insertBefore(div, canvas);
        // Remove top bar
        document.querySelector('.top-bar').style.display = 'none';
    });

    // Button Events
    document.querySelector('#prev-page').addEventListener('click', showPrevPage);
    document.querySelector('#next-page').addEventListener('click', showNextPage);

}

// Código para la agenda

function agregarEvento() {
    var fecha = document.getElementById("fecha").value;
    var hora = document.getElementById("hora").value;
    var evento = document.getElementById("evento").value;
    var eventoHtml = "<p>" + fecha + " a las " + hora + ": " + evento + "</p>";
    document.getElementById("eventos").innerHTML += eventoHtml;
    document.getElementById("fecha").value = "";
    document.getElementById("hora").value = "";
    document.getElementById("evento").value = "";
}

function changeFecha() {

    // Evitar que se recargue la página con el envio de formularios
    const formAgenda = document.getElementById("formAgenda"),
          inputDate = document.getElementById("fecha");

    const fecha = new Date(inputDate.value);
    const numeroDia = fecha.getDate();

    formAgenda.addEventListener("submit", function(event){
        event.preventDefault(); // Evita la recarga de la página
    });

    metPostJX('nutri-express');
    console.log(numeroDia);

    setTimeout ( function () {   
        mostrarCalendario (numeroDia+1);
    }, 100);

}

// Función Calendario

function mostrarCalendario (currentIf) {
    let monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre'];

let currentDate = new Date();
let currentDay =  currentDate.getDate();
let monthNumber = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

if ( currentIf !== 0) {
    currentDay = currentIf;
}

let dates = document.getElementById('dates');
let month = document.getElementById('month');
let year = document.getElementById('year');

let prevMonthDOM = document.getElementById('prev-month');
let nextMonthDOM = document.getElementById('next-month');

month.textContent = monthNames[monthNumber];
year.textContent = currentYear.toString();

prevMonthDOM.addEventListener('click', ()=>lastMonth());
nextMonthDOM.addEventListener('click', ()=>nextMonth());



const writeMonth = (month) => {

    for(let i = startDay(); i>0;i--){
        dates.innerHTML += ` <div class="calendar__date calendar__item calendar__last-days">
            ${getTotalDays(monthNumber-1)-(i-1)}
        </div>`;
    }

    for(let i=1; i<=getTotalDays(month); i++){
        if(i===currentDay) {
            dates.innerHTML += ` <div class="calendar__date calendar__item calendar__today">${i}</div>`;
        }else{
            dates.innerHTML += ` <div class="calendar__date calendar__item">${i}</div>`;
        }
    }
}

const getTotalDays = month => {
    if(month === -1) month = 11;

    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
        return  31;

    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
        return 30;

    } else {

        return isLeap() ? 29:28;
    }
}

const isLeap = () => {
    return ((currentYear % 100 !==0) && (currentYear % 4 === 0) || (currentYear % 400 === 0));
}

const startDay = () => {
    let start = new Date(currentYear, monthNumber, 1);
    return ((start.getDay()-1) === -1) ? 6 : start.getDay()-1;
}

const lastMonth = () => {
    if(monthNumber !== 0){
        monthNumber--;
    }else{
        monthNumber = 11;
        currentYear--;
    }

    setNewDate();
}

const nextMonth = () => {
    if(monthNumber !== 11){
        monthNumber++;
    }else{
        monthNumber = 0;
        currentYear++;
    }

    setNewDate();
}

const setNewDate = () => {
    currentDate.setFullYear(currentYear,monthNumber,currentDay);
    month.textContent = monthNames[monthNumber];
    year.textContent = currentYear.toString();
    dates.textContent = '';
    writeMonth(monthNumber);
}

writeMonth(monthNumber);

}

