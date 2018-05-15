<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: HC Welcome
Plugin URI:
Description:
Author:
Version:
Author URI:
Text Domain:
*/
add_action('admin_head', 'hc_welcome_css');
add_action('admin_notices', 'hc_welcome_text');

// This just echoes the chosen line, we'll position it later
function hc_welcome_text()
{
    $current_user = wp_get_current_user();
    echo "<p id='hc-welcome'>Welcome on board! $current_user->user_firstname $current_user->user_lastname</p>";
}

// We need some CSS to position the paragraph
function hc_welcome_css()
{
    // This makes sure that the positioning is also good for right-to-left languages
    $x = is_rtl() ? 'left' : 'right';

    echo "
	<style type='text/css'>
	#hc-welcome {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}



