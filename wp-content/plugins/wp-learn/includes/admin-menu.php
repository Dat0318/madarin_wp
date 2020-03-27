<?php 
	function add_admin_menu() {
		add_menu_page(
			'Plugin Options',
			'Plugin Options',
			'manage_options',
			'plugin-options',
			'show_plugin_options',
			'',
			'2'
		);
	}

	function show_plugin_options() {
		echo "<h1> Day la trang Plugin Options </h1>";
	}

	add_action('admin_menu', 'add_admin_menu');

	function add_admin_submenu() {
		add_submenu_page ('plugin-options', 'General Settings',  'General Settings', 'manage_options', 'plugin-options-general-settings' , 'show_general_setting_page');
		add_submenu_page ('plugin-options', 'Advanced Settings',  'Advanced Settings', 'manage_options', 'plugin-options-advanced-settings' , 'show_advanced_setting_page');
	}

	function show_general_setting_page() {
		echo "<h1>Day la trang Plugin Option - General Setiings</h1>";
	}

	function show_advanced_setting_page() {
		echo "<h1>Day la trang lgugin option - Advanced Setiings</h1>";
	}

	add_action('admin_menu', 'add_admin_submenu');

	function remove_menu() {
		remove_menu_page('themes.php');
	}

	// add_action('admin_menu', 'remove_menu');

	function remove_submenu() {
		remove_submenu_page('users.php', 'user-new.php');
	}

	// add_action('admin_menu', 'remove_submenu');

	// Mot so ham su ky admin menu khac
	// add_dashboard_page()
	// add_posts_page()
	// add_media_page()
	// add_pages_page()
	// add_comments_page()
	// add_theme_page()
	// add_plugind_page()
	// add_management_page()
	// add_options_page()
	

 ?>