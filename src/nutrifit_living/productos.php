<?php


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: Login_register/index.php");
        exit;
}

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];

header("location: productos/general-productos.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrifit Living</title>
    <meta name="Description" content="Bienvenido a una vida mas saludable">
    <link  rel="icon" href="imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="CSS/styleheader.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="CSS/Productos-style-extra.css">
    
    <link rel="stylesheet" href="CSS/styles-productos-responsive.css">
   
<style>
img{
  width: 221px;
  margin: 10%;
  margin-top: 2%;
}
</style>  

</head>


<body> 
    <!-- <svg class="rec" width="1500" height="150"  > 
        <rect x="2" y="2" width="1515" height="100" rx="10" ry="10" lx="10" 
         style="fill: #a5f55a; opacity:0.6; stroke-width:5" />
    </svg>
    <div class="Menu">
        <a  href="https://www.instagram.com/nutrifit__living/?hl=es" target="ba_blank"> <img  class="im" src="/imagenes/logo11_preview_rev_1.png" alt="logo nutrifit living" ></a>
        <a class="button" href="/nutrifit living/dieta.php"  >Servicios</a>
        <a class="button2" href="/nutrifit living/recetarios/recetarios.php" >Recetarios</a>
        <a class="button4" href="/nutrifit living/index (1).php">Inicio</a>
    </div> -->
    <header class="header ">
        <div class="userMenuDiv" >
                <a href="#"><img src="<?php echo $imageUser; ?>" id="open"  class="userMenuImg"></a>
                <p> <?php echo $nombre ?> </p>
        </div>
    
        <nav class="nav">
            <a href="#" class="logo ">
                <img src="imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>

            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item  "><a href="Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " ><a href="productos.php" class="nav-menu-link nav-link">Productos</a></li>
                <li class="nav-menu-item"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item "><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>
        </nav>
    </header>
        <!-- menu desplegable -->
       
<div class="container">
    <nav class="menu">
        <ul>
            <li><a href="productos.php"><p class="nombreDEpaginadondeseencuantra"> ▼     Productos recomendados</p></a>
            <ul class="submenu"></li>
            <li><a href="dieta.php">Dietas</a></li>
            <li><a href="equivalencias.php"> Mapa de equivalencias</a></li>
            <li><a href="lugares.php">Lugares Recomendados</a></li>
        </ul>
        </ul>
    </nav>
</div>
<!-- menu desplegable -->
       
<div class="containerSECCIONES">
    <nav class="menuSECCIONES">
        <ul>
            <li><a href="productos.php"><p class="nombreDEpaginadondeseencuantraSECCIONES"> ▼   Proteínas</p></a>
            <ul class="submenuSECCIONES"></li>
            <li><a href="productos/leguminosas.php"> Leguminosas</a></li>
            <li><a href="productos/grasas.php">Grasas</a></li>
            <li><a href="productos/frutas.php"> Frutas</a></li>
            <li><a href="productos/verduras.php">Verduras</a></li>
            <li><a href="productos/cereales_carbohidratos.php">Cereales/Carbohidratos</a></li>
        </ul>
        </ul>
    </nav>
</div>
<pre class="titulo_de_servicios_productos">Proteínas</pre>

<div class="buscador">
        <button id="buscarBtn" ><img src="imagenes/Lupa.svg"></button>
        <input type="text" id="buscadorGeneral">
    </div>

<div class="contenedorserviciosPRODUCTOS" id="ContainerProdHTML" >
    <!-- <div class="fexcajasPR"><img src="/imagenes/proteinas/Jamón de pavo Zwan premium 400 g.jpg" alt="Jamón de pavo Zwan premium 400 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-zwan-premium-400-g/00750105771102" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/jamon-de-pavo-zwan-virginia-400-gr/11530360.php?gclid=CjwKCAjwi6WSBhA-EiwA6Niok1W9DL2IAv22qCfMwiP35oiIdJxpiW8xhGvCeMNmQLNYH0xGZ2h9nRoCHncQAvD_BwE#fo_c=1341&fo_k=e9f87a274e299b961e487170fcc5eb50&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>
<div class="fexcajasPR"><img src="/imagenes/proteinas/Jamón de pavo FUD virginia 450 g.jpg" alt="Jamón de pavo FUD virginia 450 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-fud-virginia-450-g/00750104000384?adBanner=super&adStoreId=0000009999&gclid=CjwKCAjwi6WSBhA-EiwA6Niok-unU2s5103WUjuDxqJdqv8PaXMKOKFhGk8DEHUD_mAHo9jdd5m2GBoCpsoQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/jamon-de-pavo-virginia-fud-450-g/11477923.php?gclid=CjwKCAjwi6WSBhA-EiwA6Niok6wzdg0H3X2ILUXQIB_oWZRSHF6JbLWDk-qAw9tR36UHXiN081nclRoCFDcQAvD_BwE#fo_c=1341&fo_k=468ea8ec1505b7921aaaab2e30b12afe&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>
<div class="fexcajasPR"><img src="/imagenes/proteinas/Jamon_de_pavo_San_Rafael_real_300_g.jpg" alt="Jamón de pavo San Rafael real 300 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-san-rafael-real-300-g/00750104000030?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwi6WSBhA-EiwA6Niok6WxEhVkYoBD9ROfwYtdDluylhTyhJK-xpIzNartmFaQ7-ZFxgV0HhoCju4QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/jamon-san-rafael-pavo-real-300-gr/3024321.php?gclid=CjwKCAjwi6WSBhA-EiwA6Niok7lqOo-K_C2-RoHiEr2gj_MdFeqn9rp4f_ZOL8md9206RPmcfdVcHBoCQ7IQAvD_BwE#fo_c=1341&fo_k=f4d0988cc7ab6e26e76e7fccd1801708&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>
 <div class="fexcajasPR"><img src="/imagenes/proteinas/Jamon_de_pavo_Bafar_400_g.jpg" alt="Jamón de pavo Bafar 400 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-bafar-virginia-500-g/00750151846317?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwi6WSBhA-EiwA6Niok6QluwHV_t1IcIRIdvdTjbSd4MXiof6t0e4GFgCjuuEodXAhtyxHoRoCEiwQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/jamon-pavo-bafar-25-rebanadas-400-gr/11113765.php?gclid=CjwKCAjwi6WSBhA-EiwA6Niok0vdoP3prbqtrxV2b2H2SdYhf-95EgwBeJEZnCdm6yNcl83GWZm6hBoCbbcQAvD_BwE#fo_c=1341&fo_k=b6adb9c1c683b57e5019ec613eb29d75&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>
 <div class="fexcajasPR"><img src="/imagenes/proteinas/Jamon_de_pavo_Great_Value_tipo_virginia_450_g.jpg" alt="Jamón de pavo Great Value tipo virginia 450 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-great-value-tipo-virginia-450-g/00750649500015?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwi6WSBhA-EiwA6Niok43Cm2wcVYQEOLRGcyfxYbSttUKirkK9fqyA070NrYwSgeJkRnatBxoC4G8QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        </div> 
<div class="fexcajasPR"><img src="/imagenes/proteinas/Jamon_de_pavo_FUD_Cuida-t__virginia_290_g.jpg" alt="Jamón de pavo FUD Cuida-t + virginia 290 g"></a>
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/carnes-frias/jamon-de-pavo-fud-cuida-t-virginia-290-g/00750104000640?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjwi6WSBhA-EiwA6NiokzLaEqxRIznlrtNvuORb4nBcREtJWOzJSugwt8wqasmbqMQyBD2-gxoCL4QQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/jamon-de-pavo-cuidat-fud-290-gr/11314619.php?gclid=CjwKCAjwi6WSBhA-EiwA6Niokzp0t_GdSDJbNdPlrwF6Fo8qStcpOfmSWdVDP5du7LHlFM5s__INKhoCwyYQAvD_BwE#fo_c=1341&fo_k=74283a3bcd85e5f062824af764c87c9e&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div> 

 <div class="fexcajasPR"><img src="/imagenes/proteinas/RequesonBionda.png" alt="•	Requesón Bionda 500 g"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/requeson-bionda-500-g/00750300589841" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-requeson-bionda-saludable-450-gr/2718946.php" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/RequesonSantaInes.png" alt="Requesón Rancho Santa Inés bajo en sodio 400 g "></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/requeson-rancho-santa-ines-bajo-en-sodio-400-g/00750220911383" target="ba_blank">Ver en walmart</a></div>
        </div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaCuidaT.png" alt="Queso FUD Panela Rebanadas Cuadradas 300 g"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-tipo-panela-fud-cuida-t-rebanadas-cuadradas-reducido-en-grasa-300-g/00750104008249" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-fud-panela-rebanadas-cuadradas-300-g/11400289.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0nxdGBflrHpkFaPdfxMyuNshVGAlQEkxueINHNMaItQEC21UByoiT4RoCfgYQAvD_BwE" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaFud.png" alt= "Queso panela FUD rebanadas cuadradas 300 g"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-fud-rebanadas-cuadradas-300-g/00750104008361?adBanner=super&adStoreId=0000009999&gclid=CjwKCAjw9LSSBhBsEiwAKtf0nzFWvvgkLK5vVewJ46kyVrykoChpacVs1LnJczRXO6OPqAFYvpvbwRoCvPoQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
    <div><a class="boton_soriana" href="https://www.soriana.com/queso-panela-rebanadas-cuadradas-fud-300-gr/11141113.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0n6U7aPk26Vh5ZCY_eq11deS6E548nU0yLphuG0SQf4CZXylxp5nL8BoCIvEQAvD_BwE" target="ba_blank">Ver en soriana</a>
    </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/Jamón de pavo Zwan premium 400 g.jpg" alt="Queso Panela Zwan premium reducido en grasa 400 g "></a>

            <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-zwan-premium-reducido-en-grasa-400-g/00750100220349?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9LSSBhBsEiwAKtf0nyLREgkTzHYHSx7PW9QyVIcoIoOAnBlSXt3Jb2WylrYqGL74DNa35BoCc5IQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-panelo-reducido-en-grasa-zwan-400-gr/9110126.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0nyO1UUxRNMelmMlUx2hoAPjHWvpmZ-zGQMeqRHwi0C1pV-rYT2rgjxoC72sQAvD_BwE#fo_c=1341&fo_k=0f527559412ae894b5bd3f1b8e7c45cb&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaLala.jpg" alt="Queso panela Lala 400 g"></a>

    <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-lala-reducido-en-grasa-400-g/00750102051453" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-panela-light-lala-400-gr/1421540.php" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaNocheBuena.jpg" alt="Queso panela Nochebuena reducido en grasa 400 g"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-nochebuena-reducido-en-grasa-400-g/00750107751050?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n-o7rbo-2WBooxxvIzVpp7NvcUolXbIfyV6jTQg8npsnSsRhCPCSQxoC4FwQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-panela-noche-buena-bajo-en-grasa-450-gr/1048650.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0n3Jp3li8n6pWhCyZUgi7zLUYuIuC7nDplUi7IDtTfQF__IxujEDkERoCzrsQAvD_BwE" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaAlpura.jpg" alt="Queso Panela Alpura 400 Gr"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-alpura-400-g/00750105590177" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-panela-alpura-400-gr/1061374.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0n6-81HmTG23FTyyfifsy3iITJUCeb6WPvDaJBAQ7fvGjHoRkekflYBoCuTUQAvD_BwE#fo_c=1341&fo_k=04723a67f3d4ce8cfcc721f988905629&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaBionda.jpg" alt="Queso panela que funde Bionda 400 g"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-bionda-400-g/00750302425945?gclsrc=aw.ds&&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n0dkaBcE6wXZlXle1V-oqJcWMyyRagSet7qvDgd17g60KzQF2jky3RoC0SsQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/queso-panela-que-funde-bionda-400-g/11600498.php" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/PanelaBove.jpg" alt="Queso Panela Bové Orgánico 400 gr "></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/quesos/queso-panela-bove-organico-400-g/00750163930327?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n4axmRBDW4rRjJqe2rXafjF9RQenrNgdm0wPnBWGhpayki2S7fkDYBoClTYQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        </div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/LecheAlmendraSilk.jpg" alt="Silk Alimento Líquido con Proteína 964mL"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/alimento-liquido/alimento-liquido-silk-almendra-sin-azucar-alto-en-proteina-946-ml/00750644310399?adBanner=express&adStoreId=0000009998&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n_JoUgnlpVvqLkcRN7FUH8bHXojt0fRraXHPPxkbTQQRixc3ue4rJRoCmj0QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/silk-alimento-liquido-con-proteina-964ml/11518499.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0n3rs5y0epvlBazAG_yr1wi4Rond-C0utEs3hIayoyqtH7JuhaehjvhoCZy4QAvD_BwE#fo_c=1341&fo_k=41a6b17fba0a6e41490a584e5107d78d&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>  
     
<div class="fexcajasPR"><img src="/imagenes/proteinas/LecheLala.jpg" alt="Leche Lala 100 sin lactosa proteína 1"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/leche/leche-lala-100-sin-lactosa-proteina-1-l/00750102055098?adBanner=super&adStoreId=0000009999&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n-u_nJ-VBfBpM7Bj9_0OLJ8kcVcZpoP27rw_UCJNimNVSlQHATFflRoCHIMQAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/leche-lala-100-sin-lactosa-proteina-1-lt/11211283.php?gclid=CjwKCAjw9LSSBhBsEiwAKtf0nwzjgI3Y2g5l0KWj-UkHfjtyKf_Sku_iCBRC1cjq4W8n179_tawokBoCDE4QAvD_BwE" target="ba_blank">Ver en soriana</a>
        </div></div>          

<div class="fexcajasPR"><img src="/imagenes/proteinas/LecheLalaLight.jpg" alt="Leche Lala 100 sin lactosa proteína light 1 "></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/leche/leche-lala-100-sin-lactosa-proteina-light-1-l/00750102055097?adBanner=super&adStoreId=0000009999&gclid=CjwKCAjw9LSSBhBsEiwAKtf0n8IFR26ViEnW-_CJkN-l4HSquKUPwm4boIH_NQhAko5wGA2HVUgULhoCM18QAvD_BwE" target="ba_blank">Ver en walmart</a></div>
        </div> 
         
<div class="fexcajasPR"><img src="/imagenes/proteinas/LecheAlpura.jpg" alt="Leche Alpura Extra Proteína Deslactosada 1 L"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/leche/leche-alpura-extra-proteina-deslactosada-1-l/00750105591425" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/leche-alpura-extra-proteina-deslactosada-1-l/11530849.php" target="ba_blank">Ver en soriana</a>
        </div></div>     
<div class="fexcajasPR"><img src="/imagenes/proteinas/YogurthChobani.jpg" alt="Yoghurt Griego Chobani Natural 907"></a>

 <div><a class="boton_walmart" href="https://super.walmart.com.mx/yogurt/yogurt-chobani-estilo-griego-natural-sin-grasa-907-g/00081829001043" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/yoghurt-griego-chobani-natural-907-gr/3119294.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
         
<div class="fexcajasPR"><img src="/imagenes/proteinas/YogurthFage.jpg" alt="Yoghurt Fage estilo griego natural sin grasa 500 g"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/yogurt/yoghurt-fage-estilo-griego-natural-sin-grasa-500-g/00068954408650?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/yoghurt-griego-fage-natural-sin-grasa-1-kg/3106627.php" target="ba_blank">Ver en soriana</a>
        </div></div>          
    
<div class="fexcajasPR"><img src="/imagenes/proteinas/YogurthVitaLinea.jpg" alt="Yoghurt Vitalínea Natural Estilo Griego Sin Endulzar 900g"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/yogurt/yoghurt-vitalinea-triple-cero-estilo-griego-natural-125-g/00750103239771?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/yoghurt-vitalinea-natural-estilo-griego-sin-endulzar-900g/11451766.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
             
<div class="fexcajasPR"><img src="/imagenes/proteinas/YogurthYoplaitDobleCero.jpg" alt="Yoghurt Batido Yoplait Doble Cero Natural 1 kg"></a>
                                                     
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/yogurt/yoghurt-yoplait-doble-cero-natural-1-kg/00750104009039?adBanner=super&adStoreId=0000009999" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/yoghurt-batido-yoplait-doble-cero-natural-1-kg/1043229.php" target="ba_blank">Ver en soriana</a>
        </div></div>    
    
<div class="fexcajasPR"><img src="/imagenes/proteinas/YogurthYplaitSkyr.jpg" alt="Yoghurt Griego Batido Natural Tipo Skyr Yoplait 750 gr"></a>
    
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/yogurt/yoghurt-yoplait-griego-skyr-batido-natural-750-g/00750104009791" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/yoghurt-griego-batido-natural-tipo-skyr-yoplait-750-gr/11544735.php" target="ba_blank">Ver en soriana</a>
        </div></div>                      
    
<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de pechuga de pollo por kilo.jpg" alt="Milanesa de pechuga de pollo por kilo"></a>
                          
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/milanesa-de-pechuga-de-pollo-por-kilo/00020196100000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/milanesa-de-pollo-kg/11380047.php" target="ba_blank">Ver en soriana</a>
        </div></div>   
                                            
<div class="fexcajasPR"><img src="/imagenes/proteinas/Tender Pilgrim´s pechuga de pollo por kilo.jpg" alt="Tender Pilgrims pechuga de pollo por kilo"></a>
                                 
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/tender-pilgrim-s-pechuga-de-pollo-por-kilo/00020116200000?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>   
                                                                       
<div class="fexcajasPR"><img src="/imagenes/proteinas/Arrachera de pollo Pilgrim's marinado sabor jalapeño 500 g.jpg" alt="Arrachera de pollo Pilgrim's marinado sabor jalapeño 500 g"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/arrachera-de-pollo-pilgrim-s-marinado-sabor-jalapeno-500-g/00750200471234?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Arrachera de pavo Dos familias finas hierbas 500 g.jpg" alt="Arrachera de pavo Dos familias finas hierbas 500 g"></a>
        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/arrachera-de-pavo-dos-familias-finas-hierbas-500-g/00750302268606" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Pechuga de pollo con hueso y sin piel por kilo.jpg" alt="Pechuga de pollo con hueso y sin piel por kilo"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/pechuga-de-pollo-con-hueso-y-sin-piel-por-kilo/00020103600000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Fajitas pechuga de pollo congeladas por kilo.jpg" alt="Fajitas pechuga de pollo congeladas por kilo"></a>
        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/fajitas-pechuga-de-pollo-congeladas-por-kilo/00020151600000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filetes de pollo Bachoco Prácticos congelados sabor mezquite 700 g.jpg" alt="Filetes de pollo Bachoco Prácticos congelados sabor mezquite 700 g"></a>
        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/comida-facil/filetes-de-pollo-bachoco-practicos-congelados-sabor-mezquite-700-g/00750110154550?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Pechuga de pollo sin hueso orgánica 900 g aprox.jpg" alt="Pechuga de pollo sin hueso orgánica 900 g aprox"></a>
                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/pechuga-de-pollo-sin-hueso-organica-900-g-aprox/00020229400000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  


<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de pechuga de pollo orgánica 900 g aprox.jpg" alt="Milanesa de pechuga de pollo orgánica 900 g aprox"></a>

        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/milanesa-de-pechuga-de-pollo-organica-900-g-aprox/00020116100000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Muslo de pollo sin piel por kilo.jpg" alt="Muslo de pollo sin piel por kilo"></a>
        
        <div><a class="boton_walmart" href="" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Carne molida de pollo por kilo.jpg" alt="Carne molida de pollo por kilo"></a>
        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/carne-molida-de-pollo-por-kilo/00020108200000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Muslo Selecto por kilo Piligrim´s.jpg" alt="Muslo Selecto por kilo"></a>
                
        <div><a class="boton_walmart" href="" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Pierna Bate de Pollo Pilgrims Kg.jpg" alt="Pierna Bate de Pollo Pilgrims Kg"></a>
        
        <div><a class="boton_walmart" href="" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/pierna-bate-de-pollo-pilgrims-kg/308095.php#fo_c=1341&fo_k=9a765fa0e3282927946da5d7a7b1ddf5&fo_s=gplamx" target="ba_blank">Ver en soriana</a>
        </div></div>  
                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Pechuga sin hueso Selecto por kilo.jpg" alt="Pechuga sin hueso Selecto por kilo"></a>
                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/pechuga-sin-hueso-selecto-por-kilo/00020146000000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de pollo Selecto por kilo.jpg" alt="Milanesa de pollo Selecto por kilo"></a>
                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/milanesa-de-pollo-selecto-por-kilo/00020110600000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Fajitas de pollo Pilgrim's a las finas hierbas 500 g.jpg" alt="Fajitas de pollo Pilgrim's a las finas hierbas 500 g"></a>
                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/fajitas-de-pollo-pilgrim-s-a-las-finas-hierbas-500-g/00750200471058" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Pierna de Pollo Orgánica Aires de Campo Kg.jpg" alt="Pierna de Pollo Orgánica Aires de Campo Kg"></a>
                        
        <div><a class="boton_walmart" href="https://www.soriana.com/pierna-de-pollo-organica-aires-de-campo-kg/305600.php#fo_c=1341&fo_k=8c05af759f4850983d5f2b2e0c5fbe3b&fo_s=gsurmx" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/Muslo orgánico sin piel por kilo.jpg" alt="Muslo orgánico sin piel por kilo"></a>
                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/muslo-organico-sin-piel-por-kilo/00020198700000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Muslo de Pollo sin Rabadilla Pilgrims Kg.jpg" alt="Muslo de Pollo sin Rabadilla Pilgrims Kg"></a>
                                
        <div><a class="boton_walmart" href="https://www.soriana.com/muslo-de-pollo-sin-rabadilla-pilgrims-kg/569660.php#fo_c=1341&fo_k=ea3e25a618a2e2728d02ea8f73cf2942&fo_s=gsurmx" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  

<div class="fexcajasPR"><img src="/imagenes/proteinas/Alitas de pollo orgánicas Aires de Campo por kilo.jpg" alt="Alitas de pollo orgánicas Aires de Campo por kilo"></a>
                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/alitas-de-pollo-organicas-aires-de-campo-por-kilo/00020111600000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Brochetas de pollo preparadas por kg.jpg" alt="Brochetas de pollo preparadas por kg"></a>
                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pollo-y-pavo/brochetas-de-pollo-preparadas-por-kg/00020208200000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="" target="ba_blank">Ver en soriana</a>
        </div></div>  
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Mojarra tilapia por kilo.jpg" alt="Mojarra tilapia por kilo"></a>
                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/entero/mojarra-tilapia-por-kilo/00020614800000?adBanner=express&adStoreId=0000009998" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/mojarra-tilapia-kg/305682.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filete Sealect Salmón 100 gr.jpg" alt="Filete Sealect Salmón 100 gr"></a>
                                        
        <div><a class="boton_walmart" href="https://www.soriana.com/filete-sealect-salmon-100-gr/2302588.php" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/filete-sealect-salmon-100-gr/2302588.php" target="ba_blank">Ver en soriana</a>
        </div></div>
       
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filetes de tilapia sin piel Marketside 500 g.jpg" alt="Filetes de tilapia sin piel Marketside 500 g"></a>
                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/filetes-de-tilapia-sin-piel-marketside-500-g/00750179160218" target="ba_blank">Ver en walmart</a></div>
        
        </div>  
                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Medallones de atún premium Marketside aleta amarilla 680 g.jpg" alt="Medallones de atún premium Marketside aleta amarilla 680 g"></a>
                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/medallones-de-atun-premium-marketside-aleta-amarilla-680-g/00750179167054" target="ba_blank">Ver en walmart</a></div>
        
        </div>
       
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filete de Salmón Descongelado Kg.jpg" alt="Filete de Salmón Descongelado Kg"></a>
                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/filete-de-salmon-fresco-con-piel-por-kg/00020613500000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/filete-de-salmon-descongelado-kg/11557296.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Cubitos de atún Dolores aleta amarilla 200 g.jpg" alt="Cubitos de atún Dolores aleta amarilla 200 g"></a>
                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/cubitos-de-atun-dolores-aleta-amarilla-200-g/00750104540269" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/cubitos-de-atun-dolores-cevichero-200-g/11242700.php" target="ba_blank">Ver en soriana</a>
        </div></div>
               
<div class="fexcajasPR"><img src="/imagenes/proteinas/Roles de Salmón Shell Pride 171 gr.jpg" alt="Roles de Salmón Shell Pride 171 gr"></a>
                                        
      
        <div><a class="boton_soriana" href="https://www.soriana.com/roles-de-salmon-shell-pride-171-gr/2302591.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filete de róbalo Marketside Premium 500 g.jpg" alt="Filete de róbalo Marketside Premium 500 g"></a>
                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/filete-de-robalo-marketside-premium-500-g/00750179160092" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/robalo-fresco-entero-kg/1614517.php" target="ba_blank">Ver en soriana</a>
        </div></div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/Filetes de huachinango Marketside Premium 500 g.jpg" alt="Filetes de huachinango Marketside Premium 500 g"></a>
                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/filetes-de-huachinango-marketside-premium-500-g/00750179160093" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/pargo-huachinango-kg/1614516.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Salmón Marketside sin piel 500 g.jpg" alt="Salmón Marketside sin piel 500 g"></a>
                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/salmon-marketside-sin-piel-500-g/00750179160217" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/porciones-de-salmon-capitan-sin-piel-500-g/11535363.php" target="ba_blank">Ver en soriana</a>
        </div></div>
               
<div class="fexcajasPR"><img src="/imagenes/proteinas/Sashimi de Atún Dolores.jpg" alt="Sashimi de Atún Dolores"></a>
                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/sashimi-de-atun-dolores-premium-corte-grueso-150-g/00750104540422" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/sashimi-de-atun-dolores/11532923.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Atún Dolores aleta amarilla en agua 295 g.jpg" alt="Filete de atún Dolores Premium con costra de ajonjolí 304 g"></a>
                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/atun-dolores-aleta-amarilla-en-agua-295-g/00750104540086" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/atun-dolores-en-agua-lat-140gr/374525.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
               
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filete de atún Dolores Premium con costra de ajonjolí 304 g.jpg" alt="Filete de atún Dolores Premium con costra de ajonjolí 304 g"></a>
                                        
        <div><a class="boton_walmart" href="Filete de atún Dolores Premium con costra de ajonjolí 304 g" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/filete-de-atun-dolores-con-especias-304-g/11532920.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Carne para hamburguesa Dolores Premium de atún aleta amarilla 400 g.jpg" alt="Carne para hamburguesa Dolores Premium de atún aleta amarilla 400 g"></a>
                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/carne-para-hamburguesa-dolores-premium-de-atun-aleta-amarilla-400-g/00750104540347" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/carne-para-hamburguesa-de-atun-dolores-200-gr/11222910.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                       
<div class="fexcajasPR"><img src="/imagenes/proteinas/Filete de calamar por kg.jpg" alt="Filete de calamar por kg"></a>
                              
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/filete-de-calamar-por-kg/00020603900000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/filete-calamar-kg/308677.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Camarón Mediano Sin Cabeza Kg.jpg" alt="Camarón mediano sin cabeza por kg"></a>
                                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/camaron-mediano-sin-cabeza-por-kg/00020612200000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/camaron-mediano-sin-cabeza-kg/305726.php" target="ba_blank">Ver en soriana</a>
        </div></div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/Pulpo Kg.jpg" alt="Pulpo Kg"></a>
                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/pulpo-fresco-por-kg/00020637400000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/pulpo-kg/305706.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                       
<div class="fexcajasPR"><img src="/imagenes/proteinas/AtúnHerdezEnAgua.jpg" alt="Atún Herdez en agua 85 g"></a>
                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/enlatados-y-conservas/atun-herdez-en-agua-85-g/00750100311103" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/atun-herdez-en-agua-85-gr/11321574.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Cola Langosta Kg.jpg" alt="Cola Langosta Kg"></a>
                                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/pescados-y-mariscos/cola-de-langosta-grande-por-kilo/00020607800000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/cola-langosta-kg/305748.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                               
<div class="fexcajasPR"><img src="/imagenes/proteinas/Bistec de res por kilo.jpg" alt="Bistec de res por kilo"></a>
                                      
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/bistec-de-res-por-kilo/00020137000000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/bisteck-de-res-sin-hueso-rancho-don-francisco-selecta-kg/2154237.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de bola de res por kilo.jpg" alt="Milanesa de bola de res por kilo"></a>
                                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/milanesa-de-bola-de-res-por-kilo/00020195400000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/milanesa-de-res-pulpa-bola-rancho-don-francisco-selecta-kg/303897.php" target="ba_blank">Ver en soriana</a>
        </div></div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de cara de res pulpa negra por kilo.jpg" alt="Milanesa de cara de res pulpa negra por kilo"></a>
                                      
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/milanesa-de-cara-de-res-pulpa-negra-por-kilo/00020191700000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/milanesa-de-pulpa-negra-premium-kg/2231529.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de res pulpa blanca por kilo.jpg" alt="Milanesa de res pulpa blanca por kilo"></a>
                                                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/milanesa-de-res-pulpa-blanca-por-kilo/00020107700000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/milanesa-de-res-pulpa-blanca-rancho-don-francisco-selecta-kg/1399234.php" target="ba_blank">Ver en soriana</a>
        </div></div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/Bisteck de res por kg.jpg" alt="Bisteck de res por kg"></a>
                                      
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/bisteck-de-res-por-kg/00020111800000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/bisteck-chuleta-del-7-de-res-rancho-don-francisco-selecta-kg/303875.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Bistec de pulpa Kowi 600 g.jpg" alt="Bistec de pulpa Kowi 600 g"></a>
                                                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/cerdo/bistec-de-pulpa-kowi-600-g/00750117510085" target="ba_blank">Ver en walmart</a></div>
        
        </div>
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Milanesa de res por kg.jpg" alt="Milanesa de res por kg"></a>
                                              
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/res/milanesa-de-res-por-kg/00020122900000" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/milanesa-de-res-pulpa-blanca-rancho-don-francisco-selecta-kg/1399234.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo blanco Bachoco fresco 30 pzas.jpg" alt="Huevo blanco Bachoco fresco 30 pzas"></a>
                                                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-blanco-bachoco-fresco-30-pzas/00750110152551" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-blanco-bachoco-30-piezas/650026.php" target="ba_blank">Ver en soriana</a>
        </div></div>

<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo Blanco San Juan 18 Piezas.jpg" alt="Huevo blanco San Juan 18 pzas"></a>
                                      
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-blanco-san-juan-18-pzas/00750300055509" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-blanco-san-juan-18-piezas/1053255.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo Rojo Bachoco 12 Pz.jpg" alt="Huevo Rojo Bachoco 12 Pz"></a>
                                                                                
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-rojo-bachoco-fresco-12-pzas/00750110152103" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-rojo-bachoco-12-pz/390417.php" target="ba_blank">Ver en soriana</a>
        </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Clara de huevo San Juan líquida 500 g.jpg" alt="Claras de Huevo San Juan 500 g"></a>
                                              
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/clara-de-huevo-san-juan-liquida-500-g/00750223225171" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/claras-de-huevo-san-juan-500-g/2506718.phpv" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Claras de Huevo San Juan 1 kg.jpg" alt="Claras de Huevo San Juan 1 kg"></a>
                                                                                        
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/claras-de-huevo-san-juan-liquidas-pasteurizadas-1-kg/00750223225172" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/claras-de-huevo-san-juan-1-kg/2191899.php" target="ba_blank">Ver en soriana</a>
        </div></div>
        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo blanco El Calvario 18 pzas.jpg" alt="Huevo blanco El Calvario 18 pzas"></a>
                                              
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-blanco-el-calvario-18-pzas/00750117691036" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-blanco-calvario-18-piezas/602754.php" target="ba_blank">Ver en soriana</a>
        </div></div>  
                                                                        
<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo Blanco Bachoco 18 Piezas.jpg" alt="Huevo Blanco Bachoco 18 Piezas"></a>
                                                                                        
       <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-blanco-bachoco-fresco-18-pzas/00750110152501" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-blanco-bachoco-18-piezas/390418.php" target="ba_blank">Ver en soriana</a>
        </div></div>
                
<div class="fexcajasPR"><img src="/imagenes/proteinas/Huevo blanco E´Natural libre pastoreo 12 pzas.jpg" alt="Huevo de Libre de Pastoreo Nutricampo 12 Piezas"></a>
                                                      
        <div><a class="boton_walmart" href="https://super.walmart.com.mx/huevo/huevo-blanco-e-natural-libre-pastoreo-12-pzas/00750302445405" target="ba_blank">Ver en walmart</a></div>
        <div><a class="boton_soriana" href="https://www.soriana.com/huevo-de-libre-de-pastoreo-nutricampo-12-piezas/11417203.php" target="ba_blank">Ver en soriana</a>
       </div></div>   -->
                                                                                                                      
</div>



<div class="infoProductMap disNone" id="containerMap" >
        <div class="disNone" id="mapDirectionLugares" >
            <h2 class="titleInfoProduct" >Lugares Cercanos</h2> <br>
            <button id="close" ><img src="imagenes/x.png"></button>
            <div id="mapIframe">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1L5SUu3RgqrKnrYEdCSRr0sKu3SAORWU&ehbc=2E312F" width="640" height="480"></iframe>
            </div>
           
            <div class="infoPrincipalProduct">
                <h2 id="titleProductSelect">Leguminosas</h2>
                <br>
                <img src="imagenes/Azucardecoco.jpg" class="imgProductSelect" id="imgProductSelect" alt="imgProducto">
                <p>Se encuentra disponible en:</p>
                <div class="imgLugaresDisponibles">
                    <img src="imagenes/Lugares disponibles/Merza.png"   class="imgMapSelec imgSelectLugar" alt="Merza" >
                    <img src="imagenes/Lugares disponibles/walmart.png" class="imgMapSelec" alt="Walmart">
                    <img src="imagenes/Lugares disponibles/aurrera.svg" class="imgMapSelec" alt="Aurrera">
                    <img src="imagenes/Lugares disponibles/soriana.png" class="imgMapSelec" alt="Soriana">
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
                <figure>
                    <a href="Page-Initial.php">
                        <img class="imagenfooter" src="imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" width="200%">
                    </a>
                </figure>
            </div>
            
               
       <a class="item-2" href="Termsycondiciones.php">TERMINOS Y CONDICIONES</a>
    
          
        </div>
        <div class="item-3">
            <small>&copy; 2022  - Todos los Derechos Reservados.</small>
        </div>
    </footer>


        <script src="whatss.js"></script>
        <!-- <script src="FinalPrueba/java.js"></script> -->
        <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
        <script defer src="Prueba7/java.js"></script>
        <script src="js/create-html-products.js"></script>
        <script src="js/maps-directions.js"></script>

        <script>

        const buscarBtn = document.getElementById('buscarBtn');
        const buscadorGeneral = document.getElementById('buscadorGeneral');

        buscarBtn.addEventListener('click', () => {

        window.location="productos/general-productos.php";

        })


        buscadorGeneral.addEventListener('keyup', () => {

        let prodctBuscar = buscadorGeneral.value;
        window.location="productos/general-productos.php";

        })

        </script>

</body>
</html>
