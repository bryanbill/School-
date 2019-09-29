<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Search extends Main{
    function __construct() {
        parent::__construct();
        $this->view->render('blocks/header/search_header');
        $this->view->render('search/search');
        
        
    }
    public function searchDo(){
       $this->model->searchDo();
       $this->view->render('search');
    }
    
}

