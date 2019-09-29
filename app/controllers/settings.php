<?php
/**
 *
 */
class Settings extends Main
{

  function Index()
  {
    parent::__construct();
    $this->view->render('settings');
    return false;
  }

  public function Sub(){
    $this->view->render('error');
  }

}



 ?>
