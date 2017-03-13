<?php
class hername{
	public $butiful;
	public $face;
	public $fier;
	function __construct($butiful, $face, $fier){
		$this->butiful = $butiful;
		$this->face = $face;
		$this->fier = $fier;	
	}
	function putof(){
		echo "she is so {$this->name},i wanna kiss her{$this->breed},and touch her {$this->fier}";
	}
}
$love=new hername("butful", "face", "hair");
echo $love->putof();