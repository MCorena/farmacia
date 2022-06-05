<?php
session_start();
$inactivo=600;
if($_SESSION['user']==null){
  header("Location: ../html/login.html");
}
  else{
  if(isset($_SESSION['tiempo']) ) {
  $vida_session = time() - $_SESSION['tiempo'];

  if($vida_session > $inactivo){
      session_destroy();
      header("Location: ../html/login.html");
  }
  }}
$_SESSION['tiempo']=time();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<head>
		<title>Farmacia UTEC</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="assets/img/Icono.jpg" type="image/x-icon">
		<link rel="stylesheet" href="../assets/css/Estilos.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../assets/js/mainP.js"></script>

	</head>
</head>
<body>
	<div class="wrap">
    <a class="titulo" href="<?php session_destroy(); ?>">Cerrar Sesion </a>
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">Medicamentos</span></a></li>
			<li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">Vitaminas y Suplementos</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Bebe y Maternidad</span></a></li>
			<li><a href="#tab4"><span class="fa fa-bookmark"></span><span class="tab-text">Pomociones</span></a></li>
		</ul>

		<div class="secciones">
        <h3>Bienvenido <?php echo $_SESSION['user']; ?></h3>
			<article id="tab1">
				<h1>Medicamentos</h1>
				<section class="briefcase">
					<div class="container">
						<h2 class="titulo-2">Productos</h2>
						<div class="galery-port">
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-11-promo-DELAPIEL.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-01-REALE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-02-promo-SOLARE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-03-promo-WELED.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-04-promo-maquillaje.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-05-promo-CAUdalie.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
			<article id="tab2">
				<h1>Vitaminas y Sumplementos</h1>
				<section class="briefcase">
					<div class="container">
						<h2 class="titulo-2">Productos</h2>
						<div class="galery-port">
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-11-promo-DELAPIEL.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-01-REALE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-02-promo-SOLARE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-03-promo-WELED.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-04-promo-maquillaje.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-05-promo-CAUdalie.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
			<article id="tab3">
				<h1>Bebe y Maternidad</h1>
				<section class="briefcase">
					<div class="container">
						<h2 class="titulo-2">Productos</h2>
						<div class="galery-port">
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-11-promo-DELAPIEL.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-01-REALE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-02-promo-SOLARE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-03-promo-WELED.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-04-promo-maquillaje.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-05-promo-CAUdalie.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
			<article id="tab4">
				<h1>Promociones</h1>
				<section class="briefcase">
					<div class="container">
						<h2 class="titulo-2">Productos</h2>
						<div class="galery-port">
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-11-promo-DELAPIEL.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-01-REALE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-02-promo-SOLARE.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-03-promo-WELED.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-04-promo-maquillaje.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-05-promo-CAUdalie.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
							<div class="image-port">
								<img src="../assets/img/Promocionales/img-c-09-DUCRAY.jpg" alt="">
								<div class="hover-galery">
									<img src="../assets/img/icons8-de-acuerdo-512.png" alt="">
									<p>Aplica Oferta</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
		</div>
	</div>
	<footer>
        <div class="container-footer">
            <div class="container-foot">
                <h4>Telefono</h4>
                <p>503 +2525-2525</p>
            </div>
            <div class="container-foot">
                <h4>Contacto</h4>
                <p>FarmaciaUtec@farmaUtec.com</p>
                <p>Chat Online</p>
            </div>
            <div class="container-foot">
                <h4>Enlaces de interés</h4>
                <p>Sucursales</p>
                <p>Club VIP</p>
                <p>Servicios</p>
            </div>
        </div>
        <h2 class="titulo-end">&copy; Grupo 5|Farmacia UTEC</h2>
    </footer>
</body>
</html>