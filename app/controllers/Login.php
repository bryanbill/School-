<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author BRYAN
 */
class Login extends Main {

    function __construct() {
        parent::__construct();
        $this->view->render('blocks/header/login_header');
        $this->view->render('login/login');
      
     
    }

    public function loginDo() {
        $this->model->loginDo();
    }

}
