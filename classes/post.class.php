<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author sophie
 */
class post {
    private $titlePost;
    private $contentPost;
    
    public function post ($titlePost,$contentPost) {
        $this->titlePost=$titlePost;
        $this->contentPost=$contentPost;
    }
    
    function getTitlePost() {
        return $this->titlePost;
    }

    function getContentPost() {
        return $this->contentPost;
    }

    function setTitlePost($titlePost) {
        $this->titlePost = $titlePost;
    }

    function setContentPost($contentPost) {
        $this->contentPost = $contentPost;
    }

    public function getPost() {
        return $this->titlePost."<br>".$this->contentPost;
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
