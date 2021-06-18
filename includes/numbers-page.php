<?php
/*
    Name: Numbers Page Admin Dashboard
*/


// Shortcode to show numbers page at the admin panel
add_action( 'admin_menu', 'register_newpage' );

function register_newpage(){
    add_menu_page( 'numbers page', 'numbers page', 'manage_options', 'show-number-plugin/includes/number-post-sorting.php', '');
}