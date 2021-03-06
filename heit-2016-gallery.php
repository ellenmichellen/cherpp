<?php
/*
	Template Name: heit-2016-gallery
*/

get_header();

$page_title = get_field('page_title');								// Variable to store page title
$conference_videos_text = get_field('conference_videos_text');		// Variable to store text for conference videos description
$conference_videos_link = get_field('conference_videos_link');		// Variable to store link to conference videos

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(51, 198, 222, 0.85), rgba(53, 218, 174, 0.85)), url('<?php  bloginfo('template_url');  ?>/images/heit-2016-gallery.jpg?>') no-repeat; background-size: cover" data-height-lg="250" data-height-md="250" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">Photo Gallery</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<?php
				// Display dynamic HEIT 2016 submenu
				wp_nav_menu( array(
					'theme_location' => 'heit_2016_submenu',
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

	<!-- Conference papers collection section -->
	<div class="promo promo-light promo-small header-stick topborder-lg" style="background: #e9e8e5">
		<div class="container clearfix">
			<!-- Conference videos description text -->
			<h3>Watch videos of each day of the HEIT 2016 conference held in Oshawa, Ontario</h3>
			<!-- Conference videos call to action button with link to videos -->
			<a href="https://mediasite.uoit.ca/Mediasite/Catalog/Full/21a9468490744840bd0766069c3717d921" target="_blank" class="button button-dark blue-button"><span>Click here</span></a>
		</div>
	</div><!-- conference papers collection section end -->

</section>

<?php get_footer(); ?>