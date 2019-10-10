<!DOCTYPE html>
<html>
    <body>
        <?php
            function familyName($fname) {   //fname adalah argumen,argumen sama seperti variabel,dan argumen menyimpan informasi dari function
                echo "$fname Refsnes.<br>"; //bila argumen lebih dari 2 pisahkan dengan tanda koma
            }

            familyName("Jani");
            familyName("Hege");
            familyName("Stale");
            familyName("Kai Jim");
            familyName("Borge");
        ?>
    </body>
</html>