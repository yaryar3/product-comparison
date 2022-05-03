<?php

$server = 'localhost';
$login = 'host1829692';
$pass = '1234';
$name_db = 'host1829692';
$link = mysqli_connect($server, $login, $pass, $name_db); //индикатор соединения

mysqli_set_charset($link, 'UTF8');
if($link == False)
{
     echo "Соединение не удалось";
}
?>