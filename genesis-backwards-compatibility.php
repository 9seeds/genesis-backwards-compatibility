<?php
/*
Plugin Name: Genesis Backwards Compatibility
Plugin URI: https://wordpress.org/plugins/genesis-backwards-compatibility/
Version: 0.2
Author: 9seeds
Author URI: https://9seeds.com/
Description: Restores functions removed from Genesis 3.0 for the sake of backwards compatibility with very old Genesis Child Themes

License: GNU General Public License v2.0 (or later)
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require __DIR__ . '/includes/genesis-v1.php';
require __DIR__ . '/includes/genesis-v2.php';
