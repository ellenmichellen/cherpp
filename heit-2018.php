<?php
/*
	Template Name: heit-2018
*/

get_header();

$conference_name = get_field('conference_name');					// Variable to store conference name
$conference_date = get_field('conference_date');					// Variable to store conference date
$conference_location = get_field('conference_location');			// Variable to store conference location
$leading_text = get_field('leading_text');							// Variable to store leading body text
$conference_information = get_field('conference_information');		// Variable to store conference information text
$registration_information = get_field('registration_information');	// Variable to store registration information text
$conference_image = get_field('conference_image');					// Variable to store conference image

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastlelandscape.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
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
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center nobottomborder themes">
				<!-- Leading text -->
				<span>
					<?php echo $leading_text; ?>
				</span>
			</div>
		</div>
	</div><!-- leading text section end -->

	<!-- Image and description section -->
	<div class="row clearfix common-height">
		<!-- First column featuring image -->
		<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring important dates text -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<!-- Important Dates heading -->
				<div class="heading-block-intro">
					<h2>Registration Fees</h2>
				</div><br><br>
				<!-- Important dates description text -->
				<span class="before-heading center"><?php echo $registration_information; ?></span>
			</div>
		</div>
	</div><!-- image and description section end -->

	<!-- Important links section -->
	<div class="col_full bottommargin-lg common-height">

		<!-- Registration section -->
		<div class="col-md-4 dark col-padding ohidden" style="background-color: #7accc8;">
			<div>
				<a href="https://abbey.eventsair.com/ud-heit-2018/registration" target="_blank">
					<h2 class="center" style="font-weight: 600;">Register</h2>
					<span style="line-height: 1.8;" class="before-heading white center">Registration for UDHEIT 2018 is now open! Click here to register for the exciting four-day event to be held in Dublin, Ireland.</span>
					<i class="icon-line2-calendar bgicon"></i>
				</a>
			</div>
		</div>

		<!-- Papers section -->
		<div class="col-md-4 dark col-padding ohidden" style="background-color: #4aaaa5;">
			<div>
				<a href="<?php echo get_page_link( get_page_by_title( 'UDHEIT 2018 Call for Papers' )->ID ); ?>">
					<h2 class="center" style="font-weight: 600;">Call for Papers</h2>
					<span style="line-height: 1.8;" class="before-heading white center">The Call for Papers and Workshops for UDHEIT Congress 2018 is now open! UDHEIT2018 invites new and challenging paper submissions from any area or discipline of Design or Education.</span>
					<i class="icon-line2-book-open bgicon"></i>
				</a>
			</div>
		</div>

		<!-- UDHEIT 2018 section -->
		<div class="col-md-4 dark col-padding ohidden" style="background-color: #7accc8;">
			<div>
				<a href="https://www.udheit2018.com/" target="_blank">
					<h2 class="center" style="font-weight: 600;">Learn More</h2>
					<span style="line-height: 1.8;" class="before-heading white center">Click here to learn more about UDHEIT 2018 and the connections between higher education and universal design.</span>
					<i class="icon-line-paper bgicon"></i></span>
				</a>
			</div>
		</div>

		<div class="clear"></div>

	</div>


	<!-- Organisers section -->
	<div class="container clearfix topmargin-lg bottommargin-sm">
		<div class="heading-block center">
			<!-- Organisers heading -->
			<h3>Organisers</h3>
		</div><br>

		<div class="bottommargin-lg">

			<ul class="clients-grid grid-6 bottommargin clearfix">

				<?php 
				
					// Loop through array of 2018 institution organisers, ordered by name
					$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'udheit2018_organiser', 'meta_value' => 'Yes', 'orderby' => 'location', 'order' => 'DSC') ); 

					// For each institution organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each institution organiser -->
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
	
</section><!-- #page content end -->

<?php get_footer(); ?>