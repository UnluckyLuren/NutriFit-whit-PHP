<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido- NutriFit Living</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

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
                <ul class="nav-menu">
                    <li class="nav-menu-item  "><a href="Page-Initial.html" class="nav-menu-link nav-link">Inicio</a></li>
                    <li class="nav-menu-item " ><a href="productos.html" class="nav-menu-link nav-link">Productos</a></li>
                    <li class="nav-menu-item"><a href="dieta.html" class="nav-menu-link nav-link">Servicios</a></li>
                    <li class="nav-menu-item "><a href="recetarios/recetarios.html" class="nav-menu-link nav-link">Recetario</a></li>
                </ul>
            </nav>
        </header>
   
        <br><br><br><br>

            <div class="ctn-welcome">
                <h1 class="title-welcome"><b> BIENVENIDO A NUTRIFIT LIVING</b></h1>
                <a href="../cards_planes/index.html" class="close-sesion">Planes</a>
                <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
            </div>

    <script src="../Prueba7/java.js"></script>
    
</body>
</html>