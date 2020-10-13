<?php

/**
 * Load theme assets
 */
function wyvern_child_load_theme_assets() {
	// Load main CSS file
	wp_enqueue_style( 'wyvern-child-styles', get_stylesheet_directory_uri() . '/css/build/main.css', array( 'wyvern-styles' ), '1.0.0', 'all' );

	// Load main JS file
	wp_enqueue_script( 'wyvern-child-scripts', trailingslashit( get_stylesheet_directory_uri() ) . 'js/scripts.js', array( 'jquery', 'wyvern-scripts' ), NULL, true );
}
add_action( 'wp_enqueue_scripts', 'wyvern_child_load_theme_assets' );

/**
 * Load editor assets
 */
function wyvern_child_load_editor_assets() {

	// Load main CSS file
	add_editor_style( 'css/build/editor.css' );
}
add_action( 'enqueue_block_editor_assets', 'wyvern_child_load_editor_assets' );