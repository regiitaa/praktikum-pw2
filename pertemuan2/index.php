<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

//delete
//echo "Regita Dwi Cahyani";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// tidak boleh diawali dengan angka,tapi boleh mengandung angka
// $nama = "Regita Dwi Cahyani";
// echo "Halo, nama saya $nama";

// operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabung  string / concatenation / concat
// .
// $nama_depan = "Regita";
// $nama_belakang = "Dwi";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x; 
// $nama = "Regita";
// $nama .= " ";
// $nama .= "Dwi Cahyani";
// echo $nama;

//Perbandingan 
// <, >, <=, >=, ==, !=
// tidak mengecek tipe data
// var_dump(1 < 5);
// var_dump(1 == "1");

// //identitas
// // ===, !===
// var_dump(1 === "1");


// Logika 
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);

?>

    <!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p> <?php echo "ini adalah paragraf"; ?></p>

    <?php 
    echo "<h1>Halo,Selamat Datang Regita </h1> "
    ?>
</body>
</html>