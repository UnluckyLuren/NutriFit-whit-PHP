// Objetos

const sideMenu = document.getElementById('sideMenu'),
    containtBody = document.getElementById('containtBody'),
    mainChange = document.getElementById('mainChange');


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
    xmlhttp.open("GET", `./views-clinic/${docPedido}.php`+'?ID='+ID, true);
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
xmlhttp.open("GET", `./views-clinic/${docPedido}.php`+'?ID='+ID, true);
xmlhttp.send();
}

//  Función para mostrar el cambio de información

function MostrarVentanaPac (id) {
    metPostJX("pacientes-clinic",id);
    infoVentanaPacientes();
}

// Función para hacer el cambio de la categoria de muestra de información

function infoVentanaPacientes() {

    setTimeout( () => {

        const categorias = document.querySelectorAll('#categorias .categoria');
        const contenedorPreguntas = document.querySelectorAll('.contenedor-preguntas');
        let categoriaActiva = null;

        categorias.forEach((categoria) => {
            categoria.addEventListener('click', (e) => {
                categorias.forEach((elemento) => {
                    elemento.classList.remove('activa');
                });

                e.currentTarget.classList.toggle('activa');
                categoriaActiva = categoria.dataset.categoria;


                // Activamos el contenedor de preguntas que corresponde
                contenedorPreguntas.forEach((contenedor) => {
                    if(contenedor.dataset.categoria === categoriaActiva){
                        contenedor.classList.add('activo');
                    } else {
                        contenedor.classList.remove('activo');
                    }
                });
            });
        });


        const preguntas = document.querySelectorAll('.preguntas .contenedor-pregunta');
        preguntas.forEach((pregunta) => {
            pregunta.addEventListener('click', (e) => {
                e.currentTarget.classList.add('activa');

                const respuesta = pregunta.querySelector('.respuesta');
                const alturaRealRespuesta = respuesta.scrollHeight;
                
                let slcView = e.target.id,
                slcTagName = e.target.tagName;

                if(!respuesta.style.maxHeight){
                    // Si esta vacio el maxHeight entonces ponemos un valor.
                    respuesta.style.maxHeight = alturaRealRespuesta + 'px';
                } else {

                    if (slcTagName !== "CANVAS") {
                        respuesta.style.maxHeight = null;
                        e.currentTarget.classList.remove('activa');
                    } else {
                        graficasZoom(`${slcView}`);
                    }

                }

                // [Opcional] Reiniciamos las demas preguntas
                preguntas.forEach((elemento) => {
                    // Solamente queremos ejecutar el codigo para las preguntas que no 
                    // sean la pregunta a la que le dimos click.
                    if(pregunta !== elemento){
                        elemento.classList.remove('activa');
                        elemento.querySelector('.respuesta').style.maxHeight = null;
                    }
                });


            }); });

        }, 100)
}


// Función para los calculos de la información y cambiar los fieldsets en pendientes

function CalculosPendientes() {
 
    setTimeout( () => {
        const fieldSet = document.querySelectorAll('.acomSelect');
        const liProActual = document.querySelectorAll('.liProActual');
        const nexts = document.querySelectorAll(".next");
        const previos = document.querySelectorAll(".previous");
    
        nexts[0].addEventListener("click", () => {
          fieldSet[0].classList.add('noViewField');
          fieldSet[1].classList.remove('noViewField');
          liProActual[1].classList.add('active');
        });
        
        nexts[1].addEventListener("click", () => {
          fieldSet[1].classList.add('noViewField');
          fieldSet[2].classList.remove('noViewField');
          liProActual[2].classList.add('active');
        });
                
        previos[0].addEventListener("click", () => {
          fieldSet[0].classList.remove('noViewField');
          fieldSet[1].classList.add('noViewField');
          liProActual[1].classList.remove('active');
        });
    
        previos[1].addEventListener("click", () => {
          fieldSet[1].classList.remove('noViewField');
          fieldSet[2].classList.add('noViewField');
          liProActual[2].classList.remove('active');
        });
    
    
        // Calculos formulario
    
            //  objetos de eventos
    
            const calcSalud = document.getElementById('calcSalud');
    
            // Inputs
    
            const pesoUser = document.getElementById('pesoUser'),
                alturaUser = document.getElementById('alturaUser'),
                edadUser = document.getElementById('edadUser'),
                hombreUser = document.getElementById('opt2'),
                mujerUser = document.getElementById('opt3');
    
            // objetos para mostrar la info calculada en el DOM
    
            const textIMC = document.getElementById('textIMC'),
                textGrasaTotal = document.getElementById('textGrasaTotal'),
                textGrasaMagra= document.getElementById('textGrasaMagra'),
                textPesoIdeal = document.getElementById('textPesoIdeal'),
                textDisminucion = document.getElementById('textDisminucion'),
                textPorcentajeGrasa = document.getElementById('textPorcentajeGrasa');
    
            // Funciones
    
            const calcPesoIdeal = (porcentajeIdeal, grasaTotal, porcentajeGrasaCorporal, grasaMagra) => {
                
                let pesoMeta  = ( (porcentajeIdeal * grasaTotal) / (porcentajeGrasaCorporal / 100) ),
                    pesoIdeal = grasaMagra + pesoMeta,
                    grasaParaDisminuir = grasaTotal - pesoMeta;
    
                let resultadosDelPeso = [pesoIdeal, grasaParaDisminuir];
    
                return resultadosDelPeso;
            }
    
            const resultadosFinales = (genero) => {
    
                textIMC.value= calcIMC().toFixed(2)+" kg";
                textGrasaTotal.value = calcGrasas()[0].toFixed(2)+" kg";
                textGrasaMagra.value = calcGrasas()[1].toFixed(2)+" kg";
                textPorcentajeGrasa.value = calcGrasas()[2].toFixed(0)+" %";
                textDisminucion.value = calcGrasas()[3][1].toFixed(2)+" kg";
    
                let peso = calcGrasas()[3][0].toFixed(2);
            }
    
            // Formulas y calculos
    
            const calcIMC = () => {
                let IMC = pesoUser.value/(alturaUser.value*alturaUser.value);
    
                return IMC;
            }
    
            const calcPorcentajeGrasaCorporal = () => {
    
                // El cálculo de grasa por medio de IMC ( formula de Deurenberg) ha sido validada en poblaciones entre 7 a 83 años con un imc entre 13.9 a 40.9
    
                let IMCResult = calcIMC(), porcentajeGrasaCorporal = '';
    
                if (hombreUser.checked) {
    
                    porcentajeGrasaCorporal = (1.20 * IMCResult) + (0.23 * edadUser.value) - (10.8 * 1) - 5.4;
    
                } else if (mujerUser.checked) {
                    
                    porcentajeGrasaCorporal = (1.20 * IMCResult) + (0.23 * edadUser.value) - (10.8 * 0) - 5.4;
    
                }
    
                return porcentajeGrasaCorporal;
            }
    
            const calcGrasas = () => {
    
                let pesoMetaSaludable;
                let GrasaCorporal = calcPorcentajeGrasaCorporal();
    
                let grasaTotal = pesoUser.value * ( GrasaCorporal / 100),
                grasaMagra = pesoUser.value - grasaTotal;
    
    
                if (hombreUser.checked) {
    
                    if ( edadUser.value >= 20 && edadUser.value <= 39 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.12, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value >= 40 && edadUser.value <= 59 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.17, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value >= 60 && edadUser.value <= 79 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.22, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value < 20 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.10, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } 
    
                } else if (mujerUser.checked) {
                    
                    if ( edadUser.value >= 20 && edadUser.value <= 39 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.22, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value >= 40 && edadUser.value <= 59 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.26, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value >= 60 && edadUser.value <= 79 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.30, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } else if ( edadUser.value < 20 ) {
    
                        pesoMetaSaludable = calcPesoIdeal(0.15, grasaTotal, GrasaCorporal, grasaMagra);
    
                    } 
    
                }
    
                let resultadosGrasas = [grasaTotal, grasaMagra, GrasaCorporal, pesoMetaSaludable];
    
                return resultadosGrasas;
            }
    
    
            // Eventos
    
    
            calcSalud.addEventListener('click', () => {
    
                if (hombreUser.checked) {
    
                    resultadosFinales(true);
    
                } else if (mujerUser.checked) {
                    
                    resultadosFinales(false);
                }
    
            });
    
    }, 100);
    
    
}

// Función para mostrar las gráficas 

function graficasView(id) {

    setTimeout( () => {

        const graficasTotal = document.querySelectorAll(".graficados");

        // Gráfico de líneas

        // Las etiquetas son las que van en el eje X. 
        const etiquetas = ["Enero", "Febrero", "Marzo", "Abril"]
        // Podemos tener varios conjuntos de datos. Comencemos con uno
        const datosVentas2020 = {
            label: "Ventas por mes",
            data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1,// Ancho del borde
        };
        const datosVentas2023 = {
            label: "Ventas por mes",
            data: [3000, 2000, 6000, 1000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1,// Ancho del borde
        };
        new Chart(graficasTotal[0], {
            type: 'line',// Tipo de gráfica
            data: {
                labels: etiquetas,
                datasets: [
                    datosVentas2020,
                    datosVentas2023,
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },
            }
        });

         // Gráfico de barras

          // Obtener una referencia al elemento canvas del DOM

        // Las etiquetas son las que van en el eje X. 
        const etiquetasbar = ["Enero", "Febrero", "Marzo", "Abril"]
        // Podemos tener varios conjuntos de datos. Comencemos con uno
        const datosBar = {
                label: "Ventas por mes",
                data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1,// Ancho del borde
        };
            new Chart(graficasTotal[1], {
                type: 'bar',// Tipo de gráfica
                data: {
                    labels: etiquetasbar,
                    datasets: [
                        datosBar,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });

            // Gráfico lineas doble

            // Las etiquetas son las que van en el eje X. 
            const etiquetasDoble = ["Enero", "Febrero", "Marzo", "Abril"]
            // Podemos tener varios conjuntos de datos
            const datosDobles1 = {
                label: "Ventas por mes - 2020",
                data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            const datosDobles2 = {
                label: "Ventas por mes - 2021",
                data: [10000, 1700, 5000, 5989], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
                borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
                borderWidth: 1,// Ancho del borde
            };

            new Chart(graficasTotal[2], {
                type: 'line',// Tipo de gráfica
                data: {
                    labels: etiquetasDoble,
                    datasets: [
                        datosDobles1,
                        datosDobles2,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });

            // Gráfica circular

            // Las etiquetas son las porciones de la gráfica
            const etiquetasCirc = ["Ventas", "Donaciones", "Trabajos", "Publicidad"]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosCirc = {
                data: [1500, 400, 2000, 7000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
                backgroundColor: [
                    'rgba(163,221,203,0.2)',
                    'rgba(232,233,161,0.2)',
                    'rgba(230,181,102,0.2)',
                    'rgba(229,112,126,0.2)',
                ],// Color de fondo
                borderColor: [
                    'rgba(163,221,203,1)',
                    'rgba(232,233,161,1)',
                    'rgba(230,181,102,1)',
                    'rgba(229,112,126,1)',
                ],// Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart(graficasTotal[3], {
                type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
                data: {
                    labels: etiquetasCirc,
                    datasets: [
                        datosCirc,
                        // Aquí más datos...
                    ]
                },
            });

            // Grafico de ejemplo

            new Chart( graficasTotal[4], {
                type: 'radar',
                data: {
                  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                  datasets: [
                    {
                      label: "1950",
                      fill: true,
                      backgroundColor: "rgba(179,181,198,0.2)",
                      borderColor: "rgba(179,181,198,1)",
                      pointBorderColor: "#fff",
                      pointBackgroundColor: "rgba(179,181,198,1)",
                      data: [8.77,55.61,21.69,6.62,6.82]
                    }, {
                      label: "2050",
                      fill: true,
                      backgroundColor: "rgba(255,99,132,0.2)",
                      borderColor: "rgba(255,99,132,1)",
                      pointBorderColor: "#fff",
                      pointBackgroundColor: "rgba(255,99,132,1)",
                      pointBorderColor: "#fff",
                      data: [25.48,54.16,7.61,8.06,4.45]
                    }
                  ]
                },
                options: {
                  title: {
                    display: true,
                    text: 'Distribution in % of world population'
                  }
                }
            });

            // Gráfico lineas doble

            // Las etiquetas son las que van en el eje X. 
            const etiquetaSeis = ["Enero", "Febrero", "Marzo", "Abril"]
            // Podemos tener varios conjuntos de datos
            const datoSeis = {
                label: "Ventas por mes - 2020",
                data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            const datoSeis2 = {
                label: "Ventas por mes - 2021",
                data: [10000, 1700, 5000, 5989], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
                borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
                borderWidth: 1,// Ancho del borde
            };

            new Chart(graficasTotal[5], {
                type: 'line',// Tipo de gráfica
                data: {
                    labels: etiquetasDoble,
                    datasets: [
                        datoSeis,
                        datoSeis2,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });

            // Gráficos 7 y 8

            // Las etiquetas son las que van en el eje X. 
            const etiquetaSiete = ["Enero", "Febrero", "Marzo", "Abril"]
            // Podemos tener varios conjuntos de datos
            const datoSiete = {
                label: "Ventas por mes - 2020",
                data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            const datoSiete2 = {
                label: "Ventas por mes - 2021",
                data: [10000, 1700, 5000, 5989], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
                borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
                borderWidth: 1,// Ancho del borde
            };

            new Chart(graficasTotal[6], {
                type: 'line',// Tipo de gráfica
                data: {
                    labels: etiquetaSiete,
                    datasets: [
                        datoSiete,
                        datoSiete2,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });

            // Gráfica circular

            // Las etiquetas son las porciones de la gráfica
            const etiquetasOcho = ["Ventas", "Donaciones", "Trabajos", "Publicidad"]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosOcho = {
                data: [1500, 400, 2000, 7000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
                backgroundColor: [
                    'rgba(163,221,203,0.2)',
                    'rgba(232,233,161,0.2)',
                    'rgba(230,181,102,0.2)',
                    'rgba(229,112,126,0.2)',
                ],// Color de fondo
                borderColor: [
                    'rgba(163,221,203,1)',
                    'rgba(232,233,161,1)',
                    'rgba(230,181,102,1)',
                    'rgba(229,112,126,1)',
                ],// Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart(graficasTotal[7], {
                type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
                data: {
                    labels: etiquetasOcho,
                    datasets: [
                        datosOcho,
                        // Aquí más datos...
                    ]
                },
            });

            // Inicializar el filtro de las gráficas

            infoVentanaPacientes();

    }, 100);

}

// Para mostrar el gráfico en grande




// Eventos


sideMenu.addEventListener('click', e => {

    let slcView = e.target.textContent,
        slcTagName = e.target.tagName;
    
    if (slcTagName === "A") {
        slcView = e.target.id;
    }

    if (slcView === "Inicio" || slcView === "side1" ) {
        containtBody.style.backgroundImage= "url(../imagenes/Fondosi.jpg)";
        mainChange.innerHTML="";

    } else if (slcView === "Pacientes" || slcView === "side2" ) {
        containtBody.style.backgroundImage="none";
        metPostJX("pacientes-clinic");

        //  Funcionamiento de muestra de información en ventana emergente 
        infoVentanaPacientes();

    } else if (slcView === "Ingreso" || slcView === "side3" ) {
        containtBody.style.backgroundImage= "none";
        metPostJX("pendientes-clinic");

        // Mostrar el formulario en pendientes y sus respectivos calculos
        CalculosPendientes();
    } else if (slcView === "Avances" || slcView === "side4" ) {
        containtBody.style.backgroundImage= "none";
        
        metPostJX("graficas-clinic");

        // Creación de las gráficas
        graficasView(0);
    }

});


// Función para mostrar el pdf en la sección de pacientes


function verPDFUserSlc (userSlc, rutaPDF) {

    const contInfoSkills = document.getElementById('contInfoSkills'),
        infoUserFixed = document.getElementById('info-user-fixed');

    contInfoSkills.style.flexDirection = "row";

    contInfoSkills.innerHTML = `
            <h2 class="h2InfoUserSlc">Dieta de ${userSlc}</h2>
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
    `;

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






