<?php
/**
 * Created by PhpStorm.
 * User: StoneDu
 * Date: 2015/3/26
 * Time: 12:21
 */
session_start();
if($_SESSION["username"]==""){
    echo "请先登录";
   header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/easyui.css">
    <link rel="stylesheet" type="text/css" href="css/icon.css">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
</head>
<body class="easyui-layout">

<div data-options="region:'north',border:false" style="height:60px;background:#B3DFDA;padding:10px">
    <a href="logout.php">退出</a>
</div>
<div data-options="region:'west',split:true,title:'West'" style="width:150px;padding:10px;">west content</div>
<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
<div data-options="region:'center',title:'Center'"></div>

</body>
</html>