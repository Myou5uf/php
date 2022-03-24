<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 220;
    public $brand;

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
