<?php

require("../db/DbConnection.php");
/*注册功能使用的插入方法*/
function selectById($selectSid){
    {    //返回值为1条语句
        if (!empty($selectSid)) {
            $sql = "select * from student where sid='" . $selectSid . "'";
        } else {
            $sql = "select *  from student";
        }
//$sid="";
//if(!empty($selectSid)){
//    //".=":追加内容
//    $sid .="and sid'".$selectSid."'";
//}
//$sql="select * from student where 1=1 ".$sid." ";

        return getAll($sql);
    }
    }