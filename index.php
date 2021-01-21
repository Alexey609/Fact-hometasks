<?php
$servername = "localhost";
$username = "Alexey";
$password = "pass";
$database = "name";

$db_conn = mysqli_connect($servername, $username, $password, $database) or die("error");
mysqli_set_charset($db_conn, 'utf-8');
$sql = mysqli_query($db_conn, "INSERT INTO names VALUES (NULL, 'Bob', 13, 2)");



