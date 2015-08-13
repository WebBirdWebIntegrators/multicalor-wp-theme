<?php

add_action('wp_enqueue_scripts' , 'webbird_parent_scripts');

function webbird_parent_scripts() {
	
	wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'webbird-styles' );
}

add_action('wp_enqueue_scripts' , 'eagle_child_scripts');

function eagle_child_scripts() {	
	wp_register_style( 'webbird-child-styles' , get_stylesheet_directory_uri() . '/css/styles.css' );
	wp_enqueue_style( 'webbird-child-styles' );
}

$result = add_role( 'supplier', __(
 
'Supplier' ),
 
array(
 
'read' => true, // true allows this capability 
)
 
);

?>