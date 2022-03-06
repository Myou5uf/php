<?php
require_once('inc/func.php');

echo '<h3>Главная часть</h3>';

// Копирование файла из папки inc/text.txt в папку file c новым названием file.txt
// copy('inc/text.txt', 'file/file.txt');

// Если файл существует то ...., иначе ...
// if (file_exists('file/file.txt')) {
//     echo 'Файл существует';
// } else {
//     echo 'Файла нет';
// }

// $file = file_get_contents('inc/text.txt');
// echo $file;

// $file2 = file_get_contents('https://www.php.net/');
// echo $file2;

// $file = file_get_contents('https://www.php.net/');
// $file2 = file_get_contents('inc/text.txt');
// file_put_contents('file/file.txt', $file);
// добавить к существуещему файлу ещё данные  в конец
// file_put_contents('file/file.txt', $file2, FILE_APPEND);


$file = file('inc/text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre?>';
print_r($file);
echo '</pre>';

// echo '<br>';
// if (is_dir('file')) echo "Это папка";
// else echo "Это не папка";

// if (is_dir('.')) echo "Это папка";  // . - это указатель текущей папки, относительно файла main.php
// else echo "Это не папка";

// if (is_dir('..')) echo "Это папка"; // .. - это указатель родительской папки папки inc в котром находится файл main.php
// else echo "Это не папка";
