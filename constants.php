<?php

//it should be defined in the beginning of functions file.
define('WPX_DIR',get_template_directory()); //return path from root to where file is executed.
define('WPX_VIEWS',WPX_DIR.'/views/'); //return path of the views directory.
define('WPX_URL',get_template_directory_uri());//return path Url
define( 'WPX_CSS_URL', WPX_URL.'/assets/css/' );
define( 'WPX_JS_URL', WPX_URL.'/assets/js/' );
define( 'WPX_IMAGES_URL', WPX_URL.'/assets/images/' );
define( 'WPX_IMG_URL', WPX_URL.'/assets/img/' );//images belongs to framework. img belongs to us



