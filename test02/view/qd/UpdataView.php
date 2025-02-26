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

<div class="container">

    <form class="form-signin" action="../../controller/UpdataStudentController.php" method="post">
        <h2 class="form-signin-heading">修改</h2>

        <input type="text" id="inputSid" name="sid"  hidden value="<?php echo
        $_GET["sid"] ?>" required autofocus>

        <label for="inputName" class="sr-only">姓名</label>
        <input type="text" id="inputName" name="sname" class="form-control" value="<?php echo
        $_GET["sname"] ?>" required autofocus>

        <label for="inputAge" class="sr-only">年龄</label>
        <input type="text" id="inputAge" name="age" class="form-control" value="<?php echo
        $_GET["age"] ?>" required autofocus>

        <label for="inputGender" class="sr-only">性别</label>
        <input type="text" id="inputGender" name="gender" class="form-control"value="<?php echo
        $_GET["gender"] ?>" required autofocus>

        <label for="inputClass" class="sr-only">班级</label>
        <input type="text" id="inputClass" name="class" class="form-control" value="<?php echo
        $_GET["class"] ?>" required autofocus>

        <label for="inputAddress" class="sr-only">地点</label>
        <input type="text" id="inputAddress" name="address" class="form-control" value="<?php echo
        $_GET["address"] ?>" required autofocus>

        <div class="checkbox">
            <label>
                <span style="color: red"><?php echo $_GET["updateInfo"]?></span>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">修改</button>

    </form>

</div> <!-- /container -->

</body>
</html>
