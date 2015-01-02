<?php
/*
Plugin Name: jStat
Plugin URI: http://www.ramoonus.nl/wordpress/jstat/
Description: This plugin installs jStat and required jQuery plugins to your installation.
Version: 1.0.10
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
// Install jStat
function jstat() {
		wp_deregister_script('jstat'); // deregister
		wp_enqueue_script('jstat', plugins_url('/js/jstat-0.1.0.min.js', __FILE__), array(6), '1.0.10');
}
// load
add_action('wp_enqueue_scripts', 'jstat');
?>