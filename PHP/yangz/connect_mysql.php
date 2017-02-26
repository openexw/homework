<?php
//设置编码
header("Content-type:text/html;charset=utf-8");

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "root";
const DB_NAME = "testt";

function connect(){
    //实例化一个mysql对象
    $mysqli = new mysqli();

//链接数据库

    $link = $mysqli->connect(HOST,USERNAME,PASSWORD,DB_NAME);

    $mysqli->set_charset("utf8");
//检查数据库是否连接成功
    if($mysqli->error){
        die("数据库连接失败".$mysqli->errno);
    }else{
        return $mysqli;
    }
}


function querydata($mysqli){
    //查询testt表中的所有字段的SQL语句
    $sql = "select * from article";
    //执行SQL语句
    $res = $mysqli->query($sql);

    if($res){
        //$res->fetch_assoc()获取单条数据，返回的是一个数组Array
        while($row = $res->fetch_assoc()){
            $roww[] =$row;
        }
    }
    return $roww;
} 