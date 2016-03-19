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
    private $_dbMdp = "mdpsql";
    
    public $pdo;
    
    private $_tablePost;


    public function bdd() {
        $this->pdo = new PDO("mysql:host=$this->server;challengePoo=$this->_challengePoo",  $this->_dbUser, $this->_dbMdp);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        $this->_tablePost = 'tablePost';
                   
    }
    
    public function insertPost($postObject) {
        $sql="INSERT INTO $this->_tablePost VALUES ('','".$postObject->getTitlePost()."','".$postObject->getContentPost()."')";
        $prep = $this->pdo->prepare($sql);
        $prep->execute();
        return $this->pdo->lastInsertId();
        
        
    }
    
    public function getPostById($idPost) {
        $sql = "SELECT * FROM $this->_tablePost WHERE idPost=$idPost";
        $prep = $this->pdo->prepare($sql);
        $prep->execute();
        $postBdd = $prep->fetch(PDO::FETCH_OBJ);
        $post= new post();
        $post->setTitlePost($postBdd->titlePost);
        $post->setContentPost($postBdd->contentPost);
        return $post;
        
    }
    
    
    
    
    
}
