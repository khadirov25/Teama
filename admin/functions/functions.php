<?php

function clear_admin($var){
    $var = mysql_real_escape_string($var);
    return $var;
}

function logout1(){
    unset($_SESSION['auth']);
}



/* ===Добавление новости=== */
function add_news(){
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $text = trim($_POST['text']);

    if(empty($title)){
        // если нет названия
        $_SESSION['add_news']['res'] = "Должно быть название новости!";
        $_SESSION['add_news']['keywords'] = $keywords;
        $_SESSION['add_news']['description'] = $description;
        $_SESSION['add_news']['anons'] = $anons;
        $_SESSION['add_news']['text'] = $text;
        return false;
    }else{
        $title = clear_admin($title);
        $description = clear_admin($description);;
        $text = clear_admin($text);

        $query = "INSERT INTO portfolio_news (title, description, text)
                    VALUES ('$title','$description', '$text')";
        $res = mysql_query($query);

        if(mysql_affected_rows() > 0){
            $_SESSION['answer'] = "Новость добавлена!";
            return true;
        }else{
            $_SESSION['add_news']['res'] = "Ошибка при добавлении новости!";
            return false;
        }
    }
}

/* ===Страницы=== */
function get_post(){
    $query = "SELECT * FROM portfolio_news";
    $res = mysql_query($query);
    
    $post = array();
    while($row = mysql_fetch_assoc($res)){
        $post[] = $row;
    }
    return $post;
}
/* ===Страницы=== */



function delete_post($id){
    $query = "delete  from portfolio_news where id = $id";
    $res = mysql_query($query);

    if(mysql_affected_rows() > 0){
        $_SESSION['answer'] = "Страница удалена.";
        return true;
    }else{
        $_SESSION['answer'] = "Ошибка удаления страницы!";
        return false;
    }
}

