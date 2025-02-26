<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>软件工程B2002 02 陈珊珊</title>
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
    <form class="form-signin" action="../../controller/RegisterController.php" method="post">
        <h2 class="form-signin-heading">注册</h2>
        <label for="inputEmail" class="sr-only">账号</label>
        <input type="text" id="inputEmail" name="eid" class="form-control" placeholder="请输入账号" required autofocus>

        <label for="inputName" class="sr-only">姓名</label>
        <input type="text" id="inputName" name="name" class="form-control" placeholder="请输入姓名" required autofocus>

        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="请输入密码" required>

        <label for="inputAge" class="sr-only">年龄</label>
        <input type="password" id="inputAge" name="age" class="form-control" placeholder="请输入年龄" required>
        <div class="checkbox">
            <label>
                <span style="color: red"><?php echo $_GET["zc"]?></span>
            </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">注册</button>

    </form>

</div> <!-- /container -->

</body>
</html><?php
