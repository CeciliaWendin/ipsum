<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.typekit.net/llb0fzp.css">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-content">
        <nav id="menu">
            <div class="menu-left">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu-left' ) ); ?>
            </div>

            <div class="logo">
                <?php echo get_custom_logo(); ?>
            </div>
            <div class="menu-right">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu-right' ) ); ?>
            </div>
        </nav>
    </div>
    <div class="mobile-header">
        <i onclick="menuToggleOn()" class="fa fa-bars"></i>
    </div>
    <div id="responsive-menu">
        <i onclick="menuToggleOff()" id="toggle-off" class="fa fa-times"></i>
        <div id="menu-items">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
        </div>
    </div>
</header>
<div id="container">
