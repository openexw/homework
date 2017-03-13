<?php
class Pen{
    public $color;
    public $type;
    public $effect;
    public $job;
    function __construct($color,$type,$effect,$job){
        $this->color = $color;
        $this->type = $type;
        $this->effect = $effect;
        $this->job = $job;
    }

    function intro(){
        echo "我用一只{$this->color}的{$this->type}{$this->effect}我的{$this->job}";
    }
}

$pne = new Pen("黑色","钢笔","书写","作业");
$pne->intro();