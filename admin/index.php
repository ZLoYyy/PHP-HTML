<?php

#Подключаем файлы
require_once("../database.php");
require_once("../models/articles.php");

#Соединение с БД
$link = db_connect();


$articles = articles_ALL($link);

#Подключение шаблона
include("../views/articles_admin.php");

?>