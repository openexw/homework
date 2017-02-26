<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "root";
const DB_NAME = "mylogin";
function connect(){
	$mysqli = new mysqli();
	$mysqli->connect(HOST,USERNAME,PASSWORD,DB_NAME);
	$mysqli->set_charset("utf8");
	if($mysqli->error){
		echo "数据库连接失败：".$mysqli->errno;
	}else{
		return $mysqli;
	}
}
function querydata($mysqli){
	$sql ="select * from mylogin";
	$res = $mysqli->query($sql);
	if($res){
		while($row = $res->fetch_assoc()){
			$rows[] = $row;
		}
		return $rows;
	}
}