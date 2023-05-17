<?php

session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];


if ($privilegio == 0) {

    header("location: ./Page-Initial.php");

} else if ($privilegio == 1) {

    header("location: ./Page-Initial-Intermedium.php");

} 



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrifit living</title>
    <link  rel="icon" href="imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styleheader.css">
    <link rel="stylesheet" href="./CSS/style-presentation.css">
    <link rel="stylesheet" href="CSS/styles.css">    
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="CSS/Page-initial-responsive.css"> 


    <Style>
    

/* 
    ESTA PAGINA FUE HECHA EN 1 AÑO 

⣿⣿⣿⣿⡿⠟⠛⠋⠉⠉⠉⠉⠉⠛⠛⠻⠿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⠟⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠀⠈⠙⠾⣿⣾⣿⣾⣿⣾⣿⣾⣿
⠋⡁⠀⠀⠀⠀⠀⢀⠔⠁⠀⠀⢀⠠⠐⠈⠁⠀⠀⠁⠀⠈⠻⢾⣿⣾⣿⣾⣟⣿
⠊⠀⠀⠀⠀⢀⠔⠃⠀⠀⠠⠈⠁⠀⠀⠀⠀⠀⠀⠆⠀⠀⠄⠀⠙⣾⣷⣿⢿⣿
⠀⠀⠀⠀⡠⠉⠀⠀⠀⠀⠠⢰⢀⠀⠀⠀⠀⠀⠀⢰⠀⠀⠈⡀⠀⠈⢿⣟⣿⣿
⠀⠀⢀⡜⣐⠃⠀⠀⠀⣠⠁⡄⠰⠀⠀⠀⠀⠀⠀⠐⠀⠀⠀⠰⠀⠀⠈⢿⣿⣿
⠀⢠⠆⢠⡃⠀⠀⠀⣔⠆⡘⡇⢘⠀⠀⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿
⢀⡆⠀⡼⢣⠀⢀⠌⢸⢠⠇⡇⢘⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣿
⣼⣃⠀⠁⢸⢀⠎⠀⢸⠎⠀⢸⢸⡄⠀⠀⠀⠀⠀⠂⢀⠀⠀⠀⠀⠀⠀⠀⠀⣿
⠃⡏⠟⣷⣤⠁⠀⠀⠸⠀⠀⡾⢀⢇⠀⠀⠀⠀⠀⠄⠸⠀⠀⠀⠀⠄⠀⠀⠀⣿
⠀⠀⣀⣿⣿⣿⢦⠀⠀⠀⠀⡧⠋⠘⡄⠀⠀⠀⠀⡇⢸⠀⠀⠠⡘⠀⠀⠀⢠⣿
⠈⠀⢿⢗⡻⠃⠀⠀⠀⠀⠀⠀⠀⠀⠱⡀⠀⠀⢰⠁⡇⠀⠀⢨⠃⡄⢀⠀⣸⣿
⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣱⠀⠀⡎⠸⠁⠀⢀⠞⡸⠀⡜⢠⣿⣿
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣺⣿⣧⢰⣧⡁⡄⠀⡞⠰⠁⡸⣠⣿⣿⣿
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠠⡿⠏⣿⠟⢁⠾⢛⣧⢼⠁⠀⠀⢰⣿⡿⣷⣿
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠡⠄⠀⡠⣚⡷⠊⠀⠀⠀⣿⡿⣿⡿⣿
⡀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⠊⠁⢸⠁⠀⠀⠀⢰⣿⣿⡿⣿⣿
⠱⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡠⠊⠀⠀⠀⡞⠀⠀⠀⠀⢸⣿⣷⣿⣿⣿
⠀⠙⢦⣀⠀⠀⠀⠀⠀⢀⣀⣠⠖⠁⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⣸⣿⣾⡿⣷⣿
⠀⠀⠀⠀⠉⠉⣩⡞⠉⠁⠀⢸⡄⠀⠀⠀⠀⠀⢰⠇⠀⠀⠀⠀⣿⣿⣷⣿⣿⣿
⡆⠀⠀⣀⡠⠞⠁⣧⢤⣀⣀⣀⡇⠀⠀⠀⠀⠀⣸⠀⠀⠀⠀⠀⣿⣷⣿⣷⣿⣿
⣿⣷⠊⠁⠀⠀⡰⠁⠀⠀⠀⠀⣹⠶⢦⡀⠀⠀⡇⠀⠀⠀⠀⠀⢸⣿⣷⣿⣷⣿
⣿⢿⠀⠀⠀⡔⠁⠀⠀⠀⠀⠀⠀⠀⠀⠈⠳⡄⡇⠀⠀⠀⠀⠀⠈⣿⣾⣷⣿⣿
⠋⠈⠀⢀⠜⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠈⣧⠀⠀⠀⠀⠀⠀⠻⣿⣽⣾⣿
⢀⡄⡠⠊⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠁⠀⠀⠀⣸⠀⠀⠀⠀⠀⠀⠀⣿⣿⣻⣿
⣿⠋⠀⠀⠀⠀⠀⠀⠀⠀⢰⠀⠐⠀⠀⠀⠀⣀⡿⠀⠀⠀⠀⠀⠀⠀⢹⣿⣻⣿
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡼⠀⠀⠀⠀⠀⢀⣃⡇⠀⠲⡀⠀⠀⠀⠀⠈⣿⡿⣿
⣀⠤⠤⠤⡀⠀⠀⠀⠀⡴⠃⠀⠀⠀⠀⠀⢬⠞⡇⠀⠀⠇⠀⠀⠀⠀⠀⣿⣿⣿
⡁⢀⠀⠀⡇⠀⠀⠀⡼⠁⠀⠀⠀⠀⠀⣸⠁⠀⠇⠀⠀⡇⠀⠀⠀⠀⠀⣿⣿⣿
⠔⠃⠀⠀⡇⠀⠀⡼⠁⠀⠀⠀⠀⠀⢀⡇⠀⠀⡃⠀⠀⠙⢄⠀⠀⠀⠀⣿⣷⣿
⠒⠊⠀⠀⢸⠀⣸⠃⠀⠀⠀⠀⠀⠀⡞⠀⠀⠀⢅⠀⠀⡂⠸⡄⠀⠀⠀⣿⣟⣿
⠓⠀⠉⠀⢸⣰⠃⠀⠀⠀⠀⠀⠀⡜⡆⠀⠀⠀⢸⠀⠀⡇⢀⠇⠀⠀⠀⣿⣿⣿
⠉⠁⠀⢠⠞⠀⠀⠀⠀⠀⠀⠀⣰⠁⡇⠀⠀⠀⡇⠀⠀⡇⢸⠀⠀⠀⠀⣿⣷⣿
⡀⠀⢀⢿⣥⡤⠤⠤⠤⣀⣀⢠⠇⠀⢸⠀⠀⢰⠁⠀⢨⠀⢸⠀⠀⠀⠀⣿⣟⣿ 

*/


/* body {
    background-image: url("imagenes/Fondosi2.jpg");
}
    */
.conoce{
    
    background:    linear-gradient(#aff581, #65aae9);
    border-radius: 1000px;
    width:         150px;
    height:        40px;
    color:         #ffffff;
   font-size: 19px;
    font: normal bold "Ubuntu", sans-serif;
    text-align:    center;
    border: none;
   margin-top: 24%;
   margin-left: 37%;
   text-decoration: none;
   position: absolute;

}
a, #co {
    text-decoration: none;
    color: white;
    font: normal bold "Ubuntu", sans-serif;
    font-weight: bold;
    align-items: center;
}
.letter{
    font: normal bold "Ubuntu", sans-serif;
}
.conoce2{
    background:    linear-gradient(#aff581, #65aae9);
    border-radius: 1000px;
    width:         150px;
    height:        40px;
    color:         #ffffff;
   font-size: 19px;
    font:          normal bold "Ubuntu", sans-serif;
    text-align:    center;
    border: none;
   margin-top: 24%;
   margin-left: 52.5%;
   text-decoration: none;
   position: absolute;
}
.hover:hover{
    background:    linear-gradient(#65aae9, #aff581);
    font-size: 20px ;
    box-shadow:    0 4px #96cd9b;
    cursor: pointer;
}

    </Style>
</head>
<body>
    <header class="header">
        
        <div class="userMenuDiv" >
            <a href="#"><img src="<?php echo $imageUser ?>" id="open"  class="userMenuImg"></a>
            <p> <?php echo $nombre ?> </p>
        </div>

        <nav class="nav">
            <a href="#" class="logo ">
                <img src="imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-menu navMenuInitial">
                <li class="nav-menu-item navMenuLink"><a href="Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item navMenuLink" ><a href="productos.php" class="nav-menu-link nav-link">productos</a></li>
                <li class="nav-menu-item navMenuLink"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item navMenuLink"><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>

        </nav>
    </header>

     <!-- Review Start -->
     <div class="review" id="review">
        <div class="container">

            <h2 class="titlePageInterm" >Opiniones Clientes</h2>

            <div class="row align-items-center">
             
                <div class="col-lg-7">
                    <div class="review-carousel owl-carousel visualizerPage">
                        <div class="review-item">
                            <div class="review-img">
                                <img src="./imagenes/carrusel-img-5.png">
                            </div>
                            <div class="review-content">
                                <h3>Claudia</h3>
                                <h4>Panadera</h4>
                                <p>
                                    Es una gran experiencia que todos deberian vivir
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="./imagenes/User-Ejem-6.png" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Mónica</h3>
                                <h4>Entrenadora</h4>
                                <p>
                                    Una gran experiencia por vivir
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="./imagenes/imagen carrusel 1.png " alt="">
                            </div>
                            <div class="review-content">
                                <h3>Carlos</h3>
                                <h4>Emprendedor</h4>
                                <p>
                                    Un sitio muy didáctico y útil
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="./imagenes/imagen carrusel 2.png" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Karen</h3>
                                <h4>Enfermera</h4>
                                <p>
                                    Tiene muy buenas herramientas y servicios
                                </p>
                            </div>
                        </div>
                    
                    </div>
                    <!-- <div class="subirOpn">
                             <form class="enviarOpn" action="./cards_planes/subir-opinion-vip.php" method="Post">
                                <h2>Sube tú Opinion</h2>
                                <button class="subirBtnOpn" id="btnSubirOpn" >Subir</button>
                            </form>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Review End -->

    <!-- Ventana subida de opinion -->

    <!-- <div class="ventanaOpinion opcCero" id="ventanaSubirOpn">
        <form action="./cards_planes/subir-opinion-vip.php" method="POST" enctype="multipart/form-data">
            <h2>Sube tú opinion</h2>

            <div class="divisionFormOpn">

                    <label> Ocupación: </label>
                    <input type="text" name="ocupacion">

                    <label> Descripción de tú experiencia: </label>
                    <textarea cols="30" rows="10" class="descripcionOpn" name="descripcionOpn"></textarea>
               
                    <p class="fileOpnText" >Añadir Imagen</p>
                    <input type="file" class="fileOpn" name="imagenOpn">

                <button>Enviar</button>
            </div>

        </form>
    </div> -->


    <!-- FAQs Start -->
    <div class="faq faqVip" id="faq">
        <div class="container">

            <h2 class="faqTitle faqTitleIntermedium" >Preguntas Frecuentes</h2>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div id="accordion" class="visualizerPage" >
                        <div class="card">
                            <div class="card-header">
                                <span>1</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    Donde conseguir una dieta?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                   Accediendo a la sección de servicios en el formulario personalizado al cual tendras acceso si eres un usuario experience o vip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>2</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                    Cuál es el mejor tipo de cuenta?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Todas nuestras cuentas son acordes a nuestros diferentes tipos de usuarios, ya que pensamos en todos, y si quieres una experiencia completa puedes adquirir una cuenta nutrifit living Vip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>3</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                    Donde puedo ver mi progreso?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Dentro de la página inicial en la esquina superior izquierda se encuentra un icono con tu imagen que al dar click te mostrará información  sobre ti y te dara el acceso al apartado de progresos
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>4</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                    Como puedo contactar a un nutriólogo?
                                </a>
                            </div>
                             <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Etá es una función unica para un usuario VIP y se encuentra en está misma página.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>5</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                    Cómo utilizar la función de nutrifit living express?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Este apartado se encuentra en la página de progreso, en la cuál encontraras un formulario para agendar el envio de las comidas de tú dieta.
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Ventana emergente -->

        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container" id="modal_container">
            <div class="modal modalVentInitial">
                <div class="compra">       
                    <button id="close" type="submit" ><img src="imagenes/x.png" ></button>  
                    
                    <div class="info-user-page">
                        
                    <div class="insertImg" id="insertImg" >
                            <form action="./cards_planes/cargarImagen.php" method="POST" class="formImage" id="FormImagenUser" enctype="multipart/form-data" > 
                                <img src="<?php echo $imageUser ?>" id="imgChoosen">
                                <p id="textAnadir" >Añade tú Foto</p>
                                <input type="file" id="inputFile" class="inputFile" name="imagenDelUsuario" accept="image/*" >
                                <button type="submit" id="btnEnviarImg" class="changeImageUser changeImageUserMove"> Guardar </button>
                            </form>
                    </div>
                        
                    <div class="btnUsuarioControl">
                            <form action="./Login_register/cerrar-sesion.php" method="POST" class="formCerrarSesión" >
                                <button type="submit" id="btnCerrarSesión" class="changeImageUser"> Cerrar Sesión </button>
                            </form>
                            <button id="changebtnImg" class="changeImageUser updateImageUser">Cambiar foto</button>
                    </div>

                        <p><?php echo $nombre ?></p>
                        
                        <div class="info-text">
                            <p> <small> Miembro desde 2023 </small> </p>
                            <p>Suscripción activa hasta: </p>
                            <p class="sepr-border" >28/10/2024</p>
                        </div>

                        <a href="./Progreso/html/Progreso-Completo.php"> <button class="botonVerProgreso" >Ver progreso</button> </a>

                    </div>

                    <div class="skills">

                        <div class="titleProgreso">
                            <p>Progreso actual de las rutinas </p>
                        </div>
                        
                        <div class="progresoEjercicio containProgreso ">
                            <p>Ejercicios</p>

                            <div class="partesProgreso">
                                <p>Avance diario </p>
                                <div class="barEjercicio"></div>
                                <div class="barEjercicioAumento"></div>
                            </div>

                            <div class="partesProgreso">
                                <p>Avance semanal </p>
                                <div class="barEjercicio barEjercicio2 "></div>
                                <div class="barEjercicioAumento"></div>
                            </div>

                            <div class="partesProgreso">
                                <p> Porcentaje Actual. </p>
                                <div class="barEjercicio barEjercicioLast"></div>
                                <div class="barEjercicioAumento"></div>
                            </div>                            

                        </div>

                        <div class="progresoDieta containProgreso ">
                            <p>Dietas</p>

                            <div class="partesProgreso">
                                <p>Consumos diarios </p>
                                <div class="barDieta barDieta1"></div>
                            </div>

                            <div class="partesProgreso">
                                <p>Consumos semanales</p>
                                <div class="barDieta barDieta2 "></div>
                            </div>

                            <div class="partesProgreso">
                                <p>Progreso completado </p>
                                <div class="barDieta barDieta3 "></div>
                            </div>                            

                        </div>

                    </div>
                   
                </div>
              
            </div>
        </div>


        <!-- <iframe class="video positionVideo" width="560" height="315" src="https://www.youtube.com/embed/EWb4pKu-bkc" title="YouTube video player"  rel=0&amp;controls=0&amp;showinfo=0″ frameborder=»0″ autoplay muted loop></iframe> -->


    <!-- Prueba Asistente virtual -->

    <div class="asimov">
    
            <div class="contAsimov" id="initAsimov">
                <img src="./imagenes/asimov-IA-img/asimov-img.svg">
            </div>

            <h2 id="respAsimov" class="respAsimov"> </h2>

    </div>





<!-- Comienzo footer -->
    <footer class="containerfooter objDisplay footerPageInitialVip" id="footerDieta" >
        <div class="item-1">
            <div class="imagen">
                <figure>
                    <a href="Page-Initial.php">
                        <img class="ImagenFooterOpccion2" src="../nutrifit_living/imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                    </a>
                </figure>
            </div>   
            <a class="item-2" href="Termsycondiciones.php">TERMINOS Y CONDICIONES</a>
        </div>

            <div class="item-3">
                <small>&copy; 2022  - Todos los Derechos Reservados.</small>
            </div>
    </footer>


      
<script> 

// Añadir imagen al usuario

const  imagenToSrc = document.getElementById('imgChoosen'),
   inputFile = document.getElementById('inputFile'),
   textAOcultar = document.getElementById('textAnadir');
   btnEnviarImg = document.getElementById('btnEnviarImg');


const seleccionarImagen = () => {
   inputFile.style.display = "inline";
   imagenToSrc.style.display="none";
   textAOcultar.style.display="inline";
}

// Condicional principal

if ( imagenToSrc.src.length === 81 ) {

   seleccionarImagen();

} else {

   inputFile.style.display = "none";
   imagenToSrc.style.display="inline";
   textAOcultar.style.display="none";
   btnEnviarImg.style.display="none";

}


</script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script src="./js/asimov-ia-config.js"></script>

    <!-- <script src="whatss.js"></script> -->
    <script src="Prueba7/java.js"></script>
    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script src="./js/ventana-emergente-user.js"></script>
    
</body>
</html>