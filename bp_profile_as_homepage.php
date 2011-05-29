<?php
/*
Plugin Name: BP Profile as Homepage
Description: Logged in users will be redirected to their profile page if they try to move to HomePage anywhere within buddypress installation same as FACEBOOK do. And as the user logs out, he/she is redirected to homepage again. This is tested successfully with Wordpress 3.0 and Buddypress 1.2.5.
Author: Jatinder Pal Singh
Version: 0.4
Author URI: http://www.appinstore.com
*/
function bp_profile_homepage()
{
	global $bp;
	if(is_user_logged_in() && bp_is_front_page())
	{
			wp_redirect( $bp->loggedin_user->domain );
	}
}
function logout_redirection()
{
	global $bp;
	$redirect = $bp->root_domain;
	wp_logout_url( $redirect );	
}
add_filter('get_header','bp_profile_homepage',1);
add_action('wp_logout','logout_redirection');
?>