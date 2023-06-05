<?php 

session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
// $imageUser = $_SESSION["imagen"];


if ($privilegio != 5 && $privilegio != 7) {

    header("location: ../../index.html");

} 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    
    <!-- Estilos bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo 'assets/js/waitMe.min.css'; ?>">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
    
    </style>
    <title>NutriFit Living</title>
</head>
<body id="bodyEmpresas">
    
    <div class="containerBoxMenus">
        <div class="topbar">
            <div class="logo">
                <h2>NutriFit Living</h2>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="busque aqui">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <form action="../Login_register/cerrar-sesion.php" method="POST" >
                    <button type="submit" > <img src="../imagenes/icons8-salir-redondeado-100.png" alt="admin" class="logOut"> </button>
                </form>
            </div>
        </div>
        <div class="sidebarMenu">
            <ul>
                <li>
                    <a href="#" class="hover" id="sideMenuInicio">
                        <i class="fas fa-th-large"></i>
                        <div>Inicio</div>
                    </a>
                </li>

                <?php 

                if($privilegio == 5) {
                    echo '
                        <li>
                            <a href="#" class="hover" id="sideMenuPedidos">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <div>Pedidos</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover" id="sideMenuPedidos">
                                <i class="fas fa-user"></i>
                                <div>Completados</div>
                            </a>
                        </li> ';
                } else if ($privilegio == 7) {

                    echo ' 
                        <li>
                            <a href="#" class="hover" id="dietas">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <div>Dietas</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover" id="diaActualPac">
                                <i class="fas fa-user"></i>
                                <div>Pacientes de hoy</div>
                            </a>
                        </li> 
                        ';
                }

                ?>
            </ul>
        </div>

       
  <!-- content -->

        <div class="contMain" id="mainChange">
            <?php
                require_once './app/config.php';

                // Renderizado de la vista
                get_view('index');
            ?>
        </div>

  

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script src="./Empresas-change-view.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo 'assets/js/waitMe.min.js' ?>"></script>
    <script src="<?php echo 'assets/js/main.js'; ?>"></script>

    <!-- PDF Visualizer -->
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
   

</body>
</html>