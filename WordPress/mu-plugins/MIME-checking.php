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
 
    return $existing_mimes;
}
 
add_filter('upload_mimes', 'so_387865_custom_upload_mimes');
