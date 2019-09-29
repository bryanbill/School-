<?php

/**
 * Description of Dashboard
 *
 * @author BRYAN<bryanomondi254@gmail.com>
 */
class Dashboard extends Main{
    function __construct() {
        parent::__construct();
        $this->view->render('blocks/header/dashboard_h');
        $this->view->render('Dashboard/index');
        $this->view->render('blocks/footer/dashboard_f');
    }   
}
