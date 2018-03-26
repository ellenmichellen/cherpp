<?php
/*
	Template Name: home
*/

get_header();

$whats_new_item_1_title = get_field('whats_new_item_1_title');				// Variable to store title for what's new item 1
$whats_new_item_1_description = get_field('whats_new_item_1_description');	// Variable to store description for what's new item 1
$whats_new_item_1_button_text = get_field('whats_new_item_1_button_text');	// Variable to store button text for what's new item 1
$whats_new_item_1_button_link = get_field('whats_new_item_1_button_link');	// Variable to store button link for what's new item 1
$whats_new_item_2_title = get_field('whats_new_item_2_title');				// Variable to store title for what's new item 2
$whats_new_item_2_description = get_field('whats_new_item_2_description');	// Variable to store description for what's new item 2
$whats_new_item_2_button_text = get_field('whats_new_item_2_button_text');	// Variable to store button text for what's new item 2
$whats_new_item_2_button_link = get_field('whats_new_item_2_button_link');	// Variable to store button link for what's new item 2
$whats_new_item_3_title = get_field('whats_new_item_3_title');				// Variable to store title for what's new item 3
$whats_new_item_3_description = get_field('whats_new_item_3_description');	// Variable to store description for what's new item 3
$whats_new_item_3_button_text = get_field('whats_new_item_3_button_text');	// Variable to store button text for what's new item 3
$whats_new_item_3_button_link = get_field('whats_new_item_3_button_link');	// Variable to store button link for what's new item 3

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/hands.jpg?>') no-repeat; background-size: cover" data-height-lg="400" data-height-md="400" data-height-sm="450" data-height-xs="400" data-height-xxs="500">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Centre for Higher Education <br>Research, Policy &amp; Practice</h1><br>
			<!-- Call to action button -->
			<span class="white center" style="font-family: 'Raleway', sans-serif !important; letter-spacing: .5px;">An international collaborative project hosted by the University of Ontario Institute of Technology, Durham College, and the Technological University for Dublin Alliance</span><br>
			<span class="center">
			<a href="<?php echo get_page_link( get_page_by_title( 'About' )->ID ); ?>" class="button home-button">Learn more</a></span>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content: What's New Section
============================================= -->
<section id="content">

	<div class="content-wrap" style="background-color: #ffffff;">

		<div class="container clearfix" >

			<div class="heading-block">
				<h3>What's New</h3>
			</div>
		
			<div class="row row-eq bottommargin">

				<!-- First column featuring first What's New item -->
				<div class="col-sm-4 col-eq">
					<div class="whats-new promo-flat">
						<!-- Item title -->
						<h3><?php echo $whats_new_item_1_title; ?></h3>
						<!-- Item description -->
						<span>
							<?php echo $whats_new_item_1_description; ?>
						</span>
						<!-- Item call to action button -->
	           			<div class="info-button">
	                		<a class="button button-dark blue-button" href="<?php echo $whats_new_item_1_button_link ?>"><?php echo $whats_new_item_1_button_text ?></a>
	            		</div>
					</div>
				</div>

				<!-- If second What's New item exists, display it -->
				<?php if ( get_field('whats_new_item_2') == "Yes") { ?>
					<!-- Second column -->
					<div class="col-sm-4 col-eq odd">
						<div class="whats-new promo-flat">
							<!-- Item title -->
							<h3><?php echo $whats_new_item_2_title; ?></h3>
							<!-- Item description -->
							<span>
								<?php echo $whats_new_item_2_description; ?>
							</span>
							<!-- Item call to action button -->
		           			<div class="info-button">
		                		<a class="button button-dark green-button" href="<?php echo $whats_new_item_2_button_text ?>" target="_blank"><?php echo $whats_new_item_2_button_text ?></a>
		            		</div>
						</div>
					</div>
				<?php } ?>

				<!-- If no second What's new item, display nothing -->
				<?php if ( get_field('whats_new_item_2') == "No") { ?>
					<div class="col-sm-4">
						
					</div>
				<?php } ?>

				<!-- If third What's New item exists, display it -->
				<?php if ( get_field('whats_new_item_3') == "Yes") { ?>
					<!-- Second column -->
					<div class="col-sm-4 col-eq">
						<div class="whats-new promo-flat">
							<!-- Item title -->
							<h3><?php echo $whats_new_item_3_title; ?></h3>
							<!-- Item description -->
							<span>
								<?php echo $whats_new_item_3_description; ?>
							</span>
							<!-- Item call to action button -->
		           			<div class="info-button">
		                		<a class="button button-dark green-button" href="<?php echo $whats_new_item_3_button_text ?>" target="_blank"><?php echo $whats_new_item_3_button_text ?></a>
		            		</div>
						</div>
					</div>
				<?php } ?>

				<!-- If no third What's New item, display nothing -->
				<?php if ( get_field('whats_new_item_3') == "No") { ?>
					<div class="col-sm-4">
						
					</div>
				<?php } ?>

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