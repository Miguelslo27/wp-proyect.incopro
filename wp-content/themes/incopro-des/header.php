<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Charset -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Responsive viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Style.css from theme -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- Title of wp blog -->
	<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header>
			<div id="header">
				<div class="top-header">
					<div class="phone-number float-left">
						<span class="icon ion-android-call"></span>
						<span>ATENCIÓN TELEFÓNICA: 1234 56 78</span>
					</div> <!-- end .phone-number.float-left -->
					<div class="sponsors float-right">
						<ul>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/adermis.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/bambino.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/indasec.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/indaslip.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/nene.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/nuvenia.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/sabanindas.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/unknown.png" alt=""></a></li>
						</ul>
					</div> <!-- end .sponsors.float-right -->
				</div> <!-- end .top-header -->
				<div class="logo-and-nav">
					<div class="logo float-left">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="IncoPRO">
					</div><!-- end .logo -->
					<nav class="float-right">
						<ul class="header-nav">
							<li>
								<a href="#">IncoPro <span class="icon ion-chevron-down"></span></a>
								<ul>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Productos <span class="icon ion-chevron-down"></span></a>
								<ul>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Test <span class="icon ion-chevron-down"></span></a>
								<ul>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Contacto <span class="icon ion-chevron-down"></span></a>
								<ul>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Cliente <span class="icon ion-chevron-down"></span></a>
								<ul>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
									<li><a href="#">Subitem</a></li>
								</ul>
							</li>
						</ul> <!-- end .header-nav -->
					</nav> <!-- end nav -->
					<div class="clear"></div>
				</div> <!-- end .logo-and-nav -->
			</div> <!-- end #header -->
		</header>