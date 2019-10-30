<?php

/*
Plugin Name: Gav’s Blog Gutenwidth
Plugin URI: https://github.com/Gavdsc/gb-gutenwidth
Description: Remove width restriction on Gutenberg editor
Version: 1.0
Author: Gav de Ste Croix
Author URI: https://www.gavsblog.com
*/

// Create Class
class gb_gutenwidth {

    // Constructor
    public function __construct() {
    	add_action('admin_head', array($this, 'gb_gutenwidth_admin_styles'));
    }

    // Add styles to the admin head
	public function gb_gutenwidth_admin_styles() {
		echo '
			<style>
				/* Main column width */
				.wp-block {
				    max-width: 720px;
				}
				 
				/* Width of "wide" blocks */
				.wp-block[data-align="wide"] {
				    max-width: 1080px;
				}
				 
				/* Width of "full-wide" blocks */
				.wp-block[data-align="full"] {
				    max-width: none;
				}	
			</style>
		';
	}

}

new gb_gutenwidth();

?>