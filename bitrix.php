<?php
setcookie('login', 'Tom', time());
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';