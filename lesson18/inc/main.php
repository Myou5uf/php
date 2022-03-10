<?php

// TODO: explode - Разбивает строку с помощью разделителя
echo '<h4>explode - Разбивает строку с помощью разделителя</h4>';
$str1 = 'Иванов Иван Иванович';
$data1 = explode(' ', $str1);
// $data = explode(' ', $str, 1); // 1 - Количество элементов массива

echo '<pre>';
print_r($data1);
echo '</pre>';

print_r($data1[2]);

// TODO: implode — Объединяет элементы массива в строку
echo '<h4>implode — Объединяет элементы массива в строку</h4>';
$data2 = ['Дима', 'Диман', 'Димас'];
$str2 = implode(' ', $data2);
// $str2 = join(' ', $data2); join - псевдоним implode
echo '<pre>';
print_r($data2);
echo '</pre>';

// TODO: trim — Удаляет пробелы (или другие символы) из начала и конца строки
// TODO: ltrim — Удаляет пробелы (или другие символы) из начала строки
// TODO: rtrim — Удаляет пробелы (или другие символы) из конца строки
echo '<h4>trim — Удаляет пробелы (или другие символы) из начала и конца строки</h4>';
$str3 = "   <p>Hello</p>";
$str3 .= "<p>World</p>   ";
// echo $str3;
// echo trim($str3);
$str4 = '......trim,';
echo trim($str4, ",");

// TODO: md5 — Возвращает MD5-хеш строки
echo '<h4>md5 — Возвращает MD5-хеш строки</h4>';
$str5 = 'password';
echo md5($str5);

// TODO: nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
echo '<h4>nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки</h4>';
$str6 = "Hello\n World\n";
echo nl2br($str6);
