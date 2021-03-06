<?php
/**
 * Menus
 *
 * Adds new menus.
 *
 * @package CodeBox
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds the menu and inits assets loading for it.
 *
 * @since 1.1.0
 */
function codebox_admin_menu() {
	$page = add_menu_page(
		'CodeBox',
		'CodeBox',
		'manage_options',
		'codebox',
		function () {
			require_once CODEBOX_DIR . 'src/templates/codebox.php';
		},
		'dashicons-laptop'
	);

	add_action( 'load-' . $page, [ 'CodeBox_Menu_Assets', 'init' ] );
}
