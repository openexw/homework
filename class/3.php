<?php
class Dog{
    public $name;
    public $age;

    //构造函数
    function __construct($name,$age){
        $this->name =$name;
        $this->age = $age;
    }

    //析构函数
    function __destruct(){

    }

    public function getdog(){
        echo "汪汪汪……";
    }

    public function look(){
        $this->getdog();
    }

    public function intro(){
        echo "我叫{$this->name},今年{$this->age}岁了";
    }
}


$dog = new Dog("大牛",5);
echo $dog->look();
echo $dog->intro();