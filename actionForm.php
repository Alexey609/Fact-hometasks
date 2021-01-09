<?php
$name = $_POST['email'];
$password = $_POST['password'];

  if ($name === $password) {
     echo 'Доступ открыт';
  } else {
      echo 'error';
  }



