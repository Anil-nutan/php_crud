<?php 
    require "config.php";

    $u_id = $_GET['id'];
    $sql = "DELETE FROM `empdata` WHERE `uid` = {$u_id}";

    $result = mysqli_query($conn, $sql) or die("query error");

    header("Location: index.php");

    mysqli_close($conn);
?>