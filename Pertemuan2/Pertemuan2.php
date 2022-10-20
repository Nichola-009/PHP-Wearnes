<?php

//Komentar

/* 
Komentar 
*/

//Pertemuan 2
// PHP-Dasar

//Standart Output
// echo "Mencentak" . "<br>";
// print "Mencatak". "<br>";
// print_r ("Mencetak Dengan Array");
// var_dump("Mencetak Dengan Detail"). "<br>"; // Biasanya Di gunakan debugging

//Kutip 
// "''" Kutip Satu Harus Ada Di Dalam Kutip Dua
// echo "Jum'at". "<br>";

// Variable Di PHP
    $nama = "Nichola";  // Tidak Bolek Diawali Dengan Angka Tapi Boleh Mengandung

//Operator
/* Tambah +
    Kurang -
    Bagi / 
    Perkalian* 
    Modulus Atau Sisa Bagi %
    */

//Operator Penggabung String Menggunakan .
echo "Nama : " . $nama. "<br>";

//Operator Penugasan
/*  == 
    +=
    -=
    *=
    /=
    %=
    .= Penggabungan String
*/
//Contoh 1
$total = 200;
$hasil = 200;
$hasil += $hasil;
echo $hasil. "<br>";
//Sama Saja Dengan 
$total = $total + $total;
echo $total . "<br>";

//Contoh 2
$name = "Nichola";
$name .= " ";
$name .= " Saputra"; // Jadi Ga Tertimpa Nanti Jika Di Kasih Beginian


echo $name . "<br>";

//Perbandingan
/*  < Lebih Kecil
    <= Lebih Kecil Sama Dengan
    > Lebih Besar
    >= Lebih Besar Sama Dengan
    == Sama Dengan
    != Tidak Sama Dengan*/

    var_dump(1 > 5);

//Idenditas
/*  ===
    !==
    */

//Operator Logika
/*  && AND Kondisi Keduanya Harus Benar Maka True
    || OR Salah Satu Kondisi Benar Maka True
    ! NOT Kebalikanya*/
$nilai = 8;
    var_dump($nilai >= 5 && $nilai % 2 == 0);



?>


<!-- //Penulisan Sintaks PHP
1. PHP Dalam HTML
2. HTML Dalam PHP // Tidak Disarankan -->

<!-- Contoh -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>


    <h1>Halo Nama Saya <?php echo "$nama"?></h1>
    
</body>
</html>