<?php
/**
 * Plugin Name: Facebook Like Button
 * Plugin URI: https://github.com/BeingDeveloper96/fb_like_plugin
 * Author: Mansoor Khan
 * Author URI: https://github.com/BeingDeveloper96
 * Version: 1.0
 * Description: Provide a way to configure a Facebook Like and Share Button for your website.
 */

if(! defined('ABSPATH')) {
    exit('No Direct Access Allowed');
}

require_once(plugin_dir_path(__FILE__) . '/includes/add_scripts.php');
require_once(plugin_dir_path(__FILE__) . '/includes/FB_Widget.php');

function register_facebook_widget() {
    register_widget('FB_Widget');
}

add_action('widgets_init', 'register_facebook_widget');