<?php
/**
 * Plugin Name: Change Title to "Foo Bar"
 * Plugin URI:
 * Description: This plugin changes all titles to "Foo Bar".
 * Version: 1.0.0
 * Author: Brannon Crumpton
 * Author URI: http://bcrumpton.com
 */

add_filter('the_title', 'change_title_foobar');
function change_title_foobar($title) {
	return 'Foo Bar';
}
