<?php
/*
    Name: Number Post Type
*/


// Hook <strong>lc_custom_post_custom_number()</strong> to the init action hook
add_action( 'init', 'custom_post_number' );
// The custom function to register a custom number post type
function custom_post_number() {
// Set the labels, this variable is used in the $args array
$labels = array(
    'name' => __( 'number' ),
    'singular_name' => __( 'number' ),
);


// The arguments for our post type, to be entered as parameter 2 of register_post_type()
$args = array(
    'labels' => $labels,
    'description' => 'Holds our custom number post data',
    'public'  => true,
    'menu_position' => 5,
    'supports'  => array( 'custom-fields' ),
    'has_archive' => true,
);

// Register post number
register_post_type( 'number', $args);
}