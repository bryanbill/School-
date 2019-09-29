<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_loader
 *
 * @author BRYAN
 */
class Model {

    function __construct() {
        $this->db = new Database;
         Session::init();
    }

}
