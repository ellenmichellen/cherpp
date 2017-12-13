<?php
/*
	Template Name: about-us
*/

get_header();

$page_title = get_field('page_title');
$leading_text = get_field('leading_text');							// Variable to store leading body text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/heit-symposia2.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">About</h1>
		</div>
	</div>
</section><!-- #page-title end -->

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

	<!-- About
	<div class="row clearfix common-height">

			<div class="col-md-4 dark center col-padding" style="background-color: #7accc8;">
				<div>
					<a href="<?php echo get_page_link( get_page_by_title( 'Domain Networks' )->ID ); ?>">
						
						<i class="i-plain i-xlarge divcenter icon-line2-share"></i>
					
						<h3>Domain Networks</h3>
					
						<a class="button button-dark home-button" href="<?php echo get_page_link( get_page_by_title( 'Domain Networks' )->ID ); ?>">Learn more</a>
					</a>
				</div>
			</div>

	</div>-->

</section><!-- #page content end -->

<?php get_footer(); ?>