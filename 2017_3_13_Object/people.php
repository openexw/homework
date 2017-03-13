<?php
class People{
    public $look;
    public $sex;
    public $exercise;
    function __construct($look,$sex,$exercise){
        $this->look = $look;
        $this->sex = $sex;
        $this->exercise = $exercise;
    }

    function intro(){
        echo "一个{$this->look}的{$this->sex}喜欢{$this->exercise}。";
    }
}

$People = new People("阳光","男孩","打篮球");
$People->intro();