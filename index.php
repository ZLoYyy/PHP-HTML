<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $articles = articles_ALL();

    include("views/articles.php");

?>