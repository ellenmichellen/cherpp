<?php
/*
	Template Name: heit-2018-call
*/

get_header();

$leading_text = get_field('leading_text');							// Variable to store leading body text
$conference_information = get_field('conference_information');		// Variable to store conference information text
$important_dates = get_field('important_dates');					// Variable to store important dates text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/castle.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Call for Papers, Workshops &amp; Panels</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<?php
				// Display dynamic HEIT 2016 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2018_submenu',
					'container' => 'nav'
				));
			?>
			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
		</div>
	</div>
</div><!-- #page-menu end -->

<!-- Page Content
============================================= -->
<section id="content">

	<!-- Leading text section -->
	<div class="row topmargin-lg bottommargin-lg">
		<div class="col-md-12 center">
			<div class="heading-block center nobottomborder themes">
				<!-- Leading text -->
				<span>
					<?php echo $leading_text; ?>
				</span>
			</div>
		</div>
	</div><!-- leading text section end -->

	<!-- Themes section -->
	<div class="row clearfix common-height header-stick">

		<?php 

			// Loop through array of 2016 themes, ordered by theme number ascending
			$loop = new WP_Query( array( 'post_type' => 'domain_networks','orderby' => 'domain_number', 'order' => 'ASC' ) ); 

			// For each theme in the array...
			while( $loop->have_posts() ) : $loop->the_post(); ?>

				<!-- Display and style information for each theme (3 column layout) -->
				<div class="col-md-4 dark center col-padding" style="background-color: <?php the_field('div_color'); ?>;">
					<div>
						<!-- Theme icon -->
						<i class="i-plain i-xlarge divcenter <?php the_field('icon'); ?>"></i>
						<!-- Theme name -->
						<h3><?php the_title(); ?></h3>
					</div>
				</div>

			<?php endwhile; 

		?>

	</div><!-- themes section end -->

	<!-- Conference imformation section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center nobottomborder themes">
				<!-- Leading text -->
				<span>
					<?php echo $conference_information; ?>
				</span>
			</div>
		</div>
	</div><!-- conference information section end -->

	<!-- Divider line -->
	<div class="line topmargin-sm nobottommargin"></div><br><br>

	<!-- Important dates section -->
	<div class="row topmargin-sm bottommargin-lg">
		<div class="col-md-12 center">
				<div class="heading-block center">
				<!-- Important dates section title -->
				<h3>Important Dates</h3>
			</div>
			<div class="heading-block center nobottomborder themes">
				<!-- Important dates text -->
				<span>
					<?php echo $important_dates; ?>
				</span>
			</div>
		</div>
	</div><!-- important dates section end -->
	
</section><!-- #page content end -->

<?php get_footer(); ?>