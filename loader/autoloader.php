<?php

/**
 *
 */
class Bootstrap {

    function __construct() {
        require('loader/bootstrap.php');

        $url = $_GET['url'];
        $url = rtrim($url, '/');

        $url = explode('/', $url);

        $file = $app . 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            throw new Exception('Error Processing Request: file' . $file . 'Doesnt exist', 1);
        }



        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}


