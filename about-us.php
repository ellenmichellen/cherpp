<?php
/*
	Template Name: about-us
*/

get_header();

$page_title = get_field('page_title');

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/about-us.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center">About</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<!-- About sub-items section -->
	<div class="row clearfix common-height">

			<!-- Display and style information for each About sub-item -->
			<div class="col-md-4 col-sm-4 dark center col-padding" style="background-color: #7accc8;">
				<div>
					<a href="<?php echo get_page_link( get_page_by_title( 'Domain Networks' )->ID ); ?>">
						<i class="i-plain i-xlarge divcenter icon-line2-share"></i>
						<h3>Domain Networks</h3><br>
					</a>
				</div>
			</div>

	</div><!-- themes section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>