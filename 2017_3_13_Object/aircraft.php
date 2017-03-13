<?php
class Aircraft{
    public $name;
    public $landing;
    public $color;
    public $site;
    function __construct($color,$name,$site,$landing){
        $this->color = $color;
        $this->name = $name;
        $this->site = $site;
        $this->landing = $landing;
    }

    function intro(){
        echo "一架{$this->color}的{$this->name}在{$this->site}机场{$this->landing}了";
    }
}

$aircraft = new Aircraft("白色","波音747","北京","降落");
$aircraft->intro();