<?php
/*
Plugin Name: WP 3.9 Style Visual Editor Paste Function
Description: Restores the Paste function in the TinyMCE rich text editor to the way Wordpress 3.9 was. Well, almost.
Version: 1.0
Author: WPLobtar
Author URI: https://profiles.wordpress.org/wplobtar
*/
if (is_admin())
{
	add_filter('tiny_mce_before_init', 'tinymceRestoreWP39PasteStyle');
}
function tinymceRestoreWP39PasteStyle($init)
{
	$init['paste_webkit_styles'] = ''; 
	
	$ext = 'a[onClick|onclick|class|style|href|rel]';
	
	if (isset($init['extended_valid_elements'])) 
	{
		$init['extended_valid_elements'] .= ',' . $ext;
	} 
	else 
	{
		$init['extended_valid_elements'] = $ext;
	}
	return $init;
}

?>