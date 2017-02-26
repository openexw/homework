<?php

/**
 * @param int $width 验证码宽度
 * @param int $height 验证码高度
 * @param int $type  类型： 1-纯数字； 2-纯字母； 3-数字+字母
 * @param int $len 验证码长度
 * @param int $line 干扰元素--点的个数； 0表示没有点
 * @param int $pixel 干扰元素--线的个数； 0表示没有线
 * @param string $session_name 验证码存到session中的名字
 */
function code($width = 80,$height = 30,$type = 3,$len = 4,$line = 4,$pixel = 50,$session_name = "code"){
    session_start();
    // 1.创建画布
    $image = imagecreatetruecolor($width,$height);

// 2.创建颜色
    $white = imagecolorallocate($image,255,255,255);
    $black = imagecolorallocate($image,0,0,0);

// 3.填充整个矩形区域
    imagefilledrectangle($image,1,1,$width-2,$height-2,$white);

// 4.准备字符串
    $str = getStr($type,$len);

// 将字符串存到SESSION中
    $_SESSION[$session_name] = $str;

// 5.准备字体
    $fontFile = array("Deng.ttf","Dengb.ttf","Dengl.ttf","FZYTK.TTF",
        "msyh.ttc",
        "msyhbd.ttc",
        "msyhl.ttc",
        "simfang.ttf",
        "STLITI.TTF",
        "STXINWEI.TTF");

// 6.单独绘制文字
    for($i=0; $i<strlen($str); $i++){
        $size = mt_rand(14, 18);
        $angle = mt_rand(-15, 15);
        $x = 5 + $size*$i;
        $y = mt_rand(20, 26);
        $color = imagecolorallocate($image, mt_rand(90, 120),mt_rand(100,200),mt_rand(120,250));
        $font_file = "font/".$fontFile[mt_rand(0,count($fontFile)-1)];
        $text = substr($str,$i,1);
        imagettftext($image, $size, $angle, $x, $y, $color, $font_file, $text);
    }

// 7.干扰元素--点
    if($pixel){
        for($i=0; $i<$pixel; $i++){
            imagesetpixel($image, mt_rand(1, $width-2), mt_rand(1, $height-2), $black);
        }
    }

// 9.干扰元素--线
    if($line){
        for($i=0; $i<$line; $i++){
            $color = imagecolorallocate($image, mt_rand(90, 120),mt_rand(100,200),mt_rand(120,250));
            imageline($image, mt_rand(1, $width-2), mt_rand(0, $height-2), mt_rand(1, $width-2), mt_rand(0, $height-2),$color);
        }
    }

// 输出图片
    header("content-type:image/gif");
// 输出图像到浏览器或文件
    imagegif($image);
// 销毁一图像
    imagedestroy($image);
}




/**
 * @param $type 类型：1-纯数字； 2-纯字母； 3-数字+字母
 * @param $len 验证码的长度
 * @return string 验证码的字符串
 */
function getStr($type=1,$len=4){
    if ($type == 1) {
        $str = "1234567890";
    } else if ($type == 2) {
        $str = "dsajfoisadjf";
    } else {
        $str = "1234567890abcdefghijklmnopqrstuvwxyz";
    }

    // 将字符串打乱
    $chars = str_shuffle($str);
    // 截取$len个长度的字符串，并返回
    return substr($chars, 0, $len);

}













