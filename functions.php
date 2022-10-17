<?php

	
	//Basic Functions

	function site_basic_functions(){

		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('custom-header');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');



	}
	add_action('after_setup_theme', 'site_basic_functions');

?>