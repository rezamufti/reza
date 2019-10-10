<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5985;
                var_dump(is_int($x)); //is_int unutk mengecek apakah var trsebut integer,jika benar bernilai true
                                        // jika salah bernilai false
            $x = 59.85;
                var_dump(is_int($x));
        ?>
        <br>
        <?php
            $x = 10.365;
            var_dump(is_float($x)); //is_float untuk mengecek apah var tersebut float,jika benar bernilai true
        ?>
        <br>
        <?php
            $x = 1.9e411;
            var_dump($x); //untuk mengecek apakah bernilai finite atai infinite
        ?>
        <br>
        <?php
            $x = acos(8); //perhitungan tidak valid akan bernilai Nan
            var_dump($x);
        ?>
        <br>
        <?php //is_numerick untuk mengcek apakah var tersebut bertipe data numerik
            $x = 5985;
            var_dump(is_numeric($x));

            $x = "5985";
            var_dump(is_numeric($x));

            $x = "59.85" + 100;
            var_dump(is_numeric($x));

            $x = "Hello";
            var_dump(is_numeric($x));
        ?>
        <br>
        <?php
            // Cast float to int
            $x = 23465.768;
            $int_cast = (int)$x;
            echo $int_cast; //mengubah tipe data float ke integer

            echo "<br>";

            // Cast string to int
            $x = "23465.768";
            $int_cast = (int)$x;
            echo $int_cast; //mengubah tipe data sting ke integer
        ?>

    </body>
</html>