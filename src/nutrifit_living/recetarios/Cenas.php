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
                    <li><a href="Cenas.php"><p class="nombreDEpaginadondeseencuantra">Cenas</p></a>
                    <ul class="submenure">
                    <li><a href="Almuerzos.php"> Almuerzos</a></li>
                    <li><a href="Bebidas.php">   Bebidas</a></li>
                    <li><a href="Desayunos.php"> Desayunos</a></li>
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
                        <img src="https://www.elmueble.com/medio/2022/12/14/pollo-a-la-plancha-con-lima_00000000_221214135618_943x1200.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3 id="imgChangeTitle" >Pollo a la Planca con Lima</h3>
                    </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p id="textBebJugoVerde" >
                    
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
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://www.elmueble.com/medio/2022/12/14/tomate-con-ventresca-de-atun_00000000_221214135646_971x1200.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Tomate de Ventresta de Atun</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        • 400 g de tomates maduros y carnosos
                        <br>
                        • 200 g de ventresca de atún en aceite de oliva
                        <br>
                        • 100 g de cebolleta
                        <br>
                        • 100 g de aceitunas negras sin hueso
                        <br>
                        • Sal en escamas
                        <br>
                        • 100 ml de aceite de oliva
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/12/14/minipizzas-de-verduras_00000000_221214135744_901x1201.jpg" alt="gansito">
                <h3>Mini Pizzas de Verduras</h3>
            </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 150 g de masa de pizza
                        <br>
                        • Hierbas provenzales
                        <br>
                        • Tomate frito
                        <br>
                        • Mozzarella
                        <br>
                        • Berenjena
                        <br>
                        • Anchoas
                        <br>
                        • Ajo, Aceitunas, Pimiento
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.elmueble.com/medio/2022/12/14/sopa-de-tomates-y-frutas-rojas_00000000_230228153418_800x1200.jpg" alt="crepas">
                <h3>Sopa de Tomate y Frutas Rojas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 700 g de tomates cereza
                        <br>
                        • 250 g de frutas rojas
                        <br>
                        • Ajo y pasta brick
                        <br>
                        • Hojas de albahaca
                        <br>
                        • Vinagre de Módena
                        <br>
                        • Aceite de oliva y Sal
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://oliofino.com/wp-content/uploads/2016/03/Balsamic-Shrimp-Salad-2-from-willcookforsmiles.com_.jpg" alt="flan">
                <h3>Ensalada de camarones</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 400 g de camarón mediano, pelado y crudo
                        <br>
                        • 2 cdas. de Oli Aceite de Oliva
                        <br>
                        • 1 diente de ajo picado
                        <br>
                        • 1 cda. de vinagre balsámico de Módena
                        <br>
                        • 1 cdta. de miel
                        <br>
                        • ¼ taza de almendras laminadas tostadas                      
                        <br>
                        • ½ taza de queso de cabra desmoronado
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.nutrioli.com/wp-content/uploads/2023/02/Paso-3-f.jpg" alt="Mermelada">
                <h3>Brochetas de champiñones</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 3 tazas de hongos crimini cortados por la mitad                                    
                        <br>
                        • ¼ taza de vinagre balsámico de Módena
                        <br>
                        • 2 cdas. de perejil picado.
                        <br>
                        • 3 cdas. de Oli Aceite de Oliva
                        <br>
                        • 2-3 ajos picados
                        <br>
                        • Sal y pimienta
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.nutrioli.com/wp-content/uploads/2023/02/Paso-3b.jpg" alt="Mamut saludable">
                <h3>Ensalada Mediterránea</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • ½ taza de queso de cabra
                        <br>
                        • 1 taza de aceitunas negras sin semillas
                        <br>
                        • ½ taza de jitomates cherry partidos por la mitad
                        <br>
                        • ¼ de taza de Oli Extra Virgen
                        <br>
                        • 3 cdas. de vinagre balsámico de Módena
                        <br>
                        • 1 cda. de orégano seco molido
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHPfGiI7i187DbXIe_Xl24bqv6RThWfw9f833Ar6nEXtQqlRkzQjfBkBcvlyvlWESaac&usqp=CAU" alt="Red Velvet Pancakes">
                <h3>Dip de oliva con hierbas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Sal y pimienta molida.                        
                        <br>
                        • 6 cdas de vinagre balsámico de Módena
                        <br>
                        • 1 taza de Oli Extra Virgen
                        <br>
                        • ½ cdta. de pimienta roja Cayena en hojuelas
                        <br>
                        • 3 cdtas. de romero fresco picado
                        <br>
                        • 1 cdta. de perejil fresco picado
                        <br>
                        • 1 barra de pan baguette rebanado
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://keto-mojo.com/wp-content/uploads/2020/11/Roasted-Brussel-Sprouts-500x375.jpg" alt="Pay de plátano">
                <h3>Coles de Bruselas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • ¼ taza de Yogurt Griego Natural
                        <br>
                        • 1½ cucharadas de mostaza dijón
                        <br>
                        • ½ cucharadita de perejil seco
                        <br>
                        • ¼ de cucharadita de hojuelas de chile
                        <br>
                        • ½ cucharadita de ajo en polvo
                        <br>
                        • ½ kilo de coles de Bruselas, cortadas en mitades, cocidas al dente
                        <br>
                        • Sal y pimienta al gusto
                         
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.nutrioli.com/wp-content/uploads/2017/02/L_NUT_49753.png" alt="pie de limon">
                <h3>Arroz Frito con Verduras y Pollo</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 1 cucharada (1 chop) de aceite Nutrioli Antigoteo
                        <br>
                        • Hojas de cilantro
                        <br>
                        • Salsa de soya para sazonar
                        <br>
                        • Media pechuga de pollo sin piel sin hueso, picada muy finito
                        <br>
                        • 4 tazas de arroz cocido para sushi
                        <br>
                        • 1 cebolla picada
                        <br>
                        • 2 zanahorias, 1 calabaza
                        <br>
                        • ½ taza de chícharos precocidas
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.nutrioli.com/wp-content/uploads/2019/12/Ensalada-griega-con-pasta-tortellini_2.jpg" alt="Negrito en versión saludable">
                <h3>Ensalada griega</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • 400 g de pasta tortellini.
                        <br>
                        • 1 pepino, ajo, albaca, tomillo
                        <br>
                        • 1 taza de jitomates cherry a la mitad.
                        <br>
                        • 4 centros de alcachofa, cortados en cuartos
                        <br>
                        • ½ taza de aceitunas negras rebanadas
                        <br>
                        • ½ taza de queso feta cortado en cuadros
                        <br>
                        • 1/3 taza de hojas de albahaca picadas
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.nutrioli.com/wp-content/uploads/2019/08/ensalada-de-espinacas-y-kale-con-frambuesas-nueces-y-aguacate_1.jpg" alt="CHEESE CAKE DE MANGO">
                <h3>Ensalada de espinacas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        • 1 tazas de espinacas.
                        <br>
                        • 1 taza de kale, 1 taza de fresas picadas.
                        <br>
                        • 1 taza de blueberries, 1 taza de frambuesas o zarzamoras.
                        <br>
                        • ¼ taza de almendras fileteadas.
                        <br>
                        • ¼ taza de queso de cabra.
                        <br>
                        • Sal y pimienta           
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
    <script src="preparation-cenas.js"></script>


    </body>
    
</html>