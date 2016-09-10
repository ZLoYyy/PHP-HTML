<?php
    require_once("database.php");
    require_once("models/articles.php");

    $link = db_connect(); //Соединение с БД
    $article = articles_Get($link, $_GET['id']);

    include("views/article.php");

?>