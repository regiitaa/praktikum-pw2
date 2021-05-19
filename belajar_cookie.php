<?php

$mahasiswa = [
    'nama'=>'Regita Dwi Cahyani',
    'nim'=> 'H110567319',
];

setcookie('nim','H110567319',time()+(86400 * 30), '/');

if (isset ($_COOKIE['nim'])) {
    echo $_COOKIE['nim'];
} else {
    echo "Cookienya tak ade";
}
