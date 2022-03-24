<?php

class WriteFile
{

    public $fOpen;      // указатель на открытый файл
    public $filename;   // Путь к файлу


    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->fOpen = fopen($filename, 'a');

        // Если файл НЕ существует и НЕ доступен для записи
        if (!is_writable($this->filename)) {
            // то вывести сообщение
            echo "Файл ($this->filename) недоступен для записи";
            exit();
        }
    }

    public function __destruct()
    {
        fclose($this->fOpen);
    }

    // Записать в файл переданный текст при инициализации
    public function write2File($text)
    {
        if (!$this->fOpen) {
            echo "Не могу открыть файл ($this->filename)";
            exit();
        }
        if (fwrite($this->fOpen, $text . "\n") === FALSE) {
            echo "Не могу произвести запись в файл ($this->filename)";
            exit();
        }
        echo "Ура! Записали ($text) в файл ($this->filename)";
    }
}
