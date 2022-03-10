<?php

// TODO: strpos — Возвращает позицию первого вхождения подстроки
echo '<h4>strpos — Возвращает позицию первого вхождения подстроки</h4>';
$str1 = "Привет, Мир!";
echo mb_strpos($str1, 'е');
// echo mb_strpos($str1, 'е', 0, 'utf-8');  // 0 - смещение, 'utf-8' - кодировка
echo '<br>';
if (mb_strpos($str1, 'П', 0, 'utf-8') !== false) echo "OK";
else echo "No";
echo '<br>';

// TODO: strtolower — Преобразует строку в нижний регистр
echo '<h4>strtolower — Преобразует строку в нижний регистр</h4>';
$str2 = 'привет, мир';
$str3 = 'ПРИВЕТ, МИР';
echo mb_strtoupper($str2, 'utf-8');
echo '<br>';
echo mb_strtolower($str3, 'utf-8');

// TODO: substr — Возвращает подстроку
echo '<h4>substr — Возвращает подстроку</h4>';
$str4 = 'Привет, мир!';
echo mb_substr($str4, 8, 3, 'utf-8');   // ??? 8 - старт, 3 - кол-во символов, 'utf-8' - кодировка
echo '<br>';
echo mb_substr($str4, 0, 6, 'utf-8');
echo '<br>';
echo mb_substr($str4, -4, 3, 'utf-8');  // OUTPUT: мир

// TODO: htmlspecialchars — Преобразует специальные символы в HTML-сущности
echo '<h4>htmlspecialchars — Преобразует специальные символы в HTML-сущности</h4>';
$str5 = '<h1><i>Привет</i>! Меня зовут <b>\'Андрюха\'</b>!</h1><iframe src=https://vk.com></iframe><script>alert("XSSSSS")</script>';
echo htmlspecialchars($str5, ENT_QUOTES, 'utf-8', false);

// TODO: htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы
echo '<h4>htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы</h4>';
// echo htmlspecialchars_decode($str5);

// TODO: htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
echo '<h4>htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности</h4>';
