<?php 
/*
Template name: contacto
*/
?>

<?php get_header('interno'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="Columnas-tituloMarcas">Contacto</h2>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container">
		<div class="row">
			<div class="col-md-6 Texto-contacto">
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus asperiores totam vero 
						fugit placeat laboriosam, nam quis doloribus necessitatibus unde fuga nemo impedit. 
						Porro, eligendi unde dignissimos, molestiae error suscipit.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus asperiores totam vero 
						fugit placeat laboriosam, nam quis doloribus necessitatibus unde fuga nemo impedit. 
						Porro, eligendi unde dignissimos, molestiae error suscipit.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus asperiores totam vero 
						fugit placeat laboriosam, nam quis doloribus necessitatibus unde fuga nemo impedit. 
						Porro, eligendi unde dignissimos, molestiae error suscipit.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus asperiores totam vero 
						fugit placeat laboriosam, nam quis doloribus necessitatibus unde fuga nemo impedit. 
						Porro, eligendi unde dignissimos, molestiae error suscipit.
					</p>
				</article>
			</div> <!-- End of Col-6 -->

			<div class="col-md-6">
				<form role="form">
					<div class="form-group">
					   <label for="ejemplo_email_1">Email</label>
					   <input type="email" class="form-control" id="ejemplo_email_1" placeholder="Introducir email">
					</div> <!-- End of form-group -->

					<div class="form-group">
					  <label for="ejemplo_password_1">Nombre</label>
					  <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Ingresar Email">
					</div> <!-- End of form-group -->
 					<button type="submit" class="btn btn-default">Enviar</button>
				</form> <!-- End of form -->

				<div class="Mapa">
					<h3>Aca va el mapa</h3>
				</div> <!-- End of Mapa -->
			</div> <!-- End of col-md-6 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

<?php get_footer('internas'); ?>