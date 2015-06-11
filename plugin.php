<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Album Review
 * Plugin URI:        http://www.andrew-ho.com
 * Description:       Album Review
 * Version:           1.0.0
 * Author:            Andrew Ho
 * Author URI:        http://author.com/
 * License:           MIT
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/getherbert/framework/bootstrap/autoload.php';

add_filter('wp_handle_upload_prefilter', 'custom_upload_filter' );

function custom_upload_filter( $file ){
	if ($file['type'] == 'image/jpeg') {
    	$file['name'] = 'wordpress-is-awesome-' . $file['name'];
    }
    return $file;
}