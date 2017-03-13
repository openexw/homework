<?php
class Car{
    public $name = "奥迪A9";
    public $color = "蓝色";
    private $much = "￥：286,9000元";

    function getname(){
        return "宝马";
    }
}
$car = new Car();
echo $car->getname();
