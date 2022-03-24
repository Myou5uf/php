<?php

class Car
{
    public $color;          // Цвет
    public $wheels = 4;     // Кол-во колес
    public $speed = 220;    // Скорость
    public $brand;          // Бренд

    public static $countCar = 0;    // ? static Статическое свойство - кол-во машин

    // ! Константы (const, как и свойства(static) принадлежат к классу, а не объекту)
    const TEST_CAR = "Прототип";
    const TEST_CAR_SPEED = 300;


    // Конструктор  для инициализации объекта с аргументами
    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

        self::$countCar++;
    }

    // Статический метод возвращает кол-во машин
    public static function getCount()
    {
        // ? self:: - обращение к статическому свойству
        return self::$countCar;
    }

    public function getPrototypeInfo()
    {
        return "<h3>Данные тестового авто:</h3>
        Наименование: " . self::TEST_CAR . "<br>
        Скорость:  " . self::TEST_CAR_SPEED . "<br>
        ";
    }

    // Получить информацию о объекте
    public function getCarInfo()
    {
        // Вывод информации о объекте
        return "<h3>О моём авто</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колес: {$this->wheels}<br>
        Скорость: {$this->speed}<br>
        ";
    }
}
