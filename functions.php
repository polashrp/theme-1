<?php

function theme_setup() {
	add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_enqueue_scripts() {
	global $wp_styles;

	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_style( 'theme-ie-8', get_template_directory_uri() . 'assets/css/ie8.css'  );
	$wp_styles->add_data('theme-ie-8', 'conditional', 'lt IE 8');

	wp_enqueue_style( 'theme-ie-9', get_template_directory_uri() . 'assets/css/ie9.css'  );
	$wp_styles->add_data('theme-ie-9', 'conditional', 'lt IE 9');


	wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'theme-util', get_template_directory_uri() . '/assets/js/util.js', array(), '1.0.0', true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery','skel','theme-util'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function theme_enqueue_ie_scripts() {
	?>
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<?php
}
add_action('wp_head', 'theme_enqueue_ie_scripts');