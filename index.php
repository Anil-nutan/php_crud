<?php 
    require "header.php";
?>
    <div class="table_box">
        <div class="table">
            <caption>Employee Details</caption>
            <?php
                require "config.php";
                    $dpage = 7;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = 1;
                    }
                    $offset_page = ($page - 1) * $dpage;

                $sql = "SELECT * FROM empdata LIMIT {$offset_page},{$dpage}";

                $result = mysqli_query($conn, $sql) or die("query error");

                if(mysqli_num_rows($result) > 0) {
            ?>
            <table >
                <thead>
                    <tr>
                        <th>SR</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Contact</th>
                        <th>Sallary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $u_id = 0;
                        while($row = mysqli_fetch_assoc($result)){
                        $u_id = $u_id + 1;
                    ?>
                    <tr>
                        <td><?php  echo $u_id; ?></td>
                        <td><?php  echo $row['uname']; ?></td>
                        <td><?php  echo $row['udesg']; ?></td>
                        <td><?php  echo $row['ucon']; ?></td>
                        <td><?php  echo $row['usry']; ?></td>
                        <td class="action">
                            <button><a href="edit.php?id=<?php  echo $row['uid']; ?>">Edit</a></button>
                            <button><a href="dinline.php?id=<?php  echo $row['uid']; ?>">Delete</a></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else{
                echo "Record not found" ; }
               
            ?>

            <?php
                $pagsql = "SELECT * FROM empdata";
                $pagresult = mysqli_query($conn, $pagsql) or die("query error!");

                if(mysqli_num_rows($pagresult) > 0){
                    $records = mysqli_num_rows($pagresult);
                    $tpage = ceil($records/$dpage);

                    echo ' <ul id="pagy">';
                    for($i=1;$i<=$tpage;$i++){
                        echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    echo '</ul>';

                    mysqli_close($conn);
                }
            ?>
        </div>
    </div>
<?php
    include "footer.php";
?>

</body>
</html>