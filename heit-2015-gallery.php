<?php
/*
	Template Name: heit-2015-gallery
*/

get_header();

$page_title = get_field('page_title');	
$conference_videos_text = get_field('conference_videos_text');		// Variable to store text for conference videos description
$conference_videos_link = get_field('conference_videos_link');		// Variable to store link to conference videos

?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/riverliffey.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center"><?php echo $page_title; ?></h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<div class="menu-title"><a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015 | CHERPP' )->ID ); ?>">HEIT <span>2015</span></a></div>
			<?php
				// Display dynamic HEIT 2016 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2015_submenu',
					'container' => 'nav'
				));
			?>
			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
		</div>
	</div>
</div><!-- #page-menu end -->

<!-- Page Content: Photo Gallery
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Lightbox gallery section -->
			<div class="masonry-thumbs col-6 clearfix" data-lightbox="gallery">

				<?php

					// Retrieve page gallery and associated ids
					$gallery = get_post_gallery( $post, false );
					$ids = explode( ",", $gallery['ids'] );		
				         
				    // For each image in gallery, retrieve id and...
					foreach( $ids as $id ) {
					    $link   = wp_get_attachment_url( $id );
				    
				?>

					<!-- Display each image in a masonry grid -->
					<a href="<?php echo $link ?>" data-lightbox="gallery-item">
						<img src="<?php echo $link  ?>" alt="Gallery Image">
						<div class="overlay"><div class="overlay-wrap"><i class="icon-line-plus"></i></div></div>
					</a>

				<?php

					}
				?>

			</div><!-- lightbox gallery section end -->

		</div>

	</div><!-- photo gallery section end -->
	<!-- Conference papers collection section -->
	<div class="promo promo-light promo-small header-stick topborder-lg" style="background: #303e48">
		<div class="container clearfix">
			<h3><?php echo $conference_videos_text; ?></h3>
			<a href="<?php echo $conference_videos_link; ?>" target="_blank" class="button button-circle button-large button-white button-light tright"><span>Click here</span></a>
		</div>
	</div><!-- conference papers collection section end -->

</section>

<?php get_footer(); ?>