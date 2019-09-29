<?php

class Index extends Main {

    function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedIn') == true) {
            $this->view->render('blocks/header/dashboard_h');
            $this->view->render('blocks/sidebar/sidebar_h');
            $this->view->render('blocks/header/navbar_h');
            
        } else {
            header('location: login');
        }
    }
    public function index(){
        $this->view->render('blocks/graphs/general_graph');
        $this->view->render('dashboard/index');   
    }
    public function getGraphData(){
        
    }
    public function getUserData(){
        
    }
    public function getTotalStudents(){
        
    }
    
    public function profileStudent(){
        $this->view->render('dashboard/profile');
    }
    public function profileTeacher(){
          $this->view->render('dashboard/profile');
    }
    public function profilePrincipal(){
         $this->view->render('dashboard/profile');
    }
    public function profileDoS(){
         $this->view->render('dashboard/profile');
    }
    public function reports(){
        
        $this->view->render('dashboard/reports');
        
    }
    public function management(){
         $this->view->render('dashboard/management');
    }
    public function systemTools(){
         $this->view->render('dashboard/management');
    }
    public function backupReset(){
         $this->view->render('dashboard/management');
    }
    public function help(){
         $this->view->render('dashboard/management');
    }
    
 

}
