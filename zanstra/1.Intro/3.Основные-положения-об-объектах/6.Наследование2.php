<?php
class CdProduct
{
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
        int $playLength
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }
    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName}";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}
class BookProduct
{
public $numPages;
public $title;
public $producerMainName;
public $producerFirstName;
public $price;
public function __construct(
string $title,
string $firstName,
string $mainName,
float $price,
int $numPages
) {
    $this->title = $title;
$this->producerFirstName = $firstName;
$this->producerMainName = $mainName;
$this->price = $price;
$this->numPages = $numPages;
}
public function getNumberOfPages()
{
return $this->numPages;
}
public function getSummaryLine()
{
$base = "{$this->title} ( {$this->producerMainName}",
$base .= "{$this->producerFirstName} ) ";
$base .= "{$this->numPages} стр.";
return $base;
}
public function getProducer()
{
return $this->producerFirstName . " "
. $this->producerMainName;
}}