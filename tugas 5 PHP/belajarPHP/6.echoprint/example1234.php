<!DOCTYPE html>
<html>
    <body>
        <?php //menunjukan output text menggunakn perintah echo
            echo "<h2>example 1!</h2>";
            echo "Hello world!<br>";
            echo "I'm about to learn PHP!<br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        ?>

        <?php //menunjukan output text dan var menggunakn perintah echo
            $txt1 = "example 2";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;

            echo "<h2>" . $txt1 . "</h2>";
            echo "Study PHP at " . $txt2 . "<br>";
            echo $x + $y;
        ?>

        <?php
            print "<h2>example 3!</h2>"; //menunjukan output text menggunakan perintah print 
            print "Hello world!<br>";       //perintah print sama dengan perintah echo
            print "I'm about to learn PHP!";
        ?>

        <?php //menunjukan output text danvar menggunakan perintah print
            $txt1 = "example 4";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;

            print "<h2>" . $txt1 . "</h2>";
            print "Study PHP at " . $txt2 . "<br>";
            print $x + $y;
        ?>

    </body>
</html>