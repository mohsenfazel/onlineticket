<?php
include "constants.php";
include "Autoloader.php";
spl_autoload_register('Autoloader::autoload');
add_action('init','Application\Content\PostTypes\WpxPostTypes::init');