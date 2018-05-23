<?php get_header(); ?>

	<div id="galeria" class="section">
		<div class="cf">
			<div id="inner-galeria" class="wrap cf">
			<h4>AQUI VA EL TÍTUILO DE LA GALERÍA DE IMÁGENES</h4>
			</div>

			<div id="carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/library/images/padel.jpg" alt="padel"/> </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tenis.jpg" alt="tenis"/> </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/library/images/basket.jpg" alt="basket"/> </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/library/images/balonmano.jpg" alt="balonmano"/> </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/library/images/futbol.jpg" alt="futbol"/> </div>
                 </div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>