<?php
namespace Users;
use \Core\Admin\Data; // подключаем класс
use \Core\Admin\Data2; // подключаем класс
use \Core\Admin\Controller; // подключаем класс

class Page extends Controller
{
    public function __construct()
    {
        $data1 = new Data('1'); // вызываем просто по имени
        $data2 = new Data2; // вызываем просто по имени
    }
}