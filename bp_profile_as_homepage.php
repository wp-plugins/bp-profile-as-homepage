<?php
/*
Plugin Name: BP Profile as Homepage
Description: Logged in users will be redirected to their profile page if they try to move to HomePage anywhere within buddypress installation same as FACEBOOK do.  This is tested successfully with Wordpress 3.0 and Buddypress 1.2.5.
Author: Jatinder Pal Singh
Version: 0.1
Author URI: http://jpsblog.co.cc
*/

function bp_profile_homepage()
{
	global $bp;
	if(is_user_logged_in() && $_SERVER['REQUEST_URI']=='/')
	{
			wp_redirect( $bp->loggedin_user->domain );
	}
}
add_filter('get_header','bp_profile_homepage',1);
?>
