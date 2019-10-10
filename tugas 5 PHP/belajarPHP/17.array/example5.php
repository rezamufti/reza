<!DOCTYPE html>
<html>
    <body>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //array asosiatif

            foreach($age as $x => $x_value) { //menggunkaan loop pada array asosiatif dengan foreach
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
        ?>

    </body>
</html>