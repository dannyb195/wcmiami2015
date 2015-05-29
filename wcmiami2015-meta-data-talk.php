<?php
/**
 * Plugin Name: WCMIAMI 2015 demo functions
 * Plugin URI:
 * Description: WCMIAMI 2015 demo functions, requires Alley Interactive's Field Manager
 * Author: Dan Beil
 * Author URI:
 * Version: 0.1
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( defined( 'FM_VERSION' ) ) {
	define( 'WCMIAMI2015_BASE_DIR', dirname( __FILE__ ) );
	require_once( WCMIAMI2015_BASE_DIR . '/inc/post-types/class-post-type-sections.php' );
	require_once( WCMIAMI2015_BASE_DIR . '/inc/class-wcmiami-menu.php' );

	function WCMIAMI_2015_styles() {
		wp_enqueue_style( 'wcmiami-menu-styles',  plugins_url( '/styles/menu-styles.css', __FILE__ ) );
	}
	add_action( 'wp_enqueue_scripts', 'WCMIAMI_2015_styles' );
}