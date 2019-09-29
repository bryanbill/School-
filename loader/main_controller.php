<?php


class Main {

    function __construct() {

        
        $start = microtime(TRUE);
        $this->view = new View();
        Session::init();
        global $start;
    
    
    }

    public function loadModel($name) {
        global $app;
        $model_path = $app . 'model/' . $name . '_model.php';
        if (file_exists($model_path)) {
            require $app . 'model/' . $name . '_model.php';
            $modelName = $name.'_Model';
            $this->model = new $modelName;
        }
    }

}
