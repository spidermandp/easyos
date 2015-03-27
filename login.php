<?php
/**
 * Created by PhpStorm.
 * User: StoneDu
 * Date: 2015/3/26
 * Time: 12:28
 */

if (isset($_POST["submit"])) {
    $name = $_POST["username"];
    $pwd = $_POST["password"];
    try {
        $dbc = new PDO("mysql:host=localhost;dbname=todo", "root", "6238038dp");
    } catch (PDOException $e) {
        $e->getMessage();
        exit;
    }
    $sql = "select * from user where name=\"$name\" and pwd=\"$pwd\"";
  //  echo "$sql";
    $pds = $dbc->prepare($sql);
    $pds->execute();

    $num = $pds->rowCount();
    if ($num > 0) {
        header("Location:home.php");
        session_start();
        $_SESSION['username']=$name;
    } else {
        header("Location:index.php");
    }

}


?>
