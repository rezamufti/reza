<!DOCTYPE html>
<html>
    <body>
        <?php
            $txt= "example 1 string";
            $x = "Hello world!"; //data type string  bisa menggunakan double quad atau single quote
            $y = 'Hello world!';

            echo "<h2>$txt</h2>";
            echo $x;
            echo "<br>";
            echo $y;
        ?>

        <?php
            $txt="example 2 integer";
            $x = 5985;

            echo "<h2>$txt</h2>";
            var_dump($x); //var_dump fungsinya me return value           
        ?>

        <?php
            $txt="example 3 float";
            $x = 10.365; //jika float maka ada tada koma(,) 

            echo "<h2>$txt</h2>";
            var_dump($x); //var_dump fungsinya me return value
        ?>

        <?php
            $txt="example 4 array";
            $cars = array("Volvo","BMW","Toyota");

            echo "<h2>$txt</h2>";
            var_dump($cars);//var_dump fungsinya me return value
        ?>

        <?php
            $txt="example 5 objek";           
            class Car { //deklarasi membuat klass car
            function Car() { 
            $this->model = "VW";
            }
        }
            class pintu {
                function pintu(){
                    $this->model = "kanan";
                }
            }
        

            // membuat objek
            $herbie = new Car();
            $husky = new pintu();

            // show object properties
            echo "<h2>$txt</h2>";
            echo $herbie->model;
            echo $husky->model;
        ?>
        
        <?php
            $txt="example 6 Null value";
            $x = "Hello world!";
            $x = null; //tipe data khusus,sebuah variabel yang tidak memiliki nilai atau value otomatis null

            echo "<h2>$txt</h2>";
            var_dump($x);
        ?>
        
    
    </body>
</html>