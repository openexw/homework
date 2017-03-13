<?php
class House{
    public $color;
    public $type;
    public $site;
    public $location;
    function __construct($color,$type,$site,$location){
        $this->color = $color;
        $this->type = $type;
        $this->site = $site;
        $this->location = $location;
    }

    function intro(){
        echo "一栋{$this->color}的{$this->type}坐落在{$this->site}的{$this->location}。";
    }
}

$house = new House("白色","别墅","山峰","半山腰");
$house->intro();