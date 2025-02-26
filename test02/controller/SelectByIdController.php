<?php
require("../servers/SelectByIdService.php");
$selectSid= $_POST["selectSid"];
$arr=selectById($selectSid);

if($arr!=0 | !empty($arr)){
    session_start();
    $_SESSION["stu"] =$arr;
    header("location:../view/qd/success.php");
} else {
    header("location:../view/qd/success.php?cx=未查找到该用户");
}


