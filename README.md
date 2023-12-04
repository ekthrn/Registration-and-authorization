# Регистрация & авторизация
### HTML-шаблон выглядит следующим образом 
![reg](https://github.com/ekthrn/Registration-and-authorization/assets/117830116/b7554e88-b62d-4673-90b5-e85bee6c6a14)
![auth](https://github.com/ekthrn/Registration-and-authorization/assets/117830116/8cb0e7f4-7e4d-4b07-8f61-d3cff90b4fde)
![home](https://github.com/ekthrn/Registration-and-authorization/assets/117830116/80e5a900-a667-4e56-87c2-fa65448e5c36)

### База данных
В текущем проекте уже существует готовый SQL для создания таблицы `users`, который можно использовать, импортировав файл `database/reg_auth.sql` с готовый базой данных и таблицей `users`

### Запуск
Для запуска я использовала локальный веб-сервер Apache, но также можно пользоваться любыми другими

Доступ в PhpMyAdmin:

- логин - `root`
- пароль - ``

### Немного про проект
Проект реализует страницы регистрации/авторизации + домашняя страница. На домашней странице есть Имя пользователя и кнопки "Сохранить в файл" и "Выход", которые позволяют либо создать текстовый файл с названием логина пользователя и именем пользователя внутри, либо выйти из профиля. Для создания проекта использовались следующие технологии: БД, PHP-сессии и AJAX. 
Также для регистрации/авторизации/скачивания файла установлена соответствующая валидация для полей

