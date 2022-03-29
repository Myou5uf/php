<?php
session_start();
if (isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']);
if (!isset($_SESSION['admin'])) die('ВЫ не авторизованы');
echo "Добро пожаловать, {$_SESSION['admin']}";
?>

<ul>
    <li><a href="index.php">index</a></li>
    <li><a href="sess1.php">sess1</a></li>
    <li><a href="sess2.php">sess2</a></li>
</ul>

<a href="sess2.php?do=exit">Выйти</a>