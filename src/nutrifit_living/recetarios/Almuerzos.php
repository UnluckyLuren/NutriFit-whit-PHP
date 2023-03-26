<?php


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login_register/index.html");
    exit;
}

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];


if ($privilegio == 0) {
    header("location: ../Page-Initial.html");
} 

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nutrifit Living</title>
        <meta name="Description" content="Bienvenido a una vida mas saludable">
        <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../CSS/responsive.css">
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/style_cards.css">    
    <link rel="stylesheet" href="../CSS/recetario.css">

  <style>
    Body{
     background: url(../imagenes/Fondorece.jpg) 
     no-repeat center center fixed! important; 
     background-size: cover;
     position: relative;
     }
     p{
        font-family: 'DM Serif Text', serif;
     }
     Body{
     background: url(../imagenes/Fondorece.jpg) 
     no-repeat center center fixed;
     background-size: cover;
     position: relative;
     }
  </style>
  

    </head>
    <body>
        
        <header class="header ">

            <div class="userMenuDiv" >
                <a href="#"><img src="<?php echo ".".$imageUser; ?>" id="open"  class="userMenuImg"></a>
                <p> <?php echo $nombre ?> </p>
            </div>

            <nav class="nav">
                <a href="#" class="logo ">
                    <img src="../imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
                </a>
                <button class="toggle" aria-label="Abrir menú">
                    <i class="fa-solid fa-bars"></i>
    
                </button>
                <ul class="nav-menu ">
                    <li class="nav-menu-item  "><a href="../Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                    <li class="nav-menu-item " ><a href="../productos.php" class="nav-menu-link nav-link">Productos</a></li>
                    <li class="nav-menu-item"><a href="../dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                    <li class="nav-menu-item "><a href="../recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
                </ul>
            </nav>
        </header>
       
       <!-- menu desplegable -->
       
        <div class="containerre">
            <nav class="menure">
                <ul>
                    <li><a href="Almuerzos.php"><p class="nombreDEpaginadondeseencuantra">Almuerzos</p></a>
                    <ul class="submenure">
                    <li><a href="Bebidas.php">   Bebidas</a></li>
                    <li><a href="Cenas.php">     Cenas</a></li>
                    <li><a href="Desayunos.php"> Desayunos</a></li>
                    <li><a href="keto.php">      keto</a></li>
                    <li><a href="recetarios.php">   Postres</a></li>
                    <li><a href="Snaks.php">     Snaks</a></li>
                </ul>
            </nav>
        </div> 

        <div id="container" >

            <div class="contenerya" id="displayPreparation" >

                <div class="card recetario" id="recetas">
                    <div class="face front">
                        <img src="https://content-cocina.lecturas.com/medio/2018/07/19/abanico-de-calabacines-al-parmesano_97bd56be_800x800.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3 id="imgChangeTitle" >Abanico de Calabacineso</h3>
                    </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p id="textBebJugoVerde" >
                    
                        • 4 calabacines pequeños
                        <br> 
                        • 4 cucharadas de queso parmesano rallado
                        <br> 
                        • 2 cucharadas de aceite de oliva
                        <br>
                        • Pimienta molida
                        <br>
                        • Sal
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-crema-de-zanahoria-00388402_d647e4db_901x1200.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Crema de Zanahoria</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        • 1/2 kg de zanahorias
                        <br>
                        • 1 cebolla
                        <br>
                        • 60g de mantequilla
                        <br>
                        • 1 cuchara de harina
                        <br>
                        • sal, pimienta
                        <br>
                        • 100ml de nata liquida
                        <br>
                        •50g de queso parmesano
                        <br>
                        •20g de piñones
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-cestitas-de-ensalada-de-marisco-00490291_b779e54c_800x1200.jpg" alt="gansito">
                <h3>Cestitas de Ensalada</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 12 obleas de empanadilla,
                        <br>
                        • 12 tomatitos
                        <br>
                        • 12 mejillones
                        <br>
                        • 12 surimis
                        <br>
                        • Hojas de ensalada
                        <br>
                        • Aceite y sal
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://cdn7.kiwilimon.com/recetaimagen/38690/49716.jpg" alt="crepas">
                <h3>Ensalada de Atun</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 200 g de arroz integral cocido
                        <br>
                        • 100 g de pimiento cortado en cubos
                        <br>
                        • 8 aceitunas sin pepa
                        <br>
                        • 300 g de tomates cortados en cubos chicos
                        <br>
                        • Perejil picado
                        <br>
                        • 1 lata de atún Primor
                        <br>
                        • 1 huevo duro 
                        <br>
                        • Vinagreta de Mostaza y Pimienta AlaCena
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://d36fw6y2wq3bat.cloudfront.net/recipes/pasta-cremosa-con-pollo-y-brocoli/900/pasta-cremosa-con-pollo-y-brocoli_version_1651568362.png" alt="flan">
                <h3>Canutos con pechuga</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        - 500 gr de Canuto chico Don Vittorio
                        <br>
                        - 1/2 kg de pechuga de pavo trozada (500 gr)
                        <br>
                        - 1/2 cebolla (75 gr)
                        <br>
                        - 150 gr de brócoli
                        <br>
                        - 3 dientes de ajo molidos (6 gr)
                        <br>
                        - 1 cdita de esencia de vainilla
                        <br>
                        - Sal, oregano
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.cucinare.tv/wp-content/uploads/2018/10/18-09-27-Ensalada.jpg" alt="Mermelada">
                <h3>Ensalada de pollo</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 2 mandarinas (200 gr)
                        <br>
                        • 1/2 taza de apio picado (50 gr)
                        <br>
                        • 1/2 cda de ajonjolí (7 gr)
                        <br>
                        • 1 filete de pechuga (150 gr)
                        <br>
                        • 2 cdas de miel de abeja (60 gr)
                        <br>
                        • Sal y pimienta al gusto
                        <br>
                        • 3 cdas de yogur natural (o leche evaporada) (90 gr)
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://cdn7.recetasdeescandalo.com/wp-content/uploads/2018/09/Receta-de-ensalada-de-arroz-y-atun-con-tortilla-francesa.-Facil-y-muy-rica.jpg.webp" alt="Mamut saludable">
                <h3>Rica Ensalada de Atún</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 3 latas de lomitos de atún en agua escurridas
                        <br>
                        • 1 pimentón rojo mediano picado
                        <br>
                        • 1/2 cebolla roja finamente picada
                        <br>
                        • 1 pepino picado en cubitos
                        <br>
                        • 1/4 taza de aceite de ajonjolí
                        <br>
                        • El zumo de una lima
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://i.blogs.es/6d8bf0/sartenada-rec/1024_2000.jpg" alt="Red Velvet Pancakes">
                <h3>Sartenada de Calabacín</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 calabacín grande
                        <br>
                        • 100 g de queso
                        <br>
                        • 50 g de jamón serrano muy picado
                        <br>
                        • 50g de tomillo
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://i.blogs.es/c090e8/cloud-rec/1366_2000.jpg" alt="Pay de plátano">
                <h3>Pan Nube</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 3 huevos
                        <br>
                        • 100 g de queso crema de untar
                        <br>
                        • 1/4 cucharadita de bicarbonato sódico
                        <br>
                        
                        <br>
                        
                        <br>
                        
                        <br>
                        
                        <br>
                         
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/04/10/almuerzo-saludable-alcachofas-con-apio-y-manzanas-al-aceite-de-setas-00393726_b2e0a1b6_800x1200.jpg" alt="pie de limon">
                <h3>Alcachofas con Apio</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                • 100 g de ensaladas variadas
                <br>
                • 2 pencas de apio
                <br>
                • 2 alcachofas
                <br>
                • 1 manzana
                <br>
                • 1 bulbo de hinojo
                <br>
                • 100 g de setas (frescas si es temporada o congeladas)
                <br>
                • 10 g de setas secas
                <br>
                • Aceite de oliva, sal y vinagre  
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://alicorp-prod-medias.s3.amazonaws.com/static-img/files/2020-09/don-vittorio/recetas-con-pollo-y-pavo/receta-de-canutos-con-pechuga-de-pavo-don-vittorio.png" alt="Negrito en versión saludable">
                <h3>Canutos con pechuga</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                • 500 gr de Canuto chico Don Vittorio
                <br>
                • ½ kg de pechuga de pavo trozada (500 gr)
                <br>
                • ½ cebolla (75 gr)
                <br>
                • 150 gr de brócoli
                <br>
                • 3 dientes de ajo molidos (6 gr)
                <br>
                • Sal, Orégano                
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.eatperu.com/wp-content/uploads/2020/06/olluquitos-de-carne-recipe.jpeg" alt="CHEESE CAKE DE MANGO">
                <h3>Olluquito con Carne</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                • ¼ de kg de carne de res o charqui (250 g)
                <br>
                • ½ taza de cebolla (100 g)
                <br>
                • 2 dientes de ajo picados (4 g)
                <br>
                • 2 cdas. de ají panca molido (30 g)
                <br>
                • 1 kg de ollucos picados en tiras
                <br>
                • 3 cdas.de aceite Cocinero (45 ml)                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
        </div>
</div>

    
<div class="recetarioPreparation">

<div class="videoIngredientes disNone" id="containerVideoIngredientes">

          <div class="cerrarMenu" > <button id="closePreparation">Cerrar</button> <h1 id="nameReceta" >Crepas</h1> </div>

    <iframe id="videoPreparation" width="560" height="315" src="https://www.youtube.com/embed/xzLqzwvXh_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <h2>Ingredientes</h2>

    <ul class="listIngredientes" id="listIngredientes">
        <li class="ingredientesLi" > <input type="checkbox">...</li>
        <li class="ingredientesLi" > <input type="checkbox">...</li>
        <li class="ingredientesLi" > <input type="checkbox">...</li>
        <li class="ingredientesLi" > <input type="checkbox">...</li>
        <li class="ingredientesLi" > <input type="checkbox">...</li>
        <li class="ingredientesLi" > <input type="checkbox">...</li>
    </ul> 

</div>

<div class="preparationInfo " id="containerPreparation" >

        <h2 id="titlePreparation" >Preparación</h2>

        <p id="textPreparation" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea a, qui similique ipsum tenetur quia sapiente porro hic totam dolor molestiae, provident distinctio voluptate aspernatur. Alias libero dolores quam.</p>

        <img id="imgReceta" src="../imagenes/Hot Cakes hulk.jpg">
    </div>

</div>



<footer class="containerfooter footerRecetario">
    <div class="item-1">
        <div class="imagen">
            <figure>
                <a href="../Page-Initial.html">
                    <img class="imagenfooter" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                </a>

            </figure>
        </div>
        
           
   <a class="item-2" href="../Termsycondiciones.html">TERMINOS Y CONDICIONES</a>

      
    </div>
    <div class="item-3">
        <small>&copy; 2022  - Todos los Derechos Reservados.</small>
    </div>
</footer>

    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="../Prueba7/java.js"></script>
    <script src="../whatss.js"></script>
    <!-- <script src="../js/preparation-recetas.js"></script> -->
    <script src="preparation-almuerzos.js"></script>


    </body>
    
</html>