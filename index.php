<?php
include "Mahasiswa.php";

    //untuk objek 1
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

    //untuk objek 2
$mahasiswa2 = new Mahasiswa ();
$mahasiswa2->setData('A11.2000.00001', 'Junior', 'Sistem Informasi');

echo "<h3>Data Mahasiswa:</h3>";
$mahasiswa1->tampilData();
$mahasiswa2->tampilData();
?>