<?php

require 'files.php';
//instantiates the app

if (class_exists(Bootstrap)) {
    $therapy = new Bootstrap();  
    
}
 else {
   require 'app/views/error/missing_class.php';     
}


?>
