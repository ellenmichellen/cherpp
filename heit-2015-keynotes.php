<?php
/*
	Template Name: heit-2015-keynotes
*/

get_header();

$page_title = get_field('page_title');

?>


<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/speakers.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center"><?php echo $page_title; ?></h1>
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
</div><!-- #page-menu end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="col-md-12 bottommargin">

				<!-- Sort by last name -->
				<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );

				// Loop through array of 2015 speakers
	  			$loop = new WP_Query( array( 'post_type' => 'speakers', 'meta_key' => '2015_speaker', 'meta_value' => 'Yes' ) ); 

	  			// For each speaker in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>
						
					<!-- Display information for each speaker in the array -->
					<div class="team team-list clearfix">
						<div class="team-image filtered" style="width: 150px;">
							<img class="img-circle" src="<?php the_field('speaker_image'); ?>" alt="<?php the_title(); ?>">
						</div>
						<div class="team-desc">
							<div class="team-title">
								<h5><?php the_title(); ?></h5>
								<span><?php the_field('speaker_title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span>
								</div>
							<div class="team-content more"><?php the_field('speaker_description'); ?></div>
						</div>
					</div>
					<div class="line topmargin-sm nobottommargin"></div><br>

				<?php endwhile; 
					
				// Remove sorting filter
				remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );?>		
			</div>
		</div>
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>