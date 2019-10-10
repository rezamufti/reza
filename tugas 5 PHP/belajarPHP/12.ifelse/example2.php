<!DOCTYPE html>
<html>
    <body>
        <?php
            $t = date("H");

            if ($t < "20") {                //perintah if else akan dijalakan jika kondisi true jika 
                echo "Have a good day!";    //tidak maka yang dijalankan kondisi else
            } else {
                echo "Have a good night!";
            }
        ?>
    </body>
</html>