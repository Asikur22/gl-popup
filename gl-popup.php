<?php
/*
 * Plugin Name: GL PopUp
 * Plugin URI: https://greenlifeit.com/plugins
 * Description: Green Life PopUp
 * Author: Asiqur Rahman
 * Author URI: https://asique.net
 * Version: 1.0.0
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: gl-popup
 */

// Add PopUp HTML
function gl_popup_html() {
	include( plugin_dir_path( __FILE__ ) . 'popup.php' );
}

add_action( 'wp_footer', 'gl_popup_html' );

// Enqueue PopUp Assets
function gl_popup_enqueue_scripts() {
	wp_enqueue_style( 'gl-popup', plugins_url( 'assets/css/style.css', __FILE__ ) );
	wp_enqueue_script( 'js.cookie', plugins_url( 'assets/js/js.cookie.min.js', __FILE__ ), array(), '1.0', true );
	wp_enqueue_script( 'gl-popup', plugins_url( 'assets/js/script.js', __FILE__ ), array( 'js.cookie' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'gl_popup_enqueue_scripts' );
