<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Challenge Poo</title>
    </head>
    <body>
        <?php
        include 'classes/bdd.class.php';
        include 'classes/post.class.php';
        $secondPost = new post('title','corpus');
        $secondPost->setTitlePost('title');
        $secondPost->setContentPost('corpus')
        ?>
        <p>premier post : <?php $secondPost->getTitlePost()."<br>".$secondPost->getContentPost();  ?>
        
        
        
        </p>
    </body>
</html>
