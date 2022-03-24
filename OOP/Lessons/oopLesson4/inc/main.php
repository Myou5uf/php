<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// Инициализация объектов
$lada = new Car("Красный", 4, 360, "LADA");
$bmw = new Car("Серый", 4, 280, "BMW");

debug($lada);
debug($bmw);


echo $lada->getCarInfo();
echo $bmw->getCarInfo();

// echo $lada->getLorem();
