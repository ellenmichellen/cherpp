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
			<li><i class="icon-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
			<li><i class="icon-folder-open"></i> <?php the_category(', '); ?>
			<li><i class="icon-comments"></i><a href="<?php comments_link(); ?>"> <?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a></li>
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
		    <div class="blog-post-tags">
					<?php
					    // Get the assigned tag_id
					    $tag_ids = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );

					    // Check if there is any tag_ids, if print wp_tag_cloud
					    if ( $tag_ids ) {

					        wp_tag_cloud( array(
					            'unit'     => 'px',       // font sizing choice (pt, em, px, etc)
					            'include'  => $tag_ids,   // ID's of tags to include, displays none except these
					        ) );
					    }
					?>
				</div>

				<div class="blog-post-navigation">						
					<?php
						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?> 
				</div>

		</div><!-- post-content -->
	<?php else : ?>
		<div class="post-excerpt">
		    <?php the_excerpt(); ?>
		</div><!-- post-excerpt -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
