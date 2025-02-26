<?php
//获取前端传递的账号和密码
require("../servers/LoginService.php");
$eid=$_POST["eid"];
$password=$_POST["password"];
//将获得的账号，密码与数据库链接
$rt=loginService($eid,$password);
//echo $rt;
if($rt==0){
    header("location:../view/qd/index.php?rt=账号或者密码错误");
}else{
    $arr=findAll();
    session_start();
    $_SESSION["stu"]=$arr;
    header("location:../view/qd/success.php");
}