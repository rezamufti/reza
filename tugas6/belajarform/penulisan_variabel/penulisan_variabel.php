<!--membuat var diawali huruf $-->
<?php 
   $i;
   $nama;
   $Umur;
   $_lokasi_memori;
   $ANGKA_MAKSIMUM;
 //penulisan yang benar diawali dengan tanda dolar kemudian karakter pertama huruf atau underscore(_)
//karakter kedua dan seterusnya bisa huruf,angka,dan underscore dan tidak bisa di awali dengan karakter pertama sebuah
//angka-->
?> 

<?php
   $4ever; //variabel tidak boleh diawali dengan angka
   $_salah satu; //varibel tidak boleh mengandung spasi
   $nama*^; //variabel tidak boleh mengandung karakter khusus:
* dan ^
?>

<!--bersifat case sensityf-->
<?php
   $andi="Andi";
   echo $Andi; // akan keluar eror karena variabel yang di rujuk tidak valid.
               //inisiasi var nya menggunakan andi huruf kecil semuanya
               //ketika di panggil Andi,A nya menggunakan huruf besar  
               //disimpulkan,var dalam PHP bersifat case sensityf
               //tidak memerlukan deklarasi terlebih dahulu.
?> 

<!--memeberikan nilai pada sebuah variabel-->
<?php 
   $nama = "andi"; //pemberian nilai pada variabel menggunakan tanda sama dengan (=)
   $umur = "b17";
   $pesan = "Saya sedang belajar PHP di jti.polije.com";
?> 

<!--variabel php tidak bertipe-->
<?php //PHP termasuk dalam jenis bahasa pemrogaman yang variabelnya tidak terikat tipe data tertentu.
   $a = 17; // nilai variabel a berisi angka (integer)
   $a = "aku"; // nilai variabel a diubah menjadi kata (string)
   $a = 17.42; // nilai variabel a diubah menjadi desimal(float)
?> 

<!--variabel sistem PHP-->
<?php

$GLOBALS  $_SERVER , $_GET , $_POST , $_FILES , $_COOKIE ,
$_SESSION , $_REQUEST , $_ENV, $php_errormsg,
$HTTP_RAW_POST_DATA, $http_response_header, $argc, $argv,$this.

?>

<!--cara menampilkan nilai variabel-->
<?php
   $a='Saya Sedang belajar PHP';
   $b=5;
   
   print $a; 
   echo $b;
?> 
