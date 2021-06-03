<?php
session_start();

$_SESSION['nama'] = "Regita Dwi";
$_SESSION['alamat'] = "Jl. Manunggal";
$_SESSION['nohp'] = "08345678889";

echo "Alamat saya adalah pada ". $_SESSION['alamat'];