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
                    <li><a href="Desayunos.php"><p class="nombreDEpaginadondeseencuantra">Desayunos</p></a>
                    <ul class="submenure">
                    <li><a href="Almuerzos.php"> Almuerzos</a></li>
                    <li><a href="Bebidas.php">   Bebidas</a></li>
                    <li><a href="Cenas.php">     Cenas</a></li>
                    <li><a href="keto.php">      keto</a></li>
                    <li><a href="recetarios.php">   Postres</a></li>
                    <li><a href="Snaks.php">     Snaks</a></li>
                </ul>
                </ul>
            </nav>
        </div> 

        <div id="container" >

            <div class="contenerya" id="displayPreparation" >

                <div class="card recetario" id="recetas">
                    <div class="face front">
                        <img src="https://www.elmueble.com/medio/2020/07/17/crumble-de-manzana-00426667-o_02624b97_1200x1485.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3 id="imgChangeTitle" >Smoothie de Bayas de Goji</h3>
                    </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p id="textBebJugoVerde" >
                    
                        • 2 naranjas
                        <br> 
                        • 1 trocito de raíz de cúrcuma (como una uña del dedo pulgar)
                        <br> 
                        • 3 cucharadas de bayas de goji
                        <br>
                        • 1 trocito de jengibre
                        <br>
                        • Media taza de agua
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://www.elmueble.com/medio/2022/07/06/muesli-de-avena-con-arandanos_00000000_230215171304_900x1200.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Muesli de Avena con Arandanos</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        • 160 gramos de copos de avena gruesos
                        <br>
                        • 1 manzana tipo Golden, 1 plátano, 1 pera
                        <br>
                        • 30 gramos de nueces
                        <br>
                        • 500 ml de leche de coco (o yogur de soja)
                        <br>
                        • 30 gramos de arándanos rojos deshidratados
                        <br>
                        • 2 cucharaditas de concentrado de manzana
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/01/14/pudin-de-semillas-de-chia_00000000_230215171258_926x1200.jpg" alt="gansito">
                <h3>Pudin de Semillas de Chia</h3>
            </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Virutas de coco sin azúcar
                        <br>
                        • 4 cucharadas de semillas de chía
                        <br>
                        • ¾ de taza de bebida vegetal
                        <br>
                        • Granola crudivegana casera o frutos secos
                        <br>
                        • 1 cucharadita de canela
                        <br>
                        • 2 peras, Canela, Sal marina sin refinar
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/07/06/compota-de-manzana-con-queso-fresco_00000000_230215171253_1200x1200.jpg" alt="crepas">
                <h3>Compota de Manzana</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 4 manzanas golden
                        <br>
                        • 3 naranjas
                        <br>
                        • 300 gramos de queso fresco batido 
                        <br>
                        • 4 cucharadas de yogur natural desnatado
                        <br>
                        • 1 cucharada de azúcar
                        <br>
                        • Una pizca de canela en polvo
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/07/19/yogur-de-coco-00465571_5921006f_1200x1576.jpg" alt="flan">
                <h3>Yogur de Coco</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Pulpar de 3 cocos jóvenes
                        <br>
                        • 1 taza de agua de coco fresca, reservada de los cocos frescos
                        <br>
                        • 1/8 de cucharadita de probióticos
                        <br>
                        • 1 granada
                        <br>
                        • 1 mango
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/01/14/sandwich-de-tofu-de-finas-hierbas_00000000_230215171311_900x1200.jpg" alt="Mermelada">
                <h3>Sandwich de Tofu de Finas Hierbas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Pan de molde de espelta                       
                        <br>
                        • Tofu de finas hierbas
                        <br>
                        • Yogur
                        <br>
                        • Orejones de albaricoque
                        <br>
                        • Pipas de calabaza
                        <br>
                        • Rúcula
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/07/19/yogur-de-anarcardos-00465572_1aa5f38b_1200x1645.jpg" alt="Mamut saludable">
                <h3>Yogur con Base de Anacardos</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 2,5 tazas de anacardos, activar durante 8 horas y lavar
                        <br>
                        • 1 taza de rejuvelac o germinado de trigo
                        <br>
                        • El zumo de un limón
                        <br>
                        • ¼ de cucharadita de sal marina o del Himalaya
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/07/06/bolitas-de-kiwi-y-queso-fresco-con-chocolate_00000000_230215171349_1200x1200.jpg" alt="Red Velvet Pancakes">
                <h3>Bolitas de Kiwi y Queso Fresco con Chocolate</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 4 kiwis                       
                        <br>
                        • 250 gramos de queso de Burgos
                        <br>
                        • 75 gramos de chocolate fondant
                        <br>
                        • 1 nuez de mantequilla
                        <br>
                        • 50 ml de nata líquida
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/07/19/galletas-00456222_13b4a573_1200x1528.jpg" alt="Pay de plátano">
                <h3>Galletas de Chocolate</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 200 gramos de trigo sarraceno
                        <br>
                        • 100 gramos de pipas de girasol
                        <br>
                        • 1 cucharada de granos de café en polvo
                        <br>
                        • 1 cucharada de tahini
                        <br>
                        • 3 cucharadas de azúcar de coco
                        <br>
                        • semillas de cacao troceadas
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/01/14/smoothy-antioxidante_00000000_230215171422_1200x804.jpg" alt="pie de limon">
                <h3>Smoothy Antioxidante</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 1 dátil
                        <br>
                        • 100 gramos de frutos del bosque (frescos o congelados)
                        <br>
                        • 1/2 plátano
                        <br>
                        • 30 ml de agua
                        <br>
                        • 30 ml de leche de coco
                        <br>
                        • 1/4 de taza de hielo
                        <br>
                        • 30 gramos de granola
                        <br>
                        • 1 cucharadita de pipas
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/07/17/tostada-de-tortilla-y-salmon-00385908_531990d7_1200x1600.jpg" alt="Negrito en versión saludable">
                <h3>Tostada de Tortilla y Salmon</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 4 rebanadas de pan de hogaza
                        <br>
                        • 1 tarrina de queso blanco para untar a las finas hierbas
                        <br>
                        • 100 gramos de trucha ahumada
                        <br>
                        • 4 huevos
                        <br>
                        • Aceite de oliva, Sal
                        <br>
                        • Unos tallos de cebollino
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/01/14/macedonia-de-citricos-con-salsa-de-yogur_00000000_230215171454_1143x1080.jpg" alt="CHEESE CAKE DE MANGO">
                <h3>Macedonia de Citricos con Salsa de Yogur</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        • 1 naranja
                        <br>
                        • 3 mandarinas
                        <br>
                        • 1 pomelo
                        <br>
                        • 2 yogures
                        <br>
                        • 40 gramos de pistachos       
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
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
        <li class="ingredientesLi" > <input type="checkbox"> Cargando...</li>
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
    <script src="preparation-desayunos.js"></script>


    </body>
    
</html>