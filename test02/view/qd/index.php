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

    <form class="form-signin" action="../../controller/LoginController.php" method="post">
        <h2 class="form-signin-heading">登录</h2>
        <label for="inputEmail" class="sr-only">账号</label>
        <input type="text" id="inputEmail" name="eid" class="form-control" placeholder="请输入账号" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" name ="password" class="form-control" placeholder="请输入" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> 记住我
                <span style="color: red"><?php echo $_GET["rt"]?></span>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
        <a href="login.php"> <button class="btn btn-lg btn-success btn-block" type="button">注册</button></a>
    </form>

</div> <!-- /container -->



</body>
</html>