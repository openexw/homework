<?php
include 'db.php';

session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$verify = $_POST["verify"];

// 读取session里面的值
$code = $_SESSION["code"];

//echo $verify."--".$code;
if(strtolower($verify) == $code){
    $mysqli = connent();
    $sql = "insert into login (username, password, email) VALUES ( '$username', '$password', '$email')";
    $res = $mysqli->query($sql);
    echo $res;
}else{
    echo 2;
}

