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
                                <img src="imagenes/img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="imagenes/img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="imagenes/img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="imagenes/img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="review-content">
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Review End -->



    <!-- FAQs Start -->
    <div class="faq faqIntermedium" id="faq">
        <div class="container">

            <h2 class="faqTitle faqTitleIntermedium" >Preguntas Frecuentes</h2>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div id="accordion" class="visualizerPage" >
                        <div class="card">
                            <div class="card-header">
                                <span>1</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor ac purus tincidunt congue et eget mauris. Pellentesque porta nisi a eros sodales pretium. Mauris vel metus ex. Ut scelerisque odio ut orci vulputate auctor
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>2</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                    Donec suscipit faucibus porta integer bibendum?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor ac purus tincidunt congue et eget mauris. Pellentesque porta nisi a eros sodales pretium. Mauris vel metus ex. Ut scelerisque odio ut orci vulputate auctor
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>3</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                    Nam metus odio, pulvinar nec ex vel?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor ac purus tincidunt congue et eget mauris. Pellentesque porta nisi a eros sodales pretium. Mauris vel metus ex. Ut scelerisque odio ut orci vulputate auctor
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>4</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                    Vestibulum eget mauris varius, vehicula diam ut?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor ac purus tincidunt congue et eget mauris. Pellentesque porta nisi a eros sodales pretium. Mauris vel metus ex. Ut scelerisque odio ut orci vulputate auctor
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>5</span>
                                <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                    Nullam viverra at quam nec pretium?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor ac purus tincidunt congue et eget mauris. Pellentesque porta nisi a eros sodales pretium. Mauris vel metus ex. Ut scelerisque odio ut orci vulputate auctor
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
                            <p> <small> Miembro desde 2017 </small> </p>
                            <p>Suscripción activa hasta: </p>
                            <p class="sepr-border" >28/10/2022</p>
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
                                <p>Entrenamiento diario </p>
                                <div class="barEjercicio"></div>
                                <div class="barEjercicioAumento"></div>
                            </div>

                            <div class="partesProgreso">
                                <p>Entrenamiento semanal </p>
                                <div class="barEjercicio barEjercicio2 "></div>
                                <div class="barEjercicioAumento"></div>
                            </div>

                            <div class="partesProgreso">
                                <p>Entrenamiento completado </p>
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


    <footer class="containerfooter objDisplay footerPageInitialIntermedium" id="footerDieta" >
        <div class="item-1">
            <div class="imagen">
                <figure>
                    <a href="Page-Initial.php">
                        <img class="ImagenFooterOpccion2" src="../nutrifit_living/imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                    </a>
                </figure>
            </div>   
            <a class="item-2" href="../nutrifit living/Termsycondiciones.php">TERMINOS Y CONDICIONES</a>
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

    <!-- <script src="whatss.js"></script> -->
    <script src="Prueba7/java.js"></script>
    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script src="./js/ventana-emergente-user.js"></script>
    
</body>
</html>