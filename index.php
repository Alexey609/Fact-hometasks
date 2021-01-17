<?php
$name = $_POST['name'];
$password = $_POST['pass'];
$adminPass = 'qwerty';
$adminName = 'Tom';

if (($password == $adminPass) && ($name == $adminName)) {
    session_start();
    $_SESSION['login'] = 'Tom';
} else {
    echo 'Error';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <a href="fact.php">Fact</a>
  <a href="bitrix.php">Bitrix</a>

</body>
</html>






