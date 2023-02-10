<?php
    require "header.php";
?>

    <div class="form_box">
        <div class="form">
            <h2>Delete Employee Record</h2>
            <?php
                if(isset($_POST['search'])){
                    require "config.php";

                    $u_id = $_POST['uid'];
                    $sql = "DELETE FROM `empdata` WHERE `uid` = {$u_id}";

                    $result = mysqli_query($conn, $sql) or die("query error");

                    header("Location: index.php");

                    mysqli_close($conn);
                }
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <ul>
                    <li>
                        <label for="uid">Id:</label>
                        <input type="search" name="uid" id="uid">
                    </li>
                    <li>
                        <input type="submit" name="search" value="Delete" id="btn"/>
                    </li>
                </ul>
            </form>
        </div>
    </div>

<?php 
    include "footer.php";
?>

</body>
</html>