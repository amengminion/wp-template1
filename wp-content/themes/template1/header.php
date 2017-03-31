<?php

/**
 * The template for displaying the custom header
 */

$stylesheetUri = get_stylesheet_directory_uri();

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    
    <?php 
    if(is_home()) :
    ?>
    
    <link rel="stylesheet" href="<?php echo $stylesheetUri; ?>/assets/slick/slick.css" >
    <link rel="stylesheet" href="<?php echo $stylesheetUri; ?>/assets/slick/slick-theme.css" >
    
    <?php endif; ?>
    
	<link rel="stylesheet" href="<?php echo $stylesheetUri; ?>/css/style.css" >
	
	<script type="text/javascript" src="<?php echo $stylesheetUri; ?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $stylesheetUri; ?>/assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $stylesheetUri; ?>/assets/scroll-up/scroll-up.js"></script>
    <script type="text/javascript" src="<?php echo $stylesheetUri; ?>/js/functions.js"></script>
    <script type="text/javascript" src="<?php echo $stylesheetUri; ?>/js/global.js"></script>
</head>

<body <?php body_class(); ?>>
    <header>
	    <nav class="navbar navbar-default">
            <div class="top-nav clearfix">
                <a href="<?php site_url(); ?>" class="top-nav-logo"><img src="<?php echo $stylesheetUri; ?>/img/logo.png" alt=""></a>
                <ul class="contact-info">
                    <li><i class="icon fa fa-envelope"></i><a href="mailto: weblab@minionsolutions.com">weblab@minionsolutions.com</a></li>
                    <li><i class="icon fa fa-clock-o"></i><span>Mon-Fri: 9:30-18:30</span></li>
                    <li><i class="icon fa fa-phone"></i><span>02 535 0822</span></li>
                </ul>
            </div>
            <div id="top-menu" class="container-fluid row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    $args = array(
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav'
                    );
                    wp_nav_menu($args); 
                    ?>
                </div><!-- /.navbar-collapse -->
            </div>
            <div id="sticky-menu">             
                <?php
                $args = array(
                    'container' => 'ul'
                );
                wp_nav_menu($args); 
                ?>
            </div>
	    </nav>
	</header>
