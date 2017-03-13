<?php
class animal{
	private $sex;
	public $name="10";
	public $age;
	public $color;
	
	/*publi共有的
	 * private私有的
	 */
	function sayhello(){
		echo "hello girl!";
	}
	function eat(){
		echo  "hanberger";
	}
}
$annime=new animal();
echo $annime->name;
$annime->sayhello();
echo $annime->age=20;
$wo=new animal();
$wo->eat();
?>
