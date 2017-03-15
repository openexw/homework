<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/14
 * Time: 0:02
 */
class weapon{
    public $name ;
    public $model;
    public $bullet;

    function __construct($name,$model,$bullet){
        $this->name = $name;
        $this->model = $model;
        $this->bullet = $bullet;
    }
    function intro(){
        echo "这是一把拥有{$this->bullet}发子弹的{$this->model}{$this->name}";
    }
    public function file(){
        $this->send();
        echo "哒哒哒...";
    }
    public function send(){
        echo "...";
    }
}
$weapon =new weapon("卡宾枪","m4a1",35);
$weapon->intro();
