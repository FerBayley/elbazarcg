<?php get_header(); ?>

	<div class="Page">
		<div class="container">
			<div class="row">
				<div class="col-md-3 Card">
					<a href="index.php">
						<img src="<?php bloginfo('template_directory'); ?>/public/images/logo.png" width="191" height="191" class="Card-logo" alt="El Bazar Conceptos Gastronomicos">
					</a>

					<nav>
						<ul>
							<?php wp_nav_menu(
								array(
								'container' =>false,
								'items_wrap' => '<ul id="menu-top">%3$s</ul>',
								'theme_location' => 'menu'
							));	?>
						</ul>
					</nav> <!-- End of nav -->

					<div class="Redes">
						<ul>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/public/images/facebook.png" width="31" height="31" alt="Facebook el bazarCG"></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/public/images/pinterest.png" width="31" height="31" alt="Pinterest el bazarCG"></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/public/images/instagram.png" width="31" height="31" alt="Instagram el bazarCG"></a></li>
						</ul>
					</div> <!-- End of redes -->

<?php get_footer(); ?>