//регистрация
//let _login;

$('.reg-button').click(function (event) {
    event.preventDefault();

    $(`input`).removeClass('error');

    //получение данных с форм
    let fullname = $('input[name="fullname"]').val(),
        phone = $('input[name="phone"]').val(),
        email = $('input[name="email"]').val(),
        login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        checkPassword = $('input[name="check_password"]').val();

    let formData = new FormData();

    //валидация
    let checkValid = true;

    let patternFullname = RegExp("^[а-яА-ЯёЁ]", "i"),
        patternPhoneNumber = RegExp("^[0-9]", "i"),
        patternEmail = RegExp("^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}", "i"),
        patternLogin = RegExp("^[a-zA-Z0-9]", "i"),
        patternPassword = RegExp("^[а-яА-ЯёЁa-zA-Z0-9]{8,}", "i");

    let inputFullname = 'fullname',
        inputPhone = 'phone',
        inputEmail = 'email',
        inputLogin = 'login',
        inputPassword = 'password';

    let messageClassFullname = '.message-fullname',
        messageClassPhone = '.message-phone',
        messageClassEmail = '.message-email',
        messageClassLogin = '.message-login',
        messageClassPassword = '.message-password';

    let messageFullname = "*Неправильно указано имя или фамилия",
        messagePhone = "*Неправильно указан телефон",
        messageEmail = "*Неправильно указан e-mail",
        messageLogin = "*Неправильно указан логин",
        messagePassword = "*Недостаточно символов";

    function validation(pattern, inputName, field, messageClass, message) {
        if (pattern.test(field)) {
            formData.append(inputName, field);
        }
        else {
            $(messageClass).text(message);
            checkValid = false;
        }
    }

    function passwordVerification(password, checkPassword) {
        if (password == checkPassword) {
            validation(patternPassword, inputPassword, password, messageClassPassword, messagePassword);
        } else $(messageClassPassword).text('*Пароли не совпадают');;
    }

    function onlyPhoneNumber(phone) {
        phone = phone.replace(/\D/g, '');
        validation(patternPhoneNumber, inputPhone, phone, messageClassPhone, messagePhone);

    }

    validation(patternFullname, inputFullname, fullname, messageClassFullname, messageFullname);
    validation(patternEmail, inputEmail, email, messageClassEmail, messageEmail);
    validation(patternLogin, inputLogin, login, messageClassLogin, messageLogin);

    passwordVerification(password, checkPassword);
    onlyPhoneNumber(phone);
    //отправляем данные в php-файл
    if (checkValid) {
        //_login = login;
        $.ajax({
            url: 'php/reg.php',
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            success(data) {

                if (data.status) {
                    document.location.href = '/regist_and_authoriz/home.php';
                }
                else { $(messageClassLogin).text('*Такой пользователь уже существует'); }
            }
        });
    }
});

//авторизация
$('.auth-button').click(function (event) {
    event.preventDefault();
    //получение данных с форм
    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    let formData = new FormData();

    //валидация
    let checkValid = true;

    let patternLogin = RegExp("^[a-zA-Z0-9]", "i"),
        patternPassword = RegExp("^[а-яА-ЯёЁa-zA-Z0-9]{8,}", "i");

    let inputLogin = 'login',
        inputPassword = 'password';

    let messageClassLogin = '.message-login',
        messageClassPassword = '.message-password';

    let messageLogin = "*Неправильно указан логин",
        messagePassword = "*Недостаточно символов";

    function validation(pattern, inputName, field, messageClass, message) {
        if (pattern.test(field)) {
            formData.append(inputName, field);
        }
        else {
            $(messageClass).text(message);
            checkValid = false;
        }
    }
    validation(patternLogin, inputLogin, login, messageClassLogin, messageLogin);
    validation(patternPassword, inputPassword, password, messageClassPassword, messagePassword);

    //отправляем данные в php-файл
    if (checkValid) {
        //_login = login;

        $.ajax({
            url: 'php/auth.php',
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            success(data) {
                if (data.status) {
                    document.location.href = '/regist_and_authoriz/home.php';
                }
                else { $(messageClassLogin).text('*Такого пользователя не существует'); }

            }
        });
    }
});

//выход из профиля 
$('.exit-button').click(function (event) {
    event.preventDefault();
    $.ajax({
        url: 'php/exit.php',
        type: 'POST',
        success(data) {
            document.location.href = '/regist_and_authoriz/authForm.php';
        }
    });
});

//сохранение файла
$('.save-button').click(function (event) {
    event.preventDefault();

    $.ajax({
        url: "php/save.php",
        type: "GET",
        dataType: 'json',
        success: function (data) {
            let dat = "Имя: " + data['fullname'];
            let blob = new Blob([dat], { type: 'text/plain' });

            let url = URL.createObjectURL(blob);
            let link = document.createElement('a');

            link.href = url;
            link.download = `${data['login']}.txt`;

            link.click();
        },
        error: function (error) {
            $('.message-error').text('*Произошла ошибка при сохранении данных в файл');
        }
    });
});