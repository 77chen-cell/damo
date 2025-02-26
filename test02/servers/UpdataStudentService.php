<?php

require("../db/DbConnection.php");
/*注册功能使用的插入方法*/
function updataStudentInfo($sid, $sname,$age, $gender,$class,$address)
{
    $sql="update student set sname='".$sname."',
    age='".$age."',gender='".$gender."', class='".$class."',
    address='".$address."' where sid='".$sid."'";
    //$num=getRegister($sql);
    //return $num;
    //调用插入的链接方法
    return getRegister($sql);
}
function findAll(){
    $sql="select * from student";
    //传给数据层
    $arr=getALL($sql);
    return $arr;
}