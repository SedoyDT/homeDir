<?php

namespace Project;
use \Core\Admin\Data; // подключаем класс

class Page extends Data
{
    public function __construct()
    {
        $data1 = new Data('1'); // вызываем просто по имени
        $data2 = new Data('2'); // вызываем просто по имени
    }
}