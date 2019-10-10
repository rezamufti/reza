<!DOCTYPE html>
<html>
    <body>
        <?php
            function myTest() {
                static $x = 0; // fungsi static untuk merekam var tersebut sehingga bisa di gunakan terus
                echo $x;
                $x++;
            }

            myTest();
            myTest();
            myTest();
        ?>
    </body>
</html>