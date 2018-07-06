<?php
/**
 * Created by PhpStorm.
 * User: setare
 * Date: 7/5/2018
 * Time: 7:02 PM
 */
//in the function file we need to write"include "Autoloader.php"
//in the function file we need to write "spl_autoload_register(Autoloader::autoload);
class Autoloader
{

    public static function autoload($class)
    {
        $classParts= explode('\\',$class);
        $className = implode('/',$classParts);
        $className = wpx_dir.DIRECTORY_SEPARATOR.$className.'.php';

//        var_dump($className);
//        exit();
        if (file_exists($className))
        {
            include_once $className;
        }

    }
}