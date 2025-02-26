<?php
require("../servers/UpdataStudentService.php");
$sid=$_POST["sid"];
$sname=$_POST["sname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$class=$_POST["class"];
$address=$_POST["address"];
$num= updataStudentInfo($sid,$sname,$age,$gender,$class,$address);
echo $num;
if($num!=0){//重新查找一次session缓存里面的数据
    $studentInfo=findAll();
    session_start();
    $_SESSION["stu"]=$studentInfo;
    header("location:../view/qd/success.php");
}else{
    header("location:../view/qd/UpdataView.php?updateInfo=修改失败");
}