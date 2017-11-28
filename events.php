<?php
/*
	Template Name: events
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/events.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<h1 class="white center">Events</h1>
		</div>
	</div>
</section><!-- #page-title end -->


<!-- Page Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div id="posts" class="events small-thumbs ">

				<?php

					// Loop through array of events
		  			$loop = new WP_Query( array( 'post_type' => 'calendar_events', 'orderby' => 'date', 'order' => 'DESC') ); 


		  			// For each event in the array...
					while( $loop->have_posts() ) : $loop->the_post(); 

					
					// Retrieve event date
					$date = get_field('date', false, false);
     				$date = new DateTime($date); 

     				// Retrieve event type
     				$type = get_field('type'); ?>
	
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
									<?php echo '<li><span class="label label-' . $type . '">' . $type . '</span></li>'; ?>

									<!-- Event time -->
									<li><i class="icon-time"></i> <?php the_field('time'); ?></li>

									<!-- Event location -->
									<li><i class="icon-map-marker2"></i> <?php the_field('location'); ?></li>
								</ul>
								<div class="entry-content event-box">
									<!-- Event description -->
									<p><?php the_field('description'); ?></p>

									<!-- Event button -->
									<a href="<?php the_field('link'); ?>" target="_blank" class="button button-small button-dark blue-button"><?php the_field('button_text'); ?></a>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

			</div>

		</div>

	</div>

</section><!-- #page content end -->

<?php get_footer(); ?>