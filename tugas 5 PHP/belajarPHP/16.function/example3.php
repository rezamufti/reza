<!DOCTYPE html>
<html>
    <body>
        <?php
            function addNumbers(int $a, int $b) {
                return $a + $b;
            }
                echo addNumbers(5, "5 days");
            //jika strict tidak di aktifkan "5 hari" di ubah menjadi int(5),dn berulang 10 kali
               
        ?>  
    </body>
</html>