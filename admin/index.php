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

if($action == "add")
{   //Добавляем статью
    include("../views/article_admin.php");
}
else
{
    $articles = articles_ALL($link);

    #Подключение шаблона
    include("../views/articles_admin.php");
}
?>