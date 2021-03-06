<?php
/*
	Template Name: domain-networks
*/

get_header();

$leading_text = get_field('leading_text'); 					 // Variable to store leading text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/books.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white">Domain Networks</h1>
		</div>
	</div>
</section><!-- #page-title end -->


<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- If there is leading text, display -->
			<?php if ( get_field('leading_text') ) { ?>

				<!-- Leading text section -->
				<div class="row nobottommargin">
					<div class="col-md-12 center">
						<div class="heading-block center themes">
							<!-- Leading text -->
							<span>
								<?php echo $leading_text; ?>
							</span>
						</div>
					</div>
				</div><!-- leading text section end -->

			<?php } ?>

			<div class="col-md-12 bottommargin">

				<?php

					// Loop through array of domain networks, ordered by number, ascending
		  			$loop = new WP_Query( array( 'post_type' => 'domain_networks', 'orderby' => 'domain_number', 'order' => 'ASC' ) ); 

		  			// For each domain network in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<!-- Display information for each domain network -->
						<div class="team team-list clearfix">
							<div class="team-desc">
								<div class="team-title big-title">
									<!-- Domain Network title -->
									<h5><?php the_title(); ?></h5>
								<div class="team-content">
									<!-- Domain Network description -->
									<?php the_field('domain_description'); ?>
								</div>
							</div>
						</div>
						<!-- Divider line to separate Domain Networks -->
						<div class="line topmargin-sm nobottommargin"></div><br>

					<?php endwhile; 

				?>

			</div>

		</div>

	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>