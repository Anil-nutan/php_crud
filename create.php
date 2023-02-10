<?php
    require "header.php";
?>

    <div class="form_box">
        <div class="form">
            <h2>Employee Entries</h2>
            <form action="data.php" method="post">
                <ul>
                    <li>
                        <label for="uname">Name:</label>
                        <input type="text" name="uname" id="uname" />
                    </li>
                    <li>
                        <label for="udg">Designation:</label>
                        <input type="text" name="udesg" id="udg" />
                    </li>
                    <li>
                        <label for="contact">Contact:</label>
                        <input type="number" name="ucon" id="contact" />
                    </li>
                    <li>
                        <label for="sly">Sallary:</label>
                        <input type="number" name="usry" id="sly">
                    </li>
                    <li>
                        <input type="submit" name="submit" value="submit" id="btn" />
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