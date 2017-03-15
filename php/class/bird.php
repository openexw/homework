<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/14
 * Time: 0:38
 */
class bird{
    public $name ;
    public $month  ;
    public $color;
    public $breed ;

    function __construct($name,$month,$color,$breed){
        $this->name = $name;
        $this->month = $month;
        $this->color = $color;
        $this->breed =$breed;
    }
    function intro(){
        echo "我是{$this->name},我是一条{$this->color}的{$this->breed},今年{$this->month}个月了。";
    }
    public function fly(){
        $this->say();
        echo "飞翔";
    }
    public function say(){
        echo "叫...";
    }
}
$bird =new bird("小黑",1,"灰黑","燕子");
$bird->intro();
