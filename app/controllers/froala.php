<?php

/**
 * Description of froala
 *
 * @author BRYAN<bryanomondi254@gmail.com>
 */
class froala extends Main {

    public function index() {
        parent::__construct();
        if (Session::get('loggedIn') == true) {
        $this->view->render('blocks/header/editor');
        $this->view->render('blocks/header/navbar');
        $this->view->getData = $this->model->getData();
        $this->view->render('dashboard/froala/froala');

        $this->view->render('blocks/footer/editor_footer');
        }
 else {
            header('location: ../login');
 }
        
    }
   

    public function xhrFroalaRun() {
        $this->model->xhrFroalaRun();
    }

    public function edit($title) {
        $this->view->render('blocks/header/editor');
        $this->view->render('blocks/header/navbar');
        $this->view->edit = $this->model->view($title);
        $this->view->render('dashboard/froala/edit');
        $this->view->render('blocks/footer/editor_footer');
        $this->view->js('blocks/footer/Update');
        
       
    }

    public function delete($title) {
        $this->model->delete($title);
        
    }
    public function view($title){
       $this->view->display = $this->model->view($title);
       $this->view->render('blocks/header/editor');
       $this->view->render('dashboard/froala/data');
      
    }

}
