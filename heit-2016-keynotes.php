<?php
/*
	Template Name: heit-2016-keynotes
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/speakers.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Keynote Speakers</h1>
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

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="col-md-12 bottommargin">

				<!-- Sort by last name -->
				<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );

					// Loop through array of 2016 kyenote speakers
		  			$loop = new WP_Query( array( 'post_type' => 'speakers', 'meta_key' => '2016_speaker', 'meta_value' => 'Yes' ) ); 

		  			// For each speaker in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<!-- Display and style information for each speaker in the array -->
						<div class="team team-list clearfix">
							<!-- Speaker image with black and white filter -->
							<div class="team-image filtered" style="width: 150px;">
								<img class="img-circle" src="<?php the_field('speaker_image'); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="team-desc">
								<div class="team-title">
									<!-- Speaker name -->
									<h5><?php the_title(); ?></h5>
									<!-- Speaker title and affiliated institution -->
									<span><?php the_field('speaker_title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span>
								</div>
								<!-- Speaker description with read more functionality -->
								<div class="team-content more"><?php the_field('speaker_description'); ?></div>
							</div>
						</div>
						<!-- Divider line to separate speakers -->
						<div class="line topmargin-sm nobottommargin"></div><br>

					<?php endwhile; 
					
					// Remove sorting filter
					remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );

				?>	

			</div>

		</div>
		
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>