<?php require_once('inc/func.php');
echo '<h3>Главная часть</h3>';

echo '<p>Функция без параметров</p>';
sum();
echo '<br>';
echo '<p>Функция с параметрами</p>';
sum_param(20, 40);
$x = 123;
$y = 2323;
sum_param($x, $y);

echo '<br>';
echo '<p>Функция с параметрами по умолчанию</p>';
sum_param_default();    // 15
sum_param_default(2);   // 12

echo '<br>';
echo '<p>Функция с передачей параметра по ссылке</p>';
$a = 5;
$b = 10;
echo $a;
echo '<br>';
sum_param_link($a, $b);
echo $a;

echo '<br>';
echo '<p>Функция с return</p>';
$c = sum_param_return(1, 2);
echo $c;

echo '<br>';
echo '<p>Функция возвращает ключи элемента массива</p>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$keyArr = arrKeys($arr);
echo '<pre>';
print_r($keyArr);
echo '</pre>';

echo '<br>';
echo '<p>Функция сount</p>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$countArr = getCountArr($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
print_r($countArr);

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
    ]
];

echo renderTable($arr6);
