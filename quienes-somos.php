<?php 
/*
Template name: queines-somos
*/
?>

<?php get_header('interno'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 Def-seccion">
				<p><span>Estas en la secci&oacute;n:</span> Quienes somos?</p>
			</div> <!-- End of Def-seccion -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="Columnas-titulo">Quienes somos?</h2>
			</div> <!-- End of col-md-12 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article class="Texto-queHacemos">
					<?php query_posts('category_name=queines-somos'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			
					<div class="thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'columna_destacados' ); } ?>
					</div> <!-- End of thumb -->
					<h2><?php the_title(); ?></h2>
					<article class="Col-descripcion">
						<p><?php the_excerpt(); ?></p>
					</article>				
					<?php endwhile; else: ?>				
						<h6 class="Nofind">No se encontro informaci&oacute;n cargada</h6>
					<?php endif; ?>
				</article> <!-- End of Texto-queHacemos -->
			</div> <!-- End of col-md-12 -->
		</div> <!-- End of row -->
	</div> <!-- End of container -->



<?php get_footer('internas'); ?>