<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息展示</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signin.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="../js/jquery-2.2.1.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
$arr=$_SESSION["stu"];
?>
<form action="../../controller/SelectByIdController.php" method="post">
   学号： <input type="text" name="selectSid" size="15px">
    <span style="color: red"><?php echo $_GET["cx"]?></span>
    <button type="submit">查询</button>
</form>
<table class="table table-striped">
  <thead>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>班级</th>
        <th>地点</th>
        <th >操作</th>
    </tr>
  </thead>
    <tbody>
    <?php
    /* 循环展示*/
    for($i=0;$i<sizeof($arr);$i++){
    ?>
        <tr>
        <td><?php echo $arr[$i]["sid"]?></td>
        <td><?php echo $arr[$i]["sname"]?></td>
        <td><?php echo $arr[$i]["age"]?></td>
        <td><?php echo $arr[$i]["gender"]?></td>
        <td><?php echo $arr[$i]["class"]?></td>
        <td><?php echo $arr[$i]["address"]?></td>
            <td>
                <?php $student="sid=".$arr[$i]["sid"].
                 "&sname=".$arr[$i]["sname"].
                  "&age=".$arr[$i]["age"].
                  "&gender=".$arr[$i]["gender"].
                  "&class=".$arr[$i]["class"].
                  "&address=".$arr[$i]["address"]
                ?>
                <a href="UpdataView.php?<?php echo $student?>">修改</a>
                <a href="../../controller/DeleteStudentController.php?sid=<?php echo $arr[$i]["sid"]?>">删除</a>
            </td>
        </tr>
    <?php
    } ?>
    <tr>
        <td colspan="6"></td>
        <td><a href="addStudent.php?<?php echo $student?>">新增学生</a></td>
    </tr>
   </tbody>
</table>


</body>
</html>
