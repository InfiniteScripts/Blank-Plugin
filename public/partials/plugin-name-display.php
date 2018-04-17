<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://infinitescripts.com/plugin_name
 * @since      1.0.0
 *
 * @package    Plugin Name
 * @subpackage plugin_name/public/partials
 */


function plugin_name_options_page(  ) {
 
	?>
	<form action='options.php' method='post'>
		
		<h2>Plugin Name Settings</h2>
		
		<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
		?>
		
	</form>
	<?php

}


function plugin_name_settings_section_callback(  ) { 

	echo __( 'Words', 'plugin_name' );

}



 
