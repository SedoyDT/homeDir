<?php
class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = $shopProduct->title . "
. $shopProduct->getProducer()
. ’’ (" . $shopProduct->price . ")\n";
        print $str;
    }
}
class ShopProduct2
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
    // ...
}
class ConfReader
{
    public function getValues(array $default = null)
    {
        $values = [];
        // Выполнить действия для получения новых значений
        // Объединить полученные значения со стандартными
        // (результат всегда будет находиться в массиве)
        $values = array_merge($default, $values);
        return $values;
    }
}

$productl = new ShopProduct2(
    "Собачье сердце",
    "Михаил",
    "Булгаков",
    "5.99"
);
$writer = new ShopProductWriter();
$writer->write($productl);
