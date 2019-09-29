<?php

/**
 *
 */
class View {

    public function render($name) {
       
        global $app;
        require $app . 'views/' . $name . '.php';
        
    }
    public function js($name){
        global $app;
        require $app. 'views/'. $name. '.js';
    }


}


?>
