<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5;
            $y = 10;
            $z = 0;
            function myTest() {
                global $x, $y,$z; // bisa mengakses var global ke dalam fungsi menggunakan keyword global
                $z = $x + $y;
            }

            myTest();
            echo $z; // outputs 15
        ?>
    </body>
</html>