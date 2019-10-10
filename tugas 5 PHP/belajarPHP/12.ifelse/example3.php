<!DOCTYPE html>
<html>
    <body>
        <?php
            $t = date("H");

            if ($t < "10") {                    //perintah if else else akan dijalankan jika kondisi true,jika tidak 
                echo "Have a good morning!";    //konsidi else  dijaankan,jika tidak juga maka kondisi else lain yang 
            } elseif ($t < "20") {              //dijalankan
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
        ?>
    </body>
</html>