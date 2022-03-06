<?php
require_once('inc/func.php');

echo '<h2>Главная часть</h2>';

?>

<form method="post" action="authorization.php">
    <p>
        <input type="text" placeholder="Введите логин" name="login">
    </p>
    <p>
        <input type="password" placeholder="Введите пароль" name="pass">
    </p>
    <button type="submit">Войти</button>

</form>

<ul>
    <li><a href="../imdex.php">index.php</a></li>
    <li><a href="../send.php">send.php</a></li>
</ul>