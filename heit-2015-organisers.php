<?php 
/*
	Template Name: heit-2015-organisers
*/

get_header(); 

$page_title = get_field('page_title');									// Variable to store page title
$first_organiser_category = get_field('first_organiser_category');		// Variable to store first caregory of organisers
$second_organiser_category = get_field('second_organiser_category');	// Variable to store second category of organisers

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/organisers.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center"><?php echo $page_title; ?></h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<?php 
				// Display dynamic HEIT 2015 submenu
					wp_nav_menu( array(
						'theme_location' => 'heit_2015_submenu',
						'container' => 'nav'
					));
			?>
			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
		</div>
	</div>
</div>
<!-- #page-menu end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

		<!-- Program Committee Section
		================================================== -->
			<div class="heading-block center">
				<!-- First organiser category title -->
				<h3><?php echo $first_organiser_category; ?></h3>
			</div>
		
			<div class="col-md-12 bottommargin">

				<!-- Sort by last name -->
				<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );

					// Loop through array of 2015 organisers (program committee)
		  			$loop = new WP_Query( array( 'post_type' => 'organisers', 'meta_key' => '2015_organiser', 'meta_value' => 'Yes', 'meta_key' => 'program_committee', 'meta_value' => 'Yes', 'posts_per_page' => -1 ) ); 

		  			// For each organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each organiser -->
						<div class="team team-list clearfix">
							<!-- Organiser image with black and white filter -->
							<div class="team-image filtered" style="width: 150px;">
								<img class="img-circle" src="<?php the_field('organiser_image'); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="team-desc">
								<div class="team-title">
									<!-- Organiser name -->
									<h5><?php the_title(); ?></h5>
										<!-- Orgainser title and affiliated institution -->
									<span><?php the_field('organiser_title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span>
								</div>
								<!-- Organiser description with read more functionality -->
								<div class="team-content more"><?php the_field('organiser_description'); ?></div>
							</div>
						</div>
						<!-- Divider line to separate organisers -->
						<div class="line topmargin-sm nobottommargin"></div><br>

					<?php endwhile; 

					// Remove sorting filter
					remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );

				?>

			</div><!-- program committee section end -->

			<!-- Page Content: Local Organising Committee Section
			================================================= -->
			<div class="heading-block center">
				<!-- Second organiser category title -->
				<h3><?php echo $second_organiser_category; ?></h3>
			</div>
		
			<div class="col-md-12 bottommargin">

				<!-- Sort by last name -->
				<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );

					// Loop through array of 2015 organisers (local organising committee)
		  			$loop = new WP_Query( array( 'post_type' => 'organisers', 'meta_key' => '2015_organiser', 'meta_value' => 'Yes', 'meta_key' => 'local_organising_committee', 'meta_value' => 'Yes' ) ); 

		  			// For each organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each organiser -->
						<div class="team team-list clearfix">
							<!-- Organiser image with black and white filter -->
							<div class="team-image filtered" style="width: 150px;">
								<img class="img-circle" src="<?php the_field('organiser_image'); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="team-desc">
								<div class="team-title">
									<!-- Organiser name -->
									<h5><?php the_title(); ?></h5>
									<!-- Orgainser title and affiliated institution -->
									<span><?php the_field('organiser_title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span>
								</div>
								<!-- Organiser description with read more functionality  -->
								<div class="team-content more"><?php the_field('organiser_description'); ?></div>
							</div>
						</div>
						<!-- Divider line to separate organisers -->
						<div class="line topmargin-sm nobottommargin"></div><br>

					<?php endwhile; 

					// Remove sorting filter
					remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );

				?>

			</div><!-- local organising committee section end -->

		</div>
		
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>