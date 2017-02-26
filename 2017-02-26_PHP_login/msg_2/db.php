<?php

header("Content-type: text/html; charset=utf-8");

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "root";
const DBNAME = "comment";


/**
 * 连接数据库
 * @return mysqli mysqli对象
 */
function connent(){
// 实例化一个mysqli对象
	$mysqli = new mysqli();
	//连接数据库
	$link = $mysqli->connect(HOST,USERNAME,PASSWORD,DBNAME);
	
	$mysqli->set_charset("utf8");
	//检查数据库是否连接成功
	if($mysqli->error){
		die("数据库连接失败".$mysqli->errno);	
	}
	return $mysqli;
}


/** 查询数据
 * @param $mysqli mysqli对象
 * @return array 查询出来的数据
 */
function queryData($mysqli){
// 查询t_comment表中的所有字段的SQL语句
	$sql = "select * from login";
	
	// 执行sql语句
	$res = $mysqli->query($sql);
	
	//$res->fetch_assoc()获取单条元素、返回的是一个数组Array
	while($row = $res->fetch_assoc()){
		$rows[] = $row;
	}
	return $rows;
}