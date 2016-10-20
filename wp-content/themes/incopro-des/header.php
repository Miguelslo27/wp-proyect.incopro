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
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/streamer-player.css">

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
				<nav class="nav-bar">

					<a href="#" class="responsive res480 icon ion-navicon float-left"></a>
					<a href="#" class="responsive res480 icon ion-log-in float-right"></a>

					<ul class="user-cmds responsive res480 res640 res768">
						<li>
							<a href="#">Registrarme</a>
						</li>
						<li>
							<a href="<?php echo wp_login_url( get_permalink() ); ?>">Iniciar Sesión</a>
						</li>
					</ul> <!-- end .user-cmds.responsive.res480.res640.res768 -->
					<ul class="pages float-left">
						<li>
							<a href="#">Empresa</a>
						</li>
						<li>
							<a href="#">Servicio</a>
						</li>
						<li>
							<a href="#">Revista Verde</a>
						</li>
						<li>
							<a href="#">Revista ANPL</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul> <!-- end .pages.float-left -->
					<ul class="user-cmds float-right responsive res1024 res1280 res1280-more">
						<li>
							<a href="#">Registrarme</a>
						</li>
						<li>
							<a href="<?php echo wp_login_url( get_permalink() ); ?>">Iniciar Sesión</a>
						</li>
					</ul> <!-- end .user-cmds.float-right.responsive.res1024.res1280.res1280-more -->
				</nav> <!-- end .nav-bar -->
				<div class="site-title padding-sides padding-up-down">
					<div id="logo" class="float-left">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="INFO AGRO">
					</div> <!-- end #logo.float-left -->
					<div id="header-banner" class="float-right responsive res1280 res1280-more">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-banner.jpg" alt="Lea la revista verde online">
					</div> <!-- end #header-banner.float-right.responsive.res1280.res1280-more -->
				</div> <!-- end .site-title.padding-sides.padding-up-down -->
				<nav class="categories-nav padding-sides margin-bottom">
					<a href="#" class="categories-menu responsive res480">
						<span>Menu</span>
						<span class="icon ion-ios-arrow-down"></span>
						<span class="icon ion-ios-arrow-up"></span>
					</a>
					<ul class="categories">
						<li class="category-home"><a href="#">Inicio</a></li>
						<li class="category-agricultura"><a href="#">Agricultura</a></li>
						<li class="category-ganaderia"><a href="#">Ganadería</a></li>
						<li class="category-lecheria"><a href="#">Lechería</a></li>
						<li class="category-forestacion"><a href="#">Forestación</a></li>
						<li class="category-internacionales"><a href="#">Internacionales</a></li>
						<li class="category-empresariales"><a href="#">Empresariales</a></li>
					</ul> <!-- end .categories -->
				</nav> <!-- end .categories-nav.padding-sides.margin-bottom -->
			</div> <!-- end #header -->
		</header>