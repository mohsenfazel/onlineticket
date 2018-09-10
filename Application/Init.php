<?php

namespace Application;

class Init {
	public static function theme_setup() {
		add_theme_support( 'title-tag' );

		//add theme support
		add_theme_support( 'post-thumbnails' );
//	    add dynamic menu
		register_nav_menu( 'top-main-menu', 'ticket Main Menu' );

		//add image size
		add_image_size( 'slider-info', 258, 344, true );
		add_image_size( 'banner-bottom-middle', 350, 197, true );
		add_image_size( 'td-grids', 81, 81, true );
		add_image_size( 'nbs-flexisel-inner', 267, 151, true );
	}

}