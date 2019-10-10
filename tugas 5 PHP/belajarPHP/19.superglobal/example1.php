<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 75;
            $y = 25;
            $z = 0;
 
            function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // var $globals fungsinya mengakses var global di seluruh script PHP
            }                                              //termasuk di dalam atau di luar fungsi
 
            addition();
            echo $z;
        ?>
    </body>
</html>