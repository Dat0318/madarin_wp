<?php 
	// add_option
	// add_option( 'myhack_extraction_length', '255', '', 'yes' );
	// die();
	// add_option('mailer_gmail_username', 'thehalfheart@gmail.com');
	// add_option('mailer_gmail_password', '@password');
	// 
	// // Ham get_option
	// echo get_option('mailer_gmail_username');

	// Ham delete_option
	// delete_option('mailer_gmail_username');
	// Dung lenh var_dump thay vi echo vi luc nay la false
	// var_dump(get_option('mailer_gmail_username'));  

	// Dia de de nhin ket qua
	// die;

	// Ham update_option
	// echo get_option('mailer_gmail_password');

	// update_option('mailer_gmail_password', 'password@@1234');
	// echo "<br><br>";

	// echo get_option('mailer_gmail_password');

	// // Die de de nhin ket qua
	// die;
	

	// Ham bo sung menu con vao cot menu cha
	function add_submenu_options() {
		add_submenu_page(
			'themes.php', // menu cha
			'theme Options', // Tieu de cua menu
			'theme Options', // ten cua menu
			'manage_options', // vung truy cap, gia tri nay co y nghia chi co supper admin va admin duoc dung
			'theme-options', // Slug cua menu 
			'access_menu_options' // Ham callback hien thinoi dung cua menu
		);
	}

 // Ham su ky khi click vao menu
 	function access_menu_options() {
 		if (!empty($_POST['save-theme-option'])) {
 			$email = $_POST['email'];
 			$pass = $_POST['password'];
 			// Cap nhep neu he thong chua co thi tu dong them moi
 			update_option('mailer_gmail_username', $email);
 			update_option('mailer_gmail_password', $pass);
 		}
 		// Ly thong tin trong bang Options
 		$email = get_option('mailer_gmail_username');
 		$pass = get_option('mailer_gmail_password');
 		require ('template/theme-option.php');
 	}

 // Them hanh dong hien thu menu con voa Action admin_menu Hooks 
 	add_action('admin_menu', 'add_submenu_options');

 ?>