<?php
/*
	Template Name: heit-2016
*/

get_header();

$conference_name = get_field('conference_name');					// Variable to store conference name
$conference_date = get_field('conference_date');					// Variable to store conference date
$conference_location = get_field('conference_location');			// Variable to store conference location
$conference_image = get_field('conference_image');					// Variable to store conference image
$leading_text = get_field('leading_text');							// Variable to store leading body text
$themes_summary_text = get_field('themes_summary_text');			// Variable to store summary text for themes section
$papers_description_text = get_field('papers_description_text');	// Variable to store text for paper description section
$papers_button_link = get_field('papers_button_link');				// Variable to store link for HEIT papers collection

?>

<!-- Page Title
============================================= -->
<section id="page-title" class="main-title">
	<div class="container clearfix">
		<div class="verticalLine">
			<h1><?php echo $conference_name; ?></h1>
			<span><?php echo $conference_date; ?> &nbsp; | &nbsp; <?php echo $conference_location; ?></span>
		</div>
	</div>
</section><!-- #page-title end -->


<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<div class="menu-title">HEIT <span>2016</span></div>
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
		<div class="col-md-6 center col-padding" style="background-color: #303e48;">
			<div id="chairs">
				<div class="heading-block-intro">
					<br><br>
					<span class="before-heading white"><?php echo $leading_text; ?></span>
				</div><br><br>
			</div>
		</div>
	</div><!-- image and description section end -->

	<!-- Theme overview section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="col-md-12 center">
			<div class="heading-block center">
				<h3>Themes</h3>
			</div>

			<div class="heading-block center nobottomborder themes">
				<span>
					<?php echo $themes_summary_text; ?>
				</span>
			</div>
		</div>
	</div><!-- theme overview section end -->


	<!-- Themes section -->
	<div class="row clearfix common-height">

		<?php 

		// Loop through array of 2016 themes
		$loop = new WP_Query( array( 'post_type' => 'themes', 'meta_key' => '2016_theme', 'meta_value' => 'Yes', 'orderby' => 'theme_number', 'order' => 'ASC' ) ); 

		// For each theme in the array...
		while( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- Display and style information for each theme in the array (3 column layout) -->
			<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: <?php the_field('div_color'); ?>;">
				<div>
					<a href="<?php the_field('arrow_collection_link'); ?>" target="_blank">
						<i class="i-plain i-xlarge divcenter <?php the_field('theme_icon'); ?>"></i>
						<h3><?php the_title(); ?></h3>
					</a>
				</div>
			</div>

		<?php endwhile; ?>

	</div><!-- themes section end -->
	<br><br>

	<!-- Conference papers collection section -->
	<div class="promo promo-light promo-full header-stick topborder-lg" style="background: #303e48">
		<div class="container clearfix">
			<h3><?php echo $papers_description_text; ?></h3>
			<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-rounded button-reveal button-large button-white button-light tright"><i class="icon-line-arrow-right"></i><span>Browse</span></a>
		</div>
	</div><!-- conference papers collection section end -->

	<!-- Downloads section -->
	<div class="row topmargin-lg bottommargin-sm">
		<div class="heading-block center">
			<h3>Downloads</h3>
		</div>

		<div class="heading-block center nobottomborder">
		<h3></h3>
			<span>
				<?php 

				// Loop through array of 2016 documents, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'documents', 'meta_key' => '2016_document', 'meta_value' => 'Yes', 'orderby' => 'title', 'order' => 'ASC' ) ); 

				// For each document in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each document in the array -->
					<a href="<?php the_field('document'); ?>" class="downloads" target="_blank"><?php the_title(); ?></a> <br>

				<?php endwhile; ?>
			</span>
		</div>

	</div><!-- downloads section end -->

	<div class="line topmargin-sm nobottommargin"></div><br><br>

	<!-- Sponsors section -->
	<div class="container clearfix topmargin-sm">
		<div class="heading-block center">
			<h3>Sponsors</h3>
		</div><br>

		<div class="nobottomborder">

			<ul class="clients-grid grid-3 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2016 sponsors, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'sponsors', 'meta_key' => '2016_sponsor', 'meta_value' => 'Yes', 'orderby' => 'title', 'order' => 'ASC' ) ); 

				// For each sponsor in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each sponsor in the array (4 column layout) -->
					<li><a href="<?php the_field('sponsor_link'); ?>" target="_blank"><img src="<?php the_field('sponsor_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
				
			</ul>
		</div>

	</div><!-- sponsors section end -->

	<!-- Organisers section -->
	<div class="container clearfix topmargin-sm bottommargin-sm">
		<div class="heading-block center">
			<h3>Organisers</h3>
		</div><br>

		<div class="bottommargin-lg">
			<ul class="clients-grid grid-6 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2016 institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => '2016_organiser', 'meta_value' => 'Yes', 'orderby' => 'location', 'order' => 'DSC') ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
				
			</ul>
		</div>
	</div><!-- sponsors section end -->
			
</section><!-- #page content end -->

<?php get_footer(); ?>