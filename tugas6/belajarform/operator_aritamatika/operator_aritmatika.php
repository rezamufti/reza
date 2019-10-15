<?php
    +$a     positif
    -$a     negatif
    $a=$b   penambahan
    $a-$b   pengurangan 
    $a*$b   perkalian
    $a/$b   div/pembagian
    $a%$b   Mod/sisa hasil bagi
?>

<!--cara penggunaan operator aritmatika dalam php-->
 
<?php
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-4.5;
$hasil4=2*5;
$hasil5=3+8/5-3;
$hasil6=10 % 4;
 
echo "\$hasil1:"; var_dump($hasil1); // $hasil1:int(-3) 
echo "<br \>";                   
echo "\$hasil2:"; var_dump($hasil2); // $hasil2:int(8) 
echo "<br \>";
echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5) 
echo "<br \>";
echo "\$hasil4:"; var_dump($hasil4); // $hasil4:int(10) 
echo "<br \>";
echo "\$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6) 
echo "<br \>";
echo "\$hasil6:"; var_dump($hasil6); // $hasil6:int(2) 
?> 

<!--fungsi aritmatika PHP5-->
abs()       Returns the absolute (positive) value of a number 
acos()      Returns the arc cosine of a number 
acosh()     Returns the inverse hyperbolic cosine of a number  
asin()      Returns the arc sine of a number 
asinh()     Returns the inverse hyperbolic sine of a number 
atan()      Returns the arc tangent of a number in radians 
atan2()     Returns the arc tangent of two variables x and y 
atanh()     Returns the inverse hyperbolic tangent of a number 
base_convert()  Converts a number from one number base to another 
bindec()    Converts a binary number to a decimal number 
ceil()      Rounds a number up to the nearest integer 
cos()       Returns the cosine of a number 
cosh()      Returns the hyperbolic cosine of a number 
decbin()    Converts a decimal number to a binary number 
dechex()    Converts a decimal number to a hexadecimal number 
decoct()    Converts a decimal number to an octal number 
deg2rad()   Converts a degree value to a radian value 
exp()       Calculates the exponent of e 
expm1()     Returns exp(x) - 1 
floor()     Rounds a number down to the nearest integer 
fmod()      Returns the remainder of x/y 
getrandmax()    Returns the largest possible value returned by rand() 
hexdec()    Converts a hexadecimal number to a decimal number 
hypot()     Calculates the hypotenuse of a right-angle triangle 
is_finite()     Checks whether a value is finite or not 
is_infinite()   Checks whether a value is infinite or not 
is_nan()        Checks whether a value is 'not-a-number' 
lcg_value()     Returns a pseudo random number in a range between 0 and
1 log()     Returns the natural logarithm of a number 
log10()     Returns the base-10 logarithm of a number 
log1p()     Returns log(1+number) 
max()       Returns the highest value in an array, or the highest value of several specified values 
min()       Returns the lowest value in an array, or the lowest value of several specified values
mt_getrandmax()     Returns the largest possible value returned by mt_rand() 
mt_rand()   Generates a random integer using Mersenne Twister algorithm
mt_srand()  Seeds the Mersenne Twister random number generator 
octdec()    Converts an octal number to a decimal number 
pi()        Returns the value of PI 
pow()       Returns x raised to the power of y 
rad2deg()   Converts a radian value to a degree value 
rand()      Generates a random integer 
round()     Rounds a floating-point number 
sin()       Returns the sine of a number 
sinh()      Returns the hyperbolic sine of a number 
sqrt()      Returns the square root of a number 
srand()     Seeds the random number generator 
tan()       Returns the tangent of a number 
tanh()      Returns the hyperbolic tangent of a number 

