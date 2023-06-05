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
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./CSS/styleheader.css">
    <!-- <link rel="stylesheet" href="./CSS/style-presentation.css"> -->
    <!-- Chat -->
    <link rel="stylesheet" href="./CSS/styles.css">    
    <!-- <link rel="stylesheet" href="CSS/responsive.css"> -->
    <link rel="stylesheet" href="./CSS/Page-initial-responsive.css"> 
<!-- --------------------------------------------------------------------------------------------- -->
    <!-- Estructura -->
    <link rel="stylesheet" href="./CSS/styles-InicioVIP.css">
    <!-- Diseño Arriba y Abajo -->
    <link rel="stylesheet" href="./CSS/styles-Inicio2VIP.css">
<!-- --------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="./CSS/styles-CarruVIP.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="./CSS/IA-lateral.css">

    <Style>
/* 
    ESTA PAGINA FUE HECHA EN 2 AÑOS

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



.imagencardrec{
    width: 25.9em;
    height: 32em;
}

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
                <li class="nav-menu-item navMenuLink"><a href="productos.php" class="nav-menu-link nav-link">productos</a></li>
                <li class="nav-menu-item navMenuLink"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item navMenuLink"><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>

        </nav>
    </header>

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left1"></i>
                <h2 class="titlePageInterm" >Opiniones Clientes</h2>
                <ul class="carousel1">
                  <li class="card1">
                    <div class="img"><img src="./imagenes/imagenes_vip/carrusel-img-4.png" alt="img" draggable="false"></div><!--carrusel-img-5.png-->
                    <h2>Claudia Pearson</h2>
                    <span>Panadera</span>
                    <p class="separador">¡Este sitio de dietas es increíble!</p>
                  </li>
                  <li class="card1">
                    <div class="img"><img src="./imagenes/imagenes_vip/carrusel-img-5.png" alt="img" draggable="false"></div>
                    <h2>Monica Brauers</h2>
                    <span>Entrenadora</span>
                    <p class="separador">Me ha inspirado a probar nuevos alimentos y recetas.</p>
                  </li>
                  <li class="card1">
                    <div class="img"><img src="./imagenes/imagenes_vip/carrusel-img-1.png" alt="img" draggable="false"></div>
                    <h2>Carlos French</h2>
                    <span>Emprendedor</span>
                    <p class="separador">Me sorprendió gratamente este sitio de dietas.</p>
                  </li>
                  <li class="card1">
                    <div class="img"><img src="./imagenes/imagenes_vip/carrusel-img-2.png" alt="img" draggable="false"></div>
                    <h2>Mónica Rosales</h2>
                    <span>Veterinaria</span>
                    <p class="separador">¡Este sitio de dietas es increíble!</p>
                  </li>
                  <li class="card1">
                    <div class="img"><img src="./imagenes/imagenes_vip/carrusel-img-3.png" alt="img" draggable="false"></div>
                    <h2>Karen Horton</h2>
                    <span>Enfermera</span>
                    <p class="separador">!Me encanta¡</p>
                  </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right1"></i>
              </div>
        </div>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestros Nutriólogos</h1>
                <p>
                    Nuestros nutriólogos le ayudaran a seguir su plan deseado.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./imagenes/imagenes_vip/Medicos/Doc1.jpg" class="rounded-circle img-fluid border">
                <h5 class="text-center mt-3 mb-3">Dr. Rivas Esparza</h5>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./imagenes/imagenes_vip/Medicos/Doc2.jpg" class="rounded-circle img-fluid border">
                <h2 class="h5 text-center mt-3 mb-3">Dr. Revilla Herrera</h2>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="./imagenes/imagenes_vip/Medicos/Doc3.jpg" class="rounded-circle img-fluid border">
                <h2 class="h5 text-center mt-3 mb-3">Dr. Alberto Ruíz</h2>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Recetas Recomendadas</h1>
                    <p>
                        De acuerdo a tu infomación dada se te recomiendan este tipo de recetas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./imagenes/imagenes_vip/nuevas imagenes/ejemplocomida1.jpg" class="imagencardrec" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="h2 text-decoration-none text-dark">Alcachofas con Apio</a>
                            <p class="card-text">
                                Ingredientes:
                                <br>
                                • 100 g de ensaladas variadas
                                <br>
                                • 2 pencas de apio
                                <br>
                                • 2 alcachofas
                                <br>
                                • 1 manzana
                                <br>
                                • 1 bulbo de hinojo
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./imagenes/imagenes_vip/nuevas imagenes/ejemplocomida2.jpg" class="imagencardrec" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="h2 text-decoration-none text-dark">Pollo a la Planca con Lima</a>
                            <p class="card-text">
                                Ingredientes:
                                <br>
                                • 4 filetes de pechuga de pollo
                                <br> 
                                • 2 dientes de ajo
                                <br> 
                                • 50 g de germinados de alfalfa (opcional)
                                <br>
                                • Unas hojas de ensalada variada
                                <br>
                                • Sal, Pimienta negra, aceite de oliva
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./imagenes/imagenes_vip/nuevas imagenes/ejemplocomida3.jpg" class="imagencardrec" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="h2 text-decoration-none text-dark">Sandwich de Tofu de Finas Hierbas</a>
                            <p class="card-text">
                                Ingredientes:
                                <br>
                                • Pan de molde de espelta                       
                                <br>
                                • Tofu de finas hierbas
                                <br>
                                • Yogur
                                <br>
                                • Orejones de albaricoque
                                <br>
                                • Pipas de calabaza
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- Ventana emergente -->
        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container" id="modal_container">
            <div class="modalGeneral modalVentInitial">
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


<!-- Prueba Asistente virtual -->

    <div class="asimov">
    
            <div class="contAsimov" id="initAsimov">
                <img class="inteligencia" id="IA-toggleButton" src="./imagenes/imagenes_vip/chatbot.gif">
            </div>

            <!-- <h2 class="respAsimov"> </h2> -->
            <div class="IA-container IA-hidden">
                <div class="IA-phone-chat">
                  <div class="IA-sidebar">
                    <h4>Preguntas frecuentes:</h4>
                    <ul class="IA-ul">
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('cual es tu funcion')">Cúal es tú función?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('donde conseguir una dieta')">Dónde conseguir una dieta?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('como puedo consultar mi progreso')">Cómo puedo consultar mi progreso?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('como puedo contactar a un nutriologo')">Cómo puedo contactar a un nutriólogo?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('como utilizar nutrifit living express')">Cómo utilizar nutrifit living express?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('como puedo tener envios gratis en nutrifit express')">Cómo puedo tener envios gratis en nutrifit express?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('que beneficios tiene cada cuenta de nutrifit living')">Qué beneficios tiene cada cuenta de nutrifit living?</a>
                        </center>
                      </li>
                      <li class="IA-li">
                        <center>
                          <a class="IA-a" href="#" onclick="selectOption('como cambiar la imagen de mi perfil')">Cómo cambiar la imágen de mi perfil?</a>
                        </center>
                      </li>
                    </ul>
                    <div class="IA-bottonytexto">
                      <h4>Clic para hablar:</h3>
                      <button class="IA-chat-button" onclick="startListening()">  
                        <img src="./imagenes/imagenes_vip/ia (1).gif" alt="">
                      </button>
                    </div>
                  </div>
                  <div class="IA-chat" id="IA-chat"></div>
                </div>
              </div>
    </div>


<!-- Footer -->


    <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="./imagenes/Nuevo proyecto.png" alt="Logo NutriFit ">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos Nutrifit, la herramienta que complementará!!! tu vida.</p>
                <p>Especialistas 100% capacitados para crear mejores estilos de vida.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>NutriFit Living</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>



<!-- Scripts y final del documento -->

      
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
    <script src="./js/vip/asimov-ia-config.js"></script>
    <script src="./js/vip/script-inicioCarruVIP.js" defer></script>
    <script src="Prueba7/java.js"></script>
    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script src="./js/ventana-emergente-user.js"></script>
    
</body>
</html>