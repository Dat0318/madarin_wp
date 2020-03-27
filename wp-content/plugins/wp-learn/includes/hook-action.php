<?php 
	// Ham bo sung chu freetuts.net vao chuoi
function send_email_public($id, $post) {
	if ($post->post_status == 'public') {
		// Thuc hien gui email
		// Vi day la vi du nen minh khong gui email
	}
}
// Dua ham add_string_to_title vao hook filter the_title
add_action('save_post', 'send_email_public', 11, 2);

?>