<!DOCTYPE html>
<html lang="es-Ar">
<head>
	<meta charset="UTF-8">
	<title>El Bazar CG</title>
	<!-- METAVP -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- METAVP -->	
	<!-- CSS -->
  	<link href="<?php bloginfo('template_directory')?>/style.css" rel="stylesheet" type="text/css" media="screen" />
  	<!-- CSS -->

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body>

<div class="Header-interno">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-6"></div> <!-- Cols vacias -->
				<div class="col-md-6">
					<div class="Contenedor-datos">
						<p>Pedidos vía email:<a href="mailto:pedidos@elbazarcg.com"> pedidos@elbazarcg.com</a> | Tel:5555-5555</p>
					</div> <!-- End of Contenedor-datos -->
				</div>
			</div> <!-- End of row -->
		</div> <!-- End of container-fluid -->
	</div> <!-- End of Header-interno -->


	<div class="container-fluid Menu-paginas">
		<div class="row">
			<div class="col-md-1">
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/public/images/logo-interno.png" width="99" height="99" alt="El Bazar CG - Concepto Gastronomicos">
				</a>
			</div>

			<div class="col-md-7 Menu-pagina">
				<ul>
					<?php wp_nav_menu(
						array(
						'container' =>false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'interno'
					));	?>
				</ul>
			</div> <!-- End of Menu-pagina -->

			<div class="col-md-4 Redes-paginas">
				<ul>
					<li>
						<a href="#">
							<img src="<?php bloginfo('template_directory'); ?>/public/images/mini-facebook.png" width="31" height="31" alt="Facebook el bazarCg">
						</a>
					<li>
						<a href="#">
							<img src="<?php bloginfo('template_directory'); ?>/public/images/mini-pinterest.png" width="31" height="31" alt="Pinterest el bazarCg">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php bloginfo('template_directory'); ?>/public/images/mini-instagram.png" width="31" height="31" alt="Instagram el bazarCg">
						</a>
					</li>
				</ul>
			</div> <!-- End of Redes-paginas -->
		</div> <!-- End of row -->
	</div> <!-- End of container-fluid -->