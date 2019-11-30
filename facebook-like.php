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

function fbl_admin_menu_info() {
    add_menu_page('Facebook Like Button', 'Facebook Like', 'manage_options', 'facebook-like-button', 'fbl_facebook_like_button', 'dashicons-facebook-alt', 20);
}
add_action('widgets_init', 'register_facebook_widget');
add_action('admin_menu', 'fbl_admin_menu_info');


function fbl_facebook_like_button() {
    ?>
    <div class="wrap">
        <h2>Facebook Like Button Configuration</h2>
    </div>
    <?php
}