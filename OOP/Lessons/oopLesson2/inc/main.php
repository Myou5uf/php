<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$lada = new Car();
debug($lada);

$lada->color = "Красный";
$lada->brand = "LADA";
$lada->speed = "360";
debug($lada);

$volvo = new Car();
$volvo->color = "Черный";
$volvo->brand = "Volvo";
$volvo->speed = "200";
debug($volvo);

// Добавление свойств динамически
$lada->year = "2018";
$volvo->year = "2020";
debug($lada);
debug($volvo);


// Вывод информации о объекте
echo "<h3>О моём авто</h3>
Марка: {$lada->brand}<br>
Цвет: {$lada->color}<br>
Кол-во колес: {$lada->wheels}<br>
Год выпуска: {$lada->year}<br>
Скорость: {$lada->speed}<br>
";
