<?php
	function rtcamp2_resources()
	{
		wp_enqueue_style('style',get_stylesheet_uri() . "style.css" );
	}
	add_action('wp_enqueue_scripts','rtcamp2_resources');
?>