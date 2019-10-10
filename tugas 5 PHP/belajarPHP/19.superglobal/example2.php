<!DOCTYPE html>
<html>
    <body>
        <?php // $_SERVER termasuk var global super fungsinya memegang informasi tentang header, jalur, dan lokasi skrip
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>