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

//$n = 10;
//$arr = array(1, 2, 3, 4, 5);
// for ($i = 0; $i < $n; $i++) {
//      echo '<br>' . $arr[$i];
// }
//
// $arr2 = array(1, 2, 3, 4, 5, 6);
//  foreach ($arr2 as $index => $value) {
//      if ($value % 2 === 0) {
//          echo '<b>' . '<br>' . $value;
//      }
//  }

//  $countries = array(
//       'Rus' => array('Orenburg', 'Chelabinsk', 'Magnitogorsk'),
//       'Ukr' => array('Kiev', 'Dnepr', 'Odessa'),
//       'Bel' => array('Minsk', 'Brest')
//  );
//   foreach ($countries as $value) {
//       foreach ($value as $key) {
//           if (substr($key, 0, 1) == 'O') {
//               echo $key;
//           }
//       }
//   }

//1 задача
$string = 'www.fact.ru';
 if (mb_strlen($string) > 5) {
     echo substr($string, 0,5) . '...';
 }
 if (mb_strlen($string) < 5) {
     echo $string;
 }

// 2 задача
$str = 'sabaca';
 echo '<br>' . str_replace(array("a", "b", "c"),
 array("1", "2", "3"), $str);

//  3 задача
$str2 = 'abc abc abc';
 echo  '<br>' . substr_count($str2, 'b');

// 4 задача
$str3 = 'html css php';
$arr_str = explode(" , ", $str3);
 foreach ($arr_str as $value) {
     array_fill(0, 10, $value);
     echo '<br>' . $value;
 }
?>
</body>
</html>
