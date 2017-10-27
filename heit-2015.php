<?php
/*
	Template Name: heit-2015
*/

get_header();

$conference_name = get_field('conference_name');					// Variable to store conference name
$conference_date = get_field('conference_date');					// Variable to store conference date
$conference_location = get_field('conference_location');			// Variable to store conference location
$conference_image = get_field('conference_image');					// Variable to store conference image
$leading_text = get_field('leading_text');							// Variable to store leading body text
$streams_summary_text = get_field('streams_summary_text');			// Variable to store summary text for streams section
$papers_description_text = get_field('papers_description_text');	// Variable to store text for paper description section
$papers_button_link = get_field('papers_button_link');				// Variable to store link for HEIT papers collection
$highlights_video_text = get_field('highlights_video_text');		// Variable to store text for highlights video section
$highlights_video_link = get_field('highlights_video_link');		// Variable to store link for highlights video section

?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-main-image.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center"><?php echo $conference_name; ?></h1>
		<span class="white center subheading"><?php echo $conference_date; ?> &nbsp; | &nbsp; <?php echo $conference_location; ?></span>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<?php
				// Display dynamic HEIT 2015 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2015_submenu',
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

	<!-- Image and description section -->
	<div class="row clearfix common-height">
		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover;">
		</div>

		<!-- Second column featuring leading text and chairs -->
		<div class="col-md-6 center col-padding" style="background-color: #303e48;">
			<div id="chairs">
				<div class="heading-block-intro">
					<br><br>
					<span class="before-heading white"><?php echo $leading_text; ?></span>
				</div><br><br>
			</div>
		</div>
	</div><!-- image and description section end -->

	<!-- Stream overview section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center">
				<h3>Streams</h3>
			</div>
			
			<div class="heading-block center nobottomborder">
				<h3></h3>
				<span>
					<?php echo $streams_summary_text; ?>
				</span>
			</div>
		</div>
	</div><!-- stream overview section end -->

	<!-- Streams section -->
	<div class="row clearfix common-height">

		<?php

		// Loop through array of 2015 streams
		$loop = new WP_Query( array( 'post_type' => 'themes', 'meta_key' => '2015_theme', 'meta_value' => 'Yes', 'orderby' => 'theme_number', 'order' => 'ASC' ) ); 

		// For each theme in the array...
		while( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- Display and style information for each theme in the array (3 column layout) -->
			<div class="col-md-4 col-sm-4 dark center col-padding" style="background-color: <?php the_field('div_color'); ?>;">
				<div>
					<a href="<?php the_field('arrow_collection_link'); ?>" target="_blank">
						<i class="i-plain i-xlarge divcenter <?php the_field('theme_icon'); ?>"></i>
						<h3><?php the_title(); ?></h3>
					</a>
				</div>
			</div>

		<?php endwhile; ?>
	</div><!-- streams section end -->
	<br><br>

	<!-- Conference papers collection section -->
	<div class="promo promo-light promo-small header-stick topborder-lg" style="background: #303e48">
		<div class="container clearfix">
			<h3><?php echo $papers_description_text; ?></h3>
			<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-rounded button-large button-white button-light tright"><span>Browse</span></a>
		</div>
	</div><!-- conference papers collection section end -->

	<!-- Downloads section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="heading-block center">
			<h3>Downloads</h3>
		</div>

		<div class="container clearfix">
			<div class="row clear-bottommargin">

				<?php 

					// Loop through array of 2015 documents, ordered by name
					$loop = new WP_Query( array( 'post_type' => 'documents', 'meta_key' => '2015_document', 'meta_value' => 'Yes', 'orderby' => 'title', 'order' => 'ASC' ) ); 

					// For each document in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-md-4 bottommargin">
							<div class="promo promo-dark promo-flat promo-mini promo-uppercase promo-right">
								<br>
								<a href="<?php the_field('document'); ?>" class="downloads" target="_blank"><h3 class="center"><?php the_field('display_title'); ?> </h3></a>
								<br>
							</div>
						</div>
					<?php endwhile; ?>
			</div>
		</div>
	</div><!-- downloads section end -->
	
	<div class="line topmargin-sm nobottommargin"></div><br><br>

	<!-- Sponsors section -->
	<div class="container clearfix">
		<div class="heading-block center">
			<h3>Sponsors</h3>
		</div><br>

		<div class="nobottomborder">

			<ul class="clients-grid grid-5 bottommargin clearfix">

				<?php 
			
				// Loop through array of 2015 sponsors, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'sponsors', 'meta_key' => '2015_sponsor', 'meta_value' => 'Yes', 'orderby' => 'title', 'order' => 'ASC' ) ); 

				// For each sponsor in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each sponsor in the array (3 column layout) -->
					<li><a href="<?php the_field('sponsor_link'); ?>" target="_blank"><img src="<?php the_field('sponsor_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>

			</ul>
		</div>
	</div><!-- sponsors section end -->

	<!-- Organisers section -->
	<div class="container clearfix">
		<div class="heading-block center">
			<h3>Organisers</h3>
		</div><br>

		<div class="nobottomborder">

			<!-- First row of organisers -->
			<ul class="clients-grid grid-4 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2015 (Canadian) institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'heit_participation', 'meta_value' => '2015', 'meta_key' => 'location', 'meta_value' => 'Canada', 'orderby' => 'title', 'order' => 'ASC' ) ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
			</ul>

			<!-- Second row of organisers -->
			<ul class="clients-grid grid-3 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2015 (Irish) institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'location', 'meta_value' => 'Ireland', 'orderby' => 'title', 'order' => 'ASC' ) ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
			</ul>
			
		</div>
	</div><!-- organisers section end -->

	<!-- Highlights video section -->
	<div class="row clearfix common-height">
		<div class="promo promo-light promo-small header-stick notopborder" style="background: #303e48">
			<div class="container clearfix">
				<h3><?php echo $highlights_video_text; ?></h3>
				<a class="button button-rounded button-large button-white button-light tright" data-toggle="modal" data-target="#myModal"><span>Click here</span></a>
			</div>
		</div>
	</div><!-- highlights video section end -->
				
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="block divcenter" style="max-width: 700px;">
			<div class="center clearfix" style="padding: 50px;">
				<iframe src="<?php echo $highlights_video_link; ?>" width="700" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>