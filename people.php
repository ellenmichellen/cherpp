<?php
/*
	Template Name: about-us
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

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="team-desc">
								<div class="team-title"><h5><a class="unstyled" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5><span><?php the_field('title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span></div>
								<div class="team-content"><?php the_field('brief_bio'); ?></div>
								<div class="line topmargin-sm nobottommargin"></div>

								<?php if ( get_field('email_address') ) { ?>
									<a href="<?php the_field('email_address'); ?>" class="social-icon si-borderless si-small si-email3" target="_blank" title="E-mail">
										<i class="icon-email3"></i>
										<i class="icon-email3"></i>
									</a>
								<?php } ?>

								<?php if ( get_field('facebook') ) { ?>
									<a href="<?php the_field('facebook'); ?>" class="social-icon si-borderless si-small si-facebook" target="_blank" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
								<?php } ?>

								<?php if ( get_field('twitter') ) { ?>
									<a href="<?php the_field('twitter'); ?>" class="social-icon si-borderless si-small si-twitter" target="_blank" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
								<?php } ?>

								<?php if ( get_field('linkedin') ) { ?>
								<a href="<?php the_field('linkedin'); ?>" class="social-icon si-borderless si-small si-linkedin" target="_blank" title="LinkedIn">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
								<?php } ?>

								<?php if ( get_field('instagram') ) { ?>
									<a href="<?php the_field('instagram'); ?>" class="social-icon si-borderless si-small si-instagram" target="_blank" title="Instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>
								<?php } ?>
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