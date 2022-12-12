<?php

require "bajar-infoempresas.php";

$DatosNames = $_SESSION['DatosNames'];
$DatosDias = $_SESSION['Datosdias'];
$DatosHorarios = $_SESSION['Datoshorario'];
$DatosDomicilios = $_SESSION['Datosdomicilio'];
$DatosPdfs = $_SESSION['Datospdf'];

?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../imagenes/logo11_preview_rev_1.png">

    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/styleheader.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="estilos-empresas.css">

    </head>
    <body>
      <header class="header ">
        <nav class="nav">
            <a href="#" class="logo ">
                <img src="../imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>

            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item  "><a href="#" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " > <form action="../Login_register/cerrar-sesion.php" class="empresaFormCerrar"> <button type="submit" href="#" class="nav-menu-link nav-link">Salir</button></li> </form>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Entregando</a></li>
                <li class="nav-menu-item "><a href="#" class="nav-menu-link nav-link">Completados</a></li>
            </ul>
        </nav>
    </header>
        

    <div class="infoUserPedido">

        <h2>Pedidos para: Agranel</h2>
            <table>
        <tr>
            <th>Nombre</th>
            <th>dias requeridos</th>
            <th>horario</th>
            <th>domicilio</th>
            <th>pdf</th>
        </tr>
        <tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td class="pdfSource"> <?php echo ".".$DatosPdfs[0][0]; ?> </td>
        </tr>
        <tr>
            <td class="eName"> <?php echo $DatosNames[1][0]; ?> </td>
            <td> <?php echo $DatosDias[1][0]; ?> </td>
            <td> <?php echo $DatosHorarios[1][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[1][0]; ?> </td>
            <td class="pdfSource"> <?php echo ".".$DatosPdfs[1][0]; ?> </td>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        <tr>
            <td class="eName"> <?php echo $DatosNames[1][0]; ?> </td>
            <td> <?php echo $DatosDias[1][0]; ?> </td>
            <td> <?php echo $DatosHorarios[1][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[1][0]; ?> </td>
            <td class="pdfSource"> <?php echo ".".$DatosPdfs[1][0]; ?> </td>
        </tr>
        <tr>
            <td class="eName"> <?php echo $DatosNames[1][0]; ?> </td>
            <td> <?php echo $DatosDias[1][0]; ?> </td>
            <td> <?php echo $DatosHorarios[1][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[1][0]; ?> </td>
            <td class="pdfSource"> <?php echo ".".$DatosPdfs[1][0]; ?> </td>
        </tr>
        <tr>
            <td class="eName"> <?php echo $DatosNames[1][0]; ?> </td>
            <td> <?php echo $DatosDias[1][0]; ?> </td>
            <td> <?php echo $DatosHorarios[1][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[1][0]; ?> </td>
            <td class="pdfSource"> <?php echo ".".$DatosPdfs[1][0]; ?> </td>
        </tr>
        </tr>
            <td class="eName"> <?php echo $DatosNames[0][0]; ?> </td>
            <td> <?php echo $DatosDias[0][0]; ?> </td>
            <td> <?php echo $DatosHorarios[0][0]; ?> </td>
            <td> <?php echo $DatosDomicilios[0][0]; ?> </td>
            <td> <?php echo $DatosPdfs[0][0]; ?> </td>
        </tr>
        </table>

        <div class="iframeAcomodo disNone" id="dietaSrc">
            <iframe id="iframeSrc" src="../dietas-pdfs/DAFNE HANNEF- PLAN FEB.pdf" frameborder="0"></iframe>
        </div>

        <div class="info" id="containFormEmp">
            
            <div class="infoContainer">
                <form action="">
                <h2>Información del envio:</h2>
                    <label>Enviado por:</label>
                    <br>
                    <input type="text">
                    <br>
                    <label>Tiempo de llegada:</label>
                    <br>
                    <input type="text">
                    <br>
                    <label>Comisión por envio:</label>
                    <br>
                    <input type="text" value="Ninguna">
                    <br>
                    <label>Precio:</label>
                    <br>
                    <input type="text">
                    <br>
                    <label>Pago en dinero físico</label>
                    <br>
                    <button>Confirmar envio</button>
                </form>
            </div>
        </div>

    </div>



    <footer class="containerfooter objDisplay footerEmpresa" id="footerDieta" >
        <div class="item-1">
            <div class="imagen">
                <figure>
                    <a href="Page-Initial.php">
                        <img class="ImagenFooterOpccion2" src="../imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                    </a>
                </figure>
            </div>   
            <a class="item-2" href="Termsycondiciones.php">TERMINOS Y CONDICIONES</a>
        </div>

            <div class="item-3">
                <small>&copy; 2022  - Todos los Derechos Reservados.</small>
            </div>
    </footer>


    
    <script src="../Prueba7/java.js"></script>
    <script src="mostrar-pdf-empresas.js"></script>
    

    </body>        
</html>    