<?php

    $uid = $_POST["uid"];
    $uname = $_POST["uname"];
    $udesg = $_POST["udesg"];
    $ucon = $_POST["ucon"];
    $usry = $_POST["usry"];

    require "config.php";

    $sql = "UPDATE `empdata` SET `uname`='$uname', `udesg`='$udesg',`ucon`='$ucon', `usry`='$usry' WHERE `uid` = $uid";
        
    $result = mysqli_query($conn, $sql) or die("query error");

    header("Location: index.php");

    mysqli_close($conn);

?>