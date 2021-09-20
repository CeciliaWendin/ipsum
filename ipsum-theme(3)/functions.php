<?php
//Custom Logo
function config_custom_logo() {
        
    $defaults = array(
        'height' => 155,
        'width' => 190,
        'flex-height' => false,
        'flex-width' => false,
        'header-text' => array(),
    );
    add_theme_support( 'custom-logo' , $defaults );
}
add_action( 'after_setup_theme' , 'config_custom_logo' );

//menus
add_action('init', 'register_menus');

function register_menus() {
    register_nav_menus(array(
        'main-menu-left' => 'Main-left'
    ));
    register_nav_menus(array(
        'main-menu-right' => 'Main-right'
    ));
    register_nav_menus(array(
        'mobile-menu' => 'Mobile-menu'
    ));
}
/* Enable post thumbnails */
add_theme_support('post-thumbnails');

add_theme_support('category-thumbnails');
/* Custom sizes */
set_post_thumbnail_size(300, 300, true);
add_image_size( 'hero', 700, 467, true); 
add_image_size( 'large', 500 );
add_image_size( 'homepage-thumb', 200, 200, true);
add_image_size( 'blog-thumb', 300, 300, TRUE );
add_image_size( 'category-page', 650, 450, true );

//widgets and widget areas
add_action('widgets_init', 'ipsum_widget_init');

function ipsum_widget_init() {
    register_sidebar(array(
        'name' => 'Footer widget 1', 
        'id' => 'footer-widget-1', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Footer widget 2', 
        'id' => 'footer-widget-2', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Footer widget 3', 
        'id' => 'footer-widget-3', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Footer widget 4', 
        'id' => 'footer-widget-4', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

//enable shortcodes


add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

function my_multi_col_v2($content){
	// run through a couple of essential tasks to prepare the content
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
 
	// the first "more" is converted to a span with ID
	$columns = preg_split('/(<span id="more-\d+"><\/span>)|(<!--more-->)<\/p>/', $content);
	$col_count = count($columns);
 
	if($col_count > 1) {
		for($i=0; $i<$col_count; $i++) {
			// check to see if there is a final </p>, if not add it
			if(!preg_match('/<\/p>\s?$/', $columns[$i]) )  {
				$columns[$i] .= '</p>';
			}
			// check to see if there is an appending </p>, if there is, remove
			$columns[$i] = preg_replace('/^\s?<\/p>/', '', $columns[$i]);
			// now add the div wrapper
			$columns[$i] = '<div class="dynamic-col-'.($i+1).'">'.$columns[$i].'</div>';
		}
		$content = join($columns, "\n").'<div class="clear"></div>';
	}
	else {
		// this page does not have dynamic columns
		$content = wpautop($content);
	}
	// remove any left over empty <p> tags
	$content = str_replace('<p></p>', '', $content);
	return $content;
}




