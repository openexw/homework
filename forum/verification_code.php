<?php
/**
 * 验证码的各个参数
 * @param int $width  图片的宽度
 * @param int $height  图片的高度
 * @param int $type  显示已设定的字符串类型
 * @param int $len  显示字符串的长度
 * @param int $pixel 干扰的点
 * @param int $line  干扰的线条
 * @param string $session_name 验证码存到$_SESSION中的名字
 */


function verification_code($width =92,$height =42,$type =3,$len = 4,$pixel =20,$line = 4,$session_name = "coo"){
    session_start();

    //1.创建画布
    $image = imagecreatetruecolor($width,$height);

    //2.imagecolorallocate:为一幅图像分配颜色
        $background =imagecolorallocate($image,220,220,160);
        $black =imagecolorallocate($image,10,100,200);

    //3.imagefilledrectangle():画一矩形并填充
        imagefilledrectangle($image,0,0,$width,$height,$background);

    //4.准备字符串(调用getstr()函数)
        $str =getstr($type,$len);
        $_SESSION[$session_name] = $str;

    //5.准备字体文件
        $font_array = array("hakuyoxingshu7000.TTF","Lobster-Regular.ttf","Raleway-Regular.ttf","RobotoSlab-Regular.ttf","simfang.ttf","simhei.ttf");

    //6.单独绘制文字
        //strlen():字符串的长度
        for($i=0; $i<strlen($str); $i++){
            //随机的字体尺寸
            $size = mt_rand(20,24);
            //随机的旋转角度
            $angle = mt_rand(-15,15);
            //x坐标
            $x = 5+$size*$i;
            //随机的y坐标
            $y = mt_rand(26,36);
            //随机的颜色
            $color = imagecolorallocate($image,mt_rand(90,120),mt_rand(100,210),mt_rand(120,260));
            //随机的字体文件:$font_file=""; $font_array数组中产生
            $font_file = "font/".$font_array[mt_rand(0,count($font_array)-1)];
            //依次截取每一个字符串：substr()
            $text = substr($str,$i,1);
            //在$image画布中写入文本：imagettftext()
            imagettftext($image,$size,$angle,$x,$y,$color,$font_file,$text);
        }

    //7.干扰元素--点
        if($pixel){
            for($i=0;$i<$pixel;$i++){
                //在$image画布中随机画一个单一像素(点):imagesetpixel()
                imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),$black);
            }
        }

    //8.干扰元素--线
        if($line){
            for($i=0;$i<$line;$i++){
                //在$image画布中随机创建一种颜色:imagecolorallocate()
                $color = imagecolorallocate($image,mt_rand(90,120),mt_rand(100,210),mt_rand(120,260));

                //在$image画布中随机画一条线段:imageline()
                imageline($image,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),$color);
            }
        }

    //9.输出图片
    header("content-type:image/gif");

    //imagegif() :输出图象到浏览器或文件
    imagegif($image);

    //imagedestroy() :销毁一图像(释放与$image关联的内存)
    imagedestroy($image);
}
verification_code();

/*
 * @param $type  类型：1-纯数字；2-纯字母；3-数字加字母
 * @param $len 验证码的长度
 */

//创建3种验证码类型的字符串 打乱并截取$len个字符串的长度
function getstr($type=1,$len=4){
    if($type == 1){
        $str = "123456789";
    }else if($type == 2){
        $str = "abcdefghijklmnopqrstuvwsyz";
    }else{
        $str = "13456789abcdefghijklmnopqrstuvwsyz";
    }

    //将字符串打乱
    $chars = str_shuffle($str);

    //截取打乱的$len个字符串长度，并返回
    return substr($chars,0,$len);
}