<?php
//$servername = "localhost";
//$username = "Alexey";
//$password = "pass";
//$database = "name";
//$login = $_POST['login'];
//$pass = $_POST['password'];
//
//$db_conn = mysqli_connect($servername, $username, $password, $database) or die("error");
//mysqli_set_charset($db_conn, 'utf-8');
//$sql = mysqli_query($db_conn, "SELECT login, password_u FROM user");
//$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
//
//if (count($_POST) > 0) {
//    foreach ($row as $key => $value) {
//        if (($key == 'login') && ($value == $login)) {
//            header("Location: https://fact.digital/");
//        } else {
//            echo  'Error';
//        }
//    }
//} код предыдущего урока
session_start();
require_once 'authorisation.php';

$user = new authorisation($_POST['login'],$_POST['password']);
$connection = $user -> connect();
$select = $user->selectUser();

if(mysqli_num_rows($select)>0) {
    $arr = mysqli_fetch_all($select, MYSQLI_ASSOC);

    if ($user->getPass() === $arr[0]['password']) {
        $_SESSION['account'] = $user->getUser();
        $_SESSION['name'] = $arr[0]['name'];
        header("Location:page.php");
        return;

    } else {
        $_SESSION['error'] = 'Invalid login or password';
        header("Location:index.php");
        return;
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <!— Bootstrap core CSS —>
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!— Custom styles for this template —>
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        min-width: 768px {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }
    </style>
</head>
<body>
<body class="text-center">
<form id="auth" class="form-signin" method="post">
    <?
    if(isset($_SESSION['error'])){
        echo "<span style='color:#ff0000; margin:0px'>" .$_SESSION['error']."</span>";
        unset($_SESSION['error']);
    }
    ?>
    <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
    <input type="name" name="login" class="form-control" placeholder="Login" autofocus>
    <input class="form-control" type="password" name="password" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
</form>
</body>
</html>
