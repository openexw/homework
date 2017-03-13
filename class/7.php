<?php
class Tag{
    public $name;
    public $age;
    public $like;

    function __construct($name,$age,$like){
        $this->name=$name;
        $this->age=$age;
        $this->like=$like;
    }

    public function intro(){
        echo "我是一只{$this->name},我{$this->age}岁了,我喜欢{$this->like}";
    }
}
$tag = new Tag("老虎","5","吃人");
echo $tag->intro();