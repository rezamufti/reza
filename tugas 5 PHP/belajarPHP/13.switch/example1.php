<!DOCTYPE html>
<html>
    <body>
        <?php
            $favcolor = "red";

            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            } 
        ?>    <!--perintah switch yakni perintah yang menyediakan beberapa kondisi,jika kondisi yang dijalankan
                sesuai dengan kondis yang ada di dalam switch maka kondis yng cocok akan di eksekusi-->  
            <!--fungsi break mencegah kode mengeksekusi kondisi lain-->
            <!--jika kondisi yang dijalankan tidak ada dalam switch maka menjalankan default-->
    </body>
</html>