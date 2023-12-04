<?php

session_start();
require_once 'db.php';

if (!$connect) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$check_user = mysqli_query($connect, $sql);

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "fullname" => $user['fullname'],
        "phone" => $user['phone'],
        "email" => $user['email'],
        "login" => $login
    ];
    $response = [
        "status" => true
    ];

    echo json_encode($response);
} else {
    $response = [
        "status" => false
    ];
    echo json_encode($response);
}

mysqli_close($connect);
?>