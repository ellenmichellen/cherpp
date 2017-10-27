<?php
/*
	Template Name: home
*/

get_header();

?>

<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="7000" data-speed="650" data-loop="true">
	<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-speed="450" data-autoplay="5000">
		<div>
			<div class="slider-caption dark slider-caption-center">
				<h2>Centre for Higher Education Research, Policy &amp; Practice</h2>
			</div>
			<a href="#"><img src='<?php  bloginfo('template_url');  ?>/images/test.jpg?>' alt="Slider"></a>
		</div>
	</div>
</section>


<?php get_footer(); ?>