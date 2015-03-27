<?php
/**
 * Created by PhpStorm.
 * User: StoneDu
 * Date: 2015/3/26
 * Time: 18:11
 */

session_start();
$_SESSION["username"] = "";
header("Location:index.php");