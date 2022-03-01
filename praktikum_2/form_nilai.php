<?php

$_nama_lengkap = $_GET ['nama_lengkap'];
$_mata_kuliah = $_GET ['matkul'];
$_nilai_uts = $_GET ['nilai_uts'];
$_nilai_uas = $_GET ['nilai_uas'];
$_nilai_tugas = $_GET ['nilai_tugas'];

echo "<br>Nama : ".$_nama_lengkap;
echo "<br>Mata Kuliah : ".$_mata_kuliah;
echo "<br>Nilai UTS : ".$_nilai_uts;
echo "<br>Nilai UAS : ".$_nilai_uas;
echo "<br>Nilai Tugas praktikum : ".$_nilai_tugas;

?>