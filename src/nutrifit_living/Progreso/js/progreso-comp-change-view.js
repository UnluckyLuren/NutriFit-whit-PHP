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
xmlhttp.open("GET", `./phpNutriologo/${docPedido}.php`+'?ID='+ID+'&Text='+texto, true);
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

    } else if (slcView === "Mensajes" ) {

        metPostJX('mensajes-view-usuario');

        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Dieta Actual';
        sideProg[2].textContent='Gráficas';
        sideProg[3].textContent='Nutri Express';


    } else if (slcView === "Nutri Express" ) {
        sideProg[0].textContent = slcView;
        sideProg[1].textContent = 'Dieta Actual';
        sideProg[2].textContent='Mensajes';
        sideProg[3].textContent='Gráficas';
  
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



//  Funciones por defecto






