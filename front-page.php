<?php
/*
	Template Name: home
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/homebanner.jpg?>') no-repeat; background-size: cover" data-height-lg="400" data-height-md="400" data-height-sm="450" data-height-xs="450" data-height-xxs="450">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Centre for Higher Education <br>Research, Policy &amp; Practice</h1><br>
			<!-- Call to action button -->
			<span class="white center" style="font-family: 'Raleway', sans-serif !important; letter-spacing: .5px;">An international collaborative project hosted by the University <br>of Ontario Institute of Technology, Durham College, and the <br>Technological University for Dublin Alliance</span><br>
			<span class="center">
			<a href="<?php echo get_page_link( get_page_by_title( 'About' )->ID ); ?>" class="button button-white">Learn more</a></span>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content: What's New Section
============================================= -->
<section id="content">

	<div class="content-wrap" style="background-color: #F9F9F9;">

		<div class="container clearfix" >

			<div class="heading-block">
				<h3>What's New</h3>
			</div>
		
			<div class="row row-eq bottommargin">

				<!-- First column -->
				<div class="col-sm-4 col-eq">
					<div class="whats-new promo-flat">
						<!-- Item title -->
						<h3>Call for Papers: <br>UDHEIT Congress 2018</h3>
						<!-- Item description -->
						<span>
							<p>The Call for Papers and Workshops for UDHEIT Congress 2018 is now open! UDHEIT2018 invites new and challenging paper submissions from any area or discipline of Design or Education.</p> 
							<p><b>Abstract Submission Deadline:</b> <br>January 30, 2018</p>
						</span>
						<!-- Item call to action button -->
	           			<div class="info-button">
	                		<a class="button button-dark green-button" href="<?php echo get_page_link( get_page_by_title( 'UDHEIT 2018 Call for Papers' )->ID ); ?>">Learn more</a>
	            		</div>
					</div>
				</div>

				<!-- Second column -->
				<div class="col-sm-4 col-eq odd">
					<div class="whats-new promo-flat">
						<!-- Item title -->
						<h3>Registration: <br>UDHEIT Congress 2018</h3>
						<!-- Item description -->
						<span>
							<p>Registration for the Universal Design &amp; Higher Education in Transformation Congress is now open! Register now for the exciting four-day event to be held in Dublin, Ireland.</p>
							<p><b>Early Bird Registration Deadline:</b> <br>May 31, 2018</p>
							</span>
						<!-- Item call to action button -->
	           			<div class="info-button">
	                		<a class="button button-dark blue-button" href="https://abbey.eventsair.com/ud-heit-2018/registration" target="_blank">Register</a>
	            		</div>
					</div>
				</div>

				<!-- Third column -->
				<div class="col-sm-4">
					
				</div>

			</div>

		</div>

	</div>

	<!-- UDHEIT 2018 Section -->
	<div class="section parallax header-stick bottommargin-lg" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastlelandscape.jpg?>');" >
			<div class="heading-block center nobottomborder nobottommargin">
				<!-- UDHEIT 2018 logo -->
				<img src='<?php  bloginfo('template_url');  ?>/images/udheit.png?>'/>
				<!-- Call to action button -->
				<a href="<?php echo get_page_link( get_page_by_title( 'UDHEIT 2018' )->ID ); ?>" class="button button-white">Learn more</a>
			</div>
	</div><!-- udheit 2018 section end -->

	<!-- Organisers section -->
	<div class="container clearfix topmargin-lg">

		<div class="nobottomborder">

			<!-- First row of organisers -->
			<ul class="clients-grid grid-7 bottommargin clearfix">

				<?php 
				
					// Loop through array of 2018 institution organisers, ordered by name
					$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'cherpp_organiser', 'meta_value' => 'Yes' ) ); 

					// For each institution organiser in the array...
					while( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- Display and style information for each institution organiser -->
						<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>

			</ul>
			
		</div>
		
	</div><!-- organisers section end -->

</section>

<?php get_footer(); ?>