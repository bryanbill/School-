<?php

class Logout extends Main{
    function __construct() {
        parent::__construct();
        Session::destroy();
        header('location: login');
    }
}

