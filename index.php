<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title" class="blog" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php  bloginfo('template_url');  ?>/images/cliffs.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Blog</h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Content: Blog Index
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<!-- Posts
				============================================= -->
				<div class="single-post nobottommargin">
					
						<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									
								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */

									?> 

									<div class="entry clearfix"> 
										<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
									</div> 

								<?php
								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					
				</div>
			</div>

			<!-- Sidebar
			============================================= -->
			<div class="sidebar nobottommargin col_last clearfix">
				<div class="sidebar-widgets-wrap">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

get_footer(); ?>
