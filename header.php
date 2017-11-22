<?php

	/*
		Header
	*/

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="author" content="SemiColonWeb">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700|Montserrat:400,400i,500,500i,600,600i|Crete+Round:400,400i"" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/style.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/dark.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/animate.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/responsive.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title><?php  wp_title( '|', true, 'right' );  ?></title>

<?php  wp_head();  ?>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="<?php echo home_url(); ?>">Home</a></li>
							<!-- <li><a href="">Contact</a></li> -->
							<li><a href="<?php echo wp_login_url(); ?>">Login</a></li>
							<li><a href="https://twitter.com/@CHERPPIreCan" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span></a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

			</div>

		</div><!-- #top-bar end -->



		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php  html2wp_the_page_link( 'index.php' );  ?>" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php  bloginfo('template_url');  ?>/images/logo.png" alt="Canvas Logo"></a>
						<a href="<?php  html2wp_the_page_link( 'index.php' );  ?>" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php  bloginfo('template_url');  ?>/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation Menu
					============================================= -->
				
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary_menu',
							'container' => 'nav',
							'container_id' => 'primary-menu',

							));

					?>
				</div>
			</div>
		</header><!-- #header end -->