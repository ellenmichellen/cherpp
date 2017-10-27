<?php
/*
	Template Name: home
*/

get_header();

?>

<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
	<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-speed="450" data-autoplay="5000">
		<div>
			<div class="slider-caption dark slider-caption-center">
				<h2>Centre for Higher Education Research, Policy &amp; Practice</h2>
			</div>
			<img src='<?php  bloginfo('template_url');  ?>/images/test.jpg?>' alt="Slider">
		</div>
	</div>
</section>

<section id="content">
	<!-- Organisers section -->
	<div class="container clearfix topmargin-lg">

		<div class="nobottomborder">

			<!-- First row of organisers -->
			<ul class="clients-grid grid-7 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2015 (Canadian) institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'cherpp_organiser', 'meta_value' => 'Yes' ) ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
			</ul>
			
		</div>
	</div><!-- organisers section end -->
</section>

<?php get_footer(); ?>