<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

echo Car::getCount();
echo '<br>';
// Инициализация объектов
$lada = new Car("Красный", 4, 360, "LADA");
echo Car::getCount();
echo '<br>';
$bmw = new Car("Серый", 4, 280, "BMW");
echo Car::getCount();
echo '<br>';
$bmw = new Car("Серый", 4, 280, "BMW");
echo Car::getCount();
echo '<br>';

echo $lada->getCarInfo();
echo $bmw->getCarInfo();


echo $lada->getPrototypeInfo();
echo Car::TEST_CAR_SPEED;
// echo $lada->getLorem();
