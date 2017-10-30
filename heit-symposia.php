<?php
/*
	Template Name: heit-symposia
*/

get_header();


?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php  bloginfo('template_url');  ?>/images/heit-symposia.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Higher Education in Transformation Symposia</h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="section notopmargin nobottommargin">

		<div class="container clearfix">

			<div class="heading-block center">
				<h2></h2>
				<span>*Description of HEIT Symposia here*</span>
			</div>

		</div>

	</div>

	<!-- Image and description section -->
	<div class="row clearfix common-height topmargin-lg">
	<div class="heading-block center">
				<h3>Past Events</h3>
			</div>
		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/dublincastle.jpg?>') center center no-repeat; background-size: cover;">
		</div>

		<!-- Second column featuring leading text and chairs -->
		<div class="col-md-6 center col-padding" style="background-color: #4aaaa5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2015</h2>
				</div><br>
				<span class="before-heading white">The inaugural HEIT symposium was held in the spring of 2015 in Dublin, Ireland. Over 45 papers were accepted for the conference, all reflecting on themes that will shape the future of higher education internationally.</span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015 | CHERPP' )->ID ); ?>" target="_blank" class="button button-rounded button-large button-white button-light tright"><span>Learn more</span></a>
				
			</div>
		</div>
	</div><!-- image and description section end -->

	<!-- Image and description section -->
	<div class="row clearfix common-height">
		<!-- Second column featuring leading text and chairs -->
		<div class="col-md-6 center col-padding" style="background-color: #303e48;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2016</h2>
				</div><br>
					<span class="before-heading white">The second HEIT symposium took place in Oshawa, Ontario in the fall of 2016. The submitted papers address the many ways that colleges and universities are actively reinventing and reinvigorating higher education.</span><br>
					<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016 | CHERPP' )->ID ); ?>" target="_blank" class="button button-rounded button-large button-white button-light tright"><span>Learn more</span></a>
				
			</div>
		</div>

		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/uoit-night.jpg?>') center center no-repeat; background-size: cover;">
		</div>

	</div><!-- image and description section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>