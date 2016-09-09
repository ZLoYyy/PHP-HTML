<?php

function articles_ALL()
{
    $art1 = ["id" => 1, "title" => "Title1", "date" => "31-08-2016", "content" => "content1"];
    $art2 = ["id" => 2, "title" => "Title2", "date" => "31-08-2016", "content" => "content2"];
        
    $arr[0] = $art1;
    $arr[1] = $art2;
    
    return $arr;
}
function articles_GET()
{}
function articles_NEW($title, $date, $content)
{}
function articles_EDIT($id, $title, $date, $content)
{}
function articles_DELETE($id)
{}
?>