<!DOCTYPE html>
<html>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
            $name = $_POST['fname']; //umumnya var $_POST digunakan untuk mengumpulkan data formulir setelah 
            if (empty($name)) {     //mengirimkan formulir HTML dengan metode = "post".
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>

    </body>
</html>