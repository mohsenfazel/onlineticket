<?php
include "constants.php";
include "Autoloader.php";
spl_autoload_register('Autoloader::autoload');
add_action('init','Application\Content\PostTypes\WpxPostTypes::init');
add_action( 'after_setup_theme', 'Application\Init::theme_setup' );
add_filter( 'show_admin_bar', '__return_false' );
