<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/14
 * Time: 0:14
 */
class person{
    public $name ;
    public $age;
    public $sex;

    function __construct($name,$age,$sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    function intro(){
        echo "我是一名性别为{$this->sex}，今年{$this->age}岁的{$this->name}";
    }
    public function say(){
        $this->play();
        echo "hello...";
    }
    public function play(){
        echo "电脑...";
    }
}
$person =new person("XXX",14,"男");
$person->intro();