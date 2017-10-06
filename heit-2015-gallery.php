<?php
/*
	Template Name: heit-2015-gallery
*/

get_header();

$page_title = get_field('page_title');		

?>



<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(122, 204, 200, 0.8), rgba(74, 170, 165, 0.8)), url('<?php  bloginfo('template_url');  ?>/images/gallery.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center header-background-title"><?php echo $page_title; ?></h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<div class="menu-title">HEIT <span>2015</span></div>
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

<!-- Page Content
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
	</div><!-- Conference papers collection section -->

	<!-- Conference video section -->
	<div class="row clearfix common-height">
		<div class="promo promo-light promo-small header-stick notopborder" style="background: #303e48">
			<div class="container clearfix">
				<h3>Watch the highlights video from the <span>HEIT 2015</span> Conference in Dublin, Ireland</h3>
				<a class="button button-rounded button-reveal button-large button-white button-light tright" data-toggle="modal" data-target="#myModal"><i class="icon-line-arrow-right"></i><span>Click here</span></a>
			</div>
		</div>
	</div><!-- conference video section end -->
				
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="block divcenter" style="max-width: 700px;">
			<div class="center clearfix" style="padding: 50px;">
				<iframe src="https://www.youtube.com/embed/uOJ3dX1xtzQ" width="700" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
</section><!-- #content end -->

<?php get_footer(); ?>