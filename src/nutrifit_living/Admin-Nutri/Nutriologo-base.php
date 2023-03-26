<?php

require "../cards_planes/down-info-users-nutriologo.php";

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nutriologo-NutriFit</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section id="home">
        <nav>
            <ul>
                <li><a href="#">PACIENTES</a></li>
                <li><a href="#">PENDIENTES</a></li>
                <li><a href="#">PREGUNTAS</a></li>
            </ul>
            <input type="text">
            <form action="../Login_register/cerrar-sesion.php" method="POST" >
                    <button type="submit" > <img src="../imagenes/Log-out.png" alt="admin" class="logOut"> </button>
            </form>
        </nav>
        <div class="fila">
            <div class="col">
                <h2>Comer<span class="normal">es una</span> </h2>
                <h2 class="normal">Necesidad, hacerlo </h2>
                <h2 class="normal">de forma inteligente </h2>
                <h2>es un Arte </h2>
                <p>Mejora tú calidad de vida</p>
                <button>Start</button>
                <div class="figura1">
                    <img src="imgnu/figura1.png" alt="">
                </div>
                <div class="figura3">
                    <img src="imgnu/figura3.png" alt="">
                </div>
            </div>
            <div class="col">
                <div class="figura2">
                    <img src="imgnu/figura2.png" alt="">
                </div>
                <div class="nave">
                    <img src="imgnu/nave.png" alt="">
                </div>
                <div class="compu">
                    <img src="imgnu/compu.png" alt="">
                </div>
            </div>
        </div>
        <footer>
            <div class="item i1" onclick="mostrar1()">
                <i class="fa-solid fa-video"></i>
                <div class="info">
                    <h3>Pacientes</h3>
                    <p>En ese apartado podra ver todas las personas atendidas hasta el momento.</p>
                </div>
            </div>
            <div class="item i2" onclick="mostrar2()">
                <i class="fa-solid fa-note-sticky"></i>
                <div class="info">
                    <h3>Pendientes</h3>
                    <p>Cree nuevas dietas para los usuarios.</p>
                </div>
            </div>
            <div class="item i3" onclick="mostrar3()">
                <i class="fa-brands fa-font-awesome"></i>
                <div class="info">
                    <h3>Preguntas</h3>
                    <p>Descubra los avances de los demas y resuelva sus dudas.</p>
                </div>
            </div>
        </footer>
        
       <div id="item1">
            <div class="infoVer">
                <div class="containerFlexcolumn">
                    <h3>Pacientes</h3>
                    <ul class="mainUl" id="mainUlNames">
                        <h3>Nombre</h3>
                        <li class="nombresJs"><?php echo $DatosNames[0][0]; ?></li>
                        <li class="nombresJs"><?php echo $DatosNames[1][0]; ?></li>
                        <li class="nombresJs"><?php echo $DatosNames[2][0]; ?></li>
                        <li class="nombresJs"><?php echo $DatosNames[3][0]; ?></li>
                    </ul>
                </div>  

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Edad</h3>
                        <li class="edadesJs"><?php echo $DatosEdades[0][0]; ?></li>
                        <li class="edadesJs"><?php echo $DatosEdades[1][0]; ?></li>
                        <li class="edadesJs"><?php echo $DatosEdades[2][0]; ?></li>
                        <li class="edadesJs"><?php echo $DatosEdades[3][0]; ?></li>
                    </ul>
                </div>    

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Peso</h3>
                        <li class="pesosJs"><?php echo $DatosPesos[0][0]; ?></li>
                        <li class="pesosJs"><?php echo $DatosPesos[1][0]; ?></li>
                        <li class="pesosJs"><?php echo $DatosPesos[2][0]; ?></li>
                        <li class="pesosJs"><?php echo $DatosPesos[3][0]; ?></li>
                    </ul>
                </div>   

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Altura</h3>
                        <li class="alturasJs"><?php echo $DatosAlturas[0][0]; ?></li>
                        <li class="alturasJs"><?php echo $DatosAlturas[1][0]; ?></li>
                        <li class="alturasJs"><?php echo $DatosAlturas[2][0]; ?></li>
                        <li class="alturasJs"><?php echo $DatosAlturas[3][0]; ?></li>
                    </ul>
                </div>   

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Sexo</h3>
                        <li class="sexoJs"><?php echo $DatosSexos[0][0]; ?></li>
                        <li class="sexoJs"><?php echo $DatosSexos[1][0]; ?></li>
                        <li class="sexoJs"><?php echo $DatosSexos[2][0]; ?></li>
                        <li class="sexoJs"><?php echo $DatosSexos[3][0]; ?></li>
                    </ul>

                    <ul class="disNone">
                        <li class="imgsJs"> <?php echo $DatosImgs[0][0]; ?> </li>
                        <li class="imgsJs"> <?php echo $DatosImgs[1][0]; ?> </li>
                        <li class="imgsJs"> <?php echo $DatosImgs[2][0]; ?> </li>
                        <li class="imgsJs"> <?php echo $DatosImgs[3][0];?> </li>
                    </ul>


                </div>   

            
                <div class="containerInfoUser">

                    <h3 id="usernameInfo">El nombre</h3>
                    <div class="styleWidthImg" > <img id="imgInfoUser" src="../imagenes/user.png"> </div> 

                    <h3>Tipo de dieta:</h3>
                    <p id="tipodietaJs" >Alguna</p>

                    <h3>Información:</h3>
                    <p>Dias cumplidos: <span id="diascumpliJs" > ejemplo </span> </p>

                    <h3>Dieta Actual:</h3>
                    <div class="pdfDieta"><img src="../imagenes/file.png" id="openPdf"><p>Abrir</p></div>

                    <div class="disNone pdfViewer" id="pdfDieta" > <iframe class="pdfViewerIframe" src="<?php echo "../imagenes/DAFNE VELµZQUEZ- PLAN MARZO.pdf" ?>" frameborder="0"></iframe> </div>


                </div>

            </div>
            
            <div class="close" onclick="cerrar()">
                &#x2715
            </div>
       </div>
       <div id="item2">
            <div class="infoVer">
            
            <div class="containerFlexcolumn">
                    <h3>Pacientes</h3>
                    <ul class="mainUl" id="mainUlNames">
                        <h3>Nombre</h3>
                        <li class="nombresJsPendientes"><?php echo $DatosNames[0][0]; ?></li>
                        <li class="nombresJsPendientes"><?php echo $DatosNames[1][0]; ?></li>
                        <li class="nombresJsPendientes"><?php echo $DatosNames[2][0]; ?></li>
                        <li class="nombresJsPendientes"><?php echo $DatosNames[3][0]; ?></li>
                    </ul>
                </div>  

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Edad</h3>
                        <li><?php echo $DatosEdades[0][0]; ?></li>
                        <li><?php echo $DatosEdades[1][0]; ?></li>
                        <li><?php echo $DatosEdades[2][0]; ?></li>
                        <li><?php echo $DatosEdades[3][0]; ?></li>
                    </ul>
                </div>    

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Peso</h3>
                        <li ><?php echo $DatosPesos[0][0]; ?></li>
                        <li ><?php echo $DatosPesos[1][0]; ?></li>
                        <li ><?php echo $DatosPesos[2][0]; ?></li>
                        <li ><?php echo $DatosPesos[3][0]; ?></li>
                    </ul>
                </div>   

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Altura</h3>
                        <li><?php echo $DatosAlturas[0][0]; ?></li>
                        <li><?php echo $DatosAlturas[1][0]; ?></li>
                        <li><?php echo $DatosAlturas[2][0]; ?></li>
                        <li><?php echo $DatosAlturas[3][0]; ?></li>
                    </ul>
                </div>   

                <div class="containerFlexcolumn">
                    <h3>Estado Actual</h3>
                    <ul class="mainUl" >
                    <h3>Sexo</h3>
                        <li><?php echo $DatosSexos[0][0]; ?></li>
                        <li><?php echo $DatosSexos[1][0]; ?></li>
                        <li><?php echo $DatosSexos[2][0]; ?></li>
                        <li><?php echo $DatosSexos[3][0]; ?></li>
                    </ul>

                </div>   

            
                <div class="containerInfoUser">

                    <h3 id="namePend">El nombre</h3>
                    <div class="styleWidthImg" > <img id="imgPend" src="../imagenes/user.png"> </div> 

                    <h3>Tipo de dieta:</h3>
                    <p id="tipoDietaPend" >Alguna</p>

                    <h3>Información:</h3>
                    <p>Dias cumplidos: <span id="diasCumplidosPend" > ejemplo </span> </p>

                    <h3>Dieta Actual:</h3>
                    <div class="pdfDieta"><img src="../imagenes/file.png" id="openPdfPend"><p>Subir</p></div>

                    <div class="disNone pdfViewer containerPdfPend" id="containerPdfPend" > 

                        <form action="../cards_planes/subir-dieta-pdf.php" method="POST" enctype="multipart/form-data" > 
                            <input type="text" id="nombreActual" class="disNone" value="" name="nameActual">
                            <h3>Sube su Dieta:</h3>
                            <input type="file" id="pdfFilePend" name="filePdfUser">
                            <br>
                            <button>Enviar</button>
                        </form>

                        <iframe id="iframePdfPend" class="iframePend disNone" src="<?php echo "../imagenes/DAFNE VELµZQUEZ- PLAN MARZO.pdf" ?>" frameborder="0"></iframe>                     
                    </div>
                </div>


            </div>
            <div class="close" onclick="cerrar()">
                &#x2715
            </div>
        </div>
        <div id="item3">
            <i class="fa-brands fa-font-awesome"></i>
            <div class="infoVer">
                <h3>Preguntas</h3>
                
            </div>
            <div class="close" onclick="cerrar()">
                &#x2715
            </div>
        </div>
    </section>

    <script>
        function mostrar1(){
            document.getElementById('item1').style.left = '0';
        }
        function mostrar2(){
            document.getElementById('item2').style.left = '0';
        }
        function mostrar3(){
            document.getElementById('item3').style.left = '0';
        }
        function cerrar(){
            document.getElementById('item1').style.left = '-100%';
            document.getElementById('item2').style.left = '-100%';
            document.getElementById('item3').style.left = '-100%';
        }


    </script>


        <script src="../js/mostrar-pdf-dieta.js"></script>

</html>