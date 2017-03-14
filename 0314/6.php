<?php
require_once "4.php";
class Cat extends Pet{
    private $age= 3;
    private $color;

    public function like(){
        echo "我今年{$this->age}岁了,我喜欢捉老鼠";
    }
}
$cat = new Cat();
echo $cat->like();