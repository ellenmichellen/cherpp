<?php
/*
	Template Name: people
*/

get_header();

$page_title = get_field('page_title');
$leading_text = get_field('leading_text');							// Variable to store leading body text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-organisers.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">People</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Sort by last name -->
			<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );

				// Loop through array of 2016 kyenote speakers
			  	$loop = new WP_Query( array( 'post_type' => 'team' ) ); 

			  	// For each speaker in the array...
				while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-md-3 bottommargin-lg">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 200px;">
								<img class="img-circle" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>"><br>
								<div class="team-title"><center><h5><a class="unstyled" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5><span><?php the_field('title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span></center></div>
							</div>
						</div>
					</div>

				<?php endwhile; 

				// Remove sorting filter
				remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );

			?>
			
		</div>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>