<?php
class Car{
    public $color;
    public $type;
    public $run;
    public $site;
    function __construct($color,$type,$site,$run){
        $this->color = $color;
        $this->type = $type;
        $this->site = $site;
        $this->run = $run;
    }

    function intro(){
        echo "一辆{$this->color}的{$this->type}正在{$this->site}上{$this->run}。";
    }
}

$car = new Car("红色","轿车","高速路","行驶");
$car->intro();