<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5;
            $y = 10;
            $z = 0;
            function myTest() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            } //cara lain penggunaan keyword global dan fungsi tetap sama seperti di example 7

            myTest();
            echo $z; // outputs 15
            ?>
    </body>
</html>
