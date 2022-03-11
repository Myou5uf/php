<?php

//echo '<a href="index.php">Вернуться на главную страницу</a>';
//echo '<br>';

const log = 'yousuf';
const pass = '12345';
$userStatus = false;    // authorized or not authorized
if (!empty($_POST['login']) && !empty($_POST['pass'])) {

    var_dump($_POST);
    if (log == $_POST['login'] && pass == $_POST['pass']) {
        session_start();
        $_SESSION['status'] = true;
        var_dump($_SESSION);
        header("Location: user.php");
        // exit;
    } else {
        echo '<h1>Введен не правильный логин или пароль</h1>';
    }
} else {
    echo '<h1>Заполните все поля</h1>';
}

// session_destroy();  // Удалить сессию



//  Добавить в сессию ещё одну переменную boolean - статус пользователя (авторизован или нет)
//  Если True то не показывать форму авторизации
//  и вывести сообщение об этом и дать возможноть отправить файл, 
//  иначе предоставить возможность авторизоваться (показать форму авторизации)