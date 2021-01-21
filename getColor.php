<?php
//задача с файлами
$getcol = file_get_contents('style.css');
$siporate = str_split($getcol);

$newFile = fopen('file.txt', "w");
foreach ($siporate as $value) {
    fwrite($newFile, $value);
}

fclose($newFile);

//цикл записывает данные в новый файл