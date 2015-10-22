<?php get_header('interno'); ?>

		<div class="container">
		<div class="row">
			<div class="col-md-12 Def-seccion">
				<p>Descripcion del producto</p>
			</div> <!-- End of Def-seccion -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 Productos-categoria">
				<ul>
					<?php wp_nav_menu(
						array(
						'container' =>false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'productos'
					));	?>
				</ul>
			</div> <!-- End of Productos-categoria -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 Descripcion-texto">
				<h2 class="Columnas-titulo">Descripcion del producto</h2>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="Btn-mercado">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<br>
				</div> <!-- End of Btn-mercado -->
			</div> <!-- End of col-md-6 -->

			<div class="col-md-7">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<h2 class="Descripcion-titulo"><?php the_title(); ?></h2>
				<article><p><?php the_content(); ?></p></article>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron productos cargados</h6>
				<?php endif; ?>
			</div> <!-- End of col-md-6 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

<?php get_footer('internas'); ?>