<?php 
/* 
Plugin Name: Unique ID 
Plugin URI: https://incsub.com/ 
Description: Plugin to create unique user ID 
Version: 1.0 
Author: Murphy Elo 
Author URI: https://diawave.com/ 
License: GPLv2 or later 
Text Domain: tutsplus 
*/ 
function unique_current_user_id( $atts, $content ) { 
if ( is_user_logged_in() ) { 
$id = get_current_user_id(); 
return 'Customer ID is: '.$id; 
} 
} 
add_shortcode('customer-id', 'unique_current_user_id');
