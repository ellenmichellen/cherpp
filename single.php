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
<section id="page-title" class="blog" style="background-image: radial-gradient(rgba(100, 100, 100, 0.6), rgba(122, 204, 200, 0.6)), url('<?php  bloginfo('template_url');  ?>/images/cliffs.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Blog</h1>
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