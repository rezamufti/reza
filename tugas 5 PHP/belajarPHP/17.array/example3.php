<!DOCTYPE html>
<html>
    <body>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            $arrlength = count($cars);

            for($x = 0; $x < $arrlength; $x++) { //menggunakan loop for untuk mencetak semua nilai pada array
                echo $cars[$x];
                echo "<br>";
            }
        ?>
    </body>
</html>