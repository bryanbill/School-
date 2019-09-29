<?php

//$url = $_GET['url'];
//$url = explode('/', $url);

$default = 'C:/Programmer/Ampps/www/Therapy/';

$sys_path = $default . 'sys/';
$temp_path = $sys_path . 'smarty/';
$app = $default . 'app/';
$debug = $default . 'debug/';
$assets = $default . 'assets/';
$assets_css = 'http://localhost/therapy/assets/css/';
$assets_js = 'http://localhost/therapy/assets/js/';
$image_data = $assets.'images/';
$images = 'http://localhost/therapy/assets/images/';

define('SYSTEM', $sys_path);
define('DEBUG', $debug);
define('ASSETS', $assets);
define('ASSETS_CSS', $assets_css);
define('ASSETS_JS', $assets_js);
define('IMAGES', 'http://localhost/therapy/assets/images/');

        

?>
