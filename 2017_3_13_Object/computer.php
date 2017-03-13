<?php

class Computer{
    public $type;
    public $price;
    public $money;
    public $brand;
    function __construct($brand,$type,$price,$money){
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
        $this->money = $money;
    }

    function intro(){
        echo "一台{$this->brand}的{$this->type}电脑{$this->price}为{$this->money}元。";
    }
}

$computer = new Computer("惠普","笔记本","价格","5000");
$computer->intro();