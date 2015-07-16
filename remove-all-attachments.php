<?php
/*
Plugin Name: Remove all attachments
Plugin URI: http://wordpress.org/plugins/remove-all-attachments/
Description: This plugin will add a button to add/edit post page in media buttons area. It is an additional function for <a href="https://wordpress.org/plugins/attachments/">attachments</a> plugin. It will remove all attachments for current post or page. 
Author: Dubbo Feng
Version: 1.0
Author URI: http://www.dubbofeng.com
*/

function add_remove_all_attachments_button($context) {

  //append the icon
  $html = "<a href='javascript:;' class='button add_media' id='remove_all_attachments'>
	  <span class='wp-media-buttons-icon'></span>
	  Remove all attachments
	  </a>
	  <script>jQuery('document').ready(function(){
	  	jQuery('#remove_all_attachments').click(function(){
	  		jQuery('.delete-attachment a').trigger('click');
	  	});
		});
	</script>";
  return $html;
}

add_action('media_buttons_context',  'add_remove_all_attachments_button');

?>