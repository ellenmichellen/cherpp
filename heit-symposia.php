<?php
/*
	Template Name: heit-symposia
*/

get_header();


?>

<!-- Page Title
============================================= -->
<section id="page-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php  bloginfo('template_url');  ?>/images/heit-symposia.jpg?>'); padding: 100px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="white center">Higher Education in Transformation Symposia</h1>
	</div>
</section><!-- #page-title end -->

<!-- Page Content
============================================= -->
<section id="content">

	<div class="section notopmargin nobottommargin">

		<div class="container clearfix">

			<div class="heading-block center">
				<h3>An Annual Symposium for Higher Education Professionals</h3>
			</div>

			<span class="main-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum orci non massa ullamcorper, non faucibus magna condimentum. Morbi consequat purus eget ipsum placerat, eu semper lectus rhoncus. Sed egestas varius eros at tempor. Aliquam erat volutpat. Sed in lacinia risus, in posuere sapien. Donec mollis lectus vel elit mollis, aliquet semper nulla tincidunt. Duis et pellentesque nisi. Quisque ac ullamcorper arcu, nec egestas neque. Vivamus scelerisque ultricies porttitor. Phasellus consectetur sodales odio sed convallis.</p>

			<p>Donec dictum facilisis sem, semper dapibus velit euismod et. Praesent scelerisque tortor neque, id condimentum nunc ullamcorper vitae. Ut porta sagittis suscipit. Maecenas erat velit, sodales eu ipsum nec, maximus sagittis sem. Nullam aliquet, dolor ac pellentesque porta, lectus metus fermentum dui, id posuere purus ex a lectus. Pellentesque condimentum consequat enim, rutrum blandit urna accumsan id. Nunc non nulla ac eros aliquet feugiat. Suspendisse neque leo, mollis ut aliquam vel, tristique quis libero. Maecenas auctor feugiat odio in tincidunt. Maecenas convallis nisi id risus pretium hendrerit eu ut risus. Proin eleifend, mauris in condimentum lobortis, turpis magna elementum urna, ac pharetra felis mi non risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac sagittis nisl, id mattis nisi. Donec aliquam, ante eu malesuada tincidunt, nibh lorem laoreet orci, vitae pulvinar leo erat vulputate tortor. Phasellus lacinia sem sit amet nibh lobortis convallis.</p></span>

		</div>

	</div>

	<!-- Past events section -->

	<!-- First past event -->
	<div class="row clearfix common-height topmargin-lg">
		<div class="heading-block center">
			<h3>Past Events</h3>
		</div>

		<!-- First column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/dublincastle.jpg?>') center center no-repeat; background-size: cover;">
		</div>

		<!-- Second column featuring text -->
		<div class="col-md-6 center col-padding" style="background-color: #4aaaa5;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2015</h2>
				</div><br>
				<span class="before-heading white">The inaugural HEIT symposium was held in the spring of 2015 in Dublin, Ireland. Over 45 papers were accepted for the conference, all reflecting on themes that will shape the future of higher education internationally.</span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2015 | CHERPP' )->ID ); ?>" target="_blank" class="button button-rounded button-large button-white button-light tright"><span>Learn more</span></a>
			</div>
		</div>
	</div><!-- first past event section end -->

	<!-- Second past evennt -->
	<div class="row clearfix common-height">

		<!-- First column featuring text  -->
		<div class="col-md-6 center col-padding" style="background-color: #303e48;">
			<div id="chairs">
				<div class="heading-block-intro">
					<h2 class="white">Higher Education in Transformation 2016</h2>
				</div><br>
				<span class="before-heading white">The second HEIT symposium took place in Oshawa, Ontario in the fall of 2016. The submitted papers address the many ways that colleges and universities are actively reinventing and reinvigorating higher education.</span><br>
				<a href="<?php echo get_page_link( get_page_by_title( 'HEIT 2016 | CHERPP' )->ID ); ?>" target="_blank" class="button button-rounded button-large button-white button-light tright"><span>Learn more</span></a>
			</div>
		</div>

		<!-- Second column featuring background image -->
		<div class="col-md-6 center col-padding" style="background: url('<?php  bloginfo('template_url');  ?>/images/uoit-night.jpg?>') center center no-repeat; background-size: cover;">
		</div>
	</div><!-- second past event section end -->

</section><!-- #page content end -->

<?php get_footer(); ?>