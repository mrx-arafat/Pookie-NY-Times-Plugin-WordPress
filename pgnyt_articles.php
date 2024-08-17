<?php

/*
Plugin Name: Pookie NY Times Plugin
Plugin URI: https://arafatxeon.tech
Description: Provides both widgets and shortcodes to help you display NY Times articles on your website.
Version: 1.0
Author: Easin Arafat
Author URI: http://wvm.patrickgerrits.com
License: GPL2
*/

function pgnyt_articles_menu()
{
    add_options_page(
        'NY Times Articles Options',   // Page title
        'NY Times Articles',           // Menu title
        'manage_options',              // Capability required
        'pgnyt-articles',              // Menu slug
        'pgnyt_articles_options'       // Callback function to display the page content
    );
}

add_action('admin_menu', 'pgnyt_articles_menu');

function pgnyt_articles_options()
{
    // This function will display the options page content.
    echo '<div class="wrap">';
    echo '<h1>NY Times Articles Settings</h1>';
    echo '<p>Here you can set all the options for the NY Times articles plugin.</p>';
    echo '</div>';
}
