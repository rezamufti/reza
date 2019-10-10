<!DOCTYPE html>
<html>
    <body>
    <h2>example 6 </h2>
       <?php
            function myTest() {
                $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
            } //var dideklarasikan di dalam fungsi sehingga var tersebut bersifat lokal dan hanya bisa 
             //dipanggil di dalam fungsi

            myTest();
            // mengunakan var x di luar fungsi meyebabkan error karna bersifat lokal
            echo "<p>Variable x outside function is: $x</p>";
        ?> 
    </body>
</html>