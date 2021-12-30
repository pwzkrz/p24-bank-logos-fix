<?php 
/*
Plugin Name: Przelewy24 bank logos fix
Plugin URI: https://evision.pl
Description: Fix dla zle wyswietlajacych sie ikon banku we wtyczce Przelewy24 dla woocommerce. Rozwiązanie doraźne.
Version: 0.0.1
Author: Pawel Zakrzewski
Author URI: https://evision.pl
Text Domain: pblf
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}