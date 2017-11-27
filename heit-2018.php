<?php
/*
	Template Name: heit-2018
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
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastlelandscape.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center"><?php echo $conference_name; ?></h1>
			<span class="white center subheading"><?php echo $conference_date; ?> &nbsp; | &nbsp; <?php echo $conference_location; ?></span>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">


<!-- Theme overview section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center nobottomborder themes">
				<span>
					<?php echo $leading_text; ?>
				</span>
			</div>
		</div>
	</div><!-- theme overview section end -->

	<!-- Image and description section -->
	<div class="row clearfix common-height">
		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring leading text and chairs -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2>Important Dates</h2>
				</div><br>
				<span class="before-heading"><?php echo $heit_2016_text; ?></span>
			</div>
		</div>
	</div><!-- image and description section end -->
	
	<!-- Organisers section -->
	<div class="container clearfix topmargin-lg bottommargin-sm">
		<div class="heading-block center">
			<h3>Organisers</h3>
		</div><br>

		<div class="bottommargin-lg">
			<ul class="clients-grid grid-6 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2016 institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => '2016_organiser', 'meta_value' => 'Yes', 'orderby' => 'location', 'order' => 'DSC') ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
				
			</ul>
		</div>
	</div><!-- sponsors section end -->
			
</section><!-- #page content end -->

<?php get_footer(); ?>