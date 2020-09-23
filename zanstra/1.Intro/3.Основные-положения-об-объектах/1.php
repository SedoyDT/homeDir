<?php
class ShopProduct1
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}
$productl = new ShopProduct1();
print $productl->title;

$product2 = new ShopProduct1();
$product3 = new ShopProduct1();
$productl->title = "Собачье сердце";
$product2->title = "Ревизор";
