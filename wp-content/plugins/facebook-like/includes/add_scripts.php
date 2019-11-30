<?php

function fbl_add_scripts() {
    wp_register_script('facebook', 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0');
    wp_enqueue_script('facebook');
}

add_action('wp_enqueue_scripts', 'fbl_add_scripts');