<?php
/*
	Template Name: heit-2015-gallery
*/

get_header();

$page_title = get_field('page_title');	// Variable to store page title

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/riverliffey.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center"><?php echo $page_title; ?></h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<?php
				// Display dynamic HEIT 2015 submenu
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

					// Retrieve page gallery and associated ids for each image
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

</section>

<?php get_footer(); ?>