<?php

defined('ISHOP') or die('Access denied');

session_start();

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once 'functions/functions.php';

if($_POST['reg']){
   registration();
    redirect();
}


// авторизация
if($_POST['auth']){
    authorization();
   redirect();
}

    
    
// выход пользователя
if($_GET['do'] == 'logout'){
    logout();
    redirect('?view=auth');
}


// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'main' : $_GET['view'];

switch($view){
    case('main'):
        $main = main();
    break;


    case('about'):
        
    break;

    case('portfolio'):
        $pages = pages();
    break;

    case ('single_page'):
        $id = $_GET['id'];
        print_r($id);
        $single_page = single_page($id);
    break;

        case('singleblog'):
        $id = $_GET['id'];
        $singleblog = single_blog($id);
        $comment = comments($id);

        if($_POST['add_comm']){
            add_comments($id);
            redirect();
        }
    break;

        case('features'):
        // лидеры продаж
    break;

        case('contact'):
            if(isset($_POST['send'])){
             $send = box();
    }
    break;

         case('reg'):
         break;

         case('auth'):
         break;

    case('search'):
 // поиск
        $result_search = search();
break;

 
    default:
    $view = 'main';
        // если из адресной строки получено имя несуществующего вида
    break;
}

// подключени вида
require_once TEMPLATE.'index.php';

