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
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-main-image.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center"><?php echo $conference_name; ?></h1>
			<!-- Page sub-heading featuring conference date and location -->
			<span class="white center subheading"><?php echo $conference_date; ?> &nbsp; | &nbsp; <?php echo $conference_location; ?></span>
		</div>
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
		<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring leading text -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5">
			<div id="chairs">
				<div class="heading-block-intro">
					<br><br>
					<!-- Leading text -->
					<span class="before-heading"><?php echo $leading_text; ?></span>
				</div><br>
			</div>
		</div>
	</div><!-- image and description section end -->

	<!-- Stream overview section -->
	<div class="row topmargin-sm nobottommargin">
		<div class="col-md-12 center col-padding">
			<div class="heading-block center">
				<h3>Streams</h3>
			</div>
			
			<div class="heading-block center nobottomborder">
				<h3></h3>
				<!-- Steams description text -->
				<span>
					<?php echo $streams_summary_text; ?>
				</span>
			</div>
		</div>
	</div><!-- stream overview section end -->

	<!-- Streams section -->
	<div class="row clearfix common-height">

		<?php

			// Loop through array of 2015 streams, ordered by theme number ascending
			$loop = new WP_Query( array( 'post_type' => 'themes', 'meta_key' => '2015_theme', 'meta_value' => 'Yes', 'orderby' => 'theme_number', 'order' => 'ASC' ) ); 

			// For each theme in the array...
			while( $loop->have_posts() ) : $loop->the_post(); ?>

				<!-- Display and style information for each theme (3 column layout) -->
				<div class="col-md-4 col-sm-4 dark center col-padding" style="background-color: <?php the_field('div_color'); ?>;">
					<div>
						<!-- Link to associated theme section on Arrow collection site for 2016 -->
						<a href="<?php the_field('arrow_collection_link'); ?>" target="_blank">
							<!-- Theme icon -->
							<i class="i-plain i-xlarge divcenter <?php the_field('theme_icon'); ?>"></i>
							<!-- Theme name -->
							<h3><?php the_title(); ?></h3>
						</a>
					</div>
				</div>

			<?php endwhile; 

		?>
	</div><!-- streams section end -->
	<br><br>

	<!-- Conference papers collection section -->
	<div class="promo promo-light promo-small header-stick topborder-lg" style="background: #e9e8e5">
		<div class="container clearfix">
			<!-- Conference papers description -->
			<h3><?php echo $papers_description_text; ?></h3>
			<!-- Conference papers call to action button with link to Arrow site -->
			<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-dark blue-button"><span>Browse</span></a>
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

						<!-- Display information for each document in a new column -->
						<div class="col-md-4 bottommargin">
							<div class="promo promo-dark promo-flat promo-mini promo-uppercase promo-right"><br>
								<!-- Link to document -->
								<a href="<?php the_field('document'); ?>" class="downloads" target="_blank">
									<!-- Document name -->
									<h3 class="center"><?php the_field('display_title'); ?> </h3>
								</a><br>
							</div>
						</div>

					<?php endwhile; ?>

			</div>

		</div>

	</div><!-- downloads section end -->
	
	<!-- Divider line -->
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
						<li>
							<!-- Link to sponsor's website -->
							<a href="<?php the_field('sponsor_link'); ?>" target="_blank">
								<!-- Sponsor logo -->
								<img src="<?php the_field('sponsor_image'); ?>" alt="<?php the_title(); ?>">
							</a>
						</li>

					<?php endwhile; 

				?>

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

					// Query Canadian institutions who organised HEIT 2015
					$args = array(
					    'post_type'  => 'institutions',
					    'meta_query' => array(
					       'relation' => 'AND',
					        array(
					            'key'     => '2015_organiser',
					            'value'   => 'Yes'
					        ),
					        array(
					            'key'     => 'location',
					            'value'   => 'Canada'
					        )
					    )
					);
					
					// Loop through array of 2015 (Canadian) institution organisers
					$loop = new WP_Query( $args );

					// For each institution organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each institution organiser in the array -->
						<li>
							<!-- Link to organiser's website -->
							<a href="<?php the_field('institution_link'); ?>" target="_blank">
								<!-- Organiser logo -->
								<img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>">
							</a>
						</li>

					<?php endwhile; 

				?>

			</ul>

			<!-- Second row of organisers -->
			<ul class="clients-grid grid-3 bottommargin clearfix">

				<?php 

					// Query Irish institutions who organised HEIT 2015
					$args = array(
					    'post_type'  => 'institutions',
					    'meta_query' => array(
					       'relation' => 'AND',
					        array(
					            'key'     => '2015_organiser',
					            'value'   => 'Yes'
					        ),
					        array(
					            'key'     => 'location',
					            'value'   => 'Ireland'
					        )
					    )
					);
					
					// Loop through array of 2015 (Irish) institution organisers
					$loop = new WP_Query( $args );

					// For each institution organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each institution organiser in the array -->
						<li>
							<!-- Link to organiser's website -->
							<a href="<?php the_field('institution_link'); ?>" target="_blank">
								<!-- Organiser logo -->
								<img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>">
							</a>
						</li>

					<?php endwhile; 

				?>

			</ul>
			
		</div>

	</div><!-- organisers section end -->

	<!-- Highlights video section -->
	<div class="row clearfix common-height">
		<div class="promo promo-light promo-small header-stick notopborder" style="background: #e9e8e5">
			<div class="container clearfix">
				<!-- Highlights video description text -->
				<h3><?php echo $highlights_video_text; ?></h3>
				<!-- Highlights video call to action button with link to modal with video -->
				<a class="button button-dark blue-button" data-toggle="modal" data-target="#myModal"><span>Click here</span></a>
			</div>
		</div>
	</div><!-- highlights video section end -->
				
	<!-- Modal featuring highlights video -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="block divcenter" style="max-width: 700px;">
			<div class="center clearfix" style="padding: 50px;">
				<iframe src="<?php echo $highlights_video_link; ?>" width="700" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>