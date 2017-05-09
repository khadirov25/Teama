<?php
define('ISHOP', TRUE);
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';


if($_POST){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $pass = md5($password);
    $query = "SELECT customer_id, name, password FROM customers WHERE login = '$login' AND id_role = 2 LIMIT 1";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($res);

    if( $row['password'] == $pass){
        // если авторизация успешна
        $_SESSION['auth']['admin'] = $row['name'];
        header('Location: ../');
    }else{
        // если неверен логин/пароль
       $_SESSION['res'] = 'Логин или пароль не равны';
        header('Location:'.$_SERVER['PHP_SELF']);
        exit();

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход в Админ панель</title>
</head>
<body>

<?php
if(isset($_SESSION['res'])){
echo $_SESSION['res'];
unset($_SESSION['res']);
}?>

<form method="post" action="">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>Login:</td>
            <td><input type="text" name="login" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Submit" name="submit" /></td>
        </tr>
    </table>
</form>
</body>
</html>