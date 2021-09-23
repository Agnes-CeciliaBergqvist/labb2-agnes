<?php 

// Fetching parent styles
// Creating my own css override
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_register_style('custom-styles', get_stylesheet_directory_uri(). '/style/override.css'); //stylesheet används vid child style för att få fram det. 
    wp_enqueue_style('custom-styles', 15); 
    
    
}

// Tar bort och lägger till action. Tar bort Thumbnail bilden på produktsidan. Init gör så att den sätts igång så snart sidan körs. 
add_action('init', 'remove_some_things');
function remove_some_things() {
    if (is_shop()) {
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
    }
}

//Custom post type 
function custom_employees() {
 register_post_type('employees', [
 'public' => true,
 'show_in_rest' => true,
 'labels' => [
 'name' => 'Employees',
 'add_new_item' => 'Add New employee',
 'edit_item' => 'Edit employee',
 'all_items' => 'All employees',
 'singular_name' => 'employee',
 ],
 'supports' => ['thumbnail', 'title', 'editor']
 ]);
}

add_action('init', 'custom_employees');
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 