<?php

require ("../db/DbConnection.php");
//实现新增学生的函数
function deleteStudent($sid){
    $sql="delete from student where sid='".$sid."'";

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