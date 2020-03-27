<?php 
	/**
	Plugin Name: Learn WordPress
	Plugin URI: https://freetuts.net
	Description: Plugin dùng để học WordPress
	Author: Nguyễn Văn Cường
	Version: 1.0
	Author URI: https://freetuts.net
	*/
	require 'includes/hook-filter.php';
	require 'includes/hook-action.php';
	require 'includes/option-api.php';
	require 'includes/admin-menu.php';
	// require 'includes/my-meta-boxes.php';
	require 'includes/metabox-three-steps.php';
 ?>