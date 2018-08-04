<?php
/**
 * Created by PhpStorm.
 * User: yek
 * Date: 8/3/2018
 * Time: 1:05 PM
 */

namespace Application;


class Asset
{
    public static function load_assets()
    {
        self::register_styles();
        self::register_scripts();
        
    }
    
    private static function register_styles()
    {
        wp_register_style('wpx_main_css',wpx_css_url.'main.css');
        wp_enqueue_style('wpx_main_css');

}

    private static function register_scripts()
    {
        wp_register_script('wpx_main_js',wpx_js_url.'main.js',['jquery']); //depend on jequery

        wp_enqueue_script('wpx_main_js');
    }
}