<?php

class Profile extends Main{
    function __construct() {
        parent::__construct();
        
        $this->view->render('blocks/header/header');
        $this->view->render('blocks/header/navbar');
        $this->view->render('profile/profile');
        $this->view->render('blocks/footer/footer');
        $this->view->render('blocks/footer/jscripts');
    }
}