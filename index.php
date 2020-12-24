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
//$i = 5;
//while ($i <= 13) {
//    echo $i++;
//}
//
//$num = 1000;
//$iter = 0;
//while ($num >= 50) {
//    $num /= 2;
//    $iter++;
//}
//echo "Результат: {$num}<br>\n";
//echo "Количество итераций: {$iter}<br>\n";
//
//$i = 1;
//switch ($i) {
//    case 0:
//        echo '0,1,2,3,4,5,6,7,8,9,10';
//    case 1:
//        echo '0,1,2,3,4,5,6,7,8,9';
//    case 2:
//        echo '0,1,2,3,4,5,6,7,8';
//    default: 'null';
//    break;
//}

//$arr = array(
//        'Rus' => array('Orenburg', 'Chelabinsk', 'Magnitogorsk'),
//         'Ukr' => array('Kiev', 'Dnepr', 'Odessa'),
//         'Bel' => array('Minsk', 'Brest')
//);
//print_r($arr);
//$arr = [rand(0,1), rand(0,1), rand(0,1),
//    rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1),rand(0,1)];
//print_r($arr);
//
//$arr2 = array(
//    'Rus' => array('Orenburg', 'Chelabinsk', 'Magnitogorsk'),
//      'Ukr' => array('Kiev', 'Dnepr', 'Odessa'),
//      'Bel' => array('Minsk', 'Brest')
//);
$n = 10;
$arr = array(1, 2, 3, 4, 5);
 for ($i = 0; $i < $n; $i++) {
      echo '<br>' . $arr[$i];
 }

 $arr2 = array(1, 2, 3, 4, 5, 6);
  foreach ($arr2 as $index => $value) {
      if ($value % 2 === 0) {
          echo '<b>' . '<br>' . $value;
      }
  }

  $countries = array(
       'Rus' => array('Orenburg', 'Chelabinsk', 'Magnitogorsk'),
       'Ukr' => array('Kiev', 'Dnepr', 'Odessa'),
       'Bel' => array('Minsk', 'Brest')
  );
   foreach ($countries as $value) {
       if (substr($value, 0, 1) == 'O') {
           echo $value;
       }
   }
?>
</body>
</html>
