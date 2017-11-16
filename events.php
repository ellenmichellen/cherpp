<?php
/*
	Template Name: events
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/events.jpg?>'); padding: 125px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Events</h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div id="posts" class="events small-thumbs">

				<?php

					// Loop through array of events
		  			$loop = new WP_Query( array( 'post_type' => 'calendar_events', 'orderby' => 'date', 'order' => 'ASC') ); 


		  			// For each event in the array...
					while( $loop->have_posts() ) : $loop->the_post(); 

					
					// Retrieve event date
					$date = get_field('date', false, false);
     				$date = new DateTime($date); ?>
	  			

	  					<!-- Display and style information for each event entry -->
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="#">
									<!-- Event date -->
									<div class="entry-date"><?php echo $date->format('j'); ?><span><?php echo $date->format('M'); ?></span></div>
								</a>
							</div>

							<div class="entry-c">
								<div class="entry-title">
								<!-- Event title -->
									<h2><a href="<?php the_field('link'); ?>" target="_blank"><?php the_title(); ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<!-- Event type -->
									<li><span class="label label-workshop"><?php the_field('type'); ?></span></li>
									<!-- Event time -->
									<li><i class="icon-time"></i> <?php the_field('time'); ?></li>
									<!-- Event location -->
									<li><i class="icon-map-marker2"></i> <?php the_field('location'); ?></li>
								</ul>
								<div class="entry-content event-box">
									<p><?php the_field('description'); ?></p>
									<a href="<?php the_field('link'); ?>" target="_blank" class="button button-small button-white button-dark whats-new-button"><?php the_field('button_text'); ?></a>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

			</div>

		</div>

	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>