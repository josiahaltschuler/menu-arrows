<?php
/**
 * Plugin Name: Menu Arrows
 * Plugin URI: http://awcdev.com
 * Description: This plugin adds arrow indicators to menu items that have sub-menus.
 * Version: 1.0.0
 * Author: Josiah Altschuler
 * Author URI: http://awcdev.com
 * License: GPL2
 */

function add_menu_arrows() {	
	wp_enqueue_style( 'menu-arrows', plugin_dir_url(__FILE__) . 'css/style.css' );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', plugin_dir_url(__FILE__) . '/genericons/genericons.css', array(), '3.4.1' );
}
add_action( 'wp_enqueue_scripts', 'add_menu_arrows', 11 );