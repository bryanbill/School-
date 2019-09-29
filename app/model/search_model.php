<?php

/**
 * Description of search_model
 *
 * @author BRYAN<bryanomondi254@gmail.com>
 */
class search_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function searchDo() {
        $sth = $this->db->prepare("SELECT userid FROM users WHERE"
                . " email = :login AND pass = :password");
        $sth->execute(array(
            ':login' => $_POST['keyword'],
        ));
        $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {

            exit();
        } else {

            exit();
        }
        print_r($data);
    }

}
