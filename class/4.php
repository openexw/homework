<?php
class Trees{
    public $name;
    public $leaf;
    public $color;

    function __construct($name,$leaf,$color){
        $this->name=$name;
        $this->leaf=$leaf;
        $this->color=$color;
    }

    public function intro(){
        echo "我是一颗{$this->leaf}{$this->name},我的颜色是{$this->color}";
    }
}
$trees = new Trees("柏树","大的","绿色");
echo $trees->intro();