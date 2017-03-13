<?php
class mylove{
	public $name;
	public $age;
	public $sex;
	public $height;
	public $weight;
	function __construct($name, $age, $sex){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
	function printf(){
		echo "mylove is{$name} she is{$age}and her height is{$height}so how wonderful";
	}
}
$myl=new mylove("jiangfang","24","165");
 echo  $myl->printf();
