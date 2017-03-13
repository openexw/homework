<?php

class People{
    public $name;
    public $age;
    public $like;

    function __construct($name,$age,$like){
    $this->name=$name;
    $this->age=$age;
    $this->like=$like;
    }

    public function intro(){
    echo "我的名字叫{$this->name},今年{$this->age}岁,我喜欢{$this->like}";
    }
}
$people = new People("Jack","19","打篮球");
echo $people->intro();