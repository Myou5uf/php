<?php

// * Копирования файл в папу file с новым называнием file.txt
// copy('copy.txt', 'file/file.txt');

// * file_exists() - Проверяет наличие указанного файла или каталога
if (file_exists('file/file.txt')) {
    echo 'Файл существует';
} else {
    echo 'Такого файла нет';
}

echo '<br>';
// * file_get_contents() - Читает содержимое файла в строку
// echo nl2br($file = file_get_contents('file/file.txt'));
// echo $filePhp = file_get_contents('https://www.php.net/');

// * file_put_contents() - Пишет строку в файл
// $file1 = file_get_contents('https://www.php.net/manual/ru/function.file-put-contents.php');
// $file2 = file_get_contents('https://www.php.net/');
// file_put_contents('file/file.txt', $file1);
// file_put_contents('file/file.txt', $file2, FILE_APPEND);

// * file() - Читает содержимое файла и помещает его в массив
$file3 = file('copy.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($file3);
echo '</pre>';

// * is_dir() - Определяет, является ли имя файла директорией
if (is_dir('file')) echo "Это каталог";
else echo "Это НЕ каталог";

echo '<br>';
// * is_dir() - Определяет, является ли файл обычным файлом
if (is_file('copy.txt')) echo "Это файл";
else echo "Это НЕ файл";

echo '<br>';
// * rename() - переименовывает файл или директорию
rename('copy.txt', 'file/copy.txt');

echo '<br>';
// * mkdir() - Создает директорию 
// mkdir('1/2/3', 0777, true);

echo '<br>';
// * rmdir() - Удаляет директорию
// mkdir('rmdir');
// rmdir('rmdir');

echo '<br>';
// * touch() - Устанавливет время доступа и модификации файла
touch('file/copy.txt', time() - 3600 * 24);

echo '<br>';
// * unlink() - Удаляет файл
unlink('file/file.txt');
