<?php


    /*
    Plugin Name: Hide Style Woocomerce 
    Description: Hide comments fields Woocomerce
    Author : Isaias Gonzalez Rivera
    Version : 1.0
    
    */
	
function hide_plugin_note() {
    
    echo '<<style type="text/css">#order_comments_field{
        display:none;
        }</style> ';
    
}

add_action('wp_footer', 'hide_plugin_note', 100);


?>