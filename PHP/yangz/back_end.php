<?php
include "connect_mysql.php";
$email =$_POST["email"];
$username =$_POST["username"];
$content =$_POST["content"];
$mysqli = connect();
$sql = "insert into article (email,username,content) VALUES ('$email','$username','$content')";

//执行SQL语句
$res =$mysqli->query($sql);
echo $res;