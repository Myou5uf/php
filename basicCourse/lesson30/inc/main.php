<?php

// * mysqli_connect() - Установить новое соединение с сервером MySQL или завершить работу, вызвав сообщение
$db_connect = @mysqli_connect('127.0.0.1', 'root', '', 'guest_book') or die("Ошибка соединения с БД");
if (!$db_connect) die(mysqli_connect_error());  // Если соединение не установление вывести причину ошибки

// * mysqli_set_charset() - Установить кодировку
mysqli_set_charset($db_connect, "utf8") or die("Не установлена кодировка");


// * mysqli_query() - Выполняет запрос к БД. return false в случае неудачи
// * В случае успешного выполнения запросов SELECT mysqli_query вернет объект mysqli_result
// * Для остальных успешных запросов ф-ия вернет true

// * Строка запроса INSERT 
// $insert_query = "INSERT INTO `book` (`name`, `message`) VALUES ('Дмитрий', 'Lorem ipsum dolor.')";
// $res_insert = mysqli_query($db_connect, $insert_query);
// if ($res_insert) echo "OK";
// else echo "Error";
// echo mysqli_error($db_connect);     // Возвращает строку с описанием последней ошибки


// * Строка запроса UPDATE
// $update_query = "UPDATE book SET message = 'Как дела?' WHERE id=9";
// $res_update = mysqli_query($db_connect, $update_query) or die(mysqli_error($db_connect));


// * Строка запроса DELETE
// $delete_query = "DELETE FROM book WHERE id > 3";
// $res_delete = mysqli_query($db_connect, $delete_query);
// echo mysqli_affected_rows($db_connect);


// * Строка запроса SELECT
$select_query = "SELECT * FROM book";
$res_select = mysqli_query($db_connect, $select_query);
var_dump($res_select);



echo '<h2>Функции PHP для работы с базами данных. Часть 1</h2>';
