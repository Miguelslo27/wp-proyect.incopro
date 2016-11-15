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

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <!-- Title of wp blog -->
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container-fluid nav-bar">
                    <div class="top-bar row">
                        <div class="module left site-title-container">
                            <div class="phone-number left">
                                <span class="icon ion-android-call"></span>
                                <span>ATENCIÓN TELEFÓNICA: 1234 56 78</span>
                            </div> <!-- end .phone-number.float-left -->
                        </div> <!-- end .module.left.site-title-container -->
                        <div class="sponsors module right">
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
                    </div>
                </div>
                <!-- At this point code is complete -->

                <!-- Continue here -->
                <div class="container-fluid site-logo-and-nav-container">
                    <div class="module left">
                        <?php incopro_get_header_logo(); ?>
                    </div> <!-- end .module.left -->
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="fa fa-bars"></i>
                    </div> <!-- end .module.widget-handle.mobile-toggle.right.visible-sm.visible-xs -->
                    <div class="module right">
                        <?php incopro_header_menu(); // main navigation ?>
                    </div> <!-- end .module.right -->
                </div> <!-- end .module-group -->
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->
    
	<div id="content" class="main-container">
        <?php ( is_page_template('template-home.php') ) ? '' : incopro_top_callout(); ?>
        <section class="content-area <?php echo ( get_theme_mod('top_callout', true ) ) ? '' : ' pt0 ' ?>">
            <div id="main" class="<?php echo ( !is_page_template( 'template-home.php' )) ? 'container-fluid': ''; ?>" role="main">
                <div class="row">
