<?php
const login = 'yousuf';
const password = '12345';
const cook = '11111';

if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    $log = $_POST['login'];
    $pass = $_POST['pass'];

    if (login == $log && password == $pass) {
        session_start();
        $_SESSION['login'] = $log;
        $_SESSION['status'] = true;
        if (!empty(isset($_POST['remember'])) && $_POST['remember'] == 1) {
            setcookie('login', $log, time() + 3600 * 24, '/');       // логин
            setcookie('cookie', '11111', time() + 3600 * 24, '/');   // куки
        }
        header("Location: ../user.php");
        exit;
    } else {
        echo '<span>Введен не правильный логин или пароль</span>';
    }
} else {
    echo '<span>Заполните все поля</span>';
}
