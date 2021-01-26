<?php
$servername = "localhost";
$username = "Alexey";
$password = "pass";
$database = "name";
$login = $_POST['login'];
$pass = $_POST['password'];

$db_conn = mysqli_connect($servername, $username, $password, $database) or die("error");
mysqli_set_charset($db_conn, 'utf-8');
$sql = mysqli_query($db_conn, "SELECT login, password_u FROM user");
$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

//foreach ($row as $key => $value) {
//    if (($value['login'] == $login) && ($value['password_u'] == $pass)) {
//        echo '<a href="">Факт';
//    } else {
//        echo 'Error';
//    }
//}

// while ($row = mysqli_fetch_array($sql)) {
//    if (($row['login'] == $login) && ($row['password_u'] == $pass)) {
//        echo '<a href="">Факт';
//    }
//}
foreach ($row as $key => $value) {
    if ($value['login'] == $this->login) {
        $flag_login = true;
        if ($value['password'] == $this->password_u) {
            return 0; //успешно
        } else {
            return 1; //не сошелся пароль
        }
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
    <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
    <input type="name" name="login" class="form-control" placeholder="Login" autofocus>
    <input class="form-control" type="password" name="password" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
</form>
</body>
</html>
