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
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i|Open+Sans:400,400i,600,600i,700|Domine:400,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">
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