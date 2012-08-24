<?php
/*
Plugin Name: Downtown Grind Functionality
Author: Ryan Imel
Version: 1.0
*/


add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'dg_menuitem',
		array(
			'labels' => array(
				'name' => __( 'Menu Items' ),
				'singular_name' => __( 'Item' )
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'menu'),
		)
	);
}