<!DOCTYPE html>
<html>
    <body>
        <?php
            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $value) { //foreach adalah for yang hanya bekerja pada array,
                echo "$value <br>";
            }
            //$value akan di pasangkan degan warna dalam arraydari awal hingga akhir
        ?>
    </body>
</html>