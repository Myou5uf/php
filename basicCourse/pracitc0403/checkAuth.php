<?php
session_start();
echo '<p>Проверка сессии</p>';
var_dump($_SESSION);
if (isset($_SESSION['status']) && $_SESSION['status'] == true) {
    // header("Location: ../user.php");
    echo '<p>Пройдена</p>';
    exit;
} else {
    // header("Location: index.php");
    echo '<p>Не пройдена</p>';
    exit;
}
