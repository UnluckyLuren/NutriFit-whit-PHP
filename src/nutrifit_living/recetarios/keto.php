<?php


session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];


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
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/style_cards.css">    
    <link rel="stylesheet" href="../CSS/recetario.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    
   
  <style>
    p{
      font-family: 'DM Serif Text', serif;
    }
    
    Body {

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
                    <li class="nav-menu-item " ><a href="../LoginFuncionando/index.php " class="nav-menu-link nav-link">Ingresar</a></li>
                    <li class="nav-menu-item"><a href="../dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                    
                    <li class="nav-menu-item "><a href="../recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
                </ul>
            </nav>
        </header>
       
       <!-- menu desplegable -->
       
        <div class="containerre">
            <nav class="menure">
                <ul>
                    <li><a href="keto.php"><p class="nombreDEpaginadondeseencuantra">Keto</p></a>
                    <ul class="submenure">
                        <li><a href="Almuerzos.php">   Almuerzos</a></li>
                        <li><a href="Bebidas.php" >    Bebidas</a></li>
                        <li><a href="Cenas.php">       Cenas</a></li>
                        <li><a href="Desayunos.php">   Desayunos</a></li>
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
          <img src="../imagenes/recetario/keto/KETO CLUB SANDWICH.jpg" alt="KETO CLUB SANDWICHs">
          <h3>Keto Club Sandwich</h3>
        </div>

        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                • Pan Keto al microondas 90 seg.
              <br> 
              •Jamón @casaeuropaembutidos
                <br> 
                •Queso @distoproductos
                <br>
                •Tocino @casaeuropaembutidos
                <br>
                • Tomate @mercatolimaperu
                <br>
                •Palta @mercatolimaperu
                <br>
                •Lechuga @mercatolimaperu
            
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Nidos de calabaza squash.jpg" alt="Nidos de calabaza squash">
          <h3>Nidos de Calabaza Squash</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •30 gramos de spaghetti squash
                <br>
                • 1 huevo entero
                <br>
                •  cucharada de parmesano
                <br>
                •1 cucharada de mozzarella rallada
                <br>
                •sal y condimentos
                <br>
                •perejil picado si gustan
               
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/PIZZA CON BORDES DE QUESO.JPG" alt="PIZZA CON BORDES DE QUESO">
          <h3>Pizza Borde de Queso</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •75g de harina de almendra
                <br>
                •10g de psyllium en polvo @nkdliving
                <br>
                •5g de levadura en polvo
                <br>
                •2 huevos
                <br>
                •Pizca de sal
                <br>
                •Queso provolone
            
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Rollitos Hulk de espinaca.jpg" alt="Rollito Hulk">
          <h3>Rollito Hulk</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •200gr de espinaca precocida
                <br>
                •3 huevos
                <br>
                •3cdas de harina de coco
                <br>
                •1cda de Polvo de hornear
                <br>
                •4cdas de queso crema
                <br>
                •2 huevos duros
                <br>
                •2 huevos duros 
                <br>
                •1 puñado de queso rallado
                <br>
                •Aceitunas
                <br>
                •Adornos opcionales (tomates cherry, etc etc)
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Keto Bolitas de carne.jpg" alt="Bolitas Sorpresa ">
          <h3>Bolitas Sorpresa </h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
               - Carne picada previamente especiada
              <br>
                - Tú queso favorito cortado de cubitos
                <br>
                - Bacon
                <br>
                - Palillos para asegurar 
                <br>
                - salsa picante de trufa 
                
            
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/FETTUCCINI DE ESPINACA A LA CREMA CON POLLO Y CHAMPI¥ONES.jpg" alt="FETTUCCINI DE ESPINACA A LA CREMA CON POLLO Y CHAMPIÑONES">
          <h3>Fettuccini de Espinaca</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •un paquete de pasta fettuccini espinaca
                <br>
                •1 taza de crema de leche
                <br>
                •150 gr de queso parmesano
                <br>
                •champignones en láminas
                <br>
                •pechuga de pollo
                <br>
                •sal y pimienta
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/huevos.JPG" alt="huevos">
          <h3>Huevos Keto</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •1 manojo de espárragos trigueros
                <br>
                •150g gambas
                <br>
                •4 huevos
                <br>
                •1 diente de ajo
                <br>
                •Sal
                <br>
                •AOVE
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Tuna Waffle.jpg" alt="Tuna Waffle">
          <h3>Tuna Waffle</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •2 cucharas de queso crema
                <br>
                •2 huevos
                <br>
                •2 cucharadas (de postre) de harina de almendra
                <br>
                •1 cucharadita de polvo de hornear
                Sal & pimienta
                <br>
                •2 latas de atún
                <br>
                •1 cda de queso crema
                <br>
                •1/2 potecito de yogurt
                <br>
                •Un puñado de queso rallado
                <br>
                •1/4 taza de cilantro picadito
                <br>
                •Especias a gusto
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/WRAP DE SALMàN.jpg" alt="WRAP DE SALMÓN">
          <h3>Wrap De Salmón</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p>
               
                •Salmón
                <br>
                •Queso
                <br>
                •Aguacate 🥑
                <br>
                •Huevo duro
                <br>
                •Tomate 🍅
                <br>
                •Especies : sal, pimienta , albahaca 
                <br>
                •Hojas de lechuga
                <br>
                •Salsa Ranchera opcional
            
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Crema fr¡a de pepino y aguacate.jpg"  alt="Crema fría de pepino y aguacate">
          <h3>Crema fría de pepino y aguacate</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p> 
                
         •Crema fría
           <br>
         •pepino 
         <br>
         •pepino
         <br>
         •Sin complicaciones, batimos todos los ingredientes y listo ☺️
         <br>

            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>
    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/Empanadillas.JPG" alt="Empanadillas">
          <h3>Empanadillas</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p> 
                
         •150gr de Mozzarella rallada
           <br>
         • 60gr de Harina de Almendras
         <br>
         •1gr de Psyllium en polvo
         <br>
         •3gr de Harina de Bambú
         <br>
         •1 huevo
         <br>
         
            </p>
            <div class="link">
                <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
            </div>
        </div>
    </div>

    <div class="card recetario" id="recetas">
        <div class="face front">
          <img src="../imagenes/recetario/keto/PIZZA KETO.JPG" alt="PIZZA KETO">
          <h3>Pizza Keto</h3>
        </div>
        <div class="face back">
            <h3>Ingredientes</h3>
            <p> 
                
         •250gr de pechuga de pollo 
           <br>
         •Extiende la masa lo más fina posible entre dos papeles vegetales
         <br>
         •Queso
         
              
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

          <div class="cerrarMenu" > <button id="closePreparation" >Cerrar</button> <h1 id="nameReceta" >Crepas</h1> </div>

          <iframe width="560" height="315" src="https://www.youtube.com/embed/_3t4hP0EFmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
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


    
<footer class="containerfooter">
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

        <script src="../whatss.js"></script>
        <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
        <script defer src="../Prueba7/java.js"></script>
        <script src="../js/preparation-Keto.js"></script>


    </body>
</div>
</html>