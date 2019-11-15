<?php


class Bootstrap {

    function __construct() {
       
        global $app;
        global $controller;
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');

        $url = explode('/', $url);

        if (Session::get('loggedIn') == true) {
            if (empty($url[0])) {
                global $app;
                require $app . 'controllers/index.php/index';
                $controller = new Index();
                return false;
            }
        } else {
            if (empty($url[0])) {
                global $app;
                require $app . 'controllers/login.php';
                $controller = new Login();
                return false;
            }
        }

        $file = $app . 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            global $app;
            require $app . 'controllers/error.php';
            $controller = new Exc();
            return false;
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
           
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
                return false;
            } else {
                global $app;
                require $app . 'controllers/error.php';
            }
           
        } 
         
        
    }
    
}


?>
