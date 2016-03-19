<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bdd
 *
 * @author sophie
 */
class bdd {
    private $_server = "localhost";
    private $_dbName = "challengePoo"; /*nom de la db*/
    private $_dbUser = "adminsql";
    private $_dbMdp = "mdtsql";
    
    public $pdo;
    
    public function bdd() {
        $this->pdo = new PDO("mysql:host=$this->server;challengePoo=$this->_challengePoo",  $this->_dbUser, $this->_dbMdp);
        
                
        
    }
    
    
    
    
    
}
