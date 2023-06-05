// Objetos

const sideMenuProg = document.getElementById('sideMenuProg'),
        mainChange = document.getElementById('mainChange'),
        sideProg = document.querySelectorAll('.sideProg'),
        bod = document.getElementById('bodyEmpresas')
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
    xmlhttp.open("GET", `./templates/${docPedido}.php`+'?ID='+ID, true);
    xmlhttp.send();
}


// Eventos

    const sideMenuInicio = document.getElementById('sideMenuInicio'),
        sideMenuPedidos = document.getElementById('sideMenuPedidos'),
        contCotizacion = document.getElementById('contCotizacion'),
        dietasPDF = document.getElementById('dietas'),
        diaActualPac = document.getElementById('diaActualPac');

    sideMenuInicio.addEventListener('click', () => {
        mainChange.innerHTML="";
        bod.style.background = 'url("../imagenes/bg-cocina.jpg")';
        contCotizacion.style.opacity = '0';
        contCotizacion.style.pointerEvents = 'none';
    });

    if (sideMenuPedidos !== null) {
        sideMenuPedidos.addEventListener('click', () => {
            bod.style.background = 'none';
            contCotizacion.style.opacity = '1';
            contCotizacion.style.pointerEvents = 'All';
        });
    }

    dietasPDF.addEventListener('click', () => {
        bod.style.background = 'none';
        metPostJX('dietas-usuarios');
    });

    diaActualPac.addEventListener('click', () => {
        bod.style.background = 'none';
        metPostJX('dia-actual-cocina');
    });


// Funciones 

function ToDo() {
    setTimeout(() => {

        const todoList = document.querySelector(".todos");
        const list = document.querySelectorAll(".todos li");
        const dayTitle = document.querySelector("#dayName");
        const updtUser = document.getElementById('updtUser');

        const lang = navigator.language;

        let date = new Date();

        let dayName = date.toLocaleString(lang, {
        weekday: "long"
        });

        dayTitle.innerHTML = dayName;

        let listLenght = list.lenght;

        const generateTempalate = (todo) => {
        const html = `<li>
                        <input type="checkbox" id="todo_${listLenght}">
                        <label for="todo_${listLenght}">
                            <span class="check"></span>
                            ${todo}
                        </label>
                        <i class="far fa-trash-alt delete"></i>
                        </li>`;
        todoList.innerHTML += html;
        };

        function addTodos(e) {
        e.preventDefault();
        const todo = submitForm.add.value.trim();
        if (todo.length) {
            listLenght = listLenght + 1;
            generateTempalate(todo);
            submitForm.reset();
        }
        }

        function deleteTodos(e) {
        if (e.target.classList.contains("delete")) {
            e.target.parentElement.remove();
        }
        }

        todoList.addEventListener("click", deleteTodos);

        updtUser.addEventListener('click', () => {
            metPostJX('dietas-usuarios');
        });

    }, 100);
    
}


// Función para mostrar el pdf al ususario


function verPDFUserSlc (rutaPDF, nombre) {

    mainChange.innerHTML = ` <h2 class="titleEstraDietas">Dieta de: ${nombre}</h2>

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
    <canvas id="pdf-render" class="canvaPDFSlc"></canvas>
    
            <div class="todoList">
            <div class="cover-img">
            <div class="cover-inner">
                <h3 id="dayName">Sunday</h3>
            </div>
            </div>

            <div class="content">
            <ul class="todos align">
                <li>

                <input type="checkbox" id="todo_1">
                <label for="todo_1">
                    <span class="check"></span>
                    Lunes
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>

                <li>
                <input type="checkbox" id="todo_2">
                <label for="todo_2">
                    <span class="check"></span>
                    Martes
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>

                <li>
                <input type="checkbox" id="todo_3">
                <label for="todo_3">
                    <span class="check"></span>
                    Miércoles
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>

                <li>
                <input type="checkbox" id="todo_4">
                <label for="todo_4">
                    <span class="check"></span>
                    Jueves
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>

                <li>
                <input type="checkbox" id="todo_5">
                <label for="todo_5">
                    <span class="check"></span>
                    Viernes
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>

                <li>
                <input type="checkbox" id="todo_6">
                <label for="todo_6">
                    <span class="check"></span>
                    Sabado
                </label>
                <i class="far fa-trash-alt delete"></i>
                </li>
                <button class="btnCompletadoToDo" id="updtUser">Completado</button>
            </ul>
            </div>
                
        </div> `;


    // Inicializar el ToDo

    ToDo();

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

