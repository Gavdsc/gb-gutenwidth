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
				body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
					max-width: none !important;
				}
				.block-editor__container .wp-block {
					max-width: none !important;
				}		
			</style>
		';
	}

}

// Add a Global variable if you need to use outside of instantiated scope
Global $gb_gutenwidth;

// Instantiate
$gb_gutenwidth = new gb_gutenwidth();

?>