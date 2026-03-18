<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah ();
$matkul_2 = new MataKuliah ();

$matkul_1 -> setData ("A11.12345", "Pemrograman Berbasis Web");
$matkul_2 -> setData ("A11.12346", "Pemrograman Web Lanjut");

$mahasiswa_1 -> setData ("A11.2023.12345", "Aprilyani Nur Safitri", [$matkul_1, $matkul_2], "1998-05-18");

echo "<pre>";
print_r ($mahasiswa_1->getData());
echo "</pre>";