<?php
/**
 * Extracted from the developer docs from Envira Gallery Website
 * Plugin Name: Envira Gallery - Whitelabel 
 * Plugin URI:  https://github.com/buddhikaperera/white-label-envira-gallery-wordpress-plugin/
 * Description: A plugin to remove Envira Branding on the WordPress Dashboard
 * Author:      Buddhika Perera
 * Author URI:  https://www.buddhikaperera.com
 * Version:     1.2
 * Text Domain: envira-gallery-whitelabel
 * Domain Path: languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

add_filter( 'twpm_envira_whitelabel', '__return_true' );
 
if ( apply_filters('twpm_envira_whitelabel', false )  ):
 
    add_filter( 'twpm_envira_whitelabel_name',           'example_envira_whitelabel_name' );
    add_filter( 'twpm_envira_whitelabel_name_singular',  'example_envira_whitelabel_name' );
    add_filter( 'twpm_envira_whitelabel_name_plural',    'example_envira_whitelabel_name_plural' );
    function example_envira_whitelabel_name() {
        return 'Image Gallery';
    }
    function example_envira_whitelabel_name_plural() {
        return 'Image Galleries';
    }
 
    // actions (Envira):
    // envira_whitelabel_header_logo
    // envira_whitelabel_default_display
    // envira_whitelabel_tab_text_images
    // envira_whitelabel_tab_text_config
    // envira_whitelabel_tab_text_lightbox
    // envira_whitelabel_tab_text_mobile
    // envira_whitelabel_tab_text_misc
 
    // filters (Albums):
    add_filter( 'envira_album_whitelabel_name',             'example_envira_album_whitelabel_name' );
    add_filter( 'envira_album_whitelabel_name_singular',    'example_envira_album_whitelabel_name' );
    add_filter( 'envira_album_whitelabel_name_plural',      'example_envira_album_whitelabel_name_plural' );
    function example_envira_album_whitelabel_name() {
        return 'Album';
    }
    function example_envira_album_whitelabel_name_plural() {
        return 'Albums';
    }
 
    // actions (Albums):
    // envira_album_whitelabel_text_available_galleries
    // envira_album_whitelabel_text_settings
    // envira_album_whitelabel_lightbox_settings
 
    // actions (Standalone):
    // envira_standalone_whitelabel_tab_helptext
 
    // actions (Addons):
    // envira_instagram_whitelabel_tab_helptext
    // envira_watermarking_whitelabel_tab_helptext
    // envira_tags_whitelabel_tab_helptext
    // envira_social_whitelabel_tab_helptext
    // envira_social_lightbox_whitelabel_tab_helptext
 
    // Example:
    function example_envira_instagram_whitelabel_tab_helptext() {
        echo 'custom text here';
    }   
    add_action( 'envira_instagram_whitelabel_tab_helptext', 'example_envira_instagram_whitelabel_tab_helptext' );
 
    // filters (Misc):
 
    // this filter controls if you want the addon menu displayed in WordPress backend (default false)
    add_filter( 'envira_whitelabel_addon_screen',   'example_envira_whitelabel_addon_screen' );
    function example_envira_whitelabel_addon_screen() {
        return true; // make this true if you want to show the addon screen when whitelabel is active
    }
 
endif;
