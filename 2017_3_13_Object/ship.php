<?php
class Ship{
    public $color;
    public $type;
    public $site;
    public $war;
    function __construct($color,$type,$site,$war){
        $this->color = $color;
        $this->type = $type;
        $this->site = $site;
        $this->war = $war;
    }

    function intro(){
        echo "一艘{$this->color}的{$this->type}正在{$this->site}进行{$this->war}。";
    }
}

$ship = new Ship("蓝色","战舰","太平洋","战争");
$ship->intro();