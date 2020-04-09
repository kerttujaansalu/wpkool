<?php
/*
Plugin Name: My First plugin
Plugin URI: http://jaansalukerttu.ikt.khk.ee/wordpress/
Description: This is my first WordPress Plugin
Author: Kerttu Jaansalu
Author URI: http://jaansalukerttu.ikt.khk.ee/wordpress/
Version: 1.0
*/

function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );