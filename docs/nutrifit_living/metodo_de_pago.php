<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrifit Living Pago</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link  rel="icon" href="imagenes/LOGO NUTRIFIT LIVING_preview_rev_1.png" >
 
    <link rel="stylesheet" href="CSS/pago_styles.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/styleheader.css">
    <!-- <link rel="stylesheet" href="CSS/responsive.css"> -->

    </head>
    <body  id="Body-scroll"  >
      <header class="header ">
        <nav class="nav">
            <a href="#" class="logo ">
                <img src="imagenes/logo11_preview_rev_1.png" alt="Logo de NutrFit Living" class="logo">
            </a>
            <button class="toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>

            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item  "><a href="Page-Initial.php" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item " ><a href="LoginFuncionando/index.php " class="nav-menu-link nav-link">Ingresar</a></li>
                <li class="nav-menu-item"><a href="dieta.php" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item "><a href="recetarios/recetarios.php" class="nav-menu-link nav-link">Recetario</a></li>
            </ul>
        </nav>
    </header>


    <div class="contenedor">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera" id="delantera">
				<div class="logo-marca" id="logo-marca">
					<h1 id="bankname">Bank name</h1>
				</div>
				<img src="imagenes/img-pago/chip-tarjeta.png" class="chip">

				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">Username</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p> </p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CVV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A vitae enim deleniti voluptate explicabo quia culpa distinctio accusantium libero aliquid, recusandae neque veritatis harum quod iure suscipit repudiandae illo magni!</p>
				<!-- <a href="#" class="link-banco">www.tubanco.com</a> -->
			</div>
		</section>

		<!-- Contenedor Boton Abrir Formulario -->

		<!-- <div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div> -->

		<!-- Formulario -->

		<form action="./cards_planes/redireccionar-pago.php" id="formulario-tarjeta" class="formulario-tarjeta">
			<label class="grupo">Seleccione su Metodo de Pago</label>
			<div class="logos">
				<button id="1"><img src="imagenes/img-pago/logos/visa.png" alt=""></button>
				<button id="2"><img src="imagenes/img-pago/logos/mastercard.png" alt=""></button>
				<button id="3"><img src="imagenes/img-pago/logos/logo-Paypal.png" alt=""></button>
				<button id="4"><img src="imagenes/img-pago/logos/santander.png"  alt=""></button>
			</div>

			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CVV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>

			<button type="submit" class="btn-enviar">Pagar</button>

		</form>
	</div>


	<!-- Menu -->


	<!-- <div class="Menu-emergente" id="Menu-emergente" >

        <ul class="Menu-aside">

            <li class="Perfil-User-menu"><a href="./Login-regist.php"> <img src="./img/img-init-regist/user.png"> <p>Inicia Sesión</p> </a></li>
            <li><a href="./Catalogo.php"> <img src="./img/Img Catalogo/Carpeta.png"> Tus Proyectos </a></li>
            <li><a href="./Catalogo.php"> <img src="./img/Img Catalogo/Recientes.png"> Recientes </a></li>
            <li><a href="../Edition/PreEdition.php"> <img src="./img/Img Catalogo/Alfiler.png"> Crea un plano </a></li>

        </ul>

        <ul class="Menu-aside Lista-Categorias">

            <li>Categorias</li>
            <li> <a href="./Catalogo.php"> Casas Infonavit y similares </a> </li>
            <li> <a href="./Catalogo.php"> Casas Medianas</a> </li>
            <li><a href="./Catalogo.php">  Casas Grandes </a> </li>
            <li><a href="./Catalogo.php"> Casas Residenciales </a> </li>

        </ul>

    </div> -->



	<!-- <div id="navegacion">

		<div class="Menu-emergente-image" id="Menu-emergente-image" >
			<img src="./img/Menu-desplegable.png" alt="imagen de menu">
		</div>

		<ul>
			<li><a href="../index.php">Inicio</a> </li>
			<li><a href="./Catalogo.php">Catalogo</a> </li>
			<li> <a target="_blanck" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">Contactanos</a> </li>
		</ul>
	</div>
  
	<div class="Marca">
		<img src="./img/Marca.png" width="285" alt="Imagen de la marca" >
	</div>
   -->


	<!-- Ventana emergente -->

        <!-- Para que se habra la ventana debes oponerle a un a el id: open -->

        <div class="modal-container" id="modal_container">
            <div class="modal">
                <div class="compr-PAGADA">       
                    <!-- <button id="close"><img src="/Main/img/Img Catalogo/x.png"></button> -->
                    <!-- <img src="./img/Marca.png" alt="marca de la página" > -->
					<p>Tu pago ha sido procesado con éxito.</p>

					<div class="fon-tx-pago">
						<p>Se enviará el formulario con tu información a la nutriologa</p>
						<p>Da click en el boton de abajo para regresar a la ventana de dieta</p>
					</div>

					<a href="dieta.php"> <button class="btn-enviar btn-ver-plano">  Regresar </button> </a>

                </div>
              
            </div>
        </div>


        <!-- Footer -->


    <footer class="containerfooter">
    <div class="item-1">
        <div class="imagen">
            <figure>
                <a href="Page-Initial.php">
                    <img class="ImagenFooterOpccion2" src="../nutrifit_living/imagenes/Nuevo proyecto.png" alt="Logo de nutrifit living" >
                </a>
            </figure>
        </div>
        
           
   <a class="item-2" href="../nutrifit living/Termsycondiciones.php">TERMINOS Y CONDICIONES</a>

      
        </div>
        <div class="item-3">
            <small>&copy; 2022  - Todos los Derechos Reservados.</small>
        </div>
    </footer>
        
  
	<!-- Scripts -->

	<script src="js/Scripts-Ventana-de-pago-procesado.js"></script>
	<script src="js/main-pago.js"></script>
    <!-- <script src="whatss.js"></script> -->
    <script src="Prueba7/java.js"></script>

    </body>        
</html>    