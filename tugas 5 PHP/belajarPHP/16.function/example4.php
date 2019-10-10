<!DOCTYPE html>
<html>
    <body>
        <?php 
            declare(strict_types=1); // menggunakan strict
            function setHeight(int $minheight = 50) { //50 adalah nilai default
                echo "The height is : $minheight <br>";
            }

            setHeight(350);
            setHeight(); // jika tidak diberi value maka akan menggunakan niai dafault
            setHeight(135);
            setHeight(80);
        ?>
    </body>
</html>