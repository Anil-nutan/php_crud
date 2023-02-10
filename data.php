<?php
    $uname = $_POST["uname"];
    $udesg = $_POST["udesg"];
    $ucon = $_POST["ucon"];
    $usry = $_POST["usry"];

    require "config.php";

    $sql = "INSERT INTO empdata (uname,udesg,ucon,usry)
    VALUES ('{$uname}','{$udesg}','{$ucon}','{$usry}')";

    $result = mysqli_query($conn, $sql) or die("query error");

    header("Location: index.php");

    mysqli_close($conn);
            
?>