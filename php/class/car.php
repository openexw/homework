<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/13
 * Time: 23:46
 */
class car{
    public $name ;
    public $brand;
    public $seat;


    function __construct($name,$brand,$seat){
        $this->name = $name;
        $this->brand = $brand;
        $this->seat = $seat;

    }
    function intro(){
        echo "这辆{$this->brand}的{$this->name}可以座{$this->seat}人";
    }

    public function move(){
        $this->rest();
        echo "drive";
    }
    public function rest(){
        echo "zZZ...";
    }
}
$car =new car("公交车","绿色",34);
$car->intro();