<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author BRYAN
 */
class login_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function loginDo() {
        $sth = $this->db->prepare("SELECT * FROM users WHERE"
                . " email = :login AND pass = :password");
        $sth->execute(array(
            ':login' => $_POST['userid'],
            ':password' => $_POST['pass']
        ));
        
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('userid', $data['userid']);  
            Session::set('email', $data['Email']);
            Session::set('loggedIn', true);
            header('location: ../index/index');
            exit();
        } else {
            echo "Couldnt Login";
           header('location: ../login');
           exit();
        }
       
    }

}
