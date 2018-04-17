<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.infinitescripts.com/plugin-name
 * @since      1.0.0
 *
 * @package    plugin_name
 * @subpackage plugin_name/public
 */

/**
 *
 * @since      1.0.0
 * @package    plugin_name
 * @subpackage plugin_name/public
 * @author     Kevin Greene <kevin@infinitescripts.com>
 */
class plugin_name_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_public_enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in plugin_name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The plugin_name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_public_enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in plugin_name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The plugin_name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

	public function plugin_name_add_admin_menu(  ) { 

		/**
		* This funcion adds the menu item and register the page with Wordpress
		**/

		add_options_page( 'plugin name', 'plugin name', 'manage_options', 'plugin_name_settings', 'plugin_name_options_page' );

	}

	public function plugin_name_reports(){

		/**
		* This funcion adds the menu item and register the page with Wordpress
		**/

		add_menu_page('Login Reports', 'Login Reports', 'manage_options', 'plugin_name_reports', 'plugin_name_report_page_render');
	}
		/** 
		* This function registers the settings to keep the APi key
		**/

	public function plugin_name_settings_init(  ) { 

		register_setting( 'pluginPage', 'plugin_name_settings' );

		add_settings_section(
			'plugin_name_pluginPage_section', 
			__( 'API Keys', 'plugin_name' ), 
			'plugin_name_settings_section_callback', 
			'pluginPage'
		);

		
	}
}