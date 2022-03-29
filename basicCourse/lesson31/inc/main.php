<?php

// ? Распечать массив
function print_arr($array)
{
    echo '<pre>';
    echo print_r($array, true);
    echo '</pre>';
}

// * mysqli_connect() - Установить новое соединение с сервером MySQL или завершить работу, вызвав сообщение
$db_connect = @mysqli_connect('127.0.0.1', 'root', '', 'guest_book') or die("Ошибка соединения с БД");
if (!$db_connect) die(mysqli_connect_error());  // Если соединение не установление вывести причину ошибки

// * mysqli_set_charset() - Установить кодировку
mysqli_set_charset($db_connect, "utf8") or die("Не установлена кодировка");


// * Строка запроса SELECT
$select_query = "SELECT * FROM book ORDER BY id DESC";
$res_select = mysqli_query($db_connect, $select_query);
// var_dump($res_select);

// * mysqli_fetch_all() - Выбирает все строки из результирующего набора и помещает их в ассоциавтивный массив,
// * обычный массив или в оба
// $data = mysqli_fetch_all($res_select, MYSQLI_ASSOC);
// print_arr($data);


// * mysqli_fetch_assoc() - Извлекает результирующий ряд в виде ассоциативного массива. Возвращает ассоц.массив,
// * соответствующий результирующей выборке или NULL, если других рядов нет существует
$data2 = [];
while ($row = mysqli_fetch_assoc($res_select)) {
    $data2[$row['id']] = $row;
}
print_arr($data2);

// Перебрать ассоциативный массив и вывести данные поэлементно
foreach ($data2 as $item) {
    echo "Name: {$item['name']} <br>";
    echo "Message: {$item['message']} <br>";
    echo "Date: {$item['date']} <br>";
    echo "<hr>";
}

// * mysqli_num_rows() - Получает число рядов в результирующей выборке
echo mysqli_num_rows($res_select);


// * mysqli_real_escape_string() - Экранирует специальные симвлы в строке, используемой в SQL-запросе
// * принимая во внимание кодировку соединения
$name = "О'Брайен";
$name = mysqli_real_escape_string($db_connect, $name);
$escape_query = "INSERT INTO book (name, message) VALUES ('$name', 'Экранирование спец. символов в строке')";
$res_escape = mysqli_query($db_connect, $escape_query) or die(mysqli_error($db_connect));


echo '<h2>Функции PHP для работы с базами данных. Часть 2</h2>';
