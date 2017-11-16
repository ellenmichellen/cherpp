<?php
/*
	Template Name: home
*/

get_header();

?>




<section id="page-title" style="background-image: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/test.jpg?>'); padding: 150px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Centre for Higher Education <br>Research, Policy &amp; Practice</h1>
		<span class="white center subheading"></span>
	</div>
</section><!-- #page-title end -->

<!-- Page Content: Program Committee Section
============================================= -->
<section id="content">

	<div class="content-wrap" style="background-color: #e9e8e5;">

		<div class="container clearfix" >

			<div class="heading-block">
				<h3>What's New</h3>
			</div>
		
			<div class="col-md-12 bottommargin">
				<div class="row clear-bottommargin whats-new-row" >
					<div class="col-md-4 bottommargin" >
						<div class="promo promo-flat promo-mini promo-uppercase promo-left whats-new" >
							<h3>Workshop - Exemplary Teaching and Learning</h3>
							<span>The Centre for Higher Education Research, Policy and Practice (CHERPP) invites you to a workshop on exemplary teaching and learning with Dr Thomas Carey. The focus of the workshop will be distinctive excellence for our students as a primary driver of teaching and learning. </span>
							<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-circle button-small button-white button-dark whats-new-button" style="float: left;">Learn more</a>
							 <div style="clear:both"></div>
						</div>
					</div>
					<div class="col-md-4 bottommargin" >
						<div class="promo promo-flat promo-mini promo-uppercase promo-left whats-new" >
							<h3>Workshop - Exemplary Teaching and Learning</h3>
							<span>The Centre for Higher Education Research, Policy and Practice (CHERPP) invites you to a workshop on exemplary teaching and learning with Dr Thomas Carey. The focus of the workshop will be distinctive excellence for our students as a primary driver of teaching and learning. </span>
							<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-circle button-small button-white button-dark whats-new-button" style="float: left;">Learn more</a>
							 <div style="clear:both"></div>
						</div>
					</div>

					<div class="col-md-4 bottommargin" >
						<div class="promo promo-flat promo-mini promo-uppercase promo-left whats-new" >
							<h3>Workshop - Exemplary Teaching and Learning</h3>
							<span>The Centre for Higher Education Research, Policy and Practice (CHERPP) invites you to a workshop on exemplary teaching and learning with Dr Thomas Carey. The focus of the workshop will be distinctive excellence for our students as a primary driver of teaching and learning. </span>
							<a href="<?php echo $papers_button_link; ?>" target="_blank" class="button button-circle button-small button-white button-dark whats-new-button" style="float: left;">Learn more</a>
							 <div style="clear:both"></div>
						</div>
					</div>
				</div>
			</div><!-- program committee section end -->
			
		</div>
	</div>

</section><!-- #page content end -->


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