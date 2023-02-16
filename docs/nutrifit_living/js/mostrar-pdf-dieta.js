const rutaPdf = document.getElementById('rutaPdf'),
    pdfDieta = document.getElementById('pdfDieta'),
    openPdf = document.getElementById('openPdf');


openPdf.addEventListener('click', () => {

    pdfDieta.classList.toggle('disNone');
});

//  Acciones


// Obtener info

const usernameInfo = document.getElementById('usernameInfo'),
mainUlNames = document.getElementById('mainUlNames');

let nombres = document.querySelectorAll('.nombresJs');
let edades = document.querySelectorAll('.edadesJs');
let pesos = document.querySelectorAll('.pesosJs');
let alturas = document.querySelectorAll('.alturasJs');
let sexos = document.querySelectorAll('.sexoJs');
let allImgs = document.querySelectorAll('.imgsJs');

// obj textos

const name = document.getElementById('usernameInfo'),
    img = document.getElementById('imgInfoUser'),
    tipoDieta = document.getElementById('tipodietaJs'),
    diasCumplidos = document.getElementById('diascumpliJs');

// Eventos

nombres[0].addEventListener('click', () => {

let ruta =`.${allImgs[0].textContent}`;
let rutafinal = ruta.replace(" ", "");

name.textContent = `${nombres[0].textContent}`;
tipoDieta.textContent = "?";
diasCumplidos.textContent = "20";
img.src = `${rutafinal}`;

});

nombres[1].addEventListener('click', () => {

let ruta =`.${allImgs[1].textContent}`;
let rutafinal = ruta.replace(" ", "");

name.textContent = `${nombres[1].textContent}`;
tipoDieta.textContent = "?";
diasCumplidos.textContent = "60";
img.src = `${rutafinal}`;

});

nombres[2].addEventListener('click', () => {

let ruta =`.${allImgs[2].textContent}`;
let rutafinal = ruta.replace(" ", "");

name.textContent = `${nombres[2].textContent}`;
tipoDieta.textContent = "?";
diasCumplidos.textContent = "50";
img.src = `${rutafinal}`;

});

nombres[3].addEventListener('click', () => {

let ruta =`.${allImgs[3].textContent}`;
let rutafinal = ruta.replace(" ", "");

name.textContent = `${nombres[3].textContent}`;
tipoDieta.textContent = "?";
diasCumplidos.textContent = "10";
img.src = `${rutafinal}`;

});


//  Eventos sección pendientes


// / obj textos

const namePend = document.getElementById('namePend'),
    nombreActual = document.getElementById('nombreActual'),
    imgPend = document.getElementById('imgPend'),
    tipoDietaPend = document.getElementById('tipoDietaPend'),
    diasCumplidosPend = document.getElementById('diasCumplidosPend'),
    pdfPend = document.getElementById('containerPdfPend'),
    openPdfPend = document.getElementById('openPdfPend'),
    pdfFilePend = document.getElementById('pdfFilePend'),
    iframePend = document.getElementById('iframePdfPend');

nombresPend = document.querySelectorAll('.nombresJsPendientes');


openPdfPend.addEventListener('click', () => {

    pdfPend.classList.toggle('disNone');

});

pdfFilePend.addEventListener('change', () => {

    iframePend.classList.remove('disNone');

});


nombresPend[0].addEventListener('click', () => {

    let ruta =`.${allImgs[0].textContent}`;
    let rutafinal = ruta.replace(" ", "");
    
    nombreActual.value= `${nombresPend[0].textContent}`;
    namePend.textContent = `${nombresPend[0].textContent}`;
    tipoDietaPend.textContent = "?";
    diasCumplidosPend.textContent = "20";
    imgPend.src = `${rutafinal}`;
    
});


nombresPend[1].addEventListener('click', () => {

    let ruta =`.${allImgs[1].textContent}`;
    let rutafinal = ruta.replace(" ", "");
    
    nombreActual.value= `${nombresPend[1].textContent}`;
    namePend.textContent = `${nombresPend[1].textContent}`;
    tipoDietaPend.textContent = "?";
    diasCumplidosPend.textContent = "20";
    imgPend.src = `${rutafinal}`;
    
});


nombresPend[2].addEventListener('click', () => {

    let ruta =`.${allImgs[2].textContent}`;
    let rutafinal = ruta.replace(" ", "");
    
    nombreActual.value= `${nombresPend[2].textContent}`;
    namePend.textContent = `${nombresPend[2].textContent}`;
    tipoDietaPend.textContent = "?";
    diasCumplidosPend.textContent = "20";
    imgPend.src = `${rutafinal}`;
    
});


nombresPend[3].addEventListener('click', () => {

    let ruta =`.${allImgs[3].textContent}`;
    let rutafinal = ruta.replace(" ", "");
    
    nombreActual.value= `${nombresPend[3].textContent}`;
    namePend.textContent = `${nombresPend[3].textContent}`;
    tipoDietaPend.textContent = "?";
    diasCumplidosPend.textContent = "20";
    imgPend.src = `${rutafinal}`;
    
});



