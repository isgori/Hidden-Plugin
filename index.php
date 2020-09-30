<?php


    /*
    Plugin Name: Hide Style Woocomerce 
    Description: Hide any object with ID
    Author : Isaias Gonzalez Rivera
    Version : 1.0
    
    */
	
/*function hide_plugin_note() {

  echo '<<style type="text/css">#order_comments_field{
        display:none;
        }</style> ';
}
*/

function hide_plugin_note($atts) {
    
    $args = shortcode_atts( array(
        'tag' => 'order_comments_field'
    ), $atts );
    
    echo '<<style type="text/css">#'.$args['tag'].'{
        display:none;
        }</style> ';
}

   add_shortcode('hide_plugin_note', 'hide_plugin_note');

?>