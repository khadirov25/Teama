<?php

/* ===Страницы=== */
function pages(){
    $query = "SELECT * FROM portfolio_news";
    $res = mysql_query($query);
    
    $pages = array();
    while($row = mysql_fetch_assoc($res)){
        $pages[] = $row;
    }
    return $pages;
}
/* ===Страницы=== */

/* ===Страницы=== */
function main(){
    $query = "SELECT * FROM home_news";
    $res = mysql_query($query);
    
    $main = array();
    while($row = mysql_fetch_assoc($res)){
        $main[] = $row;
    }
    return $main;
}
/* ===Страницы=== */


/* ===Страницы=== */
function single_page($id){
    $query = "SELECT * FROM portfolio_news WHERE id = $id";
    $res = mysql_query($query);

    return $res;
}
/* ===Страницы=== */

/* ===Страницы=== */
function single_blog($id){
    $query = "SELECT * FROM home_news WHERE id = $id";
    $res = mysql_query($query);
    
    $get_blog = array();
    $get_blog = mysql_fetch_assoc($res);
    return $get_blog;
}



function comments($id){
    $quey = mysql_query("SELECT * FROM comments WHERE post = $id");
    $arr = array();
    while($row = mysql_fetch_array($quey)){

        $arr[] = $row;

    }
    return $arr;

}

function add_comments($goods_id){
    $comment = $_POST['text'];
    $name = $_SESSION['auth']['user'];

    $quey = mysql_query("INSERT INTO comments(post,author,text,date) VALUES ($goods_id, '$name','$comment', NOW())");
    if($quey){

        $_SESSION['res'] = "Комментарий добавлен и отправлен на модерацию";
    }
    else{$_SESSION['res'] = "Ошибка"; }
}


function mail_mess($email){
    //mail(to, subject, body, header);
    // тема письма
    $subject = "Сообщение от Теама";
    // заголовки
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "From: Teama";
    // тело письма
    $mail_body = "Ваше письмо принято! Наши специалисты свяжуться с вами";
    // атрибуты товара

    // отправка писем
    mail($email, $subject, $mail_body, $headers);
    mail(ADMIN_EMAIL, $subject, $mail_body, $headers);
}
/* ===Отправка уведомлений о обратной связи=== */

function box(){
    $name = clear($_POST['name']);
    $email = clear($_POST['email']);
    $phone = clear($_POST['phone']);
    $text = clear($_POST['text']);
    mail_mess($email);
    $query = "INSERT INTO box (name, email, tel, text)
                        VALUES ('$name', '$email', '$phone', '$text')";
    $res = mysql_query($query);
    return $res;
}
/* ===Отправка уведомлений о обратной связи=== */




/* ===Регистрация=== */
function registration(){
    $error = ''; // флаг проверки пустых полей
    
    $login = trim($_POST['login']);
    $pass = trim($_POST['pass']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $ip = $_SERVER['REMOTE_ADDR'];
    
    if(empty($login)) $error .= '<li>Не указан логин</li>';
    if(empty($pass)) $error .= '<li>Не указан пароль</li>';
    if(empty($name)) $error .= '<li>Не указано ФИО</li>';
    if(empty($email)) $error .= '<li>Не указан Email</li>';
    if(empty($phone)) $error .= '<li>Не указан телефон</li>';
    if(empty($address)) $error .= '<li>Не указан адрес</li>';
    
    if(empty($error)){
        // если все поля заполнены
        // проверяем нет ли такого юзера в БД
        $query = "SELECT customer_id FROM customers WHERE login = '" .clear($login). "' LIMIT 1";
        $res = mysql_query($query) or die(mysql_error());
        $row = mysql_num_rows($res); // 1 - такой юзер есть, 0 - нет
        if($row){
            // если такой логин уже есть
            $_SESSION['reg']['res'] = "<div class='error'>Пользователь с таким логином уже зарегистрирован на сайте. Введите другой логин.</div>";
            $_SESSION['reg']['name'] = $name;
            $_SESSION['reg']['email'] = $email;
            $_SESSION['reg']['phone'] = $phone;
            $_SESSION['reg']['addres'] = $address;
        }else{
            // если все ок - регистрируем
            $login = clear($login);
            $name = clear($name);
            $email = clear($email);
            $phone = clear($phone);
            $address = clear($address);
            $pass = md5($pass);
            $query = "INSERT INTO customers (name, email, phone, address, login, password,ip)
                        VALUES ('$name', '$email', '$phone', '$address', '$login', '$pass', '$ip')";
            $res = mysql_query($query) or die(mysql_error());
            if(mysql_affected_rows() > 0){
               $id = mysql_insert_id();



                $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                if($_FILES['baseimg']['name']){
                    $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                    $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                    $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                    $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                    $baseimgType = $_FILES['baseimg']['type']; // тип файла
                    $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                    $error = "";

                    if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                    if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                    if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";

                    if(!empty($error)) $_SESSION['answer'] = "<div class='error'>Ошибка при загрузке картинки товара! <br /> {$error}</div>";

                    // если нет ошибок
                    if(empty($error)){
                        if(@move_uploaded_file($baseimgTmpName, "./userfiles/product_img/tmp/$baseimgName")){
                            resize("./userfiles/product_img/tmp/$baseimgName", "./userfiles/product_img/ava/$baseimgName", 120, 185, $baseimgExt);
                            @unlink("./userfiles/product_img/tmp/$baseimgName");
                            mysql_query("UPDATE customers SET img = '$baseimgName' WHERE customer_id = $id");
                        }else{
                            $_SESSION['answer'] .= "<div class='error'>Не удалось переместить загруженную картинку. Проверьте права на папки в каталоге /userfiles/product_img/</div>";
                        }
                    }
                }


                // если запись добавлена
                $_SESSION['reg']['res'] = "<div class='success'>Регистрация прошла успешно.</div>";
                $_SESSION['auth']['user'] = $_POST['name'];
                $_SESSION['auth']['customer_id'] = mysql_insert_id();
                $_SESSION['auth']['email'] = $email;
            }else{
                $_SESSION['reg']['res'] = "<div class='error'>Ошибка!</div>";
                $_SESSION['reg']['login'] = $login;
                $_SESSION['reg']['name'] = $name;
                $_SESSION['reg']['email'] = $email;
                $_SESSION['reg']['phone'] = $phone;
                $_SESSION['reg']['addres'] = $address;
            }
        }
    }else{
        // если не заполнены обязательные поля
        $_SESSION['reg']['res'] = "<div class='error'>Не заполнены обязательные поля: <ul> $error </ul></div>";
        $_SESSION['reg']['login'] = $login;
        $_SESSION['reg']['name'] = $name;
        $_SESSION['reg']['email'] = $email;
        $_SESSION['reg']['phone'] = $phone;
        $_SESSION['reg']['addres'] = $address;
    }
}
/* ===Регистрация=== */


/* ===Авторизация=== */
function authorization(){

    
    $login = mysql_real_escape_string(trim($_POST['login']));
    $pass = trim($_POST['pass']);
    
    if(empty($login) OR empty($pass)){
        // если пусты поля логин/пароль
        $_SESSION['auth']['error'] = "Поля логин/пароль должны быть заполнены!";
    }else{
        // если получены данные из полей логин/пароль
        $pass = md5($pass);
        
        $query = "SELECT * FROM customers WHERE login = '$login' AND password = '$pass' LIMIT 1";
        $res = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($res) == 1){
            // если авторизация успешна
            $row = mysql_fetch_row($res);
            $_SESSION['auth']['customer_id'] = $row[0];
            $_SESSION['auth']['user'] = $row[1];
            $_SESSION['auth']['email'] = $row[2];
            $_SESSION['auth']['avatar'] = $row[5];

            if(isset($_POST['remember']) && $_POST['remember'] = 'on'){
                $hash = md5(time().$login);
                setcookie('hash',$hash,time()+60*60*24*7);
                $query = "UPDATE customers SET remember = '$hash' WHERE login = '$login'";
                $res = mysql_query($query);
            }
        }else{
            // если неверен логин/пароль
            $_SESSION['auth']['error'] = "Логин/пароль введены неверно!";
        }
    }
}
/* ===Авторизация=== */


function search(){
    $search = clear($_GET['search']);
    $result_search = array(); //результат поиска
    
    if(mb_strlen($search, 'UTF-8') < 4){
        $result_search['notfound'] = "<div class='error'>Поисковый запрос должен содержать не менее 4-х символов</div>";
    }else{
        $query = "SELECT title
                    FROM home_news
                        WHERE MATCH(title) AGAINST('{$search}*' IN BOOLEAN MODE)";
        $res = mysql_query($query) or die(mysql_error());
        
        if(mysql_num_rows($res) > 0){
            while($row_search = mysql_fetch_assoc($res)){
                $result_search[] = $row_search;
            }
        }else{
            $result_search['notfound'] = "<div class='error'>По Вашему запросу ничего не найдено</div>";
        }
    }
    
    return $result_search;
}
