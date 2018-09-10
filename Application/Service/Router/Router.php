<?php
/**
 * Created by PhpStorm.
 * User: hassan
 * Date: 4/22/2018
 * Time: 6:27 PM
 */

namespace Application\Service\Router;


class Router {

	public static function register() {
		$route=self::getCurrentRoute();
		if (self::getRouteTarget($route))
		{
			$target=self::getRouteTarget($route);
			call_user_func($target);
			exit;
		}

	}

	public static function getCurrentRoute() {
		return strtok($_SERVER['REQUEST_URI'],'?');
	}

	public static function getRouteTarget( $route ) {
		$routes = include "routes.php";
		if ( array_key_exists( $route, $routes ) )
		{
			return $routes[$route];
		}
		return null;
	}

}