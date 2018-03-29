<?php
/*
	Template Name: heit-symposia
*/

get_header();

$leading_text = get_field('leading_text'); 					 // Variable to store leading text
$heit_2015_text = get_field('heit_2015_text');				 // Variable to store HEIT 2015 text
$heit_2015_image = get_field('heit_2015_image');			 // Variable to store HEIT 2015 image
$heit_2016_text = get_field('heit_2016_text');				 // Variable to store HEIT 2016 text
$heit_2016_image = get_field('heit_2016_image');			 // Variable to store HEIT 2016 image
$heit_2018_text = get_field('heit_2018_text');				 // Variable to store HEIT 2018 text
$heit_2018_image = get_field('heit_2018_image');			 // Variable to store HEIT 2018 image

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/speakers.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
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

	<!-- If there is leading text, display -->
	<?php if ( get_field('leading_text') ) { ?>

		<div class="content-wrap nobottommargin">

			<div class="container clearfix">

				<!-- Leading text section -->
				<div class="row notopmargin">
					<div class="col-md-12 center">
						<div class="heading-block center nobottomborder themes">
							<!-- Leading text -->
							<span>
								<?php echo $leading_text; ?>
							</span>
						</div>
					</div>
				</div><!-- leading text section end -->

			</div>

		</div>

		<!-- Divider line -->
		<div class="line notopmargin nobottommargin"></div>

	<?php } ?>

	<div class="heading-block center topmargin-lg">
		<h3>Upcoming Symposia</h3>
	</div>

	<!-- HEIT 2018 event section -->
	<div class="row clearfix common-height bottommargin-lg">

		<!-- First column featuring image -->
		<div class="col-md-6 center col-padding" style="background: linear-gradient(rgba(122, 204, 200, 0.1), rgba(74, 170, 165, 0.1)), url(<?php echo $heit_2018_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring description text  -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<!-- Conference title -->
					<h2>Universal Design &amp; Higher Education in Transformation Congress 2018</h2>
				</div><br>
				<!-- Conference description text -->
				<span class="before-heading"><?php echo $heit_2018_text; ?></span><br>
				<!-- Conference call to action button with link to main page for conference -->
				<a href="<?php echo get_page_link( get_page_by_title( 'UDHEIT 2018' )->ID ); ?>" class="button button-dark blue-button"><span>Learn more</span></a>
			</div>
		</div>

	</div><!-- HEIT 2018 event section end -->

	<!-- Divider line -->
	<div class="line topmargin-lg bottommargin-sm"></div><br>

	<div class="heading-block center">
		<h3>Past Symposia</h3>
	</div>

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
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016' )->ID ); ?>" class="button button-dark blue-button"><span>Learn more</span></a>
			</div>
		</div>

		<!-- Second column featuring image with black and white filter -->
		<div class="col-md-6 center col-padding filtered" style="background: url(<?php echo $heit_2016_image; ?>) center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

	</div><!-- HEIT 2016 event section end -->

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
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015' )->ID ); ?>" class="button button-dark blue-button"><span>Learn more</span></a>
			</div>
		</div>

	</div><!-- HEIT 2015 event section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>