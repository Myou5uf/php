<?php

// TODO: str_replace — Заменяет все вхождения строки поиска на строку замены
echo '<h4>str_replace — Заменяет все вхождения строки поиска на строку замены</h4>';
$str1 = "[i]Привет[/i], меня зовут [b]Андрюха[/b]!";
$str1 = str_replace('[b]', '<b>', $str1);
$str1 = str_replace('[/b]', '</b>', $str1);
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];

$str1 = str_replace($search, $replace, $str1);  // ? ireplace - с учетом регистра
// $str1 = str_ireplace($search, $replace, $str1); // ? ireplace - без учета регистра
echo $str1;

// TODO: strip_tags — Удаляет теги HTML и PHP из строки
echo '<h4>strip_tags — Удаляет теги HTML и PHP из строки</h4>';
$str2 = '<i>Привет!</i> Меня зовут <b>Андрюха</b>! <script>alert("XSS")</script>';
echo strip_tags($str2, '<b><i>');

// TODO: strlen — Возвращает длину строки
echo '<h4>strlen — Возвращает длину строки (возвращает кол-во БАЙТ)</h4>';
$str3 = "Hello";
$str4 = "Привет";
// !!! Функция strlen() возвращает кол-во БАЙТ, а не число символов в строке
echo strlen($str3); // OUTPUT: 6
echo '<br>';
echo strlen($str4); // OUTPUT: 12

// TODO: mb_strlen — Получает длину строки
echo '<h4>mb_strlen — Получает длину строки</h4>';
$str5 = "Hello";
$str6 = "Привет";
echo mb_strlen($str5);
echo '<br>';
echo mb_strlen($str6, 'utf-8');
