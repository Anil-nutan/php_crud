<?php
    require "header.php";
?>

    <div class="form_box">
        <div class="form">
            <h2>Edit Employee Record</h2>
            <?php 
                require "config.php";

                $u_id = $_GET['id'];
                $sql = "SELECT * FROM empdata WHERE uid = {$u_id}";

                $result = mysqli_query($conn, $sql) or die("query error");

                mysqli_close($conn);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <form action="updatedata.php" method="post">
                <ul class="u_box">
                    <li>
                        <label for="uname">Name:</label>
                        <input type="hidden" name="uid" value="<?php  echo $row['uid']; ?>" />
                        <input type="text" name="uname" id="uname" value="<?php  echo $row['uname']; ?>"/>
                    </li>
                    <li>
                        <label for="udesg">Designation:</label>
                        <input type="text" name="udesg" id="udesg" value="<?php  echo $row['udesg']; ?>"/>
                    </li>
                    <li>
                        <label for="contact">Contact:</label>
                        <input type="number" name="ucon" id="contact" value="<?php  echo $row['ucon']; ?>" />
                    </li>
                    <li>
                        <label for="sly">Sallary:</label>
                        <input type="number" name="usry" id="sly" value="<?php  echo $row['usry']; ?>"/>
                    </li>
                    <li>
                        <input type="submit" name="submit" value="Update" id="btn" />
                    </li>
                </ul>
            </form>
        <?php 
                } 
            }
        ?>
        </div>
    </div>

<?php
    include "footer.php";
?>

</body>
</html>