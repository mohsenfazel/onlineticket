<?php
include "constants.php";
include "Autoloader.php";
spl_autoload_register( 'Autoloader::autoload' );

function main_menu_ticket() {
	register_nav_menu( 'top-main-menu', 'ticket Main Menu' );
}

add_action( 'after_setup_theme', 'main_menu_ticket' );
\Application\Service\Router\Router::register();
