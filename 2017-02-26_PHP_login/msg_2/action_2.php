<?php
require_once "db.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$verify = $_POST["verify"];
$code = $_SESSION["code"];
$mysqli = connent();


if(strtolower($verify) == $code) {
    $sql = "select * from login where username ='$username' and password='$password'";

    $res = $mysqli->query($sql);
    $num = $res->num_rows;
    if ($num) {
        echo $num;
    } else {
        echo 0;
    }
}else{
    echo 2;
}

/*$sql = "select * from login where username ='$username' and password='$password'";

$res = $mysqli->query($sql);
$num = $res->num_rows;
if($num){
    echo $num;
}else{
    echo 0;
}*/
