<?php get_header(); ?>

	<div id="galeria" class="section">
		<div class="cf">
			<div id="inner-galeria" class="wrap cf">
			    <h2>CONOCE NUESTRAS INSTALACIONES</h2>
			</div>

			<div id="carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/library/images/padel.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/padel.jpg" alt="padel"/>
                        </a>
                    </div>
                    <div class="item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/library/images/tenis.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/tenis.jpg" alt="tenis"/> 
                        </a>
                    </div>
                    <div class="item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/library/images/basket.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/basket.jpg" alt="basket"/>
                        </a>
                    </div>
                    <div class="item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/library/images/balonmano.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/balonmano.jpg" alt="balonmano"/>
                        </a>
                    </div>
                    <div class="item">
                        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/library/images/futbol.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/futbol.jpg" alt="futbol"/>
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</div>

    <div id="noticias" class="section">
        <div id="inner-noticias" class="wrap cf">
            <div class="m-all t-all d-all"><h2><?php echo __('ÚLTIMAS NOTICIAS', 'neoptheme');  ?></h2></div>
            <div id="noticia" class="m-all t-all d-all">
            <?php 
                $args = array(
                    'posts_per_page' => '3');

                $query= new WP_Query($args);

                if($query->have_posts()){

                    while ($query->have_posts()){
                        $query->the_post();
                        ?>
                            <div class="m-all t-1of3 d-1of3">
                                <div class="noticias-card">
                                    <?php the_post_thumbnail("thumb-gallery"); ?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>


