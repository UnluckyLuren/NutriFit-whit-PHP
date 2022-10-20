<?php
require 'database.php'; 
session_start();
$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
if (!empty($_POST['correoGuardado']) && !empty($_POST['contraseñaguardada'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $mesage = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
    
    } else {
        $mesage = 'Perdon, tus datos no coinciden';
    }
}


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/styleslogin.css">

</head>
<body>
    <?php
    if(!empty($message)): ?>
       <p><?= $message ?></p>
    <?php endif; ?>
    <?php
    if(!empty($mesage)): ?>
       <p><?= $mesage ?></p>
    <?php endif; ?>
    <header class="header ">
        <nav class="nav">
            <a href="#" class="logo ">
                <img src="../imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>

            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item  "><a href="../Page-Initial.html" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " ><a href="index.html" class="nav-menu-link nav-link">Ingresar</a></li>
                <li class="nav-menu-item"><a href="../dieta.html" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item "><a href="../recetarios/recetarios.html" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>
        </nav>
    </header>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para ingresar a la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form method="post" action="index.php" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correoGuardado">
                        <input type="password" placeholder="Contraseña" name="contraseñaguardada">
                        <button type="submit">Entrar</button>
                    </form>

                    <!--Register-->
                    <form method="post" action="index.php" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text"  placeholder="Correo Electronico" name="email">
                        <input type="password"  placeholder="Contraseña" name="password">
                        <input type="password" placeholder="Confimar contraseña" name="confirm_password" >
                        <button type="submit">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="java.js"></script>
        <script src="https://kit.fontawesome.com/dd255fbb38.js" crossorigin="anonymous"></script>
        <script src="../whatss.js"></script>
      <br><br>
      <br><br>
 
</body>
</html>