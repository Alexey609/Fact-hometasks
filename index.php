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

<?php

// призентация 9-10 задача 1
 function arrFunc () {
   return array(mt_rand(1,2), mt_rand(2,3), mt_rand(3,4));
 }
  print_r(arrFunc());

//задача 2
 $str = 'HTML CSS PHP BITRIX';
  function stringCounter ($str) {
      $result = str_word_count($str);
      echo '<br>' . $result;
  }
  stringCounter($str);

// задача №3
$str = 'HTML CSS PHP BITRIX';
 function reverseString ($str) {
     $result = strrev($str);
     return $result;
 }
 $reverse = reverseString($str);
 echo '<br>' . $reverse;

// задача №4
$str = 'HTML CSS PHP BITRIX';
 function lengthStr ($str) {
     $length = mb_strlen($str);
     echo '<br>' . $length;
 }
lengthStr($str);

//задача №5
$str = 'HTML CSS PHP BITRIX';
 function excFunc ($str) {
     $arrCount = explode(" ", $str);
     foreach ($arrCount as $value) {
         echo '<br>' . $value;
     }
 }
 excFunc($str);

 print_r($_POST);
?>
</body>


</html>
