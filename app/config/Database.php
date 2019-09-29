<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author BRYAN
 */
class Database extends PDO{
    function __construct() {
        parent::__construct(new PDO('mysql:host=localhost;dbname=scaces','root','mysql'));
       }  
}
