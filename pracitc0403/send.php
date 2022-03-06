<?php

echo '<a href="imdex.php">Вернуться на главную страницу</a>';
echo '<br>';

session_unset();
session_start();
const log = 'yousuf';
const pass = '12345';
if (log == $_SESSION['login'] && pass == $_SESSION['pass']) {
    echo '<input type="file">';
} else {
    echo '<h1>Введен не правильный логин или пароль</h1>';
}



// unset($_SESSION['login']); // Удалить из сессии 
// session_unset($_SESSION['login']); // Удалить из сессии ВСЕ данные
// session_destroy();  // Удалить сессию

// echo '<h1>Вы успешно авторизованы</h1>';
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
?>
<!-- <input type="file"> -->