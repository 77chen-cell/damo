<?php
require ("../db/DbConnection.php");
/*注册功能使用的插入方法*/
function registerInsert($eid,$name,$password,$age){
    $sql="insert into t_user1(eid,name,password,age) 
                values ('".$eid."','".$name."','".$password."','".$age."') ";
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