<?php
require_once('inc/func.php');
echo '<h1>Главная часть</h1>';
echo '<br>';

echo '<p>Функция сount</p>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$countArr = getCountArr($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo ('Количество элементов массива: ' . $countArr);

// Таблица из массива данных
echo '<h1>Таблица</h1>';
$arr6 = [
    [
        "title" => "Nokia",
        "description" => "Непробиваемый",
        "price" => "50$"
    ],
    [
        "title" => "Honor",
        "description" => "Надежный",
        "price" => "250$"
    ],
    [
        "title" => "Ihone",
        "description" => "Хиленький",
        "price" => "1000$"
    ],
    [
        "title" => "Samsung",
        "description" => "Классика",
        "price" => "800$"
    ]
];
echo renderTable($arr6);

echo '<h3>Таблица умножения</h3>';
echo getMultiplicationTable(10);
