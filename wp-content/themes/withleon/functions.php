<?php


if ( ! function_exists( 'withleon_setup' ) ) {
	function withleon_setup() {
		
        register_nav_menus(array(
            'primary'=> __('Primary Menu'),
            'footer'=> __('Footer Menu'),
        ));

		add_theme_support( 'post-thumbnails' );
		
	}
add_action( 'after_setup_theme', 'withleon_setup' );
}