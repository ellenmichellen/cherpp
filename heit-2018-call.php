<?php
/*
	Template Name: heit-2018-call
*/

get_header();

$leading_text = get_field('leading_text');							// Variable to store leading body text
$conference_information = get_field('conference_information');		// Variable to store conference information text
$important_dates = get_field('important_dates');					// Variable to store important dates text

?>

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-paralla" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/castle.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="250" data-height-xs="250" data-height-xxs="250">
	<div class="container clearfix">
		<div class="heading-block center nobottomborder nobottommargin topmargin-lg">
				<!-- Page heading on parallax background -->
			<h1 class="white center">Call for Papers, Workshops &amp; Panels</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

			<div class="container clearfix">

				<!-- Leading text section -->
				<div class="row notopmargin bottommargin-sm">
					<div class="col-md-12 center">
						<div class="heading-block center nobottomborder themes">
							<!-- Leading text -->
							<span>
								<?php echo $leading_text; ?>
							</span>
						</div>
					</div>
				</div><!-- leading text section end -->

				<!-- Divider line -->
				<div class="line topmargin-sm nobottommargin"></div>

				<!-- Important dates section -->
				<div class="row topmargin-lg bottommargin-lg">
					<div class="col-md-12 center">
							<div class="heading-block center">
							<!-- Important dates section title -->
							<h3>Important Dates</h3>
						</div>
						<div class="heading-block center nobottomborder themes">
							<!-- Important dates text -->
							<span>
								<?php echo $important_dates; ?>
							</span>
						</div>
					</div>
				</div><!-- important dates section end -->

			</div>
		
		<!-- UDHEIT 2018 section -->
		<div class="section parallax header-stick bottommargin-lg" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastleview.jpg?>');">
			<div class="heading-block center nobottomborder nobottommargin">
				<!-- UDHEIT 2018 logo -->
				<img src='<?php  bloginfo('template_url');  ?>/images/udheit.png?>'/>
			</div>
		</div><!-- UDHEIT 2018 section end -->

		<div class="container clearfix">

			<!-- Conference imformation section -->
			<div class="row notopmargin nobottommargin">
				<div class="col-md-12 center">
					<div class="heading-block center nobottomborder nobottommargin themes">
						<!-- Leading text -->
						<span>
							<?php echo $conference_information; ?>
						</span>
					</div>
				</div>
			</div><!-- conference information section end -->

		</div>
	</div>
</section><!-- #page content end -->

<?php get_footer(); ?>