<?php


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login_register/index.php");
    exit;
}

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];


if ($privilegio == 0) {
    header("location: ../Page-Initial.php");
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/style.css">
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
                    <li><a href="recetarios.php"><p class="nombreDEpaginadondeseencuantra">Postres</p></a>
                    <ul class="submenure">
                    <li><a href="#" id="linkBebidas" >Bebidas</a></li>
                    <li><a href="recetarios.php">cenas</a></li>
                    <li><a href="recetarios.php">Comidas</a></li>
                    <li><a href="recetarios.php">Desayunos</a></li>
                    <li><a href="keto.php">keto</a></li>
                    <li><a href="recetarios.php">Snaks</a></li>
                    <li><a href="recetarios.php">Vegano</a></li>
                </ul>
                </ul>
            </nav>
        </div> 

        <div class="cerrarMenu" >

            <button id="closePreparation" >Cerrar</button>
            
        </div>

        <div id="container" >

                <div class="contenerya" id="displayPreparation" >

                <div class="card recetario" id="recetas">
                    <div class="face front">
                        <img src="../imagenes/Hot Cakes hulk.jpg" id="imgChangeBeb" alt="hotcakeshulk">
                        <h3 id="imgChangeTitle" >Hot Cakes Hulk</h3>
                    </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p id="textBebJugoVerde" >
                    
                        • 1 huevo
                    <br> 
                    •1/4 taza de claras de huevo
                        <br> 
                        •1/2 tza de avena en hojuelas
                        <br>
                        •1/2 plátano
                        <br>
                        • 1 a 2 tzas de espinacas
                        <br>
                        •1 cdita de esencia de vainilla
                        <br>
                        •Toppings al gusto
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">

                <div class="face front">
                    <img src="https://www.cocina-uruguaya.com/base/stock/Recipe/233-image/233-image_web.jpg" id="imgBebRep" alt="Torta de manzana">
                    <h3 id="titleBebRep" >Tarta de Manzana</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    
                    <p id="textSmotthie" >
                    
                        •1 yogur griego
                        <br>
                        •3 huevos
                        <br>
                        • 2 manzanas amarillas para el relleno
                        <br>
                        •1 manzana (de la que más te guste) para decorar
                        <br>
                        •170 gr de harina de avena
                        <br>
                        •1 cucharada de aceite de coco
                        <br>
                        •canela al gusto
                        <br>
                        •Esencia de vainilla (opcional)
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation" href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://i.pinimg.com/originals/1f/a2/b2/1fa2b23fb2b18075b3292929b52b9cc8.jpg" alt="gansito">
                <h3>Gansito</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •1 huevo
                        <br>
                        •1/4 tza de harina de avena
                        <br>
                        •1/4 tza de harina de almendra
                        <br>
                        •1/4 tza de leche
                        <br>
                        •1 cda de monk fruit
                        <br>
                        •1 cdita de polvo para hornear
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.recetasparavivirmejor.com/wp-content/uploads/2021/03/americaDigital_crepes_con_fruta_2021.jpg" alt="crepas">
                <h3>Crepas</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •1/3 T avena
                        <br>
                        •1 huevo + 1 clara
                        <br>
                        •1/3 T agua
                        <br>
                        •1 C cacao en polvo
                        <br>
                        •Yogurt griego 
                        <br>
                        •Esencia vainilla
                        <br>
                        •Endulzante  
                        <br>
                        •Crema de avellana
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://www.clikisalud.net/wp-content/uploads/2020/05/flan-napolitano-con-nuez.jpg" alt="flan">
                <h3>Flan</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                    - 1 huevo
                    <br>
                        - 1/4 taza de claras de huevo
                        <br>
                        - 1/2 tza de avena en hojuelas
                        <br>
                        - 1/2 plátano
                        <br>
                        - 1 a 2 tzas de espinacas
                        <br>
                        - 1 cdita de esencia de vainilla
                        <br>
                        - Toppings al gusto
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://images.ecestaticos.com/_cK231QWAQnIv_64MiZTEdiRKxM=/91x100:1847x1420/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Faf3%2F330%2F646%2Faf3330646a60c8fedc98f8227c9a9fc8.jpg" alt="Mermelada">
                <h3>Mermelada</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •Frutos rojos congelados
                        <br>
                        •Chia
                        <br>
                        •Endulzante de tu preferencia 
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFhUYGRgaGhocGBwaHBgaGhkaGRgaGhgYGRwcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQrJCsxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAAIDBQYBBwj/xAA6EAACAQIEBAMFBgYCAwEAAAABAgADEQQSITEFBkFRImFxEzKBkaEHQlKxwdEUFSNi4fBy8YKSshb/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAkEQADAQACAgEEAwEAAAAAAAAAAQIRITEDElEEEyJBMmFxFP/aAAwDAQACEQMRAD8AquE8UxbPYFiDpN5wLgDEh6h13t0hHL3AlpKCwuf93mkVrQwhIkpoFFgJ1nkReMZ48KJGeRl4wvOXgA7NOgxgM7eICZWiLSEGdEAJbx15HedBgA687eMvFAB14ryDE4pUBZiAJ5/zFztqUosPNom8KmW2b7FcTpU/fdR8ZU1OeMIptnB9J4zXxr1GJdy2vU/pGWi9ilKPZ153wjfek2H5ioOfC4nii0WtpvGDFOCAbjzGhhoeqPoKnWVhoQZJeeL4HmSpTy2ckDoevxnpHAOYUrra4zdRDROWjQXnQYwGdBjJJVaPR5BedBgAQ6qwsRKPinAgwJUfv/mWuaPWpAWGB/kb+fyMU3+cRQDCtSpH+0gCvOipLwA32k57SCipO54AE5p3PBGqgC52mK5n54SkSlPxN17D1ifAJabDH8ao0QS7gW85k+JfaRTXSmpfz6fMzy/E4t6rF3csSb6k2HoOkZaQ2WpNsv2h4kvfKoHQf5lzg/tEJPjT5ETzSmJLlMXsy1KPacDzlh3sC2U+c0VDEI4urAjynzqga+nSaflbmepQqKHJybH0jVEuPg9nBjK9UKLxYbEK6B1NwRKPmPHZEbyEszMRz3zEzP7FCQN2t27fGYdXzGdr1mqVGcnViT8OgnaB1sRM2zaVwSBLC8bnvJ6/lICnhzW2i0olTEFd950sr77zihXW3WRJdTtAP2WCYJAt2OvQSbB4hqDq6E6HUdx2kuFIexhOIwobsJOlep6vwTFivRV1O4hgPeYHkXjHsXNBzoT4f2no7KGE0T1GFTjIAZ0zjIREGjJFHGcnYAK8UV4oAZ8PO55DGl5qQEe0nVeQIIPxLFhKbG+wMTAzfO3MwRfZU28Z3t0HeeYvqb31O8kxmKLu7k+8xPw6fSCneZs2SxEiEgwtLGDKZIrRMaJihEnom4tIQ/SJHsZJROjEGWFMBx5iV6veF4bSItG+5A4+c7YZz0un6iS8+YjLSqdND+UwKYk0KqVkOqm59Os2XPH9XCCqmzrf6Xly+DG1laea4fUixhZHivKvDPLWjVFrMJD4NJJ61UKm2sVDFoVsROikji2a0HpYfzgP9kSVMr6bQ1qefUGCV6VpNh2Nt4CJKOLNM2Pzhpx2bxA3gVekCNYJSVhdQbXiaKTLzg9Q1KyhWuwYbT3PDKQig72E8R+zbAM2MDWuApPxuLfrPcpcrDLyVrOiRPS7R87eWZg150GTsgMHdCsQD4pFmMUAMtUxIE6j9ZFToW1O8maXpOHC5lTzECaL27S1vBcfTzoy9xEwR4kLW85wiE4+iUqOjDZj8jtBmMk1HrJVMhUyZlIiYIJVxCUwwY3Blet4Th0forH0BkM0TE9Eq0LoMYRTwlUi/snsN/A2n0jaaXIXqdNZOlpA+OqeGehIqvwRQDqq29Dtaed4xP6mS97WuR9Z6NyKiYnC1KJuFVyNJSfwZWuTyB0ZGvax6iWmBxyjRlB9ZredeT3pf1Eu6feFtbdxPPibGV2Sqzo0gwqOLowB7GR+zdDqNpTpiSNjC6GNYmxbfQ32Elo0VFvUXOotpK9kZG1GkPKU0AtiAT5bSF8bRAs1TNY7AfrEnpQ5qotIFQufCNYHiMeGYBF0+pm85G5feoc7jKvUd7Q5JdI3HJHBlo0QxUB2GvymljMOgCgDpHzVIxb05O2nDFeMR2JvOcvETACP2KxSSKAGPMaRAOCYsuhVjdl+ZHT/AH0lkwhL1aJy08ZHaRV2sLxlfH0k3ceg1P0lTjuKZxZFNu5/aTVyi58dV0jEc34UmoagGh0lNh+G1X1VDbubD85tsSha1zIsPRIMy+6dUfTN9mfw3Llc75F9Wv8AlDqXLFQnV0A/8r/K00dBYYmW8zfmZt/zSinTgCU0NtSd30LDuVB0BmjpVk0CpT9mCMuYs1Q6aZiW17ztCtl2sPgJIcUnW30kO/3o/sf0V+KxtDDoCxZVYnwpfUne/wDmZPifM1Mo6KhbMboWt4NALqRr5wznfGK6IikXzX03sAb/AKShwiIg90E9yL/nNPGlms5vJLVYgKnUdbEKWY62Gu/ea7knm5MJTZGw9R3ZiWK5VUXOmreUp1xXS4/38okZWOmv5fGamfqeiVftAosuVqJ1GoZ1/QGee47DUK1R3TwBjfKuw77yQUhbXKPXX6X/AFg9WqieIaeZ6nyG14tY1KI24Otjla46XEH/AJSy6ggjy/UQl67nZSb2IJ7SwwC1Abstl6EXv5384nWFT4/ZmZxFMg+8PhB/Z3nqPB+SqGJRnvla+o0+dunWLEcp4agdWLntpLltoxpetNGY5M4C9WoHYWRep6+k9eXidGkoUEAATzrG8eWlanSUFvoPWBVK5dGLtc276A+kbeDS9uD1NOaqNvC2a29tZXv9oWHVrFW+U8qwuKdLhDvoZC1ybmHsw9Ee0YbnfCOQM+X10l7hsbTcXR1b0M+eH03hODx1SmQUdlPkdPltH7Ccn0NERPOeWOfrkJidOgcbfHtPRKNVXAZSCD2lENYOiitFAR4Xw7iFQMwDFT3GlwYaKzsfE7NfuTKxPeZh2X6XhtOp3nG6PUmF8BaKOoj3UD0gprSI1pOmygndheQu8Gar1ldjeIhSNYJNjbUrWXa4m3WTHFqBqZjanGuigk9+kCq4qo+7EDsJa8LZlX1Mz1ya/GcwImmbWVNfj1R/dFvM/oJUYfDA67nz1hOQDaUvFKMa+ouuuBZiTcm5O5MkWrl6/LU/SRrSJNhf/fLeWycHqWACak2uxAtfrlH7ynUz2YpVXQHTIPRt+tvnOVGcffK+Sj9Zr+G8q3UZ/Ex2FyRfrbLuIbgeRgahYrlvl8F7qPO1/pM/+idxFPx4uWYNQ2VnCub7sRe/pprLjAYTE3RMlwbkCwsvfNcb+s9CxHK1OwVmLA2HQf8AQlpgOE00F8mvU3J6W0JmVeZvhIa9JWptmMw3DWFmZLKo1bKC7eQ10EBrcVGbMiWA2B38yZ6JifZ5TZhtMJxjCH2oJXKpGh2vrqJnFbWUdPjtNdFtwHiOSg56sd++lz/9CZfmTi+RC17sxsJZcQxWXDLawylrW66C5P0mG4uxbIrG5Gp+M7Yr8UcXln82MwhPvE3Y6kwxdZBSTSSMMukoSWDqOhkriQBtYQouIARNYjziVekdTexnWGsYiAtY2M2vJXMrUWCOxKHv93/Ex9SnmkmBBVrSkyKR7x/NU/EIp5F/FN3M5K4JwF0GpHxiNSD1qxsbyvGPE4s09f2S7LRq0HqYwKLkyvOKd2yU1Z2OwUXJlVWLsxDaWJBXsQbG80nx72Y39Qp4kOxfFydFFz9BK56TMbsb/kJMiKu0JppcE3AAFyT+Q7mapKejlqqvtgi0ZPSpjqTbrbf4QtMMzt4BYWvY/P1MveCcvF/ebsNASSTt/wByKtT2OfG3z+jPYbCu7eFSRfYC2nQG51MvMHy3VdCxGS+wAuxA6EzU4Hl96TeIKEPoTfob9zLiihFwgIFxmYttl0Nu85/J5q/Ropmf7Kfl7llBcNT308R1t39ZrhwykgGl27kX/wBEZgKL573uLnU637GXDoLX377aSJl0m2TVtPEQo6o1kUHT3ug0206SKq1luXVTckkHU3G2sca+bwoco76W+F4E9JGNywdgLHbXW1xc6DeZ00uFySl8kFNw7m1RvL13lrh1QCzuTbYEyncD2mdgqhR4rEg26HUDTfYQtq6bgAgC99Ta+3r/AIimkl0W5b6CcRjKSm2S9vKee8wcdFWswC2VSAvla9/np8pf8W5ioIpJYHottSfQCYvGUnetZUAJ+71tbRm6DTWaeFuqerg0mPXnOSLiBY0HZfdUjT1Ya/UTO4oXZWv0E1PHqa0KJS98yqD/AMi4a/nsZjQ5PpOyeuDLycVj+Cyw7SeoLwbDNCiYySFlhtIWEEEmSr0jAc9MXjgmgiAJAaxt5gj/ALk1xl84ySFE1k1OnYyOledq1wrXjEw7IYpF/FLOQ0nCsxtSwIlXgUVnAYkjNrbtIsVii5NtB36mcwehmcziN7v2Z7Lw7h9GnSvRRULJuBrqvU7meLU1tcX9T3PUz2vgVTPh0J/Db62nk/MnDxQxNRB7t8y/8W1H6j4Teukcq7YNhKQdrE2HU9B6wzCYdalUIgzAak97dZTioR6TR8mshxADbkeH1HSY3wmzaHyka/hHBQmqKSxAzE7AevaarDYKmiE6BurdLjp5zP47mWlTIXdhuouOul7ecvVxKhc5Gbbw318QuLeU5kt5o1um+CXDOHuGUMpO/kOwO0MqU018xK9ar3BClFN7XG/oBJcQ9vFsVHj1C28yLwbSXyRj0jw+JYEhQSB9JLS4jnJztoAdB9619raE6HSZ3GcdYOUp02cm42JXTRjfrbWWWFwfttTVcajOiWAB6gkjbymG11pt6JLWE4RvbhmdnVFs2SwUZTc+PKfEbD3byvxSY6u3gFOmmoBOpIB8Ph6TTIlGkLghdNRoCdeoGsHxHFACcqnbQXsWOvTtpD8V2Sm91Ir8FyoSM+Jcu42y7W8x1hVXhdFksy2cXswLDUg3tbbc6R/85yovtXu3VVXUnYKB3v8AlKfinF6SPbENka5ZVZgoy200F7/HX0jb3+KD8m+Wc4rwyilMnKgJ2sutyb6DXWZ01stWoFBLkgDqzEgAW9bybEccoZswGYDXMddLWNrx/KXEkOMWqFuHOW53W4sCBsO3xmvhmt54NHfqt7YLzfy+9PDI9Q3cm7DogPur69/WeftobdDr+8+juYeHLXpNTbqNPWeCcf4U9F2Q7g3U9+4nX6qeDiduq9n2QURpCUJlZRqHQ/PyhyvpEabpPV0HrIaK5fjGs5MejxiC6lZitrmw2HacpPcSJW0vHK4C6QAnL2jsModhm2vB0fMLdY+krKdoxrvTQfy9Owild/Fevzik4afcXwY7LDuHYN6jqiKSSen5zb8qcgiugqO5AOyKNW+J2mqXgyYcWpoFHXv8TNFLfZzu0uhuBoinTRB90AfHrMT9pGEvkrAf2Mfqt/rNsXgvFMMlSk6OLqVPwsL3lvoyXenjAW+07RqMjh0JDKbgwha63DjRh8j5jtB6z3JPeZ9mvXRvOA8CGNb+Iqt4jYG2mgGht1+M3eHwSpdQAy01sdy1gL5b7D0mF5WxdRaCuuQoL5szWYW18IHW00WE4w7oxpKzjW9jbM1vwnpOSt9sZvjfQdxLmcUrJky+G4JOtjrYAHU7ytNOricru+Sk4uV2Yj7t7fPr6R+G5dRsj1Lu1iWGpHcDXYfDpLmp7OkQQoLEAWHTsPKZ22kWnKeT38glbhWHplHc5WXNk3FhfxaLp8T5RYriZBUU7Ipuc1h4trWFvqJRcx8WQZfaJd7EAIfAADmsxO/+7zIcT4w9U6E5rEC3uBQdAo3+J3inxVXI3Slc8s1+L5iWibEZ2AJuGBXsL36+neZHHcerVXzFyOwHT4ynUb944TonwzP+mVeRsNp8UrK4cVHDDrc6X7QPH1Xcl3dnY7sxLH5nWcktMC9m26zXEiOWLD1LpaXnKjhalMHQe0T85Q4Qe8BsDLLh1bIwc7IQ/wD6m8AR9CVZkuceWFxKZk0cbGajDVs9NH/EoPzEUt8mKPnbG4CpQchlseo6MPKDu1jmF8vUdRPeOOcu0sSpDLZuh63nnHGOSq9O5UZ1GxG9vPvIaNJoo6JpuoyNr2MT4RhrY2g74HKbMhRu4uPpJFxNZNLll89YtNOxFNDHUMDUceFGI72MZRxrA3ZcwJ2/SbHA8UuoZUAAFiO2npJqmlwi4hV2zIezZNSCPUEQ2izVCEQXY/TzMvqHDa2PcKqeAHVrWUa669T5CbfDcDoYZVSmgLfebqTLnWtZlTUtpcmK/wDyL/j+kU9D9j5RSsM/dg3D6nsyoUWAsAPKXeNwq1Vzpqbajv8A5mbptLPhuOKHX3es6aRimUOKoFD5flBcUt0cXtdWFzpa4tLjnPi2Hw6hiQWcG1Mbn+7yHnPJ+JcaqVjqbL0UbfHvMatI28fjqv8ADMtgGVWa4OVipA38Ol/SDy+q1MqHQAWbMQPEb9z16SuZM4zKPp16zOa3s1rx50MwdWzKC7KmYE2J9CflPceCJSGGy0yL5dDbUm2/rPFMHg2ZvGjlbG2UqDfpct0m84LxZKKAKz3AF1NjY/8AK0z8r5TRXjhuWjUe1qLfxhQqkkDLtrrc+nbrKHEYuo4LBVQWJLMLsfMgaDpA6nFXqt+EHp3A7/tAuZMflQUlOrjXyUfvMFPs8ZupUTrMnjsa1RjdiVv4fyB/3vO4GqFa5F7DSDGSU31nZ6rMOP2ftp16hZixtcm+m0feRxXg0Gkjm0VBr5r7x3stCSdpzDJmbTa1jEPHoVgsGxRn1tf/AETcfZtwRazO7rdRYC/++ky+HrFv6CDTc+QnsHI3DxSwy2+9rFOt8lXkysL32YUBQLACwnMsIdY0LNMOcgYRezvCPZxwpwwZVYng1F/fRT8IC/KWGOmSaXJHLTi9UP2aMgnIeGzXs3peWyctYcCxS47HaXgSJhbWClfAOq+QB0SimVFC9gBaAYemSbnrDaql2vJKdK0okZ7M+UUJtFDAPGsFz8mUZ6bZrakEAH0gHE+ea9Tw0VFMd/ec/HYTI0qZdtNpZ0sOFEzry11p1R4JfODHLuxd3LMdyxuY8U7CS2nekxb06VKXBCVjka2kdeJVvAY9GnHfKwPRtPQxwSwiTCtU8IBPUfvBIbrEH4d7a3AsOsynFMaalZnG2ir/AMR+5ufjPQ8DwZAln8RIsew72ma41yy1MlkGZe3b0mkJLs5PNbrhGYD3hNFANSYO1LXYgxwVuhE0MCRQTeEnCEKWuOmne8HpM22US0bCHIGNRB/aNfrJplyt0ZhOFs4JLgDr0l3hKVM0QlNMz3Pi9TuZRICD4nJHYaCb3kzgbuPaP4EtoO4ktOuEUqUrWCcv8svcKtxc3d+4/CJ6zgKIRFUbAWglCgAALWHRdvnbc/SFUFyvlGxW5HQG9tPX9JrM4c1eRvOOA0CJVjkEeBGMSrHBZ0COAgA3LO2joowG2g9c30k1RrSNEgBGlOOIkpkbQAjiiigB874XDAEwjEgDQRyiwgeIqG84+z1ekNYxK14zWSJTMZOiCSZE6Ti0iZpeA8A9oQz3CfU+QlTLbxE1alawDBYIt5DvLvDYVUFlFpe43h6hQEUADYCCUMPL9fU5q8nsMoUYcmEBFiJPQw1pYUaURJksbyVRqPn272v+krsR9nSnVHI/L6z0dKclWjfpGiWeTj7Pav41+X+ZZ8L+z7X+o1x0A0+c9MTC95KKYEtTvYvbOjNYHlLDIPcBPmJb+zVAqKLC4+Q1/MD5yxVJClMM7HovhHru36D4S5SRlbb4+SJELMRcgC21tSRfqPMQyjRAN7lja1zbQb2FhGUaRDtpoQp+OoI+QEnNRQbFlB7EgGNvAmN5/ZKsesr/AOYX91GYa2IKjNbfKCbt6gW85PQrl1OUMugsWA69RYnN+WokK03wW5aXIWCL26x0goYcJfck7k6kyeUStzkU4xnYwwGNC31MfFGkwA4xkLmPcyF2gByKMzRQEeBVannAyLmNZzOo2us5Ej03WkypJ6ayKkLzW8u8Cz2dx4Og/F/iXMuniIu1K1neXeAZ7O/u9B+L/E1goW226CEU1A0G0IRJ1zClYjz78jp6xlBLixkNTh+U3A0lrQoiHrRBEVToS8KCnSMMpYeWn8KJGUtM/Qv2I6WHAhKgSMGPvKUpEtj7RZZxTHgwAa5yqW7An5C8bhaVkW+51Pq2p/OS2BBB2Oh+MHpVSgCsrG2gZQWBHS9tQY10Q3j1jsXhS6hQxXxKSRvYG9geh21nUwFMCwRbdfCDf1J3i/jl6q4Hcq1vpO/xin3Vdj5KR9WsBIfjW60V93jEwd6hpq7Zbtm0HQrfLTRT53UAD7zHzg6rkIBu3saJ9ow3YkKQi9jZDp0DDqQYTWR9KjW8JvlGoC9Tfq3X4Q4ZWHQhh6ggjr30lZglWspsPjTSVVIUg5zYaah7sR/bYu9ugBHTUmlxW97oQApbQgm62BXp1JAP9t9AVJsKj5VJsWsNhqT6Xgj424NkY6XIIOxVmta29ha39wgN9cDEoPnBbKygWsWLFdb3HhAJ6XOtgPO4uKxRW6rsWA8Jy2AKg2/DmZ1XNfrcDS8INfQeFwLEkAm4sge21+ttxt8JMuJC+EK1hcAgMdBp2uSd/TW/SP8AWCS51gv83J2S+ikeKxs7FUJFvDcjX8N9fNtTiTKTcLYPl0ve3s89gTpfrfbppvLRKmZQbEXANjoRfofOImIorsHiy7MpB01vcHcsthYDS6Nbra19SQJ2MkcyFoAMzRRRQEfOjtGre+kYoJNhNTy/wcXzvrb5X/eYTLbxHbVpLSz5W5aLAVao8P3V6t5nym2C20HwlXw/FZTlO35S2nZMqViOG7dPWJBDKIgyCF0hKZCDaIhtOB0jC0MzZaJwYx6d50GOBiGBMljOiGOgMFekRABAx6xqpJlEQDkEfI7zoMAHxGNvFeIB0E/hCPcYp/bYFfgDt8DCbzj1AI0xNJ9id7DzjFMhzX1kgMQyS8V428V4DHExjGdJjCYAMeR2vHs0VMdYAc9jFJc0UBHzlw73pseCe43qPyE7FI8X8jfyfxLES/w3uLFFOo5QhYXSiigwC6UKSKKZspEwj1nIohjo19oooARiOEUUQHZ2KKAHYjORRAKD4neKKAHFjhFFABwnYooDEYxoooARNJYooAciiigI/9k=" alt="Mamut saludable">
                <h3>Mamut</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •GALLETA MARÍA SIN AZÚCAR
                        <br>
                        •YOGURT GRIEGO
                        <br>
                        •FRUTOS ROJOS MACHACADOS
                        <br>
                        •Chocolate Turin 70% cacao
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://eat-drink-love.com/wp-content/uploads/2013/02/Red-Velvet-Pancakes-3-mark.jpg" alt="Red Velvet Pancakes">
                <h3>Red Velvet Pancakes</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •1/2 tza de harina de avena
                        <br>
                        •2 claras o 1 huevo
                        <br>
                        •Canela al gusto
                        <br>
                        •1 tapa de Vainilla
                        <br>
                        •Monk fruit
                        <br>
                        •1/2 tza de betabel
                        <br>
                        •1/4 tza de leche vegetal
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://i.pinimg.com/736x/79/0f/b9/790fb91a1273bd0e591211d1e954b182.jpg" alt="Pay de plátano">
                <h3>Pie de Platano</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p>
                    
                        •1 tza Yogurt griego
                        <br>
                        •1 tapa de vainilla
                        <br>
                        •1 cda de monk fruit
                        <br>
                        •Galletas maria sin azúcar 
                        <br>
                        •Mezcla de yogurt
                        <br>
                        •Nueces
                        <br>
                        •Plátano
                        <br>
                        •Cajeta sin azúcar 
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="https://cdn7.kiwilimon.com/brightcove/7806/7806.jpg" alt="pie de limon">
                <h3>Pie de Limón</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                •1 tza de yogurt griego
                <br>
                •1/4 tza de leche de coco con vainilla 
                <br>
                •10 limones (depende de lo ácido que te guste a ti)
                <br>
                •2 cdas de monk fruit
                <br>
                •1 tapa de vainilla
                <br>
                •1 sobre de grenetina previamente hidratado
                <br>
                •1 tza de harina de avena
                <br>
                •1/2 tza de ghee
                <br>
                •1 cda de monk fruit   
                        
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="../imagenes/recetario/postres/negrito saludable.jpg" alt="Negrito en versión saludable">
                <h3>Negrito saludable</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                •1 huevo
                <br>
                • vainilla 
                <br>
                •Leche de almendras sin azucar
                <br>
                •monk fruit
                <br>
                •1chocolate sin azucar derretido
                <br>
                •medias noches cero cero
                <br>
                •1 tza de harina de avena
                <br>
                
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>

            <div class="card recetario" id="recetas">
                <div class="face front">
                <img src="../imagenes/recetario/postres/CHEESE CAKE DE MANGO.jpg" alt="CHEESE CAKE DE MANGO">
                <h3>Cheese cake de mango</h3>
                </div>
                <div class="face back">
                    <h3>Ingredientes</h3>
                    <p> 
                        
                •1 cda de ghee ( 13 gr )
                <br>
                •5 galletas sin azúcar ( 60gr)
                <br>
                •7 cdas de queso crema (100gr)
                <br>
                •2 das de monk fruit granulado (25 gr)
                <br>
                1/2 cda de extracto de vainilla
                <br>
                Yogurt griego sin azúcar y mango en cuadritos para decorar
                <br>
                    
                    </p>
                    <div class="link">
                        <a class="link_estilos openInformation " href="#">Modo de Preparación</a>
                    </div>
                </div>
            </div>
        </div>
</div>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
<footer class="containerfooter">
    <div class="item-1">
        <div class="imagen">
            <figure>
                <a href="../Page-Initial.php">
                    <img class="imagenfooter" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                </a>

            </figure>
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
    <script src="../js/preparation-recetas.js"></script>

    </body>
    
</html>