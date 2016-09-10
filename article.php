<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $article = articles_Get($_GET['id']);

    include("views/article.php");

?>