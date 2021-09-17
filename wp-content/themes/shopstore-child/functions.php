<?php 

// Fetching parent styles
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    
    
}
// Creating my own css override
function my_custom_style() {
    wp_register_style('custom-styles', get_template_directory_uri(). 'override.css'); 
    wp_enqueue_style('custom-styles'); 

}
// Tar bort och lägger till action. Tar bort Thumbnail bilden på produktsidan. Init gör så att den sätts igång så snart sidan körs. 
add_action('init', 'remove_some_things');
function remove_some_things() {
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
}


 add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
 add_action('wp_enqueue_scripts', 'my_custom_style'); 