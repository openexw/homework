<?php
/* session_start();
$width =80;
$height =30;
$type =3;
$len = 4;
$piexl=50;
$line=5;
$session_name="code";
$_SESSION[$session_name]=$str; */
function code($height =30, $type =3,$len = 4,$piexl=50,$line=5,$width =80,$session_name="code")
{
	session_start();
	//1.创建画布
	$image = imagecreatetruecolor($width,$height);
	//2.
	$white =imagecolorallocate($image,200,200,160);
	$black =imagecolorallocate($image,0,0,0);
	
	//3.填充整个矩形区域
	imagefilledrectangle($image,1,1,$width-2,$height-2,$white);
	
	//4.准备字符串
	$str =getStr($type,$len);
	
	$_SESSION[$session_name]=$str;
	//5.准备字体文件
	$fontFlie = array("MSYH.TTC","MSYHBD.TTC","MSYHL.TTC","SIMKAI.TTF","SIMSUN.TTC",);
	/* $font_file = "font/".$font_array[mt_rand(0,count($font_array)-1)];
	 imagettftext($image,14,-10,0,20,$black,$font_file,$str); */
	//单独绘制文字
	for ($i=0;$i<strlen($str);$i++){
		$size=mt_rand(14,18);
		$angle=mt_rand(-15,15);
		$x=5+$size*$i;
		$y=mt_rand(20,26);
		$color=imagecolorallocate($image, mt_rand(90,120), mt_rand(100,290), mt_rand(120,250));
		$font_file="font/".$fontFlie[mt_rand(0,count($fontFlie)-1)];
		$text=substr($str, $i,1);
		imagettftext($image, $size, $angle, $x, $y, $color, $font_file, $text);
	}
	/**
	 * 干扰元素。
	 */
	if($piexl){
		for($i=0;$i<$piexl ; $i++){
			imagesetpixel($image, mt_rand(1,$width-2), mt_rand(1,$height-2), $black);
		};
	}
	if($line){
		for($i=0;$i<$line;$i++){
			$color=imagecolorallocate($image, mt_rand(90,120), mt_rand(100,290), mt_rand(120,250));
			imageline($image, mt_rand(1,$width), mt_rand(0,$height), mt_rand(1,$width), mt_rand(0,$height), $color);
		}
	}
	//输出图片
	header("content-type:image/gif");
	imagegif($image);
	imagedestroy($image);
}
/**
 * @param $type类型：1-纯数字；2-纯字母；3-数字加字母
 * @param $len 验证码的长度
 * @return string 验证码的字符串
 * 可选参数
 */
function getstr($type=1,$len=4){
	if($type == 1){
		$str = "123456789";
	}else if($type == 2){
		$str = "asfagdagdgrgdgagda";
	}else{
		$str = "12154635dagdgrgdgagda";
	}
	//将字符串打乱
	$chars = str_shuffle($str);
	//截取$len个长度的字符串，并返回
	return substr($chars,0,$len);
}
code($height =30, $type =3,$len = 4,$piexl=50,$line=5,$width =80,$session_name="code");