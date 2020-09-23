<?php

namespace Modules\Shop;

class UserCart extends Cart {
    private $name;

    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}