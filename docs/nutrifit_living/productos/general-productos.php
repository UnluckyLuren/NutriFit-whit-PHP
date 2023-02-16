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
    </svg>
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
            <li><a href="#"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼ Busqueda</p></a>
            <ul class="submenuSECCIONES" id="ListaProductos"></li>
            <li><a href="#">Cereales/Carbohidratos</a></li>
            <li><a href="#">Leguminosas</a></li>
            <li><a href="#">Grasas</a></li>
            <li><a href="#">Frutas</a></li>
            <li><a href="#">Verduras</a></li>
            <li><a href="#">Proteínas</a></li>
        </ul>
        </ul>
    </nav>
</div>

<pre class="titulo_de_servicios_productos" id="TitleChange">Busqueda</pre>

<div class="buscador">
    <button id="buscarBtn" ><img src="../imagenes/Lupa.svg"></button>
    <input type="text" id="buscadorGeneral">
</div>


<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >
<!-- 
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Amaranto Aires de Campo orgánico 250 g.jpg" alt="Amaranto Aires de Campo orgánico 250 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/amaranto-aires-de-campo-organico-250-g/00750221983115" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/amaranto-aires-campo-organico-250-g-00750221983115" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Amaranto Dul Cerel natural 250 g.jpg" alt="Amaranto Dul Cerel natural 250 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/amaranto-dul-cerel-natural-250-g/00750148580011" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/abarrotes/galletas-cereales-y-barras/amaranto-muy-natural-natural-250g_00750302516721?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuksbJgXGxpiLtQtM4HcnDT--KEtfpt9Z2-y5ogkWm8omoKlC2tqhexgaAqb5EALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Amaranto Tehutli tostado 250 g.jpg" alt="Amaranto Tehutli tostado 250 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/amaranto-tehutli-tostado-250-g/00750300001306" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/amaranto-tehutli-trozos-250-g-00750300001304" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Hojuelas de avena Quaker Oats integral 475 g.jpg" alt="Hojuelas de avena Quaker Oats integral 475 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/hojuelas-de-avena-quaker-oats-integral-475-g/00750047800040" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/hojuelas-de-avena-integral-quaker-475-gr/11241253.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukuhaDQLgxh-bMNHwbGqK_8T3lQg8lWBoYC7AHkcUxNdW_0nsjnuGr4aAgKBEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Quaker 3 minutos 610 g.jpg" alt="Avena Quaker 3 minutos 610 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-quaker-3-minutos-610-g/00750047802766" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-quaker-3-minutos-610g/11586913.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kuktq2bYybvYRXLVlJT48Z1S26TRI8UzJ2wKbmY8SMEni7Elg3jUiAJYaAh5bEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Hojuelas de avena Great Value 1 kg.jpg" alt="Hojuelas de avena Great Value 1 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/hojuelas-de-avena-great-value-1-kg/00750649500245" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/hojuelas-avena-great-value-1-kg-00750649500245" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Integral Granvita 1 kg.jpg" alt="Avena Integral Granvita 1 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-integral-granvita-1-kg/00009433104385" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/avena-integral-granvita-kg-00009433104385?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuksnKTq1ByvTBoxt2scpTdTXRokbm1sbpfd7kQssOpri_H3-3F189zwaAu8zEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Granvita orgánica 350 g.jpg" alt="Avena Granvita orgánica 350 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-granvita-organica-350-g/00009433147010" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-granvita-organica-bol-350gr/2371260.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kuksxndpsn6-F0u6gZbqCAqgsstNOQ1pyAfFXrvcapTqPlng_Nwb-pD8aAkqJEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Tía Ofilia orgánica 300 g.jpg" alt="Avena Tía Ofilia orgánica 300 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-tia-ofilia-organica-300-g/00750301929217" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-organica-gluten-free-tia-ofilia-organica-300-grs/11162009.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukttHOEa7MMOu3xYqpUpuTz9fwy9oDC55JOnt0VLDTh6blbY5AmYzUIaApIzEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Quaker Super Foods linaza chía y quinoa 475 g.jpg" alt="Avena Quaker Super Foods linaza chía y quinoa 475 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-quaker-super-foods-linaza-chia-y-quinoa-475-g/00750047800727" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-con-linaza-chia-y-quinoa-quaker-475-gr/11356503.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukskwWdbYgq82tmXWtxLCrKK-qdO9TR_b7nrrxH_gAWBzdXSXLSbPREaAhpIEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Hojuela de avena Granvita de grano entero 425 g.jpg" alt="Hojuela de avena Granvita de grano entero 425 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/hojuela-de-avena-granvita-de-grano-entero-425-g/00009433118575" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-integral-gluten-free-granvita-425-gr/9139156.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Avena Aires de Campo orgánica 500 g.jpg" alt="Avena Aires de Campo orgánica 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/avena-aires-de-campo-organica-500-g/00750221983880" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/avena-organica-en-hojuelas-aires-de-campo-500-gr/11311192.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukucHBaMBAPhkXOHfhbpeibs7bXotobsvS_troVjimz9NXKdsQl-OV8aAt23EALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Arroz Verde Valle precocido blanco 300 g.jpg" alt="Arroz Verde Valle precocido blanco 300 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimentos-instantaneos/arroz-verde-valle-precocido-blanco-300-g/00750107130266" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/arroz-precocido-verde-valle-300-gr/383232.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kukv2NpAak9g-kyRocRs2LyXsRQwUtLdQns0lGFNUlMaDpxRcyR6fgQ0aAg8QEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Arroz Great Value super extra 900 g.jpg" alt="Arroz Great Value super extra 900 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/arroz-great-value-super-extra-900-g/00750179163863" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/arroz-aurrera-super-extra-g-00750179163862?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuksVDsM1WmrTQHZWZ9OQYrI4n9FUcusxbnBdTiqbjXTyCfSHRMmRaS0aArZXEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbroductoohidratos/Arroz Verde Valle grano grueso 900 g.jpg" alt="Arroz Verde Valle grano grueso 900 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/arroz-verde-valle-grano-grueso-900-g/00750107130331" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/arroz-super-extra-verde-valle-900-gr/1538960.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kukt9a3UOwxfP_WG4m9CAHuceKi5wF8c4fmYQOGuAkohiuAhQPQ--YecaAiH1EALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Arroz SOS grueso súper extra 1 kg.jpg" alt="Arroz SOS grueso súper extra 1 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/arroz-sos-grueso-super-extra-1-kg/00750111110503" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/arroz-sos-grueso-super-extra-1-kg-00750111110503" target="ba_blank">Ver en aurrera</a>
    </div></div>
        

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Arroz SOS impegable parbolizado 1 kg.jpg" alt="Arroz SOS impegable parbolizado 1 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/arroz-sos-impegable-parbolizado-1-kg/00750111110506" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/arroz-sos-precocido-bol-907gr/669468.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Arroz La Merced integral 1 kg.jpg" alt="Arroz La Merced integral 1 kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/arroz-la-merced-integral-1-kg/00750104720237" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/arroz-integral-la-merced-900-g/11287797.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuktBItq3CPAIIFS1Ib2SHfkcuGluy3S_HCmarqvrHRHVUBU5CbGv7mYaAu6hEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Barras Great Value integrales 180 g.jpg" alt="Barras Great Value integrales 180 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/barras-great-value-integrales-180-g/00750179160533" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/barras-great-value-integrales-180-g-00750179160533" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Barras Nature Valley Crunchy con avena integral y miel 252 g.jpg" alt="Barras Nature Valley Crunchy con avena integral y miel 252 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/barras-nature-valley-crunchy-con-avena-integral-y-miel-252-g/00001600044683" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/barras-de-cereal-nature-valley-con-avena-integral-y-miel-caja-con-6-pz/717097.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuktoSSNjDADZ9Ma1j5f7MFelXFpyoQ34V03CQG0ZvlaE4-Ep3P-tpQAaAmoUEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan Francés 1 Pieza.jpg" alt="Pan Francés 1 Pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-salado/bolillo-pza/00020000300000" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-frances-1-pieza/11556395.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan Barra Francesa 1 Pieza.jpg" alt="Pan Barra Francesa 1 Pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-salado/barra-chica-por-pza/00020000100000" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-barra-francesa-1-pieza/11556292.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Camote Amarillo Kg.jpg" alt="Camote Amarillo Kg"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/camote-amarillo-por-kilo/00000000004816" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/camote-amarillo-kg/155.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Camote morado por kilo.jpg" alt="Camote morado por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/camote-morado-por-kilo/00000000003333" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Camote de azafrán por kilo.jpg" alt="Camote de azafrán por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/camote-de-azafran-por-kilo/00000000004918" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/Departamentos/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Ra%C3%ADz-de-Azafr%C3%A1n-por-kg/p/000000000003017710?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Camote amarillo en malla 900 g.jpg" alt="Camote amarillo en malla 900 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/camote-amarillo-en-malla-900-g/00061762000000" target="ba_blank">Ver en walmart</a></div>
   </div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Cereal Nestlé Fitness nutrición + energía con avena integral 600 g.jpg" alt="Cereal Nestlé Fitness nutrición + energía con avena integral 600 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/cereal-nestle-fitness-nutricion-energia-con-avena-integral-600-g/00750105865266" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/cereal-nestle-fitness-nutricion-energia-con-avena-integral-600-g-00750105865266" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Cereal Great Value Bran Fibra Flakes 620 g.jpg" alt="Cereal Great Value Bran Fibra Flakes 620 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/cereal-great-value-bran-fibra-flakes-620-g/00750179164511" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/cereal-great-value-bran-fibra-flakes-620-g-00750179164511" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Cereal hojuelas de trigo integral Nestlé Fitness con fruta 350 g.jpg" alt="Cereal hojuelas de trigo integral Nestlé Fitness con fruta 350 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/cereal-hojuelas-de-trigo-integral-nestle-fitness-con-fruta-350-g/00750105928980?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwgYSTBhDKARIsAB8KukuObaD1ADEwnryzPkN44iqfZ82dhLzMc2wrps9n_s04MB0iedMDLZcaAp75EALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/search?name=Cereal%20hojuelas%20de%20trigo%20integral%20Nestl%C3%A9%20Fitness%20con%20fruta%20350%20g" target="ba_blank">Ver en aurrera</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Cereal de avena Quaker Multibran con pasas 420 g.jpg" alt="Cereal de avena Quaker Multibran con pasas 420 g"></a>
       <div><a class="boton_walmart" href="https://super.walmart.com.mx/cereales-y-barras/cereal-de-avena-quaker-multibran-con-pasas-420-g/00750176186539?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwgYSTBhDKARIsAB8Kukuw27JK5rNlezrXqYRf7izdEf7sqbZqUHNhmS_J2XiEqH7dLhYtvcMaAtmZEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/cereal-multibran-quaker-con-pasas-420-gr/1614658.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukugPIGssumf-lTbdqWZ5uLDfgeKtHWklWd77W3sv7kzAngdE3iPTEwaAgawEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Elote blanco por pieza.jpg" alt="Elote blanco por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/elote-blanco-por-pieza/00000000004077" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/elote-blanco-por-pieza-00000000004077?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukvvarqLiZ6r7G_HywaiKhfy4oBVGKgZMRlgblKS2O6gZzCrEQosAmcaAsVVEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pasta Barilla spaguetti N°5 de 500 g.jpg" alt="Pasta Barilla spaguetti N°5 de 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/pasta-barilla-spaguetti-n-5-de-500-g/00807680951520" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/spaghetti-no.-5-barilla-500-gr/623696.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukvtDT72hJlpKyp14FsKiv_SjfXQRxKmDT6EqGBs9lglMAqmpPTFa8saApmIEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Spaghetti La Moderna corto 200 g.jpg" alt="Spaghetti La Moderna corto 200 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/spaghetti-la-moderna-corto-200-g/00750101831010" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pasta-spaghetti-mantequi-la-moderna-200g/11491396.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukuGeS3RP3cHZ3Mp9jMfhDBQzJUK_UsV6Yua__kvchMIEKeyoK8HR7YaAnJ6EALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Spaghetti La Moderna integral 200 g.jpg" alt="Spaghetti La Moderna integral 200 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/spaghetti-la-moderna-integral-200-g/00750101831900" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pasta-p-sopa-integral-spaghetti-bol-200/1328311.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukvvUiK5efwPWMNOV9nGmRSP0qpRM5PWNQbV_AXFegaKbjfLfXPDvnkaAg-xEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pasta Barilla spaghetti N°7 500 g.jpg" alt="Pasta Barilla spaghetti N°7 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/pasta-barilla-spaghetti-n-7-500-g/00807680951519" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/spaghetti-no.-7-barilla-500-gr/623695.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kukutmv3AwQJ0QXaLfyE_CsTodngYknopou5WDU-sKLXXZJEyVbQwDN8aAsjpEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pasta Great Value spaghetti 500 g.jpg" alt="Pasta Great Value spaghetti 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/pasta-great-value-spaghetti-500-g/00750179160316" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/pasta-great-value-spaghetti-500-g-00750179160316" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Sopa de pasta La Moderna Spaghetti 500 g.jpg" alt="Sopa de pasta La Moderna Spaghetti 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pastas/sopa-de-pasta-la-moderna-spaghetti-500-g/00750101831135" target="ba_blank">Ver en walmart</a></div>
    </div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras surtidas 468 g.jpg" alt="Galletas Gamesa Habaneras surtidas 468 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-gamesa-habaneras-surtidas-468-g/00750100066261" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/galletas-gamesa-habaneras-integrales-468-gr-con-4-piezas/1036896.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukuUSz_0-CzvoZjDiMz0Ehn7Zzhyo6ZlARPgX4AARl1Pz-RPUrLnBREaAviYEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras Clásicas trigo, salvado y germen 117 g.jpg" alt="Galletas Gamesa Habaneras Clásicas trigo, salvado y germen 117 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-gamesa-habaneras-clasicas-trigo-salvado-y-germen-117-g/00750100066265?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/galletas-gamesa-habaneras-117-gr/1036894.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuktdrtOi0Q8R7_gfarKCGvVx-1ThTP4UuqgJuhX6RVBvwrkTbRRG0egaAgS3EALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas Gamesa Habaneras  salvado y germen 4 rollos de 106.jpg" alt="Galletas Gamesa Habaneras clásicas de trigo, salvado y germen 4 rollos de 106 g/u"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-gamesa-habaneras-clasicas-de-trigo-salvado-y-germen-4-rollos-de-106-g-u/00750100066260?adBanner=super&adStoreId=0000009999" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/galletas-gamesa-habaneras-424-con-4-piezas/1036895.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kuks_4A_61mb13aqfv79L7_G4VQOAcMqLPxwj6LAFPYEzQAL54SeC2nMaAqCTEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>

        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas Marías Gamesa 3 rollos de 144 g.jpg" alt="Galletas Marías Gamesa 3 rollos de 144 g c/u"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-marias-gamesa-3-rollos-de-144-g-c-u/00750100063335" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/galletas-marias-gamesa-rollos-g-cu-00750100063335?gclid=Cj0KCQjwgYSTBhDKARIsAB8KuksKidp4LZ4_fuGA8w4548UyTwMCQC-W9mJriABXXZHO76kzDdnRcdYaAnzGEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas Okko de arroz integral 140 g.jpg" alt="Galletas Okko de arroz integral 140 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-okko-de-arroz-integral-140-g/00750060800027?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/galleta-de-arroz-integrales-okko-140-gr/11232032.php?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukvdWe5RGZc3M2426-sFJkNimiC_ZQGby6wVr2wwutTdLrz-vO1YddYaAka8EALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galletas de arroz Okko con quinoa 140 g.jpg" alt="Galletas de arroz Okko con quinoa 140 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galletas-de-arroz-okko-con-quinoa-140-g/00750060800028?adBanner=super&adStoreId=0000009999" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://articulo.mercadolibre.com.mx/MLM-1368919079-galletas-de-arroz-con-quinoa-okko-140g-sin-gluten-_JM?matt_tool=94495926&matt_word=&matt_source=google&matt_campaign_id=15697272370&matt_ad_group_id=128898863182&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447263&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=414338141&matt_product_id=MLM1368919079&matt_product_partition_id=1413162902526&matt_target_id=aud-1575562102963:pla-1413162902526&gclid=Cj0KCQjwgYSTBhDKARIsAB8Kukv6iC1Z2bTkO4Kxm2uOyZdxdTQxTvDPk1EfisMnJn_asTQK9MFSaWoaAr2LEALw_wcB" target="ba_blank">Ver en M libre</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Galleta de arroz sanísimo con quinoa 108 g.jpg" alt="Galleta de arroz Sanissimo con quinoa 108 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/galletas/galleta-de-arroz-sanissimo-con-quinoa-108-g/00750103045541?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Despensa/Galletas/Galleta-Sanissimo-Arroz-y-Quinoa-9-Piezas-108g/p/000000000003493460?gclid=Cj0KCQjwgYSTBhDKARIsAB8Kuku4_4Tfn4PYnv1Y3FaHoIBHX4cYyjaLjs8Uk0bNy1Z8BHK9GpgjUo4aAmgDEALw_wcB&siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tortillas Mission ligeras 550 g.jpg" alt="Tortillas Mission ligeras 550 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tortillas-mission-ligeras-550-g/00750105495047?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tortillas de harina Tía Rosa Tortillinas ligeras 306 g.jpg" alt="Tortillas de harina Tía Rosa Tortillinas ligeras 306 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tortillas-de-harina-tia-rosa-tortillinas-ligeras-306-g/00750103047732?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tortillas de nopal Nopalia 500 g.jpg" alt="Tortillas de nopal Nopalia 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tortillas-de-nopal-nopalia-500-g/00750300870815?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Alimentos-Preparados/Pasta-y-Base-Harina/Tortilla-de-Nopal-Nopalia-refrigerada-500g/p/000000000003011443?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tortillas con nopal Señor Cactus original 500 g.jpg" alt="Tortillas con nopal Señor Cactus original 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tortillas-con-nopal-senor-cactus-original-500-g/00750300481801?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/tortillas-de-nopal-senor-cactus-500-gr/1480969.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tortillas Maiz Nopal 500 gr.jpg" alt="Tortillas Maiz Nopal 500 gr"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tortillas-susalia-maiz-con-nopal-500-g/00750301354300" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/tortillas-maiz-nopal-500-gr/2089865.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Totopos Sanissimo nopal 200 g.jpg" alt="Totopos Sanissimo nopal 200 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/totopos-sanissimo-nopal-200-g/00750302896571" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/totopo-nopal-sanissimo-280-gr-bol/11529782.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Churros de nopal Susalia Churri Nopal sabor chile limón 200 g.jpg" alt="Churros de nopal Susalia Churri Nopal sabor chile limón 200 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/churros-de-nopal-susalia-churri-nopal-sabor-chile-limon-200-g/00750301354349" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://articulo.mercadolibre.com.mx/MLM-896451864-churros-de-maiz-y-nopal-chile-limon-susalia-80g-gluten-free-_JM?matt_tool=28238160&utm_source=google_shopping&utm_medium=organic" target="ba_blank">Ver en M libre</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Totopo Totopos Maiz Con Nopal Horneados Con Efecto Prebiotico 200g Susalia 200 Gramo Bolsa.jpg" alt="Totopo Totopos Maiz Con Nopal Horneados Con Efecto Prebiotico 200g Susalia 200 Gramo Bolsa"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/totopos-susalia-horneados-con-unilina-y-fibra-200g/00750301354306?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/totopo-totopos-maiz-con-nopal-horneados-con-efecto-prebiotico-200g-susalia-200-gramo-bolsa/11071993.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tostadas de maíz Salmas horneadas 23 paquetes de 3 pzas.jpg" alt="Tostadas de maíz Salmas horneadas 23 paquetes de 3 pzas c/u"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tostadas-de-maiz-salmas-horneadas-23-paquetes-de-3-pzas-c-u/00065848000125" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/tostadas-sanisimo-salmas-con-nopal-126-gr/11195037.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tostadas de maíz azul Salmas horneadas 7 paquetes de 3 pzas.jpg" alt="Tostadas de maíz azul Salmas horneadas 7 paquetes de 3 pzas"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tostadas-de-maiz-azul-salmas-horneadas-7-paquetes-de-3-pzas-c-u/00065848000234" target="ba_blank">Ver en walmart</a></div>
   </div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan Bimbo Multigrano 610 g.jpg" alt="Pan Bimbo cero cero 610 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-bimbo-cero-cero-610-g/00750103046709?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
  </div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan En Barra Bimbo Cero 610 gr.jpg" alt="Pan En Barra Bimbo Cero 610 gr"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-bimbo-multigrano-610-g/00750100013144?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-en-barra-bimbo-cero-610-gr/11117582.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan para hamburgesa Bimbo cero cero 528 g.jpg" alt="Pan para hamburgesa Bimbo cero cero 528 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-para-hamburgesa-bimbo-cero-cero-528-g/00750081000008" target="ba_blank">Ver en walmart</a></div>
    </div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Medias noches Bimbo cero cero 384 g.jpg" alt="Medias noches Bimbo cero cero 384 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/medias-noches-bimbo-cero-cero-384-g/00750081000009?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
   </div>
        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan integral Oroweat 12 granos y semillas 680 g.jpg" alt="Pan integral Oroweat multigrano 680 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-integral-oroweat-multigrano-680-g/00750100037541?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOXhcS0aFuaQYgSs7gwf4MXmdk8U8FDWkBcUcOx183agWvwakczmbNYaArhTEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-en-barra-oroweat-multigrano-680-gr/1206586.php?gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOXbpMBgHCGOYDrPCyrjgWY-5O8mcArFrrpUm383HVUOM5kg6yORZ3YaAvkvEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan integral Oroweat 680 g.jpg" alt="Pan integral Oroweat 680 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-integral-oroweat-680-g/00750100037528?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOVqNGRlUkqCWhillsnXXjM6ZdTGNVTpoNQ6B3objdqkE3Hq9VuxFE4aAm8LEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-en-barra-oroweat-integral-680-gr/1206592.php?gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOWISi2_uf9HDU69m03n-9kziVkougVXpQom4NwtyBBAaS2nwDa4U1QaAunNEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan integral Oroweat 12 granos y semillas 680 g.jpg" alt="Pan integral Oroweat 12 granos y semillas 680 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/pan-integral-oroweat-12-granos-y-semillas-680-g/00750100037529?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pan-en-barra-oroweat-integral-12-granos-680-gr/1206602.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Pan integral New York Deli & Bagel Premium Golden Grain 625 g.jpg" alt="Pan integral New York Deli & Bagel Premium Golden Grain 625 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-salado/pan-integral-new-york-deli-bagel-premium-golden-grain-625-g/00750129010051?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOUzauTbipCiI6qVB0H_4_9ZmwWPH8arMi_jZwq7wmk6k36vjBYuicEaArytEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/abarrotes/pan-tortilla-y-totopos/paquete-golden-integral-new-york-deli-bagel-pan-de-caja-integral-3-piezas_00750129010175?gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOX-yIdMza0TAvsXN0XvUOmMdbL9HvH1EX_ArtUBHOMZaFD0HgSVQDQaAnMEEALw_wcB" target="ba_blank">Ver en aurrera</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Papa blanca alfa por kilo.jpg" alt="Papa blanca alfa por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/papa-blanca-alfa-por-kilo/00000000004083" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/buscar?q=Papa+blanca+alfa+por+kilo&cid=&search-button=" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Papa cambray por kilo.jpg" alt="Papa cambray por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/papa-cambray-por-kilo/00000000004728" target="ba_blank">Ver en walmart</a></div>
    </div>
                    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Palomitas de maíz ACT II Balance sabor sal de mar 110 g.jpg" alt="Palomitas de maíz ACT II Balance sabor sal de mar 110 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/palomitas-de-maiz-act-ii-balance-sabor-sal-de-mar-110-g/00750100656016?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOU4hBVRgtvuiBoazs-VTQ8JgHR6nY498ALZuVIyX-GWIAtocDsuDSwaAu5xEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/palomitas-maiz-act-ii-balance-sabor-sal-mar-110-g-00750100656016" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Palomitas de maíz ACT II Balance sabor pimienta y limón 130 g.jpg" alt="Palomitas de maíz ACT II Balance sabor pimienta y limón 130 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/palomitas-de-maiz-act-ii-balance-sabor-pimienta-y-limon-130-g/00750100656015?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOVqFlWSnZLCmZzwTqdrBc3OgRIOB8qcTH-TDmz7hgyjLzqE2Rj2_z0aApZ_EALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/palomitas-maiz-act-ii-balance-sabor-pimienta-y-limon-130-g-00750100656015" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Quinoa Okko granos 300 g.jpg" alt="Quinoa Okko granos 300 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/quinoa-okko-granos-300-g/00750032631959" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/quinoa-okko-granos-300-g-00750032631959" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Quinoa Wand's 220 g.jpg" alt="Quinoa Wand's 220 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/quinoa-wand-s-220-g/00750046222597" target="ba_blank">Ver en walmart</a></div>
    </div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Quinoa Tía Ofilia orgánica 200 g.jpg" alt="Quinoa Tía Ofilia orgánica 200 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/quinoa-tia-ofilia-organica-200-g/00750301929214" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/quinoa-tia-ofilia-organica-200-grs/11156295.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Quinoa Verde Valle 340 g.jpg" alt="Quinoa Verde Valle 340 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/quinoa-verde-valle-340-g/00750107130409" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/quinoa-verde-valle-340-gr/11403604.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Quinoa Goya tricolor orgánica 340 g.jpg" alt="Quinoa Goya tricolor orgánica 340 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/quinoa-goya-tricolor-organica-340-g/00004133105927" target="ba_blank">Ver en walmart</a></div>
    </div>
                
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Palomitas Slim Pop mezcla de chiles 110 g.jpg" alt="Palomitas Slim Pop mezcla de chiles 110 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/palomitas-slim-pop-mezcla-de-chiles-110-g/00750032629786" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/palomitas-slim-pop-mezcla-de-chiles-110-gr/11270077.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tostadas de maíz Sanísimo horneadas 240 g.jpg" alt="Tostadas de maíz Sanissimo horneadas 240 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tostadas-de-maiz-sanissimo-horneadas-240-g/00065848000127" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/tostadas-maiz-sanissimo-horneadas-240-g-00065848000127" target="ba_blank">Ver en aurrera</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tostadas Great Value de maíz horneadas 237.5 g.jpg" alt="Tostadas Great Value de maíz horneadas 237.5 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/tostadas-great-value-de-maiz-horneadas-237-5-g/00750179167030" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/tostadas-great-value-maiz-horneadas-2375-g-00750179167030" target="ba_blank">Ver en soriana</a>
    </div></div>
                        
<div class="fexcajasPR"><img src="/imagenes/cereales-carbohidratos/Tostada Horneada Susalia con Chía y Linaza.jpg" alt="Tostada Horneada Susalia con Chía y Linaza"></a>
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/abarrotes/pan-tortilla-y-totopos/tostada-horneada-susalia-con-chia-y-linaza_00750301354351" target="ba_blank">Ver en aurrera</a></div>
    <div><a class="boton_soriana" href="https://www.bodegaaurrera.com.mx/despensa/abarrotes/pan-tortilla-y-totopos/tostada-horneada-susalia-con-chia-y-linaza_00750301354351?gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOUa_m4vPAFGDfl_2-jKfDqjXNeXB2YG4RBWM_U0TbGbQ2lAYJv-f2EaAqn8EALw_wcB" target="ba_blank">Ver en soriana</a>
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



<footer class="containerfooter" id="containerfooterBuscador">
    <div class="item-1">
        <div class="imagen">
            <!-- <figure> -->

                <a href="/nutrifit living/index (1).php">
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
    <!-- <script src="../FinalPrueba/java.js"></script> -->
    <script src="../Prueba7/java.js"></script>
    <script src="../js/buscador.js"></script>
    <script src="../js/maps-directions.js"></script>

</body>
</html>