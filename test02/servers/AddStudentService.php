<?php

require ("../db/DbConnection.php");
//实现新增学生的函数
function addStudent($name,$age,$gender,$class,$address){
    $sql="insert into student values  (null,'".$name."','".$age."','".$gender."','".$class."','".$address."')";
    //执行sql语句
    return getRegister($sql);
}
//查询所有学生信息
function findAll(){
    $sql="select * from student";
    //传递sql给数据库
    $arr=getAll($sql);
    //将查询的内容返回给调用者
    return $arr;
}