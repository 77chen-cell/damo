<?php
require ("../servers/AddStudentService.php");
//接收新增学生的信息
$name=$_POST["sname"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$class=$_POST["class"];
$address=$_POST["address"];

//接收到所有数据之后调用新增方法
$num=addStudent($name,$age,$gender,$class,$address);
if ($num==0){
    //进行页面跳转 index.php
    header("location:../view/qd/addStudent.php?addStudent=有误");
}else{
    //第一次查询学生表信息 登录跳转到成功页面
    //查询student 表所有数据   调用查询方法
    $arr=findAll();
    //开启session  缓存 一般不会自动更新
    session_start();
    //然后存放到session 存储
    $_SESSION["stu"]=$arr;
    //登录成功跳转页面
    header("location:../view/qd/success.php");
}
