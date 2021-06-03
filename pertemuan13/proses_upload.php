<?php
$nama_file = $_FILES['gambar']['name'];
$nama_sementara = $_FILES['gambar']['tmp_name'];
$folder_tujuan='gambar/';
echo $nama_file . '<br>';
$nama = date('Ymd') . basename($nama_file);

move_uploaded_file($nama_sementara,$folder_tujuan.$nama);