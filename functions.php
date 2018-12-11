<?php
// Featured Image support
// function image_setup() {
// 	add_theme_support('post-thumbnails');
// }

// add_action('after_setup_theme', 'image_support');
function simple_theme_setup(){

	// Para anadir featured image en post como un boton
	add_theme_support('post-thumbnails');

	/* Para anadir un menu - menu editor y luego poder usarlo
	en header.php */
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}


add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt Length
function set_excerpt_lenght() {
	return 25;
}

add_filter('excerpt_lenght', 'set_excerpt_lenght');

// Create the Widgets functionallity
// It is required to have this Sidebar if not those cannot be use

function init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => "<div class='side-widget'>",
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after-title' => '</h3>'
	));
}

add_action('widgets_init', 'init_widgets');