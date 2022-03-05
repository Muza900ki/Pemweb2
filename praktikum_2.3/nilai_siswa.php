<?php

$_nama_lengkap = $_POST ['nama_lengkap'];
$_mata_kuliah = $_POST ['matkul'];
$_nilai_uts = $_POST ['nilai_uts'];
$_nilai_uas = $_POST ['nilai_uas'];
$_nilai_tugas = $_POST ['nilai_tugas'];

echo "<br>Nama : ".$_nama_lengkap;
echo "<br>Mata Kuliah : ".$_mata_kuliah;
echo "<br>Nilai UTS : ".$_nilai_uts;
echo "<br>Nilai UAS : ".$_nilai_uas;
echo "<br>Nilai Tugas praktikum : ".$_nilai_tugas;

?>