<?php
function print_arr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function clear($var){
    $var = mysql_real_escape_string(strip_tags($var));
    return $var;
}

function redirect($http = false){
    if($http) $redirect = $http;
        else    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}

function logout(){
	unset($_SESSION['auth']);
}
















