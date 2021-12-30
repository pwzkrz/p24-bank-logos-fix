<?php 

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Define Constants
define('PBLF_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('PBLF_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));

//  Register JS

function pblf_register_core_js(){
wp_enqueue_script('pblf-core', PBLF_CORE_JS . 'pblf-core.js',array(),"0.0.1", true);
};
add_action( 'wp_enqueue_scripts', 'pblf_register_core_js' );    