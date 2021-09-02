<?php

/**
 * Fired during plugin activation
 *
 * @link       x
 * @since      1.0.0
 *
 * @package    Xss
 * @subpackage Xss/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Xss
 * @subpackage Xss/includes
 * @author     xss <x>
 */
class Xss_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		$sql = "CREATE TABLE `wp_xss_message` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`name` text NOT NULL,
			`email` text NOT NULL,
			`message` text NOT NULL,
			PRIMARY KEY (`id`)
		  )  $charset_collate;";
	
		dbDelta( $sql );
	}

}
