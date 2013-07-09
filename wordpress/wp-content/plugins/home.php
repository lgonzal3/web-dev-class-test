<?php
/*
Plugin Name: Home Cleaning Portfolio
Plugin URI: 
Description: A custom post type to fit the Home Cleaning Portfolio
Version: 1.0
Author: Luis Gonzalez
Author URI: http://www.luisogonzalez.com
License: GPL2
*/

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'Home_Cleaning',
		array(
			'labels' => array(
				'name' => __( 'Homes' ),
				'singular_name' => __( 'Home' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}














?>