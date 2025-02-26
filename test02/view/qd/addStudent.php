<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增学生</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signin.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="../js/jquery-2.2.1.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form class="form-signin" action="../../controller/AddStudentController.php" method="post">
        <h2 class="form-signin-heading">新增学生</h2>

        <label for="inputName" class="sr-only">姓名</label>
        <input type="text" id="inputName" name="sname" class="form-control" placeholder="请输入姓名" required autofocus>

        <label for="inputName" class="sr-only">年龄</label>
        <input type="text" id="inputAge" name="age" class="form-control" placeholder="请输入年龄" required autofocus>

        <label for="inputAge" class="sr-only">班级</label>
        <input type="text" id="inputClass" name="class" class="form-control" placeholder="请输入班级" required>

        <label for="inputName" class="sr-only">地址</label>
        <input type="text" id="inputAddress" name="address" class="form-control" placeholder="请输入地址" required autofocus>
        <label for="inputPassword" ">性别</label>
        <input type="radio" id="inputGenderMan" name="gender" value="男" checked="checked" required>男
        <input type="radio" id="inputGenderWomen" name="gender"value="男" checked="checked" required>女
        <div class="checkbox">
            <label>
                <span style="color: red"><?php echo $_GET["addStudent"]?></span>
            </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">新增</button>

    </form>

</div> <!-- /container -->

</body>
</html><?php

