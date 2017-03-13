<?php
class Animal{
    public $name="大象";
    public $age;
    public $sex;

    function cat(){
        echo "小猫";
    }
    function dog($say){
        echo $say."hello";
    }
}
$animal = new Animal();
echo $animal->cat();