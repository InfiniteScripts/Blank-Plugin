<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://www.infinitescripts.com/plugin-name
 * @since      1.0.0
 *
 * @package    plugin_name
 * @subpackage plugin_name/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    plugin_name
 * @subpackage plugin_name/includes
 * @author     Kevin Greene <kevin@infinitescripts.com>
 */
class Plugin_Name_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		global $wpdb;

		//We need to remove the database table we added
		$table_name = $wpdb->prefix . 'plugin_name';
    	$wpdb->query( "DROP TABLE IF EXISTS $table_name" );
    
	}

}
