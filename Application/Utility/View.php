<?php

namespace Application\Utility;


class View {
	public static function Load(string $path,array $params=null) {
		$rawPath=$path;
		$convertedPath=str_replace('.',DIRECTORY_SEPARATOR,$rawPath);
		$viewPath=WPX_VIEWS.$convertedPath.'.php';
		if(file_exists($viewPath)&& is_readable($viewPath)){
			include $viewPath;
		}

	}

}