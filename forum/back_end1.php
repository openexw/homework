<?php
/*登陆页面的后台控制数据*/
include "connect_mysql.php";

$username =$_POST["username"];
$password =$_POST["password"];

if($username == "zhang" && $password == "852"){
    $mysql =connect();
    $sql = "select * from article where username='".$username."' and password='".$password."'";
    $res =$mysql->query($sql);
    echo $res->num_rows;
}else{
    echo 2;
}




