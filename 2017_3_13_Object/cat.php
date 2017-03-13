<?php
class Cat{
    public $breed;
    public $name;
    public $sleep;
    public $color;
    function __construct($color,$name,$breed,$sleep){
        $this->color = $color;
        $this->name = $name;
        $this->breed = $breed;
        $this->sleep = $sleep;
    }

    function intro(){
        echo "一只{$this->color}的，名字叫{$this->name}的{$this->breed}正在{$this->sleep}";
    }
}

$cat = new Cat("黑色","小黑","波斯猫","睡觉");
$cat->intro();