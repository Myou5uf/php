<?php

class Car
{
    public $color;          // Цвет
    public $wheels = 4;     // Кол-во колес
    public $speed = 220;    // Скорость
    public $brand;          // Бренд

    // Конструктор  для инициализации объекта с аргументами
    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    // Пример разрыва тела класса
    public function getLorem()
    {
?>
        <div>Hello World!</div>
<?php
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


    public function __destruct()
    {
        var_dump($this);
    }
}
