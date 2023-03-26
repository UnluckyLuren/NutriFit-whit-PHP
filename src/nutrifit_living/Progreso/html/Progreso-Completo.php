<?php


session_start();

$nombre = $_SESSION["user"];
$privilegio = $_SESSION["privilegio"];
$imageUser = $_SESSION["imagen"];
$pdfActual = $_SESSION["pdf"];


?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Nutrifit Living</title>

    <!-- Icons. Uncomment required icon fonts -->
    <!-- <link rel="stylesheet" href="../assets/css/boxicons.css" /> -->

    <!-- Diseño pagina -->
    <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
    <!-- Diseño iconos -->
    <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
    
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link  rel="icon" href="../../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <!-- <link rel="stylesheet" href="../css/responsive.css"> -->

    

    <!-- <link rel="stylesheet" href="../css/demo.css"/> -->

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="../css/perfect-scrollbar.css" /> -->

    <!-- <link rel="stylesheet" href="../css/apex-charts.css"/> -->

    <!-- Helpers -->
    <!-- <script src="../css/helpers.js"></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <!-- Graficas -->
    <script src="../js/config.js"></script>
  </head>

  <body>

    <header class="header ">

    <div class="userMenuDiv" >
                <a href="#"><img src="<?php echo"../.".$imageUser; ?>" id="open"  class="userMenuImg"></a>
                <p> <?php echo $nombre ?> </p>
    </div>

      <nav class="nav">
          <a href="#" class="logo ">
              <img src="../img/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
          </a>

          <button class="toggle" aria-label="Abrir menú">
              <i class="fa-solid fa-bars"></i>

          </button>

          <ul class="nav-menu ">
              <li class="nav-menu-item  "><a href="../../Page-Initial-Vip.php" class="nav-menu-link nav-link1">Inicio</a></li>
              <li class="nav-menu-item " ><a href="../../productos.php " class="nav-menu-link nav-link1">Productos</a></li>
              <li class="nav-menu-item"><a href="../../dieta.php" class="nav-menu-link nav-link1">Servicios</a></li>
              <li class="nav-menu-item "><a href="../../recetarios/recetarios.php" class="nav-menu-link nav-link1">Recetario</a></li>
          </ul>
      </nav>
  </header>


<!-- menu desplegable -->
       
<div class="container containerMenuDes ">
    <nav class="menu ejemploProgCompleto">
        <ul>
            <li><a href="#"><p class="nombreDEpaginadondeseencuantra pagProgSubMenu sideProg">Gráficas</p></a>
            <ul class="submenu subMenuProg" id="sideMenuProg"></li> 
            <li><a href="#" class="sideProg" onclick="verPDFUserSlc('<?php echo '../.'.$pdfActual ?>', this.textContent)">Dieta Actual</a></li>
            <li><a href="#" class="sideProg" onclick="verPDFUserSlc('<?php echo '../.'.$pdfActual ?>', this.textContent)">Mensajes</a></li>
            <li><a href="#" class="sideProg" onclick="verPDFUserSlc('<?php echo '../.'.$pdfActual ?>', this.textContent)">Nutri Express</a></li>
        </ul>
        </ul>
    </nav>                      
</div>  
    


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" >
      <div class="layout-container " id="mainChange">
        <!-- Menu -->

        <!-- <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        </aside> -->
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="">Estado actual del usuario</h5>
                          <div class="imagenes">
                            <img src="../img/1.png" alt="">
                            <img src="../img/2.png" alt="">
                            <img src="../img/3.png" alt="">
                            <img src="../img/4.png" alt="">
                            <img src="../img/5.png" alt="">
                            <img src="../img/6.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Porciento de grasas</span>
                          <svg width="110" height="110">
                            <circle r="43" cx="60" cy="60" class="progress2"></circle>
                            <circle r="43" cx="50" cy="60" class="progress" id="progress"></circle>
                          </svg>
                          <div class="box_percentage">
                            <p id="percentage" class="percentage">%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span>Porciento de azucar</span>
                          <svg width="110" height="110">
                            <circle r="43" cx="60" cy="60" class="progress2"></circle>
                            <circle r="43" cx="50" cy="60" class="progress" id="progress1"></circle>
                          </svg>
                          <div class="box_percentage">
                            <p id="percentage1" class="percentage">%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Dias cumplidos de dieta</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                type="button"
                                id="growthReportId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                2022
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% rutina competada</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2021</small>
                              <h6 class="mb-0">27%</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2020</small>
                              <h6 class="mb-0">54%</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->


                <!-- Contenedores laterales -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="d-block mb-1">Porciento de calcio</span>
                          <svg width="110" height="110">
                            <circle r="43" cx="60" cy="60" class="progress2"></circle>
                            <circle r="43" cx="50" cy="60" class="progress" id="progress2"></circle>
                          </svg>
                          <div class="box_percentage">
                            <p id="percentage2" class="percentage">%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Por. de masa magna</span>
                          <svg width="110" height="110">
                            <circle r="43" cx="60" cy="60" class="progress2"></circle>
                            <circle r="43" cx="50" cy="60" class="progress" id="progress3"></circle>
                          </svg>
                          <div class="box_percentage">
                            <p id="percentage3" class="percentage">%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Plan de adelgazamiento</h5>
                                <span class="badge bg-label-warning rounded-pill">Año 2021</span>
                              </div>
                              <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"
                                  ><i class="bx bx-chevron-up"></i>Peso objetivo</small
                                >
                                <h3 class="mb-0">Para el...</h3>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Nutrientes consumidos</h5>
                      </div>
                      
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <span>Total Orden</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-mobile-alt"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Frutas</h6>
                              <small class="text-muted">Verduras - frutas</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">85</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Carnes</h6>
                              <small class="text-muted">Carnes, gasas, embutidos</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">50</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Cereales</h6>
                              <small class="text-muted">Pan, cereales, arroz, pasta</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">50</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-football"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Leguminosas</h6>
                              <small class="text-muted">Frijoles, garbanzos, lentejas</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">15</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-income"
                            aria-controls="navs-tabs-line-card-income"
                            aria-selected="true"
                          >
                            Datos
                          </button>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="nav-link" role="tab">Expensiones</button>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="nav-link" role="tab">Lucro</button>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                          <div class="d-flex p-4 pt-3">
                            <div>
                              <small class="text-muted d-block">Total Balance</small>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">Del usuario</h6>
                                <small class="text-success fw-semibold">
                                  
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChart"></div>
                          <div class="d-flex justify-content-center pt-4 gap-2">
                            <div class="flex-shrink-0">
                              <div id="expensesOfWeek"></div>
                            </div>
                            <div>
                              <p class="mb-n1 mt-1">Resumen personal</p>
                              <small class="text-muted">semanal/mes</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transacciones</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../img/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Paypal</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">$$$</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../img/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Santander</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">$$$</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../img/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Visa</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">$$$</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../img/cc-success.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Master Card</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">$$$</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- <script src="../js/jquery.js"></script> -->
    <!-- <script src="../js/popper.js"></script> -->
    <!-- <script src="../js/bootstrap.js"></script> -->

    <!-- <script src="../js/menu.js"></script> -->
    <!-- endbuild -->

    <!-- Vendors JS ---->
    <script src="../js/apexcharts.js"></script>
    <script src="../../Prueba7/java.js"></script>

    <!-- Main JS -->
    <!-- <script src="../js/main.js"></script> -->

    <script src="../js/dashboard-grafic.js"></script>

    <!-- Page JS -->
    <script src="../js/dashboards-analytics.js"></script>
    <script src="../js/progreso-comp-change-view.js"></script>

    <!-- PDF Visualizer -->

    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>


  </body>
</html>
