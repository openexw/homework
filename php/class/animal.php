<?php
/**
 * Created by PhpStorm.
 * User: いけないボーダーライン
 * Date: 2017/3/13
 * Time: 23:57
 */
class animal{
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
    public function move(){
        $this->spit();
        echo "swim";
    }
    public function spit(){
        echo "吐泡泡...";
    }
}
$animal =new animal("小金",1,"金黄色","金鱼");
$animal->intro();
