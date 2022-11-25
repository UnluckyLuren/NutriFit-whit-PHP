<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrifit Living</title>
    <meta name="Description" content="Bienvenido a una vida mas saludable">
    <link  rel="icon" href="imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    
<style>
  

  p{
    font-family: 'DM Serif Text', serif;
  }
  

</style>    

    <link rel="stylesheet" href="CSS/styleheader.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/Productos-style-extra.css">
    <link rel="stylesheet" href="CSS/lugares-styles.css">
    <link rel="stylesheet" href="CSS/responsive.css">

</head>
<body>
    <!-- <svg class="rec" width="1500" height="150"  > 
        <rect x="2" y="2" width="1515" height="100" rx="10" ry="10" lx="10" 
         style="fill: #a5f55a; opacity:0.6; stroke-width:5" />
    </svg>
    <div class="Menu">
        <a  href="https://www.instagram.com/nutrifit__living/?hl=es" target="ba_blank"> <img  class="im" src="/imagenes/logo11_preview_rev_1.png" alt="logo nutrifit living" ></a>
        <a class="button" href="/nutrifit living/dieta.php"  >Servicios</a>
        <a class="button2" href="/nutrifit living/recetarios/recetarios.php" >Recetarios</a>
        <a class="button4" href="/nutrifit living/index (1).php">Inicio</a>
    </div> -->
    <header class="header ">

        <div class="userMenuDiv" >
            <a href="#"><img src="imagenes/Gato enojado.webp" id="open"  class="userMenuImg"></a>
            <p>Iván Jesus Rodríguez</p>
        </div>

        <nav class="nav">
            <a href="#" class="logo ">
                <img src="imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>

            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item  "><a href="Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " ><a href="productos.php" class="nav-menu-link nav-link">Productos</a></li>
                <li class="nav-menu-item"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item "><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>
        </nav>
    </header>
    
        <!-- menu desplegable -->
       
        <br><br><br><br><br>
<div class="container">
    <nav class="menu">
        <ul>
            <li><a href="lugares.php"><p class="nombreDEpaginadondeseencuantra"> ▼     Lugares Recomendados</p></a>
            <ul class="submenu"></li>
            <li><a href="dieta.php">Dietas</a></li>
            <li><a href="equivalencias.php"> Mapa de equivalencias</a></li>
            <li><a href="productos.php">Productos recomendados</a></li>
        </ul>
        </ul>
    </nav>
</div>

<pre class="titulo_de_servicios">Lugares recomendados</pre>
    <div class="contenedorservicios" id="containerLugares" >
        <div class="fexcajas"><a href="#"><img class="imga"  src="imagenes/Azucardecoco.jpg" alt="Azucar de coco"></a></a></div>
        <div class="fexcajas"><a href="#" ><img class="imga" src="imagenes/Divinoverde.jpg"  alt="Divino Verde"></a></a></div>
        <div class="fexcajas"><a href="#" ><img class="imga" src="imagenes/Dristritosaludable.jpg" alt="Distrito Saludable"></a></a></div>
        <div class="fexcajas"><a href="#" ><img class="imga" src="imagenes/Bamb£.jpg" alt="Bambú"></a></a></div>
        <div class="fexcajas"><a href="#" ><img class="imga" src="imagenes/Nutriclinicbar.jpg" alt="Nutrilab clinic"></a></a></div>
        <div class="fexcajas"><a href="#" ><img class="imga" src="imagenes/Sietetallos.jpg" alt="Siete Tallos"></a></a></div>
    </div>


    <div class="infoProductMap disNone" id="containerMap" >
        <div class="disNone" id="mapDirectionLugares" >
            <h2 class="titleInfoProduct" >Lugares Recomendados</h2> <br>
            <button id="close" ><img src="imagenes/x.png"></button>
            <div id="mapIframe"></div>
           
            <div class="infoPrincipalProduct">
                <h2 id="titleProductSelect"></h2>
                <br>
                <img src="imagenes/Azucardecoco.jpg" class="imgProductSelect" id="imgProductSelect" alt="imgProducto">
                <br><br>
                <h4 id="leyendaContent" ></h4>
                <br>
                <p id="serviciosContent" ></p>
                <br>
                <p id="telefonoContent" ></p>
                <br>
                <p id="horarioContent" ></p>
            </div>
        </div>
    </div>



    <footer class="containerfooter">
        <div class="item-1">
            <div class="imagen">
                <figure>
                    <a href="Page-Initial.php">
                        <img class="imagenfooter" src="imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" width="40%">
                    </a>
                </figure>
            </div>
            
               
       <a class="item-2" href="Termsycondiciones.php">TERMINOS Y CONDICIONES</a>
    
          
        </div>
        <div class="item-3">
            <small>&copy; 2022  - Todos los Derechos Reservados.</small>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="Prueba7/java.js"></script>
    <script src="whatss.js"></script>
    <script src="FinalPrueba/java.js"></script>
    <script src="./js/maps-sites.js"></script>


</body>
</html>