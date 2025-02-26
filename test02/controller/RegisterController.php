<?php
require ("../servers/RegisterService.php");
// 3-5获取用户输入信息 name="用于传递的值的名字" value="实际传输的值"
$eid=$_POST["eid"];
$name=$_POST["name"];
$password=$_POST["password"];
$age=$_POST["age"];
//插入功能
$num=registerInsert($eid,$name,$password,$age);
echo $num;
if($num!=0){
    header("location:../view/qd/index.php");
}else{
    header("location:../view/qd/login.php?zc=注册失败");
}