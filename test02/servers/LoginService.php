<?php
//servers 层进行业务处理，实现具体功能
//声明一个方法
//登录功能，需要传递两个参数，账号，密码
require("../db/DbConnection.php");
function loginService($id,$password){
    $sql="select * from t_user1 where eid='".$id."' and password='".$password."'";
    //调用登录方法进行登录验证
    $arr=getCheckLogin($sql);
    if($arr!=0){
        return 1;
    }else
        return 0;

}
function findAll(){
    $sql="select * from student";
    //传给数据层
    $arr=getALL($sql);
    return $arr;
}
