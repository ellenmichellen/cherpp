<?php
/*
	Template Name: heit-symposia
*/

get_header();

$page_header = get_field('page_header');					// Variable to store page header
$page_subheader = get_field('page_subheader');				// Variable to store page subheader
$main_content = get_field('main_content');					// Variable to store main content
$heit_2015_text = get_field('heit_2015_text');				// Variable to store HEIT 2015 text
$heit_2016_text = get_field('heit_2016_text');				// Variable to store HEIT 2016 text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.70), rgba(67, 204, 158, 0.70)), url('<?php  bloginfo('template_url');  ?>/images/heit-symposia.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center"><?php echo $page_header; ?></h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="section notopmargin nobottommargin">

		<div class="container clearfix">

			<div class="heading-block center">
				<h3><?php echo $page_subheader; ?></h3>
			</div>

			<span class="main-content"><p><?php echo $main_content; ?></p></span>

		</div>

	</div>

	<!-- Past events section -->

	<!-- First past event -->
	<div class="row clearfix common-height topmargin-lg">
		<div class="heading-block center">
			<h3>Past Events</h3>
		</div>

		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/dublincastle.jpg?>') center center no-repeat; background-size: cover;">
		</div>

		<!-- Second column featuring text -->
		<div class="col-md-6 center col-padding" style="background-color: #4aaaa5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2015</h2>
				</div><br>
				<span class="before-heading white"><?php echo $heit_2015_text; ?></span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015 | CHERPP' )->ID ); ?>" target="_blank" class="button button-circle button-large button-white button-light tright"><span>Learn more</span></a>
			</div>
		</div>
	</div><!-- first past event section end -->

	<!-- Second past evennt -->
	<div class="row clearfix common-height">

		<!-- First column featuring text  -->
		<div class="col-md-6 center col-padding" style="background-color: #303e48;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2016</h2>
				</div><br>
				<span class="before-heading white"><?php echo $heit_2016_text; ?></span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016 | CHERPP' )->ID ); ?>" target="_blank" class="button button-circle button-large button-white button-light tright"><span>Learn more</span></a>
			</div>
		</div>

		<!-- Second column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/uoit-night.jpg?>') center center no-repeat; background-size: cover;">
		</div>
	</div><!-- second past event section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>