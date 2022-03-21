<?php

// * mysqli_connect() - Установить новое соединение с сервером MySQL или завершить работу, вызвав сообщение
$db_connect = @mysqli_connect('127.0.0.1', 'root', '', 'guest_book') or die("Ошибка соединения с БД");

// * mysqli_set_charset() - Установить кодировку
mysqli_set_charset($db_connect, "utf8") or die("Не установлена кодировка");
