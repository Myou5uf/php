<?php

// ? записать данные из формы в файл
function write2file($name, $message, $date)
{
    $str = $name . '; ' . $message . '; ' . $date . "\n***\n";
    file_put_contents('book/dataBook.txt', $str, FILE_APPEND);
}

// ? Считать файл и вернуть данные (в виде строки)
function getMessage()
{
    return file_get_contents('book/dataBook.txt');
}

// ? Получить из строки массив
function getArrayFromString($str)
{
    $str = explode("\n***\n", $str);
    array_pop($str);    // Извлекает последний элемент массива (т.к. он пустой)
    return array_reverse($str);
}

// ? Распечать массив
function print_arr($array)
{
    echo '<pre>';
    echo print_r($array, true);
    echo '</pre>';
}

// ? Вернуть массив строк, разбитый символом ;
function getFormatMessage($row)
{
    return explode(';', $row);
}
