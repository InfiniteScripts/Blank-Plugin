<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.infinitescripts.com
 * @since      1.0.0
 *
 * @package    plugin_name
 * @subpackage plugin_name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    plugin_name
 * @subpackage plugin_name/admin
 * @author     Kevin Greene <kevin@infinitescripts.com>
 */
class plugin_name_admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name   The ID of this plugin.
	 */
	private $plugin_name = "Plugin Name";

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version = "1.0.0";

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_admin_enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in plugin_name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The plugin_name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_admin_enqueue_scripts() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in plugin_name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The plugin_name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}

	
