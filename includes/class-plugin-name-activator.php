<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.infinitescripts.com/plugin-name
 * @since      1.0.0
 *
 * @package    plugin_name
 * @subpackage plugin_name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    plugin_name
 * @subpackage plugin_name/includes
 * @author     Kevin Greene <kevin@infinitescripts.com>
 */
class plugin_name_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		global $wpdb;

		/* Lets add the table to store login data */
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'plugin_name';

		$sql = "CREATE TABLE $table_name (
			
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

}
