<?php
/*
	Template Name: heit-2018
*/

get_header();

$conference_name = get_field('conference_name');					// Variable to store conference name
$conference_date = get_field('conference_date');					// Variable to store conference date
$conference_location = get_field('conference_location');			// Variable to store conference location
$registration_information = get_field('registration_information');	// Variable to store registration information text
$conference_image = get_field('conference_image');					// Variable to store conference image

?>

<!-- Page Title
============================================= -->
<section id="page-title" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/dublincastlelandscape.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="150" data-height-xxs="150">
	<div class="container clearfix">
		<div class="heading-block center nobottomborder nobottommargin">
				<!-- UDHEIT 2018 logo -->
				<img src='<?php  bloginfo('template_url');  ?>/images/udheit.png?>'/>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="single-event">

				<div class="col_three_fourth">
					<!-- Description -->
					<p class="large-body">The Universal Design and Higher Education in Transformation Congress (UDHEIT2018) will be held at Dublin Castle, Ireland from October 30 to November 2, 2018. This exciting four-day event will bring together key experts from industry, education, government and non-government organisation sectors to share experiences and knowledge  with all participants.  This congress aims to transform our world through celebrating and integrating all that is good in design, diversity and education.</p>
					<p class="large-body">The UDHEIT2018 Congress will be a partnership between Universal Design: a series of major biennial international conferences: <a href="http://www.ud2012.no/" target="_blank"><b>UD2012 (Oslo)</b></a>, <a href="http://ud2014.se/" target="_blank"><b>UD2014 (Lund)</b></a>, <a href="http://ud2016.uk/" target="_blank"><b>UD2016 (York)</b></a> and the Higher Education in Transformation Symposia (HEIT) Conferences <a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015' )->ID ); ?>"><b>2015 (Dublin)</b></a> and <a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016' )->ID ); ?>"><b>2016 (Oshawa)</b></a>. </p>
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
								<li><i class="icon-euro"></i> <strong>350-550</strong></li>
							</ul>
						</div>
					</div>
					<!-- Register button -->
					<a href="https://abbey.eventsair.com/ud-heit-2018/registration/Site/Register" target="_new" class="button blue-button button-block btn-block btn-lg">Register</a>
				</div>

				<div class="clear"></div>

			</div>

		</div>

		<!-- Image and description section -->
		<div class="row clearfix common-height">
			<!-- First column featuring image -->
			<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
			</div>

			<!-- Second column featuring registration details text -->
			<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
				<div id="chairs">
					<!-- Important Dates heading -->
					<div class="heading-block-intro">
						<h2>Registration Details</h2>
					</div><br><br>
					<!-- Registration details description text -->
					<span class="before-heading center"><?php echo $registration_information; ?></span>
				</div>
			</div>
		</div><!-- image and description section end -->

		<!-- Important links section -->
		<div class="col_full bottommargin-lg common-height">

			<!-- Registration section -->
			<div class="col-md-4 dark col-padding ohidden" style="background-color: #51cfc5;">
				<div>
					<a href="https://abbey.eventsair.com/ud-heit-2018/registration" target="_blank">
						<h2 class="center" style="font-weight: 600;">Register</h2>
						<span style="line-height: 1.8;" class="before-heading white center">Registration for UDHEIT 2018 is now open! Click here to register for the exciting four-day event to be held in Dublin, Ireland.</span>
						<i class="icon-line2-calendar bgicon"></i>
					</a>
				</div>
			</div>

			<!-- Papers section -->
			<div class="col-md-4 dark col-padding ohidden" style="background-color: #11ab9f;">
				<div>
					<a href="<?php echo get_page_link( get_page_by_title( 'UDHEIT 2018 Call for Papers' )->ID ); ?>">
						<h2 class="center" style="font-weight: 600;">Call for Papers</h2>
						<span style="line-height: 1.8;" class="before-heading white center">UDHEIT2018 invites new and challenging paper submissions from any area or discipline of Design or Education. Abstract submission is now closed! </span>
						<i class="icon-line2-book-open bgicon"></i>
					</a>
				</div>
			</div>

			<!-- UDHEIT 2018 section -->
			<div class="col-md-4 dark col-padding ohidden" style="background-color: #51cfc5;">
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

		<!-- Organizers section -->
		<div class="container clearfix topmargin-lg nobottommargin">
			<div class="heading-block center">
				<!-- Organizers heading -->
				<h3>Organizers</h3>
			</div><br>

			<div class="nobottommargin">

				<ul class="clients-grid grid-6 bottommargin clearfix">

					<?php 
					
						// Loop through array of 2018 institution organizers, ordered by name
						$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'udheit2018_organiser', 'meta_value' => 'Yes', 'orderby' => 'location', 'order' => 'DSC') ); 

						// For each institution organizer in the array...
						while( $loop->have_posts() ) : $loop->the_post(); ?>

							<!-- Display and style information for each institution organizer -->
							<li>
								<!-- Link to organizer's website -->
								<a href="<?php the_field('institution_link'); ?>" target="_blank">
									<!-- Organizer logo -->
									<img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>">
								</a>
							</li>

						<?php endwhile; 

					?>
					
				</ul>

			</div>

		</div><!-- sponsors section end -->

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>