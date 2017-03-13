<?php
class Tank{
    public $name;
    public $caliber;
    public $color;
    public $fire;
    function __construct($color,$name,$caliber,$fire){
        $this->color = $color;
        $this->name = $name;
        $this->caliber = $caliber;
        $this->fire = $fire;
    }

    function intro(){
        echo "一辆{$this->color}的{$this->name}坦克使用{$this->caliber}口径的主炮向敌人{$this->fire}了";
    }
}

$tank = new Tank("绿色","99式","120毫米","开炮");
$tank->intro();