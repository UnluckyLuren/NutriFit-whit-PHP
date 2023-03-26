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
                    <li><a href="Snaks.php"><p class="nombreDEpaginadondeseencuantra">Snaks</p></a>
                    <ul class="submenure">
                    <li><a href="Almuerzos.php">  Almuerzos</a></li>
                    <li><a href="Bebidas.php">    Bebidas</a></li>
                    <li><a href="Cenas.php">      Cenas</a></li>
                    <li><a href="Desayunos.php">  Desayunos</a></li>
                    <li><a href="keto.php">       keto</a></li>
                    <li><a href="recetarios.php">    Postres</a></li>
                </ul>
                </ul>
            </nav>
        </div> 

        <div id="container" >

            <div class="contenerya" id="displayPreparation" >

                <div class="card recetario" id="recetas">
                    <div class="face front">
                        <img src="https://blog.rappi.com/wp-content/uploads/2016/11/5-snacks-saludables-y-deliciosos-para-que-tu-pareja-baje-la-pancita3.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3 id="imgChangeTitle" >Palitos de Zanahoria</h3>
                    </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p id="textBebJugoVerde" >
                    
                        • 1 zanahoria
                        <br> 
                        • 3 ramas de apio
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://blog.rappi.com/wp-content/uploads/2016/11/shutterstock_479813263-1080x718.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Uvas congeladas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        • Uvas
                        <br><br>
                        Recomendacion:
                        <br>
                        • Yogurt natural
                        <br>
                        • Almendras
                        <br>
                        • Granola

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/5-snacks-saludables-y-deliciosos-para-que-tu-pareja-baje-la-pancita.jpg" alt="gansito">
                <h3>Palomitas de Maíz</h3>
            </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Media taza de maíz pira
                        <br>
                        • Aceite
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
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/como-hacer-chips-de-pepino-1.jpg" alt="crepas">
                <h3>Chips de Pepino al Horno</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 y 1/2 pepino o zucchini
                        <br>
                        • 1 cucharadita de vinagre de manzana
                        <br>
                        • 1/4 de cucharadita de Sal

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/shutterstock_313523975-1080x720.jpg" alt="flan">
                <h3>Parfait con Granola y Frutas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 80 gramos de yogourt griego
                        <br>
                        • 4 cucharadas de granola
                        <br>
                        • 2 frutas de tu elección picadas en cuadritos
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/unnamed.png" alt="Mermelada">
                <h3>Sandwich de Mantequilla de Maní</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 3 tostadas de arroz
                        <br>
                        • 3 cucharadas de mantequilla de maní
                        <br>
                        • 3 cucharadas de mermelada
                        <br>
                        • Leche
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/unnamed-3.png" alt="Mamut saludable">
                <h3>Brochetas Gourmet</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • Rodajas de pan baguette tostadas
                        <br>
                        • Queso de cabra
                        <br>
                        • Tomates cherry partidos por la mitad
                        <br>
                        • Fresas partidas en cubitos
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://blog.rappi.com/wp-content/uploads/2016/11/unnamed-2.png" alt="Red Velvet Pancakes">
                <h3>Manzanas Deshidratadas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 2 manzanas rojas
                        <br>
                        • Media taza de zumo natural de manzana
                        <br>
                        • Una cucharadita de canela
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.cromos.hn/wp-content/uploads/2021/06/hummus.jpg" alt="Pay de plátano">
                <h3>Proteína a Base de Garbazos</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        • 1 lata de garbanzos
                        <br>
                        • 2 dientes de ajo
                        <br>
                        • Media taza de aceite de oliva
                        <br>
                        • Zumo de limón al gusto
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
                <img src="https://mejorconsalud.as.com/wp-content/uploads/2015/09/croquetas.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe" alt="pie de limon">
                <h3>Croquetas de Choclo</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • ¼ taza de harina
                        <br>
                        • 2 choclos enteros
                        <br>
                        • 1 cucharada de ajo picado
                        <br>
                        • 1 huevo revuelto
                        <br>
                        • Medio pimiento verde picado
                        <br>
                        • 1 cucharada de cilantro picado
                        <br>
                        • Sal, pimienta y aceite
                        <br>
                        • Media cebolla picada
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://mejorconsalud.as.com/wp-content/uploads/2018/05/quesadillas-queso-tortita.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe" alt="Negrito en versión saludable">
                <h3>Quesadillas con Queso y Cebolla</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                        • Tortitas de trigo o pan de pita
                        <br>
                        • 6 cucharadas de queso crema
                        <br>
                        • 1 pimiento asado
                        <br>
                        • 1 mango
                        <br>
                        • ¼ cebolla morada
                        <br>
                        • Cilantro

                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://mejorconsalud.as.com/wp-content/uploads/2015/08/sandwich-tostado.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe" alt="CHEESE CAKE DE MANGO">
                <h3>Bagel Vegetariano</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        • 1 rebanada de queso
                        <br>
                        • 2 cucharadas de queso crema
                        <br>
                        • 4 rodajas de tomate
                        <br>
                        • 8 rebanadas de pepino
                        <br>
                        • Germinado de alfalfa o brotes de soja
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
    <script src="preparation-snaks.js"></script>


    </body>
    
</html>