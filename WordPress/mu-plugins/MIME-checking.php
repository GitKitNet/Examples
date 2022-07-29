<?php

/*
Plugin Name: Custom Hooks Plugin
Plugin URI: 
Description: The following goes in a themes functions file or a custom hooks plugin
Version: 1.0
Author: Yurii Z
*/

function so_387865_custom_upload_mimes ( $existing_mimes ) {
    $existing_mimes['epub'] = 'application/epub+zip';
    $existing_mimes['mobi'] = 'application/x-mobipocket-ebook';
    $existing_mimes['ai'] = 'application/postscript';
    $mimes['eps'] = 'application/postscript';
    
    // Remove a mime type
    unset( $existing_mimes['exe'] ); // Remove .xlsx extension
    unset( $existing_mimes['json'] ); // Remove .xlsx extension
 
    return $existing_mimes;
}
 
add_filter('upload_mimes', 'so_387865_custom_upload_mimes');
