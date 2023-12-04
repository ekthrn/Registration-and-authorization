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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <!-- Регистрация  -->
    <form class="form">
        <h1>Регистрация</h1>
        <div>
            <span class="input material-symbols-outlined">person</span>
            <input placeholder="Твоё имя и фамилия" type="text" name="fullname">
            <span class="message message-fullname"></span>
        </div>
        <div>
            <span class="input material-symbols-outlined">smartphone</span>
            <input placeholder="Телефон" type="text" name="phone" data-phone-pattern>
            <span class="message message-phone"></span>
        </div>
        <div>
            <span class="input material-symbols-outlined">mail</span>
            <input placeholder="E-mail" type="email" name="email">
            <span class="message message-email"></span>

            <div>
                <span class="input material-symbols-outlined">alternate_email</span>
                <input placeholder="Логин" type="text" name="login">
                <span class="message message-login"></span>

            </div>
            <div class="password">
                <span class="input material-symbols-outlined">lock</span>
                <input class="password" placeholder="Пароль" type="password" name="password">
                <span class="input material-symbols-outlined">lock</span>
                <input class="password" placeholder="Подтверждение пароля" type="password" name="check_password">
            </div>
            <span class="message message-password"></span>

            <div class="form-bottom-reg">
                <button class="button-bottom button-no-border"><a href="/regist_and_authoriz/authForm.php">У
                        меня уже есть
                        аккаунт</a></button>
                <button class="button-bottom button-border reg-button"><span
                        class="button-text">Зарегистрироваться</span></button>
            </div>

    </form>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/phoneMask.js"></script>
    <script src="js/auth_reg.js"></script>

</body>

</html>