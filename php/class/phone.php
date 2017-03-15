<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/13
 * Time: 23:38
 */
class phone{
public $name ;
public $brand;
public $color;


function __construct($name,$brand,$color){
    $this->name = $name;
    $this->brand = $brand;
    $this->color = $color;

}
function intro(){
    echo "这个{$this->color}的{$this->name}{$this->brand}";
}

public function call(){
    $this->watch();
    echo "hello";
}
public function watch(){
    echo "电影...";
}
}
$phone =new phone("小米",4,"白色");
$phone->intro();
