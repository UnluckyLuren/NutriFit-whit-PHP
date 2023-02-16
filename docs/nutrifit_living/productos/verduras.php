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
    <link  rel="icon" href="/imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
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
       
<div class="container">
    <nav class="menu">
        <ul>
            <li><a href="/nutrifit living/productos.php"><p class="nombreDEpaginadondeseencuantra"> ▼     Productos recomendados</p></a>
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
            <li><a href="verduras.php"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼   Verduras</p></a>
            <ul class="submenuSECCIONES"></li>
            <li><a href="Cereales_Carbohidratos.php">Cereales/Carbohidratos</a></li>
            <li><a href="frutas.php">Frutas</a></li>
            <li><a href="../productos.php">Proteínas</a></li>
            <li><a href="leguminosas.php">Leguminosas</a></li>
            <li><a href="grasas.php">Grasas</a></li>
            
        </ul>
        </ul>
    </nav>
</div>
<pre class="titulo_de_servicios_productos">Verduras</pre>

<div class="buscador">
    <button id="buscarBtn" ><img src="../imagenes/Lupa.svg"></button>
    <input type="text" id="buscadorGeneral">
</div>

<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >
<!-- 
<div class="fexcajasPR"><img src="/imagenes/verduras/Zanahoria por kilo.jpg" alt="Zanahoria por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/zanahoria-por-kilo/00000000004094" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/zanahoria-kg/515.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Zanahoria baby Marketside 340 g.jpg" alt="Zanahoria baby Marketside 340 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/zanahoria-baby-marketside-340-g/00750179166767" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/zanahoria-baby-vegetalistos-340-g/11312477.php" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Zanahoria rallada Vegetalistos 340 g.jpg" alt="Zanahoria rallada Vegetalistos 340 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/zanahoria-rallada-vegetalistos-340-g/00750302430006" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Ensaladas-y-Germinados/Zanahoria-rallada-Vegetalistos-340g/p/000000000003485928?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Zanahoria orgánica Campo Vivo 450 g.jpg" alt="Zanahoria orgánica Campo Vivo 450 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/zanahoria-organica-campo-vivo-450-g/00750223617032" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Org%C3%A1nicos/Verduras/Zanahoria-Campovivo-Organica-Bols-450-g/p/000000000003696353?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Zanahoria Bolthouse Farms 454 g.jpg" alt="Zanahoria Bolthouse Farms 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/zanahoria-bolthouse-farms-454-g/00003338366000" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Calabaza japonesa por kilo.jpg" alt="Calabaza japonesa por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/calabaza-japonesa-por-kilo/00000000004067" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/calabaza-japonesa-por-kilo-00000000004067" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Maceta Orgánica Vita Calabacita 1 pza.jpg" alt="Maceta Orgánica Vita Calabacita 1 pza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/jardineria-y-exteriores/maceta-organica-vita-calabacita-1-pza/00750300040032" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/maceta-organica-vita-calabacita-1-pza-00750300040032" target="ba_blank">Ver en aurrera</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Espinacas por pieza.jpg" alt="Espinacas por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinacas-por-pieza/00000000004090" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/espinacas-por-pieza-00000000004090" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Espinaca baby Marketside 250 g.jpg" alt="Espinaca baby Marketside 250 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinaca-baby-marketside-250-g/00750179166766" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/174000554_981001687" target="ba_blank">Ver en rappi</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Espinaca Marketside 280 g.jpg" alt="Espinaca Marketside 280 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinaca-marketside-280-g/00750179166765" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Espinaca Mr. Lucky Popeye 284 g.jpg" alt="Espinaca Mr. Lucky Popeye 284 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinaca-mr-lucky-popeye-284-g/00079663158104" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/espinaca-popeye-mr-lucky-284-g/1008691.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Espinaca baby Vegetalistos 250 g.jpg" alt="Espinaca baby Vegetalistos 250 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinaca-baby-vegetalistos-250-g/00750301955489" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/espinaca-baby-vegetalistos-250-g/11212449.php" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Espinaca orgánica Campo Vivo 180 g.jpg" alt="Espinaca orgánica Campo Vivo 180 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/espinaca-organica-campo-vivo-180-g/00750223617069" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Org%C3%A1nicos/Verduras/Ensalada-Espinaca-Campo-Vivo-Org%C3%A1nica-180g/p/000000000003231123?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Cebolla blanca por kilo.jpg" alt="Cebolla blanca por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/cebolla-blanca-por-kilo/00000000004663" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/cebolla-blanca-kg/157.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Cebolla morada por kilo.jpg" alt="Cebolla morada por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/cebolla-morada-por-kilo/00000000003286" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/cebolla-morada-campo-vivo-organico-700-gr/11515788.phphttps://www.soriana.com/cebolla-morada-campo-vivo-organico-700-gr/11515788.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Cebollitas cambray por pieza.jpg" alt="Cebollitas cambray por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/cebollitas-cambray-por-pieza/00000000004068" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/cebolla-cambray-manojo/150.php" target="ba_blank">Ver en soriana</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Cebolla amarilla por kilo.jpg" alt="Cebolla amarilla por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/cebolla-amarilla-por-kilo/00000000003412" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/Manduka/Cebolla-Amarilla%C2%A0por-kg/p/000000000003102853" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Jitomate saladet por kilo.jpg" alt="Jitomate saladet por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jitomate-saladet-por-kilo/00000000004087" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Jitomate bola por kilo.jpg" alt="Jitomate bola por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jitomate-bola-por-kilo/00000000003151" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/jitomate-bola-kg/479.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Tomates Nature Sweet Cherubs 283 g.jpg" alt="Tomates Nature Sweet Cherubs 283 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/tomates-nature-sweet-cherubs-283-g/00075166677115" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Verduras-B%C3%A1sicas/Tomate-Uva-Cherubs-NatureSweet-283g/p/000000000003356335?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Jitomate beef gourmet por kilo.jpg" alt="Jitomate beef gourmet por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jitomate-beef-gourmet-por-kilo/00000000004799" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/160196860_981007065" target="ba_blank">Ver en rappi</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Jitomate cherry orgánico Campo Vivo 280 g.jpg" alt="Jitomate cherry orgánico Campo Vivo 280 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jitomate-cherry-organico-campo-vivo-280-g/00750223617022" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/jitomate-uva-organico-campo-vivo-280-g/1930120.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Nopal limpio por kilo.jpg" alt="Nopal limpio por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/nopal-limpio-por-kilo/00000000004558" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/Departamentos/S%C3%BAper/Frutas-y-Verduras/Verduras/Hongos-y-Nopales/Nopal%C2%A0por-kg/p/000000000003017673?gclid=Cj0KCQjw37iTBhCWARIsACBt1IxA1BBgNL56PBSxETv99csagzyEc8PtjYCxufBjK9ipRRtGmRIjIfcaAuT8EALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Nopal cambray empacado por kilo.jpg" alt="Nopal cambray empacado por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/nopal-cambray-empacado-por-kilo/00020750700000" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga italiana Eva hidropónica 1 pza.jpg" alt="Lechuga italiana Eva hidropónica 1 pza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-italiana-eva-hidroponica-1-pza/00750224646022" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/lechuga-hidroponica-italiana-eva-1-pza/1678977.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga romana por pieza.jpg" alt="Lechuga romana por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-romana-por-pieza/00000000004061" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/lechuga-romana-1-pza/344.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga francesa Eva hidropónica 1 pza.jpg" alt="Lechuga francesa Eva hidropónica 1 pza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-francesa-eva-hidroponica-1-pza/00750224646004" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/lechuga-francesa-hidroponica-eva-1-pza/1336340.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga dulce sucrine Fresh Garden 500 g.jpg" alt="Lechuga dulce sucrine Fresh Garden 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-dulce-sucrine-fresh-garden-500-g/00067132600014" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/lechuga-dulce-sucrine-fresh-garden-500-g/1910843.php" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga orejona por pieza.jpg" alt="Lechuga orejona por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-orejona-por-pieza/00000000004640" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/lechuga-lisa-orejona-1-pza/343.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Lechuga morada por pieza.jpg" alt="Lechuga morada por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/lechuga-morada-por-pieza/00000000004075" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Espárrago verde por pieza.jpg" alt="Espárrago verde por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/esparrago-verde-por-pieza/00000000004080" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/esparrago-verde-manojo/11201983.php" target="ba_blank">Ver en soriana</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/verduras/Espárrago blanco en bolsa 500 g.jpg" alt="Espárrago blanco en bolsa 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/esparrago-blanco-en-bolsa-500-g/00775433700001" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/esparrago-blanco-bolsa-500-g-00775433700001" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Acelga por pieza.jpg" alt="Acelga por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/acelga-por-pieza/00000000004586" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/acelga-por-pieza-00000000004586" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Apio por kilo.jpg" alt="Apio por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/apio-por-kilo/00000000004583" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Apio-por-kg/p/000000000003102881?siteName=Sitio+de+Chedraui&gclid=Cj0KCQjw37iTBhCWARIsACBt1IwUVZGqD3cfJWwNWjaz-uBC49Ww3tAs2taBVHf0ZvfImZT1s7V1Rj0aAt1nEALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Palitos de apio orgánico Marketside 400 g.jpg" alt="Palitos de apio orgánico Marketside 400 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/palitos-de-apio-organico-marketside-400-g/00750179166772" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/palitos-apio-organico-marketside-400-g-00750179166772" target="ba_blank">Ver en aurrera</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Corazones de apio orgánicos Marketside 454 g.jpg" alt="Corazones de apio orgánicos Marketside 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/corazones-de-apio-organicos-marketside-454-g/00750179166774" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/160196276_981002214" target="ba_blank">Ver en rappi   </a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Corazones de apio orgánicos Campo Vivo 450 g.jpg" alt="Corazones de apio orgánicos Campo Vivo 450 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/corazones-de-apio-organicos-campo-vivo-450-g/00750223617027" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Alcachofa por pieza.jpg" alt="Alcachofa por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/alcachofa-por-pieza/00000000004762" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Alcachofa-Microwave-59g/p/000000000003102864?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Betabel por kilo.jpg" alt="Betabel por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/betabel-por-kilo/00000000004540" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/betabel-por-kilo-00000000004540" target="ba_blank">Ver en aurrera</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Betabel Vegetalistos rallado 390 g.jpg" alt="Betabel Vegetalistos rallado 390 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/betabel-vegetalistos-rallado-390-g/00750300404669" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Ensaladas-y-Germinados/Betabel-rallado-Vegetalistos-390g/p/000000000003403156?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Betabel Fresh Gourmet crujiente con vinagreta balsámica 99 g.jpg" alt="Betabel Fresh Gourmet crujiente con vinagreta balsámica 99 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/pan-y-tortillas-empacados/betabel-fresh-gourmet-crujiente-con-vinagreta-balsamica-99-g/00750301731692" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/betabel-crujiente-fresh-gourmet-con-vinagre-balsamica-99-gr/11410111.php?gclid=Cj0KCQjw37iTBhCWARIsACBt1IwiX-WY_WepyzodK5tb8iGYsSDqblgiqT-u3z1mUFFpBwZgJLzB5IgaArDAEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Chícharo en vaina por kilo.jpg" alt="Chícharo en vaina por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/chicharo-en-vaina-por-kilo/00000000004674" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/chicharo-seco-verde-valle-500-gr/383201.php?gclid=Cj0KCQjw37iTBhCWARIsACBt1IyIJlCmGBrM9FKbrQmlo87Mzs_yoG_yFBxGqqCVi_fBJiWB1S7RrvUaArXBEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Chícharo japonés por kilo.jpg" alt="Chícharo japonés por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/chicharo-japones-por-kilo/00000000004092" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://moisaner.com/producto/chicharo-japones-por-kilo/" target="ba_blank">Ver en moisaner</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Chícharos Great Value frescos congelados 500 g.jpg" alt="Chícharos Great Value frescos congelados 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/chicharos-great-value-frescos-congelados-500-g/00750179166011" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/chicharos-great-value-frescos-congelados-500-g-00750179166011" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Chícharos La Costeña 420 g.jpg" alt="Chícharos La Costeña 420 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/chicharos-la-costena-420-g/00750101700414" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/chicharos-la-costena-420-gr/1221766.php?gclid=Cj0KCQjw37iTBhCWARIsACBt1IzdQO2bXfw2EjtmGQBeS0P95pUCsYErKzAU2HmLTTmeCDonRsCyUtoaApKMEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Coliflor por pieza.jpg" alt="Coliflor por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/coliflor-por-pieza/00000000004079" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/coliflor-1-pza/148.php" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Floretes de coliflor Mr. Lucky 454 g.jpg" alt="Floretes de coliflor Mr. Lucky 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/floretes-de-coliflor-mr-lucky-454-g/00079663128105" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Ensaladas-y-Germinados/Floretes-de-Coliflor-Mr-Lucky-454g/p/000000000003285534?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/verduras/Mezcla de vegetales Marketside 454 g.jpg" alt="Mezcla de vegetales Marketside 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/mezcla-de-vegetales-marketside-454-g/00750179166777" target="ba_blank">Ver en walmart</a></div>
    </div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Bits de coliflor Eva simple veggies 454 g.jpg" alt="Bits de coliflor Eva simple veggies 454 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/bits-de-coliflor-eva-simple-veggies-454-g/00750302275507" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Champiñones por kilo.jpg" alt="Champiñones por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/champinones-por-kilo/00000000004085" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/champinones-por-kilo-00000000004085" target="ba_blank">Ver en aurrera</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Champiñon rebanado Monteblanco 225 g.jpg" alt="Champiñon rebanado Monteblanco 225 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/champinon-rebanado-monteblanco-225-g/00750102420251" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/champinon-cremini-rebanado-monte-blanco-225-g/2371167.php?gclid=Cj0KCQjw37iTBhCWARIsACBt1IyxC3U7oYQKE4VG_YrF5EuCVxwC_lUFERVv6LohYwmctYQQMi3StiUaAixWEALw_wcB" target="ba_blank">Ver en soriana</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Champiñones Monte Rey portabello entero 500 g.jpg" alt="Champiñones Monte Rey portabello entero 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/champinones-monte-rey-portabello-entero-500-g/00003710228216" target="ba_blank">Ver en walmart</a></div>
    </div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Chayote sin espinas por kilo.jpg" alt="Chayote sin espinas por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/chayote-sin-espinas-por-kilo/00000000004761" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/chayote-sin-espinas-kg/184.php" target="ba_blank">Ver en soriana</a>
    </div></div>
               
<div class="fexcajasPR"><img src="/imagenes/verduras/Chayote negro por kilo.jpg" alt="Chayote negro por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/chayote-negro-por-kilo/00000000004760" target="ba_blank">Ver en walmart</a></div>
    </div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Chayote cambray por kilo.jpg" alt="Chayote cambray por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/chayote-cambray-por-kilo/00000000004788" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Chayote-Cambray-por-kg/p/000000000003102882?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/verduras/Col blanca por kilo.jpg" alt="Col blanca por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/col-blanca-por-kilo/00000000004069" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Col-Blanca-por-kg/p/000000000003102879?siteName=Sitio+de+Chedraui&gclid=Cj0KCQjw37iTBhCWARIsACBt1Ixr7v3EkL1_SGYdf5V6pbijFBss_xRuJnDLbaKJQblMedKbHHyxD3caAkwbEALw_wcB" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Col morada por kilo.jpg" alt="Col morada por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/col-morada-por-kilo/00000000004554" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/col-morada-por-kilo-00000000004554" target="ba_blank">Ver en aurrera</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Ejote por kilo.jpg" alt="Ejote por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/ejote-por-kilo/00000000004066" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Ejote-por-kg/p/000000000003102872?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Ejotes Great Value congelados cortados en trozos 500 g.jpg" alt="Ejotes Great Value congelados cortados en trozos 500 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/frutas-y-verduras-congeladas/ejotes-great-value-congelados-cortados-en-trozos-500-g/00750179160989" target="ba_blank">Ver en walmart</a></div>
    </div>
                    
<div class="fexcajasPR"><img src="/imagenes/verduras/Flor de calabaza por pieza.jpg" alt="Flor de calabaza por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/flor-de-calabaza-por-pieza/00000000004501" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Flor-de-Calabaza%C2%A0por-kg/p/000000000003017702?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
            
<div class="fexcajasPR"><img src="/imagenes/verduras/Jícama por kilo.jpg" alt="Jícama por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jicama-por-kilo/00000000004626" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/jicama-por-kilo-00000000004626" target="ba_blank">Ver en aurrera</a>
    </div></div>
                    
<div class="fexcajasPR"><img src="/imagenes/verduras/Jícama Vegetalistos 150 g.JPG" alt="Jícama Vegetalistos 150 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/jicama-vegetalistos-150-g/00750301955403" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/1306703838_975052930" target="ba_blank">Ver en rappi</a>
    </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/verduras/Pepino por kilo.jpg" alt="Pepino por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pepino-por-kilo/00000000004062" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/pepino-por-kilo-00000000004062" target="ba_blank">Ver en aurrera</a>
    </div></div>
                        
<div class="fexcajasPR"><img src="/imagenes/verduras/Pepino orgánico Marketside 700 g.jpg" alt="Pepino orgánico Marketside 700 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pepino-organico-marketside-700-g/00750179161467" target="ba_blank">Ver en walmart</a></div>
    </div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Pepino blanco por kilo.jpg" alt="Pepino blanco por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pepino-blanco-por-kilo/00000000004594" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/pepino-blanco-por-kilo-00000000004594" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Perejil liso por pieza.jpg" alt="Perejil liso por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/perejil-liso-por-pieza/00000000004901" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/perejil-liso-por-pieza-00000000004901" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Perejil chino por pieza.jpg" alt="Perejil chino por pieza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/perejil-chino-por-pieza/00000000004899" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/perejil-chino-por-pieza-00000000004899" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Perejil criollo por pza.jpg" alt="Perejil criollo por pza"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/perejil-criollo-por-pza/00000000004902" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/search?name=Perejil%20criollo%20por%20pza" target="ba_blank">Ver en aurrera</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Perejil orgánico Campo Vivo 100 g.jpg" alt="Perejil orgánico Campo Vivo 100 g"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/perejil-organico-campo-vivo-100-g/00750223617210" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/1923238275_978499817" target="ba_blank">Ver en rappi</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Pimiento verde por kilo.jpg" alt="Pimiento verde por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pimiento-verde-por-kilo/00000000003120" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_aurrera" href="https://despensa.bodegaaurrera.com.mx/p/pimiento-verde-por-kilo-00000000003120" target="ba_blank">Ver en aurrera</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Pimiento rojo por kilo.jpg" alt="Pimiento rojo por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pimiento-rojo-por-kilo/00000000004688" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Chiles-Frescos/Pimiento%C2%A0Rojo-por-kg/p/000000000003109741?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/verduras/Pimiento amarillo por kilo.jpg" alt="Pimiento amarillo por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pimiento-amarillo-por-kilo/00000000004689" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Chiles-Frescos/Pimiento%C2%A0Amarillo-por-kg/p/000000000003109742?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>

<div class="fexcajasPR"><img src="/imagenes/verduras/Pimiento naranja por kilo.jpg" alt="Pimiento naranja por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pimiento-naranja-por-kilo/00000000003121" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Chiles-Frescos/Pimiento%C2%A0Naranja-por-kg/p/000000000003109740?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Pimiento morrón Marketside semáforo 3 pzas.jpg" alt="Pimiento morrón Marketside semáforo 3 pzas"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/pimiento-morron-marketside-semaforo-3-pzas/00750649500469" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.rappi.com.mx/producto/160197069_981006971" target="ba_blank">Ver en rappi.</a>
    </div></div>
    
<div class="fexcajasPR"><img src="/imagenes/verduras/Verdolagas por kilo.jpg" alt="Verdolagas por kilo"></a>
    <div><a class="boton_walmart" href="https://super.walmart.com.mx/verduras/verdolagas-por-kilo/00000000004836" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.chedraui.com.mx/S%C3%BAper/Frutas-y-Verduras/Verduras/Manojeo-y-Hortalizas/Verdolaga-por-kg/p/000000000003017712?siteName=Sitio+de+Chedraui" target="ba_blank">Ver en chedraui</a>
    </div></div>
         -->
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
    <script src="../js/create-html-verduras.js" ></script>
    <script src="../js/maps-directions.js"></script>
    <script src="../js/redirect-buscar.js"></script>

</body>
</html>