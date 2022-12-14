<?php


session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="estiloscards.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body>

    <header class="header ">
            
        <div class="userMenuDiv" >
            <a href="#"><img src="<?php echo".".$imageUser; ?>" id="open"  class="userMenuImg"></a>
            <p> <?php echo $nombre ?> </p>
        </div>

            <nav class="nav">
                <a href="#" class="logo ">
                    <img src="../imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
                </a>
                <button class="toggle" aria-label="Abrir menú">
                    <i class="fa-solid fa-bars"></i>
    
                </button>
                <ul class="nav-menu">
                    <li class="nav-menu-item  "><a href="../Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                    <li class="nav-menu-item " ><a href="../productos.php" class="nav-menu-link nav-link">Productos</a></li>
                    <li class="nav-menu-item"><a href="../dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                    <li class="nav-menu-item "><a href="../recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
                </ul>
            </nav>
        </header>


    <form class="formPrivilegios" action="Dar_Privilegios.php"  method="post">
        <div class="body__page">

            <div class="container__card">

                <div class="card c1">
                    <div class="icon">
                        <img class="vip"src="891438.png" alt="VIP">
                    </div>
                    <div class="info__description">
                            <strong><p>FREE PLAN</p></strong>
                            <p>Tendrás acceso al plan de dieta y su mapa de equivalencias de forma gratuita e inmediata.</p>
                            <a href="#"><input type="submit" name="freePlan" value="INICIO"></a>
                    </div>
                </div>

                <div class="card c2">
                    <div class="icon">
                        <img class="vip"src="contodo.png" alt="VIP">
                        <!-- <i class="fab fa-css3"></i> -->
                    </div>
                    <div class="info__description">
                        <strong><p>NutriFit Living Experience</p></strong>
                        <p>Tendrás acceso al plan de dieta 100% perzonalizado, enfocado en ti, tu salud, tiempo, gustos y necesidades.</p>
                        <a href="#"><input type="submit" name="intermediumPlan" value="PAGAR"></a>
                    </div>
                </div>

                <div class="card c3">
                    <div class="icon">
                        <img class="vip"src="3159176.png" alt="VIP">
                    </div>
                    <div class="info__description">
                        <strong><p>VIP NutriFit Living PASS</p></strong>
                        <p>Acceso a  plan personalizado y herramientas que te acompañarán en el proceso (recetario, lugares y productos recomendados, etc.)</p>
                        <a href="#"><input type="submit" name="vipPlan" value="PAGAR"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
</form>



<footer class="containerfooter">
    <div class="item-1">
        <div class="imagen">
            <figure>
                <a href="Page-Initial.php">
                    <img class="imagenfooter" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" width="40%">
                </a>
            </figure>
        </div>
        
           
   <a class="item-2" href="Termsycondiciones.php">TERMINOS Y CONDICIONES</a>

      
    </div>
    <div class="item-3">
        <small>&copy; 2022  - Todos los Derechos Reservados.</small>
    </div>
</footer>




    <script src="scriptcards.js"></script>
    <script src="../Prueba7/java.js"></script>

</body>
</html>