<?php


    /*
    Plugin Name: Hide Style Woocomerce 
    Description: Hide comments fields Woocomerce
    Author : Isaias Gonzalez Rivera
    Version : 1.0
    
    */
	



function hide_plugin_note() {
        echo ' <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) { 
 var x = document.getElementsByClassName("woocommerce-additional-fields");
             x[0].style.display = "none"; 
                });'.'</script>';
}

add_filter('wp_footer', 'hide_plugin_note', 100);


?>