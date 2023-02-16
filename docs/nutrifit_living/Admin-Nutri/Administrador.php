<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon" href="../imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
    
    </style>
    <title>Admin-NutriFit_Living</title>
</head>
<body>
    
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
            <ul>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-user-graduate"></i>
                        <div>Pacientes</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Nutriologos</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-users"></i>
                        <div>Empresas</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-chart-bar"></i>
                        <div>Analisis</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div>Ganancias</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-cog"></i>
                        <div>Ajustes</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover">
                        <i class="fas fa-question"></i>
                        <div>Ayuda</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Pacientes</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">4 </div>
                        <div class="card-name">Nutriologos</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">27</div>
                        <div class="card-name">Empresas</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$17,500</div>
                        <div class="card-name">Ganancias</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
               
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Ganancias (ultimos 7 meses)</h2>
                    
                    <canvas id="myChart"></canvas>
                    
                      
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                      
                    <script>
                        const ctx = document.getElementById('myChart');
                      
                        new Chart(ctx, {
                          type: 'line',
                          data: {
                            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
                            datasets: [{
                              label: ' $ MXN',
                              data: [12, 3, 10, 4, 8, 14, 17],
                              borderWidth: 1
                            }]
                          },
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                    </script>
                      
                </div>
                <div class="chart">
                    <h2>Empresas</h2>
                    
                    <canvas id="empresas"></canvas>
                    
                      
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                      
                    <script>
                        const ctx1 = document.getElementById('empresas');
                      
                        new Chart(ctx1, {
                          type: 'doughnut',
                          data: {
                            labels: ['Sietetallos', 'Bamboo', 'DivinoVerde', 'PuntoSalad', 'LaPaniera', 'GreenandBlack'],
                            datasets: [{
                              label: '% de Participación',
                              data:[4,7,3,5,2,3],
                              borderWidth: 1
                            }]
                          },
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                    </script>
                      
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
   

</body>
</html>