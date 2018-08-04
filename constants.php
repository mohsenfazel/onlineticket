<?php
/**
 * Created by PhpStorm.
 * User: setare
 * Date: 7/5/2018
 * Time: 11:07 PM
 */

//it should be defined in the beginning of functions file.
define('wpx_dir',get_template_directory()); //return path from root to where file is executed.

define('wpx_url',get_template_directory_uri());//return path Url

define( 'wpx_css_url', wpx_url.'/assets/css/' );
define( 'wpx_js_url', wpx_url.'/assets/js/' );
define( 'wpx_images_url', wpx_url.'/assets/images/' );
define( 'wpx_img_url', wpx_url.'/assets/img/' );//images belongs to framework. img belongs to us



