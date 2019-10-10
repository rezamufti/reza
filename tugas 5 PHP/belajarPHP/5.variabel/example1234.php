<!DOCTYPE html>
<html>
    <body>
<!--example1-->
        <?php
            $txt = "Hello world!"; //variabel $txt menyimpan data hello world
            $x = 5;                 //variabel $txt menyimpan data 5
            $y = 10.5;              //variabel $txt menyimpan data 10.5
            echo "$txt";            //echo untuk menampilkan output
        ?>

<!--example2-->        
<br> 
        <?php
            $txt = "W3Schools.com"; //variabel $txt menyimpan data w3sghools.com
            echo "I love $txt!";
        ?>

<!--example3-->        
<br>
        <?php
            $txt = "W3Schools.com";
            echo "I love " . $txt . "!"; //tanda pentung(!) important
        ?>
        
<!--example4-->        
<br>
        <?php
            $x = 5;
            $y = 4;
            echo $x + $y; //melakukan penjumlahan sederhana bisa walau tanpa inisiasi tipe data
        ?>


    </body>
</html>