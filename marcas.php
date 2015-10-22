<?php 
/*
Template name: marcas
*/
?>

<?php get_header('interno'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 Def-seccion">
				<p><span>Estas en la secci&oacute;n:</span> Marcas</p>
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
				<h2 class="Columnas-titulo">Marcas</h2>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container Columnas">
		<div class="row">
			<div class="col-md-3 Col">
				<?php query_posts('category_name=marcas-1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
					</a>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron marcas cargadas</h6>
				<?php endif; ?>
			</div> <!-- End of Col -->

			<div class="col-md-3 Col">
				<?php query_posts('category_name=marcas-2'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
					</a>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron marcas cargadas</h6>
				<?php endif; ?>
			</div> <!-- End of Col -->

			<div class="col-md-3 Col">
				<?php query_posts('category_name=marcas-3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
					</a>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron marcas cargadas</h6>
				<?php endif; ?>
			</div> <!-- End of Col -->

			<div class="col-md-3 Col">
				<?php query_posts('category_name=marcas-4'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
					</a>
				</div> <!-- End of thumb -->
				<h2 class="Col-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endwhile; else: ?>				
					<h6 class="Nofind">No se encontraron marcas cargadas</h6>
				<?php endif; ?>
			</div> <!-- End of Col -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

<?php get_footer('internas'); ?>