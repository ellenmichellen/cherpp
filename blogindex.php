<?php
/*
	Template Name: blogindex
*/

get_header();

$page_title = get_field('page_title');

?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('<?php  bloginfo('template_url');  ?>/images/cliffs.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
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
				<div id="posts">
					<div class="entry clearfix">
						<div class="entry-title">
							<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
						</div>
			
						
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 10th February 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
							<li><a href="#"><i class="icon-camera-retro"></i></a></li>
						</ul>
						<div class="entry-image">
							<a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src='<?php  bloginfo('template_url');  ?>/images/blog/standard/17.jpg?>' alt="Standard Post with Image"></a>
						</div>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
							<a href="blog-single.html" class="more-link">Read More <i class="icon-caret-right"></i></a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src='<?php  bloginfo('template_url');  ?>/images/blog/standard/17.jpg?>' alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 10th February 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
							<li><a href="#"><i class="icon-camera-retro"></i></a></li>
						</ul>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
							<a href="blog-single.html" class="more-link">Read More</a>
						</div>
					</div>
				</div><!-- #posts end -->

				<!-- Pagination
				============================================= -->
				<ul class="pager nomargin">
					<li class="previous"><a href="#">&larr; Older</a></li>
					<li class="next"><a href="#">Newer &rarr;</a></li>
				</ul><!-- .pager end -->

			</div><!-- .postcontent end -->

			<!-- Sidebar
			============================================= -->
			<div class="sidebar nobottommargin col_last clearfix">
				<div class="sidebar-widgets-wrap">

					<div class="widget widget_links clearfix">

						<h4>Recent Posts</h4>
						<ul>
							<li><a href="#">Post 1</a></li>
							<li><a href="#">Post 2</a></li>
							<li><a href="#">Post 3</a></li>
							<li><a href="#">Post 4</a></li>
							<li><a href="#">Post 5</a></li>
						</ul>

					</div>

					<div class="widget widget_links clearfix">

						<h4>Categories</h4>
						<ul>
							<li><a href="#">Category 1</a></li>
							<li><a href="#">Category 2</a></li>
							<li><a href="#">Category 3</a></li>
							<li><a href="#">Category 4</a></li>
							<li><a href="#">Category 5</a></li>
						</ul>

					</div>

					<div class="widget clearfix">

						<h4>Tags</h4>
						<div class="tagcloud">
							<a href="#">general</a>
							<a href="#">videos</a>
							<a href="#">music</a>
							<a href="#">media</a>
							<a href="#">photography</a>
							<a href="#">parallax</a>
							<a href="#">ecommerce</a>
							<a href="#">terms</a>
							<a href="#">coupons</a>
							<a href="#">modern</a>
						</div>

					</div>

				</div>

			</div><!-- .sidebar end -->

		</div>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>