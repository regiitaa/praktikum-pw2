<?php
$host = 'localhost';
$user ='root';
$passwd ='yesuskristus';
$db = 'cybercampus';

$con = new mysqli($host,$user,$passwd,$db);

if ($con->connect_errno){
    printf('koneksi gagal: %s\n',$con->connect_errno());
    exit();

}


