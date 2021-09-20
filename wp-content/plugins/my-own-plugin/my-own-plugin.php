<?php
/**
 * Plugin Name: My own plugin
 * Plugin URI: http://www.medieinstitutet.se
 * Description: My own plugin for Labb2
 * Version: 1.0
 * Author: Agnes-Cecilia Bergqvist
 */

function my_own_plugin($content) {
  
         $signature = "<a>Want 10% off next order? (My own plugin)</a>" ;
   
         if ( is_singular() || in_the_loop() || is_main_query()) { 
         
       // This is a single post 
                 $content = $content.$signature;
    }
      
         
    return $content;
 }
   
 add_filter('the_content','my_own_plugin');