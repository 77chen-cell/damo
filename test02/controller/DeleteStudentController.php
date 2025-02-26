<?php
//接受sid 值，调用删除方法
//如果想实时展示删除效果，需要更新session stu 的值
require("../servers/DeleteStudentService.php");
//接收前端传递(form表单)的值
$sid = $_GET["sid"];
$sname = $_GET["sname"];
$age = $_GET["age"];
$gender = $_GET["gender"];
$class = $_GET["class"];
$address = $_GET["address"];
//数据接收完成之后，调用修改语句的函数
$num =  deleteStudent($sid, $sname, $age, $gender, $class, $address);
if ($num != 0) {
    //更新stu 的session数据
    //先查找学生信息
    $studentInfo = findAll();
    //获取到最新数据之后进行session更新
    session_start();
    $_SESSION["stu"] = $studentInfo;

    header("location:../view/qd/success.php");
} else {
    header("location:../view/qd/success.php?deleteStudent=修改失败");
}