<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.70), rgba(67, 204, 158, 0.70)), url('<?php  bloginfo('template_url');  ?>/images/cliffs.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center">Blog</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- MAIN CONTENT
==================================== -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix">
				<div class="single-post nobottommargin">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );
					endwhile; // End of the loop.
					?>
			
				</div>
			</div>

		<!-- SIDEBAR
		=============================== -->
		<div class="sidebar nobottommargin col_last clearfix">
			<div class="sidebar-widgets-wrap">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #primary -->
</section>

<?php
get_footer();