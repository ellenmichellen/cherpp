<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<div class="entry-title"><h2>', '</h2></div>' );
		else :
			the_title( '<div class="entry-title"><h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2></div>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i> <time><?php the_date(); ?></time>
			<li><i class="icon-user"></i> <?php the_author(); ?>
			<li><i class="icon-folder-open"></i> <?php the_category(', '); ?>
			<li><a href="<?php comments_link(); ?>"><i class="icon-comments"></i> <?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a></li>
			<?php edit_post_link( 'Edit', '<li><i class="icon-pencil"></i>', '</li>' ); ?>
		</ul>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- Entry Image
	============================================= -->

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="entry-image">
			<?php the_post_thumbnail(); ?>
		</div>

	<?php } ?>

	<?php if ( is_single() ) : ?>
		<div class="entry-content notopmargin">
		    <?php the_content(); ?>
		</div><!-- post-content -->
	<?php else : ?>
		<div class="post-excerpt">
		    <?php the_excerpt(); ?>
		</div><!-- post-excerpt -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
