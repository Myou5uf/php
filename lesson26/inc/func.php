<?php
function sum()  // Функция без параметров
{
    echo 5 + 7;
    echo '<br>';
}

function sum_param($a, $b)  //  Функция с параметрами
{
    echo $a + $b;
    echo '<br>';
}
function sum_param_default($a = 5, $b = 10) // Функция с пердачей параметра по умолчанию
{
    echo $a + $b;
    echo '<br>';
}
function sum_param_link(&$a, $b) // &$a - передача параметра по ссылке
{
    echo $a + $b;
    echo '<br>';
    $a = 100;
}
function sum_param_return($a, $b) // функция с return 
{
    $c = $a + $b;
    return $c;
}
function arrKeys($arr) // ключи элементов массива
{
    $key = [];
    is_array($arr); // Является ли $arr массивом или нет
    foreach ($arr as $k => $v) {
        $key[] = $k;
    }
    return $key;
}

// *** Создать собственную функцию Count();
function getCountArr($arr)
{
    $countArr = 0;
    foreach ($arr as $item) {
        $countArr++;
    }
    return $countArr;
}

function renderTable($arr)
{

    echo '<table border=1>';
    echo '<caption>Таблица Телефоны</caption>';

    echo '<tr>';
    echo "<th>№</th>";
    echo "<th>Название</th>";
    echo "<th>Описание</th>";
    echo "<th>Цена</th>";
    echo '</tr>';

    foreach ($arr as $key => $val) {
        echo '<tr>';
        echo "<td>$key</td>";
        foreach ($val as $k => $v) {
            echo "<td>$v</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}
