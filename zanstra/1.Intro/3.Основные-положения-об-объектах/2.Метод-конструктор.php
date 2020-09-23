<?php
class ShopProduct2
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;
    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}


$productl = new ShopProduct2(
    "Собачье сердце",
    "Михаил",
    "Булгаков",
    5.99
);
print "Автор: {$productl->getProducer()}\п";
