<?php 
/*
Template name: productos
*/
?>

<?php get_header('interno'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 Def-seccion">
				<p><span>Estas en la secci&oacute;n:</span> Productos</p>
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
			<div class="col-md-12">
				<h2 class="Columnas-titulo">Productos</h2>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container Columnas">
		<div class="row">
			<div class="col-md-3 Col">
				<?php query_posts('category_name=producto-1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><?php the_title(); ?></h2>
				<article class="Col-descripcion"><p><?php the_excerpt(); ?></p></article>
				<div class="Separato"></div>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron productos cargados</h6>
				<?php endif; ?>
			</div>

			<div class="col-md-3 Col">
				<?php query_posts('category_name=producto-2'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><?php the_title(); ?></h2>
				<article class="Col-descripcion"><p><?php the_excerpt(); ?></p></article>
				<div class="Separato"></div>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron productos cargados</h6>
				<?php endif; ?>
			</div>

			<div class="col-md-3 Col">
				<?php query_posts('category_name=producto-3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><?php the_title(); ?></h2>
				<article class="Col-descripcion"><p><?php the_excerpt(); ?></p></article>
				<div class="Separato"></div>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron productos cargados</h6>
				<?php endif; ?>
			</div>

			<div class="col-md-3 Col">
				<?php query_posts('category_name=producto-4'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><?php the_title(); ?></h2>
				<article class="Col-descripcion"><p><?php the_excerpt(); ?></p></article>
				<div class="Separato"></div>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron productos cargados</h6>
				<?php endif; ?>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

<?php get_footer('internas'); ?>