<?php
include 'db_pl.php';

session_start();
$title = $_POST["title"];
$content = $_POST["content"];
$verify = $_POST["verify"];

// 读取session里面的值
$code = $_SESSION["code"];

//echo $verify."--".$code;
if(strtolower($verify) == $code){
    $mysqli = connent();
    $sql = "insert into pinglun (title, content) VALUES ('$title', '$content')";
    $res = $mysqli->query($sql);
    echo $res;
}else{
    echo 2;
}
