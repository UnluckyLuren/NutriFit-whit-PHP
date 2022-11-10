<?php 
    
    include 'code-register.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NUTRIFIT-LIVING</title>

    <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/login-styles-responsive.css">
    <link rel="stylesheet" href="CSS/responsive.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

<header class="header">
        <nav class="nav">
            <a href="#" class="logo ">
                <img src="../imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-menu">
                <li class="nav-menu-item  "><a href="../Page-Initial.html" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " ><a href="../productos.html" class="nav-menu-link nav-link">productos</a></li>
                <li class="nav-menu-item"><a href="../dieta.html" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item "><a href="../recetarios/recetarios.html" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>

        </nav>
    </header>

    <div class="container-all">

        <div class="ctn-form">
            
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"> <?php echo $password_err; ?></span>

                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="index.php">Iniciar Sesión</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Saber comer es saber vivir</h1>
            <p class="text-description">Que la comida sea tu alimento, y tu alimento tu medicina . Hipócrates . La aptitud física no es solo una de las claves más importantes para un cuerpo sano, sino que es la base de una actividad intelectual dinámica y creativa. John F. Kennedy
            </p><br>
        </div>

    </div>


    <footer class="containerfooter objDisplay" id="footerDieta">
        <div class="item-1">
            <div class="imagen">
                <figure>
                    <a href="Page-Initial.html">
                        <img class="ImagenFooterOpccion2" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                    </a>
                </figure>
            </div>   
            <a class="item-2" href="../nutrifit living/Termsycondiciones.html">TERMINOS Y CONDICIONES</a>
        </div>

            <div class="item-3">
                <small>&copy; 2022  - Todos los Derechos Reservados.</small>
            </div>
    </footer>

    <script src="../Prueba7/java.js"></script>




</body>

</html>