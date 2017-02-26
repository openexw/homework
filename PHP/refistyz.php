<?php
include "regiestyz1.php";
$username =$_POST["username"];
$password =$_POST["password"];
 $mysql =connect();
 $sql ="insert into mylogin(username,passworder) VALUES ('$username','$password')";
 $res =$mysql->query($sql);
 echo $res;


/* $mysql =connect();
$sql = "select * from mylogin where username= '$username' and passworder='$password' ";
$res =$mysql->query($sql);
$num  = $res->num_rows;
if($num){
	echo $num;
}else{
	echo 0;
}
 */
