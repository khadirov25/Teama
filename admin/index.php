<?php
define('ISHOP', TRUE);
session_start();


if(!$_SESSION['auth']['admin']){


    include  $_SERVER['DOCUMENT_ROOT'].'/admin/enter/index.php';

}
require "../config.php";
require_once '../functions/functions.php';
require "functions/functions.php";

// выход пользователя
if($_GET['do'] == 'logout'){
    logout1();
    include  $_SERVER['DOCUMENT_ROOT'].'/admin/enter/index.php';
}



// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch($view){

    //*************************** БРЕНДЫ ***************************//
    case('add_post'):
           if($_POST){
            if(add_news()) redirect("?view=add_post");
            else redirect();
        }
        break;


    case('get_post'):

        $post1 = get_post();
        break;

    case('edit_brand'):
        $brand_id = (int)$_GET['brand_id'];
        $parent_id = (int)$_GET['parent_id'];
        //$cat_name = $cat[$brand_id][0];
        if($parent_id == $brand_id OR !$parent_id){
            // если родительская категория
            $cat_name = $cat[$brand_id][0];
        }else{
            // если дочерняя категория
            $cat_name = $cat[$parent_id]['sub'][$brand_id];
        }
        if($_POST){
            if($parent_id AND edit_brand($brand_id)){
                redirect("?view=cat&category=$brand_id");
            }elseif(edit_brand($brand_id)){
                redirect('?view=brands');
            }else{
                redirect();
            }
        }
        break;

    case('del_post'):
        $post_id = (int)$_GET['post_id'];
        delete_post($post_id);
        redirect('?view=get_post');
        break;

//*************************** КАТЕГОРИИ ***************************//


	default:
	$view = 'add_post';
		break;
}



require ($_SERVER['DOCUMENT_ROOT']."/admin/template/index.php");
?>

