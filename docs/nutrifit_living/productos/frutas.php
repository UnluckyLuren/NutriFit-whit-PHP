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
    <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png">
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
    <!-- <svg class="rec" width="1500" height="150"  > 
        <rect x="2" y="2" width="1515" height="100" rx="10" ry="10" lx="10" 
         style="fill: #a5f55a; opacity:0.5; stroke-width:5" />
    </svg>ir al in
    <div class="Menu">
        <a  href="https://www.instagram.com/nutrifit__living/?hl=es" target="ba_blank"> <img  class="im" src="/imagenes/logo11_preview_rev_1.png" alt="logo nutrifit living" ></a>
        <a class="button" href="/nutrifit living/dieta.php"  >Servicios</a>
        <a class="button2" href="/nutrifit living/recetarios/recetarios.php" >Recetarios</a>
        <a class="button4" href="/nutrifit living/index (1).php">Inicio</a>
    </div> -->
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
            <li><a href="grasas.php"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼   Frutas</p></a>

            <ul class="submenuSECCIONES"></li>
            <li><a href="cereales_carbohidratos.php">Cereales/Carbohidratos</a></li>
            <li><a href="verduras.php">Verduras</a></li>
            <li><a href="productos.php">Proteínas</a></li>
            <li><a href="leguminosas.php">Leguminosas</a></li>

        </ul>
        </ul>
    </nav>
</div>
<pre class="titulo_de_servicios_productos">Frutas</pre>

<div class="buscador">
    <button id="buscarBtn" ><img src="../imagenes/Lupa.svg"></button>
    <input type="text" id="buscadorGeneral">
</div>

<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >

<!-- <div class="fexcajasPR"><img src="/imagenes/frutas/Fresa Walmart.jpg" alt=""></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/fresa-driscoll-s-454-g/00071575620002?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    </div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Fresas congeladas Great Value enteras 500 g.jpg" alt="Fresas congeladas Great Value enteras 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/fresas-congeladas-great-value-enteras-500-g/00750179166585?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/fresas-congeladas-great-value-enteras-500-g-00750179166585" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Fresas congeladas La Huerta 500 g.jpg" alt="Fresas congeladas La Huerta 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/fresas-congeladas-la-huerta-500-g/00750104790260" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/alimentos-congelados-y-refrigerados/frutas-y-verduras-congeladas/frutas-congeladas/" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Fresas 454 g.jpg" alt="Fresas 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/fresas-454-g/00000000004028" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/fresas-454-g-00000000004028" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Agua de coco Calahua Acapulcoco orgánica 1.jpg" alt="Agua de coco Calahua Acapulcoco orgánica 1 l"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/agua/agua-de-coco-calahua-acapulcoco-organica-1-l/00750300657578" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Bebidas/Jugos-y-N%C3%A9ctares/Agua-de-Coco-Org%C3%A1nica-Acapulcoco-1L/p/000000000003459322?gclid=Cj0KCQjwvLOTBhCJARIsACVldV2ABNROhworlTpuit-wGC1nXJGNeL77rL3pSHP-j2bA-mfttw7Xq6IaAhKAEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Agua de coco Nature's Heart 330 ml.jpg" alt="Agua de coco Nature's Heart 330 ml"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/agua/agua-de-coco-nature-s-heart-330-ml/00750225248166" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.soriana.com/agua-natures-heart-de-coco-330-ml/11154005.php?gclid=Cj0KCQjwvLOTBhCJARIsACVldV01cxQaBtizgiagi6diOW3Ndm4JxE041C7p4cTrLV1rzNJ0sErr3egaAr_eEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Agua de coco Coco Dream 500 ml.jpg" alt="Agua de coco Coco Dream 500 ml"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/agua/agua-de-coco-coco-dream-500-ml/00072909007900" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://articulo.mercadolibre.com.mx/MLM-902012838-agua-de-coco-dream-500-ml-_JM?matt_tool=32320013&matt_word=&matt_source=google&matt_campaign_id=15697272373&matt_ad_group_id=128898863222&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447266&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=271314404&matt_product_id=MLM902012838&matt_product_partition_id=1413375665453&matt_target_id=aud-1575562102963:pla-1413375665453&gclid=Cj0KCQjwvLOTBhCJARIsACVldV3jvBEpii-qKmxfn5ZdmHyGS5eUigUWt1ImhEErxsC2OcQXYhJqwi8aArmYEALw_wcB" target="ba_blank">Ver en M libre</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Alimento líquido de coco A de Coco 1.jpg" alt="Alimento líquido de coco A de Coco 1 l"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimento-liquido/alimento-liquido-de-coco-a-de-coco-1-l/00750300866905" target="ba_blank">Ver en walmart</a></div>
    </div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Agua de coco A de Coco 1.jpg" alt="Alimento Líquido A de Coco 1 L"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/agua/agua-de-coco-a-de-coco-1-l/00750300866914" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/alimento-liquido-a-de-coco-1-l/11154725.php?gclid=Cj0KCQjwvLOTBhCJARIsACVldV1XgTajvSAxwXJCCGV8YA0Gxy7A-bXMjN2UNJB_T0zisv5NWcCB718aAp6bEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Arándanos Nature's Heart deleite 700 g.jpg" alt="Arándanos Nature's Heart deleite 700 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/arandanos-nature-s-heart-deleite-700-g/00750225248105" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Despensa/Botanas-y-Frutas-Secas/Frutas-Secas-y-Snacks/Ar%C3%A1ndano-Natures-Heart-250g/p/000000000003679235?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Blueberry cosecha especial Driscoll's 310 g.jpg" alt="Blueberry cosecha especial Driscoll's 310 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/blueberry-cosecha-especial-driscoll-s-310-g/00071575650017?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
   </div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Mora azul 170 g.jpg" alt="Mora azul 170 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mora-azul-170-g/00000000004240" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Durazno amarillo por kilo.jpg" alt="Durazno amarillo por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/durazno-amarillo-por-kilo/00000000004403?gclsrc=aw.ds&" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Peras-y-Frutas-Finas/Carozos-y-finas/Durazno-Amarillo-por-Kg/p/000000000003102791" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Durazno sonora por kilo.jpg" alnutrifit living/index (1).php
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Durazno Chihuahua por kilo.jpg" alt="Durazno Chihuahua por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/durazno-chihuahua-por-kilo/00000000004404" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/Durazno saturno por kilo.jpg" alt="Durazno saturno por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/durazno-saturno-por-kilo/00000000003113" target="ba_blank">Ver en walmart</a></div>
    </div>

<div class="fexcajasPR"><img src="/imagenes/frutas/mandarina por kilo.jpg" alt="Mandarina por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mandarina-por-kilo/00000000003029" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/C%C3%ADtricos/Mandarina-Chumis-674g/p/000000000003679957?gclid=Cj0KCQjwvLOTBhCJARIsACVldV0_aIdV21wxUVxWXTNMrOWfwmdz1CHsBsvKZFNDcqSek4M7VpkE7toaAqVIEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Naranja orgánica Marketside en malla 2 kg.jpg" alt="Naranja orgánica Marketside en malla 2 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/naranja-organica-marketside-en-malla-2-kg/00750179161469?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Clementina Halos en malla 908 g.jpg" alt="Clementina Halos en malla 908 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/clementina-halos-en-malla-908-g/00007224013377" target="ba_blank">Ver en walmart</a></div>
    </div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Frambuesa Driscoll's 170 g.jpg" alt="Frambuesa Driscoll's 170 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/frambuesa-driscoll-s-170-g/00071575610001?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Uvas-y-Berries/Frambuesa-Domo-170g/p/000000000003100902?gclid=Cj0KCQjwvLOTBhCJARIsACVldV3PP7tK--ABPkS2DKlZo7dpHQ8nYFHK99V6e4IB_9NM_7s8fA55VZoaArQVEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Frambuesa orgánica 170 g.jpg" alt="Frambuesa orgánica 170 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/frambuesa-organica-170-g/00750301578039?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwvLOTBhCJARIsACVldV11rrGPGUUTZp8uRFl0xRfPgKw3CZZg6_JcjBpuB-L7Z5bKMNCSGd8aAvlBEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Uvas-y-Berries/Frambuesa-Domo-170g/p/000000000003100902?gclid=Cj0KCQjwvLOTBhCJARIsACVldV2zWFzxbS-_P0TbODoDhVf39bQrDp5ZmhgieOuWwRB7F8Ipo33F79caArgqEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en Chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Frambuesas Global Premier congeladas 907 g.jpg" alt="Frambuesas Global Premier congeladas 907 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/frambuesas-global-premier-congeladas-907-g/00750300788856?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwvLOTBhCJARIsACVldV2qdWJ4gwYvyCQ1FjoHFrP4URDdYa7jiSIZG5uB5PYASYR-w5ittxcaAqrDEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Congelados/Frutas-y-Verdura/Frambuesas-Vima-Enteras-450g/p/000000000003713281?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Mezcla de frutas congeladas Topex Fruit fresa, zarzamora, frambuesa, moras azules 907 g.jpg" alt="Mezcla de frutas congeladas Topex Fruit fresa, zarzamora, frambuesa, moras azules 907 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/mezcla-de-frutas-congeladas-topex-fruit-fresa-zarzamora-frambuesa-moras-azules-907-g/00078171882788" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/Mango congelado Great Value en cubos 500 g.jpg" alt="Mango congelado Great Value en cubos 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/mango-congelado-great-value-en-cubos-500-g/00750179166586?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwvLOTBhCJARIsACVldV2fm2KHWKkTPYUdiZgMg4-hvS5JJ5YNHkeFul-4lMJh5EKVIx4g9uUaAiMfEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/mango-congelado-great-value-cubos-g-00750179166586?gclid=Cj0KCQjwvLOTBhCJARIsACVldV2cIHUFBp1CvLAepOINu5VRDMF17ikzu7wnKm0n_KksbYwcTYnwvG0aAoR6EALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>nutrifit living/index (1).php
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Mangos congelados La Huerta en cubos 500 g.jpg" alt="Mangos congelados La Huerta en cubos 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/mangos-congelados-la-huerta-en-cubos-500-g/00750104790455?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwvLOTBhCJARIsACVldV3ODAXmKXO6aTf3Ace9oECTyTOxm8N1nLTtJr4kzfCwrkk53TaaZ2oaAhyaEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Congelados/Frutas-y-Verdura/Mango-Cubos-La-Huerta-500g/p/000000000003101044?gclid=Cj0KCQjwvLOTBhCJARIsACVldV0rdhXb72eOmV85ktRTraTuhSkw7eyz0kTnY-iFabd-bGAYB2G2hJkaAttbEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Mango ataulfo por kilo.jpg" alt="Mango ataulfo por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mango-ataulfo-por-kilo/00000000004961" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Pl%C3%A1tanos-y-Tropicales/Mango-Ataulfo%C2%A0por-Kg/p/000000000003102817?gclid=Cj0KCQjwvLOTBhCJARIsACVldV2SYeOGp_jhr_k4WTJ-_rppX3DmN74WlhZS2wGediots0jku_Ya64saAqwuEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Mango manililla por kg.jpg" alt="Mango manililla por kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mango-manililla-por-kg/00000000004314" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/Mango manila por kilo.jpg" alt="Mango manila por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mango-manila-por-kilo/00000000004313" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.merkadofresco.com/products/mango-manila?variant=41587471057050&currency=MXN&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic" target="ba_blank">Ver en M fresco</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Naranja navel por pieza.jpg" nutrifit living/index (1).php
<div class="fexcajasPR"><img src="/imagenes/frutas/Naranja agria por kilo.jpg" alt="Naranja agria por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/naranja-agria-por-kilo/00000000004391" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/Mamey por kilo.jpg" alt="Mamey por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/mamey-por-kilo/00000000004310" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://lanature.com.mx/products/mamey-pieza?variant=39445658107939&currency=MXN&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic" target="ba_blank">Ver en La Nature</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/frutas/Manzana Ambrosía por kilo.jpg" alt="Manzana Ambrosia por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/manzana-ambrosia-por-kilo/00000000003438" target="ba_blank">Ver en walmart</a></div>
    </div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Manzana gala por kilo.jpg" alt="Manzana gala por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/manzana-gala-por-kilo/00000000004132" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://tumarchante.mx/producto/manzana-gala/?attribute_cantidad=500+gr." target="ba_blank">Ver en tumarchante</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Manzana red delicious por kilo.jpg" alt="Manzana red delicious por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/manzana-red-delicious-por-kilo/00000000004016" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.google.com/url?url=https://tumarchante.mx/producto/manzana-red/%3Fattribute_cantidad%3DPIEZA&rct=j&q=&esrc=s&sa=U&ved=0ahUKEwjtxuD9wL33AhW1D0QIHYIQAy0QgOUECPoH&usg=AOvVaw383fk3IePwwGGXed4aBBH5" target="ba_blank">Ver en tumarchante</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Perón golden en bolsa 1.3 aprox precio por kilo.jpg" alt="Perón golden en bolsa 1.3 aprox precio por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/peron-golden-en-bolsa-1-3-aprox-precio-por-kilo/00000000004199" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/peron-golden-bolsa-13-aprox-precio-por-kilo-00000000004199" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Manzana gala en bolsa 1,3 aprox precio por kilo.jpg" alt="Manzana gala en bolsa 1.3 aprox precio por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/manzana-gala-en-bolsa-1-3-aprox-precio-por-kilo/00000000004203" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/1923630063_981007016" target="ba_blank">Ver en rappi</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/Manzana granny smith por kilo.jpg" alt="Manzana granny smith por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/manzana-granny-smith-por-kilo/00000000004017" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Manzanas/Manzana-Granny-Smith%C2%A0por-Kg/p/000000000003102803?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Pera roja de anjou por kilo.jpg" alt="Pera red de anjou por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/pera-red-de-anjou-por-kilo/00000000004415" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.sams.com.mx/fruta-fresca/pera-roja-d-anjou-lil-snappers-1-36-kg/980011844" target="ba_blank">Ver en sams</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Melón chino por kilo.jpg" alt="Melón chino por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/melon-chino-por-kilo/00000000004050" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/Departamentos/S%C3%BAper/Frutas-y-Verduras/Frutas/Pl%C3%A1tanos-y-Tropicales/Mel%C3%B3n-Chino-por-Kg/p/000000000003102830?gclid=Cj0KCQjwvLOTBhCJARIsACVldV36LrCrX0grmky3EV4uvFE4GJzhFDHOE7qZCCZMG7aElbMt5mZSqiUaAmcdEALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Melón golden dew por kilo.jpg" alt="Melón golden dew por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/melon-golden-dew-por-kilo/00000000003100" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/1923248455_981017211" target="ba_blank">Ver en rappi</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/frutas/membrillo por kilo.jpg" alt="Membrillo por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/membrillo-por-kilo/00000000004447" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Sandía roja por kilo.jpg" alt="Sandía roja por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/sandia-roja-por-kilo/00000000004031" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/sandia-roja-por-kilo-00000000004031?gclid=Cj0KCQjwvLOTBhCJARIsACVldV3dxrsb2Tk_jRe_lu8GoGiEaPtKqi4sGwMTlXSpOqcJlLMPymkjf10aAt-6EALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Sandía personal por kilo.jpg" alt="Sandía personal por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/sandia-personal-por-kilo/00000000003421" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Pl%C3%A1tanos-y-Tropicales/Sandia-Personal-kg/p/000000000003108755?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/lima por kilo.jpg" alt="Lima por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/lima-por-kilo/00000000004304" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/lima-por-kilo-00000000004304" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/guayaba por kilo.jpg" alt="Guayaba por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/guayaba-por-kilo/00000000004299" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/guayaba-por-kilo-00000000004299?gclid=Cj0KCQjwvLOTBhCJARIsACVldV3yLabODfHgyyXOnB1du_sKNiCjrcP-Q9vCdMx5hqoD-2Z24gkgfiYaAiyDEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Guayaba rosa por kilo.jpg" alt="Guayaba rosa por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/guayaba-rosa-por-kilo/00000000004488" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/guayaba-rosa-por-kilo-00000000004488" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/ciruela importada por kilo.jpg" alt="Ciruela importada por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/ciruela-importada-por-kilo/00000000004039" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Peras-y-Frutas-Finas/Ciruela-Moscatel-Kg/p/000000000003102783?gclid=Cj0KCQjwvLOTBhCJARIsACVldV0pFBN-AxXoUeVP3HQpWGI_Je-svUSCS6PlMw8Gd6pQW07nJZsa2dkaAsFGEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/ciruela roja nacional por kilo.jpg" alt="Ciruela roja nacional por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/ciruela-roja-nacional-por-kilo/00000000004041" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Piña miel por kilo.jpg" alt="Piña miel por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/pina-miel-por-kilo/00000000004430" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Pl%C3%A1tanos-y-Tropicales/Pi%C3%B1a-Gota-Miel%C2%A0por-Kg/p/000000000003102823?gclid=Cj0KCQjwvLOTBhCJARIsACVldV2-ylT7-SGdcWxlYtj-KTD53Nd7VD3PpIkgFBUp8nY3qIcwlOUol3saAqPUEALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Uva blanca sin semilla por kilo.jpg" alt="Uva blanca sin semilla por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/uva-blanca-sin-semilla-por-kilo/00000000004022" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/uva-blanca-sin-semilla-kg/503.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Uva roja sin semilla por kilo.jpg" alt="Uva roja sin semilla por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/uva-roja-sin-semilla-por-kilo/00000000004023" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/Uvas-y-Berries/Uva-Roja-sin-Semilla-por-Kg/p/000000000003102810?siteName=Sitio+de+Chedraui&gclid=Cj0KCQjwvLOTBhCJARIsACVldV0MssdloMR-N7gdklQRbuIvSsQDuK2qjBgm-8FG1SuZBrQAKBEQ9q4aAu_NEALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Plátano orgánico Marketside por kilo.jpg" alt="Plátano orgánico Marketside por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/platano-organico-marketside-por-kilo/00000000004853" target="ba_blank">Ver en walmart</a></div>
   </div>
    
<div class="fexcajasPR"><img src="/imagenes/frutas/Papaya maradol por kilo.jpg" alt="Papaya maradol por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/papaya-maradol-por-kilo/00000000003112" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/papaya-maradol-por-kilo-00000000003112?gclid=Cj0KCQjwvLOTBhCJARIsACVldV16g6NR5gyamzErx8kqxe4xo6UHvMVpWTu2eXDvE-e0tSDxaWjlKA8aAiGgEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
        
<div class="fexcajasPR"><img src="/imagenes/frutas/Toronja importada por kilo.jpg" alt="Toronja importada por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/toronja-importada-por-kilo/00000000004285" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Frutas/C%C3%ADtricos/Toronja-por-Kg/p/000000000003102780?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/frutas/Tuna Blanca por K.jpg" alt="Tuna blanca por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas/tuna-blanca-por-kilo/00000000004255" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.sams.com.mx/10-1/tuna-1-8-kg/000333381" target="ba_blank">Ver en sams</a>
    </div></div> -->
    

</div>


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

    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="../Prueba7/java.js"></script>
    <script src="../whatss.js"></script>
    <!-- <script src="../FinalPrueba/java.js"></script>   -->
    <script src="../js/create-html-frutas.js"></script>
    <script src="../js/maps-directions.js"></script>
    <script src="../js/redirect-buscar.js"></script>


</body>
</html>