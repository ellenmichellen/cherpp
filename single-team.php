<?php
/*
	Template Name: about-us
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-organisers.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
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

			<div class="col-md-12 bottommargin">
				<div class="team team-list clearfix">
					<div class="team-image" style="width: 200px;">
						<img class="img-circle" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="team-desc">
						<div class="team-title"><h5><?php the_title(); ?></h5><span><?php the_field('title'); ?>, <em><?php the_field('affiliated_institution'); ?></em></span></div>
						<div class="team-content"><?php the_field('bio'); ?></div>
						<div class="line topmargin-sm nobottommargin"></div>

						<!-- If member has email address, display -->
						<?php if ( get_field('email_address') ) { ?>
							<a href="<?php the_field('email_address'); ?>" class="social-icon si-borderless si-small si-email3" target="_blank" title="E-mail">
								<i class="icon-email3"></i>
								<i class="icon-email3"></i>
							</a>
						<?php } ?>

						<!-- If member has facebook account, display -->
						<?php if ( get_field('facebook') ) { ?>
							<a href="<?php the_field('facebook'); ?>" class="social-icon si-borderless si-small si-facebook" target="_blank" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
						<?php } ?>

						<!-- If member has twitter account, display -->
						<?php if ( get_field('twitter') ) { ?>
							<a href="<?php the_field('twitter'); ?>" class="social-icon si-borderless si-small si-twitter" target="_blank" title="Twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
						<?php } ?>

						<!-- If member has linkedin account, display -->
						<?php if ( get_field('linkedin') ) { ?>
						<a href="<?php the_field('linkedin'); ?>" class="social-icon si-borderless si-small si-linkedin" target="_blank" title="LinkedIn">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
						<?php } ?>

						<!-- If member has instagram account, display -->
						<?php if ( get_field('instagram') ) { ?>
							<a href="<?php the_field('instagram'); ?>" class="social-icon si-borderless si-small si-instagram" target="_blank" title="Instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>