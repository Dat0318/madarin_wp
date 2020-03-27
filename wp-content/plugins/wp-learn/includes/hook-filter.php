<?php 
	// Ham bo sung chu frestuts.net vao chuoi
function add_string_to_title($title) {
	return 'freetuts.net - '.$title;
}
// Dua ham add_string_to_title vao hook filter the_title
add_filter('the_title', 'add_string_to_title', 10, 1);

function the_title_detail() {
	$title = 'Noi dung lay tu CSDL.';
	// Vi bo sung ham callback add_string_to_title nen luc nay ta phai duyet title truoc khi tra ve
	$title = add_string_to_title($title);
	// Tra ve
	return $title;
}
// Luc nay ta dung ham add_filter de bo sung ham callback add_string_to_title vao the_title thi no se hoat dong nhu dang sau:

?>
