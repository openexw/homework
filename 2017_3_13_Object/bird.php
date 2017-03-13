<?php
class Bird{
    public $color;
    public $breed;
    public $eat;
    public $food;
    function __construct($color,$breed,$eat,$food){
        $this->color = $color;
        $this->breed = $breed;
        $this->eat = $eat;
        $this->food = $food;
    }

    function intro(){
        echo "一只{$this->color}的{$this->breed}正在{$this->eat}一只{$this->food}";
    }
}

$bird = new Bird("黑色","老鹰","捕捉","兔子");
$bird->intro();