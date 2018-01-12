<?php
/*
	Template Name: about-us
*/

get_header();

$page_title = get_field('page_title');
$leading_text = get_field('leading_text');							// Variable to store leading body text

?>

<!-- Page Title
============================================= -->
<section id="slider" class="slider-parallax" style="background: linear-gradient(rgba(46, 179, 214, 0.80), rgba(67, 204, 158, 0.80)), url('<?php  bloginfo('template_url');  ?>/images/heit-2015-organisers.jpg?>') no-repeat; background-size: cover" data-height-lg="300" data-height-md="300" data-height-sm="200" data-height-xs="200" data-height-xxs="200">
	<div class="container clearfix">
		<div class="vertical-middle dark center">
			<!-- Page heading on parallax background -->
			<h1 class="white center">People</h1>
		</div>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="<?php  bloginfo('template_url');  ?>/images/people/aidencarthy.jpg?>" alt="Aiden Carthy">
							</div>
							<div class="team-desc">
								<div class="team-title"><h5>Aiden Carthy</h5><span>Director/Lecturer in Psychology, <em>IT Blanchardstown</em></span></div>
								<div class="team-content">Dr. Aiden Carthy has over fifteen years' lecturing experience and recently founded and directs <a href="https://www.peei.ie/" target = "_blank" class="in-text-link">The National Research Centre for Psychology, Education and Emotional Intelligence.</a> His primary areas of research interest are emotional intelligence, applied education, and mental health.</div>
								<div class="line topmargin-sm nobottommargin"></div>
								<a href="mailto:aiden.carthy@itb.ie" class="social-icon si-borderless si-small si-email3" target="_blank" title="E-mail">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
								<a href="https://twitter.com/AidenCarthy" class="social-icon si-borderless si-small si-twitter" target="_blank" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="https://www.linkedin.com/in/aiden-carthy-369766b8/" class="social-icon si-borderless si-small si-linkedin" target="_blank" title="LinkedIn">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="<?php  bloginfo('template_url');  ?>/images/people/glennmehta.jpg?>" alt="Glenn Mehta">
							</div>
							<div class="team-desc">
								<div class="team-title"><h5>Glenn Mehta</h5><span>Head of Department, Department of Marketing &amp; Business Computing, <em>IT Tallaght</em></span></div>
								<div class="team-content">Glenn Mehta, BBS (Hons), MA (Research) is Head of the Department of Marketing and Business Computing and a former lecturer in Social Media, Management/Marketing Communications, and Tourism at the Institute of Technology, Tallaght (ITT) in South-West Dublin since 2001.</div>
								<div class="line topmargin-sm nobottommargin"></div>
								<a href="mailto:glenn.mehta@it-tallaght.ie" class="social-icon si-borderless si-small si-email3" target="_blank" title="E-mail">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
								<a href="https://www.facebook.com/MarketingAdvertisingDigital" class="social-icon si-borderless si-small si-facebook" target="_blank" title="Department of Marketing & Business Computing Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="https://www.linkedin.com/in/glennmehta/" class="social-icon si-borderless si-small si-linkedin" target="_blank" title="LinkedIn">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
								<a href="https://www.instagram.com/MarketingAdvertisingDigital/" class="social-icon si-borderless si-small si-instagram" target="_blank" title="Department of Marketing & Business Computing Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div>
						</div>
					</div>
	
				</div>

			</div>

		</section><!-- #content end -->

<?php get_footer(); ?>