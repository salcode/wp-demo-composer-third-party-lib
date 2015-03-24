<?php
/*
 * Plugin Name: Demo Composer Autoload Third Party Library
 * Plugin URI:
 * Description: Demo Autoloading a Third Party Library with Composer by @salcode
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$loader = require 'vendor/autoload.php';

add_filter( 'the_content', 'fe_composer_third_party_output_disk_space', 15 );

function fe_composer_third_party_output_disk_space( $content ) {
	global $post;

	// we're using a hardcoded value for simplicity
	// in an actual plugin, this might come from get_post_meta()
	// or another function call
	$disk_space_in_bytes = '1123581322';

	if ( '' === $disk_space_in_bytes ) { return; }

	// the class ByteUnits\Binary is available because we've loaded it via Composer
	// convert the bytes to GiB with 2 decimal places
	$disk_space_in_gigabtyes = ByteUnits\Binary::bytes( $disk_space_in_bytes )->format('GiB/2');

	$pre_content = '<div class="alert alert-info">';
	$pre_content .= "Bytes: {$disk_space_in_bytes} (approximately {$disk_space_in_gigabtyes})";
	$pre_content .= '</div>';

	return $pre_content . $content;
}
