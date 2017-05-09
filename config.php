<?php


// модель
define('MODEL', 'model/model.php');

// фотографии
define('IMG', 'views/ishop/images/');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// папка с картинками контента
define('PRODUCTIMG', PATH.'userfiles/product_img/baseimg/');

// папка с картинками аватарок
define('AVAIMG', PATH.'userfiles/product_img/ava/');

// папка с картинками галереи
define('GALLERYIMG', PATH.'userfiles/product_img/');
// вид
define('VIEW', 'views/');

// папка с активным шаблоном
define('TEMPLATE', VIEW.'teama/');

// папка с активным шаблоном админки
define('TEMPLATE2', 'template/');

//размер картинки
define('SIZE', 1048576);

// сервер БД
define('HOST', 'localhost');

// пользователь
define('USER', 'root');

// пароль
define('PASS', '');

// БД
define('DB', 'teama');

// название магазина - title
define('TITLE', 'Интернет магазин сотовых телефонов');

mysql_connect(HOST, USER, PASS) or die('No connect to Server');
mysql_select_db(DB) or die('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');








