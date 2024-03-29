<?php


session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];

header("location: general-productos.php");

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

    <style>

        img{
      width: 221px;
      margin: 10%;
      margin-top: 2%;
    }

    </style> 

<link rel="stylesheet" href="../CSS/styleheader.css">
<link rel="stylesheet" href="../CSS/styles.css">
<link rel="stylesheet" href="../CSS/responsive.css">
<link rel="stylesheet" href="../CSS/Productos-style-extra.css">
<link rel="stylesheet" href="../CSS/styles-productos-responsive.css">


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
       <!-- menu desplegable -->
       
<div class="container">
    <nav class="menu">
        <ul>
            <li><a href="../productos.php"><p class="nombreDEpaginadondeseencuantra"> ▼     Productos recomendados</p></a>
            <ul class="submenu"></li>
            <li><a href="../dieta.php">Dietas</a></li>
            <li><a href="../equivalencias.php"> Mapa de equivalencias</a></li>
            <li><a href="../lugares.php">Lugares Recomendados</a></li>
            <li><a href="progreso.php">Progreso</a></li>
        </ul>
        </ul>
    </nav>
</div>
 <!-- menu desplegable -->
       
 <div class="containerSECCIONES">
    <nav class="menuSECCIONES">
        <ul>
            <li><a href="leguminosas.php"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼   Leguminosas</p></a>
            <ul class="submenuSECCIONES"></li>
            <li><a href="grasas.php">Grasas</a></li>
            <li><a href="cereales_carbohidratos.php">Cereales/Carbohidratos</a></li>
            <li><a href="verduras.php">Verduras</a></li>
            <li><a href="../productos.php">Proteínas</a></li>
            <li><a href="frutas.php"> Frutas</a></li>

        </ul>
        </ul>
    </nav>
</div>
<pre class="titulo_de_servicios_productos">Leguminosas</pre>

<div class="buscador">
    <button id="buscarBtn" ><img src="../imagenes/Lupa.svg"></button>
    <input type="text" id="buscadorGeneral">
</div>

<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >

<!-- <div class="fexcajasPR"><img src="/imagenes/Leguminosas/GerminadodeAlfalfa.jpg" alt="	Germinado de alfalfa "></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/germinado-de-alfalfa-con-aderezo-mil-islas-san-francisco-cultivos-naturales-80-g/00076936110025?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X1x7cFjYDKq9egKZ4riNKMvS8EN8OaNaEtDke973OtI-nPUE2Enp2QaAiztEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/alfalfa-san-francisco-con-amaranto-200-g/1543581.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijol peruano Great Value 900 g.jpg" alt="Frijol Peruano"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-great-value-peruano-900-g/00750179163864" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijol-peruano-precissimo-908-gr/11552438.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijol Verde Valle peruano 900 g.JPG" alt="Frijol Verde Valle peruano 900 g"></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-verde-valle-peruano-900-g/00750107130104" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijol-peruano-precissimo-908-gr/11552438.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijol flor de mayo La Merced 907 g.JPG" alt="Frijol flor de mayo La Merced 907 g"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-flor-de-mayo-la-merced-907-g/00750104720343" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijol-flor-mayo-la-merced-900-g/11042888.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijol negro Verde Valle 1 kg.jpg" alt="Frijol negro Verde Valle 1 kg"></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/frijol-negro-verde-valle-1-kg/00750107130149" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijol-negro-schettino-900-gr/11078397.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijoles bayos Great Value refritos 430 g.jpg" alt="Frijoles bayos Great Value refritos 430 g"></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimentos-instantaneos/frijoles-bayos-great-value-refritos-430-g/00750649500810" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijol-refrito-bayo-chata-pouch-430gr/11087090.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijoles peruanos Isadora refritos 430 g.jpg" alt="Frijoles peruanos Isadora refritos 430 g"></a>
        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimentos-instantaneos/frijoles-peruanos-isadora-refritos-430-g/00750107130777" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/frijoles-la-sierra-peruanos-refritos-650-gr/11562677.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Frijoles Refritos Bayos Sin Grasa Isadora 430 Gr.jpg" alt="Frijoles Refritos Bayos Sin Grasa Isadora 430 Gr"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimentos-instantaneos/frijoles-bayos-isadora-refritos-430-g/00750107130778" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/frijoles-refritos-bayos-sin-grasa-isadora-430-gr/1616389.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
    
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Haba La Merced pelada 500 g.jpg" alt="Haba La Merced pelada 500 g"></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/haba-la-merced-pelada-500-g/00750104720073" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/haba-la-merced-pelada-500-g-00750104720073" target="ba_blank">Ver en aurrera</a>
        </div></div>
    
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Haba Great Value 500 g.jpg" alt="Haba Great Value 500 g"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/haba-great-value-500-g/00750179161963" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/haba-precissimo-500-grs/11519465.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
    
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Lentejas Great Value 500 g.jpg" alt="Lentejas Great Value 500 g"></a>
        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/lentejas-great-value-500-g/00750179162460?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9e6SBhB2EiwA5myr9m4OOmQ5WaNB8HCgKpjyDVRDrDKaw2SBxMnIaXigOR2Dfq2UeykqMRoCrxYQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/lenteja-la-merced-500-g/669833.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
    
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Lentejas Verde Valle 500 g.jpg" alt="Lentejas Verde Valle 500 g"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/lentejas-verde-valle-500-g/00750107130115" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/lentejas-verde-valle-500-g-00750107130115" target="ba_blank">Ver en aurrera</a>
        </div></div>  
    
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Soya Cerepak Texturizada Sabor Res 300 g.jpg" alt="Soya/Cerepak Texturizada Sabor Res 300 g"></a>
        <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-sabor-res-300-g_00750106082355?gclid=Cj0KCQjwma6TBhDIARIsAOKuANzB49wsJ-NzD80RGrP0CLYlsXQsSBsZlupnEtKTTFv_MPJMVCjxapUaApAxEALw_wcB" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-300-g_00750106082354?gclid=Cj0KCQjwma6TBhDIARIsAOKuANzywP0_AOW4IF3-oSXRWZV6PHAdci3jF46wgJ55bLJ1LxzJPXncdKkaAqkqEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
        
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubia grande San Lázaro 500 g.jpg" alt="Alubia grande San Lazaro 500 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/alubia-grande-san-lazaro-500-g/00750108894005?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://articulo.mercadolibre.com.mx/MLM-864512313-alubia-grande-san-lazaro-4-bolsas-de-500-gr-cu-ts-_JM?matt_tool=94495926&matt_word=&matt_source=google&matt_campaign_id=15697272370&matt_ad_group_id=128898863182&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447263&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=222102455&matt_product_id=MLM864512313&matt_product_partition_id=1413162902526&matt_target_id=aud-1575562102963:pla-1413162902526&gclid=Cj0KCQjwma6TBhDIARIsAOKuANzdN8lwNDdKOwg0NWEfp8ha6ZZKVdXYx1TZ2f-c2lyWZMArSqS30mEaAthQEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
        
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubias Cidacos Extra 570g.jpg" alt="Alubias Cidacos Extra 570g"></a>
        <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-extra-570g_00841031331581" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-extra-570g_00841031331581?gclid=Cj0KCQjwma6TBhDIARIsAOKuANxXlK3PC5xvQUEK39KVDrQpgMcvA82BR_-ETOxp27tbG0ZwASDypvgaAjwgEALw_wcB" target="ba_blank">Ver en M libre</a>
        </div></div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubia Great Value 500 g.jpg" alt="Alubia Great Value 500 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/alubia-great-value-500-g/00750179162458?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/alubia-aurrera-g-00750179163780?gclid=Cj0KCQjwma6TBhDIARIsAOKuANzedsIzpa0vywet64eTu5carVuSMfw7GLb2FBVIcqs3Ne1ZpM2EpdgaAtCjEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
        
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubias Cidacos Judion Extra Grande 570g.jpg" alt="Alubias Cidacos Judion Extra Grande 570g"></a>
        <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-judion-extra-grande-570g_00841031331586" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-judion-extra-grande-570g_00841031331586?gclid=Cj0KCQjwma6TBhDIARIsAOKuANxApy6Nbr2HlPyof0jkCPfESoeSn2nsHApj5CNVQtCbbv6FgNbbuCsaAuPtEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubias Cidacos con Verduras 425g.jpg" alt="Alubias Cidacos con Verduras 425g"></a>
        <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-con-verduras-425g_00841031343181" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/alimentos-envasados-y-conservas/vegetales-y-chiles-envasados/alubias-cidacos-con-verduras-425g_00841031343181?gclid=Cj0KCQjwma6TBhDIARIsAOKuANwX7qra8bb_17fEv5tVL8YuDdcPoLa8H_uNw66_PBZHAs8fwdhfaKQaAglPEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubia Verde Valle 500 Gr.jpg" alt="Alubia Verde Valle 500 Gr"></a>
        <div><a class="boton_soriana" href="https://www.soriana.com/alubia-verde-valle-500-gr/383199.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Alubia La Merced 500 g.jpg" alt="Alubia La Merced 500 g"></a>
        <div><a class="boton_soriana" href="https://www.soriana.com/alubia-la-merced-500-g/669831.php" target="ba_blank">Ver en soriana</a>
        </div></div>
        
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Biolicious Organico Alubia.jpg" alt="Biolicious Organico Alubia -"></a>
        <div><a class="boton_soriana" href="https://www.soriana.com/biolicious-organico-alubia---/11259922.php" target="ba_blank">Ver en soriana</a>
        </div></div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Soya texturizada Wand's natural 330 g.jpg" alt="Soya texturizada Wand's natural 330 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/soya-texturizada-wand-s-natural-330-g/00750046340174?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        </div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Soja Cerepak Texturizada 300 g.jpg" alt="Soya Cerepak Texturizada 300 g"></a>
        <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-300-g_00750106082354" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/alimentos-envasados-y-conservas/pescados-y-mariscos/soya-cerepak-texturizada-300-g_00750106082354?gclid=Cj0KCQjwma6TBhDIARIsAOKuANyXbdPaSkVNHs9JE5Iac2_QVCsQge4O0rWnwSAuRJ-k-1qZe8yuyLwaAmfrEALw_wcB" target="ba_blank">Ver en aurrera</a>
        </div></div>
                
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/Soya texturizada Wand's sabor chorizo 300 g.jpg" alt="Soya texturizada Wand's sabor chorizo 300 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/soya-texturizada-wand-s-sabor-chorizo-300-g/00750046389040?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
       </div>
            
    <div class="fexcajasPR"><img src="/imagenes/Leguminosas/1 Kg De Soya Texturizada Sabor Res Excelente Calidad.jpg" alt="1 Kg De Soya Texturizada Sabor Res Excelente Calidad"></a>
    <div><a class="boton_walmart" href="https://articulo.mercadolibre.com.mx/MLM-810758447-1-kg-de-soya-texturizada-sabor-res-excelente-calidad-_JM?matt_tool=28238160&utm_source=google_shopping&utm_medium=organic" target="ba_blank">Ver en M libre</a></div>
    </div> -->
</div> 
<br>

<div class="infoProductMap disNone" id="containerMap" >
    <div class="disNone" id="mapDirectionLugares" >
        <h2 class="titleInfoProduct" >Lugares Cercanos</h2> <br>
        <button id="close" ><img src="../imagenes/x.png"></button>
        <div id="mapIframe">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1L5SUu3RgqrKnrYEdCSRr0sKu3SAORWU&ehbc=2E312F" width="640" height="480"></iframe>
        </div>
       
        <div class="infoPrincipalProduct">
            <h2 id="titleProductSelect">Leguminosas</h2>
            <br>
            <img src="../imagenes/Azucardecoco.jpg" class="imgProductSelect" id="imgProductSelect" alt="imgProducto">
            <p>Se encuentra disponible en:</p>
            <div class="imgLugaresDisponibles">
                <img src="../imagenes/Lugares disponibles/Merza.png"   class="imgMapSelec imgSelectLugar" alt="Merza" >
                <img src="../imagenes/Lugares disponibles/walmart.png" class="imgMapSelec" alt="Walmart">
                <img src="../imagenes/Lugares disponibles/aurrera.svg" class="imgMapSelec" alt="Aurrera">
                <img src="../imagenes/Lugares disponibles/soriana.png" class="imgMapSelec" alt="Soriana">
            </div>

            <div class="verProductOnline">
                <h3>Ver producto en la tienda en linea</h3>
                <br><br>
                <div class="btnIrUrlProduct">
                    <a class="boton_soriana" href="https://www.soriana.com/biolicious-organico-alubia---/11259922.php" target="ba_blank">Ver en soriana</a>
                    <a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/soya-texturizada-wand-s-sabor-chorizo-300-g/00750046389040?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a>
                </div>
            </div>
        </div>
    </div>
</div>




<footer class="containerfooter">
    <div class="item-1">
        <div class="imagen">
            <!-- <figure> -->

                <a href="../Page-Initial.php">
                    <img class="ImagenFooterOpccion2" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living">
                </a>
            <!-- </figure> -->
        </div>
        
           
   <a class="item-2" href="../Termsycondiciones.php">TERMINOS Y CONDICIONES</a>

      
    </div>
    <div class="item-3">
        <small>&copy; 2022  - Todos los Derechos Reservados.</small>
    </div>
</footer>


    <script src="../whatss.js"></script>
    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="../Prueba7/java.js"></script>
    <script src="../js/create-html-leguminosas.js"></script>
    <script src="../js/maps-directions.js" ></script>
    <script src="../js/redirect-buscar.js"></script>


</body>
</html>