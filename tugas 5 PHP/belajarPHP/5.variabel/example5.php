<!DOCTYPE HTML>
<html>
    <body>
    <h2>example 5</h2>
        <?php
            $x = 5; // global scope

            function myTest() {
                     //mengguakan var x akan error 
            echo "<p>Variable x inside function is: $x</p>";
            }

            myTest();
            echo "<p>Variable x outside function is: $x</p>";
            //variabel dideklarasikan di luar fungsi menjadi lingkup global,dan tidak bisa dipanggil di dalam fungsi
        ?>
        <hr>
     
        
    <body>
<html>