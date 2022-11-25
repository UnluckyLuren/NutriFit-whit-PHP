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


<!-- <link rel="stylesheet" href="../CSS/style.css"> -->
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
            <a href="#"><img src="../imagenes/Gato enojado.webp" id="open"  class="userMenuImg"></a>
            <p>Iván Jesus Rodríguez</p>
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
            <li><a href="grasas.php"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼   Grasas</p></a>
            <ul class="submenuSECCIONES"></li>
            <li><a href="leguminosas.php"> Leguminosas</a></li>
            <li><a href="cereales_carbohidratos.php">Cereales/Carbohidratos</a></li>
            <li><a href="verduras.php">Verduras</a></li>
            <li><a href="../productos.php">Proteínas</a></li>
            <li><a href="frutas.php"> Frutas</a></li>

        </ul>
        </ul>
    </nav>
</div>
<pre class="titulo_de_servicios_productos">Grasas</pre>

<div class="buscador">
    <button id="buscarBtn" ><img src="../imagenes/Lupa.svg"></button>
    <input type="text" id="buscadorGeneral">
</div>

<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >

<!-- <div class="fexcajasPR"><img src="/imagenes/Grasas/AceiteGreatValue.jpg" alt="Aceite de oliva Great Value extra virgen en aerosol 141 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/aceites-de-cocina/aceite-de-oliva-great-value-extra-virgen-en-aerosol-141-g/00750179166104" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/aceite-comestible-great-value-puro-oliva-extra-virgen-aerosol-198-g-00750179160788" target="ba_blank">Ver en soriana</a>
    </div></div>
   
<div class="fexcajasPR"><img src="/imagenes/Grasas/AceiteOli.jpg" alt="Aceite de Oliva Oli de Nutrioli Extra Virgen Orgánico 500 ml"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/aceites-de-cocina/aceite-de-oliva-nutrioli-oli-extra-virgen-organico-500-ml/00750103912228?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/aceite-de-oliva-oli-de-nutrioli-extra-virgen-organico-500-ml/11465897.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
 <div class="fexcajasPR"><img src="/imagenes/Grasas/AceitePam.jpg" alt="Aceite en aerosol Pam antiadherente olivo 141 g"></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/aceites-de-cocina/aceite-en-aerosol-pam-antiadherente-olivo-141-g/00006414403034" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/aceite-en-aerosol-pam-puro-de-oliva-170-gr/568988.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/AceiteGreatValueNoAerosol.jpg" alt="Aceite de oliva Great Value extra virgen 250 ml"></a>
        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/aceites-de-cocina/aceite-de-oliva-great-value-extra-virgen-250-ml/00750649500696" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/aceite-oliva-great-value-extra-virgen-500-ml-00750649500697" target="ba_blank">Ver en aurrera</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/AceiteOliAerosol.jpg" alt="Aceite de oliva extra virgen Nutrioli Oli en spray 145 ml"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/aceites-de-cocina/aceite-de-oliva-extra-virgen-nutrioli-oli-en-spray-145-ml/00750103912262" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/aceite-oliva-oli-ev-spray-145-ml/11533388.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Aguacatemalla.jpg" alt="Aguacate en malla por pza "></a>
    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/aguacate-en-malla-por-pza/00000000004471" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/aguacate-hass-malla-pza/645883.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/AguacateKg.jpg" alt="Aguacate hass"></a>
        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/aguacate-hass-por-kilo/00000000004225" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/aguacate-hass-malla-pza/645883.php?gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X2neeIhvxExwGsyO-ql6djIZROBsq6Os2LlnwOF31cj5ggv6K8QcDEaAlwMEALw_wcB#fo_c=1341&fo_k=378bd15937ae5af3a14cd7f65bfafa7f&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/AjonjoliGreatValue.jpg" alt="Ajonjolí Great Value 100 g"></a>
        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/ajonjoli-great-value-100-g/00750179160900?adBanner=express&adStoreId=0000009998&gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X1Uz-6f_4MK8MXG7Jg4xSEinr3dkhbJyL3aPN71_Jj28BmOL5XswsIaApBqEALw_wcB" target="ba_blank">Ver en walmart</a></div>
    
    </div>
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/AjonjoliValleVerde.jpg" alt="Ajonjolí Verde Valle 100 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/ajonjoli-verde-valle-100-g/00078162400663?adBanner=super&adStoreId=0000009999&gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X1Vxj6sCYbxgg4OHo1_c67Pab1mBsY1sS7QWnRxA4LM9CtXuO2iKjsaAr_5EALw_wcB" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/ajonjoli-verde-valle-100-gr/9005872.php?gclid=Cj0KCQjwl7qSBhD-ARIsACvV1X14V7fAXs6YaMF79ec20SWc86XcnrCdPG7DzBE3mLpYGBeMv6-lacYaAoxrEALw_wcB#fo_c=1341&fo_k=8d399a1308f096d29cbd1ec14d69d371&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Grasas/Almendra Verde Valle 100 g.png" alt="Almendra Verde Valle 100 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/almendra-verde-valle-100-g/00078162400664" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/almendra-verde-valle-75-gr/1935037.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Grasas/Almendras Great Value 100 g.png" alt="Almendras Great Value 100 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/almendras-great-value-100-g/00750179167022" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/almendras-great-value-g-00750179163831?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf8YLmElzWupsgn1jf3A3tfGBliWh-CC0BioUwgFGaqYJraTXEdUX8xoCXnQQAvD_BwE" target="ba_blank">Ver en aurrera</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Grasas/Almendra La Colina entera 100 g.png" alt="Almendra La Colina entera 100 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/almendra-la-colina-entera-100-g/00078536594085" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://despensa.bodegaaurrera.com.mx/p/almendra-la-colina-entera-100-g-00078536594085" target="ba_blank">Ver en soriana</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Vitrolero Pistache Blanco Valley Foods 800 gr.jpg" alt="Vitrolero Pistache Blanco Valley Foods 800 gr"></a>
                
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/abarrotes/frutas-y-chiles-secos/pistache-natural-bontatti-vitrolero-454-g_00750302879657?" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/vitrolero-pistache-blanco-valley-foods-800-gr/11493266.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Grasas/Pistache Wonderful 227 Gr Bol.jpg" alt="Pistaches Wonderful tostados con sal 227 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/pistaches-wonderful-tostados-con-sal-227-g/00001411391047?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf8C6AWoSouVPTPETZRgunmEqVZsajSauT1PlBoc3vRzplLhmJQ8MXxoC-8oQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/pistache-wonderful-227-gr-bol/11203380.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
     
    
<div class="fexcajasPR"><img   src="/imagenes/Grasas/Okko Avellana Entera Sin Cascara 200 G 200 Gr02.jpg" alt="Okko Avellana Entera Sin Cascara 200 G 200 Gr"></a>
                
    <div><a class="boton_walmart" href="https://articulo.mercadolibre.com.mx/MLM-1336986881-okko-avellana-entera-sin-cascara-200-g-200-gr-_JM?matt_tool=94495926&matt_word=&matt_source=google&matt_campaign_id=15697272370&matt_ad_group_id=128898863182&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447263&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=511010655&matt_product_id=MLM1336986881&matt_product_partition_id=1413162902526&matt_target_id=aud-1575562102963:pla-1413162902526&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf-VBILG0Ux-7PZ3O2cmfRkcY5A2MDeGW_x3DkFgq3kLH1vHcI6ID-BoCoVMQAvD_BwE" target="ba_blank">Ver en M libre</a></div>
    </div>  
        
<div class="fexcajasPR"><img  src="/imagenes/Grasas/Semilla de girasol Okko Super Foods 200 g.jpg" alt="Semilla de girasol Okko Super Foods 200 g"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/semilla-de-girasol-okko-super-foods-200-g/00750032676753" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/semillas-de-girasol-okko-200-gr/11191334.php" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/Grasas/Semilla de girasol pelada Wand's 300 g.png" alt="Semilla de girasol pelada Wand's 300 g"></a>
            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/semilla-de-girasol-pelada-wand-s-300-g/00750046309672" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/girasol-natural/9005053.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Semillas de girasol Bel Ara natural tostadas 250 g.jpg" alt="Semillas de girasol Bel Ara natural tostadas 250 g"></a>
                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/semillas-de-girasol-bel-ara-natural-tostadas-250-g/00750300387731" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/girasol-natural/9005053.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Semillas de girasol Bel Ara acarameladas 250 g.jpg" alt="Semillas de girasol Bel Ara acarameladas 250 g"></a>
                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/semillas-de-girasol-bel-ara-acarameladas-250-g/00750300387743" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/girasol-natural/9005053.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/Semilla De Chia Las Balsas.jpg" alt="Semilla De Chia Las Balsas "></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-pick-one-grano-entero-10-pzas-de-8-g-c-u/00750032632301" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/semilla-de-chia-las-balsas--/11269696.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Chía Verde Valle 320 g.jpg" alt="Chía Verde Valle 320 Gr"></a>
                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-verde-valle-320-g/00750107130410?adBanner=super&adStoreId=0000009999&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf5WwclWGFdTtmJQKYbTPreOf1VledjzG31L-fIPc2aYJuWmTxrKsdRoCfwsQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/chia-verde-valle-320-gr/11403605.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/Campo Vivo Campo Vivo Semillas De Chia.jpg" alt="Campo Vivo Campo Vivo Semillas De Chia"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-okko-semilla-300-g/00750032631958?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf1MQGqrZZJie2d6P0tmiOWNC1q8Q6rfAVMMkGdpXpE0nrzRrBt0WkBoCuOwQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/campo-vivo-campo-vivo-semillas-de-chia/11271242.php" target="ba_blank">Ver en soriana</a>
    </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/Grasas/Chía Wand's 220 g.jpg" alt="Chía Wand's 220 g"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-wand-s-220-g/00750046222596" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/chia-wands-220-g-00750046222596" target="ba_blank">Ver en aurrera</a>   
    </div></div>  
            
<div class="fexcajasPR"><img src="/imagenes/Grasas/Semillas de chia Dinat 100 g.jpg" alt="Semillas de chia Dinat 100 g"></a>
                        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/semillas-de-chia-dinat-100-g/00750046346307" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://articulo.mercadolibre.com.mx/MLM-789164307-semillas-de-chia-dinat-100g-_JM?matt_tool=94495926&matt_word=&matt_source=google&matt_campaign_id=15697272370&matt_ad_group_id=128898863182&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447263&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=481001736&matt_product_id=MLM789164307&matt_product_partition_id=1413162902526&matt_target_id=aud-1575562102923:pla-1413162902526" target="ba_blank">Ver en M libre</a>    
    </div></div>  

       
<div class="fexcajasPR"><img src="/imagenes/Grasas/Chía Okko semilla 300 g.jpg" alt="Chía Okko semilla 300 g"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-okko-semilla-300-g/00750032631958" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/cacahuates-mafer-tostado-sazonado-g-00750047801897?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf674FqImC0l0NLsB07om3PvMlyNf_nXRC6M5f_Cgfo0yYda0Lbig7hoC5DsQAvD_BwE" target="ba_blank">Ver en aurrera</a>
    </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/Grasas/Chía Tía Ofilia orgánica 250 g.jpg" alt="Chía Tía Ofilia orgánica 250 g"></a>
                            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/arroz-frijol-y-semillas/chia-tia-ofilia-organica-250-g/00750301929211" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/cacahuates-mafer-tostado-sazonado-g-00750047801897?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf674FqImC0l0NLsB07om3PvMlyNf_nXRC6M5f_Cgfo0yYda0Lbig7hoC5DsQAvD_BwE" target="ba_blank">Ver en aurrera</a>
   </div></div>   

<div class="fexcajasPR"><img src="/imagenes/Grasas/Cacahuates Mafer premium tostado sazonado sin aceite 180 g.jpg" alt="Cacahuates Mafer premium tostado sazonado sin aceite 180 g"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/cacahuates-mafer-premium-tostado-sazonado-sin-aceite-180-g/00750101112693" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/cacahuates-mafer-tostado-sazonado-g-00750047801897?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf674FqImC0l0NLsB07om3PvMlyNf_nXRC6M5f_Cgfo0yYda0Lbig7hoC5DsQAvD_BwE" target="ba_blank">Ver en aurrera</a>
    </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/Grasas/Cacahuates Great Value rostizados 454 g.jpg" alt="Cacahuates Great Value rostizados 454 g"></a>
                            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/cacahuates-great-value-rostizados-454-g/00007874212204?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmfw2ho1NMd1D_InpDJ5R6c9ucI2V7TNPy-xYRruioj_flJ0OkvttdTRoCCaIQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    </div>  
               
<div class="fexcajasPR"><img src="/imagenes/Grasas/Cacahuates Calidad Selecta tostados 250 g.jpg" alt="Cacahuates Calidad Selecta tostados 250 g"></a>
                        
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/articulos-a-granel/cacahuates-calidad-selecta-tostados-250-g/00750301926816?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmfyd_YzMPXxDo20VumykR-25D2yAkFcmlf2FdNahLuIpG8QVQlC5exxoCDNAQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/cacahuate-tostado-calidad-selecta-g-00750301926804?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf5ULhFFrkEbW7cIQX4Rm0FF_SYhQ6IbgUOTkmsHiyciFjJMpC9eOcRoC1-IQAvD_BwE" target="ba_blank">Ver en aurrera</a>
    </div></div>  
                    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Nuez Great Value 100 g.jpg" alt="Nuez Great Value 100 g"></a>
                                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/nuez-great-value-100-g/00750179167028?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf09GiqwiwHEp545N7ISD0OwgiTYOb3tvdOQFmJi5-fOMGAew7Yc1DRoCaBEQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    </div> 

<div class="fexcajasPR"><img src="/imagenes/Grasas/Nuez Verde Valle en mitades 100 g.jpg" alt="Nuez Verde Valle en mitades 100 g"></a>
                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/nuez-verde-valle-en-mitades-100-g/00078162400665?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmfxzcBIv12pqRkL1yiX7hziJEBiqqTrR9IW0CyisZ_NaOj-AtDFeQUhoCIM4QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/nuez-verde-valle-75-gr/11136800.php?gclid=CjwKCAjwu_mSBhAYEiwA5BBmfwn0kDJBW7obcweQNw_jhQgfOal52h9aHCB6kLkvQtDUjEnVbGAmXxoCeU8QAvD_BwE" target="ba_blank">Ver en soriana</a>
    </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/Grasas/Nuez Fun Fruit en mitades 200 g.jpg" alt="Nuez Fun Fruit en mitades 200 g"></a>
                            
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/nuez-fun-fruit-en-mitades-200-g/00750302065714?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf4KZeLsalf8TFQ-YDkSyXqg4HvMO-k4Fq9yi8kpRzxanB8aE2FtP_xoC45sQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/nuez-fun-fruit-mitades-100-g-00750302817501" target="ba_blank">Ver en aurrera</a>
    </div></div>  
    
           
<div class="fexcajasPR"><img src="/imagenes/Grasas/Fruta Mixta Bontatti Vitrolero 454 g.jpg" alt="Fruta Mixta Bontatti Vitrolero 454 g"></a>
                        
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/abarrotes/frutas-y-chiles-secos/fruta-mixta-bontatti-vitrolero-454-g_00750302879658?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf4EQQQkgsCiUBN94wbRjw4emnFbAGje3D9N3PH9XZr-rDmwNP_vFcRoCDS4QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/abarrotes/frutas-y-chiles-secos/fruta-mixta-bontatti-vitrolero-454-g_00750302879658" target="ba_blank">Ver en aurrera</a>
 </div></div>  
                    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Mezcla de frutos secos Verde Valle 80 g.jpg" alt="Mezcla de frutos secos Verde Valle 80 g"></a>
                                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/articulos-a-granel/mezcla-de-frutos-secos-verde-valle-80-g/00750107130474?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwu_mSBhAYEiwA5BBmfwc7Q7PaiUfF5_z8a7tUd5Y2RQYXQC4mapH-igy5kHgwtzAVClr4RxoCjSYQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/mezcla-frutos-secos-verde-valle-80-g-00750107130474" target="ba_blank">Ver en aurrera</a>
</div></div>   
     
                    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Semilla de Girasol Cerepak 500 g.jpg" alt="Semilla de Girasol Cerepak 500 g"></a>
                                
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/abarrotes/arroz-frijol-y-semillas/semilla-de-girasol-cerepak-500-g_00750106082767?gclid=CjwKCAjwu_mSBhAYEiwA5BBmf43FAeTOGgp9ivNtAev1qQap0tEiqEyiAUqZqr9eed4U9LOZ-yu9-hoCJa8QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/abarrotes/arroz-frijol-y-semillas/semilla-de-girasol-cerepak-500-g_00750106082767" target="ba_blank">Ver en aurrera</a>
    </div></div> 

<div class="fexcajasPR"><img src="/imagenes/Grasas/Crema de Cacahuate On+top Cacao Crujiente 500 g.jpg" alt="Crema de Cacahuate On+top Natural Crunchy 480 g"></a>
                                
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/especializados/alimentos-para-diabeticos/crema-de-cacahuate-on-top-natural-crunchy-480-g_00750302640922" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/especializados/alimentos-para-diabeticos/crema-de-cacahuate-on-top-natural-crunchy-480-g_00750302640922" target="ba_blank">Ver en aurrera</a>
    </div></div> 

<div class="fexcajasPR"><img src="/imagenes/Grasas/Crema de Cacahuate On+top Cacao Crujiente 500 g.jpg" alt="Crema de Cacahuate On+top Cacao Crunchy 500 g"></a>
                                
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/especializados/alimentos-para-diabeticos/crema-de-cacahuate-on-top-cacao-crunchy-500-g_00750302640930" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/especializados/alimentos-para-diabeticos/crema-de-cacahuate-on-top-cacao-crunchy-500-g_00750302640930" target="ba_blank">Ver en aurrera</a>
    </div></div> 

<div class="fexcajasPR"><img src="/imagenes/Grasas/Crema de cacahuate Mister natural 840 g.jpg" alt="Crema de cacahuate Mister natural 840 g"></a>
                                
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/mermeladas-y-miel/crema-de-cacahuate-mister-natural-840-g/00080880689042?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://articulo.mercadolibre.com.mx/MLM-1367861071-crema-de-cacahuate-untable-100-natural-840g-sin-azucar-a-_JM?matt_tool=94495926&matt_word=&matt_source=google&matt_campaign_id=15697272370&matt_ad_group_id=128898863182&matt_match_type=&matt_network=g&matt_device=c&matt_creative=571860447263&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=492007967&matt_product_id=MLM1367861071&matt_product_partition_id=1414756886338&matt_target_id=aud-1575562102923:pla-1414756886338" target="ba_blank">Ver en M libre</a>
    </div></div> 
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Crema de Cacahuate On+top Natural Whey 470 g.jpg" alt="Crema de Cacahuate On+top Natural Whey 470 g."></a>
                                    
    <div><a class="boton_walmart" href="https://articulo.mercadolibre.com.mx/MLM-889254954-crema-de-cacahuate-natural-whey-protein-isolate-480g-_JM?matt_tool=28238160&utm_source=google_shopping&utm_medium=organic" target="ba_blank">Ver en M libre</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/especializados/alimentos-para-diabeticos/crema-de-cacahuate-on-top-natural-whey-470-g_00750302640931" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Fun Trial 900 g.jpg" alt="Mezcla de frutas deshidratadas y nueces Nature's Heart Fun Trial 900 g"></a>
                                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/mezcla-de-frutos-deshidratados-y-nueces-nature-s-heart-super-trail-mix-900-g/00750225248142?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/mezcla-de-frutas-deshidratadas-y-nueces-natures-heart-fun-trial-900-g/11132496.php" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Fruit & Nut Collection 450 g.jpg" alt="Mezcla de frutas deshidratadas y nueces Nature's Heart Fruit & Nut Collection 450 g"></a>
                                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/mix-de-frutas-y-nueces-nature-s-heart-mega-omega-450-g/00750225248507?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/mezcla-de-frutas-deshidratadas-y-nueces-natures-heart-fruit-nut-collection-450-g/2228666.php" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/Grasas/Mezcla de frutas deshidratadas y nueces Nature's Heart Go! Nuts 450 g.jpg" alt="Mezcla de frutas deshidratadas y nueces Nature's Heart Go! Nuts 450 g"></a>
                                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/mezcla-de-nueces-nature-s-heart-go-nuts-450-g/00750225248059?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/mezcla-de-frutas-deshidratadas-y-nueces-natures-heart-go-nuts-450-g/2228665.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Surtido salado Mafer 146 g.jpg" alt="Surtido salado Mafer 146 g"></a>
                                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/botanas-y-fruta-seca/mezcla-de-cacahuate-mafer-surtido-especial-salado-180-g/00750101112529?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/surtido-salado-mafer-146-g-00750047801900" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/Grasas/Aceite Enature de Coco Extra virgen 1 l.jpg" alt="Aceite Enature de Coco Extra virgen 1 l"></a>
                                    
    <div><a class="boton_walmart" href="https://www.walmart.com.mx/despensa/especializados/organicos-y-especializados/aceite-enature-de-coco-extra-virgen-1-l_00750302360419" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://www.bodegaaurrera.com.mx/despensa/especializados/organicos-y-especializados/aceite-enature-de-coco-extra-virgen-1-l_00750302360419" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/Grasas/Aceitunas verdes Bufalo sin hueso 150 g.jpg" alt="Aceitunas verdes Bufalo sin hueso 150 g"></a>
                                    
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/aceitunas-verdes-bufalo-con-hueso-215-g/00750100331079?gclsrc=aw.ds&" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/aceitunas-verdes-bufalo-sin-hueso-150-g-00750100331057" target="ba_blank">Ver en aurrera</a>
    </div></div> -->

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


    <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
    <script defer src="../Prueba7/java.js"></script>
    <script src="../whatss.js"></script>
    <!-- <script src="../FinalPrueba/java.js"></script> -->
    <script src="../js/create-html-grasas.js"></script>
    <script src="../js/maps-directions.js"></script>
    <script src="../js/redirect-buscar.js"></script>


</body>
</html>