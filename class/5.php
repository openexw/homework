<?php
//定义一个类
class Car {
    public $name = '汽车';  //公开的
    protected $color = '白色';  //受保护的  受保护的属性不允许外部调用
    private $price = '158000';  //私有的  私有属性不允许外部调用
    //内部方法
    function getName() {
        return $this->name;
    }
}
//实例化一个car对象
$car = new Car();
$car->name = "奥迪A6"; //设置对象的属性值
echo $car->name."&nbsp;";  //调用对象的方法 输出对象的名字
echo $car->getName();