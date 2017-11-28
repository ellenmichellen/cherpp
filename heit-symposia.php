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
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.70), rgba(67, 204, 158, 0.70)), url('<?php  bloginfo('template_url');  ?>/images/speakers.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center"><?php echo $page_header; ?></h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="heading-block center topmargin-lg">
				<h3>Past Symposia</h3>
			</div>

	<!-- First past event -->
	<div class="row clearfix common-height headerstick">

		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding filtered" style="background: url('<?php  bloginfo('template_url');  ?>/images/heit-2015-main-image-filter.jpg?>') center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>

		<!-- Second column featuring text -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class>Higher Education in Transformation 2015</h2>
				</div><br>
				<span class="before-heading"><?php echo $heit_2015_text; ?></span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015' )->ID ); ?>" class="button button-dark blue-button"><span>Learn more</span></a>
			</div>
		</div>
	</div><!-- first past event section end -->

	<!-- Second past evennt -->
	<div class="row clearfix common-height">

		<!-- First column featuring text  -->
		<div class="col-md-6 center col-padding" style="background-color: #e9e8e5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2>Higher Education in Transformation 2016</h2>
				</div><br>
				<span class="before-heading"><?php echo $heit_2016_text; ?></span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016' )->ID ); ?>" class="button button-dark blue-button"><span>Learn more</span></a>
			</div>
		</div>

		<!-- Second column featuring background image -->
		<div class="col-md-6 center col-padding filtered" style="background: url('<?php  bloginfo('template_url');  ?>/images/uoit-night-filtered.jpg?>') center center no-repeat; background-size: cover" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
		</div>
	</div><!-- second past event section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>