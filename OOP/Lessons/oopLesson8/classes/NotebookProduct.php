<?php

class NotebookProduct extends Product
{

    public $cpu;    // Процессор

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }


    // Получить информацию о товаре
    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }


    // Получить информацию о процессоре
    public function getCpu()
    {
        return $this->cpu;
    }
}
