<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author BRYAN
 */
class Admin extends Main {
    function Admin() {
        parent::__construct();
        //
        $this->view->render('backend/index');
    }
}
