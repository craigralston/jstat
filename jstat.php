<?php
/*
Plugin Name: jStat
Plugin URI: http://www.ramoonus.nl/wordpress/jstat/
Description: This plugin installs jStat and required jQuery plugins to your installation.
Version: 1.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
// Install jStat
function jstat() {
		wp_deregister_script('jstat'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('jstat', plugins_url('/js/jstat-0.1.0.min.js', __FILE__), array("flot"), '0.1.0');
		wp_enqueue_script('jstat'); 		// load jStat
		// and CSS
		wp_deregister_style('jquery-aristo'); // deregister
		wp_register_style('jquery-aristo', plugins_url('/css/jquery.aristo.css', __FILE__), false, '0.1.0'); // re register
		wp_enqueue_style('jquery-aristo'); // load
}
// load
add_action('init', 'jstat');
?>