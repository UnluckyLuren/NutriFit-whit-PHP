<?php

session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];



if ($privilegio !== 6) {
    header("location: ../Login_register/cerrar-sesion.php"); 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <!-- Para las gráficas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

    <title>NutriFit Clinic</title>
</head>
<body id="containtBody">
    <div class="container">
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
        <div class="sidebar">
            <ul id="sideMenu">
                <li>
                    <div class="userMenuDiv" >
                        <a href="#"><img src="../imagenes/user.png" id="open"  class="userMenuImg"></a>
                        <p> <?php echo $nombre ?> </p>
                    </div>
                </li>
                <li>
                    <a href="#" class="hover" id="side1">
                        <i class="fas fa-th-large"></i>
                        <div>Inicio</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover" id="side2">
                        <i class="fas fa-user-graduate"></i>
                        <div>Pacientes</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover" id="side3">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Ingreso</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover" id="side4">
                        <i class="fas fa-chart-bar"></i>
                        <div>Avances</div>
                    </a>
                </li>
                
            </ul>
        </div>

        <!-- Container Principal -->
        <div class="main" id="mainChange">
            
            <input type="text" id="contPend" value="<?php echo $numberPend ?>">
                      
        </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script src="./js/page-change-clinic.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
   
   

</body>
</html>