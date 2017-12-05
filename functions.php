<?php


function theme_styles() {
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', array(), null );

}

function theme_js() {

	global $wp_scripts;
	// jquery should always be the first in line
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js', array(), null);
	// connect to live reload
    wp_enqueue_script( 'live_reload_js', 'http://localhost:9000/socket/socket.io.js' , array(), null, true);
}

// add actions
add_action( 'wp_head', 'theme_styles');
add_action( 'wp_footer', 'theme_js');