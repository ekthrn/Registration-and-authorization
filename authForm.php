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
</head>

<body>
    <!-- Авторизация   -->
    <form class="form" action="" method="">
        <span class="login material-symbols-outlined">login</span>
        <div>
            <span class="input material-symbols-outlined">person</span>
            <input placeholder="Логин" type="text" name="login">
            <span class="message message-login"></span>
        </div>
        <div>
            <span class="input material-symbols-outlined">lock</span>
            <input placeholder="Пароль" type="password" name="password">
            <span class="message message-password"></span>
        </div>
        <div class="form-bottom-auth">
            <button class="button-bottom button-no-border"><a href="/regist_and_authoriz/regForm.php">Создать
                    аккаунт</a></button>
            <button class="button-bottom button-border auth-button"><span class="button-text">Войти</span></button>
        </div>

    </form>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/auth_reg.js"></script>

</body>

</html>