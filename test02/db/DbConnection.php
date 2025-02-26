<?php
//与数据库进行连接交互
//创建连接对象
function conn(){
    return new mysqli(
        "127.0.0.1","root","root","chen2002");
}
//登入
function getCheckLogin($sql){
    //1.获取连接对象
    $link=conn();
    //2.选择编码格式
    mysqli_set_charset($link,"utf_8");
    //3.处理数据
    $resultSet=mysqli_query($link,$sql);
    //4.处理返回结果集
    $array=mysqli_fetch_array($resultSet,MYSQLI_ASSOC);
    //关闭数据库链接
   mysqli_close($link);
   return $array;
}
function getRegister($sql){
    $link=conn();
    mysqli_set_charset($link,"utf_8");
    //直接处理返回结果
    $resultSet=mysqli_query($link,$sql);
//   $num= mysqli_fetch_array($resultSet,MYSQLI_ASSOC);
    mysqli_close($link);
    return $resultSet;
}
function getAll($sql){
    $link=conn();
    mysqli_set_charset($link,"utf_8");
    $resultSet=mysqli_query($link,$sql);
    $arr=mysqli_fetch_all($resultSet,MYSQLI_ASSOC);
    mysqli_close($link);
    return $arr;
}


function getOne($sql){
    $link=conn();
    mysqli_set_charset($link,"utf_8");
   $resultSet=mysqli_query($link,$sql);
   if($resultSet!=0 | !empty($resultSet)){
      $res=mysqli_fetch_array($resultSet,MYSQLI_ASSOC);
   }else{
       mysqli_error($link);
   }
   mysqli_close($link);
    return $res;
}