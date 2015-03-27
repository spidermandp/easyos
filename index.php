<?php
/**
 * Created by PhpStorm.
 * User: StoneDu
 * Date: 2015/3/25
 * Time: 18:46
 */

?>
<html>
<!DOCTYPE html>
<html lang="zh-cn">

<head>

    <meta charset="utf-8">
    <title>系统登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/supersized.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>系统登录</h1>

    <form action="login.php" method="post">
        <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
        <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
        <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">
        <button type="submit" class="submit_button" name="submit">登录</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">

    </div>
</div>

<!-- Javascript -->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/supersized.3.2.7.min.js"></script>
<script src="js/supersized-init.js"></script>
<script src="js/scripts.js"></script>

</body>
<div style="text-align:center;">
    <p>作者：<a href="http://www.thinkingstone.cc/" title="Stone的小窝" target="_blank">StoneDu</a></p>
</div>
</html>

