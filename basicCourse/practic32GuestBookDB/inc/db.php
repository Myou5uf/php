<?php

// * Распечать массив
function print_arr($array)
{
    echo '<pre>';
    echo print_r($array, true);
    echo '</pre>';
}

// * Экранировать все данные в массиве $_POST
function clearStr()
{
    global $db_connect;
    foreach ($_POST as $key => $val) {
        $_POST[$key] = mysqli_real_escape_string($db_connect, $val);
    }
}

// * Записать данные из формы в файл
function write2Db($name, $message)
{
    global $db_connect;
    clearStr();
    // extract($_POST);    // Получить все переменные из массива $_POST
    // $name = mysqli_real_escape_string($db_connect, $name);
    // $message = mysqli_real_escape_string($db_connect, $message);
    $insert_query = "INSERT INTO guest_book (name, message) VALUES ('$name', '$message')";
    mysqli_query($db_connect, $insert_query);
}

// * Получить данные из БД
function getData()
{
    global $db_connect;
    $select_query = "SELECT * FROM guest_book ORDER BY id DESC";
    $result = mysqli_query($db_connect, $select_query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// * Обновить данные в БД
function updateData($id, $name, $message)
{
    global $db_connect;
    $select_query = "UPDATE guest_book SET name = '$name', message = '$message' WHERE id=$id";
    mysqli_query($db_connect, $select_query);
}

// * Удалить данные из БД
function deleteData($id)
{
    global $db_connect;
    $delete_query = "DELETE FROM guest_book WHERE id=$id";
    mysqli_query($db_connect, $delete_query);
}
