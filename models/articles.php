<?php

function articles_ALL($link)
{   //Запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    //Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();
    
    for($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
    
    return $articles;
    
}
function articles_GET($link, $id_article)
{
    //Запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $article = mysqli_fetch_assoc($result);
    
    return $article;
    
    return["id" => 1, "title" => "Заголовок", "date" => "10-09-2016", "content" => "Скоро тут будет статья"];
}
function articles_NEW($title, $date, $content)
{
    //Подготовка
    $title = trim($title);
    $content - trim($content);
    
    //Проверка
    if($title == "")
        return false;
    
    //Запрос
    $t = "INSERT INTO articles (title, date, content) VALUES ('%s','%s', '%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));
    
    echo $query;
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    return true;
}
function articles_EDIT($id, $title, $date, $content)
{}
function articles_DELETE($id)
{}
?>