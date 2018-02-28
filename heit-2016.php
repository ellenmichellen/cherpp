<?php
/*
	Template Name: heit-2016
*/

get_header();

$conference_name = get_field('conference_name');					// Variable to store conference name
$conference_date = get_field('conference_date');					// Variable to store conference date
$conference_location = get_field('conference_location');			// Variable to store conference location
$conference_image = get_field('conference_image');					// Variable to store conference image
$leading_text = get_field('leading_text');							// Variable to store leading body text
$themes_summary_text = get_field('themes_summary_text');			// Variable to store summary text for themes section
$papers_description_text = get_field('papers_description_text');	// Variable to store text for paper description section
$papers_button_link = get_field('papers_button_link');				// Variable to store link for HEIT papers collection

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/heit-2016-main-image.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
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
				// Display dynamic HEIT 2016 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2016_submenu',
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
						<a href="https://cherpp.ca/wp-content/uploads/2017/09/heit-2016-program.pdf" target="_blank">
							<h2 class="center" style="font-weight: 600;">Conference Program</h2>
							<span style="line-height: 1.8;" class="before-heading white center">View the Conference Program, including detailed information about sessions</span>
							<i class="icon-line-paper bgicon"></i>
						</a>
					</div>
				</div>

				<!-- Papers section -->
				<div class="col-md-4 dark col-padding ohidden" style="background-color: #4aaaa5;">
					<div>
						<a href="https://cherpp.ca/wp-content/uploads/2017/09/heit-2016-program-abstracts.pdf" target="_blank">
							<h2 class="center" style="font-weight: 600;">Program with Abstracts</h2>
							<span style="line-height: 1.8;" class="before-heading white center">View the Conference Program featuring keynote information and abstracts for all submissions</span>
							<i class="icon-line2-book-open bgicon"></i>
						</a>
					</div>
				</div>

				<!-- UDHEIT 2018 section -->
				<div class="col-md-4 dark col-padding ohidden" style="background-color: #7accc8;">
					<div>
						<a href="http://arrow.dit.ie/tuheit16/" target="_blank">
							<h2 class="center" style="font-weight: 600;">Paper Collection</h2>
							<span style="line-height: 1.8;" class="before-heading white center">Browse the Higher Education in Transformation 2016 Collection</span>
							<i class="icon-line-paper bgicon"></i></span>
						</a>
					</div>
				</div>

			</div>

		</div>

		<!-- Theme overview section -->
		<div class="row topmargin-sm nobottommargin">
			<div class="col-md-12 center col-padding">
				<div class="heading-block center">
					<h3>Themes</h3>
				</div>

				<div class="heading-block center nobottomborder themes">
					<!-- Themes description text -->
					<span>
						<?php echo $themes_summary_text; ?>
					</span>
				</div>
			</div>
		</div><!-- theme overview section end -->

		<!-- Themes section -->
		<div class="row clearfix common-height">

			<?php 

				// Loop through array of 2016 themes, ordered by theme number ascending
				$loop = new WP_Query( array( 'post_type' => 'themes', 'meta_key' => '2016_theme', 'meta_value' => 'Yes', 'orderby' => 'theme_number', 'order' => 'ASC' ) ); 

				// For each theme in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each theme (3 column layout) -->
					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: <?php the_field('div_color'); ?>;">
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

		</div><!-- themes section end -->

		</div><!-- downloads section end -->

		<!-- Sponsors section -->
		<div class="container clearfix">
			<div class="row topmargin-sm nobottommargin">
				<div class="heading-block center">
					<h3>Sponsors</h3>
				</div><br>

				<div class="nobottomborder">

					<ul class="clients-grid grid-3 bottommargin clearfix">

						<?php 
						
							// Loop through array of 2016 sponsors, ordered by name
							$loop = new WP_Query( array( 'post_type' => 'sponsors', 'meta_key' => '2016_sponsor', 'meta_value' => 'Yes', 'orderby' => 'title', 'order' => 'ASC' ) ); 

							// For each sponsor in the array...
							while( $loop->have_posts() ) : $loop->the_post(); ?>

								<!-- Display and style information for each sponsor in the array (4 column layout) -->
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
		<div class="container clearfix topmargin-sm bottommargin-sm">
			<div class="heading-block center">
				<h3>Organizers</h3>
			</div><br>

			<div class="bottommargin-lg">

				<ul class="clients-grid grid-6 bottommargin clearfix">

					<?php 
					
						// Loop through array of 2016 institution organisers, ordered by location descending
						$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => '2016_organiser', 'meta_value' => 'Yes', 'orderby' => 'location', 'order' => 'DSC') ); 

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

		</div><!-- sponsors section end -->

	</div>
			
</section><!-- #page content end -->

<?php get_footer(); ?>