<?php
include "constants.php";
include "Autoloader.php";
spl_autoload_register('Autoloader::autoload');
add_action('init','Application\Content\PostTypes\WpxPostTypes::init');

add_action('wp_enqueue_scripts','Application\Asset::load_assets'); /** define all css and javascripts in class Asset with two method */
