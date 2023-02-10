<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <?php
        require 'header.php';
    ?>
    
    <div class="form_box">
        <div class="form">
            <h2>SignUp Details</h2>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    require 'config.php';
                    
                    $uname = $uemail = $upwd = " ";
                    
                    $uname = $_POST['uname'];
                    $uemail = $_POST['uemail'];
                    $upwd = $_POST['upwd'];

                    $sql = "INSERT INTO `emp_log` (`uname`, `uemail`, `upwd`) VALUES ('$uname', '$uemail', '$upwd')";
                    
                    $result = mysqli_query($conn, $sql) or die('Error!');
                   if($result){
                        header("location: index.php");
                   } else{
                        header("location: login.php");
                   }
                }
            ?>
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="uname">Name:</label>
                        <input type="text" name="uname" id="uname" required/>
                    </li>
                    <li>
                        <label for="uemail">Email:</label>
                        <input type="email" name="uemail" id="uemail" required/>
                    </li>
                    <li>
                        <label for="upwd">Password:</label>
                        <input type="password" name="upwd" id="upwd" required/>
                    </li>
                    <li>
                        <input type="submit" name="submit" value="SingUp" id="btn" />
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