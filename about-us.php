<?php
/*
	Template Name: about
*/

get_header();

$leading_text = get_field('leading_text');							// Variable to store leading body text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/homebanner.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
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

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Leading text section -->
			<div class="row nobottommargin">
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

		</div>

	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>