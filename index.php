<?php
/**
 * This is the default-template when no default.html is added during the conversion.
 * To create your own default-template during the converison consult our documentation.
 *
 * Your front-page can be found from front-page.php
 */

?>

<?php
/*
	Template Name: home
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-pattern">
	<div class="container clearfix">
		<h1>HEIT</h1>
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
					'theme_location' => 'heit_2016_submenu',
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

	<!-- Image and description section -->
	<div class="row clearfix common-height">

		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url(<?php echo $conference_image; ?>) center center no-repeat; background-size: cover;">
		</div>

		<!-- Second column featuring leading text and chairs -->
		<div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
			<div class="heading-block-intro">
				<br><br>
				<span class="before-heading"><?php echo $leading_text; ?></span>
			</div>
		</div>
	</div><!-- image and description section end -->

	
			
</section><!-- #page content end -->

<?php get_footer(); ?>