<!DOCTYPE html>
<html>
    <body> <!--constan sama seerti variabel bedanya adalah constan setelah didefinisikan  tidak dapat diubah atau 
            tidak terdefinisi-->
        <?php //membuat constan dengan function define()
            define("GREETING", "Welcome to W3Schools.com!"); //jika diberi nilai true maka default nya false
            echo GREETING;
        ?>
        <br>
        <?php //membuat constan dengan case sensitiv nama,sama seperti di atas
            define("GREETING", "Welcome to W3Schools.com!", true); 
            echo greeting;
        ?>
        <br>
        <?php //membuat contsant array di dalam function
            define("cars", ["Alfa Romeo","BMW","Toyota" ]);
                           
            echo cars[0];
        ?>
        <br>
        <?php //membuat contsant array di dalam function,sama saja jika di luar function
            define("GREETING", "Welcome to W3Schools.com!");

            function myTest() {
            echo GREETING;
            }
 
            myTest();
        ?>
        <br>
        
    </body>
</html>