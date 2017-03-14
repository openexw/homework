<?php
require_once "4.php";

class Dog extends Pet{
    private $age;
    private $color="白色";

    public function like(){
        echo "我的颜色是{$this->color},我喜欢拿耗子";
    }
}

$dog = new Dog();
echo $dog->eat();