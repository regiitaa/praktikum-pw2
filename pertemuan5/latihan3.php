<?php 
$mahasiswa = [
    ["Galih", "1234566", "Sistem Informasi", "sandhikagalih@unpas.ac.id"],
    ["Regita Dwi Cahyani", "H1101191019", "Sistem Informasi", "regitadwicahyani@student.untan.ac.id"],
    ["Yovi", "H1101191034", "Sistem Informasi", "yovi@gmail.com"]
];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurursan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html> 