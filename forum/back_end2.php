<?php
/*注册页面的后台控制数据*/
include "connect_mysql.php";

session_start();
$username =$_POST["username"];
$email =$_POST["email"];
$password =$_POST["password"];
$verify =$_POST["verify"];

//读取session里面的值
$code = $_SESSION["coo"];

if(strtolower($verify) == $code){
    $mysql =connect();
    $sql ="insert into article(username,email,password) VALUES ('$username','$email','$password')";
    $res =$mysql->query($sql);
    echo $res;
}else{
    echo 2;
}








