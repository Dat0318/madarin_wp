
<?php 
	function add_metabox() {
		add_meta_box('the-loai', 'Thể Loai', 'show_metabox_contain', 'post', 'advanced', 'high', array( 1, 2, 3));
	}

	function show_metabox_contain($post, $metabox) {
		// echo "Noi dung cua metabox";
		// input hidden
		wp_nonce_field(basename(__FILE__), 'meta-box-the-loai-nonce');
?>
	<select name="meta-box-the-loai">
		<?php 
			// Danh sach the loai
			$option_values = array('Video', 'Image', 'Text');

			// Lay thong tin trong database
			$the_loai  = get_post_meta($post -> ID, 'meta-box-the-loai', true);

			// Lap qua cac the loai va thiet lap selected
			foreach ($option_values as $key => $value) {
				if ($value == $the_loai) {
					?>
						<option selected="" value="<?php echo $value; ?>"><?php echo $value; ?></option>
					<?php
				} else {
					?>
						<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
					<?php
				}
			}
		 ?>
	</select>
<?php
	}

	add_action('add_meta_boxes', 'add_metabox');
	
	function save_metabox_data($post_id, $post, $update) {
		// Day chinh la input hidden Security ma ta da tao o ham show_metabox_contain
		if (isset($_POST['meta-box-the-loai']) || !wp_verify_nonce($_POST['meta-box-the-loai-nonce'], basename(__FILE__))) {
			return $post_id;
		}

		// Kiem tra quyen
		if (!get_current_user_can('edit_post', $post_id)) {
			return $post_id;
		}

		// Neu auto save thi khong lam gi ca
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}

		// Vi metabox nay danh cho Post nen ta phai kiem tra co dung vay khong
		if ('post' != $post ->post_type) {
			return $post_id;
		}

		// Lay thong tin tu client
		$metabox_the_loai = (isset($_POST['meta-box-the-loai'])) ? $_POST['meta-box-the-loai'] : '';

		// Cap nhap thong tin, ham nay se tao moi neu nhu trong db chua ton tai
		update_post_meta($post_id, 'meta-box-the-loai', $metabox_the_loai);
	}

	add_action('save_post', 'save_metabox_data', 10, 3);
?>
<?php
// 	function add_metabox()
// {
//     add_meta_box('the-loai', 'Thể Loại', 'show_metabox_contain', 'post', 'advanced', 'high', array(1, 2, 3));
// }
 
// function show_metabox_contain($post, $metabox)
// {
//   // echo "Nội dung của metabox";
// 	var_dump($post);
// 	echo "<br>";
// 	var_dump($metabox);
// }
 
// add_action('add_meta_boxes', 'add_metabox');
?>