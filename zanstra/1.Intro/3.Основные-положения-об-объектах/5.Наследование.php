<?php
$productl = new ShopProduct1(
    "Собачье сердце",
    "Михаил",
    "Булгаков",
    5.99
);

$product2 = new ShopProduct2(
    "Классическая музыка. Лучшее",
    "Антонио",
    "Вивальди",
    10.99
);


print "Автор: " . $productl->getProducer() . "<br />\п";
print "Исполнитель: " . $product2->getProducer() . "<br />\п";

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages = 0,
        int $playLength = 0
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }
    public function getNumberOfPages()
    {
        return $this->numPages;
    }
    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        if ($this->type == 'book') {
            $base .= ": {$this->numPages} стр.";
        } elseif ($this->type == 'cd') {
            $base .= "Время звучания - {$this->playLength}";
        }
        return $base;
    }
}
