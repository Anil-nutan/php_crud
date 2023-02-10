<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
    <?php
        require 'header.php';
    ?>
    
    <div class="form_box">
        <div class="form">
            <h2>SignIn Details</h2>

            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    require 'config.php';
    
                    $uemail = $_POST['uemail'];
                    $upwd = $_POST['upwd'];

                    $sql = "SELECT * FROM emp_log WHERE uemail = '$uemail' AND upwd = '$upwd' ";
                    $result = mysqli_query($conn, $sql) or die('Error!');

                    $data = mysqli_num_rows($result);
                    if($data == 1){
                        header("location: index.php");
                    }else{
                        header("location: signup.php");
                    }
                }
            ?>

            <form action="" method="post">
                <ul>
                    <li>
                        <label for="uemail">Email:</label>
                        <input type="email" name="uemail" id="uemail" required/>
                    </li>
                    <li>
                        <label for="upwd">Password:</label>
                        <input type="password" name="upwd" id="upwd" required/>
                    </li>
                    <li>
                        <input type="submit" name="submit" value="SignIn" id="btn" />
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <?php 
        require 'footer.php'; 
    ?>
</body>
</html>