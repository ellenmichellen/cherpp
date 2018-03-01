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
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-main-image.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center"><?php echo $conference_name; ?></h1>
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

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="single-event">

				<div class="col_three_fourth">
					<!-- Description -->
					<?php echo $leading_text; ?>
				</div>

				<div class="col_one_fourth col_last">
					<div class="panel panel-default events-meta">
						<!-- Event information panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Event Info:</h3>
						</div>
						<div class="panel-body">
							<ul class="iconlist nobottommargin">
								<li><i class="icon-calendar3"></i> <?php echo $conference_date; ?></li>
								<li><i class="icon-map-marker2"></i> <?php echo $conference_location; ?></li>
							</ul>
						</div>
					</div>
					<!-- Register button -->
					<a data-toggle="modal" data-target="#myModal" class="button blue-button button-block btn-block btn-lg">Watch Highlights Video</a>

					<!-- Modal featuring highlights video -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="block divcenter" style="max-width: 700px;">
							<div class="center clearfix" style="padding: 50px;">
								<iframe src="<?php echo $highlights_video_link; ?>" width="700" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

			</div>

		</div>

		<!-- Downloads section -->
		<div class="row">

			<!-- Important links section -->
			<div class="col_full common-height">

				<!-- Registration section -->
				<div class="col-md-4 dark col-padding ohidden" style="background-color: #7accc8;">
					<div>
						<a href="http://localhost/wordpress/wp-content/uploads/2017/09/heit-2015-program-abstracts.pdf" target="_blank">
							<h2 class="center" style="font-weight: 600;">Program with Abstracts</h2>
							<span style="line-height: 1.8;" class="before-heading white center">View the Conference Program featuring keynote information and abstracts for all submissions</span>
							<i class="icon-line-paper bgicon"></i>
						</a>
					</div>
				</div>

				<!-- Papers section -->
				<div class="col-md-4 dark col-padding ohidden" style="background-color: #4aaaa5;">
					<div>
						<a href="http://localhost/wordpress/wp-content/uploads/2017/09/heit-2015-workshop-abstracts.pdf" target="_blank">
							<h2 class="center" style="font-weight: 600;">Workshop Program</h2>
							<span style="line-height: 1.8;" class="before-heading white center">View the Workshop Program, including detailed information about workshops</span>
							<i class="icon-line2-book-open bgicon"></i>
						</a>
					</div>
				</div>

				<!-- UDHEIT 2018 section -->
				<div class="col-md-4 dark col-padding ohidden" style="background-color: #7accc8;">
					<div>
						<a href="https://arrow.dit.ie/tu4dcon/" target="_blank">
							<h2 class="center" style="font-weight: 600;">Paper Collection</h2>
							<span style="line-height: 1.8;" class="before-heading white center">Browse the Higher Education in Transformation 2015 Collection</span>
							<i class="icon-line-paper bgicon"></i></span>
						</a>
					</div>
				</div>

			</div>

		</div>

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

		<!-- Sponsors section -->
		<div class="container clearfix topmargin-sm">
			<div class="row topmargin-sm nobottommargin">
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

			</div>

		</div><!-- sponsors section end -->

		<!-- Organisers section -->
		<div class="container clearfix topmargin-sm nobottommargin">
			<div class="heading-block center">
				<h3>Organizers</h3>
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

	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>