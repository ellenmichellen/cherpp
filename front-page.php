<?php
/*
	Template Name: home
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/homebanner.jpg?>') no-repeat; background-size: cover" data-height-lg="400" data-height-md="400" data-height-sm="300" data-height-xs="300" data-height-xxs="300">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center">Centre for Higher Education <br>Research, Policy &amp; Practice</h1><br>
			<span class="white center subheading"><a href="<?php echo get_page_link( get_page_by_title( 'About' )->ID ); ?>" class="button home-button">Learn more</a></span>
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
				<div class="col-sm-4 col-eq">
					<div class="whats-new promo-flat">
						<h3>CHERPP Briefing</h3>
						<span>
								<p>The Centre for Higher Education Research, Policy and Practice (CHERPP) will hold a briefing for DIT staff that are interested in pairing up with a Canadian peer to carry out research and projects related to Higher Education.</p>
							</span>
	           			<div class="info-button">
	                		<a class="button button-dark blue-button" href="<?php echo get_page_link( get_page_by_title( 'Events | CHERPP' )->ID ); ?>">Learn more</a>
	            		</div>
					</div>
				</div>
				<div class="col-sm-4 col-eq odd">
					<div class="whats-new promo-flat">
						<h3>Workshop: Exemplary Teaching and Learning</h3>
						<span><p>The Centre for Higher Education Research, Policy and Practice (CHERPP) invites you to a workshop on exemplary teaching and learning with Dr Thomas Carey. The focus of the workshop will be distinctive excellence for our students as a primary driver of teaching and learning. </p></span>
	           			<div class="info-button">
	                		<a class="button button-dark green-button" href="<?php echo get_page_link( get_page_by_title( 'Events | CHERPP' )->ID ); ?>">Learn more</a>
	            		</div>
					</div>
				</div>
				<div class="col-sm-4 col-eq">
					<div class="whats-new promo-flat">
						<h3>Call for Papers: <br>UDHEIT Congress 2018</h3>
						<span>
								<p>The Call for Papers and Workshops for UDHEIT Congress 2018 is now open! UDHEIT2018 invites new and challenging paper submissions from any area or discipline of Design or Education.</p> 
								<p><b>Abstract Submission Deadline:</b> <br>January 30, 2018</p>
							</span>
	           			<div class="info-button">
	                		<a class="button button-dark blue-button" href="https://www.udheit2018.com/call-for-papers" target="_blank">Learn more</a>
	            		</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<!-- UDHEIT 2018 Section -->
	<div class="section parallax header-stick bottommargin-lg" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/dublincastlelandscape.jpg?>');" >
			<div class="heading-block center nobottomborder nobottommargin">
				<img src='<?php  bloginfo('template_url');  ?>/images/udheit.png?>'/>
				<a href="https://www.udheit2018.com/" target="_blank" class="button button-white">Learn more</a>
			</div>
	</div><!-- udheit 2018 section end -->

	<!-- Organisers section -->
	<div class="container clearfix topmargin-lg">

		<div class="nobottomborder">

			<!-- First row of organisers -->
			<ul class="clients-grid grid-7 bottommargin clearfix">

				<?php 
				
				// Loop through array of 2015 (Canadian) institution organisers, ordered by name
				$loop = new WP_Query( array( 'post_type' => 'institutions', 'meta_key' => 'cherpp_organiser', 'meta_value' => 'Yes' ) ); 

				// For each institution organiser in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Display and style information for each institution organiser in the array -->
					<li><a href="<?php the_field('institution_link'); ?>" target="_blank"><img src="<?php the_field('institution_image'); ?>" alt="<?php the_title(); ?>"></a></li>

				<?php endwhile; ?>
			</ul>
			
		</div>
	</div><!-- organisers section end -->

</section>

<?php get_footer(); ?>