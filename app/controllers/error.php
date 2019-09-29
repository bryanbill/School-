<?php

/**
 *Error page
 */
 Class Exc extends Main
 {

   function __construct()
   {
     parent::__construct();
     $this->view->render('error/error');
   }
 }

 ?>
