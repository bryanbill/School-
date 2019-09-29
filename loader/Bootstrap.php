<?php
 
require ('date_loader.php');

require ('path_loader.php');

require ('assets_loader.php');

require ('prop_loader.php');

require ('main_controller.php');

require ('view_loader.php');

require ('model_loader.php');

require ('Database.php');

require ('proper_nouns.php');

require ('Plugin/lib/FroalaEditor.php');

require ('session.php');
require (SYSTEM.'page.php');

$controller_dir = $app . 'controllers/';
$view_dir = $app . 'views';
$model_dir = $app . 'model';
$compile_dir = $debug . 'tmp';


define('VIEW', $view_dir);
define('MODEL', $model_dir);
define('COMPILE', $compile_dir);


?>
