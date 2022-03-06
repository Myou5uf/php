<?php
require_once('inc/func.php');
// require_once('inc/test.php');

echo '<h3>Главная часть</h3>';

// setcookie('test', 'Password', time() + 3600 * 24);
// setcookie('tes2', 'Login', time() - 3600);

// echo $_COOKIE['test'];
// echo '<br>';
// echo $_COOKIE['test2'];

// var_dump($_COOKIE);

isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/') :
    setcookie('counter', 1, time() + 3600, '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;
