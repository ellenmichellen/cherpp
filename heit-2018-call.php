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
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/castle.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Call for Papers, Workshops &amp; Panels</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		
		<div class="container clearfix">
			<?php
				// Display dynamic HEIT 2016 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2018_submenu',
					'container' => 'nav'
				));
			?>
			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
		</div>
	</div>
</div><!-- #page-menu end -->

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
	
	<!-- UDHEIT 2018 section -->
	<div class="section parallax header-stick bottommargin-lg" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastleview.jpg?>');">
		<div class="heading-block center nobottomborder nobottommargin">
			<!-- UDHEIT 2018 logo -->
			<img src='<?php  bloginfo('template_url');  ?>/images/udheit.png?>'/>
			<!-- Call to action button -->
			<a href="https://abbey.eventsair.com/PresentationPortal/Account/Login?ReturnUrl=%2FPresentationPortal%2Fud-heit-2018%2Fabstract-submission-portal" target="_blank" class="button button-white">Submit an Abstract</a>
		</div>
	</div><!-- UDHEIT 2018 section end -->

	<!-- Conference imformation section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center nobottomborder themes">
				<!-- Leading text -->
				<span>
					<?php echo $conference_information; ?>
				</span>
			</div>
		</div>
	</div><!-- conference information section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>