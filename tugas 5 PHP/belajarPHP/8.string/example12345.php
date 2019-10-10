<!DOCTYPE html>
<html>
    <body>
        <?php
            echo strlen("Hello world!"); // mengembalikan panjang string outputs 12
        ?>
        <br>
        <?php
            echo str_word_count("Hello world!"); //menghitung jumlh kata string outputs 2
        ?>
        <br>
        <?php
            echo strrev("Hello world!"); // membalika kata" dalam string outputs !dlrow olleH
        ?>
        <br>
        <?php
            echo strpos("Hello world!", "world"); // mencari teks terentu dalam string outputs 6
        ?>
        <br>
        <?php
            echo str_replace("world", "Dolly", "Hello world!"); // menggantikan karakter dalam string dengan karakerlai outputs Hello Dolly!
        ?>



    </body>
</html>