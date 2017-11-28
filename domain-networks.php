<?php
/*
	Template Name: domain-networks
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/domainnetworks.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center">Domain Networks</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu" class="breadcrumbs">
	<div id="page-menu-wrap" class="breadcrumbs">
		<div class="container clearfix">
			<div class="menu-title"><?php the_breadcrumb(); ?></div>
		</div>
	</div>
</div><!-- #page-menu end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="col-md-12 bottommargin">

				<?php

				// Loop through array of 2015 speakers
	  			$loop = new WP_Query( array( 'post_type' => 'domain_networks', 'orderby' => 'domain_number', 'order' => 'ASC' ) ); 

	  			// For each speaker in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>
						
					<!-- Display information for each speaker in the array -->
					<div class="team team-list clearfix">
						<div class="team-desc">
							<div class="team-title big-title">
								<h5><?php the_title(); ?></h5>
							<div class="team-content"><?php the_field('domain_description'); ?></div>
						</div>
					</div>
					<div class="line topmargin-sm nobottommargin"></div><br>

				<?php endwhile; ?>

			</div>
		</div>
	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>