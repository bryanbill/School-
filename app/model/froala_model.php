<?php

class froala_model extends Model {

    function __construct() {
        parent::__construct();
       
    }

    public function xhrFroalaRun() {
        $userid = $_SESSION['userid'];
        $office = $_POST['office'];
        $title = $_POST['title'];
        $sth = $this->db->prepare("INSERT INTO Office (userid,Content, title) VALUES ('$userid', :office, '$title')");
        $sth->execute([':office' => $office]);        
    }
    public function xhrFroalaUpdate() {
        $userid = $_SESSION['userid'];
        $office = $_POST['office'];
  
        $sth = $this->db->prepare("UPDATE Office SET Content=:ofFice WHERE userid='$userid'");
        $sth->execute([':office' => $office]);        
    }
    public function getData(){
        $id = $_SESSION['userid'];
        $sth = $this->db->prepare("SELECT * FROM Office WHERE userid='$id'");
        $sth->execute();
        $count = $sth->rowCount();
        if($count >0){
            define('TABLE_HEAD', 'true');
        }
        else{
            define('TABLE_HEAD', 'false');
        }
        return $sth->fetchAll();
    }
    public function delete($title){
        $sth = $this->db->prepare("DELETE FROM Office WHERE title = :title");
        $sth->execute([':title' => $title]);
        echo "DOCUMENT $title HAS BEEN DELETED SUCCESSFULLY! <a href='../index'>EDITOR</a>";
    }
    public function view($title){
         $sth = $this->db->prepare("SELECT Content FROM Office WHERE title = :title");
         $sth->execute([':title' => $title]);
         $data = $sth->fetch();
         
         return $data;
         
    }

}
