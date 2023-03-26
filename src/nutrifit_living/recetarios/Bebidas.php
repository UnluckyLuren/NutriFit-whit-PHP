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
                    <li><a href="Bebidas.php"><p class="nombreDEpaginadondeseencuantra">Bebidas</p></a>
                    <ul class="submenure">
                    <li><a href="Almuerzos.php">   Almuerzos</a></li>
                    <li><a href="Cenas.php">       Cenas</a></li>
                    <li><a href="Desayunos.php">   Desayunos</a></li>
                    <li><a href="keto.php">        keto</a></li>
                    <li><a href="recetarios.php">     Postres</a></li> 
                    <li><a href="Snaks.php">       Snaks</a></li>                   
                </ul>
                </ul>
            </nav>
        </div> 

        <div id="container" >

            <div class="contenerya" id="displayPreparation" >

                <div class="card recetario" id="recetas">
                    <div class="face front">
                        <img src="https://www.elmueble.com/medio/2020/07/17/smoothie-de-bayas-de-goji-00459130_b7d2a056_1200x1830.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3>Smoothie de Bayas de Goji</h3>
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
                        • 1 trocito de jengibre (una uña del dedo pulgar, opcional)
                        <br>
                        • Media taza de agua (más, si lo deseas más líquido)
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://www.elmueble.com/medio/2020/07/19/yogur-de-anarcardos-00465572_1aa5f38b_1200x1645.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Yogur con Anacardos</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        • 2,5 tazas de anacardos, activar durante 8 horas y lavar
                        <br>
                        • 1 taza de rejuvelac o germinado de trigo
                        <br>
                        • El zumo de un limón
                        <br>
                        • ¼ de cucharadita de sal marina o del Himalaya

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/07/17/smoothie-de-acai-00439452_b8df7594_1200x1800.jpg" alt="gansito">
                <h3>Smoothie de Acai</h3>
            </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 120 ml de leche de almendra
                        <br>
                        • 1 plátano, 5 fresas
                        <br>
                        • 4 cucharadas de açaí en polvo
                        <br>
                        • Fresas y kiwis laminadas
                        <br>
                        • Semillas de cáñamo    

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2020/01/14/batido-verde-de-uvas-acelgas-y-lechuga_00000000_230215171434_938x1199.jpg" alt="crepas">
                <h3>Batido Verde de Uvas, Acelgas y Lechuga</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 250 gramos de uvas rojas
                        <br>
                        • 1 cucharadita de jengibre en polvo
                        <br>
                        • 100 gramos de acelgas
                        <br>
                        • 100 gramos de lechuga
                        <br>
                        • 1 cucharada de semillas de lino
                        <br>
                        • 1 cucharadita de cúrcuma en polvo
                        <br>
                        • 200 ml de agua filtrada o alcalina

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_1.jpg" alt="flan">
                <h3>Agua de Manzana con Canela</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 manzana cortada en rebanadas
                        <br>
                        • Dos varas cortas de canela
                        <br>
                        • Un litro de agua
                        <br>
                        • Canela
                        <br>
                        • Un litro de agua

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_2.jpg" alt="Mermelada">
                <h3>Agua de Mango con Jengibre</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 trozo de jengibre fresco (2 pulgadas)
                        <br>
                        • ½ taza de mango en cubos
                        <br>
                        • 1 litro de agua
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_3.jpg" alt="Mamut saludable">
                <h3>Agua de Frutos Rojos y Cítricos</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 taza de frutos rojos congelados (fresas, frambuesas y moras)
                        <br>
                        • ½ pieza de limón, naranja o lima en rebanadas
                        <br>
                        • 1 litro de agua
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_avena_4.jpg" alt="Red Velvet Pancakes">
                <h3>Agua de Avena</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 taza de Avena Integral Granvita
                        <br>
                        • ½ rama de canela
                        <br>
                        • 2 cucharadas de miel
                        <br>
                        • 1 litro de agua
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_4.jpg" alt="Pay de plátano">
                <h3>Agua de Coco</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 coco entero, de preferencia sin cáscara
                        <br>
                        • ½ litro de agua
                        <br>
                        • Miel al gusto
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_6.jpg" alt="pie de limon">
                <h3>Jugo Verde con Jengibre</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 3 tazas de espinaca baby
                        <br>
                        • ½ pepino cortado en cubos
                        <br>
                        • 1 taza de piña cortada en cubos
                        <br>
                        • ½ litro de agua
                        <br>
                        • 1 trozo de jengibre fresco
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://granvita.com/wp-content/uploads/2020/06/bebidas_saludables_metabolismo_7.jpg" alt="Negrito en versión saludable">
                <h3>Smoothie de Berries con Avena</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 1 taza de frutos rojos
                        <br>
                        • 2 vasos de Bebida de Avena Orgánica Granvita
                        <br>
                        • 2 cucharada de Avena Integral Granvita
                        <br>
                        • Un trozo de jengibre fresco en rebanadas
                        <br>
                        • Miel de abeja o de agave al gusto

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.gastrolabweb.com/u/fotografias/fotosnoticias/2022/3/8/26621.jpg" alt="CHEESE CAKE DE MANGO">
                <h3>Batido Detox de Pepino y Piña</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        • 150 gramos de espinaca
                        <br>
                        • hojas de stevia
                        <br>
                        • 100 gramos de arándanos
                        <br>
                        • 100 gramos de piña natural
                        <br>
                        • 1 manzana
                        <br>
                        • 1 pepino
                        <br>
                        • 1 rama de apio

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
        <li class="ingredientesLi" > <input type="checkbox"> jsdhjkashda</li>
        <li class="ingredientesLi" > <input type="checkbox"> sadsdasdas</li>
        <li class="ingredientesLi" > <input type="checkbox"> sdasdasda</li>
        <li class="ingredientesLi" > <input type="checkbox"> sdasdasdsadsa</li>
        <li class="ingredientesLi" > <input type="checkbox"> sdasdasdsadsa</li>
        <li class="ingredientesLi" > <input type="checkbox"> sadasdsadaaaaaaaaaaaaaaaaaaaaaaaaa</li>
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
    <script src="preparation-bebidas.js"></script>


    </body>
    
</html>