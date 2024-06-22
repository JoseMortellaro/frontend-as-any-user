<?php
/*
Plugin Name: Frontend As Any User
Description: After activation even if you are logged in, you will see the website as any unlogged users. No settings for this plugin.
Author: Jose Mortellaro
Author URI: https://josemortellaro.com/
Text Domain: frontend-as-any-user
Domain Path: /languages/
Version: 0.0.4
*/
/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/
defined( 'ABSPATH' ) || exit;

if(
	!is_admin()
	&& !function_exists('wp_parse_auth_cookie')
	&& !defined( 'DOING_AJAX' )
	&& !defined( 'DOING_CRON' )
	&& !isset( $_REQUEST['eos_dp_preview'] )
	&& !isset( $_REQUEST['preview'] )
	&& !isset( $_REQUEST['customize_changeset_uuid'] )
	&& !isset( $_REQUEST['customize_theme'] )
	&& !isset( $_REQUEST['post'] )
	&& !isset( $_REQUEST['action'] )
	&& !isset( $_REQUEST['wc-ajax'] )
	&& !isset( $_REQUEST['_locale'] )
	&& !isset( $_REQUEST['elementor-preview'] )
	&& !isset( $_REQUEST['elementor_library'] )
	&& !( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'] ) && 'xmlhttprequest' === strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) )
	&& false === strpos( $_SERVER['REQUEST_URI'],'/wp-json/' )
){
	if( !function_exists( 'is_user_logged_in' ) ){
		function is_user_logged_in() {
			return false;
		}
	}
	function wp_parse_auth_cookie( $cookie = '',$scheme = '') {
		return false;
	}
	add_filter( 'show_admin_bar', '__return_false' );
	add_filter( 'get_edit_post_link','__return_false' );
}
