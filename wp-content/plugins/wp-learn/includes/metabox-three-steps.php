<?php 
	// Action tao metabox
	function create_metabox() {
		add_meta_box('link-media', 'Link Media', 'show_metabox', 'post', 'advanced', 'high');
	}

	// Ham show metabox
	function show_metabox() {
		// echo "Meta Box tai day";
		// Lay thong tin theo bai viet hien tai
		$link_download = get_post_meta($post->ID, 'post_link_download', true);
		$link_demo = get_post_meta($post->ID, 'post_link_demo', true);

		// Tao file security Hidden
		wp_nonce_field(basename(__FILE__), 'post_media_metabox');
?>
	<p>
		<input type="text" value="<?php echo $link_download; ?>" name="post_link_download" />Link Download
	</p>
	<p>
		<input type="text" value="<?php echo $link_demo; ?>" name="post_link_demo" />Link Demo
	</p>
<?php
	}
	// Bo sung ham create_metabox va action add_meta_boxes
	add_action('add_meta_boxes', 'create_metabox');

	// Ham luu thong tin metabox
	function save_metabox($post_id, $post) {
		// Kiem tra input hidden bao mat
		if (!wp_verify_nonce($_POST['post_media_metabox'], basename(__FILE__))) {
			return $post_id;
		}

		// Kiem tra xem du lieu co khong
		if (!isset($_POST['post_link_download']) || !isset($_POST['post_link_demo'])) {
			return $post_id;
		}

		// Neu auto save thi khong lam gi ca
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}

		// Vi metabox nay danh cho Post nen phai kiem tra co dung vay hay khong
		if ('post' != $post->post_type) {
			return $post_id;
		}

		// Toi day la moi thu Ok roi, ta bat dau luu thoi
		$link_download = (isset($_POST['post_link_download'])) ? $_POST['post_link_download'] : '';
		$link_demo = (isset($_POST['post_link_demo'])) ? $_POST['post_link_demo'] : '';

		// Cap nhap du lieu. Ham nay tao moi neu chu co trong 
		update_post_meta('$post_id', 'post_link_download', $link_download);
		update_post_meta('$post_id', 'post_link_demo', $link_demo);
	}

	add_action('save_post', 'save_metabox', 10, 2);

	// Xoa metabox khi xoa bai viet

	// Ham xoa metabox
	function delete_metabox($post_id) {
		delete_post_meta($post_id, 'post_link_download');
		delete_post_meta($post_id, 'post_link_demo');
	}

	// Them ham delete_metabox vao action xoa bai viet
	add_action('delete_post', 'delete_metabox', 10);

 ?>