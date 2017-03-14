<?php
class Pet{
    protected $name="宠物类";

    public function eat(){
        echo "我是".$this->name;
    }
    public function sleep(){
        echo "我也喜欢睡觉";
    }
}
