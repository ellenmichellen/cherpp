<?php
/*
	Template Name: heit-symposia
*/

get_header();

$heit_2015_text = get_field('heit_2015_text');				 // Variable to store HEIT 2015 text
$heit_2015_image = get_field('heit_2015_image');			 // Variable to store HEIT 2015 image
$heit_2015_button_text = get_field('heit_2015_button_text'); // Variable to store HEIT 2015 button text
$heit_2016_text = get_field('heit_2016_text');				 // Variable to store HEIT 2016 text
$heit_2016_image = get_field('heit_2016_image');			 // Variable to store HEIT 2016 image
$heit_2016_button_text = get_field('heit_2016_button_text'); // Variable to store HEIT 2015 button text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/speakers.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Higher Education in Transformation Symposia</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="heading-block center topmargin-lg">
		<h3>Past Symposia</h3>
	</div>

	<!-- HEIT 2015 event section -->
	<div class="row clearfix common-height headerstick">

		<!-- First column featuring image with black and white filter -->
		<div class="col-md-6 center col-padding filtered" style="background: url(<?php echo $heit_2015_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring description text -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<!-- Conference title -->
					<h2 class>Higher Education in Transformation 2015</h2>
				</div><br>
				<!-- Conference description text -->
				<span class="before-heading"><?php echo $heit_2015_text; ?></span><br>
				<!-- Conference call to action button with link to main page for conference -->
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015' )->ID ); ?>" class="button button-dark blue-button"><span><?php echo $heit_2015_button_text; ?></span></a>
			</div>
		</div>

	</div><!-- HEIT 2015 event section end -->

	<!-- HEIT 2016 event section -->
	<div class="row clearfix common-height">

		<!-- First column featuring description text  -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<!-- Conference title -->
					<h2>Higher Education in Transformation 2016</h2>
				</div><br>
				<!-- Conference description text -->
				<span class="before-heading"><?php echo $heit_2016_text; ?></span><br>
				<!-- Conference call to action button with link to main page for conference -->
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016' )->ID ); ?>" class="button button-dark blue-button"><span><?php echo $heit_2016_button_text; ?></span></a>
			</div>
		</div>

		<!-- Second column featuring image with black and white filter -->
		<div class="col-md-6 center col-padding filtered" style="background: url(<?php echo $heit_2016_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

	</div><!-- HEIT 2016 event section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>