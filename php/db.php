<?php

$connect = mysqli_connect('localhost', 'root', '', 'reg_auth');

if (!$connect) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}
?>