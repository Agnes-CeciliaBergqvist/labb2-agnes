<?php
/**
 * Plugin Name: My own plugin
 * Plugin URI: http://www.medieinstitutet.se
 * Description: My own plugin for Labb2
 * Version: 1.0
 * Author: Agnes-Cecilia Bergqvist
 */



function my_own_plugin( $content) {
    return $content = '<h1>Welcome to New Balance, this is my own plugin!</h1>';
    
    
}
add_action('the_content' , 'my_own_plugin');

