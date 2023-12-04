<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Авторизация & Регистрация</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>

<body>
    <!-- <span class="material-symbols-outlined">logout</span> -->
    <!-- Профиль -->
    <form class="home-form">

        <span class="face material-symbols-outlined">face</span>
        <h2>
            <?= $_SESSION['user']['fullname'] ?>
        </h2>

        <div>
            <div class="home">
                <button class="button-bottom button-border save-button"><span class="button-text">Сохранить в
                        файл</span></button>
                <button class="button-bottom button-border exit-button"><span class="button-text">Выйти</span></button>

            </div>
            <span class="message message-error"></span>

    </form>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/phoneMask.js"></script>
    <script src="js/auth_reg.js"></script>

</body>

</html>