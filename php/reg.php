<?php

session_start();
require_once 'db.php';

if (!$connect) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$checkDuplicate = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'");
if (mysqli_num_rows($checkDuplicate) > 0) {
    $response = [
        "status" => false
    ];
    echo json_encode($response);
    die();
}

$sql = "INSERT INTO `users` (`fullname`, `phone`, `email`, `login`, `password`) VALUES ('$fullname', '$phone', '$email', '$login', '$password')";


if (mysqli_query($connect, $sql)) {
    $response = [
        "status" => true
    ];
    $_SESSION['user'] = [
        "fullname" => $fullname,
        "phone" => $phone,
        "email" => $email,
        "login" => $login
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
