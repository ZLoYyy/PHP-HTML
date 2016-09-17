<?php

#Подключаем файлы
require_once("../database.php");
require_once("../models/articles.php");

#Соединение с БД
$link = db_connect();

//Если вход. параметр action
if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

//Добавление статьи
if($action == "add")
{
    if(!empty($_POST))
        {
            articles_NEW($link, $_POST['title'], $_post['date'], $_POST['content']);
            header("Location: index.php");
        }
    //Подключаем статью
    include("../views/article_admin.php");
}
//Редактирование статьи
else if($action == "edit")
    {
        if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
    
        if(!empty($_POST) && $id > 0)
            {
                articles_EDIT($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
                header("Location: index.php");
            }
        $article = articles_GET($link, $id);
        include("../views/articles_admin.php");
    }
else
{
    $articles = articles_ALL($link);

    #Подключение шаблона
    include("../views/articles_admin.php");
}
?>